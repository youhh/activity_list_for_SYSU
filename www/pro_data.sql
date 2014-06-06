-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014 �?06 �?06 �?17:41
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `pro_data`
--
CREATE DATABASE IF NOT EXISTS `pro_data` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pro_data`;

-- --------------------------------------------------------

--
-- 表的结构 `classactivity`
--

CREATE TABLE IF NOT EXISTS `classactivity` (
  `CAid` int(11) NOT NULL AUTO_INCREMENT,
  `CAname` varchar(255) NOT NULL,
  `CRname` varchar(255) NOT NULL,
  `CAcontent` varchar(255) NOT NULL,
  PRIMARY KEY (`CAid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `Cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Cname` varchar(255) NOT NULL,
  `CRname` varchar(255) NOT NULL,
  `Cdate` varchar(255) NOT NULL,
  `Ctime` int(11) NOT NULL,
  `Cnum` int(11) NOT NULL,
  `Academy` varchar(255) NOT NULL,
  `Major` varchar(255) NOT NULL,
  `Grade` varchar(255) NOT NULL,
  PRIMARY KEY (`Cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`Cid`, `Cname`, `CRname`, `Cdate`, `Ctime`, `Cnum`, `Academy`, `Major`, `Grade`) VALUES
(4, '系统分析与设计', 'B302', '2', 7, 3, '软件学院', '计算机应用', '2011'),
(5, '软件测试', 'B302', '3', 7, 3, '软件学院', '计算机应用', '2011'),
(6, '数据挖掘', 'A202', '4', 9, 3, '软件学院', '计算机应用', '2011');

-- --------------------------------------------------------

--
-- 表的结构 `give`
--

CREATE TABLE IF NOT EXISTS `give` (
  `Tid` int(11) NOT NULL,
  `Cid` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `give`
--

INSERT INTO `give` (`Tid`, `Cid`, `id`) VALUES
(16, 4, 2),
(22, 5, 3),
(15, 6, 4);

-- --------------------------------------------------------

--
-- 表的结构 `joinin`
--

CREATE TABLE IF NOT EXISTS `joinin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Uid` int(11) NOT NULL,
  `CAid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `Tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Tname` varchar(255) NOT NULL,
  PRIMARY KEY (`Tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`Tid`, `Tname`) VALUES
(1, '李文军'),
(2, '谢曼华'),
(3, '谭英耀'),
(4, '常会友'),
(5, '朝红阳'),
(6, '冯剑琳'),
(7, '温武少'),
(8, '孙伟'),
(9, '余阳'),
(10, '吴向军'),
(11, '高成英'),
(12, '刘宁'),
(13, '任江涛'),
(14, '骆伟祺'),
(15, '潘炎'),
(16, '潘茂林'),
(17, '万海'),
(18, '孙雪冬'),
(19, '郑贵锋'),
(20, '曾坤'),
(21, '王青'),
(22, '王欣明'),
(23, 'Juan Rojas');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Uname` varchar(255) NOT NULL,
  `Upwd` varchar(255) NOT NULL,
  `Grade` varchar(255) NOT NULL,
  `Academy` varchar(255) NOT NULL,
  `Major` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`Uid`, `Uname`, `Upwd`, `Grade`, `Academy`, `Major`) VALUES
(2, '11331335', '06297187c71c2d98272ffbf32e6ccb09', '2011', '软件学院', '计算机应用');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
