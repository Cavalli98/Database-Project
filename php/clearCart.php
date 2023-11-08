<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['cart'] = array();
    header("Location: userPage.php?message=Cart");
    exit();
?>
