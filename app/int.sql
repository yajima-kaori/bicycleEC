CREATE DATABASE `bicycleEC` default character set utf8;

use bicycleEC;

CREATE TABLE `products` (
  `id` int primary key auto_increment,
  `name` varchar(100) NOT NULL,
  `body` varchar(255) NOT NULL,
  `price` int(32) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
);

CREATE TABLE `members` (
  `id` int primary key auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL UNIQUE,
  `addr` varchar(255) NOT NULL,
  `password` varchar(12) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
);

CREATE TABLE `purchases` (
  `id` int primary key auto_increment,
  `member_id` int(8) NOT NULL,
  `product_id` int(8) NOT NULL,
  `OK_flag` varchar(2),
  `NG_flag` varchar(2),
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
);



INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("shibuya", "快適な走りを実現!!スタイリッシュなフォルム", "100000", "1.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("harajuku", "快適な走りを実現!!スタイリッシュなフォルム", "200000", "2.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("yoyogi", "快適な走りを実現!!スタイリッシュなフォルム", "300000", "3.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("sinjuku", "快適な走りを実現!!スタイリッシュなフォルム", "400000", "4.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("shinokubo", "快適な走りを実現!!スタイリッシュなフォルム", "500000", "5.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("takadanobaba", "快適な走りを実現!!スタイリッシュなフォルム", "600000", "6.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("mejiro", "快適な走りを実現!!スタイリッシュなフォルム", "700000", "7.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("ikebukuro", "快適な走りを実現!!スタイリッシュなフォルム", "800000", "8.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("otuka", "快適な走りを実現!!スタイリッシュなフォルム", "900000", "9.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("sugamo", "快適な走りを実現!!スタイリッシュなフォルム", "1000000", "10.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("komagome", "快適な走りを実現!!スタイリッシュなフォルム", "1100000", "11.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("tabata", "快適な走りを実現!!スタイリッシュなフォルム", "1200000", "12.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("nishinippori", "快適な走りを実現!!スタイリッシュなフォルム", "1300000", "13.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("nippori", "快適な走りを実現!!スタイリッシュなフォルム", "1400000", "14.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("ueno", "快適な走りを実現!!スタイリッシュなフォルム", "1500000", "15.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("okachimachi", "快適な走りを実現!!スタイリッシュなフォルム", "1600000", "16.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("akihabara", "快適な走りを実現!!スタイリッシュなフォルム", "1700000", "17.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("kanda", "快適な走りを実現!!スタイリッシュなフォルム", "1800000", "18.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("tokyo", "快適な走りを実現!!スタイリッシュなフォルム", "1900000", "19.jpg", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `photo`, `created`, `updated`) VALUES ("urakucho", "快適な走りを実現!!スタイリッシュなフォルム", "2000000", "20.jpg", now(), now());