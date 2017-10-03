<h1> ARRAYS </h1>

<h1>1. Reverse</h1>
<?php
$a=array("a"=>"Red","b"=>"Yellow","c"=>"Blue");
print_r(array_reverse($a));?>
<hr>

<h1>2. Uppercase</h1>
<?php
$color=array("Red"=>"1","Blue"=>"2","Yellow"=>"3");
print_r(array_change_key_case($color,CASE_UPPER));?>
<hr>

<h1>3. Get Rid Of</h1>
<?php
$a=array("red","blue","yellow");
array_pop($a);
print_r($a);?>
<hr>
