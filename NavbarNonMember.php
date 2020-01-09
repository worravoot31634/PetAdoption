 <!-- Navbar -->
    <div id="menu" class="w3-top" style="display: block;">
        <div class="w3-bar w3-white w3-card">
            <a class="w3-bar-item w3-button  w3-hide-large w3-right w3-hover-white" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="index.php" style="font-size: 20px;" class="w3-bar-item w3-button w3-white"><img width="100" src="./Images/logo.png"></a>
            <div style="margin-top: 10px;" class="w3-right w3-hide-medium w3-hide-small w3-animate-right">
                <a href ="pet.php"style="font-size: 20px;" class=" w3-bar-item w3-button w3-hide-medium w3-hide-small"><b>สัตว์เลี้ยง</b></a>
                <a href ="donate.php"style="font-size: 20px;" class=" w3-bar-item w3-button w3-hide-medium w3-hide-small"><b>บริจาค</b></a>
                <a href ="activity.php"style="font-size: 20px;" class="w3-bar-item w3-button w3-hide-medium w3-hide-small"><b>กิจกรรม</b></a>
                <a href="login.php" style="font-size: 20px;" class="w3-bar-item w3-button w3-hide-medium w3-hide-small"><b>เข้าสู่ระบบ</b></a>
                <a href="register.php" style="font-size: 20px; " class="w3-bar-item w3-button w3-hide-medium w3-hide-small"><b>สมัครสมาชิก</b></a>
                <a href="#" style="font-size:18px; margin-right: 10px;" onclick="hideNav()" class="w3-black w3-circle w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right" title="Search"><i class="fa fa-search"></i></a>
            </div>
        </div>
        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large ">
            <a href="pet.php" class="w3-bar-item w3-button ">สัตว์เลี้ยง</a>
            <a href="donate.php" class="w3-bar-item w3-button ">บริจาค</a>
            <a href="activity.php" class="w3-bar-item w3-button ">กิจกรรม</a>
            <a href="login.php" class="w3-bar-item w3-button ">เข้าสู่ระบบ</a>
            <a href="register.php" class="w3-bar-item w3-button ">สมัครสมาชิก</a>
        </div>
    </div>




   <!-- Navbar Search Hide-->
   <form name="searchForm" method="post" action="resultSearch.php">
   <div id="searchMenu" class="w3-top" style="display: none;">
    <div class="w3-bar w3-white w3-card">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white" href="javascript:void(0);" onclick="openNav2()"><i class="fa fa-bars"></i></a>
        <a href="index.php" style="font-size: 20px;" class="w3-bar-item w3-button w3-white"><img width="100" src="./Images/logo.png"></a>
        <div style="margin-top: 10px;" class="w3-center w3-hide-small w3-animate-left">
            <input name="keyword" class="simpleSearch" placeholder = "ค้นหา" style="font-size: 20px;" size="100" type="text" />
            <button type="sumbit" style="font-size:18px; " onclick="hideNav()" class=" w3-black w3-button w3-hide-small w3-circle" title="Search"><i  class="fa fa-search"></i></button>
            <a href="#" style="font-size:18px; margin-right: 10px;margin-bottom: 4px;" onclick="showNav()" class="w3-black w3-bar-item w3-button w3-hide-small w3-right w3-circle" title="Search"><i  class="fa fa-close"></i></a>
        </div>
    </div>
    </form>

<!-- Navbar on small screens case Search-->
<div id="navDemo2" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="pet.php" class="w3-bar-item w3-button ">สัตว์เลี้ยง</a>
    <a href="donate.php" class="w3-bar-item w3-button ">บริจาค</a>
    <a href="activity.php" class="w3-bar-item w3-button ">กิจกรรม</a>
    <a href="login.php" class="w3-bar-item w3-button ">เข้าสู่ระบบ</a>
    <a href="register.php" class="w3-bar-item w3-button ">สมัครสมาชิก</a>

  </div>
</div>
