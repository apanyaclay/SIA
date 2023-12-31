-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 01:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_ekskuls`
--

CREATE TABLE `absensi_ekskuls` (
  `ID_Absensi` int(11) NOT NULL,
  `ID_Ekskul_Siswa` varchar(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `Hadir` int(11) NOT NULL,
  `Izin` int(11) NOT NULL,
  `Alpa` int(11) NOT NULL,
  `Sakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensi_ekskuls`
--

INSERT INTO `absensi_ekskuls` (`ID_Absensi`, `ID_Ekskul_Siswa`, `Tanggal`, `Hadir`, `Izin`, `Alpa`, `Sakit`) VALUES
(1, 'PRK001', '2023-11-06', 10, 2, 3, 2),
(2, 'MNR001', '2023-11-09', 20, 7, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `absensi_kelas`
--

CREATE TABLE `absensi_kelas` (
  `ID_Absensi` int(11) NOT NULL,
  `Siswa_ID` int(11) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `Hadir` int(11) NOT NULL,
  `Izin` int(11) NOT NULL,
  `Alpa` int(11) NOT NULL,
  `Sakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensi_kelas`
--

INSERT INTO `absensi_kelas` (`ID_Absensi`, `Siswa_ID`, `Kelas`, `Tanggal`, `Hadir`, `Izin`, `Alpa`, `Sakit`) VALUES
(5, 114715088, 'SMP8B', '2023-11-06', 1, 0, 0, 0),
(6, 108254549, 'SMP8B', '2023-11-06', 1, 0, 0, 0),
(7, 117795632, 'SMP8A', '2023-12-06', 1, 0, 0, 0),
(8, 91676040, 'SMP8A', '2023-12-06', 0, 1, 0, 0),
(9, 109600822, 'SMP8A', '2023-12-06', 0, 0, 1, 0),
(10, 114715088, 'SMP9B', '2023-12-06', 1, 0, 0, 0),
(11, 117795632, 'SMP8A', '2023-11-07', 1, 0, 0, 0),
(12, 117795632, 'SMP8A', '2023-11-08', 0, 1, 0, 0),
(13, 117795632, 'SMP8A', '2023-11-09', 1, 0, 0, 0),
(14, 117795632, 'SMP8A', '2023-11-10', 0, 0, 1, 0),
(15, 117795632, 'SMP8A', '2023-12-11', 0, 1, 0, 0),
(16, 117795632, 'SMP8A', '2023-12-12', 1, 0, 0, 0),
(17, 117795632, 'SMP8A', '2023-12-12', 0, 0, 0, 1),
(18, 117795632, 'SMP8A', '2023-12-13', 1, 0, 0, 0),
(19, 117795632, 'SMP8A', '2023-12-14', 1, 0, 0, 0),
(20, 117795632, 'SMP8A', '2023-12-15', 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ekskul_siswas`
--

CREATE TABLE `ekskul_siswas` (
  `ID_Ekskul_Siswa` varchar(10) NOT NULL,
  `Ekskul_Kode` char(5) NOT NULL,
  `Siswa_ID` int(11) NOT NULL,
  `Thn_Ajaran` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekskul_siswas`
--

INSERT INTO `ekskul_siswas` (`ID_Ekskul_Siswa`, `Ekskul_Kode`, `Siswa_ID`, `Thn_Ajaran`) VALUES
('MNR001', 'MNR', 108254549, 1),
('PRK001', 'PRK', 117795632, 1),
('PRK002', 'MNYI', 91676040, 4),
('PST001', 'PST', 91676040, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikulers`
--

CREATE TABLE `ekstrakurikulers` (
  `Kode_Ekskul` char(5) NOT NULL,
  `Nama_Ekskul` varchar(30) NOT NULL,
  `Guru_Ekskul` bigint(20) NOT NULL,
  `Hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') NOT NULL,
  `Waktu_Mulai` time NOT NULL,
  `Waktu_Selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekstrakurikulers`
--

INSERT INTO `ekstrakurikulers` (`Kode_Ekskul`, `Nama_Ekskul`, `Guru_Ekskul`, `Hari`, `Waktu_Mulai`, `Waktu_Selesai`) VALUES
('FSL', 'FUTSAL', 1554758660110042, 'Senin', '14:30:00', '16:30:00'),
('MNR', 'MENARI', 1148770671130093, 'Senin', '14:30:00', '16:30:00'),
('MNYI', 'MENYANYI', 7545772673130023, 'Rabu', '15:00:00', '16:00:00'),
('PRK', 'FUTSAL', 1148770671130093, 'Senin', '15:15:00', '16:16:00'),
('PST', 'Pencak Silat', 2344763664110023, 'Sabtu', '14:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `guruses`
--

CREATE TABLE `guruses` (
  `NUPTK` bigint(20) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Nama_Guru` varchar(150) NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Status_Kepegawaian` enum('GTY/PTY','Guru Honor') NOT NULL,
  `Jenis_PTK` enum('Guru Mapel','Guru Wali Kelas') NOT NULL,
  `Jenjang_Pendidikan` varchar(100) NOT NULL,
  `TMT_Kerja` date NOT NULL,
  `JJM` int(11) DEFAULT NULL,
  `Status` enum('Aktif','Resign','Diberhentikan','Cuti') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guruses`
--

INSERT INTO `guruses` (`NUPTK`, `NIP`, `Nama_Guru`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Status_Kepegawaian`, `Jenis_PTK`, `Jenjang_Pendidikan`, `TMT_Kerja`, `JJM`, `Status`) VALUES
(1148770671130093, '1222035608920007', 'Herlia Puspita Dewi A', 'P', 'Pulau Raja', '1992-08-16', 'GTY/PTY', 'Guru Wali Kelas', 'S1-Bahasa Indonesia', '2017-07-18', 36, 'Aktif'),
(1252771672230163, '121987652200', 'Putri Yunita', 'P', 'Medan', '1993-06-17', 'GTY/PTY', 'Guru Mapel', 'S1-Ekonomi', '2016-07-18', 12, 'Aktif'),
(1554758660110042, '1271142202800007', 'Muhammad Haris', 'L', 'Pangakalian', '1980-02-22', 'Guru Honor', 'Guru Mapel', 'S1-Hukum', '2019-07-15', 18, 'Aktif'),
(2344763664110023, '1208304408060001', 'SYAHPUTRA EFENDI', 'L', 'MEDAN', '1985-10-12', 'GTY/PTY', 'Guru Mapel', 'S1 - MATEMATIKA', '2017-07-18', 30, 'Aktif'),
(5853776677230002, '1207256105980001', 'Nurhasanah', 'P', 'Manunggal', '1998-05-21', 'GTY/PTY', 'Guru Wali Kelas', 'S1-Pendidikan Agama Islam', '2019-07-18', 12, 'Aktif'),
(7545772673130023, '1271065312940001', 'Della Tria Putri', 'P', 'Medan', '1994-12-13', 'GTY/PTY', 'Guru Wali Kelas', 'S1-Bahasa Inggris', '2016-07-18', 24, 'Resign'),
(8450774675230033, '1219084209000005', 'SITI AMINAH', 'P', 'PADANG KEDONDONG', '1996-11-18', 'GTY/PTY', 'Guru Mapel', 'S-1 Pendidikan Kepelatiha', '2019-07-01', 18, 'Aktif'),
(9261764666210083, '1219054901020008', 'WINASTRI', 'P', 'HELVETIA', '1986-09-29', 'GTY/PTY', 'Guru Wali Kelas', 'S1 - PENDIDIKAN SENI BUDAYA', '2009-07-17', 4, 'Aktif'),
(9736764665230312, '1213034404860005', 'Nursakinah', 'P', 'Hutarimbaru', '1986-04-04', 'GTY/PTY', 'Guru Wali Kelas', 'S1-Ilmu Pengetahuan Sosial', '2017-07-18', 24, 'Cuti'),
(125298476722301635, '1219054404930002', 'SHAFIRA HILMI WAHYUDI', 'P', 'MEDAN', '1998-06-03', 'GTY/PTY', 'Guru Mapel', 'SMA/SEDERAJAT', '2020-07-13', 18, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_mapels`
--

CREATE TABLE `jadwal_mapels` (
  `ID_Jadwal` varchar(10) NOT NULL,
  `Kelas_ID` varchar(10) NOT NULL,
  `Kode_Mapel` char(5) NOT NULL,
  `Thn_Ajaran_ID` bigint(20) NOT NULL,
  `Waktu_Mulai` time NOT NULL,
  `Waktu_Selesai` time NOT NULL,
  `Hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_mapels`
--

INSERT INTO `jadwal_mapels` (`ID_Jadwal`, `Kelas_ID`, `Kode_Mapel`, `Thn_Ajaran_ID`, `Waktu_Mulai`, `Waktu_Selesai`, `Hari`) VALUES
('1', 'SMP8A', 'BIND', 2, '09:00:00', '10:00:00', 'Senin'),
('10', 'SMP8A', 'BING', 2, '10:00:00', '11:00:00', 'Kamis'),
('11', 'SMP8A', 'BING', 2, '10:00:00', '11:00:00', 'Jumat'),
('12', 'SMP8A', 'BING', 2, '10:00:00', '11:00:00', 'Sabtu'),
('13', 'SMP8A', 'IPA', 2, '11:00:00', '12:00:00', 'Senin'),
('14', 'SMP8A', 'IPS', 2, '11:00:00', '12:00:00', 'Selasa'),
('15', 'SMP8A', 'SBY', 2, '11:00:00', '12:00:00', 'Rabu'),
('16', 'SMP8A', 'TIK', 2, '11:00:00', '12:00:00', 'Kamis'),
('17', 'SMP8A', 'PPKN', 2, '11:00:00', '12:00:00', 'Jumat'),
('18', 'SMP8A', 'PJOK', 2, '11:00:00', '12:00:00', 'Sabtu'),
('2', 'SMP8A', 'BIND', 2, '09:00:00', '10:00:00', 'Selasa'),
('3', 'SMP8A', 'BIND', 2, '09:00:00', '10:00:00', 'Rabu'),
('4', 'SMP8A', 'BIND', 2, '09:00:00', '10:00:00', 'Kamis'),
('5', 'SMP8A', 'BIND', 2, '09:00:00', '10:00:00', 'Jumat'),
('6', 'SMP8A', 'BIND', 2, '09:00:00', '10:00:00', 'Sabtu'),
('7', 'SMP8A', 'BING', 2, '10:00:00', '11:00:00', 'Senin'),
('8', 'SMP8A', 'BING', 2, '10:00:00', '11:00:00', 'Selasa'),
('9', 'SMP8A', 'BING', 2, '10:00:00', '11:00:00', 'Rabu');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `ID_Kelas` varchar(10) NOT NULL,
  `Wali_Kelas` bigint(20) NOT NULL,
  `Nama_Kelas` varchar(150) NOT NULL,
  `Tingkatan` enum('7','8','9') NOT NULL,
  `Kelompok_Kelas` enum('A','B','C','D','E') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`ID_Kelas`, `Wali_Kelas`, `Nama_Kelas`, `Tingkatan`, `Kelompok_Kelas`) VALUES
('asdfgasf', 9261764666210083, 'hfdsdf', '8', 'A'),
('SMP8A', 1148770671130093, 'Kelas 8-1', '8', 'A'),
('SMP8B', 9736764665230312, 'Kelas 8-2', '8', 'B'),
('SMP9A', 8450774675230033, 'Kelas 9-1', '9', 'A'),
('SMP9B', 9261764666210083, 'Kelas 9-2', '9', 'B'),
('TJH34', 7545772673130023, 'Kelas 7-1', '7', 'A'),
('TJH35', 5853776677230002, 'Kelas 7-2', '7', 'B'),
('TTT', 1252771672230163, 'Kelas Test', '9', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `kepala_sekolahs`
--

CREATE TABLE `kepala_sekolahs` (
  `ID_Kepsek` bigint(20) NOT NULL,
  `Nama_Kepsek` varchar(150) NOT NULL,
  `Jenjang_Pendidikan` varchar(100) NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `TMT_Kerja` date NOT NULL,
  `Status` enum('Aktif','Resign','Diberhentikan','Cuti') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepala_sekolahs`
--

INSERT INTO `kepala_sekolahs` (`ID_Kepsek`, `Nama_Kepsek`, `Jenjang_Pendidikan`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `TMT_Kerja`, `Status`) VALUES
(15312312, 'SYAFRIZAL', 'S-1 EKONOMI', 'L', 'MEDAN DENAI', '1993-06-17', '2016-07-18', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kip_kps_pips`
--

CREATE TABLE `kip_kps_pips` (
  `ID_Status` int(11) NOT NULL,
  `ID_Siswa` int(11) NOT NULL,
  `Status_KIP` enum('ya','tidak') NOT NULL,
  `No_KIP` varchar(30) NOT NULL,
  `Status_KPS` enum('ya','tidak') NOT NULL,
  `No_KPS` varchar(30) NOT NULL,
  `Status_Eligible_PIP` enum('ya','tidak') NOT NULL,
  `Alasan_Eligible_PIP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kip_kps_pips`
--

INSERT INTO `kip_kps_pips` (`ID_Status`, `ID_Siswa`, `Status_KIP`, `No_KIP`, `Status_KPS`, `No_KPS`, `Status_Eligible_PIP`, `Alasan_Eligible_PIP`) VALUES
(1, 78791950, 'ya', '120008374', 'ya', '8362773673', 'tidak', ''),
(2, 109600822, 'ya', '3472748934', 'tidak', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `log_absensi_ekskuls`
--

CREATE TABLE `log_absensi_ekskuls` (
  `ID_Absensi` int(11) NOT NULL,
  `ID_Ekskul_Siswa` varchar(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `Hadir` int(11) NOT NULL,
  `Izin` int(11) NOT NULL,
  `Alpa` int(11) NOT NULL,
  `Sakit` int(11) NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_absensi_kelas`
--

CREATE TABLE `log_absensi_kelas` (
  `ID_Absensi` int(11) NOT NULL,
  `Siswa_ID` int(11) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `Hadir` int(11) NOT NULL,
  `Izin` int(11) NOT NULL,
  `Alpa` int(11) NOT NULL,
  `Sakit` int(11) NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_ekskul_siswas`
--

CREATE TABLE `log_ekskul_siswas` (
  `ID_Ekskul_Siswa` varchar(10) NOT NULL,
  `Ekskul_Kode` char(5) NOT NULL,
  `Siswa_ID` int(11) NOT NULL,
  `Thn_Ajaran` bigint(20) NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_ekstrakurikulers`
--

CREATE TABLE `log_ekstrakurikulers` (
  `Kode_Ekskul` char(5) NOT NULL,
  `Nama_Ekskul` varchar(30) NOT NULL,
  `Guru_Ekskul` bigint(20) NOT NULL,
  `Hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') NOT NULL,
  `Waktu_Mulai` time NOT NULL,
  `Waktu_Selesai` time NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_gurus`
--

CREATE TABLE `log_gurus` (
  `NUPTK` bigint(20) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Nama_Guru` varchar(150) NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Status_Kepegawaian` enum('GTY/PTY','Guru Honor') NOT NULL,
  `Jenis_PTK` enum('Guru Mapel','Guru Wali Kelas') NOT NULL,
  `Jenjang_Pendidikan` varchar(100) NOT NULL,
  `TMT_Kerja` date NOT NULL,
  `JJM` int(11) NOT NULL,
  `Status` enum('Aktif','Resign','Diberhentikan','Cuti') NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_jadwal_mapels`
--

CREATE TABLE `log_jadwal_mapels` (
  `ID_Jadwal` varchar(10) NOT NULL,
  `Kelas_ID` varchar(10) NOT NULL,
  `Kode_Mapel` char(5) NOT NULL,
  `Thn_Ajaran_ID` bigint(20) NOT NULL,
  `Waktu_Mulai` time NOT NULL,
  `Waktu_Selesai` time NOT NULL,
  `Hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_kelas`
--

CREATE TABLE `log_kelas` (
  `ID_Kelas` varchar(10) NOT NULL,
  `Wali_Kelas` bigint(20) NOT NULL,
  `Nama_Kelas` varchar(150) NOT NULL,
  `Tingkatan` enum('7','8','9') NOT NULL,
  `Kelompok_Kelas` enum('A','B','C','D','E') NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_kepala_sekolahs`
--

CREATE TABLE `log_kepala_sekolahs` (
  `ID_Kepsek` bigint(20) NOT NULL,
  `Nama_Kepsek` varchar(150) NOT NULL,
  `Jenjang_Pendidikan` varchar(100) NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `TMT_Kerja` date NOT NULL,
  `Status` enum('Aktif','Resign','Diberhentikan','Cuti') NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_kip_kps_pips`
--

CREATE TABLE `log_kip_kps_pips` (
  `ID_Status` int(11) NOT NULL,
  `ID_Siswa` int(11) NOT NULL,
  `Status_KIP` enum('ya','tidak') NOT NULL,
  `No_KIP` varchar(30) NOT NULL,
  `Status_KPS` enum('ya','tidak') NOT NULL,
  `No_KPS` varchar(30) NOT NULL,
  `Status_Eligible_PIP` enum('ya','tidak') NOT NULL,
  `Alasan_Eligible_PIP` varchar(50) NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_mata_pelajarans`
--

CREATE TABLE `log_mata_pelajarans` (
  `Kode_Mapel` char(5) NOT NULL,
  `Nama_Mapel` varchar(50) NOT NULL,
  `KKM` int(11) NOT NULL,
  `Guru_Mapel` bigint(20) NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_nilais`
--

CREATE TABLE `log_nilais` (
  `Nilai_ID` int(11) NOT NULL,
  `Kode_Mapel` char(5) NOT NULL,
  `Siswa_ID` int(11) NOT NULL,
  `Thn_Ajaran` bigint(20) NOT NULL,
  `Jenis` enum('F1','F2','F3','UTS','UAS') NOT NULL,
  `Nilai_Pengetahuan` int(11) NOT NULL,
  `Nilai_Keterampilan` int(11) NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_nilais`
--

INSERT INTO `log_nilais` (`Nilai_ID`, `Kode_Mapel`, `Siswa_ID`, `Thn_Ajaran`, `Jenis`, `Nilai_Pengetahuan`, `Nilai_Keterampilan`, `Action`, `Username`, `Waktu`) VALUES
(1, 'BIND', 117795632, 2, 'F1', 87, 70, 'Insert', 'CURRENT_USER()', '2023-11-27 09:48:54'),
(2, 'BIND', 117795632, 2, 'F2', 80, 78, 'Insert', 'CURRENT_USER()', '2023-11-27 09:48:54'),
(3, 'BIND', 117795632, 2, 'F3', 75, 78, 'Insert', 'CURRENT_USER()', '2023-11-27 09:48:54'),
(4, 'BIND', 117795632, 2, 'UTS', 80, 75, 'Insert', 'CURRENT_USER()', '2023-11-27 09:48:54'),
(5, 'BIND', 117795632, 2, 'UTS', 88, 75, 'Insert', 'CURRENT_USER()', '2023-11-27 09:48:54'),
(6, 'BIND', 117795632, 2, 'F1', 89, 80, 'Insert', 'CURRENT_USER()', '2023-11-27 09:48:54'),
(7, 'BING', 117795632, 2, 'F2', 80, 90, 'Insert', 'CURRENT_USER()', '2023-11-27 09:48:54'),
(8, 'BING', 117795632, 2, 'F3', 98, 78, 'Insert', 'CURRENT_USER()', '2023-11-27 09:48:54'),
(9, 'BING', 117795632, 2, 'UTS', 89, 78, 'Insert', 'CURRENT_USER()', '2023-11-27 09:48:54'),
(10, 'BING', 117795632, 2, 'UAS', 89, 78, 'Insert', 'CURRENT_USER()', '2023-11-27 09:48:54'),
(5, 'BIND', 117795632, 2, 'UAS', 88, 75, 'Update', 'CURRENT_USER()', '2023-11-27 09:58:57'),
(6, 'BING', 117795632, 2, 'F1', 89, 80, 'Update', 'CURRENT_USER()', '2023-11-27 10:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `log_nilai_ekskuls`
--

CREATE TABLE `log_nilai_ekskuls` (
  `ID_Nilai_Ekskul` int(11) NOT NULL,
  `ID_Ekskul_Siswa` varchar(10) NOT NULL,
  `Nilai` enum('A','B','C','D','E') NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_nilai_ekskuls`
--

INSERT INTO `log_nilai_ekskuls` (`ID_Nilai_Ekskul`, `ID_Ekskul_Siswa`, `Nilai`, `Action`, `Username`, `Waktu`) VALUES
(1, 'MNR001', '', 'Insert', 'root@localhost', '2023-11-27 08:50:35'),
(2, 'PRK001', '', 'Insert', 'root@localhost', '2023-11-27 08:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `log_prestasis`
--

CREATE TABLE `log_prestasis` (
  `ID_Prestasi` varchar(10) NOT NULL,
  `Siswa` int(11) NOT NULL,
  `Jenis_Prestasi` enum('Akademik','Non-Akademik') NOT NULL,
  `Deskripsi` varchar(150) NOT NULL,
  `Tanggal` date NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_rapors`
--

CREATE TABLE `log_rapors` (
  `ID_Rapor` int(11) NOT NULL,
  `ID_Nilai` int(11) NOT NULL,
  `ID_Ekskul_Nilai` int(11) NOT NULL,
  `Prestasi_ID` varchar(10) NOT NULL,
  `Absensi_ID` int(11) NOT NULL,
  `Absensi_Ekskul` int(11) NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_roles`
--

CREATE TABLE `log_roles` (
  `ID_Roles` bigint(20) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Nama_Role` enum('Kepala Sekolah','Siswa','Guru','Tata Usaha') NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_role_assignments`
--

CREATE TABLE `log_role_assignments` (
  `ID_Role_Assignment` int(11) NOT NULL,
  `Role_ID` bigint(20) NOT NULL,
  `Siswa_ID` int(11) NOT NULL,
  `NUPTK_Guru` bigint(20) NOT NULL,
  `Pegawai_ID` bigint(20) NOT NULL,
  `Kepsek_ID` bigint(20) NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_siswas`
--

CREATE TABLE `log_siswas` (
  `NISN` int(11) NOT NULL,
  `NIPD` int(11) NOT NULL,
  `Nama_Siswa` varchar(150) NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Agama` enum('Kristen','Katholik','Hindu','Buddha','Konghucu') NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_hp` varchar(13) NOT NULL,
  `Status_dlm_Klrg` enum('Anak Kandung','Anak Tiri') NOT NULL,
  `Nama_Ayah` varchar(150) NOT NULL,
  `Nama_Ibu` varchar(150) NOT NULL,
  `Pekerjaan_Ayah` varchar(50) NOT NULL,
  `Pekerjaan_Ibu` varchar(50) NOT NULL,
  `No_Rek_Bank` varchar(50) NOT NULL,
  `Bank_Atas_Nama` varchar(50) NOT NULL,
  `Status_Siswa` enum('Aktif','Lulus','Pindah','Dropout','Tidak Aktif') NOT NULL,
  `Sekolah_Asal` varchar(100) NOT NULL,
  `Anak_Ke` int(11) NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_tata_usahas`
--

CREATE TABLE `log_tata_usahas` (
  `ID_Pegawai` bigint(20) NOT NULL,
  `Nama_Pegawai` varchar(150) NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `TMT_Kerja` date NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenjang_Pendidikan` varchar(100) NOT NULL,
  `Status` enum('Aktif','Resign','Diberhentikan','Cuti') NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_wali_siswas`
--

CREATE TABLE `log_wali_siswas` (
  `ID_Wali` int(11) NOT NULL,
  `Nama_Wali` varchar(150) NOT NULL,
  `ID_Siswa` int(11) NOT NULL,
  `Pekerjaan_Wali` varchar(50) NOT NULL,
  `No_Rek_Bank` varchar(50) NOT NULL,
  `Bank_Atas_Nama` varchar(50) NOT NULL,
  `Action` varchar(6) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajarans`
--

CREATE TABLE `mata_pelajarans` (
  `Kode_Mapel` char(5) NOT NULL,
  `Nama_Mapel` varchar(50) NOT NULL,
  `KKM` int(11) NOT NULL,
  `Guru_Mapel` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mata_pelajarans`
--

INSERT INTO `mata_pelajarans` (`Kode_Mapel`, `Nama_Mapel`, `KKM`, `Guru_Mapel`) VALUES
('BIND', 'BAHASA INDONESIA', 75, 1148770671130093),
('BING', 'BAHASA INGGRIS', 70, 7545772673130023),
('IPA', 'ILMU PENGETAHUAN ALAM', 75, 1148770671130093),
('IPS', 'ILMU PENGETAHUAN SOSIAL', 75, 9736764665230312),
('MTK', 'MATEMATIKA', 75, 9261764666210083),
('PBP', 'PENDIDIKAN BUDI PEKERTI', 75, 5853776677230002),
('PJOK', 'PENDIDIKAN JASMANI, OLAHRAGA DAN KESEHATAN', 70, 2344763664110023),
('PPKN', 'PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN', 75, 1554758660110042),
('SBY', 'SENI BUDAYA', 70, 8450774675230033),
('TEST', 'tes', 80, 7545772673130023),
('TIK', 'Teknologi Informasi dan Komunikasi', 75, 125298476722301635);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_01_161847_create_siswas_table', 1),
(6, '2023_12_01_173321_create_guruses_table', 1),
(7, '2023_12_01_174538_create_tata_usahas_table', 1),
(8, '2023_12_01_180259_create_kepala_sekolahs_table', 1),
(9, '2023_12_01_181054_create_wali_siswas_table', 1),
(10, '2023_12_01_181917_create_kip_kps_pips_table', 1),
(11, '2023_12_01_182949_create_roles_table', 1),
(12, '2023_12_01_183825_create_role_assignments_table', 1),
(13, '2023_12_02_060106_create_tahun_ajarans_table', 1),
(14, '2023_12_02_060613_create_kelas_table', 1),
(15, '2023_12_02_061128_create_mata_pelajarans_table', 1),
(16, '2023_12_02_061638_create_jadwal_mapels_table', 1),
(17, '2023_12_02_063540_create_prestasis_table', 1),
(18, '2023_12_02_064011_create_nilais_table', 1),
(19, '2023_12_02_064905_create_ekstrakurikulers_table', 1),
(20, '2023_12_02_065452_create_absensi_kelas_table', 1),
(21, '2023_12_02_070140_create_ekskul_siswas_table', 1),
(22, '2023_12_02_072024_create_absensi_ekskuls_table', 1),
(23, '2023_12_02_072535_create_nilai_ekskuls_table', 1),
(24, '2023_12_02_072935_create_rapors_table', 1),
(25, '2023_12_02_074039_create_log_absensi_ekskuls_table', 1),
(26, '2023_12_02_074557_create_log_absensi_kelas_table', 1),
(27, '2023_12_02_074757_create_log_ekskul_siswas_table', 1),
(28, '2023_12_02_074932_create_log_ekstrakurikulers_table', 1),
(29, '2023_12_02_075233_create_log_jadwal_mapels_table', 1),
(30, '2023_12_02_075423_create_log_nilais_table', 1),
(31, '2023_12_02_075604_create_log_wali_siswas_table', 1),
(32, '2023_12_02_080213_create_log_roles_table', 1),
(33, '2023_12_02_080413_create_log_prestasis_table', 1),
(34, '2023_12_02_080543_create_log_rapors_table', 1),
(35, '2023_12_02_080731_create_log_gurus_table', 1),
(36, '2023_12_02_080919_create_log_kepala_sekolahs_table', 1),
(37, '2023_12_02_081048_create_log_kip_kps_pips_table', 1),
(38, '2023_12_02_081502_create_log_siswas_table', 1),
(39, '2023_12_02_081627_create_log_kelas_table', 1),
(40, '2023_12_02_081832_create_log_nilai_ekskuls_table', 1),
(41, '2023_12_02_082055_create_log_mata_pelajarans_table', 1),
(42, '2023_12_02_082213_create_log_tata_usahas_table', 1),
(43, '2023_12_02_082339_create_log_role_assignments_table', 1),
(44, '2023_12_02_084514_create_procedure_lists_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `Nilai_ID` int(11) NOT NULL,
  `Kode_Mapel` char(5) NOT NULL,
  `Siswa_ID` int(11) NOT NULL,
  `Thn_Ajaran` bigint(20) NOT NULL,
  `Jenis` enum('F1','F2','F3','UTS','UAS') NOT NULL,
  `Nilai_Pengetahuan` int(11) NOT NULL,
  `Nilai_Keterampilan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`Nilai_ID`, `Kode_Mapel`, `Siswa_ID`, `Thn_Ajaran`, `Jenis`, `Nilai_Pengetahuan`, `Nilai_Keterampilan`) VALUES
(1, 'BIND', 117795632, 2, 'F1', 87, 70),
(2, 'BIND', 117795632, 2, 'F2', 80, 78),
(3, 'BIND', 117795632, 2, 'F3', 75, 78),
(4, 'BIND', 117795632, 2, 'UTS', 80, 75),
(5, 'BIND', 117795632, 2, 'UAS', 88, 69),
(6, 'BING', 117795632, 2, 'F1', 89, 80),
(7, 'BING', 117795632, 2, 'F2', 80, 90),
(8, 'BING', 117795632, 2, 'F3', 98, 78),
(9, 'BING', 117795632, 2, 'UTS', 89, 78),
(10, 'BING', 117795632, 2, 'UAS', 89, 78),
(11, 'BIND', 114715088, 2, 'UAS', 88, 88);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ekskuls`
--

CREATE TABLE `nilai_ekskuls` (
  `ID_Nilai_Ekskul` int(11) NOT NULL,
  `ID_Ekskul_Siswa` varchar(10) NOT NULL,
  `Nilai` enum('A','B','C','D','E') NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_ekskuls`
--

INSERT INTO `nilai_ekskuls` (`ID_Nilai_Ekskul`, `ID_Ekskul_Siswa`, `Nilai`, `Keterangan`) VALUES
(1, 'MNR001', 'A', 'Sering Mengikuti Kegiatan Ekstrakulikuler'),
(2, 'PRK001', 'A', 'Sering Mengikuti Kegiatan Ekstrakulikuler');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `ID_Prestasi` varchar(10) NOT NULL,
  `Siswa` int(11) NOT NULL,
  `Jenis_Prestasi` enum('Akademik','Non-Akademik') NOT NULL,
  `Deskripsi` varchar(150) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`ID_Prestasi`, `Siswa`, `Jenis_Prestasi`, `Deskripsi`, `Tanggal`) VALUES
('P01', 117795632, 'Non-Akademik', 'Karate', '2023-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `rapors`
--

CREATE TABLE `rapors` (
  `ID_Rapor` int(11) NOT NULL,
  `Siswa_ID` int(11) NOT NULL,
  `Sikap_Spiritual` text NOT NULL,
  `Deskrip_Spiritual` text NOT NULL,
  `Sikap_Sosial` text NOT NULL,
  `Deskrip_Sosial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rapors`
--

INSERT INTO `rapors` (`ID_Rapor`, `Siswa_ID`, `Sikap_Spiritual`, `Deskrip_Spiritual`, `Sikap_Sosial`, `Deskrip_Sosial`) VALUES
(1, 117795632, 'B', 'Terbiasa berdoa sebelum dan sesudah melakukan kegiatan, menjalankan ibadah, memberi dan menjawab salam', 'A', 'Memiliki sikap social sangat baik, diantaranya : santun, disiplin, dan tanggung jawab yang baik, sangat responsif dalam pergaulan serta memiliki kepedulian sangat tinggi');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `tentang` text NOT NULL,
  `tujuan` text NOT NULL,
  `visi_misi` text NOT NULL,
  `alamat` text NOT NULL,
  `kec_kota` text NOT NULL,
  `provinsi` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `tentang`, `tujuan`, `visi_misi`, `alamat`, `kec_kota`, `provinsi`, `phone`) VALUES
(1, 'SISTEM INFORMASI AKADEMIK', 'SMP Swasta Amalyatul Huda adalah salah satu satuan pendidikan dengan jenjang SMP di Tanjung Mulia, Kec. Medan Deli, Kota Medan, Sumatera Utara. Dalam menjalankan kegiatannya, SMP Swasta Amalyatul Huda berada di bawah naungan Kementerian Pendidikan dan Kebudayaan. SMP Swasta Amalyatul Huda beralamat di Jl. Nusa Indah gg. Kilang Padi No. 44 Pasar 8, Tanjung Mulia, Kec. Medan Deli, Kota Medan, Sumatera Utara, dengan kode pos 20241. NPSN dari sekolah Amalyatul Huda adalah 69961293. SK Pendirian sekolah ini dikeluarkan pada 14 Maret 2017 dengan nomor 420/3727.Sarpras/2017. Selain itu, sekolah Amalyatul Huda juga telah terakreditasi C dengan SK Akreditasi nomor 789/BANSM/PROVSU/LL/X/2018 yang dikeluarkan pada 10 Oktober 2018.', '1. Mengembangkan budaya sekolah yang religius melalui kegiatan keagamaan\n2. Mengadakan kegiatan yang mendukung prestasi siswa baik secara akademis maupun non akademis.\n3. Mewujudkan peserta didik yang bermoral dalam pembentukan karakter\n4. Membudayakan 5 S ( senyum, salam, sapa, sopan dan santun)\n5. Melaksanakan aktivitas siswa yang menghasilkan karya\n6. Melaksanakan kegiatan membersihkan lingkungan sekolah serta pengolahan sampah organik dan anorganik', 'Terwujudnya Peserta Didik Yang Bertaqwa, Cerdas Berkarakter, Kreatif Dan Berwawasan Lingkungan\r\n1. Menanamkan nilai-nilai ketaqwaan kepada Tuhan Yang Maha Esa\r\n2. Melaksanakan kegiatan keagamaan\r\n3. Menciptakan peserta didik yang unggul dalam berkompetisi\r\n4. Menciptakan peserta didik yang bermoral dan berbudi pekerti yang baik\r\n5. Mewujudkan peserta didik yang terampil dalam berkreasi\r\n6. Menciptakan lingkungan yang bersih, ama, dan tertib', 'No.44 A, Jl. Kilang Padi Pasar 8 veteran No.kel, Tj. Mulia', 'Kec. Medan Deli, Kota Medan', 'Sumatera Utara, 20241', '+62 853 7171 6868');

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `NISN` int(11) NOT NULL,
  `Nama_Siswa` varchar(150) NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Agama` enum('Kristen','Katholik','Hindu','Buddha','Konghucu','Islam') NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_hp` varchar(13) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Status_dlm_Klrg` enum('Anak Kandung','Anak Tiri') NOT NULL,
  `Nama_Ayah` varchar(150) NOT NULL,
  `Nama_Ibu` varchar(150) NOT NULL,
  `Pekerjaan_Ayah` varchar(50) NOT NULL,
  `Pekerjaan_Ibu` varchar(50) NOT NULL,
  `No_Rek_Bank` varchar(50) DEFAULT NULL,
  `Bank_Atas_Nama` varchar(50) DEFAULT NULL,
  `Status_Siswa` enum('Aktif','Lulus','Pindah','Dropout','Tidak Aktif') NOT NULL,
  `Sekolah_Asal` varchar(100) NOT NULL,
  `Anak_Ke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`NISN`, `Nama_Siswa`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Agama`, `Alamat`, `No_hp`, `Kelas`, `Status_dlm_Klrg`, `Nama_Ayah`, `Nama_Ibu`, `Pekerjaan_Ayah`, `Pekerjaan_Ibu`, `No_Rek_Bank`, `Bank_Atas_Nama`, `Status_Siswa`, `Sekolah_Asal`, `Anak_Ke`) VALUES
(1412612, 'DILLA FAHRA', 'P', 'MARELAN', '2023-11-28', 'Konghucu', 'JALAN ASDASDKJAS', '12312689', 'SMP8B', 'Anak Kandung', 'BUDI', 'SITI', 'WIRASWASTA', 'WIRASWASTA', NULL, NULL, 'Aktif', 'SD ASDASKGFASF', 1),
(78791950, 'ADITYA ALFARIZ', 'L', 'MEDAN DENAI', '2007-10-15', 'Hindu', 'JL. K.L. YOS SUDARSO LINK III KM 9,5, KELURAHAN MABAR, KECAMATAN MEDAN DENAI, 20242', '082361335050', 'SMP8A', 'Anak Kandung', 'RAHMANSYAH', 'NUR ASYIAH', 'WIRASWASTA', 'WIRASWASTA', '', '', 'Aktif', 'SDS PUTRA NEGERI', 1),
(91676040, 'ADAM AGUSTIAN', 'L', 'MEDAN', '2009-08-11', 'Islam', 'JL. NUSA INDAH GG. FLAMBOYAN, KELURAHAN TANJUNG MULIA, KECAMATAN MEDAN DELI, KODE POS 20241', '081397922960', 'SMP8A', 'Anak Kandung', 'ADI ISWANTO', 'WINARTIK', 'WIRASWASTA', 'WIRASWASTA', '', '', 'Aktif', 'SD Sutomo', 2),
(108254549, 'AILA ALMIRA', 'P', 'MEDAN', '2010-09-16', 'Hindu', 'JL. NUSA INDAH Gg. FLAMBOYAN, KELURAHAN TANJUNG MULIA, KECAMATAN MEDAN DELI, 20241', '085679037660', 'SMP8A', 'Anak Kandung', 'ANDI PURNAMA', 'BEDA MANDASARI', 'WIRASWASTA', 'WIRASWASTA', '', '', 'Aktif', 'SDS AMALYATUL HUDA', 3),
(109600822, 'AFDU FIKAR Test', 'L', 'SEI MUKA', '2010-12-13', 'Kristen', 'JL. DUSUN IV A PASAR VII DESA MANUNGGAL, KECAMATAN MEDAN DENAI,', '082361335050', 'SMP8A', 'Anak Kandung', 'MISKUN', 'IIN NURLENI', 'WIRASWASTA', 'WIRASWASTA', '', '', 'Aktif', 'SDS AMALYATUL HUDA', 1),
(114715088, 'AHMAD JUHARI SITEPU', 'L', 'SEI MUKA 2', '2012-01-22', 'Kristen', 'DUSUN III Anjung Ganjang, KECAMATAN SIMPANG EMPAT,21271', '082267878625', 'SMP8A', 'Anak Kandung', 'AGUS SITEPU', 'DARMA WATI BR BUTAR BUTAR', 'WIRASWASTA', 'WIRASWASTA', '', '', 'Aktif', 'UPTD SDN 016546 TELUK DALAM', 1),
(117795632, 'ABDUL ROSYIIT', 'L', 'LANGKAT', '2011-04-26', 'Katholik', 'DUSUN 1 TANJUNG JATI KECAMATAN BINJAI, KODE POS 20761', '082164934533', 'SMP8A', 'Anak Tiri', 'MISDIANTO', 'SRI WAHYUNI', 'WIRASWASTA', 'WIRASWASTA', '', '', 'Lulus', 'SD NEGERI 026606', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajarans`
--

CREATE TABLE `tahun_ajarans` (
  `ID_Thn_Ajaran` bigint(20) NOT NULL,
  `Thn_Ajaran` char(9) NOT NULL,
  `Semester` enum('Ganjil','Genap') NOT NULL,
  `Tanggal_Mulai` date NOT NULL,
  `Tanggal_Selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_ajarans`
--

INSERT INTO `tahun_ajarans` (`ID_Thn_Ajaran`, `Thn_Ajaran`, `Semester`, `Tanggal_Mulai`, `Tanggal_Selesai`) VALUES
(1, '2025/2026', 'Genap', '2025-07-12', '2026-12-20'),
(2, '2022/2023', 'Ganjil', '2022-07-12', '2022-12-26'),
(3, '2022/2023', 'Genap', '2023-01-10', '2023-06-28'),
(4, '2025/2026', 'Genap', '2025-07-10', '2026-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `tata_usahas`
--

CREATE TABLE `tata_usahas` (
  `ID_Pegawai` bigint(20) NOT NULL,
  `Nama_Pegawai` varchar(150) NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `TMT_Kerja` date NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenjang_Pendidikan` varchar(100) NOT NULL,
  `Status` enum('Aktif','Resign','Diberhentikan','Cuti') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tata_usahas`
--

INSERT INTO `tata_usahas` (`ID_Pegawai`, `Nama_Pegawai`, `Jenis_Kelamin`, `TMT_Kerja`, `Tempat_Lahir`, `Tanggal_Lahir`, `Jenjang_Pendidikan`, `Status`) VALUES
(19880834, 'CHANDRA', 'L', '2010-10-11', 'MEDAN', '1988-02-23', 'D-3 ILMU KOMPUTER', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Kepala Sekolah','Siswa','Guru','Admin') NOT NULL,
  `to_role` bigint(50) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `to_role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'syafrizal@gmail.com', '2023-12-06 12:03:55', '$2y$12$7izPmOB2lgA6c6Mbc9POmOM4/o1Wx..ztE7lKkuY3KBuzds6cs.9u', 'Kepala Sekolah', 15312312, NULL, '2023-12-06 12:03:55', '2023-12-06 12:03:55'),
(2, 'guru', 'herlia@gmail.com', NULL, '$2y$12$7A2L9ZYwuVNVYaoblAd02eccmp/SAmFkI2mn16wJUhsXSh6prn2je', 'Guru', 1148770671130093, NULL, '2023-12-06 18:11:33', '2023-12-06 18:11:33'),
(3, 'tatausaha', 'chandra@gmail.com', NULL, '$2y$12$/k2b5SMCHfoNkA0yitkXjOMaUOHP.zRMxHkiAd0iGfdQtccYlpATG', 'Admin', 19880834, NULL, '2023-12-06 18:11:53', '2023-12-06 18:11:53'),
(4, 'siswa', 'aditya@gmail.com', NULL, '$2y$12$xoh1U3zVQAA7o0r0gj8c/O1vzNT3pISK8D9pD.zoWPiKhUAmD1gmG', 'Siswa', 78791950, '', '2023-12-06 18:12:05', '2023-12-06 18:12:05'),
(5, 'guru', 'putri@gmail.com', NULL, '$2y$12$7A2L9ZYwuVNVYaoblAd02eccmp/SAmFkI2mn16wJUhsXSh6prn2je', 'Guru', 1252771672230163, NULL, '2023-12-06 18:11:33', '2023-12-06 18:11:33'),
(6, 'guru', 'haris@gmail.com', NULL, '$2y$12$7A2L9ZYwuVNVYaoblAd02eccmp/SAmFkI2mn16wJUhsXSh6prn2je', 'Guru', 1554758660110042, NULL, '2023-12-06 18:11:33', '2023-12-06 18:11:33'),
(7, 'guru', 'syahputra@gmail.com', NULL, '$2y$12$7A2L9ZYwuVNVYaoblAd02eccmp/SAmFkI2mn16wJUhsXSh6prn2je', 'Guru', 2344763664110023, NULL, '2023-12-06 18:11:33', '2023-12-06 18:11:33'),
(8, 'guru', 'nurhasanah@gmail.com', NULL, '$2y$12$7A2L9ZYwuVNVYaoblAd02eccmp/SAmFkI2mn16wJUhsXSh6prn2je', 'Guru', 5853776677230002, NULL, '2023-12-06 18:11:33', '2023-12-06 18:11:33'),
(9, 'guru', 'della@gmail.com', NULL, '$2y$12$7A2L9ZYwuVNVYaoblAd02eccmp/SAmFkI2mn16wJUhsXSh6prn2je', 'Guru', 7545772673130023, NULL, '2023-12-06 18:11:33', '2023-12-06 18:11:33'),
(10, 'guru', 'siti@gmail.com', NULL, '$2y$12$7A2L9ZYwuVNVYaoblAd02eccmp/SAmFkI2mn16wJUhsXSh6prn2je', 'Guru', 8450774675230033, NULL, '2023-12-06 18:11:33', '2023-12-06 18:11:33'),
(11, 'guru', 'winastri@gmail.com', NULL, '$2y$12$7A2L9ZYwuVNVYaoblAd02eccmp/SAmFkI2mn16wJUhsXSh6prn2je', 'Guru', 9261764666210083, NULL, '2023-12-06 18:11:33', '2023-12-06 18:11:33'),
(12, 'guru', 'nursakinah@gmail.com', NULL, '$2y$12$7A2L9ZYwuVNVYaoblAd02eccmp/SAmFkI2mn16wJUhsXSh6prn2je', 'Guru', 9736764665230312, NULL, '2023-12-06 18:11:33', '2023-12-06 18:11:33'),
(13, 'guru', 'shafira@gmail.com', NULL, '$2y$12$7A2L9ZYwuVNVYaoblAd02eccmp/SAmFkI2mn16wJUhsXSh6prn2je', 'Guru', 125298476722301635, NULL, '2023-12-06 18:11:33', '2023-12-06 18:11:33'),
(14, 'siswa', 'adam@gmail.com', NULL, '$2y$12$xoh1U3zVQAA7o0r0gj8c/O1vzNT3pISK8D9pD.zoWPiKhUAmD1gmG', 'Siswa', 91676040, '', '2023-12-06 18:12:05', '2023-12-06 18:12:05'),
(15, 'siswa', 'aila@gmail.com', NULL, '$2y$12$xoh1U3zVQAA7o0r0gj8c/O1vzNT3pISK8D9pD.zoWPiKhUAmD1gmG', 'Siswa', 108254549, '', '2023-12-06 18:12:05', '2023-12-06 18:12:05'),
(16, 'siswa', 'afdu@gmail.com', NULL, '$2y$12$xoh1U3zVQAA7o0r0gj8c/O1vzNT3pISK8D9pD.zoWPiKhUAmD1gmG', 'Siswa', 109600822, '', '2023-12-06 18:12:05', '2023-12-06 18:12:05'),
(17, 'siswa', 'ahmad@gmail.com', NULL, '$2y$12$xoh1U3zVQAA7o0r0gj8c/O1vzNT3pISK8D9pD.zoWPiKhUAmD1gmG', 'Siswa', 114715088, '', '2023-12-06 18:12:05', '2023-12-06 18:12:05'),
(18, 'siswa', 'abdul@gmail.com', NULL, '$2y$12$xoh1U3zVQAA7o0r0gj8c/O1vzNT3pISK8D9pD.zoWPiKhUAmD1gmG', 'Siswa', 117795632, '', '2023-12-06 18:12:05', '2023-12-06 18:12:05'),
(19, 'siswa', 'dilla@gmail.com', NULL, '$2y$12$m/2FfoH.VNVF1qX65KHnoeYgMzm6yO3amkIWF1eIiWCtZKFabW.PW', 'Siswa', 1412612, NULL, NULL, NULL),
(22, 'tatausaha', 'nabila@gmail.com', NULL, '$2y$12$qmg9gC6eJ4HbjKUpjknyv.bZdMmAlaRONB7wkTwiQKepZcOVxwiJS', 'Admin', 124123, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wali_siswas`
--

CREATE TABLE `wali_siswas` (
  `ID_Wali` int(11) NOT NULL,
  `Nama_Wali` varchar(150) NOT NULL,
  `ID_Siswa` int(11) NOT NULL,
  `Pekerjaan_Wali` varchar(50) NOT NULL,
  `No_Rek_Bank` varchar(50) NOT NULL,
  `Bank_Atas_Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_ekskuls`
--
ALTER TABLE `absensi_ekskuls`
  ADD PRIMARY KEY (`ID_Absensi`),
  ADD KEY `absensi_ekskuls_id_ekskul_siswa_foreign` (`ID_Ekskul_Siswa`);

--
-- Indexes for table `absensi_kelas`
--
ALTER TABLE `absensi_kelas`
  ADD PRIMARY KEY (`ID_Absensi`),
  ADD KEY `absensi_kelas_siswa_id_foreign` (`Siswa_ID`),
  ADD KEY `absensi_kelas_kelas_foreign` (`Kelas`);

--
-- Indexes for table `ekskul_siswas`
--
ALTER TABLE `ekskul_siswas`
  ADD PRIMARY KEY (`ID_Ekskul_Siswa`),
  ADD KEY `ekskul_siswas_ekskul_kode_foreign` (`Ekskul_Kode`),
  ADD KEY `ekskul_siswas_siswa_id_foreign` (`Siswa_ID`),
  ADD KEY `ekskul_siswas_thn_ajaran_foreign` (`Thn_Ajaran`);

--
-- Indexes for table `ekstrakurikulers`
--
ALTER TABLE `ekstrakurikulers`
  ADD PRIMARY KEY (`Kode_Ekskul`),
  ADD KEY `ekstrakurikulers_guru_ekskul_foreign` (`Guru_Ekskul`);

--
-- Indexes for table `guruses`
--
ALTER TABLE `guruses`
  ADD PRIMARY KEY (`NUPTK`);

--
-- Indexes for table `jadwal_mapels`
--
ALTER TABLE `jadwal_mapels`
  ADD PRIMARY KEY (`ID_Jadwal`),
  ADD KEY `jadwal_mapels_kelas_id_foreign` (`Kelas_ID`),
  ADD KEY `jadwal_mapels_kode_mapel_foreign` (`Kode_Mapel`),
  ADD KEY `jadwal_mapels_thn_ajaran_id_foreign` (`Thn_Ajaran_ID`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`ID_Kelas`),
  ADD KEY `kelas_wali_kelas_foreign` (`Wali_Kelas`);

--
-- Indexes for table `kepala_sekolahs`
--
ALTER TABLE `kepala_sekolahs`
  ADD PRIMARY KEY (`ID_Kepsek`);

--
-- Indexes for table `kip_kps_pips`
--
ALTER TABLE `kip_kps_pips`
  ADD PRIMARY KEY (`ID_Status`),
  ADD KEY `kip_kps_pips_id_siswa_foreign` (`ID_Siswa`);

--
-- Indexes for table `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  ADD PRIMARY KEY (`Kode_Mapel`),
  ADD KEY `mata_pelajarans_guru_mapel_foreign` (`Guru_Mapel`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`Nilai_ID`),
  ADD KEY `nilais_kode_mapel_foreign` (`Kode_Mapel`),
  ADD KEY `nilais_siswa_id_foreign` (`Siswa_ID`),
  ADD KEY `nilais_thn_ajaran_foreign` (`Thn_Ajaran`);

--
-- Indexes for table `nilai_ekskuls`
--
ALTER TABLE `nilai_ekskuls`
  ADD PRIMARY KEY (`ID_Nilai_Ekskul`),
  ADD KEY `nilai_ekskuls_id_ekskul_siswa_foreign` (`ID_Ekskul_Siswa`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`ID_Prestasi`),
  ADD KEY `prestasis_siswa_foreign` (`Siswa`);

--
-- Indexes for table `rapors`
--
ALTER TABLE `rapors`
  ADD PRIMARY KEY (`ID_Rapor`),
  ADD KEY `rapors_id_nilai_foreign` (`Siswa_ID`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`NISN`),
  ADD KEY `Kelas` (`Kelas`);

--
-- Indexes for table `tahun_ajarans`
--
ALTER TABLE `tahun_ajarans`
  ADD PRIMARY KEY (`ID_Thn_Ajaran`);

--
-- Indexes for table `tata_usahas`
--
ALTER TABLE `tata_usahas`
  ADD PRIMARY KEY (`ID_Pegawai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wali_siswas`
--
ALTER TABLE `wali_siswas`
  ADD PRIMARY KEY (`ID_Wali`),
  ADD KEY `wali_siswas_id_siswa_foreign` (`ID_Siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `Nilai_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rapors`
--
ALTER TABLE `rapors`
  MODIFY `ID_Rapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi_ekskuls`
--
ALTER TABLE `absensi_ekskuls`
  ADD CONSTRAINT `absensi_ekskuls_id_ekskul_siswa_foreign` FOREIGN KEY (`ID_Ekskul_Siswa`) REFERENCES `ekskul_siswas` (`ID_Ekskul_Siswa`);

--
-- Constraints for table `absensi_kelas`
--
ALTER TABLE `absensi_kelas`
  ADD CONSTRAINT `absensi_kelas_kelas_foreign` FOREIGN KEY (`Kelas`) REFERENCES `kelas` (`ID_Kelas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `absensi_kelas_siswa_id_foreign` FOREIGN KEY (`Siswa_ID`) REFERENCES `siswas` (`NISN`) ON UPDATE CASCADE;

--
-- Constraints for table `ekskul_siswas`
--
ALTER TABLE `ekskul_siswas`
  ADD CONSTRAINT `ekskul_siswas_ekskul_kode_foreign` FOREIGN KEY (`Ekskul_Kode`) REFERENCES `ekstrakurikulers` (`Kode_Ekskul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ekskul_siswas_siswa_id_foreign` FOREIGN KEY (`Siswa_ID`) REFERENCES `siswas` (`NISN`),
  ADD CONSTRAINT `ekskul_siswas_thn_ajaran_foreign` FOREIGN KEY (`Thn_Ajaran`) REFERENCES `tahun_ajarans` (`ID_Thn_Ajaran`);

--
-- Constraints for table `ekstrakurikulers`
--
ALTER TABLE `ekstrakurikulers`
  ADD CONSTRAINT `ekstrakurikulers_guru_ekskul_foreign` FOREIGN KEY (`Guru_Ekskul`) REFERENCES `guruses` (`NUPTK`) ON UPDATE CASCADE;

--
-- Constraints for table `jadwal_mapels`
--
ALTER TABLE `jadwal_mapels`
  ADD CONSTRAINT `jadwal_mapels_kelas_id_foreign` FOREIGN KEY (`Kelas_ID`) REFERENCES `kelas` (`ID_Kelas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_mapels_kode_mapel_foreign` FOREIGN KEY (`Kode_Mapel`) REFERENCES `mata_pelajarans` (`Kode_Mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_mapels_thn_ajaran_id_foreign` FOREIGN KEY (`Thn_Ajaran_ID`) REFERENCES `tahun_ajarans` (`ID_Thn_Ajaran`) ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_wali_kelas_foreign` FOREIGN KEY (`Wali_Kelas`) REFERENCES `guruses` (`NUPTK`) ON UPDATE CASCADE;

--
-- Constraints for table `kip_kps_pips`
--
ALTER TABLE `kip_kps_pips`
  ADD CONSTRAINT `kip_kps_pips_id_siswa_foreign` FOREIGN KEY (`ID_Siswa`) REFERENCES `siswas` (`NISN`) ON UPDATE CASCADE;

--
-- Constraints for table `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  ADD CONSTRAINT `mata_pelajarans_guru_mapel_foreign` FOREIGN KEY (`Guru_Mapel`) REFERENCES `guruses` (`NUPTK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilais`
--
ALTER TABLE `nilais`
  ADD CONSTRAINT `nilais_kode_mapel_foreign` FOREIGN KEY (`Kode_Mapel`) REFERENCES `mata_pelajarans` (`Kode_Mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilais_siswa_id_foreign` FOREIGN KEY (`Siswa_ID`) REFERENCES `siswas` (`NISN`) ON UPDATE CASCADE,
  ADD CONSTRAINT `nilais_thn_ajaran_foreign` FOREIGN KEY (`Thn_Ajaran`) REFERENCES `tahun_ajarans` (`ID_Thn_Ajaran`) ON UPDATE CASCADE;

--
-- Constraints for table `nilai_ekskuls`
--
ALTER TABLE `nilai_ekskuls`
  ADD CONSTRAINT `nilai_ekskuls_id_ekskul_siswa_foreign` FOREIGN KEY (`ID_Ekskul_Siswa`) REFERENCES `ekskul_siswas` (`ID_Ekskul_Siswa`) ON UPDATE CASCADE;

--
-- Constraints for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD CONSTRAINT `prestasis_siswa_foreign` FOREIGN KEY (`Siswa`) REFERENCES `siswas` (`NISN`) ON UPDATE CASCADE;

--
-- Constraints for table `rapors`
--
ALTER TABLE `rapors`
  ADD CONSTRAINT `rapors_id_nilai_foreign` FOREIGN KEY (`Siswa_ID`) REFERENCES `siswas` (`NISN`) ON UPDATE CASCADE;

--
-- Constraints for table `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `siswas_ibfk_1` FOREIGN KEY (`Kelas`) REFERENCES `kelas` (`ID_Kelas`) ON UPDATE CASCADE;

--
-- Constraints for table `wali_siswas`
--
ALTER TABLE `wali_siswas`
  ADD CONSTRAINT `wali_siswas_id_siswa_foreign` FOREIGN KEY (`ID_Siswa`) REFERENCES `siswas` (`NISN`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
