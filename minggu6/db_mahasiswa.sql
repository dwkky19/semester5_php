CREATE TABLE mahasiswa (
    npm VARCHAR(20) PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jekel ENUM('L', 'P') NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    kelas VARCHAR(50) NOT NULL
);