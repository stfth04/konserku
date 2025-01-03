<?php
session_start();
include 'config.php'; // Koneksi database
include 'db.php';

//BAGIAN CARD DASHBOARD
// Handle Create
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
    $foto_card = $_POST['foto_card'];
    $nama_event = $_POST['nama_event'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];

    $stmt = $pdo->prepare("INSERT INTO card_dashboard (foto_card, nama_event, tanggal, lokasi) VALUES (?, ?, ?, ?)");
    $stmt->execute([$foto_card, $nama_event, $tanggal, $lokasi]);
}

// Handle Update
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id_card = $_POST['id_card'];
    $foto_card = $_POST['foto_card'];
    $nama_event = $_POST['nama_event'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];

    $stmt = $pdo->prepare("UPDATE card_dashboard SET foto_card=?, nama_event=?, tanggal=?, lokasi=? WHERE id_card=?");
    $stmt->execute([$foto_card, $nama_event, $tanggal, $lokasi, $id_card]);
}

// Ambil data event untuk diedit
$event = null; // Inisialisasi variabel event
if (isset($_GET['edit'])) {
    $id_card = $_GET['edit'];
    $stmt = $pdo->prepare("SELECT * FROM card_dashboard WHERE id_card = ?");
    $stmt->execute([$id_card]);
    $event = $stmt->fetch();
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id_card = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM card_dashboard WHERE id_card=?");
    $stmt->execute([$id_card]);
}

// Read events
$stmt = $pdo->query("SELECT * FROM card_dashboard");
$events = $stmt->fetchAll();
?>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Admin
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-[#d3c6a1]">
  <div class="flex h-screen">
   <!-- Sidebar -->
   <div class="bg-[#804E00] w-1/4 p-4">
    <div class="flex items-center mb-8">
     <img alt="Logo" class="mr-2" height="50" src="../lgo.png" width="55%"/>
    </div>
    <nav class="flex flex-col space-y-4">
     <button class="bg-[#ffd700] text-[#ffffff] font-bold py-2 px-4 rounded" id="card-dashboard-btn">
      Card dashboard
     </button>
     <button class="bg-[#ffd700] text-[#ffffff] font-bold py-2 px-4 rounded" id="informasi-event-btn">
      Informasi Event
     </button>
    </nav>
   </div>
   <!-- Main Content -->
   <div class="flex-1">
    <!-- Navbar -->
    <div class="bg-[#804E00] p-4 flex justify-between items-center">
    <h1 class="text-2xl text-[#ffd700] font-bold mb-4">Selamat Datang di Dashboard Admin</h1>
    <div class="flex items-center">
        <span class="text-[#ffd700] mr-2">
        Hi, <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Admin'; ?>!
        </span>
        <img src="ara.jpeg" alt="Profile Picture" class="h-10 w-10 rounded-full border-2 border-white" />
        <a href="../event.php" class="text-white ml-4 bg-[#ffd700] px-3 py-1 rounded hover:bg-[#ffd700]">Logout</a>
        </div>
        </div>
    <div class="p-8">
     <!-- Card Dashboard Content -->
     <div id="card-dashboard-content">
     <form method="POST" class="mb-4">
      <input type="hidden" name="id_card" value="<?= isset($event) ? $event['id_card'] : '' ?>">
      <input type="text" name="foto_card" placeholder="URL Foto" required style="border: 1px solid #ccc; padding: 0.5rem; margin-bottom: 0.5rem; width: 100%; background-color: #804E00; color: white;" value="<?= isset($event) ? $event['foto_card'] : '' ?>">
      <input type="text" name="nama_event" placeholder="Nama Event" required style="border: 1px solid #ccc; padding: 0.5rem; margin-bottom: 0.5rem; width: 100%; background-color: #804E00; color: white;" value="<?= isset($event) ? $event['nama_event'] : '' ?>">
      <input type="date" name="tanggal" required style="border: 1px solid #ccc; padding: 0.5rem; margin-bottom: 0.5rem; width: 100%; background-color: #804E00; color: white;" value="<?= isset($event) ? $event['tanggal'] : '' ?>">
      <input type="text" name="lokasi" placeholder="Lokasi" required style="border: 1px solid #ccc; padding: 0.5rem; margin-bottom: 0.5rem; width: 100%; background-color: #804E00; color: white;" value="<?= isset($event) ? $event['lokasi'] : '' ?>">
      <button type="submit" name="<?= isset($event) ? 'update' : 'create' ?>" style="background-color: #ffd700; color: white;" class="px-4 font-bold py-2 rounded hover:bg-[#e6c200]">
    <?= isset($event) ? 'Update Event' : 'Create Event' ?>
</button>
      </form>
      <!-- Tabel untuk menampilkan daftar event -->
    <table class="min-w-full bg-[#804E00] border border-gray-300 text-[#ffd700]">
    <thead>
        <tr>
            <th class="border px-4 py-2">ID</th>
            <th class="border px-4 py-2">Foto</th>
            <th class="border px-4 py-2">Nama Event</th>
            <th class="border px-4 py-2">Tanggal</th>
            <th class="border px-4 py-2">Lokasi</th>
            <th class="border px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($events as $event): ?>
            <tr>
                <td class="border px-4 py-2"><?= $event['id_card'] ?></td>
                <td class="border px-4 py-2"><img src="<?= htmlspecialchars($event['foto_card']) ?>" alt="Event Image" class="h-20 w-20 object-cover" /></td>
                <td class="border px-4 py-2"><?= htmlspecialchars($event['nama_event']) ?></td>
                <td class="border px-4 py-2">
                <?php
                    // Debugging: Tampilkan nilai tanggal
                    echo "Raw Date: " . htmlspecialchars($event['tanggal']) . "<br>";
                    
                    // Mengonversi tanggal ke format yang diinginkan
                    $tanggal = new DateTime($event['tanggal']);
                    echo $tanggal->format('d F Y'); // Format: Hari, Tanggal Bulan Tahun
                    ?>
                </td>
                <td class="border px-4 py-2"><?= htmlspecialchars($event['lokasi']) ?></td>
                <td class="border px-4 py-2">
                    <a href="?edit=<?= $event['id_card'] ?>" class="text-blue-600 hover:underline">Edit</a>
                    <a href="?delete=<?= $event['id_card'] ?>" class="text-red-600 hover:underline">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
     </div>
     <!-- Informasi Event Content -->
     <div class="hidden" id="informasi-event-content">
      <form class="space-y-4">
       <input class="w-full p-2 bg-[#8b5e1a] text-white rounded" placeholder="url foto" type="text"/>
       <input class="w-full p-2 bg-[#8b5e1a] text-white rounded" placeholder="Nama event" type="text"/>
       <div class="relative">
        <input class="w-full p-2 bg-[#8b5e1a] text-white rounded" placeholder="mm/dd/yy" type="text"/>
        <i class="fas fa-calendar-alt absolute right-3 top-3 text-white">
        </i>
       </div>
       <div class="relative">
        <input class="w-full p-2 bg-[#8b5e1a] text-white rounded" placeholder="Lokasi" type="text"/>
        <i class="fas fa-map-marker-alt absolute right-3 top-3 text-white">
        </i>
       </div>
       <textarea class="w-full p-2 bg-[#8b5e1a] text-white rounded" placeholder="Deskripsi" rows="3"></textarea>
       <input class="w-full p-2 bg-[#8b5e1a] text-white rounded" placeholder="Lineup" type="text"/>
       <input class="w-full p-2 bg-[#8b5e1a] text-white rounded" placeholder="Venue" type="text"/>
       <button class="bg-[#ffd700] text-[#ffffff] font-bold py-2 px-4 rounded">
        Create Event
       </button>
      </form>
     </div>
    </div>
   </div>
  </div>
  <script src="admin.js"></script>
 </body>
</html>
