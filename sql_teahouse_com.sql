-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th1 09, 2022 lúc 09:53 PM
-- Phiên bản máy phục vụ: 5.7.34-log
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sql_teahouse_com`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL,
  `action` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `assignment`
--

INSERT INTO `assignment` (`id`, `employee_id`, `store_id`, `create_at`, `update_at`, `action`) VALUES
(1, 40, 1, '2022-01-09 05:42:12', '2022-01-09 05:42:12', 1),
(2, 38, 2, '2022-01-09 06:13:33', '2022-01-09 06:13:33', 1),
(4, 37, 3, '2022-01-09 07:36:08', '2022-01-09 07:36:08', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `code` char(25) NOT NULL,
  `create_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL,
  `action` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coupons`
--

INSERT INTO `coupons` (`id`, `store_id`, `code`, `create_at`, `update_at`, `action`) VALUES
(2, 1, 'PR6BNK2', '2022-01-09 09:03:29', '2022-01-09 09:03:29', 1),
(3, 1, 'PRF8CBJ', '2022-01-09 09:11:02', '2022-01-09 09:11:02', 1),
(4, 2, 'PRZ3D0R', '2022-01-09 09:11:45', '2022-01-09 09:11:45', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(35) NOT NULL,
  `create_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL,
  `action` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `name`, `phone`, `email`, `create_at`, `update_at`, `action`) VALUES
(37, 'Le Van Phat', '0938648383', 'levanphatit1993@gmail.com', '2022-01-08 15:16:45', '2022-01-08 15:16:45', 1),
(38, 'Le Thanh Nhan', '0938648381', 'lethanhnhanit1993@gmail.com', '2022-01-08 14:46:35', '2022-01-08 14:46:35', 1),
(40, 'Le Thanh Dat', '0938648356', 'lethanhdatit1993@gmail.com', '2022-01-08 15:48:25', '2022-01-08 15:48:25', 1),
(41, 'Le Van Kiet', '0938648314', 'levankietit1993@gmail.com', '2022-01-08 15:49:58', '2022-01-08 15:49:58', 1),
(42, 'Nguyen Thi Thu Lan', '0938648311', 'nguyenthithulanit1993@gmail.com', '2022-01-08 15:50:35', '2022-01-08 15:50:35', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gifts`
--

CREATE TABLE `gifts` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `quantily` int(11) NOT NULL,
  `create_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL,
  `action` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `gifts`
--

INSERT INTO `gifts` (`id`, `name`, `quantily`, `create_at`, `update_at`, `action`) VALUES
(1, 'iphone', 10, '2022-01-08 16:24:51', '2022-01-08 16:24:51', 1),
(2, 'Một triệu tiền ', 30, '2022-01-08 16:27:39', '2022-01-08 16:27:39', 1),
(3, 'Vé xem phim', 60, '2022-01-08 16:27:51', '2022-01-08 16:27:51', 1),
(4, 'Một tấm vé số chiều xé', 30, '2022-01-09 14:03:32', '2022-01-09 14:03:32', 1),
(5, 'Một con chó gấu nói nhiều', 60, '2022-01-09 14:03:51', '2022-01-09 14:03:51', 1),
(6, 'Một con mèo đen', 10, '2022-01-09 14:04:00', '2022-01-09 14:04:00', 1),
(7, 'Môt cây bút bi', 10, '2022-01-09 14:04:12', '2022-01-09 14:04:12', 1),
(8, 'Một cục tẩy ', 30, '2022-01-09 14:04:21', '2022-01-09 14:04:21', 1),
(9, 'Một cái laptop trai nho', 10, '2022-01-09 14:04:49', '2022-01-09 14:04:49', 1),
(10, 'Một tờ giấy', 10, '2022-01-09 14:05:20', '2022-01-09 14:05:20', 1),
(11, 'Một con lợn ăn lắm', 10, '2022-01-09 14:05:32', '2022-01-09 14:05:32', 1),
(12, 'Một chiếc xe đồ chơi', 10, '2022-01-09 14:05:52', '2022-01-09 14:05:52', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `fulfillment` int(11) NOT NULL,
  `create_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL,
  `action` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `points`
--

INSERT INTO `points` (`id`, `employee_id`, `fulfillment`, `create_at`, `update_at`, `action`) VALUES
(1, 40, 8, '2022-01-09 07:00:15', '2022-01-09 07:00:15', 1),
(2, 38, 3, '2022-01-09 08:21:31', '2022-01-09 08:21:31', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `address` text NOT NULL,
  `create_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL,
  `action` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `stores`
--

INSERT INTO `stores` (`id`, `name`, `address`, `create_at`, `update_at`, `action`) VALUES
(1, 'Con cưng 1', '123 Nguyễn Trãi', '2022-01-08 16:43:56', '2022-01-08 16:43:56', 1),
(2, 'Con cưng 2', '234 Nguyễn Duy Trinh', '2022-01-08 16:44:54', '2022-01-08 16:44:54', 1),
(3, 'Con cưng 3', '231 Tôn Thất Tùng', '2022-01-08 16:45:21', '2022-01-08 16:45:21', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'administrator', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_employees_assignment` (`employee_id`),
  ADD KEY `fk_stores_assignment` (`store_id`);

--
-- Chỉ mục cho bảng `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_coupons_stores` (`store_id`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_points_employees` (`employee_id`);

--
-- Chỉ mục cho bảng `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `gifts`
--
ALTER TABLE `gifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `fk_employees_assignment` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_stores_assignment` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `coupons`
--
ALTER TABLE `coupons`
  ADD CONSTRAINT `fk_coupons_stores` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `fk_points_employees` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
