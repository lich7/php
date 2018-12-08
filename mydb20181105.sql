# Host: localhost  (Version: 5.0.22-community-nt)
# Date: 2018-11-05 11:57:25
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "usertb"
#

DROP TABLE IF EXISTS `usertb`;
CREATE TABLE `usertb` (
  `Id` int(11) NOT NULL auto_increment,
  `userid` varchar(255) default NULL,
  `password` varchar(255) default NULL,
  `username` varchar(255) default NULL,
  `sex` bit(1) default NULL,
  `birthday` date default NULL,
  `education` varchar(255) default NULL,
  `hobby` varchar(255) default NULL,
  `suggestion` varchar(255) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "usertb"
#

INSERT INTO `usertb` VALUES (1,'aaa','123','张三',b'1','1999-09-09','大专','看电影,读书','没意见'),(2,'bbb','123','张红',b'0','1999-09-09','大专','看电影','没意见'),(3,'ccc','123','赵中河',b'1','1998-08-17','本科','看电影,读书',NULL),(4,'ddd','123','田天岩',b'1','1999-04-05','研究生','看电影,读书,旅游','没意见'),(5,'eee','123','黄晴',b'0','1998-12-26','初中','读书,旅游',NULL),(6,'fff','123','刘海',b'1','1988-04-05','本科','看电影,读书,旅游',NULL),(8,'ggg','123','李丽',b'0','1978-08-19','本科','读书,旅游',NULL),(9,'hhh','123','李飞鸿',b'1','1984-09-28','初中','看电影,读书,旅游','没意见'),(10,'iii','123','王昌明',b'1','1993-01-20','高中','读书,旅游',NULL),(12,'jjj','123','关晓晓',b'0','1994-11-22','本科','读书,旅游',NULL),(13,'kkk','123','田四海',b'1','1995-08-16','高中','看电影,读书,旅游',NULL),(14,'lll','123','龙啸天',b'1','2000-05-03','研究生','看电影,读书,旅游',NULL),(15,'mmm','123','吴思韵',b'0','2001-07-28','高中','读书,旅游','没意见'),(16,'nnn','123','张在获',b'1','2008-06-19','大专','看电影,旅游',NULL),(17,'ooo','123','红飞',b'1','1992-06-30','研究生','看电影,旅游',NULL),(19,'ppp','123','全胜',b'1','2011-12-16','高中','看电影,旅游',NULL),(21,'qqq','123','凌铃',b'0','2011-10-05','大专','看电影,旅游','没意见'),(22,'rrr','123','陈仁',b'1','2011-10-10','研究生','',''),(23,'sss','123','赵增敏',b'1','2005-08-11','大专','',''),(24,'ttt','123','吴思源',b'1','2003-02-02','大专','',''),(25,'uuu','123','钱多多',b'0','2007-10-05','大专','',''),(26,'vvv','123','金晶',b'0','2008-10-10','大专','','');
