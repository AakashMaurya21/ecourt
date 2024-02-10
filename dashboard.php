<?php
session_start();
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <header class="header">
        <h1 class="logo"><a href="#"><img src="assets/logo/logo.png" class="logo-img" alt="logo">ECourt</a></h1>
        <ul class="main-nav">
            <li><a href="#">Edit</a></li>
            <li><a href="#">EDIT</a></li>
            <li><a href="#">EDIT</a></li>
            <li><a href="#">EDIT</a></li>
            <li><a href="#">EDIT</a></li>
            <li><a href="logout.php"><button type="button" class="btn btn-warning login">LOGOUT</button></a></li>
        </ul>
    </header>



</body>

</html>