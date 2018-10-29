-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: www.iimt.me    Database: disney
-- ------------------------------------------------------
-- Server version	5.5.50-log

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
-- Table structure for table `activity`
--

CREATE DATABASE IF NOT EXISTS `disney` DEFAULT CHARSET utf8 COLLATE utf8_general_ci

use `disney`

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `content` varchar(100) DEFAULT NULL,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `activity_id_uindex` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='动态';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity`
--

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
/*!40000 ALTER TABLE `activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL COMMENT '管理员名',
  `pass` varchar(32) NOT NULL COMMENT '管理员密码',
  `lltime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后一次登录时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `name`, `pass`, `lltime`) VALUES (1,'admin','25d55ad283aa400af464c76d713c07ad','2018-10-28 05:58:16'),(2,'test','25d55ad283aa400af464c76d713c07ad','2018-10-28 07:53:43');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cate`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cate_id_uindex` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='课程分类';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cate`
--

LOCK TABLES `cate` WRITE;
/*!40000 ALTER TABLE `cate` DISABLE KEYS */;
/*!40000 ALTER TABLE `cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diploma`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diploma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `img` varchar(100) NOT NULL COMMENT '证书图片地址',
  PRIMARY KEY (`id`),
  UNIQUE KEY `diploma_id_uindex` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='证书';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diploma`
--

LOCK TABLES `diploma` WRITE;
/*!40000 ALTER TABLE `diploma` DISABLE KEYS */;
/*!40000 ALTER TABLE `diploma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lesson`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lesson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL COMMENT '课名',
  `sid` int(11) NOT NULL COMMENT '所属课程id',
  PRIMARY KEY (`id`),
  UNIQUE KEY `lesson_id_uindex` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='课单位';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lesson`
--

LOCK TABLES `lesson` WRITE;
/*!40000 ALTER TABLE `lesson` DISABLE KEYS */;
/*!40000 ALTER TABLE `lesson` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mood`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` varchar(200) NOT NULL,
  `likes` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mood_id_uindex` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='学习心情';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mood`
--

LOCK TABLES `mood` WRITE;
/*!40000 ALTER TABLE `mood` DISABLE KEYS */;
/*!40000 ALTER TABLE `mood` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deadline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) DEFAULT NULL COMMENT '课程ID',
  `lids` varchar(100) DEFAULT NULL COMMENT '该时间内计划的所有课id',
  PRIMARY KEY (`id`),
  UNIQUE KEY `plan_id_uindex` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan`
--

LOCK TABLES `plan` WRITE;
/*!40000 ALTER TABLE `plan` DISABLE KEYS */;
/*!40000 ALTER TABLE `plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `score`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `iq` int(11) NOT NULL DEFAULT '2' COMMENT '智商',
  `cq` int(11) NOT NULL DEFAULT '2' COMMENT '创意商',
  `eq` int(11) NOT NULL DEFAULT '2' COMMENT '情商',
  `sq` int(11) NOT NULL DEFAULT '2' COMMENT '快乐商',
  `hq` int(11) NOT NULL DEFAULT '2' COMMENT '健康商',
  PRIMARY KEY (`id`),
  UNIQUE KEY `score_id_uindex` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='成绩';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `score`
--

LOCK TABLES `score` WRITE;
/*!40000 ALTER TABLE `score` DISABLE KEYS */;
/*!40000 ALTER TABLE `score` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cover` varchar(100) NOT NULL COMMENT '封面',
  PRIMARY KEY (`id`),
  UNIQUE KEY `subject_id_uindex` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='课程';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `token`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(32) NOT NULL,
  `expire` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `token_id_uindex` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='token表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `token`
--

LOCK TABLES `token` WRITE;
/*!40000 ALTER TABLE `token` DISABLE KEYS */;
/*!40000 ALTER TABLE `token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trainhis`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trainhis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `sids` varchar(10) DEFAULT '' COMMENT '课程id，3个，逗号分割',
  PRIMARY KEY (`id`),
  UNIQUE KEY `trainhis_id_uindex` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='课程历史';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trainhis`
--

LOCK TABLES `trainhis` WRITE;
/*!40000 ALTER TABLE `trainhis` DISABLE KEYS */;
/*!40000 ALTER TABLE `trainhis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL COMMENT '用户名',
  `pass` varchar(32) NOT NULL COMMENT '密码',
  `phone` varchar(12) DEFAULT '' COMMENT '手机号',
  `activite` int(11) DEFAULT '0' COMMENT '活跃度',
  `getlike` int(11) DEFAULT '0' COMMENT '获赞',
  `gender` int(11) DEFAULT '1' COMMENT '性别 男1 女0',
  `saying` text COMMENT '一句话介绍自己',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `user_id_uindex` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `pass`, `phone`, `activite`, `getlike`, `gender`, `saying`) VALUES (1,'5555','','',0,0,1,NULL),(2,'ipso','123456789','',0,0,0,'asfdsfdgfd');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userbuy`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userbuy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `sid` int(11) NOT NULL COMMENT '课程id',
  `btime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userbuy_id_uindex` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户购买表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userbuy`
--

LOCK TABLES `userbuy` WRITE;
/*!40000 ALTER TABLE `userbuy` DISABLE KEYS */;
/*!40000 ALTER TABLE `userbuy` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-28 21:07:32
