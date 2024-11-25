<!-- 2. Form untuk menghitung dan menampilkan Luas Persegi Panjang -->
<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Persegi Panjang</title>
</head>
<body>
    <h2>Hitung Luas Persegi Panjang</h2>
    <form method="POST" action="">
        Panjang: <input type="number" name="panjang" required><br><br>
        Lebar: <input type="number" name="lebar" required><br><br>
        <input type="submit" name="hitung_persegi" value="Hitung Luas">
    </form>
    <?php
    if (isset($_POST['hitung_persegi'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $luas = $panjang * $lebar;
        echo "<h3>Luas Persegi Panjang: " . $luas . " satuan persegi</h3>";
    }
    ?>
</body>
</html>