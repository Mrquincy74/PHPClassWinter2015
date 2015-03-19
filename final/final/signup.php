
<?php
//Quincy Williams 
include './finalfunctions.php';

$error_message = array();
$checked = 'checked="checked"';
$comment = '';

$email = '';
$phone = '';
$heard_from = '';


if (!empty($_POST)) {

    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $Friend = filter_input(INPUT_POST, 'Friend');
    $Other = filter_input(INPUT_POST, 'Other');
    $heard_from = filter_input(INPUT_POST, 'heard_from');
    $comments = filter_input(INPUT_POST, 'comments');
    $comments = htmlspecialchars($comments);
    // validation entry 

    if (empty($email)) {
        $error_message[] = "*Email is a required field.<br />";
    }
    if (empty($phone)) {
        $error_message[] = "*Phone is a required field.<br />";
    }

    //validation functions 
    if (!emailIsValid($email)) {
        $error_message[] = "*Email is not Valid.<br />";
    }

    if (!validPhone($phone)) {
        $error_message[] = "*Please enter a valid Phone number.<br />";
    }
    
    if (empty($heard_from)) {
                $error_message[] = 'How Did You Hear About Us&quot; is a required field.';
            }
}
        // count array
    if (!empty($error_message)) {
        foreach ($error_message as $value) {
            echo $value . '<br />';
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mailing List</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body> 
        <div id="content">
            <h1>Account Sign Up</h1>
            <form action="#"  method="post" <?php if (empty ($error_message)){
            echo "display_results";
                 };?> >


                <fieldset>
                    <legend>Account Information</legend>
                    <label>E-Mail:</label>
                    <input type="text" name="email" value="<?php echo $email; ?>" class="textbox"/>
                    <br />

                    <label>Phone Number:</label>
                    <input type="text" name="phone" value="<?php echo $phone; ?>" class="textbox"/>


                </fieldset>

                <fieldset>
                    <legend>Settings</legend>

                    <p>How did you hear about us?</p>
                    <input type="radio" name="heard_from" 
                    <?php if ($heard_from == "Search Engine") {
                        echo "checked='checked'";
                    }
                    ?> value="Search Engine" />
                    Search engine<br />

                    <input type="radio" name="heard_from" 
                    <?php
                    if ($heard_from == "Friend") {
                        echo "checked='checked'";
                    }
                    ?> value="Friend" />
                    Word of mouth<br />

                    <input type=radio name="heard_from" <?php
                    if ($heard_from == "Other") {
                        echo "checked='checked'";
                    }
                    ?>value="Other" />
                    Other<br />

                    <p>Contact via:</p>
                    <select name="contact_via">
                        <option value="email">Email</option>
                        <option value="text">Text Message</option>
                        <option value="phone">Phone</option>
                    </select>

                    <p>Comments: (optional)</p>
                    <textarea name="comments" rows="4" cols="50"><?php if (isset($comments))echo $comments; ?></textarea>
                </fieldset>

                <input type="submit" value="Submit" />

            </form>
            <br />
        </div>
    </body>
</html>
