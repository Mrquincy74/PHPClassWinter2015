<?php


function emailIsValid($email) {
if (filter_var($email, FILTER_VALIDATE_EMAIL) != false) {
return TRUE;
} return false;
}

function emailDoesExist($email) {
$db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");
$dbs = $db->prepare('SELECT * FROM signup WHERE email = :email');
$dbs->bindParam(':email', $email, PDO::PARAM_STR);
//$dbs->bindParam(':password', $password, PDO::PARAM_STR);
if ($dbs->execute() && $dbs->rowCount() > 0) {
return TRUE;
}
}

function passwordIsValid($password) {
if (strlen($password) < 5) {
return TRUE;
}
return false;
}

function savedSignup($email, $password) {
    $haspass = sha1($password);
$db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");
$dbs = $db->prepare('insert into signup set email = :email, password = :password');
// you must bind the data before you execute
$dbs->bindParam(':email', $email, PDO::PARAM_STR);
$dbs->bindParam(':password', $haspass, PDO::PARAM_STR);
// executes work
if ($dbs->execute() && $dbs->rowCount() > 0) {
return true;
}
return false;
}

function loginCheck($email, $password) {   
$db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");
$dbs = $db->prepare('select * from signup where email = :email and password = :password');
// you must bind the data before you execute
$haspass = sha1($password);
$dbs->bindParam(':email', $email, PDO::PARAM_STR);
$dbs->bindParam(':password', $haspass, PDO::PARAM_STR);
// executes work
if ($dbs->execute() && $dbs->rowCount() > 0) {
return true;
}
return false;
}



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

