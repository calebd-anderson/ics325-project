CREATE TABLE member_contact(
  memberID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstName CHAR(50) NOT NULL,
  lastName CHAR(50) NOT NULL,
  phone INT NOT NULL,
  email CHAR(50) NOT NULL,
  addr CHAR(50) NOT NULL
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