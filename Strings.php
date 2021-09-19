<?php
$name = "Veshraj";
$age=19;
$statement="$name is a good boy.";
echo "My name is $name"." and my age is $age<br>";   ///Concating with .
echo "My name contains ".strlen($name)." Letters<br>";     ///Length
echo "Reverse of my name is ".strrev($name);    ///reverse
echo "<br>Letter 'e' is on ".strpos($name,"e");  //Letter kata xa vanera search garna returns index
echo "<br>";
echo str_replace('Veshraj','Raj',$statement);
echo "<br>";    //To replace
echo str_repeat("$statement<br>",5);   ///To Repeat
echo "<br>";
echo "<pre>";
echo rtrim("    Right ko hata     ");  ///trims right side whitespace
echo "<br>";
echo ltrim("    Left ko hata     ");   ///trims left side whitespace
echo "</pre>";
?>