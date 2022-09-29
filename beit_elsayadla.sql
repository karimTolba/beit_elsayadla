-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 06:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beit_elsayadla`
--

-- --------------------------------------------------------

--
-- Table structure for table `jop_reg`
--

CREATE TABLE `jop_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jop_title` text NOT NULL,
  `location` text NOT NULL,
  `exp_not` text NOT NULL,
  `tel_ear` varchar(255) DEFAULT NULL,
  `tel_mob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `head` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `news_text` text NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `head`, `description`, `news_text`, `news_image`, `date_time`) VALUES
(20, 'اهلا وسهلا بكم في موقعنا ', 'رسالة ترحيب و توضيح لاحبائنا مستخدمين الموقع ', 'نرحب بكم في موقعنا ونتمنى من الله ان يفيدكم ولو قليلا في التواصل بين اصحاب الصيدليات و واللذين يريدون العمل وبالاضفاة الى التولصل بين من يريدون عرض صيدلياتهم للبيع او الايجار و في المستقبل من الممكن اضافة امكانيات اخرى اى تعليقات او رسائل تواصل برجاء ارسالها على الايميل الموضح في صفحة اتصل بنا \r\nاو على رقم الواتس الموضح اعلاه \r\nفي نفس الصفحة', '1295595864.jpg', '2022-09-28 06:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `permetion`
--

CREATE TABLE `permetion` (
  `id` int(11) NOT NULL,
  `permetion_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permetion`
--

INSERT INTO `permetion` (`id`, `permetion_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_reg`
--

CREATE TABLE `pharmacy_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `tel_ear` varchar(255) NOT NULL,
  `operation_name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `pharmacy_image` varchar(255) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permetion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `permetion_id`) VALUES
(1, 'ahmed', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jop_reg`
--
ALTER TABLE `jop_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permetion`
--
ALTER TABLE `permetion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy_reg`
--
ALTER TABLE `pharmacy_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jop_reg`
--
ALTER TABLE `jop_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permetion`
--
ALTER TABLE `permetion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pharmacy_reg`
--
ALTER TABLE `pharmacy_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
