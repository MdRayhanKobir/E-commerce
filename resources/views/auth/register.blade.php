<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.includes.meta')
    <title>SignUp Page</title>

    @include('admin.includes.css')
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-lg">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse"><img src="{{ asset('backend/logo/logo.png') }}" alt="" style="width:100px;" ></div>
        <div class="tx-center mt-3 mb-1"><h3>Sign-Up</h3></div>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your username">
              </div><!-- form-group -->
              <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your E-mail">
                </div><!-- form-group -->
              <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
              </div><!-- form-group -->
              <div class="form-group">
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required="">
                </div><!-- form-group -->

                <div class="form-group">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="terms" name="terms" style="margin-left: 1px;">
                      <label class="form-check-label" for="flexCheckDefault">
                        Accept Our Terms & Condition
                      </label>
                    </div>
                </div><!-- form-group -->
              <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form>

        <div class="mg-t-40 tx-center">Already have an account? <a href="{{ route('login') }}" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

   @include('admin.includes.js')

   <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>
