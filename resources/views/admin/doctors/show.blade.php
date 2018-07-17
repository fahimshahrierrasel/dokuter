@extends('admin.layouts.admin_panel')

@section('page_title', 'Doctors')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h3 class="float-left">{{ $user->name }}</h3></div>
            <div class="card-body">
                <h5>Doctor Chambers</h5>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($chambers as $chamber)
                        <tr>
                            <td>{{ $chamber->name }}</td>
                            <td>{{ $chamber->location }}</td>
                            <td>{{ $chamber->gps_lat }}</td>
                            <td>{{ $chamber->gps_long }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <h5>Doctor Schedules</h5>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Chamber</th>
                        <th scope="col">Day</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schedules as $schedule)
                        <tr>
                            <td>{{ $schedule->chamber->name }}</td>
                            <td>{{ $schedule->weekday }}</td>
                            <td>{{ $schedule->start_time }}</td>
                            <td>{{ $schedule->end_time }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection