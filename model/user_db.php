<?php
    function add_user($email, $password) {
        global $db;
        $password = shal($email . $password);
        $query = 'INSERT INTO customers (customerEmail, password)
                  VALUES (:email, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }
?>