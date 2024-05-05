<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memastikan data yang dikirimkan benar
    $anime_id = $_POST['id'];
    $title = $_POST['title'];
    $japanese_title = $_POST['japanese_title'];
    $sinopsis = $_POST['sinopsis'];
    $videos = $_POST['videos'];

    // Lakukan sanitasi input untuk mencegah serangan SQL injection
    $anime_id = mysqli_real_escape_string($connection, $anime_id);
    $title = mysqli_real_escape_string($connection, $title);
    $japanese_title = mysqli_real_escape_string($connection, $japanese_title);
    $sinopsis = mysqli_real_escape_string($connection, $sinopsis);
    $videos = mysqli_real_escape_string($connection, $videos);

    // Query untuk mengupdate data anime
    $query = "UPDATE anime_list SET title='$title', japanese_title='$japanese_title', sinopsis='$sinopsis', videos='$videos' WHERE id=$anime_id";

    if (mysqli_query($connection, $query)) {
        // Jika query berhasil dieksekusi, redirect ke halaman list anime
        header("Location: list_anime.php");
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error updating record: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
