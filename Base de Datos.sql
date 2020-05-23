CREATE DATABASE  IF NOT EXISTS `aplicacionweb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `aplicacionweb`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: aplicacionweb
-- ------------------------------------------------------
-- Server version	5.5.24-log

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
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `idmenu` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_plato` varchar(50) DEFAULT NULL,
  `descripcion_plato` varchar(200) DEFAULT NULL,
  `tipo_menu` varchar(45) DEFAULT NULL,
  `carbohidratos` varchar(45) DEFAULT NULL,
  `grasas` varchar(45) DEFAULT NULL,
  `vitaminas` varchar(45) DEFAULT NULL,
  `minerales` varchar(45) DEFAULT NULL,
  `fibra` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmenu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Prueba','Descripcion de Prueba',NULL,NULL,NULL,NULL,NULL,NULL),(2,'Prueba','prueba',NULL,NULL,NULL,NULL,NULL,NULL),(3,'Prueba 3','Descripcion de Prueba 3',NULL,NULL,NULL,NULL,NULL,NULL),(4,'Prueba 4','Descripcion de Prueba 4',NULL,NULL,NULL,NULL,NULL,NULL),(5,'Prueba','Prueba','1',NULL,NULL,NULL,NULL,NULL),(6,'Prueba Almuerzo','Prueba Almuerzo','2','30%','10%','1%','23%','32%');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_menu`
--

DROP TABLE IF EXISTS `tipo_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_menu` (
  `idtipo_menu` int(11) DEFAULT NULL,
  `descripcion_tipo` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  KEY `idtipo_menu` (`idtipo_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_menu`
--

LOCK TABLES `tipo_menu` WRITE;
/*!40000 ALTER TABLE `tipo_menu` DISABLE KEYS */;
INSERT INTO `tipo_menu` VALUES (1,'Desayunos'),(2,'Almuerzos'),(3,'Frutas y Vegetales'),(4,'Postres');
/*!40000 ALTER TABLE `tipo_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `login` varchar(10) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('nmesa','12345','Naidyn Mesa','nmesa@gmail.com'),('mvaldes','45678','Manuel Valdes','mvaldes@ejemplo.com');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'aplicacionweb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-20 10:36:46
