<div class="modal fade" id="edit-user-modal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header text-center border-bottom-0">
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="mini-logo text-center">
                            <h4 class="card-title text-capitalize">Edit {{ user.first_name }} {{ user.last_name }}</h4>
                        </div>
                        <div class="auth-form card">
                            <div class="card-body">
                                <form @submit="updateUser">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label">First Name</label>
                                            <input name="first_name" type="text" class="form-control" v-model="user.first_name" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input name="last_name" type="text" class="form-control" v-model="user.last_name" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Email</label>
                                            <input name="email" type="text" class="form-control" v-model="user.email" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Role</label>
                                            <select name="role" class="form-control">
                                                <option value="0" v-bind:selected="user.role == 0">User</option>
                                                <option value="1" v-bind:selected="user.role == 1">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-3 d-grid gap-2">
                                        <input type="hidden" name="user_id" v-model="editId" required>
                                        <input type="submit" value="Update" class="btn btn-primary mr-2" data-bs-dismiss="modal">
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