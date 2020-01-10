<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

include 'connectDB.php';

$sqlCheckChat = "SELECT * FROM chat WHERE toUserID = " . $_SESSION["userAccountID"] . "
     OR FromUserID = " . $_SESSION["userAccountID"] . " ";

     

     $result = $conn->query($sqlCheckChat);
     $count=$result->num_rows;

     if (mysqli_num_rows($result)==0) { 
        header("Location:ChatEmptyUser.php");
    }else{

        header("Location:chatMessageLogin.php");
    }



?>