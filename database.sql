
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for boats
-- ----------------------------
DROP TABLE IF EXISTS `boats`;
CREATE TABLE `boats`  (
  `boat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` enum('cat','mono') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number_of_people` int(10) UNSIGNED NOT NULL,
  `distance` double UNSIGNED NOT NULL,
  `day_price` decimal(10, 2) UNSIGNED NOT NULL,
  PRIMARY KEY (`boat_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of boats
-- ----------------------------
INSERT INTO `boats` VALUES (1, 'brod 1', 'mono', 3, 31.2, 20.99);
INSERT INTO `boats` VALUES (2, 'brod 2', 'cat', 5, 31.2, 25.99);
INSERT INTO `boats` VALUES (3, 'brod 3', 'mono', 7, 59.12, 29.99);
INSERT INTO `boats` VALUES (4, 'brod 4', 'cat', 2, 20.35, 20.99);

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers`  (
  `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`customer_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES (1, 'pera peric', 'neki.mail@gnail.snor', 'sda2665as', '06432959716');
INSERT INTO `customers` VALUES (2, 'Mika Mikic', 'mail.123@gmail.com', '123', '01245775351');
INSERT INTO `customers` VALUES (3, 'Luka Lukic', '321.name@gmail.com', '321', '0648588554');
INSERT INTO `customers` VALUES (5, 'Simon Simonovic', '111.name@gmail.com', '111', '064852659');
INSERT INTO `customers` VALUES (6, 'Nenad Nenic', '222.name@gmail.com', '222', '064895632');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images`  (
  `images_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `boat_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`images_id`) USING BTREE,
  INDEX `fk_images_boat_id`(`boat_id`) USING BTREE,
  CONSTRAINT `fk_images_boat_id` FOREIGN KEY (`boat_id`) REFERENCES `boats` (`boat_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES (4, 'cat-1.jpg', 1);
INSERT INTO `images` VALUES (5, 'cat-2.jpg', 1);
INSERT INTO `images` VALUES (6, 'monohull-1.jpg', 2);
INSERT INTO `images` VALUES (7, 'monohull-2.jpg', 2);
INSERT INTO `images` VALUES (9, 'monohull-3.jpg', 3);
INSERT INTO `images` VALUES (10, 'monohull-1.jpg', 4);

-- ----------------------------
-- Table structure for reservations
-- ----------------------------
DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations`  (
  `reservation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `start_date` datetime(0) NOT NULL,
  `end_date` datetime(0) NOT NULL,
  `time_of_reservation` datetime(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `boat_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`reservation_id`) USING BTREE,
  INDEX `fk_reservations_boat_id`(`boat_id`) USING BTREE,
  INDEX `fk_reservations_customer_id`(`customer_id`) USING BTREE,
  CONSTRAINT `fk_reservations_boat_id` FOREIGN KEY (`boat_id`) REFERENCES `boats` (`boat_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_reservations_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reservations
-- ----------------------------
INSERT INTO `reservations` VALUES (2, '2020-06-24 10:28:00', '2020-06-27 10:28:00', '2020-06-22 22:28:57', 4, 2);

SET FOREIGN_KEY_CHECKS = 1;
