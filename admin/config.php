<?php
// Pengaturan koneksi database
$host = "localhost"; // Biasanya localhost
$db_username = "root"; // Ganti dengan username database Anda
$db_password = ""; // Ganti dengan password database Anda (kosong jika tidak ada password)
$db_name = "konserku"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($host, $db_username, $db_password, $db_name);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
