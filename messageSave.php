<?php

$sendId = $_POST["sendID"];
$recieverID = $_POST["reciever"];
$mess = $_POST["mess"];


include "connectDB.php";



$sql = "INSERT INTO chat (toUserID,fromUserID,message) VALUES('" . $sendId . "','" . $recieverID . "','" . $mess . "')";

if ($conn->query($sql) === TRUE) {
    echo "successfully";
} else {
    echo "error";
}
