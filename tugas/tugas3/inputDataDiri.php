<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>
    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" required>
    <label for="usia">Usia:</label>
    <input type="number" id="usia" name="usia" required>
    <input type="submit" name="input_data" value="Simpan Data">
</form>

<?php
if (isset($_POST['input_data'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    echo "Data Diri:<br>Nama: $nama<br>Alamat: $alamat<br>Usia: $usia tahun";
}
?>

</body>
</html>