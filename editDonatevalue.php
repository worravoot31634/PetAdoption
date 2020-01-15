<?php

include('connectDB.php');

$myPhoto = $_FILES["img"]["name"];
$imgHidden = $_POST["imgHidden"];
//Upload Files
$target_dir = "Images/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;


$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


if (($_POST["id"] <> "") && ($_POST["donateTitle"] <> "") && ($_POST["details"] <> "") && ($_POST["donateProvince"] <> "") && ($_POST["donateRequired"] <> "")) {


    $id = $_POST['id'];
    $Title = $_POST['donateTitle'];
    $Detils = $_POST['details'];
    $Province = $_POST['donateProvince'];
    $Required = $_POST['donateRequired'];
} else exit("คุณยังกรอกข้อมูลไม่ครบ!");

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["img"]["name"]) . " has been uploaded.";
        $sql = "update donate SET donateTitle='$Title', details='$Detils', donateProvince='$Province',donateRequired='$Required', Image='$myPhoto' WHERE donateID=$id";
    } else {
        //echo "Sorry, there was an error uploading your file.";
        $sql = "update donate SET donateTitle='$Title', details='$Detils', donateProvince='$Province',donateRequired='$Required', Image='$imgHidden' WHERE donateID=$id";
    }
}

if ($conn->query($sql) === TRUE) {
    header('LOCATION:myPost.php');
} else {
    echo $sql;
}





$conn->close();
