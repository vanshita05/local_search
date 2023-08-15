-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 01:22 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amiraj`
--

-- --------------------------------------------------------

--
-- Table structure for table `acet`
--

CREATE TABLE `acet` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `user type` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog1_tbl`
--

CREATE TABLE `blog1_tbl` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `profilepic` varchar(500) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog1_tbl`
--

INSERT INTO `blog1_tbl` (`id`, `uid`, `title`, `comment`, `profilepic`, `isactive`, `doi`, `dou`) VALUES
(5, 24, 'asdasdasdasda', 'asfdasdasd', 'avatar.png', 1, '2019-03-20 11:57:27', '0000-00-00 00:00:00'),
(6, 24, 'aaaa', 'kjksdjakjskdj', 'avatar.png', 1, '2019-03-20 11:58:54', '0000-00-00 00:00:00'),
(7, 24, 'aaaa', 'kjksdjakjskdj', 'avatar.png', 1, '2019-03-21 09:18:09', '0000-00-00 00:00:00'),
(8, 18, 'Demo', 'Demo blog', 'avatar.png', 1, '2015-04-20 07:40:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `title` int(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `profilepic` varchar(1000) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`title`, `comment`, `profilepic`, `isactive`, `doi`, `dou`) VALUES
(0, 'ASDFGHJHGFDX', 'avatar.png', 1, '2019-03-20 10:57:53', '0000-00-00 00:00:00'),
(0, 'frth', 'avatar.png', 1, '2019-03-20 10:58:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `city_tbl`
--

CREATE TABLE `city_tbl` (
  `id` int(11) NOT NULL,
  `cityname` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_tbl`
--

INSERT INTO `city_tbl` (`id`, `cityname`, `sid`, `isactive`, `doi`, `dou`) VALUES
(1, 'Ahmedabad', 3, 1, '0000-00-00 00:00:00', '2020-04-21 09:04:36'),
(2, 'Baroda', 3, 1, '0000-00-00 00:00:00', '2020-04-21 09:04:06'),
(3, 'Surat', 3, 1, '0000-00-00 00:00:00', '2020-04-21 09:04:16'),
(4, 'Aanad', 3, 1, '0000-00-00 00:00:00', '2020-04-21 09:04:31'),
(5, 'shrinagar', 7, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'vadodra', 3, 1, '0000-00-00 00:00:00', '2020-04-14 09:04:11'),
(7, 'Ahmedabad', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Ahmedabad', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Ahmedabad', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Bhavnagar', 3, 1, '0000-00-00 00:00:00', '2020-04-14 09:04:40'),
(11, 'Ahmedabad', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Ahmedabad', 3, 2, '0000-00-00 00:00:00', '2020-04-14 09:04:50'),
(13, 'Ahmedabad', 3, 2, '0000-00-00 00:00:00', '2020-04-14 09:04:58'),
(14, 'Ahmedabad', 3, 2, '0000-00-00 00:00:00', '2020-04-14 09:04:06'),
(15, 'surat', 23, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'London', 24, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'udaipur', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'pradip', 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'pradip', 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `con_tbl`
--

CREATE TABLE `con_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contacct` int(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `con_tbl`
--

INSERT INTO `con_tbl` (`id`, `name`, `email`, `contacct`, `subject`, `message`, `isactive`, `doi`, `dou`) VALUES
(1, 'pratik', 'pratik@gmail.com', 2147483647, 'PHP', 'aguddgaidhji', 1, '2011-03-20 07:12:45', '0000-00-00 00:00:00'),
(2, 'pradip ', 'pradip@gmail.com', 2147483647, 'error', 'hi your search engine is very good but some time your search engine is dont show the schme or offers i have better idea to develop your search engine ', 1, '2013-03-20 16:44:18', '0000-00-00 00:00:00'),
(3, 'pradip ', 'pradip@gmail.com', 2147483647, 'error', 'hi your search engine is very good but some time your search engine is dont show the schme or offers i have better idea to develop your search engine ', 1, '2013-03-20 16:45:33', '0000-00-00 00:00:00'),
(4, 'pradip', 'admin@gmail.com', 123456789, 'error', 'ASDCFGBHMNBVCX', 1, '2021-04-20 10:48:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dep_tbl`
--

CREATE TABLE `dep_tbl` (
  `id` int(11) NOT NULL,
  `depname` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep_tbl`
--

INSERT INTO `dep_tbl` (`id`, `depname`, `isactive`, `doi`, `dou`) VALUES
(1, 'Agriculture', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Education', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Beti bachavo beti padhvo ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Pm yojan', 2, '0000-00-00 00:00:00', '2020-04-13 20:04:01'),
(5, '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Health and Family Welfare Department ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Housing', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Tribal Development ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'old age', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'State Welfare Department. ', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'pradip', 2, '0000-00-00 00:00:00', '2020-04-21 09:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `feed_tbl`
--

CREATE TABLE `feed_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `profilepic` varchar(300) NOT NULL,
  `comment` varchar(600) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_tbl`
--

INSERT INTO `feed_tbl` (`id`, `name`, `profilepic`, `comment`, `isactive`, `doi`, `dou`) VALUES
(8, 'rakesh', 'fnpp.jpg', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:49:19', '0000-00-00 00:00:00'),
(9, 'rajesh', 'download.jpg', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:50:22', '0000-00-00 00:00:00'),
(10, 'dharti', 'Comingsoon1_1-crop.jpg', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:50:51', '0000-00-00 00:00:00'),
(11, 'meet', 'fnpp.jpg', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:51:17', '0000-00-00 00:00:00'),
(12, 'parvin', 'download.jpg', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:51:44', '0000-00-00 00:00:00'),
(13, 'krina', 'Inara Hair & Beauty - Final Logo - Dark.png', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:52:11', '0000-00-00 00:00:00'),
(14, 'shivaay', 'download.jpg', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:53:16', '0000-00-00 00:00:00'),
(19, 'hello', 'avatar.png', 'hi your search engine is very good', 2, '2016-04-20 16:46:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE `news_tbl` (
  `id` int(11) NOT NULL,
  `newsname` varchar(100) NOT NULL,
  `newsdes` varchar(300) NOT NULL,
  `newslink` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `profilepic` varchar(10) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`id`, `newsname`, `newsdes`, `newslink`, `isactive`, `profilepic`, `doi`, `dou`) VALUES
(48, 'Check online your Aadhaar card details', '\r\n', 'https://eaadhaar.uidai.gov.in/faadhaar/', 1, 'aadhar.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Guj CM Shri vijaybhai Rupani decides to provide free 25,000 N-95 masks to private doctor', '\r\n', 'https://gujaratindia.gov.in/', 1, 'bg3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Gujarat CM Shri Vijaybhai Rupani announce free foodgrains for poor during lockdown', '', 'https://gujaratindia.gov.in/', 1, 'doctor.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Search your name in voters list', '', 'https://www.nvsp.in/', 1, 'voter2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Apply online for new PAN card or corrections in PAN card information', '', 'https://www.onlineservices.nsdl.com/', 1, 'pan.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'CHECK LPG SUBSIDY ONLINE ', 'LPG Gas subsidy', 'www.mylpg.in', 1, 'lpg.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pm_tbl`
--

CREATE TABLE `pm_tbl` (
  `id` int(11) NOT NULL,
  `pmyojnaname` varchar(100) NOT NULL,
  `pmyojnadecp` varchar(1300) NOT NULL,
  `pmyojnalink` varchar(50) NOT NULL,
  `profilepic` varchar(1000) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_tbl`
--

INSERT INTO `pm_tbl` (`id`, `pmyojnaname`, `pmyojnadecp`, `pmyojnalink`, `profilepic`, `isactive`, `doi`, `dou`) VALUES
(33, 'Pradhan Mantri Awas Yojana ', 'Pradhan Mantri Awas Yojana (Urban) Mission launched on 25th June 2015 which intends to provide housing for all in urban areas by year 2022. The Mission provides Central Assistance to the implementing agencies through States/Union Territories (UTs) and Central Nodal Agencies (CNAs) for providing hous', 'https://pmaymis.gov.in/', 'pm awas yojna.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Pradhan Mantri Kaushal Vikas Yojana (PMKVY)', 'Pradhan Mantri Kaushal Vikas Yojana (PMKVY) is the flagship scheme of the Ministry of Skill Development & Entrepreneurship (MSDE) implemented by National Skill Development Corporation. The objective of this Skill Certification Scheme is to enable a large number of Indian youth to take up industry-re', 'https://www.pmkvyofficial.org/', 'kausal vikas.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Pradhan Mantri Jan Dhan Yojana (PMJDY)', 'Pradhan Mantri Jan-Dhan Yojana (PMJDY) is National Mission for Financial Inclusion to ensure access to financial services, namely, Banking/ Savings & Deposit Accounts, Remittance, Credit, Insurance, Pension in an affordable manner.  Account can be opened in any bank branch or Business Correspondent ', 'https://pmjdy.gov.in/', 'jan dhan.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Pradhan Mantri Suraksha Bima Yojana(PMSBY)', 'The Scheme is available to people in the age group 18 to 70 years with a bank account who give their consent to join / enable auto-debit on or before 31st May for the coverage period 1st June to 31st May on an annual renewal basis. Aadhar would be the primary KYC for the bank account. The risk cover', 'http://www.jansuraksha.gov.in/', 'pm suraksha.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Pradhan Mantri Fasal Bima Yojana', 'PMFBY will provide a comprehensive insurance cover against failure of the crop thus helping in stabilising the income of the farmers and encourage them for adoption of innovative practices. Â· The Scheme can cover all Food & Oilseeds crops and Annual Commercial/Horticultural Crops for which past yie', 'https://pmfby.gov.in/', 'pmfasal.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Pradhan Mantri Ujjwala Yojana (PMUY)', 'Pradhan Mantri Ujjwala Yojana (PMUY) aims to safeguard the health of women & children by providing them with a clean cooking fuel â€“ LPG, so that they donâ€™t have to compromise their health in smoky kitchens or wander in unsafe areas collecting firewood. Pradhan Mantri Ujjwala Yojana was launched ', 'https://pmuy.gov.in/', 'pmgas.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Pradhan Mantri Jeevan Jyoti Bima Yojana (PMJJBY)', 'The Pradhan MantriJeevanJyotiBimaYojana (PMJJBY) is a one year life insurance scheme, renewable from year to year, offering coverage for death due to any reason and is available to people in the age group of 18 to 50 years( life cover upto age 55) having a savings bank account who give their consent', 'https://www.jansuraksha.gov.in/', 'pmbima.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Pradhan Mantri Kisan Maandhan Yojana', 'Pradhan Mantri Kisan Maandhan Yojana is a government scheme meant for old age protection and social security of Small and Marginal Farmers (SMF). All Small and Marginal Farmers having cultivable landholding up to 2 hectares falling in the age group of 18 to 40 years, whose names appear in the land records of States/UTs as on 01.08.2019 are eligible to get benefit under the Scheme.  Under this scheme, the farmers would receive a minimum assured pension of Rs 3000/- per month after attaining the age of 60 years and if the farmer dies, the spouse of the farmer shall be entitled to receive 50% of the pension as family pension. Family pension is applicable only to spouse.', 'https://pmkmy.gov.in/scheme/pmkmy', 'maandhan.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Pradhan Mantri Kisan Samman Nidhi', 'The PM-KISAN scheme aims to supplement the financial needs of the SMFs in procuring various inputs to ensure proper crop health and appropriate yields, commensurate with the anticipated farm income at the end of the each crop cycle. ï‚· This would also protect them from falling in the clutches of moneylenders for meeting such expenses and ensure their continuance in the farming activities. Under the Scheme, a direct payment of Rs. 6000 per year will be transferred in three equal installments of Rs. 2000 each every four months into the Aadhar ceded bank accounts of eligible landholding SMFs families. ', 'https://pmkisan.gov.in/', 'pmksny.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'pradip', 'pmyojnalink', 'google.com', 'avatar.png', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Pradhan Mantri Krishi Sinchayee Yojana', 'Government of India is committed to accord high priority to water conservation and its management. To this effect Pradhan Mantri Krishi Sinchayee Yojana (PMKSY) has been formulated with the vision of extending the coverage of irrigation ‘Har Khet ko pani’ and improving water use efficiency ‘More crop per drop\' in a focused manner with end to end solution on source creation, distribution, management, field application and extension activities. The Cabinet Committee on Economic Affairs chaired by Hon’ble Prime Minister has accorded approval of Pradhan Mantri Krishi Sinchayee Yojana (PMKSY) in its meeting held on 1st July, 2015.', 'https://pmksy.gov.in/', 'krishi yojna.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Deen Dayal Upadhyaya Gram Jyoti Yojana', 'Deen Dayal Upadhyaya Gram Jyoti Yojana is a Government of India scheme designed to provide continuous power supply to rural India.[1] The government plans to invest â‚¹756 billion (US$11 billion) for rural electrification under this scheme. The scheme replaced the existing Rajiv Gandhi Grameen Vidyutikaran Yojana.[2]  The scheme will enable to initiate much awaited reforms in the rural areas. It focuses on feeder separation (rural households & agricultural) and strengthening of sub-transmission & distribution infrastructure including metering at all levels in rural areas. This will help in providing round the clock power to rural households and adequate power to agricultural consumers. The earlier scheme for rural electrification viz. Rajiv Gandhi Grameen Vidyutikaran Yojana has been subsumed in the new scheme as its rural electrification component.', 'https://www.ddugjy.gov.in/', 'den dyal.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `review_tbl`
--

CREATE TABLE `review_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `profilepic` varchar(300) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_tbl`
--

INSERT INTO `review_tbl` (`id`, `name`, `email`, `comment`, `profilepic`, `isactive`, `doi`, `dou`) VALUES
(5, 'pradip', 'pradip@gmail.com', 'Gujarat govt. has announced Vahli Dikri Yojana (Dear Daughter Scheme) for girl children of the state. Under this Vahali Dikri Yojana, the state govt. will provide education incentives and Rs. 1 lakh to first and second daughters of family. This one lakh assistance amount would be provided when the girl attains the age of 18 years. People would be able to fill the Vhali Dikari Yojna registration / application form to avail assistance', 'fnpp.jpg', 1, '2016-03-20 08:24:41', '0000-00-00 00:00:00'),
(6, 'meet', 'admin@gmail.com', 'Gujarat govt. has announced Vahli Dikri Yojana (Dear Daughter Scheme) for girl children of the state. Under this Vahali Dikri Yojana, the state govt. will provide education incentives and Rs. 1 lakh to first and second daughters of family. This one lakh assistance amount would be provided when the girl attains the age of 18 years. People would be able to fill the Vhali Dikari Yojna registration / application form to avail assistance', 'avatar.png', 1, '2016-03-20 08:25:12', '0000-00-00 00:00:00'),
(7, 'dharti', 'admin@gmail.com', 'Gujarat govt. has announced Vahli Dikri Yojana (Dear Daughter Scheme) for girl children of the state. Under this Vahali Dikri Yojana, the state govt. will provide education incentives and Rs. 1 lakh to first and second daughters of family. This one lakh assistance amount would be provided when the girl attains the age of 18 years. People would be able to fill the Vhali Dikari Yojna registration / application form to avail assistance', 'avatar.png', 1, '2016-03-20 08:25:31', '0000-00-00 00:00:00'),
(8, 'Demo', 'abc@gmail.com', 'Gujarat govt. has announced Vahli Dikri Yojana (Dear Daughter Scheme) for girl children of the state. Under this Vahali Dikri Yojana, the state govt. will provide education incentives and Rs. 1 lakh to first and second daughters of family. This one lakh assistance amount would be provided when the girl attains the age of 18 years. People would be able to fill the Vhali Dikari Yojna registration / application form to avail assistance', 'male.jpg', 1, '2014-04-20 15:04:29', '0000-00-00 00:00:00'),
(9, 'c, ;c', ';slmcwelm@gmail.com', 'd c, d', 'avatar.png', 1, '2016-01-21 16:21:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `schoff_tbl`
--

CREATE TABLE `schoff_tbl` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `schoffname` varchar(100) NOT NULL,
  `schoffdecp` varchar(1300) NOT NULL,
  `schofflink` varchar(100) NOT NULL,
  `profilepic` varchar(300) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoff_tbl`
--

INSERT INTO `schoff_tbl` (`id`, `did`, `schoffname`, `schoffdecp`, `schofflink`, `profilepic`, `isactive`, `doi`, `dou`) VALUES
(27, 0, 'Mukhyamantri Amrutam \"MAâ€ & \"MA Vatsalyaâ€ Yojana', 'àª—àªœà« àª¯àª¾àª¤ àª¯àª¾àªœà«àª®àª¨àª¾ àª¤àª­àª¾àª­ àªœà«€àª²à«àª°àª¾ràª“àª­àª¾àª‚ àª—àª¯à«€àª«à«€ àª¯à«‡àª–àª¾ àª¶àª à«‡ àª± àªœà«€àª²àª¤àª¾ àª•à«àªŸàª‚à«àª«à«Š àª­àª¾àªŸà«‡àª®àª–à«à«àª®àª­àª¤à«àª°àª‚ à«€ àª…àª®àª¤à«ƒ àª­ (àª­àª¾) àª®à«Šàªœàª¨àª¾ àª¤àª¾.à«ª/à«¯/à«¨à«¦à«§à«¨àª¥à«€ àª…àª­àª°àª­àª¾àª‚ àª®àª•à«à«‡àª°. â€¢ àª¯àª¾àªœàª® àªµàª¯àª•àª¾àª¯à«‡àª®àª–à«à«àª®àª­àª¤à«àª°àª‚ à«€ àª…àª®àª¤à«ƒ àª­ (àª­àª¾) àª®à«Šàªœàª¨àª¾àª¨à«Š àªµà«àª®àª¾àª© àª²àª§àª¾àª¯à«€ àª­àª§à«àª®àª­ àª²àª—à', 'http://www.magujarat.com/', 'ma card.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 0, 'Janani Suraksha Yojana', 'Janani Suraksha Yojana (JSY) is a safe motherhood intervention under the National Health Mission (NHM) being implemented with the objective of reducing maternal and neo-natal mortality by promoting institutional delivery among the poor pregnant women. The Scheme has contributed immensely in increasing the Institutional deliveries among the BPL, ST and SC population. The progress of Scheme has been remarkable since inception and is expected to achieve good results in the years to come.  After Hon', 'https://nrhm.gujarat.gov.in/janani-suraksha-yojana.htm', 'jani.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 0, 'Mukhya Mantri Gruh Yojana â€“ Housing Scheme in Gujarat', 'Mukhya Mantri GRUH Yojana where GRUH stands for â€œGujarat Rural Urban Housingâ€ is an affordable housing scheme especially designed for home seekers belonging to EWS and LIG category of the society. Mukhya Mantri (Gujarat Rural Urban Housing) GRUH Yojana was announced during 12th Five-year plan in consideration of growing need for affordable houses in urban areas. Applications from potential beneficiaries will be collected before beginning project. Housing projects will be built under self-fin', ' www.udd.gujarat.gov.in', 'mukhya-mantri-gruh-yojana.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 0, 'Sardar Patel Awas Yojana', 'Sardar Patel Awas Yojana for land less agricultural laburers and village artisan living Below Poverty line in rural areas of the State. Sardar Awas Vasahat, Rampun, dist. Vadodara Govt. has made strategic planning for solution of houses in the village. The poor has right to live new life and to turn to new culture as colony of poor population. Free plots scheme of house site of the State Government for landless agricultural laboures village artisans living Below Poverty line in rural areas of Gu', 'https://panchayat.gujarat.gov.in/', 'sardar.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 0, 'Bal Sakha Yojana', 'In Gujarat each year 12,00,000 children are born and many of mothers die during this process of pregnancy and child birth. Malnutrition and lack of proper required health care for mothers and children are major determinants of maternal and child health. Poor development status of newborn, lack of adequate and timely care and poor nutrition lead to thousands of children dying in the State before they even reach their first birthday. These are serious maternal and child health problems and require urgent attention.', 'https://nrhm.gujarat.gov.in/bal-sakha-yojana.htm', 'bal sakha.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 0, 'Suryashakti Kisan Yojana (SKY)', 'Suryashakti Kisan Yojana (SKY) is a revolutionary initiative of Gujarat Stateâ€™s Power Sector. In the scheme of SKY, the Farmers will generate Electricity for their captive consumption and will sell the left-over generated Electricity to the Government via Grid and earn the income The 60 % subsidy on the cost of Projects will be given by the State and Central Governments, 35% of the Project cost will be provided to him through loan with the interest rates of 4.5% to 6% and remaining 5% of the Project cost will be borne by Farmers. Total duration of the Scheme is 25 years which split between 7-year period and 18-year period. As per the Scheme,.', 'https://www.gprd.in/sky.php', 'surya sakti.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 0, 'Education loan interest subsidy scheme', 'àª¶à«ˆàª•à«àª·àª£àª£àª• àª•àª¡àª—à«àª°à«€àª¨à«€ àª…àª›àª¤ àª§àª°àª¾àªµàª¤àª¾ àª²à«‹àª•à«‹ àª¸àª¶àªµàª¿àª¸, àª®à«‡àª¨à«àª¯àª«à«à«‡àª•àªšàª•àª°àª¿àª‚àª— àª…àª¨à«‡àª¬àª¾àª§àª‚ àª•àª¾àª® àª‰àª¦à«àª¯à«‹àª—à«‹àª®àª¾àª‚ àª®àª³à«‚ àª­àª¤à«‚ àª¨à«‹àª•àª°à«€àª“ àª¸àª§à« à«€ àª®àª¯àª¾àª£àª•àª¦àª¤ àª•àª¾àª® àª•àª°àª¤àª¾ àª¹à«‹àª¯ àª›à«‡. àªœà«àª¯àª¾àª°à«‡ àª¹àª¾àª‡àª¸à«àª•àª²à«‚ àª¶àª¶àª•à«àª·àª£ àª¸àª¾àª¥à«‡àª¨àª¾ àª•àª®àª£àªšàª¾àª°à«€àª“ àª¸àª¾àª°àª¾ àª²àª¾àª­à«‹ àª¸àª¾àª¥à«‡àª¨à«‹àª•àª°à«€àª“ àª®à«‡àª³àªµà«€ àª¶àª•à«‡ àª›à«‡. àª§à«‹àª°àª£ à«§à«¨ àªªàª›à«€ àª•à«‡àªŸàª²àª¾àª• àªµà«àª¯àªµàª¸àª¾àª¶àª¯àª• àª¶àª¶àª•à«àª·àª£ àª…àª­à«àª¯àª¾àª¸àª•à«àª°àª®à«‹ àª–àª¬à«‚ àªœ àª–àªšàª¾àª£àª³ àª›à«‡, àª˜àª£à«€ àª¨à«‹àª•àª°à«€àª“àª®àª¾àª‚ àª“àª›àª¾àª®àª¾àª‚ àª“àª›à«€ àª•àª¡àªªà«àª²à«‹àª®àª¾àª¨à«€ àªœàª°à«‚àª° àª¹à«‹àª¯ àª›à«‡, àªªàª°àª‚àª¤à«àª®à«‹àªŸàª¾àª­àª¾àª—àª¨à«€ àª¸àª¾àª°à«€ àª•àª¾àª°àª•àª•àª¦à«€ àª®àª¾àªŸà«‡ àª…àª®àª•à« àªªà«àª°àª•àª¾àª°àª¨àª¾àª‚ àª‰àªšà«àªš àª¶àª¶àª•à«àª·àª£àª¨à«€ àª†àªµàª¶à«àª¯àª•àª¤àª¾ àª¹à«‹àª¯ àª›à«‡àªœà«‡àª®àª¾àª‚ àª•à«‹àªˆ àªšà«‹àª•à«àª•àª¸ àª•à«àª·à«‡àª¤à«àª°àª®àª¾àª‚ àª…àª®àª•à« àªªà«àª°àª•àª¾àª°àª¨à«àª‚ àªœà«àªžàª¾àª¨ àª…àª¨à«‡àª…àª¨àª­à« àªµ àª¹à«‹àªµà«‹ àªœàª°à«‚àª°à«€ àª›à«‡. àªœà«‡àª¥à«€ àª¨àª¾àª£àª¾àª•à«€àª¯ àª°à«€àª¤à«‡ àª¨àª¬àª³à«‹ àªµ', 'https://kcg.gujarat.gov.in/education_loan/student_login/sign_up.php', 'education.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 0, 'RTE Gujarat Admission 2020-21 ', 'Gujarat government invites online applications for RTE Gujarat Admission 2020-21. Subsequently, all the selected students will get 25% reservation in admission in various schools of Gujarat. Interested candidates can apply online for RTE Admission 2020 in Gujarat through the official website rte.orpgujarat.com. The state govt. will open window for RTE Gujarat 2020 21 admission under Gujarat Primary Education Act for admissions in primary classes.  Candidates can apply for Gujarat RTE admission 2020-21 in various reputed schools. All the candidates can now apply online at rte.orpgujarat.com for admissions under RTE. To understand the procedure to fill the online application form, please see complete details below.', 'https://rte.orpgujarat.com/', 'right to edu.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 0, 'CNG Sahbhagi Yojana', 'Gujarat government is inviting online application forms for CNG Sahbhagi Yojana at www.cngsahbhaagi.com. Now all the people who want to setup new CNG Pump Stations in Gujarat can apply online for CNG Sahayog Scheme. CM Vijay Rupani cabinet has decided to open another 300 CNG stations in the next 2 years. Interested people can make CNG Sahbhagi Scheme online registration and fill application form to setup their own CNG pumps under franchisee and OMC-dealer models.  The state govt. of Gujarat has liberalised the norms to setup CNG stations of Gujarat Gas Company Ltd (GGCL) and Sabarmati Gas Ltd (SGL). The one time deposit to avail a connection of Piped Natural Gas (PNG) for families having an annual income of Rs 2 lakh has also been relaxed.  All the people who wants to open the CNG Pumps of the above mentioned 2 companies under Gujarat govt. can apply online for CNG Sahbhaagi Yojana', 'https://www.cngsahbhaagi.com/Login/', 'cng.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 0, 'Gujarat Saraswati Sadhana Yojana', 'Gujarat govt. has decided to implement Saraswati Sadhana Yojana 2019 for girls. Under this scheme, all the girls belonging to the Scheduled Class category and studying in class 9th will get free bicycles under Sarasvati Sadhana Yojana. Department of Social Justice & Empowerment is the nodal dept. to successfully implement this free bicycle scheme for SC girls in Gujarat. Saraswati Sadhana Yojana (SSY) in Gujarat aims to promote enrollment of girls belonging to the age group of 14 to 18 years at secondary and senior secondary level. This scheme will reduce drop out rate of girls from deprived sections of the society. ', 'https://sje.gujarat.gov.in/', 'sarswati.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 0, 'Foreign Studies Scheme (Loans upto Rs. 15 lakh)', 'GUEEDC will also provide educational loans upto Rs. 15 lakh at 4% interest rate to candidates who wants to pursue higher studies in foreign countries. For this, candidates must have secured at-least 60% marks in 12th class and annual family must be less than Rs. 4.5 lakh p.a.', 'https://sje.gujarat.gov.in/', 'edu loan.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 0, ' Residential Rooftop Solar scheme ', 'Scheme will be under implementation up to 31 st March, 2019 ïƒ˜ Residential consumer of any DISCOM, who is having residential property in his name, is eligible to install solar PV system on his rooftop from any one supplier selected by him from the list of GEDA Empaneled Vendors', 'https://geda.gujarat.gov.in/', 'solar.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 0, 'Mukhyamantri Nidan Yojna', 'Under the Mukhyamantri Nidan Yojana, free medical test and diagnostic services will be available across 9,156 sub health centers, 1,342 primary health centers, 331 community health centers, 33 sub district and 22 district hospitals and 16 medical colleges across the state. According to the Chief Minister, the arrangements are made to avail most of the tests in PHCs and CHCs. The facilities of diagnosis and laboratory tests will be available at government hospitals, hence, people need not to go to private healthcare institutions.', 'https://gmscl.gujarat.gov.in/many-scheme.htm', 'nidan.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 0, 'Electricity Duty Exemption Scheme in Gujarat ', 'Gujarat government has launched a new Power Duty Waiver Portal at ceiced.gujarat.gov.in on 22 November 2019. At this web portal, people can Apply Online for Electricity Duty Exemption Scheme in Gujarat. The complete documents list, guidelines of power duty exemption are available for download purposes. Industrial units can simply register to sign up and make login to fill application for electricity duty waiver.  Along with the Gujarat Electricity Duty Exemption Scheme, people can also apply online for other e-services at the Gujarat CEICED Portal. These services includes application for lift & escalators, electrical contractors, wireman & supervisor and certification of electrical installation.  The Electricity Duty Exemption Search Certificate facility is also available at new portal of Chief Electricity Inspector & Collector of Electricity Duty (CEICED) of Gujarat.', 'https://ceiced.gujarat.gov.in/', 'PPP.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 0, 'Vidya Sadhna Yojana (Free Bicycles)', ' Due to distant location of higher secondary schools, ST students tend to drop-out of education post completion of Std. VIII. To motivate the girl students to study post completion of Std. VIII in schools and continue their education even if the school is located a few kilometres away from their residence.', 'https://comm-tribal.gujarat.gov.in/vidya-sadhna-yojana', 'girls.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 0, 'Doodh Sanjeevani Yojana', 'To improve health of children in tribal talukas.To improve and enrich the level of nutrition of primary school going tribal students.', 'BENEFITS UNDER THE SCHEME | The students get 200 ml of fortified milk with added 3% fat, 24 gm. carb', 'dudh_sanjivani_1.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 0, 'Old Age pention Yojna ', 'The Older Personâ€™s Grant â€“ also known as the state oldâ€“age pension â€“ is a monthly income for citizens, permanent residents, and refugees 60 years or older with no other means of financial income. You qualify for an older personâ€™s grant if you', 'https://sje.gujarat.gov.in/', 'old age.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 0, 'Khedut Akasmat Vima Sahay Yojan ', 'overnment of Gujarat has implemented Farmerâ€™s Accidental Insurance Scheme since 26th January, 1996 to provide insurance coverage to the registered farmers in case of accidental death or permanent disability. This scheme is 100% sponsored by State Government. In this scheme, insurance premium is paid by the State Government for all farmers. This scheme is implemented under the Gujarat Community Group-Janta Accidental Insurance Scheme from 01/04/08 through Director of Insurance, Gandhinagar.', 'https://dag.gujarat.gov.in/ ', 'khedut.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 0, 'Mukhyamantri Yuva Swavalamban Yojana', 'The Mukhyamantri Yuva Swavalamban Yojana is a scheme under which the students shall get grants for their higher studies. To take part in this scheme the government has asked for online applications. The Gujarat government will provide scholarships to the meritorious students who prove their mettle under this scheme.Amount of grant: The government shall give the students a grant of Rs. 1 lakh for the period of five years. But this amount is for those who are pursuing their degree courses under Gujarat Medical Education Research Society (GMERS) and for those who are taking up dental courses as well.  Grant for other courses: For students who are pursuing courses like pharmacy, Ayurved, engineering, nursing, homeopathy and physiotherapy, will get half the amount as grant. This means they shall get only Rs. 50,000 per year at the most.', 'https://mysy.guj.nic.in/ ', 'mysy.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 0, 'Binanamat Class Self Employment Loan ', 'Owned unit cost for self-employment vehicles, rickshaws, loading rickshaws, marutiices, jeep-taxis. For loans of Rs.10.00 lakhs for any self-employment profession, or for lesser than the actual cost of the business or commerce store, medical store, readymade garment store, bookstore etc., the loan will be given from the corporation. For the above order 1 and 2 plan, the loan will be available at a simple interest rate of 5% per annum. Women will be eligible to get a simple interest loan of 4%. Transport, logistics, Travelers, Food Court etc. will be eligible for 5% interest subsidy on the loan taken from the bank for a loan of Rs.', 'https://gueedc.gujarat.gov.in ', 'bin anamat.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 7, 'Free Sewing Machine Scheme in Gujarat', 'tate government if Gujarat has launched a new welfare scheme for the people of Gujarat. This scheme is known as Free Sewing Machine Scheme Gujarat. As the name suggest, in this scheme people of State will receive sewing machine for free. Scheme is mainly for women of the State. But some men are also eligible for this scheme. This scheme is also known by the name of Free Silai Machine Yojana.', ' https://www.india.gov.in/ ', 'silai.jpg', 1, '0000-00-00 00:00:00', '2020-04-14 06:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `seq_tbl`
--

CREATE TABLE `seq_tbl` (
  `id` int(11) NOT NULL,
  `squestion` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seq_tbl`
--

INSERT INTO `seq_tbl` (`id`, `squestion`, `isactive`, `doi`, `dou`) VALUES
(3, 'In Which State You Born?', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'What Are The Last Four Digits Of Your Mobile Number?', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'What Is Your Favorite country?', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'What Is Your Favorite Food?', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'What Is Your Favorite Color?', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE `state_tbl` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`id`, `sname`, `isactive`, `doi`, `dou`) VALUES
(1, 'mp', 2, '0000-00-00 00:00:00', '2020-03-05 00:00:00'),
(2, 'Pradip', 2, '0000-00-00 00:00:00', '2020-03-05 00:00:00'),
(3, 'Gujarat', 1, '0000-00-00 00:00:00', '2020-03-05 00:00:00'),
(4, 'MP', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Uttar Pradesh', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Karnataka', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'j&k', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Rajesthan', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Ahmedabad', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Ahmedabad', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Gujarat', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Ahmedabad', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Bihar', 2, '0000-00-00 00:00:00', '2020-03-05 00:00:00'),
(17, 'Goa', 2, '0000-00-00 00:00:00', '2020-03-05 00:00:00'),
(18, 'Jharkhand', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Simla', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Assam', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Haryana', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'mp', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'india', 2, '0000-00-00 00:00:00', '2020-03-05 00:00:00'),
(25, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'pradip', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'soni fali', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `mobile` int(15) NOT NULL,
  `dob` date NOT NULL,
  `isactive` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `sec_question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `firstname`, `email`, `password`, `profilepic`, `mobile`, `dob`, `isactive`, `user_type`, `sec_question`, `answer`, `doi`, `dou`) VALUES
(9, 'admin', 'admin1234@gmail.com', '12345', 'avatar.png', 0, '0000-00-00', 1, 2, '', '', '2005-03-20 16:37:10', '0000-00-00 00:00:00'),
(17, 'PRADIP', 'radhe@gmail.com', '123', 'avatar.png', 2147483647, '1998-12-22', 1, 1, '', '', '2011-03-20 16:37:21', '0000-00-00 00:00:00'),
(18, 'pravin', 'gopal@gmail.com', '1234', 'avatar.png', 2147483647, '1998-12-22', 1, 1, '6', 'india', '2011-03-20 16:39:41', '0000-00-00 00:00:00'),
(19, 'test45', 'test45@demo.com', '123', 'avatar.png', 1234567886, '2020-03-10', 1, 1, '6', 'india', '2017-03-20 07:53:05', '0000-00-00 00:00:00'),
(20, 'nainesh', 'nainesh1234@gmail.com', '123', 'avatar.png', 1123456777, '0000-00-00', 1, 1, '', '', '2017-03-20 07:53:42', '0000-00-00 00:00:00'),
(21, 'pradip', 'raju@gmail.com', '12345', 'avatar.png', 2147483647, '2020-03-03', 1, 1, '', '', '2017-03-20 07:55:23', '0000-00-00 00:00:00'),
(22, 'aaa', 'aaa@aaa.com', '123456', 'avatar.png', 1234567890, '2018-05-15', 1, 1, '', '', '2017-03-20 08:07:06', '0000-00-00 00:00:00'),
(23, 'chiragsir', 'chiragsir@gmail.com', '123', 'avatar.png', 1234567890, '2020-03-12', 1, 2, '', '', '2017-03-20 08:12:19', '0000-00-00 00:00:00'),
(24, 'creart', 'creart1234@.com', '123', 'avatar.png', 1234567890, '1998-12-31', 1, 1, '', '', '2017-03-20 08:37:48', '0000-00-00 00:00:00'),
(25, 'webdesign', 'web123.com', 'creart', 'avatar.png', 1234567890, '1998-12-10', 1, 1, '', '', '2017-03-20 08:53:59', '0000-00-00 00:00:00'),
(27, 'rakeshprajapati', 'rakeshprajapati800@gmail.com', '17121995', 'download.jpg', 2147483647, '1995-12-12', 1, 1, '', '', '2018-03-20 13:21:16', '0000-00-00 00:00:00'),
(28, 'bb', 'bbb2.com', '123', 'CGTMSELOGO.png', 1234567890, '1997-12-10', 1, 1, '', '', '2018-03-20 13:37:11', '0000-00-00 00:00:00'),
(29, 'POOJA', 'POOJA123@GMAIL.COM', 'pradip', 'avatar.png', 1234567890, '2020-03-11', 1, 1, '', '', '2022-03-20 14:54:35', '0000-00-00 00:00:00'),
(30, 'jigar', 'jigar1234@gmail.com', '123', 'avatar.png', 2147483647, '2020-04-15', 1, 1, '8', 'pizza', '2016-04-20 16:44:00', '0000-00-00 00:00:00'),
(31, 'Manan', 'admin', 'admin', 'WhatsApp Image 2020-07-07 at 12.44.13.jpeg', 1234567890, '2003-03-02', 1, 1, '3', 'Gujarat', '2012-03-21 12:56:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acet`
--
ALTER TABLE `acet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog1_tbl`
--
ALTER TABLE `blog1_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_tbl`
--
ALTER TABLE `city_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `con_tbl`
--
ALTER TABLE `con_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dep_tbl`
--
ALTER TABLE `dep_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_tbl`
--
ALTER TABLE `feed_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm_tbl`
--
ALTER TABLE `pm_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_tbl`
--
ALTER TABLE `review_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoff_tbl`
--
ALTER TABLE `schoff_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seq_tbl`
--
ALTER TABLE `seq_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acet`
--
ALTER TABLE `acet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog1_tbl`
--
ALTER TABLE `blog1_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `city_tbl`
--
ALTER TABLE `city_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `con_tbl`
--
ALTER TABLE `con_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dep_tbl`
--
ALTER TABLE `dep_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feed_tbl`
--
ALTER TABLE `feed_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `pm_tbl`
--
ALTER TABLE `pm_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `review_tbl`
--
ALTER TABLE `review_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `schoff_tbl`
--
ALTER TABLE `schoff_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `seq_tbl`
--
ALTER TABLE `seq_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `state_tbl`
--
ALTER TABLE `state_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
