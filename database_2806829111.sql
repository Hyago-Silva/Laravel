-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela gc.clientes: ~2 rows (aproximadamente)
INSERT INTO `clientes` (`id`, `name`, `cpf`, `telefone`, `email`, `data_nasc`, `created_at`, `updated_at`) VALUES
	(1, 'Hyago', 3231221, 456465460, 'hyago@teste.com', '20/09/2000', '2023-06-23 16:17:49', '2023-06-23 19:14:12'),
	(2, 'Isabel', 13252156, 486486465, 'isabel@teste.com', '20/09/2000', '2023-06-22 06:52:47', '2023-06-22 06:52:47');

-- Copiando dados para a tabela gc.failed_jobs: ~0 rows (aproximadamente)

-- Copiando dados para a tabela gc.migrations: ~5 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_06_22_031256_create_clientes_table', 1);

-- Copiando dados para a tabela gc.password_reset_tokens: ~0 rows (aproximadamente)

-- Copiando dados para a tabela gc.personal_access_tokens: ~0 rows (aproximadamente)

-- Copiando dados para a tabela gc.users: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
