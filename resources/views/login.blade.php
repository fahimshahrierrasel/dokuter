@extends('layouts.landing_template')

@section('content')
    <div class="page-header header-filter" filter-color="purple" data-parallex="true"
         style="background-size: cover; background: url('{{ asset('img/bg7.jpg') }}') top center">
        <div class="container">
            <div class="row">
                <div class="col-md-5 ml-auto mr-auto">
                    <div class="card card-signup">
                        <h2 class="card-title text-center">Login</h2>
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
                                <form class="form" method="" action="">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Email...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-lock"></i>
                                                    </span>
                                            </div>
                                            <input type="password" placeholder="Password..." class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <input type="submit" class="btn btn-primary btn-round btn-lg" value="Login">
                                    </div>
                                </form>
                                <span>Don't have an account yet?</span> <a href="register">Register</a>
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
        document.title = "Login - Dokuter";

        const body = document.getElementsByTagName("body")[0];
        body.classList.add("signup-page");

        const footer = document.getElementsByTagName("footer")[0];
        footer.classList.add("d-none");

        const nav = document.getElementById("sectionsNav");
        nav.classList.add("navbar-absolute");
    </script>
@endsection