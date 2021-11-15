<?php

namespace App\Models;

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
        'subscription_id'
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    public function code()
    {
        return $this->hasOne(InvoiceNumber::class);
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
}
