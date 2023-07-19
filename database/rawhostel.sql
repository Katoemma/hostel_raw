-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 03:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawhostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `hostel` int(11) NOT NULL,
  `room` varchar(225) NOT NULL,
  `type` char(1) NOT NULL,
  `token` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `booked` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `student`, `hostel`, `room`, `type`, `token`, `status`, `booked`) VALUES
(25, 19, 14, '34', 'S', 'M-19-9696-2023', 0, '2023-07-16 18:01:44'),
(26, 19, 13, '38', 'S', 'R-19-4661-2023', 1, '2023-07-17 17:37:51'),
(27, 25, 14, '37', 'S', 'M-25-1499-2023', 0, '2023-07-19 15:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `hostel` int(11) NOT NULL,
  `image` int(11) NOT NULL,
  `uploaded` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `google` text NOT NULL,
  `single_room` int(225) NOT NULL,
  `double_room` int(255) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `camera` tinyint(1) NOT NULL,
  `reading` tinyint(1) NOT NULL,
  `self_contained` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `name`, `admin`, `address`, `description`, `contact`, `image`, `google`, `single_room`, `double_room`, `wifi`, `camera`, `reading`, `self_contained`, `status`, `created`) VALUES
(13, 'Regina Hostel', 20, 'Lower Churchill drive', 'lorem description for testing', '', '1689518189_20230428_145914_HDR.jpg', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7970.215443166015!2d32.303314144306476!3d2.784465654969151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m5!1s0x1771a7aa00266ee3%3A0x20c04c4d56aa846f!2sGulu%20University%20(GU)%2C%20Gulu!3m2!1d2.7881388!2d32.3168635!4m3!3m2!1d2.7805733999999998!2d32.2994122!5e0!3m2!1sen!2sug!4v1688993594874!5m2!1sen!2sug&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 500000, 450000, 1, 1, 1, 1, 1, '2023-07-16 15:34:54'),
(14, 'Mandela Hostel', 21, 'Lower Churchill drive', 'lorem ipsum dolere is aletre', '', '1689511026_elephant.png', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7970.215443166015!2d32.303314144306476!3d2.784465654969151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m5!1s0x1771a7aa00266ee3%3A0x20c04c4d56aa846f!2sGulu%20University%20(GU)%2C%20Gulu!3m2!1d2.7881388!2d32.3168635!4m3!3m2!1d2.7805733999999998!2d32.2994122!5e0!3m2!1sen!2sug!4v1688993594874!5m2!1sen!2sug&quot; width=&quot;600&quot; height=&quot;450&quot; style=&quot;border:0;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot; referrerpolicy=&quot;no-referrer-when-downgrade&quot;&gt;&lt;/iframe&gt;', 500000, 450000, 1, 1, 1, 1, 1, '2023-07-16 15:35:10'),
(15, 'Pioneer Hostel', 22, '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, '2023-07-17 10:56:48'),
(16, 'free state', 23, '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, '2023-07-17 10:56:58'),
(17, 'Perfect Harmony', 24, '', '', '', '', '', 0, 0, 0, 0, 0, 0, 1, '2023-07-17 17:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room` varchar(255) NOT NULL,
  `type` char(1) NOT NULL,
  `hostel` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `type`, `hostel`, `created`) VALUES
(34, 'G-001', 'S', 14, '2023-07-16 16:25:03'),
(35, 'G-002', 'D', 14, '2023-07-16 16:25:12'),
(36, 'G-003', 'D', 14, '2023-07-16 16:25:40'),
(37, 'G-004', 'S', 14, '2023-07-16 16:25:48'),
(38, 'R-001', 'S', 13, '2023-07-16 17:36:57'),
(39, 'R-002', 'S', 13, '2023-07-16 17:37:14'),
(40, 'R-003', 'D', 13, '2023-07-16 17:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `hostel` int(11) NOT NULL,
  `rule` text NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `hostel`, `rule`, `created`) VALUES
(1, 14, 'hello there', '2023-07-19'),
(2, 14, 'no coming back past 10 PM', '2023-07-19'),
(3, 14, 'ayaa bus', '2023-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `hostel` int(11) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `google` text NOT NULL,
  `image` text NOT NULL,
  `single` varchar(11) NOT NULL,
  `double_room` varchar(11) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `self_contained` tinyint(1) NOT NULL,
  `reading` tinyint(1) NOT NULL,
  `camera` tinyint(1) NOT NULL,
  `updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `campus` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `DOB` date NOT NULL,
  `type` char(2) NOT NULL,
  `image` text NOT NULL,
  `code` varchar(225) NOT NULL,
  `careted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `campus`, `gender`, `DOB`, `type`, `image`, `code`, `careted`) VALUES
(18, 'KATO', 'EMMANUEL', 'emmanuelkato39@gmail.com', '+256778707801', '$2y$10$rDkJibsgHNG9c4n4E0RJ6uyFUYRLx1.Hw8apNnQ7t1KxP9hU92iJK', 'Gulu University', 'M', '2000-12-11', 'SA', '1689347240_339136693_187534294058107_5389762423036018797_n.jpg', '', '2023-07-14 17:33:41'),
(19, 'BAGUMA', 'CANNARY', 'canary@stustay.com', '+256778707801', '$2y$10$stl3n2ZH1Yer6/kakgo9ceLjnqQl4Mz620L5a0.beRLeKvacyXDxO', 'Gulu University', 'M', '1999-12-12', 'SS', '', '', '2023-07-16 15:32:22'),
(20, 'elias', 'muhoozi', 'regina@savvy.com', '+256778707801', '$2y$10$IfcV2Sfzx0QO6llHZJg/meuLZfsLGOwC5WhQTEjzBrM.HpDvd0PoC', '', 'M', '0000-00-00', 'SH', '1689581832_IMG-9774.jpg', '', '2023-07-16 15:33:44'),
(21, 'sharon', 'Aleng', 'sharon@stustay.com', '+256778707801', '$2y$10$vrcCTPnskx3yly2q7qiWmOahB6sUQu1Wo.Zw0ftFnWWMT5X3MI8mS', '', 'F', '0000-00-00', 'SH', '', '', '2023-07-16 15:34:31'),
(22, 'baddo', 'puoneer', 'pioneer@stustay.com', '0778797890', '$2y$10$NW4qWceIqvmyML643ph7AuJiTuH3N9XOD7/axR8vXHX4wDXL98q4i', '', 'F', '0000-00-00', 'SH', '', '', '2023-07-17 10:55:35'),
(23, 'crested', 'emma', 'crested@stustay.com', '0789656467', '$2y$10$brYhTeGVVgC.N1coqlcUzeFoWrKCxfkjWeCj9ub6ErxShYLd5PAwG', '', 'M', '0000-00-00', 'SH', '', '', '2023-07-17 10:56:29'),
(24, 'BAGUMA', 'CANNARY', 'admin@stustay.com', '+256778707801', '$2y$10$YohslZMBciDlOXduVztuge3Fypf.5aYFwfHqj5SCj8Oki8iSdYTTO', '', 'M', '0000-00-00', 'SH', '', '', '2023-07-17 17:34:31'),
(25, 'elias', 'muhoozi', 'muhoozi@stustay.com', '0777777899', '$2y$10$.cF2daafeskDz4zN3v4ZDezXR3bLY0kECuUu1Gwc205.LV89IuzfO', 'Gulu University', 'M', '1999-12-12', 'SS', '', '', '2023-07-19 14:30:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student` (`student`),
  ADD KEY `hostel` (`hostel`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hostel` (`hostel`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin` (`admin`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hostel` (`hostel`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hostel` (`hostel`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_ibfk_1` (`hostel`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`student`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`hostel`) REFERENCES `hostels` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`hostel`) REFERENCES `hostels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hostels`
--
ALTER TABLE `hostels`
  ADD CONSTRAINT `hostels_ibfk_1` FOREIGN KEY (`admin`) REFERENCES `users` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`hostel`) REFERENCES `hostels` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_ibfk_1` FOREIGN KEY (`hostel`) REFERENCES `hostels` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_ibfk_1` FOREIGN KEY (`hostel`) REFERENCES `hostels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
