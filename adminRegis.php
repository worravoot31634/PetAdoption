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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./CSS/CustomCss.css">
<link rel="stylesheet" href="CSS/notiflix-1.9.1.min.css">
<script src="js/notiflix-1.9.1.min.js"></script>
<script src="js/notiflix-aio-1.9.1.min.js"></script>
<style>
    .statusCircle {
        height: 30px;
        width: 30px;
        background-color: red;
        border-radius: 50%;
        display: inline-block;
    }

    .btnEdit {
        width: 40%;
        border-radius: 3px;
        border: none;
        background-color: #786898;
        color: #ffffff;
    }

    .btnEdit:hover {
        background-color: #373143;
    }

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

    .tableHeader {
        background-color: #786898;
        color: #ffffff;
    }

    .btnCloseStatus {
        background-color: #786898;
        border-radius: 5px;
        border: none;
        color: #ffffff;
    }

    .btnCloseStatus:hover {
        background-color: #373143;
    }

    .btnClosedStatus {
        background-color: #A1A1A1;
        border-radius: 5px;
        border: none;
        color: #ffffff;
    }

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

    .textPositionAdRegis {
        color: #ffffff;
        font-size: 20px;
        position: relative;
        left: 10%;
        margin-top: 2px;

    }

    .textAreaPositionAdRegis {
        color: #ffffff;
        font-size: 20px;
        position: relative;
        left: 5%;
        margin-top: 2px;

    }

    .inputRegis {
        border-radius: 3px;
        width: 80%;
    }

    .btnAdRegis {
        width: 40%;
        border-radius: 3px;
        margin-top: 20px;
        padding: 10px;
        background-color: #373143;
        color: #ffffff;
        border: none;
        font-size: 20px;
        font-weight: bold;
    }

    .btnAdRegis:hover {
        background-color: #E4E4E4;
        color: #373143;
        font-weight: bold;
    }
</style>


<body id="myPage">


    <?php
    include('NavbarAdmin.php');
    ?>


    <!--hide w3-hide-small and medium-->
    <!--Content-->
    <div class="w3-container w3-hide-medium w3-hide-small">
        <div class="w3-row" style="width: 50%;border-radius: 5px;background-color: #726292;padding-top: 150px;position: fixed;bottom: 0;top:0;float:right;right:0;">
            <div class="w3-row">
                <br>
                <center>
                    <p style="font-size: 30px;color:white;font-weight: bold;">สมัครสมาชิกให้องค์กร</p>
                </center>
                <form action="addDataAdminRegis.php" method="POST" enctype="multipart/form-data" autocomplete="on">
                    <div class="w3-container">
                        <div class="w3-row">
                            <div class="w3-half">
                                <p class="textPositionAdRegis">ชื่อองค์กร</p>

                                <center><input type="text" name="nameOrgan" id="" class="inputRegis" style="border: none;" placeholder="กรอกชื่อ" required>
                                </center>
                            </div>
                            <div class="w3-half">
                                <p class="textPositionAdRegis">ชื่อองค์กร</p>
                                <center><input type="file" name="fileOrgan" id="" style="border:none;background-color: #ffffff;" class="inputRegis" required>
                                </center>
                            </div>
                        </div>
                    </div>

                    <div class="w3-container">
                        <div class="w3-row">
                            <div class="w3-half">
                                <p class="textPositionAdRegis">ชื่อผู้ใช้</p>

                                <center><input type="text" name="usernameOrgan" id="" class="inputRegis" style="border: none;" placeholder="กรอกชื่อผู้ใช้" required>
                                </center>
                            </div>
                            <div class="w3-half">
                                <p class="textPositionAdRegis">รหัสผ่าน</p>
                                <center><input type="password" name="passwordOrgan" id="" style="border:none;background-color: #ffffff;" class="inputRegis" placeholder="กรอกรหัสผ่าน" required>
                                </center>
                            </div>
                        </div>
                    </div>

                    <div class="w3-container">
                        <div class="w3-row">
                            <div class="w3-half">
                                <p class="textPositionAdRegis">อีเมล</p>

                                <center><input type="email" name="emailOrgan" id="" class="inputRegis" style="border: none;" placeholder="example@email.com" required>
                                </center>
                            </div>
                            <div class="w3-half">
                                <p class="textPositionAdRegis">หมายเลขโทรศัพท์</p>
                                <center><input type="phone" name="phoneOrgan" id="" style="border:none;background-color: #ffffff;" class="inputRegis" placeholder="0812345678" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                </center>
                            </div>
                        </div>
                    </div>

                    <div class="w3-container">
                        <div class="w3-row">

                            <p class="textAreaPositionAdRegis">ที่อยู่</p>
                            <center><textarea style="width: 90%;" rows="5" id="addressOrgan" name="addressOrgan" required></textarea>
                            </center>

                        </div>
                    </div>

                    <div class="w3-container">
                        <div class="w3-row">

                            <center><button class="btnAdRegis">สมัครสมาชิก</button>
                            </center>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <!--w3-hide-large-->
    <div class="w3-container w3-hide-large" style="margin-top: 50px;">
        <div class="w3-row " style="border-radius: 5px;background-color: #726292;">

            <center>
                <p style="font-size: 30px;color:white;font-weight: bold;margin-top: 80px;">สมัครสมาชิกให้องค์กร</p>
            </center>
            <form action="addDataAdminRegis.php" method="POST" enctype="multipart/form-data">
                <p class="textPositionAdRegis">ชื่อองค์กร</p>

                <center><input type="text" name="nameOrgan" id="" class="inputRegis" style="border: none;" placeholder="กรอกชื่อ" required>
                </center>

                <p class="textPositionAdRegis">ชื่อองค์กร</p>
                <center><input type="file" name="fileOrgan" id="" style="border:none;background-color: #ffffff;" class="inputRegis" required>
                </center>

                <p class="textPositionAdRegis">ชื่อผู้ใช้</p>

                <center><input type="text" name="usernameOrgan" id="" class="inputRegis" style="border: none;" placeholder="กรอกชื่อผู้ใช้" required>
                </center>


                <p class="textPositionAdRegis">รหัสผ่าน</p>
                <center><input type="password" name="passwordOrgan" id="" style="border:none;background-color: #ffffff;" class="inputRegis" placeholder="กรอกรหัสผ่าน" required>
                </center>
                <p class="textPositionAdRegis">อีเมล</p>

                <center><input type="email" name="emailOrgan" id="" class="inputRegis" style="border: none;" placeholder="example@email.com" required>
                </center>

                <p class="textPositionAdRegis">หมายเลขโทรศัพท์</p>
                <center><input type="phone" name="phoneOrgan" id="" style="border:none;background-color: #ffffff;" class="inputRegis" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                </center>

                <p class="textAreaPositionAdRegis">ที่อยู่</p>
                <center><textarea style="width: 90%;" rows="5" name="addressOrgan" required></textarea>
                </center>

                <center><button class="btnAdRegis" style="margin-bottom: 50px;">สมัครสมาชิก</button>
                </center>
            </form>
        </div>
    </div>

    <!--Hidden small medium-->

    <!-- end of Hidden small medium-->
    <!--end of content-->

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
</body>

</html>