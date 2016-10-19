<html>
	<head>
	</head>
	<body>
	<table border="1">
<?php
require('my_table.class.php');
$file = fopen("contacts.csv","r");
$outarray = array();
while(! feof($file))
  {
  array_push($outarray, fgetcsv($file));
  }
fclose($file);

$headers = False;
$tbl = new MyTable();
$tbl->display($outarray, $headers);
?>
</table>

	</body>
</html>