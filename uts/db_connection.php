<?php
// db_connection.php

$servername = "localhost"; // Nama server
$username = "root";         // Username database
$password = "";             // Password database (default kosong di XAMPP)
$dbname = "db_barang";      // Nama database yang baru dibuat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
