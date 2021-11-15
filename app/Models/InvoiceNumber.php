<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceNumber extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'invoice_id'];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function getNumberAttribute($value)
    {
        return (new Carbon())->year . str_pad($value, 4, '0', STR_PAD_LEFT);
    }
}
