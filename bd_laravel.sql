-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for inventario_equipos
CREATE DATABASE IF NOT EXISTS `inventario_equipos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `inventario_equipos`;

-- Dumping structure for table inventario_equipos.equipos
CREATE TABLE IF NOT EXISTS `equipos` (
  `id` int(11) NOT NULL DEFAULT '0',
  `nombre_equipo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `procesador` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `memoria` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `disco` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pantalla` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `teclado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mouse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sistema_operativo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_programas` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inventario_equipos.equipos: ~0 rows (approximately)
/*!40000 ALTER TABLE `equipos` DISABLE KEYS */;
INSERT INTO `equipos` (`id`, `nombre_equipo`, `procesador`, `memoria`, `placa`, `disco`, `otros`, `fuente`, `pantalla`, `teclado`, `mouse`, `sistema_operativo`, `office`, `otros_programas`) VALUES
	(1, 'pc1', 'core i9', '8gb', 'Asus', '700 gb', 'Turbo m2', '500 wats', '16 " dell', 'deluxe', 'Janus', 'Windows 10', 'Office 2013', 'Vs Code');
/*!40000 ALTER TABLE `equipos` ENABLE KEYS */;

-- Dumping structure for table inventario_equipos.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inventario_equipos.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table inventario_equipos.mantenimientos
CREATE TABLE IF NOT EXISTS `mantenimientos` (
  `id_mantenimiento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_mantenimiento` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_mantenimiento` date NOT NULL,
  `fk_equipo_asignado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id_mantenimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inventario_equipos.mantenimientos: ~0 rows (approximately)
/*!40000 ALTER TABLE `mantenimientos` DISABLE KEYS */;
/*!40000 ALTER TABLE `mantenimientos` ENABLE KEYS */;

-- Dumping structure for table inventario_equipos.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inventario_equipos.migrations: ~6 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(6, '2014_10_12_000000_create_users_table', 1),
	(7, '2014_10_12_100000_create_password_resets_table', 1),
	(8, '2019_08_19_000000_create_failed_jobs_table', 1),
	(9, '2020_05_12_175035_create_mantenimientos_table', 1),
	(10, '2020_05_12_175154_create_personas_table', 1),
	(11, '2020_05_12_175431_create_equipos_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table inventario_equipos.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inventario_equipos.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('don_noruego@outlook.com', '$2y$10$fppjfwK00b6Vj7J7oW4W0u25EeI8.d90zT0tTLdN1VZrpzNRYthWq', '2020-05-13 16:52:51');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table inventario_equipos.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipo_asignado` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inventario_equipos.personas: ~3 rows (approximately)
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` (`nombre`, `equipo_asignado`) VALUES
	('Johan', 'pc1'),
	('Johan', 'Rivera'),
	('Johan', 'pc1');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;

-- Dumping structure for table inventario_equipos.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inventario_equipos.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Johan', 'don_noruego@outlook.com', '2020-05-13 11:51:52', '12345678', NULL, '2020-05-13 11:51:58', '2020-05-13 11:51:59'),
	(2, 'johan', 'jd795@misena.edu.co', NULL, '$2y$10$OLa10015o73d1ZkTzRhTZONXShLWoZRXQ9s8XsAhACT0eBBkJFTfm', '1ylj4JAftF91vRRADlXKFsOZ2ubbdvHeIWnocEuY634cUHfynFWb44rtGhnA', NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
