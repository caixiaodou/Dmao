-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 07 月 21 日 22:06
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `caixiaodou`
--

-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

CREATE TABLE `manager` (
  `ManagerId` int(255) NOT NULL,
  `ManagerPassword` varchar(30) NOT NULL,
  `ManagerName` varchar(30) NOT NULL,
  PRIMARY KEY  (`ManagerId`),
  KEY `index_ManagerName` (`ManagerName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `manager`
--

