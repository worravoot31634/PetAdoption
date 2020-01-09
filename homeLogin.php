<?php
// Start the session
session_start();
if(!$_SESSION['loginStatus']){
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
-->

<link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS/CustomCss.css">



<body id="myPage">

<?php
    include('NavbarMember.php');
    ?>


  <!-- Image Header -->
  <div style="margin-top:35px;" class="w3-display-container w3-animate-opacity ">


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img style="width:100%;min-height:350px;max-height:600px; " class="d-block w-100"
            src="./Images/headerIndex.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img style="width:100%;min-height:350px;max-height:600px; " class="d-block w-100"
            src="./Images/headerIndex2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img style="width:100%;min-height:350px;max-height:600px; " class="d-block w-100"
            src="./Images/headerIndex3.png" alt="Third slide">
        </div>
      </div>

    </div>



    <!--<img src="./Images/headerIndex.png" alt="boat " style="width:100%;min-height:350px;max-height:600px; ">-->
    <div class="w3-container w3-display-bottomleft w3-margin-bottom ">
      <a href="donateLogin"><button class="w3-button w3-xlarge w3-theme w3-hover-teal ">บริจาคให้น้อน</button></a>
    </div>
  </div>


  <!-- Team Container -->


  <table align="center">
    <tr>

      <td>
        <img src="./Images/icon/dogIcon1.png" style="width: 60px;height: auto;" />

      </td>
      <td>
        <p style="font-size: 50px;">ข่าวสาร </p>

      </td>

    </tr>
  </table><br>

  <div style="width:100%;" class="w3-center">
    <div class="w3-container ">
      <div class="w3-threequarter  w3-row ">
        <div class="w3-card-4 w3-" style="margin-right:2%; ">
          <img img src="./Images/new1.jpg" alt="Alps" width="80%">
          <div class="w3-container w3-center">
            <p style="font-size:1vw;">The Italian / Austrian Alps</p>
          </div>
        </div>
      </div>

      <div class="w3-quarter w3-row ">
        <div class="w3-card-4" style="margin-right:2%; ">
          <img img src="./Images/new2.jpg" alt="Alps" width="100%" height="100%">
          <div class="w3-container w3-center">
            <p style="font-size:1vw;">The Italian / Austrian AlpsThe Italian / Austrian AlpsThe Italian / Austrian Alps
            </p>
          </div>
        </div>
      </div>

      <div class="w3-quarter  w3-row">
        <div class="w3-card-4" style="margin-right:2%; ">
          <img img src="./Images/new3.jpg" alt="Alps" width="100%" height="100%">
          <div class="w3-container w3-center">
            <p style="font-size:1vw;">The Italian / Austrian AlpsThe Italian / Austrian AlpsThe Italian / Austrian Alps
            </p>
          </div>
        </div>
      </div>
    </div>
  </div><br>







  <!-------------------------------------review slide-------------------------------------------------------->

  <style>
    .mySlides {
      display: none
    }

    .w3-left,
    .w3-right,
    .w3-badge {
      cursor: pointer
    }

    .w3-badge {
      height: 13px;
      width: 13px;
      padding: 0
    }
  </style>

  <br>
  <div class="w3-center">

    <table align="center">
      <tr>

        <td>
          <img src="./Images/icon/catIcon1.png" style="width: 60px;height: auto;" />

        </td>
        <td>
          <p style="font-size: 50px;">ผู้รับเลี้ยง </p>

        </td>

      </tr>
    </table><br>

  </div>

  <!--Page 1 --->
  <center>
    <div class="w3-container w3-center   w3-display-container" style="width:100%;">

      <div class="mySlides">

        <div class="w3-row w3-half w3-red">
          <img src="./Images/new4.jpg" style="width:100%">
        </div>



        <div class="w3-row w3-half ">
          <div class="w3-container" style="width:100%;">

            <table width="40%">
              <tr>
                <td>
                  <img src="./Images/source/1.png" style="width: 40px;height: auto;" />

                </td>
                <td>
                  <h6 style="text-align:left;">Ammie&nbsp;Alyssa</h6>
                </td>
              </tr>
            </table>
          </div>


          <center>
            <p style="margin:2%;">
              page 1 It is a long established fact that a reader will be distracted by the readable content of a page
              when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
              distribution of letters, as opposed to using 'Content here, content here', making it look like readable
              English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
              text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
              have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks
              reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
              non-characteristic words etc.
            </P>

        </diV><br>
      </div>


      <!--Page 2 --->
      <div class="mySlides">
        <div class="w3-row w3-half w3-red">
          <img src="./Images/new5.jpg" style="width:100%">
        </div>


        <div class="w3-row w3-half ">
          <div class="w3-container" style="width:100%;">

            <table width="40%">
              <tr>
                <td>
                  <img src="./Images/source/2.png" style="width: 40px;height: auto;" />


                </td>
                <td>
                  <h6 style="text-align:left;">Jame&nbsp;Logan</h6>
                </td>
              </tr>
            </table>
          </div>


          <center>
            <p style="margin:2%;">
              page 2 It is a long established fact that a reader will be distracted by the readable content of a page
              when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
              distribution of letters, as opposed to using 'Content here, content here', making it look like readable
              English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
              text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
              have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks
              reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
              non-characteristic words etc.
            </P>

        </diV><br>
      </div>



      <!--Page 3 --->
      <div class="mySlides">
        <div class="w3-row w3-half w3-red">
          <img src="./Images/new1.jpg" style="width:100%">
        </div>


        <div class="w3-row w3-half ">
          <div class="w3-container" style="width:100%;">

            <table width="40%">
              <tr>
                <td>
                  <img src="./Images/source/3.png" style="width: 40px;height: auto;" />


                </td>
                <td>
                  <h6 style="text-align:left;">Andrew&nbsp;Jacob</h6>
                </td>
              </tr>
            </table>
          </div>


          <center>
            <p style="margin:2%;">
              page 3 It is a long established fact that a reader will be distracted by the readable content of a page
              when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
              distribution of letters, as opposed to using 'Content here, content here', making it look like readable
              English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
              text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
              have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks
              reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
              non-characteristic words etc.
            </P>

        </diV><br>
      </div>



      <!--Page 4 --->
      <div class="mySlides">
        <div class="w3-row w3-half w3-red">
          <img src="./Images/new6.jpg" style="width:100%">
        </div>


        <div class="w3-row w3-half ">
          <div class="w3-container" style="width:100%;">

            <table width="40%">
              <tr>
                <td>
                  <img src="./Images/source/4.png" style="width: 40px;height: auto;" />


                </td>
                <td>
                  <h6 style="text-align:left;">Niko&nbsp;Vinci</h6>
                </td>
              </tr>
            </table>
          </div>


          <center>
            <p style="margin:2%;">
              page 4 It is a long established fact that a reader will be distracted by the readable content of a page
              when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
              distribution of letters, as opposed to using 'Content here, content here', making it look like readable
              English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
              text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
              have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks
              reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
              non-characteristic words etc.
            </P>

        </diV><br>
      </div>



      <!--Page 5 --->
      <div class="mySlides">
        <div class="w3-row w3-half w3-red">
          <img src="./Images/new7.jpg" style="width:100%">
        </div>


        <div class="w3-row w3-half ">
          <div class="w3-container" style="width:100%;">

            <table width="40%">
              <tr>
                <td>
                  <img src="./Images/source/5.png" style="width: 40px;height: auto;" />


                </td>
                <td>
                  <h6 style="text-align:left;">Alice&nbsp;Ava</h6>
                </td>
              </tr>
            </table>
          </div>


          <center>
            <p style="margin:2%;">
              page 5 It is a long established fact that a reader will be distracted by the readable content of a page
              when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
              distribution of letters, as opposed to using 'Content here, content here', making it look like readable
              English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
              text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
              have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks
              reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
              non-characteristic words etc.
            </P>

        </diV><br>
      </div>


      <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
      </div>

    </div>

    <script>
      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function currentDiv(n) {
        showDivs(slideIndex = n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = x.length }
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-white";
      }
    </script>







    <!--------------------------------------gallery ---------------------------------->


    <style>
      .mySlides1 {
        display: none
      }

      .w3-left,
      .w3-right,
      .w3-badge {
        cursor: pointer
      }

      .w3-badge {
        height: 13px;
        width: 13px;
        padding: 0
      }
    </style>


    <br><br>
    <div class="w3-center">

      <table align="center">
        <tr>

          <td>
            <img src="./Images/icon/catIcon2.png" style="width: 60px;height: auto;" />

          </td>
          <td>
            <p style="font-size: 50px;">ภาพกิจกรรม </p>

          </td>

        </tr>
      </table><br>

    </div>

    <center>
      <div class="w3-container w3-center  w3-display-container" style="width:100%;">

        <div class="mySlides1" style="width:100%">

          <div class="w3-row w3-third ">
            <img src="./Images/c1.jpg" style="width:100%;  height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d1.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/c2.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d2.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/c3.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d3.jpg" style="width:100%; height:300px">
          </div>
        </div>


        <!--------------------------->
        <div class="mySlides1" style="width:100%">

          <div class="w3-row w3-third ">
            <img src="./Images/c4.jpg" style="width:100%;  height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d4.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/c5.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d5.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/c6.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d6.jpg" style="width:100%; height:300px">
          </div>
        </div>

        <!--------------------------->
        <div class="mySlides1" style="width:100%">

          <div class="w3-row w3-third ">
            <img src="./Images/c7.jpg" style="width:100%;  height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d7.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/c8.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d8.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/c9.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d9.jpg" style="width:100%; height:300px">
          </div>
        </div>

        <!--------------------------->
        <div class="mySlides1" style="width:100%">

          <div class="w3-row w3-third ">
            <img src="./Images/c10.jpg" style="width:100%;  height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d10.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/c11.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d11.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/c12.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d12.jpg" style="width:100%; height:300px">
          </div>
        </div>

        <!--------------------------->
        <div class="mySlides1" style="width:100%">

          <div class="w3-row w3-third ">
            <img src="./Images/c13.jpg" style="width:100%;  height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d13.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/c14.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d14.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/c15.jpg" style="width:100%; height:300px">
          </div>

          <div class="w3-row w3-third ">
            <img src="./Images/d15.jpg" style="width:100%; height:300px">
          </div>
        </div>
        <!-----END photo------>
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle"
          style="width:100%">
          <span class="w3-badge demo1 w3-border w3-transparent w3-hover-white" onclick="currentDiv1(1)"></span>
          <span class="w3-badge demo1 w3-border w3-transparent w3-hover-white" onclick="currentDiv1(2)"></span>
          <span class="w3-badge demo1 w3-border w3-transparent w3-hover-white" onclick="currentDiv1(3)"></span>
          <span class="w3-badge demo1 w3-border w3-transparent w3-hover-white" onclick="currentDiv1(4)"></span>
          <span class="w3-badge demo1 w3-border w3-transparent w3-hover-white" onclick="currentDiv1(5)"></span>
        </div>

      </div><br><br><br><br>


      <!---Sqrip2--->

      <script>
        var slideIndex = 1;
        showDivs1(slideIndex);

        function plusDivs1(n) {
          showDivs1(slideIndex += n);
        }

        function currentDiv1(n) {
          showDivs1(slideIndex = n);
        }

        function showDivs1(n) {
          var i;
          var x = document.getElementsByClassName("mySlides1");
          var dots = document.getElementsByClassName("demo1");
          if (n > x.length) { slideIndex = 1 }
          if (n < 1) { slideIndex = x.length }
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
          }
          x[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " w3-white";
        }
      </script>

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
