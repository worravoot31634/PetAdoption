<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

include 'connectDB.php';


    $petID = $_POST["petID"];
    $status = 0;

    
    $sqlCheck = "SELECT * FROM pet WHERE petID = " . $petID;

    $result = $conn->query($sqlCheck);

    while($row = $result->fetch_assoc()) {
        $status = $row["petStatus"];
    }


    if($status == 0){
        $sqlUpdate = "UPDATE pet SET petStatus = 1 WHERE petID = " . $petID;
    }else if($status == 1){
        $sqlUpdate = "UPDATE pet SET petStatus = 2 WHERE petID = " . $petID;
    }else if($status == 2){
        $sqlUpdate = "UPDATE pet SET petStatus = 0 WHERE petID = " . $petID;
    }


    $resultUpdate = $conn->query($sqlUpdate);
    echo true;



   

?>