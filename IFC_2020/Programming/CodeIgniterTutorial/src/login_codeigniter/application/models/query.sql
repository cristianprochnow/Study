CREATE TABLE `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`email` varchar(40) NOT NULL,
	`password` varchar(40) NOT NULL,
	`fname` varchar(100) NOT NULL,

	PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `email`, `password`, `fname`) VALUES
(1, ‘ndevierte@gmail.com’, ‘nurhodelta’, ‘Neovic Devierte’),
(2,’gemalyn@gmail.com’, ‘cepe’, ‘Gemalyn Cepe’);
