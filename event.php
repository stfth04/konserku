<?php
session_start();
?>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Konser Juicy Luicy</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap"
      rel="stylesheet"
    />

  <link rel="stylesheet" href="event.css" />
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
<!--poster event-->
<div>
  <img src="akang.png" class="full-width-image" />
</div>

<!-- Event Details -->
<main>
<h1 class="konser-title">Konser Untuk Korban Sakit Hati Lagi</h1>
  <p class="event-meta">
    <i class="fas fa-calendar-alt"></i> Sabtu, 22 Februari 2025 &nbsp;
    <i class="fas fa-map-marker-alt"></i> Gedung Sultan Suriansyah,
    Banjarmasin
  </p>
  <div class="garis"></div>
  <!-- Garis menggunakan div -->
  <!-- Content Section -->
  <h2 class="lineup-title">Tentang Konser Juicy Luicy</h2>
  <div class="event-content">
    <div class="event-description">
      <p>
      Konser untuk Korban Sakit Hati Lagi adalah Tour Juicy Luicy dan Adrian Khalif. Dalam Tour ini Juicy Luicy dan Adrian Khalif akan mempersembahkan penampilan-penampilan berbeda.
      </p>
      <ul>
        <li>
          Penampilan spesial oleh musisi Juicy Luicy.
        </li>
        <li>Diselenggarakan di <strong>Gedung Suriansyah</strong>.</li>
        <li>Tanggal: Sabtu, 22 Februari 2025</li>
        <li>Waktu: - WIB</li>
      </ul>
      <p>
        Untuk informasi lengkap dan pemesanan tiket:
        <a href="https://www.goersapp.com/events/konser-untuk-korban-sakit-hati-lagi-banjarmasin--kukshlbanjarmasin" target="_blank" class="btn-link"
          >Klik di sini</a
        >
      </p>
    </div>
  </div>
  <!-- Seating Plan Image -->
  <!--<div class="event-image">
    <img src="-" alt="Seating Plan" class="seating-plan" />
  </div>-->

  <!--line up-->
  <h2 class="lineup-title">Line up</h2>
  <div class="lineup-container">
    <div class="lineup-list">
      <ul class="column">
        <li>Juicy Luicy</li>
        <!--<li>-</li>
        <li><strong>-</strong></li>
        <li>-</li>
        <li-</li>-->
      </ul>
      <!--<ul class="column">
        <li>Juicy Luicy</li>
        <li>Ari Lasso</li>
        <li>Marcello Tahitoe (Ello)</li>
        <li>Virzha</li>
        <li>DEWA 19</li>-->
      </ul>
    </div>
  </div>
  <!--FOOTER-->
  <footer class="bg-[#804E00] text-white mt-8 p-4">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 gap-4">
      <div>
        <h3 class="text-lg font-bold">Konserku</h3>
        <ul>
          <li>
            <a class="hover:underline" href="#"> Konserku adalah platform digital yang berfungsi sebagai company profile untuk memberikan informasi terbaru seputar event dan konser di wilayah Banjarmasin dan Banjarbaru. Kami hadir untuk menjadi sumber informasi terpercaya bagi para penikmat musik dan hiburan, sekaligus menjembatani para penyelenggara acara dengan audiens mereka.

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
</main>
  </html