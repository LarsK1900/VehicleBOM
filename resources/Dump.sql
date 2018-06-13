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
-- Table structure for table `bom`
--

DROP TABLE IF EXISTS `bom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bom` (
  `idBOM` int(11) NOT NULL AUTO_INCREMENT,
  `idIHS` int(11) NOT NULL,
  `idSAP` int(11) NOT NULL,
  PRIMARY KEY (`idBOM`),
  KEY `fk_BOM_IHS1_idx` (`idIHS`),
  KEY `fk_BOM_SAP1_idx` (`idSAP`),
  CONSTRAINT `fk_BOM_IHS1` FOREIGN KEY (`idIHS`) REFERENCES `ihs` (`idIHS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_BOM_SAP1` FOREIGN KEY (`idSAP`) REFERENCES `sap` (`idSAP`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bom`
--

LOCK TABLES `bom` WRITE;
/*!40000 ALTER TABLE `bom` DISABLE KEYS */;
/*!40000 ALTER TABLE `bom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `idNews` int(11) NOT NULL,
  `header` varchar(120) DEFAULT NULL,
  `news` varchar(1024) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idNews`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sap`
--

DROP TABLE IF EXISTS `sap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sap` (
  `idSAP` int(11) NOT NULL AUTO_INCREMENT,
  `materialNumber` varchar(45) DEFAULT NULL,
  `debitor` varchar(45) DEFAULT NULL,
  `debitorName` varchar(45) DEFAULT NULL,
  `vkorg` int(11) DEFAULT NULL,
  `werk` int(11) DEFAULT NULL,
  `vtrwg` int(11) DEFAULT NULL,
  `productGroup` varchar(45) DEFAULT NULL,
  `shortnumber` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSAP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sap`
--

LOCK TABLES `sap` WRITE;
/*!40000 ALTER TABLE `sap` DISABLE KEYS */;
/*!40000 ALTER TABLE `sap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `takerate`
--

DROP TABLE IF EXISTS `takerate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `takerate` (
  `idTakeRate` int(11) NOT NULL AUTO_INCREMENT,
  `idBOM` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `takeRate` int(11) DEFAULT NULL,
  `deliveryQuote` int(11) DEFAULT NULL,
  `numberPerCar` int(11) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTakeRate`),
  KEY `fk_TakeRate_BOM1_idx` (`idBOM`),
  KEY `fk_TakeRate_user` (`userID`),
  CONSTRAINT `fk_TakeRate_BOM1` FOREIGN KEY (`idBOM`) REFERENCES `bom` (`idBOM`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_TakeRate_user` FOREIGN KEY (`userID`) REFERENCES `tbl_users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `takerate`
--

LOCK TABLES `takerate` WRITE;
/*!40000 ALTER TABLE `takerate` DISABLE KEYS */;
/*!40000 ALTER TABLE `takerate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_last_login`
--

DROP TABLE IF EXISTS `tbl_last_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_last_login`
--

LOCK TABLES `tbl_last_login` WRITE;
/*!40000 ALTER TABLE `tbl_last_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_last_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_reset_password`
--

DROP TABLE IF EXISTS `tbl_reset_password`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_reset_password`
--

LOCK TABLES `tbl_reset_password` WRITE;
/*!40000 ALTER TABLE `tbl_reset_password` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_reset_password` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_roles`
--

DROP TABLE IF EXISTS `tbl_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text',
  PRIMARY KEY (`roleId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_roles`
--

LOCK TABLES `tbl_roles` WRITE;
/*!40000 ALTER TABLE `tbl_roles` DISABLE KEYS */;
INSERT INTO `tbl_roles` VALUES (1,'System Administrator'),(2,'Manager'),(3,'Employee');
/*!40000 ALTER TABLE `tbl_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (1,'admin@example.com','$2y$10$6NOKhXKiR2SAgpFF2WpCkuRgYKlSqFJaqM0NgIM3PT1gKHEM5/SM6','System Administrator','9890098900',1,0,0,'2015-07-01 18:56:49',1,'2018-01-05 05:56:34'),(2,'manager@example.com','$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm','Manager','9890098900',2,0,1,'2016-12-09 17:49:56',1,'2018-01-12 07:22:11'),(3,'employee@example.com','$2y$10$UYsH1G7MkDg1cutOdgl2Q.ZbXjyX.CSjsdgQKvGzAgl60RXZxpB5u','Employee','9890098900',3,0,1,'2016-12-09 17:50:22',3,'2018-01-04 07:58:28');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volumemonth`
--

DROP TABLE IF EXISTS `volumemonth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volumemonth` (
  `idVolumeMonth` int(11) NOT NULL AUTO_INCREMENT,
  `idVolumeYears` int(11) DEFAULT NULL,
  `Month` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVolumeMonth`),
  KEY `fk_VolumeMonth_VolumeYears1_idx` (`idVolumeYears`),
  CONSTRAINT `fk_VolumeMonth_VolumeYears1` FOREIGN KEY (`idVolumeYears`) REFERENCES `volumeyears` (`idVolumeYears`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volumemonth`
--

LOCK TABLES `volumemonth` WRITE;
/*!40000 ALTER TABLE `volumemonth` DISABLE KEYS */;
/*!40000 ALTER TABLE `volumemonth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volumesource`
--

DROP TABLE IF EXISTS `volumesource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volumesource` (
  `idVolumeSource` int(11) NOT NULL AUTO_INCREMENT,
  `idIHS` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `active` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `volumeName` varchar(45) DEFAULT NULL,
  `source` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idVolumeSource`),
  KEY `fk_VolumeSource_IHS_idx` (`idIHS`),
  KEY `fk_VolumeSource_user` (`userID`),
  CONSTRAINT `fk_VolumeSource_IHS` FOREIGN KEY (`idIHS`) REFERENCES `ihs` (`idIHS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_VolumeSource_user` FOREIGN KEY (`userID`) REFERENCES `tbl_users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volumesource`
--

LOCK TABLES `volumesource` WRITE;
/*!40000 ALTER TABLE `volumesource` DISABLE KEYS */;
/*!40000 ALTER TABLE `volumesource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volumeyears`
--

DROP TABLE IF EXISTS `volumeyears`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volumeyears` (
  `idVolumeYears` int(11) NOT NULL AUTO_INCREMENT,
  `idVolumeSource` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVolumeYears`),
  KEY `fk_VolumeYears_VolumeSource1_idx` (`idVolumeSource`),
  CONSTRAINT `fk_VolumeYears_VolumeSource1` FOREIGN KEY (`idVolumeSource`) REFERENCES `volumesource` (`idVolumeSource`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volumeyears`
--

LOCK TABLES `volumeyears` WRITE;
/*!40000 ALTER TABLE `volumeyears` DISABLE KEYS */;
/*!40000 ALTER TABLE `volumeyears` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-13 10:37:31
