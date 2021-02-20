-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: rvang
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.18.04.1

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
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checkout` (
  `checkoutId` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(200) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `courierPrice` int(11) NOT NULL,
  `notes` varchar(300) NOT NULL,
  `sentToAddress` varchar(300) NOT NULL,
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`checkoutId`),
  KEY `FK` (`userId`),
  CONSTRAINT `fk_checkout_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checkout`
--

LOCK TABLES `checkout` WRITE;
/*!40000 ALTER TABLE `checkout` DISABLE KEYS */;
/*!40000 ALTER TABLE `checkout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `checkoutTransaction`
--

DROP TABLE IF EXISTS `checkoutTransaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checkoutTransaction` (
  `transactionId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `checkoutId` int(11) NOT NULL,
  PRIMARY KEY (`transactionId`),
  KEY `fk_checkoutTransaction_1_idx` (`checkoutId`),
  KEY `fk_checkoutTransaction_2_idx` (`productId`),
  CONSTRAINT `fk_checkoutTransaction_1` FOREIGN KEY (`checkoutId`) REFERENCES `checkout` (`checkoutId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_checkoutTransaction_2` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checkoutTransaction`
--

LOCK TABLES `checkoutTransaction` WRITE;
/*!40000 ALTER TABLE `checkoutTransaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `checkoutTransaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `paymentId` int(11) NOT NULL AUTO_INCREMENT,
  `proof` varchar(300) NOT NULL,
  `paymentDate` varchar(300) NOT NULL,
  `notesFrombuyer` varchar(400) NOT NULL,
  `checkoutId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`paymentId`),
  KEY `FK` (`userId`),
  KEY `fk_payment_2_idx` (`checkoutId`),
  CONSTRAINT `fk_payment_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_payment_2` FOREIGN KEY (`checkoutId`) REFERENCES `checkout` (`checkoutId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `notes` text NOT NULL,
  `stock` int(11) NOT NULL,
  `status` enum('available','not available') NOT NULL,
  `discount` int(11) NOT NULL,
  `bestSeller` enum('ya','tidak') NOT NULL,
  `categoryId` int(11) NOT NULL,
  PRIMARY KEY (`productId`),
  KEY `fk_product_1_idx` (`categoryId`),
  CONSTRAINT `fk_product_1` FOREIGN KEY (`categoryId`) REFERENCES `productCategory` (`categoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Test','10000','<p>\r\n	<u><em><strong>Halo semuanya</strong></em></u> <sup>21</sup></p>\r\n',100,'available',10,'tidak',2);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productCategory`
--

DROP TABLE IF EXISTS `productCategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productCategory` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(100) NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productCategory`
--

LOCK TABLES `productCategory` WRITE;
/*!40000 ALTER TABLE `productCategory` DISABLE KEYS */;
INSERT INTO `productCategory` VALUES (1,'Soemthing 123','halo'),(2,'mantap','');
/*!40000 ALTER TABLE `productCategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotion` (
  `promotionId` int(11) NOT NULL AUTO_INCREMENT,
  `tagline` varchar(300) NOT NULL,
  `notes` varchar(300) NOT NULL,
  `promoCode` varchar(300) NOT NULL,
  PRIMARY KEY (`promotionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion`
--

LOCK TABLES `promotion` WRITE;
/*!40000 ALTER TABLE `promotion` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `roleId` int(11) NOT NULL,
  `roleName` varchar(200) NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY (`roleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'Admin','Ya admin'),(2,'User','123');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trPromo`
--

DROP TABLE IF EXISTS `trPromo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trPromo` (
  `trId` int(11) NOT NULL,
  `promotionId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  KEY `fk_trPromo_1_idx` (`promotionId`),
  KEY `fk_trPromo_2_idx` (`productId`),
  CONSTRAINT `fk_trPromo_1` FOREIGN KEY (`promotionId`) REFERENCES `promotion` (`promotionId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_trPromo_2` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trPromo`
--

LOCK TABLES `trPromo` WRITE;
/*!40000 ALTER TABLE `trPromo` DISABLE KEYS */;
/*!40000 ALTER TABLE `trPromo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `roleId` int(11) NOT NULL,
  PRIMARY KEY (`userId`),
  KEY `roleId` (`roleId`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `role` (`roleId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'panjidia995@gmail.com','$2y$10$dPi065AsNXpz5mtZGiCpyu11WHiIIHxhSbKd.eGFBt3abW5/XLZEG','Panji','Baskoro',NULL,NULL,1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-20  8:56:27
