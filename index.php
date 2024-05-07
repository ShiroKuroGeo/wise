<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Wise Immigration</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />

    <link rel="icon" type="image/x-icon" href="/wise/assets/img/logo/wiselogo.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="assets/css/mainpage/onepagevendor.css" rel="stylesheet" />
    <link href="assets/css/mainpage/onepage.css" rel="stylesheet" />
    <link href="assets/css/picker.min.css" rel="stylesheet" />
    <link href="assets/css/fileupload/blueimp-gallery.min.css" rel="stylesheet" />
    <link href="assets/css/fileupload/jquery.fileupload.css" rel="stylesheet" />
    <link href="assets/css/fileupload/jquery.fileupload-ui.css" rel="stylesheet" />
    <style>
        .btn.btn-primary {
            position: relative;
            text-align: center;
            font-size: 16px;
            transition: transform 0.3s ease;
        }

        .btn.btn-primary:hover {
            transform: translateY(-5px);
        }

        .btn.btn-primary::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #007bff;
            transition: height 0.3s ease;
        }

        .btn.btn-primary:hover::after {
            height: 4px;
        }

        #backgroundimage {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            opacity: 0.2;
        }

        #owly {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 15%;
            height: 30%;
            z-index: -1;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#header" data-bs-offset="51">
    <img src="/wise/assets/img/logo/mainBackground.png" id="backgroundimage" alt="">
    <img src="/wise/assets/img/logo/owy.png" id="owly" alt="">
    <div id="page-container" class="fade">

        <div id="home" class="content has-bg home">

            <div class="container-fluid home-content text-dark row">
                <div class="col-12 col-xl-2 col-lg-2"></div>

                <div class="col-12 col-xl-4 col-lg-4">
                    <a href="views/wiseconcern.php" class="btn btn-md p-5 btn-primary">IT Inventory <br> System Services</a>
                </div>

                <div class="col-12 col-xl-4 col-lg-4 d-sm-none">
                    <hr class="my-4">
                </div>

                <div class="col-12 col-xl-4 col-lg-4">
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modalForWise" class="btn btn-md p-5 btn-primary">IT Wise Request <br> Order Services</a>
                </div>

                <div class="col-12 col-xl-2 col-lg-2"></div>
            </div>

            <div class="modal fade" id="modalFourSeason">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-dark">
                        <div class="modal-body py-5">
                            <div class="panel-body">
                                <div class="mb-3">
                                    <div id="modalContent"></div>
                                    <form action="#" method="POST" id="checkForm">
                                        <label class="form-label" for="exampleInputEmailsa">Please Indicate your Email Address:</label>
                                        <input class="form-control" type="email" name="checkingEmail" id="checkingEmail" required>
                                        <button class="btn btn-primary btn-md col-3 mt-2" id="loadingBtn" type="button" onclick="reloadContentAndCheck()">Check</button>
                                        <button class="btn btn-primary btn-md col-3 mt-2 visually-hidden" id="viewForm" type="button" data-bs-toggle="modal" data-bs-target="#modalForm">View Form</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal modal-message fade" id="modalForWise">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content text-dark p-5">
                        <div class="panel-body">
                            <div class="form-group row mb-3">
                                <div class="text-center">
                                    <img src="assets/img/logo/wiselogo.png" class="img-fluid w-50" width="10" height="10" alt="">
                                </div>
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <a class="btn btn-primary me-5" href="Javascript:;" data-bs-toggle="modal" data-bs-target="#modalWiseImmigrationForJobOrderSlip">Job Order Slip</a>
                                    <a class="btn btn-primary ms-4" href="Javascript:;" data-bs-toggle="modal" data-bs-target="#modalWiseImmigrationForRequestOrderSlip">Request Slip</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalWiseImmigrationForJobOrderSlip">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-dark">
                        <div class="modal-body py-5">
                            <div class="panel-body">
                                <div class="text-center">
                                    <img src="assets/img/logo/wiselogo.png" class="img-fluid w-50" width="10" height="10" alt="">
                                    <div class="fst-italic mb-5">
                                        <label class="text-center" for="exampleInputEmail1">Job Order Slip</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">Select A Department:</label>
                                    <select class="form-control form-select11" v-model="orderRoute" id="orderRoute" @change="selectedRouteOrder">
                                        <option selected hidden value="0">Please Select A Department</option>
                                        <option value="Admin Department">Admin Department</option>
                                        <option value="Documents Department">Documents Department</option>
                                        <option value="Accounting Department">Accounting Department</option>
                                        <option value="Human Resource Department">Human Resource Department</option>
                                        <option value="Sales Department">Sales Department</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalWiseImmigrationForRequestOrderSlip">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-dark">
                        <div class="modal-body py-5">
                            <div class="panel-body">
                                <div class="text-center">
                                    <img src="assets/img/logo/wiselogo.png" class="img-fluid w-50" width="10" height="10" alt="">
                                    <div class="fst-italic mb-5">
                                        <label class="text-center" for="exampleInputEmail1">Request SlipS</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">Select A Department:</label>
                                    <select class="form-control form-select11" v-model="requestRoute" id="requestRoute" @change="selectedRouteRequest">
                                        <option selected hidden value="0">Please Select a Branch/Department</option>
                                        <option value="Admin Department">Admin Department</option>
                                        <option value="Documents Department">Documents Department</option>
                                        <option value="Accounting Department">Accounting Department</option>
                                        <option value="Human Resource Department">Human Resource Department</option>
                                        <option value="Sales Department">Sales Department</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="assets/js/mainpage/onepageemail.js"></script>
    <script src="assets/js/mainpage/onepagevendor.js"></script>
    <script src="assets/js/mainpage/onepage.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/vendor.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="assets/js/color.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="assets/js/parsley.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="assets/js/highlight.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="assets/js/render.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script async src="assets/js/googlet.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script async src="assets/js/googlet.min.js" type="d250b0bc11e95ea66e8b3ba5-text/javascript"></script>
    <script type="text/javascript" src="vue/vues/axios.js"></script>
    <script type="text/javascript" src="vue/vues/vue.js"></script>
    <script type="text/javascript" src="vue/vues/vue.3.js"></script>
    <script type="text/javascript" src="vue/app.js"></script>
    <script type="d250b0bc11e95ea66e8b3ba5-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-Y3Q0VGQKY3');
    </script>
    <script src="assets/js/rocketloader.min.js" data-cf-settings="d250b0bc11e95ea66e8b3ba5-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" data-cf-beacon='{"rayId":"84a480accd39e6d6","r":1,"version":"2024.1.0","token":"4db8c6ef997743fda032d4f73cfeff63"}' crossorigin="anonymous"></script>
</body>

</html>