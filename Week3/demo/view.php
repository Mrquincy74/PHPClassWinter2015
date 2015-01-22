<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View</title>
    </head>
    <body>
        <?php
 $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015", "root", "");
  
 $dbs = $db->prepare('select * from demo');  
        
    
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
          
        $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
        
        /*
         * $arry["key"] = 'value';
      
        
        $array[0] = array(
            "id" => 1,
            "name" => 'test',
            "email" => "test@test.com"
        );
        */
       
        echo '<ul>';
        foreach ($results as $value) {
            
            echo '<li>', $value["name"], '</li>';
        }
        echo '</ul>';
        
    } else {
        echo 'No results found'; // echo out results 
    }
           
        
        ?>
    </body>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

