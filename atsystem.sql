-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 11:49 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `A_id` int(11) NOT NULL,
  `A_Name` varchar(50) NOT NULL,
  `A_Email` varchar(50) NOT NULL,
  `A_Mobile_Number` decimal(10,0) NOT NULL,
  `College_Name` varchar(150) NOT NULL,
  `Year_of_Passing` int(11) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Uni_PRN` varchar(25) NOT NULL,
  `Current_Status` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alumni`
--

INSERT INTO `tbl_alumni` (`A_id`, `A_Name`, `A_Email`, `A_Mobile_Number`, `College_Name`, `Year_of_Passing`, `Department`, `Uni_PRN`, `Current_Status`, `Gender`) VALUES
(1, 'Suyog Devi', 'suyogdevi27@gmail.com', '9168023027', 'College of Education,Ponda-Goa.', 2012, 'IT', '71924183K', 'Own Startup', 'Male'),
(2, 'Kaushal Bhandari', 'kaushal.bhandari3@gmail.com', '8308605588', 'Government College of Arts, Science and Commerce, Khandola, Marcela Goa.', 2011, 'Computer', '71454332H', 'Furthur Studies', 'Male'),
(3, 'Prathviraj Walke', 'prathviralwalke1999@gmail.com', '8830587957', 'College of Education,Ponda-Goa', 2012, 'E&TC', '71424343P', 'Employeed', 'Male'),
(4, 'Omkar Wanave', 'wanaveomkar@gmail.com', '8605146419', 'Goa College of Home Science, Campal, Panaji, Goa', 2013, 'Computer', '61423221O', 'Furthur Studies', 'Male'),
(5, 'Siddhi Deshmukh', 'siddhideshmukh21@gmail.com', '8769081331', 'Government College of Arts, Science and Commerce, Khandola, Marcela Goa.', 2014, 'Mechanical', '73455434D', 'Employeed', 'Female'),
(6, 'Sushant Vernekar', 'sushantvernekar60@gmail.com', '7276616755', 'Goa College of Home Science, Campal, Panaji, Goa', 2010, 'IT', '17113008S', 'Furthur Studies', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni_lgn`
--

CREATE TABLE `tbl_alumni_lgn` (
  `Al_id` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clg`
--

CREATE TABLE `tbl_clg` (
  `Clg_Id` int(11) NOT NULL,
  `College_Name` varchar(500) NOT NULL,
  `College_Code` varchar(30) DEFAULT NULL,
  `Address` varchar(200) NOT NULL,
  `Clg_Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_clg`
--

INSERT INTO `tbl_clg` (`Clg_Id`, `College_Name`, `College_Code`, `Address`, `Clg_Type`) VALUES
(1, 'Government College of Arts, Science and Commerce, Khandola, Marcela Goa.', NULL, 'Khandola, Marcela', 'Govt'),
(2, 'Government College of Arts, Science & Commerce, Sanquelim-Goa', NULL, 'Sanquelim', 'Govt'),
(3, 'Government College of Arts, Science & Commerce, Quepem-Goa', NULL, 'Quepem', 'Govt'),
(4, 'Sant Sohirobanath Ambiye Government College of Arts & Commerce, VIrnoda-Pernem, Goa.', NULL, 'VIrnoda-Pernem', 'Govt'),
(5, 'Government College of Commerce & Economics, Borda-Margao, Goa', NULL, 'Borda-Margao', 'Govt'),
(6, 'Goa College of Music, Kala Academys Complex, Campal, Panaji-Goa', NULL, 'Campal, Panaji', 'Govt'),
(7, 'Goa College of Home Science, Campal, Panaji, Goa', NULL, 'Campal, Panaji', 'Govt'),
(8, 'Shree Mallikarjun College of Arts & Commerce, Canacona Goa ', NULL, 'Canacona', 'Non-Govt'),
(9, 'Nirmala Institute of Education, Altinho Panaji, Goa ', NULL, 'Altinho Panaji', 'Non-Govt'),
(10, 'Dhempe College of Arts & Science, Panaji, Goa.', NULL, 'Panaji', 'Non-Govt'),
(11, 'V.M. Salgaocar College of law, Miramar, Panaji Goa ', NULL, 'Miramar, Panaji', 'Non-Govt'),
(12, 'S.S. Dempo College of Commerce & Economics, Altinho, Panaji, Goa', NULL, 'Altinho, Panaji', 'Non-Govt'),
(13, 'College of Commerce and Economics, Ponda Goa ', NULL, ' Ponda', 'Non-Govt'),
(14, 'Carmel College of Arts, Science & Commerce for Women, Nuvem Goa ', NULL, 'Nuvem ', 'Non-Govt'),
(15, 'Rosary College of Commerce & Art, Navelim Salcete Goa', NULL, 'Navelim Salcete', 'Non-Govt'),
(16, 'Fr. Agnel College of Arts & Commerce, Pilar Goa ', NULL, 'Pilar', 'Non-Govt'),
(17, 'Narayan Zantye College of Commerce, Bicholim Goa ', NULL, 'Bicholim ', 'Non-Govt'),
(18, 'Smt. Parvatibi Chowgule Cultural Foundation\'s College of Arts & Science, Margao Goa ', NULL, 'Margao', 'Non-Govt'),
(19, 'College of Education, Ponda Goa ', NULL, 'Ponda', 'Non-Govt'),
(20, 'College of Arts, Sou. Sheela Premandand Vaidya College of Science & V.N.S. Bandekar College of Commerce, Assagao, Mapusa Goa.', NULL, 'Assagao, Mapusa', 'Non-Govt'),
(21, 'St. Xavier\'s College of Arts, Science & Commerce, Mapusa Goa. ', NULL, 'Mapusa', 'Non-Govt'),
(22, 'S.V. College of Commerce & Management Studies, Telang Nagar, Khorlim, Mapusa Goa ', NULL, 'Telang Nagar, Khorlim, Mapusa', 'Non-Govt'),
(23, 'MES College of Arts & Commerce, Zuarinagar Goa ', NULL, 'Zuarinagar', 'Non-Govt'),
(24, 'Vidya Vikas Mandal\'s Shree Damodar College of Commerce & Economics, Margao Goa ', NULL, 'Margao', 'Non-Govt'),
(25, 'Vidya Vikas Mandal\'s Govind Ramnath Kare College of Law Margao, Goa. ', NULL, 'Margao', 'Non-Govt'),
(26, 'Cuncolim Educational Society\'s College of Arts & Commerce, Cuncolim Salcete Goa ', NULL, 'Cuncolim Salcete', 'Non-Govt'),
(27, 'PES\'s College of Arts & Science, Ponda Goa ', NULL, 'Ponda', 'Non-Govt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clg_auth_lgn`
--

CREATE TABLE `tbl_clg_auth_lgn` (
  `CA_id` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Clg_Id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_clg_auth_lgn`
--

INSERT INTO `tbl_clg_auth_lgn` (`CA_id`, `Username`, `Password`, `Clg_Id`) VALUES
(1, 'gcasc@khandola.in', 'Gcasck@123', '1'),
(2, 'gcasc@sanquelim.in', 'Gcascs@123', '2'),
(3, 'gcasc@quepem.in', 'Gcascq@123', '3'),
(4, 'ssacgac@virnoda.in', 'Ssacgacv@123', '4'),
(5, 'gcce@borda.in', 'Gcceb@123', '5'),
(6, 'gcm@campal.in', 'Gcm@123', '6'),
(7, 'gchs@campal.in', 'Gchs@123', '7'),
(8, 'smcac@canacona.in', 'Smcacc@123', '8'),
(9, 'nie@altinho.in', 'niea@123', '9'),
(10, 'dcas@panji.in', 'Dcasp@123', '10'),
(11, 'vmscl@miramar.in', 'vmsclm@123', '11'),
(12, 'ce@ponda.in', 'cep@123', '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dir_lgn`
--

CREATE TABLE `tbl_dir_lgn` (
  `D_id` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dir_lgn`
--

INSERT INTO `tbl_dir_lgn` (`D_id`, `Username`, `Password`) VALUES
(1, 'dhegoa@ats.in', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `E_id` int(11) NOT NULL,
  `E_Title` varchar(150) NOT NULL,
  `E_Info` varchar(500) NOT NULL,
  `Clg_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gblnotice`
--

CREATE TABLE `tbl_gblnotice` (
  `GN_id` int(11) NOT NULL,
  `Global_Notice` varchar(100) NOT NULL,
  `College_Name` varchar(150) NOT NULL,
  `P_Date` date NOT NULL,
  `Clg_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `N_id` int(11) NOT NULL,
  `Notice` varchar(100) NOT NULL,
  `P_Date` date NOT NULL,
  `Clg_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `R_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Mobile_No` int(11) NOT NULL,
  `College_Name` varchar(150) NOT NULL,
  `Uni_PRN` varchar(25) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Year_of_Passing` int(11) NOT NULL,
  `Current_Status` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_startups`
--

CREATE TABLE `tbl_startups` (
  `SU_id` int(11) NOT NULL,
  `Company_Name` varchar(150) NOT NULL,
  `Domain` varchar(150) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `A_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studies`
--

CREATE TABLE `tbl_studies` (
  `S_id` int(11) NOT NULL,
  `Course_Name` varchar(50) NOT NULL,
  `College_Name` varchar(150) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Year_Of_Passing` int(11) NOT NULL,
  `A_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work`
--

CREATE TABLE `tbl_work` (
  `W_id` int(11) NOT NULL,
  `Company_Name` varchar(150) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `A_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`A_id`),
  ADD UNIQUE KEY `email` (`A_Email`),
  ADD UNIQUE KEY `Uni_PRN` (`Uni_PRN`) USING BTREE;

--
-- Indexes for table `tbl_alumni_lgn`
--
ALTER TABLE `tbl_alumni_lgn`
  ADD PRIMARY KEY (`Al_id`),
  ADD UNIQUE KEY `uname` (`Username`),
  ADD UNIQUE KEY `pswd` (`Password`);

--
-- Indexes for table `tbl_clg`
--
ALTER TABLE `tbl_clg`
  ADD PRIMARY KEY (`Clg_Id`),
  ADD UNIQUE KEY `Clg_Name` (`College_Name`),
  ADD UNIQUE KEY `Clg_Code` (`College_Code`);

--
-- Indexes for table `tbl_clg_auth_lgn`
--
ALTER TABLE `tbl_clg_auth_lgn`
  ADD PRIMARY KEY (`CA_id`),
  ADD UNIQUE KEY `clg_uname` (`Username`),
  ADD UNIQUE KEY `Clg_pswd` (`Password`);

--
-- Indexes for table `tbl_dir_lgn`
--
ALTER TABLE `tbl_dir_lgn`
  ADD PRIMARY KEY (`D_id`),
  ADD UNIQUE KEY `D_uname` (`Username`),
  ADD UNIQUE KEY `D_pswd` (`Password`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`E_id`);

--
-- Indexes for table `tbl_gblnotice`
--
ALTER TABLE `tbl_gblnotice`
  ADD PRIMARY KEY (`GN_id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`N_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`R_id`),
  ADD UNIQUE KEY `Mobile_No` (`Mobile_No`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Uni_PRN` (`Uni_PRN`) USING BTREE,
  ADD UNIQUE KEY `Pswd` (`Password`);

--
-- Indexes for table `tbl_startups`
--
ALTER TABLE `tbl_startups`
  ADD PRIMARY KEY (`SU_id`);

--
-- Indexes for table `tbl_studies`
--
ALTER TABLE `tbl_studies`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `tbl_work`
--
ALTER TABLE `tbl_work`
  ADD PRIMARY KEY (`W_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_alumni_lgn`
--
ALTER TABLE `tbl_alumni_lgn`
  MODIFY `Al_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_clg`
--
ALTER TABLE `tbl_clg`
  MODIFY `Clg_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_clg_auth_lgn`
--
ALTER TABLE `tbl_clg_auth_lgn`
  MODIFY `CA_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_dir_lgn`
--
ALTER TABLE `tbl_dir_lgn`
  MODIFY `D_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `E_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gblnotice`
--
ALTER TABLE `tbl_gblnotice`
  MODIFY `GN_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `N_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_startups`
--
ALTER TABLE `tbl_startups`
  MODIFY `SU_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_studies`
--
ALTER TABLE `tbl_studies`
  MODIFY `S_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_work`
--
ALTER TABLE `tbl_work`
  MODIFY `W_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
