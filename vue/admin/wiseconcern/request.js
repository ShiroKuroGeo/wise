const { createApp } = Vue;

const login = createApp({
    data() {
        return {
            department: '',
            name: '',
            email: '',
            concern: '',
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

            var data = new FormData();
            data.append("method", "sendRequest");
            data.append('department', this.department);
            data.append('name', this.name);
            data.append('email', this.email);
            data.append('concern', this.concern);
            data.append('issue', this.message);
            data.append('assigned', this.assignedto);
            data.append('priority', this.priority);
            data.append('attachment', document.getElementById('pictures').files);
            axios.post('../../../routes/users/user.php', data)
                .then(function (r) {
                    alert(r.data);
                });
        }
    },
    created: function () {
        this.getSearchDepartment();
    }
});

login.mount('#request');