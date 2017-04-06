<?php
require("connectdb.php");
$id=$_POST['member_id'];
$img=$_FILES["fileToUpload"]["name"];
$path="img/";
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$path.$img);
$sql="UPDATE login SET status_barcode = 1 , barcode = '".$img."' WHERE MemberID = '".$id."'";
if ($conn->query($sql) === TRUE) {
    echo "ยืนยันการเพิ่มรายการเสร็จสิ้น";
    $url = 'service1.php';
    header( "Location: $url" );
  }
?>
