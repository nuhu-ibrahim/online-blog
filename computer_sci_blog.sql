-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 07:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer_sci_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `id` int(11) NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `othername` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `role` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`id`, `surname`, `othername`, `firstname`, `username`, `password`, `email`, `is_active`, `role`) VALUES
(6, 'Ibrahim', NULL, 'Nuhu', 'admin@admin.com', '123456', 'admin@admin.com', 1, 'ROLE_ADMIN'),
(10, 'Ibrahim', NULL, 'Mustapha', 'musty@musty.com', '07061151982', 'musty@musty.com', 1, 'ROLE_STUDENT'),
(12, 'Musa', NULL, 'Amin', 'amina@amina.com', '07068756545', 'amina@amina.com', 1, 'ROLE_LECTURER'),
(13, 'Ibrahim', NULL, 'Nuhu', 'ib@ib.com', '123456', 'ib@ib.com', 1, 'ROLE_STUDENT'),
(14, 'Aminu', NULL, 'Umar', 'ibrahim@ibrahim.com', '123456', 'ibrahim@ibrahim.com', 1, 'ROLE_LECTURER');

-- --------------------------------------------------------

--
-- Table structure for table `attachmenttbl`
--

CREATE TABLE `attachmenttbl` (
  `attachment_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `attachment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `attachment_desc` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attachmenttbl`
--

INSERT INTO `attachmenttbl` (`attachment_id`, `course_id`, `attachment`, `attachment_desc`) VALUES
(19, 8, '8626698.jpeg', 'Waw'),
(20, 10, '1541996.jpeg', 'yf gjhkjnkm,'),
(21, 8, '1518138.jpeg', 'Read ooo');

-- --------------------------------------------------------

--
-- Table structure for table `contacttbl`
--

CREATE TABLE `contacttbl` (
  `contact_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg_content` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `msg_date` datetime NOT NULL,
  `msg_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coursetbl`
--

CREATE TABLE `coursetbl` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `course_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `course_level` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coursetbl`
--

INSERT INTO `coursetbl` (`course_id`, `course_title`, `course_code`, `course_level`) VALUES
(8, 'Dataase Management System', 'COSC 309', '300Level'),
(10, 'Introduction to Computing', 'COSC 101', '100Level'),
(11, 'Organization of Programming Languages', 'COSC 303', '400Level');

-- --------------------------------------------------------

--
-- Table structure for table `grouptbl`
--

CREATE TABLE `grouptbl` (
  `group_id` int(11) NOT NULL,
  `attachment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grouptbl`
--

INSERT INTO `grouptbl` (`group_id`, `attachment_id`) VALUES
(8, 19),
(9, 20),
(10, 21);

-- --------------------------------------------------------

--
-- Table structure for table `group_messagetbl`
--

CREATE TABLE `group_messagetbl` (
  `message_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `message_sender_id` int(11) NOT NULL,
  `message_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `message_date` datetime NOT NULL,
  `sender_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `group_messagetbl`
--

INSERT INTO `group_messagetbl` (`message_id`, `group_id`, `message_sender_id`, `message_content`, `message_date`, `sender_type`) VALUES
(12, 8, 11, 'Sir, I don\'t understand', '2018-07-22 09:46:42', 1),
(13, 8, 11, 'Really?', '2018-07-22 12:42:10', 1),
(14, 8, 1, 'Hi', '2018-07-22 12:42:43', 2),
(15, 8, 11, 'Hi', '2018-07-22 12:45:36', 1),
(16, 8, 1, 'Hello', '2018-07-22 12:45:56', 2),
(17, 9, 11, 'Hello', '2018-07-22 12:51:37', 1),
(18, 9, 1, 'Waw', '2018-07-22 12:54:04', 2),
(19, 8, 1, 'Hi', '2018-07-22 16:23:49', 2),
(20, 8, 11, 'Hi', '2018-07-22 16:32:17', 1),
(21, 9, 11, 'Hwfar', '2018-07-22 16:50:30', 1),
(22, 9, 1, 'Hi', '2018-07-22 16:50:40', 2),
(23, 9, 11, 'Hello', '2018-07-22 16:51:12', 1),
(24, 9, 1, 'Waw.. Its working', '2018-07-22 20:56:02', 2),
(25, 9, 11, 'Waw', '2018-07-22 20:58:10', 1),
(26, 9, 1, 'Now', '2018-07-22 20:58:24', 2),
(27, 9, 1, 'Hmmm', '2018-07-22 20:58:47', 2),
(28, 9, 11, 'Hmmm', '2018-07-22 20:58:56', 1),
(29, 8, 11, 'Excellency', '2018-07-23 08:07:15', 1),
(30, 9, 11, 'Waw', '2018-07-23 08:08:27', 1),
(31, 10, 12, 'Yes', '2018-07-24 06:10:03', 1),
(32, 10, 2, 'Good Day', '2018-07-24 06:10:31', 2),
(33, 10, 12, 'Hi people', '2018-07-24 06:10:46', 1),
(34, 10, 2, 'My name is nuhu', '2018-07-24 06:10:57', 2),
(35, 8, 12, 'Hello', '2018-07-24 06:11:20', 1),
(36, 8, 2, 'Yes am here too', '2018-07-24 06:12:09', 2),
(37, 9, 11, 'Yes', '2018-07-24 06:16:34', 1),
(38, 9, 12, 'Ehen', '2018-07-24 06:16:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lecturertbl`
--

CREATE TABLE `lecturertbl` (
  `lecturer_id` int(11) NOT NULL,
  `staff_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `othername` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mstatus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passport` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lecturertbl`
--

INSERT INTO `lecturertbl` (`lecturer_id`, `staff_id`, `surname`, `othername`, `firstname`, `mobile`, `email`, `sex`, `mstatus`, `address`, `passport`) VALUES
(1, 'p123456', 'Musa', NULL, 'Amina', '07068756545', 'amina@amina.com', 'Male', 'Single', 'Unguan Muazu Kaduna', '3111665.jpeg'),
(2, 'p123457', 'Aminu', NULL, 'Umar', '123456', 'ibrahim@ibrahim.com', 'Male', 'Single', 'Unguan Muazu kaduna', '9989454.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `messagetbl`
--

CREATE TABLE `messagetbl` (
  `message_id` int(11) NOT NULL,
  `message_sender_id` int(11) NOT NULL,
  `message_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `message_date` datetime NOT NULL,
  `message_reciever` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messagetbl`
--

INSERT INTO `messagetbl` (`message_id`, `message_sender_id`, `message_content`, `message_date`, `message_reciever`) VALUES
(1, 9, 'Hi', '2017-08-25 14:58:43', 1),
(2, 9, 'Hi', '2017-08-25 15:02:20', 0),
(3, 10, 'Am here, anything for me?', '2017-08-25 15:02:56', 2),
(4, 9, 'Yes oo.. beta dey wallahi', '2017-08-25 20:28:42', 1),
(5, 10, 'Hello', '2017-08-25 20:36:04', 0),
(6, 11, 'Lalla in the building', '2017-08-25 20:37:53', 0),
(7, 10, 'Hi all', '2017-08-26 21:58:26', 0),
(8, 11, 'Hi', '2017-08-26 22:00:05', 0),
(9, 10, 'Hello', '2017-08-26 22:20:38', 0),
(10, 10, 'Hi', '2017-08-26 22:23:52', 0),
(11, 10, 'Hi again', '2017-08-26 22:24:35', 0),
(12, 11, 'Hi', '2017-08-27 08:56:50', 2),
(13, 11, 'Hi', '2017-08-27 08:57:45', 2),
(14, 11, 'Nuhu', '2017-08-27 08:59:03', 0),
(15, 10, 'Ade bono', '2017-08-27 09:01:09', 0),
(16, 10, 'baddo', '2017-08-27 09:03:04', 1),
(17, 9, 'Neh Neh Neh', '2017-08-27 09:03:19', 1),
(18, 10, 'Neh Neh', '2017-08-27 09:03:39', 0),
(19, 9, 'Wollah', '2017-08-27 09:03:57', 1),
(20, 10, 'Haba', '2017-08-27 09:04:17', 1),
(21, 10, 'Hi', '2017-08-27 09:11:49', 0),
(22, 9, 'hi Kamal', '2017-08-28 21:39:16', 1),
(23, 10, 'Am here o', '2017-08-28 21:39:47', 1),
(24, 9, 'Hello World', '2017-08-28 21:40:14', 0),
(25, 10, 'Hi class', '2017-08-28 21:40:31', 0),
(26, 11, 'Hi', '2017-08-29 18:13:25', 2),
(27, 11, 'Hello World.. Sam here', '2017-08-29 18:13:56', 0),
(28, 9, 'Nuhu answering', '2017-08-29 18:14:21', 0),
(29, 10, 'Hi all', '2017-09-03 02:52:59', 0),
(30, 9, 'Waw are you their', '2018-02-23 14:36:07', 0),
(31, 10, 'Waw', '2018-02-23 14:36:44', 1),
(32, 9, 'Am here man', '2018-02-23 14:37:04', 0),
(33, 9, 'Waw', '2018-02-23 14:37:16', 0),
(34, 10, 'waw', '2018-02-23 14:46:12', 0),
(35, 9, 'how far', '2018-02-23 14:47:12', 0),
(36, 11, 'Yes', '2018-07-24 06:14:29', 0),
(37, 12, 'ehen', '2018-07-24 06:14:39', 0),
(38, 11, 'Uhmm', '2018-07-24 06:14:48', 0),
(39, 12, 'Waw', '2018-07-24 06:15:31', 2),
(40, 11, 'Uhmmm', '2018-07-24 06:15:42', 2),
(41, 12, 'Musty hwfar', '2018-07-29 15:54:29', 2),
(42, 11, 'Am fyn nuhu', '2018-07-29 15:54:48', 2);

-- --------------------------------------------------------

--
-- Table structure for table `newstbl`
--

CREATE TABLE `newstbl` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `news_author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `news_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `news_date` datetime NOT NULL,
  `news_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newstbl`
--

INSERT INTO `newstbl` (`news_id`, `news_title`, `news_author`, `news_content`, `news_date`, `news_status`) VALUES
(6, 'Party in our house', 'Ibrahim Nuhu', 'kjfsdnkv dfcgv edfgjbved fgvhdefg vkjedfbg verbgerfg', '2017-09-03 02:51:42', 'Published'),
(7, 'Abokina', 'Aminu Umar', 'Mutumi na', '2018-07-24 06:05:33', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `ordertbl`
--

CREATE TABLE `ordertbl` (
  `order_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `order_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `order_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `order_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `order_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `order_price` decimal(10,0) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saletbl`
--

CREATE TABLE `saletbl` (
  `sale_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `client_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `client_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `order_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_agent` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time_of_delivery` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessiontbl`
--

CREATE TABLE `sessiontbl` (
  `session_id` int(11) NOT NULL,
  `session_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessiontbl`
--

INSERT INTO `sessiontbl` (`session_id`, `session_title`) VALUES
(1, '2014/2015'),
(2, '2015/2016'),
(3, '2016/2017'),
(4, '2017/2018');

-- --------------------------------------------------------

--
-- Table structure for table `studenttbl`
--

CREATE TABLE `studenttbl` (
  `student_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `reg_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `othername` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mstatus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `passport` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studenttbl`
--

INSERT INTO `studenttbl` (`student_id`, `session_id`, `reg_no`, `surname`, `othername`, `firstname`, `mobile`, `email`, `sex`, `mstatus`, `address`, `passport`) VALUES
(9, 1, 'U15CS2021', 'Ibrahim', NULL, 'Nuhu', '07061151982', 'nuhu@nuhu.com', 'Male', 'Single', 'Unguan Muazu Kaduna.', '3811436.jpeg'),
(10, 1, 'U15CS2022', 'Ibrahim', NULL, 'Nuhu', '07061151982', 'ibrahim@ibrahim.com', 'Male', 'Single', 'Unguan Muazu Kaduna.', '5549756.jpeg'),
(11, 2, 'U15CS2023', 'Ibrahim', NULL, 'Mustapha', '07061151982', 'musty@musty.com', 'Male', 'Single', 'Unguan Muazu kaduna\r\n\r\n\r\n\r\nKad', '2904393.jpeg'),
(12, 2, 'U15CS2024', 'Ibrahim', NULL, 'Nuhu', '123456', 'ib@ib.com', 'Male', 'Single', 'Unguan Muazu Kaduna', '332850.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachmenttbl`
--
ALTER TABLE `attachmenttbl`
  ADD PRIMARY KEY (`attachment_id`);

--
-- Indexes for table `contacttbl`
--
ALTER TABLE `contacttbl`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `coursetbl`
--
ALTER TABLE `coursetbl`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `grouptbl`
--
ALTER TABLE `grouptbl`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `group_messagetbl`
--
ALTER TABLE `group_messagetbl`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `lecturertbl`
--
ALTER TABLE `lecturertbl`
  ADD PRIMARY KEY (`lecturer_id`),
  ADD UNIQUE KEY `UNIQ_631A7F9AD4D57CD` (`staff_id`),
  ADD UNIQUE KEY `UNIQ_631A7F9AE7927C74` (`email`);

--
-- Indexes for table `messagetbl`
--
ALTER TABLE `messagetbl`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `newstbl`
--
ALTER TABLE `newstbl`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `ordertbl`
--
ALTER TABLE `ordertbl`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `saletbl`
--
ALTER TABLE `saletbl`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `sessiontbl`
--
ALTER TABLE `sessiontbl`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `studenttbl`
--
ALTER TABLE `studenttbl`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `UNIQ_12A3B7E241986983` (`reg_no`),
  ADD UNIQUE KEY `UNIQ_12A3B7E2E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `attachmenttbl`
--
ALTER TABLE `attachmenttbl`
  MODIFY `attachment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `contacttbl`
--
ALTER TABLE `contacttbl`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coursetbl`
--
ALTER TABLE `coursetbl`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `grouptbl`
--
ALTER TABLE `grouptbl`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `group_messagetbl`
--
ALTER TABLE `group_messagetbl`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `lecturertbl`
--
ALTER TABLE `lecturertbl`
  MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `messagetbl`
--
ALTER TABLE `messagetbl`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `newstbl`
--
ALTER TABLE `newstbl`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ordertbl`
--
ALTER TABLE `ordertbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `saletbl`
--
ALTER TABLE `saletbl`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sessiontbl`
--
ALTER TABLE `sessiontbl`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `studenttbl`
--
ALTER TABLE `studenttbl`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
