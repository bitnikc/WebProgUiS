--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `bonus_price` double NOT NULL,
  `photo` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `price`, `bonus_price`, `photo`) VALUES
(1, 'Scuderia Ferrari Team T-Shirt Red', 'The Scuderia Ferrari Team T-shirt is the official replica of the item of clothing worn by the men of the Maranello team on the World F1 2014 race tracks, including the logo of the Team and of all the sponsors.\r\nThe unique details thus characterise this item of clothing such as the inserts in contrasting colour, the embroidered Puma logo and the design of the three-colour Italian flag on the right sleeve.\r\n\r\n100% Cotton', 120, 96, 'ferrari_Tshirt.png'),
(2, 'Mercedes AMG Petronas Lewis Hamilton 2014 World Champion T-Shirt', '', 48, 48, 'mercedes_Tshirt.png'),
(3, 'Lotus F1 Team Replica Rain Jacket', '', 194, 136, 'lotus_jacket.png'),
(4, 'Scuderia Ferrari Raikkonen Driver Cap', '', 48, 16, 'ferrari_cap.png'),
(5, 'Scuderia Ferrari Beanie', '', 40, 32, 'ferrari_beanie.png'),
(6, 'Mercedes AMG Petronas Rosberg Driver Cap', '', 48, 24, 'mercedes_cap.png');

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
