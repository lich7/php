# Host: localhost  (Version: 5.0.22-community-nt)
# Date: 2018-10-15 11:04:05
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES gb2312 */;

#
# Structure for table "course"
#

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(11) NOT NULL auto_increment,
  `cid` char(6) NOT NULL,
  `cname` varchar(30) default NULL,
  `credit` decimal(3,1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

#
# Data for table "course"
#

INSERT INTO `course` VALUES (1,'000001','C����',5.0),(2,'000002','���������',2.5),(3,'000003','�������',1.5),(4,'000004','Oracle',6.0),(5,'000005','PHP',2.0);

#
# Structure for table "sc"
#

DROP TABLE IF EXISTS `sc`;
CREATE TABLE `sc` (
  `sid` char(10) NOT NULL default '',
  `cid` char(6) NOT NULL default '',
  `scores` int(11) default NULL,
  PRIMARY KEY  (`sid`,`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

#
# Data for table "sc"
#

/*!40000 ALTER TABLE `sc` DISABLE KEYS */;
INSERT INTO `sc` VALUES ('0000000001','000001',88),('0000000001','000002',78),('0000000001','000003',55),('0000000002','000001',65),('0000000002','000002',44),('0000000003','000001',65),('0000000003','000002',55),('0000000004','000001',77),('0000000004','000002',85),('0000000005','000001',67),('0000000005','000002',82),('0000000006','000001',66),('0000000006','000002',95),('0000000007','000001',33),('0000000007','000002',75),('0000000008','000001',90),('0000000008','000002',69),('0000000009','000001',91),('0000000009','000002',39),('0000000010','000001',71),('0000000010','000002',89),('0000000011','000001',71),('0000000011','000002',80),('0000000012','000001',62),('0000000012','000002',64),('0000000013','000001',72),('0000000013','000002',60),('0000000014','000001',86),('0000000014','000002',79),('0000000015','000001',53),('0000000015','000002',83);
/*!40000 ALTER TABLE `sc` ENABLE KEYS */;

#
# Structure for table "student"
#

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `Sid` char(10) NOT NULL,
  `sname` varchar(30) default NULL,
  `sex` bit(1) default NULL,
  `birthday` date default NULL,
  `specialty` varchar(30) default NULL,
  `Ascores` decimal(4,1) default NULL,
  PRIMARY KEY  (`Sid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

#
# Data for table "student"
#

/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('0000000001','����',b'0','1996-05-24','�������',444.0),('0000000002','����',b'1','1999-09-09','���缼��',550.0),('0000000003','����',b'1','1999-04-30','�������',333.0),('0000000004','���',b'0','1999-07-09','���缼��',345.0),('0000000005','���',b'0','1995-03-14','�������',456.0),('0000000006','��',b'0','1996-11-11','�������',123.0),('0000000007','�Ӷ�',b'1','1992-02-21','���缼��',233.0),('0000000008','�ŷ�',b'1','1999-03-06','�������',335.0),('0000000009','����',b'1','1999-07-15','���缼��',564.0),('0000000010','����',b'1','1997-06-13','�������',453.0),('0000000011','�ܲ�',b'1','1996-12-22','���缼��',455.0),('0000000012','˾��ܲ',b'1','1995-02-14','�������',465.0),('0000000013','�����',b'1','1996-11-23','���缼��',457.0),('0000000014','����',b'0','1994-06-16','�������',545.0),('0000000015','���Ѿ�',b'0','1995-09-18','���缼��',123.0);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
