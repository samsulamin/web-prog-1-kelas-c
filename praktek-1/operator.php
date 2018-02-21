<?php
$a = 5;
$b = 3;
$c = 5;
$d = "5";
var_dump($a*$b); echo "<br>";
var_dump($a+$b); echo "<br>";
var_dump($a-$b); echo "<br>";
var_dump($a/$b); echo "<br>";
var_dump($a%$b); echo "<br>";

echo "<hr>";

echo "$a*$b = "; echo $a*$b; echo "<br>";
echo "$a-$b :";  echo $a-$b; echo "<br>";
echo "$a/$b :"; echo $a/$b; echo "<br>";
echo "$a+$b = "; echo $a+$b; echo "<br>";
echo "$a%$b = "; echo $a%$b; echo "<br>";

echo "$a==$c :";  echo $a==$c; echo "<br>";
echo "$a==$d :"; echo $a==$d; echo "<br>";
echo $a++; echo"<br>";
echo ++$a; echo"<br>";

?>