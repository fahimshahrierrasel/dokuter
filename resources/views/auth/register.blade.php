@extends('layouts.landing_template')

@section('title', 'Register | Dokuter')

@section('content')
    <div class="page-header header-filter" filter-color="purple" data-parallex="true"
         style="background-size: cover; background: url('{{ asset('img/bg7.jpg') }}') top center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="card card-signup">
                        <h2 class="card-title text-center">{{ __('Register') }}</h2>
                        <div class="card-body">
                            <div>
                                <div class="social text-center">
                                    <button class="btn btn-just-icon btn-round btn-google-plus">
                                        <i class="fa fa-google"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-facebook">
                                        <i class="fa fa-facebook-f"> </i>
                                    </button>
                                    <h4> or be classical </h4>
                                </div>
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        <div>
                                            <div class="alert-icon">
                                                <i class="material-icons">check</i>
                                            </div>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                            </button>
                                            {{ Session::get("message") }}
                                        </div>
                                    </div>
                                @elseif(session()->has('error'))
                                    <div class="alert alert-danger">
                                        <div>
                                            <div class="alert-icon">
                                                <i class="material-icons">check</i>
                                            </div>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                            </button>
                                            {{ Session::get("error") }}
                                        </div>
                                    </div>
                                @endif
                                <form class="form" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                       <i class="fa fa-user-circle-o"></i>
                                                    </span>
                                            </div>
                                            <input id="name" type="text"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   name="name" placeholder="{{ __('Name') }}" value="{{ old('name') }}"
                                                   required>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                       <i class="fa fa-user"></i>
                                                    </span>
                                            </div>
                                            <input id="username" type="text"
                                                   class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                                   name="username" value="{{ old('username') }}"
                                                   placeholder="{{ __('Username') }}" required>

                                            @if ($errors->has('username'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                            </div>
                                            <input id="email" type="email"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   name="email" value="{{ old('email') }}"
                                                   placeholder="{{ __('Email') }}">

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-lock"></i>
                                                    </span>
                                            </div>
                                            <input id="password" type="password"
                                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                   name="password" placeholder="Password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                            </div>
                                            <input id="password-confirm" type="password" class="form-control"
                                                   name="password_confirmation" placeholder="Password Confirm" required>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            I agree to the
                                            <a href="#">terms and conditions</a>.
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-primary btn-round btn-lg"
                                               value="Get Started">
                                    </div>
                                </form>
                                <div class="text-center">
                                    <span>Already have an account? <a href="{{ route('login') }}">Login</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_script')
    <script>
        $().ready(function () {
            const body = document.getElementsByTagName("body")[0];
            body.classList.add("signup-page");
            const footer = document.getElementsByTagName("footer")[0];
            footer.classList.add("d-none");
            const nav = document.getElementById("sectionsNav");
            nav.classList.add("navbar-absolute");
        });
    </script>
@endsection