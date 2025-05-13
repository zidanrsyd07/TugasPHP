<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$akun_benar = 'zidan';
$pass_benar = '1234';

if ($username === $akun_benar && $password === $pass_benar) {
    $_SESSION['user'] = $username;
    header("Location: dashboard.php");
} else {
    header("Location: index.php?error=Username atau password salah");
}
exit();
