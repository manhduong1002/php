-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 06:21 AM
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
(1, 2017, 3, 7, 1, 5, '02/06/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config_detail`
--

CREATE TABLE `tbl_config_detail` (
  `id` int(10) NOT NULL,
  `level` int(2) NOT NULL,
  `thisconfig` int(2) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_config_detail`
--

INSERT INTO `tbl_config_detail` (`id`, `level`, `thisconfig`, `name`) VALUES
(1, 1, 1, 'Quý I'),
(2, 1, 2, 'Quý II'),
(3, 1, 3, 'Quý III'),
(4, 1, 4, 'Quý IV'),
(5, 2, 1, 'Tháng 1'),
(6, 2, 2, 'Tháng 2'),
(7, 2, 3, 'Tháng 3'),
(8, 2, 4, 'Tháng 4'),
(9, 2, 5, 'Tháng 5'),
(10, 2, 6, 'Tháng 6'),
(11, 2, 7, 'Tháng 7'),
(12, 2, 8, 'Tháng 8'),
(13, 2, 9, 'Tháng 9'),
(14, 2, 10, 'Tháng 10'),
(15, 2, 11, 'Tháng 11'),
(16, 2, 12, 'Tháng 12'),
(17, 3, 1, 'Tuần I'),
(18, 3, 2, 'Tuần II'),
(19, 3, 3, 'Tuần III'),
(20, 3, 4, 'Tuần IV'),
(21, 3, 5, 'Tuần V'),
(22, 4, 2, 'Thứ 2'),
(23, 4, 3, 'Thứ 3'),
(24, 4, 4, 'Thứ 4'),
(25, 4, 5, 'Thứ 5'),
(26, 4, 6, 'Thứ 6'),
(27, 4, 7, 'Thứ 7'),
(28, 4, 8, 'Chủ nhật');

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
(2, 'Nem thính', 'Khoái khẩu', '', 'Bột thính, đậu phụ thái cực nhỏ,nấm đùi gà chút gia vị\r\nRau sống hoặc lá sung, lá mơ, tương bần              ', 'Đậu phụ đưa vào rán mềm mềm vừa phải, để nguội thái nhỏ sợi  \r\nNấm đùi gà thái sợi sào qua ngấm gia vị\r\nTrộn chung với thính một đợt\r\nCho gia vị\r\nSau đó trộn đi trộn lại\r\nGói lá sau đó chấm tương bần ăn ôi ngon khoái khẩu quá đi                       ', 'Thính bột, đậu phụ, nấm đùi gà, lá sung(mơ), rau sống'),
(3, 'Nem rán', 'Khoái khẩu', '', '2 của cà rốt to (4 củ nhỏ)\n1 củ xu hào nhỏ\n5 nghìn váng đậu\n2 nấm đùi gà\n1 bát con đỗ xanh\n1 nắm miến\n7 cái mộc nhĩ\n10 cây nấm hương\nMột bó rau thơm, xương sông nếu có                           ', 'tất cả nguyên liệu thái nhỏ, miến ngâm kĩ, mộc nhĩ ngâm kĩ, nấm hương ngâm kĩ, váng đậu ngâm nước lạnh kĩ, thái nhỏ trộn đều và cho chút gia vị muối, hạt nêm... nhạt nhạt\r\n\r\nQuấn nem để vô ngăn đá tủ lạnh\r\n\r\n=> Lấy ra rán thì ăn dần lửa nhỏ', '2 của cà rốt to (4 củ nhỏ) 1 củ xu hào nhỏ 5 nghìn váng đậu 2 nấm đùi gà 1 bát con đỗ xanh 1 nắm miến 7 cái mộc nhĩ 10 cây nấm hương Một bó rau thơm, xương sông nếu có                           ');

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
(9, 'Rau sống', 'Rau sống đầy đủ', 'Xanh', 'Vừa phải'),
(10, 'Lá xương sông', 'Lá xương sông xanh', 'Xanh', 'Vừa phải'),
(11, 'Cà rốt', 'Cà rốt to đẹp', 'Da cam', 'Vừa phải'),
(12, 'Củ xu hào', 'Củ xu hào to đep', 'Xanh', 'Vừa phải'),
(13, 'Váng đậu', 'Váng đậu vàng đẹp', 'Vàng', 'Vừa phải'),
(14, 'Đỗ xanh (Đậu xanh)', 'Đậu xanh đẹp', 'Xanh', 'Cao'),
(15, 'Miến', 'Nắm miến đẹp trắng', 'Trắng', 'Vừa phải'),
(16, 'Nấm hương', 'Nấm hương thơm đẹp', 'Đen', 'Vừa phải');

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
(5, 1, '22:00:00', '30/07/2017', '05:30:00', '01/06/2017', 'Quý II', 'Vực dậy tiếng Trung', 1, 3, 2),
(6, 2, '22:00:00', '30/06/2017', '05:30:00', '01/06/2017', 'Tháng 6', 'Thành thạo 4 loại của một từ âm bắc kinh, âm hán việt, chữ cứng và nghĩa', 5, 3, 6),
(7, 1, '22:00:00', '15/08/2017', '05:30:00', '01/06/2017', 'Quý II', 'Mua tủ lạnh + Giàn tập thể hình', 4, 3, 2),
(8, 2, '22:00:00', '30/06/2017', '05:30:00', '01/06/2017', 'Tháng 6', 'Mua tủ lạnh', 7, 3, 6),
(9, 3, '22:00:00', '04/06/2017', '05:30:00', '01/06/2017', 'Tuần I', 'Mua tủ lạnh', 8, 3, 1),
(10, 3, '22:00:00', '04/06/2017', '05:30:00', '29/05/2017', 'Tuần I', 'Soạn viết tiếng trung, học thuộc hai đoạn khai thị tiếng trung', 6, 3, 1),
(11, 1, '22:00:00', '31/07/2017', '05:30:00', '29/05/2017', 'Quý II', 'Khai thị, tam bảo tự tin, soạn 10 điều đại nguyện, diễn lễ', 2, 3, 2),
(12, 2, '22:00:00', '30/06/2017', '05:30:00', '29/05/2017', 'Tháng 6', 'Soạn diễn lễ, 10 điều đại nguyện ôn khai thị', 11, 3, 6),
(13, 3, '22:00:00', '04/06/2017', '05:30:00', '29/05/2017', 'Tuần I', 'Soạn diễn lễ, dàn ý 10 điều đại nguyện', 12, 3, 1),
(14, 1, '22:00:00', '30/07/2017', '05:30:00', '29/05/2017', 'Quý II', 'Chuẩn bị tốt mọi thứ trước khi thực hiện', 4, 3, 2),
(15, 2, '22:00:00', '30/06/2017', '05:30:00', '29/05/2017', 'Tháng 6', 'Chuẩn bị tốt mọi thứ trước khi thực hiện', 14, 3, 6),
(16, 3, '22:00:00', '04/06/2017', '05:30:00', '29/05/2017', 'Tuần I', 'Chuẩn bị tốt mọi thứ trước khi thực hiện', 15, 3, 1),
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
(35, 1, '22:00:00', '31/08/2017', '05:30:00', '01/06/2017', 'Quý II', 'Thiết lập các tên miền và source web cho chân ngoài', 34, 3, 2),
(36, 2, '22:00:00', '30/06/2017', '05:30:00', '01/06/2017', 'Tháng 6', 'Thiết lập tên miền web thanhtungitc.com và source', 35, 3, 6),
(37, 3, '22:00:00', '04/06/2017', '05:30:00', '01/06/2017', 'Tuần I', 'Thiết lập tên miền thanhtungitc.com', 36, 3, 1),
(38, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Viết source cho tên miền thanhtungitc.com', 36, 3, 2),
(39, 4, '22:00:00', '02/06/2017', '05:30:00', '02/06/2017', 'Thứ 6', 'Soạn 20 từ tiếng trung trong khai thị', 10, 3, 6),
(40, 4, '22:00:00', '02/06/2017', '05:30:00', '02/06/2017', 'Thứ 6', 'Học thuộc đoạn 2 khai thị', 10, 3, 6),
(41, 1, '22:00:00', '30/07/2017', '05:30:00', '01/06/2017', 'Quý II', 'Chốt người yêu lý tưởng trong lòng mình', 3, 3, 2),
(42, 2, '22:00:00', '30/06/2017', '05:30:00', '01/06/2017', 'Tháng 6', 'Gặp và chào hỏi tìm hiểu những người con gái trong làng', 41, 3, 6),
(43, 3, '22:00:00', '04/06/2017', '05:30:00', '01/06/2017', 'Tuần I', 'Cuối tuần đi bộ khắp làng để dò hỏi đối tượng cần gặp', 42, 3, 1),
(44, 4, '18:00:00', '03/06/2017', '16:30:00', '03/06/2017', 'Thứ 7', 'Đi dạo một vòng quanh làng', 43, 3, 7),
(45, 4, '18:00:00', '04/06/2017', '16:30:00', '04/06/2017', 'Chủ nhật', 'Đi dạo một vòng quanh làng', 43, 3, 8),
(46, 3, '18:00:00', '04/06/2017', '05:30:00', '01/06/2017', 'Tuần I', 'Dọn dẹp nhà cửa', 15, 3, 1),
(47, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Dọn phòng làm việc', 46, 3, 8),
(48, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Dọn phỏng ngủ', 46, 3, 8),
(49, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Dọn nhà vệ sinh', 46, 3, 8),
(50, 4, '22:00:00', '03/06/2017', '05:30:00', '03/06/2017', 'Thứ 7', 'Viết source cho phần nấu ăn', 16, 3, 7),
(51, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Học thuộc đoạn 3 tiếng trung', 10, 3, 8),
(52, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Học thuộc đoạn 4 tiếng trung', 10, 3, 8),
(53, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Học thuộc đoạn 5 tiếng trung', 10, 3, 8),
(54, 4, '22:00:00', '04/06/2017', '05:30:00', '04/06/2017', 'Chủ nhật', 'Chuẩn bị các đoạn tiếp theo của tiếng trung', 16, 3, 8),
(55, 0, '22:00:00', '30/11/2017', '05:30:00', '05/06/2017', 'Năm 2017', 'Ít nhất 67 kg', 0, 1, 2017),
(56, 1, '22:00:00', '30/09/2017', '05:30:00', '01/07/2017', 'Quý III', 'Ít nhất 65 kg', 55, 1, 3),
(57, 2, '22:00:00', '30/06/2017', '05:30:00', '05/06/2017', 'Tháng 6', 'Ít nhất 58 kg', 56, 3, 6),
(58, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Ăn đầy đủ dưỡng chất', 57, 3, 2),
(60, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Học viết tiếng trung', 6, 3, 2),
(61, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Soạn tiếng trung ', 6, 3, 2),
(62, 4, '22:00:00', '05/06/2017', '05:30:00', '05/06/2017', 'Thứ 2', 'Ăn sữa chua, Uống sữa ngô, Ăn sữa chua, Uống sữa ngô, Uống sữa ngô, Tập thể hình', 58, 3, 2),
(63, 4, '22:00:00', '05/06/2017', '05:30:00', '05/06/2017', 'Thứ 2', 'Học viết 5 từ đầu tiên', 60, 3, 2),
(64, 4, '22:00:00', '05/06/2017', '05:30:00', '05/06/2017', 'Thứ 2', 'Soạn câu thứ 2 của Khai thị', 61, 3, 2),
(65, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Học thuộc 5 đoạn khai thị tiếng trung', 6, 3, 2),
(66, 4, '22:00:00', '06/06/2017', '05:30:00', '06/06/2017', 'Thứ 3', 'Học thuộc 5 đoạn khai thị tiếng trung', 65, 3, 3),
(67, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Lấy nguyên liệu nem và chả nấm', 15, 3, 2),
(68, 4, '22:00:00', '11/06/2017', '05:30:00', '11/06/2017', 'Thứ 7', 'Note nguyên liệu Nem và chả Nấm', 67, 3, 7),
(69, 4, '22:00:00', '07/06/2017', '05:30:00', '07/06/2017', 'Thứ 4', 'Học viết 5 từ tiếp theo', 60, 3, 4),
(70, 4, '22:00:00', '07/06/2017', '05:30:00', '07/06/2017', 'Thứ 4', 'Soạn câu thứ 3 của Khai thị', 61, 3, 4),
(71, 1, '22:00:00', '30/11/2017', '05:30:00', '01/09/2017', 'Quý IV', 'Tỏ tình với nàng nhân ngày TẾT TRUNG THU', 3, 0, 4),
(72, 3, '22:00:00', '11/06/2017', '05:30:00', '05/06/2017', 'Tuần II', 'Chuẩn bị tốt mọi thứ trước khi thực hiện', 15, 3, 2),
(73, 4, '22:00:00', '08/06/2017', '05:30:00', '08/06/2017', 'Thứ 5', 'Tâm sự với các vị tiên phật, đi uống nước với Nhân', 72, 3, 5),
(74, 4, '22:00:00', '09/06/2017', '05:30:00', '09/06/2017', 'Thứ 6', 'Đẩy source huuich.com', 38, 3, 6),
(75, 3, '22:00:00', '10/06/2017', '05:30:00', '10/06/2017', 'Tuần II', 'Chốt diễn lễ, 10 điều đại nguyện', 12, 3, 2),
(76, 4, '22:00:00', '10/06/2017', '05:30:00', '10/06/2017', 'Thứ 7', 'Chốt diễn lễ, 10 điều đại nguyện', 75, 3, 7),
(77, 4, '22:00:00', '11/06/2017', '05:30:00', '11/06/2017', 'Chủ nhật', 'Đi siêu thị mua một số đồ', 58, 3, 8),
(78, 4, '22:00:00', '11/06/2017', '05:30:00', '11/06/2017', 'Chủ nhật', 'Học viết tiếng Trung', 60, 3, 8),
(79, 4, '22:00:00', '11/06/2017', '05:30:00', '11/06/2017', 'Chủ nhật', 'Học thuộc các đoạn khai thị tiếng Trung', 65, 3, 8),
(80, 4, '22:00:00', '11/06/2017', '05:30:00', '11/06/2017', 'Chủ nhật', 'Soạn khai thị tiếng Trung', 60, 3, 8),
(81, 1, '22:00:00', '31/08/2017', '05:30:00', '01/07/2017', 'Quý III', 'Độ bố mẹ đi cầu ĐẠO', 2, 0, 3),
(82, 2, '22:00:00', '31/07/2017', '05:30:00', '01/07/2017', 'Tháng 7', 'Thuyết phục bố mẹ đi cầu ĐẠO', 81, 0, 7),
(83, 2, '22:00:00', '31/08/2017', '05:30:00', '01/08/2017', 'Tháng 8', 'Đưa bố mẹ đi cầu ĐẠO', 81, 0, 8),
(84, 3, '22:00:00', '02/07/2017', '05:30:00', '25/06/2017', 'Tuần I', 'Mua chữ tâm, mua tranh Quan Thế Âm Bồ Tát', 82, 0, 1),
(85, 3, '22:00:00', '18/06/2017', '05:30:00', '12/06/2017', 'Tuần III', 'Ôn luyện khai thị, tam bảo', 15, 3, 3),
(86, 3, '22:00:00', '18/06/2017', '05:30:00', '12/06/2017', 'Tuần IV', 'Ôn luyện diễn lễ, 10 điều đại nguyện', 12, 3, 4),
(87, 3, '22:00:00', '18/06/2017', '05:30:00', '12/06/2017', 'Tuần III', 'Học thuộc phật quy lễ tiết phần Lễ Sóc Vọng, ôn lại phần lễ hiến hương', 15, 3, 3),
(88, 3, '22:00:00', '18/06/2017', '05:30:00', '12/06/2017', 'Tuần III', 'Học thuộc 4 đoạn tiếng Trung Khai Thị', 6, 3, 3),
(89, 3, '22:00:00', '18/06/2017', '05:30:00', '12/06/2017', 'Tuần III', 'Ăn đầy đủ dưỡng chất', 57, 3, 3),
(90, 3, '22:00:00', '18/06/2017', '05:30:00', '12/06/2017', 'Tuần III', 'Do hỏi và vào nhà con gái Bác Oanh Tố', 42, 3, 3),
(91, 4, '22:00:00', '12/06/2017', '05:30:00', '12/06/2017', 'Thứ 2', 'Ăn sữa ngô', 89, 3, 2),
(92, 4, '22:00:00', '12/06/2017', '05:30:00', '12/06/2017', 'Thứ 2', 'Ôn tam bảo', 85, 3, 2),
(93, 4, '22:00:00', '12/06/2017', '05:30:00', '12/06/2017', 'Thứ 2', 'Ôn lại các đoạn khai thị Tiếng Trung', 88, 3, 2),
(94, 4, '22:00:00', '13/06/2017', '05:30:00', '13/06/2017', 'Thứ 3', 'Ôn tam bảo', 85, 3, 3),
(95, 4, '22:00:00', '13/06/2017', '05:30:00', '13/06/2017', 'Thứ 3', 'Ôn tập lễ tiết sóc vọng', 87, 3, 3),
(96, 4, '22:00:00', '14/06/2017', '05:30:00', '14/06/2017', 'Thứ 4', 'Học thuộc 4 đoạn tiếng Trung Khai Thị', 88, 3, 4),
(97, 4, '22:00:00', '14/06/2017', '05:30:00', '14/06/2017', 'Thứ 4', 'Ôn phật quy lễ tiết lễ Sóc Vọng', 87, 3, 4),
(98, 4, '22:00:00', '15/06/2017', '05:30:00', '15/06/2017', 'Thứ 5', 'Ăn sữa đậu nành', 89, 3, 5),
(99, 4, '22:00:00', '15/06/2017', '05:30:00', '15/06/2017', 'Thứ 5', 'Học thuộc lễ sóc vọng', 87, 3, 5),
(100, 4, '22:00:00', '15/06/2017', '05:30:00', '15/06/2017', 'Thứ 5', 'Học thuộc 4 đoạn tiếng Trung Khai Thị', 88, 3, 5),
(101, 4, '22:00:00', '16/06/2017', '05:30:00', '16/06/2017', 'Thứ 6', 'Học thuộc 4 đoạn khai thị Tiếng Trung', 88, 3, 6),
(102, 4, '22:00:00', '17/06/2017', '05:30:00', '17/06/2017', 'Thứ 7', 'Học thuộc lễ hiến hương, hiến cung', 87, 3, 7),
(103, 4, '22:00:00', '17/06/2017', '05:30:00', '17/06/2017', 'Thứ 7', 'Mua sữa và một số món rau', 89, 3, 7),
(104, 4, '22:00:00', '17/06/2017', '05:30:00', '17/06/2017', 'Thứ 7', 'Ôn khai thị tam bảo', 85, 3, 7),
(105, 3, '22:00:00', '17/06/2017', '05:30:00', '17/06/2017', 'Tuần III', 'Chuẩn bị source mục tiêu tốt', 15, 3, 3),
(106, 4, '22:00:00', '17/06/2017', '05:30:00', '17/06/2017', 'Thứ 7', 'Hoàn thành code next month', 105, 3, 7),
(107, 4, '22:00:00', '18/06/2017', '05:30:00', '18/06/2017', 'Chủ nhật', 'Vào nhà bác Oanh Tố tìm hiểu con gái bác ấy', 90, 3, 8),
(108, 4, '22:00:00', '18/06/2017', '05:30:00', '18/06/2017', 'Chủ nhật', 'Dọn nhà vệ sinh', 105, 3, 8),
(109, 4, '22:00:00', '18/06/2017', '05:30:00', '18/06/2017', 'Chủ nhật', 'Dọn phòng làm việc', 105, 3, 8),
(110, 4, '22:00:00', '18/06/2017', '05:30:00', '18/06/2017', 'Chủ nhật', 'Ôn tập phật quy lễ tiết', 87, 3, 8),
(111, 4, '22:00:00', '18/06/2017', '05:30:00', '18/06/2017', 'Chủ nhật', 'Học thuộc 4 đoạn khai thị Tiếng Trung', 88, 3, 8),
(112, 0, '22:00:00', '30/11/2017', '05:30:00', '19/06/2017', 'Năm 2017', 'Quan tâm công cuộc dưỡng dục của Thầy Cô giáo', 0, 0, 2017),
(113, 1, '22:00:00', '30/11/2017', '05:30:00', '01/09/2017', 'Quý IV', 'Đến thăm cô Thái nhân ngày nhà giáo Việt Nam', 112, 0, 4),
(114, 0, '22:00:00', '30/11/2018', '05:30:00', '01/01/2018', 'Năm 2018', 'Quan tâm công cuộc dưỡng dục của Thầy Cô giáo', 0, 0, 2018),
(115, 3, '22:00:00', '18/06/2017', '05:30:00', '12/06/2017', 'Tuần III', 'Hoàn thành phần language cho Trung', 15, 3, 3),
(116, 3, '22:00:00', '25/06/2017', '05:30:00', '19/06/2017', 'Tuần IV', 'Tìm hiểu về tranh chữ Tâm và Tranh Quan Âm Bồ Tát', 15, 3, 4),
(117, 3, '22:00:00', '25/06/2017', '05:30:00', '19/06/2017', 'Tuần IV', 'Học viết tiếng Trung', 6, 3, 4),
(118, 3, '22:00:00', '25/06/2017', '05:30:00', '19/06/2017', 'Tuần IV', 'Chốt lại xem đủ cân không có phải sửa gì không :)', 57, 3, 4),
(119, 4, '22:00:00', '18/06/2017', '05:30:00', '18/06/2017', 'Chủ nhật', 'Hoàn thành phần language cho Trung', 115, 3, 8),
(120, 4, '22:00:00', '18/06/2017', '05:30:00', '18/06/2017', 'Chủ nhật', 'Chuẩn bị các phần viết tiếng Trung cho cả tuần sau', 105, 3, 8),
(121, 3, '22:00:00', '25/06/2017', '05:30:00', '19/06/2017', 'Tuần IV', 'Ăn đầy đủ dưỡng chất', 57, 3, 4),
(122, 4, '22:00:00', '20/06/2017', '05:30:00', '20/06/2017', 'Thứ 3', 'Ôn luyện giảng diễn lễ', 86, 3, 3),
(123, 4, '22:00:00', '19/06/2017', '05:30:00', '19/06/2017', 'Thứ 2', 'Ôn lại các từ tiếng Trung từ trước đến nay', 117, 3, 2),
(124, 3, '22:00:00', '25/06/2017', '05:30:00', '19/06/2017', 'Tuần IV', 'Học thuộc 3 đoạn Khai Thị Tiếng Trung', 6, 3, 4),
(125, 4, '22:00:00', '19/06/2017', '05:30:00', '19/06/2017', 'Thứ 2', 'Ôn các đoạn khai thị tiếng trung từ trước đến nay', 124, 3, 2),
(126, 4, '22:00:00', '20/06/2017', '05:30:00', '20/06/2017', 'Thứ 3', 'Học thuộc 3 đoạn Khai Thị Tiếng Trung', 124, 3, 3),
(127, 4, '22:00:00', '21/06/2017', '05:30:00', '21/06/2017', 'Thứ 4', 'Học viết tiếng Trung hằng ngày', 117, 3, 4),
(128, 4, '22:00:00', '21/06/2017', '05:30:00', '21/06/2017', 'Thứ 4', 'Học tiếng trung hàng tuần', 117, 3, 4),
(129, 4, '22:00:00', '23/06/2017', '05:30:00', '23/06/2017', 'Thứ 6', 'Ăn sữa bí ngô', 121, 3, 6),
(130, 1, '22:00:00', '30/09/2017', '05:30:00', '01/07/2017', 'Quý III', 'Thiết lập các tên miền và source web cho chân ngoài', 4, 0, 3),
(131, 2, '22:00:00', '30/07/2017', '05:30:00', '01/07/2017', 'Tháng 7', 'Viết thành công app trò chơi cho Long', 130, 0, 7),
(132, 3, '22:00:00', '02/07/2017', '05:30:00', '26/06/2017', 'Tuần I', 'Tìm hiểu và đẩy quảng cáo vào app android', 131, 0, 1),
(133, 3, '22:00:00', '09/07/2017', '05:30:00', '03/07/2017', 'Tuần II', 'Tạo ảnh gif bằng nhiều ảnh nhỏ (phân ảnh)', 131, 0, 2),
(134, 3, '22:00:00', '16/07/2017', '05:30:00', '10/07/2017', 'Tuần III', 'Hoán vị các ảnh được một ảnh mới, tốc độ của ảnh', 131, 0, 3),
(135, 3, '22:00:00', '23/07/2017', '05:30:00', '17/07/2017', 'Tuần IV', 'Fix bug nếu có và tạo bản verson 1', 131, 0, 4),
(136, 3, '22:00:00', '30/07/2017', '05:30:00', '24/07/2017', 'Tuần V', 'Hoàn thiện và đưa Long bản demo', 131, 0, 5),
(137, 4, '22:00:00', '22/06/2017', '05:30:00', '22/06/2017', 'Thứ 5', 'Tìm hiểu về tranh', 116, 3, 5),
(138, 4, '22:00:00', '24/06/2017', '05:30:00', '24/06/2017', 'Thứ 7', 'Cải thiện source mục tiêu', 124, 3, 7),
(139, 0, '22:00:00', '31/12/2018', '05:30:00', '01/01/2018', 'Năm 2018', 'Phiên dịch tiếng Trung', 0, 0, 2018),
(140, 1, '22:00:00', '30/09/2017', '05:30:00', '01/07/2017', 'Quý III', 'Tăng lương ít nhất 15M', 34, 0, 3),
(141, 1, '22:00:00', '30/09/2017', '05:30:00', '01/07/2017', 'Quý III', 'Có sản phẩm, tăng tiền lương ngoài', 34, 0, 3),
(142, 4, '22:00:00', '24/06/2017', '05:30:00', '24/06/2017', 'Thứ 7', 'Học tiếng Trung', 124, 3, 7),
(143, 3, '22:00:00', '25/06/2017', '05:30:00', '19/06/2017', 'Tuần IV', 'Chuẩn bị tốt mọi thứ trước khi thực hiện', 15, 3, 4),
(144, 4, '22:00:00', '25/06/2017', '05:30:00', '25/06/2017', 'Chủ nhật', 'Dọn nhà vệ sinh, quét phòng, sắp xếp mọi thứ ngăn nắp', 143, 3, 8),
(145, 4, '22:00:00', '25/06/2017', '05:30:00', '25/06/2017', 'Chủ nhật', 'Học thuộc 3 thứ 1 âm bắc kinh, âm hán việt và chữ khai thị', 117, 3, 8),
(146, 4, '22:00:00', '25/06/2017', '05:30:00', '25/06/2017', 'Chủ nhật', 'Học viết chữ tiếng Trung', 117, 3, 8),
(147, 4, '22:00:00', '25/06/2017', '05:30:00', '25/06/2017', 'Chủ nhật', 'Cân nhà bà mười xem có đủ 58 kg không ?', 118, 3, 8),
(148, 2, '22:00:00', '31/07/2017', '05:30:00', '01/07/2017', 'Tháng 7', 'Ít nhất 60 kg', 56, 1, 7),
(149, 3, '22:00:00', '02/07/2017', '05:30:00', '26/06/2017', 'Tuần I', 'Ăn đầy đủ chất dinh dưỡng', 148, 1, 1),
(150, 1, '22:00:00', '30/09/2017', '05:30:00', '01/07/2017', 'Quý III', 'Thành thạo viết tiếng Trung : Âm hán việt, âm bắc kinh, chữ cứng và nghĩa', 1, 1, 3),
(151, 2, '22:00:00', '31/07/2017', '05:30:00', '01/07/2017', 'Tháng 7', 'Tăng cường âm hán việt, âm bắc kinh và nghĩa', 150, 1, 7),
(152, 3, '22:00:00', '02/07/2017', '05:30:00', '26/06/2017', 'Tuần I', 'Tra âm hán việt cho khai thị đạo nghĩa tiếng Trung', 151, 1, 1),
(153, 3, '22:00:00', '02/07/2017', '05:30:00', '26/06/2017', 'Tuần I', 'Học thuộc khai thị tiếng trung 3 đoạn', 151, 1, 1),
(154, 1, '22:00:00', '30/09/2017', '05:30:00', '01/07/2017', 'Quý III', 'Tự tin khai thị Tam Bảo', 2, 0, 3),
(155, 1, '22:00:00', '30/09/2017', '05:30:00', '01/07/2017', 'Quý III', 'Thành công diễn lễ và 10 điều đại nguyện', 2, 1, 3),
(156, 4, '22:00:00', '26/06/2017', '05:30:00', '26/06/2017', 'Thứ 2', 'Ăn sữa đậu nành', 149, 3, 2),
(157, 4, '22:00:00', '26/06/2017', '05:30:00', '26/06/2017', 'Thứ 2', 'Học thuộc khai thị tiếng trung 3 đoạn', 153, 3, 2),
(158, 4, '22:00:00', '27/06/2017', '05:30:00', '27/06/2017', 'Thứ 3', 'Học thuộc khai thị tiếng trung 3 đoạn', 153, 3, 3),
(159, 2, '22:00:00', '31/07/2017', '05:30:00', '01/07/2017', 'Tháng 7', 'Thành thạo diễn lễ, ôn luyện 10 điều đại nguyện', 155, 1, 7),
(160, 3, '22:00:00', '02/07/2017', '05:30:00', '26/06/2017', 'Tuần I', 'Ôn tập diễn lễ', 159, 1, 1),
(161, 4, '22:00:00', '27/06/2017', '05:30:00', '27/06/2017', 'Thứ 3', 'Ôn tập diễn lễ', 160, 3, 3),
(162, 4, '22:00:00', '28/06/2017', '05:30:00', '28/06/2017', 'Thứ 4', 'Ăn bánh', 149, 3, 4),
(163, 4, '22:00:00', '30/06/2017', '05:30:00', '30/06/2017', 'Thứ 6', 'Tra âm hán việt cho khai thị đạo nghĩa tiếng Trung', 153, 0, 6),
(164, 4, '22:00:00', '29/06/2017', '05:30:00', '29/06/2017', 'Thứ 5', 'Tra âm hán việt cho khai thị đạo nghĩa tiếng Trung', 152, 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_config_detail`
--
ALTER TABLE `tbl_config_detail`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tbl_config_detail`
--
ALTER TABLE `tbl_config_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã món ăn', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã nguyên vật liệu', AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_target`
--
ALTER TABLE `tbl_target`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
