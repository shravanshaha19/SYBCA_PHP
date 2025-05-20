<?php
$dom=new DOMDocument('1.0','UTF-8');
$dom->formatOutput=true;
$root=$dom->createElement('Course');
$dom->appendChild($root);
$computerScience=$dom->createElement('computerScience');
$students=[
['name'=>'Alice Johnson','class'=>'SYBBA(C.A)','percentage'=>85],
['name'=>'Bob Smith','class'=>'SYBBA(C.A)','percentage'=>78],
['name'=>'Charlie Brown','class'=>'SYBBA(C.A)','percentage'=>92],
['name'=>'Daisy Williams','class'=>'SYBBA(C.A)','percentage'=>88],
['name'=>'Ethan Davis','class'=>'SYBBA(C.A)','percentage'=>81]];

foreach($students as $studentData)
{
$student=$dom->createElement('student');
$studentName=$dom->createElement('Student_name',htmlspecialchars($studentData['name']));
$className=$dom->createElement('Class_name',$studentData['class']);
$percentage=$dom->createElement('Percentage',$studentData['percentage']);

$student->appendChild($studentName);
$student->appendChild($className);
$student->appendChild($percentage);

$computerScience->appendChild($student);
}
$root->appendChild($computerScience);
$dom->save('course.xml');
echo"Course.xml file created successfully!";
?>
