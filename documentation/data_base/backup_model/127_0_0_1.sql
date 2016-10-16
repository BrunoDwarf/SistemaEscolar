-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Out-2016 às 19:42
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdsistemaprova`
--
CREATE DATABASE IF NOT EXISTS `bdsistemaprova` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bdsistemaprova`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ano_escolar`
--

CREATE TABLE `ano_escolar` (
  `nome_ano_escolar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `assunto_disciplina`
--

CREATE TABLE `assunto_disciplina` (
  `nome_assunto` varchar(100) NOT NULL,
  `nome_disciplina` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dificuldade`
--

CREATE TABLE `dificuldade` (
  `nome_dificuldade` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `nome_disciplina` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `cpf_professor` varchar(11) NOT NULL,
  `nome_professor` varchar(80) NOT NULL,
  `idade_professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor_disciplina`
--

CREATE TABLE `professor_disciplina` (
  `nome_disciplina` varchar(70) NOT NULL,
  `cpf_professor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova`
--

CREATE TABLE `prova` (
  `codigo_prova` int(11) NOT NULL,
  `cpf_professor_criador` varchar(11) NOT NULL,
  `nome_disciplina` varchar(70) NOT NULL,
  `titulo_prova` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao`
--

CREATE TABLE `questao` (
  `codigo_questao` int(11) NOT NULL,
  `nome_disciplina` varchar(70) NOT NULL,
  `nome_assunto` varchar(100) NOT NULL,
  `nome_dificuldade` varchar(70) NOT NULL,
  `nome_ano_escolar` int(11) NOT NULL,
  `tipo_questao` varchar(65) NOT NULL,
  `corpo_questao` longtext NOT NULL,
  `opcao_questao_a` longtext NOT NULL,
  `opcao_questao_b` longtext NOT NULL,
  `opcao_questao_c` longtext NOT NULL,
  `opcao_questao_d` longtext NOT NULL,
  `gabarito_questao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao_prova`
--

CREATE TABLE `questao_prova` (
  `codigo_prova` int(11) NOT NULL,
  `codigo_questao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ano_escolar`
--
ALTER TABLE `ano_escolar`
  ADD PRIMARY KEY (`nome_ano_escolar`);

--
-- Indexes for table `dificuldade`
--
ALTER TABLE `dificuldade`
  ADD PRIMARY KEY (`nome_dificuldade`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`nome_disciplina`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`cpf_professor`);

--
-- Indexes for table `prova`
--
ALTER TABLE `prova`
  ADD PRIMARY KEY (`codigo_prova`);

--
-- Indexes for table `questao`
--
ALTER TABLE `questao`
  ADD PRIMARY KEY (`codigo_questao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prova`
--
ALTER TABLE `prova`
  MODIFY `codigo_prova` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questao`
--
ALTER TABLE `questao`
  MODIFY `codigo_questao` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
