<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

include 'connectDB.php';


    $petID = $_POST["petID"];
    

    
    $sqlDelete = "DELETE FROM pet WHERE petID = $petID";

    $result = $conn->query($sqlDelete);

    
    echo true;



   

?>