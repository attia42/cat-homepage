-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2009 at 11:28 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `_catazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `contrib` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `index` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `feedbacks`
--


-- --------------------------------------------------------

--
-- Table structure for table `issuemanagment`
--

CREATE TABLE `issuemanagment` (
  `issueId` int(4) NOT NULL,
  `memberId` int(5) NOT NULL,
  `position` varchar(50) NOT NULL,
  KEY `memberId` (`memberId`),
  KEY `issueId` (`issueId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuemanagment`
--

INSERT INTO `issuemanagment` (`issueId`, `memberId`, `position`) VALUES
(1, 1, 'Manager1'),
(1, 2, 'Manager2');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` int(4) NOT NULL,
  `info` varchar(1600) default NULL,
  `releaseDate` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `info`, `releaseDate`) VALUES
(1, 'first Issue of CATazine', '2009-01-06 20:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(5) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) default NULL,
  `email` varchar(100) NOT NULL,
  `email2` varchar(100) default NULL,
  `education` varchar(255) default NULL,
  `information` varchar(1600) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `address`, `email`, `email2`, `education`, `information`) VALUES
(1, 'Mohamed Atia', 'Mansoura', 'snap4422@hotmail.com', '', 'km', 'sad'),
(2, '32432', 'Mansoura  ', 'snap4422swd@hotmail.com', NULL, NULL, NULL),
(3, 'asdad', 'Mansoura  ', 'snap4422asd@hotmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(7) NOT NULL auto_increment,
  `issueId` int(4) NOT NULL,
  `memberId` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `contentLink` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `issueId` (`issueId`),
  KEY `memberId` (`memberId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `issueId`, `memberId`, `name`, `category`, `contentLink`) VALUES
(1, 1, 1, 'Topic1', 'sad', 'a'),
(2, 1, 2, 'Topic2', 'sasd', ''),
(3, 1, 2, 'tttt', '', ''),
(4, 1, 2, '453657u', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issuemanagment`
--
ALTER TABLE `issuemanagment`
  ADD CONSTRAINT `issuemanagment_ibfk_1` FOREIGN KEY (`issueId`) REFERENCES `issues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `issuemanagment_ibfk_2` FOREIGN KEY (`memberId`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`issueId`) REFERENCES `issues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`memberId`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
