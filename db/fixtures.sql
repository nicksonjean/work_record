-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.13-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela work_record.work_record: ~7 rows (aproximadamente)
INSERT INTO `work_record` (`id`, `project`, `description`, `work_date`, `start_time`, `final_time`, `elapsed_time`, `created_at`, `updated_at`) VALUES
	(1, '1231231', 'teste', '2023-02-21', '08:00:00', '15:00:00', '07:00:00', '2023-01-03 12:41:38', '2023-02-03 00:01:57'),
	(2, '1231231', 'teste', '2023-02-21', '13:00:00', '17:00:00', '04:00:00', '2023-01-03 12:41:38', '2023-02-03 00:01:51'),
	(3, '1231231', 'teste', '2023-02-20', '08:00:00', '12:00:00', '04:00:00', '2023-01-03 12:41:38', '2023-02-03 00:01:49'),
	(4, '1231231', 'teste', '2023-02-19', '08:00:00', '12:00:00', '04:00:00', '2023-01-03 12:41:38', '2023-02-03 00:01:40'),
	(5, '1231231', 'teste', '2023-02-01', '08:00:00', '11:00:00', '03:00:00', '2023-02-03 23:56:49', '2023-02-03 23:56:49'),
	(6, '1231231', 'teste', '2023-02-02', '08:00:00', '11:00:00', '03:00:00', '2023-02-03 23:58:21', '2023-02-03 23:58:21'),
	(7, '1231231', 'teste', '2023-02-03', '11:00:00', '12:00:00', '01:00:00', '2023-02-03 23:58:59', '2023-02-03 23:58:59');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
