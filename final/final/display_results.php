

<?php
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$Friend = filter_input(INPUT_POST, 'Friend');
$Other = filter_input(INPUT_POST, 'Other');
$heard_from = filter_input(INPUT_POST, 'heard_from');
$contact_via = filter_input(INPUT_POST, 'contact_via');
$comments = filter_input(INPUT_POST, 'comments');
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mailing List Results</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>

        <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span><?php echo($email); ?></span><br />

            <label>Phone:</label>
            <span><?php echo ($phone); ?></span><br />

            <label>Heard From:</label>
            <span><?php
                if (empty($heard_from)) {
                    echo "Unknown";
                }
                echo $heard_from;
                ?></span><br />

            <label>Contact Via:</label>
            <span><?php echo htmlspecialchars($contact_via); ?></span><br /><br />

            <span>Comments:</span><br />
            <span><?php echo htmlspecialchars($comments); ?></span><br />

        </div>
    </body>
</html>
