-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: carmelaon
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipe` (
  `codequipe` int NOT NULL AUTO_INCREMENT,
  `nomeprofessor` varchar(80) NOT NULL,
  `funcaoprofessor` varchar(50) NOT NULL,
  `fotoprofessor` varchar(250) NOT NULL,
  `ativo` int NOT NULL,
  PRIMARY KEY (`codequipe`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipe`
--

LOCK TABLES `equipe` WRITE;
/*!40000 ALTER TABLE `equipe` DISABLE KEYS */;
INSERT INTO `equipe` VALUES (6,'Adriana Pinotti','Diretora da Unidade Escolar','./imgEquipe/Adriana Pinottijpeg',0),(7,'Karina Canhadas','Coordenadora de Organização Escolar','./imgEquipe/Karina Canhadasjpeg',0),(8,'Sirlene Santos','Coordenadora de Organização Escolar','./imgEquipe/Sirlene Santosjpeg',1),(9,'Julyana Garcia','Coordenadora de Gestão Pedagógica','./imgEquipe/Julyana Garciajpeg',1),(10,'Lucineia Johansen','Coordenadora de Gestão Pedagógica','./imgEquipe/Lucineia Johansenjpeg',1),(12,'Francine Gomes','Professor PROATEC','./imgEquipe/Francine Gomesjpeg',0),(13,'Isabela','Professor PROATEC','./imgEquipe/Isabelajpeg',1),(14,'Laudenir Mendes','Professor Readaptado','./imgEquipe/Laudenir Mendesjpeg',1),(15,'Marilda Borelli','Professor Readaptado','./imgEquipe/Marilda Borellijpeg',0),(16,'Fabiana Galea','Professor Readaptado','./imgEquipe/Fabiana Galeajpeg',1);
/*!40000 ALTER TABLE `equipe` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-12 10:52:59
