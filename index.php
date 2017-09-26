<!DOCTYPE html>
<html>
<body>

<?php
ini_set('display_errors', 'On');
error_reporting (E_ALL);
<h1> A R R A Y </h1><hr>

<h1> Reverse Array </h1><br>
$a=array("a"=>"Red","b"=>"Yellow","c"=>"Blue");
print_r(array_reverse($a));
<hr>

<h1> Uppercase</h1><br>
$color=array("Red"=>"1","Blue"=>"2","Yellow"=>"3");
print_r(array_change_key_case($age,CASE_UPPER));
<hr>

<h1>Get Rid Of</h1><br>
$a=array("red","blue","yellow");
array_pop($a);
print_r($a);
<hr>

<h1>Multiply</h1><br>
$a=array(10,5);
echo(array_product($a));
<hr>

<h1>Random</h1><br>
$a=array("red","blue","yellow","purple");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]; 
<hr>

<h1>Sum</h1><br>
$a=array(2,4,6);
echo array_sum($a);
<hr>

<h1>Unique</h1><br>
$a=array("a"=>"red","b"=>"blue","c"=>"red", "d"=>"yellow", "e"=>"blue");
print_r(array_unique($a));
<hr>

<h1>Slice</h1><br>
$a=array("red","black","blue","yellow","purple");
print_r(array_slice($a,3));
<hr> 

<h1>Shift</h1><br>
$a=array("a"=>"red","b"=>"yellow","c"=>"blue");
echo array_shift($b)."<br>";
print_r ($b);
<hr>

<h1>End</h1><br>
$a=array("purple","black");
array_push($a,"blue","yellow");
print_r($a);
<hr>

<h1> S T R I N G </h1> <hr>

<h1>Slashes</h1><br>
$str = addcslashes("Brianna Wong!","W");
echo($str); 
<hr>

<h1>Splits</h1><br>
$str = "blue", "red", "yellow";
echo chunk_split($str,1,".");
<hr>

<h1>Monetary</h1><br>
$number = 123456.78;
setlocale(LC_MONETARY,"en_US");
echo money_format("Price is  %i", $number);
<hr>

<h1>Length</h1><br>
$str = "Brianna Wong";
echo str_pad($str,10,".");
<hr>

<h1>Word Counts</h1><br>
echo str_word_count("Brianna Wong");
<hr>

<h1>Character Length</h1><br>
echo strlen("Brianna");
<hr>

<h1>Reverse</h1><br>
echo strrev("Brianna Wong");
<hr>

<h1>Lowercase</h1><br>
echo strtolower("BRIANNA WONG");
<hr>

<h1>Partial</h1><br>
echo substr("Brianna",2);
<hr>

<h1>Uppercase</h1><br>
echo ucwords("The quick brown fox jumps over the lazy dog");
<hr>
?>
</body>
</html>
