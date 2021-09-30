<?php

namespace App\Http\Livewire\Subscription;

use App\Models\Canteen;
use App\Models\CanteenValidity;
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
    public $hasCanteen = false;
    public $hasTransport = false;
    public $confirmingSubscriptionDeletion = false;
    public $confirmingSubscriptionAdd = false;

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

    public function search()
    {}

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
