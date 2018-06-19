@extends('layouts.admin_panel')

@section('page_title', 'Appointments')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $user->name }}'s Profile
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    {{--<h5>{{ $user->name }}</h5>--}}
                    <img src="https://picsum.photos/200/200" alt="..." class="rounded-circle p-3" style="height: 200px">
                    <form>
                        <div class="form-group">
                            <input type="file" class="form-control-file" id="profilePictureControl">
                        </div>
                    </form>
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