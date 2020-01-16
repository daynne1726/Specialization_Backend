<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        $_SESSION['username'] = $_POST['email'];
    } else {
        session_unset();
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pntraining";
    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $login = false;
    if(isset($_POST['Login'])) {
        $email = $_POST['email'];
        $pass = $_POST['psw'];
        $query = "SELECT Email, Password FROM data WHERE Email='".$email."'";
        if($result = $conn->query($query)) {
            if (mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_array($result);
                if($user_data['Email'] === $email && $user_data['Password'] === $pass) {
                    $login = true;
                    
                    echo $login;
                    header("Location:Dashboard.php");
                }
                else {
                    $login = false;
                    echo "Error 404!";
                }
            } 
            else {
                echo "No result found!<br>We are not able to find your account. Try loging in again";
                header("Location:Login.php");
            }
        }
    }
    // if($login) {
    //     header("Location:SignUp.php");
    // }
    exit();
    // header("Location: Auth_user.php");
    $conn->close();
?>