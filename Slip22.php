<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Enter First Number" required>
        <select name="operator" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter Second Number" required>
        <input type="submit" name="calculate" value="calculate">
    </form>
    <?php
    if(isset($_POST['calculate']))
    {
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $operator=$_POST['operator'];
        
        $result='';
        switch($operator)
        {
            case '+':
                $result=$num1+$num2;
                break;
            case '-':
                $result=$num1-$num2;
                break;     
            case '*':
                $result=$num1*$num2;
                break;
            case '/':
                if($num2  !=0)
                {
                    $result=$num1/$num2;
                }
                else
                {
                    echo"Cannot divide by zero!";
                }
                break;
            default:
            $result="Invalid operator";    
        }
        echo"<h2>Result:$result</h2>";
    }
    ?>
</body>
</html>