<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    //

    public function users()
    {
        $this->belongsToMany(User::class);
    }
}
