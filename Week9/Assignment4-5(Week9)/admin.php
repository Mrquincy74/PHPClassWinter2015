<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        include 'header.php';
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true
        ) {
            // redirect 
            header('Location: login.php');
            
        }
        ?>
        <h1> ADMIN PAGE </h1>
    </body>
</html>
