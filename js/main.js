var app = new Vue({
    el: '.app',
    data: {
        myInfo: {},
        user: {},
        users: [],
        activities: [],
        lockedUsers: [],
        totalUsers: 0,
        totalLockedUsers: 0,
        editId: 0,
        paginationData: { start: 0, end: 5, page: 1, limit: 4 },
    },
    created() {
        this.fetchUsers();
        setInterval(() => {
            this.fetchActivities();
        }, 1000);
        this.fetchLockedUsers();
    },

    methods: {
        pagination(selectedPage) {
            let resultsPerPage = 5;
            let start = parseInt((selectedPage - 1) * resultsPerPage);
            let end = parseInt(selectedPage * resultsPerPage);
            this.paginationData.start = start;
            this.paginationData.end = end;
            this.paginationData.page = selectedPage;
        },

        nextPage() {
            this.paginationData.limit += 1;
        },

        previousPage() {
            this.paginationData.limit -= 1;
        },
        updateUser(e) {
            e.preventDefault();
            let formData = new FormData(e.currentTarget);
            formData.append('method', 'update_user');
            axios.post('server/api.php', formData).then((respond) => {
                if (respond.data == 1) {
                    const myToastEl = $('#update-user');
                    myToastEl.show();
                    setTimeout(() => {
                        myToastEl.hide();
                    }, 10000);
                    this.fetchUsers();
                    this.fetchActivities();
                } else {
                    alert('Something went wrong, Please try again later!');
                }
            });
        },
        unlockUser(user_id, full_name) {
            if (confirm(`Are you sure you want to unlock ${full_name}? `)) {
                let formData = new FormData();
                formData.append('method', 'unlock_user');
                formData.append('user_id', user_id);
                axios.post('server/api.php', formData).then((respond) => {
                    console.log(respond.data);
                    if (respond.data == 1) {
                        alert(`${full_name} has been unlocked!`);
                        this.fetchActivities();
                        this.fetchLockedUsers();
                        this.fetchUsers();
                    } else {
                        alert(
                            'Something went wrong, Please try again.. later!'
                        );
                    }
                });
            }
        },
        updateProfile(e) {
            e.preventDefault();
            let formData = new FormData(e.currentTarget);
            formData.append('method', 'update_profile');
            axios.post('server/api.php', formData).then((respond) => {
                console.log(respond.data);
                if (respond.data == 1) {
                    alert('User profile updated successfully!');
                    this.fetchUsers();
                } else if (respond.data == 'upload error') {
                    alert('Something went wrong while uploading file!');
                } else {
                    alert(respond.data);
                }
            });
        },

        register(e) {
            e.preventDefault();
            const self = this;
            let formData = new FormData(e.currentTarget);
            formData.append('method', 'register');
            axios.post('server/api.php', formData).then((respond) => {
                console.log(respond);
                if (respond.data == 1) {
                    window.location.href =
                        'http://localhost/nft-dashboard/signin.php';
                } else if (respond.data == 2) {
                    alert('User added successfully!');
                    self.fetchUsers();
                } else if (respond.data == 3) {
                    alert('Email is already taken!');
                } else {
                    alert('Something went wrong!');
                }
            });
        },

        login(e) {
            e.preventDefault();
            let formData = new FormData(e.currentTarget);
            formData.append('method', 'login');
            axios.post('server/api.php', formData).then((respond) => {
                console.log(respond);
                if (respond.data == 1) {
                    window.location.href = 'http://localhost/nft-dashboard/';
                } else if (respond.data == 2) {
                    alert(
                        'Sorry your account is currently deactivated, Please wait for the admin to verify your account, Thank you'
                    );
                } else if (respond.data == 3) {
                    alert(
                        'Due to 3 failed attempt your account is currently locked, wait for 24 hours!'
                    );
                } else if (respond.data == 'locked_account') {
                    alert('Sorry your account is currently locked!');
                } else {
                    alert('Something went wrong!');
                }
            });
        },

        logout() {
            let formData = new FormData();
            formData.append('method', 'logout');
            axios.post('server/api.php', formData);
        },

        getUserId(user_id) {
            this.editId = parseInt(user_id);
            this.fetchUsers();
        },

        fetchUsers() {
            let formData = new FormData();
            const self = this;
            formData.append('method', 'fetch_users');
            axios.post('server/api.php', formData).then((respond) => {
                self.users = [];
                self.totalUsers = 0;
                self.totalLockedUsers = 0;
                user_id = $('#user_id').val();
                $.each(respond.data, (index, data) => {
                    data.counterlock == 1 ? (self.totalLockedUsers += 1) : null;

                    if (data.is_deleted != 1) {
                        self.totalUsers += 1;
                        self.users.push({
                            id: data.id,
                            full_name: data.first_name + ' ' + data.last_name,
                            email: data.email,
                            role: data.role,
                            status: data.status,
                            is_deleted: data.is_deleted,
                            counterlock: data.counterlock,
                            profile: 'images/profile/' + data.profile,
                        });
                    }

                    if (self.editId == data.id) {
                        self.user = {
                            first_name: data.first_name,
                            last_name: data.last_name,
                            role: data.role,
                            email: data.email,
                        };
                    }

                    if (parseInt(user_id) == data.id) {
                        self.myInfo = {
                            first_name: data.first_name,
                            last_name: data.last_name,
                            full_name: data.first_name + ' ' + data.last_name,
                            profile: 'images/profile/' + data.profile,
                            role: data.role,
                            email: data.email,
                        };
                    }
                });
            });
        },

        fetchActivities() {
            let formData = new FormData();
            const self = this;
            formData.append('method', 'fetch_activities');
            axios.post('server/api.php', formData).then((respond) => {
                self.activities = [];
                $.each(respond.data, (index, data) => {
                    self.activities.push({
                        first_name: data.first_name,
                        content: data.content,
                        time_lapse: self.getEstimateTime(data.created_at),
                        role: data.role,
                        user_id: data.user_id,
                        profile: 'images/profile/' + data.profile,
                    });
                });
            });
        },

        getEstimateTime(date) {
            const d = new Date(date);
            let today = new Date();
            let days = d.getDate();
            let hours = today.getHours() - d.getHours();
            let minutes = today.getMinutes() - d.getMinutes();
            let seconds = today.getSeconds() - d.getSeconds();
            if (today.getDate() > days) {
                return `${today.getDate() - days} day ago`;
            } else if (hours >= 1) {
                return `${hours} hour ago`;
            } else if (minutes >= 1) {
                return `${minutes} min ago`;
            } else {
                return `${seconds} sec ago`;
            }
        },

        fetchLockedUsers() {
            let formData = new FormData();
            const self = this;
            formData.append('method', 'fetch_locked_users');
            axios.post('server/api.php', formData).then((respond) => {
                self.lockedUsers = [];
                $.each(respond.data, (index, data) => {
                    self.lockedUsers.push({
                        first_name: data.first_name,
                        last_name: data.last_name,
                        full_name: data.first_name + ' ' + data.last_name,
                        time_lapse: data.updated_at,
                        id: data.id,
                        profile: 'images/profile/' + data.profile,
                    });
                });
            });
        },

        changeStatus(status, userId) {
            if (confirm('Are you sure you want to update the user status ? ')) {
                const newStatus = status == 1 ? 0 : 1;
                const self = this;
                let formData = new FormData();
                formData.append('method', 'change_status');
                formData.append('status', newStatus);
                formData.append('user_id', userId);
                axios.post('server/api.php', formData).then((respond) => {
                    if (respond.data == 1) {
                        self.fetchUsers();
                        self.fetchActivities();
                        const myToastEl = $('#update-user-status');
                        myToastEl.show();
                        setTimeout(() => {
                            myToastEl.hide();
                        }, 10000);
                    } else {
                        alert('Something went wrong, Please try again...');
                    }
                });
            }
        },
        deleteUser(user, userId) {
            if (confirm(`Are you sure you want to delete  ${user}? `)) {
                const self = this;
                let formData = new FormData();
                formData.append('method', 'delete_user');
                formData.append('user_id', userId);
                axios.post('server/api.php', formData).then((respond) => {
                    console.log(respond);
                    if (respond.data == 1) {
                        const myToastEl = $('#delete-user');
                        myToastEl.show();
                        setTimeout(() => {
                            myToastEl.hide();
                        }, 10000);
                        self.fetchUsers();
                        self.fetchActivities();
                    } else {
                        alert('Something went wrong, Please try again...');
                    }
                });
            }
        },
    },
});
