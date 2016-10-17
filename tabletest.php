<html>
	<head>
	</head>
	<body>
	<table border="1">
<?php
require('my_table.class.php');
$elements = array(
    array('1' , '2' , '3' ),
    array('A' , 'B' , 'C' ),
    array('Food' , 'Water' , 'Sleep' ),
    array('Happy' , 'Sad' , 'Mad' ),
    array('Bush' , 'Obama' , 'Washington' )
);
$headers = True;
$tbl = new MyTable();
$tbl->display($elements, $headers);
?>
</table>

	</body>
</html>