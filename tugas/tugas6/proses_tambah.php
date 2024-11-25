<?php  
// Koneksi database 
include 'koneksi.php'; 

// Menangkap data yang dikirim dari form 
$npm = $_POST['npm']; 
$nama = $_POST['nama']; 
$jekel = $_POST['jekel']; 
$jurusan = $_POST['jurusan']; 
$kelas = $_POST['kelas']; 

// Menginput data ke database 
mysqli_query($koneksi, "INSERT INTO tb_mahasiswa (npm, nama, jns_kelamin, jurusan, kelas) VALUES ('$npm', '$nama', '$jekel', '$jurusan', '$kelas')"); 

// Mengalihkan kembali ke halaman index.php 
header("location:index.php"); 
?>