<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php" style="color: red">Start Bootstrap</a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <div class="dropdown">
                     <button class="btn btn-default" data-toggle="dropdown" style="margin-top:8%; color:red;">Programs
                     <span class="caret"></span></button>
                     <ul class="dropdown-menu">
                       <li><a href="BMI.php">BMI (ดัชนีมวลกาย)</a></li>
                       <li><a href="BMR.php">BMR (อัตราการเผาผลาญ)</a></li>
                     </ul>
                   </div>
                  </li>
                    <li>
                        <a class="page-scroll" href="login.php" style="color: red">LOGIN/REGISTER</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>
</div>
    <!--Start-->

  <div style="margin-top: 5%;">
    <?php
     require("connectdb.php");
     $id = $_POST['id'];
     $sql = "SELECT * FROM products where categories_id = '".$id."'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
            			echo "
                  <div class='table-title'>
                  <h3>Nutrition</h3>
                  </div>
                  <table class='table-fill'>
                  <thead>
            			<tr>
                  <th class='text-left'>product_name</th>
                  <th class='text-left'>calories</th>
                  <th class='text-left'>fat</th>
                  <th class='text-left'>carbohydrate</th>
                  <th class='text-left'>protein</th>
            			</tr>
                  </thead>
                  <tbody class='table-hover'>";
            			while($row = $result->fetch_assoc()) {
            					echo "<tr>
											      <td class='text-left'>".$row["product_name"]."</td>
                            <td class='text-left'>".$row["calories"]."</td>
                            <td class='text-left'>".$row["fat"]."</td>
                            <td class='text-left'>".$row["carbohydrate"]."</td>
                            <td class='text-left'>".$row["protein"]."</td>
            					      </tr>";
            		}
            		echo "
                </tbody>
                </table>
                ";
            	}
    ?>
  </div>


    <!--End-->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
</div>
</body>

</html>
