<!DOCTYPE html>
<html lang="de">
	<head>
		<!-- ================= NECESSITIES AND BOOTSTRAP ================== -->
		<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
			
			<!-- Get my own stylesheet in here -->
			<link rel="stylesheet" type="text/css" href="../util/css/main.css">
    <!-- =================== META INFO ======================== -->
	<title>Kolloquium Computerlinguistisches Arbeiten SS2017 Abgabe</title>
	<link rel="icon" href="favicon.ico" type="../util/image/x-icon" />
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	 <![endif]-->
	</head>
	
	<body>
		
		<!-- ================== NAVIGATION BAR ===================== -->
		
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img alt="EProg" src="../util/images/logo.png" style="height: 80%; vertical-align: middle"/>
					</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
                        <li><a data-toggle="collapse" data-target=".in" href="./index.php">Zurück</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container">
<!-- 			<?php
				$montag = 1;
				$donnerstag = 4;
				$ende_stunde = 17; //Uhr
				$ende_minute = 30;
				$firstweek = 18;
				
				date_default_timezone_set("Europe/Berlin");
				$now = getdate();
				$week = (int)date('W');
				$weekday = $now["wday"];
				$hour = $now["hours"];
				$minute = $now["minutes"];
				
				$referate = split("\n", file_get_contents("./referate.txt"));
				$kein_repetitorium = [];
				$i = 0;
				foreach ($referate as $referat) {
					if (strlen($referat) && substr($referat, 0, 1) == "*") {
						$referate[$i] = substr($referat, 1);
						$kein_repetitorium[] = true;
					} else {
						$kein_repetitorium[] = false;
					}
					$i += 1;
				}
				
				$referate_diese_woche = $referate[$week - $firstweek];
				$repetitorium_diese_woche = !$kein_repetitorium[$week - $firstweek];
				
				if (!(($referate_diese_woche != "" || $repetitorium_diese_woche) && 
					$weekday <= $donnerstag && 
					($weekday > $montag || ($weekday == $montag && ($hour > $ende_stunde || ($hour == $ende_stunde && $minute >= $ende_minute)) )))) {
					echo("<h2>Abgabe fehlgeschlagen!</h2>");
					echo("Es ist keine Abgabe mehr erlaubt");
					exit();
				}
				
				$vorname = $_POST["Vorname"];
				$nachname = $_POST["Nachname"];
				$matrnr = $_POST["Matrnr"];
				$referat = $_POST["Referat"];
				$email = $_POST["Email"];
				$datei = $_FILES["Datei"];
				
				if (!$datei) {
					echo("<h2>Abgabe fehlgeschlagen!</h2>");
					echo("Die abgegebene Datei ist kein .pdf!");
					exit();
				}
				
				if ($datei["type"] != "application/pdf") {
					echo("<h2>Abgabe fehlgeschlagen!</h2>");
					echo("Die abgegebene Datei ist kein .pdf!");
					exit();
				}
				
				$referat_last = array_values(array_slice(split(" ", $referat), -1))[0]; 
				
				$dateiname = __DIR__ . "/uploads/" . $week . "-" . $matrnr . "-" . $referat_last .  "-" . $nachname . "-" . $vorname . "-" . $email . ".pdf";
				$dateiname = str_replace(" ", "_", $dateiname);
				
				if (!move_uploaded_file($datei['tmp_name'], $dateiname)) {
					echo("<h2>Abgabe fehlgeschlagen!</h2>");
					echo("Upload fehlgeschlagen!");
					exit();
				}
				
				echo("<h2>Abgabe erfolgreich!</h2>");
				echo("<b>Vorname</b>\t$vorname <br/>");
				echo("<b>Nachname</b>\t$nachname <br/>");
				echo("<b>Matrikelnummer</b>\t$matrnr <br/>");
				echo("<b>E-Mail Adresse</b>\t$email<br/>");
				echo("<b>Referat</b>\t$referat <br/>");
				echo("<a href=\"./index.php\">Zurück</a>");
			?>	 -->
		</div>
		
		<!-- =============== BOOTSTRAP NECESSITES ================= -->
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../util/js/bootstrap.min.js"></script>
	</body>
</html>
