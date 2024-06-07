-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/06/2024 às 01:56
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laboratorio`
--
CREATE DATABASE IF NOT EXISTS `laboratorio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `laboratorio`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `departamento`
--

INSERT INTO `departamento` (`id`, `descricao`) VALUES
(1, 'Informática'),
(2, 'Administrativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipamento`
--

DROP TABLE IF EXISTS `equipamento`;
CREATE TABLE `equipamento` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL,
  `responsavel` varchar(35) NOT NULL,
  `departamento` int(11) NOT NULL,
  `compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `equipamento`
--

INSERT INTO `equipamento` (`id`, `descricao`, `responsavel`, `departamento`, `compra`) VALUES
(2, 'Impressora 3D', 'Almir', 1, '0000-00-00'),
(5, 'projeto ', 'Giovana', 2, '2024-05-10'),
(8, 'SSD', 'Isadora', 2, '2024-05-12'),
(15, 'Monitor 22pol', 'Maria Fernanda', 2, '2024-05-07'),
(21, 'Celular', 'Samuel', 1, '2024-05-16'),
(22, 'note i5', 'Célio', 1, '2024-05-16'),
(23, 'Monitor 32 pol', 'Diego', 2, '2024-05-02'),
(24, 'SSD', 'Mirele', 1, '2024-05-28'),
(25, 'Impressora 3d', 'sda', 1, '2024-05-21'),
(27, 'Notebook Samsung', 'Giovana', 1, '2024-05-23'),
(28, 'monitor', 'Bruno', 1, '2024-05-23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `inventario`
--

DROP TABLE IF EXISTS `inventario`;
CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `software` int(11) NOT NULL,
  `equipamento` int(11) NOT NULL,
  `instalacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `software`
--

DROP TABLE IF EXISTS `software`;
CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL,
  `fabricante` varchar(25) NOT NULL,
  `tipo` int(11) NOT NULL,
  `valor` float NOT NULL,
  `qtdcopias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `software`
--

INSERT INTO `software` (`id`, `descricao`, `fabricante`, `tipo`, `valor`, `qtdcopias`) VALUES
(1, 'Windows', 'Microsoft', 6, 1000, 3),
(2, 'Java', 'Oracle', 7, 0, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tiposoftware`
--

DROP TABLE IF EXISTS `tiposoftware`;
CREATE TABLE `tiposoftware` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `tiposoftware`
--

INSERT INTO `tiposoftware` (`id`, `descricao`) VALUES
(6, 'Sistema Operacional'),
(7, 'Linguagem Programação');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`) VALUES
(1, 'camolesi', '059a1c70fb5d34c5dafe6a76c4f88847'),
(2, 'samuca', '059a1c70fb5d34c5dafe6a76c4f88847');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamento_equipamento` (`departamento`);

--
-- Índices de tabela `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipamento_inventario` (`equipamento`),
  ADD KEY `software_inventario` (`software`);

--
-- Índices de tabela `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tiposoftware_software` (`tipo`);

--
-- Índices de tabela `tiposoftware`
--
ALTER TABLE `tiposoftware`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tiposoftware`
--
ALTER TABLE `tiposoftware`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `equipamento`
--
ALTER TABLE `equipamento`
  ADD CONSTRAINT `departamento_equipamento` FOREIGN KEY (`departamento`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `equipamento_inventario` FOREIGN KEY (`equipamento`) REFERENCES `equipamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `software_inventario` FOREIGN KEY (`software`) REFERENCES `software` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `software`
--
ALTER TABLE `software`
  ADD CONSTRAINT `tiposoftware_software` FOREIGN KEY (`tipo`) REFERENCES `tiposoftware` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
