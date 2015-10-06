<?php
require ('PHPMailerAutoload.php');


if (isset($_POST["submit"])) {

	$message = $_POST['comments'];
	$messenger = $_POST['yourname'];
	$from = $_POST['email'];

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

		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "ijunaidfarooq@gmail.com";
		$mail->Password = "Junaid123@";
		$mail->SetFrom($from);
		$mail->Subject = $subject;
		$mail->Body = $message;
		$mail->AddAddress($to);


			if(!$mail->send()) { 
				echo 'Message could not be sent.';
    			echo 'Mailer Error: ' . $mail->ErrorInfo;
				?>
			<script>
			    window.setTimeout(function(){
			        			// Move to a new location or you can do something else
			    window.location.href = "index.php";
					}, 2000);
			</script>
			<? } else {
    			echo 'Message has been sent';
				}?>
				<script>
			    window.setTimeout(function(){
			        			// Move to a new location or you can do something else
			    window.location.href = "index.php";
					}, 2000);
			</script>
}
?>
