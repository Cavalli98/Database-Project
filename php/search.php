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

    if (isset($_GET["submit-search"])) {
        require "connect.php";

        $wname = $_GET["winename"];
        $wyear = $_GET["wineyear"];
        $query = "";
        if ($wyear == "" && trim(mb_strtolower($wname)) == "all") {
            $query = "SELECT name, year, count(*) FROM bottle GROUP BY name, year";
        }
        elseif ($wyear != "" && trim(mb_strtolower($wname)) == "all") {
            $query = "SELECT name, year, count(*) FROM bottle WHERE year='$wyear' GROUP BY name, year";
        }
        elseif ($wyear == "") {
            $query = "SELECT name, year, count(*) FROM bottle WHERE name='$wname' GROUP BY name, year";
        }
        else {
            $query = "SELECT name, year, count(*) FROM bottle WHERE name='$wname' AND year='$wyear' GROUP BY name, year";
        }

        $result = mysqli_query($conn, $query);
        $wines = mysqli_fetch_all($result);
        if(!isset($wines) || empty($wines)) {
            echo "Wine not available.";
        }
        else {
            //print_r($wines);
            //print_r($_SESSION['cart']);
        }
    }
?>

<section class="search-section">
    <?php foreach ($wines as $id => $wine) {
        $icoName = "../resources/genericIco.png";
        if ($wine[0] == "Lambrusco") { $icoName = "../resources/lambruscoIco.png"; }
        elseif ($wine[0] == "Gutturnio") { $icoName = "../resources/gutturnioIco.png"; }
        elseif ($wine[0] == "Malvasia") { $icoName = "../resources/malvasiaIco.png"; }
        elseif ($wine[0] == "Chianti") { $icoName = "../resources/chiantiIco.png"; }
        elseif ($wine[0] == "Bonarda") { $icoName = "../resources/bonardaIco.png"; }
        elseif ($wine[0] == "Franciacorta") { $icoName = "../resources/franciacortaIco.png"; } ?>
        <div class="wine-div">
            <img src=<?php echo $icoName; ?> style="width: 33%; margin: 2px 16% 2px 5%;" alt="Image" />
            <div class="wine-label">
                <p class="wine-details">
                    <?php echo $wine[0]."<br />".$wine[1]; ?>
                </p>
                <hr>
                <div class="wine-qty">
                    <form action="addToCart.php" method="get" name="wine-qty-form">
                        <select name="wineqty" class="wine-qty-list">
                            <option selected value="0">0</option>
                            <?php for ($i = 0; $i < $wine[2]; $i++) { ?>
                                <option value="<?php echo $i+1; ?>"><?php echo $i+1; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="wineNameAdd" value="<?php echo $wine[0]; ?>" />
                        <input type="hidden" name="wineYearAdd" value="<?php echo $wine[1]; ?>" />
                        <input type="hidden" name="wineNameSearched" value="<?php echo $wname; ?>" />
                        <input type="hidden" name="wineYearSearched" value="<?php echo $wyear; ?>" />
                        <input type="hidden" name="submitSearched" value="<?php echo ($_GET["submit-search"]); ?>" />
                        <input type="submit" value="add" style="font-size: 0.7em; margin-left: 0.5px;"/>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
</section>
