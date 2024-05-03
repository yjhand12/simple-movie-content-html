<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style-admin.css">
    <title>Login - Admin</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="form-login">
                <h2>Login</h2>
                <form action="login-process.php" method="post">
                    <label for="username">Username:</label><br>
                    <input type="text" id="username" name="username" required><br><br>
                    
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" required><br><br>
                    
                    <button>Login</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
