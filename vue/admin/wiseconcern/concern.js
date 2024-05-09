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
            allTotalRequest: [],
            allTotalOrder: [],
            allSearchedUserConcern: [],
            allYearLevel: [],
            userOrderInformations: [],
            allSearchedUserJob: [],
            allDeparment: [],
            allAssigned: [],
            allPriority: [],
            getOrderAction: [],
            getRequestAction: [],
            departmentSearch: 'Documents Department',
            statusSearch: 0,
            assignedSearch: 'John Dizon',
            ticketCodeRequest: 'WISE-REQ-00',
            ticketCodeOrder: 'WISE-REQ-00',
            prioritySearch: 'Hard',
            monthSearch: 5,
            actionTaken: 1,
            commentAction: '',
            yearSearch: 2024,
            totalPendingAdmin: 0,
            selectionTable: 2,
            totalPendingDocumentation: 0,
            totalPendingHuman: 0,
            countRequestSearch: 0,
            countJobSearch: 0,
            totalPendingAccounting: 0,
            totalDoneAdmin: 0,
            totalDoneDocumentation: 0,
            totalDoneHuman: 0,
            totalDoneAccounting: 0,
            allowedChangeStatus: false,
            pendingDoneStatus: 0,
            pendingDoneStatusId: 0,
            totalPendingSalesByDay: 0,
            totalDoneSalesByDay: 0,
            totalDoneSalesByMonth: 0,
            totalPendingSalesByMonth: 0,
            pendingDoneTheStatus: true,
            totalPendingMarketingByDay: 0,
            totalDoneMarketingByDay: 0,
            totalDoneMarketingByMonth: 0,
            totalPendingMarketingByMonth: 0,
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
        orderActionInformation() {
            const vue = this;
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('id');

            var data = new FormData();
            data.append("method", "getAllTheOrder");
            data.append("id", vue.codeToWord(id));
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    vue.getOrderAction = [];

                    for (var v of r.data) {
                        vue.getOrderAction.push({
                            action_id: v.action_id,
                            table_name: v.table_name,
                            table_id: v.table_id,
                            action_taken: v.action_taken,
                            comment_taken: v.comment_taken,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        })
                    }
                });
        },
        requestActionInformation() {
            const vue = this;
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('id');

            var data = new FormData();
            data.append("method", "getAllTheRequest");
            data.append("id", vue.codeToWord(id));
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    vue.getRequestAction = [];

                    for (var v of r.data) {
                        vue.getRequestAction.push({
                            action_id: v.action_id,
                            table_name: v.table_name,
                            table_id: v.table_id,
                            action_taken: v.action_taken,
                            comment_taken: v.comment_taken,
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
                            window.location.reload();
                        } else {
                            alert(r.data + ' There is something is wrong!');
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
                            window.location.reload();
                        } else {
                            alert(r.data + ' There is something is wrong!');
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
                            window.location.reload();
                        } else {
                            alert(r.data + ' There is something is wrong!');
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
                            window.location.reload();
                        } else {
                            alert(r.data + ' There is something is wrong!');
                        }
                    });
            }
        },
        getAllYearLevel() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllYearLevel");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.allYearLevel = [];

                    for (var v of r.data) {
                        vue.allYearLevel.push({
                            year: v.year
                        });
                    }
                });
        },
        getAllDepartment() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllDepartment");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.allDeparment = [];

                    for (var v of r.data) {
                        vue.allDeparment.push({
                            department: v.department
                        });
                    }
                });
        },
        getAllAssigned() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllAssigned");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.allAssigned = [];

                    for (var v of r.data) {
                        vue.allAssigned.push({
                            assigned: v.assigned
                        });
                    }
                });
        },
        getAllPriority() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllPriority");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.allPriority = [];

                    for (var v of r.data) {
                        vue.allPriority.push({
                            priority: v.priority
                        });
                    }
                });
        },
        getAllMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllMonth");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.allMonth = [];

                    for (var v of r.data) {
                        vue.allMonth.push({
                            month: v.month
                        });
                    }
                });
        },
        monthToString(monthNumber) {
            const monthNames = [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ];
            return monthNames[monthNumber - 1];
        },
        searchThisDataRequest() {


            const vue = this;

            var data = new FormData();
            data.append("method", "getAllSearchedUserConcern");
            data.append("department", vue.departmentSearch);
            data.append("assigned", vue.assignedSearch);
            data.append("status", vue.statusSearch);
            data.append("priority", vue.prioritySearch);
            data.append("month", vue.monthSearch);
            data.append("year", vue.yearSearch);
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    vue.allSearchedUserConcern = [];
                    vue.countRequestSearch = r.data.length;

                    for (var v of r.data) {
                        vue.allSearchedUserConcern.push({
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
                        });
                    }
                });
        },
        searchThisDataOrder() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllSearchedUserJob");
            data.append("department", vue.departmentSearch);
            data.append("assigned", vue.assignedSearch);
            data.append("status", vue.statusSearch);
            data.append("priority", vue.prioritySearch);
            data.append("month", vue.monthSearch);
            data.append("year", vue.yearSearch);
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    vue.allSearchedUserJob = [];
                    vue.countJobSearch = r.data.length;

                    for (var v of r.data) {
                        vue.allSearchedUserJob.push({
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
                        });
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
        addThisActionRequest(request_id) {
            const vue = this;

            var data = new FormData();
            data.append("method", "addThisToAction");
            data.append("tableName", 'Request');
            data.append("table_id", request_id);
            data.append("actionTaken", vue.actionTaken);
            data.append("commentAction", vue.commentAction);
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        vue.allowedChangeStatus = true;
                    } else {
                        alert(r.data + ' There is something is wrong!');
                    }
                });
        },
        addThisActionOrder(order_id) {
            const vue = this;

            var data = new FormData();
            data.append("method", "addThisToAction");
            data.append("tableName", 'Order');
            data.append("table_id", order_id);
            data.append("actionTaken", vue.actionTaken);
            data.append("commentAction", vue.commentAction);
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        vue.allowedChangeStatus = true;
                    } else {
                        alert(r.data + ' There is something is wrong!');
                    }
                });
        },
        getAllTotalRequest() {
            const vue = this;
            var data = new FormData();
            data.append("method", "getAllTotalRequest");
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    vue.allTotalRequest = [];

                    for (var v of r.data) {
                        vue.allTotalRequest.push({
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
        getAllTotalOrder() {
            const vue = this;
            var data = new FormData();
            data.append("method", "getAllTotalOrder");
            axios.post('../../routes/admin/concern.php', data)
                .then(function (r) {
                    vue.allTotalOrder = [];

                    for (var v of r.data) {
                        vue.allTotalOrder.push({
                            order_id: v.order_id,
                            department: v.department,
                            name: v.name,
                            email: v.email,
                            deadline: v.deadline,
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
        getRequestDelete(id) {
            if (confirm('Are you sure want to delete this data?')) {
                const vue = this;
                var data = new FormData();
                data.append("method", "getRequestDelete");
                data.append("id", id);
                axios.post('../../routes/admin/route.php', data)
                    .then(function (r) {
                        if (r.data == 200) {
                            vue.allowedChangeStatus = true;
                        } else {
                            alert(r.data + ' There is something is wrong!');
                        }
                    });
            } else {
                alert('Data safety not deleted!');
            }

        },
        getOrderDelete(id) {
            if (confirm('Are you sure want to delete this data?')) {
                const vue = this;
                var data = new FormData();
                data.append("method", "getOrderDelete");
                data.append("id", id);
                axios.post('../../routes/admin/route.php', data)
                    .then(function (r) {
                        if (r.data == 200) {
                            vue.allowedChangeStatus = true;
                        } else {
                            alert(r.data + ' There is something is wrong!');
                        }
                    });
            } else {
                alert('Data safety not deleted!');
            }

        },
        resetFunction() {
            this.getAllTotalRequest();
            this.getAllTotalOrder();
            this.getDepartment();
            this.getAllMonth();
            this.getAllYearLevel();
            this.getDepartmentOrder();
            this.getAllAssigned();
            this.getAllDepartment();
            this.getAllPriority();
            this.getDepartmentRequest();
            this.getTotalPendingAdmin();
            this.orderActionInformation();
            this.requestActionInformation();
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
            this.getTotalPendingMarketingByDay();
            this.getTotalDoneMarketingByDay();
            this.getTotalDoneMarketingByMonth();
            this.getTotalPendingMarketingByMonth();
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