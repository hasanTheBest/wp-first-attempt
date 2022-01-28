
<?php

//PHP SIMPLE XML 0 READ FROM STRING
/*
$myXMLData = "<?xml version ='1.0' encoding='UTF-8'?>"
        . "<note>"
        . "<to>Tove</to>"
        . "<from>Jani</from>"
        . "<heading>Reminder</heading>"
        . "<body>Don't forget me this weekend!</body>"
        . "</note>";

$xml = simplexml_load_string($myXMLData) or 
        die("Error: Cannot create object");
print_r($xml);*/

//error handling tips
/*
libxml_use_internal_errors(true);
$myXMLData = "<?xml version='1.0' encoding='UTF-8'?>"
        . "<document>"
        . "<user>John Doe</user>"
        . "<email>joh@examplw.con</worngecmil>"
        . "<to>myDear</to>"
        . "<heading>Jane Man</heading>"
        . "</document>";

$xml = simplexml_load_string($myXMLData);
if($xml === false){
    echo "Faliled loading XML: ";
    foreach(libxml_get_errors() as $error){
        echo "<br>", $error->message;
    }
}else{
    print_r($xml);
}*/

//PHP SIMPLEXML - READ FORM FILE
/*
$xml = simplexml_load_file("note.xml") or
        die("Error: Cannot crete object");
print_r($xml);*/

//PHP SIMPLE XML - GET NODE / ATTRIBUTE VALUES
/*
$xml=simplexml_load_file("note.xml") or
        die("Error: Cannot ccreate object");
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body . "<br>";*/

//PHP SIMPLE XML - GET NODE VALUES OF SPECIFIC ELEMENTS
/*
$xml = simplexml_load_file("books.xml") or 
        die("Error: Cannot create object");
echo $xml->book[0]->title . "<br>";
echo $xml->book[1]->title . "<br>";
echo $xml->book[2]->title . "<br>";
echo $xml->book[3]->title . "<br><br>";

//using loop
$xml = simplexml_load_file("books.xml") or 
        die("Error: Cannot create object");
foreach ($xml->children() as $books){
    echo $books->title . ", ";
    echo $books->author . ", ";
    echo $books->year . ", ";
    echo $books->price . "<br>";
}

//get attributes values
$xml = simplexml_load_file("books.xml") or 
        die("Error: Cannot create object");
echo $xml->book[0]['category'] . ", ";
echo $xml->book[1]->title['lang'] . ", ";
echo $xml->book[2]['category'] . "<br>";

//using loop get attributes values
$xml = simplexml_load_file("books.xml") or 
        die("Error: Cannot create object");
foreach ($xml->children() as $books){
    echo $books->title['lang'];
    echo "<br>";
}*/

/*
//initialize the xml paerser
$parser =xml_parser_create();
//function to use that start of an element
function  start($parser, $element_name,
        $element_attrs){
    switch($element_name){
        case "NOTE":
            echo "-- Note --<br>";
            break;
        case "TO":
            echo "to: ";
            break;
        case "FROM":
            echo "From: ";
            break;
        case "HEADING":
            echo "heading: ";
            break;
        case "BODY":
            echo "Message: ";
            break;
    }
}

//function to use at the end of an element
function stop($parser, $element_name){
    echo "<br>";
}
//function to use when finding character data
function char ($parser, $data){
    echo $data;
}
//Specify element handler
xml_set_element_handler($parser, "start", "stop");
//Specify data handler
xml_set_character_data_handler($parser, "char");
//open xml file
$fp=fopen("note.xml","r");
//read data
while($data=fread($fp,4096)){
    xml_parse($parser, $data, feof($fp)) or
    die (sprintf("XML Error: %s at line %d",
            xml_error_string(xml_get_error_code($parser)),
            xml_get_current_line_number($parser)));
}    
//free the sml parser
xml_parser_free($parser);*/
//xml dom
/*
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");
print $xmlDoc->saveXML();
echo "<br>";
//looping throught xml DOM
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item){
    print $item->nodeName . " = " . $item->nodeValue . "<br>" ;
}
 */
?>

