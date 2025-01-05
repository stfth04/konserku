<?php 
      $koneksi = mysqli_connect("localhost","root","","konserku");

      $id_card = $_GET['id_card'];
      $data = mysqli_query($koneksi, "SELECT * FROM card_dashboard WHERE id_card=$id_card");

      while($d = mysqli_fetch_array($data)){
          $foto_card = $d['foto_card'];
          $nama_event = $d['nama_event'];
          $tanggal = $d['tanggal'];
          $lokasi = $d['lokasi'];
      
      }
      ?>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title><?= $nama_event; ?></title>
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
  <link rel="stylesheet" href="detail.css" />
</head>
<body>
<?php include('navbar.php'); ?>
<!-- Poster event -->
<div>
  <img src="<?= htmlspecialchars($foto_card) ?>" class="full-width-image" alt="Event Poster" />
</div>
<!-- Event Details -->
<main>
<div class="event-meta">
  <h1 class="konser-title"><?= htmlspecialchars($nama_event) ?></h1>
  <div class="meta-info">
    <span><i class="fas fa-calendar-alt"></i> <?= (new DateTime($tanggal))->format('l, d F Y') ?></span>
    &nbsp;|&nbsp;
    <span><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($lokasi) ?></span>
  </div>
</div>
<!-- Garis menggunakan div -->
<div class="garis"></div>
<!-- Content Section -->
<div class="event-content">
  <div class="event-description">
    <h2 class="lineup-title">Tentang <?= htmlspecialchars($nama_event) ?></h2>
    <p><?= htmlspecialchars($event['desk']) ?></p>
    <ul>
      <li>Diselenggarakan di <strong>[Isian Venue]</strong>.</li>
      <li>Tanggal: <?= (new DateTime($tanggal))->format('d F Y') ?></li>
      <li>Waktu: - WIB</li>
    </ul>
    <p>
      Untuk informasi lengkap dan pemesanan tiket:
      <a href="<?= htmlspecialchars($event['ticket_link']) ?>" target="_blank" class="btn-link">Klik di sini</a>
    </p>
  </div>
</div>
<!-- Seating Plan Image venue -->
<div class="event-image">
  <img src="venue.jpg" alt="Seating Plan" class="seating-plan" />
</div>
<div class="lineup-container">
  <span class="lineup-title">Line Up</span>
  <?php
  // Assuming $card_dashboard is the correct record for the event
  $lineup = explode(',', $event['lineup']); // Split lineup string by commas
  foreach ($lineup as $artist): ?>
    <span class="lineup-item"><?= htmlspecialchars(trim($artist)) ?></span>
  <?php endforeach; ?>
</div>
  <!--FOOTER-->
  <?php include('footer.php'); ?>
</main>
  </html>