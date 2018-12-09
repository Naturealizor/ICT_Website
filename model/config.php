<?php 
    $dsn = 'mysql:host=localhost;dbname=my_jacobjordan_final';
    $username = 'jacobjordan';
    $password = 'test';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $db = new PDO($dsn, $username, $password);
    } 
    catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<P>Error connecting to database: $error_message </P>";
        include 'errors/errors.php';  // May need to change to an echo statement
        exit();
    }

    function display_db_error($error_message) {
        global $app_path;
        include 'errors/db_error.php';
        exit;
    }
?>