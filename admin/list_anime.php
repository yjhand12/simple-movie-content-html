<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>List Anime</title>
    <style>
        .modal {
            display: none; /* Sembunyikan modal secara default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
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
                <div class="title-page">
                    <h2 class="admin-title">List Anime</h2>
                </div>
                <div class="anime-data">
                    <button class="add-data-button" onclick="document.getElementById('formAddAnimeModal').style.display='block'">Tambah Data Anime</button>
                    <div class="list-anime-table">
                        <table>
                            <tr class="head">
                                <th>No</th>
                                <th>Title</th>
                                <th>Japanase Title</th>
                                <th>Sinopsis</th>
                                <th>Image</th>
                                <th>Link Videos</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $no = 1;
                            $query = "SELECT * FROM anime_list";
                            $result = mysqli_query($connection, $query);

                            if ($result) {
                                foreach ($result as $anime) {?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $anime['title']; ?></td>
                                    <td><?php echo $anime['japanese_title']; ?></td>
                                    <td>
                                        <?php 
                                        $sinopsis = $anime['sinopsis'];
                                        if (strlen($sinopsis) > 200) {
                                            echo substr($sinopsis, 0, 200) . '...';
                                        } else {
                                            echo $sinopsis;
                                        }
                                        ?>
                                    </td>
                                    <td><img src="../assets/img/<?php echo $anime['image']; ?>" alt="<?php echo $anime['title']; ?> " height="100px" width="auto"></td>
                                    <td><a href=""><?php echo $anime['videos']; ?></a></td>
                                    <td><button class="edit-data-button">Edit</button>
                                        <button class="delete-data-button">Delete</button>
                                    </td>
                                </tr>
                                <?php
                                }
                            }
                            ?>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="formAddAnimeModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('formAddAnimeModal').style.display='none'">&times;</span>
                <h4 class="modal-title">Tambah Daftar Anime</h4>
                <div class="form-add-anime">
                    <form action="add_anime_process.php" method="POST" enctype="multipart/form-data">
                        <label for="title">Title:</label><br>
                        <input type="text" id="title" name="title" required><br><br>
                        
                        <label for="japanese_title">Japanese Title:</label><br>
                        <input type="text" id="japanese_title" name="japanese_title" required><br><br>
                        
                        <label for="sinopsis">Sinopsis:</label><br>
                        <textarea id="sinopsis" name="sinopsis" rows="4" required></textarea><br><br>
                        
                        <label for="image">Gambar:</label><br>
                        <input type="file" id="image" name="image" required><br><br>
                        
                        <label for="videos">Link Videos:</label><br>
                        <input type="text" id="videos" name="videos" required><br><br>
                        
                        <input type="submit" value="Tambah">
                    </form>
                </div>
            </div>
        </div>
    <?php
    include_once 'page/footer.php';
    ?>
</body>
</html>
