@extends('layouts.admin_panel')

@section('page_title', 'My Chambers')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">New Chamber</div>
            <div class="card-body">
                <form method="POST" action="{{ url('/my_chambers') }}">
                    @csrf
                    <div class="form-group">
                        <label for="chamberName">Chamber Name <span class="text-danger">*</span></label>
                        <input class="form-control" id="chamberName" name="name" placeholder="Name..." required>
                    </div>
                    <div class="form-group">
                        <label for="chamberLocation">Chamber Address <span class="text-danger">*</span></label>
                        <input class="form-control" id="chamberLocation" name="location" placeholder="Address" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="gpsLatitude">GPS Latitude <span class="text-danger">*</span></label>
                            <input class="form-control" id="gpsLatitude" name="gps_lat" placeholder="Latitude (Ex: 123.21212)" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gpsLongitude">GPS Longitude <span class="text-danger">*</span></label>
                            <input class="form-control" id="gpsLongitude" name="gps_long" placeholder="Longitude (Ex: 123.21212)" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection