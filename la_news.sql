-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 20, 2022 lúc 05:52 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `la_news`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `idTin` int(11) NOT NULL DEFAULT 0,
  `ngayDang` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `noiDung` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hoTen` varchar(255) DEFAULT NULL,
  `anHien` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `idTin`, `ngayDang`, `noiDung`, `email`, `hoTen`, `anHien`) VALUES
(9, 783, '2018-12-19 18:14:23', 'Chời ơi tầm trung mà có giá gần 10 triệu với hơn 10 triệu thì dẹp cho khỏe mua xiaomi cho xong.', 'bb@bb.com', 'Đời Chẳng Đẹp', 1),
(8, 783, '2018-12-19 18:13:39', 'Nếu tìm hiểu kĩ ai cũng sẽ thấy là độ phân giải không phải là con số quyết định một bức ảnh đẹp, mà chính là cảm biến.', 'aa@aa.com', 'Đời Tươi Đẹp', 1),
(10, 783, '2018-12-19 18:14:57', 'Siêu phẩm đây rồi,quá tuyệt vời cho 1 sản phẩm tầm trung', 'cc@cc.com', 'Đời Chẳng Đẹp Chẳng Xấu', 1),
(11, 786, '2018-12-19 19:54:40', 'Ông ấy không chỉ là HLV thể lực mà ông ấy như người cha trong gia đình đội tuyển. Thấu hiểu tính cách, tâm tư của từng cầu thủ, nhìn vào những ưu điểm của từng cầu thủ để khích lệ, động viên, gắn kết họ thành một tập thể đoàn kết, vững mạnh. Bóng đá là môn thể thao cần tổng thể sức mạnh tập thể. Đoàn kết để tạo nên sức mạnh. Đó là bí quyết thành công của bóng đá Việt Nam trong năm qua. Cám ơn ông thật nhiều!', 'thuduong@gomeo.com', 'Thu Hương', 1),
(12, 786, '2018-12-19 19:55:18', 'Khi đọc những lời chia tay này, tôi mới thấy ông Bae Ji-won rất sâu sát và hiểu tường tận các học trò. Không có gì hơn khi có một người thấy hiểu rõ các học trò như vậy, điều này giúp cho ban huấn luyện phát huy tốt nhất năng lực của cầu thủ và thể lực là một phần không thể thiếu. Buồn vì chúng ta không giữ được ông lại. Xin chân thành cảm ơn những gì ông đã đóng góp cho BĐ VN', 'hung@abc.com', 'Quốc Hung', 1),
(13, 786, '2018-12-19 19:55:49', 'Đọc xong bức tâm thư mà rưng rưng nước mắt. Ông xứng đáng là người hùng thầm lặng nhất của Việt Nam. Ko biết lý do là ji nhưng sự ra đi của ông là 1 tổn thất không hề nhỏ cho bóng đá Việt Nam. Là 1 công dân của Việt Nam xin được cảm ơn những ji mà ông đã cống hiến cho bóng đá nước nhà. Xin được chúc ông sức khoẻ và mong những điều tốt đẹp nhất đến với ông. Xin cảm ơn!', 'hoai@yahoo.com', 'Hoài', 1),
(14, 786, '2018-12-19 19:56:13', 'Phải công nhận tập thể đội tuyển Việt Nam bây giờ đoàn kết trong và cả ngoài sân cỏ. Ở họ thấy không có khoảng cách về tuổi tác, vùng miền hay sự nghi ngờ đố kị nhau như những lớp trước, cái đó cũng là 1 phần của thành công ngày hôm nay. Ông Bae hẳn hiểu rất rõ điều này, cảm ơn ông vì những đóng góp cho Việt Nam suốt thời gian qua.', 'viet@yahoo.com', 'Lê Hoàng Việt', 1),
(15, 786, '2018-12-19 19:56:41', 'Một bài viết rất hay và có tâm đến từ HLV thể lực. Cảm ơn ông trong quãng thời gian qua đã sát cánh cùng đội tuyển gặt hái nhiều thành công mà trong đó thể lực đóng vai trò rất quan trọng đến cầu thủ. Lời chia tay có lẽ nuối tiếc nhất của đội tuyển. Chúc ông nhiều sức khỏe, thành công hơn!', 'jim@gai,com', 'Jim', 1),
(16, 786, '2018-12-19 19:57:16', 'Nhìn danh sách Asian Cup không thấy ông Bae, đã thấy nghi nghi. Giờ thì có thông tin chính thức. Cảm ơn ông rất nhiều. Nhờ có ông mà thể lực của các cầu thủ tốt hơn trước rất nhiều, đá 90 phút vẫn thấy trâu lắm. Nhưng tôi băn khoăn, vì sao ông nghỉ vậy?', 'hoanglong@yahoo.com', 'Hoàng Long', 1),
(17, 786, '2018-12-19 19:57:44', 'Đúng nghĩa là một bác sĩ của đội tuyển. Điều trị về chấn thương mà còn về tâm lý của từng cầu thủ. Tôi thay mặt cổ động viên VN cám ơn ông rất nhiều những gì ông đã cống hiến cho bóng đá VN thời gian qua.', 'mai@gai.com', 'Bang Mai', 1),
(18, 786, '2018-12-19 19:58:20', 'Với một người thầy tràn đầy tình cảm và tâm huyết như ông sao lại để ông ra đi khỏi đội tuyển Việt nam. Những người làm bóng đá của chúng ta đều mong phát triển tốt mà sao không ngòi lại vói nhau nhỉ', 'tuananh@hai.com', 'Tuấn anh', 1),
(19, 786, '2018-12-19 19:59:05', 'Đó là trách nhiệm công việc phải làm của 1 HLV thể lực, không có ông thì cũng có những người khác làm, chừng nào làm mà không lãnh lương thì mới gọi là người hùng thầm lặng.', 'ntd@hanti.com', 'NTD', 1),
(20, 787, '2018-12-19 20:26:38', 'Tôi nhìn thấy con khỉ đầu tiên nhưng tôi lại là một kỹ sư xây dựng khô khan :(', 'ssg@sfsdf.com', 'Trọng Hiền', 1),
(21, 787, '2018-12-19 20:27:26', 'Nó chỉ đúng với một số người thôi, một số người thì ngược lại trong đó có tôi. Một bức hình không thể suy ngược ra tính cách hay khả năng của mỗi con người, có thể với tính cách như vậy sẽ nhìn ra bức hình thì đúng nhưng ngược lại chưa chắc', 'sadas@dsf.com', 'Kính Lúp', 1),
(22, 787, '2018-12-19 20:28:59', 'Còn lý giải về con khỉ thì khá đúng. Mình sống ko đc nguyên tắc lắm tùy cảm hứng sẽ lm vc này vc kia. Thường thức khuya lv và ngủ nướng, dậy sớm ngủ sớm là nhiệm vụ bất khả thi. Có hôm ngủ tới trưa dạy mới nấu cơm ngon cho vợ con xong đi cafe chém gió với bạn ròi chiều mới về lv. Bố mẹ hay cằn nhằn về nếp sống kì cục của mình nhưng cá nhân thì vẫn thấy hạnh phúc vui vẻ , hên là có cô vợ dễ tính chiều chồng hihi.', 'das@dfsd.com', 'Nntuan', 1),
(23, 787, '2018-12-19 20:29:42', 'Tôi chỉ thấy 1 con khỉ thôi nhưng tôi làm nghề kế toán và tính cách khô khan, tôi là phụ nữ nhưng đa số mọi người quen biết bảo tôi là Tom boy.', 'tert@sdfsf.com', 'Quỳnh Thắng', 1),
(24, 788, '2018-12-19 20:39:31', 'Nhân dân Việt Nam mình thật diễm phúc và tự hào khi có Phật Hoàng Trần Nhân Tông. Chiến tích của người Thầy - Cha - Ông thật lẫy lừng. Ngàn năm con cháu mãi mãi mang ơn và ngưỡng vọng ông.', 'aa@sfd.com', 'Con Cháu', 1),
(25, 788, '2018-12-19 20:42:55', 'Lãnh đạo nhân dân đánh thắng quân Nguyên hùng mạnh, xuất hiện chữ Viết riêng của người Việt, phát triển nền tảng triết học Phật giáo Trúc Lâm Yên Tử, mọi lĩnh vực của đất nước từ văn hóa, kinh tế, quân sự, chính trị... đều phát triễn đến mức độ cao, rực rỡ. Đó là thời Trần, công của Phật Hoàng với dân tộc, con cháu lớn lắm.', 'as@dd.com', 'Thanh Niên', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenDT` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngayCapNhat` datetime NOT NULL,
  `gia` double(8,2) NOT NULL,
  `giaKM` double(8,2) NOT NULL,
  `urlHinh` double DEFAULT NULL,
  `songLuongTonKho` int(11) NOT NULL DEFAULT 0,
  `hot` tinyint(1) NOT NULL DEFAULT 0,
  `anHien` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenLoai` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thuTu` int(11) NOT NULL DEFAULT 0,
  `anHien` tinyint(1) NOT NULL DEFAULT 1,
  `urlHinh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id`, `tenLoai`, `thuTu`, `anHien`, `urlHinh`, `created_at`, `updated_at`) VALUES
(1, 'Sam sung', 1, 1, NULL, NULL, NULL),
(2, 'HTC', 2, 1, NULL, NULL, NULL),
(3, 'Apple', 3, 1, NULL, NULL, NULL),
(4, 'LG', 4, 1, NULL, NULL, NULL),
(5, 'Motorola', 5, 1, NULL, NULL, NULL),
(6, 'Moble', 6, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(11) NOT NULL,
  `lang` char(2) DEFAULT 'vi',
  `ten` varchar(100) NOT NULL DEFAULT '',
  `thuTu` tinyint(11) DEFAULT 0,
  `anHien` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`id`, `lang`, `ten`, `thuTu`, `anHien`, `created_at`, `updated_at`) VALUES
(3, 'vi', 'Du lịch', 2, 1, NULL, NULL),
(4, 'vi', 'Khoa học', 4, 1, NULL, NULL),
(9, 'vi', 'Xã hội', 3, 1, NULL, NULL),
(12, 'vi', 'Sống đẹp', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_29_091642_tao_table_dien_thoai', 1),
(6, '2022_08_01_091145_create_thanhvien_table', 2),
(7, '2022_08_01_093339_taotable_loaisp', 3),
(9, '2022_08_18_183112_chinhbang_tin', 4),
(10, '2022_08_18_183710_chinhbang_loaitin', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(10) UNSIGNED NOT NULL,
  `hoTen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `randomKey` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `idGroup` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin`
--

CREATE TABLE `tin` (
  `id` int(11) NOT NULL,
  `lang` char(2) NOT NULL DEFAULT 'vi',
  `tieuDe` varchar(255) NOT NULL DEFAULT '',
  `tomTat` text DEFAULT NULL,
  `urlHinh` varchar(255) DEFAULT NULL,
  `ngayDang` date DEFAULT current_timestamp(),
  `noiDung` text DEFAULT NULL,
  `idLT` int(11) NOT NULL DEFAULT 0,
  `xem` int(11) DEFAULT 0,
  `noiBat` tinyint(1) DEFAULT 0,
  `anHien` tinyint(1) DEFAULT 1,
  `tags` varchar(2000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tin`
--

INSERT INTO `tin` (`id`, `lang`, `tieuDe`, `tomTat`, `urlHinh`, `ngayDang`, `noiDung`, `idLT`, `xem`, `noiBat`, `anHien`, `tags`, `created_at`, `updated_at`) VALUES
(803, 'vi', 'Trộm lấy đồ của du khách trên sóng truyền hình', 'TÂY BAN NHA- Một nam du khách đang trả lời phỏng vấn về lý do yêu thành phố Barcelona thì camera quay được cảnh trộm lấy đồ trên bãi biển. ', 'Q99x_screenshot-tve-interview-16609-2157-6725-1660905934.jpg', '2022-08-20', 'TÂY BAN NHAMột nam du khách đang trả lời phỏng vấn về lý do yêu thành phố Barcelona thì camera quay được cảnh trộm lấy đồ trên bãi biển.\r\n\r\nSự việc xảy ra khi một nam du khách được đài truyền hình TVE của Tây Ban Nha phỏng vấn trên bãi biển Sant Miquel về lý do yêu thành phố Barcelona, hôm 15/8. Nam du khách cho biết thích các bãi biển đẹp, nước sạch và mát ở nơi này.\r\n\r\nTuy nhiên, mọi quan tâm của người xem lại đổ dồn về \"hậu trường\" khi nam du khách đang trả lời phỏng vấn. Đó là một chiếc balo tối màu để trên bãi biển. Vài giây sau, một người đàn ông bất ngờ lại gần, nhìn xung quanh rồi cầm chiếc balo lên bỏ đi. Tiếp theo, camera thu được một âm thanh như tiếng hét và hình ảnh người đàn ông tóc trắng ngơ ngác tìm kiếm túi đồ. Tờ 20 Minutos xác nhận giọng hét đó là chủ nhân của chiếc túi. Anh ta la lên vì bị mất đồ.\r\nMàn lấy trộm balo đó được ghi hình trực tiếp. Sau khi phóng viên xem lại video thì phát hiện sự việc. Do đó, nhà đài đã cung cấp thông tin cho cảnh sát. Đại diện cảnh sát thông báo đã bắt được kẻ tình nghi.\r\n\r\nTheo báo cáo từ Eurostat, tình hình trộm cướp của khách du lịch vẫn là một vấn nạn ở Tây Ban Nha. Từ đầu năm, số vụ trộm cướp tại quốc gia này cao gấp ba lần toàn châu Âu. Trước dịch, tờ El Pais cũng đưa ra báo cáo rằng Barcelona cứ trung bình 12 tiếng lại có một vụ.', 3, 0, 0, 1, NULL, '2022-08-20 07:14:29', '2022-08-20 07:14:29'),
(805, 'vi', 'Quốc vụ khanh Bộ Nội vụ Anh ngồi cà phê phố cổ', 'Trong chuyến thăm Việt Nam hai ngày, ông Matthew Rycroft dành thời gian ngồi cà phê, ngắm phố cổ ở một quán vỉa hè gần hồ Gươm.', 'ICgB_298063910-444052504424222-1508-3077-4430-1660721159.jpg', '2022-08-20', 'Quốc vụ khanh Bộ Nội vụ Vương quốc Anh, Matthew Rycroft, vừa có chuyến thăm Việt Nam 2 ngày nhằm tăng cường hợp tác hai nước về di cư và xuất nhập cảnh. Bên lề chuyến thăm, ông có thời gian rảnh ngồi cà phê tại một quán ở phố cổ, cảm nhận không khí ngày Hà Nội đẹp trời, chiều 16/8.\r\n\r\nChủ quán cà phê cho VnExpress hay, đoàn của ông Matthew Rycroft gọi nước chanh leo, cà phê cốt dừa và cà phê trứng. Từ sáng, đã có người đến sớm để đặt chỗ và gọi đồ uống để quán chuẩn bị. Tầm 15h, ông Matthew Rycroft và cộng sự mới tới, có cả các vệ sĩ đi theo.\r\n\r\nÔng Matthew Rycroft (áo sơ mi trắng, ngồi giữa). Ảnh: Đại sứ quán Anh\r\n\r\nÔng Matthew Rycroft (sơ mi trắng, thứ ba từ trái sang). Ảnh: Đại sứ quán Anh\r\n\r\nQuán ông Matthew ngồi nằm ở ngõ Cầu Gỗ, gần chợ Hàng Bè, được thiết kế giống một căn nhà cổ thời bao cấp, với nhiều dấu ấn Hà Nội xưa. Quán treo dãy cờ Việt Nam bên ngoài, bên trong là tường vàng, tranh Đông Hồ, mô phỏng lại những bức tường có in các dòng chữ Khoan cắt bê tông, Sửa xe... đặc trưng Hà Nội xưa. Quán có các món nổi tiếng là cà phê trứng, trà, nước ép, và cả bia.\r\n\r\nĐoàn của ông Matthew Rycroft có 5 người, ngồi tại dãy ghế gỗ thấp ở vỉa hè, nhìn ra khung cảnh phố cổ. Bên cạnh quán cà phê có nhiều cửa hàng hoa và đồ thực phẩm. Nếu ghé tới đây uống cà phê, du khách có thể thử thêm bún thang ở đầu ngõ Cầu Gỗ, ngon có tiếng ở Hà Nội.', 9, 0, 0, 1, NULL, '2022-08-20 07:20:19', '2022-08-20 07:20:33'),
(806, 'vi', 'Đi tour trực thăng ngắm Đà Nẵng rồi cầu hôn bạn gái', 'Khi chiếc Bell 505 hạ cánh xuống sân bay Nước Mặn, cũng là lúc Trường Thông quỳ gối trao nhẫn cho bạn gái.', '08hG_tructhang-8181-1660496522.jpg', '2022-08-20', 'Cuối tháng 7, Nguyễn Trường Thông và bạn gái, Võ Thị Ngọc Quyên, cùng 27 tuổi, rời khỏi trực thăng để kết thúc tour ngắm Đà Nẵng từ trên cao. Bất ngờ, Thông quỳ gối và nói: \"Hôm nay là kỷ niệm ba năm yêu nhau, cảm ơn em đã yêu và ở cạnh anh thời gian qua. Làm vợ anh nhé\". Ngọc Quyên bất ngờ và bật khóc. Những vị khách có mặt tại đó đều chúc phúc đôi trẻ.\r\n\r\nThông cầu hôn bạn gái. Video: NVCC\r\n\r\nThông đã chọn tour bay trực thăng để thực hiện màn cầu hôn vì theo anh, đây là một trải nghiệm mới mà cả anh và bạn gái đều chưa có dịp thử. Chàng trai gốc Gia Lai hiện sống ở Đà Nẵng, cho biết đã lên kế hoạch từ ba tháng trước. Ngày 23/7 là kỷ niệm ba năm yêu, trong đó hai năm dịch nên Thông và Quyên chưa thể cùng nhau đi du lịch nhiều nơi như mong muốn.\r\n\r\nTìm hiểu tour bay trực thăng, Thông biết có dịch vụ cung cấp video 360 độ, được chụp hình tự do cùng máy bay, cũng như có hình để làm ảnh cưới sau này. Vì thế Thông lên kế hoạch cầu hôn bạn gái trong chuyến trực thăng. Thông in một băng rôn lớn để chuẩn bị cho ngày trọng đại. Ngày 22/7, anh qua sân bay bàn phương án cụ thể từ lúc lên trực thăng, hạ cánh, xuống máy bay, nhẫn và hoa sẽ được mang ra như thế nào, băng rôn xuất hiện lúc nào...\r\n\r\nQuyên và Thông chụp ảnh lưu niệm cùng tổ bay. Hiện tại, Thông làm kinh doanh còn Quyên làm cô giáo. Ảnh: NVCC\r\n\r\nQuyên và Thông chụp ảnh lưu niệm cùng tổ bay. Hiện tại, Thông làm kinh doanh còn Quyên làm cô giáo. Ảnh: NVCC\r\n\r\nMọi việc diễn ra theo đúng kế hoạch. Thông chọn gói bay 12 phút, thuê chuyến cho ba người với giá 7 triệu đồng. Họ bay theo lịch trình định sẵn qua Ngũ Hành Sơn, dọc biển Đà Nẵng, bán đảo Sơn Trà, vào giữa thành phố và quay về. Máy bay quay về sẽ hạ độ cao gần mặt đất, bay treo khoảng 20 giây hướng về phía băng rôn treo ở hàng rào để tạo bất ngờ rồi hạ cánh. Hoa tươi được mang ra trao cho Thông khi cặp đôi bước xuống đường băng. Vị khách trẻ cầm hoa, quỳ xuống và cầu hôn bạn gái.\r\n\r\nThông kể khi đó bạn gái anh hạnh phúc và khóc. \"Thấy bạn gái khóc, tôi rất thương\". Còn với chàng trai, thời điểm anh hồi hộp nhất là đợi cánh quạt ngừng quay để có bước xuống đất và quỳ gối trước bạn gái. Đầu năm 2023, họ sẽ làm đám cưới.\r\n\r\nTour bay trực thăng ngắm cảnh bắt đầu triển khai ở Việt Nam từ năm 2019, đặc biệt nở rộ sau Covid-19 khi ngành du lịch cần những sản phẩm mới để thu hút khách. Các địa phương đang có các tour này là Quảng Ninh, Đà Nẵng, TP HCM. Giá tour dao động từ 2 đến 5 triệu đồng một người, tùy thời gian và địa điểm bay. Tham gia tour, khách có thể đi chung với nhiều người (3-4 người) hoặc thuê riêng với giá cao hơn, kèm những yêu cầu đặc biệt.\r\n\r\nĐây là lý do mà Pishikin Alexander, 33 tuổi, người Nga và bạn gái Irena Moroz, 29 tuổi, người Ukraine hiện sống ở Việt Nam cũng chọn tour trực thăng để lên kế hoạch cầu hôn. Anh sử dụng tour VIP với giá hơn 1.000 USD, trên khoang chỉ có 2 người, bay theo hành trình tự chọn của hành khách, được đưa đón dịch vụ sang trọng.\r\n\r\nAlexander đã lên kế hoạch cầu hôn từ lâu và muốn sự kiện trọng đại này sẽ lãng mạn, khó quên và bất ngờ. Ngày 28/7, kỷ niệm 5 năm yêu nhau, hai người cùng lên trực thăng ngắm toàn cảnh thành phố Đà Nẵng. Kế hoạch của Alexander là in băng rôn có dòng chữ lớn \"Irena, em lấy anh nhé\" trên bãi biển và khi máy bay lượn qua, Irena có thể nhìn thấy từ trên cao. Lúc bạn gái đọc thấy lời cầu hôn cũng là lúc Alexander lấy nhẫn ra.\r\n\r\n\"Mắt cô ấy ngấn lệ, tất nhiên đó là những giọt nước mắt hạnh phúc từ một khoảnh khắc bất ngờ cảm động. Nụ cười rạng rỡ trên gương mặt, cô ấy trông rất, rất hạnh phúc. Đối với chúng tôi đó là một khoảnh khắc và trải nghiệm khó quên\", nam du khách Nga nói.\r\n\r\nCả hai hy vọng vào ngày họ làm đám cưới, người thân bạn bè có thể đến để ăn mừng.\r\nPishikin Alexander cầu hôn bạn gái sau khi thuê trực thăng nguyên chuyến bay ngắm cảnh ở Đà Nẵng. Ảnh: NVCC\r\n\r\n\"Mọi việc diễn ra thật tuyệt vời. Máy bay bay êm. Chúng tôi cảm thấy thoải mái trong suốt hành trình. Thời tiết cũng ủng hộ chúng tôi: trời quang và nắng đẹp, hành trình bay cũng tuyệt vời\". Alexander và Irena sống ở Việt Nam gần 5 năm. Họ yêu thích cảnh đẹp và đã đi nhiều nơi như vịnh Hạ Long, Mũi Né, Phú Quốc...\r\n\r\nTour bay trực thăng vẫn đang được mở rộng tại Việt Nam. Trong tháng 9, tour ngắm cảnh mùa vàng trên cao tại Mù Cang Chải (Yên Bái) đưa vào khai thác, được kỳ vọng đón 1.000 lượt khách trong một tháng. Trước đó, trong hai tháng hè, lượng khách tham gia tour bay ngắm cảnh tại Hạ Long và Đà Nẵng đạt 4.000 lượt.\r\n\r\nPhương Anh - Trung Nghĩa\r\n\r\nTour ngắm Đà Nẵng từ trực thăng trở lại\r\nTour ngắm Đà Nẵng từ trực thăng trở lại\r\nDu khách sẽ ngắm thành phố, danh thắng Ngũ Hành Sơn, biển Mỹ Khê, bán đảo Sơn Trà, sông Hàn... từ trên cao. \r\n\r\nDu khách hào hứng với tour trực thăng đầu tiên ở TP HCM\r\nDu khách hào hứng với tour trực thăng đầu tiên ở TP HCM\r\nNhiều khách đầu tiên của tour trực thăng đã nhận xét đây là \"trải nghiệm đáng thử khi đến TP HCM\".  35\r\n\r\nMời độc giả gửi bài, câu hỏi tại đây hoặc về dulich@vnexpress.net\r\n  Trở lại Du lịch\r\nLưu\r\nChia sẻ\r\n\r\nXem nhiều\r\nKhách Việt bất ngờ vì Campuchia đắt đỏ sau Covid-19\r\nKhách Việt bất ngờ vì Campuchia đắt đỏ sau Covid-19  25\r\nQuốc vụ khanh Bộ Nội vụ Anh ngồi cà phê phố cổ \r\nCô gái Việt chuyển tới Nepal sống vì mê leo núi  13\r\nKhách Việt uống cà phê trong xác máy bay bị tai nạn \r\n\r\nÝ kiến (35)\r\nÝ kiến của bạn\r\nQuan tâm nhấtMới nhất\r\nG\r\nGà conMất toi 6 triệu, cái mà phụ nữ cần chính là tấm lòng .\r\n\r\n67\r\nTrả lời\r\nChia sẻ\r\n07:23 18/8\r\nVi phạm\r\n3 trả lờiT\r\nthanhchungland109Nhiều người buồn cười thật. Cầu hôn thì ai mà chả muốn thật đáng nhớ thật đặc biệt. Tiền của người ta thì người ta dùng sao kệ họ, chứ mắc gì rồi bảo thể hiện bảo màu mè? Chắc mấy ông nói vậy 1 là chưa cầu hôn bạn gái 2 là cầu hôn dạng xoàng xoàng, lãng xẹt nên ghen tỵ đây mà =))\r\n\r\n47\r\nTrả lời\r\nChia sẻ\r\n09:45 18/8\r\nVi phạm\r\nN\r\nnam nguyenKhông biết được không ... Nhưng trước mắt là tốn kém rồi.\r\n\r\n28\r\nTrả lời\r\nChia sẻ\r\n07:54 18/8\r\nVi phạm\r\n4 trả lờiV\r\nVan SonRất lãng mạn. Đừng để trở thành lãng xẹt là ok!\r\n\r\n26\r\nTrả lời\r\nChia sẻ\r\n08:39 18/8\r\nVi phạm\r\n\r\nnguyenhungLãng mạn , tuyệt vời .. chúc các cặp đôi hạnh phúc..\r\n\r\n15\r\nTrả lời\r\nChia sẻ\r\n08:39 18/8\r\nVi phạm\r\nXem thêm ý kiến\r\n', 12, 0, 0, 1, NULL, '2022-08-20 07:22:26', '2022-08-20 07:22:26'),
(808, 'vi', 'Lối sống tiết kiệm \'khét tiếng\' của tài tử Hong Kong', 'Dùng điện thoại \"cục gạch\", mặc đồ bình dân, đi tàu điện... nhưng thích làm từ thiện, tặng toàn bộ tài sản cho xã hội là cuộc sống của ngôi sao điện ảnh Hong Kong Châu Nhuận Phát.', 'XvR3_7-mkoa-jpeg-7779-1630039604.jpg', '2022-08-20', 'Dùng điện thoại \"cục gạch\", mặc đồ bình dân, đi tàu điện... nhưng thích làm từ thiện, tặng toàn bộ tài sản cho xã hội là cuộc sống của ngôi sao điện ảnh Hong Kong Châu Nhuận Phát.\r\n\r\nTrong sách giáo khoa trung học cơ sở của đặc khu này, Châu Nhuận Phát là cái tên được đưa vào cùng với danh tướng thời cổ đại Nhạc Phi và nhà cách mạng Tôn Trung Sơn. Ủy ban Đánh giá Giáo dục Hồng Kông cho biết: \"Chưa từng có nghệ sĩ nào được đưa vào sách giáo khoa trước đây. Chúng tôi lo lắng khi nghệ sĩ bị phát hiện có vấn đề về đạo đức, sẽ là một ví dụ xấu. Nhưng tất cả chúng tôi đồng ý rằng Châu Nhuận Phát là một ví dụ điển hình về lối sống giản dị cùng một nhân cách cao đẹp\".\r\n\r\nChâu Nhuận Phát và vợ Trần Hội Phi, đều là người làm trong ngành giải trí, có một lối sống giản dị và hạnh phúc, dù không có con. Có năm sinh nhật vợ, nam diễn viên tặng hai củ cà rốt anh tự trồng. Ảnh: Zhuanlan.\r\nChâu Nhuận Phát và vợ Trần Hội Phi, đều là người làm trong ngành giải trí, có một lối sống giản dị và hạnh phúc, dù không có con. Có năm sinh nhật vợ, nam diễn viên tặng \"hai củ cà rốt\" tự trồng. Ảnh: Zhuanlan.\r\n\r\nTài tử 66 tuổi này sinh ra trong một gia đình nghèo trên đảo Nam Nha. Cha anh là một người đánh cá nghiện cờ bạc nên chỉ có người mẹ chèo chống nuôi các con. Từ nhỏ Châu Nhuận Phát đã nuôi gà, làm ruộng, dậy sớm bán rau quả phụ mẹ. Năm 10 tuổi, cậu bé tranh thủ mọi kỳ nghỉ hè để đi làm, kiếm tiền đóng học phí. Đêm trước ngày tốt nghiệp trung học, cha đổ bệnh qua đời. Cậu thiếu niên quyết định bỏ học đi làm nuôi gia đình và trải qua đủ các công việc như đánh giày, bồi bàn, bốc vác, bán hàng...\r\n\r\nMột lần tình cờ thấy đài TVB tổ chức một khóa đào tạo nghệ sĩ, không yêu cầu về học vấn, chàng trai lúc này 18 tuổi đăng ký tham gia. Với anh, đây là một cơ hội hiếm có, không phải để trở thành ngôi sao hay nghệ sĩ, mà để có một \"công việc ổn định\". Tham gia lớp diễn xuất, Châu Nhuận Phát bị nhận xét là \"cứng đầu\", \"ngu\", cùng bao lời chế giễu nhưng chàng trai nghèo cố gắng chịu đựng vì anh biết chỉ có một con đường để đi, đó là không lùi bước, từ từ tiến lên.\r\n\r\nBắt đầu từ những năm 1980 tới nay, Châu Nhuận Phát dần đưa tên tuổi mình vượt khỏi Hong Kong, đại lục và vươn tầm thế giới qua hàng loạt tác phẩm để đời như Bến Thượng Hải, Tiếu Ngạo Giang Hồ, Bản sắc anh hùng, Thần bài, Cướp biển vùng Caribbean... Tài năng diễn xuất đưa chàng trai nghèo và cả gia đình \"một bước lên mây\", tuy nhiên, họ vẫn lựa chọn cuộc sống giản dị vốn có.\r\n\r\nNam diễn viên nổi tiếng đi dép lê 15 tệ và mặc những chiếc áo phông bình dân cả chục năm. Ra ngoài không cần vệ sĩ, mà đi xe bus, tàu điện như người bình thường. Mỗi sáng Châu Nhuận Phát ăn sáng ngoài chợ, mua rau củ về nhà, cười hào sảng với người bán cá, bán rau.\r\n\r\nNam diễn viên từng tiết lộ chỉ tiêu 800 HKD (khoảng 2,4 triệu đồng) mỗi tháng. Thậm chí, hai năm trước, anh mới từ bỏ chiếc điện thoại Nokia đời đầu đã gắn bó với suốt 17 năm để chuyển sang smartphone.\r\n\r\nChâu Nhuận Phát (ngoài cùng phải), bên mẹ và các chị em. Đằng sau thành công của tài tử có công lớn của người mẹ Trần Lệ Phương. Năm 2008, bà được trao danh hiệu Người mẹ xuất sắc, tại Giải thưởng Người Hoa Nổi bật Thế giới. Ảnh: Zhuanlan.\r\nChâu Nhuận Phát (ngoài cùng phải), bên mẹ và các chị em. Đằng sau thành công của tài tử có công lớn của người mẹ Trần Lệ Phương. Năm 2008, bà được trao danh hiệu \"Người mẹ xuất sắc\", tại Giải thưởng Người Hoa Nổi bật Thế giới. Ảnh: Zhuanlan.\r\n\r\nĐạo diễn nổi tiếng Ngô Vũ Sâm chia sẻ, khi ở đoàn phim \"Bản sắc anh hùng\", có một nhân viên chê cơm hộp không ngon nên chỉ ăn vài miếng rồi bỏ. Châu Nhuận Phát thấy vậy liền cầm hộp cơm đó lên, ăn hết và khuyên mọi người không nên lãng phí lương thực.\r\n\r\nNgười dân xứ Cảng Thơm truyền tai nhau: \"Nếu bạn muốn gặp một ngôi sao Hong Kong, bạn có thể đi mua sắm trong một cửa hàng sang trọng, nếu muốn gặp Châu Nhuận Phát, hãy đến tàu điện ngầm, bến xe bus và chợ rau\".\r\n\r\nChỉ cần tra Google với từ khóa \"Chow Yun Fat selfie\", sẽ ra vô số những ảnh nam tài tử tự sướng với người hâm mộ. Có lần một người xin chụp ảnh cùng thần tượng nhưng điện thoại lại hết pin, anh không ngại chờ họ vài phút để sạc. Khi phóng viên hỏi sao lại làm như vậy, anh trả lời: \"Nhiều người chưa bao giờ gặp tôi trước đây, nhưng đã âm thầm ủng hộ tôi trong suốt 30 năm. Bây giờ họ chỉ muốn gặp tôi trong 3 phút. Tại sao lại không đồng ý?\".\r\n\r\nTrong một chuyến leo núi gần đây với bạn bè, Châu Nhuận Phát xuất hiện với mái tóc dài. Ai cũng bất ngờ khi anh nói lý do không cắt tóc thường xuyên, là vì mỗi lần làm việc đó phải tốn vài trăm đôla. Nếu cắt mỗi tháng, sẽ tốn hàng nghìn HKD mỗi năm.\r\n\r\nKhi mẹ mất tháng 3/2020, ở tuổi 98, nam diễn viên - vốn nổi tiếng là người con hiếu thảo - chỉ tổ chức một đám tang đơn giản bên gia đình và bạn bè thân. Sau đó, anh đưa tro cốt mẹ về quê nhà trên đảo Nam Nha, để những chiếc lá rụng về cội nguồn.\r\n\r\nNam diễn viên hay chụp ảnh tự sướng với người hâm mộ, thoải mái ăn vỉa hè hay ngủ gà gật trên tàu điện. Ảnh: Zhuanlan.\r\nChâu Nhuận Phát thường xuyên chụp ảnh tự sướng với người hâm mộ, thoải mái ăn vỉa hè hay ngủ gà gật trên tàu điện. Ảnh: Zhuanlan.\r\n\r\nVới bản thân thì giản dị, tiết kiệm, với người xung quanh Châu Nhuận Phát hào sảng, rộng rãi. Tài tử có sở trường chụp ảnh. Tại một liên hoan phim năm 1997, bức ảnh chụp chùm cà chua vợ mua ngoài chợ về của anh đoạt giải 3, số tiền giải thưởng đã được mang đi làm từ thiện. Bộ ảnh hóa trang cho Củng Lợi khi làm phim \"Hoàng Kim Giáp\" mà Châu Nhuận Phát chụp đã được đấu giá và thu về 3,18 triệu tệ. Như mọi lần, số tiền cũng tặng cho một quỹ từ thiện...\r\n\r\nCố diễn viên nổi tiếng Ngô Mạnh Đạt từng ôm hận Châu Nhuận Phát tròn 10 năm. Song khi biết sự thật, ông vô cùng hối hận. Cả hai là bạn thân từ thời còn học chung lớp diễn xuất. Sự nghiệp, tiền tài đến với Ngô Mạnh Đạt nhanh nhưng cũng đi nhanh vì đốt tiền vào ăn chơi trác táng. Những năm 1980 ông bị \"phong sát\", các đài truyền hình, đạo diễn quay lưng, ngân hàng siết nợ. Lúc đó Ngô Mạnh Đạt đã hỏi vay Châu Nhuận Phát 300.000 HKD. Thật bất ngờ, người bạn thân phũ phàng: \"Anh tự mình giải quyết\".\r\n\r\nNgô Mạnh Đạt hận và muốn tự tử. Giữa lúc tuyệt vọng, có một đạo diễn mời ông tham gia bộ phim \"Thiên nhược hữu tình\". Tác phẩm giúp Châu Mạnh Đạt thoát khỏi nợ nần, từ đó rút cũng rút được kinh nghiệm xương máu, chăm chỉ làm việc trả hết nợ và đầu tư vào kỹ năng diễn xuất. Cũng nhờ bộ phim này, Ngô Mạnh Đạt giành được giải Nam diễn viên phụ xuất sắc nhất tại giải thưởng Kim Tượng.\r\n\r\nNgày trao giải, đích thân Châu Nhuận Phát đến chúc mừng. Nam diễn viên \"Thiên nhược hữu tình\" nói: \"Không cần anh giúp đỡ, tôi vẫn không chết đói\". Lúc này đạo diễn mới tiết lộ, kỳ thực Châu Nhuận Phát là người đã nhờ vả ông giúp đỡ. Châu Mạnh Đạt đã ôm người bạn khóc. \"Nếu lúc đó tôi cho anh vay tiền thì có lẽ đã hại anh. Bởi anh sẽ không bỏ cờ bạc, sẽ không thực sự đứng lên\", Châu Nhuận Phát nói.\r\n\r\nSau hơn 30 năm hoạt động nghệ thuật, một số phương tiện truyền thông ước tính tài sản của Châu Nhuận Phát là 1,3 tỷ HKD, cũng có báo ước tính 2,3 hay 3,4 tỷ. Nhưng tất cả đều sai, vì vào năm 2017 Châu Nhuận Phát, lúc đó 62 tuổi, và vợ Trần Hội Liên, 58 tuổi, đã quyên góp toàn bộ gia sản làm từ thiện, tổng số tiền là 5,6 tỷ HKD (hơn 722 triệu USD). Người hâm mộ càng thêm khâm phục lối sống giản dị, tiết kiệm đến mức tằn tiện của nam diễn viên \"Thần bài\".\r\n\r\nTuy ít còn hoạt động giải trí, nhưng tin tức về Châu Nhuận Phát vẫn thường xuất hiện. Đó là tin một bà mẹ đơn thân cảm ơn Châu Nhuận Phát giúp chị vực dậy việc kinh doanh quán ăn. Diễn viên Lư Hải Bằng chia sẻ mấy tháng nay thường được Châu Nhuận Phát đến nhà chở đi leo núi, massage chân, giúp ông đi lại dễ dàng hơn vì mắc bệnh tiểu đường và tắc nghẽn mạch máu. Đầu tháng này, hai mẹ con ở Thượng Hải đã học theo tấm gương thần tượng, tặng ngôi nhà 1,5 triệu USD cho nhà nước...\r\n\r\n\"Tiền bạc không phải nguồn cội của hạnh phúc. Tài sản đều không phải của chúng tôi. Khi đến với thế giới, chúng tôi chẳng có gì thì khi đi cũng vậy\", nam diễn viên được triệu người yêu mến, nói.\r\n\r\nBảo Nhiên (Theo Zhuanland, Sohu)', 12, 0, 0, 1, NULL, '2022-08-20 07:27:01', '2022-08-20 07:27:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Pro', 'admin@gmail.com', NULL, '$2y$10$OFC7FFpNl3JfG1epDoKoJOQnhIkUMcNPCyYmgSksw2TElpRzfpEAa', NULL, '2022-08-20 04:40:38', '2022-08-20 04:40:38');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loaisp_tenloai_unique` (`tenLoai`);

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tin`
--
ALTER TABLE `tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=809;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
