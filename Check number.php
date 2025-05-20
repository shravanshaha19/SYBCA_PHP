<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Positive or Negative</title>
</head>
<body>
    <h1>Check if a number is positive,negative or zero</h1>
    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" id="number" name="number" require><br><br>
        <button type="submit" name="checkNumber">Check</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $number=$_POST['number'];
        if($number>0)
        {
            $result="The number $number is Positive.";
        }
        elseif($number<0)
        {
            $result="The number $number is Negative.";
        }
        else
        {
            $result="The number is Zero.";
        }
        echo "<h2>Result:</h2>";
        echo $result;
    }    
    ?>
</body>
</html>