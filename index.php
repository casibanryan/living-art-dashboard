<?php include 'shared/head.php';
if ($_SESSION['user_id'] == null) {
  header('location: signin.php');
}
?>
<div class="app">
  <div id="main-wrapper">
    <?php
    include 'shared/navbar.php';
    include 'shared/sidebar.php';
    ?>
    <div class="content-body">
      <div class="container">
        <div class="row">
          <?php if ($_SESSION['role'] == 0) { ?>
            <div class="col-xxl-6">
              <div class="promotion d-flex justify-content-between align-items-center">
                <div class="promotion-detail">
                  <h3 class="text-white mb-3">Discover, Collect, Sell <br> and Create your Own NFT</h3>
                  <p>Digital marketplace for crypto collectibles and non fungable tokens</p><a class="btn btn-primary me-3">Explore</a><a class="btn btn-secondary">Create</a>
                </div>
              </div>
            </div>
            <div class="col-xxl-6">
              <div class="card top-bid">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-md-6"><img src="images/items/11.jpg" class="img-fluid rounded" alt="..."></div>
                    <div class="col-md-6">
                      <div class="d-flex align-items-center mb-3"><img src="images/avatar/1.jpg" alt="" class="me-3 avatar-img">
                        <div class="flex-grow-1">
                          <h6 class="mb-0">John Abraham<span class="circle bg-success"></span>
                          </h6>
                        </div>
                      </div>
                      <h4 class="card-title">Brighten LQ</h4>
                      <div class="d-flex justify-content-between mt-3 mb-3">
                        <div class="text-start">
                          <p class="mb-2">Auction Time</p>
                          <h5 class="text-muted">3h 1m 50s</h5>
                        </div>
                        <div class="text-end">
                          <p class="mb-2">Current Bid :
                            <!-- --> <strong class="text-primary">0.05 ETH</strong>
                          </p>
                          <h5 class="text-muted">0.15 ETH</h5>
                        </div>
                      </div>
                      <div class="d-flex justify-content-center"><a href="#" class="btn btn-primary">Place
                          a Bid</a><a href="#" class="btn btn-secondary">Details</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card filter-tab m-0">
                <div class="card-header">
                  <h4 class="card-title">Trending Bids</h4>
                  <div class="filter-nav"><a href="#" class="active">All</a><a href="#">Games</a><a href="#">Artwork</a></div>
                </div>
                <div class="card-body bs-0 p-0 bg-transparent">
                  <div class="row">
                    <!-- Note ... trending bids will loop here -->
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                      <div class="card items">
                        <div class="card-body">
                          <div class="items-img position-relative"><img src="images/items/1.jpg" class="img-fluid rounded mb-3" alt=""><img src="images/avatar/1.jpg" class="creator" width="50" alt="">
                          </div>
                          <h4 class="card-title">Liguid Wave</h4>
                          <p></p>
                          <div class="d-flex justify-content-between">
                            <div class="text-start">
                              <p class="mb-2">Auction Time</p>
                              <h5 class="text-muted">3h 1m 50s</h5>
                            </div>
                            <div class="text-end">
                              <p class="mb-2">Current Bid : <strong class="text-primary">0.15
                                  <!-- --> ETH
                                </strong></p>
                              <h5 class="text-muted">0.15
                                <!-- --> ETH
                              </h5>
                            </div>
                          </div>
                          <div class="d-flex justify-content-center mt-3"><a href="#" class="btn btn-primary">Place a Bid</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-xl-12">
              <div class="card m-0">
                <div class="card-header">
                  <h4 class="card-title">Recent Activity</h4><a href="#">See more</a>
                </div>
                <div class="card-body p-0">
                  <div class="activity-content">
                    <div class="scrollbar-container ps">
                      <ul>
                        <li class="d-flex justify-content-between align-items-center active">
                          <div class="d-flex align-items-center">
                            <div class="activity-user-img me-3"><img src="images/avatar/1.jpg" alt="" width="50"></div>
                            <div class="activity-info">
                              <h5 class="mb-0">Papaya</h5>
                              <p>Purchase by you for 0.05 ETH</p>
                            </div>
                          </div>
                          <div class="text-end"><span class=" text-muted">12 min ago</span></div>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="activity-user-img me-3"><img src="images/avatar/2.jpg" alt="" width="50"></div>
                            <div class="activity-info">
                              <h5 class="mb-0">ETH Received</h5>
                              <p>0.06 ETH Received</p>
                            </div>
                          </div>
                          <div class="text-end"><span class=" text-muted">12 min ago</span></div>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="activity-user-img me-3"><img src="images/avatar/3.jpg" alt="" width="50"></div>
                            <div class="activity-info">
                              <h5 class="mb-0">John Adams</h5>
                              <p>Started Following you</p>
                            </div>
                          </div>
                          <div class="text-end"><span class=" text-muted">12 min ago</span></div>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="activity-user-img me-3"><img src="images/avatar/4.jpg" alt="" width="50"></div>
                            <div class="activity-info">
                              <h5 class="mb-0">Nature with Beauty</h5>
                              <p>Has been sold by 12.05 ETH</p>
                            </div>
                          </div>
                          <div class="text-end"><span class=" text-muted">12 min ago</span></div>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="activity-user-img me-3"><img src="images/avatar/5.jpg" alt="" width="50"></div>
                            <div class="activity-info">
                              <h5 class="mb-0">Nature with Beauty</h5>
                              <p>Has been sold by 12.05 ETH</p>
                            </div>
                          </div>
                          <div class="text-end"><span class=" text-muted">12 min ago</span></div>
                        </li>
                      </ul>
                      <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                      </div>
                      <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-8 col-xl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Top Creators</h4><a href="#">See more</a>
                </div>
                <div class="card-body bs-0 p-0 top-creators-content  bg-transparent">
                  <div class="row">
                    <div class="col-xl-6">
                      <div class="d-flex justify-content-between creator-widget active  align-items-center">
                        <div class="d-flex align-items-center">
                          <div class="top-creators-user-img me-3"><img src="images/avatar/1.jpg" alt="" width="60"></div>
                          <div class="top-creators-info">
                            <h5 class="mb-0">Terry Camacho</h5>
                            <p class="mb-2">60 Items</p>
                          </div>
                        </div>
                        <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="d-flex justify-content-between creator-widget active  align-items-center">
                        <div class="d-flex align-items-center">
                          <div class="top-creators-user-img me-3"><img src="images/avatar/2.jpg" alt="" width="60"></div>
                          <div class="top-creators-info">
                            <h5 class="mb-0">Terry Camacho</h5>
                            <p class="mb-2">60 Items</p>
                          </div>
                        </div>
                        <div class="text-end"><a class="btn btn-secondary">Following</a></div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="d-flex justify-content-between creator-widget active  align-items-center">
                        <div class="d-flex align-items-center">
                          <div class="top-creators-user-img me-3"><img src="images/avatar/3.jpg" alt="" width="60"></div>
                          <div class="top-creators-info">
                            <h5 class="mb-0">Terry Camacho</h5>
                            <p class="mb-2">60 Items</p>
                          </div>
                        </div>
                        <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="d-flex justify-content-between creator-widget active  align-items-center">
                        <div class="d-flex align-items-center">
                          <div class="top-creators-user-img me-3"><img src="images/avatar/4.jpg" alt="" width="60"></div>
                          <div class="top-creators-info">
                            <h5 class="mb-0">Terry Camacho</h5>
                            <p class="mb-2">60 Items</p>
                          </div>
                        </div>
                        <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="d-flex justify-content-between creator-widget active  align-items-center">
                        <div class="d-flex align-items-center">
                          <div class="top-creators-user-img me-3"><img src="images/avatar/5.jpg" alt="" width="60"></div>
                          <div class="top-creators-info">
                            <h5 class="mb-0">Terry Camacho</h5>
                            <p class="mb-2">60 Items</p>
                          </div>
                        </div>
                        <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="d-flex justify-content-between creator-widget active  align-items-center">
                        <div class="d-flex align-items-center">
                          <div class="top-creators-user-img me-3"><img src="images/avatar/6.jpg" alt="" width="60"></div>
                          <div class="top-creators-info">
                            <h5 class="mb-0">Terry Camacho</h5>
                            <p class="mb-2">60 Items</p>
                          </div>
                        </div>
                        <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="d-flex justify-content-between creator-widget active  align-items-center">
                        <div class="d-flex align-items-center">
                          <div class="top-creators-user-img me-3"><img src="images/avatar/7.jpg" alt="" width="60"></div>
                          <div class="top-creators-info">
                            <h5 class="mb-0">Terry Camacho</h5>
                            <p class="mb-2">60 Items</p>
                          </div>
                        </div>
                        <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="d-flex justify-content-between creator-widget active  align-items-center">
                        <div class="d-flex align-items-center">
                          <div class="top-creators-user-img me-3"><img src="images/avatar/8.jpg" alt="" width="60"></div>
                          <div class="top-creators-info">
                            <h5 class="mb-0">Terry Camacho</h5>
                            <p class="mb-2">60 Items</p>
                          </div>
                        </div>
                        <div class="text-end"><a class="btn btn-outline-primary">Follow</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header flex-row">
                  <h4 class="card-title">Recent Bid </h4>
                </div>
                <div class="card-body bs-0 bg-transparent p-0">
                  <div class="bid-table">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check"><input type="checkbox" class="form-check-input" value="" id="flexCheckDefault">
                              </div>
                            </th>
                            <th>Item List</th>
                            <th>Open Price</th>
                            <th>Your Offer</th>
                            <th>Recent Offer</th>
                            <th>Time Left</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check"><input type="checkbox" class="form-check-input" value="" id="flexCheckDefault">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center"><img src="images/items/15.jpg" alt="" width="60" class="me-3 rounded">
                                <div class="flex-grow-1">
                                  <h6 class="mb-0">Cutes Cube Cool</h6>
                                  <p class="mb-0">John Abraham</p>
                                </div>
                              </div>
                            </td>
                            <td>0.0025 ETH</td>
                            <td> 0.0025 ETH</td>
                            <td><img src="images/avatar/1.jpg" alt="" width="40" class="me-2 rounded-circle">0.0025 ETH</td>
                            <td>2 Hours 1 min 30s</td>
                            <td><span><i class="ri-close-line me-3"></i></span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check"><input type="checkbox" class="form-check-input" value="" id="flexCheckDefault">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center"><img src="images/items/16.jpg" alt="" width="60" class="me-3 rounded">
                                <div class="flex-grow-1">
                                  <h6 class="mb-0">Cutes Cube Cool</h6>
                                  <p class="mb-0">John Abraham</p>
                                </div>
                              </div>
                            </td>
                            <td>0.0025 ETH</td>
                            <td> 0.0025 ETH</td>
                            <td><img src="images/avatar/2.jpg" alt="" width="40" class="me-2 rounded-circle">0.0025 ETH</td>
                            <td>2 Hours 1 min 30s</td>
                            <td><span><i class="ri-close-line me-3"></i></span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check"><input type="checkbox" class="form-check-input" value="" id="flexCheckDefault">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center"><img src="images/items/17.jpg" alt="" width="60" class="me-3 rounded">
                                <div class="flex-grow-1">
                                  <h6 class="mb-0">Cutes Cube Cool</h6>
                                  <p class="mb-0">John Abraham</p>
                                </div>
                              </div>
                            </td>
                            <td>0.0025 ETH</td>
                            <td> 0.0025 ETH</td>
                            <td><img src="images/avatar/3.jpg" alt="" width="40" class="me-2 rounded-circle">0.0025 ETH</td>
                            <td>2 Hours 1 min 30s</td>
                            <td><span><i class="ri-close-line me-3"></i></span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check"><input type="checkbox" class="form-check-input" value="" id="flexCheckDefault">
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center"><img src="images/items/18.jpg" alt="" width="60" class="me-3 rounded">
                                <div class="flex-grow-1">
                                  <h6 class="mb-0">Cutes Cube Cool</h6>
                                  <p class="mb-0">John Abraham</p>
                                </div>
                              </div>
                            </td>
                            <td>0.0025 ETH</td>
                            <td> 0.0025 ETH</td>
                            <td><img src="images/avatar/4.jpg" alt="" width="40" class="me-2 rounded-circle">0.0025 ETH</td>
                            <td>2 Hours 1 min 30s</td>
                            <td><span><i class="ri-close-line me-3"></i></span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } else { ?>

            <!-- admin dashboard -->
            <div class="page-title">
              <div class="row align-items-center justify-content-between">
                <div class="col-6">
                  <div class="page-title-content">
                    <h3>Dashboard</h3>
                    <p class="mb-2">Welcome to admin dashboard</p>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="breadcrumbs"><a href="#">Home </a><span><i class="ri-arrow-right-s-line"></i></span><a href="#">Dashboard</a></div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6">
              <div class="stat-widget d-flex align-items-center">
                <div class="widget-icon me-3 bg-primary"><span><i class="ri-file-copy-2-line"></i></span></div>
                <div class="widget-content">
                  <h3>24K</h3>
                  <p>Artworks</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="stat-widget d-flex align-items-center">
                <div class="widget-icon me-3 bg-success"><span><i class="ri-file-list-3-line"></i></span></div>
                <div class="widget-content">
                  <h3>82K</h3>
                  <p>Auction</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="stat-widget d-flex align-items-center">
                <div class="widget-icon me-3 bg-warning"><span><i class="ri-user-heart-line"></i></span></div>
                <div class="widget-content">
                  <h3> {{ totalUsers }}</h3>
                  <p>Users</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="stat-widget d-flex align-items-center">
                <div class="widget-icon me-3 bg-danger">
                  <span>
                    <i class="ri-folder-lock-line"></i>
                  </span>
                </div>
                <div class="widget-content">
                  <h3>{{ totalLockedUsers }}</h3>
                  <p>Locked</p>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-12">
              <div class="card m-0">
                <div class="card-header">
                  <h4 class="card-title">Recent Activity</h4><a href="#">See more</a>
                </div>
                <div class="card-body p-0">
                  <div class="activity-content">
                    <div class="scrollbar-container ps">
                      <ul>
                        <li class="d-flex justify-content-between align-items-center" v-for="activity in activities">
                          <div class="d-flex align-items-center">
                            <div class="activity-user-img me-3"><img :src="activity.profile" :alt="activity.profile" width="50"></div>
                            <div class="activity-info">
                              <h5 class="mb-0 text-capitalize"> {{ activity.first_name }} </h5>
                              <p> {{ activity.content }}</p>
                            </div>
                          </div>
                          <div class="text-end"><span class=" text-muted">{{ activity.time_lapse }}</span></div>
                        </li>
                        <!-- history will loop here -->
                      </ul>
                      <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                      </div>
                      <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-8 col-xl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Locked Users</h4><a href="#">See more</a>
                </div>
                <div class="card-body bs-0 p-0 top-creators-content  bg-transparent">
                  <div class="row">
                    <div class="col-xl-6" v-for="user in lockedUsers">
                      <div class="d-flex justify-content-between creator-widget active  align-items-center">
                        <div class="d-flex align-items-center">
                          <div class="top-creators-user-img me-3"><img :src="user.profile" :alt="user.profile" width="60"></div>
                          <div class="top-creators-info">
                            <h5 class="mb-0 text-capitalize">{{ user.full_name }}</h5>
                          </div>
                        </div>
                        <div class="text-end"><a class="btn btn-outline-primary" @click="unlockUser(user.id, user.full_name)">Unlock</a></div>
                      </div>
                    </div>

                    <!-- locked users will loop here -->

                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header flex-row">
                  <h4 class="card-title">Manage Users </h4>
                  <a class="btn btn-primary" href="javascript:void" data-bs-toggle="modal" data-bs-target="#add-user-modal">Add New User</a>
                </div>
                <div class="card-body bs-0 bg-transparent p-0">
                  <div class="bid-table">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>User List</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th class="pe-4">Action</th>
                          </tr>
                        </thead>
                        <tbody v-for="user, index in users" v-if="index  >= usersTablePagination.start && index < usersTablePagination.end">
                          <tr v-if="user.id != <?= $_SESSION['user_id'] ?>">
                            <td class="text-capitalize"><img :src="user.profile" alt="avatar" width="40" class="me-2 rounded-circle"> {{ user.full_name }}</td>
                            <td>{{ user.email }}</td>
                            <td>
                              <a href="#!" v-if="user.status == 1" @click="changeStatus(user.status, user.id)"><span class="badge bg-primary">ACTIVATE</span></a>
                              <a href="#!" v-if="user.status == 0" @click="changeStatus(user.status, user.id)"><span class="badge bg-info">DEACTIVATE</span></a>
                            </td>
                            <td>
                              <span class="badge bg-primary"> {{ user.role == 0 ? 'User' : 'Admin' }}</span>
                            </td>
                            <td>
                              <a href="#!" @click="getUserId(user.id)" data-bs-toggle="modal" data-bs-target="#edit-user-modal"><span><i class="ri-pencil-line me-1 text-info"></i></span></a>
                              <a href="#!" @click="deleteUser(user.full_name, user.id)"><span><i class="ri-delete-bin-2-line me-3 text-danger"></i></span></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <nav class="row">
                  <p class="col-6 pt-1">Showing {{ usersTablePagination.start + 1 }} -  {{ usersTablePagination.end }} results</p>
                  <ul class="col-6 pagination justify-content-end">
                    <li class="page-item">
                      <a class="page-link">Previous</a>
                    </li>
                    <li v-for="index in Math.round(totalUsers / 5)" class="page-item">
                      <a @click="pagination(index)" class="page-link" href="#!">{{ index  }}</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>


              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <?php
  include 'modals/add_user.php';
  include 'modals/edit_user.php';
  ?>
</div>
<?php include 'shared/scripts.php'; ?>

</body>

</html>