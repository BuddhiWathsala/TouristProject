-- MySQL dump 10.13  Distrib 5.6.30, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: tourist
-- ------------------------------------------------------
-- Server version	5.6.30-1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','$2y$09$sAEQLDE0GPYUAiRcKPluBOLKUBLin9z3HwAaVUgu2TZzSb3o/afcu');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `main_slider`
--

DROP TABLE IF EXISTS `main_slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `main_slider` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(100) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `main_slider`
--

LOCK TABLES `main_slider` WRITE;
/*!40000 ALTER TABLE `main_slider` DISABLE KEYS */;
INSERT INTO `main_slider` VALUES (1,'images/5.jpg'),(2,'images/9.jpg'),(3,'images/3.jpg'),(4,'images/7.jpg');
/*!40000 ALTER TABLE `main_slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_trip`
--

DROP TABLE IF EXISTS `my_trip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_trip` (
  `trip_id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_name` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `img_album` varchar(80) DEFAULT NULL,
  `main_image` varchar(80) DEFAULT NULL,
  `client_data` varchar(200) DEFAULT NULL,
  `client_feedback` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  PRIMARY KEY (`trip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_trip`
--

LOCK TABLES `my_trip` WRITE;
/*!40000 ALTER TABLE `my_trip` DISABLE KEYS */;
INSERT INTO `my_trip` VALUES (1,'Polonnaruwa trip','Polonnaruwa','trips/polonnaruwa','trips/polonnaruwa/14.jpg','France tourists','Good tour','trip went on 2015-11-07',6.3455,5.2324),(2,'Anuradhapura trip','Anuradhapura','trips/anuradhapura','trips/anuradhapura/1.jpg','France tourists','Good tour','trip went on 2015-11-07',6.3455,5.2324),(3,'Kandy trip','Kandy','trips/kandy','trips/kandy/8.jpg','France tourists','Good tour','trip went on 2015-11-07',6.3455,5.2324);
/*!40000 ALTER TABLE `my_trip` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-02 19:46:22
