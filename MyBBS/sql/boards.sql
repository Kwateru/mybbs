DROP TABLE IF EXISTS `academy_db`.`boards`;
CREATE TABLE `academy_db`.`boards` (
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `comment` VARCHAR(255) NOT NULL,
    `post_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `good_count` INTEGER NOT NULL DEFAULT 0,
    `bad_count` INTEGER NOT NULL DEFAULT 0,
    `finish_flag` TINYINT(1) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;