<?php
require_once("config.php");
$case_id =  $_GET["id"];
print_r($case_id);
$query = "DELETE FROM cases where case_id = $case_id";
$result = mysqli_query($link, $query);
