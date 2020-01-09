<?php
        include("connectDB.php");

        $donateTitle = $_GET['donateTitle'];
        $province = $_GET['province'];
       
        if($province=="0"){
            $sql = "SELECT donateID,details,donateRequired,donate.Image as DImage,organization.Image as OImage,donate.organizationID as OrganizationID, organization.firstname as fname,organization.lastname as lname,donateTitle
            ,donateProvince
            FROM donate
            join organization 
            on donate.organizationID = organization.organizationID
            WHERE  donate.donateTitle like '%$donateTitle%' ";

        }else{
            $sql = "SELECT donateID,details,donateRequired,donate.Image as DImage,organization.Image as OImage,donate.organizationID as OrganizationID, organization.firstname as fname,organization.lastname as lname,donateTitle
            ,donateProvince
            FROM donate
            join organization 
            on donate.organizationID = organization.organizationID
            WHERE  donate.donateTitle like '%$donateTitle%' AND donate.donateProvince ='$province' ";


        }

        
        $rs = $conn->query($sql);
        
        if($rs->num_rows > 0){
        while ($row = $rs->fetch_assoc()) {
            $sql2 = "SELECT SUM(donateMoney) as sumDonate
                        FROM donate
                        join organization 
                        on donate.organizationID = organization.organizationID
                        join donateDetails 
                        on donateDetails.donateID = donate.donateID
                        WHERE donate.donateID =".$row['donateID']."";

                        $rs2 = $conn->query($sql2);
                        $row2 = $rs2->fetch_assoc();
                        if($row2['sumDonate'] < $row['donateRequired']){
                            $presen = $row2['sumDonate']/($row['donateRequired']/100);
                        }else{
                            $presen = 100;
                        }
            $jsonDonate[] = array(
                'donateID' => $row["donateID"],
                'details' => $row["details"],
                'donateRequired' => $row["donateRequired"],
                'DImage' => $row["DImage"],
                'OImage' => $row["OImage"],
                'OrganizationID' => $row["OrganizationID"],
                'fname' => $row["fname"],
                'lname' => $row["lname"],
                'donateTitle' => $row["donateTitle"],
                'donateProvince' => $row["donateProvince"],
                'sumDonate' => $row2["sumDonate"],
                'presen' => $presen
        
            );
        }
        $jsonDonateEn =  json_encode($jsonDonate, JSON_UNESCAPED_UNICODE);

        if (is_null($jsonDonateEn)) {
        } else {
            echo $jsonDonateEn;
        }

    }else{
        $jsonDonateEn=0;
        echo $jsonDonateEn;
    }
  
       
?>