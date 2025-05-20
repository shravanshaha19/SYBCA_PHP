<?php
$str1=$_POST['str1'];
$str2=$_POST['str2'];
$pos=$_POST['pos'];
$ch=$_POST['ch'];

echo"First String::$str1.<br><br>";
echo"Second String::$str1.<br><br>";
echo"Position For Reverse::$pos.<br<br>";
echo"Choice is::$ch.<br><br>";

switch($ch)
{
    case 1:
        if($str1==$str2)
        echo"Both string are equal.<br>";
    else
    break;
    case 2:
        echo"Both string are not equal.<br>";
        if($str1==$str2)
        echo"Both string exat equal.<br>";
    else
    break; 
    case 3:
        echo"Both are not equal.<br>";
        echo"After appending::";
        echo"$str1"."$str2";
        echo"<br>";
        break;
    case 4:
        $len=strlen($str1)-$pos;
        $s=substr($str1,$pos,$len);
        $str4=strrev($s);
        echo"After reverse ::$str4.<br>";
        break;    
}
?>