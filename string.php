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

?>
	</body>
</html>