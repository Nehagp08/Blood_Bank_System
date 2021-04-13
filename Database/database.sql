-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- PHP Version: 7.2.33


-- Database: `bloodbank`
--

-- ------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------

--
-- Table structure for table `seeker_request`
--

CREATE TABLE `checked` (
  `id` int(30) NOT NULL,
  `ref_no` varchar(100) NOT NULL,
  `room_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `date_in` datetime NOT NULL,
  `date_out` datetime NOT NULL,
  `booked_cid` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1=checked in , 2 = checked out',
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seerker_request`
--

INSERT INTO `seeker_request` ( `firstname`, `lastname`, `gender`, `age`, `bloodgrp`, `unit`, `mobileno`, `email`, `address`, `state`, `request_date`, `request_type`, `create_time`) VALUES ( 'Aman', 'kumar', 'Male', '32', 'A+', '2', '7290987659', 'aman67@gmail.com', 'Sector-43, Noida', 'Uttar Pradesh', '23-Aril-2018','Normal', CURRENT_TIMESTAMP)

-- -------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------

--
-- Table structure for table `donor_register`
--

CREATE TABLE `rooms` (
  `id` int(30) NOT NULL,
  `room` varchar(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Available , 1= Unvailables'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_register`
--

INSERT INTO `donor_register` ( `first_name`, `last_name`, `gender`, `age`, `bloodgroup`, `mobile_no`, `email_id`, `address`, `state`, `donate_date`, `donor_token`, `insert_time`) VALUES ('Raj', 'Kumar', 'Female', '34', 'B+', '9987965432', 'rajkr98@gmail.com', 'Kanpur', 'Uttar Pradesh', '15-Feb-2019', '87h654', CURRENT_TIMESTAMP)

-- ---------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------

--
-- Table structure for table `singup`
--

CREATE TABLE `singup` (
  `id` int(30) NOT NULL,
  `username` varchar2(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singup`
--

INSERT INTO `singup` ( `username`,`email`, `password`, `create_date`) VALUES ('Aman','aman98@gmail.com' ,'aman123', CURRENT_TIMESTAMP)




-- -----------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------

--
-- Table structure for table `Contact_us_page`
--

CREATE TABLE `users` (
  `dno` int(8) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=admin , 2 = staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Contact_us_page`
--


INSERT INTO `contactuspage` ( `first_name`, `last_name`, `email`, `mobileno`, `message`, `create_time`) VALUES ('Neha', 'Kumari', 'nehagp9083@gmail.com', '9988776655', 'Hello Everyone', CURRENT_TIMESTAMP)

