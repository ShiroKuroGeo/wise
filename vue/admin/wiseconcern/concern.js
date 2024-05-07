const { createApp } = Vue;

const account = createApp({
    data() {
        return {
            department: '',
            request_firstpic: [],
            getTotalDepartmentOrder: [],
            userPictureRequest: [],
            getTotalDepartmentRequest: [],
            userRequestInformations: [],
            userOrderInformations: [],
            totalPendingAdmin: 0,
            totalPendingDocumentation: 0,
            totalPendingHuman: 0,
            totalPendingAccounting: 0,
            totalDoneAdmin: 0,
            totalDoneDocumentation: 0,
            totalDoneHuman: 0,
            totalDoneAccounting: 0,
            pendingDoneStatus: 0,
            pendingDoneStatusId: 0,
            totalPendingSalesByDay: 0,
            totalDoneSalesByDay: 0,
            totalDoneSalesByMonth: 0,
            totalPendingSalesByMonth: 0,
            pendingDoneTheStatus: true,
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
        getDepartment() {
            const urlParams = new URLSearchParams(window.location.search);
            const departmentId000 = urlParams.get('department000');
            this.department = departmentId000;
        },
        getDepartmentOrder() {
            const vue = this;
            const urlParams = new URLSearchParams(window.location.search);
            const departmentId000 = urlParams.get('department000');

            var data = new FormData();
            data.append("method", "getDepartmentOrder");
            data.append("departmentId", departmentId000 + " Department");
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    vue.getTotalDepartmentOrder = [];

                    for (var v of r.data) {
                        vue.getTotalDepartmentOrder.push({
                            order_id: v.order_id,
                            department: v.department,
                            name: v.name,
                            email: v.email,
                            deadline: v.deadline,
                            description: v.description,
                            assigned: v.assigned,
                            priority: v.priority,
                            attachment: v.attachment,
                            status: v.status,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        })
                    }
                });
        },
        viewPictureRequest(id) {
            const vue = this;
            const urlParams = new URLSearchParams(window.location.search);
            const departmentId000 = urlParams.get('department000');

            var data = new FormData();
            data.append("method", "getDepartmentRequest");
            data.append("departmentId", departmentId000 + " Department");
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    vue.request_firstpic = [];

                    for (var v of r.data) {
                        if (v.request_id == id) {
                            vue.request_firstpic = JSON.parse(v.attachment);
                        }

                    }
                });

        },
        viewPictureOrder(id) {
            const vue = this;
            const urlParams = new URLSearchParams(window.location.search);
            const departmentId000 = urlParams.get('department000');

            var data = new FormData();
            data.append("method", "getDepartmentOrder");
            data.append("departmentId", departmentId000 + " Department");
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    vue.request_firstpic = [];

                    for (var v of r.data) {
                        if (v.order_id == id) {
                            vue.request_firstpic = JSON.parse(v.attachment);
                        }

                    }
                });

        },
        wordToCode(text) {
            return btoa(text);
        },
        codeToWord(text) {
            return atob(text);
        },
        getID() {
            const urlParams = new URLSearchParams(window.location.search);
            const departmentId000 = urlParams.get('id');
            return departmentId000;
        },
        requestInformation() {
            const vue = this;
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('id');

            var data = new FormData();
            data.append("method", "getAllUserConcern");
            data.append("id", vue.codeToWord(id));
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    vue.userRequestInformations = [];

                    for (var v of r.data) {
                        vue.userPictureRequest = JSON.parse(v.attachment);
                        vue.userRequestInformations.push({
                            request_id: v.request_id,
                            department: v.department,
                            name: v.name,
                            email: v.email,
                            concern: v.concern,
                            issue: v.issue,
                            assigned: v.assigned,
                            priority: v.priority,
                            attachment: v.attachment,
                            status: v.status,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        })
                    }
                });
        },
        orderInformation() {
            const vue = this;
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('id');

            var data = new FormData();
            data.append("method", "getAllUserOrder");
            data.append("id", vue.codeToWord(id));
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    vue.userOrderInformations = [];

                    for (var v of r.data) {
                        vue.userPictureRequest = JSON.parse(v.attachment);
                        vue.userOrderInformations.push({
                            order_id: v.order_id,
                            department: v.department,
                            name: v.name,
                            email: v.email,
                            deadline: v.deadline,
                            issue: v.description,
                            assigned: v.assigned,
                            priority: v.priority,
                            attachment: v.attachment,
                            status: v.status,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        })
                    }
                });
        },
        getDepartmentRequest() {
            const vue = this;
            const urlParams = new URLSearchParams(window.location.search);
            const departmentId000 = urlParams.get('department000');

            var data = new FormData();
            data.append("method", "getDepartmentRequest");
            data.append("departmentId", departmentId000 + " Department");
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    vue.getTotalDepartmentRequest = [];

                    for (var v of r.data) {
                        vue.getTotalDepartmentRequest.push({
                            request_id: v.request_id,
                            department: v.department,
                            name: v.name,
                            email: v.email,
                            concern: v.concern,
                            issue: v.issue,
                            assigned: v.assigned,
                            priority: v.priority,
                            attachment: v.attachment,
                            status: v.status,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        })
                    }
                });
        },
        getIdMarkAsDone(id) {
            this.pendingDoneStatusId = id;
        },
        pendingDoneRequest() {
            const vue = this;
            if (vue.pendingDoneStatus == 1) {
                var data = new FormData();
                data.append("method", "pendingDoneRequest");
                data.append("status", 0);
                data.append("id", vue.pendingDoneStatusId);
                axios.post('../../routes/admin/concern.php', data)
                    .then(function (r) {
                        if (r.data == 200) {
                            alert('Succesfully Updated!');
                            vue.requestInformation();
                        } else {
                            alert('Haysht senshia!');
                        }
                    });
            } else {
                var data = new FormData();
                data.append("method", "pendingDoneRequest");
                data.append("status", 1);
                data.append("id", vue.pendingDoneStatusId);
                axios.post('../../routes/admin/concern.php', data)
                    .then(function (r) {
                        if (r.data == 200) {
                            alert('Succesfully Updated!');
                            vue.requestInformation();
                        } else {
                            alert('Haysht senshia!');
                        }
                    });
            }
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
        pendingDoneOrder() {
            const vue = this;
            if (vue.pendingDoneStatus == 1) {
                var data = new FormData();
                data.append("method", "pendingDoneOrder");
                data.append("status", 0);
                data.append("id", vue.pendingDoneStatusId);
                axios.post('../../routes/admin/concern.php', data)
                    .then(function (r) {
                        if (r.data == 200) {
                            alert('Succesfully Updated!');
                            vue.requestInformation();
                        } else {
                            alert('Haysht senshia!');
                        }
                    });
            } else {
                var data = new FormData();
                data.append("method", "pendingDoneOrder");
                data.append("status", 1);
                data.append("id", vue.pendingDoneStatusId);
                axios.post('../../routes/admin/concern.php', data)
                    .then(function (r) {
                        if (r.data == 200) {
                            alert('Succesfully Updated!');
                            vue.requestInformation();
                        } else {
                            alert('Haysht senshia!');
                        }
                    });
            }
        },
        resetFunction() {
            this.getDepartment();
            this.getDepartmentOrder();
            this.getDepartmentRequest();
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
        },
    },
    created: function () {
        this.resetFunction();
        setInterval(this.resetFunction, 5000);
        this.requestInformation();
        this.orderInformation();
    },
});

account.mount('#application');