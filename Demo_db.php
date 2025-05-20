<?php
$hostname='localhost';
$username='root';
$password='route';
$db_name='staff';


$con=mysqli_connect($hostname,$username,$password,$db_name) or die ('could not connect');

if(!$con)
{
    echo "Connection Faild:".mysql_connect_error();
}
else
{
    echo"Connection Successfully";
}

$sql="create table emp7(id int,
name varchar(20),
addr varchar(20))";
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