<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse of Number</title>
</head>
<body>
    <h1>Reverse of a Number</h1>
    <form method="POST" action="">
        Number:<input type="number" name="number" require><br><br>
        <input type="submit" name="reverse" value="Reverse">
    </form>
    <?php
    if(isset($_POST['reverse']))
    {
        $number=$_POST['number'];
        $reversedNumber=0;
        while($number>0)
        {
            $digit=$number % 10;
            $reversedNumber=$reversedNumber*10+$digit;
            $number=(int)($number/10);
        }
        echo"Reverse of the number:$reversedNumber";
    }
    ?>
</body>
</html>