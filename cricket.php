<?php
$xml=simplexml_load_file('cricket.xml') or die("Unable to load");
$Team=$xml->addChild('Team');
$Team->addAttribute('country','Australia');
$player=$Team->addChild('player','Alex');
$runs=$Team->addChild('runs','75');
$wicket=$Team->addChild('wicket','2');
header('content_type:text/xml');
echo $xml->asXML();
?>