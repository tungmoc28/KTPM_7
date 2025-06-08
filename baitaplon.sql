-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 08, 2025 lúc 08:04 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baitaplon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giayto`
--

CREATE TABLE `giayto` (
  `id` int(11) NOT NULL,
  `tengiayto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giayto`
--

INSERT INTO `giayto` (`id`, `tengiayto`) VALUES
(30, 'Căn Cước Công Dân'),
(31, 'Ảnh sổ đỏ/hồng mặt 1'),
(32, 'Ảnh sổ đỏ/hồng mặt 2'),
(33, 'Ảnh sổ đỏ/hồng mặt 3'),
(34, 'Ảnh sổ đỏ/hồng mặt 4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `groups` varchar(257) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `groups`) VALUES
(6, 'Bộ Tài Nguyên Môi Trường'),
(7, 'Công an thành phố'),
(8, 'Công an phường');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoso`
--

CREATE TABLE `hoso` (
  `id` int(11) NOT NULL,
  `hovaten` varchar(256) NOT NULL,
  `cccd` varchar(256) NOT NULL,
  `ngaycap` date NOT NULL,
  `dacdiem` varchar(256) NOT NULL,
  `diachi` varchar(256) NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `cccd_hash` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoso`
--

INSERT INTO `hoso` (`id`, `hovaten`, `cccd`, `ngaycap`, `dacdiem`, `diachi`, `gioitinh`, `cccd_hash`) VALUES
(2, 'Dương Quang Tùng', '001203006839', '2024-06-06', '', '90 Lê Lợi', 1, '5957d13f3b84848958e4edab607f968bcb605592b95b48c4542ab9745fcc6e68');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoso_giayto`
--

CREATE TABLE `hoso_giayto` (
  `id` int(11) NOT NULL,
  `id_hoso` int(11) NOT NULL,
  `id_giayto` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoso_giayto`
--

INSERT INTO `hoso_giayto` (`id`, `id_hoso`, `id_giayto`, `image`) VALUES
(1, 1, 452377030, '24'),
(8, 2, 29, 'z5619650767919_453618a63460e8e938510a30f40f04f1.jpg'),
(13, 2, 24, 'z5495093607448_d3d5c28f99524fdbe5a1da704b146b88.jpg'),
(15, 2, 30, 'cccd.jpg'),
(17, 2, 31, 'soDo.jpg'),
(18, 2, 32, 'soDo.jpg'),
(19, 2, 33, 'soDo.jpg'),
(20, 2, 34, 'soDo.jpg'),
(22, 2, 30, 'bo-cong-an-the-cccd-gan-chip1_pyer.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `module` varchar(256) NOT NULL,
  `chucnang` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `module`
--

INSERT INTO `module` (`id`, `module`, `chucnang`) VALUES
(3, 'hoso', 'Quản lý hồ sơ'),
(4, 'giayto', 'Quản lý giấy tờ'),
(5, 'group', 'Quản lý group'),
(6, 'user', 'Quản lý user'),
(7, 'module', 'Quản lý chức năng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen_group`
--

CREATE TABLE `phanquyen_group` (
  `id` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_chucnang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phanquyen_group`
--

INSERT INTO `phanquyen_group` (`id`, `id_group`, `id_chucnang`) VALUES
(13, 6, 3),
(14, 6, 4),
(15, 6, 5),
(16, 6, 6),
(17, 6, 7),
(18, 7, 3),
(19, 7, 4),
(23, 8, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(256) NOT NULL,
  `matkhau` varchar(256) NOT NULL,
  `matkhau_hash` varchar(256) NOT NULL,
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `taikhoan`, `matkhau`, `matkhau_hash`, `id_group`) VALUES
(4, 'quangtung2048', 'tung2003', '08e10b4eff283ae2ba382fe7f76053284f82b7fc8f2a646a08ee9c1a5d149bc3', 6),
(5, 'tung2003', '123', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 7),
(6, 'tung2810', '123', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 8),
(7, 'tranhuukien', '123', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 6);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giayto`
--
ALTER TABLE `giayto`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoso`
--
ALTER TABLE `hoso`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoso_giayto`
--
ALTER TABLE `hoso_giayto`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phanquyen_group`
--
ALTER TABLE `phanquyen_group`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giayto`
--
ALTER TABLE `giayto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `hoso`
--
ALTER TABLE `hoso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hoso_giayto`
--
ALTER TABLE `hoso_giayto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `phanquyen_group`
--
ALTER TABLE `phanquyen_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
