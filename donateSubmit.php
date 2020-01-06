<?php

include("connectDB.php");

    $donate=$_POST["donate"];
    echo $donate;
    $name=$_POST["name"];
    $creditCard=$_POST["creditCard"];
    $CVV=$_POST["CVV"];
    $memberID=$_POST["memberID"];
    $donateID=$_POST["donateID"];
    $sqlInsert = "INSERT INTO donateDetails (donateMoney,donaterName,cardID,cvv,memberID,donateID)
    VALUES(' $donate','$name'.'$creditCard','$CVV','$memberID','$donateID')";

    $rsInsert = $conn->query($sqlInsert);
?>