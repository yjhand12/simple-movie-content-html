<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>HOME</title>
</head>
<body>
    <?php
    include_once 'assets/page/sidebar.php';
    ?>
    <main>
        <?php
        include_once 'assets/page/navbar.php';
        ?>
        <div class="container">
            <div class="content">
                <div class="content-header">
                    <h2>HOME</h2>
                </div>
                <div class="content-list">
                <?php
                $list_anime = include_once 'list_anime.php';

                function compareTitles($a, $b) {
                    return strcmp($a->title, $b->title);
                }
                usort($content, 'compareTitles');

                foreach ($content as $anime) {
                    ?>
                    <div class="content-box">
                        <a href="details.php">
                            <div class="content-item">
                                <div class="content-image">
                                    <img src="assets/img/<?php echo $anime->image; ?>" alt="content-image-<?php echo $anime->title; ?>" width="180px" height="250px">
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
    include_once 'assets/page/footer.php';
    ?>
</body>
</html>
<script>
    const activePage = window.location.pathname;
    if (window.location.pathname === '/simple-movie-content-html/') {
        window.location.pathname = '/simple-movie-content-html/index.php';
    }
    const navLink = document.querySelectorAll('.sidebar-body ul li a').
    forEach(link => {
        if(link.href.includes(`${activePage}`)){
            link.parentElement.classList.add('active')
        }
    })
</script>