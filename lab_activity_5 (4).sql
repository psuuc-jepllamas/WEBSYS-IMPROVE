-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 03:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_activity_5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(250) NOT NULL,
  `adminPassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminID`, `adminName`, `adminPassword`) VALUES
(1, 'admin', 'sample123');

-- --------------------------------------------------------

--
-- Table structure for table `blog_entries`
--

CREATE TABLE `blog_entries` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_entries`
--

INSERT INTO `blog_entries` (`id`, `title`, `content`, `category`, `image`, `created_at`, `user_id`) VALUES
(4, 'gyat', 'she thick', 'Technology', 'artworks-JAJyjzzF3mxmbIc5-DCVQDg-t500x500.jpg', '2023-11-12 15:01:06', 1),
(5, 'hmm', 'ahkdogger', 'Travel', 'wt78hqov4km71.jpg', '2023-11-12 15:09:51', 2),
(6, 'Si idol ay sheshable', 'haha idk', 'Food', 'licensed-image.jpg', '2023-11-13 06:17:26', 7),
(7, 'Competitive Analysis', 'Here we will talk about the main points of competitor analysis and the use of CTA in landing pages. Let’s start with the essential points:\r\n\r\nFinding a classification of competitor pages that generate traffic.\r\nTraffic assessment: sources of generation and technologies used to increase it.\r\nAnalyzing traffic using a resource like Ahrefs.com will show how to accentuate the work with Internet resources. It allows considering which pages of the website structure need constant development.\r\nClutch for IT. This resource is important for the IT industry, but it has its own ranking rules, such as the number of weekly publications, etc.\r\nA link profile is a collection of all links and anchors leading to this site. A detailed analysis will help you understand the number and authority of domains linking both to your site and competitors’.\r\nCTAs and landing pages of competitors. In fact, it is very important to track the key phrases of competitors because the analysis of landing pages will allow you to understand what brings potential buyers to web resources, which call-to-actions, designs, offers, etc., are better to use.', 'Technology', 'technology-and-us.jpg', '2023-11-13 06:21:56', 7);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `blog_id`, `comment`, `created_at`) VALUES
(10, 12, 9, 'nice!', '2023-11-13 12:21:13'),
(11, 13, 9, 'aight, i\'m gonna watch this', '2023-11-13 12:22:40'),
(12, 15, 10, 'thanks! i\'m about to do this', '2023-11-13 12:36:42'),
(13, 17, 11, '10/10, i\'m starving', '2023-11-13 12:41:48'),
(14, 19, 12, 'Cool!', '2023-11-13 12:46:11'),
(15, 9, 13, 'waw', '2023-12-14 07:42:08'),
(16, 9, 17, 'astig', '2023-12-14 16:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `donationhistory`
--

CREATE TABLE `donationhistory` (
  `id` int(11) NOT NULL,
  `donor_name` varchar(255) DEFAULT NULL,
  `campus` varchar(255) DEFAULT NULL,
  `donation_date` date DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donationhistory`
--

INSERT INTO `donationhistory` (`id`, `donor_name`, `campus`, `donation_date`, `amount`) VALUES
(1, 'Michael Holz', 'PSU Lingayen', '2017-06-15', 254.00),
(2, 'Paula Wilson', 'PSU San Carlos City', '2017-06-21', 1260.00),
(3, 'Antonio Moreno', 'PSU Asingan', '2017-07-04', 350.00),
(4, 'Mary Saveley', 'PSU Infanta', '2017-07-16', 1572.00),
(5, 'Martin Sommer', 'PSU Urdaneta', '2017-08-04', 580.00);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `category`, `image`, `created_at`, `user_id`) VALUES
(9, 'new upload from shroud!', 'https://www.youtube.com/watch?v=s5jx_uzGRzc&t=513s', 'Entertainment', 'shroud-thumbnail.jpg', '2023-11-13 12:13:27', 9),
(10, 'Chest workout!', 'These workouts will make your chest look like superman. lol', 'Fitness', 'chest.jpg', '2023-11-13 12:34:41', 14),
(11, 'Yummy!', 'These foods will make me bloated huhuhu.', 'Food', 'food.jpg', '2023-11-13 12:40:53', 16),
(12, 'Best leather jacket for men.', 'Pick your style, gentlemen!', 'Fashion', 'fashion.jpg', '2023-11-13 12:45:20', 18),
(13, 'asdwd', 'asdawdad', 'Entertainment', '', '2023-12-14 07:23:58', 9),
(14, 'popopo', 'wewewew', 'Urdaneta', '', '2023-12-14 07:41:44', 9),
(15, 'wqeqw', 'easdwqedwe', 'Binmaley', 'chest.jpg', '2023-12-14 13:43:15', 9),
(16, 'rwerwer', 'dfggertger', 'Infanta', 'fashion.jpg', '2023-12-14 13:58:52', 9),
(17, 'tyjrtyjrtyjrty', 'erergedfgserserg', 'Binmaley', 'shroud-thumbnail.jpg', '2023-12-14 13:59:21', 9);

-- --------------------------------------------------------

--
-- Table structure for table `thumbnails`
--

CREATE TABLE `thumbnails` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `thumbname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `campus` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `expiration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thumbnails`
--

INSERT INTO `thumbnails` (`id`, `image_path`, `thumbname`, `description`, `created_at`, `campus`, `status`, `expiration`) VALUES
(87, '/WEBSYS-LAST-REVISE/ETR-WEBSYS-main/MANAGECAMPAIGNEVENTS/IMAGES/PHOTOS/11.jpeg', 'Fundraising for construction of Computer Engineering building', 'Your donations are much appreciated.', '2024-01-08 15:49:44', 'Urdaneta City', 'Approved', '2024-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `amount`, `firstname`, `lastname`) VALUES
(32, 500, 'John', 'Doe');

-- --------------------------------------------------------

--
-- Table structure for table `useracct`
--

CREATE TABLE `useracct` (
  `userID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(250) NOT NULL,
  `campus` varchar(250) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usersreal`
--

CREATE TABLE `usersreal` (
  `Uname` varchar(255) NOT NULL,
  `Uaddress` text NOT NULL,
  `Ucampus` text NOT NULL,
  `Uage` int(11) NOT NULL,
  `Ubirthdate` date NOT NULL,
  `Uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `donationhistory`
--
ALTER TABLE `donationhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thumbnails`
--
ALTER TABLE `thumbnails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useracct`
--
ALTER TABLE `useracct`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `usersreal`
--
ALTER TABLE `usersreal`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `donationhistory`
--
ALTER TABLE `donationhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `thumbnails`
--
ALTER TABLE `thumbnails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `useracct`
--
ALTER TABLE `useracct`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `usersreal`
--
ALTER TABLE `usersreal`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
