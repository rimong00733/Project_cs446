<?php

require("connectdb.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM login WHERE username LIKE '".$username."' AND password LIKE '".$password."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

    if($row["type"] == 1){
      session_start();
  		$_SESSION["user"] = $row['name'];
      echo 1;
    }else if($row["type"] == 0){
      session_start();

      $_SESSION["User_name"] = $row['name'];
      $_SESSION["Member_id"] = $row['MemberID'];

      //-----ตัวแปรในหน้า diary------------------
      $_SESSION["calories_target"] = null;
      $_SESSION["calories_rest"] = null;
      $_SESSION["calories_use"] = null;
      $_SESSION["cal"] = array();
      $_SESSION["name"] = array();
      $_SESSION["id"] = array();
      $_SESSION["height"] = null;
      $_SESSION["weight"] = null;

      echo 0;
    }
	}
} else {
  echo 2;
}

$conn->close();

?>
