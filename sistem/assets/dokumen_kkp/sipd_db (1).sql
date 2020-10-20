-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2020 at 08:05 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(9) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `number_handphone` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `number_handphone`, `email`, `username`, `password`) VALUES
(1, 'Fitra Odhe', '081356548663', 'fitra241997@gmail.com', 'fitra', 'fitra'),
(4, 'Rika', '082394472445', 'rikasdianti@gmail.com', 'rika', 'rika'),
(5, 'Herni', '082292218369', 'hernidm008@gmail.com', 'herni', 'herni');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_kkp`
--

CREATE TABLE `dokumen_kkp` (
  `id_dokumen_kkp` int(9) NOT NULL,
  `id_upload_kkp` int(9) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_kkp`
--

INSERT INTO `dokumen_kkp` (`id_dokumen_kkp`, `id_upload_kkp`, `tahun`) VALUES
(14, 5, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_skripsi`
--

CREATE TABLE `dokumen_skripsi` (
  `id_dokumen_skripsi` int(9) NOT NULL,
  `id_upload` int(9) NOT NULL,
  `file_abstrak_inggris` varchar(150) NOT NULL,
  `file_abstrak_indonesia` varchar(150) NOT NULL,
  `file_bab_I` varchar(150) NOT NULL,
  `file_full_skripsi` varchar(150) NOT NULL,
  `file_full_proposal` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(9) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `number_handphone` varchar(13) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama`, `number_handphone`, `email`, `username`, `password`) VALUES
(387626, 'HERNI DAMAYANTI SUHASTI', '082292218369', 'hernidm008@gmail.com', 'herni', 'herni');

-- --------------------------------------------------------

--
-- Table structure for table `download_kkp`
--

CREATE TABLE `download_kkp` (
  `Id_download_kkp` int(9) NOT NULL,
  `Id_dokumen_kkp` int(9) NOT NULL,
  `id_dosen` int(9) NOT NULL,
  `tanggal_download` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `download_skripsi`
--

CREATE TABLE `download_skripsi` (
  `id_download` int(9) NOT NULL,
  `id_dokumen_skripsi` int(9) NOT NULL,
  `id_dosen` int(9) NOT NULL,
  `tanggal_download` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(9) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat`, `kontak`) VALUES
(1, 'BPKP', 'JL.AHMAD YANI', '085245715272318'),
(2, 'Bank Indonesia', 'Jln. Sultan Hasanuddin', '                                54321                         ');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id_kelompok` int(9) NOT NULL,
  `id_mahasiswa` varchar(9) NOT NULL,
  `id_instansi` int(9) NOT NULL,
  `status_kelompok` varchar(25) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `dosen_pembimbing` varchar(200) NOT NULL,
  `pembimbing_lapangan` varchar(200) NOT NULL,
  `tahun_akademik` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id_kelompok`, `id_mahasiswa`, `id_instansi`, `status_kelompok`, `tanggal_masuk`, `tanggal_keluar`, `dosen_pembimbing`, `pembimbing_lapangan`, `tahun_akademik`) VALUES
(22, 'F1A316020', 2, 'Anggota', '2020-06-01', '2020-07-01', 'asrul sani', 'niko', '20201'),
(24, 'F1A316050', 2, 'Anggota', '2020-07-01', '2020-08-05', 'LA SURIMI', 'IMAN', '20191'),
(25, 'F1A316016', 1, 'Anggota', '2020-06-01', '2020-07-01', 'ggg', 'bbbbbbbbbb', '20201'),
(26, 'F1A316020', 2, 'Ketua', '2020-06-24', '2020-06-24', 'La Surimi,', 'Pak riki', '20191');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` varchar(9) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `angkatan`, `email`, `username`, `password`) VALUES
('F1A316016', 'FITRA', 2016, 'fitra241997@gmail.com', 'fitra', 'odhe'),
('F1A316020', 'Herni', 2016, 'hernidm008@gmail.com', 'herni', 'herni'),
('F1A316050', 'Rika', 2016, 'rikasdianti@gmail.com', 'rika', 'rika');

-- --------------------------------------------------------

--
-- Table structure for table `memvalidasi_dokumen_kkp`
--

CREATE TABLE `memvalidasi_dokumen_kkp` (
  `id_val_kkp` int(9) NOT NULL,
  `id_admin` int(9) NOT NULL,
  `id_dokumen` int(9) NOT NULL,
  `tanggal_validasi` date NOT NULL,
  `status_validasi` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memvalidasi_dokumen_skripsi`
--

CREATE TABLE `memvalidasi_dokumen_skripsi` (
  `id_val_skripsi` int(9) NOT NULL,
  `id_dokumen_skripsi` int(9) NOT NULL,
  `id_admin` int(9) NOT NULL,
  `tanggal_validasi` date NOT NULL,
  `status_validasi` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mengupload_file_skripsi`
--

CREATE TABLE `mengupload_file_skripsi` (
  `id_upload` int(9) NOT NULL,
  `id_mahasiswa` varchar(9) NOT NULL,
  `judul` text NOT NULL,
  `tahun` year(4) NOT NULL,
  `abstrak_inggris` longtext NOT NULL,
  `abstrak_indonesia` longtext NOT NULL,
  `tanggal_upload` date NOT NULL,
  `pembimbing_I` varchar(200) NOT NULL,
  `Pembimbing_II` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengupload_file_skripsi`
--

INSERT INTO `mengupload_file_skripsi` (`id_upload`, `id_mahasiswa`, `judul`, `tahun`, `abstrak_inggris`, `abstrak_indonesia`, `tanggal_upload`, `pembimbing_I`, `Pembimbing_II`) VALUES
(2, 'F1A316050', 'Sistem Informasi', 2020, 'Indonesia', 'inggris', '2020-06-27', 'ok', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `mengupload_laporan_kkp`
--

CREATE TABLE `mengupload_laporan_kkp` (
  `id_kelompok` int(9) NOT NULL,
  `id_upload_kkp` int(9) NOT NULL,
  `file_bab_1` varchar(255) NOT NULL,
  `file_lengkap_laporan_kkp` varchar(255) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengupload_laporan_kkp`
--

INSERT INTO `mengupload_laporan_kkp` (`id_kelompok`, `id_upload_kkp`, `file_bab_1`, `file_lengkap_laporan_kkp`, `tanggal_upload`, `keterangan`) VALUES
(25, 3, 'Screen Shot 2020-06-16 at 20.42.59.png', 'Screen Shot 2020-06-22 at 16.48.50.png', '2020-06-23', 'ok'),
(22, 4, 'Screen Shot 2020-06-16 at 20.42.59.png', 'Screen Shot 2020-06-22 at 16.48.50.png', '2020-06-23', 'ok'),
(24, 5, 'Screen Shot 2020-06-16 at 20.42.59.png', 'Screen Shot 2020-06-22 at 16.48.50.png', '2020-06-24', 'ok'),
(24, 6, 'Screen Shot 2020-06-16 at 20.42.59.png', 'Screen Shot 2020-06-22 at 16.48.50.png', '2020-06-24', 'ok'),
(24, 7, 'Screen Shot 2020-06-16 at 20.42.59.png', 'Screen Shot 2020-06-22 at 16.48.50.png', '2020-06-25', 'pok'),
(24, 8, 'Screen Shot 2020-06-16 at 20.42.59.png', 'Screen Shot 2020-06-22 at 16.48.50.png', '2020-06-25', 'pok'),
(24, 9, 'Screen Shot 2020-06-16 at 20.42.59.png', 'Screen Shot 2020-06-22 at 16.48.50.png', '2020-06-25', 'pok'),
(26, 10, 'BERKAS KELENGKAPAN UJIAN SKRIPSI.docx', 'Nilai-F1A316052-SAFARUDIN.xlsx', '2020-07-01', 'baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `dokumen_kkp`
--
ALTER TABLE `dokumen_kkp`
  ADD PRIMARY KEY (`id_dokumen_kkp`),
  ADD KEY `id_dokumen` (`id_dokumen_kkp`),
  ADD KEY `id_upload` (`id_upload_kkp`);

--
-- Indexes for table `dokumen_skripsi`
--
ALTER TABLE `dokumen_skripsi`
  ADD PRIMARY KEY (`id_dokumen_skripsi`),
  ADD KEY `Id_Upload` (`id_upload`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `download_kkp`
--
ALTER TABLE `download_kkp`
  ADD PRIMARY KEY (`Id_download_kkp`),
  ADD KEY `id_download` (`Id_download_kkp`),
  ADD KEY `id_dokumen` (`Id_dokumen_kkp`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `download_skripsi`
--
ALTER TABLE `download_skripsi`
  ADD PRIMARY KEY (`id_download`),
  ADD KEY `Id_Download` (`id_download`),
  ADD KEY `Id_Download_Skripsi` (`id_dokumen_skripsi`),
  ADD KEY `Id_Dosen` (`id_dosen`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`),
  ADD KEY `id_instansi` (`id_instansi`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id_kelompok`),
  ADD KEY `id_kelompok` (`id_kelompok`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_istansi` (`id_instansi`) USING BTREE;

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `memvalidasi_dokumen_kkp`
--
ALTER TABLE `memvalidasi_dokumen_kkp`
  ADD PRIMARY KEY (`id_val_kkp`),
  ADD KEY `id_val_kkp` (`id_val_kkp`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_dokumen` (`id_dokumen`);

--
-- Indexes for table `memvalidasi_dokumen_skripsi`
--
ALTER TABLE `memvalidasi_dokumen_skripsi`
  ADD PRIMARY KEY (`id_val_skripsi`),
  ADD KEY `Id_Dokumen_Skripsi` (`id_dokumen_skripsi`),
  ADD KEY `Id_Val_Skripsi` (`id_val_skripsi`),
  ADD KEY `Id_Admin` (`id_admin`);

--
-- Indexes for table `mengupload_file_skripsi`
--
ALTER TABLE `mengupload_file_skripsi`
  ADD PRIMARY KEY (`id_upload`),
  ADD KEY `Id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `Id_Upload` (`id_upload`);

--
-- Indexes for table `mengupload_laporan_kkp`
--
ALTER TABLE `mengupload_laporan_kkp`
  ADD PRIMARY KEY (`id_upload_kkp`),
  ADD UNIQUE KEY `id_upload` (`id_upload_kkp`),
  ADD KEY `id_kelompok` (`id_kelompok`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dokumen_kkp`
--
ALTER TABLE `dokumen_kkp`
  MODIFY `id_dokumen_kkp` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dokumen_skripsi`
--
ALTER TABLE `dokumen_skripsi`
  MODIFY `id_dokumen_skripsi` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=387627;

--
-- AUTO_INCREMENT for table `download_kkp`
--
ALTER TABLE `download_kkp`
  MODIFY `Id_download_kkp` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `download_skripsi`
--
ALTER TABLE `download_skripsi`
  MODIFY `id_download` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id_kelompok` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `memvalidasi_dokumen_kkp`
--
ALTER TABLE `memvalidasi_dokumen_kkp`
  MODIFY `id_val_kkp` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memvalidasi_dokumen_skripsi`
--
ALTER TABLE `memvalidasi_dokumen_skripsi`
  MODIFY `id_val_skripsi` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mengupload_file_skripsi`
--
ALTER TABLE `mengupload_file_skripsi`
  MODIFY `id_upload` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mengupload_laporan_kkp`
--
ALTER TABLE `mengupload_laporan_kkp`
  MODIFY `id_upload_kkp` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen_kkp`
--
ALTER TABLE `dokumen_kkp`
  ADD CONSTRAINT `dokumen_kkp_ibfk_1` FOREIGN KEY (`id_upload_kkp`) REFERENCES `mengupload_laporan_kkp` (`id_upload_kkp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokumen_skripsi`
--
ALTER TABLE `dokumen_skripsi`
  ADD CONSTRAINT `dokumen_skripsi_ibfk_1` FOREIGN KEY (`id_upload`) REFERENCES `mengupload_file_skripsi` (`id_upload`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokumen_skripsi_ibfk_2` FOREIGN KEY (`id_upload`) REFERENCES `mengupload_file_skripsi` (`id_upload`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `download_kkp`
--
ALTER TABLE `download_kkp`
  ADD CONSTRAINT `download_kkp_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `download_kkp_ibfk_2` FOREIGN KEY (`Id_dokumen_kkp`) REFERENCES `dokumen_kkp` (`id_dokumen_kkp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `download_skripsi`
--
ALTER TABLE `download_skripsi`
  ADD CONSTRAINT `download_skripsi_ibfk_1` FOREIGN KEY (`id_dokumen_skripsi`) REFERENCES `dokumen_skripsi` (`id_dokumen_skripsi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `download_skripsi_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `download_skripsi_ibfk_3` FOREIGN KEY (`id_dokumen_skripsi`) REFERENCES `dokumen_skripsi` (`id_dokumen_skripsi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `download_skripsi_ibfk_4` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD CONSTRAINT `kelompok_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelompok_ibfk_2` FOREIGN KEY (`id_instansi`) REFERENCES `instansi` (`id_instansi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `memvalidasi_dokumen_kkp`
--
ALTER TABLE `memvalidasi_dokumen_kkp`
  ADD CONSTRAINT `memvalidasi_dokumen_kkp_ibfk_1` FOREIGN KEY (`id_dokumen`) REFERENCES `dokumen_kkp` (`id_dokumen_kkp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memvalidasi_dokumen_kkp_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `memvalidasi_dokumen_skripsi`
--
ALTER TABLE `memvalidasi_dokumen_skripsi`
  ADD CONSTRAINT `memvalidasi_dokumen_skripsi_ibfk_1` FOREIGN KEY (`id_dokumen_skripsi`) REFERENCES `dokumen_skripsi` (`id_dokumen_skripsi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memvalidasi_dokumen_skripsi_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memvalidasi_dokumen_skripsi_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mengupload_file_skripsi`
--
ALTER TABLE `mengupload_file_skripsi`
  ADD CONSTRAINT `mengupload_file_skripsi_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mengupload_file_skripsi_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mengupload_laporan_kkp`
--
ALTER TABLE `mengupload_laporan_kkp`
  ADD CONSTRAINT `mengupload_laporan_kkp_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok` (`id_kelompok`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
