<?php
    session_start();

    include_once("./connect.php");

    // isset (apakah ada?)

    // cek apakah ada kiriman data email
    // dan cek apakah ada kiriman data password
    if(isset($_POST['email']) && isset($_POST['password'])) {

        // simpan email ke dalam variable email
        $email = $_POST['email']; // malvin@gmail.com

        // simpan password dalam bentuk hash ke dalam variable
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // cek apakah email sudah terdaftar sebelumnya
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($db, $sql);

        // jika hasilnya lebih dari 0
        if (mysqli_num_rows($result) > 0) {
            echo "Email sudah terdaftar.";
        } else {
            // Query memasukkan data email baru ke database.
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
            
            // jika berhasil, tampilkan "registrasi berhasil"
            if (mysqli_query($db, $sql) === TRUE) {
                echo "Registrasi berhasil. Silakan <a href='login.php'>login</a>.";
            } else {
                // jika gagal...
                echo "Registrasi gagal!";
            }
        }
    }
