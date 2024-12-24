<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $lname = $_POST['lname'];
  $password = $_POST['password'];

  // Contoh validasi login (ganti dengan database Anda)
  if ($username === 'admin' && $password === '1234') {
      // Simpan sesi login
      $_SESSION['user_id'] = $username;

      // Arahkan kembali ke dashboard
      header('Location: dashboard.php');
      exit;
  } else {
      // Login gagal, arahkan kembali ke login
      header('Location: login.php?error=1');
      exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register & Login</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="container" id="signup" style="display: none">
      <h1 class="form-title">Sign Up</h1>
      <form method="post" action="procces_login.php">
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input
            type="text"
            name="lName"
            id="Username"
            placeholder="Username"
            required
          />
          <label for="Username">Username</label>
        </div>
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
          />
          <label for="email">Email</label>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password"
            required
          />
          <label for="password">Password</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp" />
      </form>
      <div class="links">
        <p>Already Have An Account?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
      <h1 class="form-title">Sign In</h1>
      <form method="post" action="procces_login.php">
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
          />
          <label for="email">Email</label>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password"
            required
          />
          <label for="password">Password</label>
        </div>
        <p class="recover">
          <a href="#">Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="signIn" />
      </form>
      <div class="links">
        <p>Don't Have Account?</p>
        <button id="signUpButton">Sign Up</button>
      </div>
    </div>
    <script src="login.js"></script>
  </body>
</html>
