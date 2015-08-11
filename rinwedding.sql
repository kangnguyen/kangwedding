-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2014 at 09:51 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rinwedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethd`
--

CREATE TABLE IF NOT EXISTS `chitiethd` (
  `MaHD` varchar(5) NOT NULL,
  `MaSP` varchar(5) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethd`
--

INSERT INTO `chitiethd` (`MaHD`, `MaSP`, `SoLuong`, `ThanhTien`) VALUES
('HD001', 'AO001', 2, 24000000),
('HD001', 'AO002', 2, 22000000),
('HD001', 'AO003', 1, 11000000),
('HD002', 'AO002', 2, 22000000),
('HD002', 'AO004', 1, 7000000),
('HD002', 'AO005', 1, 7000000),
('HD003', 'AO001', 1, 12000000),
('HD003', 'AO002', 2, 22000000),
('HD003', 'AO003', 1, 11000000);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `MaHD` varchar(5) NOT NULL,
  `TenTK` varchar(50) NOT NULL,
  `NgayMua` date NOT NULL,
  `TongTien` int(11) NOT NULL,
  `TinhTrang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `TenTK`, `NgayMua`, `TongTien`, `TinhTrang`) VALUES
('HD001', 'AD001', '2014-12-14', 57000000, 'ÄÃ£ Thanh ToÃ¡n'),
('HD002', 'mimitran', '2014-12-14', 36000000, 'ÄÃ£ Nháº­n HÃ ng'),
('HD003', 'admin', '2014-12-14', 45000000, 'ÄÃ£ Thanh ToÃ¡n');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `MaSP` varchar(5) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `DonGia` varchar(50) NOT NULL,
  `Img` varchar(100) NOT NULL,
  `MoTa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `DonGia`, `Img`, `MoTa`) VALUES
('AO001', 'THIÃŠN THáº¦N TUYáº¾T', '12000000', 'aocuoi1.jpg', 'VÃ¡y cÆ°á»›i váº£i má»m xuáº¥t sá»© tá»« HÃ n lÃ m váº» Ä‘áº¹p cá»§a báº¡n trá»Ÿ nÃªn ráº¡ng ngá»i'),
('AO002', 'VÃY DÃƒ NGOáº I', '11000000', 'aocuoi2.JPG', 'VÃ¡y cÆ°á»›i váº£i má»m xuáº¥t sá»© tá»« HÃ n lÃ m váº» Ä‘áº¹p cá»§a báº¡n trá»Ÿ nÃªn ráº¡ng ngá»i'),
('AO003', 'VÃY CAO Cáº¤P', '11000000', 'aocuoi3.jpg', 'VÃ¡y cÆ°á»›i váº£i má»m xuáº¥t sá»© tá»« HÃ n lÃ m váº» Ä‘áº¹p cá»§a báº¡n trá»Ÿ nÃªn ráº¡ng ngá»i'),
('AO004', 'VÃY ÄUÃ”I NGá»°A', '7000000', 'aocuoi4.jpg', 'VÃ¡y cÆ°á»›i váº£i má»m xuáº¥t sá»© tá»« HÃ n lÃ m váº» Ä‘áº¹p cá»§a báº¡n trá»Ÿ nÃªn ráº¡ng ngá»i'),
('AO005', 'ÃO CÆ¯á»šI VÃY REN', '7000000', 'aocuoi5.jpg', 'VÃ¡y cÆ°á»›i váº£i má»m xuáº¥t sá»© tá»« HÃ n lÃ m váº» Ä‘áº¹p cá»§a báº¡n trá»Ÿ nÃªn ráº¡ng ngá»i'),
('AO006', 'ÃO DÃ€I DUYÃŠN DÃNG', '7000000', 'aocuoi6.jpg', 'VÃ¡y cÆ°á»›i váº£i má»m xuáº¥t sá»© tá»« HÃ n lÃ m váº» Ä‘áº¹p cá»§a báº¡n trá»Ÿ nÃªn ráº¡ng ngá»i'),
('AO007', 'Äáº¦M HOA LÆ¯á»šI', '5000000', 'aocuoi7.jpg', 'VÃ¡y cÆ°á»›i váº£i má»m xuáº¥t sá»© tá»« HÃ n lÃ m váº» Ä‘áº¹p cá»§a báº¡n trá»Ÿ nÃªn ráº¡ng ngá»i'),
('AO008', 'Äáº¦M NÆ  PHáº¢I', '12000000', 'aocuoi8.jpg', 'VÃ¡y cÆ°á»›i váº£i má»m xuáº¥t sá»© tá»« HÃ n lÃ m váº» Ä‘áº¹p cá»§a báº¡n trá»Ÿ nÃªn ráº¡ng ngá»i'),
('AO009', 'Äáº¦M XÃ’E Ná»® HOÃ€NG', '9000000', 'aocuoi9.jpg', 'VÃ¡y cÆ°á»›i váº£i má»m xuáº¥t sá»© tá»« HÃ n lÃ m váº» Ä‘áº¹p cá»§a báº¡n trá»Ÿ nÃªn ráº¡ng ngá»i');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `TenTK` varchar(50) NOT NULL,
  `PassTK` varchar(50) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `GioiTinh` int(11) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SoDT` varchar(20) NOT NULL,
  `VaiTro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`TenTK`, `PassTK`, `HoTen`, `GioiTinh`, `DiaChi`, `SoDT`, `VaiTro`) VALUES
('AD001', '123456', 'Anh Kang', 0, 'HÃ  Ná»™i', '0935890427', 1),
('admin', '123456', 'TÆ°á»ng Vy', 0, 'ÄÃ  Náºµng', '0935890427', 1),
('kangnguyen', 'anhkang', 'Kang Äáº¹p Trai', 1, 'ÄÃ  náºµng', '0935890427', 0),
('mimitran', 'mimi', 'Mimi', 0, 'ÄÃ  náºµng', '0935890427', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethd`
--
ALTER TABLE `chitiethd`
 ADD PRIMARY KEY (`MaHD`,`MaSP`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
 ADD PRIMARY KEY (`MaHD`), ADD KEY `MaTK` (`TenTK`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
 ADD PRIMARY KEY (`MaSP`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
 ADD PRIMARY KEY (`TenTK`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
