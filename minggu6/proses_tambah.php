<?php
// koneksi database
include 'koneksi.php';

if (isset($_POST['BtnSimpan'])) {
    // menangkap data yang dikirim dari form
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jekel = $_POST['jekel'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    
    // menginput data ke database
    $query = "INSERT INTO mahasiswa (npm, nama, jekel, jurusan, kelas) 
              VALUES ('$npm', '$nama', '$jekel', '$jurusan', '$kelas')";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: tambah_mahasiswa.php"); // Sukses, alihkan
    } else {
        // Tampilkan pesan error jika query gagal
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
