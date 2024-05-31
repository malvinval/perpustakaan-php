<?php
    // memulai interaksi SESSION
    session_start();

    // cek apakah ada SESSION["email"]
    // ! : not (tidak)
    if(!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI PERPUSTAKAAN</title>
</head>
<body>
   <h1>APLIKASI PERPUSTAKAAN VERSI 3</h1>

    <a href="./buku.php">Lihat daftar buku</a>
    <br>
    <a href="./staff.php">Lihat daftar staff</a>
    <br><br>
    <form action="logout_proccess.php" method="POST">
        <button type="submit">LOGOUT</button>
    </form>
</body>
</html>