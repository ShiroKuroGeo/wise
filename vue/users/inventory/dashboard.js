const { createApp } = Vue;

const login = createApp({
    data() {
        return {
            tasks: [],
            tasksUpToFive: [],
            selectedMonth: [],
            selectTask: [],
            tasksCompleted: [],
            user_id: '',
            monthNumber: 0,
            countdown: 5,
            countDownToThree: 3,
            fullname: '',
            email: '',
            password: '',
            role: '',
            status: '',
            created_at: '',
            updated_at: '',
            descriptioninsert: '',
            departmentinsert: 'IT Deparment',
            custodianinsert: '',
            duedateinsert: '',
            statusinsert: 0,
        }
    },
    methods: {
        updateStatus(id) {
            const vue = this;

            var data = new FormData();
            data.append("method", "updateStatus");
            data.append("id", id);
            axios.post('../../routes/users/inventory.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert('Good Job!');
                        window.location.reload();
                    } else {
                        alert(r.data);
                    }
                })
        },
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
        getAgo(createdAt) {
            const currentTime = new Date();
            const createdTime = new Date(createdAt);
            const timeDifference = currentTime.getTime() - createdTime.getTime();
            const secondsDifference = Math.floor(timeDifference / 1000);

            if (secondsDifference < 60) {
                return secondsDifference + ' seconds ago';
            } else if (secondsDifference < 3600) {
                const minutes = Math.floor(secondsDifference / 60);
                return minutes + (minutes === 1 ? ' minute ago' : ' minutes ago');
            } else if (secondsDifference < 86400) {
                const hours = Math.floor(secondsDifference / 3600);
                return hours + (hours === 1 ? ' hour ago' : ' hours ago');
            } else {
                const days = Math.floor(secondsDifference / 86400);
                return days + (days === 1 ? ' day ago' : ' days ago');
            }
        },

        getAllInformationOfUser() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllInformationOfUser");
            axios.post('../../routes/users/inventory.php', data)
                .then(function (r) {

                    for (var v of r.data) {
                        vue.user_id = v.user_id;
                        vue.fullname = v.fullname;
                        vue.email = v.email;
                        vue.password = v.password;
                        vue.role = v.role;
                        vue.status = v.status;
                        vue.created_at = v.created_at;
                        vue.updated_at = v.updated_at;
                    }
                })
        },
        insertTask() {
            const vue = this;

            var data = new FormData();
            data.append('method', 'insertTask');
            data.append('username', vue.fullname);
            data.append('description', vue.descriptioninsert);
            data.append('department', vue.departmentinsert);
            data.append('custodian', vue.custodianinsert);
            data.append('duedate', vue.duedateinsert);
            data.append('status', vue.statusinsert);
            axios.post('../../routes/users/inventory.php', data)
                .then(function (r) {
                    if (r.data == 200) {
                        alert('Good Job!');
                    } else {
                        alert(r.data);
                    }
                })
        },
        getDetail(task_id) {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllTask");
            axios.post('../../routes/users/inventory.php', data)
                .then(function (r) {
                    vue.selectTask = [];

                    for (var v of r.data) {
                        if (v.task_id == task_id) {
                            vue.selectTask.push({
                                task_id: v.task_id,
                                username: v.username,
                                description: v.description,
                                department: v.department,
                                custodian: v.custodian,
                                duedate: v.duedate,
                                status: v.status,
                                created_at: v.created_at,
                                updated_at: v.updated_at,
                            })
                        }
                    }
                })
        },
        selectMonth() {
            const vue = this;

            var data = new FormData();
            data.append("method", "selectMonth");
            data.append("month", vue.monthNumber);
            data.append("id", vue.fullname);
            axios.post('../../routes/users/inventory.php', data)
                .then(function (r) {
                    vue.selectedMonth = [];

                    for (var v of r.data) {
                        vue.selectedMonth.push({
                            task_id: v.task_id,
                            username: v.username,
                            description: v.description,
                            department: v.department,
                            custodian: v.custodian,
                            duedate: v.duedate,
                            status: v.status,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        })
                    }
                })
        },
        getAllTask() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllTask");
            axios.post('../../routes/users/inventory.php', data)
                .then(function (r) {
                    vue.tasks = [];

                    for (var v of r.data) {

                        if (v.username == vue.fullname) {
                            vue.tasks.push({
                                task_id: v.task_id,
                                username: v.username,
                                description: v.description,
                                department: v.department,
                                custodian: v.custodian,
                                duedate: v.duedate,
                                status: v.status,
                                created_at: v.created_at,
                                updated_at: v.updated_at,
                            })
                        }
                    }
                })
        },
        getFiveTask() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllTaskForFive");
            data.append("user", vue.fullname);
            axios.post('../../routes/users/inventory.php', data)
                .then(function (r) {
                    vue.tasksUpToFive = [];
                    vue.tasksCompleted = [];

                    for (var i = 0; i <= 5; i++) {
                        var v = r.data[i];
                        if (v.username == vue.fullname) {
                            vue.tasksUpToFive.push({
                                task_id: v.task_id,
                                username: v.username,
                                description: v.description,
                                department: v.department,
                                custodian: v.custodian,
                                duedate: v.duedate,
                                status: v.status,
                                created_at: v.created_at,
                                updated_at: v.updated_at,
                            });
                        }
                        if (v.status == 1) {
                            if (v.username == vue.fullname) {
                                vue.tasksCompleted.push({
                                    task_id: v.task_id,
                                    username: v.username,
                                    description: v.description,
                                    department: v.department,
                                    custodian: v.custodian,
                                    duedate: v.duedate,
                                    status: v.status,
                                    created_at: v.created_at,
                                    updated_at: v.updated_at,
                                })
                            }
                        }
                    }
                })
        },
        fiveSecond() {
            const countdownInterval = setInterval(() => {
                this.countdown--;

                if (this.countdown <= 0) {
                    clearInterval(countdownInterval);
                    this.countdown = 'System Restore!';
                }
            }, 1000);
        },
        resetFunction() {
            this.getAllInformationOfUser();
            this.getAllTask();
            this.selectMonth();
            this.getFiveTask();
        }
    },
    created: function () {
        this.resetFunction();
        this.fiveSecond();
        setInterval(this.resetFunction, 5000);
    },
});

login.mount('.application');