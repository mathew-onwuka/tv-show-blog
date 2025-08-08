-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 09:35 AM
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
-- Database: `onyekanweluetv`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Interviews'),
(2, 'Discussions'),
(3, 'Articles & Reseaches');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comm_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comm_date` bigint(20) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comm_id`, `fullname`, `email`, `comment`, `comm_date`, `post_id`) VALUES
(1, 'testing testing', 'testing@mail.com', 'testing testing testing testing ', 1543179659, 30),
(2, 'tester tester', 'tester@yahoo.com', 'tester tester tester trillionaire', 1543179705, 30),
(3, 'check cheque', 'cheque@hotmail.com', 'cheque cheque cheque', 1543179845, 30),
(4, 'svfsvfvf', 'wcfebfeb@yahoo.com', 'ksnfjwnvrfd ggerg grgrg rgrg', 1543187447, 30),
(5, 'sfcscfssfc', 'fsfsf@gmail.com', 'dswfsfcfesfwffw', 1543219256, 30);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_body_1` text NOT NULL,
  `post_body_2` text NOT NULL,
  `post_body_3` text NOT NULL,
  `post_link` varchar(255) NOT NULL,
  `post_date` bigint(20) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `num_comm` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `posted_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='Posts Table';

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_body_1`, `post_body_2`, `post_body_3`, `post_link`, `post_date`, `image_path`, `num_comm`, `cat_id`, `posted_by`) VALUES
(21, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/pic1.jpg', 0, 1, 'Luther Onye Udo 2'),
(22, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/pic2.jpg', 0, 1, 'Luther Onye Udo 2'),
(23, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/pic3.jpg', 0, 1, 'Luther Onye Udo 2'),
(24, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/pic4.jpg', 0, 2, 'Luther Onye Udo 2'),
(25, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/pic5.jpg', 0, 2, 'Luther Onye Udo 2'),
(26, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/pic6.jpg', 0, 2, 'Luther Onye Udo 2'),
(27, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/14047378_1481554508537104_6321621638747853286_o.jpg', 0, 3, 'Luther Onye Udo 2'),
(28, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/14047378_1481554508537104_6321621638747853286_o.jpg', 0, 3, 'Luther Onye Udo 2'),
(29, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/14047378_1481554508537104_6321621638747853286_o.jpg', 0, 3, 'Luther Onye Udo 2'),
(30, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/14047378_1481554508537104_6321621638747853286_o.jpg', 5, 3, 'Luther Onye Udo 2'),
(31, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/14047378_1481554508537104_6321621638747853286_o.jpg', 0, 2, 'Luther Onye Udo 2'),
(32, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/14047378_1481554508537104_6321621638747853286_o.jpg', 0, 1, 'Luther Onye Udo 2'),
(33, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/14047378_1481554508537104_6321621638747853286_o.jpg', 0, 1, 'Luther Onye Udo 2'),
(34, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/14047378_1481554508537104_6321621638747853286_o.jpg', 0, 1, 'Luther Onye Udo 2'),
(35, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/14047378_1481554508537104_6321621638747853286_o.jpg', 0, 1, 'Luther Onye Udo 2'),
(36, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/14047378_1481554508537104_6321621638747853286_o.jpg', 0, 1, 'Luther Onye Udo 2'),
(37, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/14047378_1481554508537104_6321621638747853286_o.jpg', 0, 1, 'Luther Onye Udo 2'),
(38, 'son la son in abundance', 'millionaire in dollars', 'I will retire as a trillionaire in dollars', 'soon billionaire in dollars', 'http://localhost/bluesandhillspictures.com/dashboard/dashboard.php', 1542099775, 'img-uploads/14047378_1481554508537104_6321621638747853286_o.jpg', 0, 1, 'Luther Onye Udo 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comm_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
