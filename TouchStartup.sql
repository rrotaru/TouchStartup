-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2013 at 01:11 PM
-- Server version: 5.5.30-30.1
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gibsanfo_mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `appID` char(32) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `location` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `file_location` varchar(60) DEFAULT NULL,
  `resume` mediumblob NOT NULL,
  `letter` mediumblob NOT NULL,
  `submitted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `other` mediumtext NOT NULL,
  `jobID` int(32) NOT NULL,
  `employeeID` char(32) NOT NULL,
  PRIMARY KEY (`appID`),
  KEY `name` (`firstName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`appID`, `firstName`, `lastName`, `location`, `occupation`, `email`, `file_location`, `resume`, `letter`, `submitted_date`, `other`, `jobID`, `employeeID`) VALUES
('79a2a1e20b63ab3386a309aa3ce495c5', 'sample6', 'sample6', 'sample6', 'sample6', 'sample6', NULL, '', '', '2013-06-06 22:52:49', '', 1, ''),
('ba27c28e89ea2b88959d38882fea321c', 'sample4', 'sample4', 'sample4', 'sample4', 'sample4', NULL, '', '', '2013-06-06 22:54:28', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `companyName` varchar(45) DEFAULT NULL,
  `companyDesc` varchar(150) NOT NULL DEFAULT '',
  `companyID` varchar(32) NOT NULL DEFAULT '0',
  `location` varchar(45) DEFAULT NULL,
  `userID` varchar(32) NOT NULL,
  PRIMARY KEY (`companyID`),
  UNIQUE KEY `companyID` (`companyID`),
  KEY `companyID_2` (`companyID`),
  KEY `companyID_3` (`companyID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyName`, `companyDesc`, `companyID`, `location`, `userID`) VALUES
('SeeClickFix', 'SeeClickFix works around the country with governments to solve problems.', '004205b515502a07122af5d4f1158b0d', 'New Haven, CT', '969bb576da3632a2aa79e1a17a3e53ea'),
('John''s Company', 'test test test', '0f48d26c26a3be3314cd4fc82709b069', 'New Haven, CT', 'face3e06759152da8a509bc6617caea7'),
('Startup Central', 'Helping Startups be Startups.', '4526057ba27e3a7bd3431e0f10fb4265', 'Manchester, CT', 'e68a0e4d51fe2e3937b6a12c1e875de4'),
('LaunchHaven', 'Launch Haven is a program that helps entrepreneurs present their ideas to investors and others.', '51cb5d1304f4ae13f997b981c6f88e1e', 'New Haven, CT', '66ee71aeac8798e88f9b0e4bc4b70cc0'),
('The Grove', 'The Grove is a collaborative work environment for professionals and entrepreneurs.', '581f55a894de5fd64b2a483d00092200', 'New Haven, CT', 'bf968e2df0687a3fa4b65887559d6080'),
('Create 96', 'Create 96 is a Grove program dedicated to bringing out talent and creativity in the community.', '7a7d3da8eade7137b82a1261d5f21d8f', 'New Haven, CT', 'fd91721649ad9bdfc02178a8d14a14d8'),
('CreativeGuru', 'Lots of guru with good ideas', 'ba53fad3ef963ab494e133be17f2be77', 'Westport, CT', 'c80430b228ddf011476e237db3a25d54'),
('Merit Booster', 'Merit Booster Description.', 'df0d6d55db978c0e17a6e137db76160c', 'New Haven, CT', 'ba16378e4c250e355ecec32e21cb22d4'),
('Independent Software', 'Independent Software is cool.', 'e457af1878f5970dda3d274ec4b25222', 'New Haven, CT', 'cf6f87a38e92d3c90f0bb5469e3d8ee2');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `employeeID` varchar(32) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `location` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `userID` varchar(32) NOT NULL,
  KEY `employeeID` (`employeeID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeID`, `firstName`, `lastName`, `location`, `occupation`, `userID`) VALUES
('499d38e4ee6367c780b93515e71090c7', 'Robert', 'Rotaru', 'Higganum, CT', 'Developer', 'e80f7f26de77eb03f2e4fbbe09a304c7'),
('e2668787d5cbd20991d612d9d6f39ca0', 'Gibsan', 'Abdu', 'New Haven, CT', 'Systems Analyst', '3f1c7d90c19be7e14de9c63bb2ec5bdb'),
('c7806c4c7deb2866e9f77d67fcddaefe', 'Ben', 'Berkowitz', 'New Haven, CT', 'CEO SeeClickFix', 'f8bde118bb349e090dc74f537170041d'),
('32f31715ebae0f7b5f9b404b430c19e2', 'Derek', 'Koch', 'New Haven, CT', 'CEO Independent Software', 'ac535b82012968882e4528b16aaa720a'),
('994ac58e6b82970aefa12a59131bfec9', 'Daniel', 'Stainback', 'New Haven, CT', 'Web Design', 'c9be8793a80ff1b4f0bbf80bcd4e5077'),
('e5858faff877e712b33cf9fd4f331dea', 'Emma', 'Richards', 'New Haven, CT', 'Client Relations at SeeClickFix', '8bbd141a26ff637262ecc27f4f7ebb5f'),
('232f183568e4f17b23ed838fe9f25eb8', 'Harv', 'Prentiss', 'North Haven, CT', 'A100 Apprentice', 'b833993bebfc192bbc9e9d2d9dd617cf'),
('c9845bc7d180b0f7d366c8b85099f81d', 'James', 'Roberts', 'New Haven, CT', 'A100 Apprentice', '5c5aac80fd5ee6069c4713ed4d362d2b'),
('fc30acc50f3aa41444e3507136e38c09', 'Jeff', 'Blasius', 'New Haven, CT', 'Chief Technical Officer at SeeClickFix', 'a6c5293d95d8bbe90184a96bd8d98cd0'),
('12248b7e783a4450da12f2510dc17ec7', 'John', 'C', 'North Haven, CT', 'CEO of John''s Company', 'e5be59537d15830a8dacd775731fc9ad'),
('202e83f103659d40ff480e313b821dbc', 'Yan', 'Huang', 'Westport, CT', 'PHP,C#', '7d5198d05f6472cdf5fd42815883d51d'),
('f3d0f17eada4063e1a0b0d6062847691', 'Neal', 'Raval', 'New Haven, CT', 'Support at Independent Software', 'fd742d29400fe154efdc1e8963f2cb9f'),
('9e960d19aa34e2c5b6a8ba23a01827dc', 'Katelyn', 'Anton', 'New Haven, CT', 'Independent Software', '0c17eb26acd75681844b26d8acab6072'),
('9f44562b650883b10709347052d299bc', 'Wenbin', 'Zhang', 'New Haven, CT', 'Software Developer at Independent Software', '40c528e1f71a95bef1c95278dfc99197'),
('cdb219a5e906d9a4a45a5c6407fea2af', 'Krishna', 'Sampath', 'New Haven, CT', 'A100 Mentor', 'f9716c8c4f75063ae40b9fc12c79f4de'),
('a7e47b9e1218e1acdc24a564544da3b5', 'Klayton', 'Wald', 'New Haven, CT', 'Art Director at Independent Software', '18c7acf53f8dc79b07ef7934cfcc1a8f'),
('0de7735cf8ae9a6e960e6918552ca9ed', 'Jeff', 'Mooney', 'New Haven, CT', 'SeeClickFix', '3bc594e95320fc0808b0f0b317f72cc2'),
('e03bf73e601e337ab9d16c7cf07fe1dc', 'Kam', 'Lasater', 'New Haven, CT', 'Chief Strategy Officer at SeeClickFix', '3fc868f4b3101fb1c557f4840fde106c'),
('ae277955d87074568c9274cf583f484d', 'Ken', 'Janke', 'New Haven, CT', 'Founder at The Grove', 'd96156810e0f9c6e505e2e627e6fff62'),
('d1a790c88678d3674ebe8df60bace87a', 'Melanie', 'Rice', 'New Haven, CT', 'A100 Apprentice', 'f45353504bda4f803c6407d27f2d0fef'),
('1a2044c858490cba9dd837f3029207fe', 'Miles', 'Lasater', 'New Haven, CT', 'Co-Founder of SeeClickFix', 'bbe153cdb60722b05aeb4df07fca68f2'),
('18d09bbd174836dcb4d09d013fcf0fe2', 'Slate', 'Ballard', 'New Haven, CT', 'The Grove', 'b2c6df6c9edb8a2c5ea3a153a73eb4bf');

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE IF NOT EXISTS `entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `company_description` mediumtext NOT NULL,
  `job_description` mediumtext NOT NULL,
  `skills` tinytext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `companyID` char(32) NOT NULL,
  `contact_name` varchar(30) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  `imageLink` varchar(100) NOT NULL DEFAULT 'images/default_user.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `type`, `location`, `company`, `company_description`, `job_description`, `skills`, `date`, `companyID`, `contact_name`, `contact_email`, `imageLink`) VALUES
(1, 'Senior Project Manager', 'Software Development', 'New Haven', 'SoftwareCentral', 'We develop.', 'Managing projects. ', 'Managing. Seniority. ', '2013-06-07 19:27:06', '0f48d26c26a3be3314cd4fc82709b069', 'Robert Rotaru', 'email@example.com', 'images/comp9.png'),
(2, 'Intern', 'Life long friend', 'Sesame Street', 'Barney and Co.', 'Bunch of fun loving pals ', 'In need of master puppetian.  ', 'Hand and eye and mouth cordination ', '2013-06-07 19:27:13', '0f48d26c26a3be3314cd4fc82709b069', 'Barney', 'Barney@sesame.street.com', 'images/comp8.png'),
(11, 'C# front end Developer', 'Full time', 'Westport, CT', 'CreativeGuru', ' Lots of Guru', ' building the layout', ' C#\r\nPHP', '2013-06-07 19:31:52', 'ba53fad3ef963ab494e133be17f2be77', 'Chuck Bass', 'chuck545@gmail.com', 'images/comp5.png'),
(13, 'A100 Apprentice', 'A100 Startup Training Program', 'New Haven, CT', 'Independent Software', ' Independent Software aims to aid New Haven startups into launching their ideas.', ' You will be learning what it takes to work in a startup company.', ' Basic programming experience and motivation.', '2013-06-07 19:23:05', 'e457af1878f5970dda3d274ec4b25222', 'Krishna Sampath', 'indiesoft@example.com', 'images/indiesoft.png'),
(15, 'Senior Software Engineer', 'Software Development', 'Hartford, CT', 'John''s Company', 'We make awesome software. ', ' Java Programming on Large Scale Projects', ' Java, C++', '2013-06-07 19:27:20', '0f48d26c26a3be3314cd4fc82709b069', 'John', 'john@johnscompany.com', 'images/comp6.png'),
(16, 'developer', 'software engineering', 'Hamden', 'Media Booster', ' Boost Media', ' Developing a software in high level languages ', ' Msc in computer science software engineering', '0000-00-00 00:00:00', 'df0d6d55db978c0e17a6e137db76160c', 'Gibsan Abdu', 'gibsanf@gmail.com', 'images/default_user.png'),
(17, 'Data analyst', 'Information Technology', 'Hamden', 'CSA', ' Prepare data analysis for comunities', 'Data analysis', ' MSC IN Management Information System', '0000-00-00 00:00:00', 'df0d6d55db978c0e17a6e137db76160c', 'John C', 'Johnm @mycompany.com', 'images/default_user.png'),
(18, 'sample', 'sample', '', '', ' ', ' ', ' ', '0000-00-00 00:00:00', '0f48d26c26a3be3314cd4fc82709b069', '', '', 'images/default_user.png'),
(19, 'Software Engineer', '', '', '', ' ', ' ', ' ', '0000-00-00 00:00:00', '0f48d26c26a3be3314cd4fc82709b069', '', '', 'images/default_user.png'),
(20, 'Senior Software Architect', 'Software Development', 'Orange, CT', 'John''s Company', ' We make good software.', ' ', ' ', '0000-00-00 00:00:00', '0f48d26c26a3be3314cd4fc82709b069', '', '', 'images/default_user.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `blurb` tinytext NOT NULL,
  `image_link` varchar(120) NOT NULL,
  `content` mediumtext NOT NULL,
  `full_link` varchar(120) NOT NULL,
  `post_date` date NOT NULL,
  `promoted` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `blurb`, `image_link`, `content`, `full_link`, `post_date`, `promoted`) VALUES
(1, 'Axis901: Putting Manchester on the Map', 'Coworking space opened today on Main St. in Manchester, CT', 'http://newhiteboard.com/wp-content/uploads/2013/02/rcprofilepic.jpg', 'In recent years, the concept of coworking has become increasingly popular in cities all across the country. Nowhere is the trend more noticeable than here in CT. Recently, the Town of Manchester took the initiative to open a coworking space on Main st. Today, we are joined by R.C. Thornton, Founder & President of RCJ Creative, a startup housed at the new coworking space. In this article, R.C. shares his experience, along with information on the space, and how you can get involved.', 'http://newhiteboard.com/2013/05/13/axis901-putting-mancheste', '2013-05-13', 0),
(2, 'Guest Post: Evolving Technical User Groups into Startup Communities, a Series | SB Chatterjee', 'SB Chaffterjee shares his experience on startup community.', 'http://newhiteboard.com/wp-content/uploads/2013/05/theaccelerators.jpg', 'Today, we are joined by SB Chatterjee, Acting Director of CTDotNet/ CTDevStartup, an organization of startup enthusiasts in CT who are interested in honing their programming skills among a community of like-minded peers. In this article, SB shares his experience, along with information on the group, and how you can get involved.', 'http://newhiteboard.com/2013/05/20/guest-post-evolving-techn', '2013-05-20', 0),
(3, '\nStartup Weekend Fairfield (06/14- 06/16)', 'Weekend startup event taking place in Fairfield.', 'http://newhiteboard.com/wp-content/uploads/2013/05/fairfeldSW-featured-200x200.png', 'This June, join the Fairfield startup community in a weekend-long event designed to help you take your idea to the next level. Register for Fairfield’s first Startup Weekend today!', 'http://newhiteboard.com/2013/05/21/startup-weekend-fairfield', '2013-05-21', 0),
(4, 'Ask an Expert: Who Pays for Lunch?', 'Find out what industry experts have to say.', 'http://newhiteboard.com/wp-content/uploads/2013/02/experts.jpg', 'No two startups are identical – but they are often similar. As an entrepreneur, you’ll find that carving your own path to success can leave you with a lot of questions. As part of our mission to help you succeed, we’re taking your questions, and reaching out to industry experts for the answers. Have a question of your own? Submit it here, and stay tuned for the answer.\r\n\r\nThis week’s question is on a taboo topic: When startup members get together, who pays for lunch? Does an investor carry more responsibility than a budding entrepreneur? For this question, we asked a handful of experts. Find out what htey had to say here.', 'http://newhiteboard.com/2013/05/16/ask-an-expert-who-pays-fo', '2013-05-16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` varchar(32) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(200) NOT NULL,
  `websiteURL` varchar(200) NOT NULL,
  `imageLink` varchar(200) NOT NULL DEFAULT 'images/default_user.png',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `creationDate`, `email`, `websiteURL`, `imageLink`) VALUES
('0c17eb26acd75681844b26d8acab6072', 'katelyna', '57747ab889255af96b48d65e505382fe', '2013-06-07 13:56:09', 'email@example.com', 'www.example.com', 'images/katelyn-anton.png'),
('18c7acf53f8dc79b07ef7934cfcc1a8f', 'klay', '57747ab889255af96b48d65e505382fe', '2013-06-07 14:17:26', 'example@example.com', 'www.example.com', 'images/klayton-wald.png'),
('3bc594e95320fc0808b0f0b317f72cc2', 'jmooney', '57747ab889255af96b48d65e505382fe', '2013-06-07 14:18:38', 'example@example.com', 'www.example.com', 'images/jeff-mooney-scf.png'),
('3f1c7d90c19be7e14de9c63bb2ec5bdb', 'gibsanfo', '57747ab889255af96b48d65e505382fe', '2013-06-05 18:12:16', 'example@example.com', 'www.example.com', 'images/gibsan1.png'),
('3fc868f4b3101fb1c557f4840fde106c', 'kam', '57747ab889255af96b48d65e505382fe', '2013-06-07 14:19:29', 'example@example.com', 'www.example.com', 'images/kam-lasater-scf.png'),
('40c528e1f71a95bef1c95278dfc99197', 'wenbin', '57747ab889255af96b48d65e505382fe', '2013-06-07 14:01:54', 'example@example.com', 'www.example.com', 'images/wenbin-zhang.png'),
('5c5aac80fd5ee6069c4713ed4d362d2b', 'jameschristopherroberts', '57747ab889255af96b48d65e505382fe', '2013-06-06 19:04:04', 'email@example.com', 'www.example.com', 'images/jamesroberts.jpg'),
('66ee71aeac8798e88f9b0e4bc4b70cc0', 'launchhaven', '57747ab889255af96b48d65e505382fe', '2013-06-06 18:38:12', 'email@example.com', 'www.example.com', 'images/launchhaven.png'),
('7d5198d05f6472cdf5fd42815883d51d', 'yanhuang', '56b331d75980a5337aed85381cd78c1e', '2013-06-07 06:06:00', 'yan.huang@student.fairfield.edu', 'http://www.gibsanabdu.com/jobs/', 'images/YanHuang.png'),
('8bbd141a26ff637262ecc27f4f7ebb5f', 'richards', '57747ab889255af96b48d65e505382fe', '2013-06-06 18:56:25', 'example@example.com', 'www.example.com', 'images/emma-richards-scf.png'),
('969bb576da3632a2aa79e1a17a3e53ea', 'seeclickfix', '57747ab889255af96b48d65e505382fe', '2013-06-06 18:28:26', 'example@example.com', '', 'images/seeclickfix.png'),
('a6c5293d95d8bbe90184a96bd8d98cd0', 'blasius', '57747ab889255af96b48d65e505382fe', '2013-06-06 19:09:46', 'email@example.com', 'www.example.com', 'images/jeff-blasius-scf.png'),
('ac535b82012968882e4528b16aaa720a', 'thecaptain', '57747ab889255af96b48d65e505382fe', '2013-06-06 18:50:32', 'example@example.com', 'www.example.com', 'images/derek-koch.png'),
('b2c6df6c9edb8a2c5ea3a153a73eb4bf', 'slate', '57747ab889255af96b48d65e505382fe', '2013-06-07 14:24:18', 'email@example.com', 'www.example.com', 'images/slate-ballard-grove.jpg'),
('b833993bebfc192bbc9e9d2d9dd617cf', 'harvgenius', '57747ab889255af96b48d65e505382fe', '2013-06-06 19:01:45', 'email@example.com', 'www.example.com', 'images/harvPrentiss.jpg'),
('ba16378e4c250e355ecec32e21cb22d4', 'mbooster', '57747ab889255af96b48d65e505382fe', '2013-06-07 14:25:26', 'example@example.com', 'www.example.com', 'images/meritbooster.png'),
('bbe153cdb60722b05aeb4df07fca68f2', 'miles', '57747ab889255af96b48d65e505382fe', '2013-06-07 14:23:05', 'email@example.com', 'www.example.com', 'images/miles-lasater-scf.png'),
('bf968e2df0687a3fa4b65887559d6080', 'grovenewhaven', '57747ab889255af96b48d65e505382fe', '2013-06-06 18:32:04', 'email@example.com', 'www.example.com', 'images/grove.png'),
('c80430b228ddf011476e237db3a25d54', 'guru', 'baba00d080c9216e9f0f84ea9b2250e0', '2013-06-05 19:03:58', 'Gruru@gmail.com', '', 'images/comp5.png'),
('c9be8793a80ff1b4f0bbf80bcd4e5077', 'stainbackd', '57747ab889255af96b48d65e505382fe', '2013-06-06 18:51:59', 'example@example.com', 'www.example.com', 'images/daniel-stainback-scf.png'),
('cf6f87a38e92d3c90f0bb5469e3d8ee2', 'indiesoft', '57747ab889255af96b48d65e505382fe', '2013-06-05 18:15:34', 'startup@startup.com', 'www.indie-soft.com', 'images/indiesoft.png'),
('d96156810e0f9c6e505e2e627e6fff62', 'ken', '57747ab889255af96b48d65e505382fe', '2013-06-07 14:20:52', 'email@example.com', 'www.example.com', 'images/ken-janke-grove.jpg'),
('e5be59537d15830a8dacd775731fc9ad', 'john2', 'e10adc3949ba59abbe56e057f20f883e', '2013-06-07 04:45:16', 'test', 'test', 'images/user5.png'),
('e68a0e4d51fe2e3937b6a12c1e875de4', 'startupc', '57747ab889255af96b48d65e505382fe', '2013-06-05 18:39:50', 'startup@startup.com', 'www.example.com', 'images/comp2.png'),
('e80f7f26de77eb03f2e4fbbe09a304c7', 'rrotaru', '57747ab889255af96b48d65e505382fe', '2013-06-05 18:11:08', 'example@example.com', 'www.example.com', 'images/240.png'),
('f45353504bda4f803c6407d27f2d0fef', 'melanie', '57747ab889255af96b48d65e505382fe', '2013-06-07 14:21:37', 'example@example.com', 'www.example.com', 'images/melanierice.jpg'),
('f8bde118bb349e090dc74f537170041d', 'benb', '57747ab889255af96b48d65e505382fe', '2013-06-06 18:49:31', 'email@example.com', 'www.example.com', 'images/ben-berkowitz-scf.png'),
('f9716c8c4f75063ae40b9fc12c79f4de', 'krishna', '57747ab889255af96b48d65e505382fe', '2013-06-07 14:03:18', 'example@example.com', 'www.example.com', 'images/krishna-sampath.png'),
('face3e06759152da8a509bc6617caea7', 'john', '827ccb0eea8a706c4c34a16891f84e7b', '2013-06-07 02:48:11', 'abc@abc.com', 'test.com', 'images/comp3.png'),
('fd742d29400fe154efdc1e8963f2cb9f', 'nealisawesome', '57747ab889255af96b48d65e505382fe', '2013-06-07 13:54:45', 'example@example.com', 'www.example.com', 'images/neal-raval.png'),
('fd91721649ad9bdfc02178a8d14a14d8', 'c96', '57747ab889255af96b48d65e505382fe', '2013-06-06 18:55:14', 'email@example.com', 'www.example.com', 'images/create96.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
