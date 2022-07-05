<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.includes.meta')

    <title>SignIn Page</title>

    @include('admin.includes.css')
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v ">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-lg">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse"><img src="{{ asset('backend/logo/logo.png') }}" alt="" style="width:100px;" ></div>
        <div class="tx-center mt-3 mb-1"><h3>Sign-In</h3></div>

        <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your E-mail">
              </div><!-- form-group -->
              <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                <a href="{{ route('password.request') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
              </div><!-- form-group -->
              <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>

        <div class="mg-t-60 tx-center">Not yet a member? <a href="{{ route('register') }}" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    @include('admin.includes.js')

  </body>
</html>
