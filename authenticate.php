<?php
session_start();

$valid_username = "Admin";
$valid_password = "SwinburneVN";

$username =  $_POST["username"];
$password = $_POST["password"];

if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 1;
}

if ($_SESSION['login_attempts'] >= 3) {
    unset($_SESSION['login_attempts']);
    header('Location: index.php');
    exit();
}

if ($username === $valid_username && $password === $valid_password)
{
    $_SESSION['admin_logged_in'] = TRUE;
    $_SESSION['admin_username'] = $username;
    header('Location: manage.php');
    exit();
} else {
    $_SESSION['login_attempts']++;
    $_SESSION['login_error'] = "Invalid username or password";
    header('Location: admin.php');
    exit();
}
?>