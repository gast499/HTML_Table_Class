<html>
	<head>
	</head>
	<body>
<?php
// using chunk split
echo 'Chunk Split Method:';
echo '<br>';
$data = 'Hey.  My name is John.  I like food.  Food is good.  Yum.';
echo "$data";
echo '<br>';
$new_string = chunk_split($data, "4");
echo "$new_string";

//using count chars
echo '<br><br>';
echo 'Count Chars Method:';
echo '<br>';
$data2 = 'Two Ts and one F.';
echo "$data2";
echo '<br>';
foreach (count_chars($data2, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.";
   echo '<br>';
}

//using explode
echo '<br><br>';
echo 'Explode Method:';
echo '<br>';
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
echo "$pizza";
echo '<br>';
$pieces = explode(" ", $pizza);//separate the pizza string by white space and store each substring as an element in an array 
echo 'First 2 elements in the array after exploding the above string:';
echo '<br>Pieces[0]: ';
echo $pieces[0]; // piece1
echo '<br>Pieces[1]: ';
echo $pieces[1]; // piece2
?>
	</body>
</html>