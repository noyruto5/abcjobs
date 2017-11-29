-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2017 at 10:16 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcjobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_educ_background`
--

CREATE TABLE `app_educ_background` (
  `id` int(10) UNSIGNED NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `in_school` varchar(5) NOT NULL,
  `hi_ed_level` varchar(50) NOT NULL,
  `year_grad` varchar(10) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `course` varchar(255) DEFAULT NULL,
  `award` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_educ_background`
--

INSERT INTO `app_educ_background` (`id`, `applicant_id`, `in_school`, `hi_ed_level`, `year_grad`, `school_name`, `course`, `award`) VALUES
(7, 7, 'No', 'College Graduate', '123', 'sdf', 'sdf', 'sdf'),
(6, 6, 'Yes', 'Incomplete College Level', 'sdf', 'sdf', 'sdf', 'sdf'),
(5, 5, 'Yes', 'College Graduate', '123', 'sdf', 'sdf', 'sdf'),
(8, 8, 'Yes', 'College Graduate', '123', 'sdf', 'sdf', 'sdf'),
(9, 9, 'Yes', 'Post Graduate', '123', '123', 'sdf', 'sdf'),
(10, 10, 'Yes', 'College Graduate', '34234', '234', 'sdf', 'sdf'),
(11, 11, 'Yes', 'College Graduate', '1232234', 'sdfdsf', 'asdf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `app_eligibility`
--

CREATE TABLE `app_eligibility` (
  `id` int(10) UNSIGNED NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `el_name1` varchar(255) DEFAULT NULL,
  `el_name2` varchar(255) DEFAULT NULL,
  `el_no1` varchar(50) DEFAULT NULL,
  `el_no2` varchar(50) DEFAULT NULL,
  `exp_date1` date DEFAULT NULL,
  `exp_date2` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_eligibility`
--

INSERT INTO `app_eligibility` (`id`, `applicant_id`, `el_name1`, `el_name2`, `el_no1`, `el_no2`, `exp_date1`, `exp_date2`) VALUES
(6, 7, 'sdf', 'sdf', 'sdf', 'sdf', '2017-11-09', '2017-11-08'),
(5, 6, '', '', '', '', '0000-00-00', '0000-00-00'),
(4, 5, 'sdf', 'sdfsdf', '234234', '234234', '2017-11-15', '0000-00-00'),
(7, 8, 'sdf', '', 'sdf', '', '2017-11-21', '0000-00-00'),
(8, 9, '', '', '', '', '0000-00-00', '0000-00-00'),
(9, 10, '', '', '', '', '0000-00-00', '0000-00-00'),
(10, 11, 'sdf', '', 'sdf', '', '2017-11-14', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `app_job_preferences`
--

CREATE TABLE `app_job_preferences` (
  `id` int(10) UNSIGNED NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `occupation1` varchar(100) DEFAULT NULL,
  `occupation2` varchar(100) DEFAULT NULL,
  `occupation3` varchar(100) DEFAULT NULL,
  `industry1` varchar(100) DEFAULT NULL,
  `industry2` varchar(100) DEFAULT NULL,
  `industry3` varchar(100) DEFAULT NULL,
  `pref_location` varchar(50) DEFAULT NULL,
  `location1` varchar(100) DEFAULT NULL,
  `location2` varchar(100) DEFAULT NULL,
  `location3` varchar(100) DEFAULT NULL,
  `with_passport` varchar(5) DEFAULT NULL,
  `pass_exp_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_job_preferences`
--

INSERT INTO `app_job_preferences` (`id`, `applicant_id`, `occupation1`, `occupation2`, `occupation3`, `industry1`, `industry2`, `industry3`, `pref_location`, `location1`, `location2`, `location3`, `with_passport`, `pass_exp_date`) VALUES
(8, 8, 'sdf', '', '', 'sdf', '', '', 'Overseas', 'sdf', 'sdf', 'sdf', 'Yes', '2017-11-01'),
(7, 7, 'qwe', 'qwe', 'qew', 'qwe', 'qwe', 'qwe', 'Local', '', '', '', NULL, '0000-00-00'),
(6, 6, 'sdf', '', '', 'sdf', '', '', 'Local', '', '', '', 'Yes', '2017-11-14'),
(5, 5, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'Overseas', 'sdf', 'sdf', 'sdf', 'Yes', '2017-11-14'),
(9, 9, 'sdfds', '', '', 'sdf', '', '', 'Local', '', '', '', NULL, '0000-00-00'),
(10, 10, 'we', '', '', 'wer', '', '', 'Local', '', '', '', NULL, '0000-00-00'),
(11, 11, 'asdf', '', '', 'sdf', '', '', 'Local', '', '', '', NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `app_lang_proficiency`
--

CREATE TABLE `app_lang_proficiency` (
  `id` int(10) UNSIGNED NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `eng_read` varchar(5) NOT NULL DEFAULT 'No',
  `eng_write` varchar(5) NOT NULL DEFAULT 'No',
  `eng_speak` varchar(5) NOT NULL DEFAULT 'No',
  `eng_under` varchar(5) NOT NULL DEFAULT 'No',
  `fil_read` varchar(5) NOT NULL DEFAULT 'No',
  `fil_write` varchar(5) NOT NULL DEFAULT 'No',
  `fil_speak` varchar(5) NOT NULL DEFAULT 'No',
  `fil_under` varchar(5) NOT NULL DEFAULT 'No',
  `other_lang` varchar(20) DEFAULT 'No',
  `olang_read` varchar(5) DEFAULT 'No',
  `olang_write` varchar(5) DEFAULT 'No',
  `olang_speak` varchar(5) DEFAULT 'No',
  `olang_under` varchar(5) DEFAULT 'No'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_lang_proficiency`
--

INSERT INTO `app_lang_proficiency` (`id`, `applicant_id`, `eng_read`, `eng_write`, `eng_speak`, `eng_under`, `fil_read`, `fil_write`, `fil_speak`, `fil_under`, `other_lang`, `olang_read`, `olang_write`, `olang_speak`, `olang_under`) VALUES
(7, 7, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'qew', 'Yes', 'Yes', 'Yes', 'Yes'),
(6, 6, 'Yes', 'No', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'No', 'sdf', 'Yes', 'No', 'No', 'No'),
(5, 5, 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'sdf', 'No', 'Yes', 'Yes', 'No'),
(8, 8, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', NULL, NULL, NULL, NULL),
(9, 9, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', NULL, NULL, NULL, NULL),
(10, 10, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', NULL, NULL, NULL, NULL),
(11, 11, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `app_personal_info`
--

CREATE TABLE `app_personal_info` (
  `applicant_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `job_id` int(11) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `bplace` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `height` varchar(50) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `tin_no` varchar(50) DEFAULT NULL,
  `gsss_no` varchar(50) DEFAULT NULL,
  `pagibig_no` varchar(50) DEFAULT NULL,
  `philhealth_no` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `present_add` varchar(255) NOT NULL,
  `perm_add` varchar(255) DEFAULT NULL,
  `landline_no` varchar(20) DEFAULT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `employment_status` varchar(100) NOT NULL,
  `emp_status` varchar(20) DEFAULT NULL,
  `accepted` varchar(15) NOT NULL DEFAULT 'no' COMMENT 'yes/no/rejected',
  `date_status` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_personal_info`
--

INSERT INTO `app_personal_info` (`applicant_id`, `username`, `job_id`, `lname`, `fname`, `mname`, `bdate`, `bplace`, `sex`, `status`, `citizenship`, `height`, `weight`, `religion`, `tin_no`, `gsss_no`, `pagibig_no`, `philhealth_no`, `email`, `present_add`, `perm_add`, `landline_no`, `mobile_no`, `employment_status`, `emp_status`, `accepted`, `date_status`) VALUES
(5, 'john', 3, 'sdf', 'sdf', 'sdf', '2017-11-07', 'sdf', 'Male', 'Seperated', 'sdf', 'sdf', 'sdf', 'asdf', 'sdf', 'sdf', 'sdf', 'sdf', 'asdfasdf@adsf.sd', 'sdf', 'sdf', 'sdf', 'sdf', 'Wage Employed', 'employed', 'no', '2017-11-10'),
(6, 'john', 4, 'sdf', 'sdf', 'sdf', '2017-11-15', 'sdf', 'Female', 'Married', 'sdf', 'sdf', 'sdf', 'sdf', '123', '12', '123', '213', 'asdfasdf@adsf.sd', 'sdfs', 'sdf', '', '1123', 'Retired', 'unemployed', 'no', '2017-11-07'),
(7, '', 4, 'sdf', 'sdf', 'sdf', '2017-10-31', 'sdf', 'Female', 'Married', 'sdf', '234', '234', 'wdf', '23', '23', '23', '23', 'aasdf@adsf.sd', 'sdf', 'sdf', '3', '23', 'Finished Contract', 'unemployed', 'yes', '2017-11-07'),
(8, '', 4, 'sdf', 'sdf', 'sfd', '2017-11-14', 'sdfsdf', 'Male', 'Widowed', 'sdf', '124', '234', 'sdf', '234', '234', '23', '23', 'aadsf@adsf.ds', 'asdf', 'sdf', 'sd', 'df', 'New Entrant/Fresh Graduate', 'unemployed', 'yes', '2017-11-07'),
(10, 'john', 4, 'Uzumaki', 'Naruto', 's', '2017-11-22', 'sdf', 'Male', 'Widowed', 'afsdf', 'sdf', 'sdf', 'asdf', '23', '23', '23', '23', 'aadsf@adsf.ds', 'sdf', 'Uzumaki', '3', '223', 'Wage Employed', 'employed', 'rejected', '2017-11-07'),
(11, 'john', 6, 'wer', 'wer', 'w', '2017-11-21', 'asdf', 'Male', 'Widowed', 'asdf', '123', '234', 'asdf', '234', '234', '234', '234', 'aasdf@asdf.sd', 'asdfasdf asdf', 'wer', '123', '23423', 'Wage Employed', 'employed', 'no', '2017-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `app_skills`
--

CREATE TABLE `app_skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `skills1` varchar(255) DEFAULT NULL,
  `skills2` varchar(255) DEFAULT NULL,
  `skills3` varchar(255) DEFAULT NULL,
  `skills4` varchar(255) DEFAULT NULL,
  `skills5` varchar(255) DEFAULT NULL,
  `skills6` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_skills`
--

INSERT INTO `app_skills` (`id`, `applicant_id`, `skills1`, `skills2`, `skills3`, `skills4`, `skills5`, `skills6`) VALUES
(2, 5, 'sdf', 'sdf', 'sdfsdf', 'sdf', 'sdf', 'sdf'),
(3, 6, '', '', '', '', '', ''),
(4, 7, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf'),
(5, 8, '', '', '', '', '', ''),
(6, 9, '', '', '', '', '', ''),
(7, 10, '', '', '', '', '', ''),
(8, 11, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `app_techvoc_training`
--

CREATE TABLE `app_techvoc_training` (
  `id` int(10) UNSIGNED NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `training1` varchar(100) DEFAULT NULL,
  `training2` varchar(100) DEFAULT NULL,
  `training3` varchar(100) DEFAULT NULL,
  `training4` varchar(100) DEFAULT NULL,
  `course_duration1` varchar(50) DEFAULT NULL,
  `course_duration2` varchar(50) DEFAULT NULL,
  `course_duration3` varchar(50) DEFAULT NULL,
  `course_duration4` varchar(50) DEFAULT NULL,
  `institution1` varchar(255) DEFAULT NULL,
  `institution2` varchar(255) DEFAULT NULL,
  `institution3` varchar(255) DEFAULT NULL,
  `institution4` varchar(255) DEFAULT NULL,
  `cert1` varchar(100) DEFAULT NULL,
  `cert2` varchar(100) DEFAULT NULL,
  `cert3` varchar(100) DEFAULT NULL,
  `cert4` varchar(100) DEFAULT NULL,
  `completed1` varchar(5) DEFAULT NULL,
  `completed2` varchar(5) DEFAULT NULL,
  `completed3` varchar(5) DEFAULT NULL,
  `completed4` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_techvoc_training`
--

INSERT INTO `app_techvoc_training` (`id`, `applicant_id`, `training1`, `training2`, `training3`, `training4`, `course_duration1`, `course_duration2`, `course_duration3`, `course_duration4`, `institution1`, `institution2`, `institution3`, `institution4`, `cert1`, `cert2`, `cert3`, `cert4`, `completed1`, `completed2`, `completed3`, `completed4`) VALUES
(7, 8, 'ssdf', '', '', '', 'sdf', '', '', '', 'sdf', '', '', '', 'sdf', '', '', '', 'Yes', NULL, NULL, NULL),
(5, 6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(6, 7, 'sdf', 'sdf', '', '', 'sdf', 'sdf', '', '', 'sdf', 'sdf', '', '', 'sdf', 'sdf', '', '', 'Yes', 'Yes', NULL, NULL),
(4, 5, 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'No', 'No', 'Yes', 'Yes'),
(8, 9, 'sdf', '', '', '', '123', '', '', '', 'sdf', '', '', '', 'sdf', '', '', '', 'Yes', NULL, NULL, NULL),
(9, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(10, 11, 'asdfsdf', '', '', '', 'asdf', '', '', '', 'asdf', '', '', '', 'sdf', '', '', '', 'Yes', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `app_work_exp`
--

CREATE TABLE `app_work_exp` (
  `id` int(10) UNSIGNED NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `comp_name1` varchar(255) DEFAULT NULL,
  `comp_name2` varchar(255) DEFAULT NULL,
  `comp_name3` varchar(255) DEFAULT NULL,
  `comp_address1` varchar(255) DEFAULT NULL,
  `comp_address2` varchar(255) DEFAULT NULL,
  `comp_address3` varchar(255) DEFAULT NULL,
  `position1` varchar(255) DEFAULT NULL,
  `position2` varchar(255) DEFAULT NULL,
  `position3` varchar(255) DEFAULT NULL,
  `work_date1` varchar(50) DEFAULT NULL,
  `work_date2` varchar(50) DEFAULT NULL,
  `work_date3` varchar(50) DEFAULT NULL,
  `appointment1` varchar(100) DEFAULT NULL,
  `appointment2` varchar(100) DEFAULT NULL,
  `appointment3` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_work_exp`
--

INSERT INTO `app_work_exp` (`id`, `applicant_id`, `comp_name1`, `comp_name2`, `comp_name3`, `comp_address1`, `comp_address2`, `comp_address3`, `position1`, `position2`, `position3`, `work_date1`, `work_date2`, `work_date3`, `appointment1`, `appointment2`, `appointment3`) VALUES
(2, 5, 'sdf', 'sdf', 'sdfsd', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf'),
(3, 6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 7, 'sdf', '', '', 'sdf', '', '', 'sdf', '', '', 'sdf', '', '', 'sdf', '', ''),
(5, 8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `brgy`
--

CREATE TABLE `brgy` (
  `id` int(10) UNSIGNED NOT NULL,
  `brgy_name` varchar(100) NOT NULL,
  `slots` int(11) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brgy`
--

INSERT INTO `brgy` (`id`, `brgy_name`, `slots`, `year`) VALUES
(1, 'Bato', 27, '2017'),
(2, 'Fabrica', 29, '2017'),
(3, 'Old Sagay', 22, '2017'),
(4, 'Paraiso', 30, '2017'),
(5, 'Poblacion 1', 30, '2017'),
(6, 'Poblacion 2', 30, '2017'),
(7, 'Rizal', 30, '2017'),
(8, 'Vito', 27, '2017'),
(9, 'Andres Bonifacio', 30, '2017'),
(10, 'Baviera', 30, '2017'),
(11, 'Bulanon', 30, '2017'),
(12, 'Campo Himogaan', 30, '2017'),
(13, 'Colonia Divina', 30, '2017'),
(14, 'General Luna', 30, '2017'),
(15, 'Himogaan Baybay', 30, '2017'),
(16, 'Lopez Jaena', 30, '2017'),
(17, 'Malubon', 30, '2017'),
(18, 'Maquiling', 30, '2017'),
(19, 'Molocaboc', 30, '2017'),
(20, 'Plaridel', 30, '2017'),
(21, 'Puey', 30, '2017'),
(22, 'Rafaela Barrera', 30, '2017'),
(23, 'Sewahon 1', 30, '2017'),
(24, 'Taba-ao', 30, '2017'),
(25, 'Tadlong', 30, '2017');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `agency_address` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `hiring_country` varchar(255) NOT NULL,
  `qualifications` text,
  `requirements` text,
  `benifits` text,
  `position_available` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `agency_name`, `agency_address`, `job_title`, `hiring_country`, `qualifications`, `requirements`, `benifits`, `position_available`) VALUES
(3, 'MMML RECRUITMENT SERVICES, INC.', '10 Lacson St., Mandalagan, Bacolod City, Negro Occidental', 'Household Service Workers', 'Kuwait, Saudi Arabia, Qatar, Bahrain, Jordan', '* Female\r\n* 23-38 years old (39-49 years old if ex-abroad)\r\n* At least high school graduate/college level/college graduate\r\n* Can speak and understand english\r\n* Fit to work and Hardworking/ready to go anytime', '* Birth Certificate-(NSO)/Local\r\n* Marriage Contract-(NSO)/Local\r\n* Baptismal/Voter\'s Cert/TOR/Form 137\r\n* Voter\'s ID/SSS ID/TIN ID/Philhealth\r\n* School ID/Yearbook/E1/Brgy. Clearance/\r\n* Police (local) / NBI/Childbirth/Cedula', 'FREE\n* Passport\n* Training\n* Accomodation while waiting\n* Food\n* Pre-medical and Final Medical', '25'),
(4, 'RAMASIA, International Manpower Services', '12 Lacson St., Mandalagan, Bacolod City, Negro Occidental', 'Assistant Nurse', 'Kuwait, Saudi Arabia, Qatar, Malaysia, Jordan', '* Female 23-43 yrs.old with/without experience are welcome to apply.\r\n* Graduate in Bachelor of Science of Nursing', '* Passport\r\n* NBI Cleareance\r\n* NSO', '* Free Training\r\n* Free Accomodation\r\n* Medical Insurance\r\n* Allowance', '21'),
(5, 'BUROTO.inc', ' asdfasdf ads', 'Factory Worker', 'Asdfasdf, asdfa, adsfasdf', '* asdfadsf\r\n*j adsfadfadsf\r\n* asdfadfad', '* asdfadsf\r\n*j adsfadfadsf\r\n* asdfadfad', '* Free lunch\r\n*j adsfadfadsf\r\n* asdfadfad', '10'),
(6, 'hjkghjk', 'ghjkgkj ghjkghj kgjk', 'gkjghjkghj', 'ghjkghjkkghjk ghjk', 'ghjkghkj gh\r\nfghjfhjkghjk\r\n\r\nfghjfhj', 'fghjf hj\r\nfghj\r\nfgj', 'fghjfhjfghj\r\nf\r\nfghj', '15'),
(7, 'werwerwer', 'werwerwe', 'werwer', 'werwer', 'werwere\r\nwer\r\nwer\r\nwer', 'werwer\r\nwer\r\nwer\r\nwer', 'werwer\r\nwer\r\nwer\r\nwer', '32'),
(8, 'gjghjghghjghj', 'ghjghj', 'ghjghj', 'ghjghj', 'ghjghj', 'ghjghj', 'ghjghj', '34'),
(9, 'dfdfg', 'dgdfg', 'dfgdgf', 'dfgsdfgsdfg sdfgsdfg', 'sdfg', 'sdf', 'sdf', '56');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'The super programmer', 'the-super-programmer', 'This is the article of supper programmer'),
(2, 'The lazy programmer', 'the-lazy-programmer', 'This is the another article about lazy programmer'),
(3, 'This is the title', 'this-is-the-title', 'this is the body.');

-- --------------------------------------------------------

--
-- Table structure for table `students1`
--

CREATE TABLE `students1` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `sj_id` int(11) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL,
  `bplace` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `sclass` varchar(100) NOT NULL COMMENT 'student/als-student/osy',
  `parent_status` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `qualifications` text,
  `accepted` varchar(15) NOT NULL DEFAULT 'no' COMMENT 'yes/no/rejected',
  `date_status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students1`
--

INSERT INTO `students1` (`student_id`, `username`, `sj_id`, `lname`, `fname`, `mname`, `bdate`, `bplace`, `citizenship`, `contact_no`, `email`, `status`, `sex`, `sclass`, `parent_status`, `address`, `qualifications`, `accepted`, `date_status`) VALUES
(23, 'mich', 1, 'Naruto', 'Uzumaki', 's', '2017-11-16', 'sdf', 'sdf', '1234', 'aasdf@adsf.sd', 'Single', 'Male', 'Student', 'Living Together', 'asdf asdfasdf', '', 'no', '2017-11-09'),
(25, 'kill', 1, 'sdf', 'sdf', 'sdf', '2017-11-14', 'sdf', 'sdf', '123', 'aasdf@adsf.sd', 'Single', 'Male', 'Student', 'Person with Disability', 'sdfasdf', 'No scholarship;Must be a high school or college student;Not over 26,000/year income;Poor but deserving students', 'yes', '2017-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `students2`
--

CREATE TABLE `students2` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `fathers_name` varchar(100) NOT NULL,
  `fathers_contact` varchar(100) DEFAULT NULL,
  `fathers_occupation` varchar(100) DEFAULT NULL,
  `mothers_name` varchar(100) NOT NULL,
  `mothers_contact` varchar(100) DEFAULT NULL,
  `mothers_occupation` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students2`
--

INSERT INTO `students2` (`id`, `student_id`, `fathers_name`, `fathers_contact`, `fathers_occupation`, `mothers_name`, `mothers_contact`, `mothers_occupation`) VALUES
(19, 25, 'sdf', '', '', 'sdfsdf', '', ''),
(17, 23, 'adsf', '', '', 'sdf', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students3`
--

CREATE TABLE `students3` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `school_name1` varchar(255) NOT NULL,
  `school_name2` varchar(255) DEFAULT NULL,
  `school_name3` varchar(255) DEFAULT NULL,
  `school_name4` varchar(255) DEFAULT NULL,
  `course1` varchar(255) DEFAULT NULL,
  `course2` varchar(255) DEFAULT NULL,
  `course3` varchar(255) DEFAULT NULL,
  `course4` varchar(255) DEFAULT NULL,
  `yr_level1` varchar(50) NOT NULL,
  `yr_level2` varchar(50) DEFAULT NULL,
  `yr_level3` varchar(50) DEFAULT NULL,
  `yr_level4` varchar(50) DEFAULT NULL,
  `date_attend1` varchar(50) NOT NULL,
  `date_attend2` varchar(50) DEFAULT NULL,
  `date_attend3` varchar(50) DEFAULT NULL,
  `date_attend4` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students3`
--

INSERT INTO `students3` (`id`, `student_id`, `school_name1`, `school_name2`, `school_name3`, `school_name4`, `course1`, `course2`, `course3`, `course4`, `yr_level1`, `yr_level2`, `yr_level3`, `yr_level4`, `date_attend1`, `date_attend2`, `date_attend3`, `date_attend4`) VALUES
(19, 25, 'sdfa', '', '', '', 'sdf', '', '', '', 'sdf', '', '', '', 'sdf', '', '', ''),
(17, 23, 'School name1', '', '', '', 'course1', '', '', '', '4rt', '', '', '', '2014', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students4`
--

CREATE TABLE `students4` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `spes_avail1` varchar(100) DEFAULT NULL,
  `spes_avail2` varchar(100) DEFAULT NULL,
  `spes_avail3` varchar(100) DEFAULT NULL,
  `spes_avail4` varchar(100) DEFAULT NULL,
  `spes_year1` varchar(10) DEFAULT NULL,
  `spes_year2` varchar(10) DEFAULT NULL,
  `spes_year3` varchar(10) DEFAULT NULL,
  `spes_year4` varchar(10) DEFAULT NULL,
  `spes_id1` varchar(50) DEFAULT NULL,
  `spes_id2` varchar(50) DEFAULT NULL,
  `spes_id3` varchar(50) DEFAULT NULL,
  `spes_id4` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students4`
--

INSERT INTO `students4` (`id`, `student_id`, `skills`, `spes_avail1`, `spes_avail2`, `spes_avail3`, `spes_avail4`, `spes_year1`, `spes_year2`, `spes_year3`, `spes_year4`, `spes_id1`, `spes_id2`, `spes_id3`, `spes_id4`) VALUES
(19, 25, 'sdf', 'sdf', '', '', '', 'sdf', '', '', '', 'sdf', '', '', ''),
(17, 23, '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `summer_jobs`
--

CREATE TABLE `summer_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `slots` int(11) NOT NULL,
  `details` text NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summer_jobs`
--

INSERT INTO `summer_jobs` (`id`, `slots`, `details`, `year`) VALUES
(1, 30, 'Schedule Starts: March 25, 2018\r\nNeed 20 male and 15 female\r\nAge requirements: 16 - 22\r\nBring you own cleaning tools', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL COMMENT 'student/applicant/admin',
  `status` varchar(20) DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `status`) VALUES
(1, 'kill', '$2y$10$suR9x82SySVFI2COHmOJousxBPG2iJjTo300OPTKhVuqdTDjCQxVa', 'kill23@gmail.com', 'student', 'verified'),
(2, 'john', '$2y$10$vlA2oah92Zvg4FB3tucKaOWaMKOVn8xmC/T6rryhdKqLQVFGU72ue', 'john43@gmail.com', 'applicant', 'verified'),
(10, 'sdfds', '$2y$10$vZos2SWbHDH6HqJNZGEEGeATTJT8ghhBR0KTTJhsYlOooew41JB0e', 'aadsf@adsf.ds', 'student', 'pending'),
(5, 'admin', '$2y$10$6J9PFzUG4NzKfCrwnQzzouOhKP3G5DUmnWHInMx/4TB04cMAgYbb6', 'admin123@gmail.com', 'admin', 'verified'),
(11, 'user1', '$2y$10$wtT0J15ZChtTwFfsDhb23uFJ7cHMJoLL.J1LnKS0zRDtDhzZ2IhYm', 'noyruto5@gmail.com', 'student', 'verified'),
(8, 'mich', '$2y$10$z5rSpGVKmBhwGbqSs7CPSO2.Z4Rm.TzfkNT/PhHze/zQBd0iGlTce', 'noyruto5@gmail.com', 'student', 'verified'),
(9, 'asdf', '$2y$10$eLdS8PV2jPWsYGcmxuDCK.DFY1ieG08uOHGrakMT9uo.JXkuHyZey', 'aadsf@adsf.ds', 'student', 'pending'),
(12, 'user5', '$2y$10$76iiGijjXzPQjck9ASP/ouO/fEk0MvQDY./6MQpqR3m1W3kBvwDGK', 'user5@gmail.com', 'student', 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_educ_background`
--
ALTER TABLE `app_educ_background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_eligibility`
--
ALTER TABLE `app_eligibility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_job_preferences`
--
ALTER TABLE `app_job_preferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_lang_proficiency`
--
ALTER TABLE `app_lang_proficiency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_personal_info`
--
ALTER TABLE `app_personal_info`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `app_skills`
--
ALTER TABLE `app_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_techvoc_training`
--
ALTER TABLE `app_techvoc_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_work_exp`
--
ALTER TABLE `app_work_exp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy`
--
ALTER TABLE `brgy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `students1`
--
ALTER TABLE `students1`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `students2`
--
ALTER TABLE `students2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students3`
--
ALTER TABLE `students3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students4`
--
ALTER TABLE `students4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summer_jobs`
--
ALTER TABLE `summer_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_educ_background`
--
ALTER TABLE `app_educ_background`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `app_eligibility`
--
ALTER TABLE `app_eligibility`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `app_job_preferences`
--
ALTER TABLE `app_job_preferences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `app_lang_proficiency`
--
ALTER TABLE `app_lang_proficiency`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `app_personal_info`
--
ALTER TABLE `app_personal_info`
  MODIFY `applicant_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `app_skills`
--
ALTER TABLE `app_skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `app_techvoc_training`
--
ALTER TABLE `app_techvoc_training`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `app_work_exp`
--
ALTER TABLE `app_work_exp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `brgy`
--
ALTER TABLE `brgy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students1`
--
ALTER TABLE `students1`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `students2`
--
ALTER TABLE `students2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `students3`
--
ALTER TABLE `students3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `students4`
--
ALTER TABLE `students4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `summer_jobs`
--
ALTER TABLE `summer_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
