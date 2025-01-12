<?php

?>
<html lang="en">
<head>
 <meta charset="utf-8"/>
 <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
 <title>Admin</title>
 <script src="https://cdn.tailwindcss.com"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-[#d3c6a1]">
  <div class="flex h-screen">
    <!-- Main Content -->
    <div class="flex-1">
      <!-- Navbar -->
      <div class="bg-[#804E00] p-4 flex items-center relative">
        <!-- Judul Halaman di Kiri -->
        <h1 class="text-2xl text-[#ffd700] font-bold absolute left-4">Halaman Admin</h1>

        <!-- Menu Tengah -->
        <!-- Menu Tengah -->
        <nav class="absolute left-1/2 transform -translate-x-1/2 flex space-x-8 text-lg font-bold text-[#ffd700]">
          <a href="dashboard.php" class="cursor-pointer hover:border-b-4 hover:border-[#ffd700] pb-1">
            Dashboard
          </a>
          <a href="manage.php" class="cursor-pointer hover:border-b-4 hover:border-[#ffd700] pb-1">
            Manage Event
          </a>
        </nav>
        <!-- Selamat Datang dan Profil Admin di Kanan -->
        <div class="flex items-center ml-auto">
          <span class="text-[#ffd700] mr-2">
            Hi,
            <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Admin'; ?>!
          </span>
          <img src="profile.png" alt="Profile Picture" class="h-10 w-10 rounded-full border-2 border-white" />
          <a href="logout.php" class="text-white ml-4 bg-[#ffd700] px-3 py-1 rounded hover:bg-[#e6c200]">Logout</a>
        </div>
      </div>