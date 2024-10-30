<html>
<head>
    <title>Aufgabe 20</title>
</head>
<body>

    <h1>PHP Seite</h1>

    <script language="php">

    $mysqli = new mysqli("db2.cip.ifi.lmu.de", "weissweiler", "p3rlt3st", "weissweiler_perltest");
    if ($mysqli->connect_errno) {
        echo "<p>Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "</p><br>";
    }

    $mysqli->query('insert into phptest values ("Song", "Interpret", 42);');

    $result = $mysqli->query('select * from phptest');
    while ($row = $result->fetch_assoc()) {
        echo $row['Name'] . " (" . $row["Interpret"] . ") : " . $row["Sekunden"] . " sec. <br>";
    }

    </script>

</body>
</html>
