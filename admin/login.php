<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Konserku</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="login-container">
      <h1>Login to Admin Konserku</h1>
      <form id="login-form" method="POST" action="connect.php">
        <label for="username">Username</label>
        <input
          type="text"
          id="username"
          name="username"
          placeholder="Enter your username"
          required
        />

        <label for="password">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Enter your password"
          required
        />

        <button type="submit">Login</button>
      </form>
      <p id="login-error" style="color: red; display: none">
        Invalid username or password. Please try again.
      </p>
    </div>
  </body>
</html>
