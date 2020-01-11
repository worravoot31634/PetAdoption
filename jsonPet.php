<?php

include('connectDB.php');




//echo $_GET["textSearch"];
if (is_null($_GET["textSearch"])) {
    // echo "null";
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image as petImage,member.firstname as memFirstname,member.lastname,member.Image as memImage  , organ.firstname as organFirstname, organ.lastname,organ.Image as organImage FROM pet LEFT JOIN account ON (pet.posterID = account.accountID) LEFT JOIN member ON member.accountID = account.accountID LEFT JOIN organization as organ on account.accountID = organ.accountID WHERE pet.petStatus != 2";
} else {
    // echo "not null";
    $textSearch = $_GET["textSearch"];
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image as petImage,member.firstname as memFirstname,member.lastname,member.Image as memImage  , organ.firstname as organFirstname, organ.lastname,organ.Image as organImage FROM pet LEFT JOIN account ON (pet.posterID = account.accountID) LEFT JOIN member ON member.accountID = account.accountID LEFT JOIN organization as organ on account.accountID = organ.accountID  WHERE  pet.petStatus != 2 and  pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'  or member.firstname LIKE '%" . $textSearch . "%' or organ.firstname LIKE '%" . $textSearch . "%' ";
}

//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        if ($row["memImage"] == null && $row["memFirstname"] == null) {
            $userImage = $row["organImage"];
            $userFirstname = $row["organFirstname"];
        } else if ($row["organImage"] == null && $row["organFirstname"] == null) {
            $userImage = $row["memImage"];
            $userFirstname = $row["memFirstname"];
        }

        $jsonPetArr[] = array(
            'petID' => $row["petID"],
            'type' => $row["type"],
            'specy' => $row["species"],
            'province' => $row["province"],
            'phone' => $row["phoneNumber"],
            'details' => $row["details"],
            'petStatus' => $row["petStatus"],
            'Image' => $row["petImage"],
            'firstname' => $userFirstname,
            'memImage' => $userImage
        );
    }
} else {
    $jsonPetArr[] = array();
}

$jsonPetArrEn =  json_encode($jsonPetArr, JSON_UNESCAPED_UNICODE);

if (is_null($jsonPetArrEn)) {
} else {
    echo $jsonPetArrEn;
}
