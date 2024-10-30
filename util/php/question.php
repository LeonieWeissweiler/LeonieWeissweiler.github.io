
<html>
<head>
	<title>Frage absenden</title>
</head>
<body>
	<?php
	$to = 'leonie.weissweiler@outlook.de';
	$message = $_POST['frage_textarea'];
	$subject = 'Frage der Uebungswebsite';
	$from = $_POST['frage_from'];


	if (mail ($to, $subject, $message, $from)) {
		echo '<p>Your message has been sent</p>';
	} else {
		echo '<p>Something went wrong</p>';
	}
	?>
</body>
</html>
