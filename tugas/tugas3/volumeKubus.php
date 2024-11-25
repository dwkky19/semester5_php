<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="sisi">Sisi Kubus (cm):</label>
    <input type="number" id="sisi" name="sisi" required>
    <input type="submit" name="hitung_kubus" value="Hitung Volume">
</form>

<?php
if (isset($_POST['hitung_kubus'])) {
    $sisi = $_POST['sisi'];
    $volume = pow($sisi, 3);
    echo "Volume Kubus: " . $volume . " cm³";
}
?>

</body>
</html>