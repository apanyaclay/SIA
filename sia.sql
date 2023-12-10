-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 09:46 AM
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

--
-- Dumping data for table `absensi_ekskuls`
--

INSERT INTO `absensi_ekskuls` (`ID_Absensi`, `ID_Ekskul_Siswa`, `Tanggal`, `Hadir`, `Izin`, `Alpa`, `Sakit`) VALUES
(1, 'PRK001', '2023-11-06', 10, 2, 3, 2),
(2, 'MNR001', '2023-11-09', 20, 7, 2, 8);

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

--
-- Dumping data for table `ekskul_siswas`
--

INSERT INTO `ekskul_siswas` (`ID_Ekskul_Siswa`, `Ekskul_Kode`, `Siswa_ID`, `Thn_Ajaran`) VALUES
('MNR001', 'MNR', 108254549, 1),
('PRK001', 'PRK', 117795632, 1),
('PRK002', 'MNYI', 91676040, 4),
('PST001', 'PST', 91676040, 1);

--
-- Dumping data for table `ekstrakurikulers`
--

INSERT INTO `ekstrakurikulers` (`Kode_Ekskul`, `Nama_Ekskul`, `Guru_Ekskul`, `Hari`, `Waktu_Mulai`, `Waktu_Selesai`) VALUES
('FSL', 'FUTSAL', 1554758660110042, 'Senin', '14:30:00', '16:30:00'),
('MNR', 'MENARI', 1148770671130093, 'Senin', '14:30:00', '16:30:00'),
('MNYI', 'MENYANYI', 7545772673130023, 'Rabu', '15:00:00', '16:00:00'),
('PRK', 'FUTSAL', 1148770671130093, 'Senin', '15:15:00', '16:16:00'),
('PST', 'Pencak Silat', 2344763664110023, 'Sabtu', '14:00:00', '17:00:00');

--
-- Dumping data for table `guruses`
--

INSERT INTO `guruses` (`NUPTK`, `NIP`, `Nama_Guru`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Status_Kepegawaian`, `Jenis_PTK`, `Jenjang_Pendidikan`, `TMT_Kerja`, `JJM`, `Status`) VALUES
(1148770671130093, '1222035608920007', 'Herlia Puspita Dewi', 'P', 'Pulau Raja', '1992-08-16', 'GTY/PTY', 'Guru Wali Kelas', 'S1-Bahasa Indonesia', '2017-07-18', 36, 'Aktif'),
(1252771672230163, '121987652200', 'Putri Yunita', 'L', 'Medan', '1993-06-17', 'Guru Honor', '', 'S1-Ekonomi', '2016-07-18', 12, 'Diberhentikan'),
(1554758660110042, '1271142202800007', 'Muhammad Haris', 'L', 'Pangakalian', '1980-02-22', 'Guru Honor', 'Guru Mapel', 'S1-Hukum', '2019-07-15', 18, 'Aktif'),
(2344763664110023, '1208304408060001', 'SYAHPUTRA EFENDI', 'L', 'MEDAN', '1985-10-12', 'GTY/PTY', 'Guru Mapel', 'S1 - MATEMATIKA', '2017-07-18', 30, 'Aktif'),
(5853776677230002, '1207256105980001', 'Nurhasanah', 'P', 'Manunggal', '1998-05-21', 'GTY/PTY', 'Guru Wali Kelas', 'S1-Pendidikan Agama Islam', '2019-07-18', 12, 'Aktif'),
(7545772673130023, '1271065312940001', 'Della Tria Putri', 'P', 'Medan', '1994-12-13', 'GTY/PTY', 'Guru Wali Kelas', 'S1-Bahasa Inggris', '2016-07-18', 24, 'Resign'),
(8450774675230033, '1219084209000005', 'SITI AMINAH', 'P', 'PADANG KEDONDONG', '1996-11-18', 'GTY/PTY', 'Guru Mapel', 'S-1 Pendidikan Kepelatiha', '2019-07-01', 18, 'Aktif'),
(9261764666210083, '1219054901020008', 'WINASTRI', 'P', 'HELVETIA', '1986-09-29', 'GTY/PTY', 'Guru Wali Kelas', 'S1 - PENDIDIKAN SENI BUDAYA', '2009-07-17', 4, 'Aktif'),
(9736764665230312, '1213034404860005', 'Nursakinah', 'P', 'Hutarimbaru', '1986-04-04', 'GTY/PTY', 'Guru Wali Kelas', 'S1-Ilmu Pengetahuan Sosial', '2017-07-18', 24, 'Cuti'),
(125298476722301635, '1219054404930002', 'SHAFIRA HILMI WAHYUDI', 'P', 'MEDAN', '1998-06-03', 'GTY/PTY', 'Guru Mapel', 'SMA/SEDERAJAT', '2020-07-13', 18, 'Aktif');

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

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`ID_Kelas`, `Wali_Kelas`, `Nama_Kelas`, `Tingkatan`, `Kelompok_Kelas`) VALUES
('SMP8A', 1148770671130093, 'Kelas 8-1', '8', 'A'),
('SMP8B', 9736764665230312, 'Kelas 8-2', '8', 'B'),
('SMP9A', 8450774675230033, 'Kelas 9-1', '9', 'A'),
('SMP9B', 9261764666210083, 'Kelas 9-2', '9', 'B'),
('TJH34', 7545772673130023, 'Kelas 7-1', '7', 'A'),
('TJH35', 5853776677230002, 'Kelas 7-2', '7', 'B');

--
-- Dumping data for table `kepala_sekolahs`
--

INSERT INTO `kepala_sekolahs` (`ID_Kepsek`, `Nama_Kepsek`, `Jenjang_Pendidikan`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `TMT_Kerja`, `Status`) VALUES
(1, 'SYAFRIZAL HAMZA', 'S-1 EKONOMI', 'L', 'MEDAN DENAI', '1993-06-17', '2016-07-18', 'Aktif');

--
-- Dumping data for table `kip_kps_pips`
--

INSERT INTO `kip_kps_pips` (`ID_Status`, `ID_Siswa`, `Status_KIP`, `No_KIP`, `Status_KPS`, `No_KPS`, `Status_Eligible_PIP`, `Alasan_Eligible_PIP`) VALUES
(1, 78791950, 'ya', '120008374', 'ya', '8362773673', 'tidak', ''),
(2, 109600822, 'ya', '3472748934', 'tidak', '', '', '');

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

--
-- Dumping data for table `log_nilai_ekskuls`
--

INSERT INTO `log_nilai_ekskuls` (`ID_Nilai_Ekskul`, `ID_Ekskul_Siswa`, `Nilai`, `Action`, `Username`, `Waktu`) VALUES
(1, 'MNR001', '', 'Insert', 'root@localhost', '2023-11-27 08:50:35'),
(2, 'PRK001', '', 'Insert', 'root@localhost', '2023-11-27 08:50:35');

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

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`Nilai_ID`, `Kode_Mapel`, `Siswa_ID`, `Thn_Ajaran`, `Jenis`, `Nilai_Pengetahuan`, `Nilai_Keterampilan`) VALUES
(1, 'BIND', 117795632, 2, 'F1', 87, 70),
(2, 'BIND', 117795632, 2, 'F2', 80, 78),
(3, 'BIND', 117795632, 2, 'F3', 75, 78),
(4, 'BIND', 117795632, 2, 'UTS', 80, 75),
(5, 'BIND', 117795632, 2, 'UAS', 88, 75),
(6, 'BING', 117795632, 2, 'F1', 89, 80),
(7, 'BING', 117795632, 2, 'F2', 80, 90),
(8, 'BING', 117795632, 2, 'F3', 98, 78),
(9, 'BING', 117795632, 2, 'UTS', 89, 78),
(10, 'BING', 117795632, 2, 'UAS', 89, 78);

--
-- Dumping data for table `nilai_ekskuls`
--

INSERT INTO `nilai_ekskuls` (`ID_Nilai_Ekskul`, `ID_Ekskul_Siswa`, `Nilai`) VALUES
(1, 'MNR001', ''),
(2, 'PRK001', '');

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`ID_Prestasi`, `Siswa`, `Jenis_Prestasi`, `Deskripsi`, `Tanggal`) VALUES
('P01', 78791950, '', 'Karate', '2023-10-12');

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID_Roles`, `Email`, `Password`, `Nama_Role`) VALUES
(1, 'superadmin@gmail.com', '$2y$12$7izPmOB2lgA6c6Mbc9POmOM4/o1Wx..ztE7lKkuY3KBuzds6cs.9u', 'Kepala Sekolah'),
(2, 'guru@gmail.com', '$2y$12$7A2L9ZYwuVNVYaoblAd02eccmp/SAmFkI2mn16wJUhsXSh6prn2je', 'Guru'),
(3, 'tatausaha@gmail.com', '$2y$12$/k2b5SMCHfoNkA0yitkXjOMaUOHP.zRMxHkiAd0iGfdQtccYlpATG', 'Tata Usaha'),
(4, 'siswa@gmail.com', '$2y$12$kOGbVOadvrq4htPBcj3apumjL8DBYr7gKutBTGopn9h6c56XWRx1W', 'Siswa');

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`NISN`, `NIPD`, `Nama_Siswa`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Agama`, `Alamat`, `No_hp`, `Status_dlm_Klrg`, `Nama_Ayah`, `Nama_Ibu`, `Pekerjaan_Ayah`, `Pekerjaan_Ibu`, `No_Rek_Bank`, `Bank_Atas_Nama`, `Status_Siswa`, `Sekolah_Asal`, `Anak_Ke`) VALUES
(123, 0, 'Test', 'L', 'Medan', '2023-12-02', 'Kristen', 'Medan No 1', '088888843', 'Anak Kandung', 'Budi', 'Siti', 'Kantor', 'Kantor', NULL, NULL, 'Aktif', 'SDN 00057 Medan', 3),
(12321, 0, 'sadsadasdas', 'L', 'asfasfas', '2023-12-04', 'Kristen', 'asdasvgadsv', '15234324', 'Anak Kandung', 'afd sdfsdf', 'sdf sd fFD sd', 'gfsdg fdsg fd', 'gfsdg fdsg fd', NULL, NULL, 'Lulus', 'asf af asdf dsg sdgsd', 12),
(99999, 0, 'sadsad', 'L', 'asdsa', '2023-12-09', '', 'asdasdas', '75423523523', 'Anak Kandung', 'asdasdas', 'dcbvdfgbdf', 'sadasacd', 'asdasdasdas', '', '', 'Aktif', '', 2),
(78791950, 0, 'ADITYA ALFARIZ', 'L', 'MEDAN', '2007-10-15', '', 'JL. K.L. YOS SUDARSO LINK III KM 9,5, KELURAHAN MABAR, KECAMATAN MEDAN DENAI, 20242', '082361335050', 'Anak Kandung', 'RAHMANSYAH', 'NUR ASYIAH', 'WIRASWASTA', 'TIDAK BEKERJA', '', '', 'Aktif', 'SDS PUTRA NEGERI', 1),
(91676040, 211, 'ADAM AGUSTIAN', 'L', 'MEDAN', '2009-08-11', '', 'JL. NUSA INDAH GG. FLAMBOYAN, KELURAHAN TANJUNG MULIA, KECAMATAN MEDAN DELI, KODE POS 20241', '081397922960', 'Anak Kandung', 'ADI ISWANTO', 'WINARTIK', 'WIRASWASTA', 'TIDAK BEKERJA', '', '', 'Aktif', '', 2),
(108254549, 0, 'AILA ALMIRA', 'P', 'MEDAN', '2010-09-16', '', 'JL. NUSA INDAH Gg. FLAMBOYAN, KELURAHAN TANJUNG MULIA, KECAMATAN MEDAN DELI, 20241', '085679037660', 'Anak Kandung', 'ANDI PURNAMA', 'BEDA MANDASARI', 'WIRASWASTA', 'TIDAK BEKERJA', '', '', 'Aktif', 'SDS AMALYATUL HUDA', 3),
(109600822, 0, 'AFDU FIKAR Test', 'L', 'SEI MUKA', '2010-12-13', 'Kristen', 'JL. DUSUN IV A PASAR VII DESA MANUNGGAL, KECAMATAN MEDAN DENAI,', '082361335050', 'Anak Kandung', 'MISKUN', 'IIN NURLENI', 'WIRASWASTA', 'WIRASWASTA', '', '', 'Tidak Aktif', 'SDS AMALYATUL HUDA', 1),
(114715088, 0, 'AHMAD JUHARI SITEPU', 'L', 'SEI MUKA 2', '2012-01-22', 'Kristen', 'DUSUN III Anjung Ganjang, KECAMATAN SIMPANG EMPAT,21271', '082267878625', 'Anak Kandung', 'AGUS SITEPU', 'DARMA WATI BR BUTAR BUTAR', 'WIRASWASTA', 'WIRASWASTA', '', '', 'Aktif', 'UPTD SDN 016546 TELUK DALAM', 1),
(117795632, 0, 'ABDUL ROSYIIT', 'L', 'LANGKAT', '2011-04-26', 'Kristen', 'DUSUN 1 TANJUNG JATI KECAMATAN BINJAI, KODE POS 20761', '082164934533', 'Anak Kandung', 'MISDIANTO', 'SRI WAHYUNI', 'WIRASWASTA', 'WIRASWASTA', '', '', 'Lulus', 'SD NEGERI 026606', 3);

--
-- Dumping data for table `tahun_ajarans`
--

INSERT INTO `tahun_ajarans` (`ID_Thn_Ajaran`, `Thn_Ajaran`, `Semester`, `Tanggal_Mulai`, `Tanggal_Selesai`) VALUES
(1, '2025/2026', 'Genap', '2025-07-12', '2026-12-20'),
(2, '2022/2023', 'Ganjil', '2022-07-12', '2022-12-26'),
(3, '2022/2023', 'Genap', '2023-01-10', '2023-06-28'),
(4, '2025/2026', 'Genap', '2025-07-10', '2026-12-25');

--
-- Dumping data for table `tata_usahas`
--

INSERT INTO `tata_usahas` (`ID_Pegawai`, `Nama_Pegawai`, `Jenis_Kelamin`, `TMT_Kerja`, `Tempat_Lahir`, `Tanggal_Lahir`, `Jenjang_Pendidikan`, `Status`) VALUES
(19880834, 'CHANDRA', 'L', '2010-10-11', 'MEDAN', '1988-02-23', 'D-3 ILMU KOMPUTER', 'Aktif');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', '2023-12-06 12:03:55', '$2y$12$7izPmOB2lgA6c6Mbc9POmOM4/o1Wx..ztE7lKkuY3KBuzds6cs.9u', NULL, '2023-12-06 12:03:55', '2023-12-06 12:03:55'),
(2, 'guru', 'guru@gmail.com', NULL, '$2y$12$7A2L9ZYwuVNVYaoblAd02eccmp/SAmFkI2mn16wJUhsXSh6prn2je', NULL, '2023-12-06 18:11:33', '2023-12-06 18:11:33'),
(3, 'tatausaha', 'tatausaha@gmail.com', NULL, '$2y$12$/k2b5SMCHfoNkA0yitkXjOMaUOHP.zRMxHkiAd0iGfdQtccYlpATG', NULL, '2023-12-06 18:11:53', '2023-12-06 18:11:53'),
(4, 'siswa', 'siswa@gmail.com', NULL, '$2y$12$xoh1U3zVQAA7o0r0gj8c/O1vzNT3pISK8D9pD.zoWPiKhUAmD1gmG', '', '2023-12-06 18:12:05', '2023-12-06 18:12:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
