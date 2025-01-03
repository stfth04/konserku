<?php
session_start();
include 'admin/db.php';
// Ambil data dari tabel card_dashboard
$stmt = $pdo->query("SELECT * FROM card_dashboard");
$events = $stmt->fetchAll();
?>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Konserku.id</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="event.css" />
</head>
<body class="font-roboto bg-[#D2CF9F]">
<nav class="bg-[#804E00] p-4 h-20 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center space-x-4">
        <img alt="Logo" class="h-[45px] w-auto" src="lgo.png" />
    </div>
    <!-- Search Bar -->
    <div class="flex items-center flex-grow mx-4 relative">
    <span class="absolute left-4 text-[#804E00]">
        <i class="fas fa-search"></i>
    </span>
    <input class="pl-10 py-2 rounded-full focus:outline-none w-full" placeholder="Search..." type="text" />
    </div>
    <a href="admin/login.php" role="button" class="text-white px-4 py-2 hover:bg-[#663B00] rounded-md focus:outline-none flex items-center">
    Login/Daftar
    <i class="fas fa-user ml-2"></i>
    </a>
</nav>
<div class="container mx-auto mt-8">
<div class="button-title">Informasi Event</div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php foreach ($events as $event): ?>
            <div class="bg-[#804E00] rounded-lg shadow-md overflow-hidden">
                <img alt="Informative image" class="w-full h-48 object-cover" src="<?= htmlspecialchars($event['foto_card']) ?>" />
                <div class="p-6">
                    <h2 class="text-xl font-bold text-[#FFD700]"><?= htmlspecialchars($event['nama_event']) ?></h2>
                    <p class="text-white fas fa-calendar-alt py-2">
                    <?php
                    // Mengonversi tanggal ke format yang diinginkan
                    $tanggal = new DateTime($event['tanggal']);
                    echo $tanggal->format(' d F Y'); // Format: Hari, Tanggal Bulan Tahun
                     ?>
                    </p><br>
                    <p class="text-white fas fa-map-marker-alt mb-2"><?= htmlspecialchars($event['lokasi']) ?></p><br>
                    <div class="flex justify-end">
                        <a class="bg-[#FFD700] text-[#FFFFFF] px-4 py-2 rounded-md hover:bg-[#bfbf8f] focus:outline-none font-bold" href="event/juicy_luicy.php">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
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
        <li><a href="event.php" onclick="scrollToTop(event)">Beranda</a></li>
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
  <script src="script.js"></script>
</body>
</html>