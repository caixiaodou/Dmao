-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 07 月 19 日 21:49
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
  `ManagerId` int(11) NOT NULL,
  `ManagerPassword` varchar(30) NOT NULL,
  `ManagerName` varchar(30) NOT NULL,
  PRIMARY KEY  (`ManagerId`),
  KEY `index_ManagerName` (`ManagerName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `manager`
--


-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE `order` (
  `OrderNumber` int(30) NOT NULL,
  `UserTel` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `ProductNumber` int(30) NOT NULL,
  `OrderAmount` int(30) NOT NULL,
  `OrderDate` date NOT NULL,
  `OrderTime` time NOT NULL,
  `OrderStatus` char(10) NOT NULL,
  PRIMARY KEY  (`OrderNumber`),
  KEY `index_ProductNumber` (`ProductNumber`),
  KEY `index_UserTel` (`UserTel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `order`
--

INSERT INTO `order` (`OrderNumber`, `UserTel`, `UserName`, `ProductNumber`, `OrderAmount`, `OrderDate`, `OrderTime`, `OrderStatus`) VALUES
(1111, 1111111, '11111111', 1111, 1111111, '0000-00-00', '00:11:11', '1111111');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `ProductNumber` int(30) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `ProductCharacter` text NOT NULL,
  `ProductInfo` text NOT NULL,
  `ProductWeigth` char(10) NOT NULL,
  `ProductOrigin` char(10) NOT NULL,
  `ProductPrice` char(10) NOT NULL,
  `ProductTime` char(10) NOT NULL,
  `ProductImg` varchar(255) NOT NULL,
  PRIMARY KEY  (`ProductNumber`),
  UNIQUE KEY `index_ProductName` (`ProductName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `product`
--


-- --------------------------------------------------------

--
-- 表的结构 `productkind`
--

CREATE TABLE `productkind` (
  `ProductNumber` char(20) NOT NULL,
  `ProductKind` char(5) NOT NULL,
  `ProductToday` char(5) NOT NULL,
  PRIMARY KEY  (`ProductNumber`),
  KEY `index_ProductKind` (`ProductKind`),
  KEY `index_ProductToday` (`ProductToday`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `productkind`
--


-- --------------------------------------------------------

--
-- 表的结构 `productquantity`
--

CREATE TABLE `productquantity` (
  `ProductNumber` char(20) NOT NULL,
  `ProductQuantity` int(30) NOT NULL,
  PRIMARY KEY  (`ProductNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `productquantity`
--


-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `UserTel` char(11) NOT NULL,
  `UserPassword` varchar(255) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Sex` char(3) default '保密',
  `Email` varchar(30) default NULL,
  PRIMARY KEY  (`UserTel`),
  KEY `index_UserName` (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `user`
--

INSERT INTO `user` (`UserTel`, `UserPassword`, `UserName`, `Sex`, `Email`) VALUES
('13660559156', '874ec17c93c3b3dafb6e5c833377de69711c540f', '冰冰', '保密', '11'),
('13660559157', '4809ff9c17561ee5cbf3e7dacd4ca798269d952d', '冰冰', '保密', '11'),
('13660559158', '87e33a0fd389ad9521f299dd8607b08a91524c6f', '冰冰', '保密', '11');
