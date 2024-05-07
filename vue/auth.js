const { createApp } = Vue;

const login = createApp({
    data() {
        return {
            email: '',
            password: '',
            hideShow: true
        }
    },
    methods: {
        login: function () {
            const vue = this;
            if (vue.email == '' || vue.password == '') {
                document.getElementById('emptyfield').classList.remove('form-control__error');
                document.getElementById('nofailedemail').classList.add('text-danger');
                document.getElementById('nofailedpass').classList.add('text-danger');
            } else {
                var data = new FormData();
                data.append("method", "login");
                data.append('email', vue.email);
                data.append('password', vue.password);
                axios.post('../routes/auth.php', data)
                    .then(function (r) {
                        if (r.data == 1) {
                            window.location.href = "admin/dashboard.php";
                        } else if (r.data == 2) {
                            window.location.href = "../pages/users/index.php";
                        } else {
                            document.getElementById('emptyfield').classList.add('form-control__error');
                            document.getElementById('nofailedemail').classList.remove('text-danger');
                            document.getElementById('nofailedpass').classList.remove('text-danger');
                            document.getElementById('wronguser').classList.remove('form-control__error');
                        }
                    });
            }
        },
        hideThenShow(){
            this.hideShow = !this.hideShow;
        }
    },
    created: function () {

    }
});

login.mount('#authentication');