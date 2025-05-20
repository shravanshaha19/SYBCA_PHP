<?php
function replaceString($string1,$string2,$string3){
	return str_replace($string2,$string3, $string1);

}
function reverseString($string){
	return strrev($string);

}

$string1="Hello,this is a sample string.";
$string2="sample";
$string3="replacement";

$replacedString=replaceString($string1,$string2,$string3);
echo "Original String:$string1<br>";
echo"replaced String:$replacedString<br>";

$reversedString=reverseString($string1);
echo "Reversed String:$reversedString<br>";
?>