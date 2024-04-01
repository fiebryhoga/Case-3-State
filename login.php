<?php
session_start();

$email = "pwti@gmail.com";
$password = "@John123";

$userEmail = $_POST['email'];
$userPassword = $_POST['password'];
$remember = $_POST['remember'];

if (strlen($userPassword) < 8 || !preg_match('/[A-Za-z0-9@#$%^&*()\-_=+{};:,<.>]/', $userPassword)) {
    echo "Password tidak sesuai ketentuan";
} else {
    if ($userEmail == $email && $userPassword == $password) {
        $_SESSION['email'] = $email;
        if ($remember == "true") {
            setcookie('email', $email, time() + (86400 * 30), "/");
        }
        echo "success";
    } else {
        echo "Email dan Password tidak cocok";
    }
}
