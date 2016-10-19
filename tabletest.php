<html>
	<head>
	</head>
	<body>
	<table border="1">
<?php
require('my_table.class.php');
$elements = array(
    "Model" => array('Toyota', 'Tesla', 'Ferrari'), 
    "Type" => array('A' , 'B' , 'C'),
    "Price" => array('10k' , '20k' , '30k')
);
$vals = array_values($elements);

$headers = True;
$tbl = new MyTable();
$tbl->display($elements, $headers);
?>
</table>

	</body>
</html>