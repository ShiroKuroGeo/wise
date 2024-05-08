const { createApp } = Vue;

const login = createApp({
    data() {
        return {
            department: '',
            totalOrder: 0,
            totalRequest: 0,
            totalDailyPendingRequest: 0,
            totalDailyPendingOrder: 0,
            totalDailyDoneRequest: 0,
            totalDailyDoneOrder: 0,
            totalPendingAdmin: 0,
            totalPendingDocumentation: 0,
            totalPendingHuman: 0,
            totalPendingAccounting: 0,
            totalDoneAdmin: 0,
            totalDoneDocumentation: 0,
            totalDoneHuman: 0,
            totalDoneAccounting: 0,
            totalPendingAdminByMonth: 0,
            totalPendingDocumentationByMonth: 0,
            totalPendingHumanByMonth: 0,
            totalPendingAccountingByMonth: 0,
            totalDoneAdminByMonth: 0,
            totalDoneDocumentationByMonth: 0,
            totalDoneHumanByMonth: 0,
            totalDoneAccountingByMonth: 0,
            totalPendingSalesByDay: 0,
            totalDoneSalesByDay: 0,
            totalDoneSalesByMonth: 0,
            totalPendingSalesByMonth: 0,
            totalPendingMarketingByDay: 0,
            totalDoneMarketingByDay: 0,
            totalDoneMarketingByMonth: 0,
            totalPendingMarketingByMonth: 0,
            labelToChart: [],
            countToChart: [],
            adminuser_id: '',
            adminfullname: '',
            adminemail: '',
            adminpassword: '',
            adminrole: '',
            adminstatus: '',
            admincreated_at: '',
            adminupdated_at: '',
        }
    },
    methods: {
        users() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getInformationOfAllUser");
            axios.post('../../routes/admin/account.php', data)
                .then(function (r) {

                    for (var v of r.data) {
                        if (v.role == 1) {
                            vue.adminuser_id = v.user_id;
                            vue.adminfullname = v.fullname;
                            vue.adminemail = v.email;
                            vue.adminpassword = v.password;
                            vue.adminrole = v.role;
                            vue.adminstatus = v.status;
                            vue.admincreated_at = v.created_at;
                            vue.adminupdated_at = v.updated_at;
                        }
                    }
                });
        },
        reset() {
            let result = '';
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            for (let i = 0; i < 101; i++) {
                result += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            window.location.href = "reset.php?id=" + result;
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
        getSearchDepartment() {
            const urlParams = new URLSearchParams(window.location.search);
            const departmentId001 = urlParams.get('department000');
            this.department = departmentId001;
        },
        getAllOrders() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllOrders");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.totalOrder = r.data.length;
                });
        },
        getAllRequest() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllRequest");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.totalRequest = r.data.length;
                });
        },
        getTotalDailyPendingRequest() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDailyPendingRequest");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.totalDailyPendingRequest = r.data.length;
                });
        },
        getTotalDailyPendingOrder() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDailyPendingOrder");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.totalDailyPendingOrder = r.data.length;
                });
        },
        getTotalDailyDoneRequest() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDailyDoneRequest");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.totalDailyDoneRequest = r.data.length;
                });
        },
        getTotalDailyDoneOrder() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDailyDoneOrder");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.totalDailyDoneOrder = r.data.length;
                });
        },
        getTotalPendingAdminByMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalPendingAdminByMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalPendingAdminByMonth = v.pendingStatus;
                    }
                });
        },
        getTotalPendingDocumentationByMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalPendingDocumentationByMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalPendingDocumentationByMonth = v.pendingStatus;
                    }
                });
        },
        getTotalPendingHumanByMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalPendingHumanByMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalPendingHumanByMonth = v.pendingStatus;
                    }
                });
        },
        getTotalPendingAccountingByMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalPendingAccountingByMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalPendingAccountingByMonth = v.pendingStatus;
                    }
                });
        },
        getTotalDoneAdminByMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDoneAdminByMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalDoneAdminByMonth = v.pendingStatus;
                    }
                });
        },
        getTotalDoneDocumentationByMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDoneDocumentationByMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalDoneDocumentationByMonth = v.pendingStatus;
                    }
                });
        },
        getTotalDoneHumanByMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDoneHumanByMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalDoneHumanByMonth = v.pendingStatus;
                    }
                });
        },
        getTotalDoneAccountingByMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDoneAccountingByMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalDoneAccountingByMonth = v.pendingStatus;
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
        getTotalPendingMarketingByDay() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalPendingMarketingByDay");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalPendingMarketingByDay = v.pendingStatus;
                    }
                });
        },
        getTotalDoneMarketingByDay() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDoneMarketingByDay");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalDoneMarketingByDay = v.pendingStatus;
                    }
                });
        },
        getTotalDoneMarketingByMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalDoneMarketingByMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalDoneMarketingByMonth = v.pendingStatus;
                    }
                });
        },
        getTotalPendingMarketingByMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalPendingMarketingByMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.totalPendingMarketingByMonth = v.pendingStatus;
                    }
                });
        },
        getTotalToChart() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalToChart");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    for (var v of r.data) {
                        vue.labelToChart.push(v.label);
                        vue.countToChart.push(v.count);
                    }
                });
        },
        chart() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getTotalToChart");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    const labelToChart = [];
                    const countToChart = [];

                    r.data.forEach(function (d) {
                        labelToChart.push({
                            'label': d.label
                        })
                        countToChart.push({
                            'count': d.count
                        })
                    });

                    const colors = ['red', 'blue'];

                    new Chart("interactive-chart2", {
                        type: "pie",
                        data: {
                            labels: labelToChart.map(row => row.label),
                            datasets: [{
                                backgroundColor: colors,
                                data: countToChart.map(row => row.count)
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Pending and Done Concern and Order"
                            }
                        }
                    });
                });
        },
        resetFunction() {
            this.getSearchDepartment();
            this.getAllOrders();
            this.getTotalToChart();
            this.getAllRequest();
            this.getTotalDailyPendingRequest();
            this.getTotalDailyPendingOrder();
            this.getTotalDailyDoneRequest();
            this.getTotalDailyDoneOrder();
            this.getTotalPendingAdmin();
            this.getTotalPendingDocumentation();
            this.getTotalPendingHuman();
            this.getTotalPendingAccounting();
            this.getTotalDoneAdmin();
            this.getTotalDoneDocumentation();
            this.getTotalDoneHuman();
            this.getTotalDoneAccounting();
            this.getTotalPendingAdminByMonth();
            this.getTotalPendingDocumentationByMonth();
            this.getTotalPendingHumanByMonth();
            this.getTotalPendingAccountingByMonth();
            this.getTotalDoneAdminByMonth();
            this.getTotalDoneDocumentationByMonth();
            this.getTotalDoneHumanByMonth();
            this.getTotalDoneAccountingByMonth();
            this.getTotalPendingSalesByDay();
            this.getTotalDoneSalesByDay();
            this.getTotalDoneSalesByMonth();
            this.getTotalPendingSalesByMonth();
            this.getTotalPendingMarketingByDay();
            this.getTotalDoneMarketingByDay();
            this.getTotalDoneMarketingByMonth();
            this.getTotalPendingMarketingByMonth();
        }
    },
    created: function () {
        this.resetFunction();
        setInterval(this.resetFunction, 5000);
        this.chart();
    },
});

login.mount('#application');