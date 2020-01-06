 <?php
// Start the session
session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "petadoption";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM account where username = '" . $_POST["username"] . "'and password = '" . $_POST["password"] . "'";
    $result = $conn->query($sql);
    echo "SELECT * FROM account where username = '" . $_POST["username"] . "'and password = '" . $_POST["password"] . "'";
    if ($result->num_rows > 0) {
        if($result["roles"]=="member"){
            $sqlMember = "SELECT * FROM member where accountID = '".$result["accountID"]."'";
            $resultMember = $conn->query($sqlMember);
                $_SESSION['accountID'] = $resultMember["accountID"];
                $_SESSION['fname'] = $resultMember["firstname"];
                $_SESSION['lname'] = $resultMember["lastname"];
            header("Location: homeLogin.php");

        }elseif($result["roles"]=="organization"){
            $sqlOrganization = "SELECT * FROM organization where accountID = '".$result["accountID"]."'";
            $resultOrganization = $conn->query($sqlMember);
                $_SESSION['accountID'] = $resultMember["accountID"];
                $_SESSION['fname'] = $resultMember["firstname"];
                $_SESSION['lname'] = $resultMember["lastname"];
            header("Location: homeOrganization.php");

        }elseif($result["roles"]=="admin"){
            $sqlMember = "SELECT * FROM admin where accountID = '".$result["accountID"]."'";
            $resultAdmin = $conn->query($sqlMember);
                $_SESSION['accountID'] = $resultMember["accountID"];
                $_SESSION['fname'] = $resultMember["firstname"];
                $_SESSION['lname'] = $resultMember["lastname"];
            header("Location: adminHome.php");
        }
        
    } else {
        $_SESSION['message'] = 'Login Fail';
        header("Location: login.php");
    }
    $conn->close();
    ?>