ALTER TABLE `brokenstuff`.`location` ADD INDEX `LOCODE` USING BTREE (`lo_code` ASC);
ALTER TABLE `brokenstuff`.`location` ADD INDEX `LOPATH` USING BTREE (`lo_path` ASC);
ALTER TABLE `brokenstuff`.`report` ADD INDEX `RELOCODE` USING BTREE (`lo_code` ASC);
ALTER TABLE `brokenstuff`.`report` ADD INDEX `ADDDATE` USING BTREE (`r_add_date` ASC);
ALTER TABLE `brokenstuff`.`report` ADD INDEX `ENDDATE` USING BTREE (`r_end_date` ASC);
ALTER TABLE `brokenstuff`.`location` ADD UNIQUE INDEX `LOPLACE` (`lo_code` ASC, `lo_path` ASC);
