@extends('layouts.admin_panel')

@section('page_title', 'Questions')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    All Questions
                </h3>
                @foreach($questions as $question)
                    <div class="blog-post">
                        <h2 class="blog-post-title"><a
                                    href="{{ url('questions/'.$question->id) }}">{{ $question->title }}</a></h2>
                        <p class="blog-post-meta">{{$question->created_at->diffForHumans()}} by <a
                                    href="#">{{ $question->patient->patient_name }}</a></p>
                        <p>
                            {{ str_limit($question->body, 100) }}...
                        </p>
                        <a href="{{ url('questions/'.$question->id) }}" class="btn btn-info text-white">Read More</a>
                    </div><!-- /.blog-post -->
                    <hr>
                @endforeach
                <br>
                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>
            </div><!-- /.blog-main -->
        </div>
    </div>
@endsection