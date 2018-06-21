@extends('layouts.admin_panel')

@section('page_title', 'Questions')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>
                    {{ $question->title }}
                </h3>
                <div>
                    <p class="blog-post-meta font-italic">{{$question->created_at->diffForHumans()}} by <a
                                href="#">{{ $question->patient->patient_name }}</a></p>
                    <p>
                        {{ $question->body }}
                    </p>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header"><label for="question_response"> Your Response</label></div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                            <textarea class="form-control" id="question_response" name="question_response"
                                      rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary text-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <h2>Other Responses</h2>
        <div class="row">
            @foreach($question->answers as $answer)
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Answered by {{ $answer->user->name }}, {{ $answer->created_at->diffForHumans() }}
                        </div>
                        <div class="card-body">
                            <p>
                                {{ $answer->answer }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection