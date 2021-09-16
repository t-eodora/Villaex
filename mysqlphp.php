<?php
	
	$db='sii_klk2';
	$host='localhost';
	$user='root';
	$password='';
	
	$object = new mysqli($host, $user, $password, $db) or die();

    $sql = 'SET NAMES utf8mb4;';
	$object->query($sql) or die('greska u set names naredbi');

//------USER------

    $sql = 'DROP TABLE IF EXISTS `user`;';
    $object->query($sql) or die('greska u drop naredbi user');

    $sql = 'CREATE TABLE `user`  (
      `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
      `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
      `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
      `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
      `contact` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
      PRIMARY KEY (`user_id`)
    )';
	

    $object->query($sql) or die('greska u kreirajnu tabele user');
    
    $sql_array = array(
        'INSERT INTO `user` VALUES (1, "Petar Peric", "abc.gmail@gmail.abc", "6547hfg5", "064123456");',
        'INSERT INTO `user` VALUES (2, "Ana Jovanovic", "mailana@gmail.com", "123123", "012345678");',
        'INSERT INTO `user` VALUES (3, "Luka Petrovic", "l.petrovic@yahoo.com", "000000", "060123123");',
        'INSERT INTO `user` VALUES (5, "Jelena Peric", "1111jp@mejl.com", "111222", "064257254");',
        'INSERT INTO `user` VALUES (6, "Nenad Jokic", "nekimail@abc.com", "f43tg45g5", "0114223453")'
    );

    for($i = 0; $i < 5; $i++) {
        $sql = $sql_array[$i];
        $object->query($sql) or die('greska u dodavanju podataka u tabelu user');
    }




//-----VILLA------


$sql = 'SET FOREIGN_KEY_CHECKS = 0';
$object->query($sql) or die('greska u foregin key cheks naredbi villa');

$sql = 'DROP TABLE IF EXISTS `villa`;';
$object->query($sql) or die('greska u drop naredbi villa');

$sql = 'CREATE TABLE `villa`  (
  `villa_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number_of_rooms` int(10) UNSIGNED NOT NULL,
  `number_of_people` int(10) UNSIGNED NOT NULL,
  `day_price` decimal(10, 2) UNSIGNED NOT NULL,
  PRIMARY KEY (`villa_id`)
)';

$object->query($sql) or die('greska u kreirajnu tabele villa');

$sql_array = array(
    "INSERT INTO `villa` VALUES (1, 'Palm Bank',  9, 18, 450.00);",
    "INSERT INTO `villa` VALUES (2, 'Rose Estate',  5, 10, 380.00);",
    "INSERT INTO `villa` VALUES (3, 'Sunny Lodge',  7, 12, 429.00);",
    "INSERT INTO `villa` VALUES (4, 'Presidental Villa',  6, 10, 410.00)",
    "INSERT INTO `villa` VALUES (5, 'Royal Villa',  10, 18, 640.00)",
);


for($i = 0; $i < 5; $i++) {
    $sql = $sql_array[$i];
    $object->query($sql) or die('greska u dodavanju podataka u tabelu user');
}
//------IMAGE------
    
    $sql = 'DROP TABLE IF EXISTS `images`;';
    $object->query($sql) or die('greska u drop naredbi images');

    $sql = 'CREATE TABLE `images`  (
      `images_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
      `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
      `villa_id` int(10) UNSIGNED NOT NULL,
      PRIMARY KEY (`images_id`),
      INDEX `fk_images_villa_id`(`villa_id`),
      CONSTRAINT `fk_images_villa_id` FOREIGN KEY (`villa_id`) REFERENCES `villa` (`villa_id`) ON DELETE RESTRICT ON UPDATE CASCADE
    )';
	

	$object->query($sql) or die('greska u kreirajnu tabele images');

$sql_array = array(
    'INSERT INTO `images` VALUES (1, "villas/1.jpg", 1);',
    'INSERT INTO `images` VALUES (2, "villas/2.jpg", 2);',
    'INSERT INTO `images` VALUES (3, "villas/3.jpg", 3);',
    'INSERT INTO `images` VALUES (4, "villas/4.jpg", 4);',
    'INSERT INTO `images` VALUES (5, "villas/5.jpg", 5);',

);
    

    for($i = 0; $i < 5; $i++) {
        $sql = $sql_array[$i];
        $object->query($sql) or die('greska u dodavanju podataka u tabelu user');
    }

//------RESERVATION------

    $sql = 'DROP TABLE IF EXISTS `reservation`;';
    $object->query($sql) or die('greska u drop naredbi reservation');

    $sql = 'CREATE TABLE `reservation`  (
      `reservation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
      `start_date` datetime(0) NOT NULL,
      `end_date` datetime(0) NOT NULL,
      `time_of_reservation` datetime(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
      `villa_id` int(10) UNSIGNED NOT NULL,
      `user_id` int(10) UNSIGNED NOT NULL,
      PRIMARY KEY (`reservation_id`),
      INDEX `fk_reservation_villa_id`(`villa_id`),
      INDEX `fk_reservation_user_id`(`user_id`),
      CONSTRAINT `fk_reservation_villa_id` FOREIGN KEY (`villa_id`) REFERENCES `villa` (`villa_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
      CONSTRAINT `fk_reservation_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE CASCADE
    )';
	

	$object->query($sql) or die('greska u kreirajnu tabele reservation');

    $sql = 'INSERT INTO `reservation` VALUES (2, "2020-09-06 12:46:00", "2020-09-14 12:46:00", "2020-09:01 20:34:43", 4, 2);';
    
    $object->query($sql) or die('greska u ubacivanju podataka u tabelu reservation');

    $sql = 'SET FOREIGN_KEY_CHECKS = 1';
	$object->query($sql) or die('greska u foregin key cheks naredbi na kraju');


	$object->close();

    ?>
