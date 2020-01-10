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
<script src="js/script.js"></script>
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
</style>


<body id="myPage">


    <?php
    include('NavbarAdmin.php');
    ?>
    <!--content-->
    <div class="w3-container" style="margin-top: 80px;left: 2%;position:relative">
        <div style="display:inline-block">
            <p style="font-size: 28px;font-weight: bold;">การบริจาค</p>
        </div>
    </div>


    <form action="" method="POST">
        <div class="w3-container">
            <div class="w3-row" id="tableCheckSys">
                <table class="w3-table w3-centered w3-bordered w3-border" style="width: 80%;margin: auto;">
                    <tr class="tableHeader">
                        <th>โปรไฟล์</th>
                        <th>ชื่อผู้ใช้</th>
                        <th>ประเภทผู้ใช้งาน</th>
                        <th>ระบบที่ใช้</th>
                        <th>สถานะ</th>
                        <th>ปิดการใช้งานระบบ</th>
                    </tr>

                    <?php

                    include "connectDB.php";

                    $sql = "SELECT ac.accountID,organ.Image,organ.firstname,ac.roles,ac.statusLogin , ac.deviceInfo FROM  account as ac  JOIN organization as organ on ac.accountID = organ.accountID";

                    $res = $conn->query($sql);

                    if ($res->num_rows > 0) {
                        while ($row = $res->fetch_assoc()) {

                            echo '<tr>';
                            echo '<td><img src="./Images/' . $row["Image"] . '" alt="" srcset="" width="40px" height="40px" style="border-radius: 50%;"></td>';
                            echo '<td>' . $row["firstname"] . '</td>';
                            echo '<td>' . $row["roles"] . '</td>';
                            if ($row["statusLogin"] == 1) {
                                echo '<td>' . $row["deviceInfo"] . '</td>';
                                echo '<td>Online</td>';
                                echo '<td><a  class="btnCloseStatus" style="cursor:pointer;padding:3px;color:#FFFFFF;" onclick="CheckSys(' . $row["accountID"] . ')">ปิดการใช้งานระบบ</a></td>';
                                echo  '</tr>';
                            } else {
                                echo '<td>' . $row["deviceInfo"] . '</td>';
                                echo '<td>Offline</td>';
                                echo '<td><a  class="btnClosedStatus" style="cursor:pointer;padding:3px;color:#FFFFFF;" disabled">ออกจากระบบแล้ว</a></td>';
                                echo  '</tr>';
                            }
                        }
                    }


                    $sqlMem = "SELECT ac.accountID,mem.Image,mem.firstname,ac.roles,ac.statusLogin ,ac.deviceInfo FROM  account as ac  JOIN member as mem on ac.accountID = mem.accountID";
                    $resMem = $conn->query($sqlMem);

                    if ($resMem->num_rows > 0) {
                        while ($rowMem = $resMem->fetch_assoc()) {

                            echo '<tr>';
                            echo '<td><img src="./Images/' . $rowMem["Image"] . '" alt="" srcset="" width="40px" height="40px" style="border-radius: 50%;"></td>';
                            echo '<td>' . $rowMem["firstname"] . '</td>';
                            echo '<td>' . $rowMem["roles"] . '</td>';
                            if ($rowMem["statusLogin"] == 1) {
                                echo '<td>' . $rowMem["deviceInfo"] . '</td>';
                                echo '<td>Online</td>';
                                echo '<td><a  class="btnCloseStatus" style="cursor:pointer;padding:3px;color:#FFFFFF;" onclick="CheckSys(' . $rowMem["accountID"] . ')">ปิดการใช้งานระบบ</a></td>';
                                echo  '</tr>';
                            } else {
                                echo '<td>' . $rowMem["deviceInfo"] . '</td>';
                                echo '<td>Offline</td>';
                                echo '<td><a  class="btnClosedStatus" style="cursor:pointer;padding:3px;color:#FFFFFF;" disabled">ออกจากระบบแล้ว</a></td>';
                                echo  '</tr>';
                            }
                        }
                    }
                    ?>
                </table>

            </div>
        </div>
    </form>
    <!--end of content-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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