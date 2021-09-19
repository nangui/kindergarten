<?php

namespace App\Models;

use App\Traits\HasSubscriptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    use HasFactory;
    use HasSubscriptions;

    protected $fillable = ['designation'];
}
