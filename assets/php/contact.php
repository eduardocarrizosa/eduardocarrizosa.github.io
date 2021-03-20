<?php
function check_input($data, $problem='')
{
	// htmlspecialchars does limited form validation; replaces HTML chars
	// trim removes tabs, newlines, etc.
	// stripslashes removes ugly quote escaping
	// todo: email validation
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}
function check_email($email)
{
	// checks whether the syntax for an email is correct.

	// first, check input as normal.
	$email = check_input($email, 'your email.')

	// next, perform the filter validation.
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
    	// invalid email address!
    	$problem = 'a valid email address.';
		show_error($problem);
	}
	return $email;

}
function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please enter </b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>

<?php $name = check_input($_POST['name'], 'your name.');
$email = check_email($_POST['email']);
$message = check_input($_POST['message'], 'your message.');
$formcontent="From: $name \n Message: $message";
$recipient = "asavel@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";


mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: thanks.html');
exit();
// todo: catch mail errors
?>

