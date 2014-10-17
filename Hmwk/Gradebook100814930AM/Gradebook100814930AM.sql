CREATE DATABASE  IF NOT EXISTS `48075` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `48075`;
-- MySQL dump 10.13  Distrib 5.6.11, for Win32 (x86)
--
-- Host: localhost    Database: 48075
-- ------------------------------------------------------
-- Server version	5.6.11

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
-- Table structure for table `entity_assignments`
--

DROP TABLE IF EXISTS `entity_assignments_sb2030968`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_assignments_sb2030968` (
  `ass_id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `points_possible` tinyint(3) DEFAULT NULL,
  `weight` tinyint(3) DEFAULT NULL,
  `description` longtext,
  `start_date` date DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  PRIMARY KEY (`ass_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_assignments`
--


/*!40000 ALTER TABLE `entity_assignments_sb2030968` DISABLE KEYS */;
/*!40000 ALTER TABLE `entity_assignments_sb2030968` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_class`
--

DROP TABLE IF EXISTS `entity_class_sb2030968`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_class_sb2030968` (
  `section_id` int(10) NOT NULL,
  `time` time DEFAULT NULL,
  `bldg` tinyint(3) DEFAULT NULL,
  `day_of_Week` tinyint(3) DEFAULT NULL,
  `room` smallint(5) DEFAULT NULL,
  `semester` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_class`
--


/*!40000 ALTER TABLE `entity_class_sb2030968` DISABLE KEYS */;
/*!40000 ALTER TABLE `entity_class_sb2030968` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_course`
--

DROP TABLE IF EXISTS `entity_course_sb2030968`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_course_sb2030968` (
  `course_id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `number` tinyint(3) DEFAULT NULL,
  `series_letter` char(1) DEFAULT NULL,
  `short_description` text,
  `description` mediumtext,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_course`
--


/*!40000 ALTER TABLE `entity_course_sb2030968` DISABLE KEYS */;
/*!40000 ALTER TABLE `entity_course_sb2030968` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_instructor`
--

DROP TABLE IF EXISTS `entity_instructor_sb2030968`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_instructor_sb2030968` (
  `instructor_id` int(10) NOT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email_address` varchar(30) DEFAULT NULL,
  `area_code` smallint(5) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `office_bldg_id` tinyint(3) DEFAULT NULL,
  `office_number` smallint(5) DEFAULT NULL,
  `department_id` tinyint(3) DEFAULT NULL,
  `discipline_id` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`instructor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_instructor`
--


/*!40000 ALTER TABLE `entity_instructor_sb2030968` DISABLE KEYS */;
/*!40000 ALTER TABLE `entity_instructor_sb2030968` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_student`
--

DROP TABLE IF EXISTS `entity_student_sb2030968`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity_student_sb2030968` (
  `student_id` int(10) NOT NULL COMMENT 'Primary Key',
  `first_name` varchar(15) DEFAULT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email_address` varchar(30) DEFAULT NULL,
  `area_code` smallint(5) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `major` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_student`
--


/*!40000 ALTER TABLE `entity_student_sb2030968` DISABLE KEYS */;
/*!40000 ALTER TABLE `entity_student_sb2030968` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enum_bldg`
--

DROP TABLE IF EXISTS `enum_bldg_sb2030968`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum_bldg_sb2030968` (
  `bldg_id` tinyint(3) NOT NULL,
  `building` varchar(20) DEFAULT NULL,
  `mneumonic` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`bldg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enum_bldg`
--


/*!40000 ALTER TABLE `enum_bldg_sb2030968` DISABLE KEYS */;
INSERT INTO `enum_bldg_sb2030968` VALUES (4,'Business Education','BE'),(12,'Math and Science','MAT/SCI');
/*!40000 ALTER TABLE `enum_bldg_sb2030968` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enum_department`
--

DROP TABLE IF EXISTS `enum_department_sb2030968`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum_department_sb2030968` (
  `dept_id` tinyint(3) NOT NULL,
  `department` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enum_department`
--


/*!40000 ALTER TABLE `enum_department_sb2030968` DISABLE KEYS */;
INSERT INTO `enum_department_sb2030968` VALUES (1,'Business Info Systems'),(2,'English');
/*!40000 ALTER TABLE `enum_department_sb2030968` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enum_discipline`
--

DROP TABLE IF EXISTS `enum_discipline_sb2030968`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum_discipline_sb2030968` (
  `disc_id` tinyint(3) NOT NULL,
  `discipline` varchar(25) DEFAULT NULL,
  `menumonic` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`disc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enum_discipline`
--


/*!40000 ALTER TABLE `enum_discipline_sb2030968` DISABLE KEYS */;
INSERT INTO `enum_discipline_sb2030968` VALUES (1,'Computer Science','CSC'),(2,'Basket Weaving','BSW');
/*!40000 ALTER TABLE `enum_discipline_sb2030968` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_class_assignments`
--

DROP TABLE IF EXISTS `xref_class_assignments_sb2030968`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_class_assignments_sb2030968` (
  `xref_class_ass_id` int(10) NOT NULL,
  `class_id` int(10) DEFAULT NULL,
  `assignment_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_class_ass_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_class_assignments`
--


/*!40000 ALTER TABLE `xref_class_assignments_sb2030968` DISABLE KEYS */;
/*!40000 ALTER TABLE `xref_class_assignments_sb2030968` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_class_course`
--

DROP TABLE IF EXISTS `xref_class_course_sb2030968`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_class_course_sb2030968` (
  `xref_class_course` int(10) NOT NULL,
  `class_id` int(10) DEFAULT NULL,
  `course_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_class_course`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_class_course`
--


/*!40000 ALTER TABLE `xref_class_course_sb2030968` DISABLE KEYS */;
/*!40000 ALTER TABLE `xref_class_course_sb2030968` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_instr_class`
--

DROP TABLE IF EXISTS `xref_instr_class_sb2030968`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_instr_class_sb2030968` (
  `xref_instr_class` int(10) NOT NULL,
  `instructor_id` int(10) DEFAULT NULL,
  `class_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_instr_class`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_instr_class`
--


/*!40000 ALTER TABLE `xref_instr_class_sb2030968` DISABLE KEYS */;
/*!40000 ALTER TABLE `xref_instr_class_sb2030968` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xref_student_assignments`
--

DROP TABLE IF EXISTS `xref_student_assignments_sb2030968`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xref_student_assignments_sb2030968` (
  `xref_stu_ass` int(10) NOT NULL,
  `student_id` int(10) DEFAULT NULL,
  `assignment_id` int(10) DEFAULT NULL,
  `score` tinyint(3) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `comments` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`xref_stu_ass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xref_student_assignments`
--


/*!40000 ALTER TABLE `xref_student_assignments_sb2030968` DISABLE KEYS */;
/*!40000 ALTER TABLE `xref_student_assignments_sb2030968` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-08  9:32:05
