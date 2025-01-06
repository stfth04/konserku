<?php
$host = ".mi3c.my.id.com";
$user = "kelompokotia";
$pass = "Suri1212";
$database = "konserku";

$koneksi = mysqli_connect($host, $user, $pass, $database);
if (!$koneksi) {
  die("Connection Failed:" . mysqli_connect_error());
}
?>