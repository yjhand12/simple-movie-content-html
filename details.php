<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM anime_list WHERE id = $id";
$result = mysqli_query($connection, $query);
$anime = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title><?php echo $anime['title']; ?></title>
</head>
<body>
    <?php
    include 'assets/page/sidebar.php';
    ?>
    <main>
        <?php
        include 'assets/page/navbar.php';
        ?>
        <div class="container">
            <div class="anime-details">
                <div class="anime-watch">
                    <div class="anime-episode">
                        <a href="" class="sub-title-anime">
                            <li class="first-episode">1. Lorem ipsum dolor sit amet</li>
                        </a>
                        <a href="" class="sub-title-anime">
                            <li class="second-episode">2. Lorem ipsum dolor sit amet</li>
                        </a>
                        <a href="" class="sub-title-anime">
                            <li class="first-episode">3. Lorem ipsum dolor sit amet</li>
                        </a>
                        <a href="" class="sub-title-anime">
                            <li class="second-episode">4. Lorem ipsum dolor sit amet</li>
                        </a>
                        <a href="" class="sub-title-anime">
                            <li class="first-episode">5. Lorem ipsum dolor sit amet</li>
                        </a>
                        <a href="" class="sub-title-anime">
                            <li class="second-episode">6. Lorem ipsum dolor sit amet</li>
                        </a>
                        <a href="" class="sub-title-anime">
                            <li class="first-episode">7. Lorem ipsum dolor sit amet</li>
                        </a>
                        <a href="" class="sub-title-anime">
                            <li class="second-episode">8. Lorem ipsum dolor sit amet</li>
                        </a>
                        <a href="" class="sub-title-anime">
                            <li class="first-episode">9. Lorem ipsum dolor sit amet</li>
                        </a>
                        <a href="" class="sub-title-anime">
                            <li class="second-episode">10. Lorem ipsum dolor sit amet</li>
                        </a>
                        <a href="" class="sub-title-anime">
                            <li class="first-episode">11. Lorem ipsum dolor sit amet</li>
                        </a>
                        <a href="" class="sub-title-anime">
                            <li class="second-episode">12. Lorem ipsum dolor sit amet</li>
                        </a>
                    </div>
                    <div>
                    <iframe width="100%" src="https://www.youtube.com/embed/<?php echo $anime['videos']; ?>" class="anime-video" frameborder="0" allowfullscreen></iframe>

                    </div>
                </div>
                <div class="anime-card">
                    <div class="card-details">
                        <img src="assets/img/<?php echo $anime['image']; ?>" alt="detail-image-<?php echo $anime['image']; ?>" width="220px" height="300px" class="detail-image">
                        <div class="anime-info">
                            <div class="anime-title">
                                <h2 class="title"><?php echo $anime['title']; ?></h2>
                                <h3 class="japanese-title"><?php echo $anime['japanese_title']; ?></h3>
                            </div>
                            <div class="anime-description">
                                <div class="left-description">
                                    <h4 class="description">
                                        Country : 
                                        <span>Japan</span></h4>
                                    <h4 class="description">
                                        Premiered : 
                                        <span>Spring 2024</span></h4>
                                    <h4 class="description">
                                        Date aired : 
                                        <span>April 25, 2024 to June 28, 2024 </span></h4>
                                    <h4 class="description">
                                        Broadcast : 
                                        <span>Fridays at 00.00 JST</span></h4>
                                    <h4 class="description">
                                        Genres : 
                                        <span><?php echo $anime['genre']; ?></span></h4>
                                </div>
                                <div class="right-description">
                                    <h4 class="description">
                                        Scrore : 
                                        <span>7.89 </span>
                                        <span class="rating">by 1337 reviews</span></h4>
                                    <h4 class="description">
                                        Duration : 
                                        <span>23 minutes</span></h4>
                                    <h4 class="description">
                                        Episodes : 
                                        <span>13</span></h4>
                                    <h4 class="description">
                                        Studios : 
                                        <span>CloverWorks</span></h4>
                                    <h4 class="description">
                                        Producers : 
                                        <span>Mainichi Broadcasting System, Kodansha, Aniplex, Tohan Corporation</span></h4>
                                </div>
                            </div>
                            <p class="sinopsis">
                            <?php echo $anime['sinopsis']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include 'assets/page/footer.php';
    ?>
</body>
</html>