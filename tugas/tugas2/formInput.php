<!-- 3. Form untuk input NPM, Nama, Jurusan, Nilai dan menampilkan hasil input -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Mahasiswa</title>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>
    <form method="POST" action="">
        NPM: <input type="text" name="npm" required><br><br>
        Nama: <input type="text" name="nama" required><br><br>
        Jurusan: <input type="text" name="jurusan" required><br><br>
        Nilai: <input type="number" name="nilai" required><br><br>
        <input type="submit" name="submit_data" value="Submit Data">
    </form>
    <?php
    if (isset($_POST['submit_data'])) {
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $nilai = $_POST['nilai'];
        
        echo "<h3>Data Mahasiswa</h3>";
        echo "NPM: " . $npm . "<br>";
        echo "Nama: " . $nama . "<br>";
        echo "Jurusan: " . $jurusan . "<br>";
        echo "Nilai: " . $nilai . "<br>";
    }
    ?>
</body>
</html>
