<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    protected $fillable = ['patientUUID', 'patient_name', 'gender', 'blood_group', 'dob'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
