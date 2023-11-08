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
?>

<section class="homepage-section">
    <div class="homepage-div">
        <p>
            <?php echo "Hello, ".$_SESSION['mail']."! <br />".
                       "Search for the wine you want to buy in the form above. <br />".
                       "Type 'all' in the name box to search all wines in the catalogue. <br />".
                       "We grant you the best among the best!"; ?>

        </p>
    </div>
    <div class="homepage-div-img">
        <img src="../resources/party_popper.gif" class="homepage-img-popper" alt="" />
        <img src="../resources/pouring_wine.gif" class="homepage-img" alt="" />
        <img src="../resources/party_popper.gif" class="homepage-img-popper" alt="" />
    </div>
</section>
