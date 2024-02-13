<?php
session_start();
$page = "maindash";
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ecourt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    <!-- <header class="header">
        <h1 class="logo"><a href="#"><img src="assets/logo/logo.png" class="logo-img" alt="logo">ECourt</a></h1>
        <ul class="main-nav">
            <li><a href="#">Edit</a></li>
            <li><a href="#">EDIT</a></li>
            <li><a href="#">EDIT</a></li>
            <li><a href="#">EDIT</a></li>
            <li><a href="#">EDIT</a></li>
            <li><a href="logout.php"><button type="button" class="btn btn-warning login">LOGOUT</button></a></li>
        </ul>
    </header> -->

    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="main_dash.php" target="iframe" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
                    </a>
                    <a href="case_register.php" target="iframe" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Register Case</span>
                    </a>
                    <a href="password.php" target="iframe" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-lock fa-fw me-3"></i><span>Password</span></a>
                    <a href="calendar.php" target="iframe" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
                    <a href="user_info.php" target="iframe" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-users fa-fw me-3"></i><span>User Info</span></a>
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar fixed-top">
            <div class="row" style="width:100%">
                <div class="col-2">
                    <div class="row" style="margin-left: 10px;">
                        <div class="col-2">
                            <img src="assets/logo/ashok_stambh.png" width="40" height="50">
                        </div>
                        <div class="col-8">
                            <h1 style="color: blue; font-weight:700">Adaalat</h1>
                        </div>
                        <div class="col-2">
                            <img src="assets/logo/logo.png" width="50" height="50" style="margin-left: 20px;">
                        </div>
                    </div>
                </div>
                <div class="col-10" style="text-align: right; margin-top:7px;">
                    <a href="logout.php"><button type="button" class="btn btn-warning login">LOGOUT</button></a>
                    <img src="assets/defaults/user.webp" height="40px" width="70px">
                </div>
            </div>
        </nav>
    </header>

    <iframe src="" name="iframe" width="1500px" height="800px" style="margin-left:240px; margin-top:70px">
</body>

</html>