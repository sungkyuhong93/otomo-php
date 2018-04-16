<?php
    if (isset($_POST['send'])) {
    	$to = 'eric@otomodigital.com';
    	$subject = 'Feedback from my site';
    	$message = 'Name: ' . $_POST['user_name'] . "/r/n/r/n";
    	$message .= 'Email: ' . $_POST['user_email'] . "/r/n/r/n";
    	$message .= 'Message: ' . $_POST['message'];
    	$headers = "From: webmaster@example.com/r/n";
    	$headers .= 'Content-type: text/plain; charset=utf-8';
    	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    	if($email) {
    		$headers .= "/r/nReply=To: $email";
    	}
    	$success = mail($to, $subject, $message. $headers, '-feric@otomodigital.com');
    }
?>

<?php include("header.php"); ?>



<?php if (isset($success) && $success) { ?>

<div class="container">
<h1 class="response">Thank You</h1>
<p class="response-p">Your message has been sent.</p>
<?php } else { ?>
<h1 class="response"></h1>
<p class="response-p">Sorry, there was a problem sending your message.</p>
<?php } ?>
</div>







<?php include("footer.php"); ?>