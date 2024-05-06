<?php
include '../koneksi.php';

// Fungsi untuk menghapus anime dari database
if(isset($_GET['delete_anime'])) {
    $anime_id = $_GET['delete_anime'];
    $query = "DELETE FROM anime_list WHERE id = $anime_id";
    $result = mysqli_query($connection, $query);
    if($result) {
        header("Location: list_anime.php");
        exit();
    }
}

$query = "SELECT * FROM anime_list";
$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>List Anime</title>
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
                                <th>Japanese Title</th>
                                <th>Sinopsis</th>
                                <th>Image</th>
                                <th>Link Videos</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $no = 1;

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
                                    <td>
                                        <button class="edit-data-button" onclick="openEditModal(<?php echo $anime['id']; ?>, '<?php echo $anime['title']; ?>', '<?php echo $anime['japanese_title']; ?>', '<?php echo $anime['sinopsis']; ?>', '<?php echo $anime['videos']; ?>')">Edit</button>
                                        <a href="?delete_anime=<?php echo $anime['id']; ?>" class="delete-data-button" style="text-decoration: none;">Delete</a>
                                    </td>
                                </tr>
                            <?php
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
                <span class="close-modal" onclick="document.getElementById('formAddAnimeModal').style.display='none'">&times;</span>
                <h4 class="modal-title">Tambah Anime</h4>
                <div class="form-modal">
                    <form action="add_anime_process.php" method="POST" enctype="multipart/form-data">
                        <label for="title">Title:</label><br>
                        <input type="text" id="title" name="title" required><br><br>
                        
                        <label for="japanese_title">Japanese Title:</label><br>
                        <input type="text" id="japanese_title" name="japanese_title" required><br><br>
                        
                        <label for="sinopsis">Sinopsis:</label><br>
                        <textarea id="sinopsis" name="sinopsis" rows="4" required></textarea><br><br>
                        
                        <label for="image">Image:</label><br>
                        <input type="file" id="image" name="image" required><br><br>
                        
                        <label for="videos">Link Videos:</label><br>
                        <input type="text" id="videos" name="videos" required><br><br>
                        
                        <input type="submit" value="Tambah" class="submit-modal">
                    </form>
                </div>
            </div>
        </div>
        <div id="editAnimeModal" class="modal">
            <div class="modal-content">
                <span class="close-modal" onclick="document.getElementById('editAnimeModal').style.display='none'">&times;</span>
                <h4 class="modal-title">Edit Anime</h4>
                <div class="form-modal">
                    <form id="editAnimeForm" action="edit_anime_process.php" method="POST">
                        <input type="hidden" id="editAnimeId" name="id">
                        <label for="editTitle">Title:</label><br>
                        <input type="text" id="editTitle" name="title" required><br><br>
                        
                        <label for="editJapaneseTitle">Japanese Title:</label><br>
                        <input type="text" id="editJapaneseTitle" name="japanese_title" required><br><br>
                        
                        <label for="editSinopsis">Sinopsis:</label><br>
                        <textarea id="editSinopsis" name="sinopsis" rows="4" required></textarea><br><br>
                        
                        <label for="editImage">Image:</label><br>
                        <input type="file" id="editImage" name="image"><br><br>
                        
                        <label for="editVideos">Link Videos:</label><br>
                        <input type="text" id="editVideos" name="videos" required><br><br>
                        
                        <input type="submit" value="Simpan" class="submit-modal">
                    </form>
                </div>
            </div>
        </div>
    <?php
    include_once 'page/footer.php';
    ?>
</body>
</html>
<script>
    const activePage = window.location.pathname;
    if (window.location.pathname === '/admin/') {
        window.location.pathname = '/admin/dashboard.php';
    }
    const navLink = document.querySelectorAll('.sidebar-body ul li a').
    forEach(link => {
        if(link.href.includes(`${activePage}`)){
            link.parentElement.classList.add('active')
        }
    })

    function openEditModal(animeId, title, japaneseTitle, sinopsis, videos) {
        // Set nilai-nilai anime pada form modal edit
        document.getElementById('editAnimeId').value = animeId;
        document.getElementById('editTitle').value = title;
        document.getElementById('editJapaneseTitle').value = japaneseTitle;
        document.getElementById('editSinopsis').value = sinopsis;
        document.getElementById('editVideos').value = videos;
        // Tampilkan modal edit
        document.getElementById('editAnimeModal').style.display = 'block';
    }
</script>
