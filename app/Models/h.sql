ALTER TABLE `cash_flows` ADD `date_debut` DATETIME NULL AFTER `date`;


ALTER TABLE `cash_flows` CHANGE `date` `date` DATETIME NULL DEFAULT NULL;
