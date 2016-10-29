<html>
	<head>
	</head>
	<body>
<?php
//using add slashes
echo 'Add Slashes Method:<br>String before the Add Slashes Method: ';
$str = "Is your name O'Reilly?";
echo "$str" . '<br>String after the Add Slashes Method: ';
// Outputs: Is your name O\'Reilly?
echo addslashes($str);

//using chr
echo '<br><br>Chr Method:<br>The ASCII value for the character we will use is: ';
$val = 47;
echo "$val" . '<br>';
$str = "The string ends in a slash: ";
$str .= chr($val); /* add an slash character at the end of $str */
echo "$str";


// using chunk split
echo '<br><br>Chunk Split Method:';
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

//using echo
echo '<br><br>Echo Method:<br>Echoing a string prints the string.<br>Example: ';
echo 'This is an echoed string';


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

//using str split
echo '<br><br>Str Split Method:<br>Before Str Split Method: ';
$str = "Hello Friend";
echo "$str";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);
echo '<br>Array after splitting string into elements 1 character long: <br>';
print_r($arr1);
echo '<br>Array after splitting string into elements up to 3 character long: <br>';
print_r($arr2);

//using stripos
echo '<br><br>StrIPos Method:<br>';
$findme    = 'a';
$mystring1 = 'xyz';
$mystring2 = 'ABC';

$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);

// Nope, 'a' is certainly not in 'xyz'
echo 'Searching for the string "a" in the string "xyz": ';
if ($pos1 === false) {
    echo "The string '$findme' was not found in the string '$mystring1'";
}

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' is the 0th (first) character.
echo '<br>Searching for the string "a" in the string "ABC": ';
if ($pos2 !== false) {
    echo "We found '$findme' in '$mystring2' at position $pos2";
}

//using strtolower
echo '<br><br>Str To Lower Method:<br>Before the Str To Lower method: ';
$str = "Mary Had A Little Lamb and She LOVED It So";
echo "$str";
$str = strtolower($str);
echo '<br>After the Str To Lower method: ';
echo $str; // Prints mary had a little lamb and she loved it so

//using trim
echo '<br><br>Trim Method:<br>Before Trim method:<br>';
$text = "\t\tThese are a few words :) ...  ";
$hello  = "Hello World";
echo "$text" . '<br>' . "$hello" . '<br>';
echo 'After Trim method: <br>';
$trimmed = trim($text);
echo "$trimmed";
echo '<br>';
$trimmed = trim($text, " \t.");
echo "$trimmed";
echo '<br>';
$trimmed = trim($hello, "Hdle");
echo "$trimmed";
echo '<br>';
$trimmed = trim($hello, 'HdWr');
echo "$trimmed";
?>
	</body>
</html>