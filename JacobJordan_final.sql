DROP DATABASE IF EXISTS my_jacobjordan_final;
CREATE DATABASE my_jacobjordan_final;
USE my_jacobjordan_final;

-- Create the table
CREATE TABLE customers (
    cust_ID         INT             NOT NULL        AUTO_INCREMENT,
    email           VARCHAR(45)     NOT NULL        UNIQUE,
    pass            VARCHAR(45)     NOT NULL,
    userName        VARCHAR(45)     NOT NULL,
    firstName       VARCHAR(45)     NOT NULL,
    lastName        VARCHAR(45)     NOT NULL,
    PRIMARY KEY (cust_ID),
    UNIQUE (email)
);

CREATE TABLE products (
    product_ID      INT             NOT NULL        AUTO_INCREMENT,
    product_Name    VARCHAR(45)     NOT NULL        UNIQUE,
    product_Price   DOUBLE,
    product_quantity     INT,
    PRIMARY KEY (product_ID),
    UNIQUE (product_Name)
);

CREATE TABLE admin (
    adminID         INT             NOT NULL        AUTO_INCREMENT,
    adminEmail      VARCHAR(45)     NOT NULL,
    password        VARCHAR(45)     NOT NULL,
    adminFirst      VARCHAR(45),
    adminLast       VARCHAR(45),
    PRIMARY KEY (adminID)
);

INSERT INTO admin (adminID, adminEmail, password) VALUES
(1, 'admin@jacobjordan.com', 'test');

INSERT INTO products (product_ID, product_Name, product_Price) VALUES
(1, 'big_foot', '10.00'),
(2, 'dress', '10.00'),
(3, 'dognut', '10.00'),
(4, 'just_a_cookie', '10.00'),
(5, 'dress', '10.00');

-- Creating the database user
GRANT SELECT, INSERT, DELETE, UPDATE
ON my_jacobjordan_final.*
TO root
IDENTIFIED BY 'test';