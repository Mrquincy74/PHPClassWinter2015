<!DOCTYPE html>
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $email = '';
            $fname = '';
            $number = '';
            
            if ( !empty ( $_POST ) ) { 
                $fname = $_POST['fname'];
                $email = $_POST['email'];
                $number = $_POST['number'];
            }
        ?>
        
        
        <form action="post_process.php" method="post">
            
            Name: <input name="fname" type="text" value="<?php echo $fname; ?>" />
            <br />
            Email: <input name="email" type="text" value="<?php echo $email; ?>" />
            <br />
            number: <input name="number" type="number" value="<?php echo $number; ?>" />
            
            
            <input type="submit" value="submit" />
        </form>// put your code here
        ?>
    </body>
</html>
