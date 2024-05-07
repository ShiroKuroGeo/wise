const { createApp } = Vue;

const account = createApp({
    data() {
        return {
            minutes: 0,
            seconds: 0,
            countdownMinutes: 2,
            requests: [],
            orders: [],
            users: [],
        }
    },
    methods: {
        goToReset() {
            window.location.href = "confirmreset.php";
        },
        printAndReset() {
            window.onbeforeprint = function () {
                console.log("Printing started");
            };

            window.onafterprint = function () {
                console.log("Printing finished");

                if (confirm("Did you print?")) {
                    const vue = this;

                    var data = new FormData();
                    data.append("method", "resetSystem");
                    axios.post('../../routes/admin/route.php', data)
                        .then(function (r) {
                            if (r.data == 200) {
                                alert('Application System Reset!');
                                window.location.href = "dashboard.php";
                            } else {
                                alert(r.data);
                            }
                        });
                } else {
                    alert("User canceled printing");
                }

                window.onbeforeprint = null;
                window.onafterprint = null;
            };

            window.print();
        },
        getAllRequests() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllToResetRequests");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.requests = [];

                    for (var v of r.data) {
                        vue.requests.push({
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
        getAllOrders() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllToResetOrders");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.orders = [];

                    for (var v of r.data) {
                        vue.orders.push({
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
                        });
                    }
                });
        },
        getAllUsers() {
            const vue = this;

            var data = new FormData();
            data.append("method", "getAllToResetUsers");
            axios.post('../../routes/admin/route.php', data)
                .then(function (r) {
                    vue.users = [];

                    for (var v of r.data) {
                        vue.users.push({
                            user_id: v.user_id,
                            fullname: v.fullname,
                            email: v.email,
                            password: v.password,
                            role: v.role,
                            status: v.status,
                            created_at: v.created_at,
                            updated_at: v.updated_at,
                        });
                    }
                });
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
        resetSystem() {
            let endTime;

            const storedEndTime = localStorage.getItem('endTime');
            if (storedEndTime) {
                endTime = parseInt(storedEndTime);
            } else {
                endTime = Math.floor(Date.now() / 1000) + (this.countdownMinutes * 60);
                localStorage.setItem('endTime', endTime.toString());
            }

            let countdownInterval = setInterval(() => {
                let now = Math.floor(Date.now() / 1000);
                let timeLeft = endTime - now;

                this.minutes = Math.floor(timeLeft / 60);
                this.seconds = timeLeft % 60;

                if (timeLeft <= 0) {
                    window.location.href = "notavail.php";
                    localStorage.removeItem('endTime');
                    clearInterval(countdownInterval);
                }
            }, 1000);
        },
    },
    created: function () {
        this.getAllRequests();
        this.getAllOrders();
        this.getAllUsers();
        this.resetSystem();
    },
});

account.mount('#application');