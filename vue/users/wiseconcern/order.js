const { createApp } = Vue;

const login = createApp({
    data() {
        return {
            department: '',
            name: '',
            email: '',
            deadline: '',
            message: '',
            assignedto: 'John Dizon',
            priority: '',
        }
    },
    methods: {
        getSearchDepartment() {
            const urlParams = new URLSearchParams(window.location.search);
            const departmentId001 = urlParams.get('departmentId002');
            this.department = departmentId001;
        },
        sendOrder() {
            const vue = this;
            if (vue.name == '' || vue.email == '' || vue.deadline == 0 || vue.priority == '') {
                alert('Empty Field Required!');
            } else {
                var data = new FormData();
                data.append("method", "sendOrder");
                data.append('department', this.department);
                data.append('name', this.name);
                data.append('email', this.email);
                data.append('deadline', this.deadline);
                data.append('message', this.message);
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

login.mount('#order');