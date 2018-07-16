<?php

namespace App\Http\Controllers;

use App\DoctorProfile;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use PhpParser\Comment\Doc;

class DoctorProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $profile = (new DoctorProfile)->where('user_id', $user->id)->first();

        if ($profile != null) {
            return view('doctor.profile.index', compact('user', 'profile'));
        }
        return redirect()->route('doc_profile_create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $profile = (new DoctorProfile)->where('user_id', $user->id)->first();
        if ($profile != null) {
            return redirect()->to('/my_profile/edit/'.$profile->id);
        } else {
            return view('doctor.profile.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $newProfile = new DoctorProfile();

        $newProfile->education = $request['education'];
        $newProfile->experience = $request['experience'];

        if ($file = $request->file('doc_image')) {
            $photo_name = time() . $request->file('doc_image')->getClientOriginalName();
            $file->move('images/profile_pics', $photo_name);
            $newProfile->pic = $photo_name;
        }

        $user->doctor_profile()->save($newProfile);

        return redirect()->route('doc_profile');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = DoctorProfile::findOrFail($id);
        return view('doctor.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $currentProfile = DoctorProfile::findOrFail($id);
        $currentProfile->education = $request['education'];
        $currentProfile->experience = $request['experience'];

        if ($request->hasFile('doc_image')) {
            $file = $request->file('doc_image');
            $photo_name = $request->file('doc_image')->getClientOriginalName();
            $file->move(public_path('images/profile_pics'), $photo_name);
            $currentProfile->pic = $photo_name;
        }

        $currentProfile->save();
        return redirect()->route('doc_profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
