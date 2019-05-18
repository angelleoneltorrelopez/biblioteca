-- MySQL dump 10.13  Distrib 5.5.61, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: biblioteca
-- ------------------------------------------------------
-- Server version	5.5.61-0ubuntu0.14.04.1

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
-- Table structure for table `AuthAssignment`
--

DROP TABLE IF EXISTS `AuthAssignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuthAssignment`
--

LOCK TABLES `AuthAssignment` WRITE;
/*!40000 ALTER TABLE `AuthAssignment` DISABLE KEYS */;
INSERT INTO `AuthAssignment` VALUES ('admin','108',NULL,'N;'),('admin','111',NULL,'N;'),('admin','112',NULL,'N;'),('admin','113',NULL,'N;'),('admin','115',NULL,'N;'),('admin','116',NULL,'N;'),('subscrite','110',NULL,'N;');
/*!40000 ALTER TABLE `AuthAssignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AuthItem`
--

DROP TABLE IF EXISTS `AuthItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuthItem`
--

LOCK TABLES `AuthItem` WRITE;
/*!40000 ALTER TABLE `AuthItem` DISABLE KEYS */;
INSERT INTO `AuthItem` VALUES ('admin',2,'Administrador',NULL,'N;'),('subscrite',2,'Subscrito',NULL,'N;');
/*!40000 ALTER TABLE `AuthItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AuthItemChild`
--

DROP TABLE IF EXISTS `AuthItemChild`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AuthItemChild`
--

LOCK TABLES `AuthItemChild` WRITE;
/*!40000 ALTER TABLE `AuthItemChild` DISABLE KEYS */;
/*!40000 ALTER TABLE `AuthItemChild` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `id_visitante` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `hora_ingreso` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  PRIMARY KEY (`id_bitacora`),
  KEY `fk_bitacora_id_libro_idx` (`id_libro`),
  KEY `fk_bitacora_id_visitante_idx` (`id_visitante`),
  CONSTRAINT `fk_bitacora_id_libro` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_bitacora_id_visitante` FOREIGN KEY (`id_visitante`) REFERENCES `visitantes` (`id_visitante`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
INSERT INTO `bitacora` VALUES (1,1,1,'01:21:00','01:23:00'),(2,1,1,'16:16:00','16:19:00');
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id_categorias` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categorias`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Matematicas'),(2,'Fisica'),(3,'Sociales'),(4,'Base de datos'),(5,'Analisis'),(6,'Arquitectura'),(7,'Juegos');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fotocopia`
--

DROP TABLE IF EXISTS `fotocopia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fotocopia` (
  `id_fotocopia` int(11) NOT NULL AUTO_INCREMENT,
  `id_visitante` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_fotocopia`),
  KEY `fk_fotocopia_id_libro_idx` (`id_libro`),
  KEY `fk_fotocopia_id_visitante_idx` (`id_visitante`),
  CONSTRAINT `fk_fotocopia_id_libro` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_fotocopia_id_visitante` FOREIGN KEY (`id_visitante`) REFERENCES `visitantes` (`id_visitante`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fotocopia`
--

LOCK TABLES `fotocopia` WRITE;
/*!40000 ALTER TABLE `fotocopia` DISABLE KEYS */;
INSERT INTO `fotocopia` VALUES (1,1,1,20,'2018-10-30'),(2,1,1,2,'2018-10-31');
/*!40000 ALTER TABLE `fotocopia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libros`
--

DROP TABLE IF EXISTS `libros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_libro` varchar(255) NOT NULL,
  `editorial` varchar(45) DEFAULT NULL,
  `autor` varchar(45) NOT NULL,
  `categoria` int(11) NOT NULL,
  `pais_autor` int(11) DEFAULT NULL,
  `numero_paginas` int(11) DEFAULT NULL,
  `año_edicion` varchar(55) DEFAULT NULL,
  `imagen` blob,
  `descripcion` longtext,
  `estado` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_libro`),
  KEY `fk_libros_categoria_idx` (`categoria`),
  KEY `fk_libros_pais_idx` (`pais_autor`),
  CONSTRAINT `fk_libros_categoria` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id_categorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_libros_pais` FOREIGN KEY (`pais_autor`) REFERENCES `pais` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libros`
--

LOCK TABLES `libros` WRITE;
/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` VALUES (1,'7 votos','La Red','La Red',2,1,94,'2015','','',1),(5,'prueba2','','autor',2,1,NULL,'0000-00-00','','',0),(6,'prueba 3','','autor',2,1,NULL,'0000-00-00','','',0),(7,'nonono','Santillana','Dumas',4,4,160,'0000-00-00','','dgfhdggh',1),(8,'El Principito','Santillana','paulho coelho',6,5,140,'0000-00-00','','sdfsddf',1),(9,'Los ojos de mi princesa','graw hill','jose',5,4,1000,'0000-00-00','','werwrwerwerf',1),(10,'monos','la villa','Merkell',7,3,23,'2018','','',0);
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `multas`
--

DROP TABLE IF EXISTS `multas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `multas` (
  `id_multas` int(11) NOT NULL AUTO_INCREMENT,
  `id_visitante` int(11) NOT NULL,
  `monto` double NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_multas`),
  KEY `fk_multas_id_visitante_idx` (`id_visitante`),
  CONSTRAINT `fk_multas_id_visitante` FOREIGN KEY (`id_visitante`) REFERENCES `visitantes` (`id_visitante`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `multas`
--

LOCK TABLES `multas` WRITE;
/*!40000 ALTER TABLE `multas` DISABLE KEYS */;
INSERT INTO `multas` VALUES (2,1,22,'lu');
/*!40000 ALTER TABLE `multas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ocupacion`
--

DROP TABLE IF EXISTS `ocupacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ocupacion` (
  `id_ocupacion` int(11) NOT NULL AUTO_INCREMENT,
  `ocupacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ocupacion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ocupacion`
--

LOCK TABLES `ocupacion` WRITE;
/*!40000 ALTER TABLE `ocupacion` DISABLE KEYS */;
INSERT INTO `ocupacion` VALUES (1,'Estudiante');
/*!40000 ALTER TABLE `ocupacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pais`
--

DROP TABLE IF EXISTS `pais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pais` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pais`
--

LOCK TABLES `pais` WRITE;
/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
INSERT INTO `pais` VALUES (1,'Estados Unidos'),(3,'Guatemala'),(4,'Mexico'),(5,'EEUU');
/*!40000 ALTER TABLE `pais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestamos`
--

DROP TABLE IF EXISTS `prestamos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_libro` int(11) NOT NULL,
  `id_visitante` int(11) NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_maxima` date NOT NULL,
  `fecha_devolucion` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_prestamo`),
  KEY `fk_prestamos_codigo_libro_idx` (`codigo_libro`),
  KEY `fk_prestamos_id_visitante_idx` (`id_visitante`),
  CONSTRAINT `fk_prestamos_codigo_libro` FOREIGN KEY (`codigo_libro`) REFERENCES `libros` (`id_libro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_prestamos_id_visitante` FOREIGN KEY (`id_visitante`) REFERENCES `visitantes` (`id_visitante`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestamos`
--

LOCK TABLES `prestamos` WRITE;
/*!40000 ALTER TABLE `prestamos` DISABLE KEYS */;
INSERT INTO `prestamos` VALUES (1,1,1,'2018-10-31','2018-11-01','2018-11-01',0),(2,1,4,'2018-10-31','2018-11-01','2018-10-31',1);
/*!40000 ALTER TABLE `prestamos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id_tags` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tags` varchar(255) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_tags`),
  KEY `fk_tags_id_categoria_idx` (`id_categoria`),
  CONSTRAINT `fk_tags_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categorias`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'fisica cuantica',2),(2,'fisica cuantica',2),(4,'Tipens01',2),(5,'12345678',2),(6,'lola1234',3),(7,'algoalgo',2),(8,'AEH12',4),(9,'otromas',2),(10,'otromasss',5),(11,'infantiles',7);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `regDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(90) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (108,'melanie','19eddb45b28bb407d6e904c2a3d75e48c67ef092','','admin'),(110,'prueba','40bd001563085fc35165329ea1ff5c5ecbdbbeef','','subscrite'),(111,'angel','40bd001563085fc35165329ea1ff5c5ecbdbbeef','','admin'),(112,'admin','d033e22ae348aeb5660fc2140aec35850c4da997','','admin'),(113,'luis','40bd001563085fc35165329ea1ff5c5ecbdbbeef','','admin'),(115,'byu','40bd001563085fc35165329ea1ff5c5ecbdbbeef','byu@gmail.com','admin'),(116,'andres','8cb2237d0679ca88db6464eac60da96345513964','andres@gmail.com','admin');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitantes`
--

DROP TABLE IF EXISTS `visitantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitantes` (
  `id_visitante` int(25) NOT NULL AUTO_INCREMENT,
  `identificador` varchar(45) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` int(8) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `ocupacion` int(11) DEFAULT NULL,
  `institucion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_visitante`),
  KEY `fk_clientes_ocupacion_idx` (`ocupacion`),
  CONSTRAINT `fk_clientes_ocupacion` FOREIGN KEY (`ocupacion`) REFERENCES `ocupacion` (`id_ocupacion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitantes`
--

LOCK TABLES `visitantes` WRITE;
/*!40000 ALTER TABLE `visitantes` DISABLE KEYS */;
INSERT INTO `visitantes` VALUES (1,'1190146712','Angel Leonel','Torre Lopez','Gualan, Zacapa',41506904,'1987-08-24',1,'Universidad Mariano Galves de Guatemala'),(2,'1190145733','Byron Rubén','Vásquez Orellana','Zacapa, La Fragua Zacapa',31322917,'1995-04-25',1,'Mariano Gálvez'),(3,'1190128949','Jeffrey Danilo','Paiz Morales','San Jorge, Zacapa',53293616,'1993-07-22',1,'Universidad Mariano Galvez'),(4,'11901310177','Fredy Abel','Yol Pescado','Santa Cruz Rio Hondo Zacapa',40204576,'1989-09-18',1,'Universidad Mariano Galvez');
/*!40000 ALTER TABLE `visitantes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-01  3:23:58
