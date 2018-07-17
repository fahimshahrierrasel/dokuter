@extends('admin.layouts.admin_panel')

@section('page_title', 'Doctors')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h3 class="float-left">Doctors List</h3></div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Joined</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $doctor)
                        <tr>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->username }}</td>
                            <td>{{ $doctor->email }}</td>
                            <td>{{ $doctor->created_at }}</td>
                            <td class="text-center">
                                <a href="{{url("/admin/doctors/$doctor->id")}}" class="btn btn-primary">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                <a href="{{url("/admin/doctors/$doctor->id")}}" class="btn btn-danger">
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