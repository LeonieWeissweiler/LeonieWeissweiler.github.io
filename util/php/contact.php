<html>
<head>
	<title>Frage absenden</title>
</head>
<body>
	<?php
	$to = 'leonie.weissweiler@outlook.de';
	$message = $_POST['contact_textarea'];
	$subject = 'Feedback von der Uebungswebsite';
	$from = '';

	if (mail ($to, $subject, $message, $from)) {
		echo '<p>Your message has been sent</p>';
	} else {
		echo '<p>Something went wrong</p>';
	}
	?>

</body>
</html>
