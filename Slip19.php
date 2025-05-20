<?php
function calculateCylinderArea($radius,$height)
{
    $area=2*M_PI*$radius*($radius+$height);
    return $area;
}
function calculateCylinderVolume($radius,$height)
{
    $volume=M_PI*pow($radius,2)*$height;
    return $volume;
}

$radius=5;
$height=10;

$cylinderArea=calculateCylinderArea($radius,$height);
$cylinderVolume=calculateCylinderVolume($radius,$height);

echo"Cylinder with radius $radius & height $height:<br>";
echo"Area:".number_format($cylinderArea,2)."square units<br>";
echo"Volume:".number_format($cylinderVolume,2)."cubic units<br>";

?>