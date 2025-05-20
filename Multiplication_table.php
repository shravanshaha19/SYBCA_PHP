<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication table</title>
    <style>
        table{
            border-collapse:collapse;
            width: 50%;
            margin:20px auto;
        }
        table,th,td{
            border:1px solid black;
        }
        th,td{
            text-align:center;
            padding:10px;
        }
        h1,form{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Generate Multiplication Table</h1>
    <form method="post" action="">
        <label for="number">Enter a Number:</label>
        <input type="number" id="number" name="number" require>
        <button type="submit" name="generate">Generate Table</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $number=$_POST['number'];

        echo "<h2 style='text-align:center;'>Multiplication Table for $number</h2>";
        echo "<table>";
        echo "<tr><th>Number</th><th>x</th><th>Multiplier</th><th>Result</th></tr>";
        for($i=1;$i<=10;$i++)
        {
            $result=$number*$i;
            echo "<tr>
            <td>$number</td>
            <td>x</td>
            <td>$i</td>
            <td>$result</td>
            </tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>