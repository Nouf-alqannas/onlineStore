-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 08:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone_Num` varchar(10) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `type_user` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Name`, `Email`, `Address`, `Phone_Num`, `Password`, `type_user`) VALUES
(1, 'Dana', 'Dana@gmail.com', 'Dammmam alraka dist', '0565432105', '123', 1),
(2, 'Nouf', 'Nouf@gmail.com', 'Dammmam, alraka dist', '0512345678', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `count_pro` int(10) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_pro`, `count_pro`, `id_user`) VALUES
(4, 13, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(11) NOT NULL,
  `name_cats` varchar(255) NOT NULL,
  `img_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_cat`, `name_cats`, `img_cat`) VALUES
(1, 'vegetables', 'vegetables.jpeg'),
(2, 'fruits', 'fruits.jpeg'),
(5, 'meat', 'meat.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID_Item` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Catogry_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID_Item`, `name`, `Price`, `qty`, `img_path`, `Description`, `Catogry_id`) VALUES
(12, 'Tomato', '10', 100, '6641b54521324.jpeg', 'FRESH FROM THE FARM: We select the finest tomatoes and pick them at the peak of ripeness to ensure unparalleled flavor. Juicy: Our tomatoes have an abundance of delicious juice that gives your dishes a great flavour. Versatile: Enjoy it fresh in salads or sandwiches, add it to your favorite sauces, or use it to prepare delicious Italian dishes.', 1),
(13, 'potato', '20', 200, '6641b579bd255.jpeg', 'A storehouse of nutrients: Rich in potassium, vitamin C and healthy fats, it gives you long-lasting energy and boosts your health. Inherently delicious: It doesn\'t need a lot of seasoning to bring out its delicious taste. Versatile: fry, boil, bake, or roast – potatoes suit all tastes and recipes. Savings: A great economical option for preparing delicious family meals. Everyone\'s Friend: Naturally gluten-free, suitable for almost everyone.', 1),
(14, 'cucumber', '15', 300, '6641b5b36ea1d.jpeg', 'Refreshing and full of water: It has a high water content, making it an ideal choice for hot days or after a workout. Rich in vitamins and minerals: It contains vitamin C, potassium, and antioxidants that promote a healthy immune and digestive system. Low in calories: An ideal choice for those on a diet to lose weight or maintain a healthy weight', 1),
(15, 'pineapple', '11', 400, '6641b61965982.jpeg', 'Unparalleled taste: Pineapple has a unique combination of sweetness and refreshing acidity that makes it a fruit loved by everyone. Rich in vitamins and minerals: An excellent source of vitamin C, manganese and vitamin B6, in addition to antioxidants that promote a healthy body.', 2),
(16, 'meats', '50', 20, '6641b65f6e7ce.jpeg', 'Building Muscle: Meat is an excellent source of protein, which is the basic building block for muscle building and tissue repair. Long-lasting energy: Meat contains iron, which helps transport oxygen in the body, giving you long-lasting energy. Zinc mineral: Meat is rich in zinc, which supports immune functions and contributes to healthy skin and hair.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `requst`
--

CREATE TABLE `requst` (
  `id_requst` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `price` int(10) NOT NULL,
  `qty_requst` int(10) NOT NULL,
  `total_price` int(11) NOT NULL,
  `number_shear` int(10) NOT NULL,
  `Paying_off` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requst`
--

INSERT INTO `requst` (`id_requst`, `id_user`, `id_product`, `price`, `qty_requst`, `total_price`, `number_shear`, `Paying_off`) VALUES
(5, 2, 13, 20, 1, 20, 1122222222, 'Rajhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `cart_proo` (`id_pro`),
  ADD KEY `ss` (`id_user`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_Item`),
  ADD KEY `cart_pro` (`Catogry_id`);

--
-- Indexes for table `requst`
--
ALTER TABLE `requst`
  ADD PRIMARY KEY (`id_requst`),
  ADD KEY `pro_re` (`id_product`),
  ADD KEY `user_re` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567896;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID_Item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `requst`
--
ALTER TABLE `requst`
  MODIFY `id_requst` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_proo` FOREIGN KEY (`id_pro`) REFERENCES `product` (`ID_Item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ss` FOREIGN KEY (`id_user`) REFERENCES `admin` (`Admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `cart_pro` FOREIGN KEY (`Catogry_id`) REFERENCES `categories` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requst`
--
ALTER TABLE `requst`
  ADD CONSTRAINT `pro_re` FOREIGN KEY (`id_product`) REFERENCES `product` (`ID_Item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_re` FOREIGN KEY (`id_user`) REFERENCES `admin` (`Admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
