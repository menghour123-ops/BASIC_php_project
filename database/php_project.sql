-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 05:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'banteaymeanchey'),
(2, 'pursat'),
(3, 'kompot');

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE `travels` (
  `travelID` int(11) NOT NULL,
  `places` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`travelID`, `places`, `image`, `description`, `categoryID`, `date`) VALUES
(24, 'ភ្នំពេញ', 'pp.jpg', 'រាជធានី ភ្នំពេញត្រូវបានសាងសង់ជាលើកដំបូង នៅក្នុងសតវត្សរ៍ទី១៥ ក្នុង​ អំឡុងរជ្ជកាលព្រះបាទស្រីសុរិយោព័រ(ពញាយ៉ាត) នៅពេលដែល​ព្រះ អង្គបានបោះបង់ចោលរាជធានីអង្គរ ហើយបានមកសាងសង់រាជធានីថ្មី មួយ ទៀតនៅទួលបាសាន ក្នុងខេត្តស្រីសឈរ ដែលសព្វថ្ងៃត្រូវបានគេ​ស្គាល់ ថា ជាស្រុកស្', 1, '2021-08-01'),
(25, 'បន្ទាយមានជ័យ', 'bmc.jpg', 'ខេត្តបន្ទាយមានជ័យ​ បង្កើតឡើង​ដោយ​អនុ​ក្រឹត្យច្បាប់​លេខ​៣២ ក្រ​.​ច ចុះ​ថ្ងៃទី​២៣​ ខែមករា ​ឆ្នាំ​១៩៨៧ របស់​ក្រុមប្រឹក្សារដ្ឋ និង​កំណត់​ព្រំប្រទល់​ខេត្ត ដោយ​អនុក្រឹត្យ​លេខ​ ១០​ អនក្រ ​ចុះ​ថ្ងៃទី​៤​ ខែមេសា​ ឆ្នាំ​១៩៨៧ របស់​ក្រុមប្រឹក្សារដ្ឋមន្ត្រី​នៃ​សាធារណរដ', 1, '2021-08-02'),
(26, 'ពោធិ៍សត្វ', 'ps.png', 'សិក្សា​តាម​ការ​និទាន​ដោយ​ការ​ចង​ចាំ​របស់​ព្រឹទ្ធ​ចា​រ្យ​យើង​មួយ​ចំនួន​ដូច​មាន​ខ្លឹមសារ​ថា​មួយ ស្ទឹង​ពោធិ៍សាត់​ពី​មុន គឺ​ស្ទឹង​ដែល​ហូរ​ប្រប​វត្ត​បាកាន (​កាត់​ឃុំ​អូរ​តា​ប៉ោង​) ហូរ​ចាក់​ពី​ក្បាល​ស្ទឹង ចូល​ទៅ​បឹង​ទន្លេសាប ។', 1, '2021-08-03'),
(27, 'បាត់ដំបង', 'btb.webp', 'បើ​​តាម​​សិលា​​ចារឹក​​ថ្ម​ប្រាសាទ​​ដែល​​យើង​​មាន និង​​បាន​​រក​​ឃើញ​​រហូត​​សព្វ​ថ្ងៃ​​នៅ​​មុន​​សម័យ និង​​សម័យ​​អង្គរ​​គេ​ពុំ​​បាន​​​ឃើញ​​ចែង​​ឱ្យ​យើង​​ដឹង​ថា តើ​​សម័យ​​នោះ​មាន​ភូមិ​​ស្រុក​​ណា​​មួយ​​ដែល​​មាន​​ឈ្មោះ​បាត់​ដំបង​​នោះ​​ទេ​។ ប៉ុន្តែ​​យើង​​​​ក៏​​ម', 1, '2021-08-04'),
(28, 'រតនគិរី', 'rkr.jpg', 'ខេត្តរតនគិរី ស្ថិត​នៅ​ភាគ​ឦសាន​នៃ​ព្រះរាជាណាចក្រ​កម្ពុជា មាន​ចម្ងាយ​ពី​រាជធានី​ភ្នំពេញ​៥៨៨​គីឡូម៉ែត្រ មាន​ព្រំប្រទល់​ខាងកើត​ជាប់​នឹង​ខេត្ត​ក​ន្ទូ​ម និង​ខេត្ត​យ៉ា​ឡាយ នៃ​សាធារណរដ្ឋ​សង្គម​និយម​វៀតណាម ខាងលិច​ជាប់​នឹង​ខេត្តស្ទឹងត្រែង ខាងជើង​ជាប់​នឹង​ខេត្ត​អត្', 1, '2021-08-05'),
(29, 'កណ្ដាល', 'kd.jpg', 'ខេត្តកណ្ដាលព័ទ្ធជុំវិញរាជធានីភ្នំពេញទាំងមូល។ ខេត្តនេះក៏ជាប៉ែកមួយនៃផ្ទៃទីក្រុងមេភ្នំពេញធំជាងគេដែលមានប្រជាជនមួយលាននាក់រស់នៅក្នុង និង ព័ទ្ធជុំវិញខេត្ត។ កាលណាយើងធ្វើដំណើរចេញពីភ្នំពេញ ព្រំដែនរវាងខេត្ត-រាជធានីទាំងពីរស្ទើរតែមើលមិនដឹង។', 1, '2021-08-06'),
(32, 'កំពុងចាម', 'ps.png', 'ខេត្តរតនគិរី ស្ថិត​នៅ​ភាគ​ឦសាន​នៃ​ព្រះរាជាណាចក្រ​កម្ពុជា មាន​ចម្ងាយ​', 1, '2021-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `role`, `password`, `phone`, `email`, `address`) VALUES
(1, 'LeHour', 'Admin', 1313, 1313, 'le.hour@gmail.com', 'Phnom Penh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`travelID`),
  ADD KEY `key` (`categoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `travels`
--
ALTER TABLE `travels`
  MODIFY `travelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `travels`
--
ALTER TABLE `travels`
  ADD CONSTRAINT `key` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
