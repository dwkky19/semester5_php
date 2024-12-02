<?php
// koneksi database
include 'koneksi.php';

// Memproses data saat form di submit
if (isset($_POST["npm"]) && !empty($_POST["npm"])) {
    // menangkap data yang di kirim dari form
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jekel = $_POST['jekel'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];

    // Validasi dan proses file upload
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $photo = $_FILES['file']['name'];
    $x = explode('.', $photo);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $namafile = 'img_' . $npm . '.jpg';

    // Jika file tidak diunggah
    if (empty($file_tmp)) {
        $update = mysqli_query($koneksi, "UPDATE mahasiswa SET 
            nama='$nama', 
            jns_kelamin='$jekel', 
            kelas='$kelas', 
            jurusan='$jurusan' 
            WHERE npm='$npm'");

        if ($update) {
            echo "<script>alert('DATA BERHASIL DIUPDATE');window.location='index.php';</script>";
        } else {
            echo "<script>alert('UPDATE GAGAL: " . mysqli_error($koneksi) . "');window.location='index.php';</script>";
        }
    } else {
        // Validasi ekstensi file
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            // Validasi ukuran file
            if ($ukuran < 1044070) {
                // Upload file
                if (move_uploaded_file($file_tmp, 'file/' . $namafile)) {
                    $update = mysqli_query($koneksi, "UPDATE mahasiswa SET 
                        nama='$nama', 
                        jns_kelamin='$jekel', 
                        kelas='$kelas', 
                        jurusan='$jurusan', 
                        photo='$namafile' 
                        WHERE npm='$npm'");

                    if ($update) {
                        echo "<script>alert('DATA BERHASIL DIUPDATE');window.location='index.php';</script>";
                    } else {
                        echo "<script>alert('UPDATE GAGAL: " . mysqli_error($koneksi) . "');window.location='index.php';</script>";
                    }
                } else {
                    echo "<script>alert('GAGAL MENGUPLOAD GAMBAR');window.location='index.php';</script>";
                }
            } else {
                echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='tambahdata.php';</script>";
            }
        } else {
            echo "<script>alert('EKSTENSI FILE YANG DIUPLOAD TIDAK DIIZINKAN');window.location='edit_datamahasiswa.php?id=$npm';</script>";
        }
    }
} else {
    echo "<script>alert('NPM TIDAK BOLEH KOSONG');window.location='tambahdata.php';</script>";
}
?>