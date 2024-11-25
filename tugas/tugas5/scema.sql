-- Membuat database bernama `tugas5`
CREATE DATABASE IF NOT EXISTS if0_37599442_schema;

-- Menggunakan database `tugas5`
USE if0_37599442_schema;

-- Membuat tabel `tb_barang`
CREATE TABLE IF NOT EXISTS tb_barang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_barang VARCHAR(10) NOT NULL,
    nama_barang VARCHAR(50) NOT NULL,
    kategori_barang VARCHAR(30) NOT NULL,
    harga_barang DECIMAL(10, 2) NOT NULL,
    stok INT NOT NULL
);
