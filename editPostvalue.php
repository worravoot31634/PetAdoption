<?php

  include('connectDB.php');

$myPhoto = $_FILES["img"]["name"];

//Upload Files
$target_dir = "Images/";
$target_file = $target_dir . basename($_FILES["ima"]["name"]);
$uploadOk = 1;


$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
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
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




if (($_POST["id"] <> "") && ($_POST["topic"] <> "") && ($_POST["comment"] <> "") ) {

	    $id = $_POST["id"];
		$Topic = $_POST["topic"];
	    $Details = $_POST["comment"];


} else exit("คุณยังกรอกข้อมูลไม่ครบ!");

$sql="update activity SET topic='$Topic', details='$Details', Image='$myPhoto' WHERE activityID=$id";

$rs=$conn->query($sql);

header('LOCATION:myPost.php');

$conn->close();

?>
