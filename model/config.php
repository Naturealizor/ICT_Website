<?php 
// ob_start();
// session_start();

// require_once(JacobJordan_final.sql);

    define('DBHOST', 'localhost');
    define('DBUSER', 'jacobjordan@localhost');
    define('DBPASS', 'test');;
    define('DBNAME', 'my_jacobjordan_final');


    try {

    
    $db = new PDO("mysql:host=".DBHOST.";port=80;dbname=".DBNAME, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo '<p class="danger">'.$e->getMessage().'</p>';
    exit;
}

include('users.php');
$user = new User($db);



    // $dsn = 'mysql:host=localhost;dbname=my_jacobjordan_final';
    // $email = 'jacobjordan@localhost';
    // $password = 'test';
    // $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    // try {
    //     $db = new PDO($dsn, $email, $password);
    // } 
    // catch (PDOException $e) {
    //     $error_message = $e->getMessage();
    //     echo "<P>Error connecting to database: $error_message </P>";
    //     include 'errors/errors.php';  // May need to change to an echo statement
    //     exit();
    // }

    // function display_db_error($error_message) {
    //     global $app_path;
    //     include 'errors/db_error.php';
    //     exit;
    // }
?>