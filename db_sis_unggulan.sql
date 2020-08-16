-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 03:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sis_unggulan`
--

-- --------------------------------------------------------

--
-- Table structure for table `d01_kls`
--

CREATE TABLE `d01_kls` (
  `iddkls` int(11) NOT NULL,
  `idthaj` int(11) NOT NULL,
  `idsklh` int(11) NOT NULL,
  `idkls` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `d02_ssw`
--

CREATE TABLE `d02_ssw` (
  `iddssw` int(11) NOT NULL,
  `iddkls` int(11) NOT NULL,
  `idssw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s03_kls`
--

CREATE TABLE `s03_kls` (
  `idkls` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s03_kls`
--

INSERT INTO `s03_kls` (`idkls`, `Nama`) VALUES
(1, '1 IBNU ABAS'),
(2, '1 IBNU UMAR'),
(3, '2 IBNU HIBBAN'),
(4, '2 IBNU KHUZAIMAH'),
(5, '3 ABU DAWUD'),
(6, '3 ATTIRMIDZI'),
(7, '4 IBNU MAJAH'),
(8, '4 MUSLIM'),
(9, '5 AL BUKHORI'),
(10, '5 AN NASAI'),
(11, '6 AHMAD BIN HANBAL A'),
(12, '6 AHMAD BIN HANBAL B');

-- --------------------------------------------------------

--
-- Table structure for table `s04_guru`
--

CREATE TABLE `s04_guru` (
  `idguru` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s04_guru`
--

INSERT INTO `s04_guru` (`idguru`, `Nama`) VALUES
(1, 'Sutiyoso'),
(2, 'Djarot Saiful Hidayat'),
(3, 'Fauzi Bowo'),
(4, 'Soerjadi Soedirdja'),
(5, 'Wiyogo Atmodarminto'),
(6, 'Soeprapto'),
(7, 'Nono Taryono');

-- --------------------------------------------------------

--
-- Table structure for table `s05_ssw`
--

CREATE TABLE `s05_ssw` (
  `idssw` int(11) NOT NULL,
  `NIS` varchar(8) NOT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d01_kls`
--
ALTER TABLE `d01_kls`
  ADD PRIMARY KEY (`iddkls`);

--
-- Indexes for table `d02_ssw`
--
ALTER TABLE `d02_ssw`
  ADD PRIMARY KEY (`iddssw`);

--
-- Indexes for table `s03_kls`
--
ALTER TABLE `s03_kls`
  ADD PRIMARY KEY (`idkls`);

--
-- Indexes for table `s04_guru`
--
ALTER TABLE `s04_guru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indexes for table `s05_ssw`
--
ALTER TABLE `s05_ssw`
  ADD PRIMARY KEY (`idssw`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d01_kls`
--
ALTER TABLE `d01_kls`
  MODIFY `iddkls` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `d02_ssw`
--
ALTER TABLE `d02_ssw`
  MODIFY `iddssw` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `s03_kls`
--
ALTER TABLE `s03_kls`
  MODIFY `idkls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `s04_guru`
--
ALTER TABLE `s04_guru`
  MODIFY `idguru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `s05_ssw`
--
ALTER TABLE `s05_ssw`
  MODIFY `idssw` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
