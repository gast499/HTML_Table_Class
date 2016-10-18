<html>
	<head>
	</head>
	<body>
	<table border="1">
<?php
//using array keys
$array = array(0 => 100, "color" => "red");
echo 'Array Keys Method:<br>';
print_r(array_keys($array));//print the keys of the elements in the array

$array = array("blue", "red", "green", "blue", "blue");
echo '<br>';
print_r(array_keys($array, "blue"));//search the array for the key "blue" and return the indices

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
echo '<br>';
print_r(array_keys($array));//print the keys in the multidimensional array
?>
	</body>
</html>