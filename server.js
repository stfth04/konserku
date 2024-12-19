const express = require("express");
const mysql = require("mysql");
const bodyParser = require("body-parser");
const cors = require("cors");

const app = express();
const port = 3000;

app.use(cors());
app.use(bodyParser.json());

// Koneksi ke database
const db = mysql.createConnection({
  host: "localhost",
  user: "root", // Ganti dengan username MySQL Anda
  password: "", // Ganti dengan password MySQL Anda
  database: "informasi",
});

db.connect((err) => {
  if (err) throw err;
  console.log("Connected to database");
});

// Endpoint untuk mendapatkan semua event
app.get("/events", (req, res) => {
  db.query("SELECT * FROM events", (err, results) => {
    if (err) throw err;
    res.json(results);
  });
});

// Endpoint untuk menambahkan event baru
app.post("/events", (req, res) => {
  const { poster, nama_event, tanggal, lokasi } = req.body;
  const sql =
    "INSERT INTO events (poster, nama_event, tanggal, lokasi) VALUES (?, ?, ?, ?)";
  db.query(sql, [poster, nama_event, tanggal, lokasi], (err, result) => {
    if (err) throw err;
    res.json({
      id_event: result.insertId,
      poster,
      nama_event,
      tanggal,
      lokasi,
    });
  });
});

app.listen(port, () => {
  console.log(`Server running at http://localhost:${port}`);
});
