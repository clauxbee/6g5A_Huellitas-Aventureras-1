CREATE DATABASE  IF NOT EXISTS `huellitas_aventureras` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `huellitas_aventureras`;
-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: huellitas_aventureras
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `mascotas`
--

DROP TABLE IF EXISTS `mascotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mascotas` (
  `ID_Mascotas` int NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Edad` tinyint DEFAULT NULL,
  `Raza` text,
  `ID_Usuario` int DEFAULT NULL,
  PRIMARY KEY (`ID_Mascotas`),
  KEY `fk_mascotas_usuarios_idx` (`ID_Usuario`),
  CONSTRAINT `fk_mascotas_usuarios` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mascotas`
--

LOCK TABLES `mascotas` WRITE;
/*!40000 ALTER TABLE `mascotas` DISABLE KEYS */;
/*!40000 ALTER TABLE `mascotas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metodo_pago`
--

DROP TABLE IF EXISTS `metodo_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `metodo_pago` (
  `ID_Metodo` int NOT NULL,
  `Titular` varchar(40) NOT NULL,
  `Tipo_Producto` varchar(16) DEFAULT NULL,
  `Numero` varchar(18) DEFAULT NULL,
  `CVV` varchar(3) DEFAULT NULL,
  `ID_Usuario` int DEFAULT NULL,
  PRIMARY KEY (`ID_Metodo`),
  KEY `fk_metodopago_usuario_idx` (`ID_Usuario`),
  CONSTRAINT `fk_metodopago_usuario` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metodo_pago`
--

LOCK TABLES `metodo_pago` WRITE;
/*!40000 ALTER TABLE `metodo_pago` DISABLE KEYS */;
/*!40000 ALTER TABLE `metodo_pago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paseadores`
--

DROP TABLE IF EXISTS `paseadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paseadores` (
  `ID_Paseador` int NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Genero` char(1) DEFAULT NULL,
  `Edad` tinyint DEFAULT NULL,
  `Telefono` bigint DEFAULT NULL,
  `Domicilio` varchar(50) DEFAULT NULL,
  `Correo` text,
  PRIMARY KEY (`ID_Paseador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paseadores`
--

LOCK TABLES `paseadores` WRITE;
/*!40000 ALTER TABLE `paseadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `paseadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paseo`
--

DROP TABLE IF EXISTS `paseo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paseo` (
  `ID_Paseo` int NOT NULL,
  `Duracion` tinyint DEFAULT NULL,
  `Estado` varchar(10) DEFAULT NULL,
  `Hora_Solicitud` varchar(5) DEFAULT NULL,
  `ID_Usuario` int DEFAULT NULL,
  `Mascota` varchar(45) DEFAULT NULL,
  KEY `fk_paseo_usuario_idx` (`ID_Usuario`),
  CONSTRAINT `fk_paseo_usuario` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paseo`
--

LOCK TABLES `paseo` WRITE;
/*!40000 ALTER TABLE `paseo` DISABLE KEYS */;
/*!40000 ALTER TABLE `paseo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `ID_Usuario` int NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Genero` char(1) DEFAULT NULL,
  `Edad` tinyint DEFAULT NULL,
  `Telefono` bigint DEFAULT NULL,
  `Domicilio` varchar(50) DEFAULT NULL,
  `Correo` text,
  `Contraseña` text,
  PRIMARY KEY (`ID_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
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

-- Dump completed on 2022-05-08  0:17:56
