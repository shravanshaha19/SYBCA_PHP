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



?>