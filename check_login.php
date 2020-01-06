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
        header("Location: homeLogin.php");
    } else {
        $_SESSION['message'] = 'Login Fail';
        header("Location: login.php");
    }
    $conn->close();
    ?>