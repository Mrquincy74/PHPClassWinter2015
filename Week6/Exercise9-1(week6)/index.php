<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}
switch ($action) {
    case 'start_app':
        $message = 'Enter some data and click on the Submit button.';
        break;
    case 'process_data':
        $name = filter_input (INPUT_POST,'name');
        $email = filter_input (INPUT_POST,'email');
        $phone_number = filter_input (INPUT_POST,'phone');
        $error_message = "";
      
       /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        // 2. display the name with only the first letter capitalized 
       
        if (empty($name)) {
            $error_message .= '*You must enter a First Name.<br />';
	} 
        if (!is_string($name)) {
            $error_message .= '*Name must contain valid data.<br />';
            break;    
        }
         // capitalize the first letter
          $name = ucfirst($name);
          
           $i = strpos($name, ' ');
        if ($i === false) {
            $first_name = $name;
        } else {
            $first_name = substr($name, 0, $i);
        }
        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character
        if (empty($email)) {

    $error_message .= "*Email is a required field.<br />";
}

if (!is_string($email)) {
    $error_message .= "*Email must contain valid data.<br />";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
    $error_message .= "<p>Email not formatted correctly</p>";
}

        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890

 if (empty($phone_number)) {
			$error_message  .= "*Phone is a required field.<br />";
                }  
 $justNums = preg_replace("/[^0-7]/", '', $phone_number);
 $phone_number = $justNums;
        /*************************************************
         * Display the validation message
         ************************************************/
       $message =
           "Hello $first_name,\n\n" .
            "Thank you for entering this data:\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone_number\n";  
        
      if (!empty($error_message)) {
    echo $error_message;
    exit();
}

        break;
}
include 'string_tester.php';
?>