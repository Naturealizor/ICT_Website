<?php 
    $host = 'localhost';
    $userName = 'root';
    $pass = 'test';
    $dbname = 'my_jacobjordan_final';

    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
     
    
        $db = new PDO($dsn, $userName, $pass);
        $stmt = $pdo->query('SELECT * FROM customers');

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo $row['title'] . '<br>';
        }

    // catch (PDOException $e) {
    //     $error_message = $e->getMessage();
    //     echo "<P>Error connecting to database: $error_message </P>";
    //     include 'errors/errors.php';  // May need to change to an echo statement
    //     exit();
    // }

    function display_db_error($error_message) {
        global $app_path;
        include 'errors/db_error.php';
        exit;
    }
?>