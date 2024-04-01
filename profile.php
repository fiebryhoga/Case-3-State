<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}

echo "<h2>Profile Page</h2>";
if (isset($_COOKIE['email'])) {
    echo "<pre>";
    var_dump($_COOKIE);
    echo "</pre>";
} else {
    echo "Cookie belum diatur.";
}
echo "<br><br><a href='logout.php'>Logout</a>";
