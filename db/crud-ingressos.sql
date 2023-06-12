-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jun-2023 às 12:51
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud-ingressos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingressos`
--

CREATE TABLE `ingressos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `filme` varchar(100) NOT NULL,
  `sala` varchar(100) NOT NULL,
  `poltrona` varchar(100) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `ingressos`
--

INSERT INTO `ingressos` (`id`, `nome`, `cidade`, `filme`, `sala`, `poltrona`, `criado_em`) VALUES
(1, 'Karina', '1232', 'Velozes e furiosos', '1', '1', '2023-06-02 14:45:02'),
(2, 'Karina', 'SP', 'Super Mario', '2', '5', '2023-06-02 16:49:37'),
(3, 'Lara', 'Paraguacu paulista', 'Super Mario', '3', '5', '2023-06-05 12:42:55'),
(4, 'Karina', 'SP', 'Super Mario', '3', '6', '2023-06-05 16:04:03'),
(5, 'Karina', 'njnabsja', 'Super Mario', '3', '7', '2023-06-05 16:04:40');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ingressos`
--
ALTER TABLE `ingressos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ingressos`
--
ALTER TABLE `ingressos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
