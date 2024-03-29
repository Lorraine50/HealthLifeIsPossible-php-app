<?php include("login-header.php"); ?>

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="?action=dashboard">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="?action=register an account">Register an Account</a>
          <a class="d-block small" href="?action=forgot password">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <?php include("login-footer.php"); ?>
