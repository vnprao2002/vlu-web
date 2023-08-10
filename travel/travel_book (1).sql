-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 01:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(11) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(4, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '0987654321', 'Số 10, Phố Trần Hưng Đạo, Hà Nội', 'Hạ Long', 2, '2023-08-05', '2023-08-10'),
(5, 'Trần Thị B', 'tranthib@gmail.com', '0909090909', 'Số 20, Đường Lê Lợi, TP.HCM', 'Đà Nẵng', 3, '2023-08-12', '2023-08-18'),
(6, 'Lê Văn C', 'levanc@gmail.com', '0977777777', 'Số 5, Đường Hùng Vương, Hà Nội', 'Nha Trang', 1, '2023-08-20', '2023-08-22'),
(7, 'Nguyễn Thị D', 'nguyenthid@gmail.com', '0966666666', 'Số 15, Phố Lê Duẩn, Đà Nẵng', 'Huế', 2, '2023-08-25', '2023-08-28'),
(8, 'Trần Văn E', 'tranvane@gmail.com', '0912345678', 'Số 7, Đường Ngô Quyền, Hà Nội', 'Sapa', 4, '2023-08-30', '2023-09-05'),
(9, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '0987654321', 'Số 10, Phố Trần Hưng Đạo, Hà Nội', 'Hạ Long', 2, '2023-08-05', '2023-08-10'),
(10, 'Trần Thị B', 'tranthib@gmail.com', '0909090909', 'Số 20, Đường Lê Lợi, TP.HCM', 'Đà Nẵng', 3, '2023-08-12', '2023-08-18'),
(11, 'Lê Văn C', 'levanc@gmail.com', '0977777777', 'Số 5, Đường Hùng Vương, Hà Nội', 'Nha Trang', 1, '2023-08-20', '2023-08-22'),
(12, 'Nguyễn Thị D', 'nguyenthid@gmail.com', '0966666666', 'Số 15, Phố Lê Duẩn, Đà Nẵng', 'Huế', 2, '2023-08-25', '2023-08-28'),
(13, 'Trần Văn E', 'tranvane@gmail.com', '0912345678', 'Số 7, Đường Ngô Quyền, Hà Nội', 'Sapa', 4, '2023-08-30', '2023-09-05'),
(14, 'Nguyễn Thị F', 'nguyenthif@gmail.com', '0911111111', 'Số 25, Phố Trần Phú, Hà Nội', 'Đà Lạt', 2, '2023-09-08', '2023-09-12'),
(15, 'Trần Văn G', 'tranvang@gmail.com', '0922222222', 'Số 30, Đường Lê Lai, TP.HCM', 'Hội An', 3, '2023-09-15', '2023-09-22'),
(16, 'Lê Thị H', 'lethih@gmail.com', '0933333333', 'Số 12, Phố Nguyễn Huệ, Hà Nội', 'Phú Quốc', 1, '2023-09-25', '2023-09-28'),
(17, 'Nguyễn Văn I', 'nguyenvani@gmail.com', '0944444444', 'Số 18, Đường Trần Phú, Đà Nẵng', 'Vũng Tàu', 2, '2023-10-05', '2023-10-10'),
(18, 'Trần Thị K', 'tranthik@gmail.com', '0955555555', 'Số 22, Phố Ngô Gia Tự, Hà Nội', 'Ninh Bình', 4, '2023-10-15', '2023-10-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
