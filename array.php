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

//using array pop
echo '<br><br>Array Pop Method:<br>The array contains: <br>';
$stack = array("orange", "banana", "apple", "raspberry");
print_r($stack);
$fruit = array_pop($stack);
echo '<br>The array now contains:<br>';
print_r($stack);

//using array push
echo '<br><br>Array Push Method:<br>The array contains: <br>';
$stack = array("orange", "banana");
print_r($stack);
array_push($stack, "apple", "raspberry");
echo '<br>The array now contains:<br>';
print_r($stack);

//using array combine
echo '<br><br>Array Combine Method:<br>The key array contains: <br>';
$a = array('green', 'red', 'yellow');
print_r($a);
$b = array('avocado', 'apple', 'banana');
echo '<br>The value array contains: <br>';
print_r($b);
$c = array_combine($a, $b);
echo '<br>The combined array contains:<br>';
print_r($c);

//using array intersect
echo '<br><br>Array Intersect Method:<br>The first array contains: <br>';
$array1 = array("a" => "green", "red", "blue");
print_r($array1);
$array2 = array("b" => "green", "yellow", "red");
echo '<br>The second array contains: <br>';
print_r($array2);
$result = array_intersect($array1, $array2);
echo '<br>The array after intersection contains:<br>';
print_r($result);

//using array count values
echo '<br><br>Array Count Values Method:<br>The array contains: <br>';
$array = array(1, "hello", 1, "world", "hello");
print_r($array);
echo '<br>The number of times each value occurs is:<br>';
print_r(array_count_values($array));

//using array map
function cube($n)
{
    return($n * $n * $n);
}
echo '<br><br>Array Map Method:<br>Before mapping, the array contains: <br>';
$a = array(1, 2, 3, 4, 5);
print_r($a);
$b = array_map("cube", $a);
echo '<br>After mapping, the mapped array contains:<br>';
print_r($b);

//using array fill
echo '<br><br>Array Fill Method:<br>The first array is filled with bananas: <br>';
$a = array_fill(5, 6, 'banana');//starts at index 5 and inserts the value banana into the next 6 indices.
print_r($a);
$b = array_fill(-2, 4, 'pear');
echo '<br>The second array is filled with pears: <br>';
print_r($b);

//using array flip
echo '<br><br>Array Flip Method:<br>Before flipping, the array contains:<br>';
$input = array("oranges", "apples", "pears");
print_r($input);
$flipped = array_flip($input);
echo '<br>The flipped array contians:<br>';
print_r($flipped);

//using array merge
echo '<br><br>Array Merge Method:<br>Before merging, the first array contains:<br>';
$array1 = array("color" => "red", 2, 4);
print_r($array1);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
echo '<br>Before merging, the second array contains:<br>';
print_r($array2);
$result = array_merge($array1, $array2);
echo '<br>After merging, the new array contains:<br>';
print_r($result);

//using array reverse
echo '<br><br>Array Reverse Method:<br>Before reversing, the array contains:<br>';
$input  = array("php", 4.0, array("green", "red"));
print_r($input);
$reversed = array_reverse($input);
echo '<br>After reversing the array:<br>';
print_r($reversed);
$preserved = array_reverse($input, true);//reserves the keys
echo '<br>After reversing the reversed array while preserving the key values, the array contains:<br>';
print_r($preserved);

//using array sum
echo '<br><br>Array Sum Method:<br>The array contains:<br>';
$a = array(2, 4, 6, 8);
print_r($a);
$suma = array_sum($a);
echo '<br>The sum of this array is: ' . "$suma";
echo '<br>The second array contains:<br>';
$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
print_r($b);
$sumb = array_sum($b);
echo '<br>The sum of this array is: ' . "$sumb";
?>
	</body>
</html>