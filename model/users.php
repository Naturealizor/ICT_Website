<?php
    function add_user($email, $pass) {
        global $db;
        $password = shal($email . $pass);
        $query = 'INSERT INTO customers (email, pass)
                  VALUES (:email, :pass)';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':pass', $pass);
        $statement->execute();
        $statement->closeCursor();
    }
    function modify_user($cust_ID, $email, $firstName, $lastName) {
        global $db;
        $query = 'UPDATE customers SET
                  firstName = :firstName,
                  lastName = :lastName,
                  email = :email,
                  cust_ID = :cust_ID';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':cust_ID', $cust_ID);
        $statement->execute();
        $statement->closeCursor();
    }
    function is_valid_user($email, $pass) {
        global $db;
        $password = sha1($email . $pass);
        $query = 'SELECT cust_ID FROM customers
                WHERE email = :email AND pass = :pass';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':pass', $pass);
        $statement->execute();
        $_SESSION['user'] = $statement->fetchAll();
        $valid = ($statement->rowCount() == 1);
        $statement->closeCursor();
        return $valid;
    }
?>