<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="../css/vendor.min.css" rel="stylesheet" />
    <link href="../css/color.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid bg-white vh-100">
        <div class="d-flex justify-content-center align-items-center">
            <div class=" mt-5">
                <div class="text-center">
                    <h1>Successfully Send to <br> <span class="text-primary">IT Department</span></h1>
                </div>
                <img src="../img/alerts/agree.png" alt="" class="img-fluid rounded" width="450">
                <div class="text-center">
                    <!-- <a href="/wise/index.php" class="btn btn-primary col-5 mt-5">Okay</a> -->
                    <button onclick="goIn()" class="btn btn-primary col-5 mt-">Okay</button>
                </div>
            </div>
        </div>
        <footer>
            <img src="../img/logo/birdflag.png" class="float-end img-fluid" style="width: 180px">
        </footer>
    </div>
</body>
<script>
    function goIn(){
        window.location.href = "/wise/views/index.php";
    }
</script>
</html>