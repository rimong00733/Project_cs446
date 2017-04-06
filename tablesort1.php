

  <?php
  require("connectdb.php");
  $categories_id = $_POST['categories_id'];
  $sql = "SELECT * FROM products WHERE categories_id = '".$categories_id."'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  ?>

  <div
  		style="background-color: #FFFFCC; margin-top: 5px; width: 80%; margin-left: 8%; padding: 20px">
  		<table id="myTable" class="display" cellspacing="0"
  			style="background-color: #FFFFCC">
  			<thead>
  				<tr>
  					<th class="info"><p align="center">product_name</p></th>
  					<th class="info"><p align="center">calories</p></th>
  					<th class="info"><p align="center">fat</p></th>
  					<th class="info"><p align="center">carbohydrate</p></th>
  					<th class="info"><p align="center">protein</p></th>
  				</tr>
  			<thead>
  			<tbody>
  <?php
    while ($row=$result->fetch_assoc()) {
   ?>
  <td align="center" class="warning"><?=$row["product_name"] ?></td>
  <td align="center" class="warning"><?=$row["calories"]?></td>
  <td align="center" class="warning"><?=$row["fat"]?></td>
  <td align="center" class="warning"><?=$row["carbohydrate"]?></td>
  <td align="center" class="warning"><?=$row["protein"]?></td>
   <?php
    }
  }
  ?>
