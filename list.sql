-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_system`
--
-- --------------------------------------------------------
--
-- Table structure for table `lists`
--

CREATE TABLE `lists` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `age` varchar(2) NOT NULL,
  `wants` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lists
--

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(1, 'josh', 12, '|636f6d7075746572|');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(2, 'mike', 11, 'a3a14388adfc387a81d240e6bef06667');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(3, 'jass', 9, 'ivqrb tnzrf');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(4, 'paul', 13, 'd41d8cd98f00b204e9800998ecf8427e');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(5, 'derek', 8, '626f6f6b73');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(6, 'kevin', 6, 'a1db5ceadd715710a20498e29cfbc885');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(7, 'ollie', 5, '50ecac278767fa0e02038a69de4f612804630cee');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(8, 'jasper', 4, '|63616e6479|');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(9, 'matt', 11, 'tvsgf');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(10, 'joy', 8, 'ee8ded5830ddcda8287bd8d9a02d79e5');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(11, 'sam', 9, '646f67');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(12, 'daisy', 10, '9d989e8d27dc9e0ec3389fc855f142c3d40f0c50');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(13, 'pam', 13, 'ovxr');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(14, 'mia', 8, 'e8fbc1f03504ddffc52a9e6dab5e204d');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(15, 'kat', 10, '|7465646479|');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(16, 'robin', 11, 'b0a8b6f820479900e34d34f6b8a4af73');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(17, 'ricky', 7, '4143454354467b2254686973746865666c6167227d');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(18, 'rosy', 12, 'qerff');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(19, 'mason', 8, 'c95259de1fd719814daef8f1dc4bd64f9d885ff0');

INSERT INTO `lists` (`id`, `name`, `age`, `wants`) VALUES
(20, 'alex', 9, 'c9fab33e9458412c527c3fe8a13ee37d');

-- Indexes for dumped tables
--
--
-- Indexes for table `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;