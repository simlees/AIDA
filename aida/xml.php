<?php
$title = "XML";
require_once 'config/init.php';


// <!-- CONTENT START -->



$properties = $property->getAll();

$name = "testing";



       			       			

header ("Content-Type:text/xml");//Tell browser to expect xml

//Top of xml file
$_xml = '<?xml version="1.0"?>'; 
$_xml .="<properties>";


if (count($properties) > 0)
{
  foreach($properties as $property)
  {
    $_xml .= "<property>"; 
    $_xml .= "<title>".$property['title']."</title>";
    $_xml .= "<city>".$property['city']."</city>";
    $_xml .= "<capacity>".$property['capacity']."</capacity>";
    $_xml .= "<price>".$property['price']."</price>";
    $_xml .= "</property>"; 
  }
}

$_xml .="</properties>"; 
//Parse and create an xml object using the string
$xmlobj=new SimpleXMLElement($_xml);
//And output
print $xmlobj->asXML();
//or we could write to a file
//$xmlobj->asXML(winerys.xml);
?>
     	