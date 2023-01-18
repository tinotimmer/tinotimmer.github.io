<?php
// Datei öffnen, um den aktuellen Wert zu lesen
$file = fopen("counter.txt", "r");
$count = fread($file, filesize("counter.txt"));
fclose($file);

// Wert um 1 erhöhen
$count = $count + 1;

// Datei öffnen, um den neuen Wert zu schreiben
$file = fopen("counter.txt", "w");
fwrite($file, $count);
fclose($file);

// Aktuellen Wert ausgeben
echo $count;
?>