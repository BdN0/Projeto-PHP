-- MySQL Script generated by MySQL Workbench
-- Fri Mar 29 19:48:20 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Prova
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Prova
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Prova` DEFAULT CHARACTER SET utf8 ;
USE `Prova` ;

-- -----------------------------------------------------
-- Table `Prova`.`TBL_PESSOAS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Prova`.`TBL_PESSOAS` (
  `CPF` CHAR(14) UNIQUE NOT NULL ,
  `NOME` VARCHAR(120) NOT NULL,
  `IDADE` INT NOT NULL,
  `ESTADO_CIVIL` CHAR(1) NOT NULL,
  `RUA` VARCHAR(100) NOT NULL,
  `NUMERO` INT NOT NULL,
  `BAIRRO` VARCHAR(100) NOT NULL,
  `CIDADE` VARCHAR(100) NOT NULL,
  `UF` CHAR(2) NOT NULL,
  PRIMARY KEY (`CPF`),
  UNIQUE INDEX `CPF_UNIQUE` (`CPF` ASC));


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
