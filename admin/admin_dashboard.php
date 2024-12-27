<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect jika belum login
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - Konserku</title>
    <link rel="stylesheet" href="admin.css" />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="logo">Konserku</div>
        <div class="search-bar">
          <input type="text" placeholder="Search events..." />
          <button>Search</button>
        </div>
        <div class="user-profile">
          <img src="user-icon.png" alt="User" class="user-icon" />
          <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
        </div>
      </nav>
    </header>

    <main>
      <section id="dashboard">
        <h2>Dashboard</h2>
        <div class="event-cards">
          <div class="event-card">
            <h3>Concert Name</h3>
            <p>Location: Jakarta</p>
            <p>Date: 2024-12-30</p>
          </div>
          <div class="event-card">
            <h3>Concert Name</h3>
            <p>Location: Bandung</p>
            <p>Date: 2024-12-31</p>
          </div>
          <div class="event-card">
            <h3>Concert Name</h3>
            <p>Location: Surabaya</p>
            <p>Date: 2025-01-01</p>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <p>&copy; 2024 Konserku. All rights reserved.</p>
    </footer>
  </body>
</html>
