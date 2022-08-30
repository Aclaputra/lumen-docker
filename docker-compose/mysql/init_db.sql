DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `created_at`, `updated_at`) VALUES
(1, 'laptop', '$21000', 'electronics', '2022-08-22 10:14:47', '2022-08-22 10:14:47'),
(2, 'keyboard', '$300', 'electronics', '2022-08-22 10:15:35', '2022-08-22 10:15:35');