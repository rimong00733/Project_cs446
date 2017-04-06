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
    <style>
    #b1 {
    background-color: #FBF8F8;
    }
    #b2  {
    background-color: #FBF8F8;
    }
    #b3 {
    background-color: #FBF8F8;
    }
    #b4 {
    background-color: #FBF8F8;
    }
    #b5 {
    background-color: #FBF8F8;
    }
</style>
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
    <!--body-->


    <div class="container">
      <div class="col-md-offset-2 col-md-8" style="margin-top : 10%;">
        <div class="panel panel-primary" style="background-color:#FBF8F8;">
          <div class="panel-body" style="padding:5%;">
          <center>
          <h3>เครื่องคำนวณหาค่าดัชนีมวลกาย (BMI)</h3>
          </center>
          <h5>
          &emsp;&emsp;&emsp;&emsp;การหาค่าดัชนีมวลกาย (Body Mass Index : BMI) คือเป็นมาตรการที่ใช้ประเมินภาวะอ้วนและผอมในผู้ใหญ่ ตั้งแต่อายุ 20 ปีขึ้นไป สามารถทำได้โดยการชั่งน้ำหนักตัวเป็นกิโลกรัม และวัดส่วนสูงเป็นเซนติเมตร แล้วนำมาหาดัชมีมวลกาย โดยใช้โปรแกรมวัดค่าความอ้วนข้างต้น
          </h5>

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
          <center>
           <button type="button" class="btn btn-primary btn-lg btn-block" style="width:50%;" id="cal1">คำนวณ</button>
           <h3 id="result">0</h3>
           <div><br></div>
           <table class="table table-bordered" style="width:80%;">
             <thead>
             <tr>
             <th class="text-left">BMI kg/m2</th>
             <th class="text-left">อยู่ในเกณท์</th>
             <th class="text-left">ภาวะเสี่ยงต่อโรค</th>
             </tr>
             </thead>
             <tbody>
               <tr id="b1">
                     <td class='text-left'>น้อยกว่า 18.50	</td>
                     <td class='text-left'>น้ำหนักน้อย / ผอม</td>
                     <td class='text-left' id="b11">น้อยกว่าคนปกติ</td>
               </tr>
               <tr id="b2">
                     <td class='text-left'>ระหว่าง 18.50 - 22.90</td>
                     <td class='text-left'>ปกติ (สุขภาพดี)</td>
                     <td class='text-left' id="b22">เท่าคนปกติ	</td>
               </tr>
               <tr id="b3">
                     <td class='text-left'>ระหว่าง 23 - 24.90	</td>
                     <td class='text-left'>ท้วม / โรคอ้วนระดับ 1	</td>
                     <td class='text-left' id="b33">อันตรายระดับ 1</td>
               </tr>
               <tr id="b4">
                     <td class='text-left'>ระหว่าง 25 - 29.90	</td>
                     <td class='text-left'>อ้วน / โรคอ้วนระดับ 2	</td>
                     <td class='text-left' id="b44">อันตรายระดับ 2	</td>
               </tr>
               <tr id="b5">
                     <td class='text-left'>มากกว่า 30	</td>
                     <td class='text-left'>อ้วนมาก / โรคอ้วนระดับ 3	</td>
                     <td class='text-left' id="b55">อันตรายระดับ 3	</td>
               </tr>
             </tbody>
           </table>
          </center>

         <div align="right"><a href="calculators2.php">คำนวณอัตราการเผาผลาญของร่างกาย>></a></div>

          </div>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title tie" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body" id="information">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
        $(document).ready(function(){

                        $('#cal1').click(function(){
                            var Weight = $('#Weight').val();
                            var Height = $('#Height').val();
                            var height = (Height/100)*(Height/100);
                            var Result = (Weight/height);
                            var result = Result.toFixed(2);

                            $('#result').html(result);
                            window.scrollTo(0, 150);
                            if(result<18.50){
                              $('.tie').html('น้ำหนักน้อยกว่ามาตรฐาน');
                              $('#information').html('<p>คุณมีน้ำหนักน้อยหรือผอม โดยทั่วไป ค่าดัชนีมวลกายปกติมีค่าน้อยกว่า 18.50</p>'+
                              '1. ควรกินอาหารให้หลากหลายครบ 5 หมู่ในสัดส่วนที่เหมาะสมและปริมาณมากขึ้น โดยเพิ่มอาหารประเภทที่ให้พลังงานมากขึ้น เช่น ไขมัน แป้ง ข้าว เนื้อสัตว์ นม<br><br>'+
                              '2. ควรเคลื่อนไหวและออกกำลังกายอย่างสม่ำเสมอทุกวันหรือเกือบทุกวัน ให้เหนื่อยพอควรโดยหายใจกระชั้นขึ้น เช่น เดินเร็ว ถีบจักรยาน รำมวยจีน ลีลาศจังหวะช้า รวมทั้งงานบ้าน งานสวน เป็นต้น สะสมให้ได้อย่างน้อยวันละ 30 นาทีอาจไม่จำเป็นต้องออกกำลังกายให้เหนื่อยมากหรือหอบ ที่ง่ายที่สุดคือ การเดิน');
                              document.getElementById("b1").style.backgroundColor = "lightblue";
                              document.getElementById("b2").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b3").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b4").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b5").style.backgroundColor = "#FBF8F8";
                              $('#b11').html('<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">น้อยกว่าคนปกติ</button>');
                              $('#b22').html('เท่าคนปกติ');
                              $('#b33').html('อันตรายระดับ 1');
                              $('#b44').html('อันตรายระดับ 2');
                              $('#b55').html('อันตรายระดับ 3');
                            }else if (result>=18.50&&result<=22.99) {
                              $('.tie').html('น้ำหนักปกติ');
                              $('#information').html('คุณมี น้ำหนักปกติ โดยทั่วไปค่าดัชนีมวลกายปกติมีค่าระหว่าง 18.50 - 22.99<br><br>ข้อแนะนำ<br><br>1. ควรกินอาหารให้หลากหลายครบ 5 หมู่ในสัดส่วนที่เหมาะสม กินเท่าที่ร่างกายต้องการวันไหนกินมากเกินไป วันต่อมาก็กินลดลง กินอาหารพวกข้าวและแป้งรวมทั้งเมล็ดธัญพืชอื่น ๆ ให้มากขึ้นไม่น้อยกว่าวันละ 6 ทัพพี กินผัก รวมทั้งเมล็ดถั่ว ผลไม้ ไม่ต่ำกว่าวันละ 5 ส่วน หรือครึ่งกิโลกรัม เพื่อไม่ให้มีพลังงานส่วนเกินจะทำให้ควบคุมน้ำหนักได้ดีและสมดุล<br><br>2.'+ 'ควรเคลื่อนไหวและออกกำลังกายอย่างสม่ำเสมอทุกวัน หรือเกือบทุกวัน อย่างน้อยให้เหนื่อยพอควร โดยหายใจกระชั้นขึ้น สะสมให้ได้อย่างน้อยวันละ 30 นาที โดยอาจจะแบ่งเป็น 2 - 3 ครั้งก็ได้ จะเป็นกิจกรรมออกกำลังกายที่เป็นเรื่องเป็นราวหรือการออกแรงในกิจวัตรประจำวัน เช่นเดินเร็ว ถีบจักรยาน ลีลาศ หรืองานบ้าน งานสวน ให้เลือกทำตามใจชอบ ถ้าคุณต้องการมีสมรรถภาพที่ดีก็ต้องออกกำลังกายแบบแอโรบิก เช่น เดินเร็ว ๆ วิ่งเหยาะ ถีบจักรยานเร็วๆ กระโดดเชือก ว่ายน้ำ เล่นกีฬา เป็นต้น'+ 'ให้รู้สึกเหนื่อยมาก หรือหอบ อย่างน้อยวันละ 20 - 30 นาที อย่างน้อยสัปดาห์ละ 3 วัน ที่ง่าย ที่สุดคือ การเดิน');
                              document.getElementById("b1").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b2").style.backgroundColor = "lightblue";
                              document.getElementById("b3").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b4").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b5").style.backgroundColor = "#FBF8F8";
                                $('#b11').html('น้อยกว่าคนปกติ');
                                $('#b22').html('<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">เท่าคนปกติ</button>');
                                $('#b33').html('อันตรายระดับ 1');
                                $('#b44').html('อันตรายระดับ 2');
                                $('#b55').html('อันตรายระดับ 3');
                            }else if (result>=23&&result<=24.99) {
                              $('.tie').html('ท้วม / อ้วนระดับ 1');
                              $('#information').html('คุณมี น้ำหนักเกิน หรือรูปร่างท้วม โดยทั่วไปค่าดัชนีมวลกายปกติมีค่าระหว่าง 23 - 24.99<br><br>ข้อแนะนำ<br><br>1. ควรควบคุมอาหาร โดยลดปริมาณอาหารหรือปรับเปลี่ยนอาหารจากที่ให้พลังงานมากเป็นอาหารที่ให้พลังงานน้อย ทั้งนี้พลังงานที่ได้รับไม่ควรต่ำกว่า 1200 กิโลแคลอรีต่อวัน โดยลดอาหารไขมัน/ เนื้อสัตว์ อาหารผัด/ทอด ขนมหวาน เครื่องดื่มที่ใส่น้ำตาล แอลกอฮอล์ แต่ต้องกินอาหารให้หลากหลายในสัดส่วนที่เหมาะสม กินข้าวและแป้ง รวมทั้งเมล็ดธัญพืชอื่น ๆ ไม่น้อยกว่าวันละ 6 ทัพพี กินผัก รวมทั้งเมล็ดถั่ว ผลไม้ ไม่ต่ำกว่าวันละ 5 ส่วน หรือครึ่งกิโลกรัม เพื่อลดพลังงานเข้า ร่างกายจะได้ใช้พลังงานส่วนเกินที่สะสมอยู่ในรูปไขมันแทน<br><br>2. ควรเคลื่อนไหวและออกกำลังกายแบบแอโรบิกอย่างสม่ำเสมอทุกวัน หรือเกือบทุกวันอย่างน้อยให้เหนื่อยพอควร โดยหายใจกระชั้นขึ้น สะสมอย่างน้อยวันละ 30 นาที อาจแบ่งเป็นวันละ 2 - 3 ครั้งก็ได้ เช่น เดินเร็ว ถีบจักรยาน เป็นต้น หากยังไม่เคยออกกำลังกายเริ่มแรกควร ออกกำลังเบา ๆ ที่ง่ายที่สุดคือ การเดิน ใช้เวลาน้อย ๆ ก่อน จากนั้นค่อย ๆ เพิ่มเวลาขึ้นในแต่ละสัปดาห์ โดยยังไม่เพิ่มความหนัก เมื่อร่างกายปรับตัวได้จึงค่อยเพิ่มความหนัก หรือความเหนื่อยตามที่ต้องการ และเพิ่มการเคลื่อนไหวร่างกายให้มากขึ้นในชีวิตประจำวัน เพื่อให้มีการใช้พลังงานเพิ่มขึ้น อย่างน้อยวันละ 200 - 300 กิโลแคลอรี<br><br>3. ควรฝึกความแข็งแรงของกล้ามเนื้อ ด้วยการฝึกกายบริหารหรือยกน้ำหนัก จะช่วยเสริมให้ร่างกายมีการใช้พลังงานเพิ่มมากขึ้น ทำให้ไขมันลดลง');
                              document.getElementById("b1").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b2").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b3").style.backgroundColor = "lightblue";
                              document.getElementById("b4").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b5").style.backgroundColor = "#FBF8F8";
                              $('#b11').html('น้อยกว่าคนปกติ');
                              $('#b22').html('เท่าคนปกติ');
                              $('#b33').html('<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">อันตรายระดับ 1</button>');
                              $('#b44').html('อันตรายระดับ 2');
                              $('#b55').html('อันตรายระดับ 3');
                            }else if (result>=25&&result<=29.99) {
                              $('.tie').html('อ้วน / อ้วนระดับ 2');
                              $('#information').html('คุณ อ้วนแล้ว (อ้วนระดับ 2) โดยทั่วไปค่าดัชนีมวลกายปกติมีค่าระหว่าง 25 - 29.99<br><br>ข้อแนะนำ<br><br>1. ควรควบคุมอาหารโดยลดปริมาณอาหารหรือปรับเปลี่ยนอาหารจากที่ให้พลังงานมากเป็นอาหารที่ให้พลังงานน้อย ทั้งนี้พลังงานที่ได้รับไม่ควรต่ำกว่า 1200 กิโลแคลอรีต่อวัน โดยลดอาหารไขมัน/เนื้อสัตว์ อาหารผัด/ทอด ขนมหวาน เครื่องดื่มที่ใส่น้ำตาล แอลกอฮอล์ แต่ต้องกินอาหารให้หลากหลายในสัดส่วนที่เหมาะสม กินข้าวและแป้งรวมทั้งเมล็ดธัญพืชอื่น ๆ ไม่น้อยกว่าวันละ 6 ทัพพี กินผักรวมทั้งเมล็ดถั่ว ผลไม้ไม่ต่ำกว่าวันละ 5 ส่วน หรือครึ่งกิโลกรัมเพื่อลดพลังงานเข้า ร่างกายจะได้ใช้พลังงานส่วนเกินที่สะสมอยู่ในรูปไขมันแทน<br><br>2. ควรเคลื่อนไหวและออกกำลังกายแบบแอโรบิกอย่างสม่ำเสมอทุกวันหรือเกือบทุกวันอย่างน้อยให้เหนื่อยพอควรโดยหายใจกระชั้นขึ้น ประมาณ 40-60 นาทีต่อวัน หรือแบ่งเป็นวันละ 2 ครั้ง ๆ ละ 20 - 30 นาที เช่น เดินเร็ว ถีบจักรยาน เป็นต้น หากยังไม่เคยออกกำลังกายเริ่มแรก ควรออกกำลังเบา ๆ ที่ง่ายที่สุดคือ การเดิน ใช้เวลาน้อยๆ ก่อน จากนั้น ค่อย ๆ เพิ่มเวลาขึ้นในแต่ละสัปดาห์ โดยยังไม่เพิ่มความหนัก เมื่อร่างกายปรับตัวได้จึงค่อยเพิ่มความหนัก หรือความเหนื่อยตามที่ต้องการและเพิ่มการเคลื่อนไหวร่างกายให้มากขึ้นในชีวิตประจำวัน เพื่อให้มีการใช้พลังงานเพิ่มขึ้น อย่างน้อยวันละ 200 - 300 กิโลแคลอรี<br><br>3. ควรฝึกความแข็งแรงของกล้ามเนื้อ ด้วยการฝึกกายบริหารหรือยกน้ำหนัก จะช่วยเสริมให้ร่างกายมีการใช้พลังงานเพิ่มมากขึ้น ทำให้ไขมันลดลง<br><br>4. ถ้าคุณสามารถลดพลังงานเข้าจากอาหารลงได้วันละ 400 กิโลแคลอรี และเพิ่มการใช้ พลังงานจากการออกกำลังกายวันละ 200 กิโลแคลอรี รวมแล้วคุณมีพลังงาพร่องลงไปวันละ 600 กิโลแคลอรี ออกกำลังกายประมาณ 6 วัน คิดเป็นพลังงานพร่อง 3600 กิโลแคลอรี คุณจะลดไขมันลงได้ประมาณครึ่งกิโลกรัมต่อสัปดาห์ พลังงานเข้าหรือออก 3500 กิโลแคลอรี จะเพิ่มหรือลดไขมันได้ 1 ปอนด์ หรือ 0.45 กิโลกรัม<br><br>5. ควรปรึกษาแพทย์หรือผู้เชี่ยวชาญในการลดและควบคุมน้ำหนัก');
                              document.getElementById("b1").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b2").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b3").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b4").style.backgroundColor = "lightblue";
                              document.getElementById("b5").style.backgroundColor = "#FBF8F8";
                                $('#b11').html('น้อยกว่าคนปกติ');
                                $('#b22').html('เท่าคนปกติ');
                                $('#b33').html('อันตรายระดับ 1');
                                $('#b44').html('<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">อันตรายระดับ 2</button>');
                                $('#b55').html('อันตรายระดับ 3');
                            }else {
                              $('.tie').html('อ้วนมาก / อ้วนระดับ 3');
                              $('#information').html('คุณ อ้วนมากแล้ว (อ้วนระดับ 3) โดยทั่วไปค่าดัชนีมวลกายปกติมีค่ามากกว่า 30<br><br>ข้อแนะนำ<br><br>1. ควรควบคุมอาหารโดยลดปริมาณอาหารหรือปรับเปลี่ยนอาหารจากที่ให้พลังงานมากเป็นอาหารที่ให้พลังงานน้อย ทั้งนี้พลังงานที่ได้รับไม่ควรต่ำกว่า 1200 กิโลแคลอรีต่อวัน โดยลดอาหารไขมัน/เนื้อสัตว์ อาหารผัด/ทอด ขนมหวาน เครื่องดื่มที่ใส่น้ำตาล แอลกอฮอล์ แต่ต้องกินอาหารให้หลากหลายในสัดส่วนที่เหมาะสม กินข้าวและแป้งรวมทั้งเมล็ดธัญพืชอื่น ๆ ไม่น้อยกว่าวันละ 6 ทัพพี กินผักรวมทั้งเมล็ดถั่ว ผลไม้ไม่ต่ำกว่าวันละ 5 ส่วน หรือครึ่งกิโลกรัมเพื่อลดพลังงานเข้า ร่างกายจะได้ใช้พลังงานส่วนเกินที่สะสมอยู่ในรูปไขมันแทน<br><br>2. ควรเคลื่อนไหวและออกกำลังกายแบบแอโรบิกอย่างสม่ำเสมอทุกวันหรือเกือบทุกวันอย่างน้อยให้เหนื่อยพอควรโดยหายใจกระชั้นขึ้น ประมาณ 40-60 นาทีต่อวัน หรือแบ่งเป็นวันละ 2 ครั้ง ๆ ละ 20 - 30 นาที เช่น เดินเร็ว ถีบจักรยาน เป็นต้น หากยังไม่เคยออกกำลังกายเริ่มแรก ควรออกกำลังเบา ๆ ที่ง่ายที่สุดคือ การเดิน ใช้เวลาน้อยๆ ก่อน จากนั้น ค่อย ๆ เพิ่มเวลาขึ้นในแต่ละสัปดาห์ โดยยังไม่เพิ่มความหนัก เมื่อร่างกายปรับตัวได้จึงค่อยเพิ่มความหนัก หรือความเหนื่อยตามที่ต้องการและเพิ่มการเคลื่อนไหวร่างกายให้มากขึ้นในชีวิตประจำวัน เพื่อให้มีการใช้พลังงานเพิ่มขึ้น อย่างน้อยวันละ 200 - 300 กิโลแคลอรี<br><br>3. ควรฝึกความแข็งแรงของกล้ามเนื้อ ด้วยการฝึกกายบริหารหรือยกน้ำหนัก จะช่วยเสริมให้ร่างกายมีการใช้พลังงานเพิ่มมากขึ้น ทำให้ไขมันลดลง<br><br>4. ถ้าคุณสามารถลดพลังงานเข้าจากอาหารลงได้วันละ 400 กิโลแคลอรี และเพิ่มการใช้ พลังงานจากการออกกำลังกายวันละ 200 กิโลแคลอรี รวมแล้วคุณมีพลังงาพร่องลงไปวันละ 600 กิโลแคลอรี ออกกำลังกายประมาณ 6 วัน คิดเป็นพลังงานพร่อง 3600 กิโลแคลอรี คุณจะลดไขมันลงได้ประมาณครึ่งกิโลกรัมต่อสัปดาห์ พลังงานเข้าหรือออก 3500 กิโลแคลอรี จะเพิ่มหรือลดไขมันได้ 1 ปอนด์ หรือ 0.45 กิโลกรัม<br><br>5. ควรปรึกษาแพทย์หรือผู้เชี่ยวชาญในการลดและควบคุมน้ำหนัก');
                              document.getElementById("b1").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b2").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b3").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b4").style.backgroundColor = "#FBF8F8";
                              document.getElementById("b5").style.backgroundColor = "lightblue";
                              $('#b11').html('น้อยกว่าคนปกติ');
                              $('#b22').html('เท่าคนปกติ');
                              $('#b33').html('อันตรายระดับ 1');
                              $('#b44').html('อันตรายระดับ 2');
                              $('#b55').html('<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">อันตรายระดับ 3</button>');
                            }




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
