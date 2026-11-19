-- phpMyAdmin SQL Dump
-- Database: `myfirstdb`
-- Host: localhost
-- IT/IS WEB - Web Systems and Technologies
-- Saint Michael College of Caraga

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `myfirstdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `myfirstdb`;

-- --------------------------------------------------------

--
-- Table structure for table `persons` (Outputs #1, #3 & #4)
--

DROP TABLE IF EXISTS `persons`;
CREATE TABLE `persons` (
  `person_id` int(11) NOT NULL AUTO_INCREMENT,
  `person_fname` varchar(100) NOT NULL,
  `person_mname` varchar(100) DEFAULT '',
  `person_lname` varchar(100) NOT NULL,
  `person_age` int(3) NOT NULL,
  `person_gender` varchar(10) NOT NULL,
  `person_email` varchar(150) NOT NULL,
  `person_address` varchar(255) NOT NULL,
  `person_contact` varchar(30) NOT NULL,
  PRIMARY KEY (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`person_id`, `person_fname`, `person_mname`, `person_lname`, `person_age`, `person_gender`, `person_email`, `person_address`, `person_contact`) VALUES
(1, 'Marlon Juhn', 'Marsado', 'Timogan', 32, 'Male', 'marlon.timogan@smccnasipit.edu.ph', 'Brgy. 4, Nasipit, Agusan del Norte', '09123456789'),
(2, 'Jose Protacio', 'Alonzo', 'Rizal', 35, 'Male', 'jrizal@history.ph', 'Calamba, Laguna', '09987654321'),
(3, 'Bongbong', 'Romualdez', 'Marcos', 65, 'Male', 'bbm@gov.ph', 'San Juan, Metro Manila', '09171112233'),
(4, 'Leni', 'Gerona', 'Robredo', 58, 'Female', 'leni.robredo@ateneo.edu', 'Naga City, Camarines Sur', '09184445566');

-- --------------------------------------------------------

--
-- Table structure for table `students` (Output #4)
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_fname` varchar(250) NOT NULL,
  `student_mname` varchar(250) DEFAULT NULL,
  `student_lname` varchar(250) NOT NULL,
  `student_gender` char(1) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_fname`, `student_mname`, `student_lname`, `student_gender`) VALUES
(70, 'Kyle', 'Marsado', 'Timogan', 'F'),
(72, 'Ferdinand', 'Romualdez', 'Marcos', 'F'),
(78, 'Marlon', 'Marsado', 'Timogan', 'M'),
(80, 'Leni', 'Gerona', 'Robredo', 'F'),
(81, 'Gloria', 'Macapagal', 'Arroyo', 'F'),
(105, 'Juan', 'Dela', 'Cruz', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `faculty` (Output #5 MVC)
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_fname` varchar(100) NOT NULL,
  `faculty_mname` varchar(100) DEFAULT '',
  `faculty_lname` varchar(100) NOT NULL,
  `faculty_age` int(3) NOT NULL,
  `faculty_gender` varchar(10) NOT NULL,
  `faculty_address` varchar(255) NOT NULL,
  `faculty_position` varchar(100) NOT NULL,
  `faculty_salary` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_fname`, `faculty_mname`, `faculty_lname`, `faculty_age`, `faculty_gender`, `faculty_address`, `faculty_position`, `faculty_salary`) VALUES
(1, 'Marlon Juhn', 'Marsado', 'Timogan', 32, 'Male', 'Brgy. 4, Nasipit, Agusan del Norte', 'Instructor', 38500.00),
(2, 'Maria Clara', 'Santos', 'De los Santos', 29, 'Female', 'Butuan City, Agusan del Norte', 'Assistant Professor', 42000.00),
(3, 'Antonio', 'Luna', 'Novicio', 45, 'Male', 'Cabadbaran City, Agusan del Norte', 'Department Head', 55000.00),
(4, 'Corazon', 'Sumulong', 'Aquino', 52, 'Female', 'Nasipit, Agusan del Norte', 'Associate Professor', 48500.00);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
