<?php

include 'connectDB.php';



$firstname = $_POST['name'];
$lastname = $_POST['surname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$myPhoto = $_FILES["myPhoto"]["name"];
$accountID = null;



//Upload Files
$target_dir = "Images/";
$target_file = $target_dir . basename($_FILES["myPhoto"]["name"]);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["myPhoto"]["tmp_name"]);
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
    if (move_uploaded_file($_FILES["myPhoto"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["myPhoto"]["name"]). " has been uploaded.";
        
        header('Location:register.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




//Add Account Table
$sqlAccount ="INSERT INTO account (username,password,roles,statusLogin)
 VALUES('" . $username . "','" . $password . "','member',0)";

$rs=$conn->query($sqlAccount); 

//Select Max of AccountID
$sqlAccount ="SELECT MAX(accountID) AS accountID FROM account";
$rs=$conn->query($sqlAccount); 
while($row = $rs->fetch_assoc()) {
    $accountID = $row['accountID'];
}

//Add member able
$sqlMember  ="INSERT INTO member (firstname,lastname,email,phoneNumber,Image,accountID) 
VALUES('" . $firstname . "',
'" . $lastname . "',
'" . $email ."',
'" . $phone ."',
'" . $myPhoto . "',
" . $accountID . ")";

$rs=$conn->query($sqlMember); 

$conn->close();




?>