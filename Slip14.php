<?php
function checkPositiveNegative($num){
	if($num>0){
		return"Positive";
	}elseif($num<0){
		return"Negetive";
	}else{
		return"Zero";

	}
}

function calculateAverage($arr){
	$sum=array_sum($arr);
	$count=count($arr);

	if ($count>0) {
		return$sum/$count;
	}else{
		return 0;
	}
	}

function calculateSum($arr){
	return array_sum($arr);
}
$array=array(10,-5,8,-3,0,12,-7);
echo "OriginalArray:".implode(',',$array)."<br>";

foreach ($array as $num) {
	echo "$num is".checkPositiveNegative($num)."<br>";
	// code...
}
$average=calculateAverage($array);
echo "Average of array elements:$average<br>";

$sum=calculateSum($array);
echo "Sum of array elements:$sum<br>";
?>