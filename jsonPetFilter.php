<?php

include('connectDB.php');


$typePetSelect = $_GET["typePet"];
$speciesSelect  = $_GET["species"];
$provinceSelect  = $_GET["province"];
$fromSelect  = $_GET["from"];
$textSearch = $_GET["text"];

if ($typePetSelect == "") {
    $typePetSelect = "''";
}
if ($speciesSelect == "") {
    $speciesSelect = "''";
}
if ($provinceSelect == "") {
    $provinceSelect = "''";
}
if ($fromSelect  == "") {
    $fromSelect  = "''";
}
if ($textSearch == "") {
    $textSearch = "''";
}

if ($typePetSelect != "''" && $speciesSelect != "''" && $speciesSelect != "ทั้งหมด" && $provinceSelect == "''" && $fromSelect == "''") {
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and (((pet.type='" . $typePetSelect . "' and pet.species = '" . $speciesSelect . "') or pet.province = '" . $provinceSelect . "' or account.roles='" . $fromSelect . "') or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
} else if ($typePetSelect != "''" && ($speciesSelect == "''" || $speciesSelect == "ทั้งหมด") && $provinceSelect != "''" && $fromSelect == "''") {
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and (((pet.type='" . $typePetSelect . "'  and pet.province = '" . $provinceSelect . "') or account.roles='" . $fromSelect . "') or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
    //jsonPetFilter.php?typePet=หมา&species=&province=กรุงเทพมหานคร&from=&text=
    // $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and (((pet.type='" . $typePetSelect . "' and pet.species = '" . $speciesSelect . "' and pet.province = '" . $provinceSelect . "') or account.roles='" . $fromSelect . "') or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";

} else if ($typePetSelect != "''" && $speciesSelect != "''" && $provinceSelect != "''" && $fromSelect != "''" && $textSearch == "''") {
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and (((pet.type='" . $typePetSelect . "' and pet.species = '" . $speciesSelect . "' and pet.province = '" . $provinceSelect . "' and account.roles='" . $fromSelect . "')) or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
} else if ($typePetSelect != "''" && $speciesSelect != "''" && $provinceSelect != "''" && $fromSelect != "''" && $textSearch != "''") {
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and (((pet.type='" . $typePetSelect . "' and pet.species = '" . $speciesSelect . "' and pet.province = '" . $provinceSelect . "' and account.roles='" . $fromSelect . "')) or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
} else if ($typePetSelect != "''" && $speciesSelect == "''" && $provinceSelect == "''" && $fromSelect == "''" && $textSearch == "''") {
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and ((pet.type='" . $typePetSelect . "' or pet.species = '" . $speciesSelect . "' or pet.province = '" . $provinceSelect . "' or account.roles='" . $fromSelect . "') or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
} else if ($typePetSelect == "''" && $speciesSelect == "''" && $provinceSelect != "''" && $fromSelect == "''" && $textSearch == "''") {
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and ((pet.type='" . $typePetSelect . "' or pet.species = '" . $speciesSelect . "' or pet.province = '" . $provinceSelect . "' or account.roles='" . $fromSelect . "') or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
} else if ($typePetSelect == "''" && $speciesSelect == "''" && $provinceSelect == "''" && $fromSelect != "''" && $textSearch == "''") {
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and ((pet.type='" . $typePetSelect . "' or pet.species = '" . $speciesSelect . "' or pet.province = '" . $provinceSelect . "' or account.roles='" . $fromSelect . "') or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
} else if ($typePetSelect == "''" && $speciesSelect == "''" && $provinceSelect == "''" && $fromSelect == "''" && $textSearch != "''") {
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and ((pet.type='" . $typePetSelect . "' or pet.species = '" . $speciesSelect . "' or pet.province = '" . $provinceSelect . "' or account.roles='" . $fromSelect . "') or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
} else if ($typePetSelect != "''" && $speciesSelect == "''" && $provinceSelect != "''" && $fromSelect != "''" && $textSearch == "''") {

    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and (((pet.type='" . $typePetSelect . "' and pet.province = '" . $provinceSelect . "'and account.roles='" . $fromSelect . "') or pet.species = '" . $speciesSelect . "' ) or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
} else if ($typePetSelect != "''" && $speciesSelect == "''" && $provinceSelect != "''" && $fromSelect == "''") {

    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and (((pet.type='" . $typePetSelect . "' and pet.province = '" . $provinceSelect . "') or pet.species = '" . $speciesSelect . "'or account.roles='" . $fromSelect . "' ) or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
} else if ($typePetSelect != "''" && $speciesSelect == "''" && $provinceSelect == "''" && $fromSelect != "''") {
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and (((pet.type='" . $typePetSelect . "' and account.roles='" . $fromSelect . "') or pet.species = '" . $speciesSelect . "'or pet.province = '" . $provinceSelect . "' ) or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
} else if (($typePetSelect != "''" && $typePetSelect != "ทั้งหมด") && ($speciesSelect === "ทั้งหมด") && $provinceSelect != "''") {

    //jsonPetFilter.php?typePet=แมว&species=ทั้งหมด&province=&from=&text=
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and pet.type='" . $typePetSelect . "'";
} else if ($typePetSelect == "''" && $speciesSelect == "''" && $speciesSelect != "ทั้งหมด" && $provinceSelect != "''" && $fromSelect == "''") {
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and pet.province='" . $provinceSelect . "'";
} else if ($typePetSelect != "''" && ($speciesSelect == "''" || $speciesSelect == "ทั้งหมด") && $provinceSelect != "''" && $fromSelect == "''" && $textSearch == "''") {

    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and (((pet.type='" . $typePetSelect . "' and pet.province = '" . $provinceSelect . "') or account.roles='" . $fromSelect . "' or pet.species = '" . $speciesSelect . "' ) or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
} else if ($typePetSelect != "''" && ($speciesSelect != "''" || $speciesSelect == "ทั้งหมด") && $provinceSelect != "''" && $fromSelect == "''") {
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and (((pet.type='" . $typePetSelect . "' and pet.species = '" . $speciesSelect . "' and pet.province = '" . $provinceSelect . "') or account.roles='" . $fromSelect . "') or (pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'))";
} else if ($typePetSelect != "''" && $speciesSelect == "''" && $provinceSelect == "''" && $fromSelect == "''" && $textSearch != "''") {

    // jsonPetFilter.php?typePet=หมา&species=&province=&from=&text=u
    $sql = "SELECT pet.petID,pet.type,pet.species,pet.province,pet.phoneNumber,pet.details,pet.petStatus,pet.Image,member.firstname,member.lastname,member.Image as memImage FROM pet JOIN account ON (pet.posterID = account.accountID) JOIN member ON member.accountID = account.accountID  WHERE pet.petStatus != 2 and pet.type='" . $typePetSelect . "' or ( pet.type LIKE '%" . $textSearch . "%' or pet.species LIKE '%" . $textSearch . "%' or pet.province LIKE '%" . $textSearch . "%' or account.roles LIKE '%" . $textSearch . "%'or member.firstname LIKE '%" . $textSearch . "%')";
}



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
} else {
    $jsonPetArr[] = array();
}
$jsonPetArrEn =  json_encode($jsonPetArr, JSON_UNESCAPED_UNICODE);
echo $jsonPetArrEn;
