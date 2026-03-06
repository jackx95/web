<?php
$file = fopen("ex.txt", "r"); // Open file for reading
$contents = fread($file, filesize("ex.txt")); // Read entire content
fclose($file); // Close file handle

echo $contents;
?>
