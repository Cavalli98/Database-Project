<?php
    /* LOGIN NEEDED ---------- */
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['mail'])) {
        header("Location: loginPage.php?error=LoginNeeded");
        exit();
    }
    /* ----------------------- */

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (empty($_SESSION['cart'])) {
        header("Location: userPage.php?message=Cart");
        exit();
    }
    else {
        require "connect.php";


        $err = "";
        foreach ($_SESSION['cart'] as $wine => $qty) {
            $wnm = substr($wine, 0, strlen($wine)-4);
            $wyr = substr($wine, strlen($wine)-4, strlen($wine));

            $query = "SELECT count(*) FROM bottle WHERE name='$wnm' AND year='$wyr' GROUP BY name, year";
            $result = mysqli_query($conn, $query);
            $n = mysqli_fetch_all($result);

            if(empty($n[0]) || empty($n[0][0])){
                $_SESSION['cart'] = array();
                $err = "DatabaseError";
                header("Location: userPage.php?message=Cart&error=".$err);
                exit();
            }
            elseif ($n[0][0] < $qty) {
                $err = "TooManyBottlesSelected";
                $qty = $n[0][0];
            }

            $query = "DELETE FROM bottle WHERE name='$wnm' AND year='$wyr' LIMIT $qty";
            if (!mysqli_query($conn, $query)) {
                $_SESSION['cart'] = array();
                $err = "DatabaseError";
                header("Location: userPage.php?message=Cart&error=".$err);
                exit();
            }
            else {
                $mail = $_SESSION['mail'];
                $query = "INSERT INTO history(mail, name, year, quantity, history.date) VALUES ('$mail', '$wnm', '$wyr', '$qty', CURRENT_TIMESTAMP)";

                if (!mysqli_query($conn, $query)) {
                    $err = $err.".ErrorAddingHistory".mysqli_error($conn);
                }
            }
        }
        $_SESSION['cart'] = array();
        header("Location: userPage.php?message=History&display=PurchaseSuccessful&error=".$err);
        exit();
    }
?>
