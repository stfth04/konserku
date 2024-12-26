<?php
session_start();
session_destroy();
header("Location: konser/index.php");
exit;
?>
