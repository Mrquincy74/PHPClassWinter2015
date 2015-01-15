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
        //  $_POST
        
            
            include './validation.php';
            
            
            if ( !empty($err_msg) ) {
                include './POST.php';
                exit();
            }
        
            
             if ( isset($_POST['fname'] ) ) {
                echo $_POST['fname'];
            }
            echo '<br />';
             if ( isset($_POST['email'] ) ) {
                echo $_POST['email'];
            }
            
        ?>
    </body>
</html>