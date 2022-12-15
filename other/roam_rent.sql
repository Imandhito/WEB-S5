-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2022 at 12:59 PM
-- Server version: 10.9.4-MariaDB
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roam_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(12) NOT NULL,
  `title` text NOT NULL,
  `text` longtext NOT NULL,
  `img_url` text DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `text`, `img_url`, `author`, `user_id`) VALUES
(1, 'Sekarang Customer Service akan Tersedia 24/7 Jam Seminggu Tanpa Membunuh Satu Karyawan Pun', 'Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui. Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea. Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut. ', 'assets/img/hero/blog/blog-1.jpg', 'John Doe', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `profile_picture` text DEFAULT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`, `name`, `job`, `about`, `country`, `address`, `profile_picture`, `phone`) VALUES
(4, 'admin@admin.com', '123', 'admin', 'Fikry C. Farenza', 'Sit', 'About us', 'Pluto', 'Saturn', NULL, '1234'),
(6, 'user1@gmail.com', '1234', 'user', 'Maggie Fox', NULL, NULL, NULL, NULL, NULL, '1234'),
(7, 'Tuyul@gmail.com', '1234', 'user', 'Tuyul', NULL, NULL, NULL, NULL, NULL, '0819292929'),
(8, 'Tuyul2@gmail.com', '1234', 'user', 'Tuyul2', NULL, NULL, NULL, NULL, NULL, '1231241'),
(9, 'Tuyul3@gmail.com', '1234', 'user', 'Tuyul3', NULL, NULL, NULL, NULL, NULL, '0123123'),
(10, 'Tuyul4@gmail.com', '1234', 'user', 'Tuyul4', NULL, NULL, NULL, NULL, NULL, '012321941'),
(11, 'tuyul8@gmail.com', '1234', 'user', 'tuyul8', NULL, NULL, NULL, NULL, NULL, '01231231212'),
(12, 'tuyul5@gmail.com', '1234', 'user', 'tuyul5', NULL, NULL, NULL, NULL, NULL, '012312415'),
(13, 'tuyul6@gmail.com', '1234', 'user', 'tuyul6', NULL, NULL, NULL, NULL, NULL, '0132412421'),
(14, 'capek@gmail.com', '1234', 'user', 'capek ', NULL, NULL, NULL, NULL, NULL, '0812394123'),
(15, 'cepmek@gmail.com', '1234', 'user', 'cepmek', NULL, NULL, NULL, NULL, NULL, '081239412323'),
(16, 'minion@gmail.com', '1234', 'user', 'minion', NULL, NULL, NULL, NULL, NULL, '08123748123'),
(17, 'minion2@gmail.com', '1234', 'user', 'minion2', NULL, NULL, NULL, NULL, NULL, '08123412341'),
(18, 'minion3@gmail.com', '1234', 'user', 'minion3', NULL, NULL, NULL, NULL, NULL, '0849129312'),
(19, 'minion4@gmail.com', '1234', 'user', 'minion4', NULL, NULL, NULL, NULL, NULL, '089312412'),
(20, 'Ayong@gmail.com', '1234', 'user', 'Ayong', NULL, NULL, NULL, NULL, NULL, '084192312'),
(21, 'Tuyul10@gmail.com', '1234', 'user', 'Tuyul10', NULL, NULL, NULL, NULL, NULL, '0831231'),
(22, 'cimol@gmail.com', '1234', 'user', 'cimol', NULL, NULL, NULL, NULL, NULL, '087782932'),
(23, 'cilok@gmail.com', '1234', 'user', 'cilok', NULL, NULL, NULL, NULL, NULL, '08312412'),
(24, 'cilor@gmail.com', '1234', 'user', 'cilor', NULL, NULL, NULL, NULL, NULL, '0869696969'),
(25, 'cibubur@gmail.com', '1234', 'user', 'cibubur', NULL, NULL, NULL, NULL, NULL, '083124124'),
(26, 'Pinoy@gmail.com', '1234', 'user', 'Pinoy Pride', NULL, NULL, NULL, NULL, NULL, '081234123'),
(27, 'Seblak@gmail.com', '1234', 'user', 'Seblak', NULL, NULL, NULL, NULL, NULL, '08756296969'),
(28, 'Imandito@gmail.com', '1234', 'user', 'Immandito', NULL, NULL, NULL, NULL, NULL, '081324913'),
(29, 'NasiPadang@gmail.com', '1234', 'user', 'NasiPadang', NULL, NULL, NULL, NULL, NULL, '0874123126'),
(30, 'Rendang@gmail.com', '1234', 'user', 'RendangSapi', NULL, NULL, NULL, NULL, NULL, '0897581283'),
(31, 'DaunSingkong@outlook.com', '1234', 'user', 'DaunSingkong', NULL, NULL, NULL, NULL, NULL, '08645312312'),
(32, 'Tewel@gmail.com', '1234', 'user', 'JanganTewel', NULL, NULL, NULL, NULL, NULL, '0875823123'),
(33, 'GulaiAyam@gmail.com', '1234', 'user', 'GulaiAyam', NULL, NULL, NULL, NULL, NULL, '0875621111'),
(34, 'Nasi@gmail.com', '1234', 'user', 'NasiPutih', NULL, NULL, NULL, NULL, NULL, '0841231221'),
(35, 'Sijo@gmail.com', '1234', 'user', 'SambalIjo', NULL, NULL, NULL, NULL, NULL, '082419231');

-- --------------------------------------------------------

--
-- Table structure for table `vechile_category`
--

CREATE TABLE `vechile_category` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vechile_category`
--

INSERT INTO `vechile_category` (`id`, `name`) VALUES
(1, 'Car'),
(2, 'Motorcycle'),
(3, 'Bicycle');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_url` text DEFAULT NULL,
  `passanger` int(10) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_borrow` tinyint(1) NOT NULL DEFAULT 0,
  `vehicle_category_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `name`, `img_url`, `passanger`, `price`, `description`, `is_borrow`, `vehicle_category_id`) VALUES
(1, 'CBR1000RR-R FIREBLADE', 'assets/img/vehicles/CBR1000RR-R FIREBLADE.jpg', 1, '750000', 'Tesla Model X merupakan mobil mewah yang dibandrol hingga 3 Miliar Rupiah, sehingga tidak sembarang orang yang bisa memiliki mobil ini. Ini adalah kesempatan anda untuk bisa menikmati segala fasilitas yang disediakan di dalam mobil ini dengan biaya dibawah 1 juta per hari. ', 0, 2),
(2, 'Mongoose Legion L10', 'assets/img/vehicles/Mongoose Legion L10.jpg', 1, '500000', 'Mongoose Legion L10 merupakan sepeda mewah yang dibandrol hingga 3 Miliar Rupiah, sehingga tidak sembarang orang yang bisa memiliki mobil ini. Ini adalah kesempatan anda untuk bisa menikmati segala fasilitas yang disediakan di dalam mobil ini dengan biaya dibawah 1 juta per hari. ', 0, 3),
(3, 'Mercedes-Benz EQS', 'assets/img/vehicles/Mercedes-Benz EQS.png', 4, '1000000', 'Mercedes-Benz EQS merupakan mobil mewah yang dibandrol hingga 3 Miliar Rupiah, sehingga tidak sembarang orang yang bisa memiliki mobil ini. Ini adalah kesempatan anda untuk bisa menikmati segala fasilitas yang disediakan di dalam mobil ini dengan biaya dibawah 1 juta per hari. ', 0, 1),
(4, 'Volkswagen ID.3 2019', 'assets/img/vehicles/volkswagen-id-3-2019.jpg', 4, '120000', '', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vechile_category`
--
ALTER TABLE `vechile_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_category_id` (`vehicle_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `vechile_category`
--
ALTER TABLE `vechile_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`vehicle_category_id`) REFERENCES `vechile_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;