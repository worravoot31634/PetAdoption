<!DOCTYPE html>
<html>
<title>Pet Adoption</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./CSS/W3S/w3.css">
<link rel="stylesheet" href="./CSS/W3S/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./CSS/Bootstrap/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->

<link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS/CustomCss.css">

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
    include('NavbarMember.html');
    ?>



<!-------------------------------------------------->
<br><br><br>
<table width="90%" align="center">
  <table  align="left">
  <tr>

    <td>
        <img src="./Images/icon/DogIcon1.png" style="width: 60px;height: auto;"/>

    </td>
    <td>
          <p style="font-size: 50px;">สัตว์เลี้ยง</p>

    </td>

  </tr>
  </table><br>

    <tr>
        <td>


            <div class="w3-container">
                <div class="w3-container ">


                    <div style="padding:10px;" class="w3-quarter w3-container">
                        <div class="w3-card-4 test" style="width:100%;max-width:300px;">
                            <img src="./Images/dogPic.png" alt="Avatar" style="width:100%;">
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
                            <img src="./Images/d5.jpg" alt="Avatar" style="width:100%;  height:300px">
                            <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                                <img  width="35px" src="./Images/2.png">
                                <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">Niko</a>
                                <a style="background-color: green;" class="w3-right statusCircle"></a>
                                <!--<p>Architect and engineer</p>-->
                            </div>
                        </div>
                    </div>
                    <div style="padding:10px;" class="w3-quarter w3-containe">
                        <div class="w3-card-4 test" style="width:100%;max-width:300px;">
                            <img src="./Images/d9.jpg" alt="Avatar"style="width:100%;  height:300px">
                            <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                                <img  width="35px" src="./Images/5.png">
                                <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">Ammie</a>

                                <a style="background-color: yellow;" class="w3-right statusCircle"></a><!--<p>Architect and engineer</p>-->
                            </div>
                        </div>
                    </div>

                    <div style="padding:10px;" class="w3-quarter w3-container">
                        <div class="w3-card-4 test" style="width:100%;max-width:300px;">
                            <img src="./Images/d4.jpg" alt="Avatar" style="width:100%;  height:300px">
                            <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                                <img  width="35px" src="./Images/8.png">
                                <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">Andrew</a>
                                <a style="background-color: green;" class="w3-right statusCircle"></a>
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
<table  align="left">
<tr>

  <td>
      <img src="./Images/icon/CatIcon1.png" style="width: 60px;height: auto;"/>

  </td>
  <td>
        <p style="font-size: 50px;">บริจาค</p>

  </td>

</tr>
</table><br>



<div class="w3-container " style="margin: 1%; position:relative">

    <!--row of half content activity-->

    <div class="w3-row" style="width: 100%;margin:auto">
        <!--row  half left side-->

        <div class="w3-half" style="padding: 10px;">
            <a href="activityDetail" class="activity-content-link">
                <div class="w3-half colorActivity" style="height: 220px;">
                    <img src="./Images/new1.jpg" alt="" srcset="" width="100%" height="auto" style="height: 220px;">
                </div> <!-- end of img -->


                <div class="w3-half colorActivity" style="height: 220px;">

                    <!--img and text side by side-->
                    <div style="margin-top: 5px;float: left;">
                        <div style="display:inline-block">
                            <img src="./Images/2.png" alt="" srcset="" width="100%"
                                style="border-radius: 100%;width: 20px;height: 20px;float: left;margin-right: 5px;margin-left:5px;">
                        </div>
                        <div style="display:inline-block">
                            <h6 class="w3-left" style="font-size: 14px;">Jame Logan</h6>
                        </div>
                    </div><!-- end of img and text side by side-->

                    <p style="font-size: 1vw;clear: both;">It is a long established fact that a reader will be
                        distracted by the
                        readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                        normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look
                        like
                        readable.
                    </p>
                    <div>
                        <button class="btnEdit" style="margin: 5px;">รายละเอียดการบริจาค</button>
                        <button class="btnEdit" style="width: 20%;">บริจาค</button>
                    </div>
            </a></div><!-- end of text -->
    </div> <!-- end of row  half left side-->

    <!--row  half right side-->

    <div class="w3-half" style="padding: 10px;">
        <a href="activityDetail" class="activity-content-link">
            <div class="w3-half colorActivity" style="height: 220px;">
                <img src="./Images/new5.jpg" alt="" srcset="" width="100%" height="auto" style="height: 220px;">
            </div> <!-- end of img -->


            <div class="w3-half colorActivity" style="height: 220px;">

                <!--img and text side by side-->
                <div style="margin-top: 5px;float: left;">
                    <div style="display:inline-block">
                        <img src="./Images/1.png" alt="" srcset="" width="100%"
                            style="border-radius: 100%;width: 20px;height: 20px;float: left;margin-right: 5px;margin-left:5px;">
                    </div>
                    <div style="display:inline-block">
                        <h6 class="w3-left" style="font-size: 14px;">Jame Logan</h6>
                    </div>
                </div><!-- end of img and text side by side-->

                <p style="font-size: 1vw;clear: both;">It is a long established fact that a reader will be
                    distracted by the
                    readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                    normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look
                    like
                    readable.
                </p>
                <div>
                    <button class="btnEdit" style="margin: 5px;">รายละเอียดการบริจาค</button>
                    <button class="btnEdit" style="width: 20%;">บริจาค</button>
                </div>
        </a></div><!-- end of text -->
</div> <!-- end of row  half right side-->

</div>
<!--end of row of half content activity-->
</div>



<br>
<table  align="left">
<tr>

  <td>
      <img src="./Images/icon/CatIcon2.png" style="width: 60px;height: auto;"/>

  </td>
  <td>
        <p style="font-size: 50px;">กิจกรรม</p>

  </td>

</tr>
</table><br>

<div class="w3-container " style="margin: 1%; position:relative">

    <!--row of half content activity-->

    <div class="w3-row" style="width: 100%;margin:auto">
        <!--row  half left side-->

        <div class="w3-half" style="padding: 10px;">
            <a href="activityDetail" class="activity-content-link">
                <div class="w3-half colorActivity" style="height: 220px;">
                    <img src="./Images/new3.jpg" alt="" srcset="" width="100%" height="auto" style="height: 220px;">
                </div> <!-- end of img -->


                <div class="w3-half colorActivity" style="height: 220px;">

                    <!--img and text side by side-->
                    <div style="margin-top: 5px;float: left;">
                        <div style="display:inline-block">
                            <img src="./Images/2.png" alt="" srcset="" width="100%"
                                style="border-radius: 100%;width: 20px;height: 20px;float: left;margin-right: 5px;margin-left:5px;">
                        </div>
                        <div style="display:inline-block">
                            <h6 class="w3-left" style="font-size: 14px;">Jame Logan</h6>
                        </div>
                    </div><!-- end of img and text side by side-->

                    <p style="font-size: 1vw;clear: both;">It is a long established fact that a reader will be
                        distracted by the
                        readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                        normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look
                        like
                        readable.
                    </p>
                    <div>
                          <button class="btnEdit" style="margin: 5px;">รายละเอียดกิจกรรม</button>
                    </div>
            </a></div><!-- end of text -->
    </div> <!-- end of row  half left side-->

    <!--row  half right side-->

    <div class="w3-half" style="padding: 10px;">
        <a href="activityDetail" class="activity-content-link">
            <div class="w3-half colorActivity" style="height: 220px;">
                <img src="./Images/new4.jpg" alt="" srcset="" width="100%" height="auto" style="height: 220px;">
            </div> <!-- end of img -->


            <div class="w3-half colorActivity" style="height: 220px;">

                <!--img and text side by side-->
                <div style="margin-top: 5px;float: left;">
                    <div style="display:inline-block">
                        <img src="./Images/3.png" alt="" srcset="" width="100%"
                            style="border-radius: 100%;width: 20px;height: 20px;float: left;margin-right: 5px;margin-left:5px;">
                    </div>
                    <div style="display:inline-block">
                        <h6 class="w3-left" style="font-size: 14px;">Jame Logan</h6>
                    </div>
                </div><!-- end of img and text side by side-->

                <p style="font-size: 1vw;clear: both;">It is a long established fact that a reader will be
                    distracted by the
                    readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                    normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look
                    like
                    readable.
                </p>
                <div>
                      <button class="btnEdit" style="margin: 5px;">รายละเอียดกิจกรรม</button>
                </div>
        </a></div><!-- end of text -->
</div> <!-- end of row  half right side-->

</div>
<!--end of row of half content activity-->
</div>

</div><br>
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
</body>
