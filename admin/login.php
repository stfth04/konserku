<?php
session_start();
include 'koneksi.php'; // Pastikan koneksi.php ada dan benar

// Cek apakah pengguna sudah login
if (isset($_SESSION['log'])) {
    header('location: admin.php'); // Jika sudah login, arahkan ke admin.php
    exit();
}

// Cek apakah form login telah disubmit
if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($koneksi, $_POST['username']);
    $pass = mysqli_real_escape_string($koneksi, $_POST['password']);
    
    // Query untuk mencari pengguna
    $queryuser = mysqli_query($koneksi, "SELECT * FROM login WHERE username= '$user'");
    $cariuser = mysqli_fetch_assoc($queryuser);
    
    // Verifikasi password
    if ($cariuser && password_verify($pass, $cariuser['password'])) {
        $_SESSION['userid'] = $cariuser['id'];
        $_SESSION['username'] = $cariuser['username'];
        $_SESSION['log'] = 'login';
        
        echo '<script>alert("Anda Berhasil Login sebagai ' . $cariuser['username'] . '"); window.location="admin.php";</script>';
    } else {
        echo '<script>alert("Data yang anda masukan salah!!"); history.go(-1);</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-[#d0cba7] flex items-center justify-center min-h-screen">
    <div class="bg-[#8b4e00] text-center p-12 rounded-lg shadow-lg w-[28rem]">
        <h2 class="text-yellow-400 text-2xl mb-6">Login Admin</h2>
        <form method="POST">
            <div class="mb-6 flex items-center border-b border-gray-300 pb-2">
                <i class="fas fa-user text-white mr-2"></i>
                <input type="text" name="username" placeholder="Username" class="bg-transparent border-none text-white w-full focus:outline-none" required>
            </div>
            <div class="mb-8 flex items-center border-b border-gray-300 pb-2">
                <i class="fas fa-lock text-white mr-2"></i>
                <input type="password" name="password" placeholder="Password" class="bg-transparent border-none text-white w-full focus:outline-none" required>
            </div>
            <button type="submit" name="login" class="bg-yellow-400 text-white py-2 px-4 rounded-full w-full">Sign In</button>
        </form>
    </div>
</body>
</html>
