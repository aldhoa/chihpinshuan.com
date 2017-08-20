-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 20, 2017 at 10:52 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cripy_pork_jerky`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `product_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `image_4` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `date_created` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image_1`, `image_2`, `image_3`, `image_4`, `note`, `price`, `date_created`, `status`) VALUES
(1, 'product222', '/webroot/admin/img/demo/av3.jpg', '', '', '', 'ASDfdsafds', '32323232', '0000-00-00 00:00:00', 0),
(2, 'asd', '/webroot/admin/img/demo/av3.jpg', '', '', '', '', '0', '0000-00-00 00:00:00', 0),
(3, 'asdads', '/webroot/admin/img/demo/av3.jpg', '', '', '', '', '0', '0000-00-00 00:00:00', 1),
(4, 'jhasvjd', '/webroot/admin/img/demo/av3.jpg', '', '', '', '', '1', '0000-00-00 00:00:00', 1),
(5, 'asd', '/webroot/admin/img/demo/av3.jpg', '', '', '', '', '0', '0000-00-00 00:00:00', 1),
(6, 'qwdw', '', '', '', '', 'sadsads', '0', '0000-00-00 00:00:00', 0),
(7, 'asda', '', '', '', '', 'asdas', '0', '0000-00-00 00:00:00', 1),
(8, 'asdsad', '', '', '', '', 'asdsa', '21', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `name_type` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `status`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 'root', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;