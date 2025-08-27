-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Ago-2025 às 00:34
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
-- Banco de dados: `bdphp_mvc`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Atualizar` (`pCodigo` INT, `pNome` VARCHAR(50), `pFone` VARCHAR(20))   BEGIN
	UPDATE tb_clientes SET ClNome = pNome, 
    ClFone = pFone WHERE ClCodigo = pCodigo;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Deletar` (`pCodigo` INT)   BEGIN
	DELETE FROM tb_clientes WHERE ClCodigo = pCodigo;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Inserir` (`pNome` VARCHAR(50), `pFone` VARCHAR(20))   BEGIN
	INSERT INTO tb_clientes (ClNome, ClFone)
    VALUES (pNome, pFone);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarClientes` ()   BEGIN
	SELECT * FROM tb_clientes;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ListarClientesFiltro` (`pNome` VARCHAR(50))   BEGIN
	SELECT * FROM tb_clientes WHERE ClNome LIKE 
    CONCAT(pNome,'%');
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `ClCodigo` int(11) NOT NULL,
  `ClNome` varchar(100) NOT NULL,
  `ClFone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`ClCodigo`, `ClNome`, `ClFone`) VALUES
(4, 'Renan Valença', '(11) 55555-5555'),
(5, 'João', '(11) 55555-5556'),
(6, 'Sabrina', '(11) 55555-7778'),
(7, 'Luiza', '(11) 9999-5555'),
(8, 'Eduardo Duarte', '(11) 99999-0000');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`ClCodigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `ClCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
