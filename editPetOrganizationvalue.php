<?php
// Start the session
session_start();
$petID = $_POST['id'];
include 'connectDB.php';
$type = $_POST['type'];
$species = $_POST['species'];
$province = $_POST['province'];
$phoneNumber = $_POST['phoneNumber'];
$details = $_POST['details'];
$myPhoto = $_FILES["petPhoto"]["name"];
$imgHidden = $_POST["imgHidden"];
//Upload Files
$target_dir = "Images/";
$target_file = $target_dir . basename($_FILES["petPhoto"]["name"]);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["petPhoto"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["petPhoto"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["myPhoto"]["name"]) . " has been uploaded.";
        $sql = "UPDATE pet SET type = '" . $type . "', species='" . $species . "', province='" . $province . "',phoneNumber='" . $phoneNumber . "',details='" . $details . "',Image='" . $myPhoto . "' WHERE petID = '" . $petID . "'";
    } else {
        $sql = "UPDATE pet SET type = '" . $type . "', species='" . $species . "', province='" . $province . "',phoneNumber='" . $phoneNumber . "',details='" . $details . "',Image='" . $imgHidden . "' WHERE petID = '" . $petID . "'";
        // echo "Sorry, there was an error uploading your file.";
    }
}

if ($conn->query($sql) === TRUE) {
    header("Location: myPost.php");
} else {
    echo $sql;
}

$conn->close();
