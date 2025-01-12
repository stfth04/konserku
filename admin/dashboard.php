<?php
include 'koneksi.php'; // Koneksi database
include 'db.php';

//if (!isset($_SESSION['log'])) {
   // header("Location: login.php");
  //  exit();
//}
session_start();
if (!isset($_SESSION['log']) || $_SESSION['log'] !== 'login') {
    header('Location: login.php');
    exit();
}


try {
    // Query untuk menghitung total event
    $stmt = $pdo->prepare("SELECT COUNT(*) as total_events FROM card_dashboard");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC); // Ambil hasil sebagai array asosiatif
    $total_events = $result['total_events']; // Ambil jumlah total event
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    $total_events = 0; // Default jika terjadi error
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <style>
         .container {
            padding: 20px;
        }

        .summary-section {
            display: flex;
            justify-content: center; /* Centers items horizontally */
            align-items: center;    /* Centers items vertically */
            gap: 20px;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .stat-card {
            background: #804E00;
            color: #ffd700;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            flex: 1;
            max-width: 80%; /* Optional: control card width */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .stat-card h3 {
            margin: 0;
            font-size: 1.2em;
        }

        .stat-card p {
            margin: 10px 0 0;
            font-size: 2em;
            font-weight: bold;
        }
        </style>
<?php include('footer.php'); ?>
<div class="container">
<div class="summary-section">
    <div class="stat-card">
        <h3>Total Events</h3>
        <p><?php echo $total_events; ?></p>
    </div>
</div>
</body>
</html>
