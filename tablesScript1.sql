CREATE TABLE `proveedores` (
  `prvid` BIGINT(8) NOT NULL AUTO_INCREMENT,
  `prvdsc` VARCHAR(45) NOT NULL,
  `prvemail` VARCHAR(120) NULL,
  `prvtel` VARCHAR(20) NULL,
  `prvcont` VARCHAR(60) NULL,
  `prvdir` VARCHAR(120) NULL,
  `prvest` CHAR(3) NULL,
  PRIMARY KEY (`prvid`));
CREATE TABLE `productos` (
    `prdid` BIGINT(8) NOT NULL AUTO_INCREMENT,
    `prddsc` VARCHAR(60) NULL,
    `prdbrc` VARCHAR(45) NULL,
    `prdctd` INT NULL,
    `prdest` CHAR(3) NULL,
    `ctgid` BIGINT(8) NULL,
    PRIMARY KEY (`prdid`));
CREATE TABLE `categorias` (
      `ctgid` BIGINT(8) NOT NULL AUTO_INCREMENT,
      `ctgdsc` VARCHAR(45) NULL,
      `ctgest` CHAR(3) NULL,
      PRIMARY KEY (`ctgid`));
