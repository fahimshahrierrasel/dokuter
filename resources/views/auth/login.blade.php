@extends('layouts.landing_template')

@section('title', 'Login | Dokuter')

@section('content')
    <div class="page-header header-filter" filter-color="purple" data-parallex="true"
         style="background-size: cover; background: url('{{ asset('img/bg7.jpg') }}') top center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="card card-signup">
                        <h2 class="card-title text-center">{{ __('Login') }}</h2>
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
                                    @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            <div>
                                                <div class="alert-icon">
                                                    <i class="material-icons">error_outline</i>
                                                </div>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                                </button>
                                                {{ Session::get("error") }}
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <form class="form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                            <input id="identity" type="identity"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   name="identity" value="{{ old('identity') }}" placeholder="Email or Username"
                                                   required>
                                            @if ($errors->has('identity'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('identity') }}</strong>
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
                                                   name="password" placeholder="Password..." required/>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                {{ __('Remember Me') }}
                                                <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-primary btn-round btn-lg" value="Login">
                                    </div>
                                </form>
                                <div class="text-center">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a><br>
                                    <span>Don't have an account yet?</span> <a href="{{ route('register') }}">Register</a>
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
        const body = document.getElementsByTagName("body")[0];
        body.classList.add("signup-page");
        const footer = document.getElementsByTagName("footer")[0];
        footer.classList.add("d-none");
        const nav = document.getElementById("sectionsNav");
        nav.classList.add("navbar-absolute");
    </script>
@endsection