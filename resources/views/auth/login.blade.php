
@extends('frontend.frontend_master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('forntend/styles/contact_responsive.css') }}">

  <div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1  rounded p-3 "style="border:2px solid #0984e3; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <div class="contact_form_container">
                    <div class="contact_form_title text-center">Sign In</div>

                    <form method="POST" id="contact_form" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                        @csrf
                            <div class="form-group">
                              <label for="">Email</label>
                              <input type="email" name="email" id="" class="form-control" placeholder="Enter E-mail">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
                              </div>

                              <div class="form-group">
                                <a href="#">---></a>
                                <a href="{{ route('password.request') }}" class="forgot-pass" style="float: right">Forgotpassword</a>
                            </div>
                        <div class="contact_form_button">
                            <button type="submit" class="button contact_submit_button">Login</button>
                        </div>
                    </form>
                    <br><br>
                    <button type="submit" class="btn btn-primary btn-block"><i class="fab fa-facebook-square mr-1"></i>Login with Facbook</button>
                    <button type="submit" class="btn btn-danger btn-block"><i class="fab fa-google mr-1"></i><a href="{{ url('/auth/redirect/google') }}" class="text-white">Login with Google</a></button>

                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 rounded p-3"style="border:2px solid #0984e3;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <div class="contact_form_container">
                    <div class="contact_form_title text-center">SignUp</div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">User Name</label>
                            <input type="text"class="form-control" id="name" name="name" placeholder="Enter your username">
                            @error('name')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">User Email</label>
                            <input type="email"class="form-control" id="email" name="email" placeholder="Enter your user-email">
                            @error('email')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">User Phone Number</label>
                            <input type="number"class="form-control" id="phone" name="phone" placeholder="Enter your user-phone number">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password"class="form-control" id="password" name="password" placeholder="Enter your password">
                            @error('password')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password"class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required="">
                        </div>


                        <div class="contact_form_button">
                            <button type="submit" class="button contact_submit_button">SignUp</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="panel"></div>
</div>


@endsection
