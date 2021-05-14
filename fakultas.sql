-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2021 at 05:00 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fakultas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` int(11) NOT NULL,
  `namaAdm` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_Admin`, `namaAdm`, `username`) VALUES
(103, 'Admin', 'akunadmin');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(30) NOT NULL,
  `pw` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `pw`, `email`) VALUES
('agusmul', 'agusgus', 'agusmul@gmail.com'),
('akunadmin', 'adminmin', 'admin@gmail.com'),
('alyaraisa', 'alyaya', 'alya@gmail.com'),
('haliputri', 'halili', 'hali@gmail.com'),
('Hammami', 'Ilmimi', 'Hammam@gmail.com'),
('nabilfikri', 'nabilbil', 'nabil@gmail.com'),
('rendyc', 'rendydy', 'rendy@gmail.com'),
('Ridwanf', 'ridwanwan', 'ridwan@gmail.com'),
('rongsok48', 'rongsoksok', 'rongsok48@gmail.com'),
('srim', 'sriri', 'sri@gmail.com'),
('sudrajatp', 'sudrajatjat', 'sudrajat@gmail.com'),
('umican', 'micancan', 'mican@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `ID_Dosen` int(11) NOT NULL,
  `NamaDsn` varchar(30) DEFAULT NULL,
  `Alamat` varchar(30) DEFAULT NULL,
  `ID_Admin` int(11) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`ID_Dosen`, `NamaDsn`, `Alamat`, `ID_Admin`, `username`) VALUES
(910, 'Mican', 'Jl.nyasar', 103, 'umican'),
(911, 'Sri Mutia', 'Jl. Kembang Kol', 103, 'srim'),
(913, 'Agus Mulyadi', 'jl. kemana weh lah', 103, 'agusmul'),
(915, 'Sudrajat Priangan I', 'jl. sumpah gapaham', 103, 'sudrajatp');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `ID_Matkul` int(11) NOT NULL,
  `SKS` int(1) DEFAULT NULL,
  `Semester` int(1) DEFAULT NULL,
  `Deskripsi_Materi` varchar(100) DEFAULT NULL,
  `ID_Dosen` int(11) DEFAULT NULL,
  `ID_Admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`ID_Matkul`, `SKS`, `Semester`, `Deskripsi_Materi`, `ID_Dosen`, `ID_Admin`) VALUES
(123, 3, 4, 'materi mengenai blablabla', 910, 103),
(124, 2, 5, 'aduh aduh aduh beuh', 913, 103),
(126, 3, 5, 'beuw bewu', 915, 103);

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum_mahasiswa`
--

CREATE TABLE `kurikulum_mahasiswa` (
  `no_mhs` int(11) DEFAULT NULL,
  `ID_matkul` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurikulum_mahasiswa`
--

INSERT INTO `kurikulum_mahasiswa` (`no_mhs`, `ID_matkul`) VALUES
(1, 123);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `no_mhs` int(11) NOT NULL,
  `NamaMhs` varchar(30) DEFAULT NULL,
  `Alamat` varchar(30) DEFAULT NULL,
  `NPM` bigint(14) DEFAULT NULL,
  `jurusan` varchar(30) NOT NULL,
  `ID_Admin` int(11) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`no_mhs`, `NamaMhs`, `Alamat`, `NPM`, `jurusan`, `ID_Admin`, `username`) VALUES
(1, 'Hali Putri A', 'Jl.gatau lagi', 140810200006, 'Teknik Informatika', 103, 'haliputri'),
(2, 'M Nabil Fikri S P', 'jl. cicukang', 140810200046, 'Teknik Informatika', 103, 'nabilfikri'),
(3, 'Alya Raisa H', 'jl. jalan', 140810200060, 'Teknik Informatika', 103, 'alyaraisa'),
(4, 'Rendy Christian', 'Jl. Kembang Kol', 141810200100, 'Teknik Mesin', 103, 'rendyc'),
(5, 'Hammam Ilmi L', 'jl.the mansion', 140810200500, 'Hubungan Internasional', 103, 'Hammami'),
(6, 'Ridwan Faizan M', 'Jl. Kembangkan', 140810200600, 'DKV', 103, 'Ridwanf'),
(7, 'rongsokanbaru', 'jl.kebenaran', 140810200700, 'Teknik Informatika', 103, 'rongsok48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`ID_Dosen`),
  ADD KEY `ID_Admin` (`ID_Admin`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`ID_Matkul`),
  ADD KEY `ID_Dosen` (`ID_Dosen`),
  ADD KEY `ID_Admin` (`ID_Admin`);

--
-- Indexes for table `kurikulum_mahasiswa`
--
ALTER TABLE `kurikulum_mahasiswa`
  ADD KEY `no_mhs` (`no_mhs`),
  ADD KEY `ID_matkul` (`ID_matkul`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`no_mhs`),
  ADD KEY `ID_Admin` (`ID_Admin`),
  ADD KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`ID_Admin`) REFERENCES `admin` (`ID_Admin`),
  ADD CONSTRAINT `dosen_ibfk_2` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);

--
-- Constraints for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD CONSTRAINT `kurikulum_ibfk_1` FOREIGN KEY (`ID_Dosen`) REFERENCES `dosen` (`ID_Dosen`),
  ADD CONSTRAINT `kurikulum_ibfk_2` FOREIGN KEY (`ID_Admin`) REFERENCES `admin` (`ID_Admin`);

--
-- Constraints for table `kurikulum_mahasiswa`
--
ALTER TABLE `kurikulum_mahasiswa`
  ADD CONSTRAINT `kurikulum_mahasiswa_ibfk_1` FOREIGN KEY (`no_mhs`) REFERENCES `mahasiswa` (`no_mhs`),
  ADD CONSTRAINT `kurikulum_mahasiswa_ibfk_2` FOREIGN KEY (`ID_matkul`) REFERENCES `kurikulum` (`ID_Matkul`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`ID_Admin`) REFERENCES `admin` (`ID_Admin`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
