-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2014 at 11:39 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `a1487639_pizzas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_ID` tinyint(2) NOT NULL AUTO_INCREMENT,
  `status` int(1) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(33) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(15) NOT NULL,
  `code` char(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`admin_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_ID`, `status`, `username`, `password`, `fullname`, `email`, `phone`, `code`) VALUES
(1, 1, 'Robert', '7815696ecbf1c96e6894b779456d330e', 'Széll Róbert', 'szell.robert92@hotmail,com', 123456789, 'XYNKZZABXTDXUSX');

-- --------------------------------------------------------

--
-- Table structure for table `pizzak_24`
--

CREATE TABLE IF NOT EXISTS `pizzak_24` (
  `pizza_ID` int(3) NOT NULL AUTO_INCREMENT,
  `nev` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `feltet` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meret` int(3) DEFAULT NULL,
  `ar` smallint(4) NOT NULL,
  PRIMARY KEY (`pizza_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=190 ;

--
-- Dumping data for table `pizzak_24`
--

INSERT INTO `pizzak_24` (`pizza_ID`, `nev`, `feltet`, `meret`, `ar`) VALUES
(1, 'Pizza Americana', 'Paradicsom, sajt, szalámi', 24, 890),
(2, 'Pizza Bacetto ', 'paradicsom, sajt, kolbász, hagyma, paprika', 24, 890),
(3, 'Pizza Bolognese', 'paradicsom, sajt, zöldséges marharagu, tejföl', 24, 1050),
(5, 'Pizza Capricciosa ', 'paradicsom, sajt,sonka, gomba, olívabogyó, cukkini', 24, 1050),
(6, 'Pizza Daniella', 'paradicsom, sajt, füstölt hús', 24, 890),
(7, 'Pizza Danubio', 'paradicsom, sajt, tonhal, olívabogyó', 24, 1190),
(8, 'Pizza Domenica', 'paradicsom, sajt, sonka, tojáskarikák, pfefferoni', 24, 890),
(9, 'Pizza La Donna', 'paradicsom, sajt, kolbász, sonka, tojáskarika és paprika', 24, 1050),
(10, 'Pizza Prima Donna', 'pármai sonka, mozzarella, friss paradicsom', 24, 1290),
(11, 'Pizza Esotica ', 'paradicsom, sajt,sonka, gomba, olívabogyó', 24, 1050),
(12, 'Pizza Fiesta', 'paradicsom, bacon, szalámi, sonka, olíva bogyó, ruccola', 24, 1290),
(13, 'Pizza Funghi ', 'paradicsom, sajt, gomba', 24, 890),
(14, 'Pizza Quattro Formaggi', 'paradicsom, négyféle sajt', 24, 1050),
(15, 'Pizza Frutti di Mare', 'paradicsom,sajt,tenger gyümölcsei, olivabogyó', 24, 1290),
(16, 'Pizza di Forte', 'paradicsom, sajt, szalámi, pfefferoni, csili ', 24, 990),
(17, 'Pizza Gino ', 'pipihús tejfölös- márványsajtos alapon, sonka, póréhagyma', 24, 1290),
(18, 'Pizza Hawaii ', 'paradicsom, sajt,sonka, ananász darabok, kukorica', 24, 990),
(19, 'Húsimádó Pizza ', 'paradicsom, sajt, sonka, szalámi & kolbász, füstölt-hús', 24, 1050),
(20, 'Ínyenc Pizza', 'sajt, sonka, füstölt hús, olívabogyó, kapros tejfölös alapon', 24, 1050),
(21, ' Pizza California ', 'paradicsom, sajt ,sonka, kukorica', 24, 890),
(22, 'Pizza Magyaros ', 'paradicsom, sajt, kolbász, gomba, paprika', 24, 890),
(23, 'Pizza Mexico ', 'paradicsom, sajt.császárhús, kukorica,bab, paprika, chili paprika, erős !!', 24, 890),
(24, 'Pizza Occhio di Gatto ', 'paradicsom, sajt, sonka, tükörtojás', 24, 890),
(25, 'Pizza Ördögi ', 'csípős, fokhagymás barna mártás, csirkemell, zöldségek', 24, 1190),
(26, 'Pizza Padrone ', 'paradicsom,sajt,sonka, gomba, tojáskarikák', 24, 1090),
(27, 'Pizza Pescatore', 'paradicsom, sajt,tonhal, rák, sonka', 24, 1390),
(28, 'Pizza Pipi ', 'csirkemellfilé és almaszeletek tejfölös-márványsajt alapon, szerecsendióval ízesítve', 24, 1090),
(29, 'Pizza Prosciutto ', 'paradicsom, sajt, sonka ', 24, 890),
(30, 'Pizza Quattro ', 'paradicsom, sajt, sonka, gomba, brokkoli ', 24, 990),
(31, 'Pizza Rosa', 'paradicsom, sajt, sonka, gomba', 24, 990),
(32, 'Pizza Rustica ', 'paradicsom, sajt, császárhús, tojáskarikák', 24, 850),
(33, 'Pizza Quattro Stagioni ', 'paradicsom, sajt, tükörtojás, zöldborsó, sárgarépa, karfioldarabok, kukorica', 24, 890),
(34, 'Pizza Sicilia ', 'paradicsom,sajt, szalámi, hagyma, olivabogyó', 24, 960),
(35, 'Szivárvány Pizza ', 'sonka, tojás, paprika, brokkoli,kukorica, tejfölös - márványsajtos alapon ', 24, 1050),
(36, 'Taz Pizzája gazdagon ', 'csirkemell, bacon póréhagymás tejszínes mártásban, füstölt sajttal', 24, 1290),
(37, 'Pizza Temporate ', 'paradicsom, sajt,császárhús,kukorica, fokhagyma', 24, 850),
(38, 'Pizza Tonno e Cipolla ', 'paradicsom, sajt, tonhal, hagymakarikák', 24, 990),
(39, 'Chris Prémium Pizza ', 'pirított bacon sajtmártásban, füstölt tarja, mozzarella, hagyma', 24, 1290),
(40, 'Kívánság Pizza ', 'állítsa össze kedvenc pizzáját, a Kívánság Pizza ára feltétek nélkül értendő ', 24, 690),
(41, 'Pizza Verona ', 'paradicsom, sajt, csirkemájragu, paprikakocka', 24, 890),
(42, 'Pizza Margherita', 'pari, mozzarella, oregano', 24, 890),
(43, 'Pizza BBQ', 'BBQ alap, mozzarella, csirkemell, bacon, kaliforniai paprika', 24, 1050),
(44, 'Pizza Betyár', 'tejfölös alap, mozzarella, tarja, paprika, paradicsomkarikák ', 24, 990),
(45, 'Pizza Dallas ', 'tejfölös - snidling alap, mozzarella, sonka, szalámi, kukorica', 24, 890),
(46, 'Pizza Genova ', 'sajtmártás alap, sonka, kukorica, póréhagyma, füstölt sajt, mozzarella ', 24, 1090),
(47, 'Pizza Görög ', 'fokhagymás - tejfölös alap, mozzarella, csirkemell, paradicsom, uborka, lilahagyma, olívabogyó, fetasajt', 24, 1290),
(48, 'Pizza Házias ', 'par., fokhagyma, mozzarella, füstölt sajt, bacon, hagyma', 24, 1090),
(49, 'Pizza Juhtúrós ', 'tejfölös- juhtúrós alap, mozzarella, gomba, csirkemell, sonka, bacon, paradicsomkarikák ', 24, 1290),
(50, 'Pizza Parmezán ', 'mozzarella, sonka, szalámi, koktélparadicsom, parmezán ', 24, 1290),
(51, 'Pizza Picante ', 'kapros juhtúrós alap , szalámi, bacon, pepperoni, Erős Pista', 24, 1170),
(52, 'Pizza Piknik ', 'Sajtmártás alap, mozzarella, tarja, csemege ubi', 24, 1050),
(53, 'Pizza Primavera ', 'par., mozzarella, camembert, padlizsán, paradicsomkarikák, olívabogyó ', 24, 1290),
(54, 'Pizza Scampo ', 'fokhagymás - pari alap, mozzarella, rák, chilli, koktélparadicsom, friss bazsalikom ', 24, 1050),
(55, 'Pizza Szalámi ', 'par., mozzarella, szalámi, paradicsomkarikák, curry ', 24, 990),
(56, 'Pizza Tanyasi farmer ', 'fokhagymás - paradicsomos alap, mozzarella, bacon, kolbász, paradicsom, paprika, hagyma ', 24, 1090),
(57, 'Pizza Texas ', 'BBQ alap, mozzarella, bacon, szalámi, kaliforniai paprika, lilahagyma, füstölt sajt ', 24, 1090),
(58, 'Pizza Tutto ', 'fokhagymás - tejfölös alap, mozzarella, tarja, szalámi, paprika, lilahagyma ', 24, 1190),
(59, 'Pizza Vega ', 'par., mozzarella, juhtúró, gomba, olívabogyó, paprika, bazsalikom ', 24, 1050),
(60, 'Pizza Fonino ', 'tejfölös alap, mozzarella, csirkemell, ananász ', 24, 890),
(61, 'Pizza Császár ', 'pari alap, mozzarella, császárhús, bab, hagyma', 24, 890),
(62, 'Pizza Füstös ', 'sajtmártás alapon mozzarella, kolbász, tarja, lilahagyma és füstöltsajt', 24, 1290),
(63, 'Pizza Rafaella ', 'tejfölös alap, mozzarella, főtt tojás, sonka, brokkoli, szalámi és petrezselyem zöldje', 24, 1290),
(64, 'Pizza Americana', 'Paradicsom, sajt, szalámi', 28, 1290),
(65, 'Pizza Bacetto ', 'paradicsom, sajt, kolbász, hagyma, paprika', 28, 1290),
(66, 'Pizza Bolognese', 'paradicsom, sajt, zöldséges marharagu, tejföl', 28, 1390),
(67, 'Pizza Calzone', 'sonkás-sajtos pizza, félbehajtva', 28, 1290),
(68, 'Pizza Capricciosa ', 'paradicsom, sajt,sonka, gomba, olívabogyó, cukkini', 28, 1390),
(69, 'Pizza Daniella', 'paradicsom, sajt, füstölt hús', 28, 1190),
(70, 'Pizza Danubio', 'paradicsom, sajt, tonhal, olívabogyó', 28, 1490),
(71, 'Pizza Domenica', 'paradicsom, sajt, sonka, toj', 28, 1290),
(72, 'Pizza La Donna', 'paradicsom, sajt, kolbász, sonka, tojáskarika és paprika', 28, 1390),
(73, 'Pizza Prima Donna', 'pármai sonka, mozzarella, friss paradicsom', 28, 1590),
(74, 'Pizza Esotica ', 'paradicsom, sajt,sonka, gomba, olívabogyó', 28, 1390),
(75, 'Pizza Fiesta', 'paradicsom, bacon, szalámi, sonka, olíva bogyó, ruccola', 28, 1590),
(76, 'Pizza Funghi ', 'paradicsom, sajt, gomba', 28, 990),
(77, 'Pizza Quattro Formaggi', 'paradicsom, négyféle sajt', 28, 1390),
(78, 'Pizza Frutti di Mare', 'paradicsom,sajt,tenger gyümölcsei, olivabogyó', 28, 1590),
(79, 'Pizza di Forte', 'paradicsom, sajt, szalámi, pfefferoni, csili ', 28, 1290),
(80, 'Pizza Gino ', 'pipihús tejfölös- márványsajtos alapon, sonka, póréhagyma', 28, 1590),
(81, 'Pizza Hawaii ', 'paradicsom, sajt,sonka, ananász darabok, kukorica', 28, 1290),
(82, 'Húsimádó Pizza ', 'paradicsom, sajt, sonka, szalámi & kolbász, füstölt-hús', 28, 1390),
(83, 'Ínyenc Pizza', 'sajt, sonka, füstölt hús, olívabogyó, kapros tejfölös alapon', 28, 1390),
(84, ' Pizza California ', 'paradicsom, sajt ,sonka, kukorica', 28, 1290),
(85, 'Pizza Magyaros ', 'paradicsom, sajt, kolbász, gomba, paprika', 28, 1290),
(86, 'Pizza Mexico ', 'paradicsom, sajt.császárhús, kukorica,bab, paprika, chili paprika, erős !!', 28, 1290),
(87, 'Pizza Occhio di Gatto ', 'paradicsom, sajt, sonka, tükörtojás', 28, 1290),
(88, 'Pizza Ördögi ', 'csípős, fokhagymás barna mártás, csirkemell, zöldségek', 28, 1490),
(89, 'Pizza Padrone ', 'paradicsom,sajt,sonka, gomba, tojáskarikák', 28, 1390),
(90, 'Pizza Pescatore', 'paradicsom, sajt,tonhal, rák, sonka', 28, 1690),
(91, 'Pizza Pipi ', 'csirkemellfilé és almaszeletek tejfölös-márványsajt alapon, szerecsendióval ízesítve', 28, 1390),
(92, 'Pizza Prosciutto ', 'paradicsom, sajt, sonka ', 28, 1290),
(93, 'Pizza Quattro ', 'paradicsom, sajt, sonka, gomba, brokkoli ', 28, 1290),
(94, 'Pizza Rosa', 'paradicsom, sajt, sonka, gomba', 28, 1290),
(95, 'Pizza Rustica ', 'paradicsom, sajt, császárhús, tojáskarikák', 28, 1150),
(96, 'Pizza Quattro Stagioni ', 'paradicsom, sajt, tükörtojás, zöldborsó, sárgarépa, karfioldarabok, kukorica', 28, 1290),
(97, 'Pizza Sicilia ', 'paradicsom,sajt, szalámi, hagyma, olivabogyó', 28, 1290),
(98, 'Szivárvány Pizza ', 'sonka, tojás, paprika, brokkoli,kukorica, tejfölös - márványsajtos alapon ', 28, 1390),
(99, 'Taz Pizzája gazdagon ', 'csirkemell, bacon póréhagymás tejszínes mártásban, füstölt sajttal', 28, 1590),
(100, 'Pizza Temporate ', 'paradicsom, sajt,császárhús,kukorica, fokhagyma', 28, 1150),
(101, 'Pizza Tonno e Cipolla ', 'paradicsom, sajt, tonhal, hagymakarikák', 28, 1390),
(102, 'Chris Prémium Pizza ', 'pirított bacon sajtmártásban, füstölt tarja, mozzarella, hagyma', 28, 1590),
(103, 'Kívánság Pizza ', 'állítsa össze kedvenc pizzáját, a Kívánság Pizza ára feltétek nélkül értendő ', 28, 790),
(104, 'Pizza Verona ', 'paradicsom, sajt, csirkemájragu, paprikakocka', 28, 1290),
(105, 'Pizza Margherita', 'pari, mozzarella, oregano', 28, 1190),
(106, 'Pizza BBQ', 'BBQ alap, mozzarella, csirkemell, bacon, kaliforniai paprika', 28, 1290),
(107, 'Pizza Betyár', 'tejfölös alap, mozzarella, tarja, paprika, paradicsomkarikák ', 28, 1290),
(108, 'Pizza Dallas ', 'tejfölös - snidling alap, mozzarella, sonka, szalámi, kukorica', 28, 1292),
(109, 'Pizza Genova ', 'sajtmártás alap, sonka, kukorica, póréhagyma, füstölt sajt, mozzarella ', 28, 1390),
(110, 'Pizza Görög ', 'fokhagymás - tejfölös alap, mozzarella, csirkemell, paradicsom, uborka, lilahagyma, olívabogyó, fetasajt', 28, 1590),
(111, 'Pizza Házias ', 'par., fokhagyma, mozzarella, füstölt sajt, bacon, hagyma', 28, 1390),
(112, 'Pizza Juhtúrós ', 'tejfölös- juhtúrós alap, mozzarella, gomba, csirkemell, sonka, bacon, paradicsomkarikák ', 28, 1590),
(113, 'Pizza Parmezán ', 'mozzarella, sonka, szalámi, koktélparadicsom, parmezán ', 28, 1590),
(114, 'Pizza Picante ', 'kapros juhtúrós alap , szalámi, bacon, pepperoni, Erős Pista', 28, 1490),
(115, 'Pizza Piknik ', 'Sajtmártás alap, mozzarella, tarja, csemege ubi', 28, 1290),
(116, 'Pizza Primavera ', 'par., mozzarella, camembert, padlizsán, paradicsomkarikák, olívabogyó ', 28, 1590),
(117, 'Pizza Scampo ', 'fokhagymás - pari alap, mozzarella, rák, chilli, koktélparadicsom, friss bazsalikom ', 28, 1290),
(118, 'Pizza Szalámi ', 'par., mozzarella, szalámi, paradicsomkarikák, curry ', 28, 1290),
(119, 'Pizza Tanyasi farmer ', 'fokhagymás - paradicsomos alap, mozzarella, bacon, kolbász, paradicsom, paprika, hagyma ', 28, 1390),
(120, 'Pizza Texas ', 'BBQ alap, mozzarella, bacon, szalámi, kaliforniai paprika, lilahagyma, füstölt sajt ', 28, 1390),
(121, 'Pizza Tutto ', 'fokhagymás - tejfölös alap, mozzarella, tarja, szalámi, paprika, lilahagyma ', 28, 1490),
(122, 'Pizza Vega ', 'par., mozzarella, juhtúró, gomba, olívabogyó, paprika, bazsalikom ', 28, 1290),
(123, 'Pizza Fonino ', 'tejfölös alap, mozzarella, csirkemell, ananász ', 28, 1290),
(124, 'Pizza Császár ', 'pari alap, mozzarella, császárhús, bab, hagyma', 28, 1190),
(125, 'Pizza Füstös ', 'sajtmártás alapon mozzarella, kolbász, tarja, lilahagyma és füstöltsajt', 28, 1590),
(126, 'Pizza Rafaella ', 'tejfölös alap, mozzarella, főtt tojás, sonka, brokkoli, szalámi és petrezselyem zöldje', 28, 1590),
(127, 'Pizza Calzone EXTRA', 'par., tarja, bacon, bab, póréhagyma, mozzarella, füstölt sajt,félbehajtva', 28, 1490),
(128, 'Pizza Americana', 'Paradicsom, sajt, szalámi', 32, 1390),
(129, 'Pizza Bacetto ', 'paradicsom, sajt, kolbász, hagyma, paprika', 32, 1390),
(130, 'Pizza Bolognese', 'paradicsom, sajt, zöldséges marharagu, tejföl', 32, 1590),
(131, 'Pizza Capricciosa ', 'paradicsom, sajt,sonka, gomba, olívabogyó, cukkini', 32, 1590),
(132, 'Pizza Daniella', 'paradicsom, sajt, füstölt hús', 32, 1290),
(133, 'Pizza Danubio', 'paradicsom, sajt, tonhal, olívabogyó', 32, 1790),
(134, 'Pizza Domenica', 'paradicsom, sajt, sonka, tojáskarikák, pfefferoni', 32, 1490),
(135, 'Pizza La Donna', 'paradicsom, sajt, kolbász, sonka, tojáskarika és paprika', 32, 1590),
(136, 'Pizza Prima Donna', 'pármai sonka, mozzarella, friss paradicsom', 32, 1890),
(137, 'Pizza Esotica ', 'paradicsom, sajt,sonka, gomba, olívabogyó', 32, 1590),
(138, 'Pizza Fiesta', 'paradicsom, bacon, szalámi, sonka, olíva bogyó, ruccola', 32, 1890),
(139, 'Pizza Funghi ', 'paradicsom, sajt, gomba', 32, 1290),
(140, 'Pizza Quattro Formaggi', 'paradicsom, négyféle sajt', 32, 1590),
(141, 'Pizza Frutti di Mare', 'paradicsom,sajt,tenger gyümölcsei, olivabogyó', 32, 1890),
(142, 'Pizza di Forte', 'paradicsom, sajt, szalámi, pfefferoni, csili ', 32, 1590),
(143, 'Pizza Gino ', 'pipihús tejfölös- márványsajtos alapon, sonka, póréhagyma', 32, 1890),
(144, 'Pizza Hawaii ', 'paradicsom, sajt,sonka, ananász darabok, kukorica', 32, 1490),
(145, 'Húsimádó Pizza ', 'paradicsom, sajt, sonka, szalámi & kolbász, füstölt-hús', 32, 1590),
(146, 'Ínyenc Pizza', 'sajt, sonka, füstölt hús, olívabogyó, kapros tejfölös alapon', 32, 1590),
(147, ' Pizza California ', 'paradicsom, sajt ,sonka, kukorica', 32, 1390),
(148, 'Pizza Magyaros ', 'paradicsom, sajt, kolbász, gomba, paprika', 32, 1490),
(149, 'Pizza Mexico ', 'paradicsom, sajt.császárhús, kukorica,bab, paprika, chili paprika, erős !!', 32, 1390),
(150, 'Pizza Occhio di Gatto ', 'paradicsom, sajt, sonka, tükörtojás', 32, 1390),
(151, 'Pizza Ördögi ', 'csípős, fokhagymás barna mártás, csirkemell, zöldségek', 32, 1790),
(152, 'Pizza Padrone ', 'paradicsom,sajt,sonka, gomba, tojáskarikák', 32, 1590),
(153, 'Pizza Pescatore', 'paradicsom, sajt,tonhal, rák, sonka', 32, 1890),
(154, 'Pizza Pipi ', 'csirkemellfilé és almaszeletek tejfölös-márványsajt alapon, szerecsendióval ízesítve', 32, 1590),
(155, 'Pizza Prosciutto ', 'paradicsom, sajt, sonka ', 32, 1390),
(156, 'Pizza Quattro ', 'paradicsom, sajt, sonka, gomba, brokkoli ', 32, 1490),
(157, 'Pizza Rosa', 'paradicsom, sajt, sonka, gomba', 32, 1490),
(158, 'Pizza Rustica ', 'paradicsom, sajt, császárhús, tojáskarikák', 32, 1290),
(159, 'Pizza Quattro Stagioni ', 'paradicsom, sajt, tükörtojás, zöldborsó, sárgarépa, karfioldarabok, kukorica', 32, 1390),
(160, 'Pizza Sicilia ', 'paradicsom,sajt, szalámi, hagyma, olivabogyó', 32, 1490),
(161, 'Szivárvány Pizza ', 'sonka, tojás, paprika, brokkoli,kukorica, tejfölös - márványsajtos alapon ', 32, 1590),
(162, 'Taz Pizzája gazdagon ', 'csirkemell, bacon póréhagymás tejszínes mártásban, füstölt sajttal', 32, 1890),
(163, 'Pizza Temporate ', 'paradicsom, sajt,császárhús,kukorica, fokhagyma', 32, 1290),
(164, 'Pizza Tonno e Cipolla ', 'paradicsom, sajt, tonhal, hagymakarikák', 32, 1590),
(165, 'Chris Prémium Pizza ', 'pirított bacon sajtmártásban, füstölt tarja, mozzarella, hagyma', 32, 1890),
(166, 'Kívánság Pizza ', 'állítsa össze kedvenc pizzáját, a Kívánság Pizza ára feltétek nélkül értendő ', 32, 890),
(167, 'Pizza Verona ', 'paradicsom, sajt, csirkemájragu, paprikakocka', 32, 1490),
(168, 'Pizza Margherita', 'pari, mozzarella, oregano', 32, 1290),
(169, 'Pizza BBQ', 'BBQ alap, mozzarella, csirkemell, bacon, kaliforniai paprika', 32, 1590),
(170, 'Pizza Betyár', 'tejfölös alap, mozzarella, tarja, paprika, paradicsomkarikák ', 32, 1490),
(171, 'Pizza Dallas ', 'tejfölös - snidling alap, mozzarella, sonka, szalámi, kukorica', 32, 1490),
(172, 'Pizza Genova ', 'sajtmártás alap, sonka, kukorica, póréhagyma, füstölt sajt, mozzarella ', 32, 1790),
(173, 'Pizza Görög ', 'fokhagymás - tejfölös alap, mozzarella, csirkemell, paradicsom, uborka, lilahagyma, olívabogyó, fetasajt', 32, 1890),
(174, 'Pizza Házias ', 'par., fokhagyma, mozzarella, füstölt sajt, bacon, hagyma', 32, 1790),
(175, 'Pizza Juhtúrós ', 'tejfölös- juhtúrós alap, mozzarella, gomba, csirkemell, sonka, bacon, paradicsomkarikák ', 32, 1890),
(176, 'Pizza Parmezán ', 'mozzarella, sonka, szalámi, koktélparadicsom, parmezán ', 32, 1890),
(177, 'Pizza Picante ', 'kapros juhtúrós alap , szalámi, bacon, pepperoni, Erős Pista', 32, 1740),
(178, 'Pizza Piknik ', 'Sajtmártás alap, mozzarella, tarja, csemege ubi', 32, 1590),
(179, 'Pizza Primavera ', 'par., mozzarella, camembert, padlizsán, paradicsomkarikák, olívabogyó ', 32, 1890),
(180, 'Pizza Scampo ', 'fokhagymás - pari alap, mozzarella, rák, chilli, koktélparadicsom, friss bazsalikom ', 32, 1590),
(181, 'Pizza Szalámi ', 'par., mozzarella, szalámi, paradicsomkarikák, curry ', 32, 1490),
(182, 'Pizza Tanyasi farmer ', 'fokhagymás - paradicsomos alap, mozzarella, bacon, kolbász, paradicsom, paprika, hagyma ', 32, 1790),
(183, 'Pizza Texas ', 'BBQ alap, mozzarella, bacon, szalámi, kaliforniai paprika, lilahagyma, füstölt sajt ', 32, 1790),
(184, 'Pizza Tutto ', 'fokhagymás - tejfölös alap, mozzarella, tarja, szalámi, paprika, lilahagyma ', 32, 1690),
(185, 'Pizza Vega ', 'par., mozzarella, juhtúró, gomba, olívabogyó, paprika, bazsalikom ', 32, 1590),
(186, 'Pizza Fonino ', 'tejfölös alap, mozzarella, csirkemell, ananász ', 32, 1490),
(187, 'Pizza Császár ', 'pari alap, mozzarella, császárhús, bab, hagyma', 32, 1290),
(188, 'Pizza Füstös ', 'sajtmártás alapon mozzarella, kolbász, tarja, lilahagyma és füstöltsajt', 32, 1890),
(189, 'Pizza Rafaella ', 'tejfölös alap, mozzarella, főtt tojás, sonka, brokkoli, szalámi és petrezselyem zöldje', 32, 1890);

-- --------------------------------------------------------

--
-- Table structure for table `pizzak_28`
--

CREATE TABLE IF NOT EXISTS `pizzak_28` (
  `pizza_ID` int(2) NOT NULL AUTO_INCREMENT,
  `nev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `feltet` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  `meret` int(2) DEFAULT NULL,
  `ar` smallint(4) NOT NULL,
  PRIMARY KEY (`pizza_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=68 ;

--
-- Dumping data for table `pizzak_28`
--

INSERT INTO `pizzak_28` (`pizza_ID`, `nev`, `feltet`, `meret`, `ar`) VALUES
(4, 'Pizza Calzone', 'sonkás-sajtos pizza, félbehajtva', 28, 1290),
(5, 'Pizza Capricciosa ', 'paradicsom, sajt,sonka, gomba, olívabogyó, cukkini', 28, 1390),
(6, 'Pizza Daniella', 'paradicsom, sajt, füstölt hús', 28, 1190),
(7, 'Pizza Danubio', 'paradicsom, sajt, tonhal, olívabogyó', 28, 1490),
(8, 'Pizza Domenica', 'paradicsom, sajt, sonka, tojáskarikák, pfefferoni', 28, 1290),
(9, 'Pizza La Donna', 'paradicsom, sajt, kolbász, sonka, tojáskarika és paprika', 28, 1390),
(10, 'Pizza Prima Donna', 'pármai sonka, mozzarella, friss paradicsom', 28, 1590),
(11, 'Pizza Esotica ', 'paradicsom, sajt,sonka, gomba, olívabogyó', 28, 1390),
(12, 'Pizza Fiesta', 'paradicsom, bacon, szalámi, sonka, olíva bogyó, ruccola', 28, 1590),
(13, 'Pizza Funghi ', 'paradicsom, sajt, gomba', 28, 990),
(14, 'Pizza Quattro Formaggi', 'paradicsom, négyféle sajt', 28, 1390),
(15, 'Pizza Frutti di Mare', 'paradicsom,sajt,tenger gyümölcsei, olivabogyó', 28, 1590),
(16, 'Pizza di Forte', 'paradicsom, sajt, szalámi, pfefferoni, csili ', 28, 1290),
(17, 'Pizza Gino ', 'pipihús tejfölös- márványsajtos alapon, sonka, póréhagyma', 28, 1590),
(18, 'Pizza Hawaii ', 'paradicsom, sajt,sonka, ananász darabok, kukorica', 28, 1290),
(19, 'Húsimádó Pizza ', 'paradicsom, sajt, sonka, szalámi & kolbász, füstölt-hús', 28, 1390),
(20, 'Ínyenc Pizza', 'sajt, sonka, füstölt hús, olívabogyó, kapros tejfölös alapon', 28, 1390),
(21, ' Pizza California ', 'paradicsom, sajt ,sonka, kukorica', 28, 1290),
(22, 'Pizza Magyaros ', 'paradicsom, sajt, kolbász, gomba, paprika', 28, 1290),
(23, 'Pizza Mexico ', 'paradicsom, sajt.császárhús, kukorica,bab, paprika, chili paprika, erős !!', 28, 1290),
(24, 'Pizza Occhio di Gatto ', 'paradicsom, sajt, sonka, tükörtojás', 28, 1290),
(25, 'Pizza Ördögi ', 'csípős, fokhagymás barna mártás, csirkemell, zöldségek', 28, 1490),
(26, 'Pizza Padrone ', 'paradicsom,sajt,sonka, gomba, tojáskarikák', 28, 1390),
(27, 'Pizza Pescatore', 'paradicsom, sajt,tonhal, rák, sonka', 28, 1690),
(28, 'Pizza Pipi ', 'csirkemellfilé és almaszeletek tejfölös-márványsajt alapon, szerecsendióval ízesítve', 28, 1390),
(29, 'Pizza Prosciutto ', 'paradicsom, sajt, sonka ', 28, 1290),
(30, 'Pizza Quattro ', 'paradicsom, sajt, sonka, gomba, brokkoli ', 28, 1290),
(31, 'Pizza Rosa', 'paradicsom, sajt, sonka, gomba', 28, 1290),
(32, 'Pizza Rustica ', 'paradicsom, sajt, császárhús, tojáskarikák', 28, 1150),
(33, 'Pizza Quattro Stagioni ', 'paradicsom, sajt, tükörtojás, zöldborsó, sárgarépa, karfioldarabok, kukorica', 28, 1290),
(34, 'Pizza Sicilia ', 'paradicsom,sajt, szalámi, hagyma, olivabogyó', 28, 1290),
(35, 'Szivárvány Pizza ', 'sonka, tojás, paprika, brokkoli,kukorica, tejfölös - márványsajtos alapon ', 28, 1390),
(36, 'Taz Pizzája gazdagon ', 'csirkemell, bacon póréhagymás tejszínes mártásban, füstölt sajttal', 28, 1590),
(37, 'Pizza Temporate ', 'paradicsom, sajt,császárhús,kukorica, fokhagyma', 28, 1150),
(38, 'Pizza Tonno e Cipolla ', 'paradicsom, sajt, tonhal, hagymakarikák', 28, 1390),
(39, 'Chris Prémium Pizza ', 'pirított bacon sajtmártásban, füstölt tarja, mozzarella, hagyma', 28, 1590),
(40, 'Kívánság Pizza ', 'állítsa össze kedvenc pizzáját, a Kívánság Pizza ára feltétek nélkül értendő ', 28, 790),
(41, 'Pizza Verona ', 'paradicsom, sajt, csirkemájragu, paprikakocka', 28, 1290),
(42, 'Pizza Margherita', 'pari, mozzarella, oregano', 28, 1190),
(43, 'Pizza BBQ', 'BBQ alap, mozzarella, csirkemell, bacon, kaliforniai paprika', 28, 1290),
(44, 'Pizza Betyár', 'tejfölös alap, mozzarella, tarja, paprika, paradicsomkarikák ', 28, 1290),
(45, 'Pizza Dallas ', 'tejfölös - snidling alap, mozzarella, sonka, szalámi, kukorica', 28, 1292),
(46, 'Pizza Genova ', 'sajtmártás alap, sonka, kukorica, póréhagyma, füstölt sajt, mozzarella ', NULL, 1390),
(47, 'Pizza Görög ', 'fokhagymás - tejfölös alap, mozzarella, csirkemell, paradicsom, uborka, lilahagyma, olívabogyó, fetasajt', 28, 1590),
(48, 'Pizza Házias ', 'par., fokhagyma, mozzarella, füstölt sajt, bacon, hagyma', 28, 1390),
(49, 'Pizza Juhtúrós ', 'tejfölös- juhtúrós alap, mozzarella, gomba, csirkemell, sonka, bacon, paradicsomkarikák ', 28, 1590),
(50, 'Pizza Parmezán ', 'mozzarella, sonka, szalámi, koktélparadicsom, parmezán ', 28, 1590),
(51, 'Pizza Picante ', 'kapros juhtúrós alap , szalámi, bacon, pepperoni, Erős Pista', 28, 1490),
(52, 'Pizza Piknik ', 'Sajtmártás alap, mozzarella, tarja, csemege ubi', 28, 1290),
(53, 'Pizza Primavera ', 'par., mozzarella, camembert, padlizsán, paradicsomkarikák, olívabogyó ', 28, 1590),
(54, 'Pizza Scampo ', 'fokhagymás - pari alap, mozzarella, rák, chilli, koktélparadicsom, friss bazsalikom ', 28, 1290),
(55, 'Pizza Szalámi ', 'par., mozzarella, szalámi, paradicsomkarikák, curry ', 28, 1290),
(56, 'Pizza Tanyasi farmer ', 'fokhagymás - paradicsomos alap, mozzarella, bacon, kolbász, paradicsom, paprika, hagyma ', 28, 1390),
(57, 'Pizza Texas ', 'BBQ alap, mozzarella, bacon, szalámi, kaliforniai paprika, lilahagyma, füstölt sajt ', 28, 1390),
(58, 'Pizza Tutto ', 'fokhagymás - tejfölös alap, mozzarella, tarja, szalámi, paprika, lilahagyma ', 28, 1490),
(59, 'Pizza Vega ', 'par., mozzarella, juhtúró, gomba, olívabogyó, paprika, bazsalikom ', 28, 1290),
(60, 'Pizza Fonino ', 'tejfölös alap, mozzarella, csirkemell, ananász ', 28, 1290),
(61, 'Pizza Császár ', 'pari alap, mozzarella, császárhús, bab, hagyma', 28, 1190),
(62, 'Pizza Füstös ', 'sajtmártás alapon mozzarella, kolbász, tarja, lilahagyma és füstöltsajt', 28, 1590),
(63, 'Pizza Rafaella ', 'tejfölös alap, mozzarella, főtt tojás, sonka, brokkoli, szalámi és petrezselyem zöldje', 28, 1590),
(64, 'Pizza Calzone EXTRA', 'par., tarja, bacon, bab, póréhagyma, mozzarella, füstölt sajt,félbehajtva', 28, 1490),
(65, 'Pizza Americana', 'Paradicsom, sajt, szalámi', 28, 1290),
(66, 'Pizza Bacetto ', 'paradicsom, sajt, kolbász, hagyma, paprika', 28, 1290),
(67, 'Pizza Bolognese', 'paradicsom, sajt, zöldséges marharagu, tejföl', 28, 1390);

-- --------------------------------------------------------

--
-- Table structure for table `pizzak_32`
--

CREATE TABLE IF NOT EXISTS `pizzak_32` (
  `pizza_ID` int(2) NOT NULL AUTO_INCREMENT,
  `nev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `feltet` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  `meret` int(3) DEFAULT NULL,
  `ar` smallint(4) NOT NULL,
  PRIMARY KEY (`pizza_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=64 ;

--
-- Dumping data for table `pizzak_32`
--

INSERT INTO `pizzak_32` (`pizza_ID`, `nev`, `feltet`, `meret`, `ar`) VALUES
(1, 'Pizza Americana', 'Paradicsom, sajt, szalámi', 32, 1390),
(2, 'Pizza Bacetto ', 'paradicsom, sajt, kolbász, hagyma, paprika', 32, 1390),
(3, 'Pizza Bolognese', 'paradicsom, sajt, zöldséges marharagu, tejföl', 32, 1590),
(5, 'Pizza Capricciosa ', 'paradicsom, sajt,sonka, gomba, olívabogyó, cukkini', 32, 1590),
(6, 'Pizza Daniella', 'paradicsom, sajt, füstölt hús', 32, 1290),
(7, 'Pizza Danubio', 'paradicsom, sajt, tonhal, olívabogyó', 32, 1790),
(8, 'Pizza Domenica', 'paradicsom, sajt, sonka, tojáskarikák, pfefferoni', 32, 1490),
(9, 'Pizza La Donna', 'paradicsom, sajt, kolbász, sonka, tojáskarika és paprika', 32, 1590),
(10, 'Pizza Prima Donna', 'pármai sonka, mozzarella, friss paradicsom', 32, 1890),
(11, 'Pizza Esotica ', 'paradicsom, sajt,sonka, gomba, olívabogyó', 32, 1590),
(12, 'Pizza Fiesta', 'paradicsom, bacon, szalámi, sonka, olíva bogyó, ruccola', 32, 1890),
(13, 'Pizza Funghi ', 'paradicsom, sajt, gomba', 32, 1290),
(14, 'Pizza Quattro Formaggi', 'paradicsom, négyféle sajt', 32, 1590),
(15, 'Pizza Frutti di Mare', 'paradicsom,sajt,tenger gyümölcsei, olivabogyó', 32, 1890),
(16, 'Pizza di Forte', 'paradicsom, sajt, szalámi, pfefferoni, csili ', 32, 1590),
(17, 'Pizza Gino ', 'pipihús tejfölös- márványsajtos alapon, sonka, póréhagyma', 32, 1890),
(18, 'Pizza Hawaii ', 'paradicsom, sajt,sonka, ananász darabok, kukorica', 32, 1490),
(19, 'Húsimádó Pizza ', 'paradicsom, sajt, sonka, szalámi & kolbász, füstölt-hús', 32, 1590),
(20, 'Ínyenc Pizza', 'sajt, sonka, füstölt hús, olívabogyó, kapros tejfölös alapon', 32, 1590),
(21, ' Pizza California ', 'paradicsom, sajt ,sonka, kukorica', 32, 1390),
(22, 'Pizza Magyaros ', 'paradicsom, sajt, kolbász, gomba, paprika', 32, 1490),
(23, 'Pizza Mexico ', 'paradicsom, sajt.császárhús, kukorica,bab, paprika, chili paprika, erős !!', 32, 1390),
(24, 'Pizza Occhio di Gatto ', 'paradicsom, sajt, sonka, tükörtojás', 32, 1390),
(25, 'Pizza Ördögi ', 'csípős, fokhagymás barna mártás, csirkemell, zöldségek', 32, 1790),
(26, 'Pizza Padrone ', 'paradicsom,sajt,sonka, gomba, tojáskarikák', 32, 1590),
(27, 'Pizza Pescatore', 'paradicsom, sajt,tonhal, rák, sonka', 32, 1890),
(28, 'Pizza Pipi ', 'csirkemellfilé és almaszeletek tejfölös-márványsajt alapon, szerecsendióval ízesítve', 32, 1590),
(29, 'Pizza Prosciutto ', 'paradicsom, sajt, sonka ', 32, 1390),
(30, 'Pizza Quattro ', 'paradicsom, sajt, sonka, gomba, brokkoli ', 32, 1490),
(31, 'Pizza Rosa', 'paradicsom, sajt, sonka, gomba', 32, 1490),
(32, 'Pizza Rustica ', 'paradicsom, sajt, császárhús, tojáskarikák', 32, 1290),
(33, 'Pizza Quattro Stagioni ', 'paradicsom, sajt, tükörtojás, zöldborsó, sárgarépa, karfioldarabok, kukorica', 32, 1390),
(34, 'Pizza Sicilia ', 'paradicsom,sajt, szalámi, hagyma, olivabogyó', 32, 1490),
(35, 'Szivárvány Pizza ', 'sonka, tojás, paprika, brokkoli,kukorica, tejfölös - márványsajtos alapon ', 32, 1590),
(36, 'Taz Pizzája gazdagon ', 'csirkemell, bacon póréhagymás tejszínes mártásban, füstölt sajttal', 32, 1890),
(37, 'Pizza Temporate ', 'paradicsom, sajt,császárhús,kukorica, fokhagyma', 32, 1290),
(38, 'Pizza Tonno e Cipolla ', 'paradicsom, sajt, tonhal, hagymakarikák', 32, 1590),
(39, 'Chris Prémium Pizza ', 'pirított bacon sajtmártásban, füstölt tarja, mozzarella, hagyma', 32, 1890),
(40, 'Kívánság Pizza ', 'állítsa össze kedvenc pizzáját, a Kívánság Pizza ára feltétek nélkül értendő ', 32, 890),
(41, 'Pizza Verona ', 'paradicsom, sajt, csirkemájragu, paprikakocka', 32, 1490),
(42, 'Pizza Margherita', 'pari, mozzarella, oregano', 32, 1290),
(43, 'Pizza BBQ', 'BBQ alap, mozzarella, csirkemell, bacon, kaliforniai paprika', 32, 1590),
(44, 'Pizza Betyár', 'tejfölös alap, mozzarella, tarja, paprika, paradicsomkarikák ', 32, 1490),
(45, 'Pizza Dallas ', 'tejfölös - snidling alap, mozzarella, sonka, szalámi, kukorica', 32, 1490),
(46, 'Pizza Genova ', 'sajtmártás alap, sonka, kukorica, póréhagyma, füstölt sajt, mozzarella ', 32, 1790),
(47, 'Pizza Görög ', 'fokhagymás - tejfölös alap, mozzarella, csirkemell, paradicsom, uborka, lilahagyma, olívabogyó, fetasajt', 32, 1890),
(48, 'Pizza Házias ', 'par., fokhagyma, mozzarella, füstölt sajt, bacon, hagyma', 32, 1790),
(49, 'Pizza Juhtúrós ', 'tejfölös- juhtúrós alap, mozzarella, gomba, csirkemell, sonka, bacon, paradicsomkarikák ', 32, 1890),
(50, 'Pizza Parmezán ', 'mozzarella, sonka, szalámi, koktélparadicsom, parmezán ', 32, 1890),
(51, 'Pizza Picante ', 'kapros juhtúrós alap , szalámi, bacon, pepperoni, Erős Pista', 32, 1740),
(52, 'Pizza Piknik ', 'Sajtmártás alap, mozzarella, tarja, csemege ubi', 32, 1590),
(53, 'Pizza Primavera ', 'par., mozzarella, camembert, padlizsán, paradicsomkarikák, olívabogyó ', 32, 1890),
(54, 'Pizza Scampo ', 'fokhagymás - pari alap, mozzarella, rák, chilli, koktélparadicsom, friss bazsalikom ', 32, 1590),
(55, 'Pizza Szalámi ', 'par., mozzarella, szalámi, paradicsomkarikák, curry ', 32, 1490),
(56, 'Pizza Tanyasi farmer ', 'fokhagymás - paradicsomos alap, mozzarella, bacon, kolbász, paradicsom, paprika, hagyma ', 32, 1790),
(57, 'Pizza Texas ', 'BBQ alap, mozzarella, bacon, szalámi, kaliforniai paprika, lilahagyma, füstölt sajt ', 32, 1790),
(58, 'Pizza Tutto ', 'fokhagymás - tejfölös alap, mozzarella, tarja, szalámi, paprika, lilahagyma ', 32, 1690),
(59, 'Pizza Vega ', 'par., mozzarella, juhtúró, gomba, olívabogyó, paprika, bazsalikom ', 32, 1590),
(60, 'Pizza Fonino ', 'tejfölös alap, mozzarella, csirkemell, ananász ', 32, 1490),
(61, 'Pizza Császár ', 'pari alap, mozzarella, császárhús, bab, hagyma', 32, 1290),
(62, 'Pizza Füstös ', 'sajtmártás alapon mozzarella, kolbász, tarja, lilahagyma és füstöltsajt', 32, 1890),
(63, 'Pizza Rafaella ', 'tejfölös alap, mozzarella, főtt tojás, sonka, brokkoli, szalámi és petrezselyem zöldje', 32, 1890);

-- --------------------------------------------------------

--
-- Table structure for table `rendelesek`
--

CREATE TABLE IF NOT EXISTS `rendelesek` (
  `rend_ID` int(3) NOT NULL AUTO_INCREMENT,
  `pizza_ID` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `user_ID` int(2) NOT NULL,
  `cim` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`rend_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `rendelesek`
--

INSERT INTO `rendelesek` (`rend_ID`, `pizza_ID`, `user_ID`, `cim`) VALUES
(2, '1', 18, 'asd,asd,asd,asd,,'),
(3, '1', 18, 'asd,asd,asd,asd,,'),
(4, '1', 18, 'asd,asd,asd,asd,,'),
(5, '1', 18, 'asd,asd,asd,asd,,'),
(6, '1', 18, 'Martonos,24417,Tenkovska,115,,'),
(7, '0', 18, 'Martonos 24417,Tenkovska 115, '),
(8, '1', 18, 'Martonos 24417, Tenkovska 115,'),
(9, '0', 18, 'Martonos 24417, Tenkovska 115, , '),
(10, '7', 18, 'Martonos 24417, Tenkovska 115, , '),
(11, '1', 18, 'Martonos 24417, Tenkovska 115, , '),
(12, '1,2,3,8', 18, 'Martonos 24417, Tenkovska 115, , '),
(13, '6,13,11', 18, 'Martonos 24417, Tenkovska 115, , ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_ID` tinyint(2) NOT NULL AUTO_INCREMENT,
  `status` int(1) NOT NULL,
  `username` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `password` char(33) COLLATE utf8_hungarian_ci NOT NULL,
  `fullname` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(25) COLLATE utf8_hungarian_ci NOT NULL,
  `code` char(15) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `status`, `username`, `password`, `fullname`, `email`, `phone`, `address`, `code`) VALUES
(1, 1, 'SelRobert', '7815696ecbf1c96e6894b779456d330e', 'asd', 'asd', 0, 'asd', 'ODIJSPOKUOXSPPH'),
(2, 0, 'Alma', '7815696ecbf1c96e6894', 'Piros Alma', 'alma@asd.com', 123456789, 'Gyümölcs utca 36.', 'QWERTYUIOPASDFG'),
(11, 0, 'Kisv', '7815696ecbf1c96e6894', 'Kicsi VirÃ¡g', 'szell.robert92@hotmail.hu', 123456789, 'asd ut 165.', 'NEZKMJNDVXMYWIM'),
(13, 0, 'asdf', '7815696ecbf1c96e6894', 'asdasd', 'szell.robert92@hotmail.hu', 22365666, 'sddsfdsf 69', 'OUNBENNXCLRCQYM'),
(14, 0, 'proba', '7815696ecbf1c96e6894', 'asd', 'asd', 0, 'asd', 'RVQJWWTZZRCCNBV'),
(15, 1, 'proba2', '7815696ecbf1c96e6894', 'asd', 'asd', 0, 'asd', 'JQPKYIRKSCDVAKR'),
(16, 1, 'nev', '7815696ecbf1c96e6894', 'teljes nev', 'email cim', 123345, 'asdasd 345', 'KPPSZQYCOALPZSE'),
(17, 1, 'Pityu', '01d27f674020df168cef9f6fa23c2235', 'Piros Pista', 'piros.pisti@domain.com', 123456789, 'PetÅ‘fi SÃ¡ndor 25.', 'XYNKEEABTTDXUSX'),
(18, 1, '123', '202cb962ac59075b964b07152d234b70', '123', '123', 132, '132', 'IISOEYHXECLESPA'),
(19, 0, 'robika', '8e971415e24502940415f6f8c27e8291', 'Széll Róbert', 'robika@mail.com', 123456789, 'hold utca 26.', 'CTPAAESLLYRXFGL'),
(22, 1, 'asd', '7815696ecbf1c96e6894b779456d330e', 'asd', 'asd', 123, 'asd', 'GNDKPMGEJOTJTWA'),
(23, 0, 'asdasd', 'a8f5f167f44f4964e6c998dee827110c', 'asdasdasd', 'adsadasd', 0, 'asdasdasd', 'RFWJJSJJVHTDMLP');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
