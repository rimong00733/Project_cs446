<?php
session_start();
?>
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
    <link href="dist/sweetalert.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">
</head>
<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="userpage1.php" style="color: red;">Start Bootstrap</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                      <div class="dropdown">
                       <button class="btn btn-default" data-toggle="dropdown" style="margin-top:8%; color:red;">Programs
                       <span class="caret"></span></button>
                       <ul class="dropdown-menu">
                         <li><a href="calculators.php">BMI (ดัชนีมวลกาย)</a></li>
                         <li><a href="calculators2.php">BMR (อัตราการเผาผลาญ)</a></li>
                       </ul>
                     </div>
                    </li>
                    <li>
                        <a class="page-scroll" href="userfoodpage.php" style="color: red;">FOOD</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="diary1.php" style="color: red;">Diary</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#serviceformember.php" style="color: red;">service</a>
                    </li>
                    <li>
                        <a class="page-scroll" style="color: red;"><button id="logout">LOGOUT</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--body-->


    <div class="container">
      <div class="col-md-offset-4 col-md-4" style="margin-top : 10%;">
        <div class="panel panel-primary">
          <div class="panel-heading"><h4>Fitness support</h4></div>
          <div class="panel-body">
            <?php
                  require("connectdb.php");
                  $sql = "SELECT * FROM login where MemberID = '".$_SESSION["Member_id"]."'";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
  	              while($row = $result->fetch_assoc()) {
 		              echo "
                        <center>
                        <br>
                        <img src='img/barcode/".$row['barcode']."'><br><br>
                        </center>
                        <label style='margin-left: 19%;'>MemberID : </label> ".$row['MemberID']." <br>
                        <label style='margin-left: 19%;'>Name : </label> ".$row['name']." <br>
                        <label style='margin-left: 19%;'>Email : </label> ".$row['email']." <br>

                       ";
                  }}
           ?>
          </div>
        </div>
      </div>
    </div>



    <!--end body-->
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
    <script src="dist/sweetalert-dev.js"></script>
    <script src="dist/sweetalert.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        $('#logout').click(function(){
            swal({
              title: "Are you sure?",
              text: "Do you want to log out?",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, delete it!",
              closeOnConfirm: false
          },
          function(){
              window.location.assign('logout.php');
          });
        });
    </script>
</body>
</html>