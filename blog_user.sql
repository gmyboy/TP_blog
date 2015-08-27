-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 08 月 27 日 09:16
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `blog_user`
--

CREATE TABLE IF NOT EXISTS `blog_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(32) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `email` varchar(100) NOT NULL COMMENT '用户邮箱',
  `mobile` varchar(11) DEFAULT NULL COMMENT '联系方式(手机)',
  `gender` tinyint(1) DEFAULT NULL COMMENT '性别',
  `age` tinyint(3) DEFAULT NULL COMMENT '年龄',
  `intro` varchar(255) DEFAULT NULL COMMENT '自我介绍',
  `rank` int(11) NOT NULL COMMENT '用户等级',
  `head` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户状态',
  `login_time` int(11) DEFAULT NULL,
  `login_ip` varchar(30) DEFAULT NULL COMMENT '上次登录ip',
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `blog_user`
--

INSERT INTO `blog_user` (`id`, `username`, `password`, `email`, `mobile`, `gender`, `age`, `intro`, `rank`, `head`, `status`, `login_time`, `login_ip`, `add_time`) VALUES
(8, 'gmyboy', 'e10adc3949ba59abbe56e057f20f883e', '123@qq.com', NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 1440663832),
(10, '123', '202cb962ac59075b964b07152d234b70', 'gmyboy@qq.com', NULL, NULL, NULL, NULL, 0, NULL, 1, NULL, NULL, 1440665065);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
