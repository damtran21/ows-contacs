-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2019 lúc 03:34 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ows-contactdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fb` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone1`, `phone2`, `email`, `fb`, `company`) VALUES
(1, '6778988900', '016975854367', '13563473883', 'tranvandamattt@gmail.com', 'ĐamTồ', 'VNP'),
(2, 'Nguyễn đức Nghĩa', '3134t4t4424', '13344455', 'abc@gmail.com', 'nghiangu', 'VNP'),
(4, 'rr33', '53253253', '5325325', '532532', '5352352523', 'ffagag'),
(5, 'Phụ kiện công nghệ', '3464645', '2353dsg', '12432dgd', '3546gdsd', '343253gsd'),
(6, 'Dụng cụ khác', '016975854367', '13563473883', '12432', '3546', '3432535'),
(7, 'Dụng cụ khác', '016975854367', '13563473883', '12432', '3546', '3432535'),
(8, 'Asus', '3464645', '', 'trandamattt3@gmail.com', '3546', '3432535'),
(9, 'gdg', 'gdgdg', 'gdgd', 'têtt', 'êtt', 'têt'),
(11, 'Trần Văn Đam', '01697585436', '01697585436', 'trandamattt3@gmail.com', 'DT', 'VNP');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
