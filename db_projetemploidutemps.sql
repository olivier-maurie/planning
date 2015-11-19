-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: projet_emploidutemps
-- ------------------------------------------------------
-- Server version	5.6.26-log

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
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'ELANKUMARAN Tharsan','admin@novy.comg','adminguigfdgdg'),(3,'ghj','gdgfgdfgjdfkgd','1345'),(4,'francois','fdgdfg@h.fr','123456'),(5,'','','');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ecole`
--

DROP TABLE IF EXISTS `ecole`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ecole` (
  `idecole` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ecole` varchar(45) NOT NULL,
  PRIMARY KEY (`idecole`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ecole`
--

LOCK TABLES `ecole` WRITE;
/*!40000 ALTER TABLE `ecole` DISABLE KEYS */;
INSERT INTO `ecole` VALUES (1,'Ingesup'),(2,'Lim\'Art'),(3,'ESCCA'),(4,'Infosup'),(5,'Estei');
/*!40000 ALTER TABLE `ecole` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etudiant` (
  `idetudiant` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `id_promotion` int(11) NOT NULL,
  `id_specialite` int(11) DEFAULT NULL,
  PRIMARY KEY (`idetudiant`),
  KEY `promotion_etudiant_idx` (`id_promotion`),
  KEY `specialisation_etudiant_idx` (`id_specialite`),
  CONSTRAINT `promotion_etudiant` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`idpromotion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `specialisation_etudiant` FOREIGN KEY (`id_specialite`) REFERENCES `specialite` (`idspecialite`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiant`
--

LOCK TABLES `etudiant` WRITE;
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
INSERT INTO `etudiant` VALUES (1,'LAFORT ','jean@novy.com','123456',3,1),(3,'Yola','yola@novy.com','1234567',3,2),(8,'Gy','f@noy.com','154',3,1);
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matiere` (
  `idmatiere` int(11) NOT NULL AUTO_INCREMENT,
  `nom_matiere` varchar(45) NOT NULL,
  `credit` int(3) NOT NULL,
  `heure_annee` time NOT NULL,
  `heure_fait` time DEFAULT '00:00:00',
  `evolution` float NOT NULL DEFAULT '0',
  `indice` float NOT NULL,
  `id_promotion` int(11) NOT NULL,
  `id_specialite` int(11) DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmatiere`),
  KEY `promotion_matiere_idx` (`id_promotion`),
  KEY `specialite_matiere_idx` (`id_specialite`),
  KEY `prof_matiere_idx` (`id_prof`),
  CONSTRAINT `prof_matiere` FOREIGN KEY (`id_prof`) REFERENCES `professeur` (`idprofesseur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `promotion_matiere` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`idpromotion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `specialite_matiere` FOREIGN KEY (`id_specialite`) REFERENCES `specialite` (`idspecialite`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matiere`
--

LOCK TABLES `matiere` WRITE;
/*!40000 ALTER TABLE `matiere` DISABLE KEYS */;
INSERT INTO `matiere` VALUES (1,'ITIL',3,'35:00:00','06:15:00',0,4,3,NULL,1),(2,'C#',4,'35:00:00','00:00:00',0,6,3,1,1),(3,'Swift',4,'35:00:00','00:00:00',0,6,3,1,1),(4,'Python',3,'35:00:00','00:00:00',20,5,3,1,1);
/*!40000 ALTER TABLE `matiere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matiere_cours`
--

DROP TABLE IF EXISTS `matiere_cours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matiere_cours` (
  `idmatiere_cours` int(11) NOT NULL AUTO_INCREMENT,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `heure_cours` time DEFAULT NULL,
  `salle` varchar(45) DEFAULT NULL,
  `id_matiere` int(11) NOT NULL,
  `id_promotion` int(11) NOT NULL,
  `id_specialite` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmatiere_cours`),
  KEY `matiere_matierencours_idx` (`id_matiere`),
  KEY `promotion_matiereencours_idx` (`id_promotion`),
  KEY `specialite_matiereencours_idx` (`id_specialite`),
  CONSTRAINT `matiere_matierencours` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`idmatiere`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `promotion_matiereencours` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`idpromotion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `specialite_matiereencours` FOREIGN KEY (`id_specialite`) REFERENCES `specialite` (`idspecialite`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matiere_cours`
--

LOCK TABLES `matiere_cours` WRITE;
/*!40000 ALTER TABLE `matiere_cours` DISABLE KEYS */;
INSERT INTO `matiere_cours` VALUES (1,'2015-10-29 08:45:00','2015-10-29 12:15:00','00:00:00','G2',1,1,1),(2,'2015-11-02 08:45:00','2015-11-02 12:15:00','00:00:00','G1',2,1,1),(3,'2015-11-03 08:45:00','2015-11-03 12:15:00','00:00:00','G3',3,1,1),(4,'2015-11-09 08:45:00','2015-11-09 12:15:00','00:00:00','B2',3,1,1),(5,'2015-11-02 13:15:00','2015-11-02 17:15:00','00:00:00','B4',2,1,1),(6,'2015-11-17 13:15:00','2015-11-17 17:15:00','00:00:00','B3',1,1,1),(7,'2015-11-23 08:45:00','2015-11-23 12:15:00','00:00:00','C4',2,1,1),(8,'2015-11-26 13:15:00','2015-11-26 15:45:00','00:00:00','F1',3,1,1);
/*!40000 ALTER TABLE `matiere_cours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professeur` (
  `idprofesseur` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idprofesseur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professeur`
--

LOCK TABLES `professeur` WRITE;
/*!40000 ALTER TABLE `professeur` DISABLE KEYS */;
INSERT INTO `professeur` VALUES (1,'MONFORT Robert','robert@novy.com','robert');
/*!40000 ALTER TABLE `professeur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projet`
--

DROP TABLE IF EXISTS `projet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projet` (
  `idprojet` int(11) NOT NULL AUTO_INCREMENT,
  `nom_projet` varchar(45) NOT NULL,
  `nb_semaine` int(11) NOT NULL,
  `evolution` float NOT NULL DEFAULT '0',
  `coefficiant` int(11) NOT NULL,
  `indice` float NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `id_promotion` int(11) NOT NULL,
  `id_specialite` int(11) DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  PRIMARY KEY (`idprojet`),
  KEY `promotion_projet_idx` (`id_promotion`),
  KEY `specialite_projet_idx` (`id_specialite`),
  KEY `prof_projet_idx` (`id_prof`),
  CONSTRAINT `prof_projet` FOREIGN KEY (`id_prof`) REFERENCES `professeur` (`idprofesseur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `promotion_projet` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`idpromotion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `specialite_projet` FOREIGN KEY (`id_specialite`) REFERENCES `specialite` (`idspecialite`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projet`
--

LOCK TABLES `projet` WRITE;
/*!40000 ALTER TABLE `projet` DISABLE KEYS */;
INSERT INTO `projet` VALUES (1,'projet_C#',3,0,0,4,'2015-11-15 08:45:00','2015-12-04 08:45:00',3,1,1);
/*!40000 ALTER TABLE `projet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotion` (
  `idpromotion` int(11) NOT NULL AUTO_INCREMENT,
  `annee_promotion` varchar(45) NOT NULL,
  `id_ecole` int(11) NOT NULL,
  PRIMARY KEY (`idpromotion`),
  KEY `nomecole_idx` (`id_ecole`),
  CONSTRAINT `nomecole` FOREIGN KEY (`id_ecole`) REFERENCES `ecole` (`idecole`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion`
--

LOCK TABLES `promotion` WRITE;
/*!40000 ALTER TABLE `promotion` DISABLE KEYS */;
INSERT INTO `promotion` VALUES (1,'B1',1),(2,'B2',1),(3,'B3',1),(4,'M1',1),(5,'M2',1),(6,'Niveau 1',2),(7,'Niveau 2',2);
/*!40000 ALTER TABLE `promotion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialite`
--

DROP TABLE IF EXISTS `specialite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialite` (
  `idspecialite` int(11) NOT NULL AUTO_INCREMENT,
  `nom_specialite` varchar(45) NOT NULL,
  `id_promotion` int(11) NOT NULL,
  PRIMARY KEY (`idspecialite`),
  KEY `promotion_specialite_idx` (`id_promotion`),
  CONSTRAINT `promotion_specialite` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`idpromotion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialite`
--

LOCK TABLES `specialite` WRITE;
/*!40000 ALTER TABLE `specialite` DISABLE KEYS */;
INSERT INTO `specialite` VALUES (1,'developpement',3),(2,'reseaux',3);
/*!40000 ALTER TABLE `specialite` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-19 20:43:59
