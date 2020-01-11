<?php
session_start();

include 'connectDB.php';


$sql = "UPDATE account 
SET statusLogin = 0 
WHERE accountID = '" . $_SESSION['userAccountID'] . "'";
$sqlUpdateStatusLogin = $conn->query($sql);
session_unset();
session_destroy();

$conn->close();
header("Location:login.php");
