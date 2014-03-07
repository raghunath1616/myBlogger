-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2014 at 05:14 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `commented_by` varchar(255) NOT NULL,
  `comment_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment`, `commented_by`, `comment_date`) VALUES
(5, 1, 'There may be some more info you should give', 'Baiju', '2014-01-17'),
(8, 5, 'Try to give more information based on this. Then only it will be helpful to us...', 'Bala', '2014-01-18'),
(9, 7, 'Nice Post', 'Roshan', '2014-01-19'),
(13, 1, 'Nice Post', 'Balaji', '2014-01-19'),
(14, 12, 'Nice Post', 'Bala', '2014-01-19'),
(15, 1, 'Nice Post', 'Vinay', '2014-01-19'),
(16, 4, 'Nice Post!!!', 'Arjun', '2014-03-06'),
(18, 20, 'Good!', 'Roshan', '2014-03-06'),
(19, 113, 'What the heck is this?', 'Ashi', '2014-03-06'),
(20, 23, 'Nice article!!!', 'Babu', '2014-03-06'),
(21, 4, 'Nice', 'Roshan', '2014-03-06'),
(22, 116, 'Nice Post', 'Roshan', '2014-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Posted_by` varchar(255) NOT NULL,
  `PostDate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `Title`, `Content`, `Posted_by`, `PostDate`) VALUES
(1, 1, 'Fetch using and  jQuery', 'If you are using jQuery $.ajax() to fetch the records from the url, then specify the\r\ndatatype parameter as jsonp and set crossdomain property to true. so that you can make \r\ncross domain ajax requests.', 'Raghunathan', '2014-03-06'),
(4, 1, 'PHP web service optimization', 'I''m working on a web service in PHP which accesses an MSSQL database and have a few questions about handling large amounts of requests.\r\n\r\nI don''t actually know what constitutes ''high traffic'' and I don''t know if my service will ever experience ''high traffic'' but would optimisations in this area be largely attributed to the server processing speed and database access speed?\r\n\r\nCurrently when a request is sent to the server I do the following:\r\n\r\nOpen database connection\r\nProcess Request\r\nReturn data', 'Raghu', '2014-01-16'),
(20, 3, 'Model-View-Controller and MVC', 'CodeIgniter is based on the Model-View-Controller development pattern. MVC is a software approach that separates application logic from presentation. In practice, it permits your web pages to contain minimal scripting since the presentation is separate from the PHP scripting.', 'Vipi', '2014-01-19'),
(23, 2, 'CodeIgniter Packs a Punch', 'CodeIgniter comes with full-range of libraries that enable the most commonly needed web development tasks, like accessing a database, sending email, validating form data, maintaining sessions, manipulating images, working with XML-RPC data and much more.', 'Bijoy', '2014-01-19'),
(113, 2, 'Views', 'fsdfdfdsfdsf', 'Raghu', NULL),
(114, 1, 'Rendering Views in Backbone.js Isn''t Always Simple', 'When I first started using Backbone, one of my biggest unsolved problems was finding a good pattern for rendering views. It seems like it should be easy, but there are lots of pitfalls that crop up in larger apps, so I’ll show you what we’ve settled on at Segment.io.', 'Raghunathan', '2014-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `blog_title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_email`, `password`, `blog_title`) VALUES
(1, 'Raghunathan', 'A', 'raghunath1616@gmail.com', 'e92ef7097259f44114b410acb6b1d496', 'Web Crust'),
(2, 'Varun', 'Vasudev', 'varun@gmail.com', 'e92ef7097259f44114b410acb6b1d496', 'Nature bits'),
(3, 'Raghunathan', 'A', 'raghunath1616@gmail.com', '2510c39011c5be704182423e3a695e91', 'fdfdfdfsdf'),
(4, 'Raghunathan', 'A', 'raghunath1616@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', 'Web Crust'),
(5, 'Shaji', 'C', 'shaji@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', 'NAVI');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
