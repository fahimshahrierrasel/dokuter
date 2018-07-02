<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
