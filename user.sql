-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 02:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flow`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `dob`, `image`, `updated_at`, `password`) VALUES
(57, 'muhid', 'muhid@trenzasoft.com', '01763228277', '1495-12-12', 'images.jpg', '2020-02-17 11:36:37', '$2y$10$OE/w8ik7wXcF3Z/JkD.FI.RbgQmXnr2e4Gkz.T5AHif.N12BkJLh.'),
(58, 'new user', 'new@user.com', '01223355448', '4450-12-12', 'images.jpg', '2020-02-17 11:40:10', '$2y$10$jyHk/YBFEW32nmtJT9lReeq9bSepQMfdCbrpTe/VvVcFtYb01qtB2'),
(59, 'old user', 'old@gmail.com', '0176322827722', '2019-12-14', 'images.jpg', '2020-02-17 11:45:24', '$2y$10$wiVbaJC554DvhGL0X0tmMuQD74iC2vmpQzLYsvO443LBICygwKbDG'),
(76, 'abll', 'asad@trenzasoft.com', '123434', '0000-00-00', 'Downside-Up-745x449.jpg.optimal.jpg', '2020-02-18 06:07:13', '$2y$10$9wXKcHV7hfT0PUbwRQAAcOdvPXpnPsv2eEDefH7wy1pq0dDwHDwWe'),
(77, 'ablll', 'abll@gmail.con', '10521445522352', '4154-04-05', 'Downside-Up-745x449.jpg.optimal.jpg', '2020-02-18 06:16:03', '$2y$10$9Eu3DLRQc36BXktGVZFlR.FrezkCdU5sGUtGld.YeKWxxt2i7FW9O'),
(78, 'abllla', 'abll@gmail.con', '10521445522352', '4154-04-05', 'Downside-Up-745x449.jpg.optimal.jpg', '2020-02-18 06:27:13', '$2y$10$pQsV7E4giIVVBG5JH8n4pOdlED5tGB56n035nJVtIPOA7JcJhMeMS'),
(79, 'ab', 'abll@gmail.con', '10521445522352', '4154-04-05', 'download.jpg', '2020-02-18 06:28:49', '$2y$10$U9A6JBWp4Pf747BxuI82LOWtB/ElT3VIihkHxcny76bvGHxO3/a3O'),
(82, 'new user', 'new@user.com', '10521445522352', '0031-12-31', 'download.jpg', '2020-02-18 06:33:26', '$2y$10$8H0BKmko/.AOC1wzJzQdIOoQLqJxkwH22DySK3YLcu9vAeYzX803a'),
(83, 'new user1', 'new@user.com', '10521445522352', '0031-12-31', 'Downside-Up-745x449.jpg.optimal.jpg', '2020-02-18 06:33:53', '$2y$10$yAz2drB0O4Qyq7p0VBX6zeCCPK4gDi7yb7JSeRSuH4eJ1RZO/GG8y'),
(84, 'new user2', 'new@user.com', '10521445522352', '0031-12-31', 'download.jpg', '2020-02-18 06:39:08', '$2y$10$6iEqyj/kwXedVwsmYTuhceHKpFpQ3ahauIFpJ5tKjjMAxO/R72Kt2'),
(88, 'new223', 'new@user.com', '10521445522352', '0031-12-31', 'download.jpg', '2020-02-18 07:03:49', '$2y$10$fnyOFrhvr1s1Gy7eyqRFLuo3HgmhsyfwGdTXJ8emIlkY3zyxzCwaK'),
(94, 'mntl', 'mntl@trenza.com', '3434342', '2018-02-21', 'download.jpg', '2020-02-18 08:49:32', '$2y$10$vuzRhP6ggN4Wynra37nPquW59kawstRV9ZUYNCsVRq7rqTKNMdZfa'),
(95, 'n', 'imranmailbd@gmail.com', '01763228277', '3233-02-20', 'images.jpg', '2020-02-18 09:08:51', '$2y$10$tDm7oMOgkkJBl4wqB3klxuaWI.prWRVCfqlATMx/3E/xJY9SY1bkS'),
(96, 'abz', 'asad@trenzasoft.com', '01763228277', '2015-12-12', 'download.jpg', '2020-02-18 09:49:44', '$2y$10$xsHLQfj5obhKpLS32VonFeWweE8wn851nF6tLzlszkk.nbClhdB0.'),
(97, 'nnn', 'imranmailbd@gmail.com', '01763228277', '5025-12-12', '', '2020-02-18 10:22:20', '$2y$10$H.WWYZMPHVnuODlJF5OFXOGX4LGRRl9CsC.Sub4hqqqq620sTwFcO'),
(98, 'mnda', 'mnda@gma.com', '01763228277', '0000-00-00', 'images.jpg', '2020-02-18 12:33:19', '$2y$10$W8NZZJDb8p934m6K33gfset7WpHK/RqiEqKzBUAgMhQJtO5kyjk6K'),
(99, 'mnda', 'mnda@gma.com', '01763228277', '0000-00-00', 'images.jpg', '2020-02-18 12:34:18', '$2y$10$25EJ5oOw6K3.LEzIwnGD.uIJwyAya97jvvN7KohiAKjoOuCnUCn4u'),
(100, 'mnda', 'mnda@gma.com', '01763228277', '0000-00-00', 'images.jpg', '2020-02-18 12:35:42', '$2y$10$WJ/5/Hcqs374c6aJzBxPTOU4BQwY6O8kMKia6ocirfBfaEMjclNKG'),
(101, 'mnda', 'mnda@gma.com', '01763228277', '0000-00-00', 'images.jpg', '2020-02-18 12:36:22', '$2y$10$gp37tFKhnlhFYRHiwSJCK.HOQkWfG4r1ZYfo1zA8yedO4ZT4mxw1G'),
(102, 'mnda', 'mnda@gma.com', '01763228277', '0000-00-00', 'images.jpg', '2020-02-18 12:36:54', '$2y$10$xvx7Rrg0qYNPMPBcCr27MOz5z6Wdm0VDh11r2cpQ7RJhiPENMqc4W'),
(111, 'abu', 'abu@gmail.com', '01223355448', '2015-12-12', 'download.jpg', '2020-02-18 13:01:37', '$2y$10$9EwwXqb8NynDbUvju37B2eIz8oBYhmDzogXBEB.cIgzMtMZApROZC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
