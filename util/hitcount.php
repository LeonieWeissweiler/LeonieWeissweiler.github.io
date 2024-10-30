<?php 

$filename = "hit.txt";

$count = file_get_contents ($filename);

if (!$count) {
	$count = 0;
}
$count += 1;

$result = file_put_contents($filename , strval($count));

?>
