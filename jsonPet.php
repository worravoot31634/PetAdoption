<?php

include('connectDB.php');




//echo $_GET["textSearch"];
if (is_null($_GET["textSearch"])) {
    //echo "null";
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2";
} else {
    //  echo "not null";
    $textSearch = $_GET["textSearch"];
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE  pet.petStatus != 2 and  pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'  or member.firstname LIKE '%" . $textSearch . "%'";
}

//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $jsonPetArr[] = array(
            'petID' => $row["petID"],
            'type' => $row["type"],
            'specy' => $row["species"],
            'province' => $row["province"],
            'phone' => $row["phoneNumber"],
            'details' => $row["details"],
            'petStatus' => $row["petStatus"],
            'Image' => $row["Image"],
            'firstname' => $row["firstname"],
            'lastname' => $row["lastname"],
            'memImage' => $row["memImage"]
        );
    }
}

$jsonPetArrEn =  json_encode($jsonPetArr, JSON_UNESCAPED_UNICODE);

if (is_null($jsonPetArrEn)) {
} else {
    echo $jsonPetArrEn;
}
