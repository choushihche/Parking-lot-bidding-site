-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- 主機: localhost:3306
-- 產生時間： 2021 年 12 月 12 日 21:55
-- 伺服器版本: 5.7.36-0ubuntu0.18.04.1
-- PHP 版本： 7.2.24-0ubuntu0.18.04.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mybid`
--

-- --------------------------------------------------------

--
-- 資料表結構 `feeback`
--

CREATE TABLE `feeback` (
  `username` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `feeback`
--

INSERT INTO `feeback` (`username`, `mail`, `phone`, `date`, `message`) VALUES
('', '', '', '2021-10-05', ''),
('a8390187', 'a8390187@gmail.com', '0970396050', '2020-01-05', 'efgergdfg'),
('Alice', 'alice123@gmail.com', '0971254451', '2020-01-07', 'fsdf wfsdf'),
('Bill', 'bill@gmail.com', '0912345222', '2020-01-06', 'i iw0fwefg'),
('David', 'david@gmail.com', '0945612348', '2020-01-07', 'ertegdgrthg'),
('dhdfg', 'aaa@gmail.com', '222222', '2020-01-05', 'tyjghj'),
('ghj', 'cindy87012020@yahoo.com.tw', '5555', '2020-01-05', 'wfefwef'),
('Haru', 'aharu@gmail.com', '0912345625', '2020-01-05', 'wsefwerfsd'),
('rgedg', 'aaa2@gmail.com', 'wfsdfw', '2020-01-06', 'wefsdfwe');

-- --------------------------------------------------------

--
-- 資料表結構 `garage`
--

CREATE TABLE `garage` (
  `ID` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `deadline` date NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `garage`
--

INSERT INTO `garage` (`ID`, `status`, `price`, `type`, `deadline`, `username`) VALUES
('A-1', 1, 1500, 'short-time', '2020-01-12', 'visitors'),
('A-2', 1, 1300, 'long-time', '2020-01-31', ''),
('A-3', 1, 700, 'short-time', '2020-01-14', ''),
('A-4', 1, 1100, 'long-time', '2020-01-15', ''),
('B-1', 1, 1300, 'short-time', '2020-01-23', ''),
('B-2', 1, 12400, 'short-time', '2020-01-16', 'visitors'),
('B-3', 1, 600, 'short-time', '2020-01-20', 'visitors'),
('B-4', 0, 1000, 'long-time', '2020-01-10', ''),
('C-1', 1, 1600, 'long-time', '2020-01-31', 'Alice'),
('C-2', 1, 1000, 'short-time', '2020-01-19', 'visitors'),
('C-3', 0, 1000, 'long-time', '2020-01-17', ''),
('C-4', 0, 700, 'short-time', '2020-01-23', ''),
('D-1', 1, 1300, 'short-time', '2020-01-23', 'a8390187'),
('D-2', 1, 2200, 'long-time', '2020-01-07', 's1061675'),
('D-3', 1, 501, 'short-time', '2020-01-21', ''),
('D-4', 1, 1000, 'long-time', '2020-02-03', ''),
('E-1', 1, 4500, 'short-time', '2020-01-14', ''),
('E-2', 0, 1000, 'long-time', '2020-01-31', ''),
('E-3', 1, 700, 'short-time', '2020-01-24', ''),
('E-4', 1, 700, 'short-time', '2020-01-24', 'visitors');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `reservation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`username`, `password`, `phone`, `mail`, `reservation`) VALUES
('a8390187', 'a9206390', '0970396050', 'a8390187@gmail.com', 'D-1'),
('Alice', 'alice', '0971254451', 'alice123@gmail.com', 'C-1'),
('Allen', 'allen', '0912345673', 'allen@gmail.com', ''),
('Bill', 'bill', '0912345222', 'bill@gmail.com', 'A-1'),
('David', 'david', '0945612348', 'david@gmail.com', 'C-2'),
('ddd', 'ddd', '', '', ''),
('Haru', 'haru', '0912345625', 'aharu@gmail.com', ''),
('Jenny', 'jenny', '0912345677', 'jenny@gmail.com', ''),
('Merry', 'merry', '0912345674', 'merry@gmail.com', ''),
('s1061675', 'a9206390', '0911111122', 'a9206390@gmail.com', 'D-2'),
('Sara', 'sara', '0912456785', 'sara@gmail.com', ''),
('Steve', 'steve', '902222333', 'asteve@gmail.com', '');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `feeback`
--
ALTER TABLE `feeback`
  ADD PRIMARY KEY (`username`);

--
-- 資料表索引 `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
