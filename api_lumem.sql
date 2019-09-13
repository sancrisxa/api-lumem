-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Set-2019 às 17:41
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_lumem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id`, `event`, `added_on`, `created_at`, `updated_at`) VALUES
(1, 'ship', '2019-09-13 00:00:00', '2019-09-13 19:32:35', '2019-09-13 19:32:35'),
(2, 'sell', '2019-09-13 00:00:00', '2019-09-13 19:32:42', '2019-09-13 19:32:42'),
(3, 'buy', '2019-09-13 00:00:00', '2019-09-13 19:32:50', '2019-09-13 19:32:50'),
(4, 'sell', '2019-09-13 00:00:00', '2019-09-13 19:32:57', '2019-09-13 19:32:57'),
(5, 'ship', '2019-09-13 00:00:00', '2019-09-13 19:33:04', '2019-09-13 19:33:04'),
(6, 'Kenya Heidenreich', '2011-12-30 00:00:00', '2019-09-13 20:24:21', '2019-09-13 20:24:21'),
(7, 'Prof. Makenna Labadie', '1973-09-18 00:00:00', '2019-09-13 20:24:21', '2019-09-13 20:24:21'),
(8, 'Mona Carroll I', '1973-06-03 00:00:00', '2019-09-13 20:24:21', '2019-09-13 20:24:21'),
(9, 'Vicenta Walker', '2010-03-07 00:00:00', '2019-09-13 20:24:21', '2019-09-13 20:24:21'),
(10, 'Barrett Carter', '2015-11-05 00:00:00', '2019-09-13 20:24:22', '2019-09-13 20:24:22'),
(11, 'Monique Rogahn', '2017-11-13 00:00:00', '2019-09-13 20:24:22', '2019-09-13 20:24:22'),
(12, 'Mrs. Estella Hauck Sr.', '1992-11-12 00:00:00', '2019-09-13 20:24:22', '2019-09-13 20:24:22'),
(13, 'Eldon Daugherty III', '2001-06-18 00:00:00', '2019-09-13 20:24:22', '2019-09-13 20:24:22'),
(14, 'Mackenzie Beatty', '2005-08-03 00:00:00', '2019-09-13 20:24:22', '2019-09-13 20:24:22'),
(15, 'Ms. Vivienne Aufderhar', '1982-10-30 00:00:00', '2019-09-13 20:24:22', '2019-09-13 20:24:22'),
(16, '78uuL', '2002-10-27 00:00:00', '2019-09-13 20:27:12', '2019-09-13 20:27:12'),
(17, 'MuocF', '2002-04-29 00:00:00', '2019-09-13 20:27:12', '2019-09-13 20:27:12'),
(18, 'aavgz', '2018-10-10 00:00:00', '2019-09-13 20:27:12', '2019-09-13 20:27:12'),
(19, 'YNkgf', '1989-05-28 00:00:00', '2019-09-13 20:27:12', '2019-09-13 20:27:12'),
(20, 'xmYw4', '1971-03-30 00:00:00', '2019-09-13 20:27:12', '2019-09-13 20:27:12'),
(21, 'LbHKB', '1993-10-12 00:00:00', '2019-09-13 20:27:12', '2019-09-13 20:27:12'),
(22, 'rh5yE', '1972-09-14 00:00:00', '2019-09-13 20:27:12', '2019-09-13 20:27:12'),
(23, '30aCL', '1982-04-10 00:00:00', '2019-09-13 20:27:12', '2019-09-13 20:27:12'),
(24, 'Za2KV', '2019-01-16 00:00:00', '2019-09-13 20:27:12', '2019-09-13 20:27:12'),
(25, '98p53', '2012-12-04 00:00:00', '2019-09-13 20:27:12', '2019-09-13 20:27:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_09_12_171552_create_events_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
