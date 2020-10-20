-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2020 at 03:52 AM
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
(4, 'Rika', '082394472445', 'rikasdianti@gmail.com', 'safar', 'safar');

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan`
--

CREATE TABLE `bimbingan` (
  `id_bimbingan` int(9) NOT NULL,
  `id_mahasiswa` varchar(9) NOT NULL,
  `judul` text NOT NULL,
  `tahun` year(4) NOT NULL,
  `abstrak_inggris` longtext NOT NULL,
  `abstrak_indonesia` longtext NOT NULL,
  `tanggal_upload` date NOT NULL,
  `Id_dosen_pembimbing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_kkp`
--

CREATE TABLE `dokumen_kkp` (
  `id_dokumen_kkp` int(9) NOT NULL,
  `id_mahasiswa` varchar(9) NOT NULL,
  `tanggal_upload` varchar(18) NOT NULL,
  `tahun` year(4) NOT NULL,
  `file_bab_I` text NOT NULL,
  `file_lengkap_laporan_kkp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_kkp`
--

INSERT INTO `dokumen_kkp` (`id_dokumen_kkp`, `id_mahasiswa`, `tanggal_upload`, `tahun`, `file_bab_I`, `file_lengkap_laporan_kkp`) VALUES
(9, 'F1A316003', '07-10-2020', 2020, '', 'sds');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_skripsi`
--

CREATE TABLE `dokumen_skripsi` (
  `id_dokumen_skripsi` int(9) NOT NULL,
  `id_bimbingan` int(9) NOT NULL,
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
(0, '-', '-', '0', '-', '-'),
(387629, 'Amalian Nurani Basyarah, ST., M.Kom', '085241698008', 'amalian@gmail.com', '1234567', '1234567'),
(387630, 'Natalis Ransi,S.Si.,M.Cs', '081214004584', 'natalisransi@gmail.com', '1234567', '1234567'),
(387631, 'Dr Andi Tendriawaru, S.Si.,M.Si', '082347984999', 'anditendriawaru@gmail.com', 'kaprodi', 'kaprodi'),
(387632, 'Dr La Ode Saidi, M.Kom', '085241873014', 'saidi@gmail.com', '1234567', '1234567'),
(387633, 'La Ode Umar Reky, S.Si, M.Si', '082194063634', 'umarreky@gmail.com', '1234567', '1234567'),
(387634, 'Subardin, S.T.,M.T', '081345676789', 'subardin@gmail.com', '1234567', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_pembimbing`
--

CREATE TABLE `dosen_pembimbing` (
  `Id_dosen_pembimbing` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `Id_status_pembimbing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(11) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id_instansi`, `nama_instansi`, `alamat`, `kontak`) VALUES
(13, 'POLDA', 'kendari', '08xxxxxxxx'),
(14, 'SMAN 1 Kolaka', 'Jl.bolevar', 'ss'),
(15, 'Kantor Camat KONUT', 'konut', '081123234554'),
(16, 'sdawdx', 'dw', 'dwdwd');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id_kelompok` int(11) NOT NULL,
  `nama_kelompok` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `tahun_akademik` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id_kelompok`, `nama_kelompok`, `tanggal_masuk`, `tanggal_keluar`, `id_dosen`, `tahun_akademik`) VALUES
(0, '-', '2020-10-01', '2020-10-01', 0, '0000'),
(2, 'BI_1', '2020-10-07', '2020-10-23', 387630, '20191');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` varchar(9) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `id_status_kelompok` int(11) NOT NULL,
  `nama_mahasiswa` varchar(200) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `email` text NOT NULL,
  `number_handphone` varchar(14) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `id_kelompok`, `id_status_kelompok`, `nama_mahasiswa`, `angkatan`, `email`, `number_handphone`, `username`, `password`) VALUES
('F1A316003', 2, 1, 'HERLINA', 2016, 'distan@distankonawe.id', '085246530343', 'safar', 'safar');

-- --------------------------------------------------------

--
-- Table structure for table `memvalidasi_dokumen_kkp`
--

CREATE TABLE `memvalidasi_dokumen_kkp` (
  `id_val_kkp` int(9) NOT NULL,
  `id_admin` int(9) NOT NULL,
  `id_dokumen_kkp` int(9) NOT NULL,
  `tanggal_validasi` date NOT NULL,
  `Id_status_validasi` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memvalidasi_dokumen_kkp`
--

INSERT INTO `memvalidasi_dokumen_kkp` (`id_val_kkp`, `id_admin`, `id_dokumen_kkp`, `tanggal_validasi`, `Id_status_validasi`, `keterangan`) VALUES
(5, 4, 9, '2020-10-11', 2, 'ouiyutcyxtdrdfgvnb');

-- --------------------------------------------------------

--
-- Table structure for table `memvalidasi_dokumen_skripsi`
--

CREATE TABLE `memvalidasi_dokumen_skripsi` (
  `id_val_skripsi` int(9) NOT NULL,
  `id_dokumen_skripsi` int(9) NOT NULL,
  `id_admin` int(9) NOT NULL,
  `tanggal_validasi` date NOT NULL,
  `Id_status_validasi` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembimbing_lapangan`
--

CREATE TABLE `pembimbing_lapangan` (
  `id_pembimbing_lapangan` int(11) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `nama_pembimbing_lapangan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `number_handphone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembimbing_lapangan`
--

INSERT INTO `pembimbing_lapangan` (`id_pembimbing_lapangan`, `id_instansi`, `id_kelompok`, `nama_pembimbing_lapangan`, `alamat`, `number_handphone`) VALUES
(1, 13, 0, 'subhan, S.Kom, M.Ap', 'liudh', '081214004584'),
(3, 13, 2, 'SAFAR', 'HEA', '08543');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(2) NOT NULL,
  `title` text NOT NULL,
  `judul_top_bar` text NOT NULL,
  `singkatan_apps` text NOT NULL,
  `catatan_kaki` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `title`, `judul_top_bar`, `singkatan_apps`, `catatan_kaki`) VALUES
(1, 'SISTEM INFORMASI PENGARSIPAN', 'Sistem Pengarsipan Dokumen', 'SIP', 'Created by Rika Asdianti');

-- --------------------------------------------------------

--
-- Table structure for table `status_dosen_pembimbing`
--

CREATE TABLE `status_dosen_pembimbing` (
  `Id_status_dosen_pembimbning` int(11) NOT NULL,
  `status_dosen_pembimbing` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_kelompok`
--

CREATE TABLE `status_kelompok` (
  `id_status_kelompok` int(11) NOT NULL,
  `status_kelompok` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_kelompok`
--

INSERT INTO `status_kelompok` (`id_status_kelompok`, `status_kelompok`) VALUES
(0, '-'),
(1, 'Ketua'),
(2, 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `status_validasi`
--

CREATE TABLE `status_validasi` (
  `Id_status_validasi` int(11) NOT NULL,
  `status_validasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_validasi`
--

INSERT INTO `status_validasi` (`Id_status_validasi`, `status_validasi`) VALUES
(1, 'Valid'),
(2, 'Tidak Valid');

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
-- Indexes for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`id_bimbingan`),
  ADD KEY `Id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `Id_Upload` (`id_bimbingan`),
  ADD KEY `Id_dosen_pembimbing` (`Id_dosen_pembimbing`),
  ADD KEY `id_bimbingan` (`id_bimbingan`);

--
-- Indexes for table `dokumen_kkp`
--
ALTER TABLE `dokumen_kkp`
  ADD PRIMARY KEY (`id_dokumen_kkp`),
  ADD KEY `id_dokumen` (`id_dokumen_kkp`),
  ADD KEY `id_kelompok` (`id_mahasiswa`);

--
-- Indexes for table `dokumen_skripsi`
--
ALTER TABLE `dokumen_skripsi`
  ADD PRIMARY KEY (`id_dokumen_skripsi`),
  ADD KEY `Id_Upload` (`id_bimbingan`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `dosen_pembimbing`
--
ALTER TABLE `dosen_pembimbing`
  ADD PRIMARY KEY (`Id_dosen_pembimbing`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `Id_status_pembimbing` (`Id_status_pembimbing`);

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
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_kelompok` (`id_kelompok`),
  ADD KEY `id_status_kelompok` (`id_status_kelompok`);

--
-- Indexes for table `memvalidasi_dokumen_kkp`
--
ALTER TABLE `memvalidasi_dokumen_kkp`
  ADD PRIMARY KEY (`id_val_kkp`),
  ADD KEY `id_val_kkp` (`id_val_kkp`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_dokumen` (`id_dokumen_kkp`),
  ADD KEY `Id_status_validasi` (`Id_status_validasi`);

--
-- Indexes for table `memvalidasi_dokumen_skripsi`
--
ALTER TABLE `memvalidasi_dokumen_skripsi`
  ADD PRIMARY KEY (`id_val_skripsi`),
  ADD KEY `Id_Dokumen_Skripsi` (`id_dokumen_skripsi`),
  ADD KEY `Id_Val_Skripsi` (`id_val_skripsi`),
  ADD KEY `Id_Admin` (`id_admin`),
  ADD KEY `Id_status_validasi` (`Id_status_validasi`);

--
-- Indexes for table `pembimbing_lapangan`
--
ALTER TABLE `pembimbing_lapangan`
  ADD PRIMARY KEY (`id_pembimbing_lapangan`),
  ADD KEY `id_pembimbing_lapangan` (`id_pembimbing_lapangan`),
  ADD KEY `id_instansi` (`id_instansi`),
  ADD KEY `id_kelompok` (`id_kelompok`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_dosen_pembimbing`
--
ALTER TABLE `status_dosen_pembimbing`
  ADD PRIMARY KEY (`Id_status_dosen_pembimbning`);

--
-- Indexes for table `status_kelompok`
--
ALTER TABLE `status_kelompok`
  ADD PRIMARY KEY (`id_status_kelompok`);

--
-- Indexes for table `status_validasi`
--
ALTER TABLE `status_validasi`
  ADD PRIMARY KEY (`Id_status_validasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `id_bimbingan` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumen_kkp`
--
ALTER TABLE `dokumen_kkp`
  MODIFY `id_dokumen_kkp` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dokumen_skripsi`
--
ALTER TABLE `dokumen_skripsi`
  MODIFY `id_dokumen_skripsi` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=387635;

--
-- AUTO_INCREMENT for table `dosen_pembimbing`
--
ALTER TABLE `dosen_pembimbing`
  MODIFY `Id_dosen_pembimbing` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id_kelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `memvalidasi_dokumen_kkp`
--
ALTER TABLE `memvalidasi_dokumen_kkp`
  MODIFY `id_val_kkp` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `memvalidasi_dokumen_skripsi`
--
ALTER TABLE `memvalidasi_dokumen_skripsi`
  MODIFY `id_val_skripsi` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembimbing_lapangan`
--
ALTER TABLE `pembimbing_lapangan`
  MODIFY `id_pembimbing_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_dosen_pembimbing`
--
ALTER TABLE `status_dosen_pembimbing`
  MODIFY `Id_status_dosen_pembimbning` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_kelompok`
--
ALTER TABLE `status_kelompok`
  MODIFY `id_status_kelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_validasi`
--
ALTER TABLE `status_validasi`
  MODIFY `Id_status_validasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD CONSTRAINT `bimbingan_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bimbingan_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bimbingan_ibfk_3` FOREIGN KEY (`Id_dosen_pembimbing`) REFERENCES `dosen_pembimbing` (`Id_dosen_pembimbing`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokumen_kkp`
--
ALTER TABLE `dokumen_kkp`
  ADD CONSTRAINT `dokumen_kkp_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokumen_skripsi`
--
ALTER TABLE `dokumen_skripsi`
  ADD CONSTRAINT `dokumen_skripsi_ibfk_1` FOREIGN KEY (`id_bimbingan`) REFERENCES `bimbingan` (`id_bimbingan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokumen_skripsi_ibfk_2` FOREIGN KEY (`id_bimbingan`) REFERENCES `bimbingan` (`id_bimbingan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen_pembimbing`
--
ALTER TABLE `dosen_pembimbing`
  ADD CONSTRAINT `dosen_pembimbing_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_pembimbing_ibfk_3` FOREIGN KEY (`Id_status_pembimbing`) REFERENCES `status_dosen_pembimbing` (`Id_status_dosen_pembimbning`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD CONSTRAINT `kelompok_ibfk_3` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok` (`id_kelompok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_status_kelompok`) REFERENCES `status_kelompok` (`Id_status_kelompok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `memvalidasi_dokumen_kkp`
--
ALTER TABLE `memvalidasi_dokumen_kkp`
  ADD CONSTRAINT `memvalidasi_dokumen_kkp_ibfk_1` FOREIGN KEY (`id_dokumen_kkp`) REFERENCES `dokumen_kkp` (`id_dokumen_kkp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memvalidasi_dokumen_kkp_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memvalidasi_dokumen_kkp_ibfk_3` FOREIGN KEY (`Id_status_validasi`) REFERENCES `status_validasi` (`Id_status_validasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `memvalidasi_dokumen_skripsi`
--
ALTER TABLE `memvalidasi_dokumen_skripsi`
  ADD CONSTRAINT `memvalidasi_dokumen_skripsi_ibfk_1` FOREIGN KEY (`id_dokumen_skripsi`) REFERENCES `dokumen_skripsi` (`id_dokumen_skripsi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memvalidasi_dokumen_skripsi_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memvalidasi_dokumen_skripsi_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memvalidasi_dokumen_skripsi_ibfk_4` FOREIGN KEY (`Id_status_validasi`) REFERENCES `status_validasi` (`Id_status_validasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembimbing_lapangan`
--
ALTER TABLE `pembimbing_lapangan`
  ADD CONSTRAINT `pembimbing_lapangan_ibfk_1` FOREIGN KEY (`id_instansi`) REFERENCES `instansi` (`id_instansi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembimbing_lapangan_ibfk_2` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok` (`id_kelompok`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
