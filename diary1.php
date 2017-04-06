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
                        <a class="page-scroll" href="#" style="color: red;">Diary</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="serviceformember.php" style="color: red;">service</a>
                    </li>
                    <li>
                        <a class="page-scroll" style="color: red;"><button id="logout">LOGOUT</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="container">

      <div class="col-md-offset-3 col-md-6" style="margin-top : 6.8%;">
        <div class="panel panel-primary" style="background-color: #EDFAB4;">
          <div class="panel-body">
            <div class="form-group">

              <label>Calories</label>
              <input type="number" class="form-control" placeholder="แคลอรี่ที่ต้องการควบคุม" pattern="[0-9]" id="txtboxToFilter">
              <br><a href="calculators2.php" id="taga">คลิ๊ก! คำนวณค่าพลังงาน</a>
              <center>
              <br><button type="button" class="btn btn-success" id="bc1">Confirm</button>
              </center>
            </div>
          </div>
        </div>
      </div>
      <!-- /////////////////////////////////////////////////////////////////////////////// -->
      <div class="col-md-offset-3 col-md-6" style="margin-top : 1%;">
        <div class="panel panel-primary" style="background-color: #EDFAB4;">
          <div class="panel-body">
            <div class="form-group">

              <center>
              <br>
              <form class="form-inline">
              <label> Rest </label>
              <input type="number" class="form-control" id="rest" readonly>
              </form>
              </center>
              <div align="left">
                <br><h5><b>Menu History today <a href="userfoodpage.php">+ Add</a></b></h5><br>

                <div id="menu" style="overflow-y: scroll; height:200px; background-color: #D7D7D7; padding: 3px 10px;">

                </div>

              </div>
              <div align="right">
              <br>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp;&nbsp;History</button>
              <button type="button" class="btn btn-info" id="save">save <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!--///////////////////////////////////////////////////////////////////-->
    </div>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title tie" id="myModalLabel">บันทึกข้อมูลประจำวัน</h4>
          </div>
          <div class="modal-body">
              <form class="" action="insertdiary1.php" method="post">

                <div class="form-group">
                  <label>น้ำหนัก</label>
                  <input type="number" class="form-control" id="wtd" placeholder="น้ำหนักของคุณวันนี้" name="wtd">
                </div>
                <div class="form-group">
                  <label>ส่วนสูง</label>
                  <input type="number" class="form-control" id="htd" placeholder="ส่วนสูงของคุณ" name="htd">
                </div>
                <button type="submit" class="btn btn-success">Confirm</button>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
      <div><br></div>
      <?php
       require("connectdb.php");
       $sql = "SELECT * FROM diarys where MemberID = '".$_SESSION["Member_id"]."'";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
              			echo "
                    <div class='table-title'>
                    </div>
                    <table class='table-fill'>
                    <thead>
                    <tr>
                    <th class='text-left'>Dates</th>
                    <th class='text-left'>Calories_target</th>
                    <th class='text-left'>Calories_use</th>
                    <th class='text-left'>weight</th>
                    <th class='text-left'>bmi</th>
              			</tr>
                    </thead>
                    <tbody class='table-hover'>
                    ";
              			while($row = $result->fetch_assoc()) {
              					echo "<tr>
  											<td class='text-left'>" .$row["dates"]. "</td>
                        <td class='text-left'>" .$row["Calories_target"]. "</td>
                        <td class='text-left'>" .$row["Calories_use"]. "</td>
                        <td class='text-left'>" .$row["weight"]. "</td>
                        <td class='text-left'>" .$row["bmi"]. "</td>
              					</tr>";
              		}
              		echo "
                        </tbody>
                        </table>
                        ";
              	}
      ?>
      <div><br></div>
      <div><br></div>
    </div>
  </div>
</div>


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
    $(document).ready(function() {




     var resultrest;



      //--------------function ไม่ให้ใสเครื่องหมายลบ--------------------------------
      $("#txtboxToFilter").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
        (e.keyCode >= 35 && e.keyCode <= 40)) {
          return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
        }
        });
        //--------------End function ไม่ให้ใสเครื่องหมายลบ--------------------------

        $('#bc1').click(function(){
            var calories_target = $('#txtboxToFilter').val();
            window.location.assign('setvaluesessin.php?calories_target='+calories_target);

        });

        $('#his').click(function(){
            window.location.assign('history.php');
        });


       <?php if(isset($_SESSION["calories_target"])) { ?>

              $('#txtboxToFilter').val(<?php echo $_SESSION["calories_target"];?>);
              $('#txtboxToFilter').prop('readOnly', true);
              $('#taga').hide();
              $('#bc1').prop('disabled', true);

              resultrest = <?=$_SESSION["calories_rest"]?>;
              $('#rest').val(resultrest); // ค่าแคลอรี่ที่เหลือ

              <?php if(isset($_SESSION["id"][0])&&isset($_SESSION["cal"][0])&&isset($_SESSION["name"][0])){ ?>

              <?php
              $size = sizeof($_SESSION["id"]);
              $a = 0;
              while ($a<$size) {
              ?>

               $('#menu').append("<?php echo $_SESSION["name"][$a]?> : <b><?= $_SESSION["cal"][$a]?></b> Calories<br><br>");

              <?php
                $a++;
              }
              ?>



              <?php }else {?>
                console.log("noooooooo!!!!");
              <?php  } ?>

       <?php }else {?>
         console.log('emtry');
       <?php } ?>


       <?php if(!isset($_SESSION["height"])&&!isset($_SESSION["weight"])){ ?>
         $('#save').attr("data-toggle","modal");
         $('#save').attr("data-target","#myModal");
       <?php }else { ?>
         $('#save').click(function(){
             window.location.assign('insertdiary2.php');
         });
       <?php } ?>


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
