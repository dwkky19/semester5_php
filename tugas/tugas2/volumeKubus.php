<!-- 1. Buat form untuk menghitung dan menampilkan volume Kubus -->
<!DOCTYPE html>
<html>
<head>
    <title>Hitung Volume Kubus</title>
</head>
<body>
    <h2>Hitung Volume Kubus</h2>
    <form method="POST" action="">
        Sisi Kubus: <input type="number" name="sisi_kubus" required><br><br>
        <input type="submit" name="hitung_kubus" value="Hitung Volume">
    </form>
    <?php
    if (isset($_POST['hitung_kubus'])) {
        $sisi = $_POST['sisi_kubus'];
        $volume = pow($sisi, 3);
        echo "<h3>Volume Kubus: " . $volume . " satuan kubik</h3>";
    }
    ?>
</body>
</html>



