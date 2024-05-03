<?php
include '../koneksi.php';

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $login);

    if ($result) {
        if(mysqli_num_rows($result) > 0) {
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: login-admin.php");
            exit();
        }
    } else {
        echo "Error: " . mysqli_error($database);
    }
}
?>