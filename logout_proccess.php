<?php
    // memulai interaksi SESSION
    session_start();

    // menghancurkan SESSION["email"]
    session_destroy();

    // unset SESSION["email"]
    session_unset();

    // pindahin ke halaman login.php
    header("Location: login.php");