-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Maio-2023 às 04:21
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS `fatraca`;
CREATE DATABASE `fatraca`;
USE `fatraca`; 

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fatraca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fatraca_users`
--

CREATE TABLE `fatraca_users` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data_cadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `fatraca_users`
--

INSERT INTO `fatraca_users` (`id`, `nome`, `sobrenome`, `usuario`, `email`, `senha`, `celular`, `cpf`, `data_cadastro`) VALUES
(2, 'luis felipe ', 'oliveira francisco', 'luis ', 'luis.felipeoliveirafrancisco@gmail.com', '8e9c27263bd59d3c802a3baf36670ad8', '18996419356', '47584275850', '2023-05-09 12:01:01'),
(3, 'niedo', 'da silva', 'bobo', 'niedotroxa@hotmail.com', 'f2ad06fca5d5c8797fed17efc4585cff', '18999999999', '47474747473', '2023-05-09 12:31:03'),
(8, 'luis felipe oliveira', 'da silva', 'luis ', 'luis.felipeoliveirafrancisco@gmail.com', '4297f44b13955235245b2497399d7a93', '18123123123', '475.842.758', '2023-05-09 23:19:45');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fatraca_users`
--
ALTER TABLE `fatraca_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fatraca_users`
--
ALTER TABLE `fatraca_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
