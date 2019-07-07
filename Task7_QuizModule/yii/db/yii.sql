-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 10:02 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_quiz_user`
--

CREATE TABLE `assign_quiz_user` (
  `quiz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_quiz_user`
--

INSERT INTO `assign_quiz_user` (`quiz_id`, `user_id`) VALUES
(21, 5),
(31, 3),
(34, 3),
(34, 7);

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', 1, 1561795290),
('author', 2, 1561795290);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, NULL, NULL, NULL, 1561795277, 1561795277),
('auth/emp/create', 2, 'Create', NULL, NULL, 1561795269, 1561795269),
('auth/emp/delete', 2, 'Delete', NULL, NULL, 1561795269, 1561795269),
('auth/emp/index', 2, 'Index', NULL, NULL, 1561795268, 1561795268),
('auth/emp/update', 2, 'Update', NULL, NULL, 1561795269, 1561795269),
('auth/emp/view', 2, 'View', NULL, NULL, 1561795269, 1561795269),
('auth/myquiz/create', 2, 'Create', NULL, NULL, 1561795269, 1561795269),
('auth/myquiz/delete', 2, 'Delete', NULL, NULL, 1561795269, 1561795269),
('auth/myquiz/index', 2, 'Index', NULL, NULL, 1561795268, 1561795268),
('auth/myquiz/update', 2, 'Update', NULL, NULL, 1561795269, 1561795269),
('auth/myquiz/view', 2, 'View', NULL, NULL, 1561795269, 1561795269),
('auth/question/create', 2, 'Create', NULL, NULL, 1561795269, 1561795269),
('auth/question/delete', 2, 'Delete', NULL, NULL, 1561795269, 1561795269),
('auth/question/index', 2, 'Index', NULL, NULL, 1561795269, 1561795269),
('auth/question/update', 2, 'Update', NULL, NULL, 1561795269, 1561795269),
('auth/question/view', 2, 'View', NULL, NULL, 1561795269, 1561795269),
('auth/questioncategories/create', 2, 'Create', NULL, NULL, 1561795269, 1561795269),
('auth/questioncategories/delete', 2, 'Delete', NULL, NULL, 1561795269, 1561795269),
('auth/questioncategories/index', 2, 'Index', NULL, NULL, 1561795269, 1561795269),
('auth/questioncategories/update', 2, 'Update', NULL, NULL, 1561795269, 1561795269),
('auth/questioncategories/view', 2, 'View', NULL, NULL, 1561795269, 1561795269),
('auth/quizmanager/create', 2, 'Create', NULL, NULL, 1561795269, 1561795269),
('auth/quizmanager/delete', 2, 'Delete', NULL, NULL, 1561795269, 1561795269),
('auth/quizmanager/index', 2, 'Index', NULL, NULL, 1561795269, 1561795269),
('auth/quizmanager/update', 2, 'Update', NULL, NULL, 1561795269, 1561795269),
('auth/quizmanager/view', 2, 'View', NULL, NULL, 1561795269, 1561795269),
('auth/quizpublisher/create', 2, 'Create', NULL, NULL, 1561795269, 1561795269),
('auth/quizpublisher/delete', 2, 'Delete', NULL, NULL, 1561795269, 1561795269),
('auth/quizpublisher/index', 2, 'Index', NULL, NULL, 1561795269, 1561795269),
('auth/quizpublisher/update', 2, 'Update', NULL, NULL, 1561795269, 1561795269),
('auth/quizpublisher/view', 2, 'View', NULL, NULL, 1561795269, 1561795269),
('author', 1, NULL, NULL, NULL, 1561795276, 1561795276),
('updateOwnEmp', 2, 'Update own Emp', 'isAuthor', NULL, 1561795282, 1561795282),
('updateOwnMyQuiz', 2, 'Update own MyQuiz', 'isAuthor', NULL, 1561795283, 1561795283),
('updateOwnQuestion', 2, 'Update own Question', 'isAuthor', NULL, 1561795283, 1561795283),
('updateOwnQuestionCategories', 2, 'Update own QuestionCategories', 'isAuthor', NULL, 1561795283, 1561795283),
('updateOwnQuizManager', 2, 'Update own QuizManager', 'isAuthor', NULL, 1561795283, 1561795283),
('updateOwnQuizPublisher', 2, 'Update own QuizPublisher', 'isAuthor', NULL, 1561795283, 1561795283);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'auth/emp/delete'),
('admin', 'auth/emp/update'),
('admin', 'auth/myquiz/delete'),
('admin', 'auth/myquiz/update'),
('admin', 'auth/question/delete'),
('admin', 'auth/question/update'),
('admin', 'auth/questioncategories/delete'),
('admin', 'auth/questioncategories/update'),
('admin', 'auth/quizmanager/delete'),
('admin', 'auth/quizmanager/update'),
('admin', 'auth/quizpublisher/delete'),
('admin', 'auth/quizpublisher/update'),
('admin', 'author'),
('author', 'auth/emp/create'),
('author', 'auth/emp/index'),
('author', 'auth/emp/view'),
('author', 'auth/myquiz/create'),
('author', 'auth/myquiz/index'),
('author', 'auth/myquiz/view'),
('author', 'auth/question/create'),
('author', 'auth/question/index'),
('author', 'auth/question/view'),
('author', 'auth/questioncategories/create'),
('author', 'auth/questioncategories/index'),
('author', 'auth/questioncategories/view'),
('author', 'auth/quizmanager/create'),
('author', 'auth/quizmanager/index'),
('author', 'auth/quizmanager/view'),
('author', 'auth/quizpublisher/create'),
('author', 'auth/quizpublisher/index'),
('author', 'auth/quizpublisher/view'),
('author', 'updateOwnEmp'),
('author', 'updateOwnMyQuiz'),
('author', 'updateOwnQuestion'),
('author', 'updateOwnQuestionCategories'),
('author', 'updateOwnQuizManager'),
('author', 'updateOwnQuizPublisher'),
('updateOwnEmp', 'auth/emp/update'),
('updateOwnMyQuiz', 'auth/myquiz/update'),
('updateOwnQuestion', 'auth/question/update'),
('updateOwnQuestionCategories', 'auth/questioncategories/update'),
('updateOwnQuizManager', 'auth/quizmanager/update'),
('updateOwnQuizPublisher', 'auth/quizpublisher/update');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('isAuthor', 0x4f3a33353a22636f6d6d6f6e5c6d6f64756c65735c617574685c726261635c417574686f7252756c65223a333a7b733a343a226e616d65223b733a383a226973417574686f72223b733a393a22637265617465644174223b693a313536313739353238323b733a393a22757064617465644174223b693a313536313739353238323b7d, 1561795282, 1561795282);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `deptno` int(11) NOT NULL,
  `dname` varchar(14) DEFAULT NULL,
  `loc` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptno`, `dname`, `loc`) VALUES
(10, 'ACCOUNTING', 'NEW YORK'),
(20, 'RESEARCH', 'DALLAS'),
(30, 'SALES', 'CHICAGO'),
(40, 'OPERATIONS', 'BOSTON');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `empno` int(11) NOT NULL,
  `ename` varchar(10) DEFAULT NULL,
  `job` varchar(9) DEFAULT NULL,
  `mgr` int(11) DEFAULT NULL,
  `hiredate` date DEFAULT NULL,
  `sal` decimal(7,2) DEFAULT NULL,
  `comm` decimal(7,2) DEFAULT NULL,
  `deptno` int(11) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`empno`, `ename`, `job`, `mgr`, `hiredate`, `sal`, `comm`, `deptno`, `createdBy`) VALUES
(7369, 'SMITH', 'CLERK', 7902, '1980-12-17', '800.00', NULL, 20, 2),
(7499, 'ALLEN', 'SALESMAN', 7698, '1981-02-20', '1600.00', '300.00', 30, NULL),
(7521, 'WARD', 'SALESMAN', 7698, '1981-02-22', '1250.00', '500.00', 30, NULL),
(7566, 'JONES', 'MANAGER', 7839, '1981-04-02', '2975.00', NULL, 20, NULL),
(7654, 'MARTIN', 'SALESMAN', 7698, '1981-09-28', '1250.00', '1400.00', 30, NULL),
(7698, 'BLAKE', 'MANAGER', 7839, '1981-05-01', '2850.00', NULL, 30, NULL),
(7782, 'CLARK', 'MANAGER', 7839, '1981-06-09', '2450.00', NULL, 10, NULL),
(7788, 'SCOTT', 'ANALYST', 7566, '1987-07-13', '3000.00', NULL, 20, NULL),
(7839, 'KING', 'PRESIDENT', NULL, '1981-11-17', '5000.00', NULL, 10, NULL),
(7844, 'TURNER', 'SALESMAN', 7698, '1981-09-08', '1500.00', '0.00', 30, NULL),
(7876, 'ADAMS', 'CLERK', 7788, '1987-07-13', '1100.00', NULL, 20, NULL),
(7900, 'JAMES', 'CLERK', 7698, '1981-12-03', '950.00', NULL, 30, NULL),
(7902, 'FORD', 'ANALYST', 7566, '1981-12-03', '3000.00', NULL, 20, NULL),
(7934, 'MILLER', 'CLERK', 7782, '1982-01-23', '1300.00', NULL, 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `hireDate` datetime NOT NULL,
  `resignationDate` datetime NOT NULL,
  `role` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `reports_to` varchar(50) NOT NULL,
  `STATUS` enum('Active','In Active','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `hireDate`, `resignationDate`, `role`, `Department`, `designation`, `employer`, `reports_to`, `STATUS`) VALUES
(1, 'Ashher', 'Shahzad', '1997-04-01 00:00:00', '0000-00-00 00:00:00', 'abc', 'xyz', 'xyz', 'xyz', 'Shah', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1561441771),
('m140506_102106_rbac_init', 1561442342),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1561442343),
('m180523_151638_rbac_updates_indexes_without_prefix', 1561442343);

-- --------------------------------------------------------

--
-- Table structure for table `myquiz`
--

CREATE TABLE `myquiz` (
  `Quiz` varchar(25) NOT NULL,
  `User` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `QuizQuestions` int(11) NOT NULL,
  `Correctanswers` int(11) NOT NULL,
  `incorrectanswers` bigint(12) NOT NULL,
  `Percentages` float NOT NULL,
  `Qualified` enum('Qualified','Dequalified','','') NOT NULL,
  `Result` enum('Yes','No','','') NOT NULL,
  `createdBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myquiz`
--

INSERT INTO `myquiz` (`Quiz`, `User`, `QuizQuestions`, `Correctanswers`, `incorrectanswers`, `Percentages`, `Qualified`, `Result`, `createdBy`) VALUES
('Monthly Quiz ( Feb-2019 )', 'author', 20, 10, 10, 20, 'Qualified', 'Yes', 2),
('Monthly Quiz(April-2019)', 'author', 30, 10, 20, 20, 'Qualified', 'Yes', NULL),
('Practice Quiz for Trainee', 'faraz', 25, 20, 5, 60, 'Qualified', 'Yes', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `myquizes`
-- (See below for the actual view)
--
CREATE TABLE `myquizes` (
`Quiz` varchar(25)
,`User` varchar(255)
,`Quiz Questions` int(11)
,`Correct answers` int(11)
,`incorrect answers` bigint(12)
,`Percentages` float
,`Qualified` enum('Qualified','Dequalified','','')
,`Result` enum('Yes','No','','')
);

-- --------------------------------------------------------

--
-- Table structure for table `option`
--

CREATE TABLE `option` (
  `Ques_id` int(11) NOT NULL,
  `option` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `option`
--

INSERT INTO `option` (`Ques_id`, `option`) VALUES
(235, 'No'),
(235, 'Yes'),
(236, 'I don\'t know'),
(236, 'No'),
(236, 'No worries'),
(236, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `Ques_id` int(11) NOT NULL,
  `ques_name` varchar(25) NOT NULL,
  `ques_type_name` varchar(25) NOT NULL,
  `ques_level_name` varchar(25) NOT NULL,
  `ques_categories_name` varchar(25) NOT NULL,
  `status` enum('active','in active','','') NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `createdBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Ques_id`, `ques_name`, `ques_type_name`, `ques_level_name`, `ques_categories_name`, `status`, `quiz_id`, `createdBy`) VALUES
(235, 'Do we unlock AT&T devices', 'Boolean', 'Beginner', 'Handset & Devices	', 'active', 21, NULL),
(236, 'I love Billing', 'MCQ\'s', 'Beginner', 'Billing', 'active', 31, 2);

-- --------------------------------------------------------

--
-- Table structure for table `questioncategories`
--

CREATE TABLE `questioncategories` (
  `id` int(11) NOT NULL DEFAULT 0,
  `NAME` varchar(25),
  `Questioncount` bigint(21) NOT NULL DEFAULT 0,
  `active` enum('active','in active','',''),
  `createdBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questioncategories`
--

INSERT INTO `questioncategories` (`id`, `NAME`, `Questioncount`, `active`, `createdBy`) VALUES
(235, 'Handset & Devices	', 2, 'active', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `question_categories`
-- (See below for the actual view)
--
CREATE TABLE `question_categories` (
`id` int(11)
,`NAME` varchar(25)
,`Questioncount` bigint(21)
,`active` enum('active','in active','','')
);

-- --------------------------------------------------------

--
-- Table structure for table `ques_categories`
--

CREATE TABLE `ques_categories` (
  `Ques_Categories_Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques_categories`
--

INSERT INTO `ques_categories` (`Ques_Categories_Name`) VALUES
('	Ports'),
('Auto Payment	'),
('Billing'),
('Coverage'),
('Dashboard'),
('Data Services	'),
('Device Compatability	'),
('GSM LTE	'),
('Handset & Devices	'),
('Internet & MMS	'),
('Offers & Promotions	'),
('Phone Unlocking	'),
('Service Related	'),
('Super LTE	'),
('Text Messaging	'),
('Value Added Services (VAS'),
('Voice Mail	'),
('Website	');

-- --------------------------------------------------------

--
-- Table structure for table `ques_level`
--

CREATE TABLE `ques_level` (
  `Ques_Level_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques_level`
--

INSERT INTO `ques_level` (`Ques_Level_name`) VALUES
('advance'),
('Beginner'),
('Intermediate	');

-- --------------------------------------------------------

--
-- Table structure for table `ques_type`
--

CREATE TABLE `ques_type` (
  `Ques_type_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques_type`
--

INSERT INTO `ques_type` (`Ques_type_name`) VALUES
('Boolean'),
('MCQ\'s');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `Quiz_id` int(11) NOT NULL,
  `Quiz_Name` varchar(25) NOT NULL,
  `No_of_Ques` int(11) NOT NULL,
  `Time_allowed` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`Quiz_id`, `Quiz_Name`, `No_of_Ques`, `Time_allowed`, `created_at`, `id`) VALUES
(19, 'Training Quiz (Device Com', 11, 10, '2019-05-20', 1),
(20, 'Training Quiz ( Data & We', 20, 20, '2019-05-20', 1),
(21, 'Practice Quiz for Trainee', 25, 20, '2019-05-20', 1),
(22, 'Practice Quiz ( Jan-2019 ', 50, 25, '2019-05-20', 1),
(23, 'Training Quiz ( Recap of ', 75, 100, '2019-05-20', 1),
(24, 'Training Quiz ( Seven Mod', 100, 120, '2019-05-20', 1),
(26, 'Monthly Quiz ( Jan-2019 )', 30, 30, '2019-05-20', 1),
(31, 'Monthly Quiz ( Feb-2019 )', 20, 15, '2019-05-20', 1),
(32, 'Monthly Quiz (March-2019 ', 30, 20, '2019-05-20', 1),
(34, 'Monthly Quiz(April-2019)', 30, 20, '2019-05-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quizmanager`
--

CREATE TABLE `quizmanager` (
  `ID` int(11) NOT NULL,
  `QuizName` varchar(25) NOT NULL,
  `NoOfQuestions` int(11) NOT NULL,
  `Timeallowed` int(11) NOT NULL,
  `AssignedUser` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdat` date NOT NULL,
  `createdby` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizmanager`
--

INSERT INTO `quizmanager` (`ID`, `QuizName`, `NoOfQuestions`, `Timeallowed`, `AssignedUser`, `createdat`, `createdby`) VALUES
(19, 'Training Quiz (Device Com', 11, 10, 'author', '2019-05-20', 2),
(20, 'Training Quiz ( Data & We', 20, 20, 'admin', '2019-05-20', 1),
(21, 'Practice Quiz for Trainee', 25, 20, 'admin', '2019-05-20', 1),
(22, 'Practice Quiz ( Jan-2019 ', 50, 25, 'admin', '2019-05-20', 1),
(23, 'Training Quiz ( Recap of ', 75, 100, 'admin', '2019-05-20', 1),
(24, 'Training Quiz ( Seven Mod', 100, 120, 'admin', '2019-05-20', 1),
(26, 'Monthly Quiz ( Jan-2019 )', 30, 30, 'admin', '2019-05-20', 1),
(31, 'Monthly Quiz ( Feb-2019 )', 20, 15, '2', '2019-05-20', 1),
(32, 'Monthly Quiz (March-2019 ', 30, 20, 'admin', '2019-05-20', 1),
(34, 'Monthly Quiz(April-2019)', 30, 20, 'admin', '2019-05-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quizpublisher`
--

CREATE TABLE `quizpublisher` (
  `Quiz` varchar(25) NOT NULL,
  `User` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Status` enum('Active','Inactive','','') NOT NULL,
  `ShowResult` enum('Yes','No','','') NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizpublisher`
--

INSERT INTO `quizpublisher` (`Quiz`, `User`, `Status`, `ShowResult`, `id`) VALUES
('Monthly Quiz ( Feb-2019 )', 'author', 'Active', 'Yes', 1),
('Practice Quiz for Trainee', 'faraz', 'Active', 'Yes', 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `quiz_manager`
-- (See below for the actual view)
--
CREATE TABLE `quiz_manager` (
`ID` int(11)
,`Quiz Name` varchar(25)
,`No. Of Questions` int(11)
,`Time allowed(mins)` int(11)
,`Assigned User` varchar(255)
,`created at` date
,`created by` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `quiz_publisher`
-- (See below for the actual view)
--
CREATE TABLE `quiz_publisher` (
`Quiz` varchar(25)
,`User` varchar(255)
,`Status` enum('Active','Inactive','','')
,`Show Result` enum('Yes','No','','')
);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_user`
--

CREATE TABLE `quiz_user` (
  `user_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `no_of_correct_ans` int(11) NOT NULL,
  `percentage` float NOT NULL,
  `qualified` enum('Qualified','Dequalified','','') NOT NULL,
  `status` enum('Active','Inactive','','') NOT NULL,
  `show_result` enum('Yes','No','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_user`
--

INSERT INTO `quiz_user` (`user_id`, `quiz_id`, `no_of_correct_ans`, `percentage`, `qualified`, `status`, `show_result`) VALUES
(3, 31, 10, 20, 'Qualified', 'Active', 'Yes'),
(5, 21, 20, 60, 'Qualified', 'Active', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'A1NsrrPhOgqjnHyEr6C1c5U3gRlMdUpD', 'admin123', NULL, 'admin@admin.com', 10, 1561383254, 1561383254, NULL),
(2, 'author', 'l1dvwNpXdLmIIf5-oS1Mi9c63qirBIGD', 'author123', NULL, 'author@admin.com', 10, 1561449473, 1561449473, NULL),
(5, 'faraz', '', 'f', NULL, '', 10, 0, 0, NULL),
(6, 'sajad-iqbal', '', 'a', '', 'sajad-iqbal', 0, 0, 0, NULL),
(7, 'amir habib', '', 'amir habib', NULL, 'amir habib', 10, 0, 0, NULL),
(8, 'kamran', '', 'a', NULL, 'kamran', 10, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Structure for view `myquizes`
--
DROP TABLE IF EXISTS `myquizes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `myquizes`  AS  select `q`.`Quiz_Name` AS `Quiz`,`u`.`username` AS `User`,`q`.`No_of_Ques` AS `Quiz Questions`,`qu`.`no_of_correct_ans` AS `Correct answers`,`q`.`No_of_Ques` - `qu`.`no_of_correct_ans` AS `incorrect answers`,`qu`.`percentage` AS `Percentages`,`qu`.`qualified` AS `Qualified`,`qu`.`show_result` AS `Result` from (((`quiz` `q` join `assign_quiz_user` `aqs`) join `quiz_user` `qu`) join `user` `u`) where `q`.`Quiz_id` = `aqs`.`quiz_id` and `aqs`.`user_id` = `qu`.`user_id` and `aqs`.`user_id` = `u`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `question_categories`
--
DROP TABLE IF EXISTS `question_categories`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `question_categories`  AS  select `q`.`Ques_id` AS `id`,`qc`.`Ques_Categories_Name` AS `NAME`,count(`q`.`ques_categories_name`) AS `Questioncount`,`q`.`status` AS `active` from (`question` `q` join `ques_categories` `qc`) where `q`.`ques_categories_name` = `qc`.`Ques_Categories_Name` ;

-- --------------------------------------------------------

--
-- Structure for view `quiz_manager`
--
DROP TABLE IF EXISTS `quiz_manager`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `quiz_manager`  AS  select `q`.`Quiz_id` AS `ID`,`q`.`Quiz_Name` AS `Quiz Name`,`q`.`No_of_Ques` AS `No. Of Questions`,`q`.`Time_allowed` AS `Time allowed(mins)`,(select `user`.`username` from `user` where `user`.`id` = 1) AS `Assigned User`,`q`.`created_at` AS `created at`,`e`.`firstName` + ' ' + `e`.`lastName` AS `created by` from (`quiz` `q` join `employee` `e`) where `q`.`id` = `e`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `quiz_publisher`
--
DROP TABLE IF EXISTS `quiz_publisher`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `quiz_publisher`  AS  select `q`.`Quiz_Name` AS `Quiz`,`u`.`username` AS `User`,`qu`.`status` AS `Status`,`qu`.`show_result` AS `Show Result` from ((`quiz` `q` join `user` `u`) join `quiz_user` `qu`) where `q`.`Quiz_id` = `qu`.`quiz_id` and `qu`.`user_id` = `u`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_quiz_user`
--
ALTER TABLE `assign_quiz_user`
  ADD PRIMARY KEY (`quiz_id`,`user_id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`deptno`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`empno`),
  ADD KEY `fk_deptno` (`deptno`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `myquiz`
--
ALTER TABLE `myquiz`
  ADD PRIMARY KEY (`Quiz`,`User`,`QuizQuestions`);

--
-- Indexes for table `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`Ques_id`,`option`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Ques_id`) USING BTREE,
  ADD KEY `ques_type_name` (`ques_type_name`),
  ADD KEY `ques_level_name` (`ques_level_name`),
  ADD KEY `ques_categories_name` (`ques_categories_name`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `questioncategories`
--
ALTER TABLE `questioncategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques_categories`
--
ALTER TABLE `ques_categories`
  ADD PRIMARY KEY (`Ques_Categories_Name`);

--
-- Indexes for table `ques_level`
--
ALTER TABLE `ques_level`
  ADD PRIMARY KEY (`Ques_Level_name`);

--
-- Indexes for table `ques_type`
--
ALTER TABLE `ques_type`
  ADD PRIMARY KEY (`Ques_type_name`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`Quiz_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `quizmanager`
--
ALTER TABLE `quizmanager`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `quizpublisher`
--
ALTER TABLE `quizpublisher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_user`
--
ALTER TABLE `quiz_user`
  ADD PRIMARY KEY (`user_id`,`quiz_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Ques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `Quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `quizpublisher`
--
ALTER TABLE `quizpublisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emp`
--
ALTER TABLE `emp`
  ADD CONSTRAINT `fk_deptno` FOREIGN KEY (`deptno`) REFERENCES `dept` (`deptno`);

--
-- Constraints for table `option`
--
ALTER TABLE `option`
  ADD CONSTRAINT `option_ibfk_1` FOREIGN KEY (`Ques_id`) REFERENCES `question` (`Ques_id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`ques_type_name`) REFERENCES `ques_type` (`Ques_type_name`),
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`ques_level_name`) REFERENCES `ques_level` (`Ques_Level_name`),
  ADD CONSTRAINT `question_ibfk_3` FOREIGN KEY (`ques_categories_name`) REFERENCES `ques_categories` (`Ques_Categories_Name`),
  ADD CONSTRAINT `question_ibfk_4` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`Quiz_id`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`);

--
-- Constraints for table `quiz_user`
--
ALTER TABLE `quiz_user`
  ADD CONSTRAINT `quiz_user_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`Quiz_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
