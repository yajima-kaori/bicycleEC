CREATE DATABASE `bicycleEC`;

use bicycleEC;

CREATE TABLE `products` (
  `product_id` int primary key auto_increment,
  `name` varchar(100) NOT NULL,
  `body` varchar(255) NOT NULL,
  `price` int(32) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
);

CREATE TABLE `members` (
  `member_id` int primary key auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `password` int(8) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
);

CREATE TABLE `purchase` (
  `purchase_id` primary key auto_increment,
  `member_id` int(8) NOT NULL,
  `product_id` int(8) NOT NULL,
  `OK_flag` bit,
  `NG_flag` bit,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
);



INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("shibuya", "快適な走りを実現!!スタイリッシュなフォルム", "100000", "1", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("harajuku", "快適な走りを実現!!スタイリッシュなフォルム", "200000", "2", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("yoyogi", "快適な走りを実現!!スタイリッシュなフォルム", "300000", "3", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("sinjuku", "快適な走りを実現!!スタイリッシュなフォルム", "400000", "4", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("shinokubo", "快適な走りを実現!!スタイリッシュなフォルム", "500000", "5", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("takadanobaba", "快適な走りを実現!!スタイリッシュなフォルム", "600000", "6", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("mejiro", "快適な走りを実現!!スタイリッシュなフォルム", "700000", "7", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("ikebukuro", "快適な走りを実現!!スタイリッシュなフォルム", "800000", "8", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("otuka", "快適な走りを実現!!スタイリッシュなフォルム", "900000", "9", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("sugamo", "快適な走りを実現!!スタイリッシュなフォルム", "1000000", "10", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("komagome", "快適な走りを実現!!スタイリッシュなフォルム", "1100000", "11", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("tabata", "快適な走りを実現!!スタイリッシュなフォルム", "1200000", "12", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("nishinippori", "快適な走りを実現!!スタイリッシュなフォルム", "1300000", "13", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("nippori", "快適な走りを実現!!スタイリッシュなフォルム", "1400000", "14", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("ueno", "快適な走りを実現!!スタイリッシュなフォルム", "1500000", "15", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("okachimachi", "快適な走りを実現!!スタイリッシュなフォルム", "1600000", "16", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("akihabara", "快適な走りを実現!!スタイリッシュなフォルム", "1700000", "17", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("kanda", "快適な走りを実現!!スタイリッシュなフォルム", "1800000", "18", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("tokyo", "快適な走りを実現!!スタイリッシュなフォルム", "1900000", "19", now(), now());
INSERT INTO `products` (`name`, `body`, `price`, `image`, `created`, `updated`) VALUES ("urakucho", "快適な走りを実現!!スタイリッシュなフォルム", "2000000", "20", now(), now());