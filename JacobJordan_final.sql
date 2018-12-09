DROP DATABASE IF EXISTS my_jacobjordan_final;
CREATE DATABASE my_jacobjordan_final;
USE my_jacobjordan_final;

-- Create the table
CREATE TABLE customers (
    cust_ID         INT             NOT NULL        AUTO_INCREMENT,
    email           VARCHAR(45)     NOT NULL        UNIQUE,
    password        VARCHAR(45)     NOT NULL,
    cust_first      VARCHAR(45)     NOT NULL,
    cust_last       VARCHAR(45)     NOT NULL,
    cust_DOB        DATETIME        NOT NULL,
    cust_timestamp  DATETIME,
    PRIMARY KEY (cust_ID)
);

CREATE TABLE products (
    product_ID      INT             NOT NULL        AUTO_INCREMENT,
    product_Name    VARCHAR(45)     NOT NULL        UNIQUE,
    product_Price   DOUBLE,
    product_qty     INT,
    PRIMARY KEY (product_ID)
);

-- Creating the database user
GRANT SELECT, INSERT, DELETE, UPDATE
ON my_jacobjordan_final.*
TO jacobjordan@localhost
IDENTIFIED BY 'test';