<section class="cart-section">
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
                
        if(!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        foreach ($_SESSION['cart'] as $wine => $qty) {
        $wnm = substr($wine, 0, strlen($wine)-4);
        $wyr = substr($wine, strlen($wine)-4, strlen($wine));
        $icoName = "../resources/genericIco2.png";
        if ($wnm == "Lambrusco") { $icoName = "../resources/lambruscoIco.png"; }
        elseif ($wnm == "Gutturnio") { $icoName = "../resources/gutturnioIco.png"; }
        elseif ($wnm == "Malvasia") { $icoName = "../resources/malvasiaIco.png"; }
        elseif ($wnm == "Bonarda") { $icoName = "../resources/bonardaIco.png"; }
        elseif ($wnm == "Franciacorta") { $icoName = "../resources/franciacortaIco.png"; }
        elseif ($wnm == "Chianti") { $icoName = "../resources/chiantiIco.png"; } ?>
        <div class="cart-div">
            <img src=<?php echo $icoName; ?> style="height: 100%; margin: 1px 15px 1px 2px;" alt="Image" />
            <div class="cart-label">
                <p class="cart-details">
                    <?php echo "Wine: ".$wnm." |".str_repeat('&nbsp;', 5).
                               "Year: ".$wyr." |".str_repeat('&nbsp;', 5)."Quantity: ".$qty; ?>
                </p>
            </div>
        </div>
    <?php } ?>
    <div class="cart-div2">
        <form action="buyCart.php" name="buyCart-form" method="post">
            <input type="submit" name="submit-buy" class="cart-button" value="Buy"/>
        </form>
        <input type="button" name="clearCart" class="cart-button" value="Clear Cart"
        onclick="location.href='clearCart.php'" />
    </div>
</section>
