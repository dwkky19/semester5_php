CREATE TABLE `mahasiswa` (
 `npm` varchar(15) NOT NULL,
 `nama` varchar(40) DEFAULT NULL,
 `jns_kelamin` varchar(10) DEFAULT NULL,
 `jurusan` varchar(15) DEFAULT NULL,
 `kelas` varchar(10) DEFAULT NULL,
 `photo` varchar(50) DEFAULT NULL,
 PRIMARY KEY (`npm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;