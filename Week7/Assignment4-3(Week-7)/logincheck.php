<?php

// put your code here
include './function.php';

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

//checks email & password with function 
if (loginCheck($email, $password) == FALSE) {
    echo 'Successful Log In!';
} else {

    echo 'Log in not Successful!';
}



 


