<?php
// Start the session
session_start();
if (!$_SESSION['loginStatus']) {
    $_SESSION['message'] = 'Please login first';
    header("Location: login.php");
    $_SESSION['accountID'];
}
?>




<!DOCTYPE html>
<html>
<title>Pet Adoption</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./CSS/W3S/w3.css">
<link rel="stylesheet" href="./CSS/W3S/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./CSS/Bootstrap/css/bootstrap.min.css">
<script src="js/showUploadImg.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>-->

<link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS/CustomCss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .activity-content-link {
        text-decoration: none;
        color: black;
    }

    .activity-content-link:hover {
        color: black;
    }

    .contentCenter {
        margin: auto;
        width: 60%;

    }

    .pragraph {
        font-size: 20px;
    }

    .submitClass {
        background-color: #786898;
        border: none;
        width: 30%;
        color: #FFFFFF;
        border-radius: 4px;
        font-size: 18px;
    }

    .submitClass:hover {
        background-color: #594481;
    }
</style>

<body id="myPage">

<?php
    include('NavbarOrganization.php');
    ?>



    <!--Content-->
    <div>
        <br>
        <br><br>
        <center><b><p style="font-size:35px;">ขอบริจาค</p></b></center>
    </div>
    <form action="addDonate.php" method="post" enctype="multipart/form-data">
        <div class="container" style="width: 80%;">
            <div class="row w3-border" style="margin-top: 50px;margin-bottom: 50px;">
                <div class="w3-half w3-center">
                    <img id="Photo" src="./Images/source/picture.png" alt="" srcset="" width="50%">
                    <div style="clear:both;">
                        <input type="file" value="โพสต์" name="filedonate" class="submitClass" style="margin-bottom: 10px;" required>
                    </div>

                </div>


                <div class="w3-half" style="background-color: #E2E0E0;">



                    <div>
                       <b> <p class="w3-left" style="font-size: 25px;margin-left: 30px;">เรื่อง</p></b>
                    </div>

                    <center>
                        <div class="w3-row" style="width: 80%;">
                            <p><input type="text" style="width: 100%;border-radius: 5px;" class="w3-border" rows="15"
                                    name="topic"></textarea>
                            </p>
                        </div>
                    </center>



                    <div>
                        <b><p class="w3-left" style="font-size: 25px;margin-left: 30px;">รายละเอียด</p></b>
                    </div>
                    <center>
                        <div class="w3-row" style="width: 80%;">
                            <p><textarea style="width: 100%;border-radius: 5px;" class="w3-border" rows="10"
                                    name="comment"></textarea>
                            </p>
                        </div>
                    </center>



                    <div>
                        <b><p class="w3-left" style="font-size: 25px;margin-left: 30px;">จังหวัด</p></b>
                    </div>
                    <center>
                        <div class="w3-row" style="width: 80%;">
                                  <select class="w3-border w3-rest  w3-select" name="province" id="fromSelect" style="width:100%;">
                                  <option style="font-size: 20px;" value="0">ทั้งหมด</option>
                                      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                      <option value="กระบี่">กระบี่ </option>
                                      <option value="กาญจนบุรี">กาญจนบุรี </option>
                                      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                      <option value="กำแพงเพชร">กำแพงเพชร </option>
                                      <option value="ขอนแก่น">ขอนแก่น</option>
                                      <option value="จันทบุรี">จันทบุรี</option>
                                      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                      <option value="ชัยนาท">ชัยนาท </option>
                                      <option value="ชัยภูมิ">ชัยภูมิ </option>
                                      <option value="ชุมพร">ชุมพร </option>
                                      <option value="ชลบุรี">ชลบุรี </option>
                                      <option value="เชียงใหม่">เชียงใหม่ </option>
                                      <option value="เชียงราย">เชียงราย </option>
                                      <option value="ตรัง">ตรัง </option>
                                      <option value="ตราด">ตราด </option>
                                      <option value="ตาก">ตาก </option>
                                      <option value="นครนายก">นครนายก </option>
                                      <option value="นครปฐม">นครปฐม </option>
                                      <option value="นครพนม">นครพนม </option>
                                      <option value="นครราชสีมา">นครราชสีมา </option>
                                      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                      <option value="นครสวรรค์">นครสวรรค์ </option>
                                      <option value="นราธิวาส">นราธิวาส </option>
                                      <option value="น่าน">น่าน </option>
                                      <option value="นนทบุรี">นนทบุรี </option>
                                      <option value="บึงกาฬ">บึงกาฬ</option>
                                      <option value="บุรีรัมย์">บุรีรัมย์</option>
                                      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                      <option value="ปทุมธานี">ปทุมธานี </option>
                                      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                      <option value="ปัตตานี">ปัตตานี </option>
                                      <option value="พะเยา">พะเยา </option>
                                      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                      <option value="พังงา">พังงา </option>
                                      <option value="พิจิตร">พิจิตร </option>
                                      <option value="พิษณุโลก">พิษณุโลก </option>
                                      <option value="เพชรบุรี">เพชรบุรี </option>
                                      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                      <option value="แพร่">แพร่ </option>
                                      <option value="พัทลุง">พัทลุง </option>
                                      <option value="ภูเก็ต">ภูเก็ต </option>
                                      <option value="มหาสารคาม">มหาสารคาม </option>
                                      <option value="มุกดาหาร">มุกดาหาร </option>
                                      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                      <option value="ยโสธร">ยโสธร </option>
                                      <option value="ยะลา">ยะลา </option>
                                      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                      <option value="ระนอง">ระนอง </option>
                                      <option value="ระยอง">ระยอง </option>
                                      <option value="ราชบุรี">ราชบุรี</option>
                                      <option value="ลพบุรี">ลพบุรี </option>
                                      <option value="ลำปาง">ลำปาง </option>
                                      <option value="ลำพูน">ลำพูน </option>
                                      <option value="เลย">เลย </option>
                                      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                      <option value="สกลนคร">สกลนคร</option>
                                      <option value="สงขลา">สงขลา </option>
                                      <option value="สมุทรสาคร">สมุทรสาคร </option>
                                      <option value="สมุทรปราการ">สมุทรปราการ </option>
                                      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                      <option value="สระแก้ว">สระแก้ว </option>
                                      <option value="สระบุรี">สระบุรี </option>
                                      <option value="สิงห์บุรี">สิงห์บุรี </option>
                                      <option value="สุโขทัย">สุโขทัย </option>
                                      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                      <option value="สุรินทร์">สุรินทร์ </option>
                                      <option value="สตูล">สตูล </option>
                                      <option value="หนองคาย">หนองคาย </option>
                                      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                      <option value="อุดรธานี">อุดรธานี </option>
                                      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                      <option value="อุทัยธานี">อุทัยธานี </option>
                                      <option value="อุบลราชธานี">อุบลราชธานี</option>
                                      <option value="อ่างทอง">อ่างทอง </option>
                                  </select>
                        </div>
                    </center>





                    <div>
                       <b> <p class="w3-left" style="font-size: 25px;margin-left: 30px;">จำนวนเงิน</p></b>
                    </div>

                    <center>
                        <div class="w3-row" style="width: 80%;">
                            <p><input type="text" style="width: 100%;border-radius: 5px;" class="w3-border" rows="15"
                                    name="totalprice"></textarea>
                            </p>

                            <input type="submit" value="โพสต์" class="submitClass"
                                style="float:right;margin-bottom: 10px;">

                        </div>
                    </center>
                </div>
                <!--end of w3-half right-->
            </div>
        </div>
    </form>

    <style>
        .w3-8c71c0 {
          background-color: #8c71c0;
        }

        .w3-564b6c {
          background-color: #564b6c;
        }

        .w3-373143 {
          background-color: #373143;
        }
      </style>
      <!-- Footer -->
      <footer class="w3-container w3-padding-32  w3-center " style="background-image: url('./Images/footer.png');">
        <table align=center>
          <tr>
            <td style="height: 3cm;">

            </td>
          </tr>

          <tr style="width:100%;">
            <td>
              <p style="font-size: 30px;color: #E2E0E0;">
                มาร่วมเป็นส่วนหนึ่งกับเรา&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <td>
          </tr>
          <tr style="width:100%;">

            <td>
              <p style="font-size: 30px; color: #E2E0E0;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มีน้องๆมากมายรอคุณอยู่</p>
            </td>
          </tr>
        </table>
        <a class="w3-button w3-8c71c0 w3-round-xxlarge" href="javascript:void(0) " title="Facebook "><i
            class="fa fa-facebook "></i></a>
        <a class="w3-button w3-8c71c0 w3-round-xxlarge" href="javascript:void(0) " title="Twitter "><i
            class="fa fa-twitter "></i></a>
        <a class="w3-button w3-8c71c0 w3-round-xxlarge" href="javascript:void(0) " title="Google + "><i
            class="fa fa-google-plus "></i></a>
        <p></p>

        <div style="position:relative;bottom:100px;z-index:1; " class="w3-tooltip w3-right ">
          <span class="w3-text w3-padding  w3-8c71c0 w3-hide-small  " style="color: #E2E0E0;">Go To Top</span>
          <a class="w3-button w3-theme " href="#myPage "><span class="w3-xlarge ">
              <i class="fa fa-chevron-circle-up "></i></span></a>
        </div>
      </footer>

    <script>
        // Script for side navigation
        function w3_open() {
            var x = document.getElementById("mySidebar ");
            x.style.width = "300px ";
            x.style.paddingTop = "10% ";
            x.style.display = "block ";
        }

        // Close side navigation
        function w3_close() {
            document.getElementById("mySidebar ").style.display = "none ";
        }

        // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
            var x = document.getElementById("navDemo");

            if (x.className.indexOf("w3-show ") == -1) {
                x.className += " w3-show ";

            } else {
                x.className = x.className.replace(" w3-show ", " ");

            }


        }

        function openNav2() {

            var y = document.getElementById("navDemo2");
            if (y.className.indexOf("w3-show ") == -1) {
                y.className += " w3-show ";

            } else {
                y.className = y.className.replace(" w3-show ", " ");

            }




        }
    </script>

</body>



</html>



<script>
    function hideNav() {
        document.getElementById("menu").style.display = "none";
        document.getElementById("searchMenu").style.display = "block";

    }


    function showNav() {
        document.getElementById("menu").style.display = "block";
        document.getElementById("searchMenu").style.display = "none";


    }
</script>
