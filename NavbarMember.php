<?php


if (!isset($_SESSION)) {
    session_start();
} ?>
<!-- Navbar -->
<div id="menu" class="w3-top" style="display: block;">
    <div class="w3-white w3-card">
        <a class="w3-bar-item w3-button  w3-hide-large w3-right w3-hover-white" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="homeLogin.php" style="font-size: 20px;" class="w3-bar-item w3-button w3-white"><img width="100" src="./Images/logo.png"></a>
        <div style="margin-top: 10px;" class="w3-right w3-hide-medium w3-hide-small w3-animate-right">
            <a href="addPet.php" style="font-size: 20px;" class=" w3-bar-item w3-button w3-hide-medium w3-hide-small"><b>เขียนโพสต์</b></a>
            <a href="petLogin.php" style="font-size: 20px;" class=" w3-bar-item w3-button w3-hide-medium w3-hide-small"><b>สัตว์เลี้ยง</b></a>
            <a href="donateLogin.php" style="font-size: 20px;" class=" w3-bar-item w3-button w3-hide-medium w3-hide-small"><b>บริจาค</b></a>
            <a href="activityLogin.php" style="font-size: 20px;" class="w3-bar-item w3-button w3-hide-medium w3-hide-small"><b>กิจกรรม</b></a>
            <div class="w3-dropdown-hover" style="font-size: 20px;">
                <button class=" w3-button"><b><?php echo $_SESSION['UserFirstname'] . ' ' . $_SESSION['UserLastname'] ?></b></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="myPostLogin.php" class="w3-bar-item w3-button"><b>โพสต์ของฉัน</b></a>
                    <a href="chatMessageLogin.php" class="w3-bar-item w3-button"><b>ประวัติแชท</b></a>
                    <a href="logout.php" class="w3-bar-item w3-button"><b>ออกจากระบบ</b></a>
                </div>
            </div>
            <a href="#" style="font-size:18px; margin-right: 10px;" onclick="hideNav()" class="w3-black w3-circle w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right" title="Search"><i class="fa fa-search"></i></a>
        </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large ">
        <a href="addPet.php" class="w3-bar-item w3-button ">เขียนโพสต์</a>
        <a href="petLogin.php" class="w3-bar-item w3-button ">สัตว์เลี้ยง</a>
        <a href="donateLogin.php" class="w3-bar-item w3-button ">บริจาค</a>
        <a href="activityLogin.php" class="w3-bar-item w3-button ">กิจกรรม</a>
        <div class="w3-dropdown-hover">
            <button class=" w3-button"><b>Jame Logan</b></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="myPostLogin.php" class="w3-bar-item w3-button"><b>โพสต์ของฉัน</b></a>
                <a href="chatMessageLogin.php" class="w3-bar-item w3-button"><b>ประวัติแชท</b></a>
                <a href="index.php" class="w3-bar-item w3-button"><b>ออกจากระบบ</b></a>
            </div>
        </div>
    </div>
</div>



<!-- Navbar Search Hide-->
<form name="searchForm" method="post" action="resultSearchLogin.php">
    <div id="searchMenu" class="w3-top" style="display: none;">
        <div class="w3-bar w3-white w3-card">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white" href="javascript:void(0);" onclick="openNav2()"><i class="fa fa-bars"></i></a>
            <a href="index.php" style="font-size: 20px;" class="w3-bar-item w3-button w3-white"><img width="100" src="./Images/logo.png"></a>
            <div style="margin-top: 10px;" class="w3-center w3-hide-small w3-animate-left">
                <input name="keyword" class="simpleSearch" placeholder="ค้นหา" style="font-size: 20px;" size="100" type="text" />
                <button type="sumbit" style="font-size:18px; " onclick="hideNav()" class=" w3-black w3-button w3-hide-small w3-circle" title="Search"><i class="fa fa-search"></i></button>
                <a href="#" style="font-size:18px; margin-right: 10px;margin-bottom: 4px;" onclick="showNav()" class="w3-black w3-bar-item w3-button w3-hide-small w3-right w3-circle" title="Search"><i class="fa fa-close"></i></a>
            </div>
        </div>
</form>




<!-- Navbar on small screens case Search-->
<div id="navDemo2" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="addPetLogin.php" class="w3-bar-item w3-button ">เขียนโพสต์</a>
    <a href="petLogin.php" class="w3-bar-item w3-button ">สัตว์เลี้ยง</a>
    <a href="donateLogin.php" class="w3-bar-item w3-button ">บริจาค</a>
    <a href="activityLogin.php" class="w3-bar-item w3-button ">กิจกรรม</a>
    <div class="w3-dropdown-hover">
        <button class=" w3-button"><b>Jame Logan</b></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="myPostLogin.php class=" w3-bar-item w3-button"><b>โพสต์ของฉัน</b></a>
            <a href="chatMessageLogin.php" class="w3-bar-item w3-button"><b>ประวัติแชท</b></a>
            <a href="index.php" class="w3-bar-item w3-button"><b>ออกจากระบบ</b></a>
        </div>
    </div>

</div>

</div>