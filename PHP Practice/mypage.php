<?php

/*$pop = array(
    "Name" => "Mahmudul",
    "Uniuversity_Name" => "Rahshahi University.",
    "ID" => "1510427184"
);
var_dump($pop);

$indexedArray = array("Mahmudul", "Elias",
    "Nana" => "Yunus ali", "Sabit", "id" => 1510420);
var_dump($indexedArray);

$textArray = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d"
);
var_dump($textArray);

//Accessing An Array in Php
$accessingArray = array(
    "foo" => "bar",
    42 => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);
var_dump($accessingArray["foo"]);
var_dump($accessingArray[42]);
var_dump($accessingArray["multi"]["dimensional"]["array"]);

function getArray(){
    return array(1,2,3,4,5,6,7,8,9,16);
}
$fithElement = getArray()[4];
echo $fithElement;

$valueAddition = array(
    "Name" => "Mahmudul",
    "Age" => 24,
    25 => "Aha"
);
$valueAddition["Name"] = "Imatiaz Ahmed Siam";
var_dump($valueAddition);

$valueModification = array(
    "f1_name" => "Mahmudul Hasan",
    "f2_name" => "Istiak Ahmed",
    "f3_name" => "Ikhtiar Ahmed",
    "f4_name" => "Ismail Hossain",
    "f5_name" => "Imatiz Ahmed Siam",
);
$food = array(
    "friuts" => array('orange', 'banana', 'apple'),
    "veggie" => array('carrot', 'collard', 'pea')
);
//echo count($valueModification);
echo count($food ) . "<br/>";
echo count($food, COUNT_RECURSIVE);

$searchArray = array(
    'first' => 1,
    'second' => 4
);
if (array_key_exists('second', $searchArray)){
    echo "the 'second' element is in the array";
}
print_r(array_keys($searchArray)); 

$arrayKeys = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($arrayKeys, "blue"));

$arrayValues = array("blue", "red", "green", "blue", "blue");
print_r(array_values($arrayValues));

$os = array("Mac", "linux", "Irix", "NT");
if(in_array("linux", $os)){
    echo 'It has been found Linux';
}
if(in_array("windows", $os)){
    echo 'Got never windows';
}

$arrayFlip = array("ami" => "tumi", "se" => "tui");
$stack = array("banana", "apple", "orange", "rasberry");
//$fruits = array_pop($stack);
//$fruits = array_push($stack, "pineApple", "mango");
//$fruits = array_shift($stack);
//$fruits = array_unshift($stack, "Guava", "Cumcamber");
//$FLIP = array_flip($arrayFlip);
//print_r($FLIP);
$fruits = array_reverse($stack);
print_r($fruits);

$input = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "traingle");
$arrayMerged = array_merge($array1, $array2);
print_r($arrayMerged);

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Hasan");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";*/

$search = array(0 => "blue", 1 => "red", 2 => "green", 3 => "Yellow");
$key = array_search("red", $search);
echo $key;

?>


