<?php
session_start();

$email = "pwti@gmail.com";
$password = "@John123";

$userEmail = $_POST['email'];
$userPassword = $_POST['password'];
$remember = $_POST['remember'];

if ($userEmail == $email && $userPassword == $password) {
    $_SESSION['email'] = $email;

    if ($remember == "true") {
        setcookie('email', $email, time() + (86400 * 30), "/");
    }

} else {
    echo "Email or password incorrect";
}
