-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/09/2024 às 10:03
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `educatech`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadaluno`
--

CREATE TABLE `cadaluno` (
  `ID` int(255) NOT NULL COMMENT 'Linha para identificação do usuário',
  `NOME` varchar(255) NOT NULL COMMENT 'nome do usuário',
  `EMAIL` varchar(255) NOT NULL COMMENT 'email do usuário',
  `SENHA` varchar(255) NOT NULL COMMENT 'senha do usuário',
  `CPF` int(11) NOT NULL COMMENT 'CPF válido informado pelo usuário para emissão de certificado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Tabela de cadastro de alunos para certificado';

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadaluno`
--
ALTER TABLE `cadaluno`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadaluno`
--
ALTER TABLE `cadaluno`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Linha para identificação do usuário';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
