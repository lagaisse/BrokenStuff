CREATE DATABASE  IF NOT EXISTS `brokenstuff` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `brokenstuff`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: brokenstuff
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `lo_id` int(11) NOT NULL AUTO_INCREMENT,
  `lo_code` varchar(15) NOT NULL,
  `lo_name` varchar(255) NOT NULL,
  `lo_geoloc_lat` float DEFAULT NULL,
  `lo_geoloc_long` float DEFAULT NULL,
  `lo_path` char(9) DEFAULT NULL,
  PRIMARY KEY (`lo_id`),
  UNIQUE KEY `LOPLACE` (`lo_code`,`lo_path`),
  KEY `LOPATH` (`lo_path`) USING BTREE,
  KEY `LOCODE` (`lo_code`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=573 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` text NOT NULL,
  `r_add_date` datetime NOT NULL,
  `r_end_date` datetime DEFAULT NULL,
  `r_geoloc_lat` float DEFAULT NULL,
  `r_geoloc_long` float DEFAULT NULL,
  `r_picture` varchar(255) DEFAULT NULL,
  `r_status` enum('open','closed') DEFAULT NULL,
  `r_nb_vote_end` int(11) DEFAULT NULL,
  `lo_code` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`r_id`),
  KEY `RELOCODE` (`lo_code`) USING BTREE,
  KEY `ENDDATE` (`r_end_date`) USING BTREE,
  KEY `ADDDATE` (`r_add_date`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `report`
--

LOCK TABLES `report` WRITE;
/*!40000 ALTER TABLE `report` DISABLE KEYS */;
/*!40000 ALTER TABLE `report` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-09 21:12:40
