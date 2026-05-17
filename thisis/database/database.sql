-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2026 at 11:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dacsantaynguyen1`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `summary`, `content`, `created_at`) VALUES
(1, 'Tây Nguyên mùa lễ hội', 'taynguyen.jpg', 'Khám phá văn hóa Tây Nguyên', 'Nội dung bài viếTây Nguyên mùa lễ hội (thường tập trung từ tháng 1 đến tháng 3 âm lịch) là thời điểm rực rỡ nhất để trải nghiệm văn hóa đại ngàn. Các lễ hội đặc sắc nhất bao gồm Lễ hội Cồng Chiêng, Lễ hội đua voi, Lễ hội Cà phê Buôn Ma Thuột và lễ mừng lúa mới. Du khách sẽ được hòa mình vào không gian văn hóa độc đáo, tiếng chiêng âm vang, ẩm thực phong phú và sự hiếu khách của đồng bào dân tộc bản địa.Các Lễ Hội Đặc Sắc Nhất Tây NguyênLễ hội Cồng Chiêng Tây Nguyên: Di sản văn hóa phi vật thể của nhân loại, tổ chức luân phiên tại 5 tỉnh, nổi bật với các màn biểu diễn cồng chiêng, hát múa truyền thống.Lễ hội Đua Voi (Đắk Lắk): Tôn vinh tinh thần thượng võ và tài năng thuần dưỡng voi của người M\'nông, thường diễn ra vào tháng 3 dương lịch.Lễ hội Cà phê Buôn Ma Thuột: Sự kiện lớn quảng bá văn hóa cà phê, diễn ra 2 năm một lần (thường vào tháng 3).Lễ Mừng Cơm Mới: Nghi lễ tạ ơn thần linh sau mùa thu hoạch, phổ biến vào dịp cuối năm âm lịch.Lễ hội Đâm Trâu (Ăn trâu): Nghi lễ truyền thống quan trọng của người Ba Na, Gia Rai để khấn cầu hoặc tạ ơn các vị thần.Lễ Bỏ Mả (Pơ Thi): Lễ hội chia tay người chết mang đậm nét văn hóa tâm linh của người Bahnar, Gia Rai.Lễ Cúng Bến Nước: Tín ngưỡng cầu mưa thuận gió hòa, cuộc sống ấm no.Thời Điểm Lý TưởngTháng 1 - Tháng 3 dương lịch: Là \"tháng 3 Tây Nguyên\", mùa khô, thời tiết đẹp, thuận lợi cho các hoạt động ngoài trời, lễ hội và ngắm hoa cà phê nở trắng.Trải Nghiệm Văn HóaThưởng thức rượu cần, cơm lam, gà nướng.Nhảy múa xoang cùng người dân bên đống lửa.Nghe kể khan (sử thi) bên bếp lửa nhà rông.t Tây Nguyên...', '2026-05-13 21:49:39'),
(2, 'Cà phê Buôn Ma Thuột', 'slide5.jpg', 'Đặc sản nổi tiếng Việt Nam', 'Việt Nam nổi tiếng với ẩm thực phong phú, đặc trưng theo vùng miền, nổi bật nhất là Phở, Bánh mì, Gỏi cuốn (được vinh danh quốc tế), cùng các đặc sản làm quà nổi tiếng như Chè Tân Cương (Thái Nguyên), Thịt trâu gác bếp, Cà phê Buôn Ma Thuột, Bánh pía Sóc Trăng, Kẹo dừa Bến Tre và Nước mắm Phú Quốc.Dưới đây là các đặc sản nổi tiếng chia theo loại hình:1. Món Ăn Đặc Sản Nổi Tiếng (Nên thử tại chỗ)Miền Bắc: Phở Hà Nội, Bún chả, Chả cá Lã Vọng, Cốm làng Vòng, Nem cua bể Hải Phòng.Miền Trung: Bún bò Huế, Cao lầu (Hội An), Mì Quảng, Mắt cá ngừ đại dương (Phú Yên).Miền Nam: Cơm tấm, Bánh xèo, Gỏi cuốn, Bún riêu cua.2. Đặc Sản Làm Quà Nổi Tiếng (Mua mang về)Đồ khô & Quà vặt:Thịt trâu gác bếp: Đặc sản Tây Bắc ngon nức tiếng.Ô mai Hàng Đường (Hà Nội): Món ăn vặt đặc trưng của Hà Nội.Hạt điều rang muối: Đặc sản phổ biến ở miền Nam.Bánh kẹo & Trà:Bánh pía Sóc Trăng: Bánh dẻo thơm hương sầu riêng.Kẹo dừa Bến Tre: Món quà đặc trưng của vùng sông nước.Chè (Trà) Tân Cương: \"Đệ nhất danh trà\" Thái Nguyên.Trà sen Hồ Tây: Hương vị truyền thống, tinh tế.Đồ uống & Gia vị:Cà phê Buôn Ma Thuột: Nổi tiếng toàn quốc.Nước mắm Phú Quốc: Gia vị thượng hạng.3. Đặc Sản Làm Quà Cho Người Nước NgoàiCác loại bánh kẹo như bánh dừa nướng, bánh đậu xanh nhân thịt Hội An.Rượu sim Phú Quốc, trà sen.Những món ăn này không chỉ mang hương vị độc đáo mà còn là đại diện tiêu biểu cho văn hóa và ẩm thực Việt Nam.', '2026-05-13 21:49:39'),
(3, 'Lễ hội cồng chiêng Tây Nguyên', 'tintuc1.jfif', 'Không gian văn hóa cồng chiêng đặc sắc của Tây Nguyên.', 'Tây Nguyên nổi tiếng với lễ hội cồng chiêng mang đậm bản sắc dân tộc. Đây là di sản văn hóa phi vật thể được UNESCO công nhận.', '2026-05-13 22:00:18'),
(4, 'Cà phê Buôn Ma Thuột nổi tiếng thế giới', 'cafe.jpg', 'Đặc sản cà phê hàng đầu Việt Nam.', 'Cà phê Buôn Ma Thuột có hương vị đậm đà đặc trưng, được xuất khẩu đi nhiều quốc gia trên thế giới.', '2026-05-13 22:00:18'),
(6, 'Mật ong ĐacLac', 'matong.jpg', 'Nguyên chất tự nhiên ong rừng', 'Mật ong được tạo thành từ chất ngọt do ong thu thập được trong các bông hoa. Theo quy định của Hội đồng Ong mật Quốc gia Mỹ và nhiều quy định về thực phẩm quốc tế khác quy định rằng \"mật ong là một sản phẩm thuần khiết không cho phép thêm bất kỳ chất gì vào... bao gồm nhưng không giới hạn trong, nước và các chất ngọt khác\". Bài này chỉ đề cập về mật ong do ong mật (chi Apis) tạo ra; mật do các loài ong khác hay các loài côn trùng khác có các đặc tính rất khác biệt. Nhiều người cho rằng mật ong không có hạn sử dụng nhưng thật ra mật ong chỉ có thể sử dụng được tối đa là 2 năm và sau đó nó sẽ có các chất nguy hiểm được tạo bên trong đó và có thể gây nguy hiểm đến tính mạng. Nếu quá hạn thì nó sẽ có mùi khó chịu và hôi chua, vị cay hoặc đắng, màu đậm và càng ngày càng có màu tối hay nói cách khác là màu đen.[1]', '2026-05-15 06:22:04'),
(7, 'Sâm Ngọc Linh', '1778827456_samngoclinh4.jpg', 'Thần dược quý hiếm của Việt Nam', 'Sâm Ngọc Linh cũng là loại nhân sâm thứ 20 được tìm thấy trên thế giới.[1] Theo kết quả nghiên cứu từ năm 1978 của Bộ Y tế Việt Nam, phần thân rễ của cây sâm Ngọc Linh Việt Nam chứa 26 hợp chất saponin có cấu trúc hóa học đã biết và 24 saponin có cấu trúc mới không có trong các loại sâm khác, trong khi sâm Triều Tiên có khoảng 25 saponin.[2][3] Những kết quả nghiên cứu, phân lập thành phần hóa học mới nhất được công bố còn kéo dài danh sách saponin của sâm Ngọc Linh hơn nữa, lên tổng cộng 52 loại.[4] Như vậy, sâm Việt Nam là một trong những loại sâm có hàm lượng saponin nhiều nhất, tương tự một số cây sâm quý đã từng được nghiên cứu sử dụng từ lâu trên thế giới.[5] Hợp chất hóa học đa dạng và tác dụng thực tiễn đối với sức khỏe của con người khiến sâm Ngọc Linh hiện nay được bán trên thị trường với giá càng ngày càng cao,[6] thậm chí còn cao hơn sâm Triều Tiên nhiều lần.[4]', '2026-05-15 06:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `phone`, `address`, `note`, `total_price`, `created_at`) VALUES
(1, 'Mai', '0905112365', 'HCM', '', 500000, '2026-05-14 01:14:28'),
(2, 'NGOC', '1234567891', 'BRVT', '', 200000, '2026-05-14 01:56:24'),
(3, 'Anh Dũng', '123456', 'TPHCM', '', 1000000, '2026-05-14 02:02:29'),
(4, 'cuc`', '1234567890', 'abc', '', 500000, '2026-05-14 02:43:06'),
(5, 'anan', '45862186', 'bT', '', 240000, '2026-05-14 03:25:58'),
(6, 'Thanh', '46682245', 'BRVT', '', 240000, '2026-05-14 03:28:36'),
(7, 'Quynh', '1235872', 'TP', '', 250000, '2026-05-14 03:32:25'),
(8, 'an', '1234567890', 'VL', '', 360000, '2026-05-14 03:44:19'),
(9, 'anh', '1234567885', 'VT', '', 710000, '2026-05-14 03:54:49'),
(10, 'minh', '0905112367', 'VL', '', 240000, '2026-05-14 03:56:15'),
(11, 'mai', '345865225', 'TP', '', 120000, '2026-05-14 04:00:05'),
(12, 'an', '3244565', 'VL', '', 360000, '2026-05-14 04:02:32'),
(13, 'Hoa', '123456789', '177 HHT', '', 440000, '2026-05-14 04:05:49'),
(14, 'Ong', '24578522', 'jgkj ', '', 520000, '2026-05-14 04:11:35'),
(16, 'Giàu', '35445865', 'hgjh jkgdj', '', 2400000, '2026-05-14 04:18:45'),
(18, 'Mai', '1234567890', 'TPHCM', '', 430000, '2026-05-14 07:34:08'),
(19, 'Hồng', '853346762', 'Hà Nội', '', 450000, '2026-05-14 07:34:47'),
(20, 'Minh', '215652555', 'Đà Nẵng', '', 2400000, '2026-05-14 07:36:13'),
(22, 'Bình', '346546656', '777 NHT', '', 1630000, '2026-05-14 07:38:42'),
(23, 'Ánh', '09051123655', '789 HVT', 'vvip', 4050000, '2026-05-14 08:38:02'),
(24, 'Thanh', '265656856', 'jhjuih', '', 2200000, '2026-05-14 09:21:52'),
(25, 'Ai', '6832532', 'dfdsf', '', 3240000, '2026-05-14 09:57:25'),
(26, 'mAI mAI', '25335423', 'JKGSJK ', '', 1660000, '2026-05-15 07:38:43'),
(27, 'cv', '16545', 'scasf', '', 260000, '2026-05-15 08:09:29'),
(28, 'nana', '5456', 'thử', '', 1630000, '2026-05-15 20:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_name`, `price`, `quantity`) VALUES
(1, 1, 'Cà phê rang xay S1', 250000, 2),
(2, 2, 'Mật ong DakLak', 120000, 1),
(3, 2, 'Quà lưu niệm', 80000, 1),
(4, 2, '', 0, 1),
(5, 3, 'Cà phê rang xay', 250000, 4),
(6, 4, '', 0, 1),
(7, 4, 'Cà phê rang xay', 250000, 2),
(8, 5, 'Mật ong DakLak', 120000, 2),
(9, 6, '', 0, 0),
(10, 6, 'Mật ong DakLak', 120000, 2),
(11, 7, 'Cà phê rang xay', 250000, 1),
(12, 8, 'Mật ong DakLak', 120000, 3),
(13, 9, 'Mật ong DakLak', 120000, 3),
(14, 9, 'Mật ong rừng', 350000, 1),
(15, 10, 'Mật ong DakLak', 120000, 2),
(16, 11, 'Mật ong DakLak', 120000, 1),
(17, 12, 'Mật ong DakLak', 120000, 3),
(18, 13, 'Mật ong DakLak', 120000, 3),
(19, 13, 'Quà lưu niệm', 80000, 1),
(20, 14, 'Mật ong DakLak', 120000, 3),
(21, 14, 'Quà lưu niệm', 80000, 2),
(22, 15, 'Quà lưu niệm', 80000, 2),
(23, 16, 'Sâm Ngọc Linh', 1200000, 2),
(24, 17, 'Sâm Ngọc Linh', 1200000, 1),
(25, 17, 'Quà lưu niệm', 80000, 1),
(26, 18, 'Sáp thơm', 80000, 1),
(27, 18, 'Mật ong rừng', 350000, 1),
(28, 19, 'Cacao', 120000, 1),
(29, 19, 'Quà lưu niệm', 80000, 1),
(30, 19, 'Cà phê rang xay', 250000, 1),
(31, 20, 'Sâm Ngọc Linh', 1200000, 2),
(32, 21, 'Cacao', 120000, 1),
(33, 21, 'Mật ong DakLak', 120000, 1),
(34, 21, 'Cà phê rang xay', 250000, 1),
(35, 22, 'Sâm Ngọc Linh', 1200000, 1),
(36, 22, 'Mật ong rừng', 350000, 1),
(37, 22, 'Sáp thơm', 80000, 1),
(38, 23, 'Sáp thơm', 80000, 2),
(39, 23, 'Cacao', 120000, 2),
(40, 23, 'Mật ong DakLak', 120000, 2),
(41, 23, 'Quà lưu niệm', 80000, 2),
(42, 23, 'Sâm Ngọc Linh', 1200000, 2),
(43, 23, 'Mật ong rừng', 350000, 1),
(44, 23, 'Cà phê rang xay', 250000, 2),
(45, 24, 'Cacao', 120000, 1),
(46, 24, 'Sáp thơm', 80000, 1),
(47, 24, 'Mật ong DakLak', 120000, 1),
(48, 24, 'Quà lưu niệm', 80000, 1),
(49, 24, 'Cà phê rang xay', 250000, 1),
(50, 24, 'Mật ong rừng', 350000, 1),
(51, 24, 'Sâm Ngọc Linh', 1200000, 1),
(52, 25, 'Cà phê rang xay', 250000, 1),
(53, 25, 'Mật ong DakLak', 120000, 1),
(54, 25, 'Sâm Ngọc Linh', 1200000, 2),
(55, 25, 'Mật ong rừng', 350000, 1),
(56, 25, 'Cacao', 120000, 1),
(57, 26, 'Mật ong DakLak', 120000, 2),
(58, 26, 'Cà phê ĐakLak', 140000, 1),
(59, 26, 'Sáp thơm', 80000, 1),
(60, 26, 'Sâm Ngọc Linh', 1200000, 1),
(61, 27, 'Cà phê ĐakLak', 140000, 1),
(62, 27, 'Mật ong DakLak', 120000, 1),
(63, 28, 'Cà phê ĐakLak', 140000, 2),
(64, 28, 'Cà phê Buôn Ma Thuộc', 150000, 1),
(65, 28, 'Sâm Ngọc Linh', 1200000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_new` tinyint(1) DEFAULT 1,
  `is_hot` tinyint(1) DEFAULT 0,
  `sold` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale_price`, `image`, `description`, `content`, `stock`, `created_at`, `is_new`, `is_hot`, `sold`) VALUES
(2, 'Mật ong rừng', 350000, NULL, 'matong.jpg', 'Mật ong nguyên chất', 'Theo một truyền thuyết đã được ghi lại trên giấy vào năm 1671, những người chăn dê ở Kaffa (thuộc Ethiopia ngày nay) phát hiện ra một số con dê trong đàn sau khi ăn một cành cây có hoa trắng và quả màu đỏ đã chạy nhảy không mệt mỏi cho đến tận đêm khuya. Họ bèn đem chuyện này kể với các thầy tu tại một tu viện gần đó. Khi một người chăn dê trong số đó ăn thử loại quả màu đỏ đó anh ta đã xác nhận công hiệu của nó. Sau đó các thầy tu đã đi xem xét lại khu vực ăn cỏ của bầy dê và phát hiện ra một loại cây có lá xanh thẫm và quả giống như quả anh đào. Họ uống nước ép ra từ loại quả đó và tỉnh táo cầu nguyện chuyện trò cho đến tận đêm khuya. Như vậy có thể coi rằng nhờ chính đàn dê này con người đã biết được cây cà phê.', 15, '2026-05-13 21:49:12', 1, 0, 0),
(3, 'Sâm Ngọc Linh', 1200000, NULL, 'sam.jpg', 'Đặc sản quý', 'Ở Constantinopolis (Istanbul ngày nay) có lẽ cà phê được biết đến lần đầu tiên vào năm 1517 (khi ông hoàng Selim I chiếm lĩnh Ai Cập). Năm 1554 quán cà phê đầu tiên ở châu Âu đã được mở ở đây bất chấp sự phản đối của nhà thờ. Vào năm 1645 quán cà phê đầu tiên của Ý được mở ở Venezia. Năm 1650 ở Oxford và năm 1652 ở Luân Đôn lần lượt xuất hiện các quán cà phê đầu tiên của Vương quốc Anh. Ở Pháp những quán đầu tiên được khai trương vào năm 1659 ở thành phố cảng Marseille, Paris theo sau vào năm 1672. Vào năm 1683 Wien cũng có quán cà phê đầu tiên (do một người Ba Lan thành lập), sau khi Áo giành thắng lợi trước Thổ Nhĩ Kỳ và tịch thu được 500 bao cà phê chiến lợi phẩm. Thủ đô Wien sau đó trở thành thành phố với những quán cà phê nổi tiếng nhất. Từ nước Pháp, cà phê du nhập vào Đức qua thành phố cảng Bremen vào năm 1673. Năm 1679 quán cà phê đầu tiên của Đức được một người Anh mở ở Hamburg, sau đó là Regensburg (1686) và Leipzig (1694).', 5, '2026-05-13 21:49:12', 1, 0, 0),
(4, 'Quà lưu niệm', 80000, NULL, 'thocam1.jpg', ',KJDKJSBKDBslnS,  LDHSJKLFB', 'Với sự bành trướng của Đế quốc Ottoman (Đế quốc Thổ Nhĩ Kỳ) đồ uống này càng ngày càng được ưa chuộng hơn. Quán cà phê đầu tiên được mở ở Ba Tư. Trong những quán nhỏ ở vùng tiểu Á, Syria và Ai Cập người ta gặp nhau để thưởng thức loại đồ uống kì lạ. Kể từ năm 1532 các quán cà phê luôn đông nghịt khách. Vào thế kỉ 17 cây cà phê được trồng phổ biến tại các thuộc địa của Hà Lan, đưa nước này thống trị ngành thương mại cà phê.', 50, '2026-05-13 22:28:45', 1, 0, 0),
(5, 'Mật ong DakLak', 120000, NULL, 'matong4.jpg', 'mat ong', 'jgdajhdKDG GUDGud gsghdILWKL', 20, '2026-05-13 23:06:26', 1, 0, 0),
(6, 'Cacao', 120000, NULL, 'cacao2.jpg', 'Ca cao nguyên chất', 'Cách thức pha chế cà phê truyền thống của người Ethiopia có lẽ là cách thức cổ xưa nhất. Hạt cà phê được cho vào một cái chảo sắt to và rang lên, sau đó được nghiền vụn ra hoặc cho vào cối giã. Chỗ hạt giã vụn đó được trộn với đường trong một cái bình gọi là jebena (một loại bình cổ thon có quai), nấu lên và đổ ra bát.', 15, '2026-05-14 04:53:14', 1, 0, 0),
(7, 'Sáp thơm', 80000, NULL, 'qualuuniem3.jpg', 'Làm từ sáp ong', 'Người ta tin rằng tỉnh Kaffa của Ethiopia chính là vùng đất khởi nguyên của cây cà phê. Từ thế kỉ thứ 9 người ta đã nói đến loại cây này ở đây. Vào thế kỉ thứ 14 những người buôn nô lệ đã mang cà phê từ Ethiopia sang vùng Ả Rập. Nhưng tới tận giữa thế kỉ thứ 15 người ta mới biết rang hạt cà phê lên và sử dụng nó làm đồ uống. Vùng Ả Rập chính là nơi trồng cà phê độc quyền. Trung tâm giao dịch cà phê là thành phố cảng Mocha, hay còn được gọi là Mokka, tức là thành phố Al Mukha thuộc Yemen ngày nay.', 22, '2026-05-14 07:06:51', 1, 0, 0),
(8, 'Cà phê Buôn Ma Thuộc', 150000, NULL, 'cafe1.jpg', 'Cà phê cao cấp', 'Cây cà phê được trồng ở hơn 70 quốc gia. Cà phê là một mặt hàng xuất khẩu lớn: đứng đầu trong số các mặt hàng xuất khẩu nông nghiệp tại nhiều quốc gia và là một trong những mặt hàng xuất khẩu nông nghiệp hợp pháp lớn nhất trên thế giới.[4][9] Đây cũng là loại hàng hóa có giá trị xuất khẩu nhất của các quốc gia đang phát triển. Cà phê xanh (không rang) cũng là một trong những mặt hàng nông nghiệp được buôn bán nhiều nhất trên thế giới.[10] Nhiều tranh luận đã xảy ra xung quanh việc trồng cà phê, cách các quốc gia phát triển trao đổi cà phê với các nước đang phát triển và tác động của việc trồng cà phê đối với môi trường sống, đi kèm với vấn đề tạo đất trống để trồng cà phê và sử dụng nước tưới. Cũng nhờ vậy, thị trường cà phê thương mại công bằng và cà phê hữu cơ ngày càng được mở rộng.', 22, '2026-05-15 05:25:36', 1, 0, 0),
(9, 'Cà phê ĐakLak', 140000, NULL, 'cafe6.jpg', 'Rang xay thủ công', 'Cà phê là một loại thức uống được ủ từ hạt cà phê rang, lấy từ quả của cây cà phê. Các giống cây cà phê được bắt nguồn từ vùng nhiệt đới châu Phi và các vùng Madagascar, Comoros, Mauritius và Réunion trên các khu vực thuộc đường xích đạo.', 40, '2026-05-15 07:03:29', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
