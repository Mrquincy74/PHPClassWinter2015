<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $car = filter_input(INPUT_POST, 'cars');
            
            var_dump($car);
        
            $checked = 'checked="checked"';
        ?>
        
<form action="#" method="post">   
    ford <input type="radio" name="cars" value="ford"
               <?php
               if ( $car == 'ford' ) {
                   echo $checked;
               }
               ?>
                /> <br />
    kia <input type="radio" name="cars" value="kia" 
               <?php
               if ( $car == 'kia' ) {
                   echo $checked;
               }
               ?>
               /> <br />
    honda <input type="radio" name="cars" value="honda" 
                 <?php
               if ( $car == 'honda' ) {
                   echo $checked;
               }
               ?>
                 /> <br />
            
<br /><input type="submit" value="Submit" />
</form>
    </body>
</html>