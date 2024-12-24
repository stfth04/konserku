<?php
$conn = mysqli_connect('localhost', 'root', '', 'konserku');
if ($conn) {
    echo 'Koneksi berhasil!';
} else {
    echo 'Koneksi gagal: ' . mysqli_connect_error();
}
?>