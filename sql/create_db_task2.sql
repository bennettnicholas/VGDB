-- MySQL Workbench Forward Engineering

-- SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
-- SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
-- SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP DATABASE IF EXISTS `mydb`;
CREATE DATABASE `mydb`;
use `mydb`;

-- -----------------------------------------------------
-- Table `mydb`.`VideoGame`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`VideoGame` 
(
  `GameID` INT NOT NULL,
  `GameName` VARCHAR(50) NULL,
  `Genre` VARCHAR(30) NULL,
  `CurrentPrice` FLOAT NULL,
  PRIMARY KEY (`GameID`)
);


-- -----------------------------------------------------
-- Table `mydb`.`Developer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Developer` 
(
  `DeveloperID` INT NOT NULL,
  `DeveloperName` VARCHAR(30) NULL,
  `DeveloperOrigin` VARCHAR(60) NULL,
  `GameID` INT NOT NULL,
  PRIMARY KEY (`DeveloperID`, `GameID`),
    FOREIGN KEY (`GameID`)
    REFERENCES `mydb`.`VideoGame` (`GameID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);


-- -----------------------------------------------------
-- Table `mydb`.`Publisher`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Publisher` 
(
  `PublisherID` INT NOT NULL,
  `PublisherName` VARCHAR(30) NULL,
  `PublisherOrigin` VARCHAR(60) NULL,
  `GameID` INT NOT NULL,
  PRIMARY KEY (`PublisherID`, `GameID`),
    FOREIGN KEY (`GameID`)
    REFERENCES `mydb`.`VideoGame` (`GameID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);


-- -----------------------------------------------------
-- Table `mydb`.`Consumer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Consumer` 
(
  `ConsumerID` INT NOT NULL,
  `ConsumerName` VARCHAR(50) NULL,
  `GameID` INT NOT NULL,
  PRIMARY KEY (ConsumerID, GameID),
    FOREIGN KEY (`GameID`)
    REFERENCES `mydb`.`VideoGame` (`GameID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

-- -----------------------------------------------------
-- Table `mydb`.`Review`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Review`
(
  `ReviewID` INT NOT NULL,
  `Rating` INT NULL,
  `ConsumerID` INT NOT NULL,
  `GameID` INT NOT NULL,
  PRIMARY KEY (`ReviewID`),
	FOREIGN KEY (`ConsumerID`)
    REFERENCES `mydb`.`Consumer` (`ConsumerID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (`GameID`)
    REFERENCES `mydb`.`VideoGame` (`GameID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);


-- -----------------------------------------------------
-- Table `mydb`.`Stream`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Stream` (
  `StreamID` INT NOT NULL,
  `StreamLink` VARCHAR(100) NULL,
  `ConsumerID` INT NOT NULL,
  `GameID` INT NOT NULL,
  PRIMARY KEY (`StreamID`),
    FOREIGN KEY (`ConsumerID`)
    REFERENCES `mydb`.`Consumer` (`ConsumerID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (`GameID`)
    REFERENCES `mydb`.`VideoGame` (`GameID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);


-- -----------------------------------------------------
-- Table `mydb`.`Mod`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Mod` (
  `ModID` INT NOT NULL,
  `ModDetails` VARCHAR(1000) NULL,
  `ConsumerID` INT NOT NULL,
  `GameID` INT NOT NULL,
  PRIMARY KEY (`ModID`),
    FOREIGN KEY (`ConsumerID`)
    REFERENCES `mydb`.`Consumer` (`ConsumerID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (`GameID`)
    REFERENCES `mydb`.`VideoGame` (`GameID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

COMMIT;
