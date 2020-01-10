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
      <a href="donateLogin.php"><button class="w3-button w3-xlarge w3-theme w3-hover-teal ">บริจาคให้น้อน</button></a>
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
          <img img src="./Images/news_1.png" alt="Alps" width="100%" >
          <div class="w3-container w3-center">
            <pre style="font-size:1vw;">น้องหมาพันธุ์บีเกิ้ลถูกทิ้ง
            น้องหมาพันธุ์บีเกิ้ลตัวนี้ ถูกทิ้งไว้บริเวณหน้าวัดป่าสารวัล น้องมีต้องการผู้ดูแลใครสนใจติดต่อ 083-659-48796</pre>
          </div>
        </div>
      </div>

      <div class="w3-quarter w3-row ">
        <div class="w3-card-4" style="margin-right:2%; ">
          <img img src="./Images/news_2.png" alt="Alps" width="365px" height="200px">
          <div class="w3-container w3-center">
          <p style="font-size:1vw;">ร่วมด้วยช่วยน้อง
            ร่วมบริจาคเงินสมทบทุนค่าอาหารน้องๆได้ที่นี้ สนใจติดต่อ 098-569-3545</pr>
          </div>
        </div>
      </div>

      <div class="w3-quarter  w3-row">
        <div class="w3-card-4" style="margin-right:2%; margin-top:4%;">
          <img img src="./Images/news_3.png" alt="Alps" width="365px" height="200px">
          <div class="w3-container w3-center">
            <p style="font-size:1vw;">ร่วมเป็นอาสาสมัครีดวัคซีนให้แมว ณ มหาวิทยาลัยเทคโนโลยีสุรนารี
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
              
กิจกรรมที่เจ้าตูบมักทำเป็นประจำทุกวัน
นอน
ระยะเวลาการนอนของสุนัขนั้นค่อนข้างแตกต่างกันมากในแต่ละสายพันธุ์ (ไม่เหมือนแมวที่นอนเยอะทุกสายพันธุ์) 
โดยมากแล้วสุนัขใหญ่มักจะขี้เกียจและนอนเยอะกว่าสุนัขขนาดกลางและขนาดเล็กเช่น สุนัขเซนต์เบอร์นาร์ดหรือเกรทไพรีนีส

ออกกำลังกาย / เล่น
สุนัขที่ค่อนข้างกระฉับกระเฉงอย่างเช่น สายพันธุ์บอร์ดเดอร์คอลลี่หรือเบลเจียนมาลอินวา จะต้องการกิจกรรมค่อนข้างมากเพื่อไม่ให้ตัวเองเครียด 
แต่ไม่ว่าอย่างไรก็ตามไม่ว่าจะเลี้ยงสุนัขสายพันธุ์ไหนการพาพวกมันออกไปเดินเล่นเป็นประจำก็ยังเป็นสิ่งจำเป็นอยู่ดี

สำรวจอาณาเขต / ขับถ่าย
สุนัขมักจะคอยสอดส่องดูแลรอบบ้านหรืออาณาเขตของพวกมันเองอยู่เสมอ ยิ่งหากคุณเลี้ยงให้มันใส่ใจกับสิ่งแปลกปลอมที่เข้ามาในบริเวณบ้านมันก็จะยิ่งเห่ามากขึ้น
 พวกมันจะเดินวนดูรอบๆ เมื่อตัวเองว่าง อาจจะวางอาณาเขตโดยการฉี่บ้างเพื่อไม่ให้สุนัขหรือสัตว์อื่นๆเข้ามาใกล้ด้วย
กิน
เชื่อว่านี่เป็นกิจกรรมที่เจ้าตูบหลงรักแบบสุดๆ ไปเลยละ สุนัขจะเพลิดเพลินการเรื่องกินอยู่เสมอ แนะนำว่าให้คุณลองหาของเล่นแบบที่ใส่ขนมได้มาให้สุนัขดู 
สิ่งนี้จะช่วยให้สุนัขฝึกสมองมากขึ้น กินอาหารได้ช้าลงและขนมกินเล่นในระหว่างมื้อหลักด้วย


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
            กิจกรรมยามว่างไว้ทำร่วมกับสุนัข เห็นสุนัขนั่งหงอยทั้งวันก็คงอยากหาอะไรให้พวกมันทำบ้างใช้มั้ยละ งั้นลองกิจกรรมเหล่านี้ดูสิ

พาไปเดินเล่นในเมืองหรือรอบๆ หมู่บ้าน 
กิจกรรมสุดคลาสสิคที่ช่วยเพิ่มสัญชาตญาณการสำรวจให้สุนัข ช่วยให้สุนัขได้พบเจอผู้คน ได้เจอสุนัขหรือสิ่งเร้าอื่นๆ 
นอกเหนือจากในบ้าน ซึ่งจะช่วยให้สุนัขมีพฤติกรรมดีขึ้นและร่างกายแข็งแรงด้วย

พาไปเที่ยวทะเล สระว่ายน้ำสุนัขหรือแม่น้ำบ้าง
สุนัขบางสายพันธุ์ก็ชื่นชอบการเล่นน้ำมากๆ เช่นนิวฟาวด์แลนด์หรือโกลเด้นรีทรีฟเวอร์  การกระโดดน้ำเล่นกับสุนัขก็สนุกใช่ย่อยเลยนะ 
แต่ในไทยอาจจะหาสระว่ายน้ำสำหรับสุนัขยากหน่อย

เกมขว้างของ
คุณอาจต้องหาสวนสาธารณะดีๆ หน่อย เพื่อให้กิจกรรมนี้เล่นได้อย่างราบรื่นที่สุด นอกจากจะช่วยให้สุนัขได้ออกกำลังกายอย่างเหมาะสมแล้วยังได้ฝึกไหวพริบให้สุนัขด้วย

พาสุนัขไปที่ทำงาน
ปัจจุบันนี้หลายๆ บริษัทก็เริ่มมีนโยบายให้นำสัตว์เลี้ยงไปที่ทำงานได้บ้างแล้ว และหากหนึ่งในนั้นเป็นบริษัทของคุณก็เป็นโอกาสอันดีที่จะพาเจ้าตูบจอมขี้เกียจไปหาเพื่อนๆ ใหม่บ้าง

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
            สุนัขยอดฮิตที่คนทั้งโลกเลี้ยง
ลาบราดอร์ รีทรีฟเวอร์
เจ้าสุนัขที่ทำหน้าชอบยิ้มแป้นแล้นให้กล้อง มักโผล่มาตามโฆษณาทีวีหรือบนหน้าถุงอาหารยี่ห้อดังต่างๆ เป็นสุนัขที่มีร่างกายกำยำ แข็งแรงซึ่งได้รับมาจากสายเลือดพันธุ์นักล่าแต่เก่า 
ลาบราดอร์เป็นสุนัขที่ฉลาดหลักแหลม กระตือรือร้น ช่างเอาใจ แต่ก็หนักแน่น ทักษะการล่าและประสาทสัมผัสดีมาก มักถูกใช้เป็นสัตว์กู้ภัยอยู่บ่อยครั้ง มีความรักต่อครอบครัว เป็นมิตรกับสัตว์อื่น 
มีสุขภาพที่ดี ท่าทางที่สุขุม ชอบวิ่งเล่น มั่นใจ ไม่เห่าพร่ำเพรื่อ มีความเป็นผู้นำ เลี้ยงเด็กเฝ้าเด็กได้หากฝึกฝน และมีพลังงานเหลือล้น เยอะพอยัง? ด้วยเหตุผลทั้งหมดทั้งมวลที่ว่ามานั้นจึงเป็นบทสรุปในทางสัตว์ศาสตร์ที่ว่า 
ลาบราดอร์รีทรีฟเวอร์เป็นสุนัขที่คนนิยมเลี้ยงกันมากที่สุดครับ

โกลเด้น รีทรีฟเวอร์ 
สุดยอดหมาบ้านที่ทั้งฉลาด ร่าเริง ชอบเอาอกเอาใจ ขี้เล่น รักเด็ก รักครอบครัว เสียสละ ฝึกง่าย มีเสน่ห์ จนเป็นที่รักใคร่ของทุกๆ คนในครอบครัว โกลเด้นมีลักษณะที่น่าเกรงขาม ดูมีความคล่องแคล่ว ขนาดตัวไม่ใหญ่โตเกินไป 
มีสง่าราศีสมชื่อ เจ้าโกลเด้นมักจะคอยช่วยเหลือสิ่งต่างๆ ให้เราอยู่เสมอแม้จะออกมาดีบ้างหรือไม่ดีบ้าง แต่ก็ช่วยให้คุณเผลอยิ้มออกมาได้ตลอดใช่มั้ยหล่ะ
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
              
            เปิดบ้านด้วยพ่อใหญ่ นามว่า "กังฟู" // กังฟูเป็นแมวหาบ้าน เห็นหน้าสบตากันแล้วป๊ะเลยถูกใจ จนต้องไปรับตัวมาอยู่ด้วย หน้าตาแบบใครเห็นก็ต้องรู้สึกว่า..ไอ้โหด!! ...,มันจะกัดไหม?! บอกเลยว่า 'ไม่!' มีความติ๊งต๊อง มีความรักเด็กมาก ด้วยความที่นางรักเด็กนี่แหละ ตอนที่บ้านมีนางอยู่ตัวเดียว นางก็ไปคาบแมวเด็กมารับเลี้ยง...ก็เลยเป็นที่มาของอาการ "แมวงอก" ตั้งแต่บัดนั้นเป็นต้นมา
            หลังจากที่กังฟูเก็บลูกสาวมาเลี้ยงดูฟูมฟักจนโต ...ขณะนั้นเราก็ป้องกันด้วยการพากังฟูไปทำหมันเรียบร้อย เพื่อเป็นตัดไฟแต่ต้นลม...but!!! นางลูกสาวค่าาาาา ทั้งๆที่นางอยู่ในรั้วบ้านมีลูกกรงรอบขอบชิด อยู่มาวันหนึ่งเราก็สังเกตุได้ว่า...นางท้องป่องกับชายไหนไม่รู้ไม่อาจทราบได้ O_O!!
            ขุ่นพระ!! งอกมาสี่หน่อ!!
            ***********หลังจากนั้น.....คิดว่าจะจบแล้ว.....คิดผิด!!!*************
            ไปเกิดสงสารแม่แมวและลูกแมวที่วัด ที่โดนเอามาปล่อยลูกยังเล็ก เลยพานางกลับมาบ้าน แล้วหาบ้านให้ลูกๆ จนลูกๆ ได้บ้านทั้งหมด และคิดว่าหลังจากนั้นจะพาขุ่นแม่ไปทำหมันและเลี้ยงไว้เองที่บ้าน....คิดว่าอีก 2 อาทิตย์ ค่อยพาไปล่ะกัน...ก็นั่นแหละ #แมวก็คือแมว ใช้เวลาว่างให้เป็นประโยชน์ ...เวลาเพียงแค่ 2 อาทิ้ดดดดดดดดดด นางไปท้องได้จะใดมา!!!!
            ตั้งชื่อให้นางใหม่ว่าคุณนวล โชคดีที่นางพอคุยรู้เรื่อง นางเลยงอกน้องใหม่มาให้แค่ 1 หน่วย นามว่า "สังขยา"
            แต่เรื่องราวยังไม่หมดแค่นั้น...อย่าๆๆ มีความดราม่ากันเกิดขึ้น เมื่อสังขยาเกิดมาได้ไม่กี่วัน เราก็ได้ยินเสียงลูกแมวร้อง คือได้ยินแต่เสียงแต่หาตัวไม่เจอ ไม่ใช่แค่คนนะที่หา ลุงกังฟู และขุ่นแม่นวลเองก็หาด้วย เพราะนางรักเด็กและคุณนวลก็คิดว่าเป็นเสียงของลูกนาง ตามเสียงหากันอยู่วันเต็มๆ อากาศก็ร้อน จนในที่สุด...ไปเจอตัวที่ใต้หลังคา คาดว่ามีแม่แมวคาบมาทำตกไว้ เป็นลูกแมวตัวเล็กสภาพหิวโซขมุกขะมอม และเป็นโชคดีมากๆ ที่พอเอามาวางในกรงคุณนายนวลแล้ว คุณนายก็คิดว่านั่นคือลูกของนางเอง ดูแลและเลียทำความสะอาด ให้ดูดนม เจ้าตัวเล็กลูกหลงถึงได้รอดมาได้ตั้งแต่บัดนั้นเป็นต้นมา...มีนามใหม่ว่า "ข้าวเหนียว"
            เวลาไปพาไปหาหมอถึงคิวหมอเรียกตัว "ข้าวเหนียว-สังขยา เข้าห้องตรวจค่ะ" คือหิวเลย 5555+
            เวลาช่างผ่านไปไวเหมือนโกหก
            นี่โตเองนะ...ไม่ได้ยัดฟองน้ำลงไปในพุง
            หลังจากพี่น้องขนมหวานจบไป คิดว่าจะจบแค่นั้นชิมิล่ะ ...เปล่าเลย กลับไปทำบุญที่วัดเดิมอีกครั้ง เก็บแมวป่วยมาอีก 1 ตัว

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
            สิ่งที่จะเกิดขึ้นเมื่อสุนัขออกกำลังกายไม่พอ

การออกกำลังกายเป็นของคู่กับสุนัขทุกสายพันธุ์เลยนะ ต่อให้มีความต้องการน้อยแค่ไหนแต่พวกมันก็จำเป็นที่จะต้องออกไปเดินเล่นข้างนอกบ้างสักนิดก็ยังดี ไม่งั้นอาจจะเกิดปัญหาเหล่านี้ขึ้นได้

น้ำหนักตัวเพิ่มขึ้น
อันนี้ค่อนข้างจะเห็นได้อย่างชัดเจนเลยละ ถ้าสุนัขเอาแต่นั่งๆ นอนๆ กินอยู่กับบ้านตัวก็ต้องอ้วนตุ๊เป็นธรรมดาอยู่แล้ว และยิ่งเจ้าตูบอ้วนขึ้นมากๆ ก็จะยิ่งเสี่ยงต่อโรคต่างๆ ได้ง่ายขึ้นทั้งเบาหวาน โรคกระดูก ฯลฯ

ชอบเห่าหอน
การเห่าหอนเป็นหนึ่งในวิธีการเรียกร้องความสนใจจากสุนัขอย่างหนึ่งแล้วเป็นวิธีคลายความเครียดด้วย เมื่อคุณไม่ยอมพาสุนัขออกไปเดินเล่นพวกมันก็อาจจะเห่าหอนเพื่อเรียกร้องความสนใจจากคุณบ่อยๆ เพื่อให้พามันออกไปเดินเล่นก็ได้

คึกคักมากผิดปกติ
นี่จะคล้ายๆ กับการทำลายข้าวของภายในบ้าน คือเมื่อสุนัขไม่ได้ออกกำลังกายนอกบ้าน พวกมันก็จะคึกคะนองมากกว่าปกติหน่อยเมื่อได้เจอเรื่องแปลกใหม่หรือสิ่งที่น่าตื่นเต้นภายในบ้าน ทำให้คุณอาจจะรับมือกับพวกมันไม่ค่อยถูกสักเท่าไหร่
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
