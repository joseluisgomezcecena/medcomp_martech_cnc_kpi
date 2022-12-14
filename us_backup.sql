-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: martech_cnc_kpi
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `downtime_reasons`
--

DROP TABLE IF EXISTS `downtime_reasons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `downtime_reasons` (
									`dt_id` int(11) NOT NULL AUTO_INCREMENT,
									`dt_reason` varchar(255) NOT NULL,
									`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
									PRIMARY KEY (`dt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `downtime_reasons`
--

LOCK TABLES `downtime_reasons` WRITE;
/*!40000 ALTER TABLE `downtime_reasons` DISABLE KEYS */;
INSERT INTO `downtime_reasons` VALUES (1,'No Material','2022-09-07 19:06:15'),(2,'Bent Rod','2022-09-07 19:06:15'),(3,'Broken Tool','2022-09-07 19:06:36'),(4,'Collet','2022-09-07 19:06:36'),(5,'Change over/Setup','2022-09-07 19:07:12'),(6,'Engineering','2022-09-07 19:07:12'),(7,'Holiday','2022-09-07 19:07:35'),(8,'Maintenance','2022-09-07 19:07:35'),(9,'Personnel','2022-09-07 19:07:47'),(10,'New reason because yes','2022-09-07 22:00:18'),(11,'New reason 2','2022-09-07 22:02:44'),(13,'A new one!','2022-09-21 16:03:45');
/*!40000 ALTER TABLE `downtime_reasons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `downtime_records`
--

DROP TABLE IF EXISTS `downtime_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `downtime_records` (
									`downtime_id` int(11) NOT NULL AUTO_INCREMENT,
									`machine_downtime` varchar(255) NOT NULL,
									`downtime_start` datetime NOT NULL,
									`downtime_end` datetime NOT NULL,
									`downtime_reason` text NOT NULL,
									PRIMARY KEY (`downtime_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `downtime_records`
--

LOCK TABLES `downtime_records` WRITE;
/*!40000 ALTER TABLE `downtime_records` DISABLE KEYS */;
INSERT INTO `downtime_records` VALUES (1,'STAR','2022-08-09 11:01:00','2022-08-09 12:01:00',''),(2,'SCRW1','2022-08-09 11:02:00','2022-08-09 13:02:00',''),(3,'STAR','2022-08-10 09:09:00','2022-08-10 10:09:00','');
/*!40000 ALTER TABLE `downtime_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `machines`
--

DROP TABLE IF EXISTS `machines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `machines` (
							`machine_id` int(11) NOT NULL AUTO_INCREMENT,
							`machine_name` varchar(255) NOT NULL,
							PRIMARY KEY (`machine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machines`
--

LOCK TABLES `machines` WRITE;
/*!40000 ALTER TABLE `machines` DISABLE KEYS */;
INSERT INTO `machines` VALUES (1,'STAR'),(2,'SCRW1'),(3,'SCRW2');
/*!40000 ALTER TABLE `machines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `records` (
						   `id` int(11) NOT NULL AUTO_INCREMENT,
						   `machine` varchar(255) NOT NULL,
						   `part` varchar(255) NOT NULL,
						   `quantity` int(11) NOT NULL,
						   `goal` float NOT NULL,
						   `start` datetime NOT NULL,
						   `end` datetime NOT NULL,
						   PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `records`
--

LOCK TABLES `records` WRITE;
/*!40000 ALTER TABLE `records` DISABLE KEYS */;
INSERT INTO `records` VALUES (1,'SCRW1','MP5405',115,120,'2022-07-27 09:07:00','2022-07-27 11:07:00'),(2,'SCRW1','MP5241',89,96,'2022-07-27 09:12:00','2022-07-27 11:12:00'),(3,'STAR','MP0050',44,44,'2022-07-27 09:54:00','2022-07-27 11:54:00'),(4,'SCRW1','MP3070',280,270,'2022-07-27 09:59:00','2022-07-27 14:59:00'),(6,'SCRW2','MP5241',180,144,'2022-08-09 11:05:00','2022-08-09 14:05:00'),(7,'STAR','MP0051',44,44,'2022-08-10 09:08:00','2022-08-10 11:08:00'),(8,'STAR','MP0050',56,66,'2022-09-07 15:58:00','2022-09-07 18:58:00'),(9,'STAR','MP0066-A',90,88,'2022-09-07 19:58:00','2022-09-07 23:58:00'),(10,'SCRW2','TEST',200,270,'2022-10-04 22:43:00','2022-10-05 01:43:00'),(11,'STAR','MP0051',55,44,'2022-10-05 15:27:00','2022-10-05 17:27:00');
/*!40000 ALTER TABLE `records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
						 `user_id` int(11) NOT NULL AUTO_INCREMENT,
						 `user_name` varchar(255) NOT NULL,
						 `user_department_id` int(11) NOT NULL,
						 `user_martech_number` int(11) NOT NULL,
						 `email` varchar(255) NOT NULL,
						 `password` varchar(255) NOT NULL,
						 `level` int(1) NOT NULL DEFAULT 0,
						 PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'jgomez',4,43044,'jgomez@martechmedical.com','$2y$10$1PzU6FeixARZ0ixR1R7SqeO5NjfaIa.ENqaKgBqAulXu4k0L2iXoy',2),(2,'slandis',3,1,'ingenieria@mail.com','$2y$10$zDkYm0CjwoI3.v2PHUQVp.0viLB5CsVihOuDr5yKpbyvI.IpQVMtC',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `validated_parts`
--

DROP TABLE IF EXISTS `validated_parts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `validated_parts` (
								   `id` int(11) NOT NULL AUTO_INCREMENT,
								   `COL1` varchar(10) DEFAULT NULL,
								   `COL2` varchar(75) DEFAULT NULL,
								   `COL3` varchar(1) DEFAULT NULL,
								   `COL4` int(2) DEFAULT NULL,
								   `COL5` int(2) DEFAULT NULL,
								   `COL6` varchar(5) DEFAULT NULL,
								   `COL7` varchar(6) DEFAULT NULL,
								   `COL8` varchar(50) DEFAULT NULL,
								   `COL9` varchar(255) DEFAULT NULL,
								   `COL 10` varchar(14) DEFAULT NULL,
								   `COL 11` varchar(10) DEFAULT NULL,
								   `COL 12` varchar(10) DEFAULT NULL,
								   `COL 13` varchar(13) DEFAULT NULL,
								   PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `validated_parts`
--

LOCK TABLES `validated_parts` WRITE;
/*!40000 ALTER TABLE `validated_parts` DISABLE KEYS */;
INSERT INTO `validated_parts` VALUES (1,'MP0050','5F UNIVERSAL STEM INSERT - MACHINED','E',22,19,'1 hr','RM5365','TITANIUM 6AL-4V ELI ROD .125\" OD','STAR','SSCREWSUP-0003','','MP0050GP','VP007625 (OQ)'),(2,'MP0051','5F LP STEM INSERT-MACHINED','E',22,19,'1 hr','RM5366','TITANIUM 6AL-4V ELI ROD .125\" OD','STAR','SSCREWSUP-0015','','MP0051GP','VP008020'),(3,'MP0066','6.6F UNIVERSAL STEM INSERT TITANIUM 6AL-4V ELI','E',22,19,'1 hr','RM5365','TITANIUM 6AL-4V ELI ROD .125\" OD','STAR','SSCREWSUP-0004','','MP0066GP','VP007689 (OQ)'),(4,'MP0066-A','6.6F LP STEM INSERT-MACHINED','E',22,19,'1 hr','RM5366','TITANIUM 6AL-4V ELI ROD .125\" OD','STAR','SSCREWSUP-0009','','MP0066GP-A','VP007783 (OQ)'),(5,'MP0080','8F UNIVERSAL STEM INSERT TITANIUM 6AL-4V ELI','E',22,19,'1 hr','RM5365','TITANIUM 6AL-4V ELI ROD .125\" OD','STAR','SSCREWSUP-0005','','MP0080GP','VP007690 (OQ)'),(6,'MP0081','8F UNIVERSAL STEM INSERT (.075 EXTENSION) TITANIUM 6AL-4V ELI','E',22,19,'1 hr','RM5365','TITANIUM 6AL-4V ELI ROD .125\" OD','STAR','SSCREWSUP-0006','','MP0081GP','VP007691 (OQ)'),(7,'MP0180','8F LOW PROFILES STEM INSERT-TITIANUM 6AL-4V ELI','E',22,19,'1 hr','RM5365','TITANIUM 6AL-4V ELI ROD .125\" OD','STAR','SSCREWSUP-0015','','MP0180GP','VP008021'),(8,'MP5405','.144','E',50,19,'1 hr','RM5367','303 SS Bar .1875\" ?? 0.00015\" OD','SCRW1','SSCREWSUP-0001','','AC5405','VP007279 (OQ)'),(9,'MP5241','.115X4.500 TUNNELER-MACHINED','E',48,19,'1 hr','RM5367','303 SS Bar .1875\" ?? 0.00015\" OD','SCRW1','SSCREWSUP-0002','','5241','VP007478 (OQ)'),(10,'MP5241','.115X4.500 TUNNELER-MACHINED','E',48,19,'1 hr','RM5367','303 SS Bar .1875\" ?? 0.00015\" OD','SCRW2','SSCREWSUP-0020','','5241','VP008174'),(11,'MP5513','.115X5\" DIA TRIBALL Y ADAPTER','E',0,19,'1 hr','RM5367','303 SS Bar .1875\" ?? 0.00015\" OD','SCRW1','SSCREWSUP-0017','','AC5513','VP008033'),(12,'MP5698-1','.103X6\" DIA TRIBALL W/ADAPTER','E',0,19,'1 hr','RM5367','303 SS Bar .1875\" ?? 0.00015\" OD','SCRW1','SSCREWSUP-0014','','AC5698-1','VP007993'),(13,'MP5081-T','.103\" DIAMETER X 4.5\" DIM \"A\" LENGTH TRI BALL','E',0,19,'1 hr','RM5367','304 SS Bar .1875\" ?? 0.00015\" OD','SCRW1','SSCREWSUP-0008','','AC5081-T','VP007817 (OQ)'),(14,'MP5081-1-T','.103\" DIAMETER X 6.0\" DIM \"A\" LENGTH TRI BALL','E',0,19,'1 hr','RM5367','307 SS Bar .1875\" ?? 0.00015\" OD','SCRW1','SSCREWSUP-0013','','AC5081-1-T','OQ'),(15,'MP3070','MERIT CENTROS TUNNELER-MACHINE','E',54,19,'1 hr','RM5368','303 SS Bar .1875\" ?? .00015\" OD (Centerless Ground)','SCRW1','SSCREWSUP-0012','','AC3070','VP007833 (OQ)'),(16,'MP30409-6','6F Tunneler Machined Part- Trocar','E',75,19,'1 hr','RM5555','303 SS Bar .098\" ?? .00015\" OD (Centerless Ground)','SCRW2','SSCREWSUP-0007','','AC30409-6','VP007680 (OQ)'),(17,'MP5221-T','10F Split Cath Tunneler','E',0,19,'1 hr','RM5367','303 SS Bar .1875\" ?? 0.00015\" OD','SCRW2','SSCREWSUP-0025','','AC5221-T','OQ'),(18,'MP30375','9.6F PORT TUNNELER','E',75,19,'1 hr','RM5367','303 SS Bar .1875\" ?? 0.00015\" OD','SCRW2','SSCREWSUP-0024','','AC30375','VP008214'),(19,'MP30579','.062 BARBED TUNNELER 303 STAINLESS STEEL','E',0,19,'1 hr','RM5555','303 SS Bar .098\" ?? .00015\" OD (Centerless Ground)','SCRW2','SSCREWSUP-0018','','AC30579','VP008022 (OQ)'),(20,'MP30733','9.5f DUAL PORT TUNNELER','E',0,19,'1 hr','RM5367','303 SS Bar .1875\" ?? 0.00015\" OD','SCRW2','SSCREWSUP-0022','','AC30733','VP008194'),(21,'MP3936','1/8\" BLUNT TROCAR','E',0,19,'1 hr','RM5367','303 SS Bar .1875\" ?? 0.00015\" OD','SCRW2','SSCREWSUP-0021','','AC3936','VP008193'),(22,'MP5761','PERITONEAL DIALYSIS TUNNELER - MACHINED','E',20,19,'10 hr','RM5556','303 SS Bar.250\" ?? .00015\" OD (Centerless Ground)','SCRW2','SSCREWSUP-0010','','AC5761','VP007861 (OQ)'),(23,'MP8246-112','13 GA CANNULA - .112 BARB - MACHINED - .082\" ?? ID x .095\" ?? .001\" OD','E',0,19,'3 hrs','RM5367','303 SS Bar .1875\" ?? 0.00015\" OD','SCRW2','SSCREWSUP-0023','','AC8246-112','VP008034 (OQ)'),(24,'MP5497','ROUND CANNULA WITH .130 BARB - MACHINED - .097\" ID X .108\" OD','E',86,19,'3 hrs','RM5367','303 SS Bar .1875\" ?? 0.00015\" OD','SCRW2','SSCREWSUP-0011','','AC5497','VP007864 (OQ)'),(26,'TEST','DESCR',NULL,91,NULL,NULL,NULL,NULL,'SCRW2',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `validated_parts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-19  8:53:57
