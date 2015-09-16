<?php
require("sendgrid-php/sendgrid-php.php");
if (isset($_POST["submit"])) {

	$message = $_POST['message'];
	$messenger = $_POST['messenger'];
	$gmail = 'iamvistor@visit.com';

	$message = '<html><body>';
	$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr style='background: #3498DB;'><td><strong>Reseller</strong> </td><td> Home </td></tr>";
	$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($messenger) . "</td></tr>";
	$message .= "<tr><td><strong>Message : </strong> </td><td>" . strip_tags($message) . "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";

	$to = 'workingquries@gmail.com';
			
			$subject = $_POST['subject'];
			
			$headers = "From: " . strip_tags($gmail) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($gmail) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$sendgrid = new SendGrid('ijunaidfarooq', 'Allahisthebest1');
			$email = new SendGrid\Email();
			$email
			    ->addTo($to)
			    ->setFrom($gmail)
			    ->setSubject($subject)
			    ->setText($headers)
			    ->setHtml($message)
			;

			//$sendgrid->send($email);

			// Or catch the error

			try {
			    $sendgrid->send($email); ?>
			<script>
			    window.setTimeout(function(){
			        			// Move to a new location or you can do something else
			    window.location.href = "index.php";
					}, 2000);
			</script>
			<? } catch(\SendGrid\Exception $e) {
			    echo $e->getCode();
			    foreach($e->getErrors() as $er) {
			        echo $er;
			    }?>
				<script>
			    window.setTimeout(function(){
			        			// Move to a new location or you can do something else
			    window.location.href = "index.php";
					}, 2000);
			</script>
			<? }
}
?>
