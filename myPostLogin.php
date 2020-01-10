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

    .btnDeletePostPet {
        width: 20%;
        border-radius: 3px;
        border: none;
        opacity: 0.9;
        background-color: red;
        color: #ffffff;
    }

    .btnDeletePostPet:hover {
        background-color: #7b0000;
        opacity: 0.9;
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
</style>


<body id="myPage">



    <?php
    include('NavbarMember.php');
    ?>


    <!-- Navbar Search Hide-->
    <div id="searchMenu" class="w3-top" style="display: none;">
        <div class="w3-bar w3-white w3-card">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white" href="javascript:void(0);" onclick="openNav2()"><i class="fa fa-bars"></i></a>
            <a href="#" style="font-size: 20px;" class="w3-bar-item w3-button w3-white"><img width="50" src="./Images/icon/Logo.png"></a>
            <div style="margin-top: 10px;" class="w3-center w3-hide-small w3-animate-left">
                <input class="simpleSearch" placeholder="ค้นหา" style="font-size: 20px;" size="100" type="text" />
                <a href="#" style="font-size:18px; " onclick="hideNav()" class=" w3-black w3-button w3-hide-small w3-circle" title="Search"><i class="fa fa-search"></i></a>
                <a href="#" style="font-size:18px; margin-right: 10px;margin-bottom: 4px;" onclick="showNav()" class="w3-black w3-bar-item w3-button w3-hide-small w3-right w3-circle" title="Search"><i class="fa fa-close"></i></a>
            </div>
        </div>



        <!-- Navbar on small screens case Search-->
        <div id="navDemo2" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
            <a href="#team " class="w3-bar-item w3-button ">เขียนกิจกรรม</a>
            <a href="#team " class="w3-bar-item w3-button ">ขอบริจาค</a>
            <a href="#work " class="w3-bar-item w3-button ">เขียนโพสต์</a>
            <a href="#team " class="w3-bar-item w3-button ">สัตว์เลี้ยง</a>
            <a href="#team " class="w3-bar-item w3-button ">บริจาค</a>
            <a href="#work " class="w3-bar-item w3-button ">กิจกรรม</a>
            <div class="w3-dropdown-hover">
                <button class=" w3-button"><b>Jame Logan</b></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="#" class="w3-bar-item w3-button"><b>โพสต์ของฉัน</b></a>
                    <a href="#" class="w3-bar-item w3-button"><b>ประวัติแชท</b></a>
                    <a href="#" class="w3-bar-item w3-button"><b>ออกจากระบบ</b></a>
                </div>
            </div>

        </div>

    </div>

    <!--content-->
    <div class="w3-container" style="margin-top: 80px;left: 2%;position:relative">
        <div style="display:inline-block">
            <p style="font-size: 28px;font-weight: bold;">โพสต์ของฉัน</p>
        </div>
        <div style="display:inline-block">
            <img src="./Images/icon/dogIcon2.png" alt="" srcset="" width="25%">
        </div>
    </div>

    <div class="w3-container" style="width:80%;margin-left: auto;
  margin-right: auto;">
        <div class="w3-container w3-border">
        <?php
        include 'connectDB.php';
        $sql = "SELECT * FROM account join pet where accountID=posterID and username='".$_SESSION['username']."'";
        $rs = $conn->query($sql);
        if($rs->num_rows != 0){//Check that it's have in DB or not
            while($row = $rs->fetch_assoc()) {
        ?>
            <div style="padding:10px;" class="w3-quarter w3-container">
                <div class="w3-card-4 test" style="width:100%;max-width:300px;">
                    <img src="./Images/<?php echo $row["Image"]; ?>" alt="Avatar" width="100%" height="300px">
                    <div id="colorStatus" class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                        <a href="editAddPetLogin.php?id=<?php echo $row["petID"]?>">
                        <button class="btnEdit">แก้ไข</button></a>

                        <button onclick = "deletePostPet(<?php echo $row['petID']?>)" id="btnDeletePost" class="btnEdit btnDeletePostPet">ลบ</button>

                        <a style="cursor:pointer; background-color: <?php if($row["petStatus"]==0) {
                            echo "green";
                        }elseif($row["petStatus"]==1){
                            echo "yellow";
                        }else{
                            echo "red";
                        }
                        ?>;" id="circle" class="w3-right statusCircle"  onclick="updateStatusPet(<?php echo $row['petID'] ?>)"></a>
                        <!--<p>Architect and engineer</p>-->
                    </div>
                </div>
            </div>
            <?php 
            }
        }
            ?>

        
    </div>
    </div>

    <!--end of content-->
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

        <a class="w3-button w3-8c71c0 w3-round-xxlarge" href="javascript:void(0) " title="Facebook "><i class="fa fa-facebook "></i></a>
        <a class="w3-button w3-8c71c0 w3-round-xxlarge" href="javascript:void(0) " title="Twitter "><i class="fa fa-twitter "></i></a>
        <a class="w3-button w3-8c71c0 w3-round-xxlarge" href="javascript:void(0) " title="Google + "><i class="fa fa-google-plus "></i></a>
        <p></p>

        <div style="position:relative;bottom:100px;z-index:1; " class="w3-tooltip w3-right ">
            <span class="w3-text w3-padding  w3-8c71c0 w3-hide-small  " style="color: #E2E0E0;">Go To Top</span>
            <a class="w3-button w3-theme " href="#myPage "><span class="w3-xlarge ">
                    <i class="fa fa-chevron-circle-up"></i></span></a>
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


<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>
    function hideNav() {
        document.getElementById("menu").style.display = "none";
        document.getElementById("searchMenu").style.display = "block";

    }


    function showNav() {
        document.getElementById("menu").style.display = "block";
        document.getElementById("searchMenu").style.display = "none";


    }


function updateStatusPet(id){

    var userdata = {'petID':id};
    console.log(userdata);

    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "updateStatusPet.php",
            data: userdata,
            success: function(data){
                    console.log(data);

                    if(data == true){ 
                        console.log('UPDATED');

                       
                        location.reload();
                        
                    }


            }
            
        });
    });


}




function deletePostPet(id){

    var userdata = {'petID':id};
    console.log(userdata);


    if (confirm("คุณต้องการลบใช่หรือไม่ ?")) {
        
        $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "deletePostPet.php",
            data: userdata,
            success: function(data){
                    console.log(data);

                    if(data == true){ 
                        console.log('DELETED');

                       
                        location.reload();
                        
                    }


            }
            
        });
    });
    
    }else{

    }



    
}
    





</script>