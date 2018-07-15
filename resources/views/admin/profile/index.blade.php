@extends('layouts.admin_panel')

@section('page_title', 'Appointments')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $user->name }}'s Profile <a href="{{ url('/my_profile/edit') }}/{{ $profile->id }}" class="btn btn-outline-primary float-right">Edit</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <img class="img-thumbnail" id="profile_pic" src="{{ asset('/images/profile_pics/'.$profile->pic) }}" alt="Profile Picture"/>
                </div>
                <div class="col-9">
                    <table class="table table-borderless">
                        <tbody>
                        <tr>
                            <td>Education</td>
                            <td>{{ $profile->education }}</td>
                        </tr>
                        <tr>
                            <td>Experience</td>
                            <td>{{ $profile->experience }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection