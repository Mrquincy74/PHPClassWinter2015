<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>String Tester</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
    
<?php
if (empty($name)){
    $name = "";
}
if (empty($phone_number)){
    $phone_number = "";
}
if (empty($email)){
    $email = "";
}
?>
    
    
    
<body>
    <div id="content">
        <h1>String Tester</h1>
        <form action="." method="post">
        <input type="hidden" name="action" value="process_data"/>

        <label>Name:</label>
        <input type="text" name="name" 
               value="<?php echo($name); ?>"/>
        <br />

        <label>E-Mail:</label>
        <input type="text" name="email" 
               value="<?php echo($email); ?>"/>
        <br />

        <label>Phone Number:</label>
        <input type="text" name="phone" 
               value="<?php echo ($phone_number); ?>"/>
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Submit" />
        <br />

        </form>

        <h2>Message:</h2>
        <p><?php echo($message); ?></p>

    </div>
</body>
</html>