<?php include 'shared/head.php';

if ($_SESSION['user_id'] == null) {
  header('location: signin.php');
}
if ($_SESSION['role'] == 0) {
  header('location: settings-profile.php');
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
                      <tbody v-for="user, index in users" v-if="index  >= paginationData.start && index < paginationData.end">
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
              <!-- pagination -->
              <nav class="row">
                <p class="col-6 pt-1">Showing {{ paginationData.start + 1 }} - {{ paginationData.end }} results</p>
                <ul class="col-6 pagination justify-content-end">
                  <li v-bind:class="paginationData.limit == 4 ? 'disabled' : null" class="page-item">
                    <a @click="previousPage()" class="page-link" href="#!">Previous</a>
                  </li>
                  <li v-for="index in Math.round(totalUsers / 5)" v-bind:class="paginationData.page == index ? 'active' : null" class="page-item">
                    <a @click="pagination(index)" v-if="index >= paginationData.limit-3 && index <= paginationData.limit" class="page-link" href="#!">{{ index  }}</a>
                  </li>
                  <li v-bind:class="Math.round(totalUsers/5) == paginationData.limit ? 'disabled' : null" class="page-item">
                    <a @click="nextPage()" class="page-link" href="#!">Next</a>
                  </li>
                </ul>
              </nav><!-- end of pagination -->
            </div>
          </div>
          <?php include 'toasts/manage_users.php' ?>
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