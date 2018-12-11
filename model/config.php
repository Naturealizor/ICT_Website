<?php 
    $host = 'localhost';
    $userName = 'test@test.com';
    $pass = 'test';
    $dbname = 'my_jacobjordan_final';

    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
     
    try {
        $db = new PDO($dsn, $userName, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo '<p> You are connected to the database</p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>An error occured while connecting to the database: $error_message</p>";
    }

    function display_db_error($error_message) {
        global $app_path;
        include 'errors/db_error.php';
        exit;
    }
?>