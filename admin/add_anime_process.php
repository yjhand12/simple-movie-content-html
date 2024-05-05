<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $japanese_title = mysqli_real_escape_string($connection, $_POST['japanese_title']);
    $sinopsis = mysqli_real_escape_string($connection, $_POST['sinopsis']);
    $videos = mysqli_real_escape_string($connection, $_POST['videos']);

    $target_dir = "../assets/img/";
    $image_hash = hash('sha256', basename($_FILES["image"]["name"]) . time());
    $imageFileType = strtolower(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION));
    $target_file = $target_dir . $image_hash . '.' . $imageFileType;
    $success = 1;

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        $success = 1;
    } else {
        echo "<script>window.alert('File bukan gambar.');</script>";
        $success = 0;
    }

    if ($_FILES["image"]["size"] > 500000) {
        echo "<script>window.alert('Maaf, file gambar terlalu besar.');</script>";
        $success = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "webp" ) {
        echo "<script>window.alert('Maaf, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.');</script>";
        $success = 0;
    }

    if ($success == 0) {
        echo "<script>window.alert('Maaf, file tidak dapat diupload.');</script>";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

            $query = "INSERT INTO anime_list (title, japanese_title, sinopsis, image, videos)
            VALUES ('$title', '$japanese_title', '$sinopsis', '$image_hash.$imageFileType', '$videos')";

            if (mysqli_query($connection, $query)) {
                
                header("Location: list_anime.php");
                exit();
            } else {
                echo "<script>window.alert('Error: " . $query . "<br>" . mysqli_error($connection) . "');</script>";
            }
        } else {
            echo "<script>window.alert('Maaf, terjadi kesalahan saat mengupload file.');</script>";
        }
    }
}
?>
