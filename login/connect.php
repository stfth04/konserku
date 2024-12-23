<?php
$conn = mysqli_connect("localhost", "root", "", "konserku");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>