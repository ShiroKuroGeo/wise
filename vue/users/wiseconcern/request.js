const { createApp } = Vue;

const login = createApp({
    data() {
        return {
            department: '',
            name: '',
            email: '',
            concern: 0,
            message: '',
            assignedto: 'John Dizon',
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
            if (vue.name == '' || vue.email == '' || vue.concern == 0 || vue.priority == '') {
                alert('Empty Field Required!');
            } else {
                var data = new FormData();

                data.append("method", "sendRequest");
                data.append('department', this.department);
                data.append('name', this.name);
                data.append('email', this.email);
                data.append('concern', this.concern);
                data.append('issue', this.message);
                data.append('assigned', this.assignedto);
                data.append('priority', this.priority);

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
            }
        }
    },
    created: function () {
        this.getSearchDepartment();
    }
});

login.mount('#request');