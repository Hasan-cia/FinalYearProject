-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for lab
DROP DATABASE IF EXISTS `lab`;
CREATE DATABASE IF NOT EXISTS `lab` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `lab`;

-- Dumping structure for table lab.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `cpassword` varchar(50) DEFAULT NULL,
  `regdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table lab.admin: ~2 rows (approximately)
INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`, `cpassword`, `regdate`) VALUES
	(7, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', NULL, '2024-02-21 17:08:52'),
	(8, 'arjun', 'arjun@gmail.com', '451d3eb1573c7ebb70c08dfee9766509', NULL, '2024-02-21 17:11:43');

-- Dumping structure for table lab.attendance
DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `at_id` int NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(50) NOT NULL DEFAULT '0',
  `attendance_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `intime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `outtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.attendance: ~0 rows (approximately)

-- Dumping structure for table lab.blood_groups
DROP TABLE IF EXISTS `blood_groups`;
CREATE TABLE IF NOT EXISTS `blood_groups` (
  `bg_id` int NOT NULL AUTO_INCREMENT,
  `blood_group` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`bg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.blood_groups: ~0 rows (approximately)
INSERT INTO `blood_groups` (`bg_id`, `blood_group`, `description`) VALUES
	(1, 'o+', 'o positive');

-- Dumping structure for table lab.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `short_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.categories: ~1 rows (approximately)

-- Dumping structure for table lab.department
DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dep_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.department: ~1 rows (approximately)
INSERT INTO `department` (`dep_id`, `name`, `description`, `status`) VALUES
	(1, 'test', 'test', 'inactive');

-- Dumping structure for table lab.doctors
DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `doc_id` int NOT NULL AUTO_INCREMENT,
  `salutation` varchar(50) DEFAULT NULL,
  `doctor_name` varchar(50) DEFAULT NULL,
  `doc_mobile_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `designation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `speacialist` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `hospital` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `comission` decimal(20,6) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.doctors: ~0 rows (approximately)

-- Dumping structure for table lab.group
DROP TABLE IF EXISTS `group`;
CREATE TABLE IF NOT EXISTS `group` (
  `gr_id` int NOT NULL AUTO_INCREMENT,
  `group` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`gr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.group: ~0 rows (approximately)

-- Dumping structure for table lab.invoice
DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `in_id` int NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(50) DEFAULT NULL,
  `doc_mobile_no` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `receipt_no` int DEFAULT NULL,
  `mrno` varchar(50) DEFAULT NULL,
  `pa_first_name` varchar(50) DEFAULT NULL,
  `pa_last_name` varchar(50) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `patient_mobile_no` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `test_name` varchar(50) DEFAULT NULL,
  `charge` decimal(20,6) DEFAULT NULL,
  `discount` decimal(20,6) DEFAULT NULL,
  `sub_total` decimal(20,6) DEFAULT NULL,
  `final_total` decimal(20,6) DEFAULT NULL,
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.invoice: ~0 rows (approximately)

-- Dumping structure for table lab.item_master
DROP TABLE IF EXISTS `item_master`;
CREATE TABLE IF NOT EXISTS `item_master` (
  `im_id` int NOT NULL AUTO_INCREMENT,
  `item_type` varchar(50) NOT NULL DEFAULT '0',
  `item_name` varchar(50) NOT NULL DEFAULT '0',
  `description` varchar(50) NOT NULL DEFAULT '0',
  `balance` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `rate_per_item` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `status` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`im_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.item_master: ~0 rows (approximately)

-- Dumping structure for table lab.ledger_group
DROP TABLE IF EXISTS `ledger_group`;
CREATE TABLE IF NOT EXISTS `ledger_group` (
  `lg_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `group` varchar(50) NOT NULL DEFAULT '0',
  `trail_balance` varchar(50) NOT NULL DEFAULT '0',
  `profit_lost` varchar(50) NOT NULL DEFAULT '0',
  `balance_sheet` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`lg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.ledger_group: ~0 rows (approximately)

-- Dumping structure for table lab.pathology_test
DROP TABLE IF EXISTS `pathology_test`;
CREATE TABLE IF NOT EXISTS `pathology_test` (
  `pt_id` int NOT NULL AUTO_INCREMENT,
  `test_number` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `report_headline` varchar(50) DEFAULT NULL,
  `charges` decimal(20,2) DEFAULT NULL,
  `carry_out` varchar(50) DEFAULT NULL,
  `delivery` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.pathology_test: ~0 rows (approximately)

-- Dumping structure for table lab.patient
DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `pat_id` int NOT NULL,
  `mr.no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pa_first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pa_last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `patient_mobile_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `blood` varchar(50) DEFAULT NULL,
  `gender` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.patient: ~0 rows (approximately)

-- Dumping structure for table lab.patient_login
DROP TABLE IF EXISTS `patient_login`;
CREATE TABLE IF NOT EXISTS `patient_login` (
  `patient_id` int NOT NULL AUTO_INCREMENT,
  `pausername` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `cpassword` varchar(50) DEFAULT NULL,
  `regdate` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table lab.patient_login: ~0 rows (approximately)
INSERT INTO `patient_login` (`patient_id`, `pausername`, `email`, `password`, `cpassword`, `regdate`) VALUES
	(4, 'Jhon', 'jhon@gmail.com', '4d2ff2f945883e090ac4de4fb9e23fab', NULL, '2024-02-21 17:15:57');

-- Dumping structure for table lab.payment
DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` int NOT NULL AUTO_INCREMENT,
  `payment_mode` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.payment: ~0 rows (approximately)

-- Dumping structure for table lab.supplier_item
DROP TABLE IF EXISTS `supplier_item`;
CREATE TABLE IF NOT EXISTS `supplier_item` (
  `sup_id` int NOT NULL AUTO_INCREMENT,
  `item_type` varchar(50) NOT NULL DEFAULT '0',
  `description` varchar(50) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.supplier_item: ~0 rows (approximately)

-- Dumping structure for table lab.test_particulars
DROP TABLE IF EXISTS `test_particulars`;
CREATE TABLE IF NOT EXISTS `test_particulars` (
  `tp_id` int NOT NULL AUTO_INCREMENT,
  `test_number` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `particulars` varchar(50) DEFAULT NULL,
  `units` int DEFAULT NULL,
  `male_value` decimal(20,2) DEFAULT NULL,
  `female_value` decimal(20,2) DEFAULT NULL,
  `part_heading` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.test_particulars: ~0 rows (approximately)

-- Dumping structure for table lab.unit
DROP TABLE IF EXISTS `unit`;
CREATE TABLE IF NOT EXISTS `unit` (
  `un_id` int NOT NULL AUTO_INCREMENT,
  `unit` varchar(50) DEFAULT NULL,
  `unit_description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`un_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.unit: ~2 rows (approximately)

-- Dumping structure for table lab.vendor
DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `ven_id` int NOT NULL AUTO_INCREMENT,
  `address` varchar(50) NOT NULL DEFAULT '0',
  `mobile_no` varchar(50) NOT NULL DEFAULT '0',
  `company_name` varchar(50) NOT NULL DEFAULT '0',
  `ledger` varchar(50) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ven_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lab.vendor: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
