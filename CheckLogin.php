<?php

require("connectdb.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM login WHERE username LIKE '".$username."' AND password LIKE '".$password."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    session_start();
		$_SESSION["user"] = $row['name'];
	}
  echo 1;
} else {
  echo 0;
}

$conn->close();

?>
