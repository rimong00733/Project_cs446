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
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="adminpage1.php" style="color: red;">Start Bootstrap</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="admininsert.php" style="color: red;">insert</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="service1.php" style="color: red;">services</a>
                    </li>
                    <li>
                        <a class="page-scroll" style="color: red;"><button id="logout">LOGOUT</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    require("connectdb.php");
    $id = $_POST['id'];
    $sql = "SELECT * FROM `login` where MemberID = '".$id."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
    echo "<div class='container'>
      <div class='col-md-offset-4 col-md-4' style='margin-top : 7%;'>
        <div class='panel panel-success'>
          <div class='panel-heading'>Confirm Privilege</div>
          <div class='panel-body'>
            <form action='upload_img.php' method='POST' enctype='multipart/form-data'>

              <div class='form-group'>
                <label>Name</label>
                <input type='text' class='form-control' id='product_name' name='product_name'  value='".$row["name"]."' readonly>
              </div>
              <div class='form-group'>
                <label>Gender</label>
                <input type='text' class='form-control' id='gender' name='gender'  readonly>
              </div>
              <div class='form-group'>
                <label>Age</label>
                <input type='number' class='form-control' id='age' name='age'   readonly>
              </div>
              <div class='form-group'>
                <label>Email</label>
                <input type='text' class='form-control' id='carbohydrate' name='carbohydrate'  value='".$row["email"]."' readonly>
              </div>

              <div class='form-group'>
                <label>CODE</label>
                <input type='file' name='fileToUpload' id='fileToUpload'>
              </div>

                <input type='hidden' id='member_id' name='member_id' value='".$id."'>
              <center>
                <button type='submit' class='btn btn-primary'>Confirm</button>
              </center>
            </form>
          </div>
        </div>
      </div>
    </div>";
    }
    ?>


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
        $(document).ready(function(){

                        var gender = parseInt("<?php echo $row["gender"] ?>");
                        if(gender==0){
                           $('#gender').val("male");
                        }else{
                           $('#gender').val("female");
                        }

                        //----------คำนวณ อายุ--------------------------------
                        <?php
                        $birthdate = $row["age"];
                        $a = explode("-",$birthdate);
                        ?>
                        var a = parseInt("<?php echo $a[0] ?>"); //ปีจาก database
                        var d = new Date();
                        var n = d.getFullYear();//ปีปัจจุบัน
                        var resultage = (n-a);
                        if(resultage<=0){
                          resultage = 1 ;
                        }

                        $('#age').val(resultage);
                       //----------END คำนวณ อายุ--------------------------------




       });
    </script>
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
