<?php

namespace App\Http\Controllers;

use App\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorSpecialitiesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $specialities = Speciality::all();
        $doc_specialties = $user->speciality;
        return view('doctor.doc_speciality', compact('specialities', 'doc_specialties'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $user->speciality()->sync([
            $request['speciality']
        ], false);
        return redirect("/doctor/my_specialities");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        $user->speciality()->detach($id);

        return redirect("/doctor/my_specialities");
    }
}
