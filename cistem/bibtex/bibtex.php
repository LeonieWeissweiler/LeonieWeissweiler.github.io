<?php
//include '../../util/hitcount.php';
$file = 'cistem.bib';

// Send a header containing the type, name and length
header('Content-type: application/x-bibtex');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
header('Content-Length: ' . filesize($file));
// Send the file
readfile($file);
?>
