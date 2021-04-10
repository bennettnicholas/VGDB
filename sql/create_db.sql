-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`VideoGame`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`VideoGame` (
  `GameID` INT NOT NULL,
  `GameName` VARCHAR(50) NULL,
  `Genre` VARCHAR(30) NULL,
  `CurrentPrice` FLOAT NULL,
  `AvgReview` FLOAT NULL,
  PRIMARY KEY (`GameID`),
  UNIQUE INDEX `GameID_UNIQUE` (`GameID` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Producer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Producer` (
  `ProducerID` INT NOT NULL,
  `ProducerName` VARCHAR(30) NULL,
  `ProducerOrigin` VARCHAR(60) NULL,
  `GameID` INT NOT NULL,
  PRIMARY KEY (`ProducerID`),
  INDEX `fk_Producer_VideoGame_idx` (`GameID` ASC) VISIBLE,
  CONSTRAINT `fk_Producer_VideoGame`
    FOREIGN KEY (`GameID`)
    REFERENCES `mydb`.`VideoGame` (`GameID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Distributor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Distributor` (
  `DistributorID` INT NOT NULL,
  `DistributorName` VARCHAR(30) NULL,
  `DistributorOrigin` VARCHAR(60) NULL,
  `GameID` INT NOT NULL,
  PRIMARY KEY (`DistributorID`),
  INDEX `fk_Distributor_VideoGame1_idx` (`GameID` ASC) VISIBLE,
  CONSTRAINT `fk_Distributor_VideoGame1`
    FOREIGN KEY (`GameID`)
    REFERENCES `mydb`.`VideoGame` (`GameID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Consumer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Consumer` (
  `ConsumerID` INT NOT NULL,
  `ConsumerName` VARCHAR(50) NULL,
  `GameID` INT NOT NULL,
  PRIMARY KEY (`ConsumerID`),
  INDEX `fk_Consumer_VideoGame1_idx` (`GameID` ASC) VISIBLE,
  CONSTRAINT `fk_Consumer_VideoGame1`
    FOREIGN KEY (`GameID`)
    REFERENCES `mydb`.`VideoGame` (`GameID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Review`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Review` (
  `ReviewID` INT NOT NULL,
  `Rating` INT NULL,
  `ConsumerID` INT NOT NULL,
  `GameID` INT NOT NULL,
  PRIMARY KEY (`ReviewID`),
  INDEX `fk_Review_Consumer1_idx` (`ConsumerID` ASC) VISIBLE,
  INDEX `fk_Review_VideoGame1_idx` (`GameID` ASC) VISIBLE,
  CONSTRAINT `fk_Review_Consumer1`
    FOREIGN KEY (`ConsumerID`)
    REFERENCES `mydb`.`Consumer` (`ConsumerID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Review_VideoGame1`
    FOREIGN KEY (`GameID`)
    REFERENCES `mydb`.`VideoGame` (`GameID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Stream`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Stream` (
  `StreamID` INT NOT NULL,
  `StreamLink` VARCHAR(100) NULL,
  `ConsumerID` INT NOT NULL,
  `GameID` INT NOT NULL,
  PRIMARY KEY (`StreamID`),
  INDEX `fk_Stream_Consumer1_idx` (`ConsumerID` ASC) VISIBLE,
  INDEX `fk_Stream_VideoGame1_idx` (`GameID` ASC) VISIBLE,
  CONSTRAINT `fk_Stream_Consumer1`
    FOREIGN KEY (`ConsumerID`)
    REFERENCES `mydb`.`Consumer` (`ConsumerID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Stream_VideoGame1`
    FOREIGN KEY (`GameID`)
    REFERENCES `mydb`.`VideoGame` (`GameID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Mod`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Mod` (
  `ModID` INT NOT NULL,
  `ModDetails` VARCHAR(1000) NULL,
  `ConsumerID` INT NOT NULL,
  `GameID` INT NOT NULL,
  PRIMARY KEY (`ModID`),
  INDEX `fk_Mod_Consumer1_idx` (`ConsumerID` ASC) VISIBLE,
  INDEX `fk_Mod_VideoGame1_idx` (`GameID` ASC) VISIBLE,
  CONSTRAINT `fk_Mod_Consumer1`
    FOREIGN KEY (`ConsumerID`)
    REFERENCES `mydb`.`Consumer` (`ConsumerID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mod_VideoGame1`
    FOREIGN KEY (`GameID`)
    REFERENCES `mydb`.`VideoGame` (`GameID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
