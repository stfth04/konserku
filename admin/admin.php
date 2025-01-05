<?php
session_start();
include 'koneksi.php'; // Koneksi database
include 'db.php';
// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");
//     exit();
// }

// CRUD CARD DASHBOARD
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

// Fetch Data untuk Card Dashboard
$stmt = $pdo->query("SELECT * FROM card_dashboard");
$dashboard_events = $stmt->fetchAll();

// CRUD INFORMASI EVENT

// Handle Create untuk Informasi Event
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create_event'])) {
    $foto_poster = $_POST['foto_poster'];
    $nama_event = $_POST['nama_event'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $desk = $_POST['desk'];
    $linup = $_POST['linup'];
    $venue = $_POST['venue'];

    $stmt = $pdo->prepare("INSERT INTO event (foto_poster, nama_event, tanggal, lokasi, desk, linup, venue) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([$foto_poster, $nama_event, $tanggal, $lokasi, $desk, $linup, $venue]);


    header("Location: admin.php");
    exit();
}

// Handle Update untuk Informasi Event
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_event'])) {
    $id_event = $_POST['id_event'];
    $foto_poster = $_POST['foto_poster'];
    $nama_event = $_POST['nama_event'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $desk = $_POST['desk'];
    $linup = $_POST['linup'];
    $venue = $_POST['venue'];

    $stmt = $pdo->prepare("UPDATE event SET foto_poster=?, nama_event=?, tanggal=?, lokasi=?, desk=?, linup=?, venue=? WHERE id_event=?");
    $stmt->execute([$foto_poster, $nama_event, $tanggal, $lokasi, $desk, $linup, $venue, $id_event]);

    header("Location: admin.php");
    exit();
}

// Handle Delete untuk Informasi Event
if (isset($_GET['delete_event'])) {
    $id_event = $_GET['delete_event'];
    $stmt = $pdo->prepare("DELETE FROM event WHERE id_event=?");
    $stmt->execute([$id_event]);

    header("Location: admin.php");
    exit();
}

// Fetch Data untuk Informasi Event
$stmt = $pdo->query("SELECT * FROM event");
$info_events = $stmt->fetchAll();
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
   <div class="bg-[#804E00] p-4 flex justify-between items-center">
    <!-- Tombol di navbar -->
    <nav class="flex space-x-4">
     <button class="bg-[#ffd700] text-[#ffffff] font-bold py-2 px-4 rounded" id="card-dashboard-btn">
      Card Dashboard
     </button>
     <button class="bg-[#ffd700] text-[#ffffff] font-bold py-2 px-4 rounded" id="informasi-event-btn">
      Informasi Event
     </button>
    </nav>
    <!-- Selamat datang dan profil admin -->
    <h1 class="text-2xl text-[#ffd700] font-bold">Selamat Datang di Dashboard Admin</h1>
    <div class="flex items-center">
     <span class="text-[#ffd700] mr-2">
      Hi, <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Admin'; ?>!
     </span>
     <img src="profile.png" alt="Profile Picture" class="h-10 w-10 rounded-full border-2 border-white" />
     <a href="../event.php" class="text-white ml-4 bg-[#ffd700] px-3 py-1 rounded hover:bg-[#e6c200]">Logout</a>
    </div>
   </div>

    <!-- Card Dashboard Content -->
    <div class="p-8">
    <div id="card-dashboard-content">
     <form method="POST" class="mb-4">
    <input type="hidden" name="id_card" value="<?= isset($event) ? $event['id_card'] : '' ?>">
    <input type="text" name="foto_card" placeholder="URL Foto" required class="w-full bg-[#804E00] text-white p-2 rounded mb-2" value="<?= isset($event) ? $event['foto_card'] : '' ?>">
    <input type="text" name="nama_event" placeholder="Nama Event" required class="w-full bg-[#804E00] text-white p-2 rounded mb-2" value="<?= isset($event) ? $event['nama_event'] : '' ?>">
    <input type="date" name="tanggal" required class="w-full bg-[#804E00] text-white p-2 rounded mb-2" value="<?= isset($event) ? $event['tanggal'] : '' ?>">
    <input type="text" name="lokasi" placeholder="Lokasi" required class="w-full bg-[#804E00] text-white p-2 rounded mb-2" value="<?= isset($event) ? $event['lokasi'] : '' ?>">
    <button type="submit" name="<?= isset($event) ? 'update' : 'create' ?>" class="bg-[#ffd700] text-white px-4 py-2 rounded hover:bg-[#e6c200]">
    <?= isset($event) ? 'Update Event' : 'Create Event' ?>
    </button>

     </form>

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
       <?php foreach ($dashboard_events as $card_dashboard): ?>
        <tr>
         <td class="border px-4 py-2"><?= $card_dashboard['id_card'] ?></td>
         <td class="border px-4 py-2"><img src="<?= htmlspecialchars($card_dashboard['foto_card']) ?>" alt="Event Image" class="h-16 w-16 object-cover" /></td>
         <td class="border px-4 py-2"><?= htmlspecialchars($card_dashboard['nama_event']) ?></td>
         <td class="border px-4 py-2"><?= (new DateTime($card_dashboard['tanggal']))->format('d F Y') ?></td>
         <td class="border px-4 py-2"><?= htmlspecialchars($card_dashboard['lokasi']) ?></td>
         <td class="border px-4 py-2">
         <a href="?edit=<?= $card_dashboard['id_card'] ?>" class="text-blue-600 hover:underline">Edit</a>
<a href="?delete=<?= $card_dashboard['id_card'] ?>" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus event ini?');">Delete</a>

         </td>
        </tr>
       <?php endforeach; ?>
      </tbody>
     </table>
    </div>
    <div id="informasi-event-content" class="p-8">
    <form method="POST" class="mb-4">
        <input type="hidden" name="id_event" value="<?= isset($info_event) ? $info_event['id_event'] : '' ?>">
        <input type="text" name="foto_poster" placeholder="URL Poster" required class="w-full bg-gray-200 p-2 rounded mb-2" value="<?= isset($info_event) ? $info_event['foto_poster'] : '' ?>">
        <input type="text" name="nama_event" placeholder="Nama Event" required class="w-full bg-gray-200 p-2 rounded mb-2" value="<?= isset($info_event) ? $info_event['nama_event'] : '' ?>">
        <input type="date" name="tanggal" required class="w-full bg-gray-200 p-2 rounded mb-2" value="<?= isset($info_event) ? $info_event['tanggal'] : '' ?>">
        <input type="text" name="lokasi" placeholder="Lokasi" required class="w-full bg-gray-200 p-2 rounded mb-2" value="<?= isset($info_event) ? $info_event['lokasi'] : '' ?>">
        <input type="text" name="desk" placeholder="Deskripsi" required class="w-full bg-gray-200 p-2 rounded mb-2" value="<?= isset($info_event) ? $info_event['desk'] : '' ?>">
        <input type="text" name="linup" placeholder="Lineup" required class="w-full bg-gray-200 p-2 rounded mb-2" value="<?= isset($info_event) ? $info_event['linup'] : '' ?>">
        <input type="text" name="venue" placeholder="Venue" required class="w-full bg-gray-200 p-2 rounded mb-2" value="<?= isset($info_event) ? $info_event['venue'] : '' ?>">
        <button type="submit" name="<?= isset($info_event) ? 'update_event' : 'create_event' ?>" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
            <?= isset($info_event) ? 'Update Event' : 'Create Event' ?>
        </button>
    </form>

    <!-- Tabel Data Informasi Event -->
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Poster</th>
                <th class="border px-4 py-2">Nama Event</th>
                <th class="border px-4 py-2">Tanggal</th>
                <th class="border px-4 py-2">Lokasi</th>
                <th class="border px-4 py-2">Deskripsi</th>
                <th class="border px-4 py-2">Lineup</th>
                <th class="border px-4 py-2">Venue</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($info_events as $info_event): ?>
                <tr>
                    <td class="border px-4 py-2"><?= $info_event['id_event'] ?></td>
                    <td class="border px-4 py-2"><img src="<?= htmlspecialchars($info_event['foto_poster']) ?>" alt="Poster" class="h-16 w-16 object-cover"></td>
                    <td class="border px-4 py-2"><?= htmlspecialchars($info_event['nama_event']) ?></td>
                    <td class="border px-4 py-2"><?= htmlspecialchars($info_event['tanggal']) ?></td>
                    <td class="border px-4 py-2"><?= htmlspecialchars($info_event['lokasi']) ?></td>
                    <td class="border px-4 py-2"><?= htmlspecialchars($info_event['desk']) ?></td>
                    <td class="border px-4 py-2"><?= htmlspecialchars($info_event['linup']) ?></td>
                    <td class="border px-4 py-2"><?= htmlspecialchars($info_event['venue']) ?></td>
                    <td class="border px-4 py-2">
                        <a href="?edit_event=<?= $info_event['id_event'] ?>" class="text-blue-600 hover:underline">Edit</a>
                        <a href="?delete_event=<?= $info_event['id_event'] ?>" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus event ini?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
 <script src="admin.js"></script>
</body>
</html>
