<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'period',
        'hasCanteen',
        'canteen_pay',
        'hasTransport',
        'transport_pay',
        'subscription_id',
        'code'
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    public function getTotalAttribute()
    {
        return $this->attributes['canteen_pay'] + $this->attributes['transport_pay'];
    }

    public function regulations()
    {
        return $this->hasMany(Regulation::class);
    }

    public function getIsPaidAttribute()
    {
        $total = $this->attributes['canteen_pay'] + $this->attributes['transport_pay'];

        return $total === $this->regulations->sum('amount');
    }

    public function getCodeAttribute()
    {
        return (new Carbon())->year . str_pad($this->attributes['code'], 4, '0', STR_PAD_LEFT);
    }

    public function getTotalAmountPaidAttribute()
    {
        return $this->regulations->sum('amount');
    }
}
