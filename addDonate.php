<?php

include_once("connectDB.php");

$file =  $_FILES['filedonate']['name'];
$Topic = $_POST['topic'];
$Comment = $_POST['comment'];
$Province = $_POST['province'];
$Totalprice = $_POST['totalprice'];
$userLogin = 1;

if ($_FILES["filePost"]["error"] > 0) {
} else {
    move_uploaded_file($_FILES['filedonate']['tmp_name'], "./Images/" . $_FILES['filedonate']['name']);
}

$sql = "INSERT INTO donate(donateTitle,details,donateProvince,donateRequired,image,organizationID) VALUES('" . $Topic . "' ,'" . $Comment . "',  '" . $Province . "','" . $Totalprice . "','" . $file . "',0);";
if ($conn->query($sql) === TRUE) {
    header('LOCATION:writeDonate.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
