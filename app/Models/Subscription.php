<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'date',
        'school_class_id',
        'school_year_id',
        'pupil_id',
        'canteen_id',
        'transport_id'
    ];

    public function pupil()
    {
        return $this->belongsTo('App\Models\Pupil');
    }

    public function school_class()
    {
        return $this->belongsTo('App\Models\SchoolClass');
    }

    public function school_year()
    {
        return $this->belongsTo('App\Models\SchoolYear');
    }

    public function canteen()
    {
        return $this->belongsTo('App\Models\Canteen');
    }

    public function transport()
    {
        return $this->belongsTo('App\Models\Transport');
    }

    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice');
    }

    public function canteenValidities()
    {
        return $this->hasMany('App\Models\CanteenValidity');
    }

    public function transportValidities()
    {
        return $this->hasMany('App\Models\TransportValidity');
    }

    public function dateToFormattedDateString()
    {
        return Carbon::parse($this->date)->toFormattedDateString();
    }

    public function getDebtAttribute()
    {
        $invoiceId = $this->invoices()->latest()->first()->id;

        $invoices = $this->invoices->filter(function ($item) use ($invoiceId) {
            return $item->is_paid == false && $invoiceId !== $item->id;
        });
        $sum = 0;
        $invoices->each(function ($item) use (&$sum) {
            $sum += $item->total;
        });
        return $sum;
    }
}
