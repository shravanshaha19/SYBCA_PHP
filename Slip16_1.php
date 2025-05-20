<?php
$string1="Hello World!Welcome to the PHP Programming World.";
$string2="World";

echo"Original String:$string1<br>";

$lowercase=strtolower($string1);
echo"Lowercase String:$lowercase<br>";

$uppercase=strtoupper($string1);
echo"Uppecase String:$uppercase<br>";

$firstOccurrence=strpos($string1,$string2);
$lastOccurrence=strpos($string1,$string2);

if($firstOccurrence !==false)
{
    echo"First occurrence of '$string2' is at position:$firstOccurrence<br>";
}
else
{
    echo"'$string2' not found in the string.<br>";
}

if($lastOccurrence !==false)
{
    echo"last occurrence of '$string2' is at position:$lastOccurrence<br>";
}
else
{
    echo"'$string2' not found in the string.<br>";
}
?>