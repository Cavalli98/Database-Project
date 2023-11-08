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

    $wn = $_GET["wineNameAdd"];
    $wy = $_GET["wineYearAdd"];
    $wq = $_GET["wineqty"];
    if($wq == 0) {
    header("Location: userPage.php?winename=".$_GET["wineNameSearched"].
    "&wineyear=".$_GET["wineYearSearched"].
    "&submit-search=".$_GET["submitSearched"].
    "&error=InvalidQuantity");
    exit();
    }
    else {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        if (empty($_SESSION['cart'][$wn.$wy]) || !isset($_SESSION['cart'][$wn.$wy])) {
            $_SESSION['cart'][$wn.$wy] = $wq;
        }
        else{
            $_SESSION['cart'][$wn.$wy] = $wq + $_SESSION['cart'][$wn.$wy];
        }
        header("Location: userPage.php?winename=".$_GET["wineNameSearched"].
        "&wineyear=".$_GET["wineYearSearched"].
        "&submit-search=".$_GET["submitSearched"]);
        exit();
    }
?>
