    <div class="container">

      <?php if (tzVendor\User::isAuthorized()): ?>
    
      <h1>Your are welcome!</h1>

      <form class="ajax" method="post" action="vendor/core/AuthorizationAjaxRequest.php">
          <input type="hidden" name="act" value="logout">
          <div class="form-actions">
              <button class="btn btn-large btn-primary" type="submit">Log out</button>
          </div>
      </form>

      <?php else: ?>

      <form class="form-signin ajax" method="post" action="vendor/core/AuthorizationAjaxRequest.php">
        <div class="main-error alert alert-error hide"></div>

        <h2 class="form-signin-heading">Please, sign up</h2>
        <input name="username" type="text" class="input-block-level" placeholder="login" autofocus>
        <input name="password" type="password" class="input-block-level" placeholder="password">
        <label class="checkbox">
          <input name="remember-me" type="checkbox" value="remember-me" checked>Remember me
        </label>
        <input type="hidden" name="act" value="login">
        <button class="btn btn-large btn-primary" type="submit">Log in</button>
    
      </form>

      <?php endif; ?>

    </div> <!-- /container -->

