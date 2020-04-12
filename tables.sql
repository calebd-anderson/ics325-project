CREATE TABLE `member_contact` (
  `memberID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` char(50) NOT NULL,
  `lastName` char(50) NOT NULL,
  `phone`  char(25) NOT NULL,
  `email` char(50) NOT NULL,
  `addr` char(50) NOT NULL,
  PRIMARY KEY (`memberID`)
);

CREATE TABLE `member_creds` (
  `username` char(20) NOT NULL,
  `memberID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pswd` char(255) NOT NULL,
  `secret` blob DEFAULT NULL,
  UNIQUE KEY `username` (`username`),
  KEY `memberID` (`memberID`),
  CONSTRAINT `memberID` FOREIGN KEY (`memberID`) REFERENCES `member_contact` (`memberID`) ON DELETE CASCADE ON UPDATE CASCADE
);

-- PRODUCT TABLE
-- alt
-- title
-- price
-- img
-- descr
-- LOAD DATA INFILE "<root_dir>/ICS325_Project/products.txt" INTO TABLE products;
CREATE TABLE products (
  prodID INT UNSIGNED NOT NULL PRIMARY KEY,
  alt CHAR(20) NOT NULL,
  title VARCHAR(255) NOT NULL,
  price DECIMAL(3, 2) NOT NULL,
  img VARCHAR(255) NOT NULL,
  descr VARCHAR(255) NOT NULL
);
-- Populate products table
INSERT INTO `products` (`prodID`, `alt`, `title`, `price`, `img`, `descr`) VALUES
(2,	'stuffed_bear',	'Polar Bear Stuffed Animal',	4.99,	'http://www.stuffedsafari.com/v/vspfiles/photos/GU-4048304-2.jpg',	'description here'),
(3,	'stuffed_penguin',	'Penguin Stuffed Animal',	3.99,	'http://www.stuffedsafari.com/v/vspfiles/photos/AR-19273-2.jpg', 'description here'),
(4,	'stuffed_fox',	'Arctic Fox Stuffed Animal',	1.99,	'https://i.ebayimg.com/images/i/121551654350-0-1/s-l1000.jpg',	'description here'),
(5,	'map',	'Map of the Arctic',	5.99,	'https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Arctic_circle.svg/1200px-Arctic_circle.svg.png',	'description here'),
(6,	'ice_pick',	'Climbing Ice Pick',	6.99,	'https://machavok.files.wordpress.com/2011/02/ergo-mixed-tool.png',	'description here'),
(7,	'coat',	'Arctic Coat',	7.99,	'https://www.frankssports.com/Assets/ProductImages/WR_16107_BLK.JPG',	'description here'),
(8,	'boots',	'Boots',	2.99,	'https://image.sportsmansguide.com/adimgs/l/1/180123_ts.jpg',	'description here'),
(1,	'dive_equip',	'Arctic Diving Equipment',	1.99,	'http://www.articdiving.com/images/products/130513170128.jpg',	'description here');
-- MEMBER ORDER TABLE
-- order id
-- member id
-- prod id
-- qnty
-- total
CREATE TABLE member_order (
  orderID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  prodID INT UNSIGNED NOT NULL,
  memberID INT(10) UNSIGNED NOT NULL,
  qnty INT NOT NULL,
  total DECIMAL(3, 2) NOT NULL,
  INDEX (memberID),
  FOREIGN KEY(memberID) REFERENCES member_contact(memberID),
  INDEX (prodID),
  FOREIGN KEY(prodID) REFERENCES  products(prodID)
) ENGINE = InnoDB;

