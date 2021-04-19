-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19/04/2021 às 04:08
-- Versão do servidor: 5.7.31
-- Versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `gp`
--

DROP TABLE IF EXISTS `gp`;
CREATE TABLE IF NOT EXISTS `gp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeprojeto` varchar(220) NOT NULL,
  `datainicio` date NOT NULL,
  `datafim` date NOT NULL,
  `valorprojeto` int(200) NOT NULL,
  `risco` int(200) NOT NULL,
  `participantes` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `gp`
--

INSERT INTO `gp` (`id`, `nomeprojeto`, `datainicio`, `datafim`, `valorprojeto`, `risco`, `participantes`) VALUES
(16, 'EXEMPLO 01', '2021-01-01', '2021-02-02', 1500, 0, 'EXEMPLO'),
(17, 'EXEMPLO 02', '2021-04-01', '2021-04-18', 15000, 1, 'EXEMPLO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
