<?php
    // memulai interaksi SESSION
    session_start();

    // cek apakah user sudah login
    // kalo iya, pindahin ke index.php
    if (isset($_SESSION["email"])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    <!-- FORM registrasi -->

    <!-- POST adalah request method yang dipakai untuk membuat perubahan -->
    
    <!-- action: menjalankan PHP setelah button diklik -->
    <form method="POST" action="./register_proccess.php">
        <!-- email -->
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>

        <!-- password -->
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <br>

        <!-- button submit -->
        <input type="submit" value="Register">
    </form>
</body>
</html>
