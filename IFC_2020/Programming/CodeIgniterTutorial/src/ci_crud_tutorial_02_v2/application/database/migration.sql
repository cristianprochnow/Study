CREATE TABLE `books` (
`book_id` int(11) NOT NULL AUTO_INCREMENT,
`book_isbn` int(11) NOT NULL,
`book_title` varchar(50) NOT NULL,
`book_author` varchar(50) NOT NULL,
`book_category` varchar(50) NOT NULL,
PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
