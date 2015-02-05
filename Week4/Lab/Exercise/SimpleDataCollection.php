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
         // do error handling before you continue
           $name = filter_input(INPUT_POST, 'fullname');
           $phone = filter_input(INPUT_POST, 'phone');
           $email = filter_input(INPUT_POST, 'email');
           $zip = filter_input(INPUT_POST, 'zip');
           $error_message = '';
           
        	  // Validate entry
                if (empty($name)) {
			$error_message  .= "*Name is a required field.<br />";
		} 
                if (!is_string($name)) {
			$error_message  .= "*Name must contain valid data.<br />";
		} 
                if (empty($phone)) {
			$error_message  .= "*Phone is a required field.<br />";
                }  
                if (empty($email) ) {
			$error_message  .= "*Email is a required field.<br />";
                }         
                if (empty($zip)) {
			$error_message  .= "*Zip Code is a required field.<br />";
                }         
                if(!is_numeric ($zip) ) {
			$error_message  .= "*Zip Code must contain a valid number.<br />";
                }         
                        
                        
		
                //Phone Number Formatting                
              
                $justNums = preg_replace("/[^0-9]/", '', $phone);
                $phone = $justNums;
                //eliminate leading 1 if its there
                if (strlen($phone) == 11) {
                $phone = preg_replace("/^1/", '',$phone);
                }
                //if we have 10 digits left, it's probably valid.
                if (strlen($phone) != 10) {
                $error_message  .= "*Phone Number is an invalid length. must be 10 characters long.<br />";
                } 
                
                if (!is_numeric($phone)) {
			$error_message  .= "*Phone must be a valid number.<br />";
                }           
             if ( !empty($error_message) ) {
             echo $error_message;
             include './DataCollectionForm.php';
             exit(); }
            
             $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");
  
            $dbs = $db->prepare('insert users set fullname = :fullname, phone = :phone, email = :email, zip = :zip');  
            
            // you must bind the data before you execute
            $dbs->bindParam(':fullname', $name, PDO::PARAM_STR);
            $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':zip', $zip, PDO::PARAM_STR);
            
            // if the execute works, then you will see the sucess message
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    echo '<h1> user ',$name, ' was added</h1>';
            } else {
                 echo '<h1> user ',$name, ' was <strong>NOT</strong> added</h1>';
            }       
                  
        ?>
        
        <a href="DataCollectionForm.php">Add user</a>
        <a href="DataCollectionDisplay.php">View users</a>
    </body>
</html>