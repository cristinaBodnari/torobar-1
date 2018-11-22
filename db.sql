SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS categories;
CREATE TABLE categories(
	id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(255)
);

DROP TABLE IF EXISTS sub_categories;
CREATE TABLE sub_categories(
	id INT(5) NOT NULL auto_increment PRIMARY KEY,
    category INT(5) NOT NULL,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(255),
    FOREIGN KEY sub_categories(category) REFERENCES categories(id)
);

DROP TABLE IF EXISTS items;
CREATE TABLE items(
	id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    category INT(5),
    name VARCHAR(30) NOT NULL,
    price INT(4) NOT NULL,
	description VARCHAR(255),
    FOREIGN KEY items(category) REFERENCES sub_categories(id)
);

DROP TABLE IF EXISTS events;
CREATE TABLE events(
	id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(30) NOT NULL,
    date DATE NOT NULL,
    time VARCHAR(5),
    description VARCHAR(255),
    image VARCHAR(255)
);

DROP TABLE IF EXISTS albums;
CREATE TABLE albums(
	id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(25) NOT NULL
);

DROP TABLE IF EXISTS photos;
CREATE TABLE photos(
	id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    url VARCHAR(255) NOT NULL,
    album INT(5),
    FOREIGN KEY photos(album) REFERENCES albums(id)
);