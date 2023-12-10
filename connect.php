<?php
    $host = "localhost";
    $uname = "root";
    $pass = "";
    $db = "db_penyewaankamera";
    $conn = new mysqli($host, $uname, $pass, $db);

    mysqli_select_db($conn, $db);
?>