<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="gaji">Gaji Karyawan (Rp):</label>
    <input type="number" id="gaji" name="gaji" required><br>
    <label for="pajak">Pajak (%) :</label>
    <input type="number" id="pajak" name="pajak" required><br>
    <input type="submit" name="hitung_gaji" value="Hitung Gaji Bersih">
</form>

<?php
if (isset($_POST['hitung_gaji'])) {
    $gaji = $_POST['gaji'];
    $pajak = $_POST['pajak'];
    $gaji_bersih = $gaji - ($gaji * ($pajak / 100));
    echo "Gaji Bersih Karyawan: Rp " . $gaji_bersih;
}
?>
    
</body>
</html>