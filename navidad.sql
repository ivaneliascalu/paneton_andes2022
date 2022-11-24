
USE `navidad` ;



-- -----------------------------------------------------
-- Table `navidad`.`Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `navidad`.`Producto` (
  `idProducto` INT NOT NULL AUTO_INCREMENT,
  `nombreProducto` VARCHAR(45) NULL,
  `unidadMedida` VARCHAR(45) NULL,
  `descProducto` VARCHAR(45) NULL,
  `Estado` VARCHAR(45) NULL,
  PRIMARY KEY (`idProducto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `navidad`.`Salida_Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `navidad`.`Salida_Producto` (
  `idEntrega` INT NOT NULL AUTO_INCREMENT,
  `fechaSalida` DATETIME NULL,
  `Producto_idProducto` INT NOT NULL,
  `nombreSocio` VARCHAR(200) NULL,
  `codigoSocio` VARCHAR(45) NULL,
  `mensaje` VARCHAR(100) NULL,
  `cantidadEntregado` INT NULL,
  `Estado` VARCHAR(45) NULL,
  `usuarioLogin` VARCHAR(45) NULL,
  `dniSocio` VARCHAR(45) NULL,
  PRIMARY KEY (`idEntrega`),
  CONSTRAINT `fk_Entrega_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `navidad`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Table `navidad`.`Agencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `navidad`.`Agencia` (
  `idAgencia` INT NOT NULL AUTO_INCREMENT,
  `codAgencia` VARCHAR(3) NULL,
  `nomAgencia` VARCHAR(45) NULL,
  `descAgencia` VARCHAR(45) NULL,
  `estadoAgencia` VARCHAR(45) NULL,
  PRIMARY KEY (`idAgencia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `navidad`.`SubAgencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `navidad`.`SubAgencia` (
  `idSubAgencia` INT NOT NULL AUTO_INCREMENT,
  `codSubAgencia` VARCHAR(3) NULL,
  `nomSubAgencia` VARCHAR(45) NULL,
  `descSubAgencia` VARCHAR(45) NULL,
  `estadoSubAgencia` VARCHAR(45) NULL,
  `Agencia_idAgencia` INT NOT NULL,
  PRIMARY KEY (`idSubAgencia`),
  CONSTRAINT `fk_SubAgencia_Agencia1`
    FOREIGN KEY (`Agencia_idAgencia`)
    REFERENCES `navidad`.`Agencia` (`idAgencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `navidad`.`Ingreso_Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `navidad`.`Ingreso_Producto` (
  `Producto_idProducto` INT NOT NULL AUTO_INCREMENT,
  `cantidad` VARCHAR(45) NULL,
  `SubAgencia_idSubAgencia` INT NOT NULL,
  `Descripcion` VARCHAR(100) NULL,
  `usuarioLogin` VARCHAR(45) NULL,
  `fechaIngreso` DATETIME NULL,
  `Estado` VARCHAR(45) NULL,
  PRIMARY KEY (`Producto_idProducto`),
  CONSTRAINT `fk_subOficina_has_Producto_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `navidad`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cantidadProductos_SubAgencia1`
    FOREIGN KEY (`SubAgencia_idSubAgencia`)
    REFERENCES `navidad`.`SubAgencia` (`idSubAgencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `navidad`.`timestamps`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `navidad`.`timestamps` (
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` TIMESTAMP NULL);


-- -----------------------------------------------------
-- Table `navidad`.`Stock_Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `navidad`.`Stock_Producto` (
  `idStock_Producto` INT NOT NULL AUTO_INCREMENT,
  `agengiaLogin` VARCHAR(100) NULL,
  `subagenciaLogin` VARCHAR(100) NULL,
  `Stock_Cantidad` VARCHAR(45) NULL,
  `Producto_idProducto` INT NOT NULL,
  `Salida_Producto_idEntrega` INT NOT NULL,
  `SubAgencia_idSubAgencia` INT NOT NULL,
  `Estado` VARCHAR(45) NULL,
  PRIMARY KEY (`idStock_Producto`),
  CONSTRAINT `fk_Stock_Producto_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `navidad`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Stock_Producto_Salida_Producto1`
    FOREIGN KEY (`Salida_Producto_idEntrega`)
    REFERENCES `navidad`.`Salida_Producto` (`idEntrega`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Stock_Producto_SubAgencia1`
    FOREIGN KEY (`SubAgencia_idSubAgencia`)
    REFERENCES `navidad`.`SubAgencia` (`idSubAgencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
