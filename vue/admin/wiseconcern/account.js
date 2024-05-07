const { createApp } = Vue;

const account = createApp({
    data() {
        return {
            users: [],
            selectedUser: [],
            fullname: '',
            email: '',
            uppassword: '',
            upUser_id: 0,
            upFullname: '',
            upEmail: '',
            upRole: '',
            upStatus: '',
            totalPendingAdmin: 0,
            totalPendingDocumentation: 0,
            totalPendingHuman: 0,
            totalPendingAccounting: 0,
            totalDoneAdmin: 0,
            totalDoneDocumentation: 0,
            totalDoneHuman: 0,
            totalDoneAccounting: 0,
            totalPendingSalesByDay: 0,
            totalDoneSalesByDay: 0,
            totalDoneSalesByMonth: 0,
            totalPendingSalesByMonth: 0,
            showhide: true,
        }
    },
    methods: {
        getDateToString(dateToString) {
            var date = new Date(dateToString);

            var months = [
                "January", "February", "March", "April", "May", "June", "July", "August",
                "September", "October", "November", "December"
            ];

            var monthIndex = date.getMonth();
            var day = date.getDate();
            var year = date.getFullYear();
            var hours = date.getHours();
            var minutes = date.getMinutes();

            if (hours < 5) {
                hours = 5;
            }

            var am_pm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12;

            if (minutes < 10) {
                minutes = '0' + minutes;
            }

            var formattedDate = months[monthIndex] + ' ' + day + ', ' + year + ' at ' + hours + ':' + minutes + ' ' + am_pm;

            return formattedDate;
        },
        getInformationOfAllUser() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getInformationOfAllUser");
            axios.post('../../routes/admin/account.php', data)
                .then(function (r) {
                    vue.users = [];

                    for (var v of r.data) {
                        if (v.role != 1) {
                            vue.users.push({
                                user_id: v.user_id,
                                fullname: v.fullname,
                                email: v.email,
                                password: v.password,
                                role: v.role,
                                status: v.status,
                                created_at: v.created_at,
                                updated_at: v.updated_at,
                            })
                        }
                    }
                });
        },
        saveUser() {
            const vue = this;
            if (vue.fullname == '' && vue.email == '') {
                alert('No Fields!');
            } else {
                var data = new FormData();
                data.append("method", "saveUser");
                data.append("fullname", vue.fullname);
                data.append("email", vue.email);
                axios.post('../../routes/admin/account.php', data)
                    .then(function (r) {
                        if (r.data == 200) {
                            alert('User will be added in the list!');
                        } else {
                            console.log(r.data);
                        }
                    });
            }
        },
        checkId(id) {
            const vue = this;

            var data = new FormData();
            data.append("method", "getInformationOfAllUser");
            axios.post('../../routes/admin/account.php', data)
                .then(function (r) {
                    vue.selectedUser = [];

                    for (var v of r.data) {
                        if (v.user_id == id) {
                            vue.upFullname = v.fullname;
                            vue.upUser_id = v.user_id;
                            vue.upEmail = v.email;
                            vue.upRole = v.role;
                            vue.upStatus = v.status;
                        }
                    }
                });
        },
        changeInformationAboutUser() {
            const vue = this;

            var data = new FormData();
            data.append("method", "changeInformationAboutUser");
            data.append("upFullname", vue.upFullname);
            data.append("upUser_id", vue.upUser_id);
            data.append("upEmail", vue.upEmail);
            data.append("uppassword", vue.uppassword);
            data.append("upRole", vue.upRole);
            data.append("upStatus", vue.upStatus);
            axios.post('../../routes/admin/account.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert('All Sets!');
                    } else {
                        alert('Something is not right!');
                    }
                });
        },
        getTotalPendingAdmin() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalPendingAdmin");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalPendingAdmin = v.pendingStatus;
                    }
                });
        },
        getTotalPendingDocumentation() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalPendingDocumentation");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalPendingDocumentation = v.pendingStatus;
                    }
                });
        },
        getTotalPendingHuman() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalPendingHuman");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalPendingHuman = v.pendingStatus;
                    }
                });
        },
        getTotalPendingAccounting() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalPendingAccounting");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalPendingAccounting = v.pendingStatus;
                    }
                });
        },
        getTotalDoneAdmin() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDoneAdmin");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalDoneAdmin = v.pendingStatus;
                    }
                });
        },
        getTotalDoneDocumentation() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDoneDocumentation");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalDoneDocumentation = v.pendingStatus;
                    }
                });
        },
        getTotalDoneHuman() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDoneHuman");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalDoneHuman = v.pendingStatus;
                    }
                });
        },
        getTotalDoneAccounting() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDoneAccounting");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalDoneAccounting = v.pendingStatus;
                    }
                });
        },
        getTotalPendingSalesByDay() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalPendingSalesByDay");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalPendingSalesByDay = v.pendingStatus;
                    }
                });
        },
        getTotalDoneSalesByDay() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDoneSalesByDay");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalDoneSalesByDay = v.pendingStatus;
                    }
                });
        },
        getTotalDoneSalesByMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDoneSalesByMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalDoneSalesByMonth = v.pendingStatus;
                    }
                });
        },
        getTotalPendingSalesByMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalPendingSalesByMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalPendingSalesByMonth = v.pendingStatus;
                    }
                });
        },
        toggleShowHidePassword() {
            this.showhide = !this.showhide;
        },
        resetFunction() {
            this.getInformationOfAllUser();
            this.getTotalPendingAdmin();
            this.getTotalPendingDocumentation();
            this.getTotalPendingHuman();
            this.getTotalPendingAccounting();
            this.getTotalDoneAdmin();
            this.getTotalDoneDocumentation();
            this.getTotalDoneHuman();
            this.getTotalDoneAccounting();

            this.getTotalPendingSalesByDay();
            this.getTotalDoneSalesByDay();
            this.getTotalDoneSalesByMonth();
            this.getTotalPendingSalesByMonth();
        }
    },
    created: function () {
        this.resetFunction();
        setInterval(this.resetFunction, 5000);
    },
});

account.mount('#application');