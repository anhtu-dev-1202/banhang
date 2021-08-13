-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 13, 2021 lúc 09:29 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'PC'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `image`, `price`, `description`) VALUES
(2, 2, 'LG Gram 2021 17Z90P-G.AH76A5', 'https://laptopworld.vn/media/product/8108_lg_gram_2021_17z90p_g_ah76a5_3.jpg', 40000000, 'CPU: Intel Core i7-1165G7 (2.80GHz up to 4.70GHz, 12MB Cache)\r\nRam: 16GB LPDDR4X Buss 4266MHz\r\nỔ cứng: 512GB PCIe® NVMe™ M.2 SSD\r\nVGA: Intel Iris Xe Graphics\r\nDisplay: 17.0 inch WQXGA (2560 x 1600) 16:10, IPS LCD, sRGB 100%, DCI-P3 99% (Non-Touch only)\r\nP'),
(3, 2, 'Laptop Lenovo Gaming 3-15ARH05 (82EY00LBVN) ', 'https://hanoicomputercdn.com/media/product/59417_laptop_lenovo_gaming_3_15arh05_82ey00lbvn_den_4.png', 18699000, 'CPU: AMD R5 4600H\r\nRAM: 8GB\r\nỔ cứng: 512GB SSD\r\nVGA: GTX1650 4G\r\nMàn hình: 15.6 inch FHD 120hz\r\nHĐH: Win 10\r\nMàu: Đen'),
(4, 1, 'PC GAMING SHARK', 'https://hanoicomputercdn.com/media/product/58312_pcgm322.jpg', 17500000, 'CPU: Intel Core i3 10100\r\nMain: H410\r\nRAM: 8GB\r\nVGA: GTX 1650\r\nNguồn: 500W'),
(5, 2, 'Apple Macbook Pro 15 Touchbar MR942 ', 'https://hanoicomputercdn.com/media/product/43791_macbook_pro_15_touchbar_mr942__3_.png', 63000000, 'Bộ vi xử lý Intel Core i7-6 core 2.6Ghz/9MB L3 cache\r\nBộ nhớ trong 16GB DDR4\r\nVGA AMD Radeon Pro 560X 4GB DDR5\r\nỔ cứng 512GB SSD\r\nỔ quang • Không\r\nCard Reader • Không'),
(6, 1, 'PC GAMING FALCON 024', 'https://hanoicomputercdn.com/media/product/53261_pc_gaming_falcon_024_pba.jpg', 38600000, 'Main: X570\r\nCPU: AMD Ryzen 9 3900X\r\nRam: 16GB\r\nỔ cứng: SSD 250GB\r\nVGA: NVIDIA GTX 1660 Super\r\nNguồn: 750W'),
(7, 1, 'PC GAMING EAGLE 002', 'https://hanoicomputercdn.com/media/product/55473_pc_gaming_eagle_002.jpg', 53200000, 'CPU: Intel Core I7 10700k\r\nMainboard: Z490\r\nRAM: 16GB RAM\r\nSSD: 250GB\r\nHDD: 2TB\r\nVGA: NVIDIA RTX 3080'),
(8, 2, 'Apple Macbook Pro 13 Touchbar MR9Q2', 'https://hanoicomputercdn.com/media/product/43795_macbook_pro_13_touchbar_mr9q2__5_.jpg', 42500000, 'Apple Macbook Pro 13 Touchbar MR9Q2 (i5 2.3Ghz/8GB RAM/256GB SSD/13.3 inch/Mac OS/Xám)\r\nApple Macbook Pro 13 Touchbar MR9Q2 (i5 2.3Ghz/8GB RAM/256GB SSD/13.3 inch/Mac OS/Xám)\r\nApple Macbook Pro 13 Touchbar MR9Q2 (i5 2.3Ghz/8GB RAM/256GB SSD/13.3 inch/Mac OS/Xám)\r\nApple Macbook Pro 13 Touchbar MR9Q2 (i5 2.3Ghz/8GB RAM/256GB SSD/13.3 inch/Mac OS/Xám)\r\nApple Macbook Pro 13 Touchbar MR9Q2 (i5 2.3Ghz/8GB RAM/256GB SSD/13.3 inch/Mac OS/Xám)               \r\nMã SP: LTMA029\r\nĐánh giá:\r\n0\r\nBình luận: 0\r\nLượt xem: 6021\r\nThông số sản phẩm\r\nBộ vi xử lý Intel Core i5 Quad core 2.3Ghz /8MB cache\r\nBộ nhớ trong 8GB LP DDR3\r\nVGA Intel Iris Plus 655\r\nỔ cứng 256GB SSD\r\nỔ quang • Không\r\nCard Reader • Không'),
(9, 2, 'Laptop Workstation Dell Precision 7720', 'https://hanoicomputercdn.com/media/product/44303_laptop_workstation_dell_precision_7720_xeon_e3_1535m_v6_64gb_ram_1tb_ssd_173_fhd_win_10_pro_4.png', 18900000, 'Bộ vi xử lý Intel Xeon E3 1535M V6\r\nChipset Intel Mobile CM238\r\nBộ nhớ trong (RAM) 64GB (4x16GB) RAM DDR4\r\nVGA Nvidia Quadro P5000\r\nỔ cứng 1TB SSD\r\nSD, SDHC, SDXC, supporting up to 2TB'),
(10, 1, 'PC GAMING LION 011', 'https://hanoicomputercdn.com/media/product/57742_pc_gaming_lion_011.jpg', 14799000, 'CPU: Intel Pentium G6400\r\nRAM: 8GB DDR4\r\nSSD: 240GB\r\nGPU: GTX 1650\r\nPSU: 500w'),
(11, 1, 'PC GAMING EAGLE 005', 'https://hanoicomputercdn.com/media/product/58963_pc_gaming_eagle_005.jpg', 100900000, 'Mainboard	Gigabyte X570 AORUS ELITE	\r\nCPU	AMD Ryzen 9 5950X (3.4 GHz Upto 4.9GHz / 72MB / 16 Cores, 32 Threads / 105W / Socket AM4)	\r\nRAM	Ram Corsair Vengeance PRO RGB 64GB (4x16GB) DDR4 3600MHz\r\nSSD	SSD WD SN850 Black 1TB M.2 2280 PCIe NVMe 4x4 (Đọc 7000MB/s - Ghi 4100MB/s)	\r\nVGA	Card Gigabyte RX 6800 XT GAMING OC	'),
(12, 2, 'Laptop Acer Gaming Nitro 5 Eagle AN515-57-51G6', 'https://hanoicomputercdn.com/media/product/60018_acer_frame.jpg', 25599000, 'CPU: Intel core i5 11400H\r\nRAM: 8GB\r\nỔ cứng: 512GB SSD\r\nVGA: NVIDIA RTX3050 4G\r\nMàn hình: 15.6 inch FHD 144Hz\r\nBàn phím: có led'),
(13, 2, 'Laptop Acer Gaming Predator Triton 500 PT515-52-78PN', 'https://hanoicomputercdn.com/media/product/52053_acer_frame.jpg', 70600000, 'CPU: Intel Core i7 10875H\r\nRAM: 32GB\r\nỔ cứng: 1TB SSD\r\nVGA: NVIDIA RTX 2070 Super 8G\r\nMàn hình: 15.6 inch FHD 300Hz GSYNC\r\nHĐH: Win 10'),
(14, 1, 'PC Live Stream S004 ', 'https://hanoicomputercdn.com/media/product/53659_pc_live_stream_s004.png', 30799000, 'CPU: CRyzen 7 3700X\r\nRAM: 16GB\r\nCapture card: AverMedia Live Gamer 4K - GC573\r\nVGA: GTX1650\r\nỔ cứng: 500GB SSD\r\nNguồn 600w'),
(15, 1, 'PC ENTHUSIAST GAMING LIMITED 004', 'https://hanoicomputercdn.com/media/product/54394_pc_gaming_enthusiast_limited_004.jpg', 149000000, 'CPU: AMD Ryzen Threadripper 3960X\r\nMainboard: ASUS ROG ZENITH II EXTREME TRX40\r\nRAM: 64GB RAM\r\nỔ cứng: 2TB SSD\r\nVGA: NVIDIA 2080TI\r\nNguồn: 1600W');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `image`, `email`, `password`, `phone`, `address`, `role`) VALUES
(1, 'Siêu', 'https://i.pinimg.com/474x/4e/57/06/4e570658c9075309e3e012fc364d6859.jpg', 'sieu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0779237088', 'HN', 0),
(2, 'Dark', 'https://itcafe.vn/wp-content/uploads/2021/01/anh-gai-xinh-4.jpg', 'hoaht@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '0973301302', 'Nam Tào', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pro_category_on` (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_pro_category_on` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
