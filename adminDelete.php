<?php 

include "connectDB.php";

$accountID =  $_GET["id"];

$sql = "SELECT roles FROM account WHERE accountID = '$accountID'";
$res = $conn->query($sql);
$row = $res->fetch_assoc();

if($row["roles"] == "member"){

    //DELETE MEMBER
    $sqlMem = "DELETE FROM member WHERE accountID='$accountID'";
    $sqlAccount = "DELETE FROM account WHERE accountID='$accountID'";
    $sqlMemPost = "DELETE FROM pet WHERE posterID = '$accountID'";
    $sqlMemChat = "DELETE FROM chat WHERE toUserId = '$accountID' OR fromUserID = '$accountID'";

    //SELECT
    $sqlCheckMemPost = "SELECT * FROM pet WHERE posterID = '$accountID'";
    $sqlCheckMemChat = "SELECT * FROM chat WHERE toUserID = '$accountID' OR fromUserID = '$accountID'";

    //EXCUTE SELECT QUERY
    $resultSelectMemPost = $conn->query($sqlCheckMemPost);
    $resultSelectMemChat = $conn->query($sqlCheckMemChat);

    //CHECK NUM ROW
    $rowMemPost = mysqli_num_rows($resultSelectMemPost); 
    $rowMemChat = mysqli_num_rows($resultSelectMemChat); 


    //$sqlPost = "DELETE FROM";
    if($conn->query($sqlMem)===TRUE){
        
        if($conn->query($sqlAccount)===TRUE){
           
            if($rowMemPost > 0){
                
                //DELETE POST MEMBER
                $conn->query($sqlMemPost);
            }
            if($rowMemChat > 0){
                
                
                //DELETE CHAT MEMBER
                $conn->query($sqlMemChat);
            }
            
        }

        


        //RETURN PAGE
        header("Location: adminCheckSys.php");
    }
}else if($row["roles"] == "organization"){

    //DELETE ORGANIZATION
    $sqlOrgan = "DELETE FROM organization WHERE accountID='$accountID'";
    $sqlAccount = "DELETE FROM account WHERE accountID='$accountID'";
    $sqlOrganPost = "DELETE FROM pet WHERE posterID = '$accountID'";
    $sqlOrganChat = "DELETE FROM chat WHERE toUserId = '$accountID' OR fromUserID = '$accountID'";

    //SELECT
    $sqlCheckOrganPost = "SELECT * FROM pet WHERE posterID = '$accountID'";
    $sqlCheckOrganChat = "SELECT * FROM chat WHERE toUserID = '$accountID' OR fromUserID = '$accountID'";

    //EXCUTE SELECT QUERY
    $resultSelectOrganPost = $conn->query($sqlCheckMemPost);
    $resultSelectOrganChat = $conn->query($sqlCheckMemChat);

    //CHECK NUM ROW
    $rowOrganPost = mysqli_num_rows($resultSelectOrganPost); 
    $rowOrganChat = mysqli_num_rows($resultSelectOrganChat); 




    if($conn->query($sqlOrgan)===TRUE){
        
        if($conn->query($sqlAccount)===TRUE){
           
            if($rowOrganPost > 0){
                
                //DELETE POST MEMBER
                $conn->query($sqlOrganPost);
            }
            if($rowOrganChat > 0){
                
                
                //DELETE CHAT MEMBER
                $conn->query($sqlOrganChat);
            }
            
        }




        //RETURN PAGE
        header("Location: adminCheckSys.php");
    }
}


