-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para site_portfolio
CREATE DATABASE IF NOT EXISTS `site_portfolio` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `site_portfolio`;

-- Copiando estrutura para tabela site_portfolio.portfolios
CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela site_portfolio.portfolios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;
INSERT INTO `portfolios` (`id`, `titulo`, `descricao`) VALUES
	(1, 'Projeto Integrador', 'Projeto integrador UniBH'),
	(2, 'Projeto Avaliador', 'Projeto avaliador UNA');
/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;

-- Copiando estrutura para tabela site_portfolio.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela site_portfolio.usuarios: ~26 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `data_cadastro`) VALUES
	(1, 'Vitor', '6fcd5cd6@teste.com.br', '2019-10-05 17:42:00'),
	(2, 'Miguel', 'ed66deb5@teste.com.br', '2019-10-05 17:42:00'),
	(3, 'Sophia', 'dbee7644@teste.com.br', '2019-10-05 17:42:00'),
	(4, 'Helena', '4abfa0d7@teste.com.br', '2019-10-05 17:42:00'),
	(5, 'Valentina', 'b426b185@teste.com.br', '2019-10-05 17:42:00'),
	(6, 'Laura', 'bbb78ed3@teste.com.br', '2019-10-05 17:42:00'),
	(7, 'Isabella', 'c9fdf686@teste.com.br', '2019-11-12 17:42:00'),
	(8, 'Manuela', 'a5d1a15b@teste.com.br', '2019-11-12 17:42:00'),
	(9, 'Júlia', '21d623f6@teste.com.br', '2019-10-05 17:42:00'),
	(10, 'Heloísa', '75b82d7d@teste.com.br', '2019-10-05 17:42:00'),
	(11, 'Luiza', '30a7e046@teste.com.br', '2019-11-12 17:42:00'),
	(12, 'Maria Luiza', '6890e7d4@teste.com.br', '2019-11-12 17:42:00'),
	(13, 'Lorena', 'cfd63f05@teste.com.br', '2019-11-12 17:42:00'),
	(14, 'Lívia', '50710e20@teste.com.br', '2019-10-05 17:42:00'),
	(15, 'Arthur', '54d3054a@teste.com.br', '2019-10-05 17:42:00'),
	(16, 'Bernardo', '7a40345b@teste.com.br', '2019-10-05 17:42:00'),
	(17, 'Heitor', 'a57fd478@teste.com.br', '2019-10-05 17:42:00'),
	(18, 'Davi', 'be70ff02@teste.com.br', '2019-10-05 17:42:00'),
	(19, 'Lorenzo', '476e6dce@teste.com.br', '2019-10-05 17:42:00'),
	(20, 'Théo', '38ae0794@teste.com.br', '2019-10-05 17:42:00'),
	(21, 'Pedro', '3fc158dc@teste.com.br', '2019-10-05 17:42:00'),
	(22, 'Gabriel', '34a7d1ec@teste.com.br', '2019-10-05 17:42:00'),
	(23, 'Enzo', '9c5e3404@teste.com.br', '2019-10-05 17:42:00'),
	(24, 'Matheus', 'b110707d@teste.com.br', '2019-10-05 17:42:00'),
	(25, 'Lucas', '217a1a12@teste.com.br', '2019-10-05 17:42:00'),
	(26, 'Benjamin', '2c247a4d@teste.com.br', '2019-10-05 17:42:00');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
