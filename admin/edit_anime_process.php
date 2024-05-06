<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anime_id = $_POST['id'];
    $title = $_POST['title'];
    $japanese_title = $_POST['japanese_title'];
    $genre = $_POST['genre'];
    $sinopsis = $_POST['sinopsis'];
    $image = $_POST['image'];
    $videos = $_POST['videos'];

    $query = "UPDATE anime_list SET title='$title', japanese_title='$japanese_title', genre='$genre', sinopsis='$sinopsis', image='$image', videos='$videos' WHERE id=$anime_id";

    if (mysqli_query($connection, $query)) {
        header("Location: list_anime.php");
        exit();
    }
}
?>
