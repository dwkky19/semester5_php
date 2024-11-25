<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="panjang">Panjang Balok (cm):</label>
    <input type="number" id="panjang" name="panjang" required>
    <label for="lebar">Lebar Balok (cm):</label>
    <input type="number" id="lebar" name="lebar" required>
    <label for="tinggi">Tinggi Balok (cm):</label>
    <input type="number" id="tinggi" name="tinggi" required>
    <input type="submit" name="hitung_balok" value="Hitung Volume">
</form>

<?php
if (isset($_POST['hitung_balok'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $tinggi = $_POST['tinggi'];
    $volume = $panjang * $lebar * $tinggi;
    echo "Volume Balok: " . $volume . " cm³";
}
?>

</body>
</html>