@extends('doctor.layouts.admin_panel')

@section('page_title', 'My Schedules')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h3 class="float-left">Schedules List</h3><a
                        href="{{url("my_schedules/new_schedule")}}" class="btn btn-primary float-right">New
                    Schedules</a></div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Chamber</th>
                        <th scope="col">Day</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schedules->get() as $schedule)
                        <tr>
                            <td>{{ $schedule->chamber->name }}</td>
                            <td>{{ $schedule->weekday }}</td>
                            <td>{{ $schedule->start_time }}</td>
                            <td>{{ $schedule->end_time }}</td>
                            <td class="text-center">
                                <a href="{{url("my_chambers/$schedule->id")}}" class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{url("my_chambers/$schedule->id")}}" class="btn btn-danger">
                                    <i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection