<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Check</title>
</head>
<body>
    <h1>Leap Year Check</h1>
    <form method="POST" action="">
        Year:<input type="number" name="year" require><br><br>
        <input type="submit" name="check" value="Check">
    </form>
    <?php
    if(isset($_POST['check']))
    {
        $year=$_POST['year'];
        if(($year % 4==0 && $year % 100 !=0)||($year % 400==0))
        {
            echo"$year is a leap year.";
        }
        else
        {
            echo"$year is not a leap year.";
        }
    }
    ?>
</body>
</html>