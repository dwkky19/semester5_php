<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="panjang">Panjang (cm):</label>
    <input type="number" id="panjang" name="panjang" required>
    <label for="lebar">Lebar (cm):</label>
    <input type="number" id="lebar" name="lebar" required>
    <input type="submit" name="hitung_persegi" value="Hitung Luas">
</form>

<?php
if (isset($_POST['hitung_persegi'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $luas = $panjang * $lebar;
    echo "Luas Persegi Panjang: " . $luas . " cm²";
}
?>
</body>
</html>