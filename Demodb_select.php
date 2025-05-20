<?php
$hostname='localhost';
$username='root';
$password='route';
$db_name='shravanPHP';
//$con=$_POST['con'];

$con=mysqli_connect($hostname,$username,$password,$db_name) or die ('could not connect');

if(!$con)
{
    echo "Error:".mysql_connect_error();
}
else
{
    echo"Connection error";
}

$sql="select * from cust;";
if(mysqli_query($con,$sql))
{
    echo"Record inserted successfully";
}
else
{
    echo"ERROR:could not able to execute $sql".mysqli_error($con);
}
mysqli_close($con);
?>