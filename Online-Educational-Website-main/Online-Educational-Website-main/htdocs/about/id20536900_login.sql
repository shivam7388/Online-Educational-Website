-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 08:04 PM
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
-- Database: `id20536900_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cname` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cname`, `cemail`, `text`, `timestamp`) VALUES
('', '', '', '2023-04-15 12:34:11'),
('kishan', 'aisodjkf@gmail.com', 'asiodklfg[ps;lwsakd', '2023-04-15 12:29:29'),
('sd]', 'kishan1@gmail.com', 'skdlf,', '2023-04-11 12:12:27'),
('Kishan ', 'kkkk@gmail.com', 'dodslkasdjflksldfj\r\ndsfik', '2023-04-15 12:26:32'),
('kishan', 'sajdk@gmail.com', 'sedfg', '2023-04-11 12:12:56'),
('kishan', 'sajdsadcfk@gmail.com', 'aSP[DO;FLK/', '2023-04-15 04:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`) VALUES
(1, 'Python', 'Python is a popular high-level, interpreted programming language used for web development.', 1, 0),
(2, 'HTML', 'HTML stands for Hypertext Markup Language and is used to create and structure content on the web. ', 2, 0),
(3, 'CSS', 'CSS stands for Cascading Style Sheets, and it is a stylesheet language used to describe the presentation of a document written in HTML', 3, 0),
(4, 'Javascript', 'JavaScript is a high-level programming language that is widely used in web development. <br> It allows developers to create dynamic and interactive web pages by adding client-side scripting to HTML pages.', 4, 0),
(5, 'PHP', 'PHP (Hypertext Preprocessor) is a server-side programming language that is widely used for web development.', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'kishan@1', '$2y$10$Sl6/qQl9rBVid55gY69OOu5GpWxPkuN5bwV6NEtZY9ThqcyFJ4fXm', '2023-04-07 19:52:23'),
(2, 'kishan2', '$2y$10$hMKtPVj9iSJwrmh0FHEhoeVqnC64qFBcsg7GFHeAWy/Sa.cUU5oGC', '2023-04-07 21:06:57'),
(3, 'kishan3', '$2y$10$.1xAs.VW7/aC2kduFYNIAu8Wr/wA6MjZDXyCFlsVYfxM9D8tJKAjy', '2023-04-07 21:12:48'),
(7, 'kishan@', '$2y$10$MyqVn3uzId5W5Xyp1arWJOkHo1zrCasIdhghgXVWUtRnMkcbCXSr2', '2023-04-08 11:47:27'),
(8, 'kishaQWERF', '$2y$10$s2QR0ani2ii43gJSRwnrj.48nKFVq2kXmDlUQB8Ker1fyBrQuwsO2', '2023-04-15 09:57:35'),
(9, 'kishan111', '$2y$10$CvGRo98OWI3mk4vB0OcWP..R0B6GghMJgnBK5FnlGMRFZMU/8wsUG', '2023-04-23 16:18:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cemail`);
ALTER TABLE `contact` ADD FULLTEXT KEY `cemail` (`cemail`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
