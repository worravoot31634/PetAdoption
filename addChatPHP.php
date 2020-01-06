<?php

include 'connectDB.php';


$toUserID = $_POST['toUserID'];
$fromUserID = $_POST['fromUserID'];
$message = $_POST['message'];

$sql ="INSERT INTO chat (toUserID,fromUserID,message) VALUES(" . $toUserID . "," . $fromUserID . ",'" . $message."')";
$rs=$conn->query($sql); 

$conn->close();

?>