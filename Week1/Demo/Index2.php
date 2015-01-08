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
        $myvar = filter_input(INPUT_GET, 'p');
        
        //index2.php?p=1
        
        if ($myvar === '1') {
            echo '<em>Num 1</em>';
            } else if ( $myvar === '2'){
                
            }else {
                echo 'you got it?';
            }
                
        ?>
    </body>
</html>
