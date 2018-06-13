-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: vehiclebom
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ihs`
--

DROP TABLE IF EXISTS `ihs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ihs` (
  `idIHS` int(11) NOT NULL AUTO_INCREMENT,
  `mnemonikCode` int(11) DEFAULT NULL,
  `oemGroup` varchar(45) DEFAULT NULL,
  `oem` varchar(45) DEFAULT NULL,
  `customerplant` varchar(45) DEFAULT NULL,
  `vehicle` varchar(45) DEFAULT NULL,
  `program` varchar(45) DEFAULT NULL,
  `platform` varchar(45) DEFAULT NULL,
  `region` varchar(45) DEFAULT NULL,
  `sop` varchar(45) DEFAULT NULL,
  `eop` varchar(45) DEFAULT NULL,
  `bodystyle` varchar(45) DEFAULT NULL,
  `bodytype` varchar(45) DEFAULT NULL,
  `productionNameplate` varchar(45) DEFAULT NULL,
  `productionBrand` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idIHS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ihs`
--

LOCK TABLES `ihs` WRITE;
/*!40000 ALTER TABLE `ihs` DISABLE KEYS */;
/*!40000 ALTER TABLE `ihs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13 10:33:22
