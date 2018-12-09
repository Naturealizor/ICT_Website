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
    function modify_user($cust_ID, $email, $cust_first, $cust_last, $cust_DOB) {
        global $db;
        $query = 'UPDATE customers SET
                  '
    }
    
?>