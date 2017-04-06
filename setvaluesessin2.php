<?php
session_start();
require("connectdb.php");

$id = $_POST['id'];
$cal = $_POST['cal'];
$name = $_POST['name'];

array_push($_SESSION['id'],$id);
array_push($_SESSION['cal'],$cal);
array_push($_SESSION['name'],$name);

$_SESSION["calories_rest"] -= $cal;

$_SESSION["calories_use"] += $cal;

header( "Location: diary1.php" );
 ?>
