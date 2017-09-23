-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Des 2015 pada 07.00
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mahasiswatrace2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `isi` varchar(2000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `username`, `isi`, `time`) VALUES
(28, 'G211130088', 'Testing Direct chat ', '2015-12-08 01:47:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `nip` varchar(20) NOT NULL,
  `dosen` varchar(56) NOT NULL,
  `jk` varchar(56) NOT NULL,
  `alamat` varchar(56) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
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
-- Struktur dari tabel `kuesioner`
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
  `F17` varchar(45) NOT NULL,
  `F18` varchar(45) NOT NULL,
  `F19` varchar(45) NOT NULL,
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
-- Dumping data untuk tabel `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `nim`, `nama`, `nomortelepon`, `email`, `programstudi`, `F3`, `F4`, `F5`, `F6`, `F7`, `F8`, `F9`, `F10`, `F11`, `F12`, `F13`, `F14`, `F15`, `F16`, `F17`, `F18`, `F19`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`, `A10`, `A11`, `A12`, `A13`, `A14`, `A15`, `A16`, `A17`, `A18`, `A19`, `A20`, `A21`, `A22`, `A23`, `A24`, `A25`, `A26`, `A27`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `B7`, `B8`, `B9`, `B10`, `B11`, `B12`, `B13`, `B14`, `B15`, `B16`, `B17`, `B18`, `B19`, `B20`, `B21`, `B22`, `B23`, `B24`, `B25`, `B26`, `B27`) VALUES
(1, 'G211130088', 'Fajar Buwana Eka P', '08987527847', 'fasus@rocketmail.com', 'S1 Teknik Informatika', '1', '2', '3', '4', '5', '4', '3', '4', '5', '5', '4', '3', '2', '3', '4', '4', '5', '6', '6', '7', '6', '5', '6', '6', '7', '5', '8', '5', '6', '6', '6', '7', '8', '6', '7', '8', '7', '6', '7', '8', '7', '8', '7', '8', '7', '8', '7', '8', '7', '8', '7', '8', '7', '8', '7', '8', '7', '8', '7', '8', '7', '8', '7', '8', '7', '8', '7', '8', '7', '8', '7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `fakultas`, `jurusan`, `pekerjaan`, `jabatan`, `status`, `jeniskelamin`, `wisudawan`, `domisili`, `no_hp`, `bbm`, `footnote`, `foto`, `kuesioner`) VALUES
(7, 'Fajar Jarbu', 'G211130088', 'FTIK', 'S1 Teknik Informatika', 'ERP-SAP Programer', 'Executive', 'Menikah', 'pria', '89', 'Singapura', '08987527847', '5DACYSA', 'Semangat!!!!!!', 'jarbu2.jpg', '1'),
(8, 'Mohammad Ismail', 'G211130067', 'FTIK', 'S1 Teknik Informatika', 'Enterpreneurship', 'Staff', 'Menikah', 'pria', '89', 'Semarang', '08958757889', '5ECDA2R', 'Semangat dalam kerjakan sesuatu dan jangan lupa minta ba', 'ismail.jpg', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifdosen`
--

CREATE TABLE IF NOT EXISTS `notifdosen` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(45) NOT NULL,
  `isi` varchar(2000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `notifdosen`
--

INSERT INTO `notifdosen` (`id`, `nidn`, `isi`, `time`) VALUES
(1, '0624057605', 'Anda harus segera mengisi kuesioner', '2015-12-08 02:03:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `privatemessage`
--

CREATE TABLE IF NOT EXISTS `privatemessage` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(45) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `penerima` varchar(45) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `todolist`
--

CREATE TABLE IF NOT EXISTS `todolist` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(56) NOT NULL,
  `isi` varchar(120) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `todolist`
--

INSERT INTO `todolist` (`id`, `username`, `isi`, `time`) VALUES
(4, 'G211130067', 'Musti target, telo bingit', '2015-12-02 16:53:14'),
(12, 'G211130088', 'Testing direct job list Author  :fajar jarbu', '2015-12-08 01:47:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(65) NOT NULL,
  `username` varchar(56) NOT NULL,
  `password` varchar(56) NOT NULL,
  `level` varchar(4) NOT NULL,
  `foto` varchar(56) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `foto`) VALUES
(6, 'Fajar Jarbu', 'G211130088', 'telo', '2', 'jarbu2.jpg'),
(7, 'Mohammad Ismail', 'G211130067', 'ismail', '2', 'ismail.jpg'),
(8, 'Herlina S.Pd', 'Herlina', 'Herlina12', '1', 'herlina.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
