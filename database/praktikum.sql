-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 03:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori_barang` varchar(100) NOT NULL,
  `deskripsi_barang` text DEFAULT NULL,
  `harga_beli` float DEFAULT NULL,
  `harga_jual` float DEFAULT NULL,
  `stok_barang` int(11) DEFAULT NULL,
  `supplier_barang` varchar(100) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `kategori_barang`, `deskripsi_barang`, `harga_beli`, `harga_jual`, `stok_barang`, `supplier_barang`, `tanggal_masuk`) VALUES
(1, 'BRG001', 'Laptop Asus', 'Elektronik', 'Laptop dengan spesifikasi tinggi', 5000000, 6000000, 10, 'PT. Sumber Makmur', '2022-01-01'),
(2, 'BRG002', 'Smartphone Samsung', 'Elektronik', 'Smartphone dengan kamera terbaik', 3000000, 4000000, 15, 'PT. Ponsel Sejahtera', '2022-02-15'),
(3, 'BRG003', 'Kulkas LG', 'Elektronik', 'Kulkas hemat energi', 2000000, 2500000, 8, 'PT. Elektronik Mantap', '2022-03-10'),
(4, 'BRG004', 'TV Sony', 'Elektronik', 'Televisi dengan kualitas gambar jernih', 2500000, 3000000, 12, 'PT. Sony Indonesia', '2022-04-20'),
(5, 'BRG005', 'Mesin Cuci Sharp', 'Elektronik', 'Mesin cuci dengan kapasitas besar', 1500000, 2000000, 20, 'PT. Bersih Selalu', '2022-05-25'),
(6, 'BRG006', 'Printer Epson', 'Elektronik', 'Printer dengan kualitas cetak tinggi', 1000000, 1500000, 25, 'PT. Print Jaya', '2022-06-30'),
(7, 'BRG007', 'AC Panasonic', 'Elektronik', 'AC dengan pendinginan cepat', 3500000, 4500000, 5, 'PT. Dingin Sejahtera', '2022-07-15'),
(8, 'BRG008', 'Headphone JBL', 'Elektronik', 'Headphone dengan suara bass mantap', 500000, 800000, 50, 'PT. Audio Nusantara', '2022-08-10'),
(9, 'BRG009', 'Microwave Samsung', 'Elektronik', 'Microwave dengan fitur canggih', 1200000, 1700000, 18, 'PT. Dapur Modern', '2022-09-05'),
(10, 'BRG010', 'Kamera Canon', 'Elektronik', 'Kamera dengan resolusi tinggi', 4500000, 5500000, 7, 'PT. Foto Digital', '2022-10-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
