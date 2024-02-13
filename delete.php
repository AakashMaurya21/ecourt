<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
require_once("config.php");
$case_id =  $_GET["id"];
print_r($case_id);
$query = "DELETE FROM cases where case_id = $case_id";
$result = mysqli_query($link, $query);
header("Location: dashboard.php");
?>
<html>