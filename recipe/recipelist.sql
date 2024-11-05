CREATE DATABASE recipelist;
use recipelist;

CREATE TABLE recipes (
    id INT (11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description VARCHAR(200) NOT NULL
);