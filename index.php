<?php

$xml = new DOMDocument('1.0', 'UTF-8');

$student = $xml->createElement("student");
$xml->appendChild($student);

$result = $xml->createElement("result");
$result->setAttribute("id", 1);
$student->appendChild($result);

$name = $xml->createElement("name", "Opal Kole");
$result->appendChild($name);

$sgpa = $xml->createElement("sgpa", "8.1");
$result->appendChild($sgpa);

$cgpa = $xml->createElement("cgpa", "8.4");
$result->appendChild($cgpa);

header("Content-type:text/xml");
echo $xml->saveXML();


$xmlFileName = "result.xml";
$xml->formatOutput = true;
$xml->save($xmlFileName);
