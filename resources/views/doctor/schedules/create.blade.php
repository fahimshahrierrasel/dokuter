@extends('doctor.layouts.admin_panel')

@section('page_title', 'My Schedules')
@section('custom_css')
    <link href="{{ asset('css/wickedpicker.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">New Schedules</div>
            <div class="card-body">
                <form method="POST" action="{{ url('/doctor/my_schedules') }}">
                    @csrf
                    <div class="form-group">
                        <label for="chamberSelect">Select Chamber</label>
                        <select class="form-control" name="chamber_id" id="chamberSelect" >
                            @foreach($chambers as $chamber)
                                <option value="{{ $chamber->id }}">{{ $chamber->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="daySelect">Select Day</label>
                        <select class="form-control" name="weekday" id="daySelect" >
                            <option>Sunday</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="startTime">From (Starting Time)<span class="text-danger">*</span></label>
                            <input type="text" id="startTime" name="start_time" class="form-control timepicker" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="endTime">To (Ending Time) <span class="text-danger">*</span></label>
                            <input id="endTime" name="end_time" class="form-control timepicker" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('custom_scripts')
    <script type="text/javascript" src="{{ asset('js/wickedpicker.min.js') }}"></script>
    <script>
        $('.timepicker').wickedpicker();
    </script>
@endsection