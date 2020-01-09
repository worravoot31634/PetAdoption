<?php
// Start the session
session_start();
$_SESSION['ID'] = $_GET['id'];
if (!$_SESSION['loginStatus']) {
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
  bottom: -30px;
  right: 125px;
  width: 220px;
  border-radius: 10px 10px 10px 10px;
}
.open-button:hover{
background-color: #373143;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
  bottom: -30px;
  right: 125px;
  width: 220px;
  border-radius: 10px 10px 10px 10px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 125px;
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
  padding: 16px 20px;
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
<style>
    .activity-content-link {
        text-decoration: none;
        color: black;
    }

    .activity-content-link:hover {
        color: black;
    }

    .contentCenter {
        margin: auto;
        width: 60%;

    }

    .pragraph {
        font-size: 20px;
    }

    .submitClass {
        background-color: #786898;
        border: none;
        width: 30%;
        color: #FFFFFF;
        border-radius: 4px;
        font-size: 18px;
    }

    .submitClass:hover {
        background-color: #594481;
    }
</style>


<body id="myPage">


<?php
    include('NavbarOrganization.php');
    ?>



    <?php
    include 'connectDB.php';

    $sql = "SELECT * FROM pet where petID = '" . $_GET['id'] . "'";
    $rs = $conn->query($sql);
    $row = $rs->fetch_assoc();

    ?>
    <!--Content-->

    <!--header text and image of activity-->
    <center>
        <div class="container" style="margin-top:40px;display:inline-block">
            <img src="./Images/icon/cat.png" alt="" srcset="" width="50px">
            <div style="display:inline-block;">
                <p style="font-size: 30px;font-weight:bold;vertical-align: middle;">แก้ไขข้อมูลโพสต์</p>
            </div>
        </div>
    </center>
    <!--end header text and image of activity-->


  <form action="editPetOrganizationvalue.php" method="post" enctype="multipart/form-data">

  <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="w3-container" style=" margin-left: auto;
    margin-right: auto;width: 80%;padding: 10px;" height="200px">
<!--Left side of Page-->
<div class="w3-border w3-half w3-center" style="height: 600px;">
    <img src="./Images/<?php echo $row['Image']?>" alt="" srcset="" width="70%" height="50%">
    <div style="clear:both;">
        <input type="file" value="โพสต์" name="petPhoto" class="submitClass" style="margin-bottom: 10px;">
    </div>

</div>
        <div class="w3-half" style="background-color: #E2E0E0;height: 600px;">

            <div class="w3-container" style="padding:10px;background-color: #373143; color: white;">
                <div class="w3-half">

                    <div class="w3-container" style="padding-top: 5px;padding-bottom: 5px;">


                    </div>
                </div>

                <div class="w3-half">

                    <!--Add Right element of Name-->

                </div>
            </div>
            <!--Detail Pet-->
            <div class="w3-container">
                <br>
                <div class="w3-row w3-padding">
                    <div class="w3-third">
                        <a style="padding-left: 4px ;font-size: 1.2em;font-weight: bold;">ชนิดสัตว์เลี้ยง: </a>
                    </div>
                    <div class="w3-twothird">
                      <select class="w3-border w3-rest  w3-select" name="type" required>
                          <option style="font-size: 20px;" <?php if ($row['type'] == 1) echo "selected='selected'"; ?> value="1">หมา</option>
                          <option style="font-size: 20px;" <?php if ($row['type'] == 2) echo "selected='selected'"; ?> value="2">แมว</option>
                      </select>
                    </div>


                </div>
                <div class="w3-row w3-padding">
                    <div class="w3-third">
                        <a style="padding-left: 4px ;font-size: 1.2em;font-weight: bold;">สายพันธู์: </a>
                    </div>

                    <div class="w3-twothird">
                      <select class="w3-border w3-rest  w3-select" name="species" required>
                          <option style="font-size: 20px;" <?php if ($row['species'] == 1) echo "selected='selected'"; ?> value="1">บีเกิล</option>
                          <option style="font-size: 20px;" <?php if ($row['species'] == 2) echo "selected='selected'"; ?> value="2">บางแก้ว</option>
                      </select>
                    </div>

                </div>
                <div class="w3-row w3-padding">

                    <div class="w3-third">
                        <a style="padding-left: 4px ;font-size: 1.2em;font-weight: bold;">จังหวัด: </a>
                    </div>
                    <div class="w3-twothird">
                      <select name="province" class="w3-border w3-rest  w3-select" required>
                          <option value="" selected>--------- เลือกจังหวัด ---------</option>
                          <option <?php if ($row['province'] == "กรุงเทพมหานคร") echo "selected='selected'"; ?> value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                          <option <?php if ($row['province'] == "กระบี่") echo "selected='selected'"; ?> value="กระบี่">กระบี่ </option>
                          <option <?php if ($row['province'] == "กาญจนบุรี") echo "selected='selected'"; ?> value="กาญจนบุรี">กาญจนบุรี </option>
                          <option <?php if ($row['province'] == "กาฬสินธุ์") echo "selected='selected'"; ?> value="กาฬสินธุ์">กาฬสินธุ์ </option>
                          <option <?php if ($row['province'] == "กำแพงเพชร") echo "selected='selected'"; ?> value="กำแพงเพชร">กำแพงเพชร </option>
                          <option <?php if ($row['province'] == "ขอนแก่น") echo "selected='selected'"; ?> value="ขอนแก่น">ขอนแก่น</option>
                          <option <?php if ($row['province'] == "จันทบุรี") echo "selected='selected'"; ?> value="จันทบุรี">จันทบุรี</option>
                          <option <?php if ($row['province'] == "ฉะเชิงเทรา") echo "selected='selected'"; ?> value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                          <option <?php if ($row['province'] == "ชัยนาท") echo "selected='selected'"; ?> value="ชัยนาท">ชัยนาท </option>
                          <option <?php if ($row['province'] == "ชัยภูมิ") echo "selected='selected'"; ?> value="ชัยภูมิ">ชัยภูมิ </option>
                          <option <?php if ($row['province'] == "ชุมพร") echo "selected='selected'"; ?> value="ชุมพร">ชุมพร </option>
                          <option <?php if ($row['province'] == "ชลบุรี") echo "selected='selected'"; ?> value="ชลบุรี">ชลบุรี </option>
                          <option <?php if ($row['province'] == "เชียงใหม่") echo "selected='selected'"; ?> value="เชียงใหม่">เชียงใหม่ </option>
                          <option <?php if ($row['province'] == "เชียงราย") echo "selected='selected'"; ?> value="เชียงราย">เชียงราย </option>
                          <option <?php if ($row['province'] == "ตรัง") echo "selected='selected'"; ?> value="ตรัง">ตรัง </option>
                          <option <?php if ($row['province'] == "ตราด") echo "selected='selected'"; ?> value="ตราด">ตราด </option>
                          <option <?php if ($row['province'] == "ตาก") echo "selected='selected'"; ?> value="ตาก">ตาก </option>
                          <option <?php if ($row['province'] == "นครนายก") echo "selected='selected'"; ?> value="นครนายก">นครนายก </option>
                          <option <?php if ($row['province'] == "นครปฐม") echo "selected='selected'"; ?> value="นครปฐม">นครปฐม </option>
                          <option <?php if ($row['province'] == "นครพนม") echo "selected='selected'"; ?> value="นครพนม">นครพนม </option>
                          <option <?php if ($row['province'] == "นครราชสีมา") echo "selected='selected'"; ?> value="นครราชสีมา">นครราชสีมา </option>
                          <option <?php if ($row['province'] == "นครศรีธรรมราช") echo "selected='selected'"; ?> value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                          <option <?php if ($row['province'] == "นครสวรรค์") echo "selected='selected'"; ?> value="นครสวรรค์">นครสวรรค์ </option>
                          <option <?php if ($row['province'] == "นราธิวาส") echo "selected='selected'"; ?> value="นราธิวาส">นราธิวาส </option>
                          <option <?php if ($row['province'] == "น่าน") echo "selected='selected'"; ?> value="น่าน">น่าน </option>
                          <option <?php if ($row['province'] == "นนทบุรี") echo "selected='selected'"; ?> value="นนทบุรี">นนทบุรี </option>
                          <option <?php if ($row['province'] == "บึงกาฬ") echo "selected='selected'"; ?> value="บึงกาฬ">บึงกาฬ</option>
                          <option <?php if ($row['province'] == "บุรีรัมย์") echo "selected='selected'"; ?> value="บุรีรัมย์">บุรีรัมย์</option>
                          <option <?php if ($row['province'] == "ประจวบคีรีขันธ์") echo "selected='selected'"; ?> value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                          <option <?php if ($row['province'] == "ปทุมธานี") echo "selected='selected'"; ?> value="ปทุมธานี">ปทุมธานี </option>
                          <option <?php if ($row['province'] == "ปราจีนบุรี") echo "selected='selected'"; ?> value="ปราจีนบุรี">ปราจีนบุรี </option>
                          <option <?php if ($row['province'] == "ปัตตานี") echo "selected='selected'"; ?> value="ปัตตานี">ปัตตานี </option>
                          <option <?php if ($row['province'] == "พะเยา") echo "selected='selected'"; ?> value="พะเยา">พะเยา </option>
                          <option <?php if ($row['province'] == "พระนครศรีอยุธยา") echo "selected='selected'"; ?> value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                          <option <?php if ($row['province'] == "พังงา") echo "selected='selected'"; ?> value="พังงา">พังงา </option>
                          <option <?php if ($row['province'] == "พิจิตร") echo "selected='selected'"; ?> value="พิจิตร">พิจิตร </option>
                          <option <?php if ($row['province'] == "พิษณุโลก") echo "selected='selected'"; ?> value="พิษณุโลก">พิษณุโลก </option>
                          <option <?php if ($row['province'] == "เพชรบุรี") echo "selected='selected'"; ?> value="เพชรบุรี">เพชรบุรี </option>
                          <option <?php if ($row['province'] == "เพชรบูรณ์") echo "selected='selected'"; ?> value="เพชรบูรณ์">เพชรบูรณ์ </option>
                          <option <?php if ($row['province'] == "แพร่") echo "selected='selected'"; ?> value="แพร่">แพร่ </option>
                          <option <?php if ($row['province'] == "ภูเก็ต") echo "selected='selected'"; ?> value="พัทลุง">พัทลุง </option>
                          <option <?php if ($row['province'] == "ภูเก็ต") echo "selected='selected'"; ?> value="ภูเก็ต">ภูเก็ต </option>
                          <option <?php if ($row['province'] == "มหาสารคาม") echo "selected='selected'"; ?> value="มหาสารคาม">มหาสารคาม </option>
                          <option <?php if ($row['province'] == "มุกดาหาร") echo "selected='selected'"; ?> value="มุกดาหาร">มุกดาหาร </option>
                          <option <?php if ($row['province'] == "แม่ฮ่องสอน") echo "selected='selected'"; ?> value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                          <option <?php if ($row['province'] == "ยโสธร") echo "selected='selected'"; ?> value="ยโสธร">ยโสธร </option>
                          <option <?php if ($row['province'] == "ยะลา") echo "selected='selected'"; ?> value="ยะลา">ยะลา </option>
                          <option <?php if ($row['province'] == "ร้อยเอ็ด") echo "selected='selected'"; ?> value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                          <option <?php if ($row['province'] == "ระนอง") echo "selected='selected'"; ?> value="ระนอง">ระนอง </option>
                          <option <?php if ($row['province'] == "ระยอง") echo "selected='selected'"; ?> value="ระยอง">ระยอง </option>
                          <option <?php if ($row['province'] == "ราชบุรี") echo "selected='selected'"; ?> value="ราชบุรี">ราชบุรี</option>
                          <option <?php if ($row['province'] == "ลพบุรี") echo "selected='selected'"; ?> value="ลพบุรี">ลพบุรี </option>
                          <option <?php if ($row['province'] == "ลำปาง") echo "selected='selected'"; ?> value="ลำปาง">ลำปาง </option>
                          <option <?php if ($row['province'] == "ลำพูน") echo "selected='selected'"; ?> value="ลำพูน">ลำพูน </option>
                          <option <?php if ($row['province'] == "เลย") echo "selected='selected'"; ?> value="เลย">เลย </option>
                          <option <?php if ($row['province'] == "ศรีสะเกษ") echo "selected='selected'"; ?> value="ศรีสะเกษ">ศรีสะเกษ</option>
                          <option <?php if ($row['province'] == "สกลนคร") echo "selected='selected'"; ?> value="สกลนคร">สกลนคร</option>
                          <option <?php if ($row['province'] == "สงขลา") echo "selected='selected'"; ?> value="สงขลา">สงขลา </option>
                          <option <?php if ($row['province'] == "สมุทรสาคร") echo "selected='selected'"; ?> value="สมุทรสาคร">สมุทรสาคร </option>
                          <option <?php if ($row['province'] == "สมุทรปราการ") echo "selected='selected'"; ?> value="สมุทรปราการ">สมุทรปราการ </option>
                          <option <?php if ($row['province'] == "สมุทรสงคราม") echo "selected='selected'"; ?> value="สมุทรสงคราม">สมุทรสงคราม </option>
                          <option <?php if ($row['province'] == "สระแก้ว") echo "selected='selected'"; ?> value="สระแก้ว">สระแก้ว </option>
                          <option <?php if ($row['province'] == "สระบุรี") echo "selected='selected'"; ?> value="สระบุรี">สระบุรี </option>
                          <option <?php if ($row['province'] == "สิงห์บุรี") echo "selected='selected'"; ?> value="สิงห์บุรี">สิงห์บุรี </option>
                          <option <?php if ($row['province'] == "สุโขทัย") echo "selected='selected'"; ?> value="สุโขทัย">สุโขทัย </option>
                          <option <?php if ($row['province'] == "สุพรรณบุรี") echo "selected='selected'"; ?> value="สุพรรณบุรี">สุพรรณบุรี </option>
                          <option <?php if ($row['province'] == "สุราษฎร์ธานี") echo "selected='selected'"; ?> value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                          <option <?php if ($row['province'] == "สุรินทร์") echo "selected='selected'"; ?> value="สุรินทร์">สุรินทร์ </option>
                          <option <?php if ($row['province'] == "สตูล") echo "selected='selected'"; ?> value="สตูล">สตูล </option>
                          <option <?php if ($row['province'] == "หนองคาย") echo "selected='selected'"; ?> value="หนองคาย">หนองคาย </option>
                          <option <?php if ($row['province'] == "หนองบัวลำภู") echo "selected='selected'"; ?> value="หนองบัวลำภู">หนองบัวลำภู </option>
                          <option <?php if ($row['province'] == "อำนาจเจริญ") echo "selected='selected'"; ?> value="อำนาจเจริญ">อำนาจเจริญ </option>
                          <option <?php if ($row['province'] == "อุดรธานี") echo "selected='selected'"; ?> value="อุดรธานี">อุดรธานี </option>
                          <option <?php if ($row['province'] == "อุตรดิตถ์") echo "selected='selected'"; ?> value="อุตรดิตถ์">อุตรดิตถ์ </option>
                          <option <?php if ($row['province'] == "อุทัยธานี") echo "selected='selected'"; ?> value="อุทัยธานี">อุทัยธานี </option>
                          <option <?php if ($row['province'] == "อุบลราชธานี") echo "selected='selected'"; ?> value="อุบลราชธานี">อุบลราชธานี</option>
                          <option <?php if ($row['province'] == "อ่างทอง") echo "selected='selected'"; ?> value="อ่างทอง">อ่างทอง </option>
                          <option <?php if ($row['province'] == "อื่นๆ") echo "selected='selected'"; ?> value="อื่นๆ">อื่นๆ</option>
                      </select>

                    </div>
                </div>
                <div class="w3-row w3-padding">
                    <div class="w3-third">
                        <a style="padding-left: 4px ;font-size: 1.2em;font-weight: bold;">หมายเลขโทรศัพท์: </a>
                    </div>
                    <div class="w3-twothird">
                        <input name="phoneNumber" class="w3-input" type="text"  value="<?php echo $row['phoneNumber']?> "maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required/>
                    </div>

                </div>
                <div class="w3-row w3-padding">
                    <a style="padding-left: 4px ;font-size: 1.2em;font-weight: bold;">รายละเอียด: </a>
                </div>
                <div class="w3-row w3-padding">
                    <div class="w3-row w3-padding" style="border: 2px solid whitesmoke;border-radius: 12px;">
                        <textarea  name="details" class="w3-input" rows="4" cols="50" required><?php echo $row['details']?></textarea>
                    </div>
                </div>


                <div class="w3-row w3-padding">
                    <button class="open-button w3-right" style="border-radius: 14px;" id="btnChat" onclick="openForm()"><img width="20px" src="./Images/icon/sendIcon.png">
                        <a style="padding-left: 4px ;font-size: 1.3em;font-weight: bold;">บันทึก</a></button>


                    </div>
                </div>
                    <br>

            </div>



        </div>





    </div>
  </form>



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

    function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("btnChat").style.display = "none";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("btnChat").style.display = "block"
}
</script>
