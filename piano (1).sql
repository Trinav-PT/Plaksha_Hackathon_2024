-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 10:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piano`
--

-- --------------------------------------------------------

--
-- Table structure for table `pianodb`
--

CREATE TABLE `pianodb` (
  `PId` varchar(500) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Composer` varchar(500) NOT NULL,
  `Genre` varchar(500) NOT NULL,
  `PKey` varchar(50) NOT NULL,
  `PublishDate` datetime NOT NULL,
  `Difficulty` float NOT NULL,
  `YTubeLink` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pianodb`
--

INSERT INTO `pianodb` (`PId`, `Name`, `Composer`, `Genre`, `PKey`, `PublishDate`, `Difficulty`, `YTubeLink`) VALUES
('A1', 'Nocturne Op.32 no.2', 'Frédéric Chopin\r\n', 'Classical', 'Ab Major', '1837-02-25 08:22:20', 3.2, 'https://www.youtube.com/watch?v=my5OSmQZjns&pp=ygUPY2hvcGluIG9wMzIgbm8y'),
('A2', 'Für Elise (Bagatelle No.25 in A minor)\r\n', 'Ludwig van Beethoven\r\n', 'Classical', 'A Minor', '1867-02-25 08:25:57', 2.2, 'https://www.youtube.com/watch?v=_XG3h6LywNQ&pp=ygUJZnVyIGVsaXNl'),
('A3', 'Interstellar Main Theme (Patrik Pietschmann cover)', 'Hans Zimmer\r\n ', 'Contemporary Classical', 'A Minor', '2016-08-23 08:31:59', 3.6, 'https://www.youtube.com/watch?v=4y33h81phKU&pp=ygUSaW50ZXJzdGVsbGFyIHBpYW5v'),
('A4', 'Ballade Op.52 No.4', 'Frédéric Chopin', 'Classical ', 'F Minor', '1843-02-25 08:36:38', 5, 'https://www.youtube.com/watch?v=pe-GrRQz8pk&pp=ygUQY2hvcGluIGJhbGxhZGUgNA%3D%3D'),
('A5', 'Don\'t Stop Me Now (Accompaniment)', 'Queen', 'Rock', 'F Major', '1979-01-26 08:41:45', 3.5, 'https://www.youtube.com/watch?v=f2Fwd-zBkjA&pp=ygUlZG9uJ3Qgc3RvcCBtZSBub3cgcGlhbm8gYWNjb21wYW5pbWVud');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
