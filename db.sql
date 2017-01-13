-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.13-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema testedex
--

CREATE DATABASE IF NOT EXISTS testedex;
USE testedex;

--
-- Definition of table `lojas`
--

DROP TABLE IF EXISTS `lojas`;
CREATE TABLE `lojas` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Logo` varchar(45) DEFAULT NULL,
  `Descricao` longtext,
  `HoraAbre` time DEFAULT NULL,
  `HoraFecha` time DEFAULT NULL,
  `Nome` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lojas`
--

/*!40000 ALTER TABLE `lojas` DISABLE KEYS */;
INSERT INTO `lojas` (`ID`,`Logo`,`Descricao`,`HoraAbre`,`HoraFecha`,`Nome`,`updated_at`,`created_at`) VALUES 
 (1,'','teste de inserção de loja','11:00:00','22:00:00','Loja 002','2017-01-12 03:10:39','2017-01-12 03:10:39'),
 (3,'','teste de inserção de loja','18:00:00','22:00:00','Loja 002 a','2017-01-12 17:06:27','2017-01-12 03:12:50'),
 (6,'','teste da inserção e alteração da loja','09:00:00','18:30:00','Loja do mateus','2017-01-12 14:40:53','2017-01-12 14:08:49'),
 (7,'acl-tema-seguridadip-84-638.jpg','ttiocgbikbdocd','16:00:00','23:00:00','aaaaaa','2017-01-12 17:05:24','2017-01-12 17:40:45');
/*!40000 ALTER TABLE `lojas` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
