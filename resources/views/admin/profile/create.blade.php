@extends('layouts.admin_panel')

@section('page_title', 'Update Profile')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Update Profile</div>
            <div class="card-body">
                <form method="POST" action="{{ url('/my_profile') }}">
                    @csrf
                    <div class="form-group">
                        <label for="education">Education <span class="text-danger">*</span></label>
                        <input class="form-control" id="education" name="education" placeholder="Education..." required>
                    </div>
                    <div class="form-group">
                        <label for="experience">Experience <span class="text-danger">*</span></label>
                        <input class="form-control" id="experience" name="experience" placeholder="Experience..." required>
                    </div>
                    <div class="form-group">
                        <label for="docImage">Your Image</label>
                        <input class="form-control" type="file" name="doc_image" id="docImage">
                    </div>

                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection