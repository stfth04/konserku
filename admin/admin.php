<?php
session_start();
include 'config.php'; // Koneksi database
include 'db.php';
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

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard Admin - Konserku.id</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-blue-200">
    <nav class="bg-blue p-4 flex justify-between items-center">
        <div class="flex items-center">
            <h1 class="text-2xl font-bold mb-4">Selamat Datang di Dashboard Admin</h1>
        </div>
        <div class="flex items-center">
            <span class="text-[#000000] mr-2">Hi, <?= htmlspecialchars($_SESSION['username']); ?>!</span>
            <img src="ara.jpeg" alt="Profile Picture" class="h-10 w-10 rounded-full border-2 border-white" />
            <a href="konser/event.php" class="text-white ml-4 bg-red-600 px-3 py-1 rounded hover:bg-red-700">Logout</a>
        </div>
    </nav>
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">Manage Events</h2>
        <!-- Form untuk menambah atau mengedit event -->
        <form method="POST" class="mb-4">
        <input type="hidden" name="id_card" value="<?= isset($event) ? $event['id_card'] : '' ?>">
            <input type="text" name="foto_card" placeholder="URL Foto" required class="border p-2 mb-2 w-full" value="<?= isset($event) ? $event['foto_card'] : '' ?>">
            <input type="text" name="nama_event" placeholder="Nama Event" required class="border p-2 mb-2 w-full" value="<?= isset($event) ? $event['nama_event'] : '' ?>">
            <input type="date" name="tanggal" required class="border p-2 mb-2 w-full" value="<?= isset($event) ? $event['tanggal'] : '' ?>">
            <input type="text" name="lokasi" placeholder="Lokasi" required class="border p-2 mb-2 w-full" value="<?= isset($event) ? $event['lokasi'] : '' ?>">
            <button type="submit" name="<?= isset($event) ? 'update' : 'create' ?>" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                <?= isset($event) ? 'Update Event' : 'Create Event' ?>
            </button>
        </form>

        <!-- Tabel untuk menampilkan daftar event -->
<!-- Tabel untuk menampilkan daftar event -->
<table class="min-w-full bg-white border border-gray-300">
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
</body>
</html>