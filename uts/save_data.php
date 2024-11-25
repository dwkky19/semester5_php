<?php
// Menginclude file koneksi
include 'db_connection.php';

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $stok = $_POST['stok'];
    // Menghitung total harga
    $total_harga = $harga_barang * $stok;

    // Persiapkan dan bind
    $stmt = $conn->prepare("INSERT INTO tb_barang (nama_barang, harga_barang, stok, total_harga) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdid", $nama_barang, $harga_barang, $stok, $total_harga);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil disimpan!');</script>";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    // Tutup statement dan koneksi
    $stmt->close();
}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Barang</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #6E85B7, #B1C5D8);
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Ubah untuk menjaga form di atas */
            height: 100vh;
            margin: 0;
            padding-top: 20px; /* Tambahkan padding atas untuk tampilan yang lebih baik */
        }
        .form-container {
            background-color: #ffffff;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            transition: transform 1s ease;
            margin-bottom: 20px; /* Tambahkan margin bawah */
        }
        .form-container:hover {
            transform: scale(1.05);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }
        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            transition: border 0.3s;
        }
        .form-container input[type="text"]:focus,
        .form-container input[type="number"]:focus,
        .form-container select:focus {
            border-color: #6E85B7;
            outline: none;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            font-size: 17px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .form-container input[type="submit"]:hover {
            background: linear-gradient(135deg, #45a049, #4CAF50);
        }
        .data-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
        }
        .data-container h2 {
            text-align: center;
            color: #333;
        }
        .data-container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .data-container th, .data-container td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .data-container th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Input Data Barang</h2>
        <form method="post" action="">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" name="nama_barang" id="nama_barang" required>
            
            <label for="harga_barang">Harga Barang:</label>
            <input type="number" name="harga_barang" id="harga_barang" required>
            
            <label for="stok">Jumlah Barang:</label>
            <input type="number" name="stok" id="stok" required>
            
            <input type="submit" value="Simpan Data">
        </form>
    </div>

    <div class="data-container">
        <h2>Data Barang</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menginclude file koneksi
                include 'db_connection.php';

                // Ambil data dari database untuk ditampilkan
                $result = $conn->query("SELECT nama_barang, harga_barang, stok, total_harga FROM tb_barang");

                if ($result->num_rows > 0) {
                    // Output data dari setiap baris
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['nama_barang']}</td>
                                <td>{$row['harga_barang']}</td>
                                <td>{$row['stok']}</td>
                                <td>{$row['total_harga']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' style='text-align:center;'>Tidak ada data</td></tr>";
                }

                // Tutup koneksi
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
