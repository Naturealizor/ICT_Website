<?php 
    $dsn = 'mysql:host=localhost;dbname=my_jacobjordan_final';
    $username = 'jacobjordan@localhost';
    $password = 'test';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('errors.php');  // May need to change to an echo statement
        exit();
    }
?>