<?php
    $servername = "localhost";
    $user = "root";
    $passw = "";
    $database = "winerydatabase";

    $conn = mysqli_connect($servername, $user, $passw, $database);

    if(!$conn) {
        die("Connection failed! :".mysqli_connect_error());
    }
?>
