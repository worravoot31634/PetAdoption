<?php
// Start the session
session_start();
include_once('connectDB.php');
$sql = "SELECT statusLogin FROM account WHERE accountID = '" . $_SESSION['userAccountID'] . "'";

$rs = $conn->query($sql);
$row = $rs->fetch_assoc();

if ($row["statusLogin"] == 0) {
    session_destroy();
    session_unset();
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

    .contentCenter {
        margin: auto;
        width: 60%;

    }

    .pragraph {
        font-size: 20px;
    }
</style>

<body id="myPage">



    <?php
    include('NavbarMember.php');
    ?>
    <!--Content-->

    <center>
        <br>
        <h1 style="margin-top: 50px;">Where can I get some ?</h1>
        <br>
        <img src="./Images/new1.jpg" alt="" srcset="" width="80%">
    </center>

    <div style="width: 80%;display: table;width: 80%;" class="contentCenter">

        <p class="pragraph">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
            alteration in
            some form, by injected humour, or randomised words which don't look even slightly believable. If you
            are
            going
            to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
            middle
            of
            text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
            making
            this
            the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
            with a
            handful
            of model sentence structures, to generate Lorem Ipsum which looks reasonable.
        </p>

        <p class="pragraph">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
            alteration in
            some form, by injected humour, or randomised words which don't look even slightly believable. If you
            are
            going
            to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
            middle
            of
            text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
            making
            this
            the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
            with a
            handful
            of model sentence structures, to generate Lorem Ipsum which looks reasonable.
        </p>

        <p class="pragraph">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
            alteration in
            some form, by injected humour, or randomised words which don't look even slightly believable. If you
            are
            going
            to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
            middle
            of
            text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
            making
            this
            the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
            with a
            handful
            of model sentence structures, to generate Lorem Ipsum which looks reasonable.
        </p>

    </div>
    <br>
    <div class="container">
        <div class="row">
            <div>
                <h6 style="font-size:20px;display: inline-block;">Post by </h6> &nbsp;&nbsp;
            </div>
            <div>
                <img src="./Images/source/2.png" style="width: 30px;height: 30px;" alt="" srcset="">
            </div>
            <div>
                &nbsp;&nbsp;<h6 style="font-size:20px;display: inline-block;">Jame Logan</h6>
            </div>
        </div>
    </div>
    <br>
    <!--end Content-->



    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center ">
        <h4>Follow Us</h4>
        <a class="w3-button w3-large w3-teal " href="javascript:void(0) " title="Facebook "><i class="fa fa-facebook "></i></a>
        <a class="w3-button w3-large w3-teal " href="javascript:void(0) " title="Twitter "><i class="fa fa-twitter "></i></a>
        <a class="w3-button w3-large w3-teal " href="javascript:void(0) " title="Google + "><i class="fa fa-google-plus "></i></a>
        <a class="w3-button w3-large w3-teal " href="javascript:void(0) " title="Google + "><i class="fa fa-instagram "></i></a>
        <a class="w3-button w3-large w3-teal w3-hide-small " href="javascript:void(0) " title="Linkedin "><i class="fa fa-linkedin "></i></a>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp " target="_blank ">w3.css</a></p>

        <div style="position:relative;bottom:100px;z-index:1; " class="w3-tooltip w3-right ">
            <span class="w3-text w3-padding w3-teal w3-hide-small ">Go To Top</span>
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