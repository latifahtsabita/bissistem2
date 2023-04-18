-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 07:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bis_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_ayah`
--

CREATE TABLE `data_ayah` (
  `nis` int(10) NOT NULL,
  `nama_ayah` varchar(70) NOT NULL,
  `tempat_lahir_ayah` varchar(50) NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `agama_ayah` varchar(50) NOT NULL,
  `kewarganegaraan_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` int(50) NOT NULL,
  `pekerjaan_ayah` int(50) NOT NULL,
  `penghasilan_ayah` int(10) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `no_telp_ayah` int(15) NOT NULL,
  `status_ayah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_ibu`
--

CREATE TABLE `data_ibu` (
  `nis` int(10) NOT NULL,
  `nama_ibu` int(50) NOT NULL,
  `tempat_lahir_ibu` varchar(50) NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `agama_ibu` varchar(20) NOT NULL,
  `kewarganegaraan_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` int(10) NOT NULL,
  `alamat_ibu` varchar(100) NOT NULL,
  `no_telp_ibu` int(15) NOT NULL,
  `status_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_kependudukan`
--

CREATE TABLE `data_kependudukan` (
  `nis` int(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kd_kel` varchar(50) NOT NULL,
  `kd_kec` varchar(50) NOT NULL,
  `kd_kab` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kependudukan`
--

INSERT INTO `data_kependudukan` (`nis`, `alamat`, `kd_kel`, `kd_kec`, `kd_kab`, `kewarganegaraan`) VALUES
(2153, 'WONOLOPO RT 38 RW 17', 'GULUREJO', 'LENDAH', 'KULON PROGO', 'INDONESIA'),
(2154, 'KALISOKA RT 44 RW 22', 'TUKSONO', 'SENTOLO', 'KULON PROGO', 'INDONESIA');

-- --------------------------------------------------------

--
-- Table structure for table `data_pd`
--

CREATE TABLE `data_pd` (
  `id` int(50) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_k` varchar(15) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `status_dlm_kel` varchar(30) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `file_foto` longblob NOT NULL,
  `file_akta_lahir` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pd`
--

INSERT INTO `data_pd` (`id`, `nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `j_k`, `agama`, `status_dlm_kel`, `anak_ke`, `no_telp`, `file_foto`, `file_akta_lahir`) VALUES
(1, 2153, 'ADELIA AYU KUSUMA WARDANI', 'KULON PROGO', '2010-03-31', 'P', 'ISLAM', 'ANAK KANDUNG', 1, 0, '', ''),
(2, 2154, 'AGUS SETIAWAN', 'KULON PROGO', '2010-06-13', 'L', 'ISLAM', 'ANAK KANDUNG', 1, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_wali`
--

CREATE TABLE `data_wali` (
  `nis` int(10) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `tempat_lahir_wali` varchar(50) NOT NULL,
  `tgl_lahir_wali` date NOT NULL,
  `agama_wali` varchar(20) NOT NULL,
  `kewarganegaraan_wali` varchar(50) NOT NULL,
  `pendidikan_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `penghasilan_wali` int(10) NOT NULL,
  `alamat_wali` text NOT NULL,
  `no_telp_wali` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `kd_kab` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`kd_kab`, `nama`) VALUES
('KAB-001', 'YOGYAKARTA'),
('KAB-002', 'SLEMAN'),
('KAB-003', 'GUNUNG KIDUL'),
('KAB-004', 'KULON PROGO'),
('KAB-005', 'BANTUL');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kd_kec` varchar(50) NOT NULL,
  `kd_kab` varchar(50) NOT NULL,
  `nama_kec` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kd_kec`, `kd_kab`, `nama_kec`) VALUES
('kd_kec', 'kd_kab', 'nama_kec'),
('KEC-001', 'KAB-001', 'DANUREJAN'),
('KEC-002', 'KAB-001', 'GEDONGTENGEN'),
('KEC-003', 'KAB-001', 'GONDOKUSUMAN'),
('KEC-004', 'KAB-001', 'GONDOMANAN'),
('KEC-005', 'KAB-001', 'JETIS'),
('KEC-006', 'KAB-001', 'KOTAGEDE'),
('KEC-007', 'KAB-001', 'KRATON'),
('KEC-008', 'KAB-001', 'MANTRIJERON'),
('KEC-009', 'KAB-001', 'MERGANGSAN'),
('KEC-010', 'KAB-001', 'NGAMPILAN'),
('KEC-011', 'KAB-001', 'PAKUALAMAN'),
('KEC-012', 'KAB-001', 'TEGALREJO'),
('KEC-013', 'KAB-001', 'UMBULHARJO'),
('KEC-014', 'KAB-001', 'WIROBRAJAN'),
('KEC-015', 'KAB-002', 'BERBAH'),
('KEC-016', 'KAB-002', 'CANGKRINGAN'),
('KEC-017', 'KAB-002', 'DEPOK'),
('KEC-018', 'KAB-002', 'GAMPING'),
('KEC-019', 'KAB-002', 'GODEAN'),
('KEC-020', 'KAB-002', 'KALASAN'),
('KEC-021', 'KAB-002', 'MINGGIR'),
('KEC-022', 'KAB-002', 'MLATI'),
('KEC-023', 'KAB-002', 'MOYUDAN'),
('KEC-024', 'KAB-002', 'NGAGLIK'),
('KEC-025', 'KAB-002', 'NGEMPLAK'),
('KEC-026', 'KAB-002', 'PAKEM'),
('KEC-027', 'KAB-002', 'PRAMBANAN'),
('KEC-028', 'KAB-002', 'SEYEGAN'),
('KEC-029', 'KAB-002', 'SLEMAN'),
('KEC-030', 'KAB-002', 'TEMPEL'),
('KEC-031', 'KAB-002', 'TURI'),
('KEC-032', 'KAB-003', 'GEDANGSARI'),
('KEC-033', 'KAB-003', 'GIRISUBO'),
('KEC-034', 'KAB-003', 'KARANGMOJO'),
('KEC-035', 'KAB-003', 'NGAWEN'),
('KEC-036', 'KAB-003', 'NGLIPAR'),
('KEC-037', 'KAB-003', 'PALIYAN'),
('KEC-038', 'KAB-003', 'PANGGANG'),
('KEC-039', 'KAB-003', 'PATHUK'),
('KEC-040', 'KAB-003', 'PLAYEN'),
('KEC-041', 'KAB-003', 'PONJONG'),
('KEC-042', 'KAB-003', 'PURWOSARI'),
('KEC-043', 'KAB-003', 'RONGKOP'),
('KEC-044', 'KAB-003', 'SAPTOSARI'),
('KEC-045', 'KAB-003', 'SEMANU'),
('KEC-046', 'KAB-003', 'SEMIN'),
('KEC-047', 'KAB-003', 'TANJUNGSARI'),
('KEC-048', 'KAB-003', 'TEPUS'),
('KEC-049', 'KAB-003', 'WONOSARI'),
('KEC-050', 'KAB-004', 'GALUR'),
('KEC-051', 'KAB-004', 'GIRIMULYO'),
('KEC-052', 'KAB-004', 'KALIBAWANG'),
('KEC-053', 'KAB-004', 'KOKAP'),
('KEC-054', 'KAB-004', 'LENDAH'),
('KEC-055', 'KAB-004', 'NANGGULAN'),
('KEC-056', 'KAB-004', 'PANJATAN'),
('KEC-057', 'KAB-004', 'PENGASIH'),
('KEC-058', 'KAB-004', 'SAMIGALUH'),
('KEC-059', 'KAB-004', 'SENTOLO'),
('KEC-060', 'KAB-004', 'TEMON'),
('KEC-061', 'KAB-004', 'WATES');

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan_pd`
--

CREATE TABLE `kesehatan_pd` (
  `nis` int(10) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `penyakit_yg_diderita` varchar(100) NOT NULL,
  `kelainan_jasmani` varchar(100) NOT NULL,
  `berat_bdn` int(5) NOT NULL,
  `tinggi_bdn` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ket_pend`
--

CREATE TABLE `ket_pend` (
  `nis` int(10) NOT NULL,
  `lulusan_sd` varchar(50) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `alasan_pindah` text NOT NULL,
  `diterima_kelas` int(2) NOT NULL,
  `tgl_diterima` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pd`
--
ALTER TABLE `data_pd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pd`
--
ALTER TABLE `data_pd`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
