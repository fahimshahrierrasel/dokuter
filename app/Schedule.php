<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    public function chamber()
    {
        return $this->belongsTo(Chamber::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getChamberName(){
        $chamber = $this->chamber();
        return $chamber->name;
    }
}
