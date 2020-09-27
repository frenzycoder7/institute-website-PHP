-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 11:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `target`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmition`
--

CREATE TABLE `addmition` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `father` varchar(150) NOT NULL,
  `class` varchar(150) NOT NULL,
  `steam` varchar(150) NOT NULL,
  `enrolmentid` varchar(100) NOT NULL,
  `userid` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `doa` varchar(200) NOT NULL,
  `year` varchar(150) NOT NULL,
  `img` varchar(200) NOT NULL,
  `access` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmition`
--

INSERT INTO `addmition` (`id`, `name`, `father`, `class`, `steam`, `enrolmentid`, `userid`, `password`, `status`, `dob`, `email`, `mobile`, `address`, `doa`, `year`, `img`, `access`) VALUES
(28, 'Sailesh kumar', 'Harendra Sharma', 'X th', 'Foundation', 'SFXXRNZKJEZREIN', 'S4259', 'S17329', '1', '1994-01-20', 'shailesh.kumar381@gmail.com', '9204440075', 'khajpura, patna', '07/06/20 | 06:16:04am', '2020', 'img/73604.jpg', 1),
(29, 'Aman Raj', 'Jyotish Kumar', 'X th', 'PRE-FOUNDATION', 'APPOEBLHDUKJICU', 'A2699', 'A58112', '1', '2004-07-11', 'araj79176@gmail.com', '7061343822', 'Nalanda colony behind Laksjmi asjram apartment (near cake factory) Khajpura patna 14', '07/06/20 | 10:50:39am', '2020', 'img/26316.jpg', 1),
(30, 'VIKASH GUPTA', 'Arun kumar', 'X th', 'PRE-FOUNDATION', 'VQBDKJQEVBSDTXS', 'V1413', 'V70434', '1', '2006-04-15', 'vikashgupta75419@gmail.com', '7541988370', 'GAMDHI PURAM COLONY EAST RUPASPUR JAGDEO PATH, RUPASPUR, PATNA - 14', '07/06/20 | 10:56:47am', '2020', 'img/62488.jpg', 1),
(32, 'Ritu Raj Kumar', 'Nitish Kumar', 'X th', 'PRE-FOUNDATION', 'RDKRBYJNSFEVSBC', 'R5611', 'R96868', '1', '2006-10-24', 'nikeshkr20@gmail.com', '7717770309', 'vill + po - Chhotki Akauna, ps - Ghoshi, Jehanabad 804432', '07/06/20 | 11:05:55am', '2020', 'img/88013.jpg', 1),
(33, 'RIDDHI KESHRI', 'SANTOSH KUMAR', 'X th', 'PRE-FOUNDATION', 'RXOKSZICPVMSLZD', 'R9675', 'R16773', '1', '2006-04-19', 'skprinters.patna01@gmail.com', '9386717365', 'C/2 INDRAPURI COLONY PATNA - 14', '07/06/20 | 11:31:21am', '2020', 'img/34231.jpg', 1),
(34, 'PRYUSH SRIVASTAV', 'PRATAP CHANDRA SRIVASTAVA', 'X th', 'PRE-FOUNDATION', 'PPLDSODFGEQWPZI', 'P9480', 'P56982', '1', '2005-02-15', 'prayush32srivastava078@gmail.com', '7979724558', 'KHAJPURA, NALANDA COLONY BEHIND OF APPRAJITA APPARMENT PATNA', '07/06/20 | 11:36:48am', '2020', 'img/56029.jpg', 1),
(35, 'Absar Talib', 'Babar Khan', 'X th', 'PRE-FOUNDATION', 'AKZMBQSYNKNHNYE', 'A5037', 'A82376', '1', '2006-09-08', 'absar89sk@gmail.com', '6204433544', 'Shakur colony near masjid ramnagri more patna 14', '07/06/20 | 12:29:39pm', '2020', 'img/98197.jpg', 1),
(36, 'Aaryan Kumar', 'SHAILENDRA KUMAR', 'X th', 'PRE-FOUNDATION', 'AFHYPHRVOZBLNLK', 'A9273', 'A60660', '1', '2005-08-14', 'aaryan140805@gmail.com', '9508397370', 'RUPASPUR VILLAGE PATNA - 14', '07/06/20 | 12:34:28pm', '2020', 'img/36626.jpg', 1),
(37, 'GULSHAN KUMAR', 'SHAILENDRA KUMAR', 'X th', 'PRE-FOUNDATION', 'GHZHPNNCMGCOMHP', 'G5521', 'G48853', '1', '2006-04-03', 'rupaspur41@gmail.com', '9334925966', 'RUPASPUR VILLAGE PATNA - 14', '07/06/20 | 12:35:58pm', '2020', 'img/35491.jpg', 1),
(38, 'AYUSH RANJAN', 'SUDHIR KUMAR', 'X th', 'PRE-FOUNDATION', 'AJEFGDCSVTNUQQZ', 'A4487', 'A60720', '1', '2004-11-18', 'ranjanayush1118@gmail.com', '7857914759', 'TRIBHUBHAM NIWAS BAJRANG COLONY JAGDEOPATH PATNA', '07/06/20 | 12:38:30pm', '2020', 'img/95145.jpg', 1),
(39, 'Shruti', 'Barun kumar Jha', 'X th', 'PRE-FOUNDATION', 'SOWIJKHSZTHTLOV', 'S4287', 'S29016', '1', '2006-04-01', 'shrutijha7654@gmail.com', '6200393550', 'Jyotipuram colony near shyamal hospital Morya path Khajpura ', '07/06/20 | 12:41:06pm', '2020', 'img/3576.jpg', 1),
(40, 'Sweta Kumari', 'Ranjit kumar', 'X th', 'PRE-FOUNDATION', 'SYSILRUWWGUPUWL', 'S5228', 'S56397', '1', '2006-01-19', 'sauravkumar79400@gmail.com', '9693519365', 'Khajpura BMP road Patna 14', '07/06/20 | 12:45:36pm', '2020', 'img/91059.jpg', 1),
(42, 'ARYAN KUMAR ', 'Naresh Singh`', 'X th', 'PRE-FOUNDATION', 'AFCEKJQRNRYXVQW', 'A7248', 'A41357', '1', '2005-08-10', 'kumararyan98753@gmail.com', '9508498799', 'House no  4 nandanpuri colony jagdeoapth patna', '07/06/20 | 01:01:54pm', '2020', 'img/87482.jpg', 1),
(43, 'RAJ KISHOR', 'SIYARAM SAH', 'X th', 'PRE-FOUNDATION', 'REHHHQTFLTGTTKV', 'R7318', 'R42284', '1', '2004-04-04', 'raj9508517@gmail.com', '9508517191', 'MANGRULIYA, CHIRAIYA, EAST CHAMPARAN BIHAR  845415', '07/06/20 | 01:03:47pm', '2020', 'img/8154.jpg', 1),
(44, 'Mitali Raj', 'Raj Kumar', 'X th', 'PRE-FOUNDATION', 'MFWYSIGPKPNKVNO', 'M2183', 'M48911', '1', '2006-05-27', 'mitalirajkashyap@gmail.com', '9386989506, 9308009366, 7903709483', 'Rajak market ambedjar path bailey road, Po- BV college, PS - Rupaspur, Patna 14', '07/06/20 | 01:07:46pm', '2020', 'img/74006.jpg', 1),
(45, 'DIVYA DEEP RAI', 'KAPIL DEV YADAV', 'X th', 'PRE-FOUNDATION', 'DMEDXENPGUXRKIB', 'D4413', 'D41481', '1', '2004-11-17', 'kapildevyadav234@gmail.com', '7870193748', 'NEAR BLUE BELLS MONTESSORY  ', '07/06/20 | 01:09:49pm', '2020', 'img/79319.jpg', 1),
(47, 'RUQAIYYA BANO', 'MD. FIOROZ ALAM', 'X th', 'PRE-FOUNDATION', 'RWEPJTNKVSHTZZO', 'R7267', 'R14861', '1', '2006-02-10', 'gunchatahseen2004@gmail.com', '7322994657', 'indrapuri colony road no-1 samanpura , raja bazar , patna.', '07/06/20 | 01:15:01pm', '2020', 'img/11523.jpg', 1),
(48, 'JYOTI KUMARI ', 'RAGHUNANDAN MATHO', 'X th', 'PRE-FOUNDATION', 'JPHZVXPLEDUPBSI', 'J5269', 'J17898', '1', '2004-07-06', 'mraghunandan78@gmail.com', '7033772083', 'Ashiyana Road B.M.P Road khajpura , patna', '07/06/20 | 01:18:06pm', '2020', 'img/92856.jpg', 1),
(49, 'DHRUV', 'SANJAY SINGH', 'X th', 'PRE-FOUNDATION', 'DPYENYUPRRZXVSL', 'D9412', 'D58443', '1', '2004-07-28', 'dedhruv287@gmail.com', '9304775584', 'GOLA ROAD VASTU GAMGA COLONY DANAPUR PATNA', '07/06/20 | 01:19:51pm', '2020', 'img/88210.jpg', 1),
(50, 'SHAMBHAVI', 'BINOD KUMAR JAH', 'X th', 'PRE-FOUNDATION', 'SNTHNWCHLOKMZFT', 'S7755', 'S10022', '1', '2006-03-07', 'shambhavijha0703@gmail.com', '9471094167', 'Allahabad bank colony, khajpura, bailey road patna - 14', '07/06/20 | 01:35:01pm', '2020', 'img/58387.jpg', 1),
(51, 'LIPSA NARAYAN', 'LATE HARI NARYAN PRASAD', 'X th', 'PRE-FOUNDATION', 'LEWVDMDYYXYKQNT', 'L3866', 'L58532', '1', '2006-10-03', 'narayansunita47@gmail.com', '7677980326', 'MURLICHAK JAGDEOPATH PARNA', '07/06/20 | 01:39:55pm', '2020', 'img/61270.jpg', 1),
(52, 'Roshan Kumar Pandey', 'LATE VIRENDRA PANDEY', 'X th', 'PRE-FOUNDATION', 'RYXKCGGKTHFWMCX', 'R7217', 'R97833', '1', '2005-03-07', 'roshanpandey53222@gmail.com', '6206515702', 'RUKANPURA BAILEY ROAD PATNA- 14.', '07/06/20 | 01:41:54pm', '2020', 'img/82259.jpg', 1),
(53, 'ADARSH KUMAR', 'AVINASH KUMAR', 'X th', 'PRE-FOUNDATION', 'AHWGBKKBVEBQGMU', 'A7145', 'A21747', '1', '2005-11-06', 'ektakumari748877@gmail.com', '7488778529', 'NEAR NATIONAL SEED CORPORATION, SASTRI NAGAR BAILEY ROAD PATNA', '07/06/20 | 01:43:52pm', '2020', 'img/14191.jpg', 1),
(54, 'Khushi Raj', 'Ravi Prasad', 'X th', 'PRE-FOUNDATION', 'KJYTZZPCZYSZPGJ', 'K7903', 'K15662', '1', '2006-02-10', 'khushi213275@gmail.com', '9708029513', 'Murlichak jagdeopath patna 14', '07/06/20 | 01:54:03pm', '2020', 'img/82020.jpg', 1),
(55, 'ROHIT RAJ ', 'ARVIND KUMAR', 'X th', 'PRE-FOUNDATION', 'RRKFPHITXZOEMJN', 'R1434', 'R72965', '1', '2006-03-06', 'rohitraj0643@gmail.com', '7050326009', 'jamalpur , bikram ,patna', '07/06/20 | 02:03:31pm', '2020', 'img/62505.jpg', 1),
(56, 'Kashif Alam', 'Sarfaraz Alam', 'X th', 'PRE-FOUNDATION', 'KOKRJUJNFWRCXFQ', 'K9833', 'K91781', '1', '2004-05-30', 'kashifalam0012@gmail.com', '7634927810', 'AG Colon Marina Height Apartment, Patna', '07/06/20 | 02:41:22pm', '2020', 'img/18095.jpg', 1),
(57, 'Kashif Khan', 'Akbar Azam', 'X th', 'PRE-FOUNDATION', 'KGHTZHZEBIZKQDU', 'K4953', 'K69555', '1', '2005-12-17', 'kaifikhan7896@gmail.com', '8084379696', 'Razabazar samanpura Madarsa gali Patna - 14', '08/06/20 | 05:59:41am', '2020', 'img/65925.jpg', 1),
(58, 'Sunny Raj', 'Ajeet Singh', 'X th', 'PRE-FOUNDATION', 'SKQXIFSRJBQOZPX', 'S8184', 'S48506', '1', '2006-01-17', 'sk2762159@gmail.com', '8434505463', 'Shiv Mandir near Bailey Road Patna', '08/06/20 | 06:07:52am', '2020', 'img/29316.jpg', 1),
(59, 'Arzoo Kumar', 'Prem Kumar', 'X th', 'PRE-FOUNDATION', 'ACXLENMKGGCSHJB', 'A6954', 'A17808', '1', '2003-10-18', 'premrekha181@gmail.com', '9334157915', 'Nandanpuri Khajpura Patna- 14', '08/06/20 | 06:10:39am', '2020', 'img/21569.jpg', 1),
(60, 'Sumit Kumar', 'CHHOTE PASWAN', 'X th', 'PRE-FOUNDATION', 'SDTNERNRSITSBDV', 'S8724', 'S16749', '1', '2006-01-22', 'anilrahtomar@gmail.com', '993912052', 'RUPASPUR NEAR GAYTRI M,ANDIR', '08/06/20 | 06:12:22am', '2020', 'img/10277.jpg', 1),
(61, 'Joyet Kumar', 'Anil Kumar Srivastava', 'X th', 'PRE-FOUNDATION', 'JRQEVBGFBDFGUOG', 'J8723', 'J82828', '1', '2005-12-25', 'anil.bihar2015@gmail.com', '947061420', 'Rakesh kumar singh, Nandanpuri Colony, Maurya path Khajpura Patna-14', '08/06/20 | 06:15:37am', '2020', 'img/85801.jpg', 1),
(62, 'ASAD ABDULLAHA', 'ISHRAT ALI', 'X th', 'PRE-FOUNDATION', 'ABGLEUZIBDLGCBZ', 'A1393', 'A78538', '1', '2004-05-10', 'abdullahasad638@gmail.com', '6203245642, 8797745426', 'Ramnagri, Shakoor Masjid, Patna-14', '08/06/20 | 03:03:12pm', '2020', 'img/8883.jpg', 1),
(65, 'NITIN PATEL', 'NAVEEN KUMAR', 'X th', 'PRE-FOUNDATION', 'NYGEMHHQGVQEMEV', 'N7134', 'N27289', '1', '2007-02-12', 'nitinp1225@gmail.com', '9934823538', 'Kusumpuram colony near shiv mandir , bailey road , patna - 801503', '17/06/20 | 05:29:50am', '2020', 'img/86088.jpg', 1),
(67, 'ROHIT KUMAR', 'UMESH RAJAK', 'X th', 'PRE-FOUNDATION', 'RCYHVIUYDMYFFFY', 'R8860', 'R63790', '1', '2005-09-23', 'rohitkr2393@gmail.com', '7488064591', 'Rajak market ambedjar path bailey road, Po- BV college, PS - Rupaspur, Patna 14', '18/06/20 | 07:03:52pm', '2020', 'img/23726.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `name`, `password`) VALUES
(1, 'blackcoder', 'blackcoder', 'G@123aurav'),
(2, 'admin001', 'admin', 'admin001');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `disc` varchar(500) NOT NULL,
  `uploadon` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`name`, `path`, `disc`, `uploadon`, `course`) VALUES
('LIFE PROCESSBIOLOGY LECTURE -6', 'tutorials/assignment/LIFE PROCESSBIOLOGY LECTURE -6.pdf', 'LIFE PROCESSBIOLOGY LECTURE -6', '17/06/20 | 06:42:31pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `img_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` int(11) NOT NULL,
  `center_name` varchar(100) NOT NULL,
  `center_addr` varchar(200) NOT NULL,
  `center_img` varchar(1400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cources`
--

CREATE TABLE `cources` (
  `id` int(11) NOT NULL,
  `cource_title` varchar(150) NOT NULL,
  `cource_fee` int(5) NOT NULL,
  `cource_query` text NOT NULL,
  `cource_img` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `course_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cources`
--

INSERT INTO `cources` (`id`, `cource_title`, `cource_fee`, `cource_query`, `cource_img`, `faculty`, `course_cat`) VALUES
(3, 'IIT-JEE', 51500, '1 Year Course', 'IIT-JEE.jpg', 'Er. D. K. Singh', 'TARGET'),
(4, 'MEDICAL', 45500, '1 Year Course', 'MEDICAL.jpg', 'Ankit Bhardwaj', 'TARGET'),
(5, 'XI th', 30000, '1 year Course', 'XI th.jpg', 'Er. D. K. Singh', 'Foundation'),
(6, 'XII th', 30000, '1 Year Course', 'XII th.jpg', 'Er. D. K. Singh', 'Foundation'),
(7, 'IIT-JEE (XI th)', 45000, '1 Year Course', 'IIT-JEE (XI th).jpg', 'Er. D. K. Singh', 'INTEGRATED COURSE'),
(8, 'IIT-JEE (XII th)', 45000, '1 Year Course', 'IIT-JEE (XII th).jpg', 'Er. D. K. Singh', 'INTEGRATED COURSE'),
(9, 'VII th', 10000, '1 Year Course', 'VII th.jpg', 'Er. D. K. Singh', 'PRE-FOUNDATION'),
(10, 'VIII th', 11000, '1 Year Course', 'VIII th.jpg', 'Er. D. K. Singh', 'PRE-FOUNDATION'),
(11, 'IX th', 15000, '1 Year Course', 'IX th.jpg', 'Er. D. K. Singh', 'PRE-FOUNDATION'),
(13, 'X th', 18000, '1  Year Course', 'X th.jpg', 'Manish Kalyan', 'PRE-FOUNDATION');

-- --------------------------------------------------------

--
-- Table structure for table `enquery`
--

CREATE TABLE `enquery` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `Email` varchar(150) NOT NULL,
  `number` varchar(12) NOT NULL,
  `qulification` varchar(40) NOT NULL,
  `course` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  `date` varchar(40) NOT NULL,
  `seen` int(2) NOT NULL,
  `query` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquery`
--

INSERT INTO `enquery` (`id`, `name`, `Email`, `number`, `qulification`, `course`, `time`, `date`, `seen`, `query`) VALUES
(1, 'Peter Corden', 'no-reply@monkeydigital.co', '', 'NULL', 'JAVA', '06:24:26pm', '01/06/20', 1, 'HÐµllÐ¾! \r\nafter reviewing your targetclasses.org website, we recommend our new 1 month SEO max Plan, as the best solution to rank efficiently, which will guarantee a positive SEO trend in just 1 month of work. One time payment, no subscriptions. \r\n \r\nMore details about our plan here: \r\nhttps://www.monkeydigital.co/product/seo-max-package/ \r\n \r\nthank you \r\nMonkey Digital \r\nsupport@monkeydigital.co'),
(2, 'Afonin76', 'Povodyrev7895@thefmail.com', '', '12th', 'VII th', '06:11:41pm', '03/06/20', 1, ''),
(3, 'amit ', 'amit.raj420.ar9@gmail.com', '909721223', '12th', 'IIT-JEE', '09:08:29am', '06/06/20', 1, 'for iit-jee'),
(4, 'amit ', 'amit.raj420.ar9@gmail.com', '909721223', '12th', 'IIT-JEE', '09:10:03am', '06/06/20', 1, 'for iit-jee'),
(5, 'Rohit kr', '', '9135526473', '10th', 'X th', '11:05:35am', '06/06/20', 1, ''),
(6, 'Mike Jones', 'no-reply@monkeydigital.co', '', 'NULL', 'XII th', '07:16:50pm', '16/06/20', 1, 'hi there \r\n \r\nAfter checking your targetclasses.org, I`ve noticed that the SEO trend has dropped in the past several weeks \r\n \r\nIn order to fix this trend, just follow these simple steps: \r\n \r\n1. Disavow all UGC links that point to targetclasses.org (we can help for free) \r\n2. Build non-ugc links \r\n \r\nnon-UGC links. FIX your ranks with us today \r\nhttps://www.monkeydigital.co/product/non-ugc-backlinks/ \r\n \r\nthank you \r\nMike \r\nsupport@monkeydigital.co');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `work` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `code` int(4) NOT NULL,
  `num` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `work`, `email`, `code`, `num`, `img`, `query`) VALUES
(5, 'Manish Kalyan', 'Experience -12 years ', 'info@targetclasses.org', 91, '9097201223', 'Manish Kalyan.jpg', 'Faculty of Physics (M.Sc)'),
(7, 'Amit Prakash Sudhanshu', 'Experience -15 years ', 'info@targetclasses.org', 91, '9097201223', 'Amit Prakash Sudhanshu.jpg', 'Faculty of Math (B.Tech)'),
(8, 'Hemant Kumar Singh', 'Experience -8 years ', 'info@targetclasses.org', 91, '9097201223', 'Hemant Kumar Singh.jpg', 'Faculty of Chemistry (B.tech)'),
(9, 'Rohit kumar', 'Experience -7 years ', 'info@targetclasses.org', 91, '9097201223', 'Rohit kumar.jpg', 'Faculty of Social Science (PG-PU)'),
(10, 'Shailesh Kumar', 'Experience -7 years ', 'info@targetclasses.org', 91, '9097201223', 'Shailesh Kumar.jpg', 'Faculty of English (PG - PPU)'),
(11, 'Amit Kumar', 'Experience -7 years ', 'info@targetclasses.org', 91, '9097201223', 'Amit Kumar.jpg', 'Faculty of Math (MBA)'),
(12, 'Neha Kumari', 'Experience -5 years', 'info@targetclasses.org', 91, '9097201223', 'Neha Kumari.jpg', 'MBBS IGIMS, Biology Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_img` varchar(100) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `feedback` text NOT NULL,
  `course` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `img_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `live_class`
--

CREATE TABLE `live_class` (
  `id` int(11) NOT NULL,
  `video_img` varchar(150) NOT NULL,
  `video_link` varchar(150) NOT NULL,
  `Teacher_name` varchar(150) NOT NULL,
  `course` varchar(150) NOT NULL,
  `steam` varchar(150) NOT NULL,
  `title` varchar(300) NOT NULL,
  `discription` varchar(150) NOT NULL,
  `durection` varchar(10) NOT NULL,
  `upload_time` varchar(100) NOT NULL,
  `assignment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `live_class`
--

INSERT INTO `live_class` (`id`, `video_img`, `video_link`, `Teacher_name`, `course`, `steam`, `title`, `discription`, `durection`, `upload_time`, `assignment`) VALUES
(46, 'tutorials/img/X th.jpg', 'tutorials/videos/LIFE PROCESSBIOLOGY LECTURE -6.mp4', 'Neha Kumari', 'X th', 'PRE-FOUNDATION', 'LIFE PROCESSBIOLOGY LECTURE -6', 'LIFE PROCESS NOTES OF PART NUTRITION', '21 MIN', '2020/06/17 02:56:58pm', 'tutorials/assignment/LIFE PROCESSBIOLOGY LECTURE -6.pdf'),
(47, 'tutorials/img/X th.jpg', 'tutorials/videos/GEOGRAPHY LECTURE-4 part -1.mp4', 'Rohit kumar', 'X th', 'PRE-FOUNDATION', 'GEOGRAPHY LECTURE-4 part -1', 'resource & devploment', '23 min', '2020/06/17 03:06:29pm', 'tutorials/assignment/GEOGRAPHY LECTURE-4 part -1.pdf'),
(48, 'tutorials/img/X th.jpg', 'tutorials/videos/CHEMISTRY CHEMICAL REACTION LECTURE-1.mp4', 'Amit Kumar', 'X th', 'PRE-FOUNDATION', 'CHEMISTRY CHEMICAL REACTION LECTURE-1', 'chemical reaction', '30 min', '2020/06/17 03:30:27pm', 'tutorials/assignment/CHEMISTRY CHEMICAL REACTION LECTURE-1.pdf'),
(49, 'tutorials/img/X th.jpg', 'tutorials/videos/CHEMICAL REACTION LECTURE -2.mp4', 'Amit Kumar', 'X th', 'PRE-FOUNDATION', 'CHEMICAL REACTION LECTURE -2', 'CHEMICAL REACTION', '32 min', '2020/06/18 02:23:33pm', 'tutorials/assignment/CHEMICAL REACTION LECTURE -2.pdf'),
(52, 'tutorials/img/X th.jpg', 'tutorials/videos/GEOGRAPHY LECTURE-4 PART 2.mp4', 'Rohit kumar', 'X th', 'PRE-FOUNDATION', 'GEOGRAPHY LECTURE-4 PART 2', 'GEORAPHY', '33 MIN', '2020/06/18 03:54:33pm', 'tutorials/assignment/GEOGRAPHY LECTURE-4 PART 2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `paid_fee`
--

CREATE TABLE `paid_fee` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `course` varchar(150) NOT NULL,
  `course_img` varchar(150) NOT NULL,
  `installement1` varchar(8) NOT NULL,
  `installement2` varchar(8) NOT NULL,
  `installement3` varchar(8) NOT NULL,
  `otp` varchar(11) NOT NULL,
  `total` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid_fee`
--

INSERT INTO `paid_fee` (`id`, `userid`, `course`, `course_img`, `installement1`, `installement2`, `installement3`, `otp`, `total`) VALUES
(8, 'J8933', 'IIT-JEE', 'IIT-JEE.jpg', '0', '0', '0', '0', '51500'),
(9, 'S4259', 'X th', 'X th.jpg', '10000', '2000', '0', '0', '18000'),
(10, 'A2699', 'X th', 'X th.jpg', '2000', '0', '0', '0', '18000'),
(11, 'V1413', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(12, 'R4802', 'X th', 'X th.jpg', '4000', '0', '0', '0', '18000'),
(13, 'R5611', 'X th', 'X th.jpg', '4000', '0', '0', '0', '18000'),
(14, 'R9675', 'X th', 'X th.jpg', '4000', '0', '0', '0', '18000'),
(15, 'P9480', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(16, 'A5037', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(17, 'A9273', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(18, 'G5521', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(19, 'A4487', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(20, 'S4287', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(21, 'S5228', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(22, 'S1345', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(23, 'A7248', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(24, 'R7318', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(25, 'M2183', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(26, 'D4413', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(27, 'S5932', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(28, 'R7267', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(29, 'J5269', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(30, 'D9412', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(31, 'S7755', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(32, 'L3866', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(33, 'R7217', 'X th', 'X th.jpg', '0', '0', '0', '0', '16000'),
(34, 'A7145', 'X th', 'X th.jpg', '0', '0', '0', '0', '16000'),
(35, 'K7903', 'X th', 'X th.jpg', '0', '0', '0', '0', '16000'),
(36, 'R1434', 'X th', 'X th.jpg', '0', '0', '0', '0', '16000'),
(37, 'K9833', 'X th', 'X th.jpg', '0', '0', '0', '0', '16000'),
(38, 'K4953', 'X th', 'X th.jpg', '0', '0', '0', '0', '16000'),
(39, 'S8184', 'X th', 'X th.jpg', '0', '0', '0', '0', '16000'),
(40, 'A6954', 'X th', 'X th.jpg', '0', '0', '0', '0', '16000'),
(41, 'S8724', 'X th', 'X th.jpg', '0', '0', '0', '0', '16000'),
(42, 'J8723', 'X th', 'X th.jpg', '1000', '0', '0', '0', '16000'),
(43, 'A1393', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(44, 'N7134', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000'),
(45, 'G4562', 'IIT-JEE (XI th)', 'IIT-JEE (XI th).jpg', '0', '0', '0', '0', '45000'),
(46, 'R8860', 'X th', 'X th.jpg', '0', '0', '0', '0', '18000');

-- --------------------------------------------------------

--
-- Table structure for table `popular_courses`
--

CREATE TABLE `popular_courses` (
  `id` int(11) NOT NULL,
  `cource_title` varchar(70) NOT NULL,
  `cource_fee` int(5) NOT NULL,
  `cource_query` text NOT NULL,
  `cource_img` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `course_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popular_courses`
--

INSERT INTO `popular_courses` (`id`, `cource_title`, `cource_fee`, `cource_query`, `cource_img`, `faculty`, `course_cat`) VALUES
(3, 'IIT-JEE', 51500, '1 Year Course', 'IIT-JEE.jpg', 'Er. D. K. Singh', 'TARGET'),
(4, 'MEDICAL', 45500, '1 Year Course', 'MEDICAL.jpg', 'Ankit Bhardwaj', 'TARGET'),
(5, 'IIT-JEE (XI th)', 45000, '1 Year Course', 'IIT-JEE (XI th).jpg', 'Er. D. K. Singh', 'INTEGRATED COURSE'),
(6, 'IIT-JEE (XII th)', 45000, '1 Year Course', 'IIT-JEE (XII th).jpg', 'Er. D. K. Singh', 'INTEGRATED COURSE'),
(7, 'X th', 18000, '1  Year Course', 'X th.jpg', 'Manish Kalyan', 'PRE-FOUNDATION');

-- --------------------------------------------------------

--
-- Table structure for table `steam`
--

CREATE TABLE `steam` (
  `id` int(11) NOT NULL,
  `steam` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `steam`
--

INSERT INTO `steam` (`id`, `steam`) VALUES
(1, 'Foundation'),
(2, 'PRE-FOUNDATION'),
(3, 'INTEGRATED COURSE'),
(4, 'TARGET');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmition`
--
ALTER TABLE `addmition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cources`
--
ALTER TABLE `cources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquery`
--
ALTER TABLE `enquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_class`
--
ALTER TABLE `live_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paid_fee`
--
ALTER TABLE `paid_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_courses`
--
ALTER TABLE `popular_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steam`
--
ALTER TABLE `steam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmition`
--
ALTER TABLE `addmition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cources`
--
ALTER TABLE `cources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `enquery`
--
ALTER TABLE `enquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `live_class`
--
ALTER TABLE `live_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `paid_fee`
--
ALTER TABLE `paid_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `popular_courses`
--
ALTER TABLE `popular_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `steam`
--
ALTER TABLE `steam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
