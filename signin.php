<?php include 'shared/head.php';
if (isset($_SESSION['user_id'])) {
    header('location: index.php');
}
if (isset($_SESSION['remember_me']) && $_SESSION['remember_me']) {
    $password = $_SESSION['password'];
    $email = $_SESSION['email'];
    $remember_me = true;
}

?>
<div class="authincation section-padding app">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-5 col-md-6">
                <div class="mini-logo text-center my-4"><a href="index-2.html"><img src="images/logo.png" alt=""></a>
                    <h4 class="card-title mt-5">Sign in to Living Art</h4>
                </div>
                <div class="auth-form card">
                    <div class="card-body">
                        <form @submit="login">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="email" type="text" class="form-control" value="<?= isset($email) ? $email : '' ?>">
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" value="<?= isset($password) ? $password : '' ?>">
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input name="remember_me" type="checkbox" class="form-check-input" <?= isset($remember_me) ? 'checked' : '' ?>>
                                        <label class="form-check-label">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-end"><a href="javascript:void">Forgot Password?</a></div>
                            </div>
                            <div class="mt-3 d-grid gap-2">
                                <button type="submit" class="btn btn-primary mr-2">SignIn</button>
                            </div>
                        </form>
                        <p class="mt-3 mb-0">Don't have an account?<a class="text-primary" href="signup.php">&nbsp;Sign
                                up</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include 'shared/scripts.php'; ?>
</body>

</html>