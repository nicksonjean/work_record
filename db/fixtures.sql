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

-- Copiando dados para a tabela work_record.work_record: ~16 rows (aproximadamente)
DELETE FROM `work_record`;
INSERT INTO `work_record` (`id`, `project`, `description`, `work_date`, `start_time`, `final_time`, `elapsed_time`, `created_at`, `updated_at`) VALUES
	(1, '1231231', 'teste', '2023-02-06', '09:15:00', '12:00:00', '02:45:00', '2023-01-03 12:41:38', '2023-02-06 20:12:51'),
	(2, '1231231', 'teste', '2023-02-06', '13:00:00', '18:00:00', '05:00:00', '2023-01-03 12:41:38', '2023-02-06 20:12:35'),
	(3, '1231231', 'teste', '2023-02-06', '09:00:00', '09:15:00', '00:15:00', '2023-01-03 12:41:38', '2023-02-06 20:12:48'),
	(4, '1231231', 'teste', '2023-02-06', '08:00:00', '09:00:00', '01:00:00', '2023-01-03 12:41:38', '2023-02-06 20:12:44'),
	(5, '1231231', 'teste', '2023-02-01', '08:00:00', '09:00:00', '01:00:00', '2023-02-03 23:56:49', '2023-02-06 20:11:04'),
	(6, '1231231', 'teste', '2023-02-01', '09:00:00', '09:15:00', '00:15:00', '2023-02-03 23:58:21', '2023-02-06 20:11:10'),
	(7, '1231231', 'teste', '2023-02-01', '13:00:00', '18:00:00', '05:00:00', '2023-02-03 23:58:59', '2023-02-06 20:11:24'),
	(8, '1231231', 'teste', '2023-02-03', '08:00:00', '09:00:00', '01:00:00', '2023-02-04 20:06:21', '2023-02-06 20:11:39'),
	(9, '1231231', 'teste', '2023-02-03', '09:15:00', '12:00:00', '02:45:00', '2023-02-06 12:54:30', '2023-02-06 20:11:55'),
	(10, '1231231', 'teste', '2023-02-01', '09:15:00', '12:00:00', '02:45:00', '2023-02-06 14:42:52', '2023-02-06 20:11:17'),
	(11, '1231231', 'teste', '2023-02-03', '09:00:00', '09:15:00', '00:15:00', '2023-02-06 19:59:33', '2023-02-06 20:11:45'),
	(12, '1231231', 'teste', '2023-02-03', '13:00:00', '18:00:00', '05:00:00', '2023-02-06 20:08:34', '2023-02-06 20:12:05'),
	(13, '1231231', 'teste', '2023-03-07', '08:00:00', '09:00:00', '01:00:00', '2023-02-06 22:13:36', '2023-02-06 22:13:36'),
	(14, '1231231', 'teste', '2023-03-07', '09:00:00', '09:15:00', '00:15:00', '2023-02-06 22:14:32', '2023-02-06 22:14:32'),
	(15, '1231231', 'teste', '2023-03-08', '10:00:00', '11:00:00', '01:00:00', '2023-02-06 22:15:27', '2023-02-06 22:15:27'),
	(16, '1231231', 'teste', '2023-03-08', '08:00:00', '11:00:00', '03:00:00', '2023-02-06 22:20:14', '2023-02-07 00:03:37');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
