<?php
session_start();
include_once("connectDB.php");

$file =  $_FILES['filePost']['name'];
$Topic = $_POST['topic'];
$Comment = $_POST['comment'];
$userLogin = 1;

if ($_FILES["filePost"]["error"] > 0) {
} else {
    move_uploaded_file($_FILES['filePost']['tmp_name'], "./Images/" . $_FILES['filePost']['name']);
}

$sql = "INSERT INTO activity(topic,details,image,organizationID) VALUES('" . $Topic . "','" . $Comment . "','" . $file . "',". $_SESSION['accountID'].")";
if ($conn->query($sql) === TRUE) {
    header('LOCATION:writePost.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
