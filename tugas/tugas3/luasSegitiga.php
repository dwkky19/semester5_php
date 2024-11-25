<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="alas">Alas Segitiga (cm):</label>
    <input type="number" id="alas" name="alas" required>
    <label for="tinggi">Tinggi Segitiga (cm):</label>
    <input type="number" id="tinggi" name="tinggi" required>
    <input type="submit" name="hitung_segitiga" value="Hitung Luas">
</form>

<?php
if (isset($_POST['hitung_segitiga'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $luas = 0.5 * $alas * $tinggi;
    echo "Luas Segitiga: " . $luas . " cm²";
}
?>
</body>
</html>