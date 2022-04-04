# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: mis.arbor.local (MySQL 5.7.34)
# Database: moja_biblioteka
# Generation Time: 2022-04-03 16:16:54 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table knjiga
# ------------------------------------------------------------

DROP TABLE IF EXISTS `knjiga`;

CREATE TABLE `knjiga` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `zanrId` int(11) DEFAULT NULL,
  `procitana` tinyint(1) DEFAULT NULL,
  `ocena` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `knjiga` WRITE;
/*!40000 ALTER TABLE `knjiga` DISABLE KEYS */;

INSERT INTO `knjiga` (`id`, `naziv`, `autor`, `zanrId`, `procitana`, `ocena`)
VALUES
	(1,'Dozivotna robija','Vedrana Rudan',1,0,9),
	(2,'Čovek po imenu Uve','Fredrik Bakman',2,1,10),
	(3,'Čokolada','Džoana Haris',1,1,8),
	(4,'Tocak vremena','Robert Dzordan',3,1,10);

/*!40000 ALTER TABLE `knjiga` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table zanr
# ------------------------------------------------------------

DROP TABLE IF EXISTS `zanr`;

CREATE TABLE `zanr` (
  `zanrId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `zanr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`zanrId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `zanr` WRITE;
/*!40000 ALTER TABLE `zanr` DISABLE KEYS */;

INSERT INTO `zanr` (`zanrId`, `zanr`)
VALUES
	(1,'Drama'),
	(2,'Psihologija'),
	(3,'Epska Fantastika');

/*!40000 ALTER TABLE `zanr` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
