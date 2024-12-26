<?php
session_start();
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Informasi Pribadi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-roboto bg-[#D2CF9F]">
<nav class="bg-[#804E00] p-4 h-20 flex justify-between items-center">
  <!-- Logo -->
  <div class="flex items-center space-x-4">
  <img alt="Logo" class="h-[45px] w-auto" src="logoo.png" />
  </div>

  <!-- Search Bar -->
  <div class="flex items-center flex-grow mx-4">
    <input class="px-4 py-2 rounded-full focus:outline-none w-full" placeholder="Search..." type="text" />
  </div>

  <!-- Login Button -->
  <a href="login/login.php" role="button" class="text-white px-4 py-2 hover:bg-[#663B00] rounded-md focus:outline-none flex items-center">
    Login/Daftar
    <i class="fas fa-user ml-2"></i>
  </a>
</nav>
<div class="flex flex-1">
        <nav class="bg-[#804E00] w-full md:w-1/4 p-4 flex-shrink-0">
            <ul>
                <li class="mb-4 border-b border-gray-300 pb-2">
                    <button id="nav-informasi-pribadi" class="text-black font-bold" onclick="showSection('informasi-pribadi')">Informasi Pribadi</button>
                </li>
                <li class="mb-4 border-b border-gray-300 pb-2">
                    <button id="nav-ubah-sandi" class="text-black" onclick="showSection('ubah-sandi')">Ubah Sandi</button>
                </li>
                <li class="mb-4 border-b border-gray-300 pb-2">
                    <button id="nav-tentang-konserku" class="text-black" onclick="showSection('tentang-konserku')">Tentang KonserKU</button>
                </li>
                <li class="mb-4">
                <button id="nav-logout" class="text-black flex items-center" onclick="confirmLogout()">
                  <i class="fas fa-sign-out-alt mr-2"></i> Log Out
                </button>
              </li>
            </ul>
        </nav>
        <main class="w-full md:w-3/4 p-8 flex-grow">
            <div id="informasi-pribadi">
                <h1 class="text-black font-bold mb-4">Informasi Pribadi</h1>
                <form>
                    <div class="mb-4">
                        <label class="block text-black mb-2" for="nama">Nama Lengkap</label>
                        <input class="w-full p-2 border border-gray-300 rounded" id="nama" type="text"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-black mb-2" for="email">Email</label>
                        <input class="w-full p-2 border border-gray-300 rounded" id="email" type="email"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-black mb-2" for="whatsapp">Nomor Whatsap</label>
                        <input class="w-full p-2 border border-gray-300 rounded" id="whatsapp" type="text"/>
                    </div>
                    <button class="bg-white text-black font-bold py-2 px-4 rounded" type="submit">PERBARUI</button>
                </form>
            </div>
            <div id="ubah-sandi" class="hidden">
                <h1 class="text-black font-bold mb-4">Ubah Sandi</h1>
                <form>
                    <div class="mb-4">
                        <label class="block text-black mb-2" for="current-password">Sandi Saat Ini</label>
                        <input class="w-full p-2 border border-gray-300 rounded" id="current-password" type="password"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-black mb-2" for="new-password">Sandi Baru</label>
                        <input class="w-full p-2 border border-gray-300 rounded" id="new-password" type="password"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-black mb-2" for="confirm-password">Konfirmasi Sandi Baru</label>
                        <input class="w-full p-2 border border-gray-300 rounded" id="confirm-password" type="password"/>
                    </div>
                    <button class="bg-white text-black font-bold py-2 px-4 rounded" type="submit">PERBARUI</button>
                </form>
            </div>
            <div id="tentang-konserku" class="hidden">
                <h1 class="text-black font-bold mb-4">Tentang KonserKU</h1>
                <p class="text-black">Informasi tentang KonserKU...</p>
                <script src="informasi.js"></script>
            </div>
        </main>
    </div>
</body>
</html