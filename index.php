<?php
session_start();
?>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Konserku.id</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
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

        <!-- Cek jika pengguna sudah login atau belum -->
        <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])): ?>
            <!-- Jika sudah login, tampilkan nama pengguna -->
            <div class="relative flex items-center">
                <span class="text-white cursor-pointer" id="username" onmouseover="showDropdown()" onmouseout="hideDropdown()">
                    Hi, <?= htmlspecialchars($_SESSION['username']); ?>!!
                </span>
                <!-- Dropdown Menu -->
                <div id="dropdown" class="hidden absolute right-0 bg-[#D2CF9F] text-black rounded-lg shadow-md p-2 mt-2">
                    <ul>
                        <li><a href="profile.php" class="block px-4 py-2">Informasi Pribadi</a></li>
                        <li><a href="logout.php" class="block px-4 py-2">Logout</a></li>
                    </ul>
                </div>
            </div>
        <?php else: ?>
            <!-- Jika belum login, sembunyikan nama pengguna dan tampilkan tombol Login/Daftar -->
            <a href="login/login.php" role="button" class="text-white px-4 py-2 hover:bg-[#663B00] rounded-md focus:outline-none flex items-center">
                Login/Daftar
                <i class="fas fa-user ml-2"></i>
            </a>
        <?php endif; ?>
    </div>
</nav>
  <div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Informasi Event</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <div class="bg-[#804E00] rounded-lg shadow-md overflow-hidden">
        <img alt="Informative image with a detailed description of the content" class="w-full h-48 object-cover"
          height="192" src="jusi.png" width="100%" />
        <div class="p-6">
          <h2 class="text-xl font-bold text-white">
            Konser Juicy Luicy<!--Information Title 1-->
          </h2>
          <p class="text-gray-300 fas fa-calendar-alt">
            22 Februari 2025
          </p> <br>
          <p class="text-gray-300 fas fa-map-marker-alt">
            Banjarmasin, Gedung Sultan Suriansyah
          </p> <br>
          <div class="flex justify-end">
            <a class="bg-[#D2CF9F] text-black px-4 py-2 rounded-md hover:bg-[#bfbf8f] focus:outline-none text-bold"
              href="event.php">
              Selengkapnya
            </a>
          </div>
        </div>
      </div>
      <div class="bg-[#804E00] rounded-lg shadow-md overflow-hidden">
        <img alt="Informative image with a detailed description of the content" class="w-full h-48 object-cover"
          height="192" src="liburland.png" width="100%" />
        <div class="p-6">
          <h2 class="text-xl font-bold text-white">Liburland</h2>
          <p class="text-gray-300 fas fa-calendar-alt">
            12-13 April 2025
          </p> <br>
          <p class="text-gray-300 fas fa-map-marker-alt">
            Banjarbaru, Amanah Borneo
          </p> <br>
          <div class="flex justify-end">
            <a class="bg-[#D2CF9F] text-black px-4 py-2 rounded-md hover:bg-[#bfbf8f] focus:outline-none"
              href="detail.html">
              Selengkapnya
            </a>
          </div>
        </div>
      </div>
      <div class="bg-[#804E00] rounded-lg shadow-md overflow-hidden">
        <img alt="Informative image with a detailed description of the content" class="w-full h-48 object-cover"
          height="192" src="https://spaces.ilfen.co/assets/image/produk/1727602615-SLIDER_DESKTOP_1008_X_252_PX.png"
          width="100%" />
        <div class="p-6">
          <h2 class="text-xl font-bold text-white">Dewa 19 Featuring Allstars 2.0</h2>
          <p class="text-gray-300">
            This is a brief description of the information provided in this
            card. It gives an overview of the content.
          </p>
          <div class="flex justify-end">
            <a class="bg-[#D2CF9F] text-black px-4 py-2 rounded-md hover:bg-[#bfbf8f] focus:outline-none"
              href="event.html">
              Selengkapnya
            </a>
          </div>
        </div>
      </div>
      <div class="bg-[#804E00] rounded-lg shadow-md overflow-hidden">
        <img alt="Informative image with a detailed description of the content" class="w-full h-48 object-cover"
          height="192"
          src="https://storage.googleapis.com/a1aa/image/9sovfQagGIQewUk8d3COvy26K8WcDtQL9xH0rWE0BZQ6fX7nA.jpg"
          width="100%" />
        <div class="p-6">
          <h2 class="text-xl font-bold text-white">Information Title 6</h2>
          <p class="text-gray-300">
            This is a brief description of the information provided in this
            card. It gives an overview of the content.
          </p>
          <div class="flex justify-end">
            <a class="bg-[#D2CF9F] text-black px-4 py-2 rounded-md hover:bg-[#bfbf8f] focus:outline-none"
              href="detail.html">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="bg-[#804E00] text-white mt-8 p-4">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 gap-4">
      <div>
        <h3 class="text-lg font-bold">Konserku</h3>
        <ul>
          <li>
            <a class="hover:underline" href="#">Konserku adalah platform digital yang berfungsi sebagai company profile untuk memberikan informasi terbaru seputar event dan konser di wilayah Banjarmasin dan Banjarbaru. Kami hadir untuk menjadi sumber informasi terpercaya bagi para penikmat musik dan hiburan, sekaligus menjembatani para penyelenggara acara dengan audiens mereka.

Dengan tampilan yang user-friendly, Konserku menyajikan detail lengkap setiap event, mulai dari jadwal, lokasi, hingga informasi tiket. Kami berkomitmen untuk mendukung perkembangan industri hiburan lokal, serta mempermudah masyarakat dalam mengakses informasi acara berkualitas di daerah mereka.

Konserku—pilihan utama untuk tetap terhubung dengan dunia hiburan di Banjarmasin dan Banjarbaru.</a>
          </li>
        </ul>
      </div>
      <div>
        <h3 class="text-lg font-bold">Tentang Konserku</h3>
        <ul>
          <li>
            <a class="hover:underline" href="#"> Informasi Event </a>
          </li>
          <li>
            <a class="hover:underline" href="#"> Contact </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="script.js"></script>
</body>
</html>