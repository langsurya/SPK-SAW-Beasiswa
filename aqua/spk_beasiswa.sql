-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2014 at 02:41 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_user` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Elang Surya');

-- --------------------------------------------------------

--
-- Table structure for table `calonbeasiswa`
--

CREATE TABLE IF NOT EXISTS `calonbeasiswa` (
  `id_mhs` varchar(10) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `jurusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calonbeasiswa`
--

INSERT INTO `calonbeasiswa` (`id_mhs`, `nama_mhs`, `jurusan`) VALUES
('CPB-000001', 'Erlang', 'Informatika'),
('CPB-000002', 'Bimbi', 'Informatika'),
('CPB-000003', 'Seno', 'Informatika'),
('CPB-000004', 'Agus', 'Informatika'),
('CPB-000005', 'Khairunisa', 'Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `himpunan`
--

CREATE TABLE IF NOT EXISTS `himpunan` (
`id_himpunan` int(5) NOT NULL,
  `id_kriteria` int(5) NOT NULL,
  `namahimpunan` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `himpunan`
--

INSERT INTO `himpunan` (`id_himpunan`, `id_kriteria`, `namahimpunan`, `nilai`, `keterangan`) VALUES
(25, 1, 'IPK < 2.50', '25', 'Kurang'),
(26, 1, '2.50 <= IPK <= 3.00', '50', 'Cukup'),
(27, 1, '3.00 <= IPK <= 3.50', '75', 'Baik'),
(28, 1, 'IPK > 3.50', '100', 'Sangat Baik'),
(29, 2, 'Rp. 0 / Tidak ada pekerjaan', '25', 'Sangat Baik'),
(30, 2, 'Rp. 1.500.000 < Rp. 2.500.000', '50', 'Baik'),
(31, 2, 'Rp. 2.500.000 < Rp. 5.000.000', '75', 'Cukup'),
(32, 2, '> Rp. 5.000.000', '100', 'Kurang'),
(33, 3, 'Semester 1 - 2', '25', 'Kurang'),
(34, 3, 'Semester 3 - 4', '50', 'Cukup'),
(35, 3, 'Semester 5 - 6', '75', 'Baik'),
(36, 3, 'Semester 7 - 8', '100', 'Sangat Baik'),
(37, 4, '> 5 anak', '25', 'Sangat Baik'),
(38, 4, '4 Anak', '50', 'Baik'),
(39, 4, '2 - 3 Anak', '75', 'Cukup'),
(40, 4, '1 Anak', '100', 'Kurang'),
(41, 5, '> 21 Tahun', '25', 'Kurang'),
(42, 5, '20 - 21 Tahun', '50', 'Cukup'),
(43, 5, '18 - 19 Tahun', '75', 'Baik'),
(44, 5, 'Usia < 18 Tahun', '100', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE IF NOT EXISTS `klasifikasi` (
`id_klasifikasi` int(5) NOT NULL,
  `id_mhs` varchar(10) NOT NULL,
  `jml_tanggungan` double NOT NULL,
  `nilai_ipk` double NOT NULL,
  `penghasilan_ortu` double NOT NULL,
  `semester` double NOT NULL,
  `usia` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id_klasifikasi`, `id_mhs`, `jml_tanggungan`, `nilai_ipk`, `penghasilan_ortu`, `semester`, `usia`) VALUES
(18, 'CPB-000001', 100, 25, 50, 75, 25),
(19, 'CPB-000002', 25, 50, 75, 100, 50),
(20, 'CPB-000003', 50, 75, 100, 25, 75),
(21, 'CPB-000004', 75, 100, 25, 50, 100),
(23, 'CPB-000005', 100, 25, 50, 75, 25);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
`id_kriteria` int(5) NOT NULL,
  `namakriteria` varchar(100) NOT NULL,
  `atribut` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `namakriteria`, `atribut`) VALUES
(1, 'Nilai IPK', 'Benefit'),
(2, 'Penghasilan Ortu', 'Cost'),
(3, 'Semester', 'Benefit'),
(4, 'Jumlah Tanggungan', 'Cost'),
(5, 'Usia', 'Benefit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `calonbeasiswa`
--
ALTER TABLE `calonbeasiswa`
 ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `himpunan`
--
ALTER TABLE `himpunan`
 ADD PRIMARY KEY (`id_himpunan`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
 ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
 ADD PRIMARY KEY (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `himpunan`
--
ALTER TABLE `himpunan`
MODIFY `id_himpunan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
MODIFY `id_klasifikasi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
MODIFY `id_kriteria` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
