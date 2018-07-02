@extends('layouts.admin_panel')

@section('page_title', 'My Chambers')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h3 class="float-left">Chamber List</h3><a href="{{url("my_chambers/new_chamber")}}" class="btn btn-primary float-right">New Chamber</a></div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">GPS Longitude</th>
                        <th scope="col">GPS Latitude</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($chambers as $chamber)
                        <tr>
                            <td>{{ $chamber->name }}</td>
                            <td>{{ $chamber->location }}</td>
                            <td>{{ $chamber->gps_lat }}</td>
                            <td>{{ $chamber->gps_long }}</td>
                            <td class="text-center">
                                <a href="{{url("my_chambers/$chamber->id")}}" class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{url("my_chambers/$chamber->id")}}" class="btn btn-danger">
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