<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function chamber()
    {
        return $this->belongsTo(Chamber::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
