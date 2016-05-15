-- CREATION DE LA BASE DE DONNE db_sharme 
DROP DATABASE IF EXISTS db_sharme; 
CREATE DATABASE db_sharme; 
USE db_sharme; 

-- CEATION DES TABLE
-- faut creer une base de donne du nom db_sharme 
-- autre option pour que celle soit creer sans votre assistance
-- rendez-vous dans le ficher ControllerConnexion.php dans la methode connecter
-- decommenter la ligne //$this->member->install();
-- essayer de connecter login-pass a la base de donnée sera crée a la premiere connection
-- ensuite recommenter la ligne $this->member->install();

-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2016 at 02:12 
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sharme`
--

-- --------------------------------------------------------

--
-- Table structure for table `T_MEMBER`
--

CREATE TABLE IF NOT EXISTS `T_MEMBER` (
  `MEMBER_ID` int(11) NOT NULL,
  `FIRSTNAME` varchar(100) NOT NULL,
  `LASTNAME` varchar(100) NOT NULL,
  `ADDRESS` varchar(200) DEFAULT NULL,
  `CODE_POSTAL` varchar(20) DEFAULT NULL,
  `TOWN` varchar(200) DEFAULT NULL,
  `PASSWORD` varchar(225) DEFAULT NULL,
  `PHONE_NUMBER` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `T_ADDRESS` (
 `street_address` VARCHAR(225) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL , 
 `street_address_other` VARCHAR(225) CHARACTER SET utf8 COLLATE utf8_bin NULL ,
 `city` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL , 
 `province` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL , 
 `country` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL , 
 `code_zip` VARCHAR(9) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL , 
 `id_address` SERIAL NOT NULL AUTO_INCREMENT ) ENGINE = InnoDB DEFAULT CHARSET=utf8;
 
--
-- Dumping data for table `T_MEMBER`
--

INSERT INTO `T_MEMBER` (`MEMBER_ID`, `FIRSTNAME`, `LASTNAME`, `ADDRESS`, `CODE_POSTAL`, `TOWN`, `PASSWORD`, `PHONE_NUMBER`, `EMAIL`) VALUES
(1, 'sharme', 'canada', '123 rue produits produit des champs', 'x8r 9s8', 'ville de montagne', '123456', '123-456-7890', 'sharme@gmail.com'),
(2, 'admin', 'admin', '123 rue produits produit des champs', 'x8r 9s8', 'ville de montagne', '123456', '123-456-7890', 'admin@admin.org'),
(3, 'sozer', 'kaizeurk', NULL, NULL, NULL, '123456', NULL, 'kaizeurk@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `T_MEMBER`
--
ALTER TABLE `T_MEMBER`
  ADD PRIMARY KEY (`MEMBER_ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `T_MEMBER`
--
ALTER TABLE `T_MEMBER`
  MODIFY `MEMBER_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
