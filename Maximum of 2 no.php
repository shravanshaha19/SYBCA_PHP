<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum of Two numbers</title>
</head>
<body>
    <h1>Find the maximum of two number</h1>
    <form method="post" action="">
        <label for="num1">Enter First Number:</label>
        <input type="text" id="num1" name="num1" require><br><br>
        <label for="num2">Enter Second Number:</label>
        <input type="text" id="num2" name="num2" require><br><br>
        <button type="submit" name="findMax"> Find Maximum</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
    if($num1>$num2){
        $max=$num1;
    }
    elseif($num2>$num1){
        $max=$num2;
    }
    else{
        $max="Both number are equal.";
    }
    echo"<h2>Result:</h2>";
    echo"Maximum Number:$max";
}
    ?>
</body>
</html>