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
  <img src="jusip.png" alt="Contoh Gambar" class="full-width-image" />
</div>

<!-- Event Details -->
<main>
<h1 class="konser-title">Konser Juicy Luicy</h1>
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
        "DEWA 19 ALL Featuring Allstars 2.0" bukan sekadar konser biasa ini
        adalah selebrasi warisan musik legendaris DEWA 19 dengan skala yang
        belum pernah ada sebelumnya. Promotor menghadirkan musisi rock
        legendaris dunia, seperti Mr. Big, Bad English, dan Extreme untuk
        menciptakan kolaborasi lintas batas yang akan mengguncang panggung.
      </p>
      <ul>
        <li>
          Penampilan spesial oleh musisi rock legendaris seperti Mr. Big,
          Bad English, Extreme, dan banyak lagi.
        </li>
        <li>Diselenggarakan di <strong>Gelora Bung Karno</strong>.</li>
        <li>Tanggal: Sabtu, 18 Januari 2025</li>
        <li>Waktu: 19.00 WIB</li>
      </ul>
      <p>
        Untuk informasi lengkap dan pemesanan tiket:
        <a href="https://dewatiket.id/" target="_blank" class="btn-link"
          >Klik di sini</a
        >
      </p>
    </div>
  </div>
  <!-- Seating Plan Image -->
  <div class="event-image">
    <img src="venue.png" alt="Seating Plan" class="seating-plan" />
  </div>

  <!--line up-->
  <h2 class="lineup-title">Line up</h2>
  <div class="lineup-container">
    <div class="lineup-list">
      <ul class="column">
        <li><strong>MR. BIG</strong> (Eric Martin & Billy Sheehan)</li>
        <li><strong>EXTREME</strong> (Gary Cherone & Nuno Bettencourt)</li>
        <li><strong>BAD ENGLISH</strong> (John Waite)</li>
        <li>Derek Sherinian</li>
        <li>Dino Jelusick</li>
      </ul>
      <ul class="column">
        <li>Ron Bumblefoot Thal</li>
        <li>Ari Lasso</li>
        <li>Marcello Tahitoe (Ello)</li>
        <li>Virzha</li>
        <li>DEWA 19</li>
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
            <a class="hover:underline" href="#"> KonserKU adalah platform digital Informasi tiket untuk masyarakat
              tau tentang tiket konser yang mereka ingin hadiri. platform digital
              ini juga mempromosikan website pemesanan tiket konser dengan proses
              yang aman, mudah dan cepat.</a>
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