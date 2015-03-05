<?php

// put your code here
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');


$error_message = '';

//validation email 
if (empty($email)) {

    $error_message .= "*email is a required field.<br />";
}

if (!is_string($email)) {
    $error_message .= "*Name must contain valid data.<br />";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
    $error_message .= '<p>email not formatted correctly</p>';
}


//password
if (empty($password)) {

    $error_message .= "*password is a required field.<br />";
}
if (!empty($error_message)) {
    echo $error_message;
    include './login.php';
    exit();
}


$password = sha1($password);

$db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");

$dbs = $db->prepare('SELECT * FROM signup WHERE email = :email and password =:password');

// you must bind the data before you execute
$dbs->bindParam(':email', $email, PDO::PARAM_STR);
$dbs->bindParam(':password', $password, PDO::PARAM_STR);

//executes work
if ($dbs->execute() && $dbs->rowCount() > 0) {
    echo '<p>Passcode acepted</p>';
    header('Location: userauthentication.php');
    //$hashpass = $dbs->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo "<h1>$hashpass</h1>";
}
?>
 


