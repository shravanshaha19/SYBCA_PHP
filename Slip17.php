<?php
function DisplayDay()
{
    $currentDate=date("Y-m-d");
    $timestamp=strtotime($currentDate);
    $dayOfWeek=date("l",$timestamp);
    echo"Today is ".$dayOfWeek;
}
DisplayDay();
?>