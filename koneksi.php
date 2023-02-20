<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "officium";

    $conn = new mysqli($server, $username, $password, $database) or die ("Gagal masuk database");

    if(!$conn) {
        die("koneksi gagal : " . mysqli_connect_error());
    }else{
        echo "koneksi berhasil";
    }
?>
