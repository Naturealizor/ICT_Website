<?php 
//Setting up cookie params and session management
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();

//Getting the action function
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'login';
    }
}





include('home.php'); ?>
       
       