<?php

// put your code here
session_start();
include './function.php';
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

//checks email & password with function 
// header redirect
if (emailIsValid($email) == FALSE) {
    echo 'Must provide a valid Email!.<br />';
}
if
 (passwordIsValid($password) == TRUE) {
    echo 'Password must be more than 5 characters!.<br />';
}

if (loginCheck($email, $password)) {
// succesful login
    $_SESSION['loggedin'] = TRUE;
    header('Location: admin.php');
} else {
    $_SESSION['loggedin'] = FALSE;

    echo 'Log in not Successful!';

    include './login.php';
    exit;
}



 


