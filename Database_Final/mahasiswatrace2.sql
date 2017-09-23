-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2016 at 04:52 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_default`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(160) NOT NULL,
  `user` varchar(160) NOT NULL,
  `pekerjaan` varchar(160) NOT NULL,
  `jabatan` varchar(160) NOT NULL,
  `status` varchar(160) NOT NULL,
  `jeniskelamin` varchar(160) NOT NULL,
  `domisili` varchar(160) NOT NULL,
  `no_hp` varchar(160) NOT NULL,
  `bbm` varchar(160) NOT NULL,
  `footnote` varchar(160) NOT NULL,
  `foto` varchar(160) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `user`, `pekerjaan`, `jabatan`, `status`, `jeniskelamin`, `domisili`, `no_hp`, `bbm`, `footnote`, `foto`) VALUES
(1, 'Prima Putri Handayani ', 'primaputri', 'Admin UCAC', 'Staff USM', 'Menikah', 'Wanita', 'Semarang', '0898757827', '5CDA2EE', 'Semangat ', 'usm.jpg'),
(2, 'GuestAsROOT', 'guesttoor', 'Undefined', 'Undefined', 'Menikah', 'Undefined', 'Undefined', 'Testing', 'Undefined', 'Undefined', 'usm.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `isi` varchar(2000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `username`, `isi`, `time`, `status`) VALUES
(1, 'G211130088', 'Testing', '2016-02-12 13:14:30', ''),
(2, 'G211130088', 'hlo kok normal', '2016-02-12 13:14:40', '');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `nip` varchar(20) NOT NULL,
  `dosen` varchar(56) NOT NULL,
  `jk` varchar(56) NOT NULL,
  `alamat` varchar(56) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `dosen`, `jk`, `alamat`) VALUES
('0601078502', 'Fajriannoor Fanani, S.Sos., M.I.Kom.', 'L', 'Jl Prambanan TImur No.87'),
('0602107202', 'Sri Handayani, S.T., M.T.', 'P', 'Jl Kemayoran TImur No.76'),
('0602117801', 'Nursanti Irliana, S.Kom., M.Kom.', 'P', 'Jl Gajah Raya No.7'),
('0603068301', 'Henny Indrayati S.Kom.,M.Kom', 'P', 'Jl Simpang Lima 2'),
('0605118203', 'Errika Dwi Setya Watie, S.Sos., M.I.Kom.', 'P', 'Jl Menoreh Raya No.5'),
('0606058203', 'Hetty Catur Ellyawati, S.S., M.Hum.', 'P', 'Jl Tengaran Timur No.2'),
('0606077501', 'Atmoko Nugroho, S.T., M.Eng.', 'L', 'Jl Soekarno Hatta No 5'),
('0607047801', 'Rastri Prathivi', 'P', 'Jl Candigama Timur No 7'),
('0609078203', 'Edi Nurwahyu Julianto, S.Sos., M.I.Kom.', 'L', 'Jl Malangsari TImur no 5'),
('0611078401', 'Yuliyanto Budi Setiawan, S.Sos., M.Si.', 'L', 'Jl Kanggguru Barat No.8'),
('0612117602', 'Whisnumurti Adhiwibowo, S.T., M.Kom.', 'L', 'Jl Salak Utara No.14'),
('0613087801', 'Vensy Vydia, S.Kom., M.Kom.', 'P', 'Jl Tengiri Raya No.4'),
('0614028901', 'Kharisma Ayu Febriana, S.I.Kom., M.I.Kom.', 'P', 'Jl Srikandi Timur No'),
('0614047901', 'Titis Handayani, S.Kom., M.Cs.', 'P', 'Jl Rusa Raya No.789'),
('0615098202', 'Bernadus Very Christioko, S.Kom., M.Kom.', 'L', 'Jl Mangga No.16'),
('0621027601', 'Susanto, S.Kom., M.Kom.', 'L', 'Jl Candi Timur No.5'),
('0621038501', 'Aria Hendrawan, S.T., M.Kom.', 'L', 'Jl Kemang Timur No.7'),
('0623058402', 'Mohammad Sani Suprayogi, S.Kom., M.Cs.', 'L', 'Jl Bayu Prasetya No '),
('0623066002', 'Mochamad Chaerul Latief, S.Sos., M.Si.', 'L', 'Jl Singosari Raya No.13'),
('0624047901', 'Gita Aprinta E.B, S.Sos., M.Si.', 'P', 'Jl Jeruk Barat No.98'),
('0624057605', 'April Firman Daru, S.Kom.,M.Kom.', 'L', 'Jl Simpang Lima 1'),
('0626047901', 'Nur Wakhidah, S.Kom., M.Cs.', 'P', 'Jl Tegalsari Barat No.17'),
('0627048303', 'Prind Triajeng Pungkasanti, S.Kom., M.Kom.', 'P', 'Jl Manggis Raya No.5'),
('0627116901', 'Titin Winarti, S.Kom., MM.', 'P', 'Jl Sidodadi Selatan No.76'),
('0628128202', 'Basworo Ardi Pramono, S.T., M.T.', 'L', 'Jl Koja Barat No.43');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE IF NOT EXISTS `kuesioner` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nim` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `nomortelepon` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `programstudi` varchar(45) NOT NULL,
  `F3` varchar(45) NOT NULL,
  `F4` varchar(45) NOT NULL,
  `F5` varchar(45) NOT NULL,
  `F6` varchar(45) NOT NULL,
  `F7` varchar(45) NOT NULL,
  `F8` varchar(45) NOT NULL,
  `F9` varchar(45) NOT NULL,
  `F10` varchar(45) NOT NULL,
  `F11` varchar(45) NOT NULL,
  `F12` varchar(45) NOT NULL,
  `F13` varchar(45) NOT NULL,
  `F14` varchar(45) NOT NULL,
  `F15` varchar(45) NOT NULL,
  `F16` varchar(45) NOT NULL,
  `A1` varchar(45) NOT NULL,
  `A2` varchar(45) NOT NULL,
  `A3` varchar(45) NOT NULL,
  `A4` varchar(45) NOT NULL,
  `A5` varchar(45) NOT NULL,
  `A6` varchar(45) NOT NULL,
  `A7` varchar(45) NOT NULL,
  `A8` varchar(45) NOT NULL,
  `A9` varchar(45) NOT NULL,
  `A10` varchar(45) NOT NULL,
  `A11` varchar(45) NOT NULL,
  `A12` varchar(45) NOT NULL,
  `A13` varchar(45) NOT NULL,
  `A14` varchar(45) NOT NULL,
  `A15` varchar(45) NOT NULL,
  `A16` varchar(45) NOT NULL,
  `A17` varchar(45) NOT NULL,
  `A18` varchar(45) NOT NULL,
  `A19` varchar(45) NOT NULL,
  `A20` varchar(45) NOT NULL,
  `A21` varchar(45) NOT NULL,
  `A22` varchar(45) NOT NULL,
  `A23` varchar(45) NOT NULL,
  `A24` varchar(45) NOT NULL,
  `A25` varchar(45) NOT NULL,
  `A26` varchar(45) NOT NULL,
  `A27` varchar(45) NOT NULL,
  `B1` varchar(45) NOT NULL,
  `B2` varchar(45) NOT NULL,
  `B3` varchar(45) NOT NULL,
  `B4` varchar(45) NOT NULL,
  `B5` varchar(45) NOT NULL,
  `B6` varchar(45) NOT NULL,
  `B7` varchar(45) NOT NULL,
  `B8` varchar(45) NOT NULL,
  `B9` varchar(45) NOT NULL,
  `B10` varchar(45) NOT NULL,
  `B11` varchar(45) NOT NULL,
  `B12` varchar(45) NOT NULL,
  `B13` varchar(45) NOT NULL,
  `B14` varchar(45) NOT NULL,
  `B15` varchar(45) NOT NULL,
  `B16` varchar(45) NOT NULL,
  `B17` varchar(45) NOT NULL,
  `B18` varchar(45) NOT NULL,
  `B19` varchar(45) NOT NULL,
  `B20` varchar(45) NOT NULL,
  `B21` varchar(45) NOT NULL,
  `B22` varchar(45) NOT NULL,
  `B23` varchar(45) NOT NULL,
  `B24` varchar(45) NOT NULL,
  `B25` varchar(45) NOT NULL,
  `B26` varchar(45) NOT NULL,
  `B27` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `nim`, `nama`, `nomortelepon`, `email`, `programstudi`, `F3`, `F4`, `F5`, `F6`, `F7`, `F8`, `F9`, `F10`, `F11`, `F12`, `F13`, `F14`, `F15`, `F16`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`, `A10`, `A11`, `A12`, `A13`, `A14`, `A15`, `A16`, `A17`, `A18`, `A19`, `A20`, `A21`, `A22`, `A23`, `A24`, `A25`, `A26`, `A27`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `B7`, `B8`, `B9`, `B10`, `B11`, `B12`, `B13`, `B14`, `B15`, `B16`, `B17`, `B18`, `B19`, `B20`, `B21`, `B22`, `B23`, `B24`, `B25`, `B26`, `B27`) VALUES
(1, 'G211130027', 'Aditya Aldi', '08989898989', 'aditya@gmail.com', 'S1 Teknik Informatika', 'Setelah Wisuda', 'Langsung Melamar ke Perusahaan', 'Sebelum Wisuda', '1', '1', 'Bekerja', 'Sibuk dengan keluarga', 'Ya', 'Wirausaha', 'Peternakan', '2500000', 'Sangat Erat', 'Setingkat Lebih tinggi', 'Pertanyaan yang tidak Perlu', '3', '3', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '5', '5', '5', '5', '5', '5', '5', '4', '4', '4', '4', '0', '4', '4', '4', '4', '4', '5', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_perusahaan` varchar(56) NOT NULL,
  `kategori` varchar(56) NOT NULL,
  `header` varchar(56) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(120) NOT NULL,
  `isi` text NOT NULL,
  `outdate` varchar(120) NOT NULL,
  `foto_industri` varchar(56) NOT NULL,
  `foto_lowongan` varchar(56) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id`, `id_perusahaan`, `kategori`, `header`, `tanggal`, `judul`, `isi`, `outdate`, `foto_industri`, `foto_lowongan`, `status`) VALUES
(1, 'G211130088', 'web design', 'Web', '2016-02-12 15:15:37', 'Web', 'Konten', '2016-04-28', 'DSC_0953_s2.jpg', 'jamujago.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(56) NOT NULL,
  `nim` varchar(56) NOT NULL,
  `fakultas` varchar(56) NOT NULL,
  `jurusan` varchar(56) NOT NULL,
  `pekerjaan` varchar(56) NOT NULL,
  `jabatan` varchar(56) NOT NULL,
  `status` varchar(56) NOT NULL,
  `jeniskelamin` varchar(56) NOT NULL,
  `wisudawan` varchar(56) NOT NULL,
  `domisili` varchar(56) NOT NULL,
  `no_hp` varchar(43) NOT NULL,
  `bbm` varchar(32) NOT NULL,
  `footnote` varchar(56) NOT NULL,
  `foto` varchar(65) NOT NULL,
  `kuesioner` varchar(23) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `fakultas`, `jurusan`, `pekerjaan`, `jabatan`, `status`, `jeniskelamin`, `wisudawan`, `domisili`, `no_hp`, `bbm`, `footnote`, `foto`, `kuesioner`) VALUES
(7, 'Fajar Jarbu', 'G211130088', 'FTIK', 'S1 Teknik Informatika', 'ERP-SAP Programer', 'Executive', 'Menikah', 'pria', '89', 'Singapura', '08987527847', '5DACYSA', 'Semangat!!!!!!', 'DSC_0953_s2.jpg', '1'),
(8, 'Mohammad Ismail', 'G211130067', 'FTIK', 'S1 Teknik Informatika', 'Enterpreneurship', 'Staff', 'Menikah', 'pria', '89', 'Semarang', '08958757889', '5ECDA2R', 'Semangat dalam kerjakan sesuatu dan jangan lupa minta ba', 'ismail.jpg', '1'),
(9, 'Hendi Kurniawan', 'G21130099', 'FTIK', 'S1 Teknik Informatika', 'Senior Developer', 'Developer', 'Menikah', 'pria', '60', 'Semarang', '089839393', 'F545GH', 'Semangat dalam hidup', '', ''),
(10, 'Kholid Zakaria', 'G211130101', 'FTIK', 'S1 Teknik Informatika', 'Developer', 'Developer', 'Menikha', 'pria', '61', 'Semarang', '0898894583', '5tTUSU', 'Joss', 'kimiafarma.jpg', ''),
(12, 'Aditya Aldi', 'G211130027', 'FTIK', 'S1 Teknik Informatika', 'Ngangur', 'cenggur', 'cenggur dua kali ', 'pria', '80', 'Semarang', '089898989898', '5DGHAHH', 'Semangat', 'angularjs.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifdosen`
--

CREATE TABLE IF NOT EXISTS `notifdosen` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(45) NOT NULL,
  `isi` varchar(2000) NOT NULL,
  `root` varchar(160) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE IF NOT EXISTS `pengaturan` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama_apps` varchar(320) NOT NULL,
  `inst` varchar(320) NOT NULL,
  `telepon` varchar(320) NOT NULL,
  `email` varchar(320) NOT NULL,
  `fb` varchar(320) NOT NULL,
  `twitter` varchar(320) NOT NULL,
  `alamat` varchar(320) NOT NULL,
  `no_hp` varchar(320) NOT NULL,
  `seo` varchar(320) NOT NULL,
  `status` varchar(320) NOT NULL,
  `ket` varchar(320) NOT NULL,
  `dev` varchar(320) NOT NULL,
  `tahun` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama_apps`, `inst`, `telepon`, `email`, `fb`, `twitter`, `alamat`, `no_hp`, `seo`, `status`, `ket`, `dev`, `tahun`) VALUES
(1, 'usm career and alumni center', 'universitas Semarang', '089xxxxx', 'ucac@gmail.com', 'https://www.facebook.com/infoalumni.usm/', 'https://twitter.com/ucac_info', 'Jl. Soekarno-Hatta,Semarang', '08998xxxxxxxx', 'USM Career', 'aktif', 'web ucac', '@UCAC', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE IF NOT EXISTS `perusahaan` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(320) NOT NULL,
  `nama` varchar(320) NOT NULL,
  `jenis` varchar(320) NOT NULL,
  `alamat` varchar(320) NOT NULL,
  `email` varchar(320) NOT NULL,
  `no_hp` varchar(320) NOT NULL,
  `npwp` varchar(320) NOT NULL,
  `foto` varchar(320) NOT NULL,
  `footnote` varchar(320) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `username`, `nama`, `jenis`, `alamat`, `email`, `no_hp`, `npwp`, `foto`, `footnote`) VALUES
(3, 'majumakmur', 'PT. Maju Makmur Tbk.', 'pt', 'Jl Kaligawe Timur', 'majumakmur @gmail.com', '089894898989', '932I9482309482309', 'jeruk.jpg', 'sEMANGAT'),
(4, 'PT Jagorawi', 'PT Jagorawi', 'cv', 'Jl Kaligawe Timur No5', 'jagorai@gmail.com', '08989898987', '982384782394879879', '1488124_4818864406287_2172947763914918354_n.jpg', 'Semangat');

-- --------------------------------------------------------

--
-- Table structure for table `poster`
--

CREATE TABLE IF NOT EXISTS `poster` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `judul` varchar(320) NOT NULL,
  `foto` varchar(320) NOT NULL,
  `status` varchar(320) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `poster`
--

INSERT INTO `poster` (`id`, `judul`, `foto`, `status`) VALUES
(1, 'Goyang', 'slide2.jpg', '1'),
(2, 'Goyang dumang', 'slide3.jpg', '1'),
(3, 'FIle', 'slide4.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `privatemessage`
--

CREATE TABLE IF NOT EXISTS `privatemessage` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(45) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `penerima` varchar(45) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `privatemessage`
--

INSERT INTO `privatemessage` (`id`, `pengirim`, `isi`, `penerima`, `time`) VALUES
(1, 'G211130088', 'tes', 'G211130067', '2016-01-18 04:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `progdi`
--

CREATE TABLE IF NOT EXISTS `progdi` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama_progdi` varchar(160) NOT NULL,
  `id_progdi` varchar(160) NOT NULL,
  `properties` varchar(160) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `progdi`
--

INSERT INTO `progdi` (`id`, `nama_progdi`, `id_progdi`, `properties`) VALUES
(1, 'S1 - Teknik Informatika', 'FTIK', '1'),
(2, 'S1 - Sistem Informasi', 'FTIK', '1'),
(3, 'S1 - Ilmu Komunikasi', 'FTIK', '1'),
(4, 'S1 - Ilmu Hukum', 'FH', '1'),
(5, 'S1 - Hasil Teknologi Pertanian', 'FP', '1'),
(6, 'D3 - Manajemen Perusahaan', 'FE', '1'),
(7, 'S1 - Manajemen', 'FE', '1'),
(8, 'S1 - Akuntansi', 'FE', '1'),
(9, 'S1 - Teknik Sipil', 'FT', '1'),
(10, 'S1 - Teknik Elektro', 'FT', '1'),
(11, 'S1 - Psikologi', 'FPS', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sessions`
--

CREATE TABLE IF NOT EXISTS `tbl_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sessions`
--

INSERT INTO `tbl_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('59b7417343b7d934cb82b54ff506c130', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36', 1455331458, '');

-- --------------------------------------------------------

--
-- Table structure for table `text_info`
--

CREATE TABLE IF NOT EXISTS `text_info` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `tentang_usm_career` varchar(4096) NOT NULL,
  `visi` varchar(4096) NOT NULL,
  `misi` varchar(4096) NOT NULL,
  `tujuan_manfaat` varchar(4096) NOT NULL,
  `tentang_tracer` varchar(4096) NOT NULL,
  `disclaimer` varchar(4096) NOT NULL,
  `other3` varchar(4096) NOT NULL,
  `other4` varchar(4096) NOT NULL,
  `other5` varchar(4096) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `text_info`
--

INSERT INTO `text_info` (`id`, `tentang_usm_career`, `visi`, `misi`, `tujuan_manfaat`, `tentang_tracer`, `disclaimer`, `other3`, `other4`, `other5`) VALUES
(1, 'Dalam rangka penyelenggaraan program layanan karir Universitas Semarang (USM) dan informasi alumni dalam dunia kerja, maka perlu didirikan sebuah pusat karir dan alumni di USM. Pusat Karir dan Alumni, atau yang disebut USM Career & Alumni Center (UCAC) ini memiliki tujuan diantaranya: ', 'Menjadi lembaga yang mampu memberikan layanan kepada mahasiswa dan lulusan untuk meningkatkan kompetensi dan ketrampilan sesuai dengan kebutuhan dunia kerja. ', '<li>Menyelenggarakan kegiatan rekrutmen, pelatihan dan konsultasi karir bagi mahasiswa dan lulusan.</li>\r\n    <li>Membangun jejaring kerja sama dengan pihak perusahaaan/instansi/lembaga pencari kerja.</li>\r\n    <li>Melaksanakan penelusuran dan pendataan lulusan (Tracer study).</li>', 'Memfasilitasi informasi lowongankerja untuk memenuhi kebutuhan mahasiswa dan lulusan sesuai dengan bidangnya. Menyiapkan lulusan sesuai dengan kompetensi yang diperlukan di dunia kerja. Sebagai sarana bertemunya mahasiswa dan lulusan dengan perusahaan/ instansi/ lembaga yang membutuhkan tenaga kerja. Mengetahui dan meningkatkan keterserapan, proses, dan posisi lulusan dalam dunia kerja. ', '<p>Program Tracer Study (TS) dilaksanakan oleh bagian Tracer Study pada Pusat Karir dan Alumni USM (UJCA). Tracer Study menurut Buku Panduan Sistem Pusat Karir Dikti 2012 merupakan studi penelusuran alumni untuk mengetahui kegiatan alumni setelah lulus dari PT, transisi dari dunia pendidikan tinggi ke dunia kerja, situasi kerja, pemerolehan kompetensi, dan penggunaan kompetensi dalam pekerjaan dan perjalanan karir.</p>\r\n\r\n<p>TS bermanfaat menginformasikan dan menyiapkan alumni dengan kompetensi yang diperlukan di dunia kerja. TS yang diberikan kepada alumni berupa kuisioner yang terdiri dari pertanyaan dan pernyataan yang sebagian besar sesuai dengan standar kuisioner evaluasi TS Online Dikti yang terdapat pada situs http://evaluasi.dikti.go.id /tracerstudy/database/form. Hasil analisis dan interpretasi dari data TS yang diperoleh merupakan bahan penelitian yang dapat digunakan untuk pengambilan keputusan di perguruan tinggi baik sebagai bahan untuk pengembangan kurikulum, untuk pengambilan keputusan, atau bahkan menjadi bahan untuk mengembangkan penelitian lebih lanjut. TS dilakukan melalui dua metode, yaitu manual dan online dalam jangka panjang.</p>\r\n\r\n<p>Metode manual merupakan penelusuran atau pelacakan alumni yang dilakukan melalui pengisian form TS secara langsung pada blangko kuisioner yang di Kantor UJCA, Kemahasiswaan, dan di masing-masing Fakultas USM. Metode ini juga di lakukan pada saat kegiatan kealumnian. Bagi alumni yang berada di luar Semarang, form TS dikirimkan melalui email. Metode online merupakan pelacakan alumni yang dilakukan melalui pengisian form TS secara langsung melalui Website UJCA pada situs http://jobs.usm.ac.id. Program TS ini dilakukan antara 1 sampai dengan 3 tahun setelah lulus/ wisuda.</p>\r\n                                      ', '<p>Semua informasi di situs ini diterbitkan dengan itikad baik dan untuk tujuan informasi umum. USM Career and Alumni Center tidak membuat jaminan mengenai kelengkapan, keandalan dan keakuratan informasi ini. Setiap tindakan yang Anda lakukan pada informasi yang Anda temukan di website ini, adalah tanggung jawab Anda sendiri. USM Career and Alumni Center tidak akan bertanggung jawab untuk setiap kerugian dan / atau kerusakan sehubungan dengan penggunaan informasi dari website kami.</p>\r\n                           ', '', '', ''),
(2, 'Dalam rangka penyelenggaraan program layanan karir Universitas Semarang (USM) dan informasi alumni dalam dunia kerja, maka perlu didirikan sebuah pusat karir dan alumni di USM. Pusat Karir dan Alumni, atau yang disebut USM Career & Alumni Center (UCAC) ini memiliki tujuan diantaranya: ', 'Menjadi lembaga yang mampu memberikan layanan kepada mahasiswa dan lulusan untuk meningkatkan kompetensi dan ketrampilan sesuai dengan kebutuhan dunia kerja. ', '<li>Menyelenggarakan kegiatan rekrutmen, pelatihan dan konsultasi karir bagi mahasiswa dan lulusan.</li>    <li>Membangun jejaring kerja sama dengan pihak perusahaaan/instansi/lembaga pencari kerja.</li>    <li>Melaksanakan penelusuran dan pendataan lulusan (Tracer study).</li>', 'Memfasilitasi informasi lowongankerja untuk memenuhi kebutuhan mahasiswa dan lulusan sesuai dengan bidangnya. Menyiapkan lulusan sesuai dengan kompetensi yang diperlukan di dunia kerja. Sebagai sarana bertemunya mahasiswa dan lulusan dengan perusahaan/ instansi/ lembaga yang membutuhkan tenaga kerja. Mengetahui dan meningkatkan keterserapan, proses, dan posisi lulusan dalam dunia kerja. ', '<p>Program Tracer Study (TS) dilaksanakan oleh bagian Tracer Study pada Pusat Karir dan Alumni USM (UJCA). Tracer Study menurut Buku Panduan Sistem Pusat Karir Dikti 2012 merupakan studi penelusuran alumni untuk mengetahui kegiatan alumni setelah lulus dari PT, transisi dari dunia pendidikan tinggi ke dunia kerja, situasi kerja, pemerolehan kompetensi, dan penggunaan kompetensi dalam pekerjaan dan perjalanan karir.</p><p>TS bermanfaat menginformasikan dan menyiapkan alumni dengan kompetensi yang diperlukan di dunia kerja. TS yang diberikan kepada alumni berupa kuisioner yang terdiri dari pertanyaan dan pernyataan yang sebagian besar sesuai dengan standar kuisioner evaluasi TS Online Dikti yang terdapat pada situs http://evaluasi.dikti.go.id /tracerstudy/database/form. Hasil analisis dan interpretasi dari data TS yang diperoleh merupakan bahan penelitian yang dapat digunakan untuk pengambilan keputusan di perguruan tinggi baik sebagai bahan untuk pengembangan kurikulum, untuk pengambilan keputusan, atau bahkan menjadi bahan untuk mengembangkan penelitian lebih lanjut. TS dilakukan melalui dua metode, yaitu manual dan online dalam jangka panjang.</p><p>Metode manual merupakan penelusuran atau pelacakan alumni yang dilakukan melalui pengisian form TS secara langsung pada blangko kuisioner yang di Kantor UJCA, Kemahasiswaan, dan di masing-masing Fakultas USM. Metode ini juga di lakukan pada saat kegiatan kealumnian. Bagi alumni yang berada di luar Semarang, form TS dikirimkan melalui email. Metode online merupakan pelacakan alumni yang dilakukan melalui pengisian form TS secara langsung melalui Website UJCA pada situs http://jobs.usm.ac.id. Program TS ini dilakukan antara 1 sampai dengan 3 tahun setelah lulus/ wisuda.</p>                                      ', '<p>Semua informasi di situs ini diterbitkan dengan itikad baik dan untuk tujuan informasi umum. USM Career and Alumni Center tidak membuat jaminan mengenai kelengkapan, keandalan dan keakuratan informasi ini. Setiap tindakan yang Anda lakukan pada informasi yang Anda temukan di website ini, adalah tanggung jawab Anda sendiri. USM Career and Alumni Center tidak akan bertanggung jawab untuk setiap kerugian dan / atau kerusakan sehubungan dengan penggunaan informasi dari website kami.</p>                           ', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE IF NOT EXISTS `todolist` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(56) NOT NULL,
  `isi` varchar(120) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`id`, `username`, `isi`, `time`) VALUES
(4, 'G211130067', 'Musti target, telo bingit', '2015-12-02 16:53:14'),
(12, 'G211130088', 'Testing direct job list Author  :fajar jarbu', '2015-12-08 01:47:41'),
(14, 'primaputri', 'Nyoba', '2016-01-19 03:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(65) NOT NULL,
  `username` varchar(56) NOT NULL,
  `password` varchar(56) NOT NULL,
  `level` varchar(4) NOT NULL,
  `foto` varchar(56) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `foto`) VALUES
(6, 'Fajar Jarbu', 'G211130088', '5BL_t3KtkDyUacNGHgLAa6VG15G0IByOvLEOJf7xPVw', '2', 'DSC_0953_s2.jpg'),
(7, 'Mohammad Ismail', 'G211130067', '5BL_t3KtkDyUacNGHgLAa6VG15G0IByOvLEOJf7xPVw', '2', 'ismail.jpg'),
(11, 'PT. Indosat Tbk.', 'indosat', 'GjnHH06jHSLjqecrWIK8XT037zAS-H1uuLfXAkedffI', '3', 'indosat.jpg'),
(13, 'Prima Putri', 'primaputri', 'etQfMimKmSs5NWGPwX5Q7U9jJDEhpU0I3-7p9Z4ZeaY', 'root', 'usm.jpg'),
(16, 'PT Jagorawi', 'PTJagorawi', 'xpPOfqVVcNMV5pbPnRxxK0M0qi38k7JT-mWDX6jPKVI', '3', '1488124_4818864406287_2172947763914918354_n.jpg'),
(17, 'GuestAsRoot', 'guesttoor', 'etQfMimKmSs5NWGPwX5Q7U9jJDEhpU0I3-7p9Z4ZeaY', 'root', 'usm.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
