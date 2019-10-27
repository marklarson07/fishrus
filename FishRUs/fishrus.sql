-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 19, 2019 at 04:40 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `fishrus`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--
DROP TABLE IF EXISTS customer;

CREATE TABLE `customer` (
  `cust_id` int(10) NOT NULL,
  `address` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `address`, `name`, `phone`, `username`, `password`,`role`) VALUES
(1, '32 Sky ave', 'Mark Johnson', 4534859409, 'mj', 'passw1','customer'),
(2, '45 Jockey st', 'John Graham', 9473857465, 'jg', 'passw2','customer'),
(3, '435 Doge blvd', 'Joseph Baker', 5433453459, 'jb', 'passw3','customer'),
(4, '834 Tinker ave', 'Julian Castle', 7958375632, 'jc', 'passw4','customer'),
(5, '123 Rojado st', 'Juan Phelps', 1982647589, 'jp', 'passw5','customer'),
(6, '3333 Azul st', 'Juan Loco', 1982647588, 'jl', 'passw6','customer'),
(7, '1122 Alvin st', 'Don Lemon', 34855509, 'dl', 'passw7','customer'),
(8, '54 Tully st', 'Samuel Davis', 5473857465, 'sd', 'passw8','customer'),
(9, '985 Palmo blvd', 'Elizabeth Johns', 5431453459, 'eljo', 'passw9','customer'),
(10, '7766 Welker ave', 'Linda Moon', 7998375632, 'limoo', 'passw10','customer'),
(11, '777 Quail st', 'Illiana Rhodes', 1182647589, 'illirho', 'passw11','customer'),
(12, '2 Monk st', 'Tina Fisher', 35855509, 'tinfish', 'passw12','customer'),
(13, '544 Ulta st', 'Fogle Watson', 8473857465, 'fogwat', 'passw13','customer'),
(14, '856 Bulaga blvd', 'Michelle Neller', 5131453459, 'micnel', 'passw14','customer'),
(15, '11 Tongue ave', 'Marta Bule', 7198375632, 'marbul', 'passw15','customer'),
(16, '777 Quail st', 'Randy Keel', 1122647589, 'rankeel', 'passw16','customer'),
(17, '66 Rook st', 'Tammy Fant', 14855509, 'tamfan', 'passw17','customer'),
(18, '5466 Darns st', 'Rally Fuller', 5473817465, 'rallfull', 'passw18','customer'),
(19, '66553 Dingo blvd', 'Elsa Goodman', 2431453459, 'elsagood', 'passw19','customer'),
(20, '8885 Apple st', 'Tony Newman', 1382647589, 'tonnewm', 'passw20','customer');

-- --------------------------------------------------------

--
-- Table structure for table `fish_supplies`
--

DROP TABLE IF EXISTS fish_supplies;

CREATE TABLE `fish_supplies` (
  `product_id` int(10) NOT NULL,
  `upc_num` int(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fish_supplies`
--

INSERT INTO `fish_supplies` (`product_id`, `upc_num`, `quantity`, `name`) VALUES
(1, 1111111111, 55, 'red food'),
(2, 1111111112, 123, 'green food'),
(3, 1111111113, 14, 'yellow food'),
(4, 1111111114, 55, 'orange food'),
(5, 1111111115, 55, 'pink food'),
(6, 1111111116, 34, 'tank soap'),
(7, 1111111117, 55, 'tank filter'),
(8, 1111111118, 32, 'tank filter 2'),
(9, 1111111119, 68, 'tank filter 3'),
(10, 1111111120, 55, 'faux algae'),
(11, 1111111121, 55, 'faux coral'),
(12, 1111111122, 34, 'fish house'),
(13, 1111111123, 55, 'fish tank(sm)'),
(14, 1111111124, 55, 'fish tank (md)'),
(15, 1111111125, 56, 'fish tank (lg)'),
(16, 1111111126, 46, 'bedrocks'),
(17, 1111111127, 40, 'bubbler'),
(18, 1111111128, 40, 'fish light (blue)'),
(19, 1111111129, 40, 'fish light (green)'),
(20, 1111111130, 40, 'fish light (red)');

-- --------------------------------------------------------

--
-- Table structure for table `fw_and_sw_fish`
--

DROP TABLE IF EXISTS fw_and_sw_fish;

CREATE TABLE `fw_and_sw_fish` (
  `product_id` int(10) NOT NULL,
  `breed` varchar(20) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fw_and_sw_fish`
--

INSERT INTO `fw_and_sw_fish` (`product_id`, `breed`, `quantity`) VALUES
(21, 'cat', 100),
(22, 'salmon', 100),
(23, 'tiger', 100),
(24, 'salmon', 100),
(25, 'lion', 100),
(26, 'zebra', 100),
(27, 'leopard', 100),
(28, 'dinosaur', 100),
(29, 'alligator', 100),
(30, 'tero', 100),
(31, 'minka', 100),
(32, 'traic', 100),
(33, 'lair', 100),
(34, 'poon', 100),
(35, 'dinkari', 122),
(36, 'macreen', 100),
(37, 'opolo', 100),
(38, 'relta', 100),
(39, 'qualtri', 100),
(40, 'finke', 100);

-- --------------------------------------------------------

--
-- Table structure for table `fw_fish`
--

DROP TABLE IF EXISTS fw_fish;

CREATE TABLE `fw_fish` (
  `product_id` int(10) NOT NULL,
  `breed` varchar(20) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fw_fish`
--

INSERT INTO `fw_fish` (`product_id`, `breed`, `quantity`) VALUES
(41, 'Fresh cat', 100),
(42, 'Fresh salmon', 100),
(43, 'Fresh tiger', 100),
(44, 'Fresh salmon', 100),
(45, 'Fresh lion', 100),
(46, 'Fresh zebra', 100),
(47, 'Fresh leopard', 100),
(48, 'Fresh dinosaur', 100),
(49, 'Fresh alligator', 100),
(50, 'Fresh tero', 100),
(51, 'Fresh minka', 100),
(52, 'Fresh traic', 100),
(53, 'Fresh lair', 100),
(54, 'Fresh poon', 100),
(55, 'Fresh dinkari', 100),
(56, 'Fresh macreen', 100),
(57, 'Fresh opolo', 100),
(58, 'Fresh relta', 100),
(59, 'Fresh qualtri', 100),
(60, 'Fresh finke', 100);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS orders;

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `cust_id` int(10) DEFAULT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_id`, `order_date`) VALUES
(1, 1, '2019-02-10'),
(2, 2, '2017-11-11'),
(3, 3, '2015-02-12'),
(4, 4, '2019-02-13'),
(5, 5, '2019-02-13'),
(6, 6, '2019-02-14'),
(7, 7, '2019-02-15'),
(8, 8, '2019-02-16'),
(9, 9, '2019-02-17'),
(10, 10, '2019-02-11'),
(11, 11, '2019-02-19'),
(12, 12, '2019-02-23'),
(13, 13, '2019-02-25'),
(14, 14, '2019-02-21'),
(15, 15, '2019-02-15'),
(16, 16, '2019-02-15'),
(17, 17, '2019-02-27'),
(18, 18, '2019-02-22'),
(19, 19, '2019-02-13'),
(20, 20, '2019-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

DROP TABLE IF EXISTS order_line;

CREATE TABLE `order_line` (
  `order_id` int(10) NOT NULL,
  `line_num` int(10) NOT NULL,
  `product_id` int(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_line`
--

INSERT INTO `order_line` (`order_id`, `line_num`, `product_id`, `quantity`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(6, 1, 6, 1),
(7, 1, 7, 1),
(8, 1, 8, 1),
(9, 1, 9, 1),
(10, 1, 10, 1),
(11, 1, 11, 1),
(12, 1, 12, 1),
(13, 1, 13, 1),
(14, 1, 14, 1),
(15, 1, 15, 1),
(16, 1, 16, 1),
(17, 1, 17, 1),
(18, 1, 18, 1),
(19, 1, 19, 1),
(20, 1, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--
DROP TABLE IF EXISTS product;

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `supplier_id` int(10) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `supplier_id`, `phone`) VALUES
(1, 1, 1234567890),
(2, 2, 8484848484),
(3, 3, 4545454545),
(4, 4, 5656565656),
(5, 5, 6767676767),
(6, 6, 7878787787),
(7, 7, 8989898989),
(8, 8, 1122112211),
(9, 9, 2233223322),
(10, 10, 334433443),
(11, 11, 554445544),
(12, 12, 665555566),
(13, 13, 344535353),
(14, 14, 676575676),
(15, 15, 678686654),
(16, 16, 768756456),
(17, 17, 787654654),
(18, 18, 786756464),
(19, 19, 568765645),
(20, 20, 798867556),
(21, 1, 1234567890),
(22, 2, 8484848484),
(23, 3, 4545454545),
(24, 4, 5656565656),
(25, 5, 6767676767),
(26, 6, 7878787787),
(27, 7, 8989898989),
(28, 8, 1122112211),
(29, 9, 2233223322),
(30, 10, 334433443),
(31, 11, 554445544),
(32, 12, 665555566),
(33, 13, 344535353),
(34, 14, 676575676),
(35, 15, 678686654),
(36, 16, 768756456),
(37, 17, 787654654),
(38, 18, 786756464),
(39, 19, 568765645),
(40, 20, 798867556),
(41, 20, 798867556),
(42, 20, 798867556),
(43, 20, 798867556),
(44, 20, 798867556),
(45, 20, 798867556),
(46, 20, 798867556),
(47, 1, 1234567890),
(48, 18, 786756464),
(49, 1, 1234567890),
(50, 2, 8484848484),
(51, 3, 4545454545),
(52, 4, 5656565656),
(53, 5, 6767676767),
(54, 6, 7878787787),
(55, 7, 8989898989),
(56, 8, 1122112211),
(57, 9, 2233223322),
(58, 10, 334433443),
(59, 11, 554445544),
(60, 12, 665555566),
(61, 13, 344535353),
(62, 14, 676575676),
(63, 15, 678686654),
(64, 16, 768756456),
(65, 17, 787654654),
(66, 18, 786756464),
(67, 19, 568765645),
(68, 20, 798867556),
(69, 1, 1234567890),
(70, 2, 8484848484),
(71, 3, 4545454545),
(72, 4, 5656565656),
(73, 5, 6767676767),
(74, 6, 7878787787),
(75, 7, 8989898989),
(76, 8, 1122112211),
(77, 9, 2233223322),
(78, 10, 334433443),
(79, 10, 334433443),
(80, 4, 5656565656);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS store;

CREATE TABLE `store` (
  `store_id` int(10) NOT NULL,
  `address` varchar(20) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `address`, `phone`) VALUES
(1, '12 Califnornia Ave', 1223322332),
(2, '14 Arizona Ave', 1223322333),
(3, '15 Nevada Ave', 1223322334),
(4, '32 Utah Ave', 1223322335),
(5, '34 Ohio Ave', 1223322336),
(6, '234 New York Ave', 1223322337),
(7, '234 Orlando Ave', 1223322338),
(8, '665 Florida Ave', 1223322339),
(9, '345 Texas Ave', 1223322330),
(10, '43 Wyoming Ave', 1223322322),
(11, '33 Montana Ave', 1223322323),
(12, '87 Dakota Ave', 1223322324),
(13, '56 Washington Ave', 1223322325),
(14, '222 Maine Ave', 1223322326),
(15, '133 Bedford Ave', 1223322327),
(16, '345 Vermont Ave', 1223322328),
(17, '178 Colorado Ave', 1223322329),
(18, '999 New Mexivo Ave', 1223322330),
(19, '435 Kansas Ave', 1223322666),
(20, '11 Nebraska Ave', 1223322333);

-- --------------------------------------------------------

--
-- Table structure for table `store_product_line`
--

DROP TABLE IF EXISTS store_product_line;

CREATE TABLE `store_product_line` (
  `store_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store_product_line`
--

INSERT INTO `store_product_line` (`store_id`, `product_id`, `quantity`) VALUES
(1, 1, 5),
(1, 2, 5),
(1, 3, 5),
(1, 4, 5),
(1, 5, 5),
(2, 6, 5),
(2, 7, 5),
(2, 8, 5),
(2, 9, 5),
(2, 10, 5),
(3, 11, 5),
(3, 12, 5),
(3, 13, 5),
(3, 14, 5),
(3, 15, 5),
(4, 16, 5),
(4, 17, 5),
(4, 18, 5),
(4, 19, 5),
(4, 20, 5),
(5, 21, 5),
(5, 22, 5),
(5, 23, 5),
(5, 24, 5),
(5, 25, 5),
(6, 26, 5),
(6, 27, 5),
(6, 28, 5),
(6, 29, 5),
(6, 30, 5),
(7, 31, 5),
(7, 32, 5),
(7, 33, 5),
(7, 34, 5),
(7, 35, 5),
(8, 36, 5),
(8, 37, 5),
(8, 38, 5),
(8, 39, 5),
(8, 40, 5),
(9, 41, 5),
(9, 42, 5),
(9, 43, 5),
(9, 44, 5),
(9, 45, 5),
(10, 46, 5),
(10, 47, 5),
(10, 48, 5),
(11, 49, 5),
(11, 50, 5),
(11, 51, 5),
(12, 52, 5),
(12, 53, 5),
(12, 54, 5),
(12, 55, 5),
(12, 56, 5),
(13, 57, 5),
(13, 58, 5),
(13, 59, 5),
(13, 60, 5),
(13, 61, 5),
(14, 62, 5),
(14, 63, 5),
(14, 64, 5),
(14, 65, 5),
(14, 66, 5),
(15, 67, 5),
(15, 68, 5),
(15, 69, 5),
(16, 70, 5),
(16, 71, 5),
(17, 72, 5),
(17, 73, 5),
(18, 74, 5),
(18, 75, 5),
(19, 76, 5),
(19, 77, 5),
(19, 78, 5),
(20, 79, 5),
(20, 80, 5);

-- --------------------------------------------------------

--
-- Table structure for table `store_visits`
--

DROP TABLE IF EXISTS store_visits;

CREATE TABLE `store_visits` (
  `cust_id` int(10) NOT NULL,
  `store_id` int(10) NOT NULL,
  `quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store_visits`
--

INSERT INTO `store_visits` (`cust_id`, `store_id`, `quantity`) VALUES
(1, 1, 3),
(2, 2, 3),
(3, 3, 3),
(4, 4, 3),
(5, 5, 3),
(6, 6, 3),
(7, 7, 3),
(8, 8, 3),
(9, 9, 3),
(10, 10, 3),
(11, 11, 3),
(12, 12, 3),
(13, 13, 3),
(14, 14, 3),
(15, 15, 3),
(16, 16, 3),
(17, 17, 3),
(18, 18, 3),
(19, 19, 3),
(20, 20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS suppliers;

CREATE TABLE `supplier` (
  `supplier_id` int(10) NOT NULL,
  `address` varchar(20) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `address`, `phone`) VALUES
(1, '1122 Grand Bldg', 1155443322),
(2, '1123 Grand Bldg', 2255443322),
(3, '1124 Grand Bldg', 3355443322),
(4, '1125 Grand Bldg', 4455443322),
(5, '1126 Grand Bldg', 5555443322),
(6, '1127 Grand Bldg', 1255443322),
(7, '1128 Grand Bldg', 7755443322),
(8, '1129 Grand Bldg', 8855443322),
(9, '2122 Grand Bldg', 9955443322),
(10, '322 Oakland Square', 8477746578),
(11, '323 Oakland Square', 2144662255),
(12, '324 Oakland Square', 2244662255),
(13, '325 Oakland Square', 2344662255),
(14, '326 Oakland Square', 2444662255),
(15, '327 Oakland Square', 2544662255),
(16, '328 Oakland Square', 2644662255),
(17, '329 Oakland Square', 8844662255),
(18, '333 Oakland Square', 8844662243),
(19, '334 Oakland Square', 8844662245),
(20, '335 Oakland Square', 8844662246);

-- --------------------------------------------------------

--
-- Table structure for table `sw_fish`
--

DROP TABLE IF EXISTS sw_fish;

CREATE TABLE `sw_fish` (
  `product_id` int(10) NOT NULL,
  `breed` varchar(20) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sw_fish`
--

INSERT INTO `sw_fish` (`product_id`, `breed`, `quantity`) VALUES
(41, 'Salt cat', 40),
(42, 'Salt salmon', 40),
(43, 'Salt tiger', 40),
(44, 'Salt salmon', 40),
(45, 'Salt lion', 40),
(46, 'Salt zebra', 40),
(47, 'Salt leopard', 40),
(48, 'Salt dinosaur', 40),
(49, 'Salt alligator', 40),
(50, 'Salt tero', 40),
(51, 'Salt minka', 40),
(52, 'Salt traic', 40),
(53, 'Salt lair', 40),
(54, 'Salt poon', 40),
(55, 'Salt dinkari', 40),
(56, 'Salt macreen', 40),
(57, 'Salt opolo', 40),
(58, 'Salt relta', 40),
(59, 'Salt qualtri', 40),
(60, 'Salt finke', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `fish_supplies`
--
ALTER TABLE `fish_supplies`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `fw_and_sw_fish`
--
ALTER TABLE `fw_and_sw_fish`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `fw_fish`
--
ALTER TABLE `fw_fish`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `order_line`
--
ALTER TABLE `order_line`
  ADD PRIMARY KEY (`order_id`,`line_num`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `store_product_line`
--
ALTER TABLE `store_product_line`
  ADD PRIMARY KEY (`store_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `store_visits`
--
ALTER TABLE `store_visits`
  ADD PRIMARY KEY (`cust_id`,`store_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `sw_fish`
--
ALTER TABLE `sw_fish`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fish_supplies`
--
ALTER TABLE `fish_supplies`
  ADD CONSTRAINT `fish_supplies_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `fw_and_sw_fish`
--
ALTER TABLE `fw_and_sw_fish`
  ADD CONSTRAINT `fw_and_sw_fish_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `fw_fish`
--
ALTER TABLE `fw_fish`
  ADD CONSTRAINT `fw_fish_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `order_line`
--
ALTER TABLE `order_line`
  ADD CONSTRAINT `order_line_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`);

--
-- Constraints for table `store_product_line`
--
ALTER TABLE `store_product_line`
  ADD CONSTRAINT `store_product_line_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `store` (`store_id`),
  ADD CONSTRAINT `store_product_line_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `store_visits`
--
ALTER TABLE `store_visits`
  ADD CONSTRAINT `store_visits_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `store_visits_ibfk_2` FOREIGN KEY (`store_id`) REFERENCES `store` (`store_id`);

--
-- Constraints for table `sw_fish`
--
ALTER TABLE `sw_fish`
  ADD CONSTRAINT `sw_fish_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
