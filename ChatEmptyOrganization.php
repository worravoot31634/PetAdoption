<?php
session_start();
$_SESSION["userIDLogin"] = $_SESSION['accountID'];

include('NavbarOrganization.php');

?>
<?php
// Start the session

include_once('connectDB.php');
$sql = "SELECT statusLogin FROM account WHERE accountID = '" . $_SESSION['userAccountID'] . "'";

$rs = $conn->query($sql);
$row = $rs->fetch_assoc();

if ($row["statusLogin"] == 0) {
  session_destroy();
  session_unset();
  $_SESSION['message'] = 'Please login first';
  header("Location: login.php");
}
?>

<!DOCTYPE html>


<html>
<title>Pet Adoption</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS/W3S/w3.css">
<link rel="stylesheet" href="CSS/W3S/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS/Bootstrap/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS/CustomCss.css">

<!--Add on-->

<style>
  .center3 {
    height: 200px;
    position: relative;
    text-align: center;

  }
</style>

<body>

  <div style="padding-top : 18%;"></div>

  <div style="opacity: 0.9;" class=" center3">
    <img width="10%" src="images/icon/alert.png">
    <p style="font-size : 7vw;">ไม่พบข้อมูลการสนทนา</p>
  </div>




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

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>
  $(".messages").animate({
    scrollTop: $(document).height()
  }, "fast");


  //Check User from
  var tempfromUserID = 0;

  function setFromUserID(idUser) {
    tempfromUserID = idUser;
    console.log("setFromUserID : " + idUser);
  }



  function newMessage(idInput, idNum) {
    message = $(idInput).val();
    if ($.trim(message) == '') {
      return false;
    }
    console.log(message);
    $append = "#message" + idNum + " ul";

    $('<li class="replies"><img src="./Images/<?php echo $_SESSION["Image"] ?>" alt="" /><p>' + message + '</p></li>').appendTo($($append));
    $(idInput).val(null);

    $('.contact.active .preview').html('<span>คุณ: </span>' + message);
    $("#message" + idNum).animate({
      scrollTop: $(document).height()
    }, "fast");


    var toUserID = <?php echo $_SESSION["userIDLogin"]; ?>;
    var fromUserID = tempfromUserID;
    var message = message;


    var userdata = {
      'toUserID': toUserID,
      'fromUserID': fromUserID,
      'message': message
    };
    console.log(userdata);

    $.ajax({
      type: "POST",
      url: "addChatPHP.php",
      data: userdata,
      success: function(data) {
        console.log(data);
      }
    });





  };


  <?php

  $e = 1;
  //Get Data Contact
  foreach ($tempContact as $value) {

    $sqlGetContactList = "SELECT * FROM member WHERE memberID = " . $value;
    $rs = $conn->query($sqlGetContactList);

    while ($row = $rs->fetch_assoc()) {
      echo "$('#submit" . $e . "').click(function() {
                  newMessage('#inputMessage" . $e . " input'," . $e . ");
                });";

      echo " $('#InputMessage" . $e . " input').on('keyup', function(e) {
                  if (e.which == 13) {

                    newMessage('#inputMessage" . $e . " input'," . $e . ");
                    return false;
                  }
                });
                ";

      $e++;
    }
  }
  ?>




  /* $(window).on('keydown', function(e) {
     if (e.which == 13) {
       newMessage();
       return false;
     }
   });
   # sourceURL=pen.js*/


  function showChat(id) {

    let ChatNameID = "Chat" + id;
    let ContactNameID = "contact" + id;

    switch (id) {

      <?php


      for ($i = 1; $i <= $_SESSION["amountOfContact"]; $i++) {

        echo 'case ' . $i . ': ';

        for ($j = 1; $j <= $_SESSION["amountOfContact"]; $j++) {

          if ($j == $i) {
            echo 'document.getElementById("contact' . $j . '").classList.add("active");';
            echo 'document.getElementById("Chat' . $j . '").style.display = "block";';
          } else {
            echo 'document.getElementById("contact' . $j . '").classList.remove("active");';
            echo 'document.getElementById("Chat' . $j . '").style.display = "none";';
          }
        }
        echo 'break;';
      }

      ?>

      default:
        break;
    }








  }
</script>