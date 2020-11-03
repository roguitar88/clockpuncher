-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para clockpuncher
CREATE DATABASE IF NOT EXISTS `clockpuncher` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `clockpuncher`;

-- Copiando estrutura para tabela clockpuncher.clock
CREATE TABLE IF NOT EXISTS `clock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `first_punch_in` datetime NOT NULL,
  `second_punch_in` datetime NOT NULL,
  `extra_time` datetime NOT NULL,
  `on_location` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_user`) USING BTREE,
  CONSTRAINT `FK1_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela clockpuncher.clock: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `clock` DISABLE KEYS */;
/*!40000 ALTER TABLE `clock` ENABLE KEYS */;

-- Copiando estrutura para tabela clockpuncher.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` mediumtext NOT NULL,
  `register_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela clockpuncher.contact: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Copiando estrutura para tabela clockpuncher.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `credential` int(11) NOT NULL DEFAULT '0',
  `fullname` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL DEFAULT '',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `plan` int(11) NOT NULL DEFAULT '0',
  `register_date` datetime NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registered_by` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela clockpuncher.user: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT IGNORE INTO `user` (`id`, `credential`, `fullname`, `username`, `password_hash`, `password_reset_token`, `position`, `email`, `company`, `status`, `plan`, `register_date`, `auth_key`, `created_at`, `updated_at`, `registered_by`) VALUES
	(3, 1, 'Marcelo Alves', 'marcelao', '$2y$13$6aHrB3uPuTxQvRnJOEgBD.ce5MgICGVXbfWYSzZv1MLyjunXfWijm', NULL, 'Presidente', 'marceloalves@gmail.com', 'Top Leilões', 10, 0, '2020-10-12 18:10:54', '1X3hY8dnwddOjAHOH_ien6qzgcSBieA8', 1602537054, 1602537054, 0),
	(4, 0, 'Rogerio Brito Soares', 'roguitar', '$2y$13$09HIMo1Cnt8al/l4lRF10OQVFfD5XHZQ93pX7GlOhFFogREqh6OHW', NULL, 'programador', 'rogeriobsoares5@gmail.com', '', 10, 0, '2020-10-13 00:41:49', 'Cd5OOAe-9dfMIEFWxRvyAWotS8wfCl6p', 1602560509, 1602560509, 3);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
