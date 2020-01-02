@extends('layouts.app')

@section('content')
    <div class="page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading">Login / Sign Up</div>
                </div>
            </div>
        </div>
    </div>
    <main id="maincontent">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="page-tab">
                        <div id="form">
                            <div id="userform">
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="active border-right"><a href="#login"  role="tab" data-toggle="tab">Log in</a></li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="login">
                                        <div class="row">
                                            <div class="social_button col-md-6 col-sm-6 text-center">
                                                <a href="#" class="facebook btn-block"><i class="fa fa-facebook-square"></i> Login with Faceboook</a>
                                            </div>
                                            <div class="social_button col-md-6 col-sm-6 text-center">
                                                <a href="#" class="facebook twitter btn-block"><i class="fa fa-twitter-square"></i> Login with Twiiter</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="social_button col-md-6 col-sm-6 text-center">
                                                <a href="#" class="facebook google btn-block"><i class="fa fa-google-plus-square"></i> Login with Google+</a>
                                            </div>
                                            <div class="social_button col-md-6 col-sm-6 text-center">
                                                <a href="#" class="facebook linked btn-block"><i class="fa fa-linkedin-square"></i> Login with Linked In</a>
                                            </div>
                                        </div>
                                        <form id="login">
                                            <div class="form-group">
                                                <label> Username or E-mail</label>
                                                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                                                <div class="search_icon"><span class="ti-user"></span></div>
                                            </div>
                                            <div class="form-group">
                                                <label> Password</label>
                                                <input type="password" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                                                <div class="search_icon"><span class="ti-pin"></span></div>
                                            </div>
                                            <div class="mrgn-30-top">
                                                <button type="submit" class="btn btn-larger btn-block"/>Log in</button>
                                            </div>
                                        </form>
                                        <p>Not Yet Registered ? Register at the navbar </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
