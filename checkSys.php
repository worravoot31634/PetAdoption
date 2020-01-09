<?php

include "connectDB.php";
$id = $_POST["id"];

$sql = "UPDATE account SET statusLogin = 0 WHERE accountID = '" . $id . "'";

if ($conn->query($sql) === TRUE) {
    echo "successfully";
} else {
    echo "error";
}
