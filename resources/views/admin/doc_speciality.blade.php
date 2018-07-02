@extends('layouts.admin_panel')

@section('page_title', 'My Speciality')

@section('content')
    <div class="row">
        <div class="col-6">
            <h1>Your Specialities</h1>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Speciality</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($doc_specialties as $speciality)
                        <tr>
                            <td>{{ $speciality->name }}</td>
                            <td>
                                <form method="POST" action="{{url("my_specialities/$speciality->id")}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <ul>

            </ul>
        </div>
        <div class="col-6">
            <h1>Select Your Specialities</h1>
            <form method="POST" action="{{ url('/my_specialities') }}">
                @csrf
                <div class="form-group">
                    <label for="specialitySelect">Specialities</label>
                    <select class="form-control" name="speciality" id="specialitySelect">
                        @foreach($specialities as $speciality)
                            <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary text-right">Submit</button>
            </form>
        </div>
    </div>
@endsection