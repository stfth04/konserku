<?php
session_start();
include 'config.php'; // Koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: admin.php");
    } else {
        echo "Kredensial tidak valid!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard Admin - Konserku.id</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-blue-200">
    <nav class="bg-blue p-4 flex justify-between items-center">
        <div class="flex items-center">
            <!--<img alt="Logo" class="h-[-10px] w-auto" src="" />-->
            <h1 class="text-2xl font-bold mb-4">Selamat Datang di Dashboard Admin</h1>
        </div>
        <div class="flex items-center">
            <span class="text-[#000000] mr-2">Hi, <?= htmlspecialchars($_SESSION['username']); ?>!</span>
            <img src="ara.jpeg" alt="Profile Picture" class="h-10 w-10 rounded-full border-2 border-white" />
            <a href="logout.php" class="text-white ml-4 bg-red-600 px-3 py-1 rounded hover:bg-red-700">Logout</a>
        </div>
    </nav>
</body>
</html>