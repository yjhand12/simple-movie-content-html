<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memastikan data yang dikirimkan benar
    $anime_id = $_POST['id'];
    $title = $_POST['title'];
    $japanese_title = $_POST['japanese_title'];
    $sinopsis = $_POST['sinopsis'];
    $videos = $_POST['videos'];

    $query = "UPDATE anime_list SET title='$title', japanese_title='$japanese_title', sinopsis='$sinopsis', videos='$videos' WHERE id=$anime_id";

    if (mysqli_query($connection, $query)) {
        header("Location: list_anime.php");
        exit();
    }
}
?>
