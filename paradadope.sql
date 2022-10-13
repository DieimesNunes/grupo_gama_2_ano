-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Out-2022 às 14:30
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `paradadope`
--
CREATE DATABASE IF NOT EXISTS `paradadope` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `paradadope`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_login`
--

DROP TABLE IF EXISTS `adm_login`;
CREATE TABLE IF NOT EXISTS `adm_login` (
  `id_login_adm` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `senha` varchar(300) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_login_adm`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(300) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `produto`) VALUES
(1, 'TÊNIS ULTRA 4DFWD'),
(2, 'TÊNIS ADIZERO ADIOS PRO 3'),
(3, 'TÊNIS NMD_R1'),
(4, 'TÊNIS FORUM BOLD'),
(5, 'TÊNIS SUPERSTAR'),
(6, 'TENIS W NIKE REACT INFINITY RUN FK 3'),
(7, 'Tênis Nike Air Max 90 SE Feminino'),
(8, 'TENIS NIKE REVOLUTION 6'),
(9, 'TENIS W NSW AF1 AF1'),
(10, 'TENIS W NIKE CRATER IMPACT');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
