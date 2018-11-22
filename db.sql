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