-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2020 pada 20.56
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE IF NOT EXISTS `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `telp` varchar(13) NOT NULL,
  PRIMARY KEY (`nik`),
  UNIQUE KEY `nik_2` (`nik`),
  UNIQUE KEY `username` (`username`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('1212121212', 'Rama Sukpa', 'ramas', 'aaa', '0812345678'),
('1231446469', 'Dani Chandra', 'dchands', 'dani123', '0810075678'),
('4478657876', 'Assa', 'assa', 'assa123', '34788774'),
('679', 'fa', 'hvhjv', 'vhjvhj', '5797');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
  `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `tkp` varchar(225) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `tanggapan` text NOT NULL,
  `status` enum('Belum dikonfirmasi','Proses','Selesai') NOT NULL,
  PRIMARY KEY (`id_pengaduan`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `tkp`, `isi_laporan`, `foto`, `tanggapan`, `status`) VALUES
(43, '2021-03-20', '1212121212', 'malioboro', 'terjadi kecopetan di depan mall malioboro', 'gpamungkas.jpg', '<p>okee makasehhh</p>', 'Selesai'),
(58, '2020-02-04', '1212121212', 'sasa', 'assaa', 'as', '<p>shaapp</p>', 'Belum dikonfirmasi'),
(62, '2020-04-28', '1212121212', 'gggg', 'gggg', 'patahan.jpg', '<p>yoiii</p>', 'Proses'),
(68, '2020-04-28', '1212121212', 'jl sosro', 'ada gerombolan pace mabok', 'fauna.jpg', '<p>digusah aja itu mas</p>', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(225) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  PRIMARY KEY (`id_petugas`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'Barno Edi', 'admin', 'admin', '087537163612', 'admin'),
(2, 'klejo', 'klejo123', '123', '087537163612', 'admin'),
(6, 'Edwin Noor', 'edwin123', '123', '087537163612', 'petugas'),
(8, 'Zulfikar', 'zulfikar', '123', '0968678986', 'petugas');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
