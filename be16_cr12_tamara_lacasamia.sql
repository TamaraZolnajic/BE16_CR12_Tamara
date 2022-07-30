-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 04:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be16_cr12_tamara_lacasamia`
--
CREATE DATABASE IF NOT EXISTS `be16_cr12_tamara_lacasamia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `be16_cr12_tamara_lacasamia`;

-- --------------------------------------------------------

--
-- Table structure for table `objects`
--

CREATE TABLE `objects` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `price` varchar(80) DEFAULT NULL,
  `reduction` varchar(20) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `objects`
--

INSERT INTO `objects` (`id`, `name`, `size`, `city`, `address`, `picture`, `price`, `reduction`, `description`, `latitude`, `longitude`) VALUES
(1, 'Apartment in 1140', '89', 'Vienna', '1140', '1140.jpg', '320.000', 'yes', 'Ein Vorraum mit ca. 9 m², ein großzügiger, nach Süden ausgerichteter Wohnbereich mit ca. 30 m², eine Küche mit Essplatz mit ca. 12 m², ein Schlafzimmer mit ca. 17 m² und ein weiteres Schlafzimmer mit ca. 12 m². Die Küche und das größere Schlafzimmer sind in den Innenhof mit Blick zum ruhigen Gartenbereich gerichtet. Badezimmer und WC sind getrennt.\r\n\r\nDie Wohnung ist sowohl für Familien als auch als WG geeignet, da alle Zimmer getrennt begehbar sind.\r\n\r\nDie Kosten für Heizung und WW werden ab Ju', '48.218375', '16.257850'),
(2, 'Apartment in 1210', '113', 'Vienna', '1210', '1210.jpg', '559.000', 'no', 'Zum Verkauf gelangt eine lichtdurchflutete 5-Zimmer Dachgeschoss-Maisonette, mit großer Terrasse, in absoluter Ruhelage.\r\n\r\nHier geht\'s zum 360° Rundgang:\r\nhttps://app.immoviewer.com/portal/tour/2558340?accessKey=62a8\r\nViele weitere Rundgänge, so wie alle neuen s REAL Immobilienangebote finden Sie auf www.sreal.at.\r\n\r\nDie im Jahr 1995 errichtete Wohneinheit weist eine Nutzfläche von ca. 113 m² auf und befindet sich in einem sehr gepflegten Zustand.', '48.258813', '16.416949\r\n'),
(3, 'House in 1220', '115.98', 'Vienna', '1220', '1220.jpg', '670.000 ', 'no', 'Das Einfamilienhaus hat 4 geräumige Zimmer, liegt in einer ruhigen Wohngegend und ist sofort bezugsfähig.\r\n\r\nDas Grundstück hat laut Grundbuch eine Größe von 517 m² und der Gartenbereich ist mit einem Pool und einer Gartenhütte ausgestattet.\r\n\r\nDie Liegenschaft wurde 2004 errichtet. Zwei Stellplätze für PKWs sind am Grundstück vorhanden. \r\n\r\nDas Haus wird mittels einer Gas-Zentralheizung mit Radiatoren beheizt und selbstverständlich ist eine Wärmeschutzfassade angebracht.\r\n\r\nDie Nutzfläche des H', '48.222399', '16.443556'),
(4, 'Apartment in 1040', '88.53', 'Vienna', '1040', '1040.jpg', '365.000', 'yes ', 'Zum Verkauf gelangt eine sehr gut aufgeteilte, sanierungsbedürftige 3 Zimmerwohnung mit ca. 90 m² Wohnnutzfläche in einer gepflegten Wohnhausanlage Baujahr 1950. Genießen Sie die unmittelbare Nähe zum', '48.1919', '16.3711'),
(5, 'Apartment in 1100', '55.63', 'Vienna', '1100', '1100.jpg', '425.000', 'yes', 'Das Viertel zeichnet sich durch eine hervorragende Infrastruktur aus. Umgeben von neuen Business- (unter anderem Erstebank und ÖBB mit Headquarter vor Ort) und Shopping-Centern (BahnhofCity, Favoriten', '48.1565', '16.3911'),
(6, 'Apartment in 1030', '114.75', 'Vienna', '1030', '1030.jpg', '690.000', 'yes', 'Großzügige 4-Zimmer-Eigentumswohnung im Botschaftsviertel\r\n\r\nDiese gut angelegte 4-Zimmerwohnung befindet sich im angesagten Viertel des 3. Wiener Gemeindebezirks, umgeben von Botschaften und Parks, Geschäfte und Lokale befinden sich ebenfalls in unmittelbarer Nähe, die öffentlich Verkehrsanbindung ist perfekt.', '48.1941', '16.3954'),
(7, 'House in 1120', '82.71', 'Vienna', '1120', '1120.jpg', '515.400', 'yes', ' Diese kleinen Raumwunder sind wie geschaffen für jene, die einen urbanen Lifestyle und Leben im Grünen verbinden wollen. Inmitten des Wildgartens entstehen insgesamt drei einzigartige, freistehende T', '48.1718', '16.3210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `objects`
--
ALTER TABLE `objects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `objects`
--
ALTER TABLE `objects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
