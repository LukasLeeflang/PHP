<?php
    session_start();

    if(isset($_SESSION["user"])) {
        echo "<h1>Welkom op de website, " . $_SESSION["user"]["naam"] . "!</h1>";
        echo "<p><a href='login.php'>Login</a></p>";
    }
    else {
        header('location: login.php');
        //Go back to the login screen.
    }