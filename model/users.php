<?php
    function add_user($email, $password) {
        global $db;
        $password = shal($email . $password);
        $query = 'INSERT INTO customers (email, password)
                  VALUES (:email, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }
    function modify_user($cust_ID, $email, $firstName, $lastName, $DOB) {
        global $db;
        $query = 'UPDATE customers SET
                  firstName = :firstName,
                  lastName = :lastName,
                  DOB = :DOB,
                  email = :email,
                  cust_ID = :cust_ID';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':DOB', $DOB);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':cust_ID', $cust_ID);
        $statement->execute();
        $statement->closeCursor();
    }
    function is_valid_user($email, $password) {
        global $db;
        $password = sha1($email . $password);
        $query = 'SELECT cust_ID FROM customers
                WHERE email = :email AND password = :password';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $_SESSION['user'] = $statement->fetchAll();
        $valid = ($statement->rowCount() == 1);
        $statement->closeCursor();
        return $valid;
    }
?>