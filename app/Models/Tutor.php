<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'civility', 'phone1', 'phone2'];

    public function pupils()
    {
        return $this->hasMany(Pupil::class);
    }
}
