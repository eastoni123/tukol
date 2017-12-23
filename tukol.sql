-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Des 2017 pada 03.32
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tukol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_tukang` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `lokasi_kerja` varchar(100) NOT NULL,
  `jumlah_tukang` varchar(100) NOT NULL,
  `tgl_kerja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto_profil` varchar(100) NOT NULL,
  `jkel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `email`, `password`, `no_telp`, `alamat`, `foto_profil`, `jkel`) VALUES
(1, 'Nadia Anggraini', 'nadia@gmail.com', 'nadia', '081332158103', 'Kerajan tengah, Sengonagung, Purwosari', 'Nadia.jpg', 'P'),
(4, 'Muhammad Eastoni', 'ttoonnii321@gmail.com', 'eastoni', '085733918330', 'Singosari, Malang', 'IMG-20171122-WA0032.jpg', 'L'),
(6, 'Siti Musdalifa', 'lifa@gmail.com', 'lifa', '085234234234', 'gaero', 'lifa.JPG', 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tukang`
--

CREATE TABLE `tukang` (
  `id_tukang` int(11) NOT NULL,
  `nama_tukang` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `nilai_tukang` varchar(100) NOT NULL,
  `foto_tukang` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tukang`
--

INSERT INTO `tukang` (`id_tukang`, `nama_tukang`, `provinsi`, `kota`, `kecamatan`, `status`, `nilai_tukang`, `foto_tukang`, `no_telp`, `password`, `email`) VALUES
(1, 'The Tukang', 'Jawa Timur', 'Kab. Malang', 'Lawang', 'Free', '3', 'DSC_0050.JPG', '085123123123', 'thetukang', 'thetukang@gmail.com'),
(2, 'The Tukang', 'Jawa Timur', 'Kab. Malang', 'Lawang', 'Free', '3', 'DSC_0050.JPG', '085123123123', 'thetukang', 'thetukang@gmail.com'),
(3, 'The Tukang', 'Jawa Timur', 'Kab. Malang', 'Lawang', 'Free', '3', 'DSC_0050.JPG', '085123123123', 'thetukang', 'thetukang@gmail.com'),
(4, 'The Tukang', 'Jawa Timur', 'Kab. Malang', 'Lawang', 'Free', '3', 'DSC_0050.JPG', '085123123123', 'thetukang', 'thetukang@gmail.com'),
(5, 'The Tukang', 'Jawa Timur', 'Kab. Malang', 'Lawang', 'Free', '3', 'DSC_0050.JPG', '085123123123', 'thetukang', 'thetukang@gmail.com'),
(6, 'The Tukang', 'Jawa Timur', 'Kab. Malang', 'Lawang', 'Free', '3', 'DSC_0050.JPG', '085123123123', 'thetukang', 'thetukang@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tukang`
--
ALTER TABLE `tukang`
  ADD PRIMARY KEY (`id_tukang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tukang`
--
ALTER TABLE `tukang`
  MODIFY `id_tukang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
