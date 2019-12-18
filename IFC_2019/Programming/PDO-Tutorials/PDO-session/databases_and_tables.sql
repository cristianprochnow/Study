CREATE DATABASE pdo_sessions_examples;

/* Default password -> 123mudar */

/* Exercise_1 */

CREATE TABLE users(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50),
    email VARCHAR(80) NOT NULL,
    password VARCHAR(40) NOT NULL,
    PRIMARY KEY(id)
) COLLATE=utf8_general_ci;

INSERT INTO users(name, email, password) VALUES
('Usuário 1', 'user1@user.com', '2d29b962490320f821db80cddf6ed4b6e4ac7498'),
('Usuário 2', 'user2@user.com', '2d29b962490320f821db80cddf6ed4b6e4ac7498'),
('Usuário 3', 'user3@user.com', '2d29b962490320f821db80cddf6ed4b6e4ac7498');

/* Exercise_2 */

CREATE TABLE IF NOT EXISTS `users2` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(25) NOT NULL,
    `password` varchar(60) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;