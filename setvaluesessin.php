<?php
session_start();
require("connectdb.php");
$calories_target = $_GET['calories_target'];
$value_height = $_GET['value_height'];
$value_weight = $_GET['value_weight'];

$_SESSION["calories_target"] = $calories_target;
$_SESSION["calories_rest"] = $calories_target;
$_SESSION["height"] = $value_height;
$_SESSION["weight"] = $value_weight;

header( "Location: diary1.php" );
 ?>
