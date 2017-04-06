<?php
session_start();
require("connectdb.php");
$wtd = $_POST['wtd'];
$htd = $_POST['htd'];
$bmi = $wtd/(($htd/100)*($htd/100));

$BMI = round($bmi,2);

$sql = "INSERT INTO diarys (MemberID,weight,bmi,Calories_target,Calories_use,dates) VALUES ('".$_SESSION["Member_id"]."','".$wtd."','".$BMI."','".$_SESSION["calories_target"]."','".$_SESSION["calories_use"]."',now())";

if ($conn->query($sql) === TRUE) {
  $_SESSION["calories_target"] = null;
  $_SESSION["calories_rest"] = null;
  $_SESSION["calories_use"] = null;
  unset($_SESSION["cal"]);
  unset($_SESSION["name"]);
  unset($_SESSION["id"]);
  $_SESSION["cal"] = array();
  $_SESSION["name"] = array();
  $_SESSION["id"] = array();
  $_SESSION["height"] = null;
  $_SESSION["weight"] = null;
    header( "Location: userpage1.php" );
} else {
    echo "ไม่สามารถเพิ่มรายการได้";
}
?>
