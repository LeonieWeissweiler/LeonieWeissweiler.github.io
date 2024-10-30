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
	<title>Kolloquium Computerlinguistisches Arbeiten SS 2017</title>
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
                        <li><a data-toggle="collapse" data-target=".in" href="#">Start</a></li>
                        <li><a data-toggle="collapse" data-target=".in" href="#referate">Referate</a></li>
                        <li><a data-toggle="collapse" data-target=".in" href="#protokolle">Protokolle</a></li>
<!-- 						<li><a data-toggle="collapse" data-target=".in" href="#abgaben">Abgaben</a></li> -->
                        <li><a data-toggle="collapse" data-target=".in" href="#kontakt">Kontakt</a></li>
						<li><a data-toggle="collapse" data-target=".in" href="http://www.cis.lmu.de/~weissweiler/index.php">Leonie Weißweiler</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">


			<?php include '../util/hitcount.php'?>
			<?php
				$montag = 1;
				$donnerstag = 4;
				$ende_stunde = 17; //Uhr
				$ende_minute = 30;
				$firstweek = 18;

				date_default_timezone_set("Europe/Berlin");
				$now = getdate();
				$year = $now["year"];
				$week = (int)date('W');
				$weekday = $now["wday"];
				$hour = $now["hours"];
				$minute = $now["minutes"];

				function getDateWeek($year, $week, $weekdayIndex) {
					$weekdayIndex = $weekdayIndex - 1;
					return date('d.m.' , strtotime($year . 'W' . str_pad($week, 2, '0', STR_PAD_LEFT) . ' +' . $weekdayIndex. 'days'));
				}

				$referate = explode("\n", file_get_contents("./referate.txt"));

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
			?>
			<!-- ================== PRETTY HEADER ===================== -->

			<h1>Kolloquium Computerlinguistisches Arbeiten SS2017</h1>
			<br />

			<!-- ================== MEAT AND POTATOES ===================== -->
			<!-- Alerts gibt es in rot (danger) gelb (warning) grün (success) blau (info)-->

 			<div class="alert alert-success">Ihr könnte die Folien zu euerem Referat an <a href="mailto:weissweiler@cis.lmu.de">weissweiler@cis.lmu.de</a> schicken, und ich werde sie auf dieser Website veröffentlichen.</div>



			Willkommen auf der Website des Kolloquiums Computerlinguistisches Arbeiten. Hier könnt ihr eure Protokolle abgeben und allgemeine Informationen zum Kurs abrufen.

            <hr>
	   		<a class="anchor" name="referate"></a>
            <h2>Referate</h2>
            Jeder Teilnehmer muss zum Bestehen des Kurses ein Referat halten, entweder über den Fortschritt seiner Bachelorarbeit oder, falls diese noch nicht in Arbeit ist, über ein anderes Thema. Referate sollten in der Regel 20 bis 30 Minuten dauern und können auf Deutsch oder Englisch gehalten werden.

            <h3>Terminplan</h3>
            <table class="table table-striped">
              <thead>
              	<th>Datum</th>
              	<th>Referate</th>
              	<th></th>
              	<th></th>
              </thead>
              <?php
              		$i = 0;
					foreach ($referate as &$woche) {
						echo("<tr>");
						$datum = getDateWeek($year, $i + $firstweek, $montag);

						if ($woche != "") {
							echo("<td>$datum</td>");
							foreach (explode(";", $woche) as &$referat) {
								$name_and_link = explode("$", $referat);
								if (count($name_and_link) == 2) {
									$name = $name_and_link[0];
									$link = $name_and_link[1];
									echo("<td><a href=\"referate/$link\">$name</and></td>");
								} else {
									echo("<td>$referat</td>");
								}
							}
						} else {
							echo("<td><font color=\"grey\">$datum</font></td>");
							if ($kein_repetitorium[$i]) {
								echo("<td></td>
									  <td><i><font color=\"grey\">Kein Repetitorium</font></i></td>
									  <td></td>");
							} else {

								echo("<td></td>
									  <td><i><font color=\"grey\">Keine Referate</font></i></td>
									  <td></td>");
							}
						}


						echo("</tr>");
						$i += 1;
					}

              ?>
			</table>


            <hr>
	   		<a class="anchor" name="protokolle"></a>
            <h2>Protokolle</h2>

            Zum Bestehen des Kurses muss jeder Teilnehmer über <b>10</b> Referate ein Protokoll abgeben das als bestanden bewertet wurde. Die Protokolle für die Referate eines Montags können bis zum jeweils folgenden Donnerstag um 23:59 über diese Website abgegeben werden, entweder für einzelne Referate oder einen ganzen Tag auf einmal. Die Protokolle werden dann in der Regel binnen einer Woche mit Kommentaren und bestanden/nicht bestanden bewertet und per E-Mail zurückgesendet. Ein Protokoll sollte jeweils ca. eine DIN A4 Seite Fließtext umfassen, einige Musterprotokolle stehen <b><a href="files/Musterprotokolle.zip">hier</a></b> (gesichert mit dem Benutzernamen und Passwort, die immer vom CIS an der lmu verwendet werden) zur Verfügung.


    		<hr/>
            <h2>Protokolle zum Repetitorium</h2>

            Zum Bestehen des Repetitoriums muss jeder Teilnehmer über <b>5</b> Treffen ein kurzes Protokoll schreiben.
			Die Protokolle sollen <b>zwischen 500 und 1000 Zeichen Fließtext</b> umfassen und können genau wie die Protokolle des Kolloquiums bis zum jeweils folgenden Donnerstag um 23:59 über diese Website abgegeben werden und werden binnen einer Woche mit bestanden/nicht bestanden bewertet und per E-Mail zurückgesendet.
			Am 08.05.2017 kann man einmalig zwei Protokolle abgeben, weil das Repetitorium drei Stunden dauert.



<!--             <hr>
	   		<a class="anchor" name="abgaben"></a>

            <h2>Abgaben</h2>
            Sollte es eine Fehlfunktion geben, schreibt mir bitte eine Email. Falls ich das Problem nicht beheben kann, könnt ihr zur Not die Protokolle (innerhalb der Frist) auch per Email abgeben. <br/>

			<?php
				if (($repetitorium_diese_woche || $referate_diese_woche != "") &&
					$weekday <= $donnerstag &&
					($weekday > $montag || ($weekday == $montag && ($hour > $ende_stunde || ($hour == $ende_stunde && $minute >= $ende_minute)) ))) { ?>

					<b>Dieses Formular schließt Donnerstags um 23:59:59</b><br/><br/>

					<form action="./abgabe.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="text">Vorname</label>
						<input name="Vorname" type="text" class="form-control" placeholder="Arthur">
					</div>
					<div class="form-group">
						<label for="text">Nachname</label>
						<input name="Nachname" type="text" class="form-control" placeholder="Dent">
					</div>
					<div class="form-group">
						<label for="text">Matrikelnummer</label>
						<input name="Matrnr" type="number" class="form-control" placeholder="42424242">

					</div>

					<div class="form-group">
						<label for="email">Campus E-Mail Adresse</label>
						<div class="input-group">
							<input name="Email" type="text" class="form-control" placeholder="arthur.dent" describedby="basic-addon2">
							<span class="input-group-addon" id="basic-addon2">@campus.lmu.de</span>
						</div>
					</div>

					<div class="form-group">
						<label for="select">Inhalt</label>
						<select name="Referat" class="form-control">");

					<?php
					if ($referate_diese_woche != "") {
						echo("<option>Alle Referate</option>");
						foreach (explode(";", $referate_diese_woche) as &$referat) {
							echo("<option>Referat $referat</option>");
						}
					}
					if ($repetitorium_diese_woche) {
						echo("<option>Repetitorium</option>");
					}
					?>

					</select>
					</div>

					<div class="form-group">
						<label for="file">Datei (.pdf)</label>
						<input name="Datei" class="form-control" type="file" size="100" accept="application/pdf">
					</div>

					<button type="submit" class="btn btn-default">Absenden</button>

				<?php } else {
					if ($week < $firstweek) {
						echo("Die erste Abgabe öffnet nächste Woche Montag um 17:30 Uhr.");
					} else if ($referate_diese_woche == "" && !repetitorium_diese_woche) {
						echo("Diese Woche findet keine Abgabe statt.");
					} else {
						echo("Die nächste Abgabe öffnet am Montag um 17:30 Uhr.");
					}
				}

			?> -->

            <hr>
            <a class="anchor" name="kontakt"></a>
            <h2>Kontakt</h2>
            Ihr könnt Fragen zur Korrektur jederzeit an <a href="mailto:weissweiler@cis.lmu.de">weissweiler@cis.lmu.de</a> stellen.




		</div>

		<!-- =============== BOOTSTRAP NECESSITES ================= -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../util/js/bootstrap.min.js"></script>
	</body>
</html>
