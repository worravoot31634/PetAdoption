<?php

include "connectDB.php";

$nameOrgan = $_POST["nameOrgan"];
$usernameOrgan = $_POST["usernameOrgan"];
$passwordOrgan = $_POST["passwordOrgan"];
$emailOrgan = $_POST["emailOrgan"];
$phoneOrgan = $_POST["phoneOrgan"];
$addressOrgan = $_POST["addressOrgan"];
$fileOrganName = $_FILES["fileOrgan"]["name"];


if ($fileOrgan = $_FILES["fileOrgan"]["error"] <= 0) {


    $sqlAccount = "INSERT INTO  account (username,password,roles,statusLogin) VALUES('" . $usernameOrgan . "','" . $passwordOrgan . "','organization',0)";
    if ($conn->query($sqlAccount) === TRUE) {
        $sqlMax = "SELECT * FROM account ORDER BY accountID DESC LIMIT 0,1";

        $res = $conn->query($sqlMax);
        while ($row = $res->fetch_assoc()) {
            $maxID = $row["accountID"];
        }

        $sql = "INSERT INTO organization (firstname,email,phoneNumber,address,Image,accountID) VALUES ('" . $nameOrgan . "','" . $emailOrgan . "','" . $phoneOrgan . "','" . $addressOrgan . "','" . $fileOrganName . "'," . $maxID . ")";

        if ($conn->query($sql) === TRUE) {
            move_uploaded_file($_FILES["fileOrgan"]["tmp_name"], "./Images/" . $_FILES["fileOrgan"]["name"]);
            header("Location: adminRegis.php");
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
