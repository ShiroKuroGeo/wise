<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wise Concern</title>
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="icon" type="image/x-icon" href="/wise/assets/img/logo/wiselogo.png">
    <script type="text/javascript" src="../assets/js/app.js"></script>
    <script type="text/javascript" src="../assets/js/selectize.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous">
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
        }

        .red {
            border: 1px red;
        }

        .form-control-outline-danger {
            border: 1px solid red;
        }

        .input-group-text {
            cursor: pointer;
        }

        .input-group-text .toggle-password {
            float: right;
        }
    </style>
</head>

<body>
    <div class="wrapper" id="authentication">
        <div class="wrapper login">
            <main class="main">
                <div class="reg__wrap" style="background-color: rgba(0, 32, 77, 0.8); color: white;">
                    <div class="reg__image">
                        <div class="bg-absolute"><img src="/wise/assets/img/logo/mainBackground2.png" style="opacity: 0.4;" alt="Hesk" /></div>
                    </div>
                    <div class="reg__section">
                        <div class="reg__box">
                            <div class="text-center">
                                <img src="/wise/assets/img/logo/wiselogo.png" width="70" style="border-radius: 50%; cursor: pointer" alt="Hesk" onclick="redirect()" />
                            </div>
                            <div class="reg__heading text-center">WISE LOGIN<br></div>
                            <span class="font-weight-bold">Please log in.</span>
                            <div style="margin-right: -24px; margin-left: -16px">
                            </div>
                            <form class="form" id="form1" method="POST" name="form1" novalidate>
                                <div class="form-group">
                                    <label for="regInputUsername" class="font-weight-bold" style="color: #d9d9d9; font-size: 12px" id="nofailedemail">Email Address</label>
                                    <input type="text" class="form-control" v-model="email" id="email" name="email" placeholder="@wiseimmigration.ph" autocomplete="off" required>
                                    <div class="form-control__error">This field is required</div>
                                </div>
                                <div class="form-group">
                                    <label for="regInputPassword" class="font-weight-bold" style="color: #d9d9d9; font-size: 12px" id="nofailedpass">Password</label>
                                    <div class="input-group">
                                        <input :type="hideShow ? 'password' : 'text'" name="password" v-model="password" id="password" class="form-control" placeholder="Enter Password">
                                        <div style="text-align: end">
                                            <i class="fa-solid fa-eye toggle-password" @click="hideThenShow"></i>
                                        </div>
                                    </div>
                                    <div class="form-control__error text-danger" id="emptyfield">This field is required</div>
                                    <div class="form-control__error text-danger" id="wronguser">Email and password is not in database</div>
                                </div>
                                <div class="form__submit">
                                    <button class="btn btn-full" type="button" @click="login" id="recaptcha-submit"> Click here to login </button>
                                </div>
                                <div class="form__submit">
                                    <a href="../index.php" class="text-white text-decoration-none">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <footer class="footer" style="background-color: rgb(46, 60, 105); color: gray">
                    <p class="text-center text-secondary">Powered by <a href="/wise/pages/aboutus.php" class="link">Wise IT Department</a> <span class="font-weight-bold">WITD</span><br>
                </footer>
            </main>
        </div>

    </div>
    <script src="../assets/js/svg4everybody.js"></script>
    <script type="text/javascript" src="../vue/vues/axios.js"></script>
    <script type="text/javascript" src="../vue/vues/vue.js"></script>
    <script type="text/javascript" src="../vue/vues/vue.3.js"></script>
    <script type="text/javascript" src="../vue/auth.js"></script>
    <script>
        function redirect() {
            window.location.href = "../index.php"
        }
    </script>
</body>

</html>