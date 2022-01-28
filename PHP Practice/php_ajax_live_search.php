<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load("php_ajax_live_search.xml");

$x = $xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q = $_GET["q"];

//lookup all links from the xml file if length of q > 0
if(strlen($q)>0){
    $hint = "";
    for($i = 0; $i<($x->length); $i++){
        $y = $x->item($i)->getElementsByTagName('title');
        $z = $x->item($i)->getElementsByTagName('url');
        
        if($y->item(0)->nodeType == 1){
            //find the link matching the search text
            if(stristr($y->item(0)->childNodes->item(0)->nodeVlaue, $q)){
                if($hint == ""){
                    $hint = "<a href='" . 
                    $z->item(0)->childNodes->item(0)->nodeValue . "'target='_blank'" . 
                    $y->item(0)->childNodes->item(0)->nodeValue . "'target='_blank'" . "</a>";  
                }else{
                    $hint = $hint . "<br/> <a href='" . 
                    $z->item(0)->childNodes->item(0)->nodeValue . "'target='_blank'" . 
                        $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                }
            }
        }
    }
}

//set output to "no suggestion" if no hint was found
//or to the correct values
if($hint==""){
    $response = "no suggestion";
}else{
    $response = $hint;
}
//out put the response
echo $response;
?>
