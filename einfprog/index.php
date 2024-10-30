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
	<title>Übung: Einführung in die Programmierung WS2016/16</title>
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
                        <li><a data-toggle="collapse" data-target=".in" href="#fragen">Fragen</a></li>
						<li><a data-toggle="collapse" data-target=".in" href="#termine">Termine</a></li>
						<li><a data-toggle="collapse" data-target=".in" href="#uebungen">Übungen</a></li>
						<li><a data-toggle="collapse" data-target=".in" href="#links">Links</a></li>
						<li><a data-toggle="collapse" data-target=".in" href="#fragen">Fragen</a></li>
						<li><a data-toggle="collapse" data-target=".in" href="#antworten">Antworten</a></li>
						<li><a data-toggle="collapse" data-target=".in" href="#feedback">Feedback</a></li>
						<li><a data-toggle="collapse" data-target=".in" href="http://www.cis.lmu.de/~weissweiler/index.php">Leonie Weißweiler</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container">
		
			<?php include '../util/hitcount.php'?>
			
			<!-- ================== PRETTY HEADER ===================== -->
			
			<h1>Übung zur Einführung in die Programmierung für Computerlinguisten</h1>
			<br />
			
			<!-- ================== MEAT AND POTATOES ===================== -->
			<!-- Alerts gibt es in rot (danger) gelb (warning) grün (success) blau (info)-->
			
			<div class="alert alert-success">Die Nachklausur findet am 28.4.2017 von 10:00 bis 12:00 Uhr im Raum U101 statt.</div>
			
			
			
			
			
			
			Willkommen auf der Website der Übung zur Einführung in die Programmierung für Computerlinguisten. Hier werden sowohl die Lösungen zu den Hausaufgaben, als auch die Tutoriumsfolien und sonstige nützliche Sachen veröffentlicht. Außerdem könnt ihr anonym Fragen stellen.
            
            
            <hr>
            <a class="anchor" name="fragen"></a>
            <h2>Fragen stellen</h2>
            Ihr könnt Fragen zum Tutorium, Aufgaben, Python, RegExs etc. jederzeit an<a href="mailto:weissweiler@cis.lmu.de">weissweiler@cis.lmu.de</a>, oder an <a href="mailto:y.kaiser@campus.lmu.de">y.kaiser@campus.lmu.de</a> (insbesondere Fragen zur Korrektur der Hausaufgaben) stellen.
            
            
			<hr>
			<a class="anchor" name="termine"></a>
			<h2>Termine</h2>
			<!-- <div class="table-responsive"> -->
			<table class="table table-striped">
				<thead>
					<tr>                        <th>Datum</th>
						<th>Info</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>21.10.2016</td>
						<td>Erste Übung in Sibirien/Gobi (LU112/114)</td>
					</tr>
					<tr>
						<td>ab 28.10.2016</td>
						<td>Übungen Freitags um 14:00 in BU101</td>
					</tr>
					<tr>
						<td>19.12.2016</td>
						<td>CIS-Weihnachtsfeier um 18:00 in der Caféteria der Oettingenstraße</td>
					</tr>
					<tr>
						<td>22.12.2016</td>
						<td>Weihnachtsübung um 10:00 in L155</td>
					</tr>
					<tr>
						<td>23.12.2016</td>
						<td>Keine Übung</td>
					</tr>
					<tr>
						<td><b>6.2.2017</b></td>
						<td><b>Klausur um 10:00</b></td>
					</tr>
					<tr>
						<td><b>28.4.2017</b></td>
						<td><b>Nachklausur um 10:00 in U101</b></td>
					</tr>
				</tbody>
			</table>
			<!-- </div> -->
			
			<hr>
			<a class="anchor" name="uebungen"></a>
			<h2>Übungen</h2>
			
			<h4>Hier könnt ihr alle Inhalte und Quizzes aus den Übungen zusammengefasst herrunterladen:</h4>
			
			<b><a href="files/Quizzes.pdf">Quizzes.pdf</a></b> </br>
			<b><a href="files/Inhaltsfolien.pdf">Inhaltsfolien.pdf</a></b> <br/> <br/>
			
			<hr>
			
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nr.</th>
							<th>Abgabe</th>
							<th>Blatt</th>
							<th>Lösungen</th>
							<th>Übungsfolien</th>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<td>1</td>
							<td>27.10.2016</td>
							<td>
								<a href="http://www.cis.uni-muenchen.de/kurse/max/einfprog/aufgaben/Uebung-1.pdf">Blatt 1</a>   <br/>
								<a href="files/Blatt1/1-2.py" download>1-2.py</a></td>
							<td>
<!-- 								<a href="files/Blatt1/Loesung-1.pdf" download>Loesungen-1.pdf</a>  <br/>
								<a href="files/Blatt1/1-4.py" download>1-4.py</a> -->
							</td>
							<td>
								<a href="files/Blatt1/Folien1.pdf" download>Folien</a> <br/>
<!-- 								<a href="files/Blatt1/Quiz-1.pdf" download>Quiz</a> <br/>
								<a href="files/Blatt1/Quiz-1-Lösungen.pdf" download>Lösungen</a> -->
								
							</td>
						</tr>
						
						<tr>
							<td>2</td>
							<td>3.11.2016</td>
							<td>
								<a href="http://www.cis.uni-muenchen.de/kurse/max/einfprog/aufgaben/Uebung-2.pdf">Blatt 2</a> <br/>
<!-- 								<a href="files/Blatt2/2-10.py" download>2-10.py</a> -->
							</td>
							<td>
<!-- 								<a href="files/Blatt2/Loesung2.pdf" download>Loesungen-2.pdf</a> <br/>
								<a href="files/Blatt2/2-10-kommentiert.py" download>2-10.py</a> -->
							</td>
							<td>
								<a href="files/Blatt2/Folien2.pdf" download>Folien</a> <br/>
<!-- 								<a href="files/Blatt2/Quiz-2.pdf" download>Quiz</a> <br/>
								<a href="files/Blatt2/Quiz-2-Lösungen.pdf" download>Lösungen</a> -->
							</td>
						</tr>
						
						<tr>
							<td>3</td>
							<td>10.11.2016</td>
							<td>
								<a href="http://www.cis.uni-muenchen.de/kurse/max/einfprog/aufgaben/Uebung-3.pdf">Blatt 3</a> <br/>
<!-- 								<a href="files/Blatt3/3-15.py" download>3-15.py</a> -->
							</td>
							<td>
<!-- 								<a href="files/Blatt3/Loesung-3.pdf" download>Loesungen-3.pdf</a> <br/>
								<a href="files/Blatt3/3-15-kommentiert.py" download>3-15.py</a> -->
							</td>
							<td>
								<a href="files/Blatt3/Übung-3.pdf" download>Folien</a> <br/>
							</td>
						</tr>
						
						<tr>
							<td>4</td>
							<td>17.11.2016</td>
							<td>
								<a href="http://www.cis.uni-muenchen.de/kurse/max/einfprog/aufgaben/Uebung-4.pdf">Blatt 4</a> <br/>
							</td>
							<td>
<!-- 								<a href="files/Blatt4/Loesung-4.pdf" download>Loesungen-4.pdf</a> <br/>
								<a href="files/Blatt4/4-1.py" download>4-1.py</a> <br/>
								<a href="files/Blatt4/4-2.py" download>4-2.py</a> <br/>
								<a href="files/Blatt4/4-3.py" download>4-3.py</a> <br/>
								<a href="files/Blatt4/4-4.py" download>4-4.py</a> <br/>
								<a href="files/Blatt4/4-5.py" download>4-5.py</a> -->
							</td>
							<td>
								<a href="files/Blatt4/Frequenzliste-mit-Bash.pdf" download>Frequenzliste mit Bash</a> <br/>
								<a href="files/Blatt4/Übung-4.pdf" download>Folien</a> <br/>
							</td>
						</tr>
						
						<tr>
							<td>5</td>
							<td>24.11.2016</td>
							<td>
								<a href="http://www.cis.uni-muenchen.de/kurse/max/einfprog/aufgaben/Uebung-5.pdf">Blatt 5</a> <br/>
							</td>
							<td>
<!-- 								<a href="files/Blatt5/Loesung-5.pdf" download>Loesungen-5.pdf</a> <br/>
								<a href="files/Blatt5/5-2.py" download>5-2.py</a> <br/>
								<a href="files/Blatt5/5-3.py" download>5-3.py</a> <br/>
								<a href="files/Blatt5/5-4.py" download>5-4.py</a> <br/>
								<a href="files/Blatt5/5-5.py" download>5-5.py</a> <br/>
								<a href="files/Blatt5/5-6.py" download>5-6.py</a> <br/>
								<a href="files/Blatt5/5-7.py" download>5-7.py</a> -->
							</td>
							<td>
								<a href="files/Blatt5/Übung-5.pdf" download>Folien</a> 
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>1.12.2016</td>
							<td>
								<a href="http://www.cis.uni-muenchen.de/kurse/max/einfprog/aufgaben/Uebung-6.pdf">Blatt 6</a> <br/>
							</td>
							<td>
<!-- 								<a href="files/Blatt6/Loesung-6.pdf" download>Loesungen-6.pdf</a> <br/>
								<a href="files/Blatt6/6-1.py" download>6-1.py</a> <br/>
								<a href="files/Blatt6/6-2.py" download>6-2.py</a> <br/>
								<a href="files/Blatt6/6-3.py" download>6-3.py</a> <br/>
								<a href="files/Blatt6/6-5.py" download>6-5.py</a> <br/>
								<a href="files/Blatt6/6-6.py" download>6-6.py</a> <br/>
								<a href="files/Blatt6/6-7.py" download>6-7.py</a> <br/>
								<a href="files/Blatt6/6-9.py" download>6-9.py</a> -->
							</td>
							<td>
								<a href="files/Blatt6/Übung-6.pdf" download>Folien</a>
							</td>
						</tr>
						<tr>
							<td>7</td>
							<td>8.12.2016</td>
							<td>
								<a href="files/Blatt7/Uebung-7.pdf">Blatt 7</a> <br/>
							</td>
							<td>
<!-- 								<a href="files/Blatt7/Loesung-7.pdf" download>Loesungen-7.pdf</a> <br/>
								<a href="files/Blatt7/7-1.py" download>7-1.py</a> <br/>
								<a href="files/Blatt7/7-2.py" download>7-2.py</a> <br/>
								<a href="files/Blatt7/7-3.py" download>7-3.py</a> <br/>
								<a href="files/Blatt7/7-4a.py" download>7-4a.py</a> <br/>
								<a href="files/Blatt7/7-4b.py" download>7-4b.py</a> -->
							</td>
							<td>
								<a href="files/Blatt7/Übung-7.pdf" download>Folien</a>
							</td>
						</tr>
						<tr>
							<td>8</td>
							<td>15.12.2016</td>
							<td>
								<a href="files/Blatt8/Uebung-8.pdf">Blatt 8</a> <br/>
							</td>
							<td>
<!-- 								<a href="files/Blatt8/Loesung-8.pdf" download>Loesungen-8.pdf</a> <br/>
								<a href="files/Blatt8/8-Python.zip" download>Python Files (.zip)</a> -->
							</td>
							<td>
								<a href="files/Blatt8/Übung-8.pdf" download>Folien</a>
							</td>
						</tr>
						<tr>
							<td>9</td>
							<td>22.12.2016</td>
							<td>
								<a href="http://www.cis.uni-muenchen.de/kurse/max/einfprog/aufgaben/Uebung-9.pdf">Blatt 9</a> <br/>
							</td>
							<td>
<!-- 								<a href="files/Blatt9/Loesung-9.pdf">Lösung</a> <br />
								<a href="files/Blatt9/Python-9.zip">Python Files (.zip)</a> <br /> -->
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<td>9 ¾</td>
							<td>22.12.2016</td>
							<td>
								<a href="http://www.cis.uni-muenchen.de/kurse/max/einfprog/aufgaben/Uebung-Weihnachten.pdf">Weihnachtsblatt</a> <br/>
							</td>
							<td>
<!-- 								<a href="files/Weihnachten/Loesung-Weihnachten.pdf">Lösung</a> <br />
								<a href="files/Weihnachten/Weihnachten-Python.zip">Python Files (.zip)</a> <br /> -->
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<td>10</td>
							<td>13.1.2017</td>
							<td>
								<a href="files/Blatt10/Uebung-10.pdf">Blatt 10</a> <br/>
								<a href="files/Blatt10/Linux.md">Linux.md</a> <br/>
							</td>
							<td>
<!-- 								<a href="files/Blatt10/Loesung-10.pdf">Lösung</a> <br />
								<a href="files/Blatt10/Python-10.zip">Python Files (.zip)</a> -->
							</td>
							<td>
								<a href="files/Blatt10/Übung-10.pdf">Folien</a> <br />
								<a href="files/Vorlesung-9-1-17.pdf">Vorlesung (9.1.2017)</a> <br/>
								<a href="files/Fallstudie.zip">Fallstudie (.zip)</a> <br />
							</td>
						</tr>
						<tr>
							<td>11</td>
							<td>19.1.2017</td>
							<td>
								<a href="http://www.cis.uni-muenchen.de/kurse/max/einfprog/aufgaben/Uebung-11.pdf">Blatt 11</a> <br/>
							</td>
							<td>
<!-- 								<a href="files/Blatt11/Loesung-11.pdf">Lösung</a> <br />
								<a href="files/Blatt11/Python-11.zip">Python Files (.zip)</a> -->
							</td>
							<td>
								<a href="files/Blatt11/Übung-11.pdf">Folien</a> <br />
								<a href="files/Probeklausur/Probeklausur.pdf">Probeklausur</a> <br />
<!-- 								<a href="files/Probeklausur/Lösung.pdf">Probeklausur (Lösung)</a> -->
							</td>
						</tr>
						<tr>
							<td>12</td>
							<td>26.1.2017</td>
							<td>
								<a href="files/Blatt12/Uebung-12.pdf">Blatt 12</a> <br/>
								<a href="files/Blatt12/10MB_spammax-verkettet.txt.zip">Spam Datei</a ><br />
							</td>
							<td>
<!-- 								<a href="files/Blatt12/Loesung-12.pdf">Lösung</a> <br />
								<a href="files/Blatt12/Python-12.zip">Python Files (.zip)</a> -->
							</td>
							<td>
								<a href="files/Blatt12/Übung-12.pdf">Folien</a> <br />
							</td>
						</tr>
						<tr>
							<td>13</td>
							<td>3.2.2017</td>
							<td>
								<a href="files/Blatt13/Uebung-13.pdf">Blatt 13</a> <br />
								<a href="files/Blatt13/europarl.zip">Europarl Excerpt</a>
							</td>
                            <td>
<!--                                 <a href="files/Blatt13/13.py">13.py</a> <br />
                                <a href="files/Blatt13/Loesung-13.pdf">Lösung</a> -->
							</td>
                            <td>
                                <a href="files/Blatt13/Übung-13.pdf">Folien</a> <br />
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<hr>
			<a class="anchor" name="links"></a>
			<h2>Links</h2>
			
			<a href="http://www.cis.uni-muenchen.de/kurse/max/einfprog/">Website der Vorlesung</a> <br />
			<a href="http://www.cis.uni-muenchen.de/kurse/max/einfprog/scripten/python.pdf">Skript</a> <br />
			<a href="https://docs.python.org/3/">Python Docs</a> <br />
			<a href="http://www.howtogeek.com/249966/how-to-install-and-use-the-linux-bash-shell-on-windows-10/">Bash auf Windows</a> <br />
			
			
			<hr>
			<a class="anchor" name="antworten"></a>
			<h2>Antworten</h2>
			Hier findet ihr Antworten zu häuftig gestellten Fragen, gerne gemachten Fehlern etc.
			<br />
			
			<h4>Wann ist die Klausur?</h4>
			<a href="#termine">Die Klausur ist am 6.2.</a>
			
			<h4>Warum wurde meine Hausaufgabe noch nicht korrigiert?</h4>
			Die Korrektur dauert im Normalfall bis zu einer Woche. Es werden nur Lösungen korrigiert die vor <b>Donnerstag, 10 Uhr</b> (Beginn der Tutorübung bei Dr. Hadersbeck) abgegeben wurden.
			
			<h4>Ist am Tag vor Weihnachten Übung?</h4>
			<a href="#termine">Nein</a>
			
			<!--         <h4>John hat von meinem Tellerchen gegessen!</h4>
			 Ja, das ist John!
			 
			 <h4>Also wann ist die Eröffnungsfeier?</h4>
			 Dritter Juli! -->
			
			<hr>
			<!-- <a class="anchor" name="feedback"></a>
			<h2>Feedback</h2>
			Hier könnt ihr anonym Feedback zur Tutorübung, zu den Lösungen, zu den Folien usw. geben.
			<br /><br />
			
			<form action="../util/php/contact.php" method="post">
				<textarea class="form-control" id="frage" name="contact_textarea" placeholder="Gib hier deine Anmerkungen/Kritik ein..." rows="5"></textarea>
				<br />
				<button type='submit' name='submit' id='submit' class="btn btn-success">Abschicken</button>
			</form> -->
		</div>
		
		<!-- =============== BOOTSTRAP NECESSITES ================= -->
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../util/js/bootstrap.min.js"></script>
	</body>
</html>
