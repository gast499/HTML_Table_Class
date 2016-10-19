<?php
$file = fopen("contacts.csv","r");
$outarray = array();
while(! feof($file))
  {
  array_push($outarray, fgetcsv($file));
  }
print_r($outarray);
fclose($file);
?>