<?php

require("connectdb.php");

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];

  $sql = "INSERT INTO login (username,password,name,gender,age,email) VALUES ('".$username."','".$password."','".$name."','".$gender."','".$age."','".$email."')";
  if ($conn->query($sql) === TRUE) {
      echo "ยืนยันการสมัครเสร็จสิ้น";
  } else {
      echo "ไม่สามารถสมัครสมาชิกได้";
  }


$conn->close();

?>