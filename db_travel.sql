-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 06:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_28_130220_create_roles_table', 1),
(6, '2022_12_28_130250_add_relations_to_users_table', 1),
(7, '2022_12_28_130323_create_product_types_table', 1),
(8, '2022_12_28_130354_create_products_table', 1),
(9, '2022_12_28_130529_create_transactions_table', 1),
(10, '2022_12_28_130857_create_transaction_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `type_id`, `price`, `quantity`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Westlife Concert 2023', ' Grup vokal dengan penjualan album terlaris di Inggris pada abad ke-21, Westlife, akan datang ke Indonesia untuk “Their biggest ever stadium show in Indonesia 2023”. Konser bertajuk Westlife The Wild Dreams Tour 2023 Jakarta yang dipromotori oleh PK Entertainment dan Sound Rhythm ini akan mengguncang Stadion Madya Gelora Bung Karno Jakarta pada Sabtu, 11 Februari 2023. Semua tiket untuk pertunjukan konser Westlife The Wild Dreams Tour 2023 Jakarta telah habis terjual dengan cepat. Dengan begitu, banyak penggemar Westlife yang masih mencari tiket untuk konser Westlife terbesar yang berskala stadion di Indonesia pada Februari tahun depan. Melalui konfirmasi dari pihak manajemen Westlife, pihak penyelenggara PK Entertainment & Sound Rhythm baru saja mendapat informasi karena permintaan yang sangat tinggi dari para penggemar Westlife di Indonesia dan jadwal tur Westlife telah padat sehingga manajemen harus mencari tanggal yang masih memungkinkan untuk mengadakan show tambahan yang akan dilakukan di luar daerah Ibukota Jakarta atau skala Regional Show.', 1, 2370047, 100, 'images/Konser/Westlife Concert 2023.png', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(2, 'BlackPink Concert 2023', 'BLACKPINK IN YOUR AREAAA~\r\n             Grup K-pop legendaris, BLACKPINK akan datang kembali ke Jakarta untuk mempromosikan album terbaru mereka, BORN PINK melalui tur dunia mereka yang bertajuk, BLACKPINK WORLD TOUR [BORN PINK] JAKARTA pada tanggal 11 & 12 Maret 2023 di Stadion Utama Gelora Bung Karno, Jakarta!\r\n             Grup beranggotakan empat orang ini akan menyapa BLINK Indonesia selama dua hari! Jadi, BLINKS, persiapkan dirimu untuk menari dan menyanyi bersama lagu-lagu hits mereka mulai dari Pink Venom, DDU-DU DDU-DU, Shut Down, BOOMBAYAH, dan masih banyak lagi!\r\n            Segera beli tiket konser BLACKPINK ', 1, 2679500, 100, 'images/Konser/BlackPink 2023.jpg', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(3, 'Ever Blast Concert 2023', 'Everblast Festival merupakan jadwal konser musik tahun 2023 yang tidak boleh kamu lupakan. Soalnya, acara ini bertaburan musisi lokal dan internasional, seperti Simple Plan, Hoobastank, Padi Reborn, sampai J-Rocks. Konsernya diadakan pada tanggal 4-5 Maret 2023 di Gambir Expo Kemayoran, Jakarta. ', 1, 1300000, 100, 'images/Konser/Ever_Blast.jpg', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(4, 'Arctic Monkeys Concert 2023', 'Pelantun lagu Do I Wanna Know? ini, akhirnya kembali lagi mengadakan konser di Asia, salah satunya Jakarta. Kalau ingin menonton, konsernya berlangsung pada 18 Maret 2023 di Beach International Stadium, Ancol. ', 1, 2832461, 125, 'images/Konser/Arctic Monkeys.jpg', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(5, 'Dufan Ancol Jakarta', 'Mencari wahana bermain yang enggak jauh dari rumahmu? Yuk Lepas penatmu dengan bermain di Dunia Fantasi (Dufan) Ancol. Banyak wahana asyik yang ada di Dufan dan terbagi menjadi empat kategori, yakni Children Rides, Family Ride, Water Ride, dan Thrill Ride.\r\n\r\n            Di wahana Children Rides, anak-anak bisa bermain di atraksi Ontang-anting. Permainan ini akan membawa anak-anak beterbangan di udara dengan kursi yang mereka duduki. Selain itu, anak-anak juga bisa mengunjungi wahana lainnya, seperti Istana Boneka, Bianglala, Perang Bintang, dan lainnya.\r\n            \r\n            Buat kamu yang ingin memacu adrenalin, enggak ada salahnya mencoba wahana-wahana di Thrill Ride. Kamu bisa naik Roller Coaster untuk menikmati rasanya naik dan turun kereta dengan kecepatan tinggi sampai membuatmu berteriak. Wahana menantang lainnya yang bisa kamu coba adalah Halilintar, Hysteria, Tornado, dan Kicir-kicir.\r\n            \r\n            Jam kunjungan KHUSUS di Pantai sepanjang kawasan Symphony of The Sea:\r\n            \r\n            Kunjungan Sesi 1: 06.00-11.00 WIB\r\n            Kunjungan Sesi 2: 11.00-16.00 WIB\r\n            Kunjungan Sesi 3: 16.00-21.00 WIB\r\n            Pembatasan ini hanya berlaku di pantai sepanjang kawasan Symphony of The Sea sesuai tiket masuk pantai yang kamu pilih. Di luar jam kunjungan, kamu tetap dapat melakukan rekreasi sesuai jam operasional di Dunia Fantasi, Seaworld Ancol, Ocean Dream Samudra, Faunaland, Gondola, Allianz Ecopark, Pasar Seni, Pantai Indah, Pantai Festival, dan Restoran. ', 2, 189500, 100, 'images/Wisata/dufan.jpg', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(6, 'Trans Studio Bandung', 'Tempat wisata di Indonesia memang beragam dan tidak ada habisnya untuk dinikmati. Salah satu provinsi favorit para pelancong adalah Jawa Barat. Lokasinya yang dekat dengan Jakarta membuat Jawa Barat selalu ramai di akhir pekan. Tempat wisata di Jawa Barat memang sebagian besar menyuguhkan keindahan alam yang menakjubkan.', 2, 166250, 50, 'images/Wisata/TransStudio Bandung.jpg', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(7, 'Universal Singapore', 'Ajak keluargamu untuk senang-senang di Universal Studios Singapore! Jelajahi beragam atraksi asyik di beberapa zona tematik mulai dari Hollywood, New York, hingga Mesir Kuno.\r\n\r\n            Tantang adrenalinemu dengan naik roller coaster yang mendebarkan atau kejar-kejaran dengan T-Rex di The Lost World.\r\n            \r\n            Untuk kamu penggemar film, lihat beberapa karakter film Hollywood. Siapkan kameramu dan foto-foto ya!    ', 2, 710331, 100, 'images/Wisata/Universal Singapore.jpg', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(8, 'Disney Land Japan', 'Sering dicap sebagai tempat paling menyenangkan di muka Bumi, Tokyo Disneyland adalah taman bermain tematik yang cocok dikunjungi bareng keluarga dan sahabat! Kamu akan melihat dan berinteraksi dengan karakter-karakter familiar dari Disney, seperti Mickey Mouse, Donald Duck, Cinderella, dan lainnya! Gak cuma itu aja, kamu juga bisa menaiki berbagai macam wahana yang seru, seperti Jungle Cruise, Splash Mountain, dan Pirates of the Caribbean! Jangan lupa untuk menyaksikan parade Dreaming Up! serta pertunjukan kembang api di Disney Light the Night yang akan membuatmu berdecak kagum.', 2, 1024900, 100, 'images/Wisata/Disney Land Japan.jpg', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(9, 'Paket Mendaki Gunung Agung (Private Tour)', 'Ringkasan\r\n            Melihat matahari terbit dari ketinggian Gunung berapi aktif di Bali\r\n            Nikmati pengalaman pendakian dengan pemandu yang profesional\r\n            Terdapat dua pilihan rute untuk pendakian yang bisa dipilih\r\n            Layanan private tour peserta tidak digabung dengan grup lain', 3, 900000, 10, 'images/Gunung/Gunung Agung.png', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(10, 'PAKET TREKKING RINJANI 3 HARI 2 MALAM VIA SEMBALUN', 'Selama 3 hari 2 malam dimana satu malam diantaranya anda akan menginap di salah satu penginapan di Desa Sembalun, barulah keesokan harinya anda akan melakukan trekking di Gunung Rinjani melalui jalur Sembalun dan turunnya pun kembali lagi melaului jalur yang sama.', 3, 1780000, 10, 'images/Gunung/Gunung_Sembalun_Lombok.jpg', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(11, 'Oneasia Mount Pinang Panoramic Tour Package By OneAsia Tours Indonesia', 'Melihat pemandangan saat trekking menuju Gunung Pinang.\r\n            Menikmati suasana sore hari dan foto-foto di Karang Balong.\r\n            Mengunjungi Anyer Mercusuar dan belanja di Anyer.\r\n            Cocok untuk: Sang Petualang dan Geng Asyik.', 3, 3646500, 15, 'images/Gunung/Gunung Pinang.png', '2023-02-09 10:26:37', '2023-02-09 10:26:37'),
(12, 'Mount Kerinci - Gunung Tujuh', 'The 5 days Climb Mount Kerinci include visit Lake Gunung Tujuh –  a lost world hidden in the clouds,  after summit Mount Kerinci.  Lake Gunung Tujuh (1,996 m asl)  has a breathtaking and mysterious panoramic non-active watered crater of 1,000 hectares surrounded by the 7 peaks and pristine rain forest with abundant wildlife. It is the highest altitude fresh Water Lake in South East Asia.', 3, 2100000, 10, 'images/Gunung/Gunung_Kerinci_dari_Muaralabuh.jpg', '2023-02-09 10:26:37', '2023-02-09 10:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Konser', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(2, 'Wisata', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(3, 'Gunung', '2023-02-09 10:26:36', '2023-02-09 10:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(2, 'User', '2023-02-09 10:26:36', '2023-02-09 10:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','paid','delivered') NOT NULL DEFAULT 'pending',
  `total_price` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `dob`, `gender`, `country`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin 1', 'admin@gmail.com', NULL, '$2y$10$EuhFioPNmYKxpwVDQNyNi.gcjhybuuBpzrs//ZzBw5U1qjwjXljl2', '2002-07-10', 'Male', 'Indonesia', 1, NULL, '2023-02-09 10:26:36', '2023-02-09 10:26:36'),
(2, 'User 1', 'user@gmail.com', NULL, '$2y$10$86OSs8w16UAIo0tWTxIG1uMmH92A8Kcq53MsaTDDzdEMPOO3QL99u', '2002-07-10', 'Male', 'Indonesia', 2, NULL, '2023-02-09 10:26:36', '2023-02-09 10:26:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_type_id_foreign` (`type_id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_details_transaction_id_foreign` (`transaction_id`),
  ADD KEY `transaction_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `product_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
