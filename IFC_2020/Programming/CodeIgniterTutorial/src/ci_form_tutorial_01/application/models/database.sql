CREATE TABLE IF NOT EXISTS `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`first_name` varchar(255) DEFAULT NULL,
	`last_name` varchar(255) DEFAULT NULL,
	`email` varchar(255) DEFAULT NULL,
	`phone` varchar(255) NOT NULL,
	`password` varchar(255) DEFAULT NULL,
	`created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `created`) VALUES (5, 'john', 'doe', 'johndoe@example.com', '+00 0000 0000',
'$2y$04$jFPJT4gGp44h1YJed8X/4.cfI4194g1Ce8oFBsd16pE7QS.QijLYK', '2017-10-11 00:35:38');
