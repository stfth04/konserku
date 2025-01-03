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
  <img alt="Logo" class="h-[45px] w-auto" src="../lgo.png"/>
  </div>
  <!-- Search Bar -->
  <div class="flex items-center flex-grow mx-4 relative">
    <span class="absolute left-4 text-[#804E00]">
        <i class="fas fa-search"></i>
    </span>
    <input class="pl-10 py-2 rounded-full focus:outline-none w-full" placeholder="Search..." type="text" />
    </div>
    <!--Login button-->
    <a href="../admin/login.php" role="button" class="text-white px-4 py-2 hover:bg-[#663B00] rounded-md focus:outline-none flex items-center">
    Login
    <i class="fas fa-user ml-2"></i>
    </a>
</nav>
<!--poster event-->
<div>
  <img src="poster.png" class="full-width-image" />
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
  <div class="event-content">
    <div class="event-description">
    <h2 class="lineup-title">Tentang Konser Juicy Luicy</h2>
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
  <div class="event-image">
    <img src="venue.jpg" alt="Seating Plan" class="seating-plan" />
  </div>
  <!-- Line up -->
  <div class="lineup-container">
    <span class="lineup-title">Line up</span>
    <span class="lineup-item">Juicy Luicy</span>
  </div>
  <!--FOOTER-->
  <footer>
  <div class="footer-container">
    <!-- Kolom Deskripsi -->
    <div class="footer-column">
      <h3>Konserku</h3>
      <p>
      Konserku adalah platform digital yang menyajikan informasi terkini tentang event dan 
      konser di Banjarmasin dan Banjarbaru. Sebagai sumber terpercaya, kami menjembatani 
      penyelenggara acara dengan audiens melalui detail lengkap, mulai dari jadwal, lokasi, hingga tiket.
      Dengan tampilan user-friendly, Konserku mendukung perkembangan hiburan lokal dan mempermudah akses 
      masyarakat terhadap informasi acara berkualitas. 
      Pilihan utama untuk dunia hiburan di Banjarmasin dan Banjarbaru.
      </p>
    </div>

    <!-- Kolom Navigasi Cepat -->
    <div class="footer-column">
      <h3>Navigasi Cepat</h3>
      <ul>
        <li><a href="../event.php">Beranda</a></li>
        <li><a href="#events">Jadwal Konser</a></li>
        <li><a href="#news">Berita dan Artikel</a></li>
        <li><a href="#contact">Hubungi Kami</a></li>
        <li><a href="#privacy">Kebijakan Privasi</a></li>
      </ul>
    </div>

    <!-- Kolom Kontak -->
    <div class="footer-column">
      <h3>Kontak</h3>
      <p>Email: <a href="mailto:info@konserku.com">info@konserku.com</a></p>
      <p>Telepon: +62 812-3456-7890</p>
      <h3>Ikuti Kami</h3>
      <div class="social-icons">
        <a href="https://instagram.com" target="_blank">Instagram</a>
        <a href="https://facebook.com" target="_blank">Facebook</a>
        <a href="https://twitter.com" target="_blank">Twitter</a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    © 2024 Konserku. Semua Hak Dilindungi.
  </div>
  </footer>
</main>
  </html