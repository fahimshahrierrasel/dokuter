<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function store(Request $request)
    {
        Patient::create($request->all());
        $insertedPatient = (new Patient)->latest()->first();
        return response()->json($insertedPatient, 201);
    }

    public function getPatient($uid)
    {
        $patient = (new Patient)->where('patientUUID', '=', $uid)->first();
        return response()->json($patient, 200);
    }
}
