<?php
$students=array(
    array("name"=>"John","age"=>20,"grade"=>"A"),
    array("name"=>"Jane","age"=>22,"grade"=>"B"),
    array("name"=>"Doe","age"=>21,"grade"=>"C")
);

echo "Name of the second student:".$students[1]["name"]."<br>";

//(removing Jane's record)
unset($students[1]);

echo"<per>";
print_r($students);
echo"</per>";

$found=false;
foreach($students as $students)
{
    if(in_array("Doe",$students))
    {
        $found=true;
        break;
    }
}

if($found)
{
    echo "Doe' was found in the array.<br>";
}
else
{
    echo "Doe' was not found in the array.<br>";
}
?>