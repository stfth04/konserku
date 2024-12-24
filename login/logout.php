<?php
session_start();
session_destroy();

// Arahkan kembali ke dashboard
header('Location: index.php');
exit;
?>
