<?php
session_start();
include 'koneksi.php'; // Koneksi database
include 'db.php';
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// CRUD CARD DASHBOARD
//BAGIAN CARD DASHBOARD
// Handle Create
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
    $foto_card = $_POST['foto_card'];
    $nama_event = $_POST['nama_event'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $desk = $_POST['desk'];        
    $lineup = $_POST['lineup'];    
    $venue = $_POST['venue'];

    $stmt = $pdo->prepare("INSERT INTO card_dashboard (foto_card, nama_event, tanggal, lokasi, desk, lineup, venue) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$foto_card, $nama_event, $tanggal, $lokasi, $desk, $lineup, $venue]);
}
    
// Handle Update
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id_card = $_POST['id_card'];
    $foto_card = $_POST['foto_card'];
    $nama_event = $_POST['nama_event'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $desk = $_POST['desk'];        // Ambil deskripsi
    $lineup = $_POST['lineup'];    // Ambil lineup
    $venue = $_POST['venue'];      // Ambil venue

    $stmt = $pdo->prepare("UPDATE card_dashboard SET foto_card=?, nama_event=?, tanggal=?, lokasi=?, desk=?, lineup=?, venue=? WHERE id_card=?");
    $stmt->execute([$foto_card, $nama_event, $tanggal, $lokasi, $desk, $lineup, $venue, $id_card]);
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body>
<?php include('footer.php'); ?>
<div class="p-8">
<div id="card-dashboard-content">
     <form method="POST" class="mb-4">
    <input type="hidden" name="id_card" value="<?= isset($event) ? $event['id_card'] : '' ?>">
    <input type="text" name="foto_card" placeholder="URL Foto" required class="w-full bg-[#804E00] text-white p-2 rounded mb-2" value="<?= isset($event) ? $event['foto_card'] : '' ?>">
    <input type="text" name="nama_event" placeholder="Nama Event" required class="w-full bg-[#804E00] text-white p-2 rounded mb-2" value="<?= isset($event) ? $event['nama_event'] : '' ?>">
    <input type="date" name="tanggal" required class="w-full bg-[#804E00] text-white p-2 rounded mb-2" value="<?= isset($event) ? $event['tanggal'] : '' ?>">
    <input type="text" name="lokasi" placeholder="Lokasi" required class="w-full bg-[#804E00] text-white p-2 rounded mb-2" value="<?= isset($event) ? $event['lokasi'] : '' ?>">
    <input type="text" name="desk" placeholder="Deskripsi" required class="w-full bg-[#804E00] text-white p-2 rounded mb-2" value="<?= isset($event) ? $event['desk'] : '' ?>">
<input type="text" name="lineup" placeholder="Lineup (Artis/Pembicara)" class="w-full bg-[#804E00] text-white p-2 rounded mb-2" value="<?= isset($event) ? $event['lineup'] : '' ?>">
<input type="text" name="venue" placeholder="Venue (Tempat Event)" class="w-full bg-[#804E00] text-white p-2 rounded mb-2" value="<?= isset($event) ? $event['venue'] : '' ?>">
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
        <th class="border px-4 py-2">Deskripsi</th>
        <th class="border px-4 py-2">Lineup</th>
        <th class="border px-4 py-2">Venue</th>
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
         <td class="border px-4 py-2"><?= htmlspecialchars($card_dashboard['desk']) ?></td>
         <td class="border px-4 py-2"><?= htmlspecialchars($card_dashboard['lineup']) ?></td> 
         <td class="border px-4 py-2"><img src="<?= htmlspecialchars($card_dashboard['venue']) ?>" alt="Event Image" class="h-16 w-16 object-cover" /></td>
         <!-- <td class="border px-4 py-2"><?= htmlspecialchars($card_dashboard['venue']) ?></td>  -->
         <td class="border px-4 py-2">
         <a href="?edit=<?= $card_dashboard['id_card'] ?>" class="text-blue-600 hover:underline">Edit</a>
        <a href="?delete=<?= $card_dashboard['id_card'] ?>" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus event ini?');">Delete</a>
         </td>
        </tr>
       <?php endforeach; ?>
      </tbody>
     </table>
    </div>
 <script src="admin.js"></script>
</body>
</html>
