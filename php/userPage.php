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
    
    $switcher = "Home";

    if (!empty($_GET["winename"])) {
        $switcher = "Search";
    }
    if(!empty($_GET['message'])) {
        if(trim(mb_strtoupper($_GET['message'])) == "CART") {
            $switcher = "Cart";
        }

        if(trim(mb_strtoupper($_GET['message'])) == "HISTORY") {
            $switcher = "History";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Taverna</title>
        <meta charset="utf-8" />
        <meta name="author" content="Dario Cavalli" />
        <meta name="description" content="Progetto di un sistema di vendita online di vini." />
        <meta name="viewport" content="width=device-width, initialscale=1.0" />
        <link rel="stylesheet" type="text/css" href="../css/userPageStyle.css" />
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            } ?>
        <?php include "header.html"; ?>
        <?php include "userPageHeader.php"; ?>

        <main>
            <?php
                switch ($switcher) {
                    case 'Home':
                        include "homepage.php";
                        break;
                    case 'Search':
                        echo "Results:";
                        include "search.php";
                        break;
                    case 'Cart':
                        echo "Here is your cart:";
                        include "cart.php";
                        break;
                    case 'History':
                        echo "Here is your history:";
                        include "history.php";
                        break;
                    default:
                        include "homepage.php";
                        break;
                }?>
        </main>
    </body>
</html>
