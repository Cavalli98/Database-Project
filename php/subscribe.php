<?php
    if (isset($_POST["submitLogin"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            header("Location: subscribePage.php?error=UncorrectMail");
            exit();
        }
        elseif(!preg_match("/[a-zA-Z0-9\.\-]{4,16}/", $password)) {
            header("Location: subscribePage.php?error=UncorrectPassw");
            exit();
        }
        else {
            require "connect.php";

            $sql = "SELECT user.password FROM user WHERE user.mail='$username' LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $passw_database = mysqli_fetch_all($result);
            if(!empty($passw_database)) {
                header("Location: subscribePage.php?error=MailAlreadyExists");
                exit();
            }
            else {
                $query = "INSERT INTO user (mail, password) VALUES ('$username', '$password')";

                if (!mysqli_query($conn, $query)) {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
        }

        mysqli_close($conn);
    }
?>
