<?php

namespace App\Models;

use App\Traits\HasSubscriptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    use HasFactory;
    use HasSubscriptions;

    protected $fillable = ['first_name', 'last_name', 'code', 'genre', 'birth_date', 'tutor_id'];

    public function tutor()
    {
        return $this->belongsTo('App\Models\Tutor');
    }
}
