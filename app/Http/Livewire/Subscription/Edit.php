<?php

namespace App\Http\Livewire\Subscription;

use App\Models\Canteen;
use App\Models\CanteenValidity;
use App\Models\SchoolClass;
use App\Models\SchoolYear;
use App\Models\Subscription;
use App\Models\Transport;
use App\Models\TransportValidity;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Edit extends Component
{
    public $subscription;
    public $canteenValidities;
    public $transportValidities;
    public $newSubscription;
    public $confirmingValidityAdd = false;
    public $isCanteen = false;
    public $isTransport = false;
    public $dateValidity;
    public $editMode = false;

    public function mount($id)
    {
        $this->subscription = Subscription::find($id)
            ->load('school_year')
            ->load('school_class')
            ->load('canteen')
            ->load('transport');
        $this->canteenValidities = CanteenValidity::where('subscription_id', $id)->orderBy('id', 'desc')->get();
        $this->transportValidities = TransportValidity::where('subscription_id', $id)->orderBy('id', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.subscription.edit', [
            'school_classes' => SchoolClass::all(),
            'school_years' => SchoolYear::all(),
            'canteens' => Canteen::all(),
            'transports' => Transport::all(),
        ]);
    }

    public function update()
    {
        if (isset($this->newSubscription['class'])) {
            $schoolClass = SchoolClass::where('designation', $this->newSubscription['class'])->first();
            if ($schoolClass) {
                $this->subscription['school_class_id'] = $schoolClass->id;
            }
        }

        if (isset($this->newSubscription['year'])) {
            $schoolYear = SchoolYear::where('designation', $this->newSubscription['year'])->first();
            if ($schoolYear) {
                $this->subscription['school_year_id'] = $schoolYear->id;
            }
        }

        if (isset($this->newSubscription['date'])) {
            $this->subscription->date = Carbon::parse($this->newSubscription['date']);
        }

        $this->subscription->save();
        $this->editMode = false;
        $this->mount($this->subscription->id);
    }

    public function closeValidity($type, $id)
    {
        $validity = $type === 'transport' ? $this->subscription->transportValidities()->find($id)
            : $this->subscription->canteenValidities()->find($id);
        $validity->updated_at = now();
        $validity->save();
    }

    public function confirmValidityAdd()
    {
        $isBefore = true;
        if ($this->isTransport) {
            $isBefore = $this->dateValidity < $this->transportValidities[0]->updated_at;
        }

        if ($this->isCanteen) {
            $isBefore = $this->dateValidity < $this->canteenValidities[0]->updated_at;
        }

        if (!$isBefore) {
            if ($this->isTransport) {
                TransportValidity::create([
                    'subscription_id' => $this->subscription->id,
                    'created_at' => $this->dateValidity,
                ]);
                $this->transportValidities = TransportValidity::where('subscription_id', $this->subscription->id)->orderBy('id', 'desc')->get();
            }
            if ($this->isCanteen) {
                CanteenValidity::create([
                    'subscription_id' => $this->subscription->id,
                    'created_at' => $this->dateValidity,
                ]);
                $this->canteenValidities = CanteenValidity::where('subscription_id', $this->subscription->id)->orderBy('id', 'desc')->get();
            }
        }
        $this->isTransport = false;
        $this->isCanteen = false;
        $this->confirmingValidityAdd = !$this->confirmingValidityAdd;
        $this->render();
    }

    public function setValidityAddValue($value)
    {
        if ($value === 'transport') {
            $this->isTransport = true;
            $this->isCanteen = false;
        } else if ($value === 'canteen') {
            $this->isCanteen = true;
            $this->isTransport = false;
        } else {
            $this->isTransport = false;
            $this->isCanteen = false;
        }
        $this->confirmingValidityAdd = !$this->confirmingValidityAdd;
    }

    public function redirectBack()
    {
        return redirect()->to('/subscriptions');
    }
}
