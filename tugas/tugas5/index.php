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
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            transition: transform 1s ease;
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
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Input Data Barang</h2>
        <form method="post" action="">
            <label for="kode_barang">Kode Barang:</label>
            <input type="text" name="kode_barang" id="kode_barang" required>
            
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" name="nama_barang" id="nama_barang" required>
            
            <label for="kategori_barang">Kategori Barang:</label>
            <select name="kategori_barang" id="kategori_barang" required>
                <option value="">Pilih Kategori</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Furnitur">Furnitur</option>
                <option value="Alat Tulis">Alat Tulis</option>
            </select>
            
            <label for="harga_barang">Harga Barang:</label>
            <input type="number" name="harga_barang" id="harga_barang" required>
            
            <label for="stok">Stok Barang:</label>
            <input type="number" name="stok" id="stok" required>
            
            <input type="submit" value="Simpan Data">
        </form>
    </div>
</body>
</html>
