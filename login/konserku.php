<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="logout.css" />
</head>
<body>
<form action="logout.php" method="POST" class="login-email"> 
    <div style="text-align:center; padding:15%;">
    <p style="font-size:50px; font-weight:bold;">
        HALO BUB BARU SAMPE SINI
        <div class="logout-wrapperp"> 
        <button type="submit" class="btn">Daftar/Login</button> 
        <button type="submit" class="btn">Logout</button> 
    </div> 
        <?php
        if(isset($_SESSION['email'])){
          $email=$_SESSION['email'];
           $query=mysqli_query($conn, "SELECT users.* FROM 'login' WHERE users.email='$email'");
  while($row=mysqli_fetch_array($query)){
    echo $row['lName'].''.$row['email'];
  }
}
  ?>
  </p>
</body>
</html>
