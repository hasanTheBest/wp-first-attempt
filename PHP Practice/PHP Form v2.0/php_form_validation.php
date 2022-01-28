
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    
    <body>
        
        <?php

        //define varables and set to empty values 
        $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
        $name = $email = $gender = $comment= $website = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                $nameErr = "Name is required";
            }else{
                $name = test_input($_POST["name"]);
                if(!preg_match("/^[a-zA-Z ]*$/",$name)){
                    $nameErr = "Only letters and whitespace allowed";
                }
            }
            
            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            }else{
                $email= test_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                     $emailErr = "Email should be valid";
                }   
            }
            if(empty($_POST["comment"])){
                $commentErr = "";
            }else{
                $comment = test_input($_POST["comment"]);
            }
            if(empty($_POST["website"])){
                $websiteErr = "";
            }else{
                $website = test_input($_POST["website"]);
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                    $websiteErr = "Website must be valid";
                }
            }
            if(empty($_POST["gender"])){
                $genderErr = "Gender is required";
            }else{
                $gender = test_input($_POST["gender"]);
            }
            
        }
        
        function test_input($data){
        
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        ?>

        <div><h2>PHP Form Validation</h2></div>
        
        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <span class="error"> * Marked field can't be empty.</span><br><br>
            Name: <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">  * <?php echo $nameErr; ?></span>
            <br><br>
            Email: <input type="text" name="email"  value="<?php echo $email; ?>">
            <span class="error"> * <?php echo $emailErr; ?></span>
            <br><br>
            Website: <input type="text" name="website" value="<?php echo $website; ?>">
            <span class="error"><?php echo $websiteErr; ?></span>
            <br><br>
            Comment: <textarea cols="40" rows="4" name="comment"><?php echo $comment; ?></textarea>
            <span class="error"><?php echo $commentErr; ?></span>
            <br><br>
            Gender: <input type="radio" name="gender" 
                  <?php if(isset($gender) && $gender == "female"){ echo "checked"; }?>
                  value="female">Female
            
           <input type="radio" name="gender"
                  <?php if(isset($gender) && $gender == "male") echo "checked"; ?>
                  value="male">Male 
           <span class="error"> * <?php echo $genderErr; ?></span>
           <br><br>
           <input type="submit" name="submit" value="Submit">
        </form>
        
      <?php
        
      echo '<h2>Your input</h2>';
      
        echo "Name: ".  $name . "<br>";
        echo "Email: ". $email . "<br>";
        echo "Website: ". $website . "<br>";
        echo "Comment: ". $comment. "<br>";
        echo "Gender: ". $gender. "<br>";
      ?> 
        
    </body>
</html>
