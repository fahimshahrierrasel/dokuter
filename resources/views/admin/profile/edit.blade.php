@extends('layouts.admin_panel')

@section('page_title', 'Update Profile')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Update Profile</div>
            <div class="card-body">
                <form method="POST" action="{{ url('/my_profile') }}/{{ $profile->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="education">Education <span class="text-danger">*</span></label>
                        <input class="form-control" id="education" name="education" value="{{ $profile->education }}" required>
                    </div>
                    <div class="form-group">
                        <label for="experience">Experience <span class="text-danger">*</span></label>
                        <input class="form-control" id="experience" name="experience" value="{{ $profile->experience }}" required>
                    </div>
                    <div class="form-group">

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="profile_pic">Current Picture</label><br>
                            <img class="img-thumbnail" id="profile_pic" src="{{ asset('/images/profile_pics/'.$profile->pic) }}" alt="Profile Picture"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="docImage">Your Image</label>
                            <input class="form-control" type="file" name="doc_image" id="docImage">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection