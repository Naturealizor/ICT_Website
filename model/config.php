<?php 
    $dsn = 'mysql:host=localhost;dbname=my_jacobjordan_final';
    $username = 'jacobjordan';
    $password = 'test';

    try {
        $db = new PDO($dsn, $username, $password);
    } 
    catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<P>Error connecting to database: $error_message </P>";
    //     // include('errors.php');  // May need to change to an echo statement
        exit();
    }
?>