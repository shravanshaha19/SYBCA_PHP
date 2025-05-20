<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Total & Percentage</title>
</head>
<body>
    <h1>Student Marks Calculation</h1>
    <form method="post" action="">
        <label for="ds">Data Structure (Out of 100):</label>
        <input type="number" id="ds" name="ds" min="0" max="100" required><br><br>
        <label for="dm">Digital Marketing (Out of 100):</label>
        <input type="number" id="dm" name="dm" min="0" max="100" required><br><br>
        <label for="php">PHP (Out of 100):</label>
        <input type="number" id="php" name="php" min="0" max="100" required><br><br>
        <label for="se">Software Engineering (Out of 100):</label>
        <input type="number" id="se" name="se" min="0" max="100" required><br><br>
        <label for="bd">Big Data (Out of 100):</label>
        <input type="number" id="bd" name="bd" min="0" max="100" required><br><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $ds=$_POST['ds'];
        $dm=$_POST['dm'];
        $php=$_POST['php'];
        $se=$_POST['se'];
        $bd=$_POST['bd'];

        $totalMarks=$ds+$dm+$php+$se+$bd;

        $percentage=($totalMarks/500)*100;

        echo "<h2>Result:</h2>";
        echo "Total Marks:$totalMarks/500<br>";
        echo "Percentage:".number_format($percentage,2)."%<br>";
    }
    ?>
</body>
</html>
