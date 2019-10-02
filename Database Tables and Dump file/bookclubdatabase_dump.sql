-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 11:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookclubdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_items`
--

CREATE TABLE `book_items` (
  `Book_ID` int(10) NOT NULL,
  `Book_Title` varchar(200) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `ISBN_Code` varchar(10) NOT NULL,
  `Genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_items`
--

INSERT INTO `book_items` (`Book_ID`, `Book_Title`, `Author`, `ISBN_Code`, `Genre`) VALUES
(1, 'All the Ugly and Wonderful Things', 'Bryn Greenwood', 'FIC001', 'Fiction'),
(2, 'Don Quixote', 'Miguel de Cervantes Saavedra', 'FIC002', 'Fiction'),
(3, 'Invisible Man', 'Ralph Ellison', 'FIC003', 'Fiction'),
(4, 'Memoirs of a Geisha', 'Arthur Golden', 'FIC004', 'Fiction'),
(5, 'The Pillars of the Earth', 'Ken Follett', 'FIC005', 'Fiction'),
(6, 'The Merck Manual of Diagnosis and Therapy', 'Robert Berkow', 'REF001', 'Reference'),
(7, 'Reverse Dictionary by Readers Digest Association', 'Various', 'REF002', 'Reference'),
(8, 'Dictionary of Slang', 'Jonathon Green', 'REF003', 'Reference'),
(9, 'Concise Oxford thesaurus', 'E.M. Kirkpatrick', 'REF004', 'Reference'),
(10, 'Dictionary of Architecture and Construction', 'Cyril M. Harris', 'REF005', 'Reference'),
(11, 'The Diary of a Young Girl', 'Anne Frank', 'BIO001', 'Biography'),
(12, 'John Adams', 'David McCullough', 'BIO002', 'Biography'),
(13, 'The Immortal Life of Henrietta Lacks', 'Rebecca Skloot', 'BIO003', 'Biography'),
(14, 'The Autobiography of Malcolm X', 'Malcolm X', 'BIO004', '14.00'),
(15, 'Catherine the Great: Portrait of a Woman', 'Robert K. Massie', 'BIO005', 'Biography'),
(16, 'Stitch and Bitch Crochet: The Happy Hooker', 'Debbie Stoller', 'HOB001', 'Hobby'),
(17, 'The Joy of Cooking', 'Irma S. Rombauer', 'HOB002', 'Hobby'),
(18, 'The Digital Photography Book', 'Scott Kelby', 'HOB003', 'Hobby'),
(19, 'The Complete Book of Essential Oils and Aromatherapy', 'Valerie Ann Worwood', 'HOB004', 'Hobby'),
(20, 'The Complete Joy of Homebrewing', 'Charles Papazian', 'HOB005', 'Hobby');

-- --------------------------------------------------------

--
-- Table structure for table `my_books`
--

CREATE TABLE `my_books` (
  `Book_ID` int(10) NOT NULL,
  `Book_Title` varchar(200) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `ISBN_Code` varchar(10) NOT NULL,
  `Genre` varchar(50) NOT NULL,
  `Book_Suggestion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `Suggestion_ID` int(10) NOT NULL,
  `Book_Title` varchar(200) NOT NULL,
  `Author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(10) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `User_Image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `User_Name`, `Password`, `User_Image`) VALUES
(30, 'Gavin', '1234', NULL),
(31, 'Lecturer', '1234', NULL),
(32, 'Thirdperson', '1234', NULL),
(62, 'ggg', 'gg', 'gavfez.jpg'),
(63, 'yy', 'yyy', 'gavfez.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_items`
--
ALTER TABLE `book_items`
  ADD PRIMARY KEY (`Book_ID`),
  ADD UNIQUE KEY `ISBN_Code` (`ISBN_Code`);

--
-- Indexes for table `my_books`
--
ALTER TABLE `my_books`
  ADD PRIMARY KEY (`Book_ID`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`Suggestion_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_items`
--
ALTER TABLE `book_items`
  MODIFY `Book_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `my_books`
--
ALTER TABLE `my_books`
  MODIFY `Book_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `Suggestion_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
