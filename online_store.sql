-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2023 at 10:56 AM
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
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Thanyani', 'thanyis66@gmail.com', '$2y$10$RgZp27F5KIZlL./aKoU9iOh3K/JeEzKIB3vgJzrJMVagr88CpDcEq'),
(2, 'Mbudzi', 'mbudzi@gmail.com', '$2y$10$2EHqEl2JzgHXKy70U8k0beTChxSB2fYBZ69rLjbEnAI5eEa83uFj2');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Clover'),
(2, 'Selati'),
(3, 'Bakers'),
(4, 'Knorr'),
(6, 'Cadbury'),
(10, 'Nestlé'),
(11, 'Willard'),
(12, 'spekko'),
(13, 'Bush Baby'),
(14, 'Sunlight');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Food'),
(2, 'Drinks'),
(4, 'Household'),
(7, 'Outdoor');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 1, 603638723, 5, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image`, `product_price`, `date`, `status`) VALUES
(1, 'Clover Tropika Orange Juice Blend 2L', 'All the vitality and energy of citrus fruits, there is no such cutting edge. This is a refreshing, uplifting and super smooth drink.', 'Clover, Tropika, Orange, Juice, Blend', 2, 1, 'clover1.png', '36.99', '2023-02-20 07:16:03', 'true'),
(2, 'Clover Krush 100% Cranberry Fruit Juice 1.5L', 'Enjoy Clover\'s Krush Cranberry 100% fruit juice with a blend of apples and aronia.', 'Clover, Krush, Cranberry, Fruit, Juice', 2, 1, 'clover2.png', '39.99', '2023-02-20 07:18:31', 'true'),
(3, 'Clover Tropika Peach Flavoured Dairy Fruit Mix Juice 2L', 'Imagine the aromatic smell scenting the air as a smooth summer sun sets behind a peach tree orchard – it\'s delicious, dainty and delightful.', 'Clover, Tropika, Peach, Dairy, Fruit, Mix, Juice', 2, 1, 'clover3.png', '36.99', '2023-02-20 07:20:47', 'true'),
(4, 'Clover Tropika Pineapple Juice Blend 2L', 'This exotic, upbeat, full-bodied flavour is loved by many. It\'s a gentle hospitality for some and a daily drink for others.', 'Clover, Tropika, Pineapple, Juice, Blend', 2, 1, 'clover4.png', '36.99', '2023-02-20 07:26:30', 'true'),
(5, 'Clover Super M Chocolate Flavoured Milk 300ml', 'Super M\'s Chocolate Flavoured medium fat super shake is Clover\'s coolest low fat flavoured milk.', 'Clover, Super M, Chocolate, Milk', 2, 1, 'clover5.png', '15.99', '2023-02-20 07:28:39', 'true'),
(6, 'Clover Sip Up Low Fat Granadilla Flavoured Yoghurt Based Dairy Snack Drink 850g', 'Hit the grind! Gear up and get going with Sip Up Granadilla because grafting hard starts with the decision to be great! Shake it up, Slurp it down and GO! Sip Up is a yoghurt based dairy snack.', 'Clover, Sip Up, Low Fat, Granadilla, Yoghurt, Dairy, Snack Drink.', 2, 1, 'clover6.png', '29.99', '2023-02-20 07:39:42', 'true'),
(7, 'Clover Guava 20% Nectar Blend Juice 500ml', 'Enjoy our delicious juice that is made of 20% fruit.', 'Clover, Guava, Nectar, Blend, Juice', 2, 1, 'clover7.png', '17.99', '2023-02-20 07:42:33', 'true'),
(8, 'Clover Krush 6 Fruits & 6 Vitamins 100% Juice Blend Boxes 6 x 200ml', 'Quali 100% is a healthy alternative drink for you and your family for any occasion. Quali Time, All the Time!', 'Clover, Krush, Fruits, Vitamins, Juice, Boxes', 2, 1, 'clover8.png', '51.99', '2023-02-20 07:48:23', 'true'),
(9, 'Clover Quali Mixed Berries Flavoured Fruit Nectar Blend 500ml', 'Clover Mixed Berry Nectar blend contains 40% fruit juice, with a punchy berry colour and flavour.', 'Clover, Quali, Mixed Berries, Fruit, Nectar, Blend.', 2, 1, 'clover9.png', '17.99', '2023-02-20 07:50:16', 'true'),
(10, 'Cadbury Dairy Milk Top Deck Chocolate Slab 80g', 'This popular chocolate slab features a milk chocolate base with scrumptious white chocolate on top of each block. It melts in your mouth and delivers a delightful blend of flavours.', 'Cadbury, Dairy, Milk, Top Deck, Chocolate, Slab', 1, 6, 'cad1.png', '19.99', '2023-02-20 08:03:17', 'true'),
(11, 'Cadbury Dairy Milk Whole Nut Chocolate Slab 80g', 'Enjoy the crisp taste of whole hazelnuts that have been expertly covered in renowned milk chocolate. It provides enjoyment with each bite and has a nutty texture.', 'Cadbury, Dairy, Milk, Whole, Nut, Chocolate, Slab.', 1, 6, 'cad2.png', '19.99', '2023-02-20 08:05:16', 'true'),
(12, 'Clover Butro Full Fat Modified Butter Spread 500g', 'Full fat modified butter spread with sunflower oil.', 'Clover, Butro, Full Fat, Modified, Butter, Spread.', 1, 6, 'clover10.png', '99.99', '2023-02-20 08:08:11', 'true'),
(13, 'Nestlé Bar-One Large Chocolate 55g', 'Thick milk chocolate with nougat and caramel centre.', 'Nestle, Bar-One, Large, Chocolate.', 1, 10, 'nes1.png', '11.99', '2023-02-20 08:11:24', 'true'),
(14, 'Willards Cheese Curls Maize Snack 150g', 'The original cheesy chip.', 'Willards, Cheese, Curls, Maize, Snack', 1, 11, 'wil1.png', '19.99', '2023-02-20 08:14:58', 'true'),
(15, 'Willards Cheas Snaks Cheese Flavoured Maize Snack 135g', 'An irresistible crunch-tastic snack with a finger-licking cheesy flavour, perfect for sharing with friends.', 'Willards, Cheas, Snaks, Cheese, Maize Snack', 1, 11, 'wil2.png', '14.99', '2023-02-20 08:17:15', 'true'),
(16, 'Nestlé Tex Large Chocolate Bar 40g', 'Tex combines aerated chocolate and light wafer to give you a crisp snacking experience.', 'Nestlé, Tex, Large, Chocolate Bar', 1, 10, 'nes2.png', '11.99', '2023-02-20 08:22:01', 'true'),
(17, 'Bakers Tennis Classic Coconut Biscuits 200g', 'Bakers Tennis Classic Coconut Biscuits are made with just the best ingredients and have become a part of the childhood memories of every generation. Each one is made with love and attention just for you.', 'Bakers, Tennis, Classic, Coconut, Biscuits', 1, 3, 'bakers1.png', '23.99', '2023-02-20 08:24:26', 'true'),
(18, 'Selati Pure White Sugar Bag 2.5kg', 'Bake, make drinks, cook and more with this high quality bag of pure white sugar.', 'Selati, Pure, White, Sugar, Bag', 1, 2, 'selati1.png', '53.99', '2023-02-20 08:28:22', 'true'),
(19, 'Spekko Long Grain Parboiled White Rice Bag 2kg', 'This rice\'s adaptability allows it to be used in a wide range of savoury and sweet recipes. It will always cook up separate, fluffy and white, resulting in an excellent rice that is just right, every single time.', 'Spekko, Long, Grain, Parboiled, White Rice', 1, 12, 'spekko1.png', '34.99', '2023-02-20 08:31:21', 'true'),
(20, 'Cadbury Lunch Bar 48g', 'Crispy wafer, caramel, peanut and crisp rice has all been delectably coated in milk chocolate for your enjoyment. The ideal chocolate snack to give you that energy boost that is needed.', 'Cadbury, Lunch Bar', 1, 6, 'cad3.png', '11.99', '2023-02-20 08:33:48', 'true'),
(21, 'Bush Baby Mushroom Chair', 'Bush Baby Mushroom Chair is the best seat in the house, great for camping, concerts and sports events.', 'Bush Baby, Mushroom Chair', 7, 13, 'bush1.png', '499.99', '2023-02-20 08:42:01', 'true'),
(22, 'Bush Baby Weekender Chair', 'Relax in comfort and enjoy the outdoors with the Bush Baby Weekender Chair, it is also lightweight and folds away for easy and convenient storage.', 'Bush Baby, Weekender Chair', 7, 13, 'bush5.png', '179.99', '2023-02-20 08:44:57', 'true'),
(23, 'Bush Baby Camping Stool', 'The Bush Baby Camping Stool is great for camping, concerts and sports events. It is also lightweight and folds away for easy and convenient storage. ', 'Bush Baby, Camping Stool', 7, 13, 'bush2.png', '129.99', '2023-02-20 08:46:48', 'true'),
(24, 'Bush Baby Captains Chair', 'Bush Baby Captains Chair comes with a side pocket and cup holder. It has a weight of 2.60KGS and folds away for easy and convenient storage. ', 'Bush Baby, Captains Chair', 7, 13, 'bush3.png', '249.99', '2023-02-20 08:49:17', 'true'),
(25, 'Recliner Chair', 'Whether you are on the beach or alongside a pool this recliner chair gets you relaxed.', 'Recliner, Chair', 7, 13, 'bush4.png', '999.99', '2023-02-20 08:51:49', 'true'),
(26, 'Bush Baby Khaki Heavy Duty Stretcher', 'This well-made stretcher is a must-have on any camping trip, featuring a sturdy frame for added strength, longevity and comfort.', 'Bush Baby, Khaki, Heavy Duty, Stretcher', 7, 13, 'bush6.png', '799.99', '2023-02-20 08:54:14', 'true'),
(27, 'Sunlight Lemon 100 Original Dishwashing Liquid Refill 750ml', 'Get more of the best dishwashing power with this cost-effective refill pack', 'Sunlight, Lemon, Original, Dishwashing, Liquid, Refill', 4, 14, 'house2.png', '29.99', '2023-02-20 09:02:16', 'true'),
(28, 'Sunlight Mild & Gentle Laundry Soap Bar 500g', 'Pamper your delicate fabrics and fine clothing details with this super mild laundry soap bar.', 'Sunlight, Mild & Gentle, Laundry, Soap, Bar', 4, 14, 'house3.png', '22.99', '2023-02-20 09:03:49', 'true'),
(29, 'Sunlight Lemon 100 Dishwashing Liquid 750ml', 'Achieve a glistening finish and eradicate grime with the help of this lemon infused dishwashing liquid.', 'Sunlight, Lemon, Dishwashing, Liquid', 4, 14, 'house4.png', '36.99', '2023-02-20 09:06:03', 'true'),
(30, 'Sunlight 2-In-1 Summer Sensations Auto Washing Powder 2kg', 'Take machine washing to the next level with this washing and conditioning powder infused with the fresh scents of summer.', 'Sunlight, Summer, Sensations, Auto, Washing, Powder', 4, 14, 'house1.png', '76.99', '2023-02-20 09:08:59', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `stock_table`
--

CREATE TABLE `stock_table` (
  `stock_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `stock_qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock_table`
--

INSERT INTO `stock_table` (`stock_id`, `product_name`, `stock_qty`) VALUES
(1, 'Clover Tropika Orange Juice Blend 2L', 15),
(2, 'Clover Krush 100% Cranberry Fruit Juice 1.5L', 5),
(3, 'Clover Tropika Peach Flavoured Dairy Fruit Mix Juice 2L', 8),
(4, 'Clover Tropika Pineapple Juice Blend 2L', 9),
(5, 'Clover Super M Chocolate Flavoured Milk 300ml', 2),
(6, 'Clover Sip Up Low Fat Granadilla Flavoured Yoghurt Based Dairy Snack Drink 850g', 14),
(7, 'Clover Guava 20% Nectar Blend Juice 500ml', 60),
(8, 'Clover Krush 6 Fruits & 6 Vitamins 100% Juice Blend Boxes 6 x 200ml', 23),
(9, 'Clover Quali Mixed Berries Flavoured Fruit Nectar Blend 500ml', 64),
(10, 'Cadbury Dairy Milk Top Deck Chocolate Slab 80g', 10),
(11, 'Cadbury Dairy Milk Whole Nut Chocolate Slab 80g', 50),
(12, 'Clover Butro Full Fat Modified Butter Spread 500g', 17),
(13, 'Nestlé Bar-One Large Chocolate 55g', 45),
(14, 'Willards Cheese Curls Maize Snack 150g', 89),
(15, 'Willards Cheas Snaks Cheese Flavoured Maize Snack 135g', 126),
(16, 'Nestlé Tex Large Chocolate Bar 40g', 0),
(17, 'Bakers Tennis Classic Coconut Biscuits 200g', 43),
(18, 'Selati Pure White Sugar Bag 2.5kg', 90),
(19, 'Spekko Long Grain Parboiled White Rice Bag 2kg', 57),
(20, 'Cadbury Lunch Bar 48g', 15),
(21, 'Bush Baby Mushroom Chair', 9),
(22, 'Bush Baby Weekender Chair', 20),
(23, 'Bush Baby Camping Stool', 90),
(24, 'Bush Baby Captains Chair', 18),
(25, 'Recliner Chair', 23),
(26, 'Bush Baby Khaki Heavy Duty Stretcher', 6),
(27, 'Sunlight Lemon 100 Original Dishwashing Liquid Refill 750ml', 78),
(28, 'Sunlight Mild & Gentle Laundry Soap Bar 500g', 88),
(29, 'Sunlight Lemon 100 Dishwashing Liquid 750ml', 98),
(30, 'Sunlight 2-In-1 Summer Sensations Auto Washing Powder 2kg', 34);

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(1, 1, 56, 603638723, 2, '2023-02-20 10:05:48', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(1, 'Thanyani', 'thanyis666@gmail.com', '$2y$10$Z9jE/8cQQRWWe0PDVPj9B.6Pcdt9m2VERIgWABPemGKVqkyTD9Jem', 'horr.jpg', '::1', 'Maungani', '0761434756');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stock_table`
--
ALTER TABLE `stock_table`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `stock_table`
--
ALTER TABLE `stock_table`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
