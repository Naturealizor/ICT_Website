DROP DATABASE IF EXISTS my_jacobjordan_final;
CREATE DATABASE my_jacobjordan_final;
USE my_jacobjordan_final;

-- Create the table
CREATE TABLE customers (
    cust_ID         INT              NOT NULL        AUTO_INCREMENT,
    email           VARCHAR(255)     NOT NULL        UNIQUE,
    pass            VARCHAR(255)     NOT NULL,
    userName        VARCHAR(255)     NOT NULL,
    firstName       VARCHAR(255)     NOT NULL,
    lastName        VARCHAR(255)     NOT NULL,
    PRIMARY KEY (cust_ID),
    UNIQUE INDEX email (email),
    INDEX firstName (firstName)
);

CREATE TABLE products (
    product_ID          INT             NOT NULL        AUTO_INCREMENT,
    product_Name        VARCHAR(255)    NOT NULL        UNIQUE,
    product_Price       DECMIAL,
    product_quantity    INT,
    PRIMARY KEY (product_ID),
    UNIQUE INDEX product_Name (product_Name)
);
CREATE TABLE customer_addresses (
    address_ID      INT              NOT NULL        AUTO_INCREMENT,
    address_1       VARCHAR(255)     NOT NULL,
    cust_ID         INT              NOT NULL,
    order_ID        INT              NOT NULL,
    product_ID      INT              NOT NULL,
    address_2       VARCHAR(255)     NOT NULL,
    address_3       VARCHAR(255)     NOT NULL,
    city            VARCHAR(255)     NOT NULL,
    state           VARCHAR(45)      NOT NULL,
    zip_Code        INT              NOT NULL,  
    PRIMARY KEY (address_ID),
    UNIQUE INDEX state (state),
    FOREIGN KEY (cust_ID) REFERENCES customers(cust_ID),
    FOREIGN KEY (order_ID) REFERENCES orders(order_ID),
    FOREIGN KEY (product_ID) REFERENCES products(product_ID)        
);
CREATE TABLE orders (
    order_ID        INT              NOT NULL        AUTO_INCREMENT,
    invoice_Num     VARCHAR(255)     NOT NULL,
    cust_ID         INT              NOT NULL,
    product_ID      INT              NOT NULL,
    PRIMARY KEY (order_ID),
    FOREIGN KEY (cust_ID) REFERENCES customers(cust_ID),
    FOREIGN KEY (product_ID) REFERENCES products(product_ID)
);
CREATE TABLE admin (
    adminID         INT              NOT NULL        AUTO_INCREMENT,
    adminEmail      VARCHAR(255)     NOT NULL,
    password        VARCHAR(255)     NOT NULL,
    adminFirst      VARCHAR(255),
    adminLast       VARCHAR(255),
    PRIMARY KEY (adminID)
);

INSERT INTO admin (adminID, adminEmail, password) VALUES
(1, 'test@test.com', 'test');

INSERT INTO products (product_ID, product_Name, product_Price) VALUES
(1, 'big_foot', '10.00'),
(2, 'dress', '10.00'),
(3, 'dognut', '10.00'),
(4, 'just_a_cookie', '10.00'),
(5, 'dress', '10.00');

-- Creating the database user
GRANT SELECT, INSERT, DELETE, UPDATE
ON *
TO test@test.com
IDENTIFIED BY 'test';