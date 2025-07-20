CREATE DATABASE IF NOT EXISTS php_korean_food_mistery_no_commerce;

USE php_korean_food_mistery_no_commerce;

CREATE TABLE IF NOT EXISTS `products` (
    `product_id` INT(11) NOT NULL AUTO_INCREMENT,
    `product_name` varchar(255) NOT NULL,
    `product_category` varchar(100) NOT NULL,
    `product_description` varchar(255) NOT NULL,
    `product_image_item1` varchar(255) NOT NULL,
    `product_image_item2` varchar(255) NOT NULL,
    `product_image_item3` varchar(255) NOT NULL,
    `product_image_item4` varchar(255) NOT NULL,
    `product_price` DECIMAL(6, 2) NOT NULL,
    `product_special_order` INTEGER(2) NOT NULL,
    `product_filling` varchar(100) NOT NULL,
    PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `orders` (
    `order_id` INT(11) NOT NULL AUTO_INCREMENT,
    `order_cost` DECIMAL(6, 2) NOT NULL,
    `order_status` VARCHAR(100) NOT NULL DEFAULT 'on_hold',
    `user_id` INT(11) NOT NULL,
    `user_phone` INT(11) NOT NULL,
    `user_city` VARCHAR(255) NOT NULL,
    `user_address` VARCHAR(255) NOT NULL,
    `order_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `order_items` (
    `order_item_id` INT(11) NOT NULL AUTO_INCREMENT,
    `order_id` INT(11) NOT NULL,
    `product_id` VARCHAR(255) NOT NULL,
    `product_name` VARCHAR(255) NOT NULL,
    `product_image_item` VARCHAR(255) NOT NULL,
    `user_id` INT(11) NOT NULL,
    `order_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `users` (
    `user_id` INT(11) NOT NULL AUTO_INCREMENT,
    `user_name` VARCHAR(100) NOT NULL,
    `user_email` VARCHAR(100) NOT NULL,
    `user_password` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`user_id`),
    UNIQUE KEY `UX_Constraint` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
