<?php
session_start();
$_SESSION = array(); // Menghapus semua variabel sesi
session_destroy(); // Menghancurkan sesi
header("location: konser/event.php"); // Arahkan kembali ke halaman dashboard
exit();
?>