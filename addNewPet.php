<?php

include_once("connectDB.php");
session_start();

$typePet = $_POST['typePet'];
$specy = $_POST['species'];
$province = $_POST['province'];
$phone = $_POST['phone'];
$detail = $_POST['detail'];
$file =  $_FILES['filePet']['name'];
$userLogin = $_SESSION['userAccountID'];

if ($_FILES["filePet"]["error"] > 0) {
} else {
    move_uploaded_file($_FILES['filePet']['tmp_name'], "./Images/" . $_FILES['filePet']['name']);
}

$sql = "INSERT INTO pet(type,species,province,phoneNumber,details,petStatus,Image,posterID) VALUES('" . $typePet . "','" . $specy . "','" . $province . "','" . $phone . "','" . $detail . "',0,'" . $file . "','" . $userLogin . "');";
if ($conn->query($sql) === TRUE) {

    if ($_SESSION['roles'] == "member") {
        header('LOCATION:addPet.php');
    } else if ($_SESSION['roles'] == "organization") {
        header('LOCATION:addPetOrganization.php');
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
