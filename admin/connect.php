<?php
session_start();

// Koneksi ke database
$servername = "localhost";
$db_username = "root";
$db_password = ""; // Sesuaikan dengan password MySQL Anda
$dbname = "konserku";

// Buat koneksi
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari user berdasarkan username
$sql = "SELECT id_admin, username, password FROM admin_user WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verifikasi password
    if (password_verify($password, $row['password'])) {
        // Simpan informasi user di session
        $_SESSION['user_id'] = $row['id_admin'];
        $_SESSION['username'] = $row['username'];

        // Redirect ke halaman dashboard
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "Password salah!";
    }
} else {
    echo "User tidak ditemukan!";
}

$stmt->close();
$conn->close();
?>
