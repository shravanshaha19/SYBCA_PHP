<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert page page</title>
</head>
<body>
    <center>
    <?php
        $conn=mysqli_connect("localhost","root","route","staff");
        if($conn==false) {
            die("ERROR:could no connect".mysqli_connect_error());
        }
        $emp_no=$_REQUEST['emp_no'];
        $emp_name=$_REQUEST['emp_name'];
        $address=$_REQUEST['address'];
        $J_date=$_REQUEST['J_date'];
        $salary=$_REQUEST['salary'];
        
        $sql="insert into employee values('$emp_no','$emp_name','$address','$J_date','$salary')";
        if(mysqli_query($conn,$sql)) {
            echo"<h3>data stored in the database succesfully"."please browse your localhost php myadmin"."to view the updated data"."</h3>";
            echo("Employee No:".$emp_no."<br>");
            echo("Employee Name:".$emp_name."<br>");
            echo("Employee Adress:".$address."<br>");
            echo("Employee joining date:".$J_date."<br>");
            echo("Employee salary:".$salary."<br>");
        }
        else{
        echo"ERROR:Hush!sorry $sql.".mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</center>
</body>
</html>