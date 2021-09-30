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

    public function subscriptions()
    {
        return $this->hasMany('App\Models\Subscription');
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getTutorFullNameAttribute()
    {
        return "{$this->tutor->first_name} {$this->tutor->last_name}";
    }
}
