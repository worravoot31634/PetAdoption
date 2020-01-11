 <?php
    // Start the session
    session_start();

    include 'connectDB.php';

    $sql = "SELECT * FROM account where username = '" . $_POST["username"] . "' and password = '" . $_POST["password"] . "'";
    $rs = $conn->query($sql);

    echo '<pre>' . print_r($rs->num_rows, TRUE) . '</pre>';




    if ($rs->num_rows != 0) { //Check that it's have in DB or not
        while ($row = $rs->fetch_assoc()) {



            $_SESSION['username'] = $_POST["username"];
            $_SESSION['userAccountID'] = $row['accountID'];
            $_SESSION['roles'] = $row['roles'];
            $_SESSION['loginStatus'] = 1;
            switch ($row['roles']) {

                case "member":
                    $sqlMember = "SELECT * FROM member WHERE accountID = '" . $row["accountID"] . "'";
                    $rsMember = $conn->query($sqlMember);



                    while ($rowMember = $rsMember->fetch_assoc()) {



                        // get infomation from user device




                        $deviceInfo = $_POST["deviceInfo"];
                        echo $deviceInfo;
                        //  echo $deviceInfo;
                        //  echo $rowMember['accountID'];
                        //Update Login Status Online
                        $sqlUpdateStatusLogin = $conn->query("UPDATE account SET statusLogin = 1,deviceInfo = '$deviceInfo' WHERE accountID = " . $rowMember['accountID']);

                        $_SESSION['accountID'] = $rowMember['memberID'];
                        $_SESSION['UserFirstname'] = $rowMember['firstname'];
                        $_SESSION['UserLastname'] = $rowMember['lastname'];
                        $_SESSION['Image'] = $rowMember['Image'];
                        $_SESSION['deviceInfo'] = $deviceInfo;
                    }
                    // echo $_SESSION['deviceInfo'];
                    header("Location: homeLogin.php");
                    break;

                case "organization":



                    $sqlOrganize = "SELECT * FROM organization where accountID = '" . $row["accountID"] . "'";
                    $rsOrganize = $conn->query($sqlOrganize);

                    while ($rowrOrganize = $rsOrganize->fetch_assoc()) {

                        $deviceInfo = $_POST["deviceInfo"];

                        $sqlUpdateStatusLogin = $conn->query("UPDATE account SET statusLogin = 1,deviceInfo = '$deviceInfo' WHERE accountID = " . $rowrOrganize['accountID']);

                        $_SESSION['accountID'] = $rowrOrganize['organizationID'];
                        $_SESSION['UserFirstname'] = $rowrOrganize['firstname'];
                        $_SESSION['UserLastname'] = $rowrOrganize['lastname'];
                        $_SESSION['UserAddress'] = $rowrOrganize['address'];
                        $_SESSION['Image'] = $rowrOrganize['Image'];
                        // $_SESSION['deviceInfo'] = $rowrOrganize['deviceInfo'];
                    }


                    header("Location: homeOrganization.php");
                    break;

                case "admin":



                    $sqlAdmin = "SELECT * FROM admin where accountID = '" . $row["accountID"] . "'";
                    $rsAdmin = $conn->query($sqlAdmin);

                    while ($rowAdmin = $rsAdmin->fetch_assoc()) {

                        $_SESSION['accountID'] = $rowAdmin['adminID'];
                        $_SESSION['UserFirstname'] = $rowAdmin['firstname'];
                        $_SESSION['UserLastname'] = $rowAdmin['lastname'];
                        $_SESSION['Image'] = $rowAdmin['Image'];
                    }
                    header("Location: adminHome.php");
                    break;

                default:

                    break;
            }
        }
    } else {
        $_SESSION['message'] = 'Login Fail';
        header("Location: login.php");
    }

    echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';



    $conn->close();
    ?>