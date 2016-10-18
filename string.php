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

?>
	</body>
</html>