DROP TABLE `basic_demo`;
CREATE TABLE `DATABASENAME`.`basic_demo` (`ID` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(256) NOT NULL , `email` VARCHAR(256) NOT NULL , `address` VARCHAR(256) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
INSERT INTO `basic_demo` (`ID`, `name`, `email`, `address`) VALUES (NULL, 'Peter', 'ngy@v.qc.ca', '123 vanier'), (NULL, 'Bruce', 'nortonb@v.qc.ca', '123 vanier');