<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Tugas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        label {
            font-weight: bold;
        }
        input {
            margin-bottom: 10px;
            padding: 5px;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>TUGAS</h1>
    <form method="post" action="">
        <label for="npm">Input NPM:</label><br>
        <input type="text" id="npm" name="npm" required><br><br>

        <label for="nama">Input Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nilai">Input Nilai:</label><br>
        <input type="number" id="nilai" name="nilai" required><br><br>

        <input type="submit" name="submit" value="Input">
    </form>

    <?php
        // Cek apakah tombol submit ditekan
        if (isset($_POST['submit'])) {
            // Mengambil data dari form
            $npm = htmlspecialchars($_POST['npm']);
            $nama = htmlspecialchars($_POST['nama']);
            $nilai = (int) $_POST['nilai'];  // Pastikan nilai dikonversi ke integer

            // Logika penentuan lulus/tidak dan grade
            if ($nilai >= 85) {
                $grade = "A";
            } elseif ($nilai >= 75) {
                $grade = "B";
            } elseif ($nilai >= 65) {
                $grade = "C";
            } else {
                $grade = "D";
            }

            $lulus = $nilai >= 65 ? "Selamat Anda Lulus" : "Maaf Anda Tidak Lulus";

            // Menampilkan hasil setelah klik submit
            echo "<h3>Hasil Input</h3>";
            echo "NPM Anda: " . $npm . "<br>";
            echo "Nama Anda: " . $nama . "<br>";
            echo "Nilai Anda: " . $nilai . "<br>";
            echo $lulus . "<br>";
            echo "Grade: " . $grade;
        }
    ?>
</body>
</html>
