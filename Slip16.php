<?php
function convertToLowercase($string)
{
    return strtolower($string);
}
function convertToUppercase($string)
{
    return strtoupper($string);
}
function findFirstLastOccurrence($string1,$string2)
{
    $firstOccurrence=strpos($string1,$string2);
    $lastOccurrence=strrpos($string1,$string2);
    return array($firstOccurrence,$lastOccurrence);
}
$string1="Hello,this is a Sample string.Sample text is here.";
$string2="sample";

$lowercaseString=convertToLowercase($string1);
$uppercaseString=convertToUppercase($string1);
echo"Original String:$string1<br>";
echo"Lowercase:$lowercaseString<br>";
echo"Uppercase:$uppercaseString<br>";

list($firstOccurrence,$lastOccurrence)=
findFirstLastOccurrence($string1,$string2);
echo"First occurrence of '$string2':$firstOccurrence";
?>