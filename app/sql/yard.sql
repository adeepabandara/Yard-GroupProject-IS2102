-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 10:21 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

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
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `name`, `nic`, `contact_no`, `address`, `email_address`) VALUES
('001', 'Adeepa', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `category_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fleetcenter`
--

INSERT INTO `fleetcenter` (`fleetcenter_code`, `name`, `address`, `longitude`, `latitude`, `cp_name`, `cp_number`, `email_address`, `username`, `password`) VALUES
(1, 'Kandy', 'No 23, Main Street, Kandy', 80, 7, 'Shashini', '', '', 'shashini', 'shashini');

-- --------------------------------------------------------

--
-- Table structure for table `fleetjob_details`
--

CREATE TABLE `fleetjob_details` (
  `id` int(11) NOT NULL,
  `fj_code` varchar(100) NOT NULL,
  `po_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fleetjob_details`
--

INSERT INTO `fleetjob_details` (`id`, `fj_code`, `po_code`) VALUES
(21, 'FJ2', 'PO1');

-- --------------------------------------------------------

--
-- Table structure for table `fleet_job`
--

CREATE TABLE `fleet_job` (
  `fj_code` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dispatch_date` date NOT NULL,
  `vehicle_id` varchar(100) NOT NULL,
  `driver_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fleet_job`
--

INSERT INTO `fleet_job` (`fj_code`, `created_date`, `dispatch_date`, `vehicle_id`, `driver_id`) VALUES
('FJ1', '0000-00-00 00:00:00', '0000-00-00', '', ''),
('FJ2', '0000-00-00 00:00:00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_code` varchar(100) NOT NULL,
  `bar_code` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `opening_stock` int(11) DEFAULT NULL,
  `reorder_level` int(11) DEFAULT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `purchase_price` int(11) DEFAULT NULL,
  `image` varbinary(100) DEFAULT NULL,
  `ecommerce_status` binary(100) DEFAULT NULL,
  `category` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_code`, `bar_code`, `name`, `opening_stock`, `reorder_level`, `selling_price`, `purchase_price`, `image`, `ecommerce_status`, `category`) VALUES
('100', NULL, 'Coca Cola Pet 100ml', NULL, NULL, NULL, NULL, NULL, NULL, ''),
('2', NULL, 'Sprite Pet 100Ml', NULL, NULL, NULL, NULL, NULL, NULL, ''),
('3', NULL, 'Fanta', NULL, NULL, NULL, NULL, NULL, NULL, ''),
('4', NULL, 'KIK Cola', NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_category_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `po_code` varchar(100) NOT NULL,
  `supplier_code` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `requested_date` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`po_code`, `supplier_code`, `created_date`, `requested_date`, `status`) VALUES
('PO1', '0', '0000-00-00', '0000-00-00', 'Draft');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_details`
--

CREATE TABLE `purchase_order_details` (
  `id` int(100) NOT NULL,
  `po_code` varchar(100) DEFAULT NULL,
  `product_code` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL,
  `pr_code` varchar(100) DEFAULT NULL,
  `warehouse_code` varchar(100) DEFAULT NULL,
  `detail_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_order_details`
--

INSERT INTO `purchase_order_details` (`id`, `po_code`, `product_code`, `description`, `price`, `quantity`, `pr_code`, `warehouse_code`, `detail_id`) VALUES
(28, 'PO1', '2', '', 90, 678, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_requisition`
--

CREATE TABLE `purchase_requisition` (
  `pr_code` varchar(100) NOT NULL,
  `warehouse_code` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `requested_date` date NOT NULL,
  `pr_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requisition_details`
--

CREATE TABLE `requisition_details` (
  `id` int(10) NOT NULL,
  `pr_code` varchar(100) DEFAULT NULL,
  `product_code` varchar(100) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL,
  `supplier_code` varchar(100) DEFAULT NULL,
  `product_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_code` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cp_name` varchar(20) NOT NULL,
  `cp_number` varchar(20) NOT NULL,
  `defualt_email_body` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_code`, `name`, `address`, `email`, `cp_name`, `cp_number`, `defualt_email_body`) VALUES
('0', 'Coca Cola Biyagama', '', '', '', '', ''),
('2', 'Ceylon Cold Store Gr', '', '', '', '', ''),
('3', 'Nestle Wellawatte', '', '', '', '', '');

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
(2, 'adeepa', 'adeepa', 'driver'),
(5, 'bethmi', 'bethmi', 'warehouse'),
(6, 'shashini', 'shashini', 'fleet'),
(7, 'pavan', 'pavan', 'commercial');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `reg_no` varchar(100) DEFAULT NULL,
  `chassis_no` varchar(100) DEFAULT NULL,
  `engine_no` varchar(100) DEFAULT NULL,
  `mf_year` date DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `documents` longblob DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `warehouse_code` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`warehouse_code`, `name`, `address`, `longitude`, `latitude`, `cp_name`, `cp_number`, `email_address`, `fleet_center`, `capacity`, `username`, `password`) VALUES
('WAR1', 'Galle', 'Not Set', 0, 0, '', 0, '', 0, '', '', '');

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
-- Indexes for table `commercial`
--
ALTER TABLE `commercial`
  ADD PRIMARY KEY (`commercial_code`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

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
-- Indexes for table `fleetjob_details`
--
ALTER TABLE `fleetjob_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fj_code` (`fj_code`),
  ADD KEY `po_code` (`po_code`);

--
-- Indexes for table `fleet_job`
--
ALTER TABLE `fleet_job`
  ADD PRIMARY KEY (`fj_code`),
  ADD KEY `assigned_driver` (`driver_id`),
  ADD KEY `fleet_job_ibfk_2` (`vehicle_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`po_code`),
  ADD KEY `supplier_code` (`supplier_code`);

--
-- Indexes for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_id` (`detail_id`),
  ADD KEY `pr_code` (`pr_code`),
  ADD KEY `warehouse_code` (`warehouse_code`),
  ADD KEY `product_code` (`product_code`),
  ADD KEY `po_code` (`po_code`);

--
-- Indexes for table `purchase_requisition`
--
ALTER TABLE `purchase_requisition`
  ADD PRIMARY KEY (`pr_code`),
  ADD KEY `warehouse_code` (`warehouse_code`);

--
-- Indexes for table `requisition_details`
--
ALTER TABLE `requisition_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pr_code` (`pr_code`),
  ADD KEY `product_code` (`product_code`),
  ADD KEY `supplier_code` (`supplier_code`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
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
  MODIFY `fleetcenter_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fleetjob_details`
--
ALTER TABLE `fleetjob_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_category_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  MODIFY `product_sub_category_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `requisition_details`
--
ALTER TABLE `requisition_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vehicle_category`
--
ALTER TABLE `vehicle_category`
  MODIFY `vehicle_category_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expense_sub_category`
--
ALTER TABLE `expense_sub_category`
  ADD CONSTRAINT `expense_sub_category_ibfk_1` FOREIGN KEY (`category_code`) REFERENCES `expense_category` (`category_code`);

--
-- Constraints for table `fleetjob_details`
--
ALTER TABLE `fleetjob_details`
  ADD CONSTRAINT `fleetjob_details_ibfk_1` FOREIGN KEY (`fj_code`) REFERENCES `fleet_job` (`fj_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fleetjob_details_ibfk_2` FOREIGN KEY (`po_code`) REFERENCES `purchase_order` (`po_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  ADD CONSTRAINT `product_sub_category_ibfk_1` FOREIGN KEY (`category`) REFERENCES `product_category` (`product_category_code`);

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_ibfk_1` FOREIGN KEY (`supplier_code`) REFERENCES `supplier` (`supplier_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  ADD CONSTRAINT `purchase_order_details_ibfk_1` FOREIGN KEY (`pr_code`) REFERENCES `purchase_requisition` (`pr_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_order_details_ibfk_2` FOREIGN KEY (`warehouse_code`) REFERENCES `warehouse` (`warehouse_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_order_details_ibfk_3` FOREIGN KEY (`product_code`) REFERENCES `product` (`product_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_order_details_ibfk_4` FOREIGN KEY (`po_code`) REFERENCES `purchase_order` (`po_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase_requisition`
--
ALTER TABLE `purchase_requisition`
  ADD CONSTRAINT `purchase_requisition_ibfk_1` FOREIGN KEY (`warehouse_code`) REFERENCES `warehouse` (`warehouse_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requisition_details`
--
ALTER TABLE `requisition_details`
  ADD CONSTRAINT `requisition_details_ibfk_1` FOREIGN KEY (`pr_code`) REFERENCES `purchase_requisition` (`pr_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requisition_details_ibfk_2` FOREIGN KEY (`product_code`) REFERENCES `product` (`product_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requisition_details_ibfk_3` FOREIGN KEY (`supplier_code`) REFERENCES `supplier` (`supplier_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
