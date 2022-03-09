-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 06:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `time`, `date`) VALUES
(19, 'dd@gmail.com', '10:49:53', '09-03-2222'),
(20, 'dd@gmail.com', '10:50:31', '09-03-2222'),
(21, 'dd@gmail.com', '10:52:01', '09-03-2222'),
(22, 'dd@gmail.com', '10:53:36', '09-03-2222'),
(23, 'sdfsdf@gmail.com', '11:07:16', '09-03-2222'),
(24, 'sdfsdf@gmail.com', '11:07:20', '09-03-2222'),
(25, 'aa@gmail.com', '11:07:41', '09-03-2222'),
(26, 'dd@gmail.com', '11:07:51', '09-03-2222');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `email`, `time`, `date`) VALUES
(15, 'dd@gmail.com', '02:46:15', '08-03-2222'),
(16, 'dd@gmail.com', '02:49:07', '08-03-2222'),
(17, 'dd@gmail.com', '02:51:07', '08-03-2222'),
(18, 'dd@gmail.com', '02:55:52', '08-03-2222'),
(19, 'dd@gmail.com', '03:01:21', '08-03-2222'),
(20, 'dd@gmail.com', '05:24:11', '08-03-2222'),
(21, 'dd@gmail.com', '05:24:37', '08-03-2222'),
(22, 'dd@gmail.com', '05:38:09', '08-03-2222'),
(23, 'dd@gmail.com', '05:54:16', '08-03-2222'),
(24, 'dd@gmail.com', '10:16:21', '09-03-2222'),
(25, 'dd@gmail.com', '10:48:21', '09-03-2222'),
(26, 'dd@gmail.com', '10:52:52', '09-03-2222');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user`, `name`, `price`, `category`, `image`) VALUES
(4, 'dd', 'tvsdd', '2500', 'tvs', 'logo_white_background.jpg'),
(5, 'dd', 'pc', '25000', 'tvs', '3840x1080-Wallpaper-261.jpg'),
(7, 'dd', 'mobile', '6333', 'mon', '3840x1080-Wallpaper-053.jpg'),
(9, 'dd', 'harsh vaghela', '7415', 'sdasd', 'Dual-Monitor-Wallpaper-6.jpg'),
(10, 'fsdf', 'Tv', '25000', 'ac', 'wp7974153-marvel-spider-man-miles-morales-ps5-wallpapers.jpg'),
(11, 'fsdf', 'Tv', '25000', 'ac', 'wp7974153-marvel-spider-man-miles-morales-ps5-wallpapers.jpg'),
(12, 'fsdf', 'fgh', '25000', 'sdffds', 'white_logo_color_background.jpg'),
(14, 'harssdfsdfh vaghela', 'tv', '15000', 'gadget', 'uwp1392290.jpeg'),
(15, 'dd', 'fdsfs', '7415', 'tvs', '3840x1080-Wallpaper-261.jpg'),
(16, 'dd', 'harsh vaghela', '25000', 'sdffds', '3840x1080-Wallpaper-172.jpg'),
(17, 'dd', 'harsh vaghelagdfgfd', '25000', 'tvs', 'Dual-Monitor-Wallpaper-6.jpg'),
(18, 'dd', 'harshgdfgdf', '25000', 'gdfg', 'dark_logo_white_background.jpg'),
(19, 'dd', 'harsh', '7415', 'tvs', '1.jpg'),
(20, 'dd', 'king', '25000', 'tvs', '3840x1080-Wallpaper-150.jpg'),
(21, 'dd', 'don', '10000', 'utyuytu', 'Untitled.png'),
(22, 'dd', 'harshghfhf', '7415', 'tvs', 'Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `name`, `email`, `password`, `gender`, `address`) VALUES
(24, 'harsh vaghela', 'harshmvaghela99@gmail.com', 'eyJpdiI6IktJaGRrMDBENStpS01GRUpDcHFHS2c9PSIsInZhbHVlIjoiMEZBR0ZNaFdiM1hwSENLWXZHcy95QT09IiwibWFjIjoiYzUyNDQ3MDc2ZTNlYTliYTZlYTlhMzM2ODdhNmQxYmY3MTE2NzBiZjJlYTExODRlZTBmMDQ1ZThlNGY0ZTczNCIsInRhZyI6IiJ9', 'male', 'Ploat 137 khodal flat,nirmalnagar,bhavnagar'),
(25, 'harsh vaghela', 'harshmvaghela99@gmail.com', 'eyJpdiI6IkdRNUkwVXExbGNtOVJQZWdQWENNc0E9PSIsInZhbHVlIjoiY2NTYUMvQmJXV0JCRkQzZWpCTWRLQT09IiwibWFjIjoiOTc5ZmNlOWE0OWUxY2YwMzY4NTFiNjRjMDkwYWMzMWM2YmFlMGVjMTE5MDVhZTVkZDZhNGJlYjc3YjA4N2M5NiIsInRhZyI6IiJ9', 'male', 'dfsdf'),
(26, 'harsh vaghela', 'harshmvaghela99@gmail.com', 'eyJpdiI6ImgzaUdkcXNZQ1BFZmpKSDhOY3JoQmc9PSIsInZhbHVlIjoiTDIxUjJsZTMrNjhhMUVKeE9lWS91UT09IiwibWFjIjoiZjE1ZTM1Njg5NWQyZDU5Mjc5MDJiNzE5OTlhOWQ1NWE5YTM1MmRkNGNiMmE3MzRkMGQ0MGUwYTViNjM5MDcyNiIsInRhZyI6IiJ9', 'male', 'fgfdgfdg'),
(27, 'hfghfgh', 'abc@gmail.com', 'eyJpdiI6IlZjdjlWQk5wd2xkTnh4bkhGSkRZcHc9PSIsInZhbHVlIjoiOFQ5Y29RekNSb1BwZlBmd0xBb2NHUT09IiwibWFjIjoiMGIzNjhjMjM0YzE0Mzk5ZDY0NWZhMjk2NWQ0NWI1M2JkMmRkZjY2YjM4MWFkNmEwYTUxOGZlODM4NjEzMzVkNyIsInRhZyI6IiJ9', 'male', 'hfgh'),
(28, 'harsh vaghela', 'harshmvaghela99@gmail.com', 'eyJpdiI6InRYR3ZEWHAwRENvcnV0SUhDNlBxRVE9PSIsInZhbHVlIjoiMlRIYWErQS9LRHU5ZjEyNTNiNHY2QT09IiwibWFjIjoiZmI3MmY0OWI5ZTI0ZThjY2YwYzNjNzg2Y2YwMmY5YWE4YTY0NTNiYmZlYTgwNWM0MDA2YThjNDRhYjgwOWFlNyIsInRhZyI6IiJ9', 'male', 'dfsdfdsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
