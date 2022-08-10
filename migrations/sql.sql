SELECT * FROM `wp_book_publish` AS `bp`, `wp_book` AS `b` WHERE `bp`.`book_code` = '' AND `b`.`name` = `bp`.`name`;

INSERT INTO `wp_series` (`id`, `code`, `name`, `brief`, `publish_at`, `press`, `description`, `created_at`, `updated_at`, `status`) VALUES 
(NULL, 'dostoyevsky', '陀思妥耶夫斯基著作', '', '', '', '', NOW(), NOW(), '0'),
(NULL, 'kafka', '卡夫卡著作', '', '', '', '', NOW(), NOW(), '0'),
(NULL, 'chinesacademic', '中国学术', '', '', '', '', NOW(), NOW(), '0'),
(NULL, '', '', '', '', '', '', NOW(), NOW(), '0'),
(NULL, '', '', '', '', '', '', NOW(), NOW(), '0'),
(NULL, '', '', '', '', '', '', NOW(), NOW(), '0'),
(NULL, '', '', '', '', '', '', NOW(), NOW(), '0'),
(NULL, '', '', '', '', '', '', NOW(), NOW(), '0'),
(NULL, '', '', '', '', '', '', NOW(), NOW(), '0'),


INSERT INTO `wp_series_volume` (`id`, `series_code`, `name`, `publish_at`, `press`, `description`, `book_num`, `orderlist`, `created_at`, `updated_at`, `status`, `extfield`) VALUES 
(NULL, 'goodworks', '卡夫卡作品集', '', '', '', '0', '0', NOW(), NOW(), '0', ''),
(NULL, 'classical', '四书', '', '', '', '0', '0', NOW(), NOW(), '0', ''),
(NULL, 'classical', '五经', '', '', '', '0', '0', NOW(), NOW(), '0', ''),
(NULL, 'classical', '十三经', '', '', '', '0', '0', NOW(), NOW(), '0', ''),
(NULL, 'classical', '其他', '', '', '', '0', '0', NOW(), NOW(), '0', ''),

(NULL, 'chinesacademic', '中国学术', '', '', '', '0', '0', NOW(), NOW(), '0', ''),
(NULL, '', '', '', '', '', '0', '0', NOW(), NOW(), '0', ''),
(NULL, '', '', '', '', '', '0', '0', NOW(), NOW(), '0', ''),


INSERT INTO `wp_book_publish` (`series_code`, `series_volume_id`, `name`, `book_code`, `brief`, `author_alias`, `extfield`)
SELECT '', 0, `name`, `code`, `description`, `author`, `category` FROM `wp_book` WHERE `extfield1` = '';


UPDATE `wp_book_publish` AS `bp`, `wp_book` AS `b` SET `b`.`extfield1` = 'yes' WHERE `b`.`code` = `bp`.`book_code`;
UPDATE `wp_series_volume` AS `sv`, (SELECT `series_volume_id`, COUNT(*) AS `count` FROM `wp_series_volume` GROUP BY `series_volume_id`) AS `tmp` SET `book_num` = `tmp`.`count` WHERE `sv`.`id` = `tmp`.`series_volume_id`;
