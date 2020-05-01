CREATE TABLE `member_creds` (
  `username` char(20) NOT NULL,
  `memberID` int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `pswd` char(255) NOT NULL,
  `secret` blob DEFAULT NULL,
  UNIQUE KEY `username` (`username`)
);

CREATE TABLE `member_contact` (
  `memberID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstName` CHAR(50) NOT NULL,
  `lastName` CHAR(50) NOT NULL,
  `phone` VARCHAR(64) NOT NULL,
  `email` CHAR(50) NOT NULL,
  `addr` CHAR(50) NOT NULL,
  CONSTRAINT `member`
    FOREIGN KEY (memberID) REFERENCES member_creds (memberID)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

-- PRODUCT TABLE
-- alt
-- title
-- price
-- img
-- descr
-- LOAD DATA INFILE "C:/Users/caleb/Documents/GitHub/ICS325_Project/products.txt" INTO TABLE products;
CREATE TABLE products (
  prodID INT UNSIGNED NOT NULL PRIMARY KEY,
  alt CHAR(20) NOT NULL,
  title VARCHAR(255) NOT NULL,
  price DECIMAL(3, 2) NOT NULL,
  img VARCHAR(255) NOT NULL,
  descr VARCHAR(255) NOT NULL
);

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

CREATE TABLE `member_blog` (
  `blogID` int(10) NOT NULL AUTO_INCREMENT,
  `title` char(30) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`blogID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;