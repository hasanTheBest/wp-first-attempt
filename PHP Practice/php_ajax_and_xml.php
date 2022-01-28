<?php 

$q = $_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_datalog.xml");

$artist = $xmlDoc->getElementsByTagName('ARTIST');

for($i=0; $i<=$artist->length-1; $i++){
    //Process only element nodes
    if($artist->item($i)->nodeType == 1){
        if($artist->item($i)->childNodes->item(0)->nodeValue == $q){
            $y = ($artist->item($i)->parentNode);
        }
    }
}
$cd = ($y->chilNodes);

for($i=0; $i<$cd->length;$i++){
    //Process only elment nodes
    if($cd->item($i)->nodeType == 1){
        echo ("<br>" . $cd->item($i)->nodeName .":</br>");
        echo ($cd->item($i)->childNodes->item(0)->nodeValue);
        echo ("<br>");
    }
}
?>
