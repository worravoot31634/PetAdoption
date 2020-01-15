
<?php
// Start the session
session_start();
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
<?php
$myPhoto = $_FILES["img"]["name"];
$imgHidden = $_POST["imgHidden"];
$topic = $_POST["topic"];
$comment = $_POST["comment"];
$id = $_POST["id"];
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

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        $sqlUd = "UPDATE activity SET topic='" . $topic . "', details='" . $comment . "',Image='" . $myPhoto . "' WHERE activityID = '" . $id . "'";
        echo "The file " . basename($_FILES["img"]["name"]) . " has been uploaded.";
    } else {
        $sqlUd = "UPDATE activity SET topic='" . $topic . "', details='" . $comment . "',Image='" . $imgHidden . "' WHERE activityID = '" . $id . "'";
        // echo "Sorry, there was an error uploading your file.";
    }
}




/*if (($_POST["id"] <> "") && ($_POST["topic"] <> "") && ($_POST["comment"] <> "")) {

    $id = $_POST["id"];
    $Topic = $_POST["topic"];
    $Details = $_POST["comment"];
} else exit("คุณยังกรอกข้อมูลไม่ครบ!"); */


if ($conn->query($sqlUd) === TRUE) {
    header('LOCATION:myPost.php');
}

echo $sqlUd;

//$sql = "update activity SET topic='$Topic', details='$Details', Image='$myPhoto' WHERE activityID=$id";

//$rs = $conn->query($sql);



$conn->close();

?>
