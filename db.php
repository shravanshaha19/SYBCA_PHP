<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <b><h3>Perform operations on the teacher table</h3></b><br>
        <input type="radio" name="choice" value="1">Create <br>
        <input type="radio" name="choice" value="2">Insert <br>
        <input type="radio" name="choice" value="3">Update <br>
        <input type="radio" name="choice" value="4">Delete <br>
        <input type="submit" name="submit" value="Operation Perform"><br>
    </form>
    <?php
    $link=mysqli_connect("localhost","root","route","shravanPHP");
    if(isset($POST['submit']))
    {
        $ch=$_POST['choice'];
        if($ch=='1')
        {
            if(!$link)
            {
                die('connect faild:'.mysqli_error());
            }
            $sql="create table teacher(
                tid int,
                tname varchar(20),
                addr varchar(20),
                sub varchar(20))";
                if(mysqli_query($link,$sql))
                {
                    
                }
        }
    }
    ?>
</body>
</html>