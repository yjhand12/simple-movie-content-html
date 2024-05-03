<?php
$host = "localhost";
$database = "web_anime";
$username = "root";
$password = "";

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Koneksi Database gagal: " . mysqli_connect_error());
}
?>
