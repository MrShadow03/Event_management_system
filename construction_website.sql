-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 02:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construction_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT 'banner/default.jpg',
  `video` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `image`, `video`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Turning Visions Into Bricks', 'Converting aspirations into tangible structures with precision and expertise.', 'banner/bH97FxGrCVllBHpjsxbqi2dw2i2apcqozFnTNGIe.jpg', 'https://youtu.be/UDvh63xHVa0', 1, '2023-08-13 06:15:22', '2023-08-17 18:22:49'),
(2, 'Building Dreams, Creating Spaces', 'Transforming your vision into reality with our expert construction solutions.', 'banner/cbvEX1oAhfKTapwaOip5NfMdftpnbUyWvghaVzAk.jpg', 'https://youtu.be/khnr4-ehwKA', 1, '2023-08-13 11:24:13', '2023-08-13 12:50:03'),
(3, 'Your Trusted Construction Partner', 'Reliable construction services tailored to meet your project\'s needs.', 'banner/4kDokZ1QFrRg5WNA7nxtl1euwCfsk5pbidd4AnZC.jpg', 'https://youtu.be/hGjeETM24rk', 1, '2023-08-13 11:26:05', '2023-08-13 14:37:50'),
(4, 'Builders of Sustainable Futures', 'Focusing on eco-friendly construction practices for a greener tomorrow.', 'banner/qadhi3zRPLFXKO7h50pe0ja6DQRcpQgvGlPsS6xi.jpg', NULL, 1, '2023-08-13 14:18:30', '2023-08-15 12:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Default', '2023-08-16 12:31:23', '2023-08-16 06:52:50'),
(2, 'Architechture', '2023-08-16 06:46:29', '2023-08-16 06:46:29'),
(4, 'Planning', '2023-08-16 07:01:00', '2023-08-16 07:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `client_messages`
--

CREATE TABLE `client_messages` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `subject` varchar(255) DEFAULT '[No subject]',
  `message` text NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `is_important` tinyint(1) NOT NULL DEFAULT 0,
  `is_unread` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_messages`
--

INSERT INTO `client_messages` (`id`, `name`, `email`, `phone_number`, `subject`, `message`, `ip`, `is_important`, `is_unread`, `created_at`, `updated_at`, `deleted_at`) VALUES
(31, 'Lysanne Weissnat', 'lauretta82@hotmail.com', '319.256.6040', 'Eveniet dolores voluptatum qui esse a maiores officiis.', 'Repudiandae eveniet est minus. Deleniti rem sed sit. Architecto vitae tenetur vel optio doloribus exercitationem. Omnis pariatur rerum et asperiores maiores eveniet.', NULL, 1, 0, '2023-07-25 01:33:07', '2023-08-25 10:20:08', NULL),
(32, 'Noble Brown', 'nella51@gmail.com', '+16293061734', 'Quia ea adipisci in doloremque nihil id.', 'Ipsum fuga sapiente quasi quae maxime quia. Voluptatibus aut et est numquam dicta. Velit nihil doloribus quo nostrum.', NULL, 0, 0, '2022-09-18 12:45:59', '2023-08-25 10:20:08', NULL),
(33, 'Jannie Kautzer DVM', 'jalyn.sporer@cassin.biz', '6417473463', 'Cumque similique enim nam et aut architecto veniam quis.', 'A rerum sequi sed repellat est ab doloremque qui. In sit esse non suscipit aspernatur. Sed quo quia id.', NULL, 1, 0, '2023-06-06 15:05:13', '2023-08-25 10:20:08', NULL),
(34, 'Miss Winnifred Zieme II', 'farrell.estefania@kuhic.com', '+1.551.743.8723', 'Aut maxime sit enim dolor commodi accusamus praesentium.', 'Ab hic aspernatur minus explicabo. Porro voluptatem asperiores sed sit est nulla.', NULL, 1, 0, '2023-06-07 21:59:03', '2023-08-25 10:20:08', NULL),
(35, 'Trinity Hagenes', 'wunsch.shyanne@hotmail.com', '+13032784668', 'Distinctio sint deleniti soluta ut suscipit quod.', 'Culpa itaque voluptas ex ratione corrupti veniam. Optio sequi expedita fugiat rerum ut. In nesciunt ad explicabo modi laborum corrupti saepe enim.', NULL, 0, 1, '2023-08-21 17:24:31', '2023-08-25 10:20:08', NULL),
(36, 'Maryam Hettinger', 'bergstrom.katrina@yahoo.com', '2605412639', 'Officia modi consequatur sunt dolorum consequatur aut.', 'Corporis quia et quis aspernatur sapiente in rerum. Pariatur magni veniam ut consequatur. Sequi illum a alias eaque.', NULL, 0, 0, '2023-08-10 12:19:38', '2023-08-25 10:20:08', NULL),
(37, 'Letitia Harris', 'xshields@oberbrunner.org', '6898920529', 'Laborum impedit quia temporibus blanditiis repellat quo alias.', 'Architecto natus blanditiis officiis laboriosam est molestiae omnis. Assumenda reiciendis et delectus et placeat beatae quibusdam porro. Reiciendis aut facilis non explicabo tempora. Velit sed explicabo similique quos quibusdam.', NULL, 1, 0, '2023-08-21 08:07:37', '2023-08-25 10:20:08', NULL),
(38, 'Alfonso Bayer', 'orie26@gottlieb.com', '641.365.8417', 'Quis fugit ab magni est expedita voluptatem asperiores.', 'Placeat dicta et veritatis reprehenderit rem voluptate. Nostrum neque fugiat et debitis in animi. Porro necessitatibus excepturi esse veniam id voluptas. Velit a velit saepe et.', NULL, 1, 0, '2023-06-25 12:02:52', '2023-08-25 10:20:08', NULL),
(39, 'Josianne Gulgowski DDS', 'idurgan@daniel.com', '+15043665630', 'Nostrum ab placeat ipsa.', 'Eos itaque ipsa aliquid quos odit illo facilis. Id consequatur rerum exercitationem consequuntur ullam non rerum. Eaque doloremque nihil ipsam voluptas quia et possimus. Laboriosam consequatur vel soluta.', NULL, 1, 1, '2023-04-03 01:08:31', '2023-08-25 10:20:08', NULL),
(40, 'Talon Cremin', 'isadore93@tremblay.info', '+15674753743', 'Ut animi odit enim eligendi molestias.', 'Esse reprehenderit ea dolor molestias vero consequatur. Autem nulla facilis ducimus quae. Voluptatem delectus provident quia odit aut recusandae.', NULL, 1, 0, '2023-04-06 16:30:07', '2023-08-25 10:20:08', NULL),
(41, 'Holden Skiles', 'orenner@gmail.com', '6159796014', 'Est iure omnis autem asperiores temporibus odit.', 'Atque quaerat eveniet aut dolorem id quisquam. Ipsa fugit impedit reprehenderit. Quidem laborum adipisci quo aspernatur neque minima.', NULL, 0, 1, '2023-08-02 16:41:10', '2023-08-25 10:20:08', NULL),
(42, 'Lou Grady', 'swunsch@harvey.com', '+19736755804', 'Occaecati et illo dolorem ipsa assumenda est quaerat.', 'Consequatur molestiae voluptates dolorum ipsum ducimus autem sint excepturi. Qui ut laudantium vel ad omnis consequuntur excepturi. Inventore autem eveniet magnam et qui voluptatem sequi deserunt. Dolores ipsum eos quod doloremque qui.', NULL, 1, 0, '2022-11-27 07:47:55', '2023-08-25 10:20:08', NULL),
(43, 'Reanna Conroy', 'rrice@beatty.biz', '+14232588641', 'Cumque exercitationem quia et.', 'Consequatur quis consequatur accusamus officiis ex. Nesciunt laboriosam doloremque commodi explicabo placeat veniam. Consequatur illo aut fugiat eaque aut.', NULL, 0, 1, '2023-06-01 05:17:13', '2023-08-25 10:20:08', NULL),
(44, 'Colton Wyman', 'armstrong.conrad@vandervort.biz', '+14694743294', 'Quo iusto optio quisquam officia et ea cupiditate.', 'Voluptatem nihil voluptatem vitae adipisci. Omnis ex a voluptatum vel voluptatem. Sint inventore quasi dolor ut quidem autem et. Culpa rerum asperiores in sit fuga. Sequi dignissimos harum qui iste eum soluta.', NULL, 1, 0, '2022-08-28 11:18:08', '2023-08-25 10:20:08', NULL),
(45, 'Jakayla Rice', 'katheryn.reynolds@hotmail.com', '15207894314', 'Natus voluptatem corporis temporibus.', 'Accusamus doloribus autem et odio non non minus. Libero consequatur sint alias veniam vero. Distinctio sint nisi omnis consequuntur enim tempore perspiciatis.', NULL, 1, 0, '2023-02-01 00:57:50', '2023-08-25 10:20:08', NULL),
(46, 'Enrico Tromp', 'favian33@gmail.com', '+18608294952', 'Reiciendis in et est itaque ut.', 'Quia recusandae est et ut voluptatem. Repellat sit impedit minus doloribus repellendus debitis sit qui. Eos iure distinctio tenetur nobis in quia. Quod sit voluptas aut et odit id.', NULL, 1, 0, '2023-07-08 16:35:15', '2023-08-25 10:20:08', NULL),
(47, 'Dr. Ayden Kohler MD', 'rebeka53@hotmail.com', '+14787921732', 'Nulla et ex ad dolores aspernatur dolores autem.', 'Sunt voluptatem quos ut reprehenderit. Vel ea magni cupiditate aut iusto est reprehenderit.', NULL, 0, 1, '2022-09-02 00:41:45', '2023-08-25 10:20:08', NULL),
(48, 'Liliane Wunsch', 'lacey81@wunsch.com', '13215685427', 'Qui velit nostrum quis possimus.', 'Aspernatur inventore minima qui rem in nisi rerum. Deserunt cupiditate accusamus expedita recusandae illum provident veniam. Ut accusamus quo possimus.', NULL, 0, 1, '2023-01-11 17:32:17', '2023-08-25 10:20:08', NULL),
(49, 'Aliza Schamberger MD', 'herman.pearlie@hotmail.com', '+14586917168', 'Expedita nam rerum dolorum sit qui libero provident est.', 'Aliquid iusto qui inventore vel qui sit animi. Cum esse voluptas sequi. Enim corporis aut nisi cupiditate cumque cum.', NULL, 0, 0, '2023-06-15 01:08:56', '2023-08-25 10:20:08', NULL),
(50, 'Charlie Wunsch', 'legros.nicolas@kovacek.org', '+13644979225', 'Sint laudantium nisi assumenda nihil.', 'Repellendus aspernatur distinctio quos sunt. Quidem dolor distinctio quibusdam ut enim illo saepe. Optio et praesentium neque ut ipsum iste.', NULL, 1, 0, '2022-09-27 07:29:18', '2023-08-25 10:20:08', NULL),
(51, 'Keanu Thompson', 'mbednar@hotmail.com', '9208858182', 'Mollitia fuga aut sunt et blanditiis amet nobis.', 'Optio ex maxime quia necessitatibus dolorem. Explicabo cumque soluta quidem eum sequi. Qui enim veniam quas id reiciendis suscipit. Quidem quo sint enim porro dolores consequatur reprehenderit.', NULL, 1, 1, '2022-08-26 08:53:55', '2023-08-25 10:20:08', NULL),
(52, 'Ollie Olson', 'fkerluke@swift.com', '+13084815264', 'Id quam eos temporibus vitae dolorum.', 'Explicabo optio eius dolores nostrum. Omnis laboriosam eaque aliquam et et explicabo dolorem.', NULL, 0, 0, '2022-09-20 04:27:08', '2023-08-25 10:20:08', NULL),
(53, 'Danial Kuhlman', 'kemmer.jannie@ullrich.com', '15207907183', 'Fugiat laboriosam inventore culpa dolores nostrum ut.', 'Consectetur perferendis voluptatem rerum ea fugit ut. Cumque totam rerum quia nihil quia dolor fuga. Voluptate in dignissimos ut quam at nam praesentium.', NULL, 1, 1, '2022-11-13 00:00:44', '2023-08-25 10:20:08', NULL),
(54, 'Johnson Bogisich', 'corkery.rosendo@waters.com', '19808615722', 'Sequi ut iusto enim velit.', 'A modi exercitationem vitae dignissimos. Eaque iste officia nesciunt voluptate quis consequatur rerum qui. Quisquam exercitationem expedita rerum nesciunt dolores expedita. Aut officiis dolor voluptas velit quia optio rerum sunt.', NULL, 0, 0, '2022-10-21 06:34:10', '2023-08-25 10:20:08', NULL),
(55, 'Ms. Elisha Morar', 'kprice@hotmail.com', '934.473.8587', 'Itaque et quam eligendi nisi sed numquam.', 'Magnam est eos autem voluptas nam delectus dolorem nostrum. Odio adipisci accusamus dolor voluptatem et. Et odio enim nobis doloribus earum.', NULL, 1, 1, '2023-03-01 23:51:35', '2023-08-25 10:20:08', NULL),
(56, 'Brennon Hahn PhD', 'yundt.fidel@adams.com', '+17258762921', 'Minus ut rerum fugiat neque qui a voluptas voluptas.', 'Rerum nihil ab sint eveniet non et inventore. Quasi dignissimos blanditiis quis sunt nobis in totam consequatur.', NULL, 0, 0, '2023-03-31 00:44:48', '2023-08-25 10:20:08', NULL),
(57, 'Mrs. Ardith Marvin IV', 'sammie.wolf@hotmail.com', '+14842498173', 'Fugiat quasi ut id quae quis.', 'Minima mollitia quod illo et. Nesciunt dolores eum atque ut aut qui. Adipisci eius autem consequatur dolor voluptatem dolore.', NULL, 1, 1, '2023-07-15 06:18:05', '2023-08-25 10:20:08', NULL),
(58, 'Lorenza Kutch', 'idenesik@yahoo.com', '18204231537', 'Iusto et dolores excepturi ex quae.', 'Modi dolores eveniet enim necessitatibus beatae. Quia sapiente ab aut aspernatur. Vitae qui neque quae. Sit perferendis labore rem.', NULL, 0, 0, '2023-01-23 10:54:27', '2023-08-25 10:20:08', NULL),
(59, 'Marques Boyer DVM', 'arath@hotmail.com', '2233423589', 'Vitae officiis nihil ratione corporis.', 'Et nihil reiciendis voluptas maiores est. Esse aut veniam ipsa ab velit. Autem vitae eligendi mollitia et.', NULL, 1, 1, '2023-01-13 11:38:22', '2023-08-25 10:20:08', NULL),
(60, 'Garry Prohaska', 'kuphal.candido@toy.com', '4799306988', 'Qui vel minus sit doloremque.', 'Aliquam sint animi ut maiores ut molestiae qui qui. Vel ex saepe ut sequi saepe at. Aspernatur quae voluptate aut deleniti aut architecto error.', NULL, 0, 1, '2022-10-15 14:57:43', '2023-08-25 10:20:08', NULL),
(61, 'Earnestine Stanton V', 'alexanne.conn@gmail.com', '+14126568734', 'Sit facere eos optio aut quidem.', 'Quam illum eos soluta maiores molestias aut. Non quasi excepturi ipsam et minus. Id dignissimos dolorum consequatur et assumenda eius voluptatem.', NULL, 1, 1, '2022-12-27 09:54:58', '2023-08-25 10:20:08', NULL),
(62, 'Jolie Eichmann', 'smuller@mayert.com', '6579715205', 'Ex earum est dignissimos consequatur vel dignissimos et ab.', 'Dolorem ipsa harum eius libero velit. Enim quo quis tenetur adipisci odit quas exercitationem. Et molestiae ut et amet molestiae odio inventore nihil. Consectetur eum quia eum.', NULL, 1, 1, '2023-06-12 02:24:37', '2023-08-25 10:20:08', NULL),
(63, 'Jovani Hills', 'rosina.prohaska@beer.com', '6318477066', 'Est eum repellendus earum mollitia et est aspernatur.', 'Aliquid et quia ullam sequi. Placeat voluptatem dolor officiis voluptatem. Optio eaque et provident ut. Reiciendis temporibus et maxime.', NULL, 1, 1, '2023-08-04 05:52:16', '2023-08-25 10:20:08', NULL),
(64, 'Elisa Wisozk', 'rrunte@mclaughlin.net', '2839607268', 'Illo illum occaecati blanditiis quasi voluptas in ab.', 'Voluptatum nihil earum eius nam non totam iusto. Hic sunt ipsa odio laboriosam facere exercitationem quo provident. Ea quia quos iste ea aut error ipsum. Corporis dignissimos perspiciatis officiis inventore.', NULL, 1, 0, '2023-07-23 08:11:30', '2023-08-25 11:16:56', NULL),
(65, 'Ryleigh Auer Jr.', 'bednar.vincenza@yahoo.com', '16824926096', 'Adipisci eum et perferendis.', 'Cum et officia repellat omnis nemo. Eos veritatis molestiae deleniti vel est rerum magni. Quis molestias et sapiente in et.', NULL, 1, 1, '2023-04-26 16:08:55', '2023-08-25 10:20:08', NULL),
(66, 'Prof. Dina Yundt', 'arau@champlin.com', '4796148630', 'Perspiciatis autem voluptatem officiis est.', 'Porro ut exercitationem quia et. Iusto voluptatem numquam quam. Itaque aut iusto sunt quaerat qui aut porro.', NULL, 1, 1, '2023-07-28 23:52:28', '2023-08-25 10:20:08', NULL),
(67, 'Kris Moore', 'nfisher@hotmail.com', '414.803.1660', 'Atque beatae et consectetur qui autem exercitationem.', 'Harum est qui voluptatem consectetur blanditiis corrupti commodi. Officiis nulla accusamus incidunt doloribus aperiam. Sint quam et nisi id doloribus ipsum magnam. Quibusdam animi dolorum voluptatem magni qui.', NULL, 0, 1, '2023-07-12 17:10:41', '2023-08-25 10:20:08', NULL),
(68, 'Dr. Valerie Trantow IV', 'carter.jamey@gmail.com', '7317274021', 'Perferendis accusantium ut officia in.', 'Id eveniet quod numquam quia eum vero esse. In pariatur eius neque repellat quos. Est exercitationem incidunt iusto est omnis perferendis. Magnam nesciunt et sint optio. Sit a eligendi facere rerum cumque.', NULL, 1, 0, '2023-07-06 02:51:16', '2023-08-25 10:20:08', NULL),
(69, 'Al Rodriguez', 'vkerluke@gmail.com', '14582966326', 'Odio totam distinctio dolores illo quis sed.', 'Id atque non repellendus dolorem neque quae. Et sint molestiae omnis. Vel ut quae ipsam et sint facilis perspiciatis.', NULL, 0, 1, '2022-10-13 13:35:05', '2023-08-25 10:20:08', NULL),
(70, 'Janessa Tremblay', 'laisha.zieme@fritsch.com', '4128367441', 'Quos excepturi aliquid eligendi consequuntur debitis dolores.', 'Rerum quia eos aliquid molestias. Omnis veritatis harum est repellendus in. Sint eveniet omnis voluptatum ipsa. Qui aut est ea corrupti sint molestiae magni.', NULL, 1, 1, '2023-01-13 15:14:09', '2023-08-25 10:20:08', NULL),
(71, 'Prof. Braulio Waters', 'qgleason@yahoo.com', '+1.651.460.6076', 'Sed saepe ratione qui molestiae inventore.', 'Laborum adipisci recusandae velit officia non ut illo. Voluptatem neque aut qui. Repudiandae ut eligendi possimus sed nisi ducimus quae.', NULL, 0, 1, '2022-10-01 22:48:55', '2023-08-25 10:20:08', NULL),
(72, 'Michel Mills', 'gstroman@yahoo.com', '2704620916', 'Autem omnis magnam voluptas nisi.', 'Impedit molestias et voluptas et et perspiciatis sit possimus. Qui aliquam qui nam ea aut dicta aperiam. Fugiat dolorum enim et qui voluptate dolore molestiae. Est autem fuga eaque dignissimos.', NULL, 0, 1, '2022-09-21 12:52:06', '2023-08-25 10:20:08', NULL),
(73, 'Jerrold Kassulke', 'ejast@hotmail.com', '+18786502762', 'Vel quas rerum et aliquam.', 'Sed sit et enim quia ex modi harum. Consequatur in voluptatibus sint repellendus perspiciatis. Labore dolores delectus ut commodi. Error vitae sed nihil quis et et sed.', NULL, 1, 1, '2022-10-19 05:32:49', '2023-08-25 10:20:08', NULL),
(74, 'Mr. Lucas Lehner', 'lennie.king@oberbrunner.info', '3018155871', 'At placeat laborum provident beatae dolor qui autem.', 'Maiores quia quod repellat sit eligendi ut consequatur. Neque ratione unde eveniet aut consequatur. Tempore iusto in nostrum delectus natus. Fugit error sit quidem nulla voluptates facilis et.', NULL, 0, 0, '2023-04-02 04:19:54', '2023-08-25 10:20:08', NULL),
(75, 'Ms. Lisa Schmitt', 'ivy.hodkiewicz@yahoo.com', '949.847.0078', 'Rerum accusamus ut minus et architecto.', 'Corrupti numquam eum eveniet esse ipsam perspiciatis et. Nemo laboriosam consequatur velit voluptates eum. Quos modi ut rerum omnis.', NULL, 0, 0, '2023-01-26 11:06:59', '2023-08-25 10:20:08', NULL),
(76, 'Kenyatta Lockman', 'otho80@gmail.com', '6237334361', 'Ad rerum itaque doloremque aut quis.', 'Ratione odio eos aliquam ullam eum sit. Quisquam rerum debitis quia. Porro ut doloremque voluptatem quia modi. Veniam explicabo in ut.', NULL, 1, 0, '2022-10-21 16:42:38', '2023-08-25 10:20:08', NULL),
(77, 'Narciso Veum', 'keegan.ziemann@yahoo.com', '+16603941661', 'In sed ad nesciunt ut fugit maiores occaecati expedita.', 'Magni maxime impedit aspernatur quaerat. Consectetur assumenda cum dicta occaecati totam accusantium. Quas aliquid a labore et. Ea voluptates similique consequatur eum.', NULL, 1, 0, '2023-01-27 03:54:14', '2023-08-25 10:20:08', NULL),
(78, 'Ignatius Jaskolski Sr.', 'hershel38@yahoo.com', '16788740905', 'Perferendis tempore tenetur distinctio est rerum ducimus.', 'Cum beatae cumque voluptatibus consectetur explicabo. Sapiente omnis in vero eos. Sit officiis qui omnis iusto rerum. Omnis qui ut dolorem vero hic eaque sint.', NULL, 1, 0, '2022-11-24 16:03:58', '2023-08-25 14:10:43', NULL),
(79, 'Nola Runolfsdottir', 'llangosh@pouros.org', '2314358822', 'Quia enim alias labore voluptatum.', 'Vero consequatur illo ut. Et deleniti autem in ut. Aut rem dicta velit. Culpa omnis deserunt iure aut itaque dolorem.', NULL, 1, 0, '2023-06-27 23:00:24', '2023-08-25 14:10:28', NULL),
(80, 'Dr. Benedict Marks', 'bweimann@schneider.net', '4247529273', 'Corporis id atque mollitia non sunt reiciendis.', 'Et reiciendis accusantium quo vel. Excepturi aspernatur architecto quaerat voluptatem nostrum. Excepturi quod officia molestiae minima consequatur quasi. Fugiat sapiente cumque optio.', NULL, 0, 0, '2023-08-12 15:16:31', '2023-08-25 14:10:13', NULL),
(81, 'Sheridan Reichert', 'vicenta05@feeney.info', '5409520299', 'Ipsa eius et optio culpa itaque distinctio.', 'Quod quam quia et voluptate tempore assumenda. Officiis rerum temporibus est blanditiis est tenetur deleniti totam. Numquam perferendis quia atque consequatur. Et et repellat minus et sit qui.', NULL, 0, 0, '2023-08-23 08:06:53', '2023-08-25 10:33:25', NULL),
(82, 'Mr. Ladarius Emard MD', 'kuphal.dashawn@jones.net', '6055970439', 'Quas aut neque perferendis sed sit in.', 'Et quam voluptate nobis explicabo. Et dolores totam impedit iusto. Non illo assumenda et aut laudantium quos. Quia animi voluptatem assumenda aperiam ut.', NULL, 0, 0, '2023-08-24 14:14:00', '2023-08-25 10:33:25', NULL),
(83, 'Chris Gibson', 'cordelia.jacobs@schroeder.com', '8282258113', 'Et nesciunt vitae in sint quae ab et non.', 'Ut quia odit vero non. Error praesentium voluptate autem similique rerum. Architecto et saepe officiis placeat minus. Consequatur repellat voluptatem nihil esse mollitia in aspernatur sit.', NULL, 0, 1, '2023-08-23 23:21:20', '2023-08-25 10:33:25', NULL),
(84, 'Darlene Greenholt V', 'cummerata.bertrand@berge.info', '6086181696', 'Illo libero vel ipsum voluptas sint.', 'Quia aut praesentium quaerat soluta et accusantium. Qui necessitatibus ullam sed sed tempora. Unde et est modi aperiam nihil aperiam exercitationem. Voluptatibus distinctio maiores ab.', NULL, 0, 0, '2023-08-24 14:26:37', '2023-08-25 13:33:02', NULL),
(85, 'Lynn Bartell', 'blynch@hotmail.com', '3527275640', 'Est optio earum omnis et reprehenderit beatae eum quas.', 'Amet voluptatem blanditiis facere. Laboriosam est molestias consequatur sit. Quibusdam qui est atque officia non veritatis.', NULL, 0, 0, '2023-08-25 01:06:32', '2023-08-25 11:35:27', NULL),
(86, 'Magali Olson', 'jennings98@yahoo.com', '5207221129', 'Similique et eum ut et rerum expedita minus.', 'Ad porro rem qui ea. Ratione deserunt omnis voluptatem eaque alias nemo incidunt. Eum sint voluptatibus consequuntur. Deserunt dignissimos ut dolor magnam.', NULL, 1, 0, '2023-08-24 23:58:38', '2023-08-25 14:06:59', NULL),
(87, 'Ramona Burch', 'jahegupew@mailinator.com', '1231231213', NULL, 'Voluptas nulla venia', '127.0.0.1', 1, 0, '2023-08-25 11:19:40', '2023-08-25 13:33:09', NULL),
(88, 'Alma Powers', 'qeves@mailinator.com', '131221232321', 'Nostrud deserunt ex', 'Hi Bob,\n\nWith resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.Without a compelleing title, your reader won\'t even get to the first sentence.After the title, however, the first few sentences of your article are certainly the most important part.\n\nJornalists call this critical, introductory section the \"Lede,\" and when bridge properly executed, it\'s the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if you want to get it right on of these 10 clever ways to omen your next blog posr with a bang\n\nBest regards,\nJason Muller', '127.0.0.1', 1, 0, '2023-08-25 11:37:02', '2023-08-25 13:32:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` bigint(20) NOT NULL,
  `detail_name` varchar(255) NOT NULL,
  `detail_value` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `detail_name`, `detail_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'name', 'Pepplo Construction', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(2, 'email', 'pepplo.const@gmail.com', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(3, 'phone', '0123456789', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(4, 'address', '123, ABC Street, XYZ City, Country', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(5, 'logo', 'other/CxcdoZKMMtJCtem3sv1issVPKOOcr5FexwBbI5A1.png', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(6, 'favicon', 'favicon.png', 1, '2023-08-19 07:54:35', '2023-08-19 07:54:35'),
(7, 'facebook', 'https://www.facebook.com/', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(8, 'twitter', 'https://twitter.com/', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(9, 'linkedin', 'https://www.linkedin.com/', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(10, 'youtube', 'https://www.youtube.com/', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(11, 'map', '<iframe width=\"425\" height=\"350\" src=\"https://www.openstreetmap.org/export/embed.html?bbox=90.3647267818451%2C22.695857592363215%2C90.37180781364442%2C22.70049970348932&amp;layer=mapnik\"></iframe>', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(12, 'CEO_name', 'Abdullah ibn Muhammad', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(13, 'CEO_image', 'other/3qfM8UxfASWNd1XO3fKVBgoCgXGON87u5Nbqc4Gq.jpg', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(14, 'CEO_message', 'The speed curve defines the TIME an animation uses to change from one set of CSS styles to another.', 1, '2023-08-19 07:54:35', '2023-08-30 07:22:15'),
(15, 'whatsapp', '0123456789', 1, '2023-08-20 13:21:48', '2023-08-30 07:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `company_histories`
--

CREATE TABLE `company_histories` (
  `id` bigint(20) NOT NULL,
  `milestone` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'gallery/default.webp',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_histories`
--

INSERT INTO `company_histories` (`id`, `milestone`, `description`, `date`, `image`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Started Company', 'Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique.\r\n\r\nAliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique. Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique.', '2018-07-25', 'gallery/pgdnjtLiUPaVH8Pq4cFCLDQdNrrLRVz3TXVikuEN.jpg', 1, '2023-08-18 12:05:23', '2023-08-18 11:45:07'),
(2, 'Opening Office', 'Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique', '2020-08-12', 'gallery/default.webp', 1, '2023-08-18 12:06:51', '2023-08-18 12:06:51'),
(3, 'Some Milestone', NULL, '2020-07-30', 'gallery/3Y98bWowDgOt6LEVw9icniFymfov15544jCwLaze.jpg', 1, '2023-08-21 12:52:07', '2023-08-18 12:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(50) NOT NULL DEFAULT 'Member',
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `social_media` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'employee/default.webp',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `designation`, `email`, `phone_number`, `social_media`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Galib Jaman', 'Co-founder & CEO', 'gj.emon35@gmail.com', '01766555213', 'https://www.facebook.com/gj.emon35', 'employee/iujWdbYjcnayd0a3cKw33EjG7LyzlVxTEXN7VkyX.jpg', 1, '2023-08-17 08:18:48', '2023-08-19 06:31:30', NULL),
(2, 'Farhana Akter', 'Co-founder & Spouse', 'farhanaakter8@gmail.com', '01747371076', 'https://www.facebook.com/farhanaakter.richa', 'employee/Ca7RhLsETWQztUZQR1icoLBvbxTCBOGbKfsDN8Bp.png', 1, '2023-08-17 08:27:52', '2023-08-17 08:37:23', NULL),
(3, 'Faatimah al Fihri', 'Thundercloud', 'fatimah.fihri@gmail.com', '01766555211', NULL, 'employee/CW4hpr0FnnLp2hkYLGSfbqOYhxKtRRRwes8gnMez.png', 1, '2023-08-17 08:34:48', '2023-08-21 05:31:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) NOT NULL,
  `question` text NOT NULL,
  `answer` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What do we do?', 'We build dreams :)', 1, '2023-08-17 17:51:30', '2023-08-18 11:01:06'),
(2, 'How can I contact you?', 'Enter the most asked questions and answers to them. This will help your clients to find the answers they need without contacting you.', 1, '2023-08-17 17:57:10', '2023-08-18 11:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `rating` int(2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT 'avatar/default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `feedback`, `rating`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Jhon Doe', 'The best web on the site', NULL, 1, 'avatar/default.png', '2023-08-16 12:01:17', '2023-08-17 07:01:33'),
(2, 'Galib Jaman', 'The more you can imagine, the better it is to assume for us to set the rules and regulations and some other things to set aside our differences  and also to note down and to be devoide of logical and analytical fragments that.', NULL, 1, 'avatar/default.png', '2023-08-17 07:03:26', '2023-08-17 07:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL,
  `imageable_id` bigint(20) NOT NULL,
  `imageable_type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_image` varchar(255) NOT NULL DEFAULT 'page/default.webp',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `page_title`, `meta_title`, `meta_description`, `meta_keywords`, `meta_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Home - Pepplo Builder', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction company,Planning', 'page/7x8Z5Boye1hQyjLEAKPBwjsWI4S1v1BdOquoNOLq.jpg', 1, '2023-08-10 04:02:23', '2023-08-19 06:31:01'),
(2, 'About', 'About - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-19 06:30:33'),
(3, 'Services', 'Services - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction,renovation,interior design,construction company,construction company in the Bangladesh,Consultation in Barishal', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-19 06:30:34'),
(4, 'Service Single', 'Service Single - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-11 06:23:56'),
(5, 'Projects', 'Projects - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-10 04:02:23'),
(6, 'Project Single', 'Project Single - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-11 10:03:49'),
(7, 'Contact', 'Contact - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-10 04:02:23'),
(8, 'Quote', 'Quote - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-10 04:02:23'),
(9, 'Team', 'Team - Pepplo Builders', 'Leading construction company in the Bangladesh.', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'Builders,construction,construction company', 'page/default.webp', 1, NULL, '2023-08-14 14:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `page_section`
--

CREATE TABLE `page_section` (
  `id` bigint(20) NOT NULL,
  `page_id` bigint(20) NOT NULL,
  `section_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_section`
--

INSERT INTO `page_section` (`id`, `page_id`, `section_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, NULL, '2023-08-18 17:43:08'),
(2, 2, 1, 1, NULL, NULL),
(3, 1, 2, 1, NULL, '2023-08-18 17:42:39'),
(4, 2, 2, 1, NULL, NULL),
(5, 3, 2, 1, NULL, NULL),
(6, 4, 2, 1, NULL, NULL),
(7, 5, 2, 1, NULL, NULL),
(8, 6, 2, 1, NULL, NULL),
(9, 7, 2, 1, NULL, NULL),
(10, 8, 2, 1, NULL, NULL),
(11, 9, 2, 1, NULL, NULL),
(12, 2, 3, 1, NULL, NULL),
(13, 1, 4, 1, NULL, '2023-08-15 02:17:54'),
(14, 3, 4, 1, NULL, NULL),
(15, 1, 5, 1, NULL, NULL),
(16, 5, 5, 1, NULL, NULL),
(17, 6, 5, 1, NULL, NULL),
(18, 1, 6, 1, NULL, NULL),
(19, 1, 7, 1, NULL, NULL),
(20, 2, 7, 1, NULL, NULL),
(21, 9, 7, 1, NULL, NULL),
(22, 2, 8, 1, NULL, NULL),
(23, 1, 9, 1, NULL, NULL),
(24, 2, 9, 1, NULL, NULL),
(25, 7, 10, 1, NULL, NULL),
(26, 1, 11, 1, NULL, NULL),
(27, 2, 11, 1, NULL, NULL),
(28, 3, 11, 1, NULL, NULL),
(29, 4, 11, 1, NULL, NULL),
(30, 5, 11, 1, NULL, NULL),
(31, 6, 11, 1, NULL, NULL),
(32, 7, 11, 1, NULL, NULL),
(33, 8, 11, 1, NULL, NULL),
(34, 9, 11, 1, NULL, NULL),
(35, 1, 12, 1, NULL, NULL),
(36, 2, 12, 1, NULL, NULL),
(37, 3, 12, 1, NULL, NULL),
(38, 4, 12, 1, NULL, NULL),
(39, 5, 12, 1, NULL, NULL),
(40, 6, 12, 1, NULL, NULL),
(41, 7, 12, 1, NULL, NULL),
(42, 8, 12, 1, NULL, NULL),
(43, 9, 12, 1, NULL, NULL),
(44, 1, 13, 1, NULL, NULL),
(45, 2, 13, 1, NULL, NULL),
(46, 3, 13, 1, NULL, NULL),
(47, 4, 13, 1, NULL, NULL),
(48, 5, 13, 1, NULL, NULL),
(49, 6, 13, 1, NULL, NULL),
(50, 7, 13, 1, NULL, NULL),
(51, 8, 13, 1, NULL, NULL),
(52, 9, 13, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `bullets` text DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'project/default.webp',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category_id`, `title`, `description`, `bullets`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'The Grand Hotel', 'The Grand Hotel is our one of the biggest achievements in recent years. But our goal is to reach even higher.', 'Hotel is our one of the biggest achievements*Looking forward to doing more and more*Challenges were huge but team of experts are always ready', 'project/fywGwfgI2rsA1qu0ZnkeAtoTWsbD0JltjMdcc4pA.jpg', 1, '2023-08-16 07:04:53', '2023-08-17 07:09:35'),
(2, 4, 'Extended Utility Classes', 'Install the dependencies using Yarn or NPM and use our custom made Gulp or Webapck build tools to get your project up and running literally in a minutes. \r\n\r\n Install the dependencies using Yarnor NPM and use our custom made Gulp or Webapck build tools to get your project up and running literally in a minutes.', 'Install the dependencies using Yarn*NPM and use our custom made*build tools to get your project up and running', 'project/g9mu5w5fdkrA5qTw74N4tej32Qt0OfUWVJ4ZSXhJ.jpg', 1, '2023-08-16 10:59:51', '2023-08-16 10:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `bullets` text DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'section/default.webp',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `title`, `heading`, `description`, `bullets`, `image`, `created_at`, `updated_at`) VALUES
(1, 'about-company', 'About Company', 'our skilled Team grow your business.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.', 'Performing market research.*Doing financial analysis.*Planning a budget.*Creating business plans.*Developing a marketing strategy.*Setting goals and objectives.*Managing client accounts.*Analyzing data.', 'section/default.webp', '2023-08-14 13:58:37', '2023-08-14 13:58:37'),
(2, 'top-header', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-08-14 17:13:54', '2023-08-14 17:13:54'),
(3, 'about-us', 'About Us', 'our skilled Team grow your business.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.', 'Performing market research.*Doing financial analysis.*Planning a budget.*Creating business plans.*Developing a marketing strategy.*Setting goals and objectives.*Managing client accounts.*Analyzing data.', 'section/default.webp', '2023-08-14 17:16:17', '2023-08-14 17:16:17'),
(4, 'services', 'Services', 'Services section', 'The section', NULL, 'section/default.webp', '2023-08-14 17:18:11', '2023-08-18 08:31:19'),
(5, 'projects', 'Projects', 'Projects Heading', 'Project Description', NULL, 'section/default.webp', '2023-08-14 17:20:09', '2023-08-18 08:32:01'),
(6, 'review', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-08-14 17:21:10', '2023-08-14 17:21:10'),
(7, 'team', 'Employees Title', 'Employees Heading', 'Employees Description', NULL, 'section/default.webp', '2023-08-14 17:21:50', '2023-08-18 08:33:49'),
(8, 'company-history', 'Company history', 'This is the best history in time we can remember to the human knowledge!', 'This is the short description', NULL, 'section/default.webp', '2023-08-14 17:22:23', '2023-08-18 11:08:09'),
(9, 'faq', 'FAQs', 'FAQs heading', 'FAQs Description', NULL, 'section/default.webp', '2023-08-14 17:23:34', '2023-08-18 08:34:37'),
(10, 'map', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-08-14 17:24:02', '2023-08-14 17:24:02'),
(11, 'quote-cta', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-08-14 17:25:23', '2023-08-14 17:25:23'),
(12, 'consultation-cta', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-08-14 17:26:01', '2023-08-14 17:26:01'),
(13, 'subscription-cta', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-08-14 17:26:52', '2023-08-14 17:26:52'),
(15, 'feedbacks', 'Feedback Title', 'Feedback Heading', 'Feedback Description', NULL, 'section/default.webp', NULL, '2023-08-18 08:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `bullets` text DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'service/default.webp',
  `icon` varchar(255) NOT NULL DEFAULT 'service/service-1.png',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `bullets`, `image`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Business analytics', 'Proin molestie nunc id scelerisque facilisis. Nunc efficitur mollis nunc, ac facilisis orci viverra vel. Aliquam rutrum libero sit amet justo consectetur luctus. Duis dolor augue, euismod a accumsan at, commodo a lorem. Donec sit amet nibh condimentum libero\r\n\r\nNunc efficitur mollis nunc, ac facilisis orci viverra vel. Aliquam rutrum libero sit amet justo consectetur luctus. Duis dolor augue, euismod a accumsan at, commodo a lorem.', 'It\'s essential to work with business consultants who have*Business consultants may charge by the project or hour, or you may need to pay daily or monthly retainers.*Meet with the board of directors and employees.*Accounting consulting.', 'service/goUkQfSl4tHP2cMjuhMZps3kihNJczh5Haz3CmER.jpg', 'service/service-4.png', 1, '2023-08-15 13:22:34', '2023-08-17 18:31:25'),
(3, 'Google Tag Manager', 'Remember that each tag you create in Google Tag Manager corresponds to a specific tracking or analytics script you want to include on your website. Triggers determine when those tags should be fired based on user interactions or events, and variables are used to capture and store dynamic data.\r\n\r\nTriggers deould be fired based on user interactions or events, and variables are usedynad to capture and store mic data.', 'based on user interactions or events, and va*termine when those tags sh', 'service/hPbLOJtBC8blQCz2hZf3qWYruZaGECvvrZphOUgB.jpg', 'service/service-3.png', 1, '2023-08-15 16:18:51', '2023-08-17 18:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr Shadow', 'rj.rafi35@gmail.com', NULL, '$2y$10$rvi6odKPBr3ODXLJIfAG1enRcDEt5rN/YtqLurMqz9kY7cM.c4Gu.', NULL, NULL, '2023-08-20 17:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `workforce`
--

CREATE TABLE `workforce` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `travel_allowance` decimal(10,2) DEFAULT NULL,
  `daily_allowance` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workforce`
--

INSERT INTO `workforce` (`id`, `name`, `email`, `phone_number`, `address`, `date_of_birth`, `hire_date`, `position`, `department`, `supervisor_id`, `salary`, `travel_allowance`, `daily_allowance`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Asa Schowalter PhD', 'deckow.adelia@example.org', '01747533221', '1801 Miguel Prairie\nSouth Doris, ND 54309', '2000-01-01', '1996-04-28', 'Manager', 'Marketing', 3, '16000.00', '500.00', '4500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(2, 'Nicola Luettgen', 'hbrown@example.com', '01748404966', '855 Savion Mountains\nNorth Garry, KY 56533', '2000-01-01', '1976-04-13', 'Manager', 'Finance', 2, '34000.00', '3000.00', '4000.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(3, 'Mohammed Hand', 'mjaskolski@example.org', '01638999950', '86037 Oswald Ramp Apt. 644\nNorth Leslyside, FL 55460-4500', '2000-01-01', '2009-08-08', 'Intern', 'HR', 2, '34000.00', '1000.00', '4500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(4, 'Enos Parker', 'gaylord.delphine@example.com', '01799234240', '92613 Gusikowski Square Apt. 836\nWest Linda, MT 75544-6342', '2000-01-01', '1977-12-07', 'Manager', 'Marketing', 2, '33000.00', '1500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(5, 'Daisy Witting', 'zjacobson@example.org', '01694284268', '3584 Thomas Cliffs Apt. 602\nCarliestad, ND 29085', '2000-01-01', '2017-02-10', 'Manager', 'Sales', 3, '18000.00', '1500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(6, 'Mrs. Burnice Hirthe', 'frau@example.com', '01245254895', '1018 Turner Curve\nPricebury, UT 55768-2997', '2000-01-01', '2018-07-18', 'Trainee', 'Finance', 3, '45000.00', '4000.00', '500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(7, 'Ona Mante', 'sarah39@example.com', '01232948302', '99366 Elmore Hollow\nKutchfurt, NE 91653-6671', '2000-01-01', '1991-12-04', 'Officer', 'HR', 2, '15000.00', '2500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(8, 'Lindsay Ruecker', 'liliane.kohler@example.net', '01225371631', '511 Botsford Fort Apt. 702\nWest Ottis, OR 15672-2145', '2000-01-01', '1994-06-05', 'Intern', 'IT', 3, '41000.00', '1000.00', '4500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(9, 'Prof. Garth Hermann III', 'marilyne97@example.org', '01195332027', '2810 Kuphal Vista\nHaleystad, NY 36659', '2000-01-01', '2012-01-13', 'Assistant Manager', 'HR', 2, '46000.00', '3500.00', '3500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(10, 'Edward Rodriguez', 'april54@example.net', '01476387369', '93924 Marks Road\nEast Shaunburgh, AK 12775', '2000-01-01', '2001-06-12', 'Trainee', 'HR', 2, '24000.00', '4000.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(11, 'Dr. Pink Heathcote', 'maverick.osinski@example.org', '01387898608', '5210 Rice Drive\nSouth Jessborough, CA 62536-5651', '2000-01-01', '1997-01-02', 'Trainee', 'Sales', 1, '19000.00', '4000.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(12, 'Mr. Stan Haag DDS', 'elta29@example.com', '01854423013', '100 Daniel Union\nLakinstad, TN 33293', '2000-01-01', '1988-12-22', 'Trainee', 'Accounting', 1, '46000.00', '3000.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(13, 'Jena Wuckert', 'hand.nelle@example.com', '01810018935', '44861 Alvah Tunnel Suite 711\nPort Dakotaville, WA 18617', '2000-01-01', '1997-04-28', 'Executive', 'Sales', 2, '37000.00', '500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(14, 'Harmony Satterfield', 'dickinson.vita@example.net', '01772087176', '8791 Andreane Shoals Apt. 211\nElliottshire, NJ 41161-6917', '2000-01-01', '1994-08-26', 'Trainee', 'Finance', 2, '43000.00', '4000.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(15, 'Miss Daniella Marvin DVM', 'kohler.helen@example.org', '01351246783', '3676 Heathcote Ridge Apt. 238\nWest Jo, MD 41759', '2000-01-01', '2023-07-15', 'Manager', 'HR', 2, '33000.00', '3500.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(16, 'Sonia Cormier', 'peyton02@example.com', '01319677780', '5535 Balistreri Divide\nBernhardmouth, SC 37439-7841', '2000-01-01', '1977-06-01', 'Intern', 'IT', 2, '22000.00', '500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(17, 'Diana Heller', 'qsteuber@example.net', '01889727247', '6623 Feeney Rapid\nAbshireborough, UT 76835', '2000-01-01', '1988-10-06', 'Executive', 'HR', 3, '49000.00', '1500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(18, 'Carol Bogisich', 'orodriguez@example.net', '01168878397', '468 Angelo Rest Apt. 603\nTommiehaven, RI 05389', '2000-01-01', '1988-03-30', 'Assistant Manager', 'HR', 2, '22000.00', '500.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(19, 'Tyshawn McCullough', 'ahmed08@example.com', '01379663604', '5713 Haag Corner Suite 105\nAdeliaberg, ID 71453', '2000-01-01', '2020-09-08', 'Trainee', 'Marketing', 2, '26000.00', '2500.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(20, 'Montana Koelpin', 'uherman@example.com', '01380446525', '74749 Rodriguez Mill Suite 577\nNew Kaelaburgh, MS 65219-2489', '2000-01-01', '2008-10-02', 'Executive', 'IT', 2, '34000.00', '500.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(21, 'Dr. Eula Hirthe DVM', 'treutel.johnny@example.com', '01617499350', '707 Welch Fords Apt. 512\nSouth Carlosshire, DE 87216', '2000-01-01', '2022-07-15', 'Executive', 'Marketing', 3, '20000.00', '500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(22, 'Mckayla Armstrong', 'cecile.kuvalis@example.net', '01240565371', '232 Elmo Turnpike\nFannieside, CA 44571-1284', '2000-01-01', '1981-08-22', 'Assistant Manager', 'Finance', 3, '17000.00', '2000.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(23, 'Misael Simonis', 'hbailey@example.net', '01263092244', '61474 Jonatan Cliffs\nSouth Braxton, AR 19968-6891', '2000-01-01', '2021-01-25', 'Officer', 'Finance', 1, '18000.00', '2000.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(24, 'Sylvester Wyman', 'hertha73@example.org', '01926744005', '3240 Gina Fall\nGrantmouth, WY 00757', '2000-01-01', '1994-06-01', 'Manager', 'Accounting', 1, '17000.00', '3000.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(25, 'Pattie Hand', 'ola.terry@example.net', '01226898721', '49904 Kiehn Terrace\nAlexafort, AR 38706', '2000-01-01', '2005-11-28', 'Officer', 'Sales', 3, '24000.00', '2500.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(26, 'Jaquan Crooks', 'cmaggio@example.com', '01594890911', '198 Rath Prairie\nNorth Micheal, CT 43589', '2000-01-01', '2008-05-23', 'Assistant Manager', 'HR', 2, '23000.00', '3000.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(27, 'Alessandra Bergstrom', 'djones@example.com', '01291474484', '57725 Huel Drive Apt. 512\nMalvinaberg, UT 30535-1682', '2000-01-01', '1997-12-12', 'Trainee', 'Sales', 3, '49000.00', '4500.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(28, 'Nyah Hoeger', 'nannie90@example.com', '01795689097', '160 Nolan Manor Apt. 046\nPort Taya, MN 87336', '2000-01-01', '1972-10-03', 'Assistant Manager', 'Sales', 3, '34000.00', '2000.00', '3500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(29, 'Stan Jaskolski IV', 'kerluke.rolando@example.com', '01983379290', '4069 Waldo Lights\nNorth Concepcion, IA 81869-9060', '2000-01-01', '2017-12-04', 'Executive', 'HR', 1, '32000.00', '2000.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(30, 'Prof. Matteo O\'Hara I', 'twintheiser@example.net', '01172697514', '262 Bahringer Locks Apt. 118\nNew Irwin, MS 33520', '2000-01-01', '1999-11-04', 'Manager', 'Finance', 3, '25000.00', '500.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(31, 'Mr. Jerod Bradtke', 'imcclure@example.com', '01994092067', '97153 Corwin Fords Suite 619\nGiovannafurt, TN 33891-7280', '2000-01-01', '1990-10-22', 'Executive', 'Accounting', 3, '28000.00', '2500.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(32, 'Prof. Merlin Lueilwitz', 'roxane80@example.org', '01675554970', '20394 Romaine Courts\nHarrisland, OR 43715-1299', '2000-01-01', '2020-03-03', 'Manager', 'Sales', 2, '29000.00', '4000.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(33, 'Audreanne Haag V', 'amani43@example.com', '01343238648', '38136 Lindgren Walk Suite 447\nMariettaland, MA 09687', '2000-01-01', '2021-03-31', 'Intern', 'Sales', 1, '43000.00', '4000.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(34, 'Paxton Mertz', 'dconnelly@example.net', '01667065061', '16108 Sandrine Manors\nKubborough, TN 28485', '2000-01-01', '2010-10-07', 'Trainee', 'IT', 2, '33000.00', '3500.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(35, 'Ms. Cheyanne Gleichner Sr.', 'hermann.russ@example.org', '01373264074', '953 Grant Wells\nSouth Nedra, RI 86717-7719', '2000-01-01', '2004-06-07', 'Assistant Manager', 'Finance', 3, '42000.00', '4500.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(36, 'Ashton Keebler', 'estelle.marquardt@example.com', '01484412257', '5874 Roselyn Mews Apt. 240\nLake Joelle, NY 88738', '2000-01-01', '1983-06-10', 'Assistant Manager', 'Finance', 2, '32000.00', '3000.00', '4500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(37, 'Halle West', 'rubye.carter@example.net', '01566661858', '289 Welch Path Apt. 333\nSanfordside, ME 78917', '2000-01-01', '2007-03-26', 'Assistant Manager', 'HR', 2, '31000.00', '4500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(38, 'Prof. Cleve Lynch IV', 'ynienow@example.com', '01981953689', '46699 Karianne Ways\nBarrowsbury, MA 84040-7409', '2000-01-01', '1995-02-25', 'Manager', 'HR', 3, '33000.00', '1500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(39, 'Sandy Raynor', 'tyler11@example.net', '01249619771', '54910 Hyatt Mission Suite 108\nPort Bettie, OK 67345-5040', '2000-01-01', '2002-05-05', 'Assistant Manager', 'Accounting', 2, '28000.00', '4500.00', '2000.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(40, 'Lila Beahan MD', 'collins.kailee@example.net', '01319326773', '1088 Concepcion Coves Apt. 363\nEast Flavio, DC 16885-7497', '2000-01-01', '2005-03-18', 'Manager', 'IT', 1, '36000.00', '1500.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(41, 'Leif Kutch', 'hansen.nolan@example.com', '01190770095', '32105 Brown Gateway Suite 041\nSouth Elroymouth, DE 62955', '2000-01-01', '1997-07-08', 'Assistant Manager', 'Marketing', 3, '35000.00', '4500.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(42, 'Dr. Tierra Rippin DVM', 'mraz.elenora@example.net', '01199163115', '246 Ransom Views Suite 910\nEast Maceyport, OR 20952', '2000-01-01', '2014-05-13', 'Manager', 'Finance', 3, '29000.00', '3000.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(43, 'Miss Adell Fadel', 'myra05@example.org', '01885011639', '7233 Boyle Skyway Suite 120\nNew Lindsay, IL 51100', '2000-01-01', '1995-01-03', 'Manager', 'IT', 3, '31000.00', '2500.00', '4500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(44, 'Dr. Nona Prosacco', 'kaleigh66@example.com', '01582208567', '80405 O\'Keefe Ports Suite 661\nPort Elbert, RI 69397', '2000-01-01', '2018-11-26', 'Officer', 'Sales', 3, '23000.00', '3000.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(45, 'Prof. Kennith Schamberger', 'cremin.pablo@example.org', '01699164410', '932 Bernardo Unions Apt. 694\nMadonnaside, MD 73863', '2000-01-01', '2018-04-23', 'Officer', 'Sales', 2, '36000.00', '1000.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(46, 'Mr. Sebastian Kling III', 'estehr@example.org', '01816606327', '54416 Eryn Falls Apt. 334\nPort Ted, KS 49901', '2000-01-01', '1983-04-24', 'Officer', 'IT', 2, '22000.00', '1000.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(47, 'Ms. Chanelle Eichmann I', 'bauer@example.com', '01517819435', '60531 Jed Square Suite 983\nToyshire, NC 24349-5564', '2000-01-01', '1996-02-12', 'Trainee', 'Accounting', 3, '47000.00', '1000.00', '1500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(48, 'Ms. Julianne Feest', 'sbraun@example.org', '01658436803', '161 Valentina Plaza Suite 963\nSouth Dedrickfort, NC 45651', '2000-01-01', '1974-10-26', 'Trainee', 'Finance', 3, '49000.00', '4000.00', '2000.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(49, 'Ms. Vivienne Champlin DVM', 'rhea38@example.net', '01195643739', '82649 Cydney Rapids\nHandburgh, UT 32526', '2000-01-01', '2018-03-06', 'Trainee', 'HR', 3, '37000.00', '1000.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(50, 'Maybelle Trantow', 'uwaters@example.com', '01565075282', '25303 Lexie Mill Apt. 212\nO\'Harastad, KS 65138-7635', '2000-01-01', '2002-01-09', 'Executive', 'Sales', 2, '38000.00', '3000.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(51, 'Stacey Gorczany', 'modesto.towne@example.com', '01316358925', '369 Luettgen Freeway Suite 445\nNorth Hermanside, FL 96255-9804', '2000-01-01', '1992-04-30', 'Executive', 'HR', 3, '34000.00', '3000.00', '500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(52, 'Dr. Jermain Bashirian', 'lucio02@example.com', '01180477551', '8077 Green Ramp\nWestville, AK 90292', '2000-01-01', '1997-09-22', 'Intern', 'HR', 1, '37000.00', '2000.00', '500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(53, 'Cassandra Torphy', 'considine.eduardo@example.com', '01229854829', '533 Adella Hills\nBrooklynton, LA 86511', '2000-01-01', '1971-01-04', 'Manager', 'Sales', 2, '24000.00', '2000.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(54, 'Brando Jenkins', 'ethyl65@example.net', '01654274717', '73707 Tremaine Islands Apt. 183\nThielhaven, GA 65323-6528', '2000-01-01', '2008-11-05', 'Assistant Manager', 'IT', 1, '36000.00', '500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(55, 'Rhoda Bahringer', 'tmann@example.com', '01692871406', '689 Zboncak Branch\nShanahanland, GA 13972', '2000-01-01', '2017-08-14', 'Executive', 'IT', 2, '35000.00', '2000.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(56, 'Prof. Austyn Farrell I', 'xmoore@example.net', '01687096351', '9642 Talia Path Apt. 876\nMiguelview, ID 72690', '2000-01-01', '1971-01-02', 'Executive', 'Sales', 2, '44000.00', '4500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(57, 'Casimer Ruecker', 'bria.bogan@example.net', '01314761115', '9842 Ankunding Parkways Suite 697\nPort Hardyberg, NY 45696-7240', '2000-01-01', '1998-05-12', 'Assistant Manager', 'IT', 3, '35000.00', '3500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(58, 'Clinton Barrows Sr.', 'canderson@example.org', '01580273938', '32210 Anika Mews Apt. 221\nKiehnshire, DE 69278', '2000-01-01', '2016-10-24', 'Manager', 'Marketing', 3, '50000.00', '4500.00', '4500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(59, 'Karson Kilback', 'stiedemann.randy@example.org', '01193033963', '17289 Antwan Drive Apt. 600\nCollierfurt, ND 45388-2493', '2000-01-01', '2004-06-09', 'Executive', 'Marketing', 3, '24000.00', '3500.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(60, 'Beaulah Barrows', 'leuschke.litzy@example.net', '01546921109', '52552 Jones Union\nSimonismouth, MS 83972', '2000-01-01', '1971-07-10', 'Intern', 'Finance', 1, '24000.00', '4500.00', '500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(61, 'Guiseppe Kihn', 'koepp.humberto@example.net', '01787217298', '515 Malcolm Village Suite 521\nBrayanport, HI 27278', '2000-01-01', '2023-01-16', 'Manager', 'Accounting', 3, '50000.00', '3500.00', '4500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(62, 'Prof. Ewell Schroeder Jr.', 'jschumm@example.com', '01333884580', '89884 Kertzmann Oval Apt. 707\nAnissaside, MO 23086', '2000-01-01', '2002-10-30', 'Trainee', 'Accounting', 3, '46000.00', '3000.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(63, 'Carey Crooks', 'larissa29@example.net', '01533099695', '85604 Satterfield Tunnel Suite 918\nEast Verdie, MS 72427-3642', '2000-01-01', '1987-10-22', 'Trainee', 'IT', 2, '22000.00', '2500.00', '500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(64, 'Vernice Lueilwitz', 'olson.robyn@example.com', '01187933953', '2991 Hammes Skyway Apt. 687\nWest Harmonymouth, SD 26691', '2000-01-01', '2018-12-08', 'Manager', 'Marketing', 1, '41000.00', '1000.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(65, 'Shaylee Rogahn', 'kaela.daugherty@example.com', '01541027912', '25620 Miller Springs\nBurleyville, OH 92723-3432', '2000-01-01', '2017-04-02', 'Intern', 'Sales', 1, '27000.00', '1500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(66, 'Jamaal Marvin', 'hill.bruce@example.org', '01858974002', '528 Barton Courts\nRicechester, AL 76637', '2000-01-01', '1993-12-14', 'Trainee', 'Finance', 2, '50000.00', '3500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(67, 'Prof. Jaydon Williamson IV', 'bkoepp@example.org', '01422017166', '8660 Aubrey Centers\nNorth Bryonshire, HI 81632-7402', '2000-01-01', '2000-08-17', 'Trainee', 'Finance', 3, '34000.00', '4000.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(68, 'Aiden Leannon', 'grady.dannie@example.org', '01715066096', '212 Wisozk Green\nPort Carlos, PA 91736', '2000-01-01', '2018-11-11', 'Executive', 'Finance', 3, '18000.00', '1000.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(69, 'Melba Hyatt', 'gay.harber@example.org', '01473545817', '804 Adrienne Views\nKadinborough, MA 00740', '2000-01-01', '1992-05-06', 'Officer', 'Accounting', 2, '26000.00', '500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(70, 'Elwin Klein', 'candido.gibson@example.net', '01194766002', '980 Tiana Parkway\nPort Linaberg, WI 49729-8788', '2000-01-01', '1997-04-19', 'Officer', 'HR', 1, '43000.00', '1000.00', '1000.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(71, 'Cecile Dooley', 'dexter44@example.net', '01413616339', '322 Billy Path Suite 736\nCarissashire, DE 61385-9644', '2000-01-01', '1981-08-03', 'Manager', 'HR', 1, '33000.00', '1500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(72, 'Bret Schmidt', 'roslyn42@example.com', '01199282285', '940 Kemmer Fords Suite 583\nBradlychester, TX 54876-8343', '2000-01-01', '2017-02-24', 'Manager', 'Sales', 2, '16000.00', '500.00', '4500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(73, 'Alessandra Grady', 'pkoepp@example.net', '01824577535', '2812 Raymond Branch Suite 578\nEast Chrisville, MD 05905-7336', '2000-01-01', '2011-02-25', 'Manager', 'Finance', 2, '41000.00', '2000.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(74, 'Mr. Dimitri Franecki V', 'hunter83@example.com', '01639583129', '35607 Koss Square Apt. 744\nErnsertown, NC 57868-6484', '2000-01-01', '1985-08-23', 'Assistant Manager', 'Finance', 1, '49000.00', '500.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(75, 'Miss Elnora Purdy', 'abigayle83@example.net', '01916752486', '9654 Albin Fork Apt. 482\nAlyceview, SC 67911', '2000-01-01', '2003-05-15', 'Executive', 'HR', 1, '25000.00', '2000.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(76, 'Brandt Will', 'zboncak.abbey@example.net', '01767786057', '4957 Emmanuel Rapids Apt. 520\nLake Alexzander, KS 37102-5157', '2000-01-01', '1996-08-06', 'Intern', 'HR', 1, '25000.00', '500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(77, 'Sam Wunsch DVM', 'medhurst.adele@example.org', '01374894540', '7059 Kuhic Mall Apt. 689\nWest Lelah, WY 27011-5061', '2000-01-01', '1987-08-29', 'Assistant Manager', 'Accounting', 2, '37000.00', '2500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(78, 'Edgardo Douglas', 'daniel.iva@example.com', '01184072397', '619 Zola Rue\nLake Talonview, MI 88731-0390', '2000-01-01', '1973-08-20', 'Trainee', 'Finance', 2, '50000.00', '500.00', '2500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(79, 'Sven Frami', 'ondricka.una@example.net', '01472319202', '84176 Schowalter River Suite 614\nNew Drew, OH 33967', '2000-01-01', '2022-12-12', 'Manager', 'HR', 1, '23000.00', '1500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(80, 'Wilfredo Rippin', 'darby15@example.com', '01557107702', '9972 Neva Stream\nSouth Mabelle, MO 78065-0172', '2000-01-01', '2003-11-22', 'Trainee', 'Marketing', 3, '42000.00', '4000.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(81, 'Dr. Jennifer Heathcote', 'harmony79@example.net', '01695339452', '1979 Konopelski Village Suite 599\nAlannafurt, RI 29945', '2000-01-01', '1995-06-03', 'Trainee', 'IT', 3, '47000.00', '1000.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(82, 'Quinten Deckow', 'nleffler@example.org', '01196938725', '9707 Mya Club Apt. 553\nRitchieberg, DE 53567', '2000-01-01', '1993-10-31', 'Intern', 'HR', 1, '48000.00', '2000.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(83, 'Corine Conroy', 'jkoch@example.net', '01137720976', '932 Cordelia Centers Suite 630\nSantinofurt, VA 87965', '2000-01-01', '1974-12-27', 'Intern', 'Marketing', 2, '31000.00', '500.00', '1500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(84, 'Ruth Schroeder', 'wondricka@example.net', '01533900542', '59734 Darryl Greens\nPort Cristopher, PA 63208', '2000-01-01', '2011-03-12', 'Executive', 'Accounting', 3, '31000.00', '3500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(85, 'Prof. Crystal Gutkowski', 'yasmin.abbott@example.net', '01148978196', '762 Emerson Prairie\nHintzmouth, SD 95673-7704', '2000-01-01', '1985-04-09', 'Assistant Manager', 'Sales', 3, '37000.00', '1500.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(86, 'Pierre McLaughlin', 'crippin@example.org', '01694390047', '2424 Mckayla Mews Suite 963\nRaleighstad, FL 42868', '2000-01-01', '1993-02-17', 'Manager', 'Finance', 3, '21000.00', '1500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(87, 'Dr. Franz Pfannerstill III', 'fromaguera@example.net', '01760031228', '260 Jaron Mountains Suite 463\nEast Geoffrey, KS 43135', '2000-01-01', '1991-03-24', 'Manager', 'Sales', 1, '22000.00', '3500.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(88, 'Julianne Keeling I', 'lweissnat@example.net', '01836907056', '8971 Heather Summit\nSouth Lonie, PA 04176', '2000-01-01', '2007-07-19', 'Manager', 'Marketing', 2, '21000.00', '3500.00', '2000.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(89, 'Prof. Julio Friesen', 'zblanda@example.net', '01446852219', '5141 Schulist Views\nPort Derick, AR 69966', '2000-01-01', '2020-08-09', 'Executive', 'Finance', 3, '24000.00', '3500.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(90, 'Rossie Rempel', 'murazik.bailee@example.net', '01564548494', '26130 Sister Station\nSouth Itzel, RI 84700-3633', '2000-01-01', '1997-10-25', 'Executive', 'Accounting', 3, '29000.00', '1500.00', '4500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(91, 'Meagan Turner', 'viola61@example.org', '01491728662', '9384 Horacio River\nNorth Mayeborough, SC 94765-1039', '2000-01-01', '1972-02-22', 'Assistant Manager', 'Accounting', 1, '50000.00', '500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(92, 'Prof. Cade Bernier', 'hattie.crona@example.com', '01364825148', '168 Lora Estates\nEast Berry, IN 02836', '2000-01-01', '2021-05-20', 'Officer', 'HR', 3, '32000.00', '4500.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(93, 'Raphael Emmerich', 'nbogisich@example.net', '01921935822', '3727 Kamren Parkway Apt. 981\nMillerton, DE 37275-9028', '2000-01-01', '1994-07-11', 'Trainee', 'IT', 1, '35000.00', '3000.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(94, 'April Murray', 'leonard72@example.org', '01931518110', '853 Eino Rest\nLake Kevonville, IN 82368', '2000-01-01', '1983-08-10', 'Officer', 'Finance', 3, '17000.00', '3000.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(95, 'Dr. Jaida Hermann MD', 'efay@example.org', '01536671501', '5091 Tyrel Springs\nHermistonfort, MA 75339', '2000-01-01', '1996-07-23', 'Executive', 'Sales', 2, '42000.00', '4000.00', '500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(96, 'Soledad Lubowitz', 'bernardo.gulgowski@example.org', '01555874254', '1459 Chasity Wall\nSouth Eden, UT 06220', '2000-01-01', '2006-01-25', 'Trainee', 'Marketing', 1, '15000.00', '4500.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(97, 'Hank Batz', 'arvel.heaney@example.com', '01612281552', '5230 Murphy Freeway\nDonnellyberg, AL 58766-8408', '2000-01-01', '1993-05-27', 'Intern', 'Finance', 2, '16000.00', '2000.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(98, 'Dr. Kenneth Bradtke IV', 'emarvin@example.net', '01290961930', '3956 Marian Via\nPort Brandyland, NE 18779-3701', '2000-01-01', '2018-06-11', 'Officer', 'Sales', 2, '17000.00', '4500.00', '3500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(99, 'Velda Walter', 'dominic.little@example.org', '01446626923', '438 Rodrick Streets\nKuhntown, MA 24979-4471', '2000-01-01', '2010-06-22', 'Executive', 'IT', 1, '27000.00', '1500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(100, 'Wilhelm Gutmann', 'mariano65@example.net', '01892275285', '22266 Domenica Burg Suite 250\nDoylebury, WA 71043', '2000-01-01', '1973-09-10', 'Manager', 'HR', 3, '50000.00', '3500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name` (`name`);

--
-- Indexes for table `client_messages`
--
ALTER TABLE `client_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_details_key` (`detail_name`);

--
-- Indexes for table `company_histories`
--
ALTER TABLE `company_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_phone_number` (`phone_number`),
  ADD UNIQUE KEY `employee_email` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING BTREE;

--
-- Indexes for table `page_section`
--
ALTER TABLE `page_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_category_relation` (`category_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workforce`
--
ALTER TABLE `workforce`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_messages`
--
ALTER TABLE `client_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `company_histories`
--
ALTER TABLE `company_histories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `page_section`
--
ALTER TABLE `page_section`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workforce`
--
ALTER TABLE `workforce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_category_relation` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
