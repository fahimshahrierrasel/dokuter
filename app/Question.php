<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body', 'patient_id', 'problem_type_id'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function problemType()
    {
        return $this->hasOne(ProblemType::class);
    }
}
