<?php

namespace App\Models;

use App\Traits\HasSubscriptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canteen extends Model
{
    use HasFactory;
    use HasSubscriptions;

    protected $fillable = ['designation', 'inscription', 'monthly_payment'];
}
