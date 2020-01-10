<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

include 'connectDB.php';


    $donateID = $_POST["donateID"];
    

    
    $sqlDelete = "DELETE FROM donate WHERE donateID = $donateID";

    $result = $conn->query($sqlDelete);

    
    echo true;



   

?>