<?php

include 'config.php';

if(isset( $_POST('from1'))){
    try{
        if(empty($_POST('st_name'))){
            throw new Exception("Name can not be empty.");
        }
        if(empty($_POST('st_roll'))){
            throw new Exception("Roll can not be empty.");
        }
        if(empty($_POST('st_age'))){
            throw new Exception("Age can not be empty.");
        }
        if(empty($_POST('st_email'))){
            throw new Exception("Email can not be empty.");
        }
        
        $result = mysql_quer("INSERT INTO tbl_student ('st_name', 'st_roll', 'st_age', 'st_email')"
                . "VALUES('$_POST[st_name]','$_POST[st_roll]', '$_POST[st_age]', '$_POST[st_email]' )");
        
        $success_message = "data has been inserted successfylly.";
        
    } catch (Exception $ex) {
       $error_message = $ex->getMessage(); 
    } 
} 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Data insert page</title>
    </head>
    
    <body>
        <h2>Insert data</h2>
        
        <form action="" method="post">
            <table border="0" cellpadding="2">
            <thead>
                <tr>
                    <th>Name Field</th>
                    <th>Name input</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Name: </td>
                    <td> <input type="text" name="st_name"></td>
                </tr>
                <tr>
                    <td>Roll: </td>
                    <td><input type="text" name="st_roll"></td>
                </tr>
                <tr>
                    <td>Age: </td>
                    <td><input type="text" name="st_age"></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="st_email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="insert" name="form1"></td>
                </tr>
            </tbody>
            </table>
        </form>
                <a href="insert.php">Back to previous page.</a>

    </body>
</html>

