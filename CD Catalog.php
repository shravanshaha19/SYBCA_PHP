<?php
$xml=new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><catalog></catalog>');

$cd1=$xml->addChild('cd');
$cd1->addChild('title','Empire Burlesque');
$cd1->addChild('artist','Bob Dylan');
$cd1->addChild('country','USA');
$cd1->addChild('company','Columbia');
$cd1->addChild('price','10.90');
$cd1->addChild('year','1985');

$cd2=$xml->addChild('cd');
$cd2->addChild('title','Hide Your Heart');
$cd2->addChild('artist','Bonnie Tyler');
$cd2->addChild('country','UK');
$cd2->addChild('company','CBS Records');
$cd2->addChild('price','9.90');
$cd2->addChild('year','1988');

file_put_contents('cd_catalog.xml',$xml->asXML());

echo"<h2>CD Catalog</h2>";
echo"<table border='1'>";
echo"<tr><th>Title</th><th>Artist</th><th>Country</th><th>Company</th><th>Price</th><th>Year</th></tr>";

foreach($xml->cd as $cd)
{
    echo"<tr>";
    echo"<td>{$cd->title}</td>";
    echo"<td>{$cd->artist}</td>";
    echo"<td>{$cd->country}</td>";
    echo"<td>{$cd->company}</td>";
    echo"<td>{$cd->price}</td>";
    echo"<td>{$cd->year}</td>";
    echo"</tr>";
}
echo"</table>";
?>