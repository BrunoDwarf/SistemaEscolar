-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Set-2016 às 22:43
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
CREATE DATABASE IF NOT EXISTS `bdsistemaprova` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bdsistemaprova`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ano_escolar`
--

CREATE TABLE `ano_escolar` (
  `nome_ano_escolar` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `assunto`
--

CREATE TABLE `assunto` (
  `nome_assunto` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `assunto_disciplina`
--

CREATE TABLE `assunto_disciplina` (
  `nome_assunto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nome_disciplina` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dificuldade`
--

CREATE TABLE `dificuldade` (
  `nome_dificuldade_questao` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `nome_disciplina` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `cpf_professor` int(11) NOT NULL,
  `nome_professor` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `idade_professor` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor_disciplina`
--

CREATE TABLE `professor_disciplina` (
  `cpf_professor` int(11) NOT NULL,
  `nome_disciplina` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova`
--

CREATE TABLE `prova` (
  `codigo_prova` int(11) NOT NULL,
  `cpf_professor_criador` int(11) NOT NULL,
  `nome_disciplina_prova` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_prova` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova_questao`
--

CREATE TABLE `prova_questao` (
  `codigo_prova` int(3) NOT NULL,
  `codigo_questao` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao`
--

CREATE TABLE `questao` (
  `codigo_questao` int(11) NOT NULL,
  `nome_disciplina_questao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nome_assunto_questao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nome_ano_escolar_questao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nome_dificuldade_questao` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_questao` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `corpo_questao` text COLLATE utf8_unicode_ci NOT NULL,
  `opcao_questao_a` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opcao_questao_b` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opcao_questao_c` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opcao_questao_d` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ano_escolar`
--
ALTER TABLE `ano_escolar`
  ADD PRIMARY KEY (`nome_ano_escolar`);

--
-- Indexes for table `assunto`
--
ALTER TABLE `assunto`
  ADD PRIMARY KEY (`nome_assunto`);

--
-- Indexes for table `dificuldade`
--
ALTER TABLE `dificuldade`
  ADD PRIMARY KEY (`nome_dificuldade_questao`);

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
