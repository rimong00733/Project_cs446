<?php

require("connectdb.php");

$categories = $_POST['categories'];
$product_name = $_POST['product_name'];
$calories = $_POST['calories'];
$fat = $_POST['fat'];
$carbohydrate = $_POST['carbohydrate'];
$protein = $_POST['protein'];
$status = $_POST['status'];
$product_id = $_POST['product_id'];
if($status == 1){
  $sql = "INSERT INTO products (categories_id,product_name,calories,fat,carbohydrate,protein) VALUES ('".$categories."','".$product_name."','".$calories."','".$fat."','".$carbohydrate."','".$protein."')";
  if ($conn->query($sql) === TRUE) {
      echo "ยืนยันการเพิ่มรายการเสร็จสิ้น";
  } else {
      echo "ไม่สามารถเพิ่มรายการได้";
  }
}else if($status == 2){
  $sql = "UPDATE products SET  categories_id = ".$categories." , product_name = '".$product_name."' , calories = ".$calories." , fat = ".$fat." , carbohydrate =".$carbohydrate." , protein = ".$protein." where product_id = ".$product_id." ";
  if ($conn->query($sql) === TRUE) {
      echo "ยืนยันการแก้ไขรายการเสร็จสิ้น";
  } else {
      echo "ไม่สามารถแก้ไขรายการได้";
  }
}else if($status == 3){
  $sql = "DELETE FROM products WHERE product_id = ".$product_id." ";
  if ($conn->query($sql) === TRUE) {
      echo "ยืนยันการลบรายการเสร็จสิ้น";
  } else {
      echo "ไม่สามารถลบรายการได้";
  }
}
$conn->close();

?>
