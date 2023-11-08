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

<hr style="width: 95vw;"/>
<div class="upH">
    <p>Search: </p>
    <form action="userPage.php" class="upHForm" method="get">
        <input type="text" name="winename" class="upHForm-content" placeholder="Name" required />
        <input type="text" name="wineyear" class="upHForm-content" placeholder="Year" />
        <input type="submit" name="submit-search" class="upHForm-submit" value="Go!" />
    </form>
    <div class="dropdown">
        <span class="dropSpan">
            <p>
                Menu
            </p>
        </span>
        <div class="dropdown-content">
            <a href="userPage.php">
                <img src="..\resources\homepageLogo.png" class="dropdown-icon" alt="" />
                <span>Home</span>
            </a>
            <a href="userPage.php?message=Cart">
                <img src="..\resources\cartLogo.png" class="dropdown-icon" alt="" />
                <span id="bottles-in-cart">
                    <?php
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                        }
                        if (!isset($_SESSION['cart'])) {
                            echo "0";
                        }
                        else {
                            $cnt = 0;
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $cnt = $cnt + $value;
                            }
                            if ($cnt <= 9) {
                                ?><p style="padding-left: 2px;"><?php echo $cnt; ?> </p>
                                <?php
                            }
                            else {
                                echo $cnt;
                            }
                        }
                    ?>
                </span>
                <span>Cart</span>
            </a>
            <a href="userPage.php?message=History">
                <img src="..\resources\historyLogo.png" class="dropdown-icon" alt="" />
                <span>History</span>
            </a>
            <a href="logout.php">
                <img src="..\resources\logoutLogo.png" class="dropdown-icon" alt="" />
                <span>Logout</span>
            </a>
        </div>
    </div>
</div>
<hr style="width: 95vw;"/>
