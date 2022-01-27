-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.10-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla laikadb.cargos
CREATE TABLE IF NOT EXISTS `cargos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('Activo','Inactivo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laikadb.cargos: 2 rows
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` (`id`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'Gerente General', 'Activo', NULL, NULL),
	(3, 'Admin sistemas', 'Activo', NULL, NULL);
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;

-- Volcando estructura para tabla laikadb.empleados
CREATE TABLE IF NOT EXISTS `empleados` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laikadb.empleados: 2 rows
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` (`id`, `name`, `lastname`, `phone`, `email`, `cargo`, `created_at`, `updated_at`) VALUES
	(1, 'JULIAND', 'Pirachican', '3213123', 'j.dpirachican7@gmail.com', 1, NULL, '2022-01-24 01:52:23'),
	(2, 'David', 'Moreno', '32197172298', 'juliand2011@misena.edu.co', 3, NULL, NULL);
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;

-- Volcando estructura para tabla laikadb.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laikadb.failed_jobs: 0 rows
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para procedimiento laikadb.insertEmployee
DELIMITER //
CREATE PROCEDURE `insertEmployee`(	nameemp VARCHAR(100)
								   ,lastnameemp VARCHAR(100)
                                   ,phoneemp VARCHAR(100)
                                   ,emailemp VARCHAR(100))
BEGIN
	INSERT INTO empleados VALUES(0,nameemp,lastnameemp,phoneemp,emailemp,now(),null);
END//
DELIMITER ;

-- Volcando estructura para tabla laikadb.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laikadb.migrations: 5 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2022_01_22_021323_create_empleados_table', 2),
	(5, '2022_01_24_103842_create_cargos_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para procedimiento laikadb.modifyEmployee
DELIMITER //
CREATE PROCEDURE `modifyEmployee`( idemp INT(10)
								   ,nameemp VARCHAR(100)
								   ,lastnamemp VARCHAR(100)
                                   ,phoneemp VARCHAR(100)
                                   ,emailemp VARCHAR(100)
                                   ,action_sp boolean
                                   
                                   )
BEGIN

IF(action_sp=true) THEN
	UPDATE empleados SET name=nameemp
					,lastname=lastnamemp
                    ,phone=phoneemp
                    ,email=emailemp
	WHERE id=idemp;
ELSE 
	DELETE FROM empleados WHERE id=idemp;
END IF;

						
END//
DELIMITER ;

-- Volcando estructura para tabla laikadb.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laikadb.password_resets: 0 rows
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla laikadb.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laikadb.personal_access_tokens: 0 rows
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para procedimiento laikadb.showEmployee
DELIMITER //
CREATE PROCEDURE `showEmployee`( `ide` VARCHAR(10) )
SELECT e.id AS id
	  ,e.name AS name
      ,e.lastname AS lastname
      ,e.phone AS phone
      ,e.email AS email
      ,c.descripcion AS cargo
FROM empleados AS e
INNER JOIN cargos AS c
	ON e.cargo=c.id
where IF(ide!='',e.id=ide,1=1)//
DELIMITER ;

-- Volcando estructura para procedimiento laikadb.showOcupations
DELIMITER //
CREATE PROCEDURE `showOcupations`()
BEGIN
SELECT * FROM cargos WHERE estado='ACTIVO';
END//
DELIMITER ;

-- Volcando estructura para tabla laikadb.users
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
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laikadb.users: 1 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Julian', 'j.dpirachican7@gmail.com', NULL, '$2y$10$uPBXJ93Y/J0eiQj.hiWZC.R6qKLwzycj4QAKxw7ErJ6mxNWjma/G2', 'Zm6lpuYYOSqDcx4rodrBiiThCvVaUNiDEbz43YYSQCzGBNnXjDc6nADqcmKc', '2022-01-24 22:53:13', '2022-01-24 22:53:13');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
