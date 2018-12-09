<?php 
//Setting up cookie params and session management
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
// $lifetime = 0;
session_set_cookie_params($lifetime, '/');
session_start();

require_once('model/config.php');
require_once('model/user_db.php');

if (empty($_SESSION['cart'])) {$_SESSION['cart'] = array();}

$products = array();
$products['1'] = array('name' => 'Dress', 'cost' => '10.00');
$products['2'] = array('name' => 'Big Foot', 'cost' => '10.00');
$products['3'] = array('name' => 'Donut', 'cost' => '10.00');
$products['4'] = array('name' => 'Misc', 'cost' => '10.00');

//Getting the action function
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'login';
    }
}

switch($action) {
    case 'login':
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        break;
    case 'show_cart':
        include('view/cart_view.php');
        break;
    case 'empty_cart':
        unset($_SESSION['cart12']);
        include('view/cart_view.php');
        break;
}



include('view/home.php'); 
?>
       
       