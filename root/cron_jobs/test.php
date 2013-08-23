<?php
	$to = "ahmad.alstaty@gmail.com";	 
	$from = "ahmad.alstaty@gmail.com";
	$subject = 'testing cron';
	$message = '<h2>testing cron is working remove test cron now</h2>';
			$headers = "From: $from\n";
			$headers .= "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			mail($to, $subject, $message, $headers);
			
?>