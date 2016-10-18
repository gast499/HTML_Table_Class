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

//using array search
echo '<br><br>Array Search Method:<br>The contents of the array are: <br>';
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
print_r($array);
$key = array_search('green', $array); // $key = 2;
echo '<br>The key for the "green" value is: ' . "$key";
$key = array_search('red', $array);   // $key = 1;
echo '<br>The key for the "red" value is: ' . "$key";

//using array walk
echo '<br><br>Array Walk Method:<br>';
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}
function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}
echo "Before ...:" . '<br>';
array_walk($fruits, 'test_print');
array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:" . '<br>';
array_walk($fruits, 'test_print');
?>
	</body>
</html>