<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="jari">Jari-jari Lingkaran (cm):</label>
    <input type="number" id="jari" name="jari" required>
    <input type="submit" name="hitung_lingkaran" value="Hitung Luas">
</form>

<?php
if (isset($_POST['hitung_lingkaran'])) {
    $jari = $_POST['jari'];
    $luas = pi() * pow($jari, 2);
    echo "Luas Lingkaran: " . $luas . " cm²";
}
?>
</body>
</html>