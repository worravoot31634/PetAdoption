 <?php
// Start the session
session_start();

    include 'connectDB.php';

    $sql = "SELECT * FROM account where username = '" . $_POST["username"] . "' and password = '" . $_POST["password"] . "'";
    $rs = $conn->query($sql);
    echo $sql;

    while($row = $rs->fetch_assoc()) {

        $_SESSION['accountID'] = $row['accountID'];

            switch ($row['roles']) {

                case "member":
                    $sqlMember = "SELECT * FROM member WHERE accountID = '".$row["accountID"]."'";
                    $rsMember = $conn->query($sqlMember);

                    while($rowMember = $rsMember->fetch_assoc()) {

                        $_SESSION['memberID']= $rowMember['memberID'];
                        $_SESSION['UserFirstname'] = $rowMember['firstname'];
                        $_SESSION['UserLastname']= $rowMember['lastname'];
                        $_SESSION['Image']= $rowMember['Image'];
                        
                    }
                    header("Location: homeLogin.php");
                    break;

                case "organization":
                    $sqlOrganize = "SELECT * FROM organization where accountID = '".$row["accountID"]."'";
                    $rsOrganize = $conn->query($sqlOrganize);

                    while($rowrOrganize = $rsOrganize->fetch_assoc()) {

                        $_SESSION['organizationID']= $rowrOrganize['organizationID'];
                        $_SESSION['UserFirstname'] = $rowrOrganize['firstname'];
                        $_SESSION['UserLastname']= $rowrOrganize['lastname'];
                        $_SESSION['UserAddress']= $rowrOrganize['address'];
                        $_SESSION['Image']= $rowrOrganize['Image'];
                        
                    }
                    header("Location: homeOrganization.php");
                    break;

                case "admin":
                    $sqlAdmin = "SELECT * FROM admin where accountID = '".$result["accountID"]."'";
                    $rsAdmin= $conn->query($sqlAdmin);

                    while($rowAdmin = $rsAdmin->fetch_assoc()) {

                        $_SESSION['adminID']= $rowrOrganize['adminID'];
                        $_SESSION['UserFirstname'] = $rowrOrganize['firstname'];
                        $_SESSION['UserLastname']= $rowrOrganize['lastname'];
                        $_SESSION['Image']= $rowrOrganize['Image'];
                        
                    }
                    header("Location: adminHome.php");
                    break;
                    
                default:
                    $_SESSION['message'] = 'Login Fail';
                    header("Location: login.php");
                    break;

            }


    }

    echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';



    $conn->close();
    ?>