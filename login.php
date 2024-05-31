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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <!-- action: .login_proccess.php -->
    <!-- method POST -->
    <form action="./login_proccess.php" method="POST">
        <!-- EMAIL -->
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <br>
        <!-- password -->
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <br>
        <!-- button type submit -->
        <button type="submit" name="submit">LOGIN</button>
    </form>
</body>
</html>