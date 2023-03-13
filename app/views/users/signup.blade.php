
  <div class="sign__content">
    <!-- registration form -->
    <form action="" method="POST" class="sign__form">

      <div class="sign__group">
        <input type="text" name="username" class="sign__input" placeholder="Name">
      </div>

      <div class="sign__group">
        <input type="password" name="password" class="sign__input" placeholder="Password">
      </div>

      <div class="sign__group">
        <input type="text" name="sdt" class="sign__input" placeholder="sdt">
      </div>

      <div class="sign__group">
        <input type="email" name="email" class="sign__input" placeholder="Email">
      </div>
      <div class="sign__group sign__group--checkbox">
        <input id="remember" name="remember" type="checkbox" checked="checked">
        <label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
      </div>

      <button class="sign__btn" type="submit" name="btn-signup">Sign up</button>

      <span class="sign__delimiter">or</span>


      <span class="sign__text">Already have an account? <a href="{{route('sign-in')}}">Sign in!</a></span>
    </form>
    <!-- registration form -->
  </div>

