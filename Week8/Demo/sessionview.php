<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            session_start();
            if ( isset($_SESSION['hello']) ) {
                  echo $_SESSION['hello'];
            } else {
                echo 'session not set';
            }
          
            //echo $_SESSION['cart']['product'];
            //echo $_SESSION['cart']['product1'];
            //echo $_SESSION['cart']['product2'];
        ?>
    </body>
</html>