<?php include 'shared/head.php'; ?>
<div class="authincation section-padding pt-3 app">
  <div class="container h-100">
    <div class="row justify-content-center h-100 align-items-center">
      <div class="col-xl-5 col-md-6">
        <div class="mini-logo text-center my-4"><a href="index-2.html"><img src="images/logo.png" alt=""></a>
          <h4 class="card-title mt-5">Sign up to Living Art</h4>
        </div>
        <div class="auth-form card">
          <div class="card-body">
            <form @submit="register">
              <div class="row">
                <div class="col-12 mb-3">
                  <label class="form-label">First Name</label>
                  <input type="hidden" name="type" value="register">
                  <input name="first_name" type="text" class="form-control" required>
                </div>
                <div class="col-12 mb-3">
                  <label class="form-label">Last Name</label>
                  <input name="last_name" type="text" class="form-control" required>
                </div>
                <div class="col-12 mb-3">
                  <label class="form-label">Email</label>
                  <input name="email" type="text" class="form-control" required>
                </div>
                <div class="col-12 mb-3">
                  <label class="form-label">Password</label>
                  <input name="password" type="password" class="form-control" required>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input name="acceptTerms" type="checkbox" class="form-check-input" required>
                    <label class="form-check-label">I certify that I agree to the
                      <a href="#" class="text-primary">User Agreement</a>
                      and
                      <a href="#" class="text-primary">Privacy Policy</a>.
                    </label>
                  </div>
                </div>
              </div>
              <div class="mt-3 d-grid gap-2"><button type="submit" class="btn btn-primary mr-2">Sign
                  Up</button></div>
            </form>
            <div class="text-center">
              <p class="mt-3 mb-0"><a class="text-primary me-2" href="signin.php">Sign in</a>to your account</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>



<?php include 'shared/scripts.php'; ?>

</body>

</html>