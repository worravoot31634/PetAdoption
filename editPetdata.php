 <?php
// Start the session
session_start();
    $petID = $_SESSION['ID'];
    include 'connectDB.php';
    $type = $_POST['type'];
    $species = $_POST['species'];
    $province = $_POST['province'];
    $phoneNumber = $_POST['phoneNumber'];
    $details = $_POST['details'];
    $sql = "UPDATE pet SET type = '".$type."', species='".$species."', province='".$province."',phoneNumber='".$phoneNumber."',details='".$details."' WHERE petID = '".$petID."'";
    $rs = $conn->query($sql);
    header("Location: myPostLogin.php");
    $conn->close();
    ?>