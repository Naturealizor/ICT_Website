<?php 
    $host = 'localhost';
    $userName = 'test@test.com';
    $pass = 'test';
    $dbname = 'my_jacobjordan_final';

    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
     
    try {
        $db = new PDO($dsn, $userName, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $db-prepare("INSERT INTO customers (email, pass, firstName, lastName, userName) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $email, $pass, $firstName, $lastName, $userName);

        $email = "tester@test.com";
        $pass = "test";
        $firstName = "Jake";
        $lastName = "Jordan";
        $userName = "Naturealizor";
        $stmt->execute();


        echo '<p> You are connected to the database</p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>An error occured while connecting to the database: $error_message</p>";
    }

?>