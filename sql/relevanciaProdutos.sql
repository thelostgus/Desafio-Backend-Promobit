SELECT `tag`.`name` AS nome, (SELECT COUNT(*) FROM `product_tag` WHERE `product_tag`.`tag_id` = `tag`.`id`) AS num_produtos_relacionados from `tag` ORDER BY num_produtos_relacionados DESC;
