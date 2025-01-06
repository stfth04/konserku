<?php
session_start();
session_destroy();
echo '<script>alert("Anda Berhasil logout"); window.location="../index.php";</script>';
?>