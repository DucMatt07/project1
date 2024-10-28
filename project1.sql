-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2024 at 11:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `icon`) VALUES
(1, 'Điện thoại  ', 'fa-mobile'),
(2, '\r\n                                Laptop', 'fa-laptop'),
(3, '\r\nTablet', 'fa-tablet'),
(4, '\r\n                                Đồng hồ,camera', 'fa-camera'),
(5, '\r\n                   Gia dụng, Smarthome', 'fa-house-signal'),
(6, '\r\nÂm thanh', 'fa-headphones'),
(7, '\r\n                                PC, Màn hình, Máy in', 'fa-desktop'),
(8, ' Tivi', ' fa-tv'),
(9, '\r\n                                Thu cũ đổi mới', 'fa-comments-dollar'),
(10, '\r\n                                Tin tức công nghệ', 'fa-newspaper');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `user_id`, `product_id`) VALUES
(1, 'Đây là comment mới ', 2, 1),
(3, 'Sản phẩm này có còn hàng không ạ', 2, 7),
(4, 'Sản phẩm này có còn hàng không vậy ạ', 1, 1),
(5, 'Sản phẩm này còn hàng', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_sale` int(11) NOT NULL,
  `product_img` varchar(255) DEFAULT NULL,
  `product_old_price` varchar(255) NOT NULL,
  `product_new_price` varchar(255) NOT NULL,
  `product_smember` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `product_type_id` int(11) NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  `content3` text NOT NULL,
  `product_details` text NOT NULL DEFAULT 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_sale`, `product_img`, `product_old_price`, `product_new_price`, `product_smember`, `view`, `product_type_id`, `content1`, `content2`, `content3`, `product_details`) VALUES
(1, 'iPhone 15 Pro Max 256GB | Chính hãng VN/A                            ', 17, 'iphone-15-pro-max_3.webp', '                                    34.990.000                                ', '                                    28.990.000                              ', 290000, 41, 1, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Pro Max thu hút với màn hình Super Retina XDR 6.7 inch sắc nét, mặt lưng titanium bền bỉ và thiết kế viền mỏng tinh tế. Được trang bị chip A17 Pro mạnh mẽ, iPhone 15 Pro Max mang lại hiệu suất vượt trội cho mọi tác vụ nặng. Điểm nhấn của thiết bị là cổng sạc USB-C và tính năng sạc nhanh hiện đại. Phiên bản này có 4 màu đẳng cấp: titan tự nhiên, titan xanh, titan đen và titan trắng. Xem thêm các thông tin chi tiết khác về iPhone 15 Pro Max ngay sau đây!'),
(6, '\r\niPhone 13 128GB | Chính hãng VN/A\r\n                                ', 27, 'iphone-13_2_.webp', '\r\n                                    18.990.000\r\n                                ', '\r\n                                    13.990.000\r\n                                ', 140000, 3, 1, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 13 ghi điểm với màn hình Super Retina XDR 6.1 inch sắc nét và thiết kế viền phẳng hiện đại. Được trang bị chip A15 Bionic mạnh mẽ, iPhone 13 mang đến hiệu năng vượt trội và khả năng tiết kiệm pin ấn tượng. Điện thoại hỗ trợ 5G và đi kèm với cổng sạc Lightning cùng khả năng sạc nhanh. iPhone 13 có 5 phiên bản màu tươi trẻ: đỏ, xanh dương, hồng, trắng, và đen, phù hợp với nhiều đối tượng khách hàng. Xem thêm các thông tin hữu ích về iPhone 13 ngay sau đây!'),
(7, 'Samsung Galaxy S24 Ultra 12GB 256GB                                ', 17, '\r\nss-s24-ultra-xam-222.webp                        \r\n                                ', '                                    33.990.000                                ', '                                    29.990.000                                ', 300000, 55, 2, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'Samsung Galaxy S24 nổi bật với màn hình Dynamic AMOLED 6.8 inch sắc nét, mặt lưng kính cường lực sang trọng và chip Snapdragon 8 Gen 3 mạnh mẽ, mang lại hiệu năng vượt trội. Cổng sạc USB-C hỗ trợ sạc nhanh, giúp thiết bị sẵn sàng cho mọi tác vụ chỉ trong thời gian ngắn. Ngoài ra, Galaxy S24 còn có 5 phiên bản màu hiện đại, phù hợp với nhiều đối tượng người dùng: bạc, đen, xanh dương, tím và xanh lá. Khám phá thêm các thông tin hữu ích về Samsung Galaxy S24 ngay sau đây!'),
(8, '\r\niPhone 15 128GB | Chính hãng VN/A\r\n                                ', 17, 'iphone-15-plus_1__1.webp', '\r\n                                    22.990.000\r\n                                ', '\r\n                                    19.290.000\r\n                               ', 193000, 0, 1, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'),
(9, 'Samsung Galaxy A15 LTE 8GB 128GB\r\n                                ', 17, '\r\ngalaxy-a15-xanh-01.webp\r\n                                ', '\r\n                                    4.990.000\r\n                                ', '\r\n                                    4.490.000\r\n                                ', 269000, 1, 2, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'Samsung Galaxy A15 LTE nổi bật với màn hình Infinity-V 6.5 inch HD+, mang đến trải nghiệm hiển thị rộng rãi và rõ nét. Được trang bị chip MediaTek Helio mạnh mẽ, thiết bị xử lý mượt mà các tác vụ hàng ngày và hỗ trợ kết nối LTE ổn định. Điểm nhấn của Galaxy A15 là viên pin 5000mAh cho thời gian sử dụng dài lâu, cùng cổng sạc USB-C tiện lợi. Galaxy A15 LTE có các phiên bản màu sắc trẻ trung như đen, trắng, xanh dương, và xanh lá, phù hợp với nhiều phong cách người dùng. Khám phá thêm thông tin chi tiết về Samsung Galaxy A15 LTE ngay sau đây!'),
(10, '\r\nApple Macbook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam\r\n                                ', 17, 'macbook_air_m2_1_1.webp', '\r\n                                    32.990.000\r\n                                ', '\r\n                                    23.990.000\r\n                                ', 290000, 2, 14, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'),
(11, '\r\nApple MacBook Air M1 256GB 2020 I Chính hãng Apple Việt Nam\r\n                                ', 17, 'air_m2.webp', '\r\n                                    22.990.000\r\n                               ', '\r\n                                    18.690.000\r\n                                ', 300000, 0, 14, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'),
(12, '\r\n Macbook Air M3 13 inch 2024 8GB - 256GB | Chính hãng Apple Việt Nam\r\n                                ', 17, 'apple_m3_slot.webp', '\r\n                                    27.990.000\r\n                                ', '\r\n                                    27.390.000\r\n                                ', 193000, 0, 14, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'),
(13, '\r\nLaptop Lenovo LOQ 15IAX9 83GS001RVN\r\n                                ', 17, 'laptop-lenovo-loq-15iax9-83gs001rvn-thumbnails_1.webp', '\r\n                                    22.490.000\r\n                                ', '\r\n                                    20.990.000\r\n                                ', 193000, 0, 17, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'),
(14, '\r\n Apple Macbook Air M2 2022 16GB 256GB I Chính hãng Apple Việt Nam\r\n                                ', 17, 'air_m2_16gb.webp', '\r\n                                    39.990.000\r\n                                ', '\r\n                                    29.490.000\r\n                                ', 300000, 0, 14, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'),
(15, 'iPad Gen 10 10.9 inch 2022 Wifi 64GB I Chính hãng Apple Việt Nam', 24, 'ipad-10-9-inch-2022.webp', '\r\n 12.990.000\r\n      ', '\r\n      9.890.000\r\n    ', 297000, 0, 27, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'),
(16, 'Xiaomi Pad 6 8GB 128GB - Chỉ có tại CellphoneS', 18, 'mi-pad-6-cps-doc-quyen.png.webp', '\r\n9.490.000\r\n      ', '7.790.000', 200000, 0, 32, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'),
(17, 'iPad 10.2 2021 WiFi 64GB | Chính hãng Apple Việt Nam', 21, 'ipad-10-2-inch-2021_1.webp', '\r\n8.990.000\r\n      ', '\r\n 7.090.000\r\n    ', 213000, 2, 25, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'),
(18, 'iPad Air 5 10.9 inch (2022) WIFI 64GB I Chính hãng Apple Việt Nam', 13, 'ipad-air-5.webp', '\r\n16.990.000\r\n      ', '\r\n14.790.000\r\n    ', 148000, 0, 27, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'),
(19, 'Xiaomi Redmi Pad SE 6GB 128GB', 12, 'xiaomi-redmi-pad-se_1_3.webp', '\r\n5.490.000\r\n      ', '\r\n4.840.000\r\n    ', 48000, 0, 32, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'),
(21, 'iPhone 14 128GB  | Chính hãng VN/A', 27, 'iphone-14_1.webp', '19.990.000       ', '17.190.000', 270000, 5, 1, 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà.', 'Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 'Nâng tầm nhiếp ảnh di động với hệ thống camera tiên tiến, cho ra đời những bức ảnh và video chất lượng chuyên nghiệp.', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!'),
(23, 'Apple MacBook Air M1 256GB 2020 I Chính hãng Apple Việt Nam ', 20, 'macbook_5_1.webp', '22.990.000      ', '18.490.000    ', 300000, 1, 14, 'Phù hợp cho lập trình viên, thiết kế đồ họa 2D, dân văn phòng\r\n        ', '  Hiệu năng vượt trội - Cân mọi tác vụ từ word, exel đến chỉnh sửa ảnh trên các phần mềm như AI, PTS', 'Trang bị SSD 256GB - Cho thời gian khởi động nhanh chóng, tối ưu hoá thời gian load ứng dụng\r\n        ', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu  ấn tượng, chip A16 Bionic  mạnh mẽ cùng cổng sạc USB-C  cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel  thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `type_name`, `category_id`) VALUES
(1, 'Iphone', 1),
(2, 'Samsung', 1),
(3, 'Xiaomi', 1),
(4, 'OPPO', 1),
(5, 'Vivo', 1),
(6, 'Realme', 1),
(7, 'ASUS', 1),
(8, 'TECHNO', 1),
(9, 'Nokia', 1),
(10, 'Infinix', 1),
(11, 'Oneplus', 1),
(13, 'Xem tất cả', 1),
(14, 'Macbook', 2),
(15, 'Asus', 2),
(16, 'MSI', 2),
(17, 'Lenovo', 2),
(18, 'HP', 2),
(19, 'Acer', 2),
(20, 'Dell', 2),
(21, 'Huawei', 2),
(22, 'Gigabyte', 2),
(23, 'Surface', 2),
(24, 'Xem tất cả', 2),
(25, 'iPad 10.2 2021', 3),
(26, 'Tab S9', 3),
(27, 'iPad Air', 3),
(28, 'iPad Pro', 3),
(29, 'Samsung', 3),
(30, 'TCL', 3),
(31, 'Lenovo', 3),
(32, 'Xiaomi', 3),
(33, 'Xem tất cả', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `slider_product_name` text NOT NULL,
  `content` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `slider_product_name`, `content`, `product_id`) VALUES
(1, 'nang-cap-iphone-15-compatibility.webp', 'Iphone 15 Pro Max            ', 'Giá tốt chốt ngay                                                            ', 1),
(2, 'slider-2.webp', 'POCO M6', 'Giá chỉ 3.89 triệu', 6),
(3, 'slider-3.webp', 'ASUS TUF GAMING', 'Giá chỉ 16.49 triệu', 7),
(4, 'slider-4.webp', 'JBL T115BT', 'Giá chỉ 250k', 8),
(5, 'slider-5.webp', 'PHILIPS PPM3522', 'Giá chỉ 1.79 triệu', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT 0,
  `avatar` varchar(255) DEFAULT 'user-img-default.png',
  `email` varchar(255) NOT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_password`, `role`, `avatar`, `email`, `address`) VALUES
(1, 'admin', 'taducmanh1234', 1, 'how-to-stop-being-a-people-pleaser-1_1.jpg', 'admin123@gmail.com', NULL),
(2, 'taducmanh1234', 'taducmanh1234', 0, 'how-to-stop-being-a-people-pleaser-1_1.jpg', 'test@gmail.com\r\n', 'Khai Quang, Vĩnh Yên, Vĩnh Phúc'),
(5, 'admin1', '123456', 0, 'user-img-default.png', 'yenthcskq@gmail.com', NULL),
(6, 'admin2', '123456', 0, 'user-img-default.png', 'test12@gmail.com', NULL),
(7, 'admin3', '123456', 0, 'user-img-default.png', 'test13@gmail.com', NULL),
(9, 'taducmanh12345', 'taducmanh1234', 0, 'user-img-default.png', 'duc762621@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_comment_user` (`user_id`),
  ADD KEY `FK_comment_product` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_products_product_type` (`product_type_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product_type_category` (`category_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_sliders_products` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_comment_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `FK_comment_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_product_type` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`id`);

--
-- Constraints for table `product_type`
--
ALTER TABLE `product_type`
  ADD CONSTRAINT `FK_product_type_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `FK_sliders_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
