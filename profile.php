<?php include 'shared/head.php'; ?>
<div id="main-wrapper" class="app">
  <?php
  include 'shared/navbar.php';
  include 'shared/sidebar.php'
  ?>

  <div class="content-body">
    <div class="container">
      <div class="page-title">
        <div class="row align-items-center justify-content-between">
          <div class="col-6">
            <div class="page-title-content">
              <h3>Profile</h3>
              <p class="mb-2">Welcome to Profile page</p>
            </div>
          </div>
          <div class="col-auto">
            <div class="breadcrumbs"><a href="#">Home </a><span><i class="ri-arrow-right-s-line"></i></span><a href="#">Profile</a></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xxl-4 col-xl-12">
          <div class="card welcome-profile">
            <div class="card-body"><img :src="myInfo.profile" alt="profile">
              <h4>Welcome, {{ myInfo.full_name }}!</h4>
              <p>Looks like you are not verified yet. Verify yourself to use the full potential of
                Xtrader.</p>
              <ul>
                <li><a href="#"><span class="verified"><i class="ri-check-line"></i></span>Verify
                    account</a></li>
                <li><a href="#"><span class="not-verified"><i class="ri-shield-check-line"></i></span>Two-factor authentication
                    (2FA)</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xxl-8 col-xl-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Following</h4>
            </div>
            <div class="card-body bs-0 p-0 top-creators-content  bg-transparent">
              <div class="row">
                <div class="col-xl-6 col-lg-6">
                  <div class="d-flex justify-content-between creator-widget active  align-items-center">
                    <div class="d-flex align-items-center">
                      <div class="top-creators-user-img me-3"><img src="images/avatar/1.jpg" alt="" width="60"></div>
                      <div class="top-creators-info">
                        <h5 class="mb-0">Terry Camacho</h5>
                        <p class="mb-2">60 Items</p>
                      </div>
                    </div>
                    <div class="text-end"><a class="btn btn-secondary">Unfollow</a></div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <div class="d-flex justify-content-between creator-widget active  align-items-center">
                    <div class="d-flex align-items-center">
                      <div class="top-creators-user-img me-3"><img src="images/avatar/2.jpg" alt="" width="60"></div>
                      <div class="top-creators-info">
                        <h5 class="mb-0">Terry Camacho</h5>
                        <p class="mb-2">60 Items</p>
                      </div>
                    </div>
                    <div class="text-end"><a class="btn btn-secondary">Unfollow</a></div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <div class="d-flex justify-content-between creator-widget active  align-items-center">
                    <div class="d-flex align-items-center">
                      <div class="top-creators-user-img me-3"><img src="images/avatar/3.jpg" alt="" width="60"></div>
                      <div class="top-creators-info">
                        <h5 class="mb-0">Terry Camacho</h5>
                        <p class="mb-2">60 Items</p>
                      </div>
                    </div>
                    <div class="text-end"><a class="btn btn-secondary">Unfollow</a></div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <div class="d-flex justify-content-between creator-widget active  align-items-center">
                    <div class="d-flex align-items-center">
                      <div class="top-creators-user-img me-3"><img src="images/avatar/4.jpg" alt="" width="60"></div>
                      <div class="top-creators-info">
                        <h5 class="mb-0">Terry Camacho</h5>
                        <p class="mb-2">60 Items</p>
                      </div>
                    </div>
                    <div class="text-end"><a class="btn btn-secondary">Unfollow</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">My Bought</h4>
            </div>
            <div class="card-body bs-0 p-0 bg-transparent">
              <div class="row">
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="card items">
                    <div class="card-body">
                      <div class="items-img position-relative"><img src="images/items/1.jpg" class="img-fluid rounded mb-3" alt=""><img src="images/avatar/1.jpg" class="creator" width="50" alt=""></div>
                      <h4 class="card-title">Liguid Wave</h4>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="card items">
                    <div class="card-body">
                      <div class="items-img position-relative"><img src="images/items/2.jpg" class="img-fluid rounded mb-3" alt=""><img src="images/avatar/2.jpg" class="creator" width="50" alt=""></div>
                      <h4 class="card-title">Liguid Wave</h4>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="card items">
                    <div class="card-body">
                      <div class="items-img position-relative"><img src="images/items/3.jpg" class="img-fluid rounded mb-3" alt=""><img src="images/avatar/3.jpg" class="creator" width="50" alt=""></div>
                      <h4 class="card-title">Liguid Wave</h4>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="card items">
                    <div class="card-body">
                      <div class="items-img position-relative"><img src="images/items/4.jpg" class="img-fluid rounded mb-3" alt=""><img src="images/avatar/4.jpg" class="creator" width="50" alt=""></div>
                      <h4 class="card-title">Liguid Wave</h4>
                    </div>
                  </div>
                </div>
              </div>
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