CREATE DATABASE  IF NOT EXISTS `nw201402` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `nw201402`;
-- MySQL dump 10.13  Distrib 5.6.17, for osx10.6 (i386)
--
-- Host: 127.0.0.1    Database: nw201402
-- ------------------------------------------------------
-- Server version	5.5.29

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
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id_blog` bigint(20) NOT NULL AUTO_INCREMENT,
  `ttl_blog` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `bdy_blog` varchar(2000) COLLATE utf8_bin DEFAULT NULL,
  `eml_autor` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `fch_blog` datetime DEFAULT NULL,
  PRIMARY KEY (`id_blog`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'Entry de Prueba','Este es un ejemplo de un micro blogging sistema para cualquier uso.','obetancourthunicah@gmail.com','2014-07-10 20:00:59'),(2,'Segundo Entry de Prueba','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id nisl non urna faucibus vulputate. Aliquam pharetra lorem vel dapibus aliquam. Mauris et tempus nunc. Morbi sodales lacus sit amet tincidunt sagittis. Curabitur lorem tortor, semper id fringilla non, pharetra non felis. Donec felis tellus, porttitor eu dapibus at, imperdiet a dui. Phasellus auctor orci sem, tempor semper dolor lobortis vitae. Etiam commodo urna vitae elit hendrerit, in condimentum eros imperdiet. Proin augue quam, placerat nec auctor nec, imperdiet nec lacus. In sed eleifend enim, id feugiat ligula. Morbi nec molestie arcu. Suspendisse potenti. Aliquam lacinia non velit non sodales. Nam scelerisque eu nulla ac feugiat. Aenean bibendum ultricies orci, in scelerisque mauris pharetra non. Pellentesque at dolor vel lacus tempus lobortis elementum blandit erat.\r\n\r\nAliquam ac iaculis diam. Morbi ac libero congue, elementum orci gravida, mattis mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas blandit nulla eget odio adipiscing, eget tincidunt nisi posuere. Nam vel tempor neque. Suspendisse in diam quis purus ullamcorper placerat tempor ut mi. In vitae porta diam. Curabitur semper, arcu sit amet tempor tempus, nunc ante consectetur risus, eu sodales nulla ante ac ante. Morbi ullamcorper tempus elit, ac venenatis libero sollicitudin vitae. Sed suscipit a felis non dictum. Aenean non blandit dui. Quisque congue odio eu metus pulvinar fringilla. Ut dignissim justo eget sapien cursus, varius tincidunt metus tincidunt. Donec cursus, nunc non commodo vulputate, tortor mi pretium tellus, eu semper justo dui ac purus.\r\n\r\nIn convallis quam sit amet arcu lacinia sodales. Cras quis neque molestie, malesuada est ut, tristique diam. Maecenas tempor, enim ut iaculis eleifend, massa nunc dictum tortor, sed aliquam elit ligula non est. Etiam posuere ornare ante et tempus. Phasellus sed viverra leo. Donec nec orci diam. Vestibulum at molestie ante. Integer ','obetancourthunicah@gmail.com','2014-07-10 20:18:28'),(3,'asdfgh','asdfghjklpoiuytrewaszdxfcghjk,mnbv dfghjkl,. ertuiokl,','sdfghj@sdfghj.com','2014-07-10 20:58:39');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carretilla`
--

DROP TABLE IF EXISTS `carretilla`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carretilla` (
  `carretillaid` bigint(20) NOT NULL AUTO_INCREMENT,
  `carrfching` datetime DEFAULT NULL,
  `carrFchLstUpt` datetime DEFAULT NULL,
  `carrCckOutUser` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`carretillaid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carretilla`
--

LOCK TABLES `carretilla` WRITE;
/*!40000 ALTER TABLE `carretilla` DISABLE KEYS */;
INSERT INTO `carretilla` VALUES (1,'2014-07-22 20:34:11','2014-07-22 20:34:11',''),(2,'2014-07-22 20:58:59','2014-07-22 20:58:59',''),(3,'2014-07-23 20:34:20','2014-07-23 20:34:20',''),(4,'2014-07-25 13:57:29','2014-07-25 13:57:29',''),(5,'2014-07-25 13:57:29','2014-07-25 13:57:29',''),(6,'2014-07-28 17:49:33','2014-07-28 17:49:33',''),(7,'2014-07-29 08:56:05','2014-07-29 08:56:05',''),(8,'2014-07-29 08:56:05','2014-07-29 08:56:05',''),(9,'2014-07-29 11:37:00','2014-07-29 11:37:00',''),(10,'2014-07-29 11:37:00','2014-07-29 11:37:00',''),(11,'2014-07-29 11:39:29','2014-07-29 11:39:29',''),(12,'2014-07-29 11:39:29','2014-07-29 11:39:29',''),(13,'2014-07-29 11:51:42','2014-07-29 11:51:42',''),(14,'2014-07-29 11:51:42','2014-07-29 11:51:42',''),(15,'2014-07-29 12:59:40','2014-07-29 12:59:40',''),(16,'2014-07-29 12:59:40','2014-07-29 12:59:40',''),(17,'2014-07-29 18:17:57','2014-07-29 18:17:57',''),(18,'2014-07-29 18:17:57','2014-07-29 18:17:57',''),(19,'2014-07-31 20:43:03','2014-07-31 20:43:03',''),(20,'2014-07-31 20:43:03','2014-07-31 20:43:03','');
/*!40000 ALTER TABLE `carretilla` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carretilla_d`
--

DROP TABLE IF EXISTS `carretilla_d`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carretilla_d` (
  `carretillaid` bigint(20) NOT NULL,
  `carretillaln` int(11) NOT NULL,
  `productoid` bigint(20) NOT NULL,
  `carrCtd` int(11) NOT NULL,
  `carrPrc` decimal(11,2) DEFAULT NULL,
  `carrIva` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`carretillaid`,`carretillaln`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carretilla_d`
--

LOCK TABLES `carretilla_d` WRITE;
/*!40000 ALTER TABLE `carretilla_d` DISABLE KEYS */;
INSERT INTO `carretilla_d` VALUES (1,1,6,1,13.00,0.15),(2,1,6,1,95.00,0.00),(2,2,6,1,5.30,0.00),(3,1,6,1,5.30,0.00),(3,2,5,1,13.00,0.15),(3,3,5,1,13.00,0.15),(3,4,1,1,5.30,0.00),(3,5,3,1,65.00,0.00),(3,6,5,1,13.00,0.15),(3,7,5,1,13.00,0.15);
/*!40000 ALTER TABLE `carretilla_d` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `categoriaID` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`categoriaID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (0,'No Asignado'),(2,'Sistemas'),(3,'Industrial'),(4,'Civil');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `empresa_id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_abr` varchar(7) COLLATE utf8_bin NOT NULL,
  `empresa_dsc` varchar(75) COLLATE utf8_bin NOT NULL,
  `empresa_rtn` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `empresa_dir` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `empresa_tip` char(3) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`empresa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'PART','Pura Artesanía','RTN010234','Tegucigalpa M.D.C Honduras','RTL');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libros`
--

DROP TABLE IF EXISTS `libros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libros` (
  `isbn` varchar(20) COLLATE utf8_bin NOT NULL,
  `titulo` varchar(128) COLLATE utf8_bin NOT NULL,
  `casaedit` varchar(128) COLLATE utf8_bin NOT NULL,
  `edicion` int(11) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libros`
--

LOCK TABLES `libros` WRITE;
/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` VALUES ('00000000000001','Programación de Negocios Web Php Mysql MVC','UNICAH',1),('00000000000002','Seminario de Software MongoDb, Jquery Mobile, Php REST API','UNICAH',1),('00000000000003','Diseño de Portales WEB','UNICAH',1),('00000000000004','Tecnología y Educación Una praxis en educación Superior','UNICAH',1),('00000000000005','Prueba de Mysqli e Insert','UNICAH',2),('00000000000006','Lean WEB Development','UNICAH',1),('00000000000007','SCRUM for Educators','UNICAH',2);
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postits`
--

DROP TABLE IF EXISTS `postits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `postName` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `postbody` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `postpriority` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postits`
--

LOCK TABLES `postits` WRITE;
/*!40000 ALTER TABLE `postits` DISABLE KEYS */;
INSERT INTO `postits` VALUES (1,'Post 1','Lero Lero Candelero',1),(2,'Post # 2','Se trata de mostrar como se integra un segundo post-it',0),(3,'dd','dd',0),(4,'ee','ss',0);
/*!40000 ALTER TABLE `postits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `productoid` bigint(20) NOT NULL AUTO_INCREMENT,
  `producto` varchar(70) COLLATE utf8_bin NOT NULL,
  `prodStock` int(11) DEFAULT NULL,
  `prodPrc` decimal(11,2) DEFAULT NULL,
  `prodIva` decimal(3,2) DEFAULT NULL,
  `prodest` char(3) COLLATE utf8_bin DEFAULT NULL,
  `produri` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `prodcat` int(11) DEFAULT '0',
  PRIMARY KEY (`productoid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Panadol',10,5.30,0.00,'ACT','0001.svg',0),(2,'Panadol Antigripal',10,5.00,0.00,'ACT','0002.svg',1),(3,'Acitromicina 500 mg',9,65.00,0.00,'ACT','0003.svg',0),(4,'Levofloxacina',10,95.00,0.00,'ACT','0004.svg',2),(5,'Agua Azul 16 oz fl',20,13.00,0.15,'ACT','0005.svg',2),(6,'Enfamil Soya Premiun',4,769.00,0.10,'ACT','0006.svg',0);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usuarioid` bigint(20) NOT NULL AUTO_INCREMENT,
  `usuarioemail` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `usuarionombre` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `usuarioestado` char(3) COLLATE utf8_bin DEFAULT NULL,
  `usuariofchingreso` datetime DEFAULT NULL,
  `usuariolastlogin` datetime DEFAULT NULL,
  `usuariopwdfallido` int(11) DEFAULT NULL,
  `usuariopwd` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`usuarioid`),
  UNIQUE KEY `usuarioemail_UNIQUE` (`usuarioemail`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-31 20:47:48
