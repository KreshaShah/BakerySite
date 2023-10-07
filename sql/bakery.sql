-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 05:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`id`, `name`, `price`, `image`) VALUES
(1, 'White Chocolate Cake', 550, 'white-chocolate-cake-thumb1.jpg'),
(2, 'Red velvet cake', 749, 'Red-Velvet-Cake-with-Fruit-960x960-c-default.jpg'),
(3, 'Black Forest Cake', 899, 'Black-forest-cake-feature.jpg'),
(4, 'Pineapple Cake', 499, 'pineapplecake.jpg'),
(5, 'Strawberry Cake', 449, 'Strawberry-rose-cake-feature.jpg'),
(6, 'Mango Cake', 699, 'Mango.jpg'),
(7, 'Blueberry Cake', 1799, 'blueberry-cake-7.jpg'),
(8, 'Rainbow Cake', 425, 'IMG_8570-scaled.jpg'),
(9, 'Butterscotch Cake', 599, 'Capture.png'),
(10, 'Chocolate Cake', 549, 'Capture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

CREATE TABLE `cookies` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`id`, `name`, `price`, `image`) VALUES
(1, 'Whoopie Pie Cookie', 20, 'whoopie_pie.jpg'),
(2, 'Kiss Cookie', 10, 'peanut-butter-blossoms-cookies-2.jpg'),
(3, 'Spritz Cookie', 15, 'best-spritz-cookies-4.jpg'),
(4, 'Snowball Cookie', 20, 'pecan-snowball-cookies-5.jpg'),
(5, 'Thumbprint Cookie', 25, 'P7171684-768x1024.jpg\r\n'),
(6, 'Fortune Cookie', 25, 'istockphoto-168614008-612x612.jpg'),
(7, 'Crinkle Cookie', 20, '94c73bab7e4fef946da4b01232a36a9b.jpg'),
(8, 'Gingerbread Cookie', 40, 'ea0d8eecd67fa4ccc1497d13880baf1d.jpg'),
(9, 'Macaroons', 30, 'f2ca89690b977d751d51d17a4ca678f0.jpg'),
(10, 'Black&White Cookie', 20, 'IMG_5532.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cupcakes`
--

CREATE TABLE `cupcakes` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cupcakes`
--

INSERT INTO `cupcakes` (`id`, `name`, `price`, `image`) VALUES
(1, 'Vanilla Cupcake', 50, 'Vanilla-Cupcakes-Recipe-1.jpg\r\n'),
(2, 'Cookies and Cream Cupcake', 45, 'Cookies-Cream-Cupcakes-tasteandtellblog.com-1.jpg'),
(3, 'Hazelnut Cupcake', 35, 'Hazelnut-Chocolate-Cupcakes_730px-4.jpg'),
(4, 'Posh Popcorn Cupcake', 50, 'Capture2.jpg'),
(5, 'Purple Velvet Cupcake', 80, 'a7890ab3f984ef28889f1f0c6fe0f534.jpg'),
(6, 'Midnight Mint Cupcake', 80, 'Chocolate-Mint-Cupcakes-02.jpg'),
(7, 'Banoffee Cupcake', 100, 'Banoffee_Cupcakes7.jpg'),
(8, 'Apple Crumble Cupcake', 70, 'IMG_1313-Copy-Copy-793x1024.jpg'),
(9, 'Strawberry Cheese Cupcake', 80, 'IMG_1499-scaled.jpg'),
(10, 'Lemon Drizzle Cupcake', 60, 'lemon-drizzle-cupcakes-recipe-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `shape` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `level` int(5) NOT NULL,
  `flavour` varchar(25) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donuts`
--

CREATE TABLE `donuts` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donuts`
--

INSERT INTO `donuts` (`id`, `name`, `price`, `image`) VALUES
(1, 'Vanilla frosting with Sprinkle', 75, '1.jpg'),
(2, 'Double Chocolate donut', 85, 'chocolate-glazed-donuts6.jpg'),
(3, 'Blueberry Donut', 70, 'Browned-Butter-Blueberry-Donuts.jpg'),
(4, 'Jelly Donut', 80, 'jelly.jpg'),
(5, 'Chocolate Frosted Donut', 50, 'photo-1551024601-bec78aea704b.jpg'),
(6, 'Strawberry Frosted Donut', 70, 'photo-1533910534207-90f31029a78e.jpg'),
(7, 'Glazed Donut', 85, 'tumblr_oujbvdJUoD1wrkojqo1_500.jpg'),
(8, 'Cream-Filled Donut', 40, 'ff5d0e35ce309766074af2a079db7e2f.jpg'),
(9, 'Lemon Donut', 50, 'fe161cd19622d9fc949ced8c256a1604.jpg'),
(10, 'Red Velvet Donut', 80, 'IMG_5844-6-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pancakes`
--

CREATE TABLE `pancakes` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pancakes`
--

INSERT INTO `pancakes` (`id`, `name`, `price`, `image`) VALUES
(1, 'Banana Pancake', 90, '3-Ingredient-Vegan-Pancakes-Gluten-free-Sweet-Simple-Vegan2.jpg'),
(2, 'Oatmeal&Cinnamon apple\r\n', 60, 'apple-oatmeal-pancakes7SM.jpg'),
(3, 'Copycat Cracker Barrel', 50, 'Copycat-Cracker-Barrel-Pancakes-3.jpg'),
(4, 'Protein Pancake', 50, 'Fluffy-Protein-Pancakes-scaled.jpg\r\n'),
(5, 'Plant-Based with Butter', 60, 'Easy-Pancake-Recipe-2.jpg\r\n'),
(6, 'Lemon Poppy-Seed Blueberry', 90, 'Lemon-Poppy-Seed-Blueberry-Pancakes_1.jpg'),
(7, 'Funfetti Pancake', 60, 'Funfetti-Pancakes-from-Scratch-3.jpg'),
(8, 'Nutella Pancake', 70, 'pexels-photo-7071232.jpeg'),
(9, 'Peanut Butter', 60, 'peanut-butter-chocolate-chip-pancakes-29.jpg'),
(10, 'Caramel Pancake', 40, '1af182ba63ac9403d76bc69f5271369b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pastries`
--

CREATE TABLE `pastries` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pastries`
--

INSERT INTO `pastries` (`id`, `name`, `price`, `image`) VALUES
(1, 'White Chocolate Pastry', 65, 'white-chocolate-mocha-layer-cake-4.jpg'),
(2, 'Red Velvet Pastry', 70, 'Red-Velvet-Cake-4.jpg'),
(3, 'Black Forest Pastry', 45, '504f5f6aecf5e253e84ffd3beaf34a7b.jpg'),
(4, 'Pineapple Pastry', 40, 'Eggless-Pineapple-pastry4.jpg'),
(5, 'Strawberry Pastry', 50, 'Strawberry+Cake+Recipe.jpg'),
(6, 'Mango Pastry', 90, 'Eggless-Mango-Cake-02-280x300.jpg'),
(7, 'Blueberry Pastry', 120, 'blueberry-chia-cake-cheesecake-pie.jpg'),
(8, 'Rainbow Pastry', 100, 'IMG_8655-scaled.jpg'),
(9, 'Butterscotch Pastry', 50, 'butterscotch-pastry.jpg'),
(10, 'Chocolate Pastry', 50, 'aesthetic-tumblr-chocolate-cake-Favim.com-6926531.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookies`
--
ALTER TABLE `cookies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cupcakes`
--
ALTER TABLE `cupcakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donuts`
--
ALTER TABLE `donuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pancakes`
--
ALTER TABLE `pancakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pastries`
--
ALTER TABLE `pastries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cookies`
--
ALTER TABLE `cookies`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cupcakes`
--
ALTER TABLE `cupcakes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donuts`
--
ALTER TABLE `donuts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pancakes`
--
ALTER TABLE `pancakes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pastries`
--
ALTER TABLE `pastries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
