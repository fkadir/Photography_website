<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_phone = $_POST['phone'];
$field_date = $_POST['date']
$field_location = $_POST['location']
$field_message = $_POST['message'];

$mail_to = 'fkhkadir@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone number: '.$field_phone."\n";
$body_message .= 'Desired date: '.$field_date."\n";
$body_message .= 'Desired location: '.$field_location."\n";
$body_message .= 'Message: '.$field_message;

$mail_status = mail($mail_to, $subject, $body_message);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to gordon@template-help.com');
		window.location = 'contact.html';
	</script>
<?php
}
?>
