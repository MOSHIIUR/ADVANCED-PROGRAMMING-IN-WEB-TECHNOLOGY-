-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 10:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenfoot`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminprofile`
--

CREATE TABLE `adminprofile` (
  `id` int(100) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `image` mediumtext NOT NULL,
  `api_token` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminprofile`
--

INSERT INTO `adminprofile` (`id`, `username`, `email`, `pass`, `phone`, `image`, `api_token`) VALUES
(426191, 'Moshiur Rahman', 'moshi@myemail.com', '1234!', 0, '20221208155491481194_844171856052585_6328892923521794048_n.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `type`) VALUES
(1, 'fgdfgdfgdfgdfd', 'integer'),
(2, 'fssssssssssss', 'integer'),
(3, 'fssssssssssssnnbn', 'integer'),
(4, 'nvvnbvnb', 'integer'),
(5, 'gffgdddf', 'integer'),
(6, 'gfddffdsdsdfs', 'integer'),
(7, 'gfddffdsdsdfs', 'integer'),
(8, 'fdfdfdfd', 'integer'),
(9, 'fdfdfssds', 'integer'),
(10, 'fdfdfssdsfggcbvcbvcbvcvcbvcbvcbv', 'integer'),
(11, 'vvnbv', 'integer'),
(12, 'vvnbv', 'integer');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `f_id` int(100) NOT NULL,
  `u_id` int(100) NOT NULL,
  `f_title` varchar(1000) NOT NULL,
  `f_feedback` varchar(1000) NOT NULL,
  `f_response` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `mark` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `name`, `title`, `details`) VALUES
(1, 'Household', 'Insulate your home', 'Heating your living space can be an expensive and energy-intensive process. By insulating places like your loft and walls, you can make sure your home retains heat during the winter and stays cool in summer. It means you’ll use less energy, reducing your carbon footprint and your household bills.'),
(2, 'Household', 'Switch to renewables', 'Energy providers around the world are now offering greener tariffs. By switching to a company that provides electricity from solar, wind, or hydroelectric energy, you can reduce your household emissions and save money on your energy bills. You could even install solar panels if they’re readily available where you live.'),
(3, 'Meal', 'Change your diet', 'The food we eat can have a significant impact on the environment. For example, meat and dairy products require a lot of land, water and energy to produce. They also create a lot of methane, a greenhouse gas. What’s more, food shipped from overseas uses a lot more resources than local produce. \r\nBy eating fewer animal products, especially red meat, (or choosing a plant-based diet) and shopping for locally sourced food, you can make a big difference.  Why not support your local farmers’ market?'),
(4, 'Travel', 'Take local trips', 'Sticking with the theme of your surrounding area, try and work towards field trips that are nearby. Instead of going to far-flung destinations that require planes, trains, or busses, stick to something close by. Your emissions will be far lower, and you’ll contribute to your community.'),
(5, 'Shopping', 'Your shopping habits', 'Another factor is how often you purchase new products such as electronics, household goods and clothing. The lifespan of these items, as well as where and how they’re produced, can play a role in your carbon emissions.');

-- --------------------------------------------------------

--
-- Table structure for table `nkjcsjjkc`
--

CREATE TABLE `nkjcsjjkc` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nkjcsjjkc`
--

INSERT INTO `nkjcsjjkc` (`id`, `name`) VALUES
(1, 'ssasad');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`) VALUES
(1, 'food'),
(2, 'What'),
(3, 'nkjcsjjkc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_dob` date NOT NULL,
  `u_age` int(3) NOT NULL,
  `u_phone` varchar(11) NOT NULL,
  `u_address1` text NOT NULL,
  `u_address2` text DEFAULT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_profile_pic` varchar(100) DEFAULT NULL,
  `u_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `created_at`, `updated_at`, `u_name`, `u_dob`, `u_age`, `u_phone`, `u_address1`, `u_address2`, `u_email`, `u_profile_pic`, `u_password`) VALUES
(1, '2022-10-21 12:07:21', '2022-10-21 12:07:21', 'MD. Sazib Ahmed', '0000-00-00', 24, '1871887499', 'Flat-4B, House-23i, Road-2, Block- D, Bashundhara R/A', NULL, 'sazibahmed9@gmail.com', NULL, '0'),
(6, '2022-10-21 18:59:11', '2022-10-21 18:59:11', 'aaa', '0000-00-00', 30, '1871887499', 'Flat-4B, House-23i, Road-2, Block- D, Bashundhara R/A', NULL, 'sazibahmed9@gmail.com', NULL, '0'),
(7, '2022-11-03 13:08:33', '2022-11-03 13:08:33', 'MD. Sazib Ahmed', '2022-11-09', 0, '1785252321', 'Flat-4B, House-23i, Road-2, Block- D, Bashundhara R/A', 'ututg', 'sazibahmed@gmail.com', NULL, 'Sazib01987125@'),
(9, '2022-11-03 13:13:33', '2022-11-03 13:13:33', 'MD. Sazib', '2022-11-02', 0, '01871887488', 'Flat-4B, House-23i, Road-2, Block- D, Bashundhara R/A', 'sfcfcadvasdv as', 'sazibab@gmail.com', NULL, 'Sazib01987125@'),
(11, '2022-11-03 13:58:49', '2022-11-03 13:58:49', 'MD. Sazib', '2022-11-02', 0, '01871887485', 'Flat-4B, House-23i, Road-2, Block- D, Bashundhara R/A', 'sfcfcadvasdv as', 'sazibabcd@gmail.com', 'ProfilePictures/DxYOORE4LuWRHMoxRqFFvRq3gAJoHYDxg2lwjJPK.jpg', 'Sazib01987125@'),
(13, '2022-11-03 14:02:58', '2022-11-03 14:02:58', 'MD. Sazib Ahmed', '2022-11-02', 0, '01871887467', 'Flat-4B, House-23i, Road-2, Block- D, Bashundhara R/A', 'sgvsfgvsgvs', 'sazibahmed99@gmail.com', 'ProfilePictures/sfXLTFbea90jW5mhyGtUjeCcLGFVkJyCWFWkd1pz.jpg', 'Sazib01987125@'),
(16, '2022-11-03 14:23:35', '2022-11-03 14:23:35', 'MD. Sazib Ahmed', '2022-11-15', 0, '01871887414', 'Flat-4B, House-23i, Road-2, Block- D, Bashundhara R/A', NULL, 'sazibah22@gmail.com', 'ProfilePictures/IFHkj1mBsgsA7oDtNYEeIo4DuAOeFcHT0PgSCc9V.jpg', 'Sazib01987125@');

-- --------------------------------------------------------

--
-- Table structure for table `what`
--

CREATE TABLE `what` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `what`
--

INSERT INTO `what` (`id`, `name`) VALUES
(1, 'what');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nkjcsjjkc`
--
ALTER TABLE `nkjcsjjkc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `what`
--
ALTER TABLE `what`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `f_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nkjcsjjkc`
--
ALTER TABLE `nkjcsjjkc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `what`
--
ALTER TABLE `what`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
