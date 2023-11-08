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

    require "connect.php";

    $mail = $_SESSION['mail'];
    $query = "SELECT name, year, quantity, history.date FROM history WHERE mail='$mail' ORDER BY history.date";
    $result = mysqli_query($conn, $query);
    $harray = mysqli_fetch_all($result);

    if(empty($harray) || !isset($harray) || empty($harray[0])) {
        echo "<br /> You haven't bought anything yet!";
    }
?>
<section class="history-section">
    <?php
        $i = 0;
        foreach ($harray as $k1 => $value) {
            echo ++$i.") ";
            foreach ($value as $k2 => $detail) {
                if ($k2 == 2) {
                    echo " | Qty: ";
                }
                elseif ($k2 == 3) {
                    echo " || Date: ";
                }
                echo $detail." ";
            }
            echo "<br />";
        }
    ?>
    <p class="error-text">
        <?php
            if (isset($_GET['error'])) {
                echo $_GET['error'];
            }
        ?>
    </p>
</section>
