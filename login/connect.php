<?php
$conn = mysqli_connect('localhost', 'root', '', 'konserku');
if ($conn) {
} else {
    echo 'Koneksi gagal: ' . mysqli_connect_error();
}
?>