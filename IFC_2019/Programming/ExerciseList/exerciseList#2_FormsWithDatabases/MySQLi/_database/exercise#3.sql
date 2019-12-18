/* CREATE DATABASE list1_exercise3 */

CREATE TABLE autos (
    auto_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    fabricante VARCHAR(128),
    marca VARCHAR(100),
    modelo VARCHAR(120),
    ano_fabricacao INTEGER,
    quilometragem INTEGER,
    PRIMARY KEY (auto_id)
);