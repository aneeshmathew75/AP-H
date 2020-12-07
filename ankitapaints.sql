-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 04:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ankitapaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `orderId` int(11) NOT NULL,
  `RegID` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `colorName` varchar(40) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `unitLtr` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `mrp` int(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(6, 'Royale', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(1, 'Vishal', 'vishal@gmail.com', '1234567890', 'Test Query', '2020-01-14 00:00:00'),
(2, 'vishal@gmail.com', '', '1234567890', 'testing', '2020-01-19 07:59:38'),
(3, 'Vishal', 'vishal@gmail.com', '1234567890', 'testing', '2020-01-19 08:00:09'),
(4, 'test', 'test@gmail.com', '9990413778', 'test', '2020-05-01 09:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_master`
--

CREATE TABLE `coupon_master` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_value` int(11) NOT NULL,
  `coupon_type` varchar(10) NOT NULL,
  `cart_min_value` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon_master`
--

INSERT INTO `coupon_master` (`id`, `coupon_code`, `coupon_value`, `coupon_type`, `cart_min_value`, `status`) VALUES
(1, 'First50', 1000, 'Rupee', 1500, 1),
(2, 'First60', 20, 'Percentage', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `total_price` float NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `order_status` int(11) NOT NULL,
  `length` float NOT NULL,
  `breadth` float NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `mihpayid` varchar(20) NOT NULL,
  `ship_order_id` int(11) NOT NULL,
  `ship_shipment_id` int(11) NOT NULL,
  `payu_status` varchar(10) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `coupon_value` varchar(50) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `address`, `city`, `pincode`, `payment_type`, `total_price`, `payment_status`, `order_status`, `length`, `breadth`, `height`, `weight`, `txnid`, `mihpayid`, `ship_order_id`, `ship_shipment_id`, `payu_status`, `coupon_id`, `coupon_value`, `coupon_code`, `added_on`) VALUES
(1, 1, 'test', 'test', 110076, 'COD', 164299, 'Success', 3, 0, 0, 0, 0, 'eaad21770607ee0b25ba', '', 0, 0, '', 0, '', '', '2020-05-15 10:29:38'),
(3, 1, 'Delhi', 'Delhi', 110076, 'COD', 10, 'pending', 2, 0, 0, 0, 0, '8834142e7821c1889b33', '', 0, 0, '', 0, '', '', '2020-05-20 07:44:24'),
(4, 1, 'delhi', 'delhi', 110076, 'COD', 12000, 'pending', 2, 0, 0, 0, 0, '1bf668ba03dc15833001', '', 0, 0, '', 0, '', '', '2020-05-20 07:56:44'),
(5, 1, 'Delhi', 'Delhi', 110076, 'payu', 16998, 'pending', 3, 0, 0, 0, 0, '8b1b93a4b63e0b2307a0', '', 0, 0, '', 0, '', '', '2020-05-20 08:10:37'),
(6, 1, 'Dlhi', 'Dlhi', 110076, 'payu', 16998, 'success', 1, 0, 0, 0, 0, 'da1f0fd6ae533d8a2f70', '403993715521005867', 0, 0, '', 0, '', '', '2020-05-20 08:22:27'),
(7, 3, 'Patna', 'Patna', 110076, 'COD', 1560, 'pending', 3, 0, 0, 0, 0, '36f4e1a258f5649996b5', '', 0, 0, '', 0, '', '', '2020-05-22 11:24:46'),
(8, 3, 'aa', 'aa', 0, 'COD', 1900, 'pending', 3, 0, 0, 0, 0, '54a9bf67d824479004a4', '', 0, 0, '', 0, '', '', '2020-05-22 11:27:17'),
(9, 1, 'Delhi', 'Delhi', 110076, 'COD', 1900, 'pending', 4, 0, 0, 0, 0, '62d6625c440ecc84aa78', '', 0, 0, '', 0, '', '', '2020-05-22 09:58:57'),
(10, 1, 'Sarita Vihar', 'Delhi', 110076, 'COD', 150, 'pending', 3, 0, 0, 0, 0, '3532b3a4441fa64e2918', '', 0, 0, '', 0, '', '', '2020-05-23 10:45:15'),
(11, 1, 'Sarita Vihar', 'Delhi', 110076, 'COD', 50, 'pending', 3, 20, 20, 20, 2.5, '1fbc5a06bfa6e2299f79', '', 0, 0, '', 0, '', '', '2020-05-25 06:49:19'),
(13, 1, 'delhi', 'Delhi', 110076, 'COD', 1560, 'pending', 1, 0, 0, 0, 0, '68d2cc3d52d8f21197fb', '', 0, 0, '', 1, '1000', 'First50', '2020-05-26 08:06:32'),
(14, 1, 'Delhi', 'Delhi', 10076, 'COD', 560, 'pending', 1, 0, 0, 0, 0, '901aa3cb126d2448d5e9', '', 0, 0, '', 1, '1000', 'First50', '2020-05-26 08:07:48'),
(16, 1, 'Sarita Vihar', 'delhi', 110076, 'COD', 1560, 'pending', 4, 20, 20, 20, 2.5, 'af5421697c0e596ca7f9', '', 38845635, 38565829, '', 0, '', '', '2020-05-25 06:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `qty`, `price`) VALUES
(1, 1, 2, 1, 155800),
(2, 1, 1, 1, 8499),
(4, 3, 10, 1, 10),
(5, 4, 6, 8, 1500),
(6, 5, 1, 2, 8499),
(7, 6, 1, 2, 8499),
(8, 7, 9, 1, 1560),
(9, 8, 8, 1, 1900),
(10, 9, 8, 1, 1900),
(11, 10, 11, 3, 50),
(12, 11, 11, 1, 50),
(13, 16, 9, 1, 1560),
(14, 13, 9, 1, 1560),
(15, 14, 9, 1, 1560);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Shipped'),
(4, 'Canceled'),
(5, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories_id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `mrp` double(10,2) NOT NULL,
  `unitLtr` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `short_desc` varchar(100) NOT NULL,
  `meta_title` varchar(20) NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `categories_id`, `sub_categories_id`, `productName`, `productImage`, `mrp`, `unitLtr`, `quantity`, `short_desc`, `meta_title`, `status`) VALUES
(15, 6, 4, 'Royale Shyne Luxury Emulsion', 'RoyaleShyneLuxuryEmulsion.webp', 1200.00, 1, 6, 'Luxury has many forms, and one of them is the Royale Shyne Luxury Emulsion. A high sheen, washable w', 'Royale Shyne Luxury ', 1),
(16, 6, 8, 'Royale Shyne Luxury Emulsion', 'RoyaleShyneLuxuryEmulsion.webp', 4500.00, 10, 10, 'Luxury has many forms, and one of them is the Royale Shyne Luxury Emulsion.', 'Royale Shyne Luxury ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `RegID` int(20) NOT NULL,
  `userId` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPassword` varchar(250) NOT NULL,
  `DateTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`RegID`, `userId`, `userEmail`, `userPassword`, `DateTime`) VALUES
(3, 'aneesh', 'coolankitadas2014@gmail.com', '$2y$10$B2AtkDoJ7CSLL1DF576UzuUEcGdirHXJ7jTVELEeDo/OROJyi73iy', NULL),
(4, 'jerin', '19cs801016@kristujayanti.com', '$2y$10$FmWRk6c8Qh1WBGqOqpQMFuv9k0RWxB/5F.0Abe9eToaF198LYxJsG', NULL),
(5, 'jagat', '19cs801015@kristujayanti.com', '$2y$10$jTIFbi/LOhEO3RTMdSxJn.DxnfVe2ST1BpebkTukYmd8qwBV4We..', '2005-12-20 00:00:00'),
(6, 'ankita', 'coolankitadas2014@gmail.com', '$2y$10$eaRmxEJDhU3dLwcshzYKT.2w2GQsKNKyqs3zN/Gk2ik/Hpisvi7NS', '2020-12-05 03:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `shiprocket_token`
--

CREATE TABLE `shiprocket_token` (
  `id` int(11) NOT NULL,
  `token` varchar(500) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shiprocket_token`
--

INSERT INTO `shiprocket_token` (`id`, `token`, `added_on`) VALUES
(1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjQ5NDkwOSwiaXNzIjoiaHR0cHM6Ly9hcGl2Mi5zaGlwcm9ja2V0LmluL3YxL2V4dGVybmFsL2F1dGgvbG9naW4iLCJpYXQiOjE1OTA0MDQ4NTMsImV4cCI6MTU5MTI2ODg1MywibmJmIjoxNTkwNDA0ODUzLCJqdGkiOiJWZU4zaE5YMm1LdVY4cXB0In0.YKracv-yDKppYb2FISr5zE_4gEGWIAz-HzIa6cit9nw', '2020-05-25 05:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `sub_categories` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `sub_categories`, `status`) VALUES
(7, 6, 'Royale Shyne Luxury Emulsion', 1),
(8, 6, 'Royale Luxury Emulsion', 1),
(9, 6, 'Royale Aspira', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `added_on`) VALUES
(16, 1, 4, '2020-05-13 08:54:24'),
(17, 1, 6, '2020-05-15 12:53:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_master`
--
ALTER TABLE `coupon_master`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`RegID`);

--
-- Indexes for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coupon_master`
--
ALTER TABLE `coupon_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `RegID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
