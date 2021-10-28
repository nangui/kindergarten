<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class TransportValidity extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = ['subscription_id', 'created_at'];

    public function dateToFormattedDateString()
    {
        return Carbon::parse($this->created_at)->toFormattedDateString();
    }

    public function endDateToForamettedDateString()
    {
        return $this->updated_at ? Carbon::parse($this->updated_at)->toFormattedDateString() : null;
    }
}
