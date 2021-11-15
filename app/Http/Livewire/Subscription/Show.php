<?php

namespace App\Http\Livewire\Subscription;

use App\Models\Canteen;
use App\Models\CanteenValidity;
use App\Models\InvoiceNumber;
use App\Models\Pupil;
use App\Models\SchoolClass;
use App\Models\SchoolYear;
use App\Models\Subscription;
use App\Models\Transport;
use App\Models\TransportValidity;
use App\Models\Tutor;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Show extends Component
{
    use WithPagination;

    public $code;
    public $newSubscription;
    public $pupils;
    public $tutors;
    public $search;
    public $hasCanteen = false;
    public $hasTransport = false;
    public $confirmingSubscriptionDeletion = false;
    public $confirmingSubscriptionAdd = false;
    private $subscriptions = [];
    public $confirmingBilling = false;
    public $billingDate;
    public $billingYear;

    public function mount()
    {
        $this->pupils = Pupil::all();
        $this->tutors = Tutor::all();
        $this->newSubscription = [];
    }

    public function render()
    {
        return view('livewire.subscription.show', [
            'subscriptions' => Subscription::paginate(10),
            'school_years' => $this->getSchoolYears(),
            'school_classes' => $this->getSchoolClasses(),
            'canteens' => $this->getCanteens(),
            'transports' => $this->getTransports(),
        ]);
    }

    public function makeBill()
    {
        $year = SchoolYear::where('designation', $this->billingYear)->first();
        $piecesOfDate = explode('-', $year->designation);
        $count = 0;
        $piecesOfDate[0] = Carbon::create($piecesOfDate[0], 10, 1);
        $piecesOfDate[1] = Carbon::create($piecesOfDate[1], 7, 31);
        $subscriptions = Subscription::with(['invoices' => function ($query) use ($piecesOfDate) {
            $query
                ->whereBetween('period', [$piecesOfDate[0], $piecesOfDate[1]])
                ->orderBy('created_at', 'desc');
        }])->get();

        $this->billingDate = new Carbon($this->billingDate);

        // 1 - Verifier si la periode de facturation est pris en compte par l'année en cours
        $isBillinPeriodIncluded = $this->billingDate->between($piecesOfDate[0], $piecesOfDate[1]);

        // 2 - Vérifier si le mois de la date de facturation est inférieur ou égale au mois actuel
        $isBillinMonthLowerOrEqualToCurrentMonth = $this->billingDate->month <= Carbon::now()->month;

        // 3 - Créer des facturations pour des élèves qui n'ont pas de facturation pour la période de facturation
        if ($isBillinPeriodIncluded && $isBillinMonthLowerOrEqualToCurrentMonth) {
            $subscriptions->map(function ($subscription) use (&$count) {
                $invoice = $subscription->invoices->first();
                $hasInvoice = $invoice !== null;
                $hasCanteen = $subscription->canteen_id !== null;
                $hasTransport = $subscription->transport_id !== null;

                $canteenValidityUpdatedAt = $subscription
                    ->canteenValidities()
                    ->orderBy('id', 'desc')->first()->updated_at;

                $transportValidityUpdatedAt = $subscription
                    ->transportValidities()
                    ->orderBy('id', 'desc')->first()->updated_at;

                $isCanteenActive = 
                    $hasCanteen && !$canteenValidityUpdatedAt ?? null;

                $isTransportActive = 
                    $hasTransport && !$transportValidityUpdatedAt ?? null;

                if ($hasInvoice === false && ($hasCanteen || $hasTransport)) {
                    
                    $createdInvoice = $subscription->invoices()->create([
                        'date' => Carbon::now(),
                        'period' => $this->billingDate,
                        'hasCanteen' => $isCanteenActive,
                        'canteen_pay' => $isCanteenActive ? $subscription->canteen->monthly_payment : 0,
                        'hasTransport' => $isTransportActive,
                        'transport_pay' => $isTransportActive ? $subscription->transport->monthly_payment : 0,
                    ]);
                    $lastInvoiceNumber = InvoiceNumber::orderBy('id', 'desc')->first();
                    $lastNumber = 0;

                    if ($lastInvoiceNumber) {
                        if ($lastInvoiceNumber->created_at->year === (new Carbon())->year) {
                            $lastNumber = $lastInvoiceNumber->number + 1;
                            $lastInvoiceNumber->update([
                                'number' => $lastNumber,
                            ]);
                            $lastInvoiceNumber->save();
                        } else {
                            InvoiceNumber::create([
                                'number' => $lastNumber,
                                'invoice_id' => $createdInvoice->id,
                            ]);
                        }
                    }
                    $count++;
                }
            });
            session()->flash('message', "$count facture(s) générée(s).");
        }
        $this->confirmingBilling = false;

        // Pour imprimer, on choisi l'année scolaire, la classe et la periode
        session()->flash('error', 'Il n\'y a aucune fature a généré.');
    }

    public function confirmSubscriptionAdd()
    {
        $this->resetErrorBag();
        $this->reset(['newSubscription']);
        $this->newSubscription = [];
        $this->confirmingSubscriptionAdd = true;
    }

    public function confirmSubscriptionDeletion($id)
    {
        $this->confirmingSubscriptionDeletion = $id;
    }

    public function deleteSusbcription(Subscription $subscription)
    {
        dd($subscription);
    }

    public function confirmSubscriptionEdit(Subscription $subscription)
    {
        $this->resetErrorBag();
        $this->newSubscription = $subscription;
        $this->confirmingSubscriptionAdd = true;
    }

    public function saveSubscription()
    {

        if (!isset($this->newSubscription['year'])) {
            $this->addError('newSubscription.year', 'L\'année scolaire est obligatoire.');
        }
        if (!isset($this->newSubscription['date'])) {
            $this->addError('newSubscription.date', 'La date de l\'inscription est obligatoire.');
        }
        if (!isset($this->newSubscription['pupil'])) {
            $this->addError('newSubscription.pupil', 'Le choix de l\'élève est obligatoire.');
        }
        if (!isset($this->newSubscription['class'])) {
            $this->addError('newSubscription.class', 'La classe est obligatoire.');
        }
        if ($this->hasCanteen) {
            if (!isset($this->newSubscription['canteen'])) {
                $this->addError('newSubscription.canteen', 'Le choix du cantine est obligatoire.');
            }
            if (!isset($this->newSubscription['canteenDate'])) {
                $this->addError('newSubscription.canteenDate', 'Vous devez rentrer la date de validité de la cantine.');
            }
        }
        if ($this->hasTransport) {
            if (!isset($this->newSubscription['transport'])) {
                $this->addError('newSubscription.transport', 'Le choix du transport est obligatoire.');
            }
            if (!isset($this->newSubscription['transportDate'])) {
                $this->addError('newSubscription.transportDate', 'Vous devez rentrer la date de validité du transport.');
            }
        }
        $this->confirmingSubscriptionAdd = false;
        if ($this->errorBag->isEmpty()) {   
            DB::beginTransaction();
            try {
                $subscription = new Subscription;
                $canteenValidity = $this->hasCanteen ? $this->newSubscription['canteenDate'] : null;
                $transportValidity = $this->hasTransport ? $this->newSubscription['transportDate'] : null;
                if ($canteenValidity) {
                    $canteen = Canteen::where('designation', $this->newSubscription['canteen'])->first();
                    if ($canteen) {
                        $subscription->canteen_id = $canteen->id;
                    }
                }
                if ($transportValidity) {
                    $position = strpos($this->newSubscription['transport'], '(');
                    $designation = substr($this->newSubscription['transport'], 0, $position-1);
                    $transport = Transport::where('zone', $designation)->first();
                    if ($transport) {
                        $subscription->transport_id = $transport->id;
                    }
                }
                $year = SchoolYear::where('designation', $this->newSubscription['year'])->first();
                $class = SchoolClass::where('designation', $this->newSubscription['class'])->first();
                if ($year && $class) {
                    $subscription->school_year_id = $year->id;
                    $subscription->school_class_id = $class->id;
                }
                $start_pos = strpos($this->newSubscription['pupil'], '(') + 1;
                $pupil = Pupil::where('code', substr($this->newSubscription['pupil'], $start_pos, -1))->first();
                if ($pupil) {
                    $subscription->pupil_id = $pupil->id;
                }
                $subscription->code = Str::random(10);
                $subscription->date = Carbon::createFromDate($this->newSubscription['date']);
                $subscription->save();
                if ($canteenValidity) {
                    CanteenValidity::create([
                        'subscription_id' => $subscription->id,
                        'created_at' => $canteenValidity,
                    ]);
                }
                if ($transportValidity) {
                    TransportValidity::create([
                        'subscription_id' => $subscription->id,
                        'created_at' => $transportValidity,
                    ]);
                }
                DB::commit();
                session()->flash('message', 'Inscription enregistrée avec succès.');
            } catch (\Exception $e) {
                DB::rollBack();
            }
        }
    }

    public function perfomrSearch()
    {
        $this->search['test'] = 'test';
        if ($this->search) {
            $this->subscriptions = Subscription::where('code', 'like', '%'.$this->search['code'].'%')
                ->paginate(10);
        }
        $this->reset(['search']);
        $this->render();
    }

    public function toggleCanteen()
    {
        $this->hasCanteen = ! $this->hasCanteen;
    }

    public function toggleTransport()
    {
        $this->hasTransport = ! $this->hasTransport;
    }

    private function getSchoolYears()
    {
        return SchoolYear::all();
    }

    private function getSchoolClasses()
    {
        return SchoolClass::all();
    }

    private function getCanteens()
    {
        return Canteen::all();
    }

    private function getTransports()
    {
        return Transport::all();
    }
}
