-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 09:29 PM
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
-- Database: `task_28`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(11) NOT NULL,
  `ImageURL` varchar(255) DEFAULT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL,
  `PDF_URL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `ImageURL`, `Title`, `Description`, `PDF_URL`) VALUES
(1, 'uploads/67535e34a7a66_mohannad.jpg', 'letâ€™s Introduce about myself', 'With over a year of experience in Full Stack Web Development, I specialize in building scalable and efficient web applications. Proficient in both front-end and back-end technologies, including Laravel, PHP, ASP.NET Core with C#, HTML, CSS, and JavaScript, I focus on delivering high-quality, user-centered designs. Additionally, I have expertise in Cloud Computing, leveraging services like Alibaba Cloud to deploy applications, scale infrastructure, and manage cloud-based resources effectively. I also apply DevOps practices to automate development and deployment processes, ensuring rapid and reliable delivery of software.', 'uploads/pdf/675350fbda007_up_cv_mohannad.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `FacebookURL` varchar(255) DEFAULT NULL,
  `InstagramURL` varchar(255) DEFAULT NULL,
  `LinkedInURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `FacebookURL`, `InstagramURL`, `LinkedInURL`) VALUES
(1, 'https://www.facebook.com/mohannad.ali.12382/', 'https://www.instagram.com/n3lawe/', 'https://www.linkedin.com/in/mohannad-khalil-557653204/');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `ID` int(11) NOT NULL,
  `YearsOfExperience` int(11) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`ID`, `YearsOfExperience`, `PhoneNumber`) VALUES
(1, 1, '0796678701');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `SubTitle` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL,
  `PDF_URL` varchar(255) DEFAULT NULL,
  `ImageURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`ID`, `Title`, `SubTitle`, `Description`, `PDF_URL`, `ImageURL`) VALUES
(1, 'Hello', 'I am mohannad ali', 'full stack developer', 'uploads/pdf/675350dbe41aa_up_cv_mohannad.pdf', 'uploads/675359a4c4dd3_mohand22222.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `ID` int(11) NOT NULL,
  `Category` enum('popular','latest','following','upcoming') NOT NULL,
  `ImageURL` varchar(255) DEFAULT NULL,
  `Title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`ID`, `Category`, `ImageURL`, `Title`) VALUES
(1, 'latest', 'uploads/6753515866b80_p1.jpg', 'minimal design'),
(2, 'popular', 'uploads/6753516fae67f_p2.jpg', 'Paint wall'),
(3, 'following', 'uploads/6753517c0fe3c_p3.jpg', 'female light'),
(4, 'upcoming', 'uploads/6753518b0bd22_p4.jpg', 'fourth air');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `Title1` varchar(255) NOT NULL,
  `Description1` text DEFAULT NULL,
  `Title2` varchar(255) NOT NULL,
  `Description2` text DEFAULT NULL,
  `Title3` varchar(255) NOT NULL,
  `Description3` text DEFAULT NULL,
  `Title4` varchar(255) NOT NULL,
  `Description4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `Title1`, `Description1`, `Title2`, `Description2`, `Title3`, `Description3`, `Title4`, `Description4`) VALUES
(1, 'Web Development1', 'Creating responsive and dynamic websites.', 'Mobile App Development', 'Building mobile applications for iOS and Android.', 'SEO Optimization', 'Improving the search engine ranking of websites.', 'Graphic Design', 'Designing logos, brochures, and other marketing materials.');

-- --------------------------------------------------------

--
-- Table structure for table `websitelogo`
--

CREATE TABLE `websitelogo` (
  `ID` int(11) NOT NULL,
  `ImageURL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `websitelogo`
--

INSERT INTO `websitelogo` (`ID`, `ImageURL`) VALUES
(1, 'uploads/67535e08bbfa1_WebsiteLogo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `websitelogo`
--
ALTER TABLE `websitelogo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `websitelogo`
--
ALTER TABLE `websitelogo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
