<?php 

// CREATING DATABASE USING MYSQLi
/*
$servername = "localhost";
$username = "root";
$password = "";

//Create connection 
$conn = new mysqli($servername, $username, $password);
//Check Connnection 
if($conn->connect_error){
    die("Connetion faliled: " . $conn->connect_error);
}

//Create database
$sql = "CREATE DATABASE w3php";
if($conn->query($sql)===TRUE){
    echo "Database Created successfully";
}else{
    echo "Error creating database: " . $conn->error;
}*/

// CREATING MYSQL TABLE USING MYSQLi
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3php";

//create connection 
$conn = new mysqli($servername, $username, $password, $dbname);
//checking connection
if ($conn->connect_error){
    die("Connection faliled " . $conn->connect_error);
}
//sql to create table
$sql = "CREATE TABLE developer("
        . "id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
        . "firstname VARCHAR(30) NOT NULL,"
        . "lastname VARCHAR(30) NOT NULL,"
        . "email VARCHAR(100) NOT NULL,"
        . "age INT(3) NOT NULL,"
        . "red_date TIMESTAMP)";
if($conn->query($sql) === TRUE){
    echo "Table 'developer' created successfully.";
}else{
    echo "Error creating table : " . $conn->error;
}*/

// INSERT DATA INTO MYSQL TABLE USING MYSQLi 
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3php";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection 
if($conn->connect_error){
    die("Connection falied. " . $conn->connect_error);
}
//insert data into developer table
$sql = "INSERT INTO developer (firstname, lastname, email, age)"
        . "VALUES('Sultan', 'Mahmud', 'sm@example.com', 23)";
if($conn->query($sql)===TRUE){
    echo "New record created successfully";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

//PHP GET ID of LAST INSERED DATA
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3php";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection 
if($conn->connect_error){
    die("Connection falied. " . $conn->connect_error);
}
//insert data into developer table
$sql = "INSERT INTO developer (firstname, lastname, email, age)"
        . "VALUES('Sultan', 'Mahmud', 'sm@example.com', 23)";

if($conn->query($sql)===TRUE){
    $last_id = $conn->insert_id;
    echo "New record created successfully. "
    . "Last inserted ID is: " . $last_id;
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

//PHP INSERT MULTPLE RECORDS INT MYSQL
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//insert multiple data into mysql table
$sql = "INSERT INTO developer (firstname, lastname, email, age)"
        . "VALUES('Solaiman', 'Suhan', 'suhan@example.com', 22);";
$sql .= "INSERT INTO developer (firstname, lastname, email, age)"
        . "VALUES('Faruk', 'Hasan', 'Fhasan@gmail.com', 21);";
$sql .= "INSERT INTO developer (firstname, lastname, email, age)"
        . "VALUES('Raju', 'Hasan', 'Rhasan@gmail.com', 22);";
if($conn->multi_query($sql)===TRUE){
    echo "New multiple record successfully";
}else{
    echo "Error : " . $sql . "<br>" . $conn->error;
}*/

//PHP PREPARED STATEMAENTS
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//prepare and bind
$stmt = $conn->prepare("INSERT INTO developer (firstname, lastname, email, age)"
        . "VALUES(?, ?, ?, ?)");
$stmt->bind_param("sssi", $firstname, $lastname, $email, $age);

//set parameter and execute

$firstname = "Barkullah";
$lastname = "Ahmed";
$email = "Bahmed@example.com";
$age = 24;
$stmt->execute();

$firstname = "Shahenur";
$lastname = "Islam";
$email = "Sislam@example.com";
$age = 23;
$stmt->execute();

$firstname = "Rafur";
$lastname = "Rahman";
$email = "Rrahman@example.com";
$age = 23;
$stmt->execute();

$firstname = "Shamim";
$lastname = "Ahmed";
$email = "Shmed@example.com";
$age = 23;
$stmt->execute();

echo "New record successfully";
$stmt->close();*/

//SELECT FROM DATABASE
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstname, lastname FROM developer";
$s_result = $conn->query($sql);
if($s_result->num_rows>0){
    //output data of each row
    while($row = $s_result->fetch_assoc()){
        echo "id: " . $row["id"] . " - Name: " . 
                $row["firstname"] . " " . 
                $row["lastname"] . "<br>";
    }
}else{
    echo "0 results";
}*/

// SELECT FORM DATABASE MYSQLi version 2.0 
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3php";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//chek connection
if($conn->connect_error){
    die("Problem creating connection." . $conn->connect_error);
}

//select data form database with php
$sql = "SELECT id, firstname, lastname FROM developer";
$s_result = $conn->query($sql);
if($s_result->num_rows>0){
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    //output data of each row
    while($row = $s_result->fetch_assoc()){
        echo "<tr><td>" . $row['id'] . "</td>" . 
                "<td>" . $row['firstname'] . " " . $row['lastname'] . "</td></tr>";
    }
    echo "</table>";
}else{
    echo "0 result found";
}*/

//PHP DLELETE FORM MYSQL (procedural)
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3php";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//chek connection
if($conn->connect_error){
    die("Problem creating connection." . $conn->connect_error);
}
$sql = "DELETE FROM developer WHERE id=2";
if(mysqli_query($conn, $sql)){
    echo "Record deleted successfully.";
}else{
    echo "Problem record deleting" . mysqli_error($conn);
}
mysqli_query($conn);
 */

//PHP UPDATING DATA
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3php";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//chek connection
if($conn->connect_error){
    die("Problem creating connection." . $conn->connect_error);
}

$sql = "UPDATE developer SET firstname='John', lastname='Doe'"
        . "WHERE id=7";
if($conn->query($sql) === TRUE){
    echo "record udated successfully";
}else{
    echo "Problem updating record";
}*/

//PHP LIMIT DATA SLECTION
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3php";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//chek connection
if($conn->connect_error){
    die("Problem creating connection." . $conn->connect_error);
}
//SELECT * FROM tbl_name LIMIT 10;
//SELECT * FROM tbl_name LIMIT 10 OFFSET 15; (LIMIT 15, 10);
*/
$conn->close();
?>
