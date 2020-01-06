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

<link rel="stylesheet" href="/lib/bootstrap.min.css">
  <script src="/lib/jquery-1.12.2.min.js"></script>
  <script src="/lib/bootstrap.min.js"></script>
  <?php
        include("connectDB.php");
  ?>
<style>
.statusCircle {
  height: 30px;
  width: 30px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
}
</style>
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
</style>

<body id="myPage">



  
<?php
    include('NavbarNonMember.html');
    ?>




    <!--Fix 80 percent Screen-->
    <br>
    <table width="80%" align="center">


        <div>
            <center>
                <p style="font-weight: bold; margin-top:70px;font-size: 30px;">
                    <img width="50" src="./Images/icon/catIcon1.png">&nbsp;บริจาค
                </p>
            </center>
        </div>
        <br>


        <tr>
            <td>


                        <div style="width: 100%; ">
                        <table align=center style="width: 70%;">
                            <tr style="width: 100%;" >
                                <td style="width: 50%;">
                                    <input class="advanceSearch" placeholder="ค้นหา" style="font-size: 20px;" size="100" type="text" />
                                </td>
                                <td >
                                    <a style="font-weight: bold; font-size: 20px;">จังหวัด&nbsp;&nbsp;</a>
                                </td>
                                <td style="width: 50%;" >
                                    <div style="font-size: 20px;" class="w3-half" >
                                                        <select class="w3-border w3-rest  w3-select" name="option" >
                                                            <option style="font-size: 20px;" value="0">all</option>
                                                            <option style="font-size: 20px;" value="1">นครราชสีมา</option>
                                                            <option style="font-size: 20px;" value="2">บุรีรัมย์</option>
                                                        </select>
                                                        </div>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="#" style="font-size:18px; background-color: #726292; color: white;"
                                                        class="w3-button w3-circle" title="Search"><i class="fa fa-search"></i></a>

                                </td>



                            </tr>
                        </table>
                        </div>


  


<br>
<div class="w3-container">
        
        <div class="w3-container " style="margin: 1%; position:relative">
<!---------------------------------------------------------------------->
            <!--row of half content activity-->
            <?php
                $sql = "SELECT donateID,details,donateRequired,donate.Image as DImage,organization.Image as OImage,donate.organizationID , organization.firstname as fname,organization.lastname as lname
                FROM donate
                join organization 
                on donate.organizationID = organization.organizationID";
                
                $rs = $conn->query($sql);
                $i=0;
                while ($row = $rs->fetch_assoc()) {
                    $sql2 = "SELECT SUM(donateMoney) as sumDonate
                        FROM donate
                        join organization 
                        on donate.organizationID = organization.organizationID
                        join donateDetails 
                        on donateDetails.donateID = donate.donateID
                        WHERE donate.donateID =".$row['donateID']."";

                        $rs2 = $conn->query($sql2);
                        $row2 = $rs2;
                        $row2 = $rs2->fetch_assoc();
                        if($row2['sumDonate'] < $row['donateRequired']){
                            $presen = $row2['sumDonate']/($row['donateRequired']/100);
                        }else{
                            $presen = 100;
                        }
                        
                    if($i%2==0){
                        echo "<div class='w3-row' style='width: 100%;margin:auto'>";
                        echo "<!--row  half right side-->
                                <div class='w3-half' style='padding: 10px;'>
                                    <div class='w3-half colorActivity' style='height: 220px;'>
                                        <img src='./Images/".$row['DImage']."' alt='' srcset='' width='100%'' height='auto' style='height: 220px;'>
                                    </div> <!-- end of img -->

                                    <div class='w3-half colorActivity' style='height: 220px;'>

                                        <!--img and text side by side-->
                                        <div style='margin-top: 5px;float: left;''>
                                            <div style='display:inline-block'>
                                                <img src='./Images/".$row['OImage']."' alt='' srcset='' width='100%'
                                                    style='border-radius: 100%;width: 20px;height: 20px;float: left;margin-right: 5px;margin-left:5px;'>
                                            </div>
                                            <div style='display:inline-block'>
                                                <h6 class='w3-left' style='font-size: 14px;'>".$row['fname']." ".$row['lname']."</h6>
                                            </div>
                                        </div><!-- end of img and text side by side-->

                                        <p style='font-size: 1vw;clear: both;'>".$row['details']."

                                        </p>
                                        <table style='width: 100%;'>
                                            <tr>
                                                <td  style='width: 60%;'>
                                            <div class='container' >
                                                <div class='progress' style='height: 0.6cm;'>
                                                    <div class='progress-bar progress-bar-info progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:".$presen."% ;''>
                                                    ".$row2['sumDonate']." บาท
                                                    </div>
                                                </div>
                                            </div>
                                            </td>
                                            <td style='width: 40%;'>
                                                <a href='login.php'><button class='btnEdit' style='width:80%'>บริจาค</button></a>
                                            </td>
                                            </tr>
                                        </table>
                                </a></div><!-- end of text -->
                        </div> <!-- end of row  half right side-->";


                    }else{
                        echo " <!--row  half right side-->

                        <div class='w3-half' style='padding: 10px;'>
                                <div class='w3-half colorActivity' style='height: 220px;'>
                                    <img src='./Images/".$row['DImage']."' srcset='' width='100%' height='auto' style='height: 220px;'>
                                </div> <!-- end of img -->
            
            
                                <div class='w3-half colorActivity' style='height: 220px;'>
            
                                <!--img and text side by side-->
                                <div style='margin-top: 5px;float: left;''>
                                    <div style='display:inline-block'>
                                        <img src='./Images/".$row['OImage']."' alt='' srcset='' width='100%'
                                            style='border-radius: 100%;width: 20px;height: 20px;float: left;margin-right: 5px;margin-left:5px;'>
                                    </div>
                                        <div style='display:inline-block'>
                                            <h6 class='w3-left' style='font-size: 14px;'>".$row['fname']." ".$row['lname']."</h6>
                                        </div>
                                    </div><!-- end of img and text side by side-->
            
                                    <p style='font-size: 1vw;clear: both;'>".$row['details']."
            
                                    </p>
                                    <table style='width: 100%;''>
                                        <tr>
                                            <td  style='width: 60%;'>
                                        <div class='container' >
                                            <div class='progress' style='height: 0.6cm;'>
                                                <div class='progress-bar progress-bar-info progress-bar-striped active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='".$presen."% ;'>
                                                  ".$row2['sumDonate']." บาท
                                                </div>
                                              </div>
                                          </div>
                                          </td>
                                          <td style='width: 40%;'>
                                          <a href='login.php'><button class='btnEdit' style='width:80%'>บริจาค</button></a>
                                          </td>
                                        </tr>
                                    </table>
                            </a></div><!-- end of text -->
                    </div> <!-- end of row  half right side-->";
                   
                    }
                     $i=$i+1;
                }
            ?>

        </div>
         <!--end of row of half content activity-->





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
    .w3-564b6c{
    background-color: #564b6c;
    }
    .w3-373143{
    background-color: #373143;
    }
    </style>
    <!-- Footer -->
    <footer class="w3-container w3-padding-32  w3-center "style="background-image: url('./Images/footer.png');" >
        <table align=center>
            <tr>
                <td style="height: 3cm;">

                </td>
            </tr>

            <tr style="width:100%;">
              <td>
                <p style="font-size: 30px;color: #E2E0E0;">มาร่วมเป็นส่วนหนึ่งกับเรา&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
