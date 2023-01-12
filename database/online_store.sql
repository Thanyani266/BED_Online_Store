-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2023 at 06:14 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `review` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `firstname`, `lastname`, `username`, `password`, `email`, `address`, `phone`, `review`, `date`) VALUES
(1, 'Tsholofelo', 'Mugabadeli', 'tsholo18', 'tsholo5574', 'tsholo18@gmail.com', 'Tshimbupfe stand 988, Vuwani 0952.', '078 123 5574', 'The fast dispatch and courier service is to die for. I will surely use this service again. You rock', '2020-09-03'),
(2, 'Jacqualine', 'Mainganye', 'Nganye5598', 'jac@ng67', 'jacmainganye@gmail.com', 'Phaphazela stand 786 zone 6, Giyani 0826', '079 341 2771', 'Quick selection, and quick delivery. Good service - thank you for the time saving. Website easy to use, payment easy and quick.', '2021-11-25'),
(3, 'Maluta', 'Kwinda', 'danger56', 'M2@dflo0', 'maluta22338@gmail.com', '172 Madi stret, Khubvi, Sibasa 0920.', '083 241 2908', 'Very cheap and quick delivery. I\'m truly impressed', '2022-06-08'),
(4, 'Bono', 'Baloyi', 'baloyi90', 'bono@90', 'bonobaloyi8@gmail.com', 'Ha-Mustha Muungamunwe stand 1425, Lwamondo 0985', '084 673 1098', 'Quality products, great prices, amazing communication. Will order again.', '2019-03-29'),
(5, 'Fulufhelo', 'Mudau', 'Fulu20', 'f100@dau', 'fulumudau20@yahoo.com', 'Tshalovha Tshifulanani stand 98, Lwamondo 0985', '076 132 4506', 'Great products and awesome service.', '2021-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `food_products`
--

CREATE TABLE `food_products` (
  `product_id` int(34) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` decimal(65,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `product_categoty` varchar(50) NOT NULL,
  `special_price` decimal(10,2) DEFAULT NULL,
  `product_quantity` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_products`
--

INSERT INTO `food_products` (`product_id`, `product_name`, `product_price`, `product_image`, `product_type`, `product_categoty`, `special_price`, `product_quantity`) VALUES
(1, 'Huletts White Sugar 10kg', '203.99', 'sugar1.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(2, 'Huletts Castor Sugar 25kg', '423.22', 'sugar2.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(3, 'Huletts White Sugar 2.5kg', '51.99', 'sugar3.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(4, 'Huletts Caramel Sugar 750g', '38.99', 'sugar4.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(5, 'Simple Truth Reduced Sugar Crushed Wholewheat Flakes 400g', '22.99', 'sugar5.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(6, 'Sweet Nothings Xylitol Sweetener 1kg', '189.99', 'sugar6.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(7, 'Huletts EquiSweet Classic Low Kilojoule Sweetener Sachets 50 Pack', '36.99', 'sugar7.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(8, 'Huletts EquiSweet Classic Sweetener 100 Pack', '34.99', 'sugar8.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(9, 'Canderel Low Kilojoule Sweetener Tablets 100 Pack', '45.99', 'sugar9.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(10, 'Canderel Café Sweetener Sticks 200 Pack', '124.99', 'sugar10.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(11, 'Huletts Erythritol Sweetener 500g', '62.99', 'sugar11.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(12, 'Canderel Spoon-For-Spoon Sweetener 75g', '81.99', 'sugar12.webp', 'sugars & sweeteners', 'food products', '68.99', 0),
(13, 'Nestlé Full Cream Sweetened Condensed Milk 385g', '28.99', 'sugar13.webp', 'sugars & sweeteners', 'food products', '22.99', 0),
(14, 'Canderel Low Kilojoule Sweetener Sachets 6 x 100 Pack', '112.99', 'sugar14.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(15, 'The Kitchen Honey 340g', '54.99', 'sugar15.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(16, 'Canderel With Sucralose Low Kilojoule Sweetener 100 Pack', '42.99', 'sugar16.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(17, 'Selati Golden Brown Sugar 1kg', '23.99', 'sugar17.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(18, 'Selati Golden Brown Sugar 500g', '14.99', 'sugar18.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(19, 'Selati Golden Brown Sugar 10kg', '209.99', 'sugar19.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(20, 'Selati White Sugar 1kg', '24.99', 'sugar20.webp', 'sugars & sweeteners', 'food products', NULL, 0),
(21, 'Futurelife Smart Food Original Cereal 1.25kg', '104.99', 'cereal1.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(22, 'Kellogg\'s All-Bran Flakes Cereal 1kg', '87.99', 'cereal2.webp', 'Breakfast cereals and bars', 'food products', '67.99', NULL),
(23, 'Bokomo Fibre Plus Cereal 375g', '35.99', 'cereal3.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(24, 'Bokomo Otees Original Cereal 400g', '51.99', 'cereal4.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(25, 'Bokomo Original Wheat Crunchies Cereal 250g', '26.99', 'cereal5.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(26, 'Kellogg\'s Corn Flakes Cereal 1kg', '79.99', 'cereal6.webp', 'Breakfast cereals and bars', 'food products', '64.99', 0),
(27, 'Nutrific Wholewheat Biscuit Cereal 450g', '34.99', 'cereal7.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(28, 'Nestlé Milo Energy Cereal 450g', '59.99', 'cereal8.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(29, 'Nestlé Milo Duo Cereal 400g', '59.99', 'cereal9.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(30, 'Nestlé Cini Minis Crazily Cinnamon Cereal 375g', '44.99', 'cereal10.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(31, 'Bokomo Otees Original Chocolate Flavoured Cereal 375g', '51.99', 'cereal11.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(32, 'Morning Mills Corn Flakes Cereal 750g', '44.99', 'cereal12.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(33, 'Futurelife Smart Food Chocolate Flavoured Instant Cereal 1.25kg', '104.99', 'cereal13.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(34, 'Bokomo Bran Flakes Cereal 500g', '49.99', 'cereal14.webp', 'Breakfast cereals and bars', 'food products', '44.99', 0),
(35, 'Bokomo Bran Flakes Cereal 1kg', '81.99', 'cereal15.webp', 'Breakfast cereals and bars', 'food products', '73.79', 0),
(36, 'Kellogg\'s Corn Flakes Cereal 500g', '49.99', 'cereal16.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(37, 'Bokomo ProNutro Whole Wheat Honey Melt Flavoured Protein Cereal 500g', '54.99', 'cereal17.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(38, 'Jungle Crunchalots Honey Flavoured Oat Crispies Cereal 375g', '42.99', 'cereal18.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(39, 'Bokomo Weet-Bix Wholegrain Breakfast Biscuits 200g', '44.99', 'cereal19.webp', 'Breakfast cereals and bars', 'food products', '39.99', 0),
(40, 'Bokomo Weet-Bix Mixed Berries Breakfast Biscuits 200g', '44.99', 'cereal20.webp', 'Breakfast cereals and bars', 'food products', '39.99', 0),
(41, 'Bokomo Weet-Bix Cocoa Flavoured Breakfast Biscuits 200g', '44.99', 'cereal21.webp', 'Breakfast cereals and bars', 'food products', '39.99', 0),
(42, 'Iwisa Banana Flavoured Instant Breakfast Porridge 1kg', '27.99', 'cereal22.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(43, 'Cape Cookies Black Forest Rusks 900g', '96.99', 'cereal23.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(44, 'Bokomo Nature\'s Source Crispy Crunch Baked Granola 750g', '65.99', 'cereal24.webp', 'Breakfast cereals and bars', 'food products', NULL, 0),
(45, 'Tastic Soft & Absorbing Long Grain White Rice 2kg', '37.99', 'rice1.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(46, 'Tafelberg Super Maize Meal 5kg', '51.99', 'rice2.webp', 'Rice, Grain and Maize', 'food products', '49.99', 0),
(47, 'White Star Super Maize Meal 5kg', '67.99', 'rice3.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(48, 'Tastic Long Grain Parboiled White Rice 10kg', '178.99', 'rice4.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(49, 'Ace Maize Rice Pack 1kg', '17.99', 'rice5.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(50, 'Ace Maize Rice Pack 2.5kg', '41.99', 'rice6.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(51, 'Tastic Long Grain Parboiled Rice 1kg', '21.99', 'rice7.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(52, 'Tastic Long Grain Parboiled Rice 2kg', '36.99', 'rice8.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(53, 'Spekko Long Grain Parboiled White Rice 10kg', '173.99', 'rice9.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(54, 'Tasia 7 Ancient Grain Rice 250g', '32.99', 'rice10.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(55, 'Pride Super Maize Meal 5kg', '67.99', 'rice11.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(56, 'Iwisa Super Maize Meal 12.5kg', '148.99', 'rice12.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(57, 'Tafelberg Super Maize Meal 10kg\r\n\r\n', '98.99', 'rice13.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(58, 'White Star Super Maize Meal 12.5kg', '153.99', 'rice14.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(59, 'Pride Super Maize Meal 2.5kg', '49.99', 'rice15.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(60, 'Pride Super Maize Meal 2.5kg', '34.99', 'rice16.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(61, 'Pride Super Maize Meal 10kg', '117.99', 'rice17.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(62, 'Ace Super Maize Meal 10kg', '109.99', 'rice18.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(63, 'White Star Quick Instant Maize Meal 1kg', '16.99', 'rice19.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(64, 'Ace Quick Cook Super Maize Meal 5kg', '73.99', 'rice20.webp', 'Rice, Grain and Maize', 'food products', NULL, 0),
(65, 'Green Beans 600g', '24.99', 'bean1.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(66, 'Pride Kidney Beans 500g', '39.99', 'bean2.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(67, 'Pride Red Speckled Beans 2kg', '98.99', 'bean3.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(68, 'McCain Frozen Green Beans 750g', '47.99', 'bean4.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(69, 'Pride Brown Lentils 500g', '28.99', 'bean5.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(70, 'Pride Red Lentils 500g', '28.99', 'bean6.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(71, 'Imbo Black Lentils Pack 500g', '29.99', 'bean7.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(72, 'Pot O\' Gold Lentils In Tomato Puree & Brine 400g', '15.99', 'bean8.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(73, 'Koo Butter Beans In Tangy Curry Sauce Can 410g', '22.99', 'bean9.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(74, 'Koo Red Kidney Beans In Brine 410g', '22.99', 'bean10.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(75, 'Koo Baked Beans In Tomato Sauce 215g', '22.99', 'bean11.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(76, 'Koo Butter Beans In Brine 410g', '22.99', 'bean12.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(77, 'Koo Baked Beans In Tomato Sauce 410g', '14.99', 'bean13.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(78, 'Koo Baked Beans In Tomato Sauce 6 x 215g', '69.99', 'bean14.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(79, 'Koo Speckled Sugar Beans In Brine 410g', '22.99', 'bean15.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(80, 'Koo Baked Beans In Chilli Sauce Can 420g', '18.99', 'bean16.webp', 'Beans, pulses and lentils', 'food products', NULL, 0),
(81, 'Fatti\'s & Moni\'s Penne Rigate Pasta 500g', '32.99', 'pasta1.webp', 'Pasta and noodles', 'food products', '22.99', 0),
(82, 'Mr Pasta Pasta Screws 500g', '16.99', 'pasta2.webp', 'Pasta and noodles', 'food products', NULL, 0),
(83, 'Mr. Pasta Tricolore Pasta 500g', '16.99', 'pasta3.webp', 'Pasta and noodles', 'food products', NULL, 0),
(84, 'Mr. Pasta Gnocchi Pasta 500g', '16.99', 'pasta4.webp', 'Pasta and noodles', 'food products', NULL, 0),
(85, 'Mr. Pasta Cavatappi Pasta 500g', '16.99', 'pasta5.webp', 'Pasta and noodles', 'food products', NULL, 0),
(86, 'Mr. Pasta Macaroni Pasta 500g', '14.99', 'pasta6.webp', 'Pasta and noodles', 'food products', NULL, 0),
(87, 'Mr. Pasta Spaghetti Pasta 500g', '14.99', 'pasta7.webp', 'Pasta and noodles', 'food products', NULL, 0),
(88, 'MG Pasta Fusilli Pasta 500g', '21.99', 'pasta8.webp', 'Pasta and noodles', 'food products', NULL, 0),
(89, 'Mr. Pasta Pipe Rigate Pasta 500g', '16.99', 'pasta9.webp', 'Pasta and noodles', 'food products', NULL, 0),
(90, 'MG Pasta Rigatoni Pasta 500g', '21.99', 'pasta10.webp', 'Pasta and noodles', 'food products', NULL, 0),
(91, 'Maggi Boerewors Flavoured 2 Minute Noodles 5 x 73g', '34.99', 'pasta11.webp', 'Pasta and noodles', 'food products', NULL, 0),
(92, 'Maggi Crispy Chicken Flavoured 2 Minute Noodles 5 x 73g', '34.99', 'pasta12.webp', 'Pasta and noodles', 'food products', NULL, 0),
(93, 'Roka Egg Noodles 250g', '24.99', 'pasta13.webp', 'Pasta and noodles', 'food products', NULL, 0),
(94, 'Roka Hokkien Noodles 400g', '34.99', 'pasta14.webp', 'Pasta and noodles', 'food products', NULL, 0),
(95, 'Roka Pad Thai Instant Noodles 400g', '34.99', 'pasta15.webp', 'Pasta and noodles', 'food products', NULL, 0),
(96, 'Roka Assorted Instant Noodles 5 x 85g', '28.99', 'pasta16.webp', 'Pasta and noodles', 'food products', NULL, 0),
(97, 'Roka Chicken Flavoured Instant Noodles 5 x 85g', '28.99', 'pasta17.webp', 'Pasta and noodles', 'food products', NULL, 0),
(98, 'Roka Beef Flavoured Instant Noodles 5 x 85g', '28.99', 'pasta18.webp', 'Pasta and noodles', 'food products', NULL, 0),
(99, 'Mr. Pasta Instant Beef Noodles 5 x 60g', '21.99', 'pasta19.webp', 'Pasta and noodles', 'food products', NULL, 0),
(100, 'Mr. Pasta Instant Chicken Noodles 5 x 60g', '21.99', 'pasta20.webp', 'Pasta and noodles', 'food products', NULL, 0),
(101, 'Mr. Pasta Vegetable Instant Noodles 5 x 60g', '21.99', 'pasta21.webp', 'Pasta and noodles', 'food products', NULL, 0),
(102, 'Kellogg\'s Chicken Flavoured Instant Noodles 5 x 70g', '34.99', 'pasta22.webp', 'Pasta and noodles', 'food products', NULL, 0),
(103, 'Kellogg\'s Beef Flavoured Instant Noodles 5 x 70g', '34.99', 'pasta23.webp', 'Pasta and noodles', 'food products', NULL, 0),
(104, 'Kellogg\'s Cheese Flavoured Instant Noodles 5 x 70g', '34.99', 'pasta24.webp', 'Pasta and noodles', 'food products', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(34) NOT NULL,
  `order_cost` decimal(6,2) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` text NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_cost`, `order_status`, `user_name`, `user_email`, `user_phone`, `user_city`, `user_address`, `order_date`) VALUES
(1, '203.99', 'not paid', 'Given', 'givimutanda@gmail.com', 835672108, 'Sibasa', '44 MGT, Sibasa.', '2022-12-26 07:45:52'),
(2, '104.97', 'not paid', 'Ndwamato', 'ndwams@emxapls.com', 86, 'Louis Trichardt', '67 grobler street, Louis Trichardt 0920', '2022-12-27 08:51:49'),
(3, '146.97', 'not paid', 'Carlos', 'tagyc@gmail.com', 835672108, 'Tzaneen', '1243 Dans street, Tzaneen', '2022-12-27 09:01:31'),
(4, '22.99', 'not paid', 'Ndwamato', 'ndwams@emxapls.com', 976523421, 'Louis Trichardt', '67 grobler street, Louis Trichardt 0920', '2022-12-29 06:41:18'),
(5, '22.99', 'not paid', 'Carlos', 'tagyc@gmail.com', 976523421, 'Tzaneen', '1243 Dans street, Tzaneen', '2022-12-29 06:53:34'),
(6, '104.98', 'not paid', 'Given', 'givimutanda@gmail.com', 835672108, 'Tzaneen', '1243 Dans street, Tzaneen', '2022-12-29 06:57:57'),
(7, '81.99', 'not paid', 'Ndwamato', 'ndwams@emxapls.com', 976523421, 'Sibasa', '44 MGT, Sibasa.', '2022-12-29 06:59:30'),
(8, '131.98', 'not paid', 'Given', 'givimutanda@gmail.com', 835672108, 'Louis Trichardt', '67 grobler street, Louis Trichardt 0920', '2022-12-29 07:02:07'),
(9, '203.99', 'not paid', 'mulaudzi', 'thdfg@gmail.com', 984567890, 'thohoyandou', 'University road, University of Venda, Thohyandou, 0950.', '2023-01-11 03:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `product_name`, `product_image`, `product_price`, `product_quantity`, `user_name`, `order_date`) VALUES
(1, 4, '75', 'Koo Baked Beans In Tomato Sauce 215g', 'bean11.webp', '22.99', 1, 'Ndwamato', '2022-12-29 06:41:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `food_products`
--
ALTER TABLE `food_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food_products`
--
ALTER TABLE `food_products`
  MODIFY `product_id` int(34) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(34) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
