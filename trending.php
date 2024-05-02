<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>TRENDING</title>
</head>
<body>
    <?php
    include 'sidebar.php';
    ?>
    <main>
        <?php
        include 'navbar.php';
        ?>
        <div class="container">
            <div class="content">
                <div class="content-header">
                    <h2>TRENDING</h2>
                </div>
                <div class="content-list">
                <?php
                $list_anime = include_once 'list_anime.php';

                for ($x=0; $x<10; $x++) {
                    $anime = $content[$x];
                    ?>
                    <div class="content-box">
                        <a href="details.php">
                            <div class="content-item">
                                <div class="content-image">
                                    <img src="img/<?php echo $anime->image; ?>" alt="content-image-<?php echo $anime->title; ?>" width="180px" height="250px">
                                </div>
                                <div class="content-text">
                                    <p><span>Genre: </span><?php echo $anime->description; ?></p>
                                    <h3><?php echo $anime->title; ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <?php
    include 'footer.php';
    ?>
</body>
</html>
<script>
    const activePage = window.location.pathname;
    if (window.location.pathname === '/looping-content-html/') {
        window.location.pathname = '/looping-content-html/index.php';
    }
    const navLink = document.querySelectorAll('.sidebar-body ul li a').
    forEach(link => {
        if(link.href.includes(`${activePage}`)){
            link.parentElement.classList.add('active')
        }
    })
</script>