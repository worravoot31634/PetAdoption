<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

include 'connectDB.php';


    $activityID = $_POST["activityID"];
    

    
    $sqlDelete = "DELETE FROM activity WHERE activityID = $activityID";

    $result = $conn->query($sqlDelete);

    
    echo true;



   

?>