-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table contact_admin_task.cache: ~0 rows (approximately)

-- Dumping data for table contact_admin_task.cache_locks: ~0 rows (approximately)

-- Dumping data for table contact_admin_task.contact_messages: ~1 rows (approximately)
INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'divya', 'dd1@gmail.com', 'JOB Query', 'hi, i am interested in this company for the position of php laravel developer', '2025-06-02 06:00:26', '2025-06-02 06:00:26');

-- Dumping data for table contact_admin_task.failed_jobs: ~0 rows (approximately)

-- Dumping data for table contact_admin_task.jobs: ~0 rows (approximately)

-- Dumping data for table contact_admin_task.job_batches: ~0 rows (approximately)

-- Dumping data for table contact_admin_task.migrations: ~5 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_06_02_105904_create_contact_messages_table', 2),
	(5, '2025_06_02_111418_create_profiles_table', 3);

-- Dumping data for table contact_admin_task.password_reset_tokens: ~0 rows (approximately)

-- Dumping data for table contact_admin_task.profiles: ~3 rows (approximately)
INSERT INTO `profiles` (`id`, `first_name`, `last_name`, `age`, `location`, `profile_image`, `created_at`, `updated_at`) VALUES
	(1, 'Test', 'One', 21, 'Mumbai', 'profiles/ADF5SwBugCcWxEpSxVwFnxMqLjlPcWb1IaZEtq92.jpg', '2025-06-03 00:08:03', '2025-06-03 00:08:03'),
	(2, 'Divya', 'Dixit', 27, 'Mumbai', 'profiles/p015bFA8CKTOuAJic1AB5II0UKIScv1SYiFNgw5k.jpg', '2025-06-03 00:10:51', '2025-06-03 00:10:51'),
	(4, 'Joy11', 'Lee', 32, 'pune', NULL, '2025-06-03 01:15:39', '2025-06-03 01:15:39');

-- Dumping data for table contact_admin_task.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('jyxqJe3wOBfz1JqnOK82IB1evZGhHquhh2uvxVer', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSzBZRVdVS0JOWHF3eEdZbTNiZUE0TFZUYkpsOVlac1JBZkFvSmx2TCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mcm9udGVuZC9wcm9maWxlcyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1748929779);

-- Dumping data for table contact_admin_task.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin User', 'admin@example.com', NULL, '$2y$12$SpyZJQgmbiF9Kt3s2wHQdugX7lJ3CO5IIxCxT6V.wo34vuYgZhH1e', NULL, '2025-06-02 07:00:45', '2025-06-02 07:00:45');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
