-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Out-2022 às 14:44
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `manuaismanutencao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equip`
--

CREATE TABLE `equip` (
  `id` int(11) NOT NULL,
  `equipamento` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equip`
--

INSERT INTO `equip` (`id`, `equipamento`, `modelo`) VALUES
(29, 'Komax 355', 'Máquina de Corte'),
(30, 'Komax 411', 'Máquina de Corte'),
(31, 'Komax 422', 'Máquina de Corte'),
(32, 'Komax 433H', 'Máquina de Corte'),
(33, 'Komax 433S', 'Máquina de Corte'),
(34, 'Komax 477', 'Máquina de Corte'),
(35, 'Komax MCI 761', 'Aplicador de Selo'),
(36, 'Komax MCI 765C', 'Aplicador de Selo'),
(37, 'Komax S1440', 'Aplicador de Selo'),
(38, 'Marcadora 9040', 'Marcadora'),
(39, 'PS9500', 'Corte Cabo de Bateria'),
(40, 'Kappa 350', 'Kappa'),
(41, 'Komax 488 Antiga', 'Máquina de Corte'),
(42, 'Komax 488S Nova', 'Máquina de Corte'),
(43, 'Komax 550', 'Máquina de Corte'),
(45, 'Komax 688', 'Máquina de Corte'),
(46, 'Twister BT188', 'Twister'),
(47, 'Mesa ROB', 'Mesas'),
(48, 'Prensa MCI 711', 'Prensas'),
(49, 'Marcadoras 9450', 'Marcadora'),
(50, 'Prensa P80', 'Prensas'),
(51, 'Prensa P107', 'Prensas'),
(52, 'Prensa P200', 'Prensas'),
(54, 'BT 752', 'Prensas'),
(55, 'Twister BT288', 'Twister'),
(56, 'Prensa C1370', 'Prensas');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `equip`
--
ALTER TABLE `equip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `equip`
--
ALTER TABLE `equip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
