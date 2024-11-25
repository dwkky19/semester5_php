<?php
// Koneksi ke MySQL
$conn = mysqli_connect("localhost", "root", "", "akademik");
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal: " . mysqli_connect_error();
    exit();
}

// Memeriksa apakah form sudah di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mendapatkan dan mengamankan input dari pengguna
    $vnpm = mysqli_real_escape_string($conn, $_POST['txtnpm']);
    $vnmmhs = mysqli_real_escape_string($conn, $_POST['txtnm_mahasiswa']);
    $vjk = mysqli_real_escape_string($conn, $_POST['cbjk']);
    $vkelas = mysqli_real_escape_string($conn, $_POST['txtkelas']);
    
    // Memeriksa jika semua data sudah terisi
    if (!empty($vnpm) && !empty($vnmmhs) && $vjk != "-" && !empty($vkelas)) {
        // Menyimpan data ke database
        $query = mysqli_query($conn, "INSERT INTO tb_mahasiswa (npm, nama, jns_kelamin, kelas) 
                                      VALUES ('$vnpm', '$vnmmhs', '$vjk', '$vkelas')");
        if ($query) {
            echo "Input Data Sukses<br>";
        } else {
            echo "Input Data Gagal: " . mysqli_error($conn) . "<br>";
        }
    } else {
        echo "Mohon isi semua data dengan lengkap.<br>";
    }
}
?>
