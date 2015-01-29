<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if
    
       $investment = rand (1, 100);
       $interest_rate = rand (1, 15);
       $years = rand (1, 50);
       
       $error_message =  '';
            
         if (empty ($investment) ) {
        $error_message = $error_message.'<p>Investment is a required field.</p>'; }
        
        if ( empty($interest_rate) ) {
        $error_message = $error_message.'<p>Interest rate is a required field.</p>'; }
        
        if ( empty($years) ) {
        $error_message = $error_message.'<p>Yearly Investment must be greater than zero or equal to 50</p>'; }
       
        if (!empty($error_message) ) {
        echo '<h1>', $error_message, '</h1>'; }
        
    ?>
    <form action="display_results.php" method="post">
            
        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment"
                   value="<?php echo $investment; ?>"/><br />

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate"
                   value="<?php echo $interest_rate; ?>"/><br />

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years; ?>"/><br />
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br />
        </div>

    </form>
    </div>
</body>
</html>