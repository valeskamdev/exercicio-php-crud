-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03/09/2023 às 15:00
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud_escola_valeska`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `nota_1` decimal(4,2) NOT NULL,
  `nota_2` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `nota_1`, `nota_2`) VALUES
(1, 'Daiane Martins', 5.50, 7.00),
(2, 'Souza Almeida', 3.00, 6.00),
(7, 'Leticia Pereira', 6.00, 8.50),
(8, 'Leonardo Alves', 7.00, 3.50),
(9, 'Flávia Calina', 9.00, 5.00),
(11, 'Daniel Silva', 10.00, 3.00),
(12, 'Rafaela Ribeiro', 3.00, 5.00),
(13, 'Júlia Ferreira', 7.00, 8.50),
(14, 'Nando Lima', 4.00, 9.00),
(15, 'Larissa Souza', 4.00, 5.00),
(16, 'Tatiane Lopes', 7.00, 7.00),
(17, 'Kaique Medeiros', 8.00, 5.00),
(19, 'Elias Santos', 6.50, 4.50),
(20, 'Raissa Carvalho', 6.00, 4.00),
(21, 'Isac Rodrigues', 3.00, 8.00),
(22, 'Paula Gomes', 5.00, 9.50),
(23, 'Paulo Costa', 1.50, 6.00),
(24, 'Flávio Oliveira', 5.00, 6.50),
(25, 'Josias', 8.00, 8.00),
(26, 'Mariana', 7.00, 9.50),
(27, 'Claudio Nogueira', 8.00, 1.50),
(28, 'Alice Beliato', 5.00, 6.00),
(29, 'Anderson Souza', 3.00, 10.00);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
