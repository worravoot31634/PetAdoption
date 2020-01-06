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
    include('NavbarNonMember.html');
    ?>


    <!--Fix 80 percent Screen-->
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
                        <a href="#" style="font-size:18px; background-color: #726292; color: white;" class="w3-right w3-button w3-circle" title="Search"><i class="fa fa-search"></i></a>
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
                <form name="option1" action="" method="post">
                    <div class="w3-row">
                        <div class="w3-container w3-quarter" style="padding-bottom: 5px;">
                            <div class="w3-half" style="padding-right: 2px;width: 50%;">
                                <a style="font-weight: bold; font-size: 20px;">ชนิดสัตว์เลี้ยง</a>
                            </div>
                            <div style="font-size: 20px;" class="w3-half" style="width: 50%;">
                                <select class="w3-border w3-rest  w3-select" name="option1" id="option1">
                                    <option style="font-size: 20px;" value="0">ทั้งหมด</option>
                                    <option style="font-size: 20px;" value="1">สุนัข</option>
                                    <option style="font-size: 20px;" value="2">แมว</option>
                                </select>
                                <noscript><input type="submit" value="Submit"></noscript>
                            </div>
                            </p>
                        </div>
                </form>
                
                <div class="w3-container w3-quarter" style="padding-bottom: 5px;">
                    <div class="w3-half" style="padding: 2px;width: 50%;">
                        <a style="font-weight: bold; font-size: 20px;">สายพันธ์</a>
                    </div>
                    <div style="font-size: 20px;" class="w3-half" style="width: 50%;">
                        <select class="w3-border w3-rest  w3-select" name="option">
                            <option style="font-size: 20px;" value="0">ทั้งหมด</option>
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
                            <option value="อื่นๆ">อื่นๆ</option>
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
                            <option style="font-size: 20px;" value="0">ทั้งหมด</option>
                            <option style="font-size: 20px;" value="1">ทางบ้าน</option>
                            <option style="font-size: 20px;" value="2">มูลนิธิ</option>
                        </select>
                    </div>


                    </p>
                </div>
                </div>
                <br>
                <div class="w3-container">

                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "petadoption";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT petID, petStatus, pet.image,firstname,member.image as mimage FROM pet join member on posterID=memberID";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div style="padding:10px;" class="w3-quarter w3-container">
                                <div class="w3-card-4 test" style="width:100%;max-width:300px;">
                                    <?php
                                            ?>
                                    <a href="petDetail"><img src="./Images/<?php echo $row["image"] ?>" alt="Avatar" style="width:100%;"></a>
                                    <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                                        <img width="35px" src="./Images/<?php echo $row["mimage"] ?>">
                                        <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;"><?php echo $row["firstname"] ?></a>
                                        <a style="background-color: 
                                    <?php if ($row["petStatus"] == 0) {
                                                echo "green";
                                            } elseif ($row["petStatus"] == 1) {
                                                echo "yellow";
                                            }
                                            ?>
                                    ;" class="w3-right statusCircle"></a>
                                        <!--<p>Architect and engineer</p>-->
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "0 results";
                    }

                    ?>
            </td>
        </tr>
        <?php
        $conn->close();
        ?>


    </table>
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
        <p><button class="w3-button w3-8c71c0 w3-round-xxlarge" style="font-size: 20px;">สมัครสมาชิก</button></p>
        <a class="w3-button w3-8c71c0 w3-round-xxlarge" href="javascript:void(0) " title="Facebook "><i class="fa fa-facebook "></i></a>
        <a class="w3-button w3-8c71c0 w3-round-xxlarge" href="javascript:void(0) " title="Twitter "><i class="fa fa-twitter "></i></a>
        <a class="w3-button w3-8c71c0 w3-round-xxlarge" href="javascript:void(0) " title="Google + "><i class="fa fa-google-plus "></i></a>
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