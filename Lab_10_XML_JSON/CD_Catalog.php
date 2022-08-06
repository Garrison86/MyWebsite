<?php

/*
 The description about how this code works is given below:
 
The page on the server called by the HTML file (CD_Catalog.html) is a PHP file called "CD_Catalog.php".
The PHP script loads an XML document, "CD_Catalog.xml", runs a query against the XML file, and returns the result as HTML.

When the CD query is sent from the JavaScript to the PHP page, the following happens:
    PHP creates an XML DOM object
    Find all <ARTIST> elements that matches the name sent from the JavaScript
    Output the album information (send to the "txtHint" placeholder)

 */

$q=$_GET["q"];

$y="";

$xml = file_get_contents("CD_Catalog.xml");

$xmlDoc = new DOMDocument();
$xmlDoc->loadXML($xml);

$cd = $xmlDoc->getElementsByTagName('CD');

foreach($cd as $currentCD)
{
	foreach($currentCD->childNodes as $node)
	{
		if ($node->nodeName == "ARTIST")
	 	{
	 		if ($node->nodeValue==$q)
	 		{
	 			$y=($node->parentNode); 
	 		
	 	 	}
	 	}

	}
}

foreach($y->childNodes as $node)
{
	if ($node->nodeName == "TITLE")
	{
		echo("<b>" . $node->nodeName . ":</b> ");
		echo($node->nodeValue);
		echo("<br>");
	}

	if ($node->nodeName == "ARTIST")
	{
		echo("<b>" . $node->nodeName . ":</b> ");
		echo($node->nodeValue);
		echo("<br>");
	}		 

	if ($node->nodeName == "COUNTRY")
	{
		echo("<b>" . $node->nodeName . ":</b> ");
		echo($node->nodeValue);
		echo("<br>");
	}	
	 
	if ($node->nodeName == "COMPANY")
	{
		echo("<b>" . $node->nodeName . ":</b> ");
		echo($node->nodeValue);
		echo("<br>");
	}
	 
	if ($node->nodeName == "PRICE")
	{
		echo("<b>" . $node->nodeName . ":</b> ");
		echo($node->nodeValue);
		echo("<br>");
	}
		
	if ($node->nodeName == "YEAR")
	  {
		echo("<b>" . $node->nodeName . ":</b> ");
		echo($node->nodeValue);
		echo("<br>");
	  }		
}
		
?>