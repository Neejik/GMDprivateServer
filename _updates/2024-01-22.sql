ALTER TABLE `users` ADD `sinfo` VARCHAR(100) NULL DEFAULT '' AFTER `dinfo`;
ALTER TABLE `users` ADD `pinfo` VARCHAR(100) NULL DEFAULT '' AFTER `sinfo`;