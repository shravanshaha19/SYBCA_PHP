<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <style>
        table{
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        h2{
            text-align:center;
        }
        td{
            text-align:center;
        }
        th{
            text-align:center;
        }
    </style>
</head>
<body>
    <h2>Book Details</h2>

<?php
$xml=simplexml_load_file("book.xml")or die("Error:Cannot load XML File.");

echo"<table border='1'>";
echo"<tr><th>Book Code</th><th>Book Name</th><th>Author</th><th>Year</th><th>Price($)</th></tr>";

foreach($xml->book as $book)
{
    echo"<tr>";
    echo"<td>".$book['bookcode']."</td>";
    echo"<td>".$book->bookname."</td>";
    echo"<td>".$book->author."</td>";
    echo"<td>".$book->year."</td>";
    echo"<td>".$book->price."</td>";
    echo"</tr>";
}
echo"</table>";
?>
</body>
</html>