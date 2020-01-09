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
</style>


<body id="myPage">



<?php
    include('NavbarOrganization.php');
    ?>


    <!--content-->
    <div class="w3-container" style="margin-top: 80px;left: 2%;position:relative">
        <div style="display:inline-block">
            <p style="font-size: 28px;font-weight: bold;">การบริจาค</p>
        </div>
    </div>


 
    <div class="w3-container">
        <div class="w3-row">
            <div class="w3-half">
                <table class="w3-table w3-centered w3-bordered w3-border" style="margin-bottom: 20px;">
                    <tr class="tableHeader">
                        <th>ชื่อผู้บริจาค</th>
                        <th>จำนวนเงิน</th>
                        <th>วันที่บริจาค</th>
                        <th>เวลาที่บริจาค</th>
                    </tr>
                    <?php
                        $id = $_POST['id'];
                        $sql = "SELECT donaterName,donateMoney,date FROM donatedetails 
                        WHERE donateID =$id ";
                        $rs = $conn->query($sql);
                        
                        while($row = $rs->fetch_assoc()){
                        $date=$row['date'];
                        $split = explode(" ",$date);
                        $splitTime = explode(" ",$date);
                        echo "<tr>";
                        echo "<td>".$row['donaterName']."</td>";
                        echo "<td>".$row['donateMoney']."</td>";
                        echo "<td>".$split[0]."</td>";
                        echo "<td>".$splitTime[1]."</td>";
                        echo "</tr>";
                        
                        }
                    ?>
                    <?php
                        $sql2 = "SELECT SUM(donateMoney) as sumDonate
                        FROM donate
                        join organization 
                        on donate.organizationID = organization.organizationID
                        join donateDetails 
                        on donateDetails.donateID = donate.donateID
                        WHERE donate.donateID =$id";
                        $rs2 = $conn->query($sql2);
                        $row2 = $rs2->fetch_assoc();
                        $Need=$row2['sumDonate'] ; 
                        
                        $sql3 = "SELECT donateRequired FROM donate";
                        $rs3 = $conn->query($sql3);
                        $row3 = $rs3->fetch_assoc();
                        $Donate=$row3['donateRequired'];
                    ?>
                </table>
            </div>

            <div class="w3-half">
                <div id="chart" style="width: 100%;height: 400px;"></div>
            </div>
        </div>
    </div>
    <!--end of content-->
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Need', 'Donate'],
                ['Need', <?php echo  $Need;?>],
                ['Donate total', <?php echo  $Donate;?>],
            ]);

            var options = {
                //title: 'My Daily Activities'
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart'));

            chart.draw(data, options);
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