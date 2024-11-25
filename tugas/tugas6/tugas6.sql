-- Membuat database tugas6
CREATE DATABASE IF NOT EXISTS tugas6;

-- Menggunakan database tugas
USE tugas6;

-- Membuat tabel tb_mahasiswa
CREATE TABLE IF NOT EXISTS tb_mahasiswa (
    npm VARCHAR(20) PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jns_kelamin ENUM('L', 'P') NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    kelas VARCHAR(10) NOT NULL
);

-- Menambahkan data contoh ke tabel tb_mahasiswa
INSERT INTO tb_mahasiswa (npm, nama, jns_kelamin, jurusan, kelas) VALUES
('1800001', 'Ahmad', 'L', 'TI', 'A'),
('1800002', 'Siti', 'P', 'SI', 'B'),
('1800003', 'Budi', 'L', 'SIA', 'A');
