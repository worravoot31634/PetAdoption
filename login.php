<!DOCTYPE html>
<html>
<title>Pet Adoption</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./CSS/W3S/w3.css">
<link rel="stylesheet" href="./CSS/W3S/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./CSS/Bootstrap/css/bootstrap.min.css">
<?php
// Start the session
session_start();
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->

<link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS/CustomCss.css">

<style>
    .activity-content-link {
        text-decoration: none;
        color: black;
    }

    .activity-content-link:hover {
        color: black;
    }

    .colorActivity {
        background-color: #E2E0E0;

    }

    body {
        background-image: url('./Images/source/bgLogin.png');
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;

    }
</style>

<body id="myPage" onload="GFG_Fun();">

    <?php

    include('NavbarNonMember.php');
    ?>
    <form name="form1" method="post" action="check_login.php">
        <!--Content-->
        <div class="w3-container w3-hide-medium w3-hide-small" style="margin-top: 150px;margin-bottom: 100px;">
            <div class="w3-row  w3-right" style="width: 25%;border-radius: 5px;background-color: #726292;margin-right: 10%;">
                <div class="w3-row">
                    <br>
                    <center>
                        <p style="font-size: 30px;color:white;font-weight: bold;">เข้าสู่ระบบ</p>
                    </center>
                    <form name="form1" method="post" action="check_login.php">
                        <input type="hidden" name="deviceInfo" id="deviceInfo">
                        <p style="font-size: 18px;left: 10%;position:relative;color: #FFFFFF;">ชื่อผู้ใช้</p>
                        <center><input type="text" style="width:80%;border: none;border-radius: 2px;" name="username" id="username">
                        </center>
                        <p style="font-size: 18px;left: 10%;position:relative;color: #FFFFFF;">รหัสผ่าน</p>
                        <center><input type="password" style="width:80%;border: none;border-radius: 2px;" name="password" id="password">
                        </center>
                        <br>
                        <?php
                        if (isset($_SESSION['message'])) {
                            echo "<center>" . "<p style='font-size: 18px;position:relative;color: #FFFFFF;'>" . $_SESSION['message'] . "</p>" . "</center>";
                            unset($_SESSION['message']);
                        } ?>
                        <center><button class="w3-button" type="submit" name="login" style="margin-bottom: 20%;width: 60%;border:none;font-size: 20px;border-radius: 3px;color: #FFFFFF;background-color: #564B6C;">เข้าสู่ระบบ</button>
                        </center>

                    </form>
                </div>
            </div>
        </div>


        <div class="w3-container w3-hide-large" style="margin-top: 50px;">
            <div class="w3-row " style="border-radius: 5px;background-color: #726292;">
                <center>
                    <p style="font-size: 30px;color:white;font-weight: bold;">เข้าสู่ระบบ</p>
                </center>
                <form name="form1" method="post" action="check_login.php">
                    <input type="hidden" name="deviceInfo" id="deviceInfoSmall">
                    <p style="font-size: 18px;left: 10%;position:relative;color: #FFFFFF;">ชื่อผู้ใช้</p>
                    <center><input type="text" style="width:80%;border: none;border-radius: 2px;" name="username">
                    </center>
                    <p style="font-size: 18px;left: 10%;position:relative;color: #FFFFFF;">รหัสผ่าน</p>
                    <center><input type="password" style="width:80%;border: none;border-radius: 2px;" name="password">
                    </center>
                    <br>
                    <center><button class="w3-button" type="submit" name="login" style="margin-bottom: 20%;width: 60%;border:none;font-size: 20px;border-radius: 3px;color: #FFFFFF;background-color: #564B6C;">เข้าสู่ระบบ</button>
                    </center>
                </form>
            </div>
        </div>
    </form>

    <!--Hidden small medium-->

    <!-- end of Hidden small medium-->
    <!--end Content-->
    <!-- Footer -->


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

<script>
    function GFG_Fun() {

        var Name = "Unknown OS";
        if (navigator.userAgent.indexOf("Win") != -1) Name =
            "Windows OS";
        if (navigator.userAgent.indexOf("Mac") != -1) Name =
            "Macintosh";
        if (navigator.userAgent.indexOf("Linux") != -1) Name =
            "Linux OS";
        if (navigator.userAgent.indexOf("Android") != -1) Name =
            "Android OS";
        if (navigator.userAgent.indexOf("like Mac") != -1) Name =
            "iOS";

        document.getElementById("deviceInfo").value = Name;
        document.getElementById("deviceInfoSmall").value = Name;

    }
</script>