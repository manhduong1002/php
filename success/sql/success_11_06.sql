-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2017 at 11:15 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `success`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE `tbl_config` (
  `Id` int(1) NOT NULL,
  `year` int(5) NOT NULL,
  `precious` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `week` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  `thisday` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_config`
--

INSERT INTO `tbl_config` (`Id`, `year`, `precious`, `month`, `week`, `day`, `thisday`) VALUES
(1, 2017, 2, 6, 2, 8, '02/06/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) NOT NULL COMMENT 'Mã món ăn',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nature` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `doing` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `materials` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `name`, `nature`, `image`, `start`, `doing`, `materials`) VALUES
(1, 'Chả lá lốt', 'Khoái khẩu', '', 'Rửa lá lốt sạch, nhưng không vặt cuống đề cuống dài\r\nĐậu phụ 1 2 bánh tùy vào số lượng người ăn\r\nNgâm mộc nhĩ', 'Thái rất nhỏ lá lốt, thái nhỏ mộc nhĩ =>\r\nRầm nát đậu phụ các nguyên liệu được thái cộng thêm cho chút gia vị hạt nêm, muối, tiêu =>\r\nTrộn đều =>\r\n\r\nRán lên, chuẩn bị nước chấm ngon', 'Lá lốt, đậu phụ,mộc nhĩ'),
(2, 'Nem thính', 'Khoái khẩu', '', 'Bột thính, đậu phụ thái cực nhỏ,nấm đùi gà chút gia vị\r\nRau sống hoặc lá sung, lá mơ, tương bần              ', 'Đậu phụ đưa vào rán mềm mềm vừa phải, để nguội thái nhỏ sợi  \r\nNấm đùi gà thái sợi sào qua ngấm gia vị\r\nTrộn chung với thính một đợt\r\nCho gia vị\r\nSau đó trộn đi trộn lại\r\nGói lá sau đó chấm tương bần ăn ôi ngon khoái khẩu quá đi                       ', 'Thính bột, đậu phụ, nấm đùi gà, lá sung(mơ), rau sống');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE `tbl_material` (
  `id` int(10) NOT NULL COMMENT 'Mã nguyên vật liệu',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `selection` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nutrients` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`id`, `name`, `selection`, `color`, `nutrients`) VALUES
(1, 'Rau ngót', 'Rau ngót xanh lá to', 'Xanh', 'Vừa phải'),
(2, 'Lá lốt', 'Lá lốt to, xanh không héo', 'Xanh', 'Vừa phải'),
(3, 'Đậu phụ', 'Đậu phụ cứng, không nát, không chua', 'Trắng', 'Cao'),
(4, 'Mộc nhĩ', 'Mộc nhĩ khô', 'Đen', 'Vừa phải'),
(5, 'Thính (Gạo)', 'Thính bột', 'Trắng', 'Cao'),
(6, 'Nấm đùi gà', 'Nấm đùi gà to', 'Trắng, đen', 'Cao'),
(7, 'Lá sung', 'Lá sung to đẹp ', 'Xanh', 'Vừa phải'),
(8, 'Lá mơ', 'Lá mơ xanh to', 'Xanh', 'Vừa phải'),
(9, 'Rau sống', 'Rau sống đầy đủ', 'Xanh', 'Vừa phải');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_target`
--

CREATE TABLE `tbl_target` (
  `id` int(100) NOT NULL,
  `level` int(2) NOT NULL,
  `expiryDateHours` varchar(100) NOT NULL,
  `expiryDateDay` varchar(20) NOT NULL,
  `startDateHours` varchar(100) NOT NULL,
  `startDateDay` varchar(20) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parentId` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `thisconfig` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_target`
--

INSERT INTO `tbl_target` (`id`, `level`, `expiryDateHours`, `expiryDateDay`, `startDateHours`, `startDateDay`, `title`, `name`, `parentId`, `status`, `thisconfig`) VALUES
(1, 0, '22:00:00', '30/11/2017', '05:30:00', '01/06/2017', 'Năm 2017', 'Hứng khởi học tiếng Trung', 0, 1, 2017),
(2, 0, '22:00:00', '30/11/2017', '05:30:00', '01/06/2017', 'Năm 2017', 'Hứng khởi học Đại Đạo', 0, 1, 2017),
(3, 0, '22:00:00', '30/11/2017', '05:30:00', '01/06/2017', 'Năm 2017', 'Dẫn người yêu về nhà đi chơi TẾT', 0, 1, 2017),
(4, 0, '22:00:00', '30/11/2017', '05:30:00', '01/06/2017', 'Năm 2017', 'Hoàn thành môi trường lý tưởng học tập và làm việc', 0, 1, 2017),
(5, 1, '22:00:00', '30/07/2017', '05:30:00', '01/06/2017', 'Quý II', 'Vực dậy tiếng Trung', 1, 1, 2),
(6, 2, '22:00:00', '30/06/2017', '05:30:00', '01/06/2017', 'Tháng 6', 'Thành thạo 4 loại của một từ âm bắc kinh, âm hán việt, chữ cứng và nghĩa', 5, 1, 6),
(7, 1, '22:00:00', '15/08/2017', '05:30:00', '01/06/2017', 'Quý II', 'Mua tủ lạnh + Giàn tập thể hình', 4, 1, 2),
(8, 2, '22:00:00', '30/06/2017', '05:30:00', '01/06/2017', 'Tháng 6', 'Mua tủ lạnh', 7, 1, 6),
(9, 3, '22:00:00', '04/06/2017', '05:30:00', '01/06/2017', 'Tuần I', 'Mua tủ lạnh', 8, 3, 1),
(10, 3, '22:00:00', '04/06/2017', '05:30:00', '29/05/2017', 'Tuần I', 'Soạn viết tiếng trung, học thuộc hai đoạn khai thị tiếng trung', 6, 1, 1),
(11, 1, '22:00:00', '31/07/2017', '05:30:00', '29/05/2017', 'Quý II', 'Khai thị, tam bảo tự tin, soạn 10 điều đại nguyện, diễn lễ', 2, 1, 2),
(12, 2, '22:00:00', '30/06/2017', '05:30:00', '29/05/2017', 'Tháng 6', 'Soạn diễn lễ, 10 điều đại nguyện ôn khai thị', 11, 1, 6),
(13, 3, '22:00:00', '04/06/2017', '05:30:00', '29/05/2017', 'Tuần I', 'Soạn diễn lễ, dàn ý 10 điều đại nguyện', 12, 3, 1),
(14, 1, '22:00:00', '30/07/2017', '05:30:00', '29/05/2017', 'Quý II', 'Chuẩn bị tốt mọi thứ trước khi thực hiện', 4, 1, 2),
(15, 2, '22:00:00', '30/06/2017', '05:30:00', '29/05/2017', 'Tháng 6', 'Chuẩn bị tốt mọi thứ trước khi thực hiện', 14, 1, 6),
(16, 3, '22:00:00', '04/06/2017', '05:30:00', '29/05/2017', 'Tuần I', 'Chuẩn bị tốt mọi thứ trước khi thực hiện', 15, 1, 1),
(17, 4, '22:00:00', '29/05/2017', '05:30:00', '29/05/2017', 'Thứ 2', 'Chuẩn bị trang phục, cơm, ... trước khi đi làm', 16, 3, 2),
(18, 4, '22:00:00', '29/05/2017', '05:30:00', '29/05/2017', 'Thứ 2', 'Học thuộc đoạn 1 khai thị', 0, 3, 2),
(19, 4, '22:00:00', '29/05/2017', '05:30:00', '29/05/2017', 'Thứ 2', 'Soạn tiếng trung', 10, 3, 2),
(20, 4, '22:00:00', '30/05/2017', '05:30:00', '30/05/2017', 'Thứ 3', 'Chuẩn bị trang phục, cơm, ... trước khi đi làm', 16, 3, 3),
(21, 4, '22:00:00', '30/05/2017', '05:30:00', '30/05/2017', 'Thứ 3', 'Soạn diễn lễ, dàn ý 10 điều đại nguyện', 13, 3, 3),
(22, 4, '22:00:00', '30/05/2017', '05:30:00', '30/05/2017', 'Thứ 3', 'Học thuộc đoạn 2 tiếng trung khai thị', 10, 3, 3),
(23, 4, '22:00:00', '31/05/2017', '05:30:00', '31/05/2017', 'Thứ 4', 'Chuẩn bị trang phục, cơm, ... trước khi đi làm', 16, 3, 4),
(24, 4, '22:00:00', '31/05/2017', '05:30:00', '31/05/2017', 'Thứ 4', 'Chốt dàn ý mưởi điều đại nguyện và chốt bản diễn lễ', 13, 3, 4),
(25, 4, '22:00:00', '01/06/2017', '05:30:00', '01/06/2017', 'Thứ 5', 'Hoàn thành source mục tiêu cá nhân', 16, 3, 5),
(26, 4, '22:00:00', '02/06/2017', '05:30:00', '02/06/2017', 'Thứ 6', 'Hoàn thành source mục tiêu cá nhân', 16, 3, 6),
(28, 4, '22:00:00', '03/06/2017', '05:30:00', '03/06/2017', 'Thứ 7', 'Mua dép chuẩn bị đi dạo ở làng', 16, 3, 7),
(29, 4, '22:00:00', '03/06/2017', '05:30:00', '03/06/2017', 'Thứ 7', 'Mua tủ lạnh', 9, 3, 7),
(30, 4, '22:00:00', '03/06/2017', '05:30:00', '03/06/2017', 'Thứ 7', 'Soạn ra .doc diễn lễ', 13, 3, 7),
(31, 4, '22:00:00', '03/06/2017', '05:30:00', '03/06/2017', 'Thứ 7', 'Soạn ra .doc dàn ý 10 điều đại nguyện', 13, 3, 7),
(32, 4, '22:00:00', '03/06/2017', '05:30:00', '03/06/2017', 'Thứ 7', 'Học thuộc đoạn 2 khai thị', 10, 3, 7),
(33, 4, '22:00:00', '03/06/2017', '05:30:00', '03/06/2017', 'Thứ 7', 'Đăng ký tên miền và hosting cho tên miền thanhtungitc.com', 37, 3, 7),
(34, 0, '22:00:00', '30/11/2017', '05:30:00', '01/06/2017', 'Năm 2017', 'Tăng tiền lương chân trong, và chân ngoài', 0, 1, 2017),
(35, 1, '22:00:00', '31/08/2017', '05:30:00', '01/06/2017', 'Quý II', 'Thiết lập các tên miền và source web cho chân ngoài', 34, 1, 2),
(36, 2, '22:00:00', '30/06/2017', '05:30:00', '01/06/2017', 'Tháng 6', 'Thiết lập tên miền web thanhtungitc.com và source', 35, 1, 6),
(37, 3, '22:00:00', '04/06/2017', '05:30:00', '01/06/2017', 'Tuần I', 'Thiết lập tên miền thanhtungitc.com', 36, 1, 1),
(38, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Viết source cho tên miền thanhtungitc.com', 36, 1, 2),
(39, 4, '22:00:00', '02/06/2017', '05:30:00', '02/06/2017', 'Thứ 6', 'Soạn 20 từ tiếng trung trong khai thị', 10, 3, 6),
(40, 4, '22:00:00', '02/06/2017', '05:30:00', '02/06/2017', 'Thứ 6', 'Học thuộc đoạn 2 khai thị', 10, 3, 6),
(41, 1, '22:00:00', '30/07/2017', '05:30:00', '01/06/2017', 'Quý II', 'Chốt người yêu lý tưởng trong lòng mình', 3, 1, 2),
(42, 2, '22:00:00', '30/06/2017', '05:30:00', '01/06/2017', 'Tháng 6', 'Gặp và chào hỏi tìm hiểu những người con gái trong làng', 41, 1, 6),
(43, 3, '22:00:00', '04/06/2017', '05:30:00', '01/06/2017', 'Tuần I', 'Cuối tuần đi bộ khắp làng để dò hỏi đối tượng cần gặp', 42, 1, 1),
(44, 4, '18:00:00', '03/06/2017', '16:30:00', '03/06/2017', 'Thứ 7', 'Đi dạo một vòng quanh làng', 43, 3, 7),
(45, 4, '18:00:00', '04/06/2017', '16:30:00', '04/06/2017', 'Chủ nhật', 'Đi dạo một vòng quanh làng', 43, 3, 8),
(46, 3, '18:00:00', '04/06/2017', '05:30:00', '01/06/2017', 'Tuần I', 'Dọn dẹp nhà cửa', 15, 1, 1),
(47, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Dọn phòng làm việc', 46, 3, 8),
(48, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Dọn phỏng ngủ', 46, 3, 8),
(49, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Dọn nhà vệ sinh', 46, 3, 8),
(50, 4, '22:00:00', '03/06/2017', '05:30:00', '03/06/2017', 'Thứ 7', 'Viết source cho phần nấu ăn', 16, 3, 7),
(51, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Học thuộc đoạn 3 tiếng trung', 10, 3, 8),
(52, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Học thuộc đoạn 4 tiếng trung', 10, 3, 8),
(53, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Học thuộc đoạn 5 tiếng trung', 10, 3, 8),
(54, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Chuẩn bị các đoạn tiếp theo của tiếng trung', 16, 3, 8),
(55, 0, '22:00:00', '30/11/2017', '05:30:00', '05/06/2017', 'Năm 2017', 'Ít nhất 67 kg', 0, 1, 2017),
(56, 1, '22:00:00', '30/07/2017', '05:30:00', '05/06/2017', 'Quý II', 'Ít nhất 60 kg', 55, 1, 2),
(57, 2, '22:00:00', '30/06/2017', '05:30:00', '05/06/2017', 'Tháng 6', 'Ít nhất 58 kg', 56, 1, 6),
(58, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Ăn đầy đủ dưỡng chất', 57, 1, 2),
(60, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Học viết tiếng trung', 6, 1, 2),
(61, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Soạn tiếng trung ', 6, 1, 2),
(62, 4, '22:00:00', '05/06/2017', '05:30:00', '05/06/2017', 'Thứ 2', 'Ăn sữa chua, Uống sữa ngô, Ăn sữa chua, Uống sữa ngô, Uống sữa ngô, Tập thể hình', 58, 3, 2),
(63, 4, '22:00:00', '05/06/2017', '05:30:00', '05/06/2017', 'Thứ 2', 'Học viết 5 từ đầu tiên', 60, 3, 2),
(64, 4, '22:00:00', '05/06/2017', '05:30:00', '05/06/2017', 'Thứ 2', 'Soạn câu thứ 2 của Khai thị', 61, 3, 2),
(65, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Học thuộc 5 đoạn khai thị tiếng trung', 6, 1, 2),
(66, 4, '22:00:00', '06/06/2017', '05:30:00', '06/06/2017', 'Thứ 3', 'Học thuộc 5 đoạn khai thị tiếng trung', 65, 3, 3),
(67, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Lấy nguyên liệu nem và chả nấm', 15, 1, 2),
(68, 4, '22:00:00', '11/06/2017', '05:30:00', '11/06/2017', 'Thứ 7', 'Note nguyên liệu Nem và chả Nấm', 67, 3, 7),
(69, 4, '22:00:00', '07/06/2017', '05:30:00', '07/06/2017', 'Thứ 4', 'Học viết 5 từ tiếp theo', 60, 3, 4),
(70, 4, '22:00:00', '07/06/2017', '05:30:00', '07/06/2017', 'Thứ 4', 'Soạn câu thứ 3 của Khai thị', 61, 3, 4),
(71, 1, '22:00:00', '30/11/2017', '05:30:00', '01/09/2017', 'Quý IV', 'Tỏ tình với nàng nhân ngày TẾT TRUNG THU', 3, 0, 4),
(72, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Chuẩn bị tốt mọi thứ trước khi thực hiện', 15, 1, 2),
(73, 4, '22:00:00', '08/06/2017', '05:30:00', '08/06/2017', 'Thứ 5', 'Tâm sự với các vị tiên phật, đi uống nước với Nhân', 72, 3, 5),
(74, 4, '22:00:00', '09/06/2017', '05:30:00', '09/06/2017', 'Thứ 6', 'Đẩy source huuich.com', 38, 3, 6),
(75, 3, '22:00:00', '10/06/2017', '05:30:00', '10/06/2017', 'Tuần II', 'Chốt diễn lễ, 10 điều đại nguyện', 12, 1, 2),
(76, 4, '22:00:00', '10/06/2017', '05:30:00', '10/06/2017', 'Thứ 7', 'Chốt diễn lễ, 10 điều đại nguyện', 75, 3, 7),
(77, 4, '22:00:00', '11/06/2017', '05:30:00', '11/06/2017', 'Chủ nhật', 'Đi siêu thị mua một số đồ', 58, 3, 8),
(78, 4, '22:00:00', '11/06/2017', '05:30:00', '11/06/2017', 'Chủ nhật', 'Học viết tiếng Trung', 60, 1, 8),
(79, 4, '22:00:00', '11/06/2017', '05:30:00', '11/06/2017', 'Chủ nhật', 'Học thuộc các đoạn khai thị tiếng Trung', 65, 0, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_target`
--
ALTER TABLE `tbl_target`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã món ăn', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã nguyên vật liệu', AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_target`
--
ALTER TABLE `tbl_target`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
