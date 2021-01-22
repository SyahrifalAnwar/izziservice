-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2021 pada 05.39
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `izzi_service`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian_departemen`
--

CREATE TABLE `bagian_departemen` (
  `id_bagian_dept` int(11) NOT NULL,
  `nama_bagian_dept` varchar(30) NOT NULL,
  `id_dept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bagian_departemen`
--

INSERT INTO `bagian_departemen` (`id_bagian_dept`, `nama_bagian_dept`, `id_dept`) VALUES
(4, 'PELANGGAN', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE `departemen` (
  `id_dept` int(11) NOT NULL,
  `nama_dept` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id_dept`, `nama_dept`) VALUES
(1, 'USER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_feedback`
--

CREATE TABLE `history_feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_ticket` varchar(13) NOT NULL,
  `feedback` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `reported` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history_feedback`
--

INSERT INTO `history_feedback` (`id_feedback`, `id_ticket`, `feedback`, `deskripsi`, `reported`) VALUES
(1, 'T202007210005', 1, 'ntap', 'K0001'),
(2, 'T202012020011', 1, 'Kerja Bagus', 'K0001'),
(3, 'T202101140017', 1, 'Keren, ac dingin lagi, bersih wangi seperti tanpa kaca', 'ajipe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `subject` varchar(35) NOT NULL,
  `pesan` text NOT NULL,
  `status` decimal(2,0) NOT NULL,
  `id_user` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `tanggal`, `subject`, `pesan`, `status`, `id_user`) VALUES
(1, '2016-12-04 09:24:28', 'WAJIB MENGISI FEEDBACK', 'FEEDBACK SANGATLAH PENTING GUNA MEMBANTU KAMI DALAM MEMBERIKAN PENILAIAN TERHADAP KINERJA TEKNISI, INI MENYANGKUT DENGAN KEPUASAN ANDA', '1', 'K0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `institusi`
--

CREATE TABLE `institusi` (
  `id_institusi` bigint(1) NOT NULL,
  `kode_institusi` varchar(10) NOT NULL,
  `nama_institusi` varchar(200) NOT NULL,
  `nama_penanggungjawab` varchar(100) DEFAULT NULL,
  `notelp_penanggungjawab` varchar(15) DEFAULT NULL,
  `email_penanggungjawab` varchar(100) DEFAULT NULL,
  `kode_kota_institusi` varchar(100) DEFAULT NULL,
  `kecamatan_institusi` varchar(100) DEFAULT NULL,
  `kelurahan_institusi` varchar(100) DEFAULT NULL,
  `alamat_institusi` text DEFAULT NULL,
  `website_institusi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `institusi`
--

INSERT INTO `institusi` (`id_institusi`, `kode_institusi`, `nama_institusi`, `nama_penanggungjawab`, `notelp_penanggungjawab`, `email_penanggungjawab`, `kode_kota_institusi`, `kecamatan_institusi`, `kelurahan_institusi`, `alamat_institusi`, `website_institusi`) VALUES
(1, '1', 'IZZI SERVICE', 'IMAM RAHMADI', NULL, NULL, NULL, NULL, NULL, NULL, 'izzi-soft.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `izzi_session`
--

CREATE TABLE `izzi_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(15) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `izzi_session`
--

INSERT INTO `izzi_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('uutout2r2ubk716thabdm7093u84crd9', '::1', 1610523797, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631303532333739373b69645f757365727c733a353a224b30303031223b6e616d617c733a353a224b30303031223b6c6576656c7c733a353a2241444d494e223b69645f6a61626174616e7c733a313a2231223b69645f646570747c733a313a2236223b),
('9ujb6ae1scgcrpkns3uaiqfhpkn6t3ub', '::1', 1610524125, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631303532343132353b),
('pphm8803o9p0s6u6sgtgnimost9udcqc', '::1', 1610524721, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631303532343732313b),
('m4gn3bp09u333b3bvdlaqpl25v06197g', '::1', 1610525023, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631303532353032333b),
('d2koilln591agbf4u9o15fvi0aptl67p', '::1', 1610526074, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631303532363037343b),
('qntbc22quf5nferp0n92kimrr1jsip74', '::1', 1610526076, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631303532363037343b),
('7uhf45p93rjkjqkn8otbar51atkn00pl', '::1', 1610596519, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631303539363531393b),
('9793ta1p16rv6nm9fjjr8mjjurs78qrn', '::1', 1610597630, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631303539373633303b),
('enkk6de5pqiuschrkq8hfo9i2pkg4glk', '::1', 1610598104, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631303539383130343b),
('u76dhcult9oi5n8hguv581v6535lbr3s', '::1', 1610598410, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631303539383431303b),
('9ths07tg57t27ct0khiir87bt68n7217', '::1', 1610598730, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631303539383733303b69645f757365727c733a31303a22616a697065726d616e61223b6e616d617c4e3b6c6576656c7c733a343a2255534552223b69645f6a61626174616e7c4e3b69645f646570747c4e3b6d73677c733a3235393a223c64697620636c6173733d27616c6572742062672d737563636573732720726f6c653d27616c657274273e0d0a090909202020203c6120687265663d27232720636c6173733d27636c6f73652720646174612d6469736d6973733d27616c6572742720617269612d6c6162656c3d27636c6f7365273e2674696d65733b3c2f613e0d0a090909202020203c73766720636c6173733d27676c797068207374726f6b656420656d7074792d6d657373616765273e3c75736520786c696e6b3a687265663d27237374726f6b65642d656d7074792d6d657373616765273e3c2f7573653e3c2f7376673e20446174612073617665642e0d0a090909202020203c2f6469763e223b5f5f63695f766172737c613a313a7b733a333a226d7367223b733a333a226e6577223b7d),
('sum8q1g04kgk6rp2bjm4u8ltvdtlfha3', '::1', 1610599160, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631303539393135393b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'STAFF'),
(2, 'SUPERVISOR'),
(3, 'MANAGER'),
(4, 'DIRECTOR'),
(5, 'PELANGGAN'),
(99, 'SUPER USER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` bigint(1) NOT NULL,
  `nik` varchar(75) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jk` enum('PRIA','WANITA') NOT NULL,
  `id_bagian_dept` int(11) DEFAULT NULL,
  `id_institusi` bigint(1) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nik`, `nama`, `email`, `alamat`, `jk`, `id_bagian_dept`, `id_institusi`, `id_jabatan`) VALUES
(1, 'K0001', 'K0001', 'syahrifala@gmail.com', 'DEPOK', '', 3, 6895, 1),
(3, 'K0003', 'K0003', 'test@gmail.com', 'JAKARTA', '', 5, 6895, 1),
(4, 'C0001', 'Khofifah', 'fifah.13.24@gmail.com', 'C0001', '', 5, 4597, 4),
(7, 'C0002', 'C0002', 'C0002@gmail.com', 'JAKARTA', '', 5, 4597, 1),
(2147483647, 'ajipermana', 'aji', 'ajisajalah1407@gmail.com', 'cimpaeun depok', 'PRIA', 1, 1, 5);

--
-- Trigger `karyawan`
--
DELIMITER $$
CREATE TRIGGER `DELETE KARYAWAN` BEFORE DELETE ON `karyawan` FOR EACH ROW INSERT INTO `log` (`id_log`, `keterangan`, `id_user`, `tanggal`) VALUES (NULL, 'DATA TELAH DIHAPUS' , OLD.nik, now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TAMBAH KARYAWAN` AFTER INSERT ON `karyawan` FOR EACH ROW INSERT INTO `log` (`id_log`, `keterangan`, `id_user`, `tanggal`) VALUES (NULL, 'DATA TELAH DITAMBAHKAN' , new.nik, now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UPDATE KARYAWAN` BEFORE UPDATE ON `karyawan` FOR EACH ROW INSERT INTO `log` (`id_log`, `keterangan`, `id_user`, `tanggal`) VALUES (NULL, 'DATA TELAH DIUPDATE' , OLD.nik, now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(35) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `icon`) VALUES
(11, 'AC', 'air-conditioner.png'),
(12, 'CCTV', 'cctv.png'),
(13, 'KOMPUTER', 'laptop.png'),
(14, 'FURNITURE', 'furniture.png'),
(16, 'RENOVASI RUMAH', 'settings.png'),
(20, 'BANGUN RUMAH', 'settings.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `nama_kondisi` varchar(30) NOT NULL,
  `waktu_respon` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `nama_kondisi`, `waktu_respon`) VALUES
(1, 'HIGH', '1'),
(2, 'MEDIUM', '2'),
(3, 'LOW', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_log` bigint(1) NOT NULL,
  `keterangan` text NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_log`, `keterangan`, `id_user`, `tanggal`) VALUES
(3, 'DATA TELAH DIHAPUS', 'K0004', '2020-07-21 09:38:20'),
(4, 'DATA USER TELAH DI HAPUS', 'K0004', '2020-07-21 09:38:20'),
(5, 'DATA TELAH DIHAPUS', 'K0005', '2020-07-21 09:38:39'),
(6, 'DATA USER TELAH DI HAPUS', 'K0005', '2020-07-21 09:38:39'),
(7, 'DATA TELAH DITAMBAHKAN', 'C0002', '2020-07-21 22:22:05'),
(8, 'DATA USER TELAH DI UPDATE', '19', '2020-07-24 14:39:11'),
(9, 'DATA TELAH DIUPDATE', 'C0001', '2020-07-24 14:39:23'),
(10, 'DATA TELAH DIUPDATE', 'C0001', '2020-07-24 14:57:19'),
(11, 'DATA USER TELAH DI HAPUS', 'Aji Perman', '2021-01-11 10:48:45'),
(12, 'DATA USER TELAH DI UPDATE', '24', '2021-01-11 10:53:02'),
(13, 'DATA USER TELAH DI HAPUS', 'ajipermana', '2021-01-14 11:21:58'),
(14, 'DATA USER TELAH DI HAPUS', 'permana', '2021-01-14 11:22:00'),
(15, 'DATA USER TELAH DI HAPUS', 'ajipermana', '2021-01-14 11:23:00'),
(16, 'DATA USER TELAH DI HAPUS', 'ajipermana', '2021-01-14 11:25:51'),
(17, 'DATA USER TELAH DI HAPUS', 'ajipermana', '2021-01-14 11:26:47'),
(18, 'DATA USER TELAH DI HAPUS', 'ajipermana', '2021-01-14 11:27:53'),
(19, 'DATA USER TELAH DI HAPUS', 'ajipermana', '2021-01-14 11:29:00'),
(20, 'DATA TELAH DITAMBAHKAN', 'ajipe', '2021-01-14 11:29:03'),
(21, 'DATA USER TELAH DI HAPUS', 'ajipermana', '2021-01-14 11:31:01'),
(22, 'DATA TELAH DIHAPUS', 'ajipe', '2021-01-14 11:31:05'),
(23, 'DATA TELAH DITAMBAHKAN', 'ajipe', '2021-01-14 11:31:25'),
(24, 'DATA TELAH DIUPDATE', 'ajipe', '2021-01-14 11:32:29'),
(25, 'DATA TELAH DIUPDATE', 'ajipe', '2021-01-14 11:33:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `session`
--

CREATE TABLE `session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(15) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id_sub_kategori` int(11) NOT NULL,
  `nama_sub_kategori` varchar(35) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_kategori`
--

INSERT INTO `sub_kategori` (`id_sub_kategori`, `nama_sub_kategori`, `id_kategori`) VALUES
(8, 'CUCI AC', 11),
(9, 'INSTALLASI', 12),
(10, 'SERVICE TV', 15),
(11, 'INTALLASI AC', 11),
(12, 'SERVICE MESIN CUCI', 15),
(13, 'SERVICE KOMPUTER', 13),
(14, 'SERVICE LAPTOP', 13),
(15, 'SERVICE AC', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `id_teknisi` varchar(5) NOT NULL,
  `nik` varchar(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `point` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`id_teknisi`, `nik`, `id_kategori`, `status`, `point`) VALUES
('T0001', 'K0003', 11, '', '2'),
('T0002', 'K0003', 12, '', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` varchar(13) NOT NULL,
  `tanggal` datetime NOT NULL,
  `tanggal_proses` datetime DEFAULT NULL,
  `tanggal_solved` datetime DEFAULT NULL,
  `reported` varchar(75) NOT NULL,
  `id_sub_kategori` int(11) NOT NULL,
  `problem_summary` varchar(50) NOT NULL,
  `problem_detail` text NOT NULL,
  `id_teknisi` varchar(5) NOT NULL,
  `status` int(11) NOT NULL,
  `id_kondisi` int(5) NOT NULL,
  `progress` decimal(10,0) NOT NULL,
  `userfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `tanggal`, `tanggal_proses`, `tanggal_solved`, `reported`, `id_sub_kategori`, `problem_summary`, `problem_detail`, `id_teknisi`, `status`, `id_kondisi`, `progress`, `userfile`) VALUES
('T202007210001', '2020-07-21 22:58:21', NULL, NULL, 'K0001', 3, 'TEST', 'KJHKJH', '', 2, 1, '0', 'K0001/'),
('T202007210002', '2020-07-21 23:01:45', NULL, NULL, 'K0001', 6, 'TEST', 'ASDASDASD', '', 2, 1, '0', 'K0001/'),
('T202007210003', '2020-07-21 23:03:30', '2020-07-22 21:43:13', NULL, 'K0001', 6, 'TEST', 'TEST', 'T0002', 4, 1, '50', 'K0001/bdc0c813610b3befd9efcac2b3190cb2.png'),
('T202007210004', '2020-07-21 23:12:22', NULL, NULL, 'SUPER', 6, 'S', 'S', 'T0002', 3, 2, '0', 'SUPERUSER/'),
('T202007210005', '2020-07-21 23:12:47', '2020-07-22 21:43:12', '2020-07-22 23:47:09', 'K0001', 5, 'SDASD', 'S', 'T0001', 6, 1, '100', 'K0001/'),
('T202007230006', '2020-07-23 02:34:55', NULL, NULL, 'K0001', 2, 'TEST', '', 'T0001', 5, 2, '0', ''),
('T202007240007', '2020-07-24 14:45:34', NULL, NULL, 'C0001', 6, 'TEST', 'TEST', '', 2, 1, '0', ''),
('T202007240008', '2020-07-24 14:49:10', NULL, NULL, 'C0001', 6, 'TOLONG DI CEK SYSTEMNYA', 'SDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASDSDASDASDASASDASDASDASD', '', 2, 1, '0', ''),
('T202007240009', '2020-07-24 14:51:03', NULL, NULL, 'C0001', 7, 'TEST', 'SDSFDFSDFSDFSDFSDFSDSDFFSDWTGEEWTGSDSETRFSDG', 'T0003', 3, 1, '0', ''),
('T202007240010', '2020-07-24 14:57:31', NULL, NULL, 'C0001', 6, 'ASDASDASDASDASD', 'ASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASDASDASDASDASDASDASDASASDSASDDASD', '', 2, 1, '0', ''),
('T202012020011', '2020-12-02 11:11:34', '2020-12-02 11:14:33', '2021-01-06 15:04:22', 'K0001', 8, 'AC SAYA KOTOR', 'TOLONG BERSIHKAN', 'T0001', 6, 1, '100', ''),
('T202012020012', '2020-12-02 14:42:10', NULL, NULL, 'C0001', 8, 'CUCI AC', 'AC SAYA SANGAT KOTOR, SUDAH 2 BULAN BELUM DI BERSIHIN', '', 2, 1, '0', ''),
('T202101060013', '2021-01-06 15:02:36', '2021-01-06 15:04:11', NULL, 'C0001', 8, 'AC MULAI TIDAK DINGIN', 'SDASDLASDJLAKSDJALKSDJ', 'T0001', 4, 1, '75', 'C0001/4d616ca69959eb229ab96085b435bae7.jpg'),
('T202101110014', '2021-01-11 10:50:18', NULL, NULL, 'AJIPE', 9, 'PASANG CCTV DI RUMAH SUPAYA AMAN', 'BELUM ADA CCTV DIRUMAH', 'T0002', 3, 2, '0', 'AJIPERMANA/187704106a650a71913fb18144a73ed8.jpg'),
('T202101140015', '2021-01-14 11:32:07', NULL, NULL, 'AJIPE', 9, 'PASANG CCTV DI RUMAH SUPAYA AMAN', 'TDASDASDA', '', 1, 1, '0', ''),
('T202101140016', '2021-01-14 11:33:58', NULL, NULL, 'AJIPE', 9, 'AC MULAI TIDAK DINGIN', 'TES', '', 1, 1, '0', ''),
('T202101140017', '2021-01-14 11:35:51', '2021-01-14 11:36:59', '2021-01-14 11:37:42', 'AJIPERMANA', 8, 'AC MULAI TIDAK DINGIN', 'OK', 'T0001', 6, 1, '100', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tracking`
--

CREATE TABLE `tracking` (
  `id_tracking` int(11) NOT NULL,
  `id_ticket` varchar(13) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `attachment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tracking`
--

INSERT INTO `tracking` (`id_tracking`, `id_ticket`, `tanggal`, `status`, `deskripsi`, `id_user`, `attachment`) VALUES
(1, 'T202007210001', '2020-07-21 22:58:21', 'Created Ticket', '', 'K0001', 'K0001/'),
(2, 'T202007210002', '2020-07-21 23:01:45', 'Created Ticket', '', 'K0001', 'K0001/'),
(3, 'T202007210003', '2020-07-21 23:03:30', 'Created Ticket', '', 'K0001', 'K0001/bdc0c813610b3befd9efcac2b3190cb2.png'),
(4, 'T202007210004', '2020-07-21 23:12:22', 'Created Ticket', '', 'SUPER', 'SUPERUSER/'),
(5, 'T202007210005', '2020-07-21 23:12:47', 'Created Ticket', '', 'K0001', 'K0001/'),
(6, 'T202007210001', '2020-07-21 23:50:06', 'Ticket disetujui', '', 'K0001', NULL),
(7, 'T202007210005', '2020-07-22 00:26:50', 'Ticket disetujui', '', 'K0001', NULL),
(8, 'T202007210002', '2020-07-22 00:26:51', 'Ticket tidak disetujui', '', 'K0001', NULL),
(9, 'T202007210002', '2020-07-22 00:26:52', 'Ticket dikembalikan ke posisi belum di setujui', '', 'K0001', NULL),
(10, 'T202007210002', '2020-07-22 00:26:53', 'Ticket disetujui', '', 'K0001', NULL),
(11, 'T202007210003', '2020-07-22 00:26:54', 'Ticket disetujui', '', 'K0001', NULL),
(12, 'T202007210004', '2020-07-22 00:26:55', 'Ticket disetujui', '', 'K0001', NULL),
(13, 'T202007210005', '2020-07-22 00:27:01', 'Pemilihan Teknisi', 'TICKET DIBERIKAN KEPADA TEKNISI', 'K0001', NULL),
(14, 'T202007210003', '2020-07-22 00:27:53', 'Pemilihan Teknisi', 'TICKET DIBERIKAN KEPADA TEKNISI', 'K0001', NULL),
(15, 'T202007210005', '2020-07-22 21:43:12', 'Diproses oleh teknisi', '', 'K0003', NULL),
(16, 'T202007210003', '2020-07-22 21:43:13', 'Diproses oleh teknisi', '', 'K0003', NULL),
(17, 'T202007210005', '2020-07-22 23:37:54', 'Up Progress To 50 %', 'TEST', 'K0003', ''),
(18, 'T202007210005', '2020-07-22 23:42:38', 'Up Progress To 50 %', '75', 'K0003', 'K0003/f3a2d26637108a87e5e76ee2a0dffd9c.png'),
(19, 'T202007210005', '2020-07-22 23:42:55', 'Up Progress To 50 %', '75', 'K0003', 'K0003/705a78ceac931876c6bdf7f39443b1bc.png'),
(20, 'T202007210005', '2020-07-22 23:46:31', 'Up Progress To 50 %', 'DSSDFFSDFSDFDS', 'K0003', ''),
(21, 'T202007210005', '2020-07-22 23:46:43', 'Up Progress To 75 %', '75', 'K0003', ''),
(22, 'T202007210005', '2020-07-22 23:47:09', 'Up Progress To 100 %', '100% SELESAI', 'K0003', 'K0003/a7b3b591799360d241bd68e8cc6d5ac3.png'),
(23, 'T202007210003', '2020-07-22 23:52:38', 'Up Progress To 50 %', 'TEST', 'K0003', ''),
(24, 'T202007230006', '2020-07-23 02:34:55', 'Created Ticket', '', 'K0001', ''),
(25, 'T202007230006', '2020-07-23 22:44:37', 'Ticket disetujui', '', 'K0001', NULL),
(26, 'T202007230006', '2020-07-23 22:44:44', 'Pemilihan Teknisi', 'TICKET DIBERIKAN KEPADA TEKNISI', 'K0001', NULL),
(27, 'T202007240007', '2020-07-24 14:45:34', 'Created Ticket', '', 'C0001', ''),
(28, 'T202007240008', '2020-07-24 14:49:10', 'Created Ticket', '', 'C0001', ''),
(29, 'T202007240009', '2020-07-24 14:51:03', 'Created Ticket', '', 'C0001', ''),
(30, 'T202007240010', '2020-07-24 14:57:31', 'Created Ticket', '', 'C0001', ''),
(31, 'T202007240009', '2020-11-27 14:21:20', 'Ticket disetujui', '', 'K0001', NULL),
(32, 'T202007240009', '2020-12-02 10:24:03', 'Pemilihan Teknisi', 'TICKET DIBERIKAN KEPADA TEKNISI', 'K0001', NULL),
(33, 'T202007210004', '2020-12-02 10:24:14', 'Pemilihan Teknisi', 'TICKET DIBERIKAN KEPADA TEKNISI', 'K0001', NULL),
(34, 'T202012020011', '2020-12-02 11:11:34', 'Created Ticket', '', 'K0001', ''),
(35, 'T202012020011', '2020-12-02 11:12:40', 'Ticket disetujui', '', 'K0001', NULL),
(36, 'T202012020011', '2020-12-02 11:14:13', 'Pemilihan Teknisi', 'TICKET DIBERIKAN KEPADA TEKNISI', 'K0001', NULL),
(37, 'T202007230006', '2020-12-02 11:14:31', 'Pending oleh teknisi', '', 'K0003', NULL),
(38, 'T202012020011', '2020-12-02 11:14:33', 'Diproses oleh teknisi', '', 'K0003', NULL),
(39, 'T202012020011', '2020-12-02 11:14:50', 'Up Progress To 50 %', 'KAMI KAN MELAKUKAN SURVEI, MOHON DITUNGGU', 'K0003', ''),
(40, 'T202012020012', '2020-12-02 14:42:10', 'Created Ticket', '', 'C0001', ''),
(41, 'T202101060013', '2021-01-06 15:02:36', 'Created Ticket', '', 'C0001', 'C0001/4d616ca69959eb229ab96085b435bae7.jpg'),
(42, 'T202101060013', '2021-01-06 15:03:37', 'Ticket disetujui', '', 'K0001', NULL),
(43, 'T202101060013', '2021-01-06 15:03:54', 'Pemilihan Teknisi', 'TICKET DIBERIKAN KEPADA TEKNISI', 'K0001', NULL),
(44, 'T202101060013', '2021-01-06 15:04:11', 'Diproses oleh teknisi', '', 'K0003', NULL),
(45, 'T202012020011', '2021-01-06 15:04:22', 'Up Progress To 100 %', 'SELESAI', 'K0003', ''),
(46, 'T202101060013', '2021-01-06 15:04:40', 'Up Progress To 75 %', 'SEDANG DI CUCI', 'K0003', ''),
(47, 'T202007240007', '2021-01-06 15:07:34', 'Ticket disetujui', '', 'K0001', NULL),
(48, 'T202007240008', '2021-01-06 15:07:35', 'Ticket disetujui', '', 'K0001', NULL),
(49, 'T202007240010', '2021-01-06 15:07:36', 'Ticket disetujui', '', 'K0001', NULL),
(50, 'T202012020012', '2021-01-06 15:07:37', 'Ticket disetujui', '', 'K0001', NULL),
(51, 'T202101110014', '2021-01-11 10:50:18', 'Created Ticket', '', 'AJIPE', 'AJIPERMANA/187704106a650a71913fb18144a73ed8.jpg'),
(52, 'T202101110014', '2021-01-11 10:50:56', 'Ticket disetujui', '', 'K0001', NULL),
(53, 'T202101110014', '2021-01-11 10:51:44', 'Pemilihan Teknisi', 'TICKET DIBERIKAN KEPADA TEKNISI', 'K0001', NULL),
(54, 'T202101140015', '2021-01-14 11:32:07', 'Created Ticket', '', 'AJIPE', ''),
(55, 'T202101140016', '2021-01-14 11:33:58', 'Created Ticket', '', 'AJIPE', ''),
(56, 'T202101140017', '2021-01-14 11:35:51', 'Created Ticket', '', 'AJIPE', ''),
(57, 'T202101140017', '2021-01-14 11:36:27', 'Ticket disetujui', '', 'K0001', NULL),
(58, 'T202101140017', '2021-01-14 11:36:37', 'Pemilihan Teknisi', 'TICKET DIBERIKAN KEPADA TEKNISI', 'K0001', NULL),
(59, 'T202101140017', '2021-01-14 11:36:59', 'Diproses oleh teknisi', '', 'K0003', NULL),
(60, 'T202101140017', '2021-01-14 11:37:22', 'Up Progress To 75 %', 'SUDAH PROSES PENCUCIAN', 'K0003', 'K0003/93707270e2941e33f447bee045739611.jpg'),
(61, 'T202101140017', '2021-01-14 11:37:42', 'Up Progress To 100 %', 'AC SUDAH SELESAI DI CUCI', 'K0003', 'K0003/d978a75536cf5249732311b0940e519a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `password` varchar(75) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `no_telp`, `password`, `level`) VALUES
(1, 'SUPERUSER', 'SUPERUSER', '', '19c76bd2e8b5ee2e14ea14c113ce4751', 'SUPERUSER'),
(16, 'K0001', 'syahrifala@gmail.com', '', 'ca6499a8a27bfaa7ed5116e80fd578e4', 'ADMIN'),
(18, 'K0003', 'test@gmail.com', '', '5cf7968a11ef2d279597230cf8a5fbaf', 'TEKNISI'),
(19, 'C0001', 'fifah.13.24@gmail.com', '', 'fa70449406c9203180e3491ab99a973e', 'USER'),
(22, 'C0002', 'C0002@gmail.com', '', '95397663b44acbd8b59c80536be5a18f', 'USER'),
(2147483647, 'ajipermana', 'ajisajalah1407@gmail.com', '009990', '4971b09dd28a1e06a390547ce99eda73', 'USER');

--
-- Trigger `user`
--
DELIMITER $$
CREATE TRIGGER `DELETE USER` BEFORE DELETE ON `user` FOR EACH ROW INSERT INTO `log` (`id_log`, `keterangan`, `id_user`, `tanggal`) VALUES (NULL, 'DATA USER TELAH DI HAPUS', OLD.username, now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UPDATE USER` AFTER UPDATE ON `user` FOR EACH ROW INSERT INTO `log` (`id_log`, `keterangan`, `id_user`, `tanggal`) VALUES (NULL, 'DATA USER TELAH DI UPDATE', OLD.id_user, now())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bagian_departemen`
--
ALTER TABLE `bagian_departemen`
  ADD PRIMARY KEY (`id_bagian_dept`);

--
-- Indeks untuk tabel `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indeks untuk tabel `history_feedback`
--
ALTER TABLE `history_feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `institusi`
--
ALTER TABLE `institusi`
  ADD PRIMARY KEY (`id_institusi`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id_sub_kategori`);

--
-- Indeks untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indeks untuk tabel `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indeks untuk tabel `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`id_tracking`);

--
-- Indeks untuk tabel `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bagian_departemen`
--
ALTER TABLE `bagian_departemen`
  MODIFY `id_bagian_dept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_dept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `history_feedback`
--
ALTER TABLE `history_feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `institusi`
--
ALTER TABLE `institusi`
  MODIFY `id_institusi` bigint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` bigint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20210114113126;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id_log` bigint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id_sub_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id_tracking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
