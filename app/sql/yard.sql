-- phpMyAdmin SQL Dump

-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2022 at 06:39 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16
-- version 5.2.0
-- https://www.phpmyadmin.net/
--

-- version 5.2.0
-- https://www.phpmyadmin.net/
--

-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 10:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yard`
--

-- --------------------------------------------------------

--

-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_code` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_code`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--

-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
-- --------------------------------------------------------

--

-- Table structure for table `commercial&finance`
--

CREATE TABLE `commercial&finance` (
  `commercial&finance_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `latitude` int(100) DEFAULT NULL,
  `longtitude` int(11) DEFAULT NULL,
  `cp_name` varchar(100) DEFAULT NULL,
  `cp_number` int(11) DEFAULT NULL,
  `email_address` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table structure for table `commercial`
--


-- Table structure for table `commercial`
--

CREATE TABLE `commercial` (
  `commercial_code` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `longitude` int(11) NOT NULL,
  `latitude` int(11) NOT NULL,
  `cp_name` varchar(20) NOT NULL,
  `cp_number` int(11) NOT NULL,
  `email_address` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commercial`
--

INSERT INTO `commercial` (`commercial_code`, `name`, `address`, `longitude`, `latitude`, `cp_name`, `cp_number`, `email_address`, `username`, `password`) VALUES
(1, 'Commercial  & Financ', 'No 23, Main Street, ', 0, 0, '', 0, '', 'pavan', 'pavan');


-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `category_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expense_category`
--

INSERT INTO `expense_category` (`category_code`, `name`, `description`) VALUES
(23423, 'fghrgherh', 'rehgerht');


-- --------------------------------------------------------

--
-- Table structure for table `expense_record`
--

CREATE TABLE `expense_record` (
  `expense_entry_no` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `name` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `source` longblob DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `expense_sub_category`
--

CREATE TABLE `expense_sub_category` (
  `sub_category_code` int(11) NOT NULL,
  `category_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fleetcenter`
--

CREATE TABLE `fleetcenter` (
  `fleetcenter_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `longitude` int(11) DEFAULT NULL,
  `latitude` int(11) DEFAULT NULL,
  `cp_name` varchar(100) DEFAULT NULL,
  `cp_number` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fleetcenter`
--

INSERT INTO `fleetcenter` (`fleetcenter_code`, `name`, `address`, `longitude`, `latitude`, `cp_name`, `cp_number`, `email_address`, `username`, `password`) VALUES
(1, 'Kandy', 'No 23, Main Street, Kandy', 80, 7, 'Shashini', '', '', 'shashini', 'shashini');


-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_code` int(11) NOT NULL,
  `bar_code` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `sub_category` int(11) NOT NULL,
  `opening_stock` int(11) DEFAULT NULL,
  `reorder_level` int(11) DEFAULT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `purchase_price` int(11) DEFAULT NULL,
  `image` varbinary(100) DEFAULT NULL,
  `ecommerce_status` binary(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  `ecommerce_status` binary(100) DEFAULT NULL,
  `category` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  `ecommerce_status` binary(100) DEFAULT NULL,
  `category` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_category_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `product_sub_category`
--

CREATE TABLE `product_sub_category` (
  `product_sub_category_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', 'admin'),
(5, 'bethmi', 'bethmi', 'warehouse'),
(6, 'shashini', 'shashini', 'fleet'),
(7, 'pavan', 'pavan', 'commercial');


-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (

  `vehicle_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `registration_no` varchar(100) DEFAULT NULL,
  `chassie_no` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `reg_no` varchar(100) DEFAULT NULL,
  `chassis_no` varchar(100) DEFAULT NULL,
  `engine_no` varchar(100) DEFAULT NULL,
  `mf_year` date DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `documents` longblob DEFAULT NULL,
  `vehicle_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
  `id` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `reg_no` varchar(100) DEFAULT NULL,
  `chassis_no` varchar(100) DEFAULT NULL,
  `engine_no` varchar(100) DEFAULT NULL,
  `mf_year` date DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `documents` longblob DEFAULT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_category`
--

CREATE TABLE `vehicle_category` (
  `vehicle_category_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `warehouse_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,

  `address` varchar(100) DEFAULT NULL,

  `address` varchar(100) DEFAULT 'Not Set',

  `address` varchar(100) DEFAULT 'Not Set',

  `longitude` int(11) DEFAULT NULL,
  `latitude` int(11) DEFAULT NULL,
  `cp_name` varchar(100) DEFAULT NULL,
  `cp_number` int(11) DEFAULT NULL,
  `email_address` varchar(100) NOT NULL,
  `fleet_center` int(11) DEFAULT NULL,
  `capacity` varchar(100) DEFAULT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`warehouse_code`, `name`, `address`, `longitude`, `latitude`, `cp_name`, `cp_number`, `email_address`, `fleet_center`, `capacity`, `username`, `password`) VALUES
(1, 'Nugegoda', 'No 07,  Cross Street , Nugegoda', 80, 7, '', 0, 'adeepabandara@gmail.com', 0, '', 'bethmi', 'bethmi');


--
-- Indexes for dumped tables
--

--

-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_code`);

--

-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_code`);

--

-- Indexes for table `commercial&finance`
--
ALTER TABLE `commercial&finance`
  ADD PRIMARY KEY (`commercial&finance_code`);

-- Indexes for table `commercial`
--
ALTER TABLE `commercial`
  ADD PRIMARY KEY (`commercial_code`);

-- Indexes for table `commercial`
--
ALTER TABLE `commercial`
  ADD PRIMARY KEY (`commercial_code`);


--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`category_code`);

--
-- Indexes for table `expense_record`
--
ALTER TABLE `expense_record`
  ADD PRIMARY KEY (`expense_entry_no`);

--
-- Indexes for table `expense_sub_category`
--
ALTER TABLE `expense_sub_category`
  ADD PRIMARY KEY (`sub_category_code`),
  ADD KEY `category_code` (`category_code`);

--
-- Indexes for table `fleetcenter`
--
ALTER TABLE `fleetcenter`
  ADD PRIMARY KEY (`fleetcenter_code`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_code`),
  ADD KEY `category` (`category`),
  ADD KEY `sub_category` (`sub_category`);

  ADD PRIMARY KEY (`product_code`);

  ADD PRIMARY KEY (`product_code`);


--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_category_code`);

--
-- Indexes for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  ADD PRIMARY KEY (`product_sub_category_code`),
  ADD KEY `category` (`category`);

--

-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_code`),
  ADD KEY `vehicle_category` (`vehicle_category`);

-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  ADD PRIMARY KEY (`vehicle_category_code`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`warehouse_code`),
  ADD KEY `fleet_center` (`fleet_center`);

--
-- AUTO_INCREMENT for dumped tables
--

--

-- AUTO_INCREMENT for table `brand`

-- AUTO_INCREMENT for table `admin`

--
ALTER TABLE `admin`
  MODIFY `admin_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--

ALTER TABLE `commercial&finance`
  MODIFY `commercial&finance_code` int(11) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_code` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `brand`
  MODIFY `brand_code` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`

  MODIFY `category_code` int(11) NOT NULL AUTO_INCREMENT;

  MODIFY `category_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23424;

  MODIFY `category_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23424;

--
-- AUTO_INCREMENT for table `expense_record`
--
ALTER TABLE `expense_record`
  MODIFY `expense_entry_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_sub_category`
--
ALTER TABLE `expense_sub_category`
  MODIFY `sub_category_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fleetcenter`
--
ALTER TABLE `fleetcenter`

  MODIFY `fleetcenter_code` int(11) NOT NULL AUTO_INCREMENT;

  MODIFY `fleetcenter_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  MODIFY `fleetcenter_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`

  MODIFY `product_code` int(11) NOT NULL AUTO_INCREMENT;

  MODIFY `product_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123124;

  MODIFY `product_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123124;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`

  MODIFY `product_category_code` int(11) NOT NULL AUTO_INCREMENT;

  MODIFY `product_category_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

  MODIFY `product_category_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


--
-- AUTO_INCREMENT for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  MODIFY `product_sub_category_code` int(11) NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_code` int(11) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


--
-- AUTO_INCREMENT for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  MODIFY `vehicle_category_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`

  MODIFY `warehouse_code` int(11) NOT NULL AUTO_INCREMENT;
  MODIFY `warehouse_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212314;
  MODIFY `warehouse_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212314;


--
-- Constraints for dumped tables
--

--
-- Constraints for table `expense_sub_category`
--
ALTER TABLE `expense_sub_category`
  ADD CONSTRAINT `expense_sub_category_ibfk_1` FOREIGN KEY (`category_code`) REFERENCES `expense_category` (`category_code`);

--

-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`sub_category`) REFERENCES `product_sub_category` (`product_sub_category_code`);

--


-- Constraints for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  ADD CONSTRAINT `product_sub_category_ibfk_1` FOREIGN KEY (`category`) REFERENCES `product_category` (`product_category_code`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`vehicle_category`) REFERENCES `vehicle_category` (`vehicle_category_code`);

--
-- Constraints for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `warehouse_ibfk_1` FOREIGN KEY (`fleet_center`) REFERENCES `fleetcenter` (`fleetcenter_code`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
