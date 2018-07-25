<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    //
    public function getSpecialities()
    {
        $specialities = Speciality::all('id', 'name');
        return response()->json($specialities, 200);
    }
}
