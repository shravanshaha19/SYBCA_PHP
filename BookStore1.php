<?php
$xml=new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><BookStore></BookStore>');

$books=$xml->addChild('Books');

$php1=$books->addChild('PHP');
$php1->addChild('title','Programming PHP');
$php1->addChild('publication',"O'RELLY");

$php2=$books->addChild('PHP');
$php2->addChild('title','Beginners PHP');
$php2->addChild('publication','WROX');

file_put_contents('bookstore1.xml',$xml->asXML());

echo"<h2>BookStore Catalog</h2>";
echo"<table border='1'>";
echo"<tr><th>Language</th><th>Title</th><th>Publication</th></tr>";

foreach($xml->Books->PHP as $phpBook)
{
    echo"<tr>";
    echo"<td>PHP</td>";
    echo"<td>{$phpBook->title}</td>";
    echo"<td>{$phpBook->publication}</td>";
    echo"</tr>";
}
echo"</table>";
?>