const { createApp } = Vue;

const login = createApp({
    data() {
        return {
            department: '',
            name: '',
            email: '',
            concern: 0,
            message: '',
            assignedto: 'IT Department',
            priority: '',
        }
    },
    methods: {
        getSearchDepartment() {
            const urlParams = new URLSearchParams(window.location.search);
            const departmentId001 = urlParams.get('departmentId001');
            this.department = departmentId001;
        },
        sendRequest() {

            const vue = this;
            if (vue.name == '' || vue.email == '' || vue.deadline == 0 || vue.priority == '') {
                alert('Empty Field Required!');
            } else {
                var data = new FormData();
                data.append("method", "verifyEmail");
                data.append('email', vue.email);
                axios.post('../../../routes/users/user.php', data)
                    .then(function (r) {
                        if (r.data == 200) {
                            var data = new FormData();

                            data.append("method", "sendRequest");
                            data.append('department', vue.department);
                            data.append('name', vue.name);
                            data.append('email', vue.email);
                            data.append('concern', vue.concern);
                            data.append('issue', vue.message);
                            data.append('assigned', vue.assignedto);
                            data.append('priority', vue.priority);

                            const inputFiles = document.getElementById('pictures').files;
                            for (let i = 0; i < inputFiles.length; i++) {
                                data.append('pictures[]', inputFiles[i]);
                            }

                            axios.post('../../../routes/users/user.php', data)
                                .then(function (r) {
                                    if (r.data == 200) {
                                        window.location.href = "/wise/assets/alert/requestordersucces.php";
                                    } else {
                                        alert("Something is not right!");
                                        console.log(r.data);
                                    }
                                });
                        } else {
                            alert('Email is not registered!');
                        }
                    });
            }
        }
    },
    created: function () {
        this.getSearchDepartment();
    }
});

login.mount('#request');