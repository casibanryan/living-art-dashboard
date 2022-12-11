<?= include 'shared/head.php'; ?>

<div id="main-wrapper" class="app">
  <?=
  include 'shared/navbar.php';
  include 'shared/sidebar.php';
  ?>
  <div class="content-body">
    <div class="container">
      <div class="page-title">
        <div class="row align-items-center justify-content-between">
          <div class="col-6">
            <div class="page-title-content">
              <h3>Profile</h3>
              <p class="mb-2">Welcome to Settings Profile page</p>
            </div>
          </div>
          <div class="col-auto">
            <div class="breadcrumbs"><a href="#">Settings </a><span><i class="ri-arrow-right-s-line"></i></span><a href="#">Profile</a></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">User Profile</h4>
            </div>
            <div class="card-body">
              <form @submit="updateProfile" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-12 mb-3">
                    <label class="form-label">Full Name</label>
                    <div class="input-group">
                      <input type="hidden" name="user_profile">
                      <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                      <input type="text" name="first_name" class="form-control" placeholder="First Name" v-model="myInfo.first_name" required>
                      <span class="input-group-text"><i class="ri-user-settings-fill"></i></span>
                      <input type="text" name="last_name" class="form-control" placeholder="Last Name" v-model="myInfo.last_name" required>
                    </div>
                  </div>
                  <div class="col-xxl-12">
                    <div class="d-flex align-items-center mb-3">
                      <img class="me-3 rounded-circle me-0 me-sm-3" :src="myInfo.profile" width="55" height="55" alt="profile">
                      <div class="media-body">
                        <h4 class="mb-0 text-capitalize">{{ myInfo.full_name }}</h4>
                        <p class="mb-0">Max file size is 20mb</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12"><input name="profile" type="file" class=""></div>
                </div>
                <div class="mt-3"><button type="submit" class="btn btn-primary mr-2">Save</button></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Update Profile</h4>
            </div>
            <div class="card-body">
              <form @submit="updateProfile">
                <div class="row">
                  <div class="col-12 mb-3">
                    <label class="form-label">Email</label>
                    <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                    <input name="email" type="text" class="form-control" v-model="myInfo.email" required>
                  </div>
                  <div class="col-12 mb-3">
                    <label class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" required>
                  </div>
                </div>
                <div class="mt-3"><button type="submit" class="btn btn-primary mr-2">Save</button></div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


</div>

<?= include 'shared/scripts.php'; ?>

</body>

</html>