<?php
session_start();
include 'config.php'; // Koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan verifikasi kredensial
    $stmt = $pdo->prepare("SELECT * FROM konserku WHERE username = ? AND password = ?");
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if ($user) {
        // Simpan informasi pengguna ke dalam sesi
        $_SESSION['username'] = $user['username'];
        // Jangan simpan password dalam sesi
        header("Location: admin.php"); // Arahkan ke halaman admin
        exit();
    } else {
        echo "Kredensial tidak valid!";
    }
}
?>