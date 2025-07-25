CREATE DATABASE IF NOT EXISTS db_portfolio;

use db_portfolio;

CREATE TABLE IF NOT EXISTS requests(
    id int UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(200) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at DATETIME NOT NULL,
    PRIMARY KEY (id)
);

