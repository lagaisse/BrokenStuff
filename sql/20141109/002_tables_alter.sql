ALTER TABLE `brokenstuff`.`location` ADD COLUMN `lo_path` CHAR(9) NULL  AFTER `lo_geoloc_long`, DROP INDEX `lo_code` ;
ALTER TABLE `brokenstuff`.`location` CHANGE COLUMN `lo_code` `lo_code` VARCHAR(15) NOT NULL  ;
ALTER TABLE `brokenstuff`.`report` CHANGE COLUMN `lo_id` `lo_path` CHAR(9) NULL DEFAULT NULL ;