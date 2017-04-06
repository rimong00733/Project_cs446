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
      <div class="col-md-offset-2 col-md-8" style="margin-top : 8%;">
        <div class="panel panel-primary" style="background-color:#FBF8F8;">
          <div class="panel-body" style="padding:5%;">
          <center>
          <h3>เครื่องคำนวนการเผาผลาญพลังงาน (BMR)</h3>
          </center>
          <h5>
          &emsp;&emsp;&emsp;&emsp;<b>BMR</b> ย่อมาจาก Basal Metabolic Rate หรือเราสามารถเรียกได้ว่าเป็นอัตราการเผาผลาญพลังงานในแต่ละวัน โดยค่าพลังงานนี้ร่างกายจะใช้ในการขับเคลื่อนระบบเเละควบคุมอวัยวะต่างๆในร่างกายค่ะ เรามาหาค่าพลังงานที่ใช้ในส่วนนี้กันก่อนค่ะ โดยการกรอกข้อมูลในเครื่องคำนวนด้านล่างนี้ครับ
        </h5><br>
          <h4>Step 1 : BMR</h4>
          <div><br></div>
          <div style="margin-left:10%;">
            <div class="form-group">
              <label class="radio-inline">
                <input type="radio" name="gender" id="gender" value="0"> ชาย
              </label>
              <label class="radio-inline">
                <input type="radio" name="gender" id="gender" value="1"> หญิง
              </label>
            </div>
          </div>
          <div><br></div>
          <div style="margin-left:10%;">
          <div class="form-group">
          <label>Weight (kg.)</label>
          <input type="number" class="form-control" id="Weight" placeholder="น้ำหนัก (กิโลกรัม)" style="width : 40%;">
          </div>
          </div>
          <div><br></div>
          <div style="margin-left:10%;">
          <div class="form-group">
          <label>Height (cm.)</label>
          <input type="number" class="form-control" id="Height" placeholder="ส่วนสูง (เซนติเมตร)" style="width : 40%;">
          </div>
          </div>
          <div><br></div>
          <div style="margin-left:10%;">
          <div class="form-group">
          <label>Age (years.)</label>
          <input type="number" class="form-control" id="Age" placeholder="อายุ (ปี)" style="width : 40%;">
          </div>
          </div>
          <div><br></div>
          <center>
           <button type="button" class="btn btn-primary btn-lg btn-block" style="width:50%;" id="cal1">คำนวณ</button>
           <h3 id="result">0</h3>
           <p>(kcal/day)</p>
           <div><br></div>
          </center>
          <h4>Step 2 : TDEE</h4><br>
          <h5>
          หลังจากเราได้ค่าการเผาผลาญ (BMR) ที่เป็นพลังงานเพียวๆเเบบไม่ได้ทำกิจกรรมอะไรเเล้ว เราก็จะมาเพิ่มในส่วนของกิจกรรมอื่นๆตามลักษณะการใช้ชีวิต เช่น การทำกิจกรรมนอกบ้าน หรือการไปออกกำลังกาย เพื่อหาค่าการเผาผลาญส่วนที่เพิ่มเติมลงไป (TDEE)<br><br>
          <b>TDEE</b> คือ Total Daily Energy Expenditure หรือ ค่าของพลังงานที่ใช้กิจกรรมอื่นในแต่ละวัน โดยเลือกจากกิจกรรมตาม list ด้านล่าง ค่าที่ออกมาจะได้ค่าของการเผาผลาญพลังงานที่เป็นค่าเพียวๆเเละค่าจากการทำกิจกรรมร่วมกัน
          </h5>
          <div><br></div>
          <center>
            <table class="table table-hover" style="width:80%;">
              <tbody>
                <div class="radio">
                <tr id="b1">
                      <td class='text-left'><input type="radio" name="AF" id="AF" value="1.2"> &emsp;ออกกำลังกายน้อย ทำงานเเบบนั่งอยู่กับที่</td>


                </tr>
                <tr id="b2">
                      <td class='text-left'><input type="radio" name="AF" id="AF" value="1.375"> &emsp;ออกกำลังกาย หรือเล่นกีฬา เเบบเบาๆ 1-3 วันต่อสัปดาห์</td>


                </tr>
                <tr id="b3">
                      <td class='text-left'><input type="radio" name="AF" id="AF" value="1.55"> &emsp;ออกกำลังกาย หรือเล่นกีฬา ความหนักปานกลาง 3-5 วันต่อสัปดาห์</td>


                </tr>
                <tr id="b4">
                      <td class='text-left'><input type="radio" name="AF" id="AF" value="1.725"> &emsp;ออกกำลังกาย หรือเล่นกีฬา หนัก 6-7 วันต่อสัปดาห์</td>


                </tr>
                <tr id="b5">
                      <td class='text-left'><input type="radio" name="AF" id="AF" value="1.9"> &emsp;ออกกำลังกาย หรือเล่นกีฬา หนัก เเบบการซ้อมเพื่อเเข่งขัน เป็นระจำทุกวัน</td>

                </tr>
               </div>
              </tbody>
            </table>
            <center>
             <button type="button" class="btn btn-primary btn-lg btn-block" style="width:50%;" id="cal2">คำนวณ</button>
             <h3 id="result2">0</h3>
             <p>(kcal/day)</p>
             <div><br></div>
            </center>
          </center>
          <h4>Step 3 : Diet Planning</h4><br>
          <h5>
          เมื่อเราได้ค่าการเผาผลาญพลังงานต่อวันออกมาเเล้ว ทีนี้จะเป็นการกำหนดเป้าหมายคร่าวๆเพื่อให้เราทราบว่าถ้าหากเราต้องการที่จะลดน้ำหนักให้ได้ตามระยะเวลาที่วางไว้ เราควรจะลดการรับพลังงานจากอาหารให้เหลือวันละเท่าไหร่<br><br>
          โดยการใส่เป้าหมายของน้ำหนักจำนวน กิโลกรัมที่ต้องการลดเเละระยะเวลาในการลด เเต่ระยะเวลาควรมีกรอบเวลาอยู่ที่ไม่น้อยกว่า 30 วัน เเละควรกำหนดเป้าหมายน้ำหนักเเบ่งเป็นระยะ ไม่ควรหักโหมจนเกินไป โดยเฉลี่ยนเเล้ว<b style="color:red;">การลดน้ำหนักที่ดีเเละทำให้มีสุขภาพที่ดีด้วยจะต้องอยู่ที่ประมาณ 1-2 กิโลกรัมต่อสัปดาห์</b><br>
          <br>ผลจากเครื่องคำนวนนี้จะเป็นพลังงานที่ต้องลด เเละ ปริมาณที่ใช้ได้ต่อวัน เเต่ต้องเตือนไว้ว่า ค่าที่ได้เป็นค่าที่ได้จากการคำนวนจากสูตรทางคณิตศาสตร์ ควรจะยึดไว้เป็นกรอบไว้คร่าวๆ เพื่อวางเเผนการลดน้ำหนักให้มีประสิทธิภาพ เพราะร่างกายเเต่ละคนไม่เหมือนกัน ระยะเวลาเเละผลลัพธ์อาจต่างกัน<br><br>
          </h5>
          <div><br></div>
          <div style="margin-left:10%;">
          <div class="form-group">
          <label>เป้าหมายน้ำหนักที่ต้องการ (kg.)</label>
          <input type="number" class="form-control" id="Weight2" placeholder="น้ำหนัก (กิโลกรัม)" style="width : 40%;">
          </div>
          </div>
          <div><br></div>
          <div style="margin-left:10%;">
          <div class="form-group">
          <label>จำนวณวัน</label>
          <input type="number" class="form-control" id="Day" placeholder="ขอบเขตของวันที่ต้องการลด (วัน)" style="width : 40%;">
          </div>
          </div>
          <div><br></div>
          <center>
           <button type="button" class="btn btn-primary btn-lg btn-block" style="width:50%;" id="cal3">คำนวณ</button><br>
           <p>ปริมาณพลังงานที่แนะนำต่อวัน (kcal/day)</p>
           <h3 id="result3">0</h3>
           <div><br></div>

           <?php if(!isset($_SESSION["calories_target"])) {
           echo "<div>
             <form id='send' method='get' action='setvaluesessin.php'>
             <input type='hidden' name='value_weight' id='value_weight'>
             <input type='hidden' name='value_height' id='value_height'>
             <input type='hidden' name='calories_target' id='value_af'>
             <button type='submit' class='btn btn-default' style='color:red;'>>>เพิ่มข้อมูลทั้งหมดลงในไดอารี่<<</button>
             </form>
           </div>";
           }?>

          </center>

          </div>
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
        $(document).ready(function(){
                        var weightstd; //เอาไว้ไปคำนวณ Diet Planning
                        var heightstd;
                        var genderstd;
                        var agestd;
                        var daystd;
                        var resultBMR;
                        var resultTDEE;
                        var resultAF;



                        $('#cal1').click(function(){
                            var gender = $('input[name="gender"]:checked').val();
                            var weight = $('#Weight').val();
                            var height = $('#Height').val();
                            var age = $('#Age').val();

                            weightstd = weight;
                            heightstd = height;
                            genderstd = gender;
                            agestd = age;

                            if(gender==0){
                              resultBMR = 88.362+(13.397*weight)+(4.799*height)-(5.677*age);
                            }else if (gender==1) {
                              resultBMR = 447.593+(9.247*weight)+(3.098*height)-(4.330*age);
                            }

                            var Result = resultBMR.toFixed(2);

                            $('#result').html(Result);
                            window.scrollTo(0, 450);
                        });
                     //-----------------------------------TDEE-------------------------------------------
                        $('#cal2').click(function(){

                            var Af = $('input[name="AF"]:checked').val();

                            resultTDEE = (resultBMR*Af);

                            result = resultTDEE.toFixed(2);

                            $('#result2').html(result);
                            window.scrollTo(0, 1000);
                        });
                    //-----------------------------------Diet Planning-------------------------------------------
                        $('#cal3').click(function(){

                            var weight = $('#Weight2').val();

                            var day =    $('#Day').val();

                            daystd = day;

                            if(weightstd > weight){ //ลดน้ำหนัก
                               resultAF = resultTDEE-(((weightstd-weight)*6615)/day);
                            }else if(weightstd < weight){//เพิ่มน้ำหนัก
                               resultAF = resultTDEE+(((weight-weightstd)*6615)/day);
                            }else { // ทำให้น้ำหนักคงที่
                               resultAF = resultTDEE;
                            }

                            $('#result3').html(resultAF.toFixed(2));

                            window.scrollTo(0, 1500);
                        });


                    //-------------------------------------------------------------

                    $('#send').submit(function(){

                     swal({
                       title: "Are you sure?",
                       text: "ข้อมูลทั้งหมดนี้จะถูกนำไปใช้ในการบันทึกกิจกรรมต่างๆ",
                       type: "warning",
                       showCancelButton: true,
                       confirmButtonColor: "#53F060",
                       confirmButtonText: "Yes",
                       cancelButtonText: "No",
                       closeOnConfirm: false,
                       closeOnCancel: false
                     },
                     function(isConfirm){
                       if (isConfirm) {
                         swal({
                           title: "Success!",
                           text: "ยืนยันคำข้อเสร็จสิ้น",
                           type: "success",
                           confirmButtonColor: "#53F060",
                           confirmButtonText: "Yes",
                           closeOnConfirm: false
                         },function(isConfirm){
                           if (isConfirm) {
                            window.location.assign('setvaluesessin.php?calories_target='+resultAF.toFixed(2)+'&value_height='+heightstd+'&value_weight='+weightstd);
                           }else {
                            window.location.assign('setvaluesessin.php?calories_target='+resultAF.toFixed(2)+'&value_height='+heightstd+'&value_weight='+weightstd);
                           }
                         });
                       } else {
                         swal("Cancelled", "เอาไว้ครับหน้าแล้วกัน", "error");
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
