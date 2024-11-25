<?php  
// Koneksi database 
include 'koneksi.php'; 

// Memproses data saat form di-submit 
if (isset($_POST["npm"]) && !empty($_POST["npm"])) { 

    // Menangkap data yang dikirim dari form 
    $npm = $_POST['npm']; 
    $nama = $_POST['nama']; 
    $jekel = $_POST['jekel']; 
    $jurusan = $_POST['jurusan']; 
    $kelas = $_POST['kelas']; 

    // Mengupdate data ke database 
    $update = mysqli_query($koneksi, "UPDATE tb_mahasiswa SET nama='$nama', jns_kelamin='$jekel', kelas='$kelas', jurusan='$jurusan' WHERE npm='$npm'") or die(mysqli_error($koneksi)); 

    if ($update) { 
        header("location:index.php"); 
    } else { 
        echo 'Gagal menyimpan data! '; 
        echo '<a href="index.php">Kembali</a>'; 
    } 
} 
?>