<?php
    if (isset($_POST["submitLogin"])){
        require "connect.php";

        $username = $_POST["username"];
        $password = $_POST["password"];
        $username = trim($username);

        $query = "SELECT user.password FROM user WHERE user.mail='$username' LIMIT 1";
        $result = mysqli_query($conn, $query);

        $passw_database = mysqli_fetch_all($result);
        if($passw_database == null) {
            header("Location: loginPage.php?error=MailDoesntExists");
            exit();
        }
        else {
            $password_to_check = $passw_database[0][0];
            if(!($password_to_check == $password)) {
                header("Location: loginPage.php?error=WrongPassw");
                exit();
            }
            else {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION["mail"] = $_POST["username"];
                header("Location: userPage.php");
                exit();
            }
        }

        mysqli_free_result($result);
        mysqli_close($conn);
    }
?>
