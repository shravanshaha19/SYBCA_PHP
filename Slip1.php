<?php
$no1=$_GET['no1'];
$no2=$_GET['no2'];
$cal=$_GET['cal'];
if($cal==1)
{
$add=$no1+$no2;
echo "<h1>Addition=".$add."</h1>";
}
else if($cal==2)
{
$sub=$no1-$no2;
echo "<h1>Subtraction=".$sub."</h1>";
}
else if($cal==3)
{
$mult=$no1*$no2;
echo "<h1>Multiplication=".$mult."</h1>";
}
else if($cal==4)
{
$div=$no1/$no2;
echo "<h1>Division=".$div."</h1>";
}
?>
