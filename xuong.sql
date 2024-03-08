-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2024 at 11:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xuong`
--

-- --------------------------------------------------------

--
-- Table structure for table `anhphu`
--

CREATE TABLE `anhphu` (
  `id` int NOT NULL,
  `idSP` int NOT NULL,
  `anhPhu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anhphu`
--

INSERT INTO `anhphu` (`id`, `idSP`, `anhPhu`) VALUES
(25, 34, '../assets/images/anh1.png'),
(26, 34, '../assets/images/anh2.png'),
(27, 34, '../assets/images/anh3.png'),
(28, 34, '../assets/images/anh1.png'),
(29, 35, '../assets/images/anh4.png'),
(30, 35, '../assets/images/anh5.png'),
(31, 35, '../assets/images/anh6.png'),
(32, 35, '../assets/images/anh7.png'),
(33, 36, '../assets/images/anh8.png'),
(34, 36, '../assets/images/anh9.png'),
(35, 36, '../assets/images/anh10.png'),
(36, 36, '../assets/images/anh11.png'),
(37, 37, '../assets/images/anh12.png'),
(38, 37, '../assets/images/anh13.png'),
(39, 37, '../assets/images/anh14.png'),
(40, 37, '../assets/images/anh15.png'),
(41, 38, '../assets/images/anh16.png'),
(42, 38, '../assets/images/anh17.png'),
(43, 38, '../assets/images/anh18.png'),
(44, 38, '../assets/images/anh19.png'),
(45, 39, '../assets/images/anh20.png'),
(46, 39, '../assets/images/anh21.png'),
(47, 39, '../assets/images/anh22.png'),
(48, 39, '../assets/images/anh23.png'),
(49, 40, '../assets/images/anh24.png'),
(50, 40, '../assets/images/anh25.png'),
(51, 40, '../assets/images/anh26.png'),
(52, 40, '../assets/images/anh27.png'),
(53, 41, '../assets/images/anh28.png'),
(54, 41, '../assets/images/anh29.png'),
(55, 41, '../assets/images/anh30.png'),
(56, 41, '../assets/images/anh29.png'),
(57, 48, '../assets/images/anh35.png'),
(58, 48, '../assets/images/anh36.png'),
(59, 48, '../assets/images/anh37.png'),
(60, 48, '../assets/images/anh38.png');

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int NOT NULL,
  `tieuDe` varchar(255) NOT NULL,
  `noiDung` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `hinhAnh` varchar(255) NOT NULL,
  `ngayDang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieuDe`, `noiDung`, `hinhAnh`, `ngayDang`) VALUES
(7, 'Dịch vụ thuê đồ cưới ', 'Trong thế giới đồ cưới của Linh Nga Bridal, nàng sẽ được thưởng thức những “tác phẩm nghệ thuật” kỳ công, được NTK Linh Nga “họa nét” sáng tạo và việc của nàng chỉ cần chọn cho mình bản vẽ mà nàng ưng ý nhất, ướm thử và thuê để có cơ hội diện chúng trong ngày cưới. Nàng hoàn toàn yên tâm vì mỗi thiết kế tại Linh Nga Bridal đều là sản phẩm của sự chăm chút tỉ mẩn, mỗi đường nét, hoa văn đều sống động như thật, ánh lên câu chuyện thần tiên về sự nhảy múa, đùa vui của cỏ cây, hoa lá đồng nội. Mỗi chất liệu được chọn là sự đầu tư và kết hợp độc đáo, để cho ra đời tà váy cưới có độ mềm mại, bồng bềnh hay uyển chuyển cao. Mỗi kiểu dáng đều được khai thác và cách điệu độc đáo, tạo nên những biến tấu khác lạ hoàn toàn các sản phẩm trên thị trường. Nàng sẽ được thoải mái lựa chọn những sản phẩm đặc sắc từ “thiên đường váy cưới”, chỉ có ở Linh Nga.', '../assets/images/anh31.png', '2024-01-26 13:15:34'),
(8, 'Đến với Linh Nga Bridal', 'Là thương hiệu cưới lâu đời, có kinh nghiệm và độ uy tín cao trên thị trường, Linh Nga Bridal tự hào đem đến dịch vụ thuê và may đồ cưới chất lượng, có tâm và có tầm, giúp nàng dâu có được diện mạo rực rỡ nhất trong ngày trọng đại. Nàng còn thắc mắc gì về dịch vụ thuê và may đồ cưới thì đừng ngần ngại giải bày tại hotline hoặc đến trực tiếp cửa hàng để đội ngũ tư vấn nhà Linh Nga được tận tình giải đáp, giúp nàng có được giải pháp cưới tối ưu hơn, góp phần để ngày cưới thêm trọn vẹn và tràn ngập hạnh phúc, nàng nhé!.\r\nLinh Nga Bridal đã cung cấp thông tin về dịch vụ thuê và may đồ cưới cùng bảng giá thuê váy cưới trên website. Nàng có thể đến Store váy cưới của Linh Nga Bridal hoặc gọi điện thoại qua số hotline 028.6683.5933 để nhận được tư vấn.', '../assets/images/anh32.png', '2024-01-26 13:17:04'),
(9, 'Giới thiệu về Molla', 'Là nàng dâu thời kỳ hiện đại, mọi cô gái đều mong muốn trở thành bản thể đẹp đẽ và kiều diễm nhất trong ngày vui của mình. Tuy nhiên, điều đó phải gắn liền với sự tiện lợi, dễ dàng và nhanh chóng để phù hợp với sự phát triển hiện nay. Trong sự kiện đặc biệt cuộc đời, việc chuẩn bị trang phục cưới trở thành những trải nghiệm đáng nhớ hơn cả. Hãy để Linh Nga Bridal giúp bạn tạo ra những dấu ấn hoàn hảo thông qua dịch vụ thuê và may đồ cưới chuyên nghiệp và đẳng cấp. Linh Nga sẽ khiến cho các nàng dâu có được những kỉ niệm đáng nhớ mà không cần tốn quá nhiều thời gian, công sức và tài chính. Cùng tham khảo xem dịch vụ thuê và may đồ cưới tại Linh Nga Bridal có gì nhé!', '../assets/images/anh33.png', '2024-01-26 13:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `idsp` int NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `danhgia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ngaybinhluan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `camnhan` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `idsp`, `taikhoan`, `danhgia`, `ngaybinhluan`, `camnhan`) VALUES
(6, 31, 'ok', 'Sản phẩm đúng với mô tả. Sẽ quay lại ủng hộ shop', '2024-01-25 10:13:02', 'Bình thường'),
(11, 40, 'ok', 'Sản phẩm đúng với mô tả. Sẽ quay lại ủng hộ shop', '2024-01-26 13:26:37', 'Rất tuyệt'),
(12, 39, 'ok', 'rất tuyệt vời', '2024-01-26 13:26:45', 'Rất tuyệt'),
(13, 37, 'ok', 'ok', '2024-01-26 13:26:58', 'Rất tuyệt'),
(14, 40, 'ok', 'ok', '2024-01-29 16:41:04', 'Rất tuyệt');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten`) VALUES
(23, 'LUXURY'),
(24, 'LITIMED '),
(25, 'GARECA '),
(26, 'ÁO CHOÀNG');

-- --------------------------------------------------------

--
-- Table structure for table `donthue`
--

CREATE TABLE `donthue` (
  `id` int NOT NULL,
  `idSP` int NOT NULL,
  `ngayThue` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `trangThai` tinyint NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `diaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sdt` int NOT NULL,
  `ghiChu` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donthue`
--

INSERT INTO `donthue` (`id`, `idSP`, `ngayThue`, `trangThai`, `ten`, `diaChi`, `sdt`, `ghiChu`) VALUES
(17, 31, '2024-01-18 03:03:46', 2, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(18, 31, '2024-01-25 11:10:00', 1, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(19, 32, '2024-01-25 11:10:08', 1, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(20, 33, '2024-01-25 11:35:51', 1, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(21, 40, '2024-01-26 06:23:46', 2, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(22, 40, '2024-01-26 06:23:50', 3, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(23, 34, '2024-01-26 06:23:55', 2, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(24, 35, '2024-01-26 06:23:59', 1, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(25, 36, '2024-01-26 06:24:03', 3, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(26, 37, '2024-01-26 06:24:12', 1, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(27, 38, '2024-01-26 06:24:19', 2, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(28, 41, '2024-01-26 06:24:36', 1, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(29, 40, '2024-01-29 09:41:20', 1, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, ''),
(30, 40, '2024-01-29 10:47:08', 1, 'Người Dùng qưewqeqw', 'Địa Chỉ 1', 123456789, '');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `ten` varchar(255) NOT NULL,
  `soLuong` int NOT NULL,
  `gia` int NOT NULL,
  `hinhAnh` varchar(255) NOT NULL,
  `moTa` varchar(255) NOT NULL,
  `idDanhMuc` int NOT NULL,
  `luotxem` int NOT NULL,
  `trangThai` tinyint NOT NULL,
  `luotthue` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `soLuong`, `gia`, `hinhAnh`, `moTa`, `idDanhMuc`, `luotxem`, `trangThai`, `luotthue`) VALUES
(34, 'Váy lễ luxury-LT512', 1, 60000000, '../assets/images/anh1.png', 'Váy lễ luxury-LT512 KÈM VEIL ĐÍNH HOA màu trắng ivory. Form dáng công chúa xòe phối tùng lưới tạo cảm giác mềm mại, đuôi dài vừa.', 23, 2, 2, 0),
(35, 'Váy bàn đuôi cá dòng luxury-LXBCT130', 1, 40000000, '../assets/images/anh4.png', 'Với Váy bàn đuôi cá dòng luxury-LXBCT130 mang thiết kế được thổi hồn bằng sự ngôn ngữ thiết kế sang trọng và độc đáo', 23, 1, 1, 0),
(36, 'Váy bàn xuông A luxury-MML342', 1, 55000000, '../assets/images/anh8.png', 'Với Váy bàn xuông A luxury-MML342 mang thiết kế được thổi hồn bằng sự ngôn ngữ thiết kế sang trọng và độc đáo', 23, 3, 2, 1),
(37, 'Váy lễ dòng limited-LM253', 1, 80000000, '../assets/images/anh12.png', 'Hân hạnh khi có thể mang đến những chiếc váy lễ dòng limited-LM253 hoàn mỹ nhất, biến cô dâu thành nàng công chúa sánh bước cùng chàng hoàng tử trong ngày trọng đại của cuộc đời.', 24, 8, 1, 0),
(38, 'Váy lễ dòng limited-LM257', 1, 85000000, '../assets/images/anh16.png', 'Váy lễ dòng limited-LM257, màu trắng ivory. Form dáng công chúa xòe phối tùng lưới tạo cảm giác mềm mại, đuôi dài vừa', 23, 1, 1, 0),
(39, 'Váy bàn xuông A limited dòng Grage GR-LMBAT109', 1, 30000000, '../assets/images/anh20.png', 'Với chiếc Váy bàn xuông A limited dòng Grage GR-LMBAT109 mang thiết kế được thổi hồn bằng sự ngôn ngữ thiết kế sang trọng và độc đáo,', 25, 205, 1, 0),
(40, 'Váy bàn xuông A luxury dòng Grace Gr-LXBAT171', 1, 30000000, '../assets/images/anh24.png', 'Váy bàn xuông A luxury dòng Grace Gr-LXBAT171 tại Linh Nga Bridal là những mẫu váy có được tiêu chí thích hợp cho tính đặc thù trong việc di chuyển tại những bữa tiệc cưới.', 25, 243, 1, 1),
(41, 'Váy bàn xuông A luxury dòng Grace Gr-LXBAT163', 1, 30000000, '../assets/images/anh28.png', 'Váy bàn xuông A luxury dòng Grace Gr-LXBAT163 tại Linh Nga Bridal là những mẫu váy có được tiêu chí thích hợp cho tính đặc thù trong việc di chuyển tại những bữa tiệc cưới.', 25, 1, 1, 0),
(48, 'ÁO CHOÀNG-AN015', 1, 4200000, '../assets/images/anh35.png', 'ÁO CHOÀNG-AN015 tại Linh Nga Bridal là những mẫu váy có được tiêu chí thích hợp cho tính đặc thù trong việc di chuyển tại những bữa tiệc cưới.', 26, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanphamyt`
--

CREATE TABLE `sanphamyt` (
  `id` int NOT NULL,
  `idSP` int NOT NULL,
  `idTK` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanphamyt`
--

INSERT INTO `sanphamyt` (`id`, `idSP`, `idTK`) VALUES
(23, 30, 8),
(24, 31, 8),
(25, 30, 1),
(27, 31, 1),
(29, 40, 1),
(30, 39, 1),
(31, 37, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `taiKhoan` varchar(255) NOT NULL,
  `matKhau` varchar(255) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `sdt` varchar(150) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `vaiTro` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `taiKhoan`, `matKhau`, `ten`, `sdt`, `diaChi`, `vaiTro`) VALUES
(1, 'ok', '1', 'Người Dùng qưewqeqw', '0123456789', 'Địa Chỉ 1', 1),
(2, 'admin', '1', 'Người Dùng 2', '0987654321', 'Địa Chỉ 2', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhphu`
--
ALTER TABLE `anhphu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donthue`
--
ALTER TABLE `donthue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanphamyt`
--
ALTER TABLE `sanphamyt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anhphu`
--
ALTER TABLE `anhphu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `donthue`
--
ALTER TABLE `donthue`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sanphamyt`
--
ALTER TABLE `sanphamyt`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
