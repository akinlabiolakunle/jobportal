@extends('layouts.app')

@section('content')
    <div class="page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="banner-heading">Login</div>
                </div>
            </div>
        </div>
    </div>
    <main id="maincontent">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="userform">

                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="active border-right"><a href="#login"  role="tab" data-toggle="tab"> Log in</a></li>
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
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </main>
    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">{{ __('Login') }}</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    <form method="POST" action="{{ route('login') }}">--}}
    {{--                        @csrf--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

    {{--                                @error('email')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

    {{--                                @error('password')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <div class="col-md-6 offset-md-4">--}}
    {{--                                <div class="form-check">--}}
    {{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

    {{--                                    <label class="form-check-label" for="remember">--}}
    {{--                                        {{ __('Remember Me') }}--}}
    {{--                                    </label>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row mb-0">--}}
    {{--                            <div class="col-md-8 offset-md-4">--}}
    {{--                                <button type="submit" class="btn btn-primary">--}}
    {{--                                    {{ __('Login') }}--}}
    {{--                                </button>--}}

    {{--                                @if (Route::has('password.request'))--}}
    {{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--                                        {{ __('Forgot Your Password?') }}--}}
    {{--                                    </a>--}}
    {{--                                @endif--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
@endsection
