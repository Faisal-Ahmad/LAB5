<?php
$name=$_POST['name'];
$item=$_POST['item'];
$price=$_POST['price'];

$filename="menudata.xml";

	$xml = new XMLWriter();
    $xml->openMemory();
	$xml->setIndent(true);
	if(filesize($filename)==0)
	{
		$xml->startDocument('1.0', 'UTF-8');
	}
    $xml->startElement('resturantdata');
	$xml->startElement("menuname");
	$xml->writeAttribute('category',$name);
	$xml->writeElement("item",$item);
	$xml->writeElement("price",$price);
	$xml->endElement();
	$xml->endElement();
	$xml->endDocument();
	$file = $xml->outputMemory();
    file_put_contents($filename,$file,FILE_APPEND);
	echo "XML write successful! <a href='index.php'>go back</a>";
?>