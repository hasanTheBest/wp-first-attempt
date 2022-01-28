<?php
//Example (MySQLi Object-Oriented)
/*
$serverName = "localhost";
$userName = "root";
$password = "";

//Create connnectiuon 
$conn = new mysqli($serverName, $userName, $password);
//Check connection
if ($conn->connect_error){
    die("Connection falied: " . $conn->connect_error);
    
}
echo "Connected successfully."*/

//Example (PDO)
/*
$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    //set the pDO error mode to exceptiuon
    $conn-> setAttribute(PDO::Attr_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Cennected successfully.";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " .$e->getMessage();
    }*/

//Create a MySQK Database Using MySQLi and PDO
    //eExample (MySQLi Obdject-oriented)
/*
$servername = "localhost";
$username = "root";
$password = "";

//Create connection
$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("Connection Failed. " . $conn->connect_erro); 
}

//Create Database

$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === TRUE){
    echo "Database created successfully.";
}else{
    echo "Error createing database: " . $conn_error;
}
$conn->close();*/

    //Example (PDO)
/*
$servername = "localhost";
$username = "root";
$password = "";

try{
    $conn = new 
    PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE myDBPDO";
        //use exec() because no results are returned
        $conn->exec($sql);
        echo "Database created successfully<br>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;*/

//Create a MySQL Table Using MySQli and PDO

    //Example (MySQLi Object-oriented)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'myDB';

$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){
    die("Connection Failed. " . $conn->connect_error);
}
//sql to create table
$sql = "CREATE TABLE MyGuests(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
        . "firstname VARCHAR(30) NOT NULL,"
        . "lastname VARCHAR(30) NOT NULL,"
        . "email VARCHAR(50),"
        . "reg_date TIMESTAMP)";

if($conn->query($sql) === TRUE){
    echo "Table MyGuests created successfully.";
}else{
    echo "Error creating table: " . $conn->error;
}

$conn ->close();
        
?>
