-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220618.41c48b423e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 04:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt_baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) NOT NULL,
  `prezime` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `username`, `lozinka`, `razina`) VALUES
(1, 'antun', 'rupcic', 'arupcic', '12345', 1),
(2, 'miro', 'gavran', 'afqfq', '$2y$10$BqWnQdWt7IsJ9ROYl2iQj.5HykBKHgj.B7iOpUq0Zk3wR9oj5/gUS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `novosti`
--

CREATE TABLE `novosti` (
  `id` int(11) NOT NULL,
  `naslov` varchar(32) NOT NULL,
  `sazeto` text NOT NULL,
  `kategorija` varchar(32) NOT NULL,
  `arhiva` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`id`, `naslov`, `sazeto`, `kategorija`, `arhiva`) VALUES
(2, 'Hrvatsak pobijedila Francusku', 'Hrvati prvi put u povijesti porazili francuze', 'Sport', ''),
(3, 'Naslov', 'Ovo je sportska vijest', 'Sport', ''),
(4, 'Naslov', 'Ovo je sportska vijest', 'Sport', ''),
(5, 'Naslov', 'Ovo je sportska vijest', 'Sport', ''),
(6, 'Vijest iz Hrvatske', 'Ovo je vijest iz Hrvatske', 'Vijesti iz Hrvatske', ''),
(7, 'Vijest iz Hrvatske', 'Ovo je vijest iz Hrvatske', 'Vijesti iz Hrvatske', ''),
(8, 'Vijest iz Hrvatske', 'Ovo je vijest iz Hrvatske', 'Vijesti iz Hrvatske', ''),
(9, 'Vijest iz Hrvatske', 'Ovo je vijest iz Hrvatske', 'Vijesti iz Hrvatske', ''),
(10, 'Vijest iz Hrvatske', 'Ovo je vijest iz Hrvatske', 'Vijesti iz Hrvatske', ''),
(11, 'Vijest iz Hrvatske', 'Ovo je vijest iz Hrvatske', 'Vijesti iz Hrvatske', 'da'),
(12, 'Vijest iz Hrvatske', 'Ovo je vijest iz Hrvatske', 'Vijesti iz Hrvatske', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `novosti`
--
ALTER TABLE `novosti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `novosti`
--
ALTER TABLE `novosti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



