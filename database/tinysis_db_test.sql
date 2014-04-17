-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2014 at 08:07 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tinysis`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `number` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `number`, `name`, `description`) VALUES
(1, '201', 'Database Management', 'prerequisite course: 101'),
(2, '221', 'Compter Graphics', 'prerequisite course: 121'),
(3, '401', 'English Literature', 'prerequisite course: 121'),
(4, '312', 'Ethics', 'prerequisite course: 129'),
(5, '612', 'Advanced Programming', 'prerequisite course: 531'),
(6, '201', 'Database Management', 'prerequisite course: 101'),
(7, '720', 'Secure Data Management', 'This is a great course to learn about Security and meet smart people!');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `courses_teaching` text COMMENT 'Points to the user''s id.',
  `phone` text,
  `user_id` int(11) NOT NULL COMMENT 'Points to the user''s id.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `fname`, `lname`, `courses_teaching`, `phone`, `user_id`) VALUES
(1, 'James', 'Palis', '2;3', '91279999499', 11),
(2, 'Tiffany', 'Bohmann', '1;2;3', '83451230967', 12),
(3, 'Amy', 'Kiernan', '1;2;3', '3145115', 13),
(4, 'Ricky', 'Libby', '3;4;5', '2751209', 14),
(5, 'Tony', 'Taylor', '3;4;5', '3159113', 15),
(6, 'Michael', 'Dodge', '1;3;4', '7478912', 16),
(7, 'Jason', 'Huang', '1;4;5', '7213489', 17),
(8, 'Vincent', 'Bader', '2;1;5', '6263534', 18);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `suid` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `ssn` int(11) DEFAULT NULL,
  `address` text,
  `phone` text,
  `courses_taking` text COMMENT 'Points to course''s ids separated by ;',
  `user_id` int(11) NOT NULL COMMENT 'Points to the user''s id.',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `suid`, `fname`, `lname`, `ssn`, `address`, `phone`, `courses_taking`, `user_id`) VALUES
(1, 20120112, 'Peter', 'Gable', 423231223, 'University Park 498, Rochester NYC 14612', '91877777', '1;2;7', 1),
(2, 20120182, 'Mary', 'Johnson', 118232378, 'University Park 221, Rochester NY 14618', '3231123', '2;3;4', 2),
(3, 20120318, 'Steven', 'Sanko', 125482312, 'Riverside 120, Rochester NY 14620', '7187234', '3;', 3),
(4, 20131312, 'Pushkar', 'Josh', 118232378, 'College Tower 1214, Rochester NY 14618', '2731510', '2;3', 4),
(5, 20130881, 'Ann', 'Lee', 221812323, '48 Ice Drive, Rochester NY 14615', '9259123', '1;2;3;4', 5),
(6, 20110612, 'Min', 'Liu', 532823454, '2630 Shady Ln, Rochester NY 14621', '7321213', '4;3', 6),
(7, 20111191, 'Jane', 'Scovile', 211912123, '125 Latimore Rd, Rochester NY 14610', '4699871', '4;', 7),
(9, 20110912, 'Tina', 'Stone', 231337618, '307 Richardson Rd, Rochester NY 14623', '5259888', '6;1', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role` tinyint(1) NOT NULL COMMENT '1=>student, 2=>instructor, 3=> administrator, 4=>super user',
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `email`, `password`) VALUES
(1, 1, 'pg3467@rit.edu', '4b8373d016f277527198385ba72fda0feb5da015'),
(2, 1, 'mj0212@rit.edu', '5665331b9b819ac358165f8c38970dc8c7ddb47d'),
(3, 1, 'ss9823@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(4, 1, 'pj8981@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(5, 1, 'al9012@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(6, 1, 'ml3410@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(7, 1, 'jc9012@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(8, 1, 'jh3419@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(9, 1, 'ts3467@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(10, 1, 'jd0214@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(11, 2, 'jpalis@rit.edu', '474ba67bdb289c6263b36dfd8a7bed6c85b04943'),
(12, 2, 'tbohmann@rit.edu', '7539b2514c21539549e11eca3b17b90ddadbdeca'),
(13, 2, 'akiernan@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(14, 2, 'rlibby@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(15, 2, 'ttaylor@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(16, 2, 'mdodge@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(17, 2, 'jhuang@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(18, 2, 'vbader@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(19, 3, 'tigerwoods@rit.edu', 'c1a8efe29535d2d1b289858186a847bdb278a215'),
(20, 3, 'sharonswiff@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(21, 4, 'quinputer@rit.edu', '752bfa411fd7cda529ac29ae1f00ab554851309a'),
(22, 4, 'miaphipps@rit.edu', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3'),
(23, 4, 'txh7358@rit.edu', 'e11fb3c37265b6695ce64b9d25fb3a9b3357abee');

-- --------------------------------------------------------

--
-- Table structure for table `user_activity`
--

CREATE TABLE `user_activity` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ip_address` text NOT NULL,
  `last_login` int(11) NOT NULL,
  `last_logout` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_activity`
--

INSERT INTO `user_activity` (`id`, `user_id`, `ip_address`, `last_login`, `last_logout`) VALUES
(6, 19, '::1', 1397692982, 1397693000);
