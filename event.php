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
</head>
<body> 
<?php include('navbar.php'); ?>
<div class="container mx-auto mt-8">
<div class="button-title" style="background-color: #804E00; color: #ffd700; padding: 10px 15px; text-align: center; border-radius: 5px; cursor: pointer; font-weight: bold; display: inline-block; margin-bottom: 20px;">
  Informasi Event
</div>
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
                        <a class="bg-[#FFD700] text-[#FFFFFF] px-4 py-2 rounded-md hover:bg-[#bfbf8f] focus:outline-none font-bold" href="detail.php?id_card=<?= $event['id_card']; ?>">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include('footer.php'); ?>
  <script src="script.js"></script>
</body>
</html>