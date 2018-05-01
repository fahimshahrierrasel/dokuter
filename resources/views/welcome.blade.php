@extends('layouts.landing_template')

@section('content')
    <div class="page-header header-filter" filter-color="purple" data-parallax="true" style=" background-image: url('{{ asset('img/welcome-bg.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Dokuter</h1>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</h4>
                    <br>
                    <a href="#" target="_blank" class="btn bg-light text-dark btn-raised btn-lg btn-round">
                        Get <i class="fa fa-android" style="font-size: 2em; color: #A4C639; padding: 5px;"></i> App
                    </a>
                    <a href="#" target="_blank" class="btn bg-light text-dark btn-raised btn-lg btn-round">
                        Get <i class="fa fa-apple" style="font-size: 2em; color: black; padding: 5px;"></i> App
                    </a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/example1.png') }}" style="width:500px;height:500px">
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">Why Is It Special?</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
                    </div>
                </div>
                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="material-icons">chat</i>
                                </div>
                                <h4 class="info-title">Free Chat</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <h4 class="info-title">Verified Users</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">business_center</i>
                                </div>
                                <h4 class="info-title">Data Protection</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-warning">
                                    <i class="material-icons">airline_seat_flat</i>
                                </div>
                                <h4 class="info-title">Diagnosis Result</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="material-icons">event_note</i>
                                </div>
                                <h4 class="info-title">Prescription</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">local_shipping</i>
                                </div>
                                <h4 class="info-title">Medicine Delivery</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabs with icons on Card -->
            <div class="card card-nav-tabs">
                <div class="card-header card-header-info">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#profile" data-toggle="tab">
                                        <i class="material-icons">chat</i> Chat With Doctor
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#messages" data-toggle="tab">
                                        <i class="material-icons">shopping_cart</i> Order Medicine
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#settings" data-toggle="tab">
                                        <i class="material-icons">assignment</i> View Medical Records
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#mc" data-toggle="tab">
                                        <i class="material-icons">pregnant_woman</i> Mother Care
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#bd" data-toggle="tab">
                                        <i class="material-icons">format_color_reset</i> Afraid Of Blood Donation
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="tab-content text-center">
                        <div class="tab-pane active" id="profile">
                            <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                        </div>
                        <div class="tab-pane" id="messages">
                            <p> I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people.</p>
                        </div>
                        <div class="tab-pane" id="settings">
                            <p>I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it&#x2019;s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                        </div>
                        <div class="tab-pane" id="mc">
                            <p>I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it&#x2019;s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture.</p>
                        </div>
                        <div class="tab-pane" id="bd">
                            <p>I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it&#x2019;s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tabs with icons on Card -->
            <div class="">
                <div class="container">
                    <div class="section text-center">
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto">
                                <!-- Tabs with icons on Card -->
                                <div class="card card-nav-tabs">
                                    <div class="card-body ">
                                        <div class="tab-content text-center">
                                            <div class="tab-pane active">
                                                <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="d-block" src="{{ asset('img/bg1.png') }}" alt="First slide" style="width:100%;height:100%">
                            </div>
                            <!-- End Tabs with icons on Card -->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="d-block" src="{{ asset('img/bg2.png') }}" alt="First slide" style="width:100%;height:100%">
                            </div>
                            <div class="col-md-6 ml-auto mr-auto">
                                <!-- Tabs with icons on Card -->
                                <div class="card card-nav-tabs">
                                    <div class="card-body ">
                                        <div class="tab-content text-center">
                                            <div class="tab-pane active">
                                                <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that&#x2019;s a responsibility that I have, to push possibilities, to show people. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tabs with icons on Card -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert alert-success">
                <div class="container">
                    <div class="alert-icon">
                        <i class="material-icons">check</i>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    <b>SignUp Now </b>Yeah! You'll get $100 reward for that isn't that cool.
                </div>
            </div>
            <div class="section text-center">
                <h2 class="title">App Screeshots</h2>
                <!--         carousel  -->
                <div class="section" id="carousel">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 mr-auto ml-auto">
                                <!-- Carousel Card -->
                                <div class="card card-raised card-carousel">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block" src="{{ asset('img/se1.png') }}" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" src="{{ asset('img/se2.png') }}" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" src="{{ asset('img/se3.png') }}" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <i class="material-icons">keyboard_arrow_left</i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <i class="material-icons">keyboard_arrow_right</i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Carousel Card -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--         end carousel -->
            </div>
            <div class="section section-contacts">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center title">Contact us</h2>
                        <h4 class="text-center description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</h4>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Your Name</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Your Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto text-center">
                                    <button class="btn btn-primary btn-raised">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.title = "Dokuter";

        const body = document.getElementsByTagName("body")[0];
        body.classList.add("landing-page");

        const nav = document.getElementById("sectionsNav");
        nav.classList.add("navbar-color-on-scroll");
        nav.classList.add("fixed-top");
    </script>
@endsection