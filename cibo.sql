-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 08:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cibo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admini`
--

CREATE TABLE `admini` (
  `emri` varchar(20) NOT NULL,
  `mbiemri` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fjalekalimi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admini`
--

INSERT INTO `admini` (`emri`, `mbiemri`, `email`, `fjalekalimi`) VALUES
('enri', 'kapaj', 'enrikapaj@yahoo.com', 'web2020');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `produkti` varchar(50) NOT NULL,
  `kategoria` varchar(30) NOT NULL,
  `dita` varchar(20) DEFAULT NULL,
  `pershkrimi` varchar(200) DEFAULT NULL,
  `cmimi` varchar(20) DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  `lloji` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `produkti`, `kategoria`, `dita`, `pershkrimi`, `cmimi`, `img`, `lloji`) VALUES
(14, 'Rizoto me perime', 'kryesore', 'Monday', 'Rizoto  e shendetshme me perime te zjera ', '200', 'hene1.jpg', 'produk'),
(15, 'Supe krem pule ', 'kryesore', 'Monday', 'Supe me pana dhe fileto pule', '150', 'hene2.jpg', 'produk'),
(16, 'Spec i mbushur', 'kryesore', 'Monday', 'Spec i kuq i mbushur me oriz dhe kima', '250', 'hene3.jpg', 'produk'),
(18, 'Zupë', 'embelsira', 'Monday', 'zupë', '100 ', 'e1.jpg', 'produk'),
(19, 'Trilece', 'embelsira', 'Monday', 'Trilece', '150', 'e2.jpg', 'produk'),
(20, 'Panakota', 'embelsira', 'Monday', 'Panakota', '150', 'e3.jpg', 'produk'),
(21, 'Syltiash', 'embelsira', 'Monday', 'Syltiash', '100', 'e4.jpg', 'produk'),
(22, 'Ekspres', 'pije', 'Monday', 'Kafe ekspres', '70', 'p1.jpg', 'produk'),
(23, 'Kapucino', 'pije', 'Monday', 'Kapucino', '150', 'p2.jpg', 'produk'),
(24, 'Coca Cola', 'pije', 'Monday', 'Coca Cola', '120', 'p3.jpg', 'produk'),
(25, 'Jagermaister', 'pije', 'Monday', 'Jagermaister', '300', 'p4.jpg', 'produk'),
(26, 'Pasta Furre', 'kryesore', 'Tuesday', 'Pasta furre', '200', 'marte1.jpg', 'produk'),
(28, 'Salcice', 'mengjesi', 'Tuesday', 'Salcice', '50', 'marte3.jpg', 'produk'),
(29, 'Djath', 'mengjesi', 'Tuesday', 'Djath i bardhe', '50', 'marte4.jpg', 'produk'),
(30, 'Krohasan', 'mengjesi', 'Tuesday', 'Krohasan', '100', 'marte5.jpg', 'produk'),
(31, 'Pica Alla Krema', 'kryesore', 'Tuesday', 'Pica Alla Krema', '250', 'marte6.jpg', 'produk'),
(32, 'Supe Krem Perime', 'kryesore', 'Tuesday', 'Supe krem perime ', '150', 'marte7.jpg', 'produk'),
(33, 'Sallate greke', 'kryesore', 'Tuesday', 'Sallate me ullinj djath dhe domate', '120', 'marte8.jpg', 'produk'),
(34, 'Soufle', 'embelsira', 'Tuesday', 'Soufle', '200', 'marte9.jpg', 'produk'),
(35, 'Krem Brule', 'embelsira', 'Tuesday', 'Krem Brule', '200', 'marte10.jpg', 'produk'),
(36, 'Cheseecake', 'embelsira', 'Tuesday', 'Cheseecake', '200', 'marte11.jpg', 'produk'),
(37, 'Portokalopita', 'embelsira', 'Tuesday', 'portokalopita', '150', 'marte12.jpg', 'produk'),
(38, 'Ekspres', 'pije', 'Tuesday', 'Ekspres', '70', 'p1.jpg', 'produk'),
(39, 'Kapucino', 'pije', 'Tuesday', 'Kapucino', '150 ', 'p2.jpg', 'produk'),
(40, 'Coca Cola', 'pije', 'Tuesday', 'Coca Cola', '120', 'p3.jpg', 'produk'),
(41, 'Jagermaister', 'pije', 'Tuesday', 'Jagermaister', '300', 'p4.jpg', 'produk'),
(42, 'Imam Bajelldi', 'kryesore', 'Wednesday', 'Imam Bajelldi', '200', 'merrkur1.jpg', 'produk'),
(43, 'Eskallop me paprika', 'kryesore', 'Wednesday', 'Eskallop me paprika', '300', 'merrkur2.jpg', 'produk'),
(44, 'Tasqebap', 'kryesore', 'Wednesday', 'Tasqbap me mish vici', '200', 'merrkur3.jpg', 'produk'),
(45, 'Supe Kerpudhe', 'kryesore', 'Wednesday', 'Supe me kerpudha dhe pana', '150', 'merrkur4.jpg', 'produk'),
(46, 'Omlet', 'mengjesi', 'Wednesday', 'Omlet me salcice', '220', 'mengjes2.jpg', 'produk'),
(47, 'Veze sy', 'mengjesi', 'Wednesday', 'Veze sy', '50', 'marte2.jpg', 'produk'),
(48, 'Qumesht', 'mengjesi', 'Wednesday', 'Qumesht + biskota', '100', 'merrkur5.jpg', 'produk'),
(49, 'Krohasan', 'mengjesi', 'Wednesday', 'Krohasan', '100', 'marte5.jpg', 'produk'),
(50, 'Panakota', 'embelsira', 'Wednesday', 'Panakota', '150', 'merrkur6.jpg', 'produk'),
(51, 'Trilece', 'embelsira', 'Wednesday', 'Trilece', '150', 'merrkur7.jpg', 'produk'),
(52, 'Zupe', 'embelsira', 'Wednesday', 'Zupe', '100', 'merrkur8.jpg', 'produk'),
(53, 'Krepa', 'embelsira', 'Wednesday', 'Krepa', '250', 'merrkur9.jpg', 'produk'),
(54, 'Ekspres', 'pije', 'Wednesday', 'Ekspres', '70', 'p1.jpg', 'produk'),
(56, 'Coca Cola', 'pije', 'Wednesday', 'Coca Cola', '120', 'p3.jpg', 'produk'),
(58, 'Pene Napoletane', 'kryesore', 'Thursday', 'Pene Napoletane', '200', 'enjte1.jpg', 'produk'),
(59, 'Perime Zgare', 'kryesore', 'Thursday', 'Perime Zgare', '150', 'enjte2.jpg', 'produk'),
(61, 'Supe Krem Patate', 'kryesore', 'Thursday', 'Supe krem patate', '150', 'enjte4.jpg', 'produk'),
(62, 'Ekspres', 'pije', 'Thursday', 'Ekspres', '70', 'p1.jpg', 'produk'),
(63, 'Kapucino', 'pije', 'Thursday', 'Kapucino', '150', 'p2.jpg', 'produk'),
(64, 'Coca Cola', 'pije', 'Thursday', 'Coca Cola', '120', 'p3.jpg', 'produk'),
(65, 'Jagermaister', 'pije', 'Thursday', 'Jagermaister', '300', 'p4.jpg', 'produk'),
(66, 'Muffin', 'embelsira', 'Thursday', 'Mffin me boronice', '100', 'enjte5.jpg', 'produk'),
(67, 'Bakllava trendafili', 'embelsira', 'Thursday', 'Bakllava trendafili', '120', 'enjte6.jpg', 'produk'),
(69, 'Syltiash', 'embelsira', 'Thursday', 'Syltiash', '100', 'e4.jpg', 'produk'),
(70, 'Krem Brule', 'embelsira', 'Thursday', 'Krem Brule', '200', 'marte10.jpg', 'produk'),
(71, 'Salcice', 'mengjesi', 'Thursday', 'Salcice', '50', 'marte3.jpg', 'produk'),
(72, 'Buke me veze', 'mengjesi', 'Thursday', 'Buke me veze', '170', 'mengjes3.jpg', 'produk'),
(73, 'Krohasan', 'mengjesi', 'Thursday', 'Krohasan', '100', 'marte5.jpg', 'produk'),
(74, 'Soufle', 'mengjesi', 'Thursday', 'Soufle', '200', 'marte9.jpg', 'produk'),
(75, 'Tave me Bizele', 'kryesore', 'Friday', 'Tave me Bizele', '200', 'premte1.jpg', 'produk'),
(76, 'Qebap ne Leter', 'kryesore', 'Friday', 'Qebap ne leter', '250', 'premte2.jpg', 'produk'),
(77, 'Liptao', 'kryesore', 'Friday', 'Liptao', '120', 'premte3.jpg', 'produk'),
(78, 'Sallate rukola', 'kryesore', 'Friday', 'Sallate rukola', '200', 'premte4.jpg', 'produk'),
(79, 'Toast + leng frutash', 'mengjesi', 'Friday', 'Toast + leng frutash', '200', 'premte5.jpg', 'produk'),
(80, 'Toast + Kafe', 'mengjesi', 'Friday', 'Toast + Kafe', '150', 'premte6.jpg', 'produk'),
(81, 'Briosh+leng frutash', 'mengjesi', 'Friday', 'Briosh + leng frutash', '220', 'premte7.jpg', 'produk'),
(82, 'Briosh + Kafe', 'mengjesi', 'Friday', 'Briosh + Kafe', '160', 'premte8.jpg', 'produk'),
(83, 'Torte Marcipian', 'embelsira', 'Friday', 'Torte Marcipan', '200', 'premte9.jpg', 'produk'),
(84, 'Role me arra', 'embelsira', 'Friday', 'Role me Arra', '250', 'premte10.jpg', 'produk'),
(85, 'Krem Karramel', 'embelsira', 'Friday', 'Krem Karramele', '150', 'premte11.jpg', 'produk'),
(86, 'Torte me Vishnje', 'embelsira', 'Friday', 'Torte me vishnje', '200', 'premte12.jpg', 'produk'),
(87, 'Ekspres', 'pije', 'Friday', 'Ekspres', '70', 'p1.jpg', 'produk'),
(88, 'Kapucino', 'pije', 'Friday', 'Kapucino', '150', 'p2.jpg', 'produk'),
(89, 'Coca cola', 'pije', 'Friday', 'Coca cola', '120', 'p3.jpg', 'produk'),
(90, 'Jagermaister', 'pije', 'Friday', 'Jagermaister', '300', 'p4.jpg', 'produk'),
(91, 'Tave me salce soje', 'kryesore', 'Saturday', 'Tave me salce soje', '300', 'shtune1.jpg', 'produk'),
(92, 'Tave me asparagi', 'kryesore', 'Saturday', 'Tave me asparagi', '300', 'shtune2.jpg', 'produk'),
(93, 'Linguini me fruta deti', 'kryesore', 'Saturday', 'Linguini me fruta deti', '450', 'shtune3.jpg', 'produk'),
(94, 'Fusilli Radici', 'kryesore', 'Saturday', 'Fusilli Radici', '300', 'shtune4.jpg', 'produk'),
(95, 'Tost + Leng frutash', 'mengjesi', 'Saturday', 'Tost + Leng frutash', '200', 'premte5.jpg', 'produk'),
(96, 'Omlet me veze', 'mengjesi', 'Saturday', 'Omlet me veze', '170', 'mengjesi1.jpg', 'produk'),
(97, 'Veze sy', 'mengjesi', 'Saturday', 'Veze sy', '50', 'marte2.jpg', 'produk'),
(99, 'Soufle', 'embelsira', 'Saturday', 'Soufle', '200', 'marte9.jpg', 'produk'),
(100, 'Zupa', 'embelsira', 'Saturday', 'Zupa', '100', 'e1.jpg', 'produk'),
(101, 'Trilece', 'embelsira', 'Saturday', 'Trilece', '150', 'merrkur7.jpg', 'produk'),
(102, 'Krem Karramel', 'embelsira', 'Saturday', 'Krem Karramel', '150', 'premte11.jpg', 'produk'),
(103, 'Ekspres', 'pije', 'Saturday', 'Ekspres', '70', 'p1.jpg', 'produk'),
(104, 'Kapucino', 'pije', 'Saturday', 'Kapucino', '150', '	\r\np2.jpg', 'produk'),
(105, 'Coca cola', 'pije', 'Saturday', 'Coca cola', '120', '	\r\np3.jpg', 'produk'),
(106, 'Jagermaister', 'pije', 'Saturday', 'Jagermaister', '300', '	\r\np4.jpg', 'produk'),
(123, 'Kapucino', 'pije', 'Wednesday', 'Kapucino', '150', 'p2.jpg', 'produk'),
(124, 'Jagermaister', 'pije', 'Wednesday', 'Jagermaister', '300', 'p4.jpg', 'produk'),
(125, 'Patate Furre', 'kryesore', 'Thursday', 'Patate ', '120', 'foot4.jpg', 'produk'),
(137, 'Rizoto', 'mengjesi', 'Tuesday', 'Rizoto', '150', 'about3.jpg', 'produk'),
(138, 'Briosh', 'mengjesi', 'Monday', 'briosh', '100', 'marte5.jpg', 'produk'),
(140, 'Paketa Biznes 1', 'mengjesi', 'Tuesday', 'Briosh+kafe', '150', 'premte8.jpg', 'Pakete'),
(141, 'Paketa 2', 'mengjesi', 'Monday', 'Paketa 2 perfshin eskallop me arra + uje', '250', 'about1.png', 'Pakete');

-- --------------------------------------------------------

--
-- Table structure for table `porosit`
--

CREATE TABLE `porosit` (
  `id` int(11) NOT NULL,
  `emri` varchar(40) DEFAULT NULL,
  `nrcel` varchar(30) DEFAULT NULL,
  `nr_prod` varchar(4000) DEFAULT NULL,
  `totali` int(9) DEFAULT NULL,
  `uploadedon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `porosit`
--

INSERT INTO `porosit` (`id`, `emri`, `nrcel`, `nr_prod`, `totali`, `uploadedon`) VALUES
(13, 'test', '0236969688', '2', 400, '2020-09-11 16:16:11'),
(14, 'enri', '0695396369', '4', 1000, '2020-09-15 16:11:51'),
(15, 'prova', '0696336456', '3', 470, '2020-09-16 16:37:16'),
(16, 'beni', '0696558123', '2', 900, '2020-09-19 19:41:33'),
(17, 'ola', '0696336456', '2', 500, '2020-09-21 16:23:43'),
(18, 'ledi', '0697525456', '2', 750, '2020-09-22 10:29:38'),
(19, 'xhulio', '0695363654', '2', 500, '2020-09-22 19:24:12'),
(20, 'aldo', '0236969688', '2', 270, '2020-09-24 17:22:55'),
(21, 'jona', '0696336456', '2', 600, '2020-09-25 19:23:12'),
(22, 'dhimitri', '0696558123', '2', 900, '2020-09-29 18:51:21'),
(23, 'enri', '0236969688', '2', 800, '2020-09-29 21:23:02'),
(24, 'xhon', '0697525456', '2', 500, '2020-09-29 21:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `produktet`
--

CREATE TABLE `produktet` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `emri_prod` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cmimi` int(25) NOT NULL,
  `sasia` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produktet`
--

INSERT INTO `produktet` (`id`, `id_prod`, `emri_prod`, `cmimi`, `sasia`) VALUES
(36, 0, 'Tave me Bizele', 200, 0),
(37, 0, 'Torte Marcipian', 200, 0),
(38, 0, 'Tave me Bizele', 200, 0),
(42, 0, 'Tave me Bizele', 200, 2),
(43, 0, 'Torte Marcipian', 200, 2),
(44, 0, 'Tave me Bizele', 200, 2),
(45, 0, 'Torte Marcipian', 200, 2),
(46, 0, 'Tave me Bizele', 200, 3),
(47, 0, 'Torte Marcipian', 200, 2),
(48, 0, 'Tave me Bizele', 200, 2),
(49, 0, 'Torte Marcipian', 200, 1),
(50, 0, 'Tave me Bizele', 200, 1),
(51, 0, 'Torte Marcipian', 200, 1),
(52, 0, 'Tave me Bizele', 200, 1),
(53, 0, 'Torte Marcipian', 200, 1),
(54, 13, 'Tave me Bizele', 200, 1),
(55, 13, 'Torte Marcipian', 200, 1),
(56, 14, 'Pasta Furre', 200, 2),
(57, 14, 'Krohasan', 100, 2),
(58, 14, 'Pica Alla Krema', 250, 1),
(59, 14, 'Kapucino', 150, 1),
(60, 15, 'Imam Bajelldi', 200, 1),
(61, 15, 'Omlet', 220, 1),
(62, 15, 'Veze sy', 50, 1),
(63, 16, 'Tave me asparagi', 300, 1),
(64, 16, 'Tost + Leng frutash', 200, 3),
(65, 17, 'Tave me salce soje', 300, 1),
(66, 17, 'Tost + Leng frutash', 200, 1),
(67, 18, 'Linguini me fruta deti', 450, 1),
(68, 18, 'Fusilli Radici', 300, 1),
(69, 19, 'Tave me salce soje', 300, 1),
(70, 19, 'Tost + Leng frutash', 200, 1),
(71, 20, 'Ekspres', 70, 1),
(72, 20, 'Soufle', 200, 1),
(73, 21, 'Tave me Bizele', 200, 2),
(74, 21, 'Toast + leng frutash', 200, 1),
(75, 22, 'Pasta Furre', 200, 2),
(76, 22, 'Pica Alla Krema', 250, 2),
(77, 23, 'Pasta Furre', 200, 2),
(78, 23, 'Cheseecake', 200, 2),
(79, 24, 'Supe Krem Perime', 150, 2),
(80, 24, 'Soufle', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rezervimet`
--

CREATE TABLE `rezervimet` (
  `id` int(11) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nrcel` int(10) NOT NULL,
  `dita` varchar(30) DEFAULT NULL,
  `kohezgjatja` varchar(30) DEFAULT NULL,
  `nr_personave` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(11) NOT NULL,
  `emri` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `cel` varchar(20) DEFAULT NULL,
  `msg` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `datelindja` varchar(30) DEFAULT NULL,
  `gjinia` varchar(20) DEFAULT NULL,
  `pass` varchar(150) NOT NULL,
  `configpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `datelindja`, `gjinia`, `pass`, `configpass`) VALUES
(18, 'linditahysa@gmail.com', '03/04/1999', 'female', '$2y$10$.FaCUEOqr.fZ7lxoyEB/3.nEPaJtG69f8fTHCRLE2HYQFZBILmtiK', '$2y$10$.FaCUEOqr.fZ7lxoyEB/3.nEPaJtG69f8fTHCRLE2HY'),
(19, 'erkondalla@gmail.com', '02/08/1997', 'male', '$2y$10$tPMG0KD8u23NuSp7d19vguzpQQqFEVqe7HhpCJql3jviSyPQ/3Y7m', '$2y$10$tPMG0KD8u23NuSp7d19vguzpQQqFEVqe7HhpCJql3jv'),
(20, 'ola@yahoo.com', '02/08/2006', 'male', '$2y$10$806xAAQbFbUVYbnXEKBIh.CrM8oOf3AVyIMjCqnMjKxLI6jtXqtGa', '$2y$10$806xAAQbFbUVYbnXEKBIh.CrM8oOf3AVyIMjCqnMjKx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admini`
--
ALTER TABLE `admini`
  ADD PRIMARY KEY (`emri`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porosit`
--
ALTER TABLE `porosit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produktet`
--
ALTER TABLE `produktet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervimet`
--
ALTER TABLE `rezervimet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `porosit`
--
ALTER TABLE `porosit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `produktet`
--
ALTER TABLE `produktet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `rezervimet`
--
ALTER TABLE `rezervimet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
