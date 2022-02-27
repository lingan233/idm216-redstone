-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 27, 2022 at 12:38 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local_redstone-pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL COMMENT 'ID of each item on the menu',
  `name` varchar(250) NOT NULL COMMENT 'The name of each item on the menu',
  `description` longtext NOT NULL COMMENT 'Description that''s listed underneath the menu items.',
  `price` decimal(10,0) NOT NULL COMMENT 'Total price',
  `category` int(11) NOT NULL COMMENT '"1" is "Pizza", "2" is "Drinks", "3" is "Salad"',
  `img` varchar(250) NOT NULL COMMENT 'Menu item location'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `category`, `img`) VALUES
(1, 'Pepperoni', 'Fresh tomato sauce, mozzarella and pepperoni.', '12', 1, 'pepperoni-pizza.png'),
(2, 'Margarita', 'Chunky tomato sauce, fresh mozzarella, fresh basil and olive oil.', '10', 1, 'margarita-pizza.png'),
(3, 'Bianca', 'Garlic herb sauce, spinach, mozzarella, ricotta cheese, roasted garlic, red peppers.', '12', 1, 'bianca-pizza.png'),
(4, 'Grilled Veggie', 'Eggplant, zucchini, red pepper, red onion, mozzarella, basil, and balsamic glaze.', '12', 1, 'grilled-veggie-pizza.png'),
(5, 'Pear', 'Pecorino cheese, goat cheese, mozzarella, fresh pear, honey and sage.', '12', 1, 'pear-pizza.png'),
(6, 'Mushroom', 'Shitake mushrooms, white mushrooms, fresh mozzarella, truffle oil, and arugula.', '12', 1, 'mushroom-pizza.png'),
(7, 'Angry', 'Cream sauce, onion, chorizo, mozzarella, jalapeno, chile de arbol cilantro.', '12', 1, 'angry-pizza.png'),
(8, 'Spinach and Bacon', 'Herb garlic base, mozzarella, spinach, caramelized onions, and bacon.', '12', 1, 'spinach-bacon-pizza.png'),
(9, 'Shrimp and Tomato', 'Fresh tomato sauce, mozzarella, roasted garlic, cherry tomato, shrimp, fresh parsley, and lemon.', '12', 1, 'shrimp-tomato-pizza.png'),
(10, 'Meatlover', 'Fresh tomato sauce, mozzarella, pecorino cheese, bacon, pepperoni, sausage.', '13', 1, 'meatlover-pizza.png'),
(11, 'Glass Bottle Coke', '', '2', 2, 'glass-coke.png'),
(12, 'Can Coke', '', '2', 2, 'can-coke.png'),
(13, 'Pelligrino', '', '3', 2, 'pelligrino.png'),
(14, 'Snapple', '', '3', 2, 'snapple.png'),
(15, 'Water', '', '2', 2, 'water.png'),
(16, 'Arugula Salad', 'Fresh arugula, pears, goat cheese, red onion, and champagne vinaigrette.', '8', 3, 'argulua-salad.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of each item on the menu', AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
