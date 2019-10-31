-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 04:19 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_Admin` varchar(12) NOT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Nama_admin` varchar(30) DEFAULT NULL,
  `No_Telp` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_Admin`, `Password`, `Nama_admin`, `No_Telp`) VALUES
('pdam456', '8d34457c92217c2092a512904605cea3', 'abc', '085641322617');

-- --------------------------------------------------------

--
-- Table structure for table `data_kerjasama`
--

CREATE TABLE `data_kerjasama` (
  `Id_DataKerjasama` int(11) NOT NULL,
  `Gambar` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kerjasama`
--

INSERT INTO `data_kerjasama` (`Id_DataKerjasama`, `Gambar`) VALUES
(6, 0x62333263373332383537666466646435363832393363313765396163396238372e706e67),
(7, 0x30616239646339666561303134393139313830303233333939366437353039612e706e67),
(8, 0x39303061333139313434396162376338643265383535393237626538396639642e706e67),
(10, 0x32323861356462393935306636343433633437316335643532383032393762312e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `data_teknik`
--

CREATE TABLE `data_teknik` (
  `Id_DataTeknik` varchar(11) NOT NULL,
  `Sumber_Air` varchar(100) DEFAULT NULL,
  `Tersedia` float DEFAULT NULL,
  `Dimanfaatkan` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_teknik`
--

INSERT INTO `data_teknik` (`Id_DataTeknik`, `Sumber_Air`, `Tersedia`, `Dimanfaatkan`) VALUES
('DtTk0207191', 'KALIGIRI', 110, 110),
('DtTk1307193', 'BUMIJAWA ', 70, 70),
('DtTk2607190', 'SPAM BREGAS', 200, 50.98);

-- --------------------------------------------------------

--
-- Table structure for table `data_umum`
--

CREATE TABLE `data_umum` (
  `Id_DataUmum` varchar(11) NOT NULL,
  `Jml_Pnddk` int(11) DEFAULT NULL,
  `Jml_Pel` int(11) DEFAULT NULL,
  `Jml_Pel_Aktif` int(11) DEFAULT NULL,
  `Struktur_Organisasi` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_umum`
--

INSERT INTO `data_umum` (`Id_DataUmum`, `Jml_Pnddk`, `Jml_Pel`, `Jml_Pel_Aktif`, `Struktur_Organisasi`) VALUES
('DtUm8407199', 247212, 27042, 25840, 0x65396435613365343530353733663565646361323133653839326630333831652e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id_Feedback` int(11) NOT NULL,
  `Id_Admin` varchar(12) DEFAULT NULL,
  `No_Sambungan` char(10) DEFAULT NULL,
  `Tgl_Input` date DEFAULT NULL,
  `Jam_Input` time DEFAULT NULL,
  `Kritik` mediumtext,
  `Saran` mediumtext,
  `Status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id_Feedback`, `Id_Admin`, `No_Sambungan`, `Tgl_Input`, `Jam_Input`, `Kritik`, `Saran`, `Status`) VALUES
(60, 'pdam456', '34534', NULL, NULL, 'rge', 'fvd', ''),
(61, 'pdam456', NULL, NULL, NULL, 'dsgdg', 'dsgdg', ''),
(62, 'pdam456', NULL, NULL, NULL, 'dsgdg', 'dsgdg', ''),
(63, 'pdam456', NULL, NULL, NULL, 'dsgdg', 'dsgdg', ''),
(64, 'pdam456', NULL, NULL, NULL, 'dsgdg', 'dsgdg', ''),
(65, 'pdam456', NULL, NULL, NULL, 'dsgdg', 'dsgdg', ''),
(66, 'pdam456', NULL, NULL, NULL, '', NULL, ''),
(67, 'pdam456', NULL, NULL, NULL, '', NULL, ''),
(68, 'pdam456', NULL, NULL, NULL, '', NULL, ''),
(69, 'pdam456', NULL, NULL, NULL, '', NULL, ''),
(73, 'pdam456', NULL, NULL, NULL, NULL, NULL, ''),
(74, 'pdam456', NULL, NULL, NULL, NULL, NULL, ''),
(75, 'pdam456', NULL, NULL, NULL, NULL, NULL, ''),
(76, 'pdam456', NULL, NULL, NULL, NULL, NULL, ''),
(85, 'pdam456', '7637536', '2019-07-18', '11:41:02', 'a', 'b', ''),
(86, 'pdam456', '4543243524', '2019-08-05', '15:40:29', 'refer', 'erger', '');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `Id_Informasi` varchar(16) NOT NULL,
  `Id_Admin` varchar(12) DEFAULT NULL,
  `Judul` varchar(40) DEFAULT NULL,
  `Tipe` varchar(7) DEFAULT NULL,
  `Status` varchar(5) NOT NULL,
  `Gambar` longblob,
  `Isi` varchar(400) NOT NULL,
  `Tgl_Terbit` date DEFAULT NULL,
  `Jam_Terbit` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`Id_Informasi`, `Id_Admin`, `Judul`, `Tipe`, `Status`, `Gambar`, `Isi`, `Tgl_Terbit`, `Jam_Terbit`) VALUES
('Inf0649331807193', 'pdam456', 'Pengumuman', 'Penting', 'POST', 0x32346363623635306365393662373134396236653362313530373163616436382e6a7067, 'Hujan mengguyur Kota Padang dan sekitarnya mulai dari Jumat (2/11) siang hingga malam dengan intensitas lebat. Akibatnya, debit sungai di beberapa intake PDAM Kota Padang yang sangat tinggi saat ini berdampak pada terganggunya proses pengolahan di instalasi pengolahan air (IPA) PDAM Kota Padang sehingga berakibat terganggunya pendistribusian air ke pelanggan. Menanggapi hal itu, Kasubag Humas P', '2019-07-18', '18:54:16'),
('Inf0808131607194', 'pdam456', 'Pengumuman', 'Biasa', 'POST', 0x35633234333737366366333965663636643038393136643462373465323735332e706e67, 'Hujan mengguyur Kota Padang dan sekitarnya mulai dari Jumat (2/11) siang hingga malam dengan intensitas lebat. Akibatnya, debit sungai di beberapa intake PDAM Kota Padang yang sangat tinggi saat ini berdampak pada terganggunya proses pengolahan di instalasi pengolahan air (IPA) PDAM Kota Padang sehingga berakibat terganggunya pendistribusian air ke pelanggan.\r\n\r\nMenanggapi hal itu, Kasubag Humas P', '2019-07-16', '08:23:21'),
('Inf0851091107192', 'pdam456', 'wedwed', 'Penting', 'POST', 0x37333666663933666631663563396538663135653135363631386561633862312e6a7067, 'wedwe', '2019-07-11', '19:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` int(15) NOT NULL,
  `Id_DataPegawai` int(3) NOT NULL,
  `Nama_pegawai` varchar(30) DEFAULT NULL,
  `Jabatan` varchar(50) DEFAULT NULL,
  `Foto_pegawai` longblob,
  `Jml_Pegawai_Tetap` int(11) DEFAULT NULL,
  `Jml_Pegawai_Tidak_Tetap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `Id_DataPegawai`, `Nama_pegawai`, `Jabatan`, `Foto_pegawai`, `Jml_Pegawai_Tetap`, `Jml_Pegawai_Tidak_Tetap`) VALUES
(12399, 2, 'ijweij', 'Direktur', 0x30303465376363336233636639326465636539653132646166383863326538302e6a7067, 100, 100),
(9879879, 3, 'tyfytf', 'Kasubag Humas', 0x66623762306465333761623039343233653464616165653030633437396532332e706e67, NULL, NULL),
(981, 4, 'abc', 'Kabag Hubungan Pelanggan', 0x36303863336332383732613532333461623034336234313632333664343436342e6a7067, NULL, NULL),
(1234, 5, 'qwerty', 'Kabag Administrasi dan Keuangan', 0x38303638646336343337336435373033633234626261666461623762313736312e6a7067, NULL, NULL),
(9876, 6, 'asdf', 'Kabag Teknik', 0x34393235666537663237373762633462383861393933336635656532663830352e6a7067, NULL, NULL),
(3456, 7, 'xcvv', 'Kasubag perencana', 0x61393062346232646162363261386165386565336661353263656364633362372e6a7067, NULL, NULL),
(78928, 8, 'qwert', 'Kasubag peralatan', 0x62623232643939313966383336653331646637656361663830366433326665322e6a7067, NULL, NULL),
(728302, 9, 'asdf', 'Kasubag distribusi', 0x32633166373731653439633236393862353133393034363731326230343834612e6a7067, NULL, NULL),
(82973, 10, 'zxcv', 'Kasubag sumber', 0x66613236396338333066326339363631653565633861366231653834316338392e6a7067, NULL, NULL),
(73938, 11, 'asdfgj', 'Kasubag Pembukuan', 0x63306262306161653064616130613366326163343663646563373739656531332e6a7067, NULL, NULL),
(637, 12, 'tyuo', 'Kasubag Kasir dan Tagih', 0x34303235373137376331643761636563396235656136653931636463346637622e6a7067, NULL, NULL),
(7868712, 13, 'vhsadj', 'Kasubag Umum dan Kepegawaian', 0x61616233313736386535383731383236333163336464313734356333386364392e6a7067, NULL, NULL),
(97983, 14, 'uhd', 'Kasubag Gudang', 0x64303236623834303632303132366135646131656364346636643666613134642e6a7067, NULL, NULL),
(652634, 16, 'ygwef', 'Kasubag Rekening', 0x34653739636131343937373637666430613234323637386266656235303635312e6a7067, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `Id_Profil` varchar(11) NOT NULL,
  `Sejarah` longtext NOT NULL,
  `Deskripsi_Perusahaan` longtext NOT NULL,
  `Visi` mediumtext NOT NULL,
  `Misi1` varchar(60) DEFAULT NULL,
  `Misi2` varchar(60) DEFAULT NULL,
  `Misi3` varchar(60) DEFAULT NULL,
  `Misi4` varchar(60) DEFAULT NULL,
  `Misi5` varchar(60) DEFAULT NULL,
  `Misi6` varchar(60) DEFAULT NULL,
  `Misi7` varchar(60) DEFAULT NULL,
  `Misi8` varchar(60) DEFAULT NULL,
  `Misi9` varchar(60) DEFAULT NULL,
  `Misi10` varchar(60) DEFAULT NULL,
  `Foto_Perusahaan` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`Id_Profil`, `Sejarah`, `Deskripsi_Perusahaan`, `Visi`, `Misi1`, `Misi2`, `Misi3`, `Misi4`, `Misi5`, `Misi6`, `Misi7`, `Misi8`, `Misi9`, `Misi10`, `Foto_Perusahaan`) VALUES
('Prf12345678', '', '', 'Terdepan dan Tersehat dalam Pelayanan', 'Memberikan pelayanan air bersih', 'Memberikan tarif air minum yang', 'Menjaga kelestarian dan ketersediaan air baku ', 'Meningkatkan profesionalisme', 'Meningkatkan kesejahteraan karyawan ', NULL, NULL, NULL, NULL, NULL, 0x31303261373636383362383262343064343637646437333062353739343639612e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `prosedur`
--

CREATE TABLE `prosedur` (
  `Id_Prosedur` varchar(11) NOT NULL,
  `Id_Admin` varchar(12) NOT NULL,
  `Judul_Prosedur` varchar(30) NOT NULL,
  `Langkah1` varchar(100) NOT NULL,
  `Langkah2` varchar(100) NOT NULL,
  `Langkah3` varchar(100) NOT NULL,
  `Langkah4` varchar(100) NOT NULL,
  `Langkah5` varchar(100) NOT NULL,
  `Langkah6` varchar(100) DEFAULT NULL,
  `Langkah7` varchar(100) DEFAULT NULL,
  `Langkah8` varchar(100) DEFAULT NULL,
  `Langkah9` varchar(100) DEFAULT NULL,
  `Langkah10` varchar(100) DEFAULT NULL,
  `Gambar` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prosedur`
--

INSERT INTO `prosedur` (`Id_Prosedur`, `Id_Admin`, `Judul_Prosedur`, `Langkah1`, `Langkah2`, `Langkah3`, `Langkah4`, `Langkah5`, `Langkah6`, `Langkah7`, `Langkah8`, `Langkah9`, `Langkah10`, `Gambar`) VALUES
('PRSDR20191', 'pdam456', 'Prosedur Menjadi Pelanggan', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 0x63326461316263386363613330326161666366636538633236346366343232362e706e67),
('PRSDR20192', 'pdam456', 'Prosedur Berhenti Sementara', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 0x39626331366233616364643963333262376162393537366133323166313330352e706e67),
('PRSDR20193', 'pdam456', 'Prosedur Pembukaan Kembali', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 0x63383465646135363561376137636636393239633166363462343831636438342e706e67),
('PRSDR20194', 'pdam456', 'Prosedur Balik Nama', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 0x62343166373131626137656531613539396330386562383765623233636135632e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `Id_Tarif` int(11) NOT NULL,
  `Kelompok_Pelanggan` varchar(100) NOT NULL,
  `Tarif_I` int(11) NOT NULL,
  `Tarif_II` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`Id_Tarif`, `Kelompok_Pelanggan`, `Tarif_I`, `Tarif_II`) VALUES
(4, 'KELOMPOK I', 0, 0),
(5, 'a. Sosial Umum', 2400, 2700),
(6, 'b. Sosial Khusus', 2700, 2700),
(7, 'KELOMPOK II', 0, 0),
(8, 'a. Rumah Tangga A', 3000, 5400),
(9, 'b. Rumah Tangga B', 3750, 7500),
(10, 'c. Rumah Tangga C', 4500, 8100),
(11, 'd. Instansi Pemerintah', 5250, 8250),
(12, 'KELOMPOK III', 0, 0),
(13, 'a. Niaga A', 7500, 12750),
(14, 'b. Niaga B', 9000, 15000),
(15, 'c. Niaga C', 10500, 18000),
(16, 'KELOMPOK IV', 0, 0),
(17, 'a. Industri A', 11250, 16500),
(18, 'b. Industri B', 18000, 25500),
(19, 'KELOMPOK V', 0, 0),
(20, 'a. Usaha pada Kawasan Pelabuhan', 39000, 45750),
(21, 'b. Tangki Air No Komersil', 46500, 46500),
(22, 'c. Tangki Air Komersil', 69000, 69000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_Admin`);

--
-- Indexes for table `data_kerjasama`
--
ALTER TABLE `data_kerjasama`
  ADD PRIMARY KEY (`Id_DataKerjasama`);

--
-- Indexes for table `data_teknik`
--
ALTER TABLE `data_teknik`
  ADD PRIMARY KEY (`Id_DataTeknik`),
  ADD UNIQUE KEY `Id_Informasi` (`Id_DataTeknik`);

--
-- Indexes for table `data_umum`
--
ALTER TABLE `data_umum`
  ADD PRIMARY KEY (`Id_DataUmum`),
  ADD KEY `Id_Informasi` (`Id_DataUmum`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id_Feedback`),
  ADD KEY `No_Sambungan` (`No_Sambungan`),
  ADD KEY `Id_Admin` (`Id_Admin`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`Id_Informasi`),
  ADD KEY `Id_Admin` (`Id_Admin`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`Id_DataPegawai`),
  ADD UNIQUE KEY `NIP` (`NIP`),
  ADD KEY `Id_Informasi` (`Id_DataPegawai`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`Id_Profil`);

--
-- Indexes for table `prosedur`
--
ALTER TABLE `prosedur`
  ADD PRIMARY KEY (`Id_Prosedur`),
  ADD UNIQUE KEY `Id_Prosedur` (`Id_Prosedur`),
  ADD KEY `Id_Admin` (`Id_Admin`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`Id_Tarif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kerjasama`
--
ALTER TABLE `data_kerjasama`
  MODIFY `Id_DataKerjasama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id_Feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `Id_DataPegawai` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `Id_Tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Id_Admin`) REFERENCES `admin` (`Id_Admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`Id_Admin`) REFERENCES `admin` (`Id_Admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prosedur`
--
ALTER TABLE `prosedur`
  ADD CONSTRAINT `prosedur_ibfk_1` FOREIGN KEY (`Id_Admin`) REFERENCES `admin` (`Id_Admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
