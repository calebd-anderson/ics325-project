CREATE TABLE `member_contact` (
  `memberID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` char(50) NOT NULL,
  `lastName` char(50) NOT NULL,
  `phone`  char(25) NOT NULL,
  `email` char(50) NOT NULL,
  `addr` char(50) NOT NULL,
  PRIMARY KEY (`memberID`)
)

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
-- description
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

