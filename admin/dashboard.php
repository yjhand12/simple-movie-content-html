<?php
include '../koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <?php
    include_once 'page/sidebar.php';
    ?>
    <main>
        <?php
        include_once 'page/navbar.php'
        ?>
        <div class="container">
            <div class="admin-content">
                Jumlah judul
            </div>
        </div>
    </main>
    <?php
    include_once 'page/footer.php';
    ?>
</body>
</html>