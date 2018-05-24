-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 10:31 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artist_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `name` varchar(20) NOT NULL,
  `img_url` varchar(80) NOT NULL,
  `cost` float NOT NULL,
  `album_id` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`name`, `img_url`, `cost`, `album_id`) VALUES
('six', '2.jpg', 11, 6),
('123', 'test1.jpg', 12, 7),
('one', 'test2.jpg', 123, 8),
('The Scene is dead', 'the.jpg', 12.2, 16);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `item_quantity` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`item_quantity`, `client_id`, `album_id`) VALUES
(1, 42, 6),
(2, 42, 7),
(1, 46, 6),
(1, 46, 7),
(2, 47, 6),
(3, 47, 7);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `client_id` int(30) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`username`, `password`, `client_id`, `email`) VALUES
('123', 'bf6d6530622f4e697ed1e27a50a85090cfb952eeaaa619c979836f659c46720e', 36, 'karlspiteri878@gmail.com'),
('hi', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 41, '123@gmail.com'),
('newest', '11507a0e2f5e69d5dfa40a62a1bd7b6ee57e6bcd85c67c9b8431b36fff21c437', 42, 'karlspiteri878@gmail.com'),
('hellos', '0ebdc3317b75839f643387d783535adc360ca01f33c75f7c1e7373adcd675c0b', 43, '123@gmail.com'),
('udder', '4df3c3f68fcc83b27e9d42c90431a72499f17875c81a599b566c9889b9696703', 44, 'bla@gmail.com'),
('usertest', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 45, 'karlspiteri878@gmail.com'),
('finaluser', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 46, 'karlspiteri878@gmail.com'),
('Superuser', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 47, 'karlspiteri878@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(80) NOT NULL,
  `client_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `client_id`) VALUES
(2, 'hello', 41),
(8, 'hi i like this', 46),
(9, 'Hi my name is test and i am a fan!', 47);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Img_id` int(20) NOT NULL,
  `Img_url` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Img_id`, `Img_url`) VALUES
(126, 'hello.jpg'),
(127, 'bla.jpg\r\n'),
(146, 'superimg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gigs`
--

CREATE TABLE `gigs` (
  `Gig_id` int(20) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Event_name` varchar(30) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gigs`
--

INSERT INTO `gigs` (`Gig_id`, `Location`, `Date`, `Time`, `Event_name`, `url`) VALUES
(1, 'bla', '2018-05-15', '10:00:00', 'hello', 'www.hello.com'),
(13, 'Marsa', '2018-09-20', '16:22:10', 'Mime music festival', 'www.mime.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(30) NOT NULL,
  `client_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `client_id`) VALUES
(1, 36),
(2, 36),
(3, 36),
(4, 36),
(5, 36),
(6, 36),
(7, 36),
(8, 36),
(9, 36),
(10, 36),
(11, 36),
(12, 36),
(13, 36),
(14, 36),
(15, 36),
(16, 36),
(17, 36),
(18, 36),
(19, 36),
(20, 36),
(21, 36),
(22, 36),
(23, 36),
(24, 36),
(25, 36),
(26, 36),
(27, 36),
(28, 36),
(29, 36),
(30, 36),
(31, 36),
(32, 36),
(33, 36),
(34, 36),
(35, 36),
(36, 36),
(37, 36),
(38, 36),
(39, 36),
(40, 36),
(41, 36),
(42, 36),
(43, 36),
(44, 36),
(45, 36),
(46, 36),
(47, 36),
(48, 36),
(49, 36),
(50, 36),
(51, 36),
(52, 36),
(53, 36),
(54, 36),
(55, 36),
(56, 43),
(57, 46),
(58, 46),
(59, 46),
(60, 46),
(61, 46),
(62, 46),
(63, 46),
(64, 46),
(65, 46),
(66, 46),
(67, 46),
(68, 47);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(11) NOT NULL,
  `Album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_id`, `Album_id`) VALUES
(1, 6),
(1, 7),
(1, 8),
(3, 6),
(3, 7),
(3, 8),
(5, 6),
(7, 6),
(9, 6),
(9, 7),
(11, 6),
(12, 6),
(14, 6),
(16, 7),
(18, 6),
(21, 6),
(23, 6),
(25, 6),
(27, 6),
(28, 6),
(30, 6),
(30, 7),
(31, 6),
(32, 7),
(33, 8),
(35, 6),
(37, 6),
(39, 6),
(40, 6),
(41, 6),
(42, 6),
(44, 6),
(44, 7),
(46, 6),
(50, 6),
(52, 6),
(53, 6),
(55, 6),
(56, 6),
(56, 7),
(57, 6),
(57, 7),
(59, 6),
(60, 7),
(61, 6),
(61, 7),
(62, 6),
(62, 7),
(64, 6),
(64, 7),
(65, 6),
(67, 6),
(68, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`client_id`,`album_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Img_id`);

--
-- Indexes for table `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`Gig_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD KEY `Album_id` (`Album_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `album_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Img_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `gigs`
--
ALTER TABLE `gigs`
  MODIFY `Gig_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`album_id`) REFERENCES `albums` (`album_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`Album_id`) REFERENCES `albums` (`album_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
