-- Membuat database bernama `db_barang`
CREATE DATABASE IF NOT EXISTS db_barang;

-- Menggunakan database `db_barang`
USE db_barang;

-- Membuat tabel `tb_barang` tanpa kolom id
CREATE TABLE IF NOT EXISTS tb_barang (
    nama_barang VARCHAR(50) PRIMARY KEY,
    harga_barang DECIMAL(10, 2) NOT NULL,
    stok INT NOT NULL
);
