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
    crossorigin="anonymous"></script>-->

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

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #786898;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
  position: fixed;
  bottom: 23px;
  right: 10%;
  width: 280px;
  border-radius: 10px 10px 10px 10px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 10%;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: #786898;
  border-radius: 15px 15px 0px 0px;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>



<body id="myPage">

<?php
    include('NavbarMember.php');
    ?>
    
    <!--Content-->

    <!--header text and image of activity-->

    <center>
      <br>
        <div class="container" style="margin-top:40px;display:inline-block">
            <img src="./Images/icon/cat.png" alt="" srcset="" width="50px">
            <div style="display:inline-block;">
                <p style="font-size: 30px;font-weight:bold;vertical-align: middle;">รายละเอียด</p>
            </div>
        </div>
    </center>
    <!--end header text and image of activity-->





    <div class="w3-container" style=" margin-left: auto;
    margin-right: auto;width: 80%;padding: 10px;" height="200px">

        <div class="w3-half">
            <img src="./Images/dogPic.png" width="100%">
        </div>
        <div class="w3-half" style="background-color: #E2E0E0;">

            <div class="w3-container" style="padding:10px;background-color: #373143; color: white;">
                <div class="w3-half">

                    <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                        <img width="35px" src="./Images/userPic.png">
                        <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">Logan</a>


                    </div>
                </div>

                <div class="w3-half">

                    <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">
                        <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">ยังไม่มีผู้สนใจรับเลี้ยง</a>
                        <a style="background-color: green;" class="w3-left statusCircle"></a>
                    </div>

                </div>
            </div>
            <!--Detail Pet-->
            <div class="w3-container">
                <br>
                <div class="w3-row w3-padding">
                    <a style="padding-left: 4px ;font-size: 1.2em;font-weight: bold;">ชนิดสัตว์เลี้ยง: </a>
                </div>
                <div class="w3-row w3-padding">
                    <a style="padding-left: 4px ;font-size: 1.2em;font-weight: bold;">สายพันธู์: </a>
                </div>
                <div class="w3-row w3-padding">
                    <a style="padding-left: 4px ;font-size: 1.2em;font-weight: bold;">จังหวัด: </a>
                </div>
                <div class="w3-row w3-padding">
                    <a style="padding-left: 4px ;font-size: 1.2em;font-weight: bold;">หมายเลขโทรศัพท์: </a>
                </div>
                <div class="w3-row w3-padding">
                    <a style="padding-left: 4px ;font-size: 1.2em;font-weight: bold;">รายละเอียด: </a>
                </div>
                <div class="w3-row w3-padding">
                    <div class="w3-row w3-padding" style="border: 2px solid whitesmoke;border-radius: 12px;">
                        <p style="padding-left: 4px ;font-size: 1.1em;">
                            &nbsp&nbsp&nbsp&nbsp There are many variations of passages of Lorem Ipsum
                            available, but the majority have suffered alteration
                            in some form, by injected humour, or randomised
                            words which don't look even slightly believable.
                            </p>
                    </div>
                </div>


                <div class="w3-row w3-padding">
                    <button style="border-radius: 14px;" class="w3-animate-opacity open-button" id="btnChat" onclick="openForm()"><img width="35px" src="./Images/icon/chatIcon.png">
                        <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">แชทสนทนา</a></button>

                    <div class="w3-animate-bottom chat-popup" id="myForm">
                      <form action="/action_page.php" class="form-container">
                        <img width="35px" src="./Images/userPic.png">
                        <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;color: white;padding-right: 10px;">Logan<a style="background-color: #28a745;height:10px;width:10px" class="statusCircle"></a></a>


                        <textarea placeholder="พิมพ์ข้อความ.." name="msg" required></textarea>

                        <button style="border-radius:10px; font-size: 1.2em; background-color: #373143;" type="submit" class="btn">ส่งข้อความ</button>
                        <button style="border-radius:10px; font-size: 1.2em; background-color: darkgray;" type="button" class="btn" onclick="closeForm()">ปิด</button>
                      </form>
                    </div>
                </div>


            </div>



        </div>





    </div>




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

</body>



</html>

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

    function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("btnChat").style.display = "none";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("btnChat").style.display = "block"
}
</script>
