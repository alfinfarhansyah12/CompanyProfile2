-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2025 at 08:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_phone` varchar(15) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_image` varchar(100) NOT NULL,
  `admin_username` varchar(15) NOT NULL,
  `admin_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_phone`, `admin_email`, `admin_image`, `admin_username`, `admin_password`) VALUES
(1, 'ADMIN', '03498276', 'admin@gmail.com', 'person1.jpeg', 'admin', 'admin'),
(2, 'Alfin', '08128278861', 'alfn@gmail.com', 'alfingans.jpg', 'alfinadmin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL,
  `from_currency` varchar(5) NOT NULL,
  `to_currency` varchar(5) NOT NULL,
  `convert_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `from_currency`, `to_currency`, `convert_price`) VALUES
(1, 'Rp', 'Rp', 1),
(2, '$', '€', 0.91),
(3, '$', 'LBP', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `data_rumah`
--

CREATE TABLE `data_rumah` (
  `member_id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tanah` varchar(30) NOT NULL,
  `bangunan` varchar(30) NOT NULL,
  `tidur` varchar(15) NOT NULL,
  `mandi` varchar(15) NOT NULL,
  `mobil` varchar(10) NOT NULL,
  `att` varchar(100) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_rumah`
--

INSERT INTO `data_rumah` (`member_id`, `nama`, `gambar`, `alamat`, `tanah`, `bangunan`, `tidur`, `mandi`, `mobil`, `att`, `note`) VALUES
(2, 'Hendrick', 'PERUM1.jpg', 'Bendungan Hilir, Tanah Abang,', '396', '252', '3', '2', '2', 'Kolam Renang', ''),
(3, 'David', 'PERUM2.jpg', 'Bekasi, Jawa Barat', '80', '56', '2', '1', '1', '', ''),
(4, 'Adhi', 'PERUM3.jpg', 'Cikarang, Jawa Barat', '580', '456', '4', '5', '3', 'Kolam Renang', ''),
(5, 'Raurel', 'PERUM4.png', 'Otista, Jakarta Timur', '304', '404', '14', '543', '3', '44', ''),
(7, 'Ruben', 'Gambar-Rumah-Kampung-Sederhana-Tapi-Cantik.jpg', 'Cikarang', '40', '30', '2', '1', '1', '', ''),
(8, 'Rizal', 'rumah-modern-minimalis.webp', 'BSD, Tanggerang', '90', '80', '4', '2', '2', '', ''),
(9, 'Redro', 'konsep-rumah-minimalis-jpg.webp', 'BSD, Tanggerang', '80', '70', '4', '3', '2', '', ''),
(10, 'Edrick', 'images.jpg', 'Cikarang', '60', '60', '2', '1', '2', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `delivery_cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `delivery_cost`) VALUES
(1, 3500);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(11) NOT NULL,
  `manager_name` varchar(30) NOT NULL,
  `manager_phone` varchar(30) NOT NULL,
  `manager_email` varchar(30) NOT NULL,
  `manager_image` varchar(30) NOT NULL,
  `manager_username` varchar(15) NOT NULL,
  `manager_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `manager_name`, `manager_phone`, `manager_email`, `manager_image`, `manager_username`, `manager_password`) VALUES
(1, 'MANAGER', '71123456', 'manager@gmail.com', 'person4.jpeg', 'manager', 'manager'),
(2, 'Alfin', '081282728861', 'alfin@gmail.com', 'alfingans.jpg', 'alfin', '1'),
(3, 'adrian', '-', 'adrian@gmail.com', 'adrian.jpg', 'adrian', '1'),
(4, 'adhi', '1', 'adhi@gmail.com', 'adhi.jpg', 'adhi', '1'),
(5, 'eka', '-', 'eka@gmail.com', 'eka.jpg', 'eka', '1'),
(6, 'rafly', '-', 'rafly@gmail.com', 'rafly.jpg', 'rafly', '1'),
(7, 'dio', '-', 'dio@gmail.com', 'dio.png', 'dio', '1');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(30) NOT NULL,
  `menu_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_logo`) VALUES
(1, 'Recommended', 'smoothie-logo.png'),
(2, 'Juices', 'juice-logo.png'),
(3, 'MilkShakes', 'milkshake-logo.png'),
(4, 'Coffee', 'coffee-logo.png'),
(5, 'Makanan', 'makanan-logo.png'),
(6, 'Snack', 'snack.png');

-- --------------------------------------------------------

--
-- Table structure for table `menuitem`
--

CREATE TABLE `menuitem` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_price` float NOT NULL,
  `item_image` varchar(100) NOT NULL,
  `item_description` varchar(1000) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menuitem`
--

INSERT INTO `menuitem` (`item_id`, `item_name`, `item_price`, `item_image`, `item_description`, `menu_id`) VALUES
(28, 'Tropical Smoothie', 15000, 'images/smoothies/smoothie1.jpg', 'Smoothie buah ini terdiri dari mangga potong dadu, potongan stroberi, nanas cincang, dan sedikit jus jeruk, serta topping apa pun yang Anda inginkan!', 1),
(29, 'Blueberry-Banana Smoothies', 15000, 'images/smoothies/smoothie2.jpg', '1 buah pisang, 1 cangkir blueberry, 1/2 cangkir santan tanpa pemanis, masing-masing 1 sendok makan madu dan air jeruk nipis, 1/4 sendok teh ekstrak almond, dan 1 cangkir es.', 1),
(30, 'Dragon Fruit Smoothie', 15000, 'images/smoothies/smoothie3.jpg', 'Kombinasi pisang beku, berry, grapefruit, dan buah naga siap diolah menjadi smoothies, dengan warna-warna cerah yang sangat cantik!', 1),
(31, 'Strawberry Smoothie', 15000, 'images/smoothies/smoothie4.jpg', '2 cangkir stroberi, 1 cangkir kue pon yang dihancurkan, masing-masing 1 1/2 cangkir susu dan es, dan gula pasir secukupnya. Taburi dengan krim kocok dan lebih banyak stroberi.', 1),
(32, 'Berries-Vanilla Smoothie', 15000, 'images/smoothies/smoothie5.jpg', 'Smoothie sederhana dan bergizi ini terasa seperti musim panas dan lezat jika dibuat dengan blueberry segar, Rasberi, Stroberi dengan sirup vanila.', 1),
(33, 'Blueberry-Almond Smoothie', 15000, 'images/smoothies/smoothie6.jpg', 'Almond panggang menambah rasa tubuh dan panggang pada smoothie yang kaya serat dan vitamin C ini.', 1),
(37, 'Orange Juice', 10000, 'images/juices/juice10.jpg', '100% jus jeruk segar murni, dan bukan dari konsentrat.', 2),
(38, 'Pomegranate Juice', 10000, 'images/juices/juice2.jpg', '100% sari buah delima murni, dan bukan dari konsentrat.', 2),
(39, 'Kiwi Juice', 10000, 'images/juices/juice3.jpg', '100% jus kiwi murni, dan bukan dari konsentrat.', 2),
(40, 'Peach Juice', 10000, 'images/juices/juice4.jpg', '100% jus buah persik murni, dan bukan dari konsentrat.', 2),
(41, 'Lemonade Juice', 10000, 'images/juices/juice5.jpg', '100% jus limun murni, dan bukan dari konsentrat.', 2),
(42, 'Lemonade-Mint Juice', 10000, 'images/juices/juice6.jpg', '100% jus limun murni dengan rasa mint, dan bukan dari konsentrat.', 2),
(43, 'Chocolate Bomb', 20000, 'images/milkshakes/milkshake1.jpg', 'Milkshake coklat yang enak dan lezat! Anda dapat menambahkan topping apa pun yang Anda inginkan.', 3),
(44, 'Twix Milkshake', 20000, 'images/milkshakes/milkshake2.jpg', 'Milkshake Twix yang enak dan lezat! Anda dapat menambahkan topping apa pun yang Anda inginkan.', 3),
(45, 'Caramel Milkshake', 20000, 'images/milkshakes/milkshake3.jpg', 'Milkshake Twix yang enak dan lezat! Anda dapat menambahkan topping apa pun yang Anda inginkan.', 3),
(47, 'Caffe Latte', 5000, 'images/coffee/coffee1.jpg', 'Pesan kopi Lezat untuk menyelamatkan hari!', 4),
(48, 'Black coffee', 5000, 'images/coffee/coffee2.jpg', 'Pesan kopi Lezat untuk menyelamatkan hari!', 4),
(49, 'Cinnamon Dolce Latte', 5000, 'images/coffee/coffee3.jpg', 'Pesan kopi Lezat untuk menyelamatkan hari!', 4),
(50, 'Nasi Goreng', 12000, 'images/Makanan/Nasigoreng.jpg', 'Nasi goreng spesial ayam kecombrang', 5),
(51, 'Mie Goreng Spesial', 13000, 'images/Makanan/joshua-ryder-I51a7Yy7mQA-unsplash.jpg', 'Mie goreng spesial + telor', 5),
(52, 'Ramen Omaka', 14000, 'images/Makanan/david-hunter-xhOkqfXYls8-unsplash.jpg', 'Ramen super special', 5),
(53, 'Klepon', 12000, 'images/Snack/8.png', 'Klepon adalah jajanan tradisional Indonesia yang memiliki ciri khas berbentuk bulat kecil berwarna hijau. Dilapisi oleh taburan kelapa parut, klepon memberikan sensasi tekstur yang lembut dan renyah sekaligus.', 6),
(54, 'Peyek', 5000, 'images/Snack/4.png', 'Peyek adalah camilan yang sangat populer di Indonesia, dikenal karena tekstur renyahnya yang menggoda selera.', 6),
(55, 'Kentang Goreng', 10000, 'images/Snack/9.png', 'Kentang goreng adalah camilan yang sangat populer di seluruh dunia, dikenal karena rasa gurih dan tekstur renyahnya yang memikat. Kentang dipotong menjadi bentuk batang atau kubus, kemudian digoreng dalam minyak panas hingga kecokelatan dan matang sempurna.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `customer_note` varchar(150) NOT NULL,
  `order_total` float NOT NULL,
  `order_datetime` datetime DEFAULT NULL,
  `order_lasttime` datetime DEFAULT NULL,
  `customer_status` varchar(15) NOT NULL,
  `service_type` varchar(30) NOT NULL,
  `updated_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`order_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_note`, `order_total`, `order_datetime`, `order_lasttime`, `customer_status`, `service_type`, `updated_by`) VALUES
(2, 'alfin 1', '1@gmail.com', '1', '1', 18526, '2025-01-04 12:46:33', NULL, 'Ordering', 'p', ''),
(3, 'alfin 1', '11@gmail.com', '1', '1', 18526, '2025-01-04 12:48:36', NULL, 'Ordering', 'Complaint', ''),
(4, 'David', 'David@gmail.com', '8128728861', '1', 0, '2025-01-04 12:51:11', NULL, 'Ordering', 'Complaint', 'Alfin'),
(5, 'Laurel', 'laurel@gmail.com', '1231', '1', 0, '2025-01-04 13:04:35', NULL, 'Accept', 'Pengaduan', 'Alfin'),
(7, 'Labiba', 'Biba@gmail.com', '8', '8', 0, '2025-01-08 23:16:50', '2025-01-08 23:16:50', 'Success', '', 'Alfin'),
(9, 'Lauerl Elzard', 'laurel@gmail.com', '81282728861', '', 0, '2025-01-12 14:33:30', '2025-01-12 14:33:30', 'Ordering', 'Pengaduan', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `toppings_price` float NOT NULL,
  `item_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'Test', 4, 'ggg', '04-07-2024'),
(76, 'Alfin', 5, 'Nice !!', '9-7-2024'),
(77, 'Rafi', 5, 'Semangatt !!', '15-8-2024'),
(78, 'iza', 5, 'semangat syg\n\n', '13-11-2024');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(30) NOT NULL,
  `member_image` varchar(100) NOT NULL,
  `member_role` varchar(100) NOT NULL,
  `member_phone` varchar(30) NOT NULL,
  `member_email` varchar(30) NOT NULL,
  `member_salary` float NOT NULL,
  `member_username` varchar(15) NOT NULL,
  `member_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`member_id`, `member_name`, `member_image`, `member_role`, `member_phone`, `member_email`, `member_salary`, `member_username`, `member_password`) VALUES
(2, 'Jeriko', 'images.jpeg', 'Assistant Manager', '08123873283', 'jeriko102@gmail.com', 3500000, 'jerik', 'jeriko1'),
(3, 'Nadia', '687b04427b0fa94237b7091560a6ca34.jpg', 'Head Barista', '08213821833', 'nadiaaf02@gmail.com', 250000, 'nadia', 'nadia1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `data_rumah`
--
ALTER TABLE `data_rumah`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_rumah`
--
ALTER TABLE `data_rumah`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderinfo`
--
ALTER TABLE `orderinfo`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
