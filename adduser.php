<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body style="background-color: #F0FFFF;">
    <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" style="color: red">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="login.php" style="color: red">LOGIN/REGISTER</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  
  <center>
  <div style="margin-top: 60px;">  
      <div class="panel panel-primary" style="width: 90%;">
      <div class="panel-body">
          
          <form id="formadd">
          <div class="form-group" align="left">
          <label>Username</label>
            <input type="text" class="form-control" placeholder="ชื่อผู้ใช้งาน" id="username" name="username">
          </div>
          <div class="form-group" align="left">
          <label>Password</label>
            <input type="Password" class="form-control" placeholder="รหัสผ่าน" id="password" name="password">
          </div>
          <div class="form-group" align="left">
          <label>Name</label>
            <input type="text" class="form-control" placeholder="ชื่อ - นามสกุล" id="name" name="name">
          </div>
          <div class="form-group" align="left">
            <label>Gender</label>
            <div class="dropdown">
            <select class="form-control" style="width: 35%;" id="gender" name="gender">
            <option value="0">male</option>
            <option value="1">female</option>
            </select>
          </div>
          <!--</div>-->
          <div class="form-group" align="left" style="width: 20%;">
          <label>Age</label>
            <input type="text" class="form-control" placeholder="อายุ" id="age" name="age">
          </div>
          <div class="form-group" align="left">
          <label>EmailAddress</label>
            <input type="text" class="form-control" placeholder="อีเมล" id="email" name="email">
          </div>
          <div class="form-group">
          <input type="submit" style="width: 100%;">
          </div>
          <div class="form-group">
          <p id="checkadd"></p>    
          </div>
          </form>
      
      </div>
      </div>
  </div>     
  </center>

  </div>
  <div class="col-md-4"></div>
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
</div>
<script type="text/javascript">
    $(document).ready(function(){
                    $('#formadd').submit(function(){
                        var username = $('#username').val();
                        var password = $('#password').val();
                        var name = $('#name').val();
                        var gender = $('#gender').val();
                        var age = $('#age').val();
                        var email = $('#email').val();
                        $.ajax({
                            type : 'POST',
                            url : 'addusertodb.php',
                            data : {username:username,password:password,name:name,gender:gender,age:age,email:email},
                            success : function(result){
                                $('#username').val("");
                                $('#password').val("");
                                $('#name').val("");
                                $('#gender').val("");
                                $('#age').val("");
                                $('#email').val("");
                                $('#checkadd').html(result);
                            }
                        });
                        return false;
                    });
                });
</script>
</body>
</html>
