<?php
	session_start();

	include 'connectDB.php';


	$sqlUpdateStatusLogin = $conn->query("UPDATE account 
	SET statusLogin = 0 
	WHERE accountID = " . $_SESSION['userAccountID'] ); 

	session_unset();
	session_destroy();
	
    $conn->close();
	header("Location:login.php");
?>