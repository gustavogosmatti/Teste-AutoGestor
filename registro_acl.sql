-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Mar-2022 às 17:08
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `registro_acl`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_07_200819_create_usuarios_table', 1),
(4, '2018_03_23_174244_add_cargo_usuarios', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cargo` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `email`, `senha`, `remember_token`, `created_at`, `updated_at`, `cargo`) VALUES
(1, 'admin', 'admin', 'admin@hotmail.com', '$2y$10$B6xq7zmqvc2YgzS62Y5gq.481aD15TdjVFjkEXS6MQ.HkTMi/XV/O', 'yIGonAD7xaXGDaxijx3xnHnGuDZGwyBlIQ3yOjiXyqfutVNRoCSu5XUngRfI', '2022-03-18 01:48:23', '2022-03-20 19:54:27', 'Administrador'),
(13, 'teste', 'teste', 'teste@hotmail.com', '$2y$10$D2x87tMNen1TuvkWcCSBR.EW.OcSvbrhwRe82A2vT7u1RbbW352KC', '1FtB00xDNgbFxSl0SYJ3fqjYEdk56Ik3rF4lgfLr08NyFaYeaO96Z2uWudW2', '2022-03-20 20:04:36', '2022-03-20 20:04:36', 'Operador nv. 2'),
(9, 'gustavo', 'gustavoag', 'gustavo@hotmail.com', '$2y$10$XTRRbgfh7C91if2YG6XOJuMMfWBXt1nvkOvgD.GOg2ukFtvznxqe2', 'FZzj2k2l5t5C5sDkgESlYMdqfdgTWAwM8plxgCGLUQ5Js4hlqfoPzqDA9jTs', '2022-03-20 19:03:04', '2022-03-20 19:03:04', 'Gerente'),
(10, 'primeiro', 'primeiro', 'primeiro@hotmail.com', '$2y$10$DDZzkGBReVDR2wGOStAoUOR6vJ2t8QCMDwRpHam64tqT9Cj32Nrgu', 'L5XeNVeCNc3dzNjBg3ot4JTzlD0E5eEL7rr3SJR1aegnObhemA9A8GLsJeFM', '2022-03-20 19:56:41', '2022-03-20 19:58:51', 'Operador nv. 1'),
(11, 'segundo', 'segundo', 'segundo@hotmail.com', '$2y$10$JsmkrTdMKciPVYuSxFI90OcpajLn4Q6axF1ICPkWf5LXdaaiuH2fi', 'AU4kmscVhgO9At6VP8vikhK4M4euZxF6VmdjmzrrXRHxshaNhw7kXwFtVN3M', '2022-03-20 19:57:26', '2022-03-20 19:57:43', 'Operador nv. 2'),
(12, 'terceiro', 'terceiro', 'terceiro@hotmail.com', '$2y$10$jJD5XUq8jG8oon6EYU3Pg.2hw11/gKuSDrybL/UWV4Hr6Y0h9VYXG', '4MAEpwdg5rREqa2WIEdE5IVLKSbInod1BXR6tz0r2XpXyHZ7iWCl4UMv2qCZ', '2022-03-20 19:59:18', '2022-03-20 19:59:18', 'Operador nv. 3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
