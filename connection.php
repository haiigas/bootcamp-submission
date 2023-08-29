<?php
    $servername = "localhost";
    $username = "root";
    $password = "kampleng99";
    $dbname = "bootcamp";

    // create db connection
    $db = mysqli_connect($servername, $username, $password, $dbname);

    if (!$db) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>