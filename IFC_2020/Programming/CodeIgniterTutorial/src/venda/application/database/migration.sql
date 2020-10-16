CREATE DATABASE vendas_db;
USE vendas_db;

CREATE TABLE IF NOT EXISTS `vendas_db`.`cliente` (
	`idCliente` INT(11) NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(45) NULL DEFAULT NULL,
	`email` VARCHAR(45) NULL DEFAULT NULL,
PRIMARY KEY (`idCliente`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `vendas_db`.`produto` (
	`idProduto` INT(11) NOT NULL AUTO_INCREMENT,
	`descricao` VARCHAR(45) NULL DEFAULT NULL,
	`valor` FLOAT(10,2) NULL DEFAULT NULL,
PRIMARY KEY (`idProduto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `vendas_db`.`venda` (
	`idVenda` INT(11) NOT NULL AUTO_INCREMENT,
	`data` DATE NULL DEFAULT NULL,
	`idCliente` INT(11) NOT NULL,
PRIMARY KEY (`idVenda`),
INDEX `fk_venda_cliente_idx` (`idCliente`),
CONSTRAINT `fk_venda_cliente`
FOREIGN KEY (`idCliente`)
REFERENCES `vendas_db`.`cliente` (`idCliente`)
ON DELETE NO ACTION
ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `vendas_db`.`itens` (
	`idItens` INT(11) NOT NULL AUTO_INCREMENT,
	`idProduto` INT(11) NOT NULL,
	`idVenda` INT(11) NOT NULL,
INDEX `fk_produto_has_venda_venda1_idx` (`idVenda`),
INDEX `fk_produto_has_venda_produto1_idx` (`idProduto`),
PRIMARY KEY (`idItens`),
CONSTRAINT `fk_produto_has_venda_produto1`
FOREIGN KEY (`idProduto`)
REFERENCES `vendas_db`.`produto` (`idProduto`)
ON DELETE NO ACTION
ON UPDATE NO ACTION,
CONSTRAINT `fk_produto_has_venda_venda1`
FOREIGN KEY (`idVenda`)
REFERENCES `vendas_db`.`venda` (`idVenda`)
ON DELETE NO ACTION
ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;
