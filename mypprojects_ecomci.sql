-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 25, 2020 at 09:07 PM
-- Server version: 10.3.23-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypprojects_ecomci`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(233) NOT NULL,
  `user_email` varchar(233) NOT NULL,
  `user_password` varchar(233) NOT NULL,
  `user_role` tinyint(3) NOT NULL,
  `user_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_role`, `user_status`) VALUES
(1, 'abc', 'abc', '$2y$10$OA7BcXvX.BH7PQLmpx0BbOWKAl3fyJUs4MHPSHIjMRkIaoOTm3RkK', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_heading` varchar(233) NOT NULL,
  `banner_desc` text NOT NULL,
  `banner_image` varchar(233) NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_heading`, `banner_desc`, `banner_image`, `status`) VALUES
(2, 'BEST FURNITURE MANUFACTURER', 'Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.', 'banner_image/visit_bg.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(233) NOT NULL,
  `brand_desc` varchar(233) NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_desc`, `status`) VALUES
(2, 'Regal', 'No Descriptions.', 1),
(3, 'Hatil', 'No Descriptions.', 1),
(4, 'Otobe', 'No Descriptions.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `customer_id`, `products_id`, `comment`, `status`) VALUES
(1, 4, 23, 'ssssssssssss', 1),
(2, 4, 23, 'ssssssssssss', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(233) NOT NULL,
  `mobile_num` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_id`, `first_name`, `last_name`, `mobile_num`, `email`, `password`) VALUES
(6, 'Sourav', 'Kairy', '01797338420', 'souravkairy420@gmail.com', '4297f44b13955235245b2497399d7a93');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `order_total` varchar(244) NOT NULL,
  `order_status` tinyint(3) NOT NULL,
  `order_date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_date_time`) VALUES
(18, 6, 67, 'Cash On Delivery', '20050', 1, '2020-11-02 18:57:48'),
(19, 6, 68, 'Cash On Delivery', '130050', 1, '2020-11-19 21:51:22'),
(20, 6, 70, 'Cash On Delivery', '25050', 1, '2020-12-25 05:39:47'),
(21, 0, 71, 'Cash On Delivery', '25050', 1, '2020-12-25 06:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_details`
--

CREATE TABLE `customer_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(233) NOT NULL,
  `product_price` varchar(244) NOT NULL,
  `product_sales_qty` varchar(211) NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order_details`
--

INSERT INTO `customer_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_qty`, `status`) VALUES
(19, 18, 20, 'Chair - 002', '4000', '5', 1),
(20, 19, 17, 'Sofa -1002', '25000', '2', 1),
(21, 19, 23, 'luxurious sofa -002', '40000', '2', 1),
(22, 20, 17, 'Sofa -1002', '25000', '1', 1),
(23, 21, 17, 'Sofa -1002', '25000', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `c_id` int(11) NOT NULL,
  `c_email` varchar(233) NOT NULL,
  `m_sub` varchar(233) NOT NULL,
  `c_name` varchar(233) NOT NULL,
  `m_desc` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`c_id`, `c_email`, `m_sub`, `c_name`, `m_desc`, `time`) VALUES
(5, 'souravkairy420@gmail.com', 'Payment problem', 'Sourav', 'Hello sir, \r\nI am getting into trouble when I am trying to buy a product the online payment option is not working.\r\nSo please sort out is. \r\nthank you ', '2020-10-21 10:34:18'),
(6, 'dffffff@gmail.com', 'problem nai', 'taher', 'i am taher', '2020-10-21 15:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(233) NOT NULL,
  `category_desc` text NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_name`, `category_desc`, `status`) VALUES
(3, 'Sofa', 'No Description.', 1),
(4, 'Table', 'No Description.', 1),
(5, 'Chair', 'No Description.', 1),
(6, 'Bed', 'No Description.', 1),
(7, 'Lighting', 'No Description.', 1),
(8, 'Decore', 'No Description.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_category`
--

CREATE TABLE `product_sub_category` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(233) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_sub_category`
--

INSERT INTO `product_sub_category` (`sub_cat_id`, `sub_cat_name`, `category_id`, `status`) VALUES
(2, 'Single', 3, 1),
(3, 'Double', 3, 1),
(4, 'Semi-Double', 3, 1),
(5, 'Single', 4, 1),
(6, 'Double', 4, 1),
(7, 'Single', 5, 1),
(8, 'Multiple', 5, 1),
(9, 'Single', 6, 1),
(10, 'Semi-Double', 6, 1),
(11, 'Double', 6, 1),
(12, 'Type one', 7, 1),
(13, 'Type Two', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(211) NOT NULL,
  `category_id` int(21) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `color` varchar(211) NOT NULL,
  `size` varchar(211) NOT NULL,
  `quantity` int(11) NOT NULL,
  `s_price` varchar(211) NOT NULL,
  `c_price` varchar(211) NOT NULL,
  `promo_code` varchar(211) NOT NULL,
  `video` varchar(211) NOT NULL,
  `p_desc` varchar(211) NOT NULL,
  `p_p` tinyint(3) DEFAULT NULL,
  `l_p` tinyint(3) DEFAULT NULL,
  `t_p` tinyint(3) DEFAULT NULL,
  `image1` varchar(211) DEFAULT NULL,
  `image2` varchar(211) DEFAULT NULL,
  `image3` varchar(122) DEFAULT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`p_id`, `p_name`, `category_id`, `sub_cat_id`, `brand_id`, `color`, `size`, `quantity`, `s_price`, `c_price`, `promo_code`, `video`, `p_desc`, `p_p`, `l_p`, `t_p`, `image1`, `image2`, `image3`, `status`) VALUES
(16, 'Sofa -1001', 3, 3, 2, 'White,Coffe', '5.5ft', 10, '20000', '11999', 'y-2020', 'No-video', 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time.', 1, NULL, 0, 'products_image/popular1.png', NULL, NULL, 1),
(17, 'Sofa -1002', 3, 3, 3, 'White,Orange', '5.5ft', 10, '25000', '14999', 'y-2020', 'No-video', 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time.', 1, NULL, NULL, 'products_image/popular2.png', NULL, NULL, 1),
(18, 'Sofa -1003', 3, 3, 4, 'White,green', '5.5ft', 10, '30000', '19998', 'y-2020', 'No-video', 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time.', 1, NULL, NULL, 'products_image/popular3.png', NULL, NULL, 1),
(19, 'Chair - 001', 5, 2, 3, 'Black,red', '2.2ft', 10, '5000', '3000', 'y-2020', 'No-video', 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time.', NULL, 1, NULL, 'products_image/popular4.png', NULL, NULL, 1),
(20, 'Chair - 002', 5, 2, 2, 'orange', '2.2ft', 10, '4000', '2500', 'y-2020', 'No-video', 'Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.', NULL, 1, NULL, 'products_image/card2.png', NULL, NULL, 1),
(21, 'Chair - 003', 5, 2, 4, 'white', '2.2ft', 10, '6000', '4500', 'y-2020', 'No-video', 'Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.', NULL, 1, NULL, 'products_image/card3.png', NULL, NULL, 1),
(22, 'luxurious sofa -001', 3, 8, 3, 'Dark Gray', '5.5ft', 10, '40000', '35000', 'y-2020', 'No-video', 'Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.', NULL, NULL, 1, 'products_image/popular7.png', NULL, NULL, 1),
(23, 'luxurious sofa -002', 3, 8, 3, 'orange gray', '5.5ft', 10, '40000', '35000', 'y-2020', 'No-video', 'Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.', NULL, NULL, 1, 'products_image/popular8.png', NULL, NULL, 1),
(24, 'luxurious sofa -003', 3, 8, 3, 'Off White', '5.5ft', 10, '50000', '45000', 'y-2020', 'No-video', 'Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.', NULL, NULL, 1, 'products_image/popular9.png', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_info`
--

CREATE TABLE `shipping_info` (
  `shipping_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `c_first_name` varchar(233) NOT NULL,
  `c_last_name` varchar(233) NOT NULL,
  `c_phone_num` varchar(233) NOT NULL,
  `c_email` varchar(244) NOT NULL,
  `address1` varchar(211) NOT NULL,
  `address2` varchar(211) DEFAULT NULL,
  `town` varchar(211) NOT NULL,
  `post_code` varchar(211) NOT NULL,
  `other_note` text DEFAULT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_info`
--

INSERT INTO `shipping_info` (`shipping_id`, `customer_id`, `c_first_name`, `c_last_name`, `c_phone_num`, `c_email`, `address1`, `address2`, `town`, `post_code`, `other_note`, `status`) VALUES
(67, 6, 'Sourav', 'KAiry', '01797338420', 'souravkairy420@gmail.com', 'Tilagor - Ambarkhana Road', '', 'sylhet', '3200', 'Please give me the actual one.', 1),
(68, 6, 'Sourav', 'KAiry', '01797338420', 'souravkairy420@gmail.com', 'Tilagor - Ambarkhana Road', '', 'sylhet', '3200', '', 1),
(69, 6, 'Sourav', 'Kairy', '+8801797338420', 'souravkairy420@gmail.com', 'Tilagor - Ambarkhana Road', '', 'sylhet', '3200', '', 1),
(70, 6, 'Sourav', 'Kairy', '+8801797338420', 'souravkairy420@gmail.com', 'Tilagor - Ambarkhana Road', '', 'sylhet', '3200', '', 1),
(71, 0, 'Sourav', 'Kairy', '+8801797338420', 'souravkairy420@gmail.com', 'Tilagor - Ambarkhana Road', '', 'sylhet', '3200', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `customer_order_details`
--
ALTER TABLE `customer_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `shipping_info`
--
ALTER TABLE `shipping_info`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer_order_details`
--
ALTER TABLE `customer_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `shipping_info`
--
ALTER TABLE `shipping_info`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
