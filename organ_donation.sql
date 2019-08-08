-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2019 at 09:20 PM
-- Server version: 5.7.24
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organ_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

DROP TABLE IF EXISTS `auth`;
CREATE TABLE IF NOT EXISTS `auth` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pid` tinyint(4) NOT NULL,
  `is_nav` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `auth_name`, `controller`, `action`, `pid`, `is_nav`) VALUES
(1, 'Admin Management', NULL, NULL, 0, '1'),
(2, 'Redeemed Products', '', '', 0, '1'),
(3, 'Product inventory', NULL, NULL, 0, '1'),
(4, 'Donor Form Management', '', '', 0, '1'),
(5, 'Members Management', '', '', 0, '1'),
(6, 'Donor Form Delete', 'FormController', 'delete', 4, '1'),
(7, 'Member Add', 'MemberController', 'add', 5, '1'),
(8, 'Member Edit', 'MemberController', 'edit', 5, '1'),
(9, 'Member Delete', 'MemberController', 'delete', 5, '1'),
(10, '123456', 'ProductController', 'indexdsdsd', 3, '1'),
(11, 'Redeemed Products List', 'ProductController', 'index', 2, '1'),
(12, 'Donor Form List', 'FormController', 'index', 4, '1'),
(13, 'Member List', 'MemberController', 'index', 5, '1');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organ` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=216 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `last_name`, `first_name`, `organ`) VALUES
(1, 'Brauer', 'Karl', 'Corneal'),
(2, 'Darvall', 'Denise', 'Heart'),
(3, 'Herrick', 'Ronald', 'Kidney'),
(4, 'Abidal', 'Eric', 'Liver'),
(5, 'Harrison', 'Ann', 'Lung'),
(6, 'Brauer', 'Karl', 'Corneal'),
(7, 'Darvall', 'Denise', 'Heart'),
(8, 'Herrick', 'Ronald', 'Kidney'),
(9, 'Abidal', 'Eric', 'Liver'),
(10, 'Harrison', 'Ann', 'Lung'),
(111, 'Brauer', 'Karl', 'Corneal'),
(112, 'Darvall', 'Denise', 'Heart'),
(113, 'Herrick', 'Ronald', 'Kidney'),
(114, 'Abidal', 'Eric', 'Liver'),
(115, 'Harrison', 'Ann', 'Lung'),
(116, 'Wiegand', 'Maximillia', 'Corneal'),
(117, 'Howell', 'Anibal', 'Ear'),
(118, 'Orn', 'Nicholas', 'Liver'),
(119, 'Cartwright', 'Winston', 'Eye'),
(120, 'Rosenbaum', 'Trenton', 'Lung'),
(121, 'Kub', 'Clara', 'Eye'),
(122, 'Thompson', 'Juana', 'Liver'),
(123, 'Kilback', 'Abigayle', 'Eye'),
(124, 'Terry', 'Bennett', 'Lung'),
(125, 'Carter', 'Luigi', 'Liver'),
(126, 'Mertz', 'Madisyn', 'Lung'),
(127, 'Luettgen', 'Shannon', 'Ear'),
(128, 'Pfeffer', 'Rudolph', 'Eye'),
(129, 'Dietrich', 'Eladio', 'Lung'),
(130, 'Durgan', 'Lillie', 'Ear'),
(131, 'Schuppe', 'Victoria', 'Ear'),
(132, 'Murray', 'Ettie', 'Liver'),
(133, 'Zboncak', 'Torrance', 'Liver'),
(134, 'Tillman', 'Elwin', 'Heart'),
(135, 'Pfeffer', 'Kayli', 'Corneal'),
(136, 'Christiansen', 'Vivianne', 'Liver'),
(137, 'Buckridge', 'Johan', 'Kidney'),
(138, 'Lowe', 'Terence', 'Ear'),
(139, 'Keeling', 'Eleanore', 'Kidney'),
(140, 'Okuneva', 'Deontae', 'Corneal'),
(141, 'Durgan', 'Marc', 'Kidney'),
(142, 'Gorczany', 'Amelia', 'Heart'),
(143, 'Stoltenberg', 'Anjali', 'Ear'),
(144, 'Lesch', 'Donny', 'Corneal'),
(145, 'Oberbrunner', 'Emmanuel', 'Liver'),
(146, 'Kemmer', 'Carol', 'Kidney'),
(147, 'Bins', 'Verla', 'Ear'),
(148, 'Emmerich', 'Mollie', 'Ear'),
(149, 'McLaughlin', 'Opal', 'Heart'),
(150, 'Hilpert', 'Randi', 'Liver'),
(151, 'Beahan', 'Baron', 'Eye'),
(152, 'Emard', 'Sydney', 'Corneal'),
(153, 'McClure', 'Keon', 'Heart'),
(154, 'Sanford', 'Seamus', 'Lung'),
(155, 'Conroy', 'Dejah', 'Lung'),
(156, 'Towne', 'Marisol', 'Kidney'),
(157, 'VonRueden', 'Catharine', 'Liver'),
(158, 'Halvorson', 'Libbie', 'Liver'),
(159, 'Beier', 'Noel', 'Eye'),
(160, 'Steuber', 'Curt', 'Kidney'),
(161, 'Hyatt', 'Alison', 'Eye'),
(162, 'Armstrong', 'Abigayle', 'Eye'),
(163, 'Mitchell', 'Tyra', 'Ear'),
(164, 'Gutmann', 'Annabell', 'Lung'),
(165, 'Schmeler', 'Deon', 'Eye'),
(166, 'Monahan', 'Rosetta', 'Eye'),
(167, 'Powlowski', 'Armando', 'Corneal'),
(168, 'Spinka', 'Odie', 'Corneal'),
(169, 'Turner', 'Jazmyn', 'Lung'),
(170, 'Nienow', 'Malvina', 'Kidney'),
(171, 'Leuschke', 'Berta', 'Kidney'),
(172, 'Jones', 'Velva', 'Kidney'),
(173, 'Bruen', 'Alysha', 'Lung'),
(174, 'Ziemann', 'Rosella', 'Ear'),
(175, 'Feest', 'Melissa', 'Kidney'),
(176, 'McClure', 'Haskell', 'Eye'),
(177, 'Kreiger', 'Margot', 'Corneal'),
(178, 'Rosenbaum', 'Clementina', 'Heart'),
(179, 'Cartwright', 'Jaeden', 'Eye'),
(180, 'DuBuque', 'Philip', 'Corneal'),
(181, 'Gibson', 'Wyatt', 'Lung'),
(182, 'Hagenes', 'Emma', 'Lung'),
(183, 'Hintz', 'Lafayette', 'Ear'),
(184, 'Considine', 'Eva', 'Heart'),
(185, 'Pouros', 'Haven', 'Kidney'),
(186, 'Reynolds', 'Chesley', 'Ear'),
(187, 'Torphy', 'Sandy', 'Eye'),
(188, 'Jerde', 'Alena', 'Ear'),
(189, 'Wunsch', 'Tina', 'Kidney'),
(190, 'Steuber', 'Eudora', 'Kidney'),
(191, 'Nikolaus', 'Isabelle', 'Liver'),
(192, 'Schiller', 'Lorna', 'Corneal'),
(193, 'Jacobs', 'Allison', 'Eye'),
(194, 'Heller', 'Erick', 'Liver'),
(195, 'Wolff', 'Cleve', 'Corneal'),
(196, 'Ledner', 'Jared', 'Ear'),
(197, 'Volkman', 'Lilyan', 'Heart'),
(198, 'Goyette', 'Kali', 'Corneal'),
(199, 'Dietrich', 'Garth', 'Liver'),
(200, 'Heaney', 'Shaniya', 'Liver'),
(201, 'Hauck', 'Perry', 'Kidney'),
(202, 'Von', 'Courtney', 'Heart'),
(203, 'Russel', 'Abby', 'Corneal'),
(204, 'Cartwright', 'Henderson', 'Kidney'),
(205, 'Daniel', 'Wayne', 'Eye'),
(206, 'Abernathy', 'Adrian', 'Lung'),
(207, 'Nienow', 'Damian', 'Corneal'),
(208, 'Rogahn', 'Lacy', 'Liver'),
(209, 'Oberbrunner', 'Vada', 'Corneal'),
(210, 'Thompson', 'Shania', 'Eye'),
(211, 'Reichel', 'Einar', 'Kidney'),
(212, 'Luettgen', 'Salvador', 'Heart'),
(213, 'Barton', 'Marcelino', 'Corneal'),
(214, 'Walter', 'Aurelio', 'Liver'),
(215, 'Cartwright', 'Maximilian', 'Corneal');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `mobile` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `username`, `password`, `gender`, `mobile`, `email`, `role_id`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'braun.ebba', '$2y$10$qAFc4SY9e7.295QzXIxWeucNBh.iIMuiB7pNp.dikt4LDaBYmSEoK', '1', '454-757-911', 'pgrady@gmail.com', 5, '2019-08-06 23:45:20', NULL, 'QDCPI9NxD6DxX0ELAKpG60juj649PcTmmZOGuPFaCRER0s7XV4Ak3vjXIJOE'),
(2, 'an', '$2y$10$7vhUIENLLhomO7x79xkQruPRr/X1ri8RFxtWqDWWbsPMCMlD6tFDe', '3', '1-637-413-9', 'ahmed29@gmail.com', 1, '2019-08-06 23:45:20', NULL, 'UGmx7x5CgE6ARiYNlY1KRa5iG8bA4sNew08FlSHtyPE5BVdR5Gp7woGrBNpi'),
(3, 'aniyah.metz', '$2y$10$cfiFVhpgG9d/AEu3fNAtKOy1U2X9WUhUaJoCF8rEm9hXy6S/T8UuK', '3', '1-753-378-7', 'curt.blanda@gmail.com', 6, '2019-08-06 23:45:20', NULL, NULL),
(4, 'joyce90', '$2y$10$7JmRbuTdJnm2d6rxYhitY.hogjOqAitd7EFMdIb2ICdhfyVmyBkHq', '1', '860.996.880', 'gaylord.madeline@gmail.com', 6, '2019-08-06 23:45:20', NULL, 'mNzR4u4lQzEF2cPxSNc08tlyaJtkUGWZqbEBaJ6jaOyxwtLI82BH20UmOPlw'),
(5, 'sporer.natalia', '$2y$10$IDzeVBjZENeVlDCfrIJvQ.zWhdAXHi7tsqQXc3aehwTiMNk35TsYy', '2', '1-281-981-3', 'aufderhar.rashad@gmail.com', 1, '2019-08-06 23:45:20', NULL, NULL),
(6, 'nader.marian', '$2y$10$LMN3xpZaySycaztz95Zvoez93wnoPJoima4eOeIPTo4iKzazv7oSa', '2', '713-869-516', 'carolanne.boehm@hotmail.com', 6, '2019-08-06 23:45:20', NULL, NULL),
(7, 'jess.murphy', '$2y$10$VayrY89Qz0rEKlsjdEN01u6b8LTqP9FyuyJH.jAcb9hC5pkhFmd9.', '1', '960-889-397', 'dudley.conroy@hotmail.com', 6, '2019-08-06 23:45:21', NULL, NULL),
(8, 'davin62', '$2y$10$IxF2DVUYhpqDFmp3Jt5Bc.5pOAQPOFwn3M/5aD6Dirv.aDixDJk42', '1', '1-395-586-5', 'amir37@gmail.com', 5, '2019-08-06 23:45:21', NULL, NULL),
(9, 'whirthe', '$2y$10$QZ9sCXiYfs2po7E5kRP8hOaasaUEiGksqEyYr3/7B/exlE8VxO5zW', '1', '1-803-812-6', 'lynch.claud@goodwin.com', 5, '2019-08-06 23:45:21', NULL, NULL),
(10, 'sipes.carol', '$2y$10$xKzXjpZrjUxEkqTyUejbw.hn2Yxw.OsxayWw.YLqB8QOLjkm9dUu6', '2', '+1.978.474.', 'taylor.cormier@hotmail.com', 3, '2019-08-06 23:45:21', NULL, 'B4eBkH0pHT51gT2av1kDqMYJVre1mZn91nTV9BYmveHeeTbmAwnuZe0RF5gy'),
(11, 'hackett.maryam', '$2y$10$AQxn0CWcCL6jLkZni5m.g.9bTRZ3HnYCA5kFgKErWsigZe8RBPH2.', '1', '936-925-381', 'jackson.nienow@hotmail.com', 4, '2019-08-06 23:45:21', NULL, NULL),
(12, 'cohara', '$2y$10$b/9Z3/rVMgo1KfsRU1mB8.ofSu4XJwBAR.EC1tqO9IXSyjYHXBtz2', '2', '+1-729-676-', 'klarson@yahoo.com', 3, '2019-08-06 23:45:21', NULL, NULL),
(13, 'jhyatt', '$2y$10$9vQKY1DeCWBP.d2ZwfesCuYL6uc4ogU3Ptc10K2QyVhe1Sk/HU6Ba', '1', '+1.594.546.', 'cielo.rice@lemke.com', 4, '2019-08-06 23:45:21', NULL, NULL),
(14, 'ekerluke', '$2y$10$i61n7vACh43R3YxT.bMFi./4.iofFODBRq/blc7ggmEgrHGxg4wpW', '1', '(505) 616-4', 'charles.schmeler@osinski.com', 6, '2019-08-06 23:45:21', NULL, NULL),
(15, 'runolfsdottir.aureli', '$2y$10$wzkO3w4kMOTdG2xv2dcfkONuSsIpKz1NZhnk3vbv4oxkvr4vbD546', '2', '405-529-718', 'ncruickshank@hotmail.com', 6, '2019-08-06 23:45:21', NULL, NULL),
(16, 'alisa.rodriguez', '$2y$10$xH2yn9zZb8FKDBJEUuKIDue/D3Z8C1FPHjFvnUbKOqU862ZQPNALe', '2', '+1-937-742-', 'emard.logan@hotmail.com', 3, '2019-08-06 23:45:21', NULL, NULL),
(17, 'mullrich', '$2y$10$7GS/tlyWKw0Zz/ykVXG7v.PY.5QCTkMuI6DLbxmBGwRoAUjJHpbOK', '1', '958.401.221', 'lreichert@bradtke.net', 4, '2019-08-06 23:45:21', NULL, NULL),
(18, 'imogene.wilkinson', '$2y$10$Fpddr8y5qqPpX7X4EhUGveb9UockZcD853w0vOM0F90IRirgU8az2', '3', '1-251-806-0', 'judson.dubuque@botsford.com', 2, '2019-08-06 23:45:21', NULL, NULL),
(19, 'rau.leila', '$2y$10$akD38AgtEBpM08fvbSF0y.39bOmmTARJ2B2.IlVOWkOH8eiP.hiz6', '2', '1-352-269-6', 'schamberger.lane@yahoo.com', 3, '2019-08-06 23:45:21', NULL, NULL),
(20, 'grover58', '$2y$10$Tj6fdBp/yYOQA8qGtBA.9.4uP26YTJ3gXvaObAHqKvf0qcpXyu8Ci', '1', '618.348.426', 'ivah02@wuckert.com', 6, '2019-08-06 23:45:21', NULL, NULL),
(21, 'kole.shields', '$2y$10$aveZt4JLEIP/.6PHoECn4.RxM3M513Nw5iWyiGLJNn7lvl5pzRq66', '1', '+1-259-424-', 'roxanne24@hotmail.com', 1, '2019-08-06 23:45:21', NULL, NULL),
(22, 'egleason', '$2y$10$fpADRT1nagSeJt1V8Bx9V.6Ipt4T1gTHFTuxQR6cvFwaeaVYY94kq', '1', '246-276-850', 'ulices49@gmail.com', 3, '2019-08-06 23:45:21', NULL, NULL),
(23, 'xaufderhar', '$2y$10$Vv6Cf6Rr.YubmC6g6WbmwO7f4Wmk0OlmZiJoiha9kP7FCw0h0BJAa', '1', '+1 (359) 46', 'emmy92@rau.com', 2, '2019-08-06 23:45:21', NULL, NULL),
(24, 'norberto66', '$2y$10$O6WHwiYfuJkUwvLWZ/SvOOjcVux.p6NeVsbZNi6FT47MrMa5jUG9q', '1', '317-428-903', 'wiegand.pearlie@murray.info', 2, '2019-08-06 23:45:21', NULL, NULL),
(25, 'marquis07', '$2y$10$PsjY2WkHQckqn5fCzzIMAeUHjKBsgS.h8Aw6JAxuMctBG35Qk1PO6', '3', '445.992.214', 'evert46@hotmail.com', 1, '2019-08-06 23:45:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2019_07_29_154656_create_user_table', 1),
(3, '2019_08_01_013244_create_donor_table', 2),
(4, '2019_08_02_181420_create_redeem_table', 3),
(8, '2019_08_06_193705_create_manager_table', 4),
(9, '2019_08_06_193728_create_auth_table', 4),
(10, '2019_08_06_193739_create_role_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `redeem`
--

DROP TABLE IF EXISTS `redeem`;
CREATE TABLE IF NOT EXISTS `redeem` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) NOT NULL,
  `products` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redeem_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `redeem`
--

INSERT INTO `redeem` (`id`, `name`, `points`, `products`, `redeem_time`) VALUES
(1, 'JOHN SMITH', 200, 'PEN', '2018-08-02 18:27:42'),
(2, 'BILL JONES', 600, 'T-SHIRT', '2018-08-02 18:27:42'),
(3, 'MARY JAMES', 1200, 'Emergency-Alert', '2018-08-02 18:27:42'),
(4, 'an', 600, 'Thermometer', '2019-08-02 18:32:59'),
(5, 'AN', 600, 'Thermometer', '2019-08-02 18:34:27'),
(6, 'AN', 600, 'Thermometer', '2019-08-02 19:10:24'),
(7, 'AN', 600, 'Thermometer', '2019-08-02 19:10:47'),
(8, 'AN', 600, 'Thermometer', '2019-08-02 19:11:51'),
(9, 'AN', 600, 'Thermometer', '2019-08-02 19:12:12'),
(10, 'AN', 600, 'Thermometer', '2019-08-02 19:16:22'),
(11, 'AN', 1200, 'Emergency-Alert', '2019-08-02 19:17:51'),
(12, 'ANDY', 400, 'Band-aid', '2019-08-06 22:02:55'),
(13, 'ANDY', 800, 'Medical-Kit', '2019-08-06 22:02:59'),
(14, 'ANDY', 300, 'MASK', '2019-08-06 22:03:01'),
(15, 'ANDY', 600, 'Notebook', '2019-08-06 22:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_ids` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_ac` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`, `auth_ids`, `auth_ac`) VALUES
(1, 'CEO', '', ''),
(2, 'Human Resource', '1,5,7,8,9,13', 'membercontroller@add,membercontroller@edit,membercontroller@delete,membercontroller@index'),
(3, 'Product Manager', '2,11,3,10', 'productcontroller@indexdsdsd,productcontroller@index'),
(4, 'Officer', '4,6,12', 'formcontroller@delete,formcontroller@index'),
(5, 'staff', '', ''),
(6, 'Guest', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) NOT NULL,
  `last_login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_time` datetime DEFAULT NULL,
  `donor_form` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `tel`, `email`, `points`, `last_login_ip`, `last_login_time`, `donor_form`, `created_at`, `updated_at`, `remember_token`, `status`) VALUES
(1, 'admin', '$2y$10$mSlwSPHFTQnwa7OjDF5QTOFfrJcrjbOJtuAgAJdpRjGvt/mNLdYA6', 'andy', '5196974518', 'andyvviiar@gmail.com', 1230566, '127.0.0.1', '2019-08-08 20:06:02', './admin/upload_donorform/9b02c93267cb459950db74eaa', '2007-01-24 08:02:43', '2019-08-09 00:06:06', 'JcLVGXyeO63Ipe34koRN56lR85jDao3gHktankJC153RNFFLZGBxDquLBSSu', '2'),
(2, 'murphy.deron', '$2y$10$qyl86e8q4WIJYDM/zOdshOnlQWTW0X4jarm2UHLyvGlm9recB.gDi', 'Pearl', '866.701.3164', 'rschmeler@hotmail.com', 12171, '10.19.224.121', '2004-08-04 04:50:21', NULL, '2018-09-18 22:25:46', NULL, NULL, '2'),
(3, 'alicia64', '$2y$10$ZCNZpLJCZeoOZxZ4lv.PgO7V7bU/DkOV0zr64I6cF.82lIU15f20O', 'Cleveland', '844-846-9955', 'rlabadie@jenkins.com', 15375, '10.81.175.15', '2006-06-14 15:06:07', NULL, '2010-10-15 23:30:46', NULL, NULL, '1'),
(4, 'carson76', '$2y$10$I77XTnDGNdGNrQtucu7EluuAhy4uYgECZIho38kdWMDB3wlLVpzFu', 'Gideon', '1-800-648-1912', 'jenifer57@predovic.com', 14547, '192.168.221.214', '2010-05-01 14:55:00', NULL, '1986-06-20 23:51:11', NULL, NULL, '2'),
(6, 'hamill.orpha', '$2y$10$MWxTFylWkpuQ5542Lx6q1OP.EM9caEDJtCJ5k4gHsYNurYfL50QaG', 'Gerhard', '1-877-785-6450', 'shanahan.ruben@yahoo.com', 1105, '10.188.44.153', '1976-11-17 08:53:11', NULL, '1974-02-02 02:55:44', NULL, NULL, '2'),
(7, 'clarabelle.sanford', '$2y$10$s2FBOx1DKf46d30ARhlANOszDfIU4VPFkQ6uxeSn/gK/cqMzkxPam', 'Alexander', '1-888-321-7561', 'qkessler@grant.com', 9375, '10.236.187.248', '1998-01-31 03:54:49', NULL, '1976-06-07 06:35:34', NULL, NULL, '1'),
(8, 'mbatz', '$2y$10$Eqj97HVvrViHawxui.6OJOgRYgQxoudnwLKty3YzeIlQVuGk61uOi', 'Antonetta', '800.728.8349', 'vblanda@kozey.net', 5879, '192.168.249.74', '1991-05-24 18:46:34', NULL, '1978-06-23 00:10:53', NULL, NULL, '1'),
(9, 'morar.crawford', '$2y$10$hTWmc6VpuhWlCYmOwO/Kk.us8Lj6RQt.TfK9Ur9Ux7pj0KQVUn9Hm', 'Winston', '866.818.7060', 'kmiller@rippin.com', 9412, '192.168.90.210', '1994-06-27 13:12:29', NULL, '1977-03-19 02:57:38', NULL, NULL, '1'),
(10, 'leslie.kemmer', '$2y$10$DzLAHeuNvhQAZsr9jgrz6.u4CbguYvtPSabpYvOg1YmUNY2UB52Ea', 'Fernando', '(888) 712-3319', 'barrows.dagmar@gmail.com', 13399, '192.168.180.212', '2015-07-06 14:11:36', NULL, '1978-06-13 04:53:09', NULL, NULL, '2'),
(11, 'ujakubowski', '$2y$10$zZDqIa4gcQgwKSod5inV7OKgXwnjBfi7neCEd0gh.iujITSrGaEWi', 'Kari', '1-888-389-7278', 'brekke.mabelle@reichel.com', 746, '192.168.226.212', '2004-11-04 00:31:33', NULL, '2011-08-14 22:57:10', NULL, NULL, '2'),
(12, 'kellie81', '$2y$10$IHXGsywntX09YXujyWJgKugjxkRdMNPtzGKuAzjYye54UDchXAZkC', 'Eliezer', '800.236.7230', 'jacobi.estevan@gorczany.com', 18095, '192.168.224.6', '1990-10-24 01:46:13', NULL, '1974-03-03 11:17:51', NULL, NULL, '2'),
(13, 'xwolff', '$2y$10$gzpS2ijooZ.tNkxQflEkneQbdOovO4NQwE6EF/iMJ.c.FddHtGJk6', 'Idell', '877-780-2964', 'jaylon97@yahoo.com', 12462, '10.32.58.156', '2016-02-19 17:31:41', NULL, '1980-09-17 09:36:59', NULL, NULL, '2'),
(14, 'frieda23', '$2y$10$WNOD5/XLC1PPdt5j8Bp7R.GPRHnj4EtifRtlB8PVrIZXGK2LbusVy', 'Agustin', '855-944-6654', 'gutmann.hoyt@hotmail.com', 4499, '10.55.12.200', '2008-03-30 07:54:03', NULL, '2009-01-01 14:50:17', NULL, NULL, '2'),
(15, 'gmurray', '$2y$10$u2sW5cYxmXeK/yhXcMvB5ub0ulbl99WPkRRE2Z0aWeZGkvn87hIDK', 'Davon', '1-888-645-8482', 'bosco.annamae@hotmail.com', 4338, '10.78.96.172', '2014-10-23 05:57:42', NULL, '1979-09-21 18:48:06', NULL, NULL, '2'),
(16, 'oliver.graham', '$2y$10$MkNK/HBO0..cZV4WQsQwYe2w3W.AtHVK/ynxqrLdwkFmD3htqbWYO', 'Michale', '855.324.3044', 'schroeder.kim@hotmail.com', 6643, '10.134.61.33', '2009-05-27 01:52:51', NULL, '1984-01-05 08:15:13', NULL, NULL, '2'),
(17, 'mkihn', '$2y$10$NSjXdDFOfsXbarWjYkaGp.bdmmv3ZGL3QVW5B41G2k6nlROLCEN7O', 'Kirsten', '888-232-8373', 'jjenkins@cremin.biz', 5457, '192.168.216.240', '2014-06-21 12:51:08', NULL, '1996-04-26 04:36:14', NULL, NULL, '1'),
(18, 'corrine.sanford', '$2y$10$uTe.qAr1l63wwHwtnNEaYekSajQUbrlUctj/YIYJWay3L.joXGU1q', 'Walker', '1-866-328-5764', 'jcollins@hotmail.com', 9058, '192.168.86.90', '2000-03-08 05:08:04', NULL, '1976-05-14 14:51:53', NULL, NULL, '2'),
(19, 'goodwin.alba', '$2y$10$46pGc52xz3fPq8OpEUM5rew.nBfN4P1fWNvpr6UHhC2dl91gQB18G', 'Aniya', '866.365.5197', 'morar.eldred@hotmail.com', 15201, '10.250.77.4', '1998-05-28 02:06:02', NULL, '2019-04-02 15:42:27', NULL, NULL, '2'),
(20, 'bklocko', '$2y$10$3CREoaagXPzXiai.unC6MeVUfyuKNGwuCLIHywVqVuPgN./mWmzhm', 'Magdalen', '800-871-6265', 'al.towne@donnelly.com', 6174, '10.243.241.90', '1996-08-19 08:29:10', NULL, '1991-10-19 18:36:38', NULL, NULL, '1'),
(21, 'willms.francesca', '$2y$10$s6I3WuYhTgKLSJ28ZF5jR.9cG/5Cj6Eu6W6k0fLi1yngPc83XNIhq', 'Harold', '1-866-250-4990', 'khalil34@hotmail.com', 3248, '10.202.63.25', '2003-02-17 06:12:55', NULL, '1980-09-29 17:38:35', NULL, NULL, '1'),
(22, 'jensen55', '$2y$10$2wLoOrBzYfsGN82dEDJYfeArOtjSJuT4PtZOnjwWrEW/opI1rrLv6', 'Yvette', '1-888-680-2062', 'leland.ondricka@bruen.org', 2324, '10.118.241.235', '2005-01-06 10:32:14', NULL, '2011-06-02 09:44:02', NULL, NULL, '1'),
(23, 'crooks.rubie', '$2y$10$44wnICFEIkdpHoiu6pW1UexbQ0taaBD1ZGQQDN40hnb8OBkc.5xqC', 'Kayli', '888.382.3619', 'lockman.kelvin@huels.com', 8583, '10.51.107.0', '1987-01-30 13:55:08', NULL, '1970-05-13 05:05:48', NULL, NULL, '1'),
(24, 'wwill', '$2y$10$VCKkN.JPdD1qfR/48q2HduHf49N/yBcYqdghrONiVh.PJwPx0SRFi', 'Gerard', '855.722.4045', 'ubeer@hotmail.com', 11738, '10.120.25.15', '1988-03-28 09:38:26', NULL, '2011-03-19 00:10:48', NULL, NULL, '2'),
(25, 'eharris', '$2y$10$DDRMUInzMxXOCa/Fvy5j/..KBxcNhHCNkn3JEWRkaIsTeTD9lB97C', 'Ava', '1-866-748-1024', 'kovacek.liam@yahoo.com', 884, '192.168.188.240', '1990-08-21 17:25:33', NULL, '1994-02-10 16:45:49', NULL, NULL, '2'),
(26, 'lue.wehner', '$2y$10$y1f3VTQNmrDDCpPlcYMOjuO39qhM4EpEJmeydYxtdcUDM/vD.PpWe', 'Juanita', '877-595-0660', 'lemke.angelica@oconnell.com', 18948, '192.168.186.62', '2004-02-19 23:15:58', NULL, '2001-04-16 16:31:53', NULL, NULL, '2'),
(27, 'clemmie.kassulke', '$2y$10$yAGXWNs/mTNerwwjPj8TXuSa/Dzdkb2bai/m1M6.1tkMfw4m3i8v6', 'Estella', '1-866-724-1735', 'romaguera.isai@senger.com', 19136, '192.168.84.86', '1999-08-01 09:18:48', NULL, '1995-12-31 11:09:47', NULL, NULL, '2'),
(28, 'abshire.adan', '$2y$10$JU3xPvdJE5aGburdWArySOzRYDTIkbDfOTlVE63c9mSALxxyrZFyi', 'Obie', '800.505.4264', 'bryce.muller@yahoo.com', 18385, '10.222.7.158', '1989-12-24 03:43:17', NULL, '2006-04-14 21:12:58', NULL, NULL, '2'),
(29, 'lebsack.nettie', '$2y$10$n190cSXnoMlr377kbbtZb.4HxxvqfenSYPJnSJzupRFZchtwMfe0i', 'Eryn', '844-606-4578', 'abode@haley.info', 13216, '192.168.106.198', '2019-05-10 04:06:01', NULL, '1979-09-12 18:17:46', NULL, NULL, '2'),
(30, 'ayla24', '$2y$10$gm2WAw7M.CtEv8ESRmXnXO0iDZxjp2PS7FjqLjWBdEtGiCg23m092', 'Jamil', '1-844-328-5193', 'alysa43@leannon.org', 14380, '10.123.166.200', '2012-10-16 15:30:28', NULL, '1970-08-18 12:08:09', NULL, NULL, '2'),
(31, 'mclaughlin.jalen', '$2y$10$4XFopk5j9U1pUYSVFpFlq.B1iK8Ix4lsv9O4U4W0sPzWMM9Sy/IhO', 'Dannie', '1-855-457-9846', 'annetta39@dicki.com', 2308, '192.168.186.171', '2007-08-31 06:27:32', NULL, '1998-05-15 02:58:48', NULL, NULL, '1'),
(32, 'cschoen', '$2y$10$V0XOdqC4SzSfyDSPkLRdqe/s2gPvwZHVauKbbuoHSv5yzkzQktT3u', 'Lia', '855.932.9798', 'theo.weber@christiansen.com', 1364, '10.31.238.165', '2011-07-22 17:02:54', NULL, '1997-03-14 07:01:22', NULL, NULL, '1'),
(33, 'ernest40', '$2y$10$zxIUw1wrfARKmnD8w1ANn.f2o9BiwpkftkQjGoH6q/vp.5DUIWyRG', 'Georgianna', '1-877-696-9723', 'ransom02@yahoo.com', 15493, '192.168.76.104', '1991-12-22 22:58:45', NULL, '2001-06-19 03:19:21', NULL, NULL, '1'),
(34, 'terry.aniyah', '$2y$10$f7oItBdb69sMSWg0fcAc1.A1cMtw9zuiVPH64uf6Y6c6S19Nm/Bwe', 'Lilian', '888-664-5261', 'abner.lueilwitz@franecki.com', 3469, '10.12.3.116', '1976-08-30 18:39:04', NULL, '1975-04-08 11:00:55', NULL, NULL, '2'),
(35, 'spredovic', '$2y$10$4XIvE5.RkjdjaT/C.3yamuKk/YaIYGjgjvYedlXz8w6FN767k2/IC', 'Desiree', '855-587-2629', 'vwyman@hotmail.com', 12552, '10.7.242.24', '2004-05-28 18:42:54', NULL, '1974-10-25 09:12:16', NULL, NULL, '2'),
(36, 'pacocha.elijah', '$2y$10$z4UKbdMVb1qI0NK1auphSuqydv8I2hgYFx1LzufPg6tj/9CMV3ING', 'Bernie', '844.582.2607', 'tromp.corene@abshire.com', 15127, '192.168.178.121', '2012-05-07 15:51:09', NULL, '1999-11-14 00:05:53', NULL, NULL, '2'),
(37, 'pmarquardt', '$2y$10$rP1IBtm9.o1Rx8Cxrex/du3jnRk5dNKVoBtDKFYgFdTG5BNdeWqmO', 'Neal', '1-855-645-6145', 'homenick.zella@gmail.com', 2765, '10.59.61.30', '1978-02-24 17:30:11', NULL, '1980-11-23 08:57:53', NULL, NULL, '1'),
(38, 'wiza.malachi', '$2y$10$z0lb2lztvS1LZzjV2vAtSuJAjwfoFoLXPpnQCBtXchy27CXRFjv0i', 'Gerardo', '855-520-1723', 'qchristiansen@hotmail.com', 1067, '192.168.204.20', '1975-12-21 12:08:19', NULL, '2007-03-21 18:46:13', NULL, NULL, '2'),
(39, 'vilma.ruecker', '$2y$10$GYso7K.Y6FloYx0ClOVfW.KL1Elcz8z3iNaS/FBEGpFp4VKgAPr4W', 'Joshua', '877.475.4867', 'kaylie.klein@hotmail.com', 5315, '192.168.170.128', '1992-01-16 10:47:40', NULL, '2000-04-03 13:15:08', NULL, NULL, '2'),
(40, 'wyman16', '$2y$10$OfspuBjURR/572O8hneDXOBg4IRmzNolruV.SEH2err.VLvslDC82', 'Mya', '1-866-732-6358', 'xmccullough@carroll.net', 15122, '192.168.225.59', '2002-11-18 17:06:09', NULL, '1988-08-26 23:28:05', NULL, NULL, '1'),
(41, 'maribel62', '$2y$10$mTryoZ4wN394efLkrvjEZ.sX9YzKtczvRbpQXyPkpakVKBGUAJnEG', 'Talia', '(800) 801-3767', 'hane.florian@gmail.com', 9682, '10.81.95.242', '2009-01-02 12:07:35', NULL, '1984-12-10 10:22:48', NULL, NULL, '2'),
(42, 'danyka.reynolds', '$2y$10$OMfm9zYwD8tX9spzzyzY9OsSG1weQ.bqOd7LX73QrdcI4hxfZUMJ.', 'Korbin', '855-387-9743', 'peyton34@yahoo.com', 2222, '10.63.208.118', '2000-05-23 13:40:08', NULL, '1970-06-29 23:29:59', NULL, NULL, '1'),
(43, 'ottilie.collier', '$2y$10$wBbwNWL6OhG3/IYSmk9VI.qKkoLKPUlKLZ3TW4F7ro.wXy0DGNcU6', 'Eric', '(877) 786-6935', 'melisa34@gmail.com', 15249, '10.135.102.20', '2000-01-29 02:57:46', NULL, '2006-05-18 21:47:19', NULL, NULL, '2'),
(44, 'eldora.howe', '$2y$10$5Rn7Lk2QEd9xp.hbGEOxbuf3Wg5MzLaDvPDzCDc4D9C4zGzfysyZq', 'Leilani', '844-306-4610', 'kritchie@gmail.com', 16200, '192.168.98.250', '1994-11-20 04:06:00', NULL, '2012-10-11 17:47:25', NULL, NULL, '1'),
(45, 'jnikolaus', '$2y$10$o7uVpKPp2aaFxUDTjbRZJeR0JUCcUf66Dagw39k9hkKvFaaH976pa', 'Roslyn', '1-855-969-9451', 'ernser.devonte@yahoo.com', 11495, '10.203.155.160', '1976-11-14 11:52:02', NULL, '2004-03-04 16:34:46', NULL, NULL, '2'),
(46, 'randy91', '$2y$10$8U9hoEuNi64SGsXRdgjE4O3l9tdTJNkLpSSompYXzaOXjhpozA2Ru', 'Willis', '855.744.3353', 'rwhite@gleichner.com', 1985, '192.168.218.246', '1996-12-12 16:35:55', NULL, '2013-07-18 21:05:20', NULL, NULL, '2'),
(47, 'uhansen', '$2y$10$hV10gp/TjxeTg2qlHYCJrufFmrthtQoXorBuk0zcBQQblXPnSXmmW', 'Autumn', '877-406-1106', 'amely51@yahoo.com', 17603, '10.190.184.236', '1970-07-27 05:06:41', NULL, '2008-10-19 18:19:54', NULL, NULL, '2'),
(48, 'roosevelt12', '$2y$10$CixXd5CnJwFNNgT2mLc2wufs1f/ugYx5XriDbt/W7Tmx4CF.YM2nW', 'Ruthie', '877.871.7201', 'xglover@hotmail.com', 13411, '10.95.191.254', '1971-11-10 20:44:38', NULL, '1972-02-23 16:02:06', NULL, NULL, '2'),
(49, 'randall.vandervort', '$2y$10$jcQjuul/.wWJaIf2CJcW1uye42L.7S0AvXE.SQOnqjxEPe2/HzRMe', 'Chandler', '866.392.8361', 'mayert.levi@kirlin.net', 3253, '10.161.190.150', '1997-07-15 23:28:51', NULL, '1985-07-24 17:52:43', NULL, NULL, '1'),
(50, 'benny.hand', '$2y$10$TTPh9EIQzPiU8.zuUufzzOCY.U8cP3JCstxlmjgKTxWz.cvVlOVXS', 'Angie', '800-455-8690', 'grace54@yahoo.com', 15207, '192.168.73.184', '2005-10-19 14:44:51', NULL, '1977-01-07 15:46:58', NULL, NULL, '2'),
(51, 'fkoss', '$2y$10$X2t/SqKnmZ6jfx7tEqU.9ua..QpKnxwgxLJmO5QVWkTjhimOeR/Eq', 'Vita', '877-692-5444', 'keebler.hosea@gmail.com', 7427, '10.190.103.214', '1989-04-05 13:54:27', NULL, '1997-10-02 16:22:54', NULL, NULL, '2'),
(52, 'geovanni.tromp', '$2y$10$SjFbyuwvamOgs3iGx3UTsOT3QRkhe76DONelbCHN0hsxt9bCqsh3C', 'Malachi', '1-877-754-4294', 'chilpert@hotmail.com', 1804, '10.238.208.195', '1997-02-19 10:06:47', NULL, '2012-09-21 02:31:40', NULL, NULL, '1'),
(53, 'umann', '$2y$10$vMiR6ltPzw9CUO3YcTe2XOemcpfvUkAR5gTeks8bJRvDv6qkFTnki', 'Eda', '866.202.4696', 'reese73@hotmail.com', 19607, '192.168.251.31', '1973-08-02 15:31:45', NULL, '2003-07-16 18:27:50', NULL, NULL, '2'),
(54, 'tweber', '$2y$10$cIk8Ea31aWJmjxgZHIl/h.Sw8Bs6gHq50i8qF66MzTsuvoGd87EzO', 'Elvie', '(888) 695-0128', 'boehm.orval@reilly.net', 17136, '10.77.160.14', '1989-04-20 11:46:26', NULL, '2001-09-18 00:22:21', NULL, NULL, '2'),
(55, 'lonnie.rice', '$2y$10$QkETCQ7RSYtOfPDkR951VO5qoMg2oJL1H53fnDcm1uLsQi61PZbkG', 'Harley', '877.586.9346', 'jcrooks@okeefe.org', 19373, '10.193.174.55', '2004-08-18 01:44:37', NULL, '1998-05-07 00:18:43', NULL, NULL, '2'),
(56, 'ahmad.stracke', '$2y$10$eFPrTjc57D8tYjGqnvzHSO36cQSFI.NFbkxF.xb0el9FGz.A1lMey', 'Shemar', '(888) 606-2069', 'whitney09@keeling.com', 16031, '192.168.190.56', '1995-10-09 22:30:04', NULL, '1977-09-14 05:23:37', NULL, NULL, '2'),
(57, 'wwillms', '$2y$10$s8QjlDWyPG5aLU/WKxp/uORS0eU/7VpL/SSl8dVgu8Khp.7JHZbEO', 'Hadley', '(800) 674-5549', 'obie.kuvalis@gusikowski.com', 16006, '192.168.151.251', '2000-11-29 13:31:53', NULL, '1984-09-10 08:36:37', NULL, NULL, '2'),
(58, 'horacio11', '$2y$10$bW8NunQ044HKSH8Hx1xtqu7OkrbFJZ1GBMUispAwhVMj6hxo6O4PC', 'Savannah', '(844) 791-1452', 'kaylah.hoeger@johns.org', 2821, '192.168.231.201', '1972-07-18 16:37:15', NULL, '1977-07-25 21:13:07', NULL, NULL, '2'),
(59, 'wkuhic', '$2y$10$luZ2mfNo0YyYmfWZ8wTD1eUPOjvfsgy2A9H9ptktz4hKRqNvwPeXe', 'Samantha', '(877) 255-5206', 'carleton.barton@zieme.com', 8887, '10.86.250.199', '1974-03-25 12:18:33', NULL, '1994-04-24 12:25:36', NULL, NULL, '1'),
(60, 'samanta24', '$2y$10$mRB3OSgEwvKirni4zJ6IQuNPnKtVRO1C6ymiiHWs4x/rN8jAtActK', 'Jaydon', '844.815.3294', 'lillian99@yahoo.com', 11540, '192.168.94.25', '1977-11-29 00:05:21', NULL, '1975-06-22 11:10:34', NULL, NULL, '2'),
(61, 'borer.wilbert', '$2y$10$EInDMs.w7AnSd9IK8f7tAu0h2burc8Q8jqRrWLyrxF1Z85vnfJoja', 'Leonel', '(877) 543-4984', 'bergstrom.antwan@lakin.com', 7299, '10.188.239.242', '2006-03-27 14:47:30', NULL, '2006-02-22 23:24:51', NULL, NULL, '1'),
(62, 'armstrong.cletus', '$2y$10$UyqbQezdL8KxCopFg0JfkuppUnndewRG7/Ew3xuLPOe1ZqoO8tXtq', 'Kelli', '1-800-637-1570', 'jonas04@hotmail.com', 6916, '192.168.113.27', '1994-07-16 07:15:21', NULL, '2002-04-05 09:47:31', NULL, NULL, '2'),
(63, 'vmorissette', '$2y$10$GkE.Tx4YtJ52/Av926YTEOB4dteJ91dfxvy8txipZDzW.SbseeJOS', 'Leonora', '(877) 926-5164', 'ortiz.ron@wiza.com', 10623, '192.168.0.140', '1999-11-25 02:51:06', NULL, '2012-05-17 08:36:39', NULL, NULL, '2'),
(64, 'clare.murazik', '$2y$10$fcWkS1P5G167WHksLWCrsOWB9irbAYjZDwWaWVwcvIv9zvHDFE0pu', 'Tomasa', '866.506.0759', 'bcronin@rutherford.com', 3182, '192.168.213.69', '1992-03-08 13:22:37', NULL, '1982-01-26 19:18:39', NULL, NULL, '1'),
(65, 'kamryn.barrows', '$2y$10$5hiF/eDD2AZcdsb9glYq3.2YDBFMbt2OAWvRoE6MyA0swKDCW3nE2', 'Tre', '1-844-897-4414', 'elza.davis@gmail.com', 8339, '192.168.64.30', '1984-10-21 10:03:59', NULL, '2002-04-17 07:58:37', NULL, NULL, '2'),
(66, 'ymoore', '$2y$10$dfyYsLQlJaXRbHG4Kl38QuqED7c9y7iomdv0c1FU56GgFo3SFZsPm', 'Veda', '(877) 302-3729', 'dhackett@hotmail.com', 4668, '192.168.20.94', '1995-11-16 07:50:38', NULL, '1983-04-06 12:11:15', NULL, NULL, '1'),
(67, 'bergstrom.cortez', '$2y$10$N0QUZz485sDAp9tg/GjmAufIk5CHveOCcKGZYPC.4JWrEchBw0kWi', 'Makenzie', '1-866-954-8856', 'xgleason@gibson.com', 19629, '192.168.216.253', '1997-04-17 19:22:18', NULL, '1981-12-24 16:04:55', NULL, NULL, '2'),
(68, 'ywyman', '$2y$10$6m25xRPmGavmNLH2WcpMrO9whnaG6O5bOTXy7bYw4M5oF/n3gSQLe', 'Kylee', '844-527-5054', 'lhegmann@hotmail.com', 5807, '192.168.161.89', '1975-09-12 19:39:56', NULL, '2002-06-25 08:58:17', NULL, NULL, '2'),
(69, 'graham.brandon', '$2y$10$i1liE493U/4KYniERpVsrOs14buJTtk.olwMobiJe8cKbubWWTc4C', 'Mavis', '800-327-4559', 'bill35@mosciski.com', 14173, '192.168.91.162', '1994-03-14 22:44:35', NULL, '1978-01-20 16:34:43', NULL, NULL, '1'),
(70, 'savion63', '$2y$10$m//otE1DYjpxFHL98x5p3eHuhI4smSPXwaayy0ZYnqBkfATa/sjZ6', 'Krystal', '844.513.8822', 'ali.krajcik@howe.com', 10928, '192.168.210.54', '1992-10-03 17:15:20', NULL, '2004-05-02 11:58:21', NULL, NULL, '2'),
(71, 'xwatsica', '$2y$10$LXZoc5sZ.k9Ma1n0WWqgHu55cqP6FtO2AEfnePSuMOrPflSaUG166', 'Carmine', '1-844-596-2253', 'timmy.heller@yahoo.com', 11154, '192.168.22.41', '2008-06-15 18:49:55', NULL, '1999-04-14 06:59:49', NULL, NULL, '1'),
(72, 'imani.leuschke', '$2y$10$aRHAyt/A6CJm3BvDDPNjieQ6m2Wb6vOwl68mKdig5l9rezUiChaMm', 'Ayana', '1-855-372-1306', 'dallas.blanda@yahoo.com', 14465, '10.24.155.53', '2018-01-20 22:36:16', NULL, '1974-11-21 12:19:37', NULL, NULL, '1'),
(73, 'justine97', '$2y$10$5cp6zyFXKBsoycRnvo6eaeICKvQJR6YrdQFoEqsC81BHmxlpWVjm2', 'Sabrina', '1-855-219-4670', 'katherine24@hotmail.com', 19854, '192.168.145.23', '1995-03-19 04:28:02', NULL, '2003-01-10 00:09:16', NULL, NULL, '1'),
(74, 'rwilkinson', '$2y$10$csfqZpVnbgMMSk1fI99HKuMDZfXnumCgpNylXogK50bqv.p7X8tAK', 'Ulices', '(800) 784-7429', 'muhammad.fisher@yahoo.com', 946, '192.168.43.193', '1992-11-30 18:50:25', NULL, '1980-06-25 12:14:37', NULL, NULL, '1'),
(75, 'walsh.brain', '$2y$10$MxgbOdm6s.73vvo5HNk62.pMlilRbk.TRCvByR58OYIizfE9awWE6', 'Leilani', '877-635-5299', 'lois87@yahoo.com', 19851, '192.168.79.78', '1976-11-07 15:24:22', NULL, '2007-02-20 14:03:59', NULL, NULL, '1'),
(76, 'jade21', '$2y$10$W1rsuuWBc4nJOsvKpoyw8Oc3D7/jhvSo/GT/.U31TX7Xdd65As7NO', 'Percival', '877-450-6328', 'ogulgowski@hotmail.com', 4405, '192.168.180.90', '1997-11-17 10:13:10', NULL, '1981-08-30 12:58:17', NULL, NULL, '1'),
(77, 'ismael.damore', '$2y$10$wlBX1mJUC0.XvDxJRxfQleZTyGZ1SBWbhDYqqg2dlI6JPC9xNoOqG', 'Magali', '(844) 371-5456', 'jennifer17@leuschke.org', 628, '10.21.181.191', '2001-06-24 08:15:21', NULL, '1992-02-23 02:38:16', NULL, NULL, '2'),
(78, 'bernhard.deshawn', '$2y$10$dLUIqRijtxziBB5oLFIm2OvvFEP/bZMxxzHsIf94v9u9gm2NFLpV.', 'Destinee', '855-809-5997', 'satterfield.trent@green.org', 9372, '192.168.59.14', '2004-02-09 09:01:54', NULL, '2009-12-28 20:07:41', NULL, NULL, '2'),
(79, 'mhansen', '$2y$10$407B5pKXcQBHwZxoqStLAu6vXH7rbwr20.O/YNdm8MHJ2C50VcmgW', 'Horacio', '1-888-973-1779', 'mara.greenholt@gmail.com', 1167, '192.168.199.80', '1996-12-03 16:50:13', NULL, '1999-02-16 09:30:30', NULL, NULL, '1'),
(80, 'ljones', '$2y$10$tgxqdkSstyrmAP2fuzLoteBtxDjgTIMXVgdqqBRmzNlRq7v51I8rG', 'Anastasia', '1-855-795-4990', 'maryjane36@rempel.com', 10278, '192.168.217.137', '1996-11-14 05:08:15', NULL, '1993-08-26 00:23:15', NULL, NULL, '2'),
(81, 'rohan.josie', '$2y$10$0/eBd449a.xUOx1nx5r8ge9xB7orMKhM5WhbxWAMxUG8LOTDKdK8G', 'Kayli', '888.775.3786', 'giles93@hotmail.com', 10949, '10.96.11.75', '1976-12-04 20:35:05', NULL, '1977-10-31 05:41:21', NULL, NULL, '2'),
(82, 'colton24', '$2y$10$7.t52.MmY8ZuXC7w2PdKKu5HlThAOLPmShRKiUF/1V9M577rF.daS', 'Gussie', '(855) 894-1912', 'marjorie.hoeger@gmail.com', 11455, '192.168.71.114', '1977-04-21 04:03:13', NULL, '1987-07-03 10:47:35', NULL, NULL, '1'),
(83, 'theresia.schinner', '$2y$10$cYEkfviHH5XCOMDTebkajumge55bIlHMa2PMuhz0FNxDy7YSihFeG', 'Elfrieda', '866-900-9067', 'mccullough.krystal@okon.com', 9554, '10.111.213.232', '2001-10-18 20:03:12', NULL, '1973-06-09 22:56:40', NULL, NULL, '2'),
(84, 'leonardo.tillman', '$2y$10$Vl70VfIK3hMVDmkLTr0vGO2BiVfq/JPXH5IdYKigttpwo8SMU.rrO', 'Rahul', '866-310-9705', 'deborah20@cummings.com', 7334, '192.168.178.116', '2017-06-14 20:06:39', NULL, '1979-11-08 03:03:30', NULL, NULL, '2'),
(85, 'cormier.hassie', '$2y$10$yvP0vwQ/RzqM5vD764kts.125u.vQraI8wGdh0srUNbwUMVG5.Kb2', 'Jedidiah', '844.601.8028', 'rollin.mosciski@hotmail.com', 6265, '192.168.37.130', '1995-01-22 16:29:09', NULL, '1973-06-27 04:00:31', NULL, NULL, '1'),
(86, 'kwiegand', '$2y$10$DwZVwdAueKhJIAcxT7SP5uxbdmHvDfqyeTKBi3SFNbQZ4oRwjgE6q', 'Mozelle', '(844) 764-7761', 'annabelle66@auer.com', 2246, '10.122.21.144', '1984-01-21 21:28:34', NULL, '2018-01-04 16:56:02', NULL, NULL, '2'),
(87, 'bret02', '$2y$10$51T9IzGDoGcRdE.YSYyaMOD1jxj/IXmi4woSa5TpR2Jl9QYz3P2xW', 'Obie', '1-888-454-5607', 'collin22@schinner.com', 461, '192.168.22.10', '2016-12-30 01:05:42', NULL, '2019-03-02 03:54:12', NULL, NULL, '2'),
(88, 'alberta.funk', '$2y$10$K9y/FoE1a3j54v56T8LXlO/34zxasfv1wzqWg9ZHZ5Bjhti8z/UZa', 'Mitchel', '1-888-737-6204', 'ara.padberg@yahoo.com', 10423, '192.168.155.61', '1983-05-14 03:51:06', NULL, '1970-06-26 04:09:29', NULL, NULL, '2'),
(89, 'ahaag', '$2y$10$/7.N58L5ePAG2M7JdPGjwOLJJ00GFcR.Ml7Pb96.lArKRHOxaY3Wa', 'Corine', '(800) 512-7185', 'ethan.lowe@wiza.org', 1426, '192.168.228.174', '1993-06-18 07:08:37', NULL, '1989-10-03 21:35:46', NULL, NULL, '2'),
(90, 'ijohnston', '$2y$10$PAl9IHmQex1CzXfAOt23vOdHWOdT6VNYE1AOkrqPs9IHPY28OZzpy', 'Oran', '844.922.7882', 'oebert@hotmail.com', 16396, '192.168.253.15', '1972-04-03 08:16:43', NULL, '2002-07-21 15:26:20', NULL, NULL, '2'),
(91, 'flo77', '$2y$10$lQc6y0o9F069G1BYL8M6a.rB3.vc5aVQlW9quor1K.zwu0O5nStlm', 'Vidal', '(844) 801-7135', 'oberbrunner.peyton@yahoo.com', 8539, '192.168.1.153', '2009-01-15 02:48:54', NULL, '2001-06-08 15:13:02', NULL, NULL, '1'),
(92, 'oparker', '$2y$10$e5IKs5zMeta3mMfPIPkFXuM.0xQzPwBmn.H9aq.GTePkiXQH9xlXu', 'Gladyce', '844.669.3183', 'bode.twila@hotmail.com', 14595, '10.239.130.177', '1991-12-08 15:07:43', NULL, '2015-10-06 11:18:54', NULL, NULL, '2'),
(93, 'umayert', '$2y$10$YQjtrBqZ5RQnyzlOxsYKAOPJojqprq16xSwgHbFpNCGls0qrHagJi', 'Monserrat', '1-877-364-4602', 'lon09@blick.info', 11283, '10.135.180.230', '2008-08-02 22:05:45', NULL, '1981-09-08 09:26:49', NULL, NULL, '2'),
(94, 'wstreich', '$2y$10$qv/Mh3jhH1uiOzhUXb3LrOYOlhTQka2p2D4zNNZtevr0G6bIZan/a', 'Vernie', '1-866-413-2354', 'myrtice.rau@hotmail.com', 9353, '10.185.62.179', '2007-12-19 20:21:14', NULL, '1997-07-22 06:38:38', NULL, NULL, '2'),
(95, 'herman.lindsay', '$2y$10$G/2N9q4e4lZ9AhpzG9Hc7.b9v2c0Jrzav2qETzx8cWVfZHcBEvj2e', 'Ari', '888-264-2097', 'lemke.laurine@hotmail.com', 9037, '10.156.111.243', '2007-12-05 10:36:20', NULL, '1980-06-26 00:40:39', NULL, NULL, '1'),
(96, 'lamont.stokes', '$2y$10$SRkjwsxpLvQbbEwXtwfG4uvoPvX1WvVJwSU8xG9heYiPRrkgmazwy', 'Taya', '877-298-5405', 'jarvis04@hotmail.com', 14900, '10.43.229.189', '2009-05-29 06:00:06', NULL, '1971-03-12 20:12:56', NULL, NULL, '2'),
(97, 'shaun.johns', '$2y$10$JGY/QGZIObfwznfeR68XoeH4DdLdgPnBk/z5LacNKrzrvA2hoy2wy', 'Linda', '1-877-400-0797', 'christina53@gmail.com', 11084, '10.51.164.194', '1999-06-19 16:45:51', NULL, '2014-03-02 11:54:48', NULL, NULL, '2'),
(98, 'ssporer', '$2y$10$KRFc8OHGWUnwLwLVbr9eo.X0DAp/Ef96PYvQSeVoS52sSKPw.qUU6', 'Maida', '(800) 343-8045', 'bheathcote@sauer.com', 15768, '10.138.24.238', '1981-04-12 15:35:33', NULL, '1971-01-25 18:36:56', NULL, NULL, '1'),
(99, 'rhalvorson', '$2y$10$oCyx0Nu5gFixP6y5TCoPc..Hxn5SqcucJhcpETj58o6AmH4YAdrqa', 'Carroll', '844-467-6037', 'reginald.howe@rempel.com', 16806, '10.216.211.137', '2002-04-21 22:33:27', NULL, '2008-03-10 23:03:10', NULL, NULL, '1'),
(100, 'ahamill', '$2y$10$s1axr1/rHuSJQSWH7Ab45ONm8VD7p4dOnmlO1yWaDhB2tVcvEyAxO', 'Yasmin', '855-682-3273', 'nstrosin@abshire.net', 6387, '192.168.152.115', '1987-12-01 14:10:10', NULL, '2016-06-28 15:09:46', NULL, NULL, '2'),
(101, 'an', '123456', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', '2019-07-31 20:33:43', NULL, NULL, NULL, NULL, '1'),
(102, 'an', '$2y$10$mR4JFcIBiBYbSnPhy47uveQIw5uj4CBzeMUsykhZrNMYyx6IpgoWy', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', '2019-07-31 20:45:52', NULL, '2019-08-01 00:45:52', NULL, NULL, '1'),
(103, 'an', '$2y$10$idNUuHR9BwGgWMF5ZQ4VfOKyz1FZCnM46FJclnMtNe6FmH.ngBSpG', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-01 00:53:14', NULL, NULL, '1'),
(104, 'josie.metz', '$2y$10$oUzlVeq.hpE.Z.FKcoOwpeF5ajCz6edfzdoRxFZEaMjxuCkGVkISG', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 320, '127.0.0.1', '2019-08-03 20:38:32', NULL, '2019-08-01 00:53:29', '2019-08-04 00:38:35', NULL, '2'),
(105, 'josie.metz', '$2y$10$M6DawJwhs6IbFNvkna1aHOIf.QqGOxvqKYURhd/dsmY429z8v411q', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-01 00:54:51', NULL, NULL, '1'),
(106, 'josie.metz', '$2y$10$7mHPFNqcxvA.IP2iNOOK1.ud29F705z4JEXp5MRrk559bBdk7B/eC', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-01 00:59:32', NULL, NULL, '1'),
(107, 'asdsadsa', '$2y$10$LDPR3M0jDG2Rw5qvqG4i4.maLnjbd2/gZ4M4q/EZFiezCM6NEckvi', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-01 01:26:47', NULL, NULL, '1'),
(108, 'asdsadsa', '$2y$10$Aa2R2DteN0tQmQV9JKmVNu7/ITX0f1m2c.6ePuLz1KvJiaCjkMYrW', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-01 01:29:04', NULL, NULL, '1'),
(109, 'van98asdas', '$2y$10$O2wCO9vxQTkiN3f1now0GeewmIgSnqga1.SU8RjLs38rmvCcnxNY2', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-01 01:37:35', NULL, NULL, '1'),
(110, 'adasdsad', '$2y$10$TCYMuAFUlM38/kN5KviOpeA3H30SSVEz2dzMAY8WRGr7F5WTFxaLy', 'dasdasd', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-01 01:40:19', NULL, NULL, '1'),
(111, 'adasdsad', '$2y$10$NvgyL6Bt6./PGNG6C09oj.a738ulCy252QxZLNItZuWeSYgjniaJS', 'dasdasd', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-01 01:40:19', NULL, NULL, '1'),
(112, 'josie.metz', '$2y$10$F9634n9UbL3GIyf/taFigevMDyJl1ZB7XE6F4hmPcc.qSCe9RRa0.', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-01 04:58:28', NULL, NULL, '1'),
(113, 'aaaaa', '$2y$10$CX/ZyUPU3xLHdOQnbSmbrOYuwmY23gQGawIMv7Qr.mdYAOAzMbOxm', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-01 05:03:53', NULL, NULL, '1'),
(114, '1253465', '$2y$10$WRtrmPaPJYMqdjjOk2Lchee/t9ag7WwGAJQNY/v7LaioRROSZSx0G', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-01 05:12:15', NULL, NULL, '1'),
(115, '1253465', '$2y$10$dJ1os9YuUr8/HIZ0Wib/h.GvRnH.DXyVfOHPENfTGDbwP6xpYSYi6', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-01 05:12:15', NULL, NULL, '1'),
(116, '', '', '', '', '', 0, '', NULL, '', '2019-08-01 23:53:44', '2019-08-07 01:42:35', NULL, '1'),
(119, '', '', '', '', '', 0, '', NULL, '', '2019-08-04 00:12:02', '2019-08-07 01:42:40', NULL, '1'),
(120, 'qqq', '$2y$10$oy6B3UoFDm6V42KU8ySFXOiPwtqLPxn/Y/hiiJz2bnJJJPtam138a', '123', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-04 00:25:30', NULL, NULL, '1'),
(121, 'qqq', '$2y$10$qapRf.F13nhYjXfr7VvxLOg69HymFm5FEcnpLYvk8w1/9K2cxLENK', '123', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-04 00:27:43', NULL, NULL, '1'),
(122, 'dsadsad', '$2y$10$VyH5eJjnpDtYb12QOB9ioOcOk4MR0ghpWE4UM.f7E.UwnkoHtq19a', 'dsad', '5196974518', 'andy@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-04 00:29:08', NULL, NULL, '1'),
(123, 'josie.metz', '$2y$10$yib6YiIldkDOzM8slYRWHOPHBqlu4GM63rMn/6ziPwkhqHUb7Ip1.', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, '127.0.0.1', NULL, NULL, '2019-08-04 00:37:59', NULL, NULL, '1'),
(124, 'josie.metz', '$2y$10$n0TWO/AbHm8m2LgroUrFqOq9zHMULFt9SCQcxeapLJaYJW1sZNA0y', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, NULL, NULL, NULL, '2019-08-07 05:33:42', NULL, NULL, '1'),
(125, 'fdsfsdfds', '$2y$10$E/.G.n83f3zTL99IkS9Ts.WwEnbUQDrKjNiOpZGh129pLQw6yO44O', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, NULL, NULL, NULL, '2019-08-07 05:42:14', NULL, NULL, '1'),
(126, 'admin', '$2y$10$qs4e8kpovQAnOoepBcoPPeMtvzNAOBmvW2wkjbqOYVBdrWARNEfq2', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, NULL, NULL, NULL, '2019-08-07 05:42:54', NULL, NULL, '1'),
(127, 'admin', '$2y$10$v3KRbM17TwVJrzU/2Ey92udCf7Ukac2.n87Un9tIf9g2IINcseBbi', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, NULL, NULL, NULL, '2019-08-07 05:43:12', NULL, NULL, '1'),
(128, 'dfgfdfg', '$2y$10$OKCKYS7XCEObtSr/8iNZWevtH5VcxRgI4exOqw943z68R6pFoD2OW', 'An Liu', '5196974518', 'andyvviiar@gmail.com', 300, NULL, NULL, NULL, '2019-08-07 05:59:45', NULL, NULL, '1'),
(129, 'sdsadsadassdsdsd', '$2y$10$W8cwDhpPBuJW4.1O1SAJgeUjHWKUOWVjQXqJxPDe.DVgF4IIGM/Ae', 'An Liu', '13397061689', 'andyvviiar@gmail.com', 300, NULL, NULL, NULL, '2019-08-07 06:20:35', '2019-08-07 07:37:51', NULL, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
