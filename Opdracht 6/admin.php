<?php
session_start();

if (isset($_SESSION["user"] && $_SESSION["user"]["rol"] == "administrator")) {
    echo "<h1>Welkom " . $_SESSION["user"]["naam"] . " op het admingedeelte van de website!</h1>";
    echo "<p><a href='login.php'>Login</a></p>";
} else {
    header('location: login.php');
    //Return to the login screen.
}