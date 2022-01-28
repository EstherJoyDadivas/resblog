-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 05:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogging_tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_order` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_order`) VALUES
(1, 'Sports', '3'),
(3, 'International', '1'),
(4, 'National', '2');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `old_img` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `img`, `old_img`, `cat_id`, `date`, `view`) VALUES
(5, 'Testing', 'just for testing', '876106744gerson-repreza-y4KevX9Ai_s-unsplash.jpg', '', '3', '2021-04-08', 0),
(6, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies sapien sit amet elit fermentum, sed sagittis nulla hendrerit. Etiam semper, velit a porttitor ullamcorper, nisi sapien elementum diam, et sagittis sapien nulla et ex. Proin nec vestibulum dui. Mauris congue, ligula sit amet rutrum molestie, lectus lorem interdum purus, id rhoncus dui nisi vitae ligula. Morbi vitae pharetra nulla. Aliquam eu viverra augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer blandit nunc eget nibh hendrerit, a interdum tellus posuere. Phasellus id tristique lacus. Nam porttitor eu quam ac hendrerit. Etiam ligula turpis, consectetur in cursus sit amet, interdum et libero. Cras a urna a dui vulputate tristique. Cras viverra mattis sapien, at eleifend nibh. Vivamus eget augue eu ex congue imperdiet id a ipsum. Nullam sed sem faucibus, varius odio eu, commodo ipsum.', '41313395gerson-repreza-y4KevX9Ai_s-unsplash.jpg', '', '4', '08 Apr, 2021', 2),
(7, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '883524175torsten-dederichs-dEzd6GpIEys-unsplash.jpg', '', '1', '08 Apr, 2021', 2),
(8, 'test', 'test', '213258669758481791cef1014c0b5e4994.png', '', '4', '08 Apr, 2021', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'test', 'test@gmail.com', 'test', '0'),
(2, 'pure coding', 'purecoding@localhost.com', '0139a3c5cf42394be982e766c93f5ed0', '1'),
(3, 'normal user', 'normaluser@localhost.com', '34ea4aaaf24efcbb4b30d27302f8657f', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
