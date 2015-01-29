ALTER TABLE `brokenstuff`.`report` ADD COLUMN `r_desc` TEXT NULL AFTER `r_name`;
ALTER TABLE `brokenstuff`.`report` CHANGE COLUMN `r_nb_vote_end` `r_nb_vote` INT(11) NULL DEFAULT NULL ;
