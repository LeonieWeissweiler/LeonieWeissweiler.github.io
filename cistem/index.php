<?php
include '../util/hitcount.php';
$file = 'cistem-gscl2017.pdf';

// Send a header containing the type, name and length
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . basename($file) . '"');
header('Content-Length: ' . filesize($file));
// Send the file
readfile($file);
?>

<h1>Cistem.pdf</h1>
