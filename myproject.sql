-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2025 at 02:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `venuebk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_currentdate` text NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `booking_duration` varchar(30) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `booking_details` varchar(50) NOT NULL,
  `booking_status` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback_date` date NOT NULL,
  `feedback_details` text NOT NULL,
  `feedback_rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(30) NOT NULL,
  `location_pincode` int(6) NOT NULL,
  `location_longitude` varchar(40) NOT NULL,
  `location_latitude` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `amount` int(30) NOT NULL,
  `payment_method` varchar(30) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(1, 'Banquet'),
(2, 'Party Plot');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_mobile` bigint(10) NOT NULL,
  `user_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_venueimages`
--

CREATE TABLE `tbl_venueimages` (
  `venueimage_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `venue_imagepath` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_venueimages`
--

INSERT INTO `tbl_venueimages` (`venueimage_id`, `venue_id`, `venue_imagepath`) VALUES
(1, 1, 'radhika1.jpeg'),
(2, 1, 'radhika2.jpeg'),
(3, 1, 'radhika3.jpeg'),
(4, 1, 'radhika4.jpeg'),
(5, 2, 'courtyard1.jpg'),
(6, 2, 'courtyard2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_venuemaster`
--

CREATE TABLE `tbl_venuemaster` (
  `venue_id` bigint(11) NOT NULL,
  `venue_title` varchar(30) NOT NULL,
  `venue_name` varchar(30) NOT NULL,
  `venue_email` varchar(30) NOT NULL,
  `venue_mobile` bigint(10) NOT NULL,
  `venue_password` varchar(30) NOT NULL,
  `location_id` int(11) NOT NULL,
  `venue_address` varchar(300) NOT NULL,
  `venue_capacity` int(30) NOT NULL,
  `venue_price` int(30) NOT NULL,
  `venue_details` text DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `venue_photopath` varchar(300) NOT NULL,
  `venue_map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_venuemaster`
--

INSERT INTO `tbl_venuemaster` (`venue_id`, `venue_title`, `venue_name`, `venue_email`, `venue_mobile`, `venue_password`, `location_id`, `venue_address`, `venue_capacity`, `venue_price`, `venue_details`, `type_id`, `venue_photopath`, `venue_map`) VALUES
(1, 'Radhika Plot', 'Siddhrath Roy', 'shahpriyav26@gmail.com', 7456891230, '3290', 6, '203, Sindhu Bhavan Marg, PRL Colony, Bodakdev, Ahmedabad, Gujarat 380054', 500, 60000, 'Radhika Party plot is a medium sized open to air banquet, and can comfortably accomodate about 600 persons of a static crowd and about a 1000 strong dynamic crowd. It is located on Sindhu Bhuvan Road, adjacent to Tradebulls. The entry is from the side Street and parking during the peak wedding season is a nightmare on account of a conglomeration of a good number of party plots in the vicinity.', 2, 'Radhika.jpeg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.531163300322!2d72.5030925743682!3d23.040980415642824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b4459a13991%3A0x6df33e5fba578dbf!2sRadhika%20Party%20Plot!5e0!3m2!1sen!2sin!4v1708479857964!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(2, 'Courtyard By Marriott', 'Rohit saraf', 'rohit@gmail.com', 8520147963, 'rohit123', 1, 'Ramdev Nagar Cross Road, Satellite Rd, Satellite, Ahmedabad, Gujarat 380015', 1000, 100000, 'Fantastic stay. Clean and comfortable, with courteous and enthusiastic staff. Breakfast is excellent, wide range of western as well as Indian choices. A Gujarati breakfast stand was a very pleasant surprise.', 9, 'Courtiyard.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.8884782835275!2d72.50970537436777!3d23.027866616132435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b36db2830a1%3A0xba2e70709c848c23!2sCourtyard%20by%20Marriott%20Ahmedabad!5e0!3m2!1sen!2sin!4v1708479219493!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(3, 'Aamrakunj Farm', 'Ayush Gandhi', 'ayush@gmail.com', 8523697410, 'ayush1234', 21, 'Sarkhej - Gandhinagar Hwy, Opposite .Prahladnagar Honest, Mumatpura, Ahmedabad, Gujarat 380058', 2000, 200000, 'This Place in Ahmedabad is a beautiful outdoor destination to exchange your vows with the love of your life. With premier hospitality, best in class services and a captivating ambiance, this promises you the remarkable guest experience.', 1, 'Aamrakunj Farm.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.342630033231!2d72.49943937436724!3d23.011188616754637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b20d760c6ad%3A0xa530d33bc042a5a2!2sAamrakunj%20Farm!5e0!3m2!1sen!2sin!4v1708479982894!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_venueimages`
--
ALTER TABLE `tbl_venueimages`
  ADD PRIMARY KEY (`venueimage_id`);

--
-- Indexes for table `tbl_venuemaster`
--
ALTER TABLE `tbl_venuemaster`
  ADD PRIMARY KEY (`venue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_venueimages`
--
ALTER TABLE `tbl_venueimages`
  MODIFY `venueimage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_venuemaster`
--
ALTER TABLE `tbl_venuemaster`
  MODIFY `venue_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
