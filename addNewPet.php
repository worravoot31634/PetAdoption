<?php

include_once("connectDB.php");


$typePet = $_POST['typePet'];
$specy = $_POST['species'];
$province = $_POST['province'];
$phone = $_POST['phone'];
$detail = $_POST['detail'];
$file =  $_FILES['filePet']['name'];
$userLogin = 1;

if ($_FILES["filePet"]["error"] > 0) {
} else {
    move_uploaded_file($_FILES['filePet']['tmp_name'], "./Images/" . $_FILES['filePet']['name']);
}

$sql = "INSERT INTO pet(type,species,province,phoneNumber,details,petStatus,Image,posterID) VALUES('" . $typePet . "','" . $specy . "','" . $province . "','" . $phone . "','" . $detail . "',0,'" . $file . "','" . $userLogin . "');";
if ($conn->query($sql) === TRUE) {
    header('LOCATION:addPet.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
