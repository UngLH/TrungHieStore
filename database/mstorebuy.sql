-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 28, 2024 lúc 01:08 PM
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
-- Cơ sở dữ liệu: `mstorebuy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nameadmin` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nameadmin`, `username`, `password`, `admin_status`) VALUES
(4, 'Đỗ Hữu Mạnh', 'manhdz', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tieude` varchar(250) NOT NULL,
  `img_baiviet` varchar(100) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` longtext NOT NULL,
  `ngayviet` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id_baiviet`, `tieude`, `img_baiviet`, `tomtat`, `noidung`, `ngayviet`) VALUES
(2, 'Rộn ràng mùa mua sắm cuối năm, giá OPPO A95 hiện tại bao nhiêu? Cập nhật liền ưu đãi mới nhất tại Thế Giới Di Động', '1709113134_cate-cnk.jpg', 'Rộn ràng mùa mua sắm cuối năm, giá OPPO A95 hiện tại bao nhiêu? Cập nhật liền ưu đãi mới nhất tại Thế Giới Di Động', 'Chiếc điện thoại này sẽ có 2 phiên bản màu sắc Glowing Rainbow Silver (Bạc) và Glowing Starry Black (Đen) cho người dùng thỏa thích lựa chọn theo sở thích của mình. Ở mặt trước là màn hình có kích thước 6.43 inch, tấm nền AMOLED cao cấp với độ phân giải Full HD+ mang tới chất lượng hình ảnh chi tiết.\r\n\r\nVề cấu hình, OPPO A95 được trang bị con chip xử lý Snapdragon 662 8 nhân cho hiệu năng ổn định, mượt mà. Đồng thời, OPPO còn trang bị cho A95 bộ nhớ RAM 8 GB hỗ trợ công nghệ RAM mở rộng tối đa 5 GB, được phát triển để đem tới 13 GB giúp máy đa nhiệm tốt hơn.\r\n\r\nChiếc điện thoại này thật sự rất đáng sắm, mình đã chọn ngay một chiếc rồi còn bạn?', '0000-00-00'),
(3, 'Tại sao không gửi được video qua Messenger? Đây là 3 lý do và cách khắc phục cực kỳ hiệu quả cho bạn', '1708785393_icon.png', 'Tại sao không gửi được video qua Messenger? Đây là 3 lý do và cách khắc phục cực kỳ hiệu quả cho bạn', 'Trên đây là mốt số chia sẻ về cách sửa lỗi Messenger không thể gửi được video. Hi vọng bài viết này sẽ giúp ích được cho bạn.\r\n\r\nThế Giới Di Động đang kinh doanh nhiều mẫu smartphone với nhiều dòng máy khác nhau, đủ đáp ứng nhu cầu cho tất cả mọi người từ cơ bản đến nâng cao. Nhấn vào nút cam bên dưới để chọn mua ngay nhé.', '0000-00-00'),
(5, 'Galaxy M33 5G sẽ là smartphone giá rẻ chạy Android 12 của Samsung, viên pin được nâng cấp mạnh sẽ không làm bạn thất vọng', '1708785421_grid-iphone.jpg', 'Galaxy M33 5G sẽ là smartphone giá rẻ chạy Android 12 của Samsung, viên pin được nâng cấp mạnh sẽ không làm bạn thất vọng', 'Galaxy M33 5G sẽ là smartphone giá rẻ chạy Android 12 của Samsung, viên pin được nâng cấp mạnh sẽ không làm bạn thất vọng', '0000-00-00'),
(6, 'Nghe Đồn Là: Bphone A40 sẽ ra mắt 19/12, có giá từ 4.5 triệu, hỗ trợ tính năng chụp đêm sNight xịn sò (liên tục cập nhật)', '1708785440_gold-iphone.jpg', 'Nghe Đồn Là: Bphone A40 sẽ ra mắt 19/12, có giá từ 4.5 triệu, hỗ trợ tính năng chụp đêm sNight xịn sò (liên tục cập nhật)', 'Nghe Đồn Là: Bphone A40 sẽ ra mắt 19/12, có giá từ 4.5 triệu, hỗ trợ tính năng chụp đêm sNight xịn sò (liên tục cập nhật)', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(20) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sp`, `soluongmua`) VALUES
(15, '2520', 1, 1),
(16, '1610', 9, 1),
(17, '7777', 3, 1),
(18, '59', 4, 1),
(19, '3011', 2, 1),
(20, '3011', 3, 1),
(21, '3011', 12, 1),
(22, '4481', 9, 1),
(23, '4481', 10, 1),
(24, '4481', 11, 1),
(25, '6933', 20, 1),
(26, '6933', 23, 1),
(27, '3809', 4, 1),
(28, '6219', 2, 1),
(29, '8610', 1, 1),
(30, '3333', 2, 1),
(31, '3333', 3, 1),
(32, '3333', 11, 1),
(33, '4364', 2, 1),
(34, '4364', 32, 1),
(35, '4364', 9, 1),
(36, '4364', 31, 1),
(37, '1092', 43, 2),
(38, '1557', 43, 2),
(39, '1557', 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_registered`
--

CREATE TABLE `tbl_cart_registered` (
  `id_cart_registered` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(20) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL,
  `payos_order_code` int(11) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_registered`
--

INSERT INTO `tbl_cart_registered` (`id_cart_registered`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`, `payos_order_code`) VALUES
(23, 10, '3011', 0, '2021-12-15', NULL),
(24, 10, '4481', 0, '2021-12-15', NULL),
(25, 10, '6933', 0, '2021-12-15', NULL),
(30, 14, '4364', 1, '2024-02-24', NULL),
(32, 15, '1092', 1, '2024-02-25', NULL),
(38, 16, '1557', 1, '2024-02-28', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_unregistered`
--

CREATE TABLE `tbl_cart_unregistered` (
  `id_cart_unregistered` int(11) NOT NULL,
  `tenkh` varchar(250) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `noidung` longtext NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_unregistered`
--

INSERT INTO `tbl_cart_unregistered` (`id_cart_unregistered`, `tenkh`, `diachi`, `sdt`, `email`, `noidung`, `code_cart`, `cart_status`, `cart_date`) VALUES
(16, 'fsfsdf', 'sdfsdfdsf', 'fsdf', 'sdfsdfdsf', 'sdfsdfdsfsd', '7777', 0, '2021-12-15'),
(18, 'tesst', 'test', 'test', 'test', 'test\r\n', '3809', 0, '2021-12-15'),
(19, 'test', 'test', 'test', 'test', 'ship nhanh nhé shop', '6219', 0, '2021-12-16'),
(20, 'tesst', 'tesst', 'test', 'tesst', '', '8610', 0, '2021-12-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `id_cmt` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `name_email` varchar(250) NOT NULL,
  `noidung` longtext NOT NULL,
  `id_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_comments`
--

INSERT INTO `tbl_comments` (`id_cmt`, `name`, `name_email`, `noidung`, `id_sp`) VALUES
(2, 'manh', 'manh@gmail.com', 'Hàng rất là đẹp nha Shop. Ship hàng nhanh gọn', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_khachhang` int(11) NOT NULL,
  `tenkhachhang` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `matkhau` varchar(250) NOT NULL,
  `dienthoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_khachhang`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(10, 'Mạnh đỗ', 'manh@gmail.com', 'NA', 'e10adc3949ba59abbe56e057f20f883e', '04542215465'),
(11, 'test', 'test@gmail.com', 'test', 'e10adc3949ba59abbe56e057f20f883e', 'test'),
(13, 'Đỗ Hữu Mạnh', 'manhdeptrai@gmail.com', 'Hà Nội', 'e10adc3949ba59abbe56e057f20f883e', '0123499999'),
(14, 'MạnhLL', 'manhdeptrai@gmail.com', 'HN', 'e10adc3949ba59abbe56e057f20f883e', '0123499999'),
(15, 'Ăng mặng Plat', 'manhnuoimeo@gmail.com', 'Hà Nội', '71e516d327632ba98ee1e05a0dacdc76', '0999999999'),
(16, 'aduangmang', 'adumanhdz@gmail.com', 'Hà Nội', '202cb962ac59075b964b07152d234b70', '0123499999');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(200) NOT NULL,
  `thutu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, 'Phụ kiện Macbook', 7),
(2, 'Phụ kiện iPhone', 2),
(3, 'Phụ kiện iPad', 3),
(4, 'Phụ kiện Apple Watch', 4),
(5, 'Phụ kiện Công nghệ khác', 5),
(10, 'Iphone', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phanhoi`
--

CREATE TABLE `tbl_phanhoi` (
  `id_ph` int(11) NOT NULL,
  `hoten` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `noidung` longtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phanhoi`
--

INSERT INTO `tbl_phanhoi` (`id_ph`, `hoten`, `email`, `noidung`, `status`) VALUES
(2, 'test', 'test@gmail.com', 'test', 0),
(3, 'test', 'test@gmail.com', 'test', 0),
(4, 'test', 'test@gmail.com', 'test', 0),
(5, 'hello', 'hello@gmail.com', 'hello', 0),
(6, 'test', 'test@gmail.com', 'test', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(200) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `giasp` varchar(100) NOT NULL,
  `gia_sale` varchar(100) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `mota` tinytext NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--


INSERT INTO `tbl_sanpham` (`id_sp`, `tensp`, `masp`, `giasp`, `gia_sale`, `hinhanh`, `mota`, `tinhtrang`, `id_danhmuc`) VALUES
(1, 'Apple Magic Mouse 2', 'mac01', '3000', '2000', '1636962277_thumb_350_apple-magic-mouse-2-magic-mouse-2-c.jpg', 'sang xịn mịn nhé ae <3', 1, 1),
(2, 'Anker PowerCore 10400', 'iphone01', '7000', '0', '1637577574_thumb_350_pin-d-phong-anker-powercore-10400-51uvzgwwjzl-sl1000-1000x1000.jpg', 'Sang xịn mịn nha mọi người', 1, 2),
(3, 'Ốp lưng iPhone 13 Pro Da Native Union CLIC CLASSIC', 'iphone02', '2500', '2000', '1638184603_op-lung-iphone-13-pro-max-native-union-da-clic-classic-xanh-1.jpg', 'Kiểu dáng thời trang và đẹp mắt.\r\nThiết kế vừa vặn và ôm sát thân máy.\r\nDễ dàng tháo/lắp ốp vào máy.', 1, 2),
(4, 'Case, ốp lưng  bảo vệ Macbook', 'mac02', '5000', '3000', '1638411031_opmac.jpg', 'Ốp lưng tạo sự tinh tế và nổi bật cho macbook của bạn', 1, 1),
(5, 'Giá đỡ Laptop/Macbook S-Case ', 'mac03', '3000', '0', '1638411110_giadomac', 'Sản phẩm giá đỡ MacBook / laptop S-Case hợp kim nhôm bạc vừa hỗ trợ dựng laptop phù hợp với tầm nhìn của mắt, vừa tạo khoảng trống ở đáy giúp máy tản nhiệt hiệu quả, và sẽ la', 1, 1),
(7, 'Cáp HDMI 2.0 Orico', 'mac05', '3000', '0', '1638411143_capHDMI.jpg', 'Cáp HDMI 2.0 Orico là một giải pháp tuyệt vời cho những ai đang muốn chuyển hình ảnh từ màn hình nhỏ lên màn hình lớn hơn.', 1, 1),
(8, 'Chuột Surface Pro Arc', 'mac06', '5000', '3000', '1638321638_chuot1.jpg', ' Chuột máy tính đóng vai trò vô cùng quan trọng trong việc thao tác, làm việc và giải trí,... Nắm bắt được nhu cầu sở hữu chuột máy tính sử dụng tiện lợi, thiết kế hiện đại, nhà sản xuất đã ch', 1, 1),
(9, 'MIẾNG PHỦ BÀN PHÍM CAO CẤP SIVA CARE', 'mac07', '1000', '0', '1638411206_miengphu.jpg', 'Sản phẩm được làm từ sợi Microfiber mềm mại và êm ái, có độ bền cao.', 1, 1),
(10, 'MIẾNG DÁN MÀN HÌNH CHO MACBOOK PRO 13 INCH/AIR ', 'mac08', '400', '0', '1638411805_miengdan.jpg', ' Màn hình là bộ phận đắt tiền và khó thay thế nhất của macbook, hãy giữ cho macbook của bạn luôn được bảo vệ và trông như mới trong suốt thời gian sử dụng của MacBook với lớp bảo vệ nâng cao đư', 1, 1),
(11, 'Bao da đa năng Laptop Sleeve', 'mac09', '2000', '0', '1638411763_tuimac.jpg', 'Bộ sản phẩm gồm: 1 bao da tích hợp đế giữ laptop, bàn di chuột và vị trí cắm bút.\r\nChất liệu da PU cao cấp.', 1, 1),
(12, 'Tai nghe Bluetooth Apple AirPods 2 VN/A', 'iphone03', '3000', '0', '1638411724_airpod.jpg', 'AirPods 2 chính hãng VN/A là hàng chính hãng do Apple sản xuất theo tiêu chuẩn của thị trường Việt Nam. Thiết bị được phân phối chính hãng thông qua các đại lý ủy quyền của Apple.', 1, 2),
(13, 'Sạc nhanh Apple iPhone 20W', 'iphone04', '2000', '0', '1639652756_a0d7d79cfe51e5e4f57e0d746f7bc5d1.jpg', 'Sạc nhanh Apple iPhone 20W  chính hãng được thiết kế siêu nhỏ gọn, tinh tế giúp bạn có thể mang đến bất cứ nơi đâu. Chất liệu cao cấp cùng màu trắng nổi bật mang đến sự sang trọng và độ bền b??', 1, 2),
(14, 'Apple AirTag', 'iphone05', '700', '0', '1638411655_airtag.jpg', 'Airtag là một thiết bị nhỏ được tích hợp công nghệ Bluetooth dùng trong việc tìm kiếm đồ vật, trang thiết bị thất lạc.', 1, 2),
(15, 'Tai nghe Apple EarPods Lightning', 'iphone06', '700', '400', '1638323790_tainghe.jpg', 'Apple Earpods Lightning một sản phẩm tuyệt hảo phù hợp với các dòng điện thoại iPhone, iPad, iPod hỗ trợ iOS 10 trở lên.', 1, 2),
(16, 'Tai nghe chụp tai chống ồn Apple AirPods Max', 'iphone07', '5000', '0', '1638411614_tainghechup.jpg', 'Apple AirPods Max được làm hoàn chỉnh chính xác mang đến cảm giác thoải mái và êm ái khi đeo. Ngoài ra phần thanh ôm đầu cũng được làm phù hợp với vòm đầu nhất không bị cấn khi đeo sử dụng.', 1, 2),
(17, 'Bút cảm ứng Apple Pencil 2 MU8F2 ', 'iphone08', '3000', '0', '1638411581_butcamung.jpg', 'Thiết kế đơn giản thuần của một chiếc bút chì cùng trọng lượng nhẹ 20.7 gram', 1, 2),
(18, 'Ốp Apple Smart Folio cho iPad Air 4', 'ipad01', '2000', '0', '1638411552_opipad1.jpg', '- Smart Cover cho iPad được làm từ polyurethane để bảo vệ mặt trước của thiết bị của bạn.\r\n- Nó tự động đánh thức iPad của bạn khi mở ra và chuyển sang chế độ ngủ khi đóng lại.', 1, 3),
(19, 'Ốp lưng UNIQ New iPad Pro 11 inch 2021 Moven Antimicrobial', 'ipad02', '700', '0', '1638411531_opipad2.jpg', '- Bên ngoài UNIQ Moven được làm da tổng hợp cao cấp.\r\n- Bên trong kèm một lớp lót sợi mảnh hạn chế trầy xước \r\n   màn hình iPad.\r\n- Mặt sau là lớp PC cứng cáp, chắc chắn, bền bỉ', 1, 3),
(20, 'Miếng dán Cường Lực Spigen Glas.tR SLIM iPad Pro 12.9 inch ', 'ipad03', '700', '0', '1638411508_miengdanipad.jpg', '-Kính cường lực trong suốt, dày 0.2mm và có độ cứng \r\n 9H.\r\n-Bên trên kính được phủ một lớp nano đặc biệt.\r\n-Các cạnh 2.5D tạo sự thoải mái cho người dùng khi cầm \r\n trong tay.\r\n-Mang lại trải nghiệm', 1, 3),
(21, 'Cổng chuyển Lightning to VGA adapter ', 'ipad04', '1000', '0', '1638411470_daylightning.jpg', 'Loại: Cổng chuyển Lightning\r\nThương hiệu: Apple\r\nTình trạng: Mới 100%', 1, 3),
(22, 'Loa Apple HomePod', 'ipad05', '3000', '0', '1638411447_loa.jpg', 'Cao 6,8 inch (172 mm), Rộng 5,6 inch (142 mm)', 1, 3),
(23, 'Cáp DuraFlex USB-C sang Lightning Innostyle', 'ipad06', '1000', '0', '1638411426_daysacipad.jpg', 'Độ bền bền bỉ với chất liệu cước. Kevlar, hợp kim nhôm và lõi đồng nguyên chất cao cấp  làm cho chiếc cáp có khả năng chịu nhiệt tốt nhất, có độ bền hoàn hảo nhất.', 1, 3),
(24, 'Cáp Thunderbolt 3 (USB‑C) Cable ', 'ipad07', '1000', '0', '1638411408_daysacipad2.jpg', 'Cáp này hỗ trợ truyền dữ liệu Thunderbolt 3 lên đến 40 Gbps, truyền dữ liệu USB 3.1 Gen 2 lên đến 10 Gbps, đầu ra video DisplayPort (HBR3) và sạc lên tới 100W', 1, 3),
(25, 'Sạc nhanh INNOSTYLE GAN ZENI 65W - WHITE IC65- 2PDWHI', 'ipad08', '1000', '0', '1638411377_cusac.jpg', '', 1, 3),
(26, 'Dây Apple watch – Thép không gỉ', 'apw01', '1000', '0', '1638411339_dayapplewacth.jpg', '– Chất liệu Thép không gỉ, bền hơn\r\n– Thay đổi phong cách cho chiếc Apple Watch của bạn: sang trọng hơn, lịch lãm hơn\r\n– Sử dụng cho mọi phiên bản AppleWatch size (38mm)(40mm) và (42mm)(44mm)', 1, 4),
(27, 'Dây da bò Nail Style cho Apple Watch', 'apw02', '1000', '0', '1638411305_dayapplewacth1.jpg', 'Dây da bò Nail Style cho Apple Watch\r\nPhù hợp với đồng hồ Apple Watch mọi phiên bản size 38,40,42,44mm', 1, 4),
(28, 'Dây gốm cho Apple Watch', 'apw03', '1000', '0', '1638411277_dayapplewacth2.jpg', 'Chất liệu: Gốm sứ không phai màu, khóa bằng thép không gỉ\r\nSử dụng cho Apple Watch mọi phiên bản với size (38mm)(40mm)(42mm)(44mm)', 1, 4),
(29, 'Dây Milanese Loop cho Apple Watch', 'apw04', '1000', '0', '1638411249_dayapplewacth3.jpg', 'Chất liệu thép không rỉ, bền màu, mềm nhẹ, khít tay hơn dây cao su, thoáng khí, không giữ mồ hôi. Đặc biệt không gây cảm giác khó chịu và vướng víu cho người dùng', 1, 4),
(30, 'Dây đeo Apple Watch Sport (Nike)', 'apw05', '1000', '600', '1638409134_dayapplewacth4.jpg', '- Chất liệu tổng hợp cao cấp, bền chắc, không phai màu\r\n– Thiết kế đầu nối phù hợp cho Apple Watch', 1, 4),
(31, 'Dây đeo NIMEI cho Apple Watch', 'apw06', '2000', '0', '1638409294_dayapplewacth5.jpg', 'Được làm thủ công, các chi tiết được chăm chút tỉ mỉ\r\nChất liệu da bò tự nhiên kết hợp với thép không gỉ\r\nPhù hợp với mọi phiên bản Apple Watch', 1, 4),
(32, 'Dây thép Flower Metal cho Apple Watch', 'apw07', '1000', '600', '1638409440_dayapplewacth6.jpg', 'Chất liệu thép không gỉ đính đá\r\nPhù hợp với Apple Watch seri mọi phiên bản, size 38mm/40mm', 1, 4),
(33, 'Ốp cho Apple Watch – Trong suốt', 'apw08', '400', '100', '1638409609_opapw1.jpg', 'Chất liệu đàn hồi, hạn chế đối đa các tác động vật lý\r\nThiết kế vừa vặn, ôm khít thiết bị\r\nTrong suốt, sang trọng và thanh lịch\r\nLà giải pháp đơn giản nhất để bảo vệ và kéo dài tuổi thọ ', 1, 4),
(34, 'Đế sạc đa năng 5in1 kiêm đèn ngủ LH5', 'spk01', '5000', '3000', '1638409711_desac1.jpg', '', 1, 5),
(35, 'Pin dự phòng Magsafe 3in1 ', 'spk02', '3000', '0', '1638409844_pinduphong.jpg', '- Sạc không dây cho Iphone, có thể sạc Magsafe dính hút nam châm cho Iphone 12 trở lên, sạc cho Airpods, Apple Watch\r\n- Thiết kế mỏng nhẹ với trọng lượng chỉ 138g, kích thước: 116x65x13mm', 1, 5),
(36, 'Tai nghe Bluetooth 5.1 G09mini', 'spk03', '3000', '0', '1638409982_taingheblt.jpg', '- Dung lượng hộp sạc: 400mAh sạc được 8 lần cho tai nghe, thời gian mỗi lần nghe nhạc khoảng 5 tiếng\r\n- Màn hình LED hiển thị % pin, cảm ứng chạm để điều khiển tai nghe', 1, 5),
(37, 'Sạc không dây Magsafe X16 trên xe hơi cho iPhone 12', 'spk04', '3000', '0', '1638410131_sackd.jpg', '- Thiết kế dành riêng cho iphone 12 với công nghệ sạc không dây dính hút từ tính Magsafe, điện thoại sẽ được tự động dính chặt vào đế sạc giúp thao tác sạc nhanh hơn\r\n- Sạc nhanh với tốc độ 15W', 1, 5),
(38, 'Bảng số điện thoại DOKIY cho xe hơi chất liệu nhôm', 'spk05', '2000', '1000', '1638410317_bangsdt.jpg', '- Chất liệu nhôm cao cấp sang trọng, sử dụng được lâu dài\r\n- Có thể ẩn số điện thoại khi không sử dụng\r\n- Có bảng số riêng, các chữ số được gắn bằng nam châm dễ dàng thay đổi', 1, 5),
(39, 'Car Galaxy box – Hộp đựng đồ trên xe hơi bọc da', 'spk06', '2000', '0', '1638410651_spk01.jpg', '- Hộp được bọc da, màu sắc rất sang trọng, phù hợp không gian ô tô\r\n- Túi dùng để đựng được nhiều đồ như đồ ăn nhỏ, điện thoại, chùm chìa khóa… Có đế dựng chai nước nhỏ hoặc cốc nước', 1, 5),
(40, 'Bảng lưu số điện thoại trên xe hơi Kishiki', 'spk07', '3000', '0', '1638410831_bangsdt1.jpg', '- Bảng lưu số điện thoại để trên xe hơi khi đậu xe, giúp chủ xe nhanh chóng nhận được cuộc gọi khi gặp vấn đề về xe\r\n- Dễ dàng thay đổi số điện thoại bằng cách xoay chữ số trong bảng số\r\n- C', 1, 5),
(41, 'Đèn bàn kiêm sạc 3in1 và đồng hồ đa năng N61', 'spk08', '3000', '1000', '1638410991_denban.jpg', '- Chức năng hiển thị đồng hồ, cài đặt báo thức rất tiện lợi khi sử dụng\r\n- Thông số kỹ thuật: sạc không dây cho điện thoại lên đến 15W, sạc cho airpods 3W, công suất bóng đèn 4W\r\n- Lưu ý: Bạn c?', 1, 5),
(43, 'Iphone 15', 'Iphone08', '15000000', '13500000', '1708785002_gold-iphone.jpg', 'iphone 15 siêu đẹp siêu nét', 1, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(2, '2021-12-05', 30, '2000', 30),
(4, '2021-12-07', 9, '5000', 3),
(6, '2021-12-15', 6, '25100', 11),
(7, '2021-12-16', 2, '9000', 2),
(8, '2021-12-18', 1, '11000', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `tbl_cart_registered`
--
ALTER TABLE `tbl_cart_registered`
  ADD PRIMARY KEY (`id_cart_registered`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_cart_unregistered`
--
ALTER TABLE `tbl_cart_unregistered`
  ADD PRIMARY KEY (`id_cart_unregistered`);

--
-- Chỉ mục cho bảng `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`id_cmt`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_phanhoi`
--
ALTER TABLE `tbl_phanhoi`
  ADD PRIMARY KEY (`id_ph`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_registered`
--
ALTER TABLE `tbl_cart_registered`
  MODIFY `id_cart_registered` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_unregistered`
--
ALTER TABLE `tbl_cart_unregistered`
  MODIFY `id_cart_unregistered` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_phanhoi`
--
ALTER TABLE `tbl_phanhoi`
  MODIFY `id_ph` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD CONSTRAINT `tbl_cart_details_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `tbl_sanpham` (`id_sp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `tbl_cart_registered`
--
ALTER TABLE `tbl_cart_registered`
  ADD CONSTRAINT `tbl_cart_registered_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `tbl_dangky` (`id_khachhang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD CONSTRAINT `tbl_comments_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `tbl_sanpham` (`id_sp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
