@extends('admin.index_master_admin');
@section('content')
  <div class="card border-0">
    <div class="card-header">
      <div class="edit-profile__title">
        <h6>Sign in Spa</h6>
      </div>
    </div>
    <div class="card-body">
      <div class="edit-profile__body">
         <div class="form-group mb-25">
          <label for="email">Username or Email Address</label>
          <input type="email" class="form-control" id="email"
                 placeholder="name@example.com">
        </div>
        <div class="form-group mb-15">
          <label for="password-field">password</label>
          <div class="position-relative">
            <input id="password-field" type="password" class="form-control"
                   name="password" placeholder="Password">
            <div
              class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
            </div>
          </div>
        </div>
        <div class="admin-condition">
          <div class="checkbox-theme-default custom-checkbox ">
            <input class="checkbox" type="checkbox" id="check-1">
            <label for="check-1">
              <span class="checkbox-text">Keep me logged in</span>
            </label>
          </div>
          <a href="forget-password.html">forget password?</a>
        </div>
        <div
          class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
          <button
            class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn " type="submit" name="dangnhap" >
            sign in
          </button>
        </div>
      </div>
    </div>
    <div class="px-20">
      <p class="social-connector social-connector__admin text-center">
        <span>Or</span>
      </p>
      <div class="button-group d-flex align-items-center justify-content-center">
        <ul class="admin-socialBtn">
          <li>
            <button class="btn text-dark google">
              <img class="svg" src="img/google-Icon.svg" alt="img" />
            </button>
          </li>
          <li>
            <button class=" radius-md wh-48 content-center facebook">
              <i class="uil uil-facebook-f"></i>
            </button>
          </li>
          <li>
            <button class="radius-md wh-48 content-center twitter">
              <i class="uil uil-twitter"></i>
            </button>
          </li>
          <li>
            <button class="radius-md wh-48 content-center github">
              <i class="uil uil-github"></i>
            </button>
          </li>
        </ul>
      </div>
    </div>
    <div class="admin-topbar">
      <p class="mb-0">
        Don't have an account?
        <a href="sign-up.html" class="color-primary">
          Sign up
        </a>
      </p>
    </div>
  </div>
@endsection
