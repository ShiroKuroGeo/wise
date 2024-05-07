<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="../../assets/css/vendor.min.css" rel="stylesheet" />
    <link href="../../assets/css/color.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid bg-white vh-100" id="application">
        <div class="d-flex justify-content-center align-items-center">
            <div class=" mt-5">
                <div class="text-center">
                    <?php
                    $lengthOfId = strlen($_GET['id']);
                    if ($lengthOfId < 101) {
                        header('location: ../../pages/notavail.php');
                    }

                    ?>
                    <h1>Confirmation Reset and Back to Normal <br> <span class="text-primary">WISE IT Concern's Reset</span></h1>
                </div>
                <img src="../../assets/img/alerts/reset.png" alt="" class="img-fluid rounded" width="450">
                <div class="text-center">
                    <button @click="goToReset" class="btn btn-primary col-5">Okay</button>
                </div>
            </div>
        </div>
        <div class="float-end">
        <small style="font-size: 13px;" class="text-danger">The Pages Ended After this 2 Minutes {{ minutes }}m {{ seconds }}s</small>
        </div>
    </div>

    <script src="../../assets/js/jquery-3.5.1.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="../../assets/js/vendor.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../assets/js/color.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script async src="../../assets/js/googlet.min.js" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="../../vue/vues/axios.js"></script>
    <script src="../../vue/vues/vue.js"></script>
    <script src="../../vue/vues/vue.3.js"></script>
    <script src="../../vue/admin/wiseconcern/reset.js"></script>
</body>

</html>