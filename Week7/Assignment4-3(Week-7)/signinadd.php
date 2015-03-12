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
        include './function.php';
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        $error_message = array();



// array for error with []
        if (emailIsValid($email) == false) {
            $error_message [] = 'Email not formatted correctly';
        }

        if (emailDoesExist($email)) {
            $error_message [] = 'Email already exist in database';
        }

        if (passwordIsValid($password)) {
            $error_message[] = 'Password must be greater than 5 chars';
        }

        if (!empty($error_message)) {
            foreach ($error_message as $value) {
                echo $value . '<br />';
            }
            include './signup.php';
            exit();
        }
        $hashpass = sha1($password);
        $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");
        $dbs = $db->prepare('insert signup set email = :email, password = :password');

        // you must bind the data before you execute
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        $dbs->bindParam(':password', $hashpass, PDO::PARAM_STR);



        // executes work
        if ($dbs->execute() && $dbs->rowCount() > 0) {
            echo '<h1> Email ', $email, ' was added</h1>';
        } else {
            echo '<h1> Email ', $email, ' was <strong>NOT</strong> added</h1>';
        }
        ?>
    </body>
</html>
