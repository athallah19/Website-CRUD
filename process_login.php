<?php
session_start();
include("koneksi/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login berhasil
        $_SESSION['username'] = $username;
        header("location: index.php");
    } else {
        // Login gagal
        $error_message = "Username atau password anda salah. Silakan coba lagi.";
        header("location: login.php?error=" . urlencode($error_message));
    }
}

$conn->close();
?>

