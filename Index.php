<?php 
//Setting up cookie params and session management
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
// session_set_cookie_params($lifetime, '/');
// session_start();

// require_once('model/config_db.php');
// require_once('model/users.php');

// Creates an empty cart if needed
if (empty($_SESSION['cart'])) {
    $cart = array();
} else {
    $cart = $_SESSION['cart'];
}


require_once('model/cart.php');

//Getting the action function
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'login';
    }
}

switch($action) {
    case 'register_user':
        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $userName = filter_input(INPUT_POST, 'userName');
        $email = filter_input(INPUT_POST, 'email');
        // include('view/cart_view.php');
        break;
    case 'add_to_cart':
        $product_ID = filter_input(INPUT_POST, 'product_ID');
        $product_quantity = filter_input(INPUT_POST, 'product_quantity');
        add_item($cart, $product_ID, $product_quantity);
        include('view/cart_view.php');
        break;
    case 'login':
        $email = filter_input(INPUT_POST, 'email');
        $pass = filter_input(INPUT_POST, 'pass');
        $_SESSION['is_valid_user'] = is_valid_user($email, $pass);
        if ($_SESSION['is_valid_user'] == 0) {
            $login_message = 'That was not the correct email or password. Please try again';
            include('index.php');
        } elseif ($_SESSION['is_valid_user'] == 1); {
            include('view/home.php');
        }
            
        break;
   case 'modify_user':
       $cust_ID = filter_input(INPUT_POST, 'cust_ID');
       break;
}



include('view/home.php'); 
?>
       
       









      