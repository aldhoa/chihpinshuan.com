-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8888
-- Generation Time: Aug 25, 2017 at 08:59 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `fast_food_1`
--

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
  `type_id` int(11) NOT NULL,
  `note` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `date_created` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image_1`, `image_2`, `image_3`, `image_4`, `type_id`, `note`, `price`, `date_created`, `status`, `created_at`, `modified_at`, `deleted_at`) VALUES
(37, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(38, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(39, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(40, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(41, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(42, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(43, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(44, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(45, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(46, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(47, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(48, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(49, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00'),
(50, 'Product 1', 'c9c7c1f3-d198-430f-afb5-fc5c6ca08dc9-9fe3bdb6-ee01-4648-83fb-27864cebae67-20140702180354_small2.jpg', '76df5edb-1cca-4490-b6d2-fb4be2fddc24-939bd6c6-d70e-4646-bfec-347981f31507-20140702175541_small2.png', 'e3559b5c-8790-49ab-aee7-f88292015313-9315aaf1-4492-44d7-b849-2f1fd2e5f2b1-20140702181616_small2.png', '44bf6dfa-298c-4b1a-922c-5398ca540993-129015f4-fed1-4f4c-83d6-7a45fdb308b5-20100107121503_small2.jpg', 0, 'Product 1', '2000000', '0000-00-00 00:00:00', 1, '2017-08-25 01:55:46', '2017-08-25 01:55:46', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;