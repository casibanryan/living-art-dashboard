<?php include 'shared/head.php'; ?>
<div class="authincation section-padding app">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-4 col-md-5">
                <div class="mini-logo text-center my-3"><a href="index.php">
                        <img src="images/logo.png" alt="logo"></a>
                    <h4 class="card-title mt-5">Locked</h4>
                </div>
                <div class="auth-form card">
                    <div class="card-body">
                        <form @submit="login" class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Enter Password</label>
                                <input type="hidden" name="email" value="<?= $_SESSION['email'] ?>">
                                <input type="password" name="password" class="form-control" placeholder="***********">
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'shared/scripts.php'; ?>

</body>

</html>