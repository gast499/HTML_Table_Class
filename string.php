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

//using html entities
echo '<br><br>HTML Entities Method:<br>';
$str = "A 'quote' is <b>bold</b>";
echo "$str";
echo '<br>';
// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);
echo '<br>';
// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str, ENT_QUOTES);

//using html special chars decode
echo '<br><br>HTML Special Chars Decode Method:<br>';
$str2 = "<p>this -&gt; &quot;</p>\n";
echo htmlspecialchars_decode($str2);
// note that here the quotes aren't converted
echo htmlspecialchars_decode($str2, ENT_NOQUOTES);

//using html special chars
echo '<br><br>HTML Special Chars Method:<br>';
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

//using implode
echo '<br><br>Implode Method:<br>';
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);
echo $comma_separated; // lastname,email,phone

//using lcfirst
echo '<br><br>LCFirst Method:<br>Before lcfirst method: ';
$foo = 'HelloWorld';
echo "$foo";
echo '<br>After lcfirst method: ';
$foo = lcfirst($foo);             // helloWorld
echo "$foo";
echo '<br>Before lcfirst method: ';
$bar = 'HELLO WORLD!';
echo "$bar";
echo '<br>After lcfirst method: ';
$bar = lcfirst($bar);             // hELLO WORLD!
echo "$bar";

//using ltrim
echo '<br><br>LTrim Method:<br>Before LTrim method:<br>';
$text = "\t\tThese are a few words :) ...  ";
$hello  = "Hello World";
echo "$text" . '<br>' . "$hello" . '<br>';
echo 'After LTrim method: <br>';
$trimmed = ltrim($text);
echo "$trimmed";
echo '<br>';
$trimmed = ltrim($text, " \t.");
echo "$trimmed";
echo '<br>';
$trimmed = ltrim($hello, "Hdle");
echo "$trimmed";

//using md5
echo '<br><br>md5 Method:<br>';
$str = 'apple';
echo "$str";
echo '<br>';
$hash = md5($str);
echo 'The hash value of the string "apple" is: ' . "$hash" . '<br>';
if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Would you like a green or red apple?";
}

//using rtrim
echo '<br><br>RTrim Method:<br>Before RTrim method:<br>';
$text = "\t\tThese are a few words :) ...  ";
$hello  = "Hello World";
echo "$text" . '<br>' . "$hello" . '<br>';
echo 'After RTrim method: <br>';
$trimmed = rtrim($text);
echo "$trimmed";
echo '<br>';
$trimmed = rtrim($text, " \t.");
echo "$trimmed";
echo '<br>';
$trimmed = rtrim($hello, "Hdle");
echo "$trimmed";

//using strreplace
// Provides: You should eat pizza, beer, and ice cream every day
echo '<br><br>StrReplace Method:<br>Before StrReplace Method: ';
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
echo "$phrase";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");
$newphrase = str_replace($healthy, $yummy, $phrase);
echo '<br>After StrReplace Method: ' . "$newphrase";
?>
	</body>
</html>