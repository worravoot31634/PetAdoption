<?php 

include "connectDb.php";

$accountID =  $_GET["id"];

$sql = "SELECT roles FROM account WHERE accountID = '$accountID'";
$res = $conn->query($sql);
$row = $res->fetch_assoc();

if($row["roles"] == "member"){
    $sqlMem = "DELETE FROM member WHERE accountID='$accountID'";
    $sqlAccount = "DELETE FROM account WHERE accountID='$accountID'";
    //$sqlPost = "DELETE FROM";
    if($conn->query($sqlMem)===TRUE){
        if($conn->query($sqlAccount)===TRUE){
            header("Location: adminCheckSys.php");
        }
    }
}else if($row["roles"] == "organization"){
    $sqlOrgan = "DELETE FROM organization WHERE accountID='$accountID'";
    $sqlAccount = "DELETE FROM account WHERE accountID='$accountID'";
    if($conn->query($sqlOrgan)===TRUE){
        if($conn->query($sqlAccount)===TRUE){
            header("Location: adminCheckSys.php");
        }
    }
}
