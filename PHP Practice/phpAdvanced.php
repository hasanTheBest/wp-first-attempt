<?php

// pHP multidimensional Array.
/*$cars = array
    (
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
    );

echo $cars[0][0] . " In stock: " . $cars[0][1] . 
        ", sold: " . $cars[0][2] . "<br/>";
echo $cars[1][0] . " In stock: " . $cars[1][1] . 
        ", sold: " . $cars[1][2] . "<br/>";
echo $cars[2][0] . " In stock: " . $cars[2][1] . 
        ", sold: " . $cars[2][2] . "<br/>";
echo $cars[3][0] . " In stock: " . $cars[3][1] . 
        ", sold: " . $cars[3][2] . "<br/>";

for($rows = 0; $rows < 4; $rows++){
    echo "<p><b>Row Number $rows</b></p>";
    echo "<ul>";
    for($cols = 0; $cols < 3; $cols++){
        echo "<li>" . $cars[$rows][$cols] . "</li>";
    }
    echo "</ul>";
}*/

//PHP 5 Date and Time
/*
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("d.m.Y") . " " . date("l") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";

// Get a Simple Time
echo "The time is " . date("h:i:sa") . "<br>";
date_default_timezone_set("America/New_York");
echo "The current time of America is " . date("h:i:sa"). "<br>";

//php mktime(hour,minute,second,day,month,year)
$d = mktime(10,20,30,03,06,2012);
echo "Created date is " . date("d.m.Y h:i:s a", $d) . "<br>";
//php strtotime(time,now);
$dstr = strtotime("10:30pm April 15 2014");
echo "Created date is (Unix) " . date("Y-m-d h:i:s a", $dstr). "<br>";

$d = strtotime("tomorrow");
echo date("d-m-Y h:i:s a", $d) . "<br>";
$d = strtotime("next Saturday");
echo date("d-m-Y h:i:s a", $d) . "<br>";
$d = strtotime("+3 Months");
echo date("d-m-Y h:i:s a", $d) . "<br>";

//More date Examples
$startDate = strtotime("saturday");
$endDate = strtotime("+5 weeks");

while($startDate < $endDate){
    echo date("M d", $startDate). "<br>";
    $startDate = strtotime("+1 week", $startDate);
}

//More Examples 2
$d1 = strtotime("July 04");
$d2 = ceil(($d1-time())/60/60/24);
echo "There are " .$d2 . " days until 4th of July. <br>";*/

//PHP include 'fileName'; and require 'fileName'; functionality.
/*echo "<p>Copyright &copy; 1999-" . date("Y") . 
        " w3shools.com</p>";

       echo '<a href="#">Home</a> - '
. '<a href="#">News</a>';*/

//open a file with fopen('fname', 'mode'), fread(), fclose();
/*$myfile = fopen("webdictionary.txt", "r")
or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
*/

/*$myfile = fopen("newfile.txt", "w") or
die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
echo fread($myfile,filesize("newfile.txt"));
fclose($myfile);*/



?>

<!DOCTYPE html> 
<html>
    <body>
       
        <div class="menu">
            <?php //include 'phpAdvanced.php'; ?>
        </div>
        
        <h1>Welcome to my page.</h1>
        <p>Some text</p>
        <p>Some more text here .....</p>
        
        <!--php tip - Automatic Copyright Year//-->
        <br><br>
        Mahmudul Hasan &copy;
        2014 - <?php echo date("Y"); ?>
        
        <?php //include 'phpAdvanced.php'; ?>
        
        
    </body>
</html>