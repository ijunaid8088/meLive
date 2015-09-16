<link rel="stylesheet" href="css/helper.css">
<?php 
if (isset($_POST["submit"])) {

	$message = $_POST['comments'];
	$messenger = $_POST['yourname'];
	$email = $_POST['email'];

	$message = '<html><body>';
	$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr style='background: #3498DB;'><td><strong>Reseller</strong> </td><td> Home </td></tr>";
	$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($messenger) . "</td></tr>";
	$message .= "<tr><td><strong>Message : </strong> </td><td>" . strip_tags($message) . "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";

	$to = 'workingquries@gmail.com';
			
			$subject = $_POST['subject'];
			
			$headers = "From: " . strip_tags($email) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			if (mail($to, $subject, $message, $headers)) { ?>
			<script>
              	window.setTimeout(function(){
        			// Move to a new location or you can do something else
        			window.location.href = "index.php";

    			}, 2000);
              </script>
             <? echo '<div class="alert alert-dismissible alert-info">Your message has been sent.</div>';
            } else { ?>
            <script>
              	window.setTimeout(function(){
        			// Move to a new location or you can do something else
        			window.location.href = "index.php";

    			}, 2000);
              </script>
            <?  echo '<div class="alert alert-dismissible alert-warning">There was a problem sending the email.</div>';
            }
}
	?>