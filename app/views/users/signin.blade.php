@extends('admin.index_master_admin')
@section('content')
  <div class="sign section--bg" data-bg="img/section/section.jpg">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="sign__content">
            <!-- authorization form -->
            <form action="" class="sign__form" method="post">
              <a href="#" class="sign__logo">
                <img src="{{BASE_URL.'public/hotflix.volkovdesign.com/admin/img/logo.svg'}}" alt="">
              </a>

              <div class="sign__group">
                <input type="text" class="sign__input" placeholder="Email" name="email"
                       value="{{isset($_COOKIE['email'])?$_COOKIE['email']:''}}">
              </div>
              <h3 style="color: #fff;">{{isset($err["email"])?$err["email"]:""}}</h3>
              <div class="sign__group">
                <input type="password" class="sign__input" placeholder="Password" name="password"
                       value="{{isset($_COOKIE['pass'])?$_COOKIE['pass']:''}}">
              </div>

              <h3 style="color: #fff;">{{isset($err["password"])?$err["password"]:""}}</h3>

              <div class="sign__group sign__group--checkbox">
                <input id="remember" name="remember" type="checkbox" checked="checked">
                <label for="remember">Remember Me</label>
              </div>

              <button class="sign__btn" name="btn-login">Sign in</button>

              <span class="sign__delimiter">or</span>

              <span class="sign__text">Don't have an account? <a href="{{route('sign-up')}}">Sign up!</a></span>

              <span class="sign__text"><a href="forgot.html">Forgot password?</a></span>
            </form>
            <!-- end authorization form -->
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
