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


    <div class="container">
      <div class="col-md-offset-4 col-md-4" style="margin-top : 7%;">
        <div class="panel panel-primary">
          <div class="panel-heading">insert products to database</div>
          <div class="panel-body">
            <form id="insertform">

              <div class="form-group">
                <label>ประเภทอาหาร</label>
                <div class="dropdown">
                <select class="form-control" style="width: 35%;" id="categories" name="categories">
                <option value="1">FastFood</option>
                <option value="2">กับข้าว</option>
                <option value="3">ขนม</option>
                <option value="4">ของทอด</option>
                <option value="5">ของว่าง</option>
                <option value="6">เครื่องดื่ม</option>
                <option value="7">เนื้อสัตว์และผลิตภัณฑ์</option>
                <option value="8">ผลไม้ และ ผัก</option>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label>ชื่ออาหาร</label>
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="ชื่ออาหาร">
              </div>
              <div class="form-group">
                <label>calories</label>
                <input type="number" class="form-control" id="calories" name="calories" placeholder="แคลอรี่ของอาหาร/หนึ่งหน่วย">
              </div>
              <div class="form-group">
                <label>Fat</label>
                <input type="number" class="form-control" id="fat" name="fat" placeholder="ไขมันของอาหาร/หนึ่งหน่วย">
              </div>
              <div class="form-group">
                <label>carbohydrate</label>
                <input type="number" class="form-control" id="carbohydrate" name="carbohydrate" placeholder="คาโบไฮเดทของอาหาร/หนึ่งหน่วย">
              </div>
              <div class="form-group">
                <label>protein</label>
                <input type="number" class="form-control" id="protein" name="protein" placeholder="โปรตีนของอาหาร/หนึ่งหน่วย">
              </div>
              <center>
                <button type="submit" class="btn btn-primary">Confirm</button>
                <p id="solution"></p>
              </center>
            </form>
          </div>
        </div>
      </div>
    </div>



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

    <script src="dist/sweetalert-dev.js"></script>
    <script src="dist/sweetalert.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
                        $('#insertform').submit(function(){
                            var categories = $('#categories').val();
                            var product_name = $('#product_name').val();
                            var calories = $('#calories').val();
                            var fat = $('#fat').val();
                            var carbohydrate = $('#carbohydrate').val();
                            var protein = $('#protein').val();
                            var product_id = 0;
                            var status = 1;
                            $.ajax({
                                type : 'POST',
                                url : 'addproducttodb.php',
                                data : {categories:categories,product_name:product_name,calories:calories,fat:fat,carbohydrate:carbohydrate,protein:protein,status:status,product_id:product_id},
                                success : function(result){
                                    $('#categories').val("");
                                    $('#product_name').val("");
                                    $('#calories').val("");
                                    $('#fat').val("");
                                    $('#carbohydrate').val("");
                                    $('#protein').val("");
                                    $('#solution').html(result);
                                }
                            });
                            return false;
                        });
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
