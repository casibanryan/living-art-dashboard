<div class="modal fade" id="add-user-modal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header text-center border-bottom-0">
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body container h-100">
        <div class="row justify-content-center h-100 align-items-center">
          <div class="col-xl-5 col-md-6">
            <div class="mini-logo text-center">
              <h4 class="card-title">Add New User</h4>
            </div>
            <div class="auth-form card">
              <div class="card-body">
                <form @submit="register">
                  <div class="row">
                    <div class="col-12 mb-3">
                      <label class="form-label">First Name</label>
                      <input type="hidden" name="type" value="add_user">
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
                      <input name="password" type="password" class="form-control" value="password" required>
                    </div>
                  </div>
                  <div class="mt-3 d-grid gap-2">
                    <input type="submit" value="Save" class="btn btn-primary mr-2"  data-bs-dismiss="modal">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>