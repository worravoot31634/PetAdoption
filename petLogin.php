<?php
// Start the session
session_start();
if(!$_SESSION['loginStatus']){
  $_SESSION['message'] = 'Please login first';
  header("Location: login.php");
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./CSS/CustomCss.css">

<style>
.statusCircle {
  height: 30px;
  width: 30px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
}
</style>


<body id="myPage">



<?php
    include('NavbarMember.php');
    ?>

    <!--Fix 80 percent Screen-->
    <br>
    <table width="80%" align="center">


        <div>
            <center>
                <p style="font-weight: bold; margin-top:70px;font-size: 30px;">
                    <img width="50" src="./Images/icon/catIcon1.png">&nbsp;&nbsp;&nbsp;น้องๆ
                    เหล่านี้กำลังรอคุณอยู่&nbsp;&nbsp;&nbsp;
                    <img width="50" src="./Images/icon/dogIcon1.png">
                </p>
            </center>
        </div>
        <br>


        <tr>
            <td>
                    <div class="w3-half">

                        <div class="w3-container w3-mobile">
                        <input class="advanceSearch" placeholder="ค้นหา" style="font-size: 20px;" size="100" type="text" />
                        <a href="#" style="font-size:18px; background-color: #726292; color: white;"
                            class="w3-right w3-button w3-circle" title="Search"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="w3-half" style="padding: 4px;">
                        <div class="w3-third  w3-container w3-mobile" style="padding: 4px;">
                            <div style="display: flex;">
                                <a style="background-color: green;" class="statusCircle"></a>
                                <a style="padding-left: 5px; font-weight: bold; font-size: 18px;">ยังไม่มีผู้สนใจรับเลี้ยง</a>
                            </div>
                        </div>
                        <div class="w3-third  w3-container w3-mobile" style="padding: 4px;">
                            <div style="display: flex;">
                                <a style="background-color: yellow;" class="statusCircle"></a>
                                <a style="padding-left: 5px; font-weight: bold; font-size: 18px;">มีผู้สนใจรับเลี้ยง</a>
                            </div>
                        </div>
                        <div class="w3-third ter w3-container w3-mobile" style="padding: 4px;">
                            <div style="display: flex;">
                                <a style="background-color: red;" class="statusCircle"></a>
                                <a style="padding-left: 5px;font-weight: bold; font-size: 18px;">มีผู้รับเลี้ยงแล้ว</a>
                            </div>
                        </div>

                </div>
                <br><br><br>
                <div class="w3-row">
                    <div class="w3-container w3-quarter" style="padding-bottom: 5px;">
                        <div class="w3-half" style="padding-right: 2px;width: 50%;">
                            <a style="font-weight: bold; font-size: 20px;">ชนิดสัตว์เลี้ยง</a>
                        </div>
                        <div style="font-size: 20px;" class="w3-half" style="width: 50%;">
                            <select class="w3-border w3-rest  w3-select" name="option">
                                <option style="font-size: 20px;" value="0">all</option>
                                <option style="font-size: 20px;" value="1">Dogs</option>
                                <option style="font-size: 20px;" value="2">Cats</option>
                            </select>
                        </div>


                        </p>
                    </div>
                    <div class="w3-container w3-quarter" style="padding-bottom: 5px;">
                        <div class="w3-half" style="padding: 2px;width: 50%;">
                            <a style="font-weight: bold; font-size: 20px;">สายพันธ์</a>
                        </div>
                        <div style="font-size: 20px;" class="w3-half" style="width: 50%;">
                            <select class="w3-border w3-rest  w3-select" name="option">
                                <option style="font-size: 20px;" value="0">all</option>
                                <option style="font-size: 20px;" value="1">บีเกิล</option>
                                <option style="font-size: 20px;" value="2">บางแก้ว</option>
                            </select>
                        </div>


                        </p>
                    </div>
                    <div class="w3-container w3-quarter" style="padding-bottom: 5px;">
                        <div class="w3-half" style="padding: 2px;width: 50%;">
                            <a style="font-weight: bold; font-size: 20px;">จังหวัด</a>
                        </div>
                        <div style="font-size: 20px;" class="w3-half" style="width: 50%;">
                            <select class="w3-border w3-rest  w3-select" name="option">
                                <option style="font-size: 20px;" value="0">all</option>
                                <option style="font-size: 20px;" value="1">นครราชสีมา</option>
                                <option style="font-size: 20px;" value="2">บุรีรัมย์</option>
                            </select>
                        </div>


                        </p>
                    </div>
                    <div class="w3-container w3-quarter" style="align-items: auto;padding-bottom: 5px;">
                        <div class="w3-half" style="padding: px;width: 50%;">
                            <a style="font-weight: bold; font-size: 20px;">จาก</a>
                        </div>
                        <div style="font-size: 20px;" class="w3-half" style="width: 50%;">
                            <select class="w3-border w3-rest  w3-select" name="option">
                                <option style="font-size: 20px;" value="0">all</option>
                                <option style="font-size: 20px;" value="1">ทางบ้าน</option>
                                <option style="font-size: 20px;" value="2">มูลนิธิ</option>
                            </select>
                        </div>


                        </p>
                    </div>
                </div>
<br>
                <div class="w3-container">
                    <div class="w3-container w3-border">
                        <div style="padding:10px;" class="w3-quarter w3-container">
                            <div class="w3-card-4 test" style="width:100%;max-width:300px;">
                                <a href="petDetailLogin"><img src="./Images/dogPic.png" alt="Avatar" style="width:100%;"></a>
                                <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                                    <img  width="35px" src="./Images/userPic.png">
                                    <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">Logan</a>
                                    <a style="background-color: red;" class="w3-right statusCircle"></a>
                                    <!--<p>Architect and engineer</p>-->
                                </div>
                            </div>
                        </div>
                        <div style="padding:10px;" class="w3-quarter w3-container">
                            <div class="w3-card-4 test" style="width:100%;max-width:300px;">
                            <a href="petDetailLogin"><img src="./Images/dogPic.png" alt="Avatar" style="width:100%;"></a>
                                <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                                    <img  width="35px" src="./Images/userPic.png">
                                    <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">Logan</a>
                                    <a style="background-color: green;" class="w3-right statusCircle"></a>
                                    <!--<p>Architect and engineer</p>-->
                                </div>
                            </div>
                        </div>
                        <div style="padding:10px;" class="w3-quarter w3-containe">
                            <div class="w3-card-4 test" style="width:100%;max-width:300px;">
                            <a href="petDetailLogin"><img src="./Images/dogPic.png" alt="Avatar" style="width:100%;"></a>
                                <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                                    <img  width="35px" src="./Images/userPic.png">
                                    <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">Logan</a>

                                    <a style="background-color: yellow;" class="w3-right statusCircle"></a><!--<p>Architect and engineer</p>-->
                                </div>
                            </div>
                        </div>
                        <div style="padding:10px;" class="w3-quarter w3-container">
                            <div class="w3-card-4 test" style="width:100%;max-width:300px;">
                            <a href="petDetailLogin"><img src="./Images/dogPic.png" alt="Avatar" style="width:100%;"></a>
                                <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                                    <img  width="35px" src="./Images/userPic.png">
                                    <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">Logan</a>
                                    <a style="background-color: green;" class="w3-right statusCircle"></a>
                                    <!--<p>Architect and engineer</p>-->
                                </div>
                            </div>
                        </div>
                        <div style="padding:10px;" class="w3-quarter w3-container">
                            <div class="w3-card-4 test" style="width:100%;max-width:300px;">
                            <a href="petDetailLogin"><img src="./Images/dogPic.png" alt="Avatar" style="width:100%;"></a>
                                <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                                    <img  width="35px" src="./Images/userPic.png">
                                    <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">Logan</a>
                                    <a style="background-color: yellow;" class="w3-right statusCircle"></a>
                                    <!--<p>Architect and engineer</p>-->
                                </div>
                            </div>
                        </div>

                        <div style="padding:10px;" class="w3-quarter w3-container">
                            <div class="w3-card-4 test" style="width:100%;max-width:300px;">
                            <a href="petDetailLogin"><img src="./Images/dogPic.png" alt="Avatar" style="width:100%;"></a>
                                <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                                    <img  width="35px" src="./Images/userPic.png">
                                    <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">Logan</a>
                                    <a style="background-color: green;" class="w3-right statusCircle"></a>
                                    <!--<p>Architect and engineer</p>-->
                                </div>
                            </div>
                        </div>

                        <div style="padding:10px;" class="w3-quarter w3-container">
                            <div class="w3-card-4 test" style="width:100%;max-width:300px;">
                            <a href="petDetailLogin"><img src="./Images/dogPic.png" alt="Avatar" style="width:100%;"></a>
                                <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                                    <img  width="35px" src="./Images/userPic.png">
                                    <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">Logan</a>
                                    <a style="background-color: red;" class="w3-right statusCircle"></a>
                                    <!--<p>Architect and engineer</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </td>
        </tr>




    </table>


<br><br>

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
