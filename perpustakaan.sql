-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 09:55 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'adminperpus', '3ce3bfc66f9abcc2a970a082a298bf74');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `no_anggota` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`no_anggota`, `nama`, `pekerjaan`, `alamat`, `no_hp`, `tgl_lahir`) VALUES
(1111, 'Peminjam 1', 'swasta', 'ubud', '0881111', '2019-06-10'),
(1112, 'Peminjam 2', 'buruh', 'peliatan', '081234', '2000-01-01'),
(1117, 'gunayasa', 'Mahasiswa', 'balit', '2147483647', '2019-12-19'),
(14045, 'Nanda', 'Mahasiswa', 'egypt', '111', '1998-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_tamu` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pengunjung` varchar(50) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `pesan` varchar(50) NOT NULL,
  `minat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_tamu`, `tanggal`, `nama_pengunjung`, `alamat`, `pekerjaan`, `no_telp`, `pesan`, `minat`) VALUES
(1, '2019-10-08', 'nemo', 'laut', 'ikan', '011', 'pesan', 'minat'),
(2, '2019-10-08', 'nemo', 'laut', 'ikan', '011', 'pesan', 'minat'),
(3, '2019-12-02', 'Nanda Mahendra', 'Mengwi', 'Mahasiswa', '08123', 'Perpustakaanya Lengkap', 'Fiksi Ilmiah'),
(4, '2019-12-02', 'Adi Arta', 'Tabanan', 'Mahasiswa', '08123', 'Perpustakaanya Lengkap', 'Fiksi Ilmiah'),
(5, '2019-12-02', 'Adi Arta', 'Tabanan', 'Mahasiswa', '08123', 'Banyak bukunya', 'Novel'),
(6, '2019-12-02', 'Gunayasa', 'Ubud', 'Mahasiswa', '08123', '', 'Buku Religi'),
(7, '2019-12-02', 'Nanda Mahendra', 'Mengwi', 'Mahasiswa', '08123', 'Perpustakaanya Lengkap', 'Fiksi Ilmiah'),
(8, '2019-12-08', 'Adi', 'ubud', 'Pelajar', '08123', 'Perpustakaanya Lengkap', 'Fiksi Ilmiah');

-- --------------------------------------------------------

--
-- Table structure for table `pustaka`
--

CREATE TABLE `pustaka` (
  `isbn` varchar(13) NOT NULL,
  `no_klasifikasi` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `tahun_pendaftaran` int(4) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `asal` varchar(25) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pustaka`
--

INSERT INTO `pustaka` (`isbn`, `no_klasifikasi`, `judul`, `pengarang`, `tahun_terbit`, `tahun_pendaftaran`, `keterangan`, `asal`, `jumlah`) VALUES
('9786021576069', '297.01 Lis k', 'Ayo Menulis Angka', 'LISDY RAHAYU', 2013, 2017, '', 'Bantuan Jasaraharja', 2),
('9786022910213', 'R 423 Tim k2', 'KAMUS SINONIM BAHASA INGGRIS', 'Tim B first', 2014, 2016, '', 'Bantuan Jasaraharja', 2),
('9786023181926', '44', 'Manajemen Bisnis', 'Ais Zakiyudin', 2016, 2017, '', 'Pembelian', 5),
('9786029473629', '153.9 Anu m2', 'MENGAJAR DENGAN HATI', 'An. Ubaedy', 2014, 2016, '', 'Bantuan', 2),
('9789796908943', '813 Pra k', 'KORUPSI', 'Premoedya Ananta Toer', 2011, 2017, '', 'Bantuan Jasaraharja', 4);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` int(11) NOT NULL,
  `no_anggota` varchar(25) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_dikembalikan` date NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `no_anggota`, `isbn`, `tgl_pinjam`, `tgl_kembali`, `tgl_dikembalikan`, `status`) VALUES
(7, '1111', '9786022910213', '2019-09-10', '2019-09-17', '0000-00-00', 'Pinjam'),
(8, '1111', '9786022910213', '2019-09-10', '2019-09-09', '2019-09-23', 'Kembali'),
(9, '1111', '9786022910213', '2019-09-11', '2019-09-10', '2019-09-13', 'Kembali'),
(10, '1111', '9786022910213', '2019-09-13', '2019-09-20', '2019-09-13', 'Kembali'),
(11, '1111', '9786022910213', '2019-10-07', '2019-10-14', '2019-10-07', 'Kembali'),
(12, '1112', '9789796908943', '2019-10-11', '2019-10-18', '0000-00-00', 'Pinjam'),
(13, '1112', '9789796908943', '2019-10-11', '2019-10-18', '0000-00-00', 'Pinjam'),
(14, '1112', '9789796908943', '2019-10-11', '2019-10-18', '2019-10-11', 'Kembali'),
(15, '1112', '9789796908943', '2019-10-11', '2019-10-18', '2019-10-11', 'Kembali'),
(16, '1112', '9786022910213', '2019-10-11', '2019-10-18', '0000-00-00', 'Pinjam'),
(17, '1111', '9786022910213', '2019-10-28', '2019-11-04', '2019-10-28', 'Kembali'),
(18, '14045', '9786022910213', '2019-12-02', '2019-12-09', '2019-12-04', 'Kembali'),
(19, '14045', '9786022910213', '2019-12-04', '2019-12-11', '0000-00-00', 'Pinjam'),
(20, '14045', '9789796908943', '2019-12-04', '2019-12-11', '0000-00-00', 'Pinjam'),
(21, '14045', '9786022910213', '2019-12-20', '2019-12-27', '0000-00-00', 'Pinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`no_anggota`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `pustaka`
--
ALTER TABLE `pustaka`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
