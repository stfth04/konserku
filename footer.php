<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konserku</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Footer Container */
        footer {
            background-color: #804e00; /* Latar belakang */
            color: #ffffff; /* Warna teks */
            padding: 20px 10%;
            width: 100%; /* Lebar penuh */
            font-family: Arial, sans-serif;
            position: relative;
            margin-top:20px;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-column {
            flex: 1;
            min-width: 250px;
            text-align: center;
        }

        .footer-column h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #ffd700;
        }

        .footer-column p,
        .footer-column ul {
            font-size: 14px;
            line-height: 1.6;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 8px;
        }

        .footer-column ul li a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer-column ul li a:hover {
            text-decoration: underline;
            color: #ffd700;
        }

        .social-icons a {
            display: inline-block;
            margin-right: 10px;
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
        }

        .social-icons a:hover {
            color: #ffd700;
        }

        /* Footer Bottom */
        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <footer>
        <div class="footer-container">
            <!-- Kolom Deskripsi -->
            <div class="footer-column">
                <h3>Konserku</h3>
                <p>
                Konserku adalah platform digital yang menyajikan informasi terkini tentang event dan 
      konser di Banjarmasin dan Banjarbaru. Sebagai sumber terpercaya, kami menjembatani 
      penyelenggara acara dengan audiens melalui detail lengkap, mulai dari jadwal, lokasi, hingga tiket.
      Dengan tampilan user-friendly, Konserku mendukung perkembangan hiburan lokal dan mempermudah akses 
      masyarakat terhadap informasi acara berkualitas. 
      Pilihan utama untuk dunia hiburan di Banjarmasin dan Banjarbaru.
                </p>
            </div>

            <!-- Kolom Navigasi Cepat -->
            <div class="footer-column">
                <h3>Navigasi Cepat</h3>
                <ul>
                    <!--<li><a href="ïndex.php" onclick="scrollToTop(event)">Beranda</a></li>-->
                    <li><a href="#events">Jadwal Konser</a></li>
                    <li><a href="#privacy">Kebijakan Privasi</a></li>
                </ul>
            </div>

            <!-- Kolom Kontak -->
            <div class="footer-column">
                <h3>Kontak</h3>
                <p>Email: <a href="mailto:info@konserku.com">info@konserku.com</a></p>
                <p>Telepon: +62 812-3456-7890</p>
                <h3>Ikuti Kami</h3>
                <div class="social-icons">
                    <a href="https://instagram.com" target="_blank">Instagram</a>
                    <a href="https://facebook.com" target="_blank">Facebook</a>
                    <a href="https://twitter.com" target="_blank">Twitter</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            © 2024 Konserku. Semua Hak Dilindungi.
        </div>
    </footer>
</body>
</html>
